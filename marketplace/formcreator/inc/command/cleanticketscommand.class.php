<?php
/**
 * ---------------------------------------------------------------------
 * Formcreator is a plugin which allows creation of custom forms of
 * easy access.
 * ---------------------------------------------------------------------
 * LICENSE
 *
 * This file is part of Formcreator.
 *
 * Formcreator is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Formcreator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Formcreator. If not, see <http://www.gnu.org/licenses/>.
 * ---------------------------------------------------------------------
 * @copyright Copyright © 2011 - 2021 Teclib'
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @link      https://github.com/pluginsGLPI/formcreator/
 * @link      https://pluginsglpi.github.io/formcreator/
 * @link      http://plugins.glpi-project.org/#/plugin/formcreator
 * ---------------------------------------------------------------------
 */

namespace GlpiPlugin\Formcreator\Command;

use ITILFollowup;
use QuerySubQuery;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Ticket;
use Item_Ticket;
use PluginFormcreatorFormAnswer;

class CleanTicketsCommand extends Command
{
   protected function configure() {
      $this
         ->setName('plugins:formcreator:clean_tickets')
         ->setDescription("Clean Tickets having visible HTML tags in their content");
   }

   protected function execute(InputInterface $input, OutputInterface $output) {
      $message = __("Searching for invalid items...", "formcreator");
      $output->writeln("<info>$message</info>");

      $this->fixBadForm_1($input, $output);
      $this->fixBadForm_2($input, $output);
      $this->fixBadForm_3($input, $output);

      $output->writeln("");
      $message = __("Done.", "formcreator");
      $output->writeln("<info>$message</info>");

      return Command::SUCCESS;
   }

   /**
    * Get invalid data using a specific regex pattern to detect invalid content
    *
    * @param string $invalid_content_pattern
    *
    * @return iterable
    */
   protected function getInvalidData(string $invalid_content_pattern): iterable {
      global $DB;

      $item_ticket_table = Item_Ticket::getTable();
      $ticket_table = Ticket::getTable();
      $followup_table = ITILFollowup::getTable();

      // First source: tickets description
      $tickets_query = new QuerySubQuery([
         'SELECT' => [
            new \QueryExpression($DB->quoteValue(Ticket::getType()) . ' AS ' . $DB->quoteName('itemtype')),
            $ticket_table => [Ticket::getIndexName(), 'content']
         ],
         'FROM' => $ticket_table,
         'INNER JOIN' => [
            $item_ticket_table => [
               'FKEY' => [
                  $ticket_table => Ticket::getIndexName(),
                  $item_ticket_table => Ticket::getForeignKeyField(),
               ],
               'AND' => [
                  "$item_ticket_table.itemtype" => PluginFormcreatorFormAnswer::getType(),
               ]
            ],
         ],
         'WHERE' => [
            "$ticket_table.content" => ['LIKE', '%' . $invalid_content_pattern . '%'],
         ],
      ]);

      // Second source: tickets that where merged into other tickets as a followup
      // These followups may have been a former ticket generated by formcreator
      $followup_query = new QuerySubquery([
         'SELECT' => [
            new \QueryExpression($DB->quoteValue(ITILFollowup::getType()) . ' AS ' . $DB->quoteName('itemtype')),
            ITILFollowup::getIndexName(),
            'content'
         ],
         'FROM' => $followup_table,
         'WHERE' => [
            "sourceitems_id" => [">", 0], // Former tickets merged as followups
            "$followup_table.content" => ['LIKE', '%' . $invalid_content_pattern . '%'],
         ],
      ]);

      return $DB->request(new \QueryUnion([$tickets_query, $followup_query]));
   }

   /**
    * fix HTML tags double encoded
    * <p> => &lt;p&gt; => &#38;lt;p&#38;gt;
    *
    * @param InputInterface $input
    * @param OutputInterface $output
    * @return void
    */
   protected function fixBadForm_1(InputInterface $input, OutputInterface $output) {
      global $DB;

      // Print step info
      $output->writeln("");
      $message = __("Step 1: double encoded < and > signs.", "formcreator");
      $output->writeln("<info>$message</info>");

      // Search tickets having HTML tags in content in the following form
      // &#38;lt;p&#38;gt;Hello world&#38;lt;/p&#38;gt;
      // Hello world is between <p> and </p>, but with wrong escaping
      $items = $this->getInvalidData('&#38;lt;'); // Matches bad encoding for '<'

      // No items found, nothing to do
      $count = $items->count();
      if ($count === 0) {
         $output->writeln(__("No invalid items found.", "formcreator"));
         return;
      }

      // Init progress bar
      $output->writeln(__("Found $count item(s) to clean.", "formcreator"));
      $progress_bar = new ProgressBar($output);

      foreach ($progress_bar->iterate($items) as $item) {
         $pattern = [
            '/&#38;lt;([a-z0-9]+?)&#38;gt;/',
            '/&#38;lt;(\/[a-z0-9]+?)&#38;gt;/',
         ];
         $replace = [
            '&#60;$1&#62;',
            '&#60;$1&#62;',
         ];
         $item['content'] = preg_replace($pattern, $replace, $item['content']);

         // Direct write to the table to avoid alteration of other fields
         $DB->update(
            $item['itemtype']::getTable(),
            ['content' => $DB->escape($item['content'])],
            ['id' => $item['id']]
         );
      }
      $output->writeln("");
   }

