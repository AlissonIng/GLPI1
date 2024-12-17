<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/itilobject/add_items.html.twig */
class __TwigTemplate_b36ef8b6a88964e1c38779ef91898611 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "
<div id=\"itemAddForm";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 35
        if (($context["can_edit"] ?? null)) {
            // line 36
            yield "      ";
            yield ($context["my_items_dropdown"] ?? null);
            yield "
      ";
            // line 37
            yield ($context["all_items_dropdown"] ?? null);
            yield "
      <a href=\"javascript:itemAction";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "('add');\" class=\"btn btn-sm btn-outline-secondary\">
         <i class=\"fas fa-plus\"></i>
         <span>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
            yield "</span>
      </a>
   ";
        }
        // line 43
        yield "
   ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items_to_add"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_to_add"]) {
            // line 45
            yield "      ";
            yield $context["item_to_add"];
            yield "
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_to_add'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "
   ";
        // line 48
        if ((($context["count"] ?? null) == 0)) {
            // line 49
            yield "      <input type=\"hidden\" value=\"0\" name=\"items_id\">
   ";
        }
        // line 51
        yield "
   ";
        // line 52
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 52) > 0) && (($context["usedcount"] ?? null) != ($context["count"] ?? null)))) {
            // line 53
            yield "      <i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_n("%1\$s item not saved", "%1\$s items not saved", (($context["count"] ?? null) - ($context["usedcount"] ?? null))), (($context["count"] ?? null) - ($context["usedcount"] ?? null))), "html", null, true);
            yield "</i>
   ";
        }
        // line 55
        yield "   ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 55) > 0) && (($context["usedcount"] ?? null) > 5))) {
            // line 56
            yield "      <i><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 56)), "html", null, true);
            yield "&amp;forcetab=Item_Ticket\$1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((__("Display all items") . "(") . ($context["usedcount"] ?? null)) . ")"), "html", null, true);
            yield "</a></i>
   ";
        }
        // line 58
        yield "   <script>
      function refreshItemCounter";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "() {
         const item_form = \$(\"#itemAddForm";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\");
         let item_count = item_form.find('input[type=\"hidden\"][name^=\"items_id[\"]').length;
         item_form.closest('.accordion-item').find('.item-counter').text(item_count);
      }

      function itemAction";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(action, itemtype, items_id) {
          if (itemtype === undefined && items_id === undefined) {
              const my_items_dropdown = \$('#dropdown_my_items";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
              if (my_items_dropdown.length > 0) {
                 const val = my_items_dropdown.val();
                 if (val && val.includes('_')) {
                    itemtype = val.split('_')[0];
                    items_id = val.split('_')[1];
                 }
              }
              if (itemtype === undefined && items_id === undefined) {
                  const dropdown_itemtype = \$('#dropdown_itemtype";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                  const dropdown_items_id = \$('#dropdown_add_items_id";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "');
                  if (dropdown_itemtype.length > 0 && dropdown_items_id.length > 0) {
                      itemtype = dropdown_itemtype.val();
                      items_id = dropdown_items_id.val();
                  }
              }
          }
         if (!itemtype || !items_id) {
            glpi_toast_error(";
        // line 85
        yield json_encode(__("Please select an item to add"));
        yield ");
            return;
         }
         \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itemTicket.php',
            dataType: 'html',
            data: {
               'action': action,
               'rand': ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ",
               'params': ";
        // line 94
        yield json_encode(($context["opt"] ?? null));
        yield ",
               'my_items': \$('#dropdown_my_items";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').val(),
               'itemtype': itemtype,
               'items_id': items_id,
            },
            success: function(response) {
               \$(\"#itemAddForm";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\").replaceWith(response);
            }
         });
      }
      refreshItemCounter";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "();
   </script>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/add_items.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  195 => 104,  188 => 100,  180 => 95,  176 => 94,  172 => 93,  161 => 85,  150 => 77,  146 => 76,  134 => 67,  129 => 65,  121 => 60,  117 => 59,  114 => 58,  106 => 56,  103 => 55,  97 => 53,  95 => 52,  92 => 51,  88 => 49,  86 => 48,  83 => 47,  74 => 45,  70 => 44,  67 => 43,  61 => 40,  56 => 38,  52 => 37,  47 => 36,  45 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2024 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

<div id=\"itemAddForm{{ rand }}\">
   {% if can_edit %}
      {{ my_items_dropdown|raw }}
      {{ all_items_dropdown|raw }}
      <a href=\"javascript:itemAction{{ rand }}('add');\" class=\"btn btn-sm btn-outline-secondary\">
         <i class=\"fas fa-plus\"></i>
         <span>{{ _x('button', 'Add') }}</span>
      </a>
   {% endif %}

   {% for item_to_add in items_to_add %}
      {{ item_to_add|raw }}
   {% endfor %}

   {% if count == 0 %}
      <input type=\"hidden\" value=\"0\" name=\"items_id\">
   {% endif %}

   {% if params.id > 0 and usedcount != count %}
      <i>{{ _n('%1\$s item not saved', '%1\$s items not saved', (count - usedcount))|format((count - usedcount)) }}</i>
   {% endif %}
   {% if params.id > 0 and usedcount > 5 %}
      <i><a href=\"{{ 'Ticket'|itemtype_form_path(params.id) }}&amp;forcetab=Item_Ticket\$1\">{{ __('Display all items') ~ '(' ~ usedcount ~ ')' }}</a></i>
   {% endif %}
   <script>
      function refreshItemCounter{{ rand }}() {
         const item_form = \$(\"#itemAddForm{{ rand }}\");
         let item_count = item_form.find('input[type=\"hidden\"][name^=\"items_id[\"]').length;
         item_form.closest('.accordion-item').find('.item-counter').text(item_count);
      }

      function itemAction{{ rand }}(action, itemtype, items_id) {
          if (itemtype === undefined && items_id === undefined) {
              const my_items_dropdown = \$('#dropdown_my_items{{ rand }}');
              if (my_items_dropdown.length > 0) {
                 const val = my_items_dropdown.val();
                 if (val && val.includes('_')) {
                    itemtype = val.split('_')[0];
                    items_id = val.split('_')[1];
                 }
              }
              if (itemtype === undefined && items_id === undefined) {
                  const dropdown_itemtype = \$('#dropdown_itemtype{{ rand }}');
                  const dropdown_items_id = \$('#dropdown_add_items_id{{ rand }}');
                  if (dropdown_itemtype.length > 0 && dropdown_items_id.length > 0) {
                      itemtype = dropdown_itemtype.val();
                      items_id = dropdown_items_id.val();
                  }
              }
          }
         if (!itemtype || !items_id) {
            glpi_toast_error({{ __('Please select an item to add')|json_encode|raw }});
            return;
         }
         \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itemTicket.php',
            dataType: 'html',
            data: {
               'action': action,
               'rand': {{ rand }},
               'params': {{ opt|json_encode|raw }},
               'my_items': \$('#dropdown_my_items{{ rand }}').val(),
               'itemtype': itemtype,
               'items_id': items_id,
            },
            success: function(response) {
               \$(\"#itemAddForm{{ rand }}\").replaceWith(response);
            }
         });
      }
      refreshItemCounter{{ rand }}();
   </script>
</div>
", "components/itilobject/add_items.html.twig", "/var/www/glpi/templates/components/itilobject/add_items.html.twig");
    }
}
