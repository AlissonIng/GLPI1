<?php

/**
 * -------------------------------------------------------------------------
 * Order plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Order.
 *
 * Order is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * Order is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Order. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2009-2023 by Order plugin team.
 * @license   GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link      https://github.com/pluginsGLPI/order
 * -------------------------------------------------------------------------
 */

if (!defined('GLPI_ROOT')) {
    die("Sorry. You can't access directly to this file");
}

// Class for a Dropdown
class PluginOrderOrderState extends CommonDropdown
{
    public static $rightname = 'plugin_order_order';

    public static function getTypeName($nb = 0)
    {
        return __("Order status", "order");
    }

    public function pre_deleteItem()
    {
        return true;
    }

    /**
     * Get the icon for a given state
     *
     * @param int $state_id
     * @return string HTML for the icon
     */
    public static function getStateIcon($state_id)
{
    $state = self::getStateData($state_id);

    if (!$state) {
        return ''; // No icon found
    }

    $icon_class = $state['icon_class'];
    $label = $state['name'];
    $color = !empty($state['color']) ? $state['color'] : 'black'; // Default color if not set

    // Aplicar el color al ícono
    return "<i class='fas fa-$icon_class me-1' style='color: $color;' title='$label' data-bs-toggle='tooltip'></i>";
}
    /**
     * Fetch state data from the database
     *
     * @param int $state_id
     * @return array|null
     */
private static function getStateData($state_id)
{
    global $DB;

    // Escapar el parámetro para evitar inyecciones SQL
    $state_id = $DB->escape($state_id);

    $query = "SELECT name, icon_class, color FROM glpi_plugin_order_orderstates WHERE id = $state_id";
    $result = $DB->query($query);

    if ($result && $row = $DB->fetchAssoc($result)) {
        return $row;
    }

    return null;
}
    public static function install(Migration $migration)
    {
        /** @var \DBmysql $DB */
        global $DB;

        $default_charset = DBConnection::getDefaultCharset();
        $default_collation = DBConnection::getDefaultCollation();
        $default_key_sign = DBConnection::getDefaultPrimaryKeySignOption();

        $table = self::getTable();

        // Drop old table if exists
        $DB->query("DROP TABLE IF EXISTS `glpi_dropdown_plugin_order_status`;");

        // Create table if not exists
        if (!$DB->tableExists($table)) {
            $migration->displayMessage("Installing $table");

 $query = "CREATE TABLE IF NOT EXISTS `glpi_plugin_order_orderstates` (
    `id` int {$default_key_sign} NOT NULL auto_increment,
    `name` varchar(255) default NULL,
    `icon_class` varchar(255) default NULL,
    `color` varchar(255) default NULL,  // Agrega la columna 'color'
    `comment` text,
    PRIMARY KEY  (`id`),
    KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET={$default_charset} COLLATE={$default_collation} ROW_FORMAT=DYNAMIC;";
            $DB->query($query) or die($DB->error());
        }
$state = new self();
foreach (
    [
        2 => ["name" => "01 - Esperando aprobación", "icon" => "clock", "color" => "orange"],
        4 => ["name" => "07 - Pendiente Entrega al Servicio", "icon" => "truck", "color" => "blue"],
        5 => ["name" => "09 - Entregado", "icon" => "check-circle", "color" => "green"],
        6 => ["name" => "10 - Cancelado", "icon" => "times-circle", "color" => "red"],
        9 => ["name" => "02 - Proceso de cotización", "icon" => "file-invoice", "color" => "purple"],
        10 => ["name" => "06 - Pendiente Entrega por Proveedor", "icon" => "box-open", "color" => "teal"],
        11 => ["name" => "08 - Entrega parcial", "icon" => "boxes", "color" => "yellow"],
        12 => ["name" => "04 - Pendiente Aprobación Financiera", "icon" => "dollar-sign", "color" => "gold"],
        13 => ["name" => "05 - Orden de compra", "icon" => "file-signature", "color" => "brown"],
        14 => ["name" => "03 - Pendiente Información por Solicitante", "icon" => "info-circle", "color" => "cyan"],
    ] as $id => $data
) {
    if (!countElementsInTable($table, ['id' => $id])) {
        $state->add([
            'id'         => $id,
            'name'       => Toolbox::addslashes_deep($data['name']),
            'icon_class' => Toolbox::addslashes_deep($data['icon']),
            'color'      => Toolbox::addslashes_deep($data['color']),  // Asegúrate de agregar esta columna
        ]);
    }
}
} 

public static function getDropdown($options = [])
{
    global $DB;

    $values = [];
    $query = "SELECT id, name, icon_class, color FROM glpi_plugin_order_orderstates";
    $result = $DB->query($query);

    while ($row = $DB->fetchAssoc($result)) {
        $icon = !empty($row['icon_class']) ? "<i class='fas fa-{$row['icon_class']}' style='color: {$row['color']};'></i> " : '';
        $values[$row['id']] = $icon . $row['name'];
    }

    return Dropdown::showFromArray(
        $options['name'] ?? 'dropdown',
        $values,
        $options
    );
}


    public static function uninstall()
    {
        /** @var \DBmysql $DB */
        global $DB;
        $DB->query("DROP TABLE IF EXISTS `" . self::getTable() . "`") or die($DB->error());
    }
}