   /**
    * replace litteral HTML tag <br /> with &lt;br /&gt;
    *
    * @param InputInterface $input
    * @param OutputInterface $output
    * @return void
    */
   protected function fixBadForm_2(InputInterface $input, OutputInterface $output) {
      global $DB;

      // Print step info
      $output->writeln("");
      $message = __("Step 2: literal BR tag.", "formcreator");
      $output->writeln("<info>$message</info>");

      // Search tickets having HTML tags <br />
      $items = $this->getInvalidData('<br />'); // Matches bad encoding for 'br /'

      // No items found, nothing to do
      $count = $items->count();
      if ($count === 0) {
         $output->writeln(__("No invalid items found.", "formcreator"));
         return;
      }

      // Init progress bar
      $output->writeln(__("Found $count item(s) to clean.", "formcreator"));
      $progress_bar = new ProgressBar($output);

      foreach ($progress_bar->iterate($items) as $item) {
         $pattern = [
            '<br />',
         ];
         // Determine if we must use legacy or new encoding
         // @see Sanitizer::sanitize()
         $replace = null;
         if (strpos($item['content'], '&lt;') !== false && strpos($item['content'], '#60;') === false) {
            $replace = [
               '&lt;br /&gt;',
            ];
         } else if (strpos($item['content'], '#60') !== false && strpos($item['content'], '&lt;') === false) {
            $replace = [
               '&#60;br /&#62;',
            ];
         }
         if ($replace === null) {
            $message = __('Unable to determine the encoding type of item ID: %1$d', "formcreator");
            $output->writeln("<error>" . sprintf($message, $item['id']) . "</error>");
            continue;
         }
         $item['content'] = str_replace($pattern, $replace, $item['content']);

         // Direct write to the table to avoid alteration of other fields
         $DB->update(
            $item['itemtype']::getTable(),
            ['content' => $DB->escape($item['content'])],
            ['id' => $item['id']]
         );
      }
      $output->writeln("");
   }

   /**
    * replace litteral HTML tag > with #38;
    * This may happen when a question gives the path to an item of a CommonTreeObject
    * entities, locations, ...
    *
    * @param InputInterface $input
    * @param OutputInterface $output
    * @return void
    */
   protected function fixBadForm_3(InputInterface $input, OutputInterface $output) {
      global $DB;

      // Print step info
      $output->writeln("");
      $message = __("Step 3: litteral > sign.", "formcreator");
      $output->writeln("<info>$message</info>");

      // Search tickets having HTML tags <br />
      $items = $this->getInvalidData(' > ');

      // No items found, nothing to do
      $count = $items->count();
      if ($count === 0) {
         $output->writeln(__("No invalid items found.", "formcreator"));
         return;
      }

      // Init progress bar
      $output->writeln(__("Found $count item(s) to clean.", "formcreator"));
      $progress_bar = new ProgressBar($output);

      foreach ($progress_bar->iterate($items) as $item) {
         $pattern = [
            ' > ',
         ];
         // Determine if we must use legacy or new encoding
         // @see Sanitizer::sanitize()
         $replace = null;
         if (strpos($item['content'], '&lt;') !== false && strpos($item['content'], '#60;') === false) {
            $replace = [
               ' &gt; ',
            ];
         } else if (strpos($item['content'], '#60') !== false && strpos($item['content'], '&lt;') === false) {
            $replace = [
               ' &#38; ',
            ];
         }
         if ($replace === null) {
            $message = __('Unable to determine the encoding type of item ID: %1$d', "formcreator");
            $output->writeln("<error>" . sprintf($message, $item['id']) . "</error>");
            continue;
         }
         $item['content'] = str_replace($pattern, $replace, $item['content']);

         // Direct write to the table to avoid alteration of other fields
         $DB->update(
            $item['itemtype']::getTable(),
            ['content' => $DB->escape($item['content'])],
            ['id' => $item['id']]
         );
      }
      $output->writeln("");
   }
}