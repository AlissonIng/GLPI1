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

/* components/logs.html.twig */
class __TwigTemplate_27e33812626bfbad417f7407e88bc83d extends Template
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
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/logs.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        if ((($context["total_number"] ?? null) < 1)) {
            // line 37
            yield "   <div class=\"alert alert-info\">
      ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No historical"), "html", null, true);
            yield "
   </div>
";
        } else {
            // line 41
            yield "
   ";
            // line 42
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/pager.html.twig", ["count" => ($context["filtered_number"] ?? null)]);
            yield "
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
            <th>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ID"), "html", null, true);
            yield "</th>
            <th>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Date", "Dates", 1), "html", null, true);
            yield "</th>
            <th>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            yield "</th>
            <th>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Field", "Fields", 1), "html", null, true);
            yield "</th>
            <th>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("name", "Update"), "html", null, true);
            yield "</th>
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_log_filters ";
            // line 54
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) ? ("btn-secondary active") : ("btn-outline-secondary"));
            yield "\">
                     <i class=\"fas fa-filter\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter"), "html", null, true);
            yield "</span>
                  </button>
                  <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csv_url"] ?? null), "html", null, true);
            yield "\" class=\"btn btn-sm text-capitalize btn-icon btn-outline-secondary\">
                     <i class=\"fas fa-file-download\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Export"), "html", null, true);
            yield "</span>
                  </a>
               </span>
            </th>
         </tr>

         ";
            // line 66
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["filters"] ?? null)) > 0)) {
                // line 67
                yield "         <tr class=\"log_history_filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["items_id"] ?? null), "html", null, true);
                yield "\" />
            </td>
            <td>
               ";
                // line 73
                yield CoreExtension::callMacro($macros["fields"], "macro_dateField", ["filters[date]", (($__internal_compile_0 =                 // line 75
($context["filters"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["date"] ?? null) : null), "", ["no_label" => true, "full_width" => true, "mb" => ""]], 73, $context, $this->getSourceContext());
                // line 82
                yield "
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["user_names"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["username"]) {
                    // line 87
                    yield "                     <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["value"]), "html", null, true);
                    yield "\" ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "users_names", [], "array", true, true, false, 87) && CoreExtension::inFilter($context["value"], (($__internal_compile_1 = ($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_names"] ?? null) : null)))) ? ("selected") : (""));
                    yield ">
                        ";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["username"]), "html", null, true);
                    yield "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['username'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                yield "               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["affected_fields"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["field"]) {
                    // line 96
                    yield "                     <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\" ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "affected_fields", [], "array", true, true, false, 96) && CoreExtension::inFilter($context["value"], (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["affected_fields"] ?? null) : null)))) ? ("selected") : (""));
                    yield ">
                        ";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                    yield "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                yield "               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["linked_actions"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["action"]) {
                    // line 105
                    yield "                     <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "\" ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "linked_actions", [], "array", true, true, false, 105) && CoreExtension::inFilter($context["value"], (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["linked_actions"] ?? null) : null)))) ? ("selected") : (""));
                    yield ">
                        ";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                    yield "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                yield "               </select>
            </td>
         </tr>
         ";
            }
            // line 113
            yield "
      </thead>
      <tbody>
      ";
            // line 116
            if ((($context["filtered_number"] ?? null) < 1)) {
                // line 117
                yield "         <tr><td colspan=\"6\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No historical matching your filters"), "html", null, true);
                yield "</td></tr>
      ";
            } else {
                // line 119
                yield "         ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 120
                    yield "            <tr>
               <td>";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["entry"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                    yield "</td>
               <td>";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = $context["entry"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_mod"] ?? null) : null), "html", null, true);
                    yield "</td>
               <td>";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = $context["entry"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["user_name"] ?? null) : null)), "html", null, true);
                    yield "</td>
               <td>";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = $context["entry"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["field"] ?? null) : null)), "html", null, true);
                    yield "</td>
               <td colspan=\"2\" style=\"width: 60%\">";
                    // line 125
                    yield (($__internal_compile_8 = $context["entry"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["change"] ?? null) : null);
                    yield "</td>
            </tr>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                yield "      ";
            }
            // line 129
            yield "      </tbody>
   </table>
   </div>";
            // line 132
            yield "
   ";
            // line 133
            $context["limitdropdown"] = Twig\Extension\CoreExtension::include($this->env, $context, "components/dropdown/limit.html.twig");
            // line 134
            yield "   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2\">
      ";
            // line 135
            yield Twig\Extension\CoreExtension::sprintf(__("Show %s entries"), ($context["limitdropdown"] ?? null));
            yield "
   </div>
";
        }
        // line 138
        yield "


<script type=\"text/javascript\">
\$(function() {
   \$('.logs-filter-select-multiple').select2();
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/logs.html.twig";
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
        return array (  281 => 138,  275 => 135,  272 => 134,  270 => 133,  267 => 132,  263 => 129,  260 => 128,  251 => 125,  247 => 124,  243 => 123,  239 => 122,  235 => 121,  232 => 120,  227 => 119,  221 => 117,  219 => 116,  214 => 113,  208 => 109,  199 => 106,  192 => 105,  188 => 104,  182 => 100,  173 => 97,  166 => 96,  162 => 95,  156 => 91,  147 => 88,  140 => 87,  136 => 86,  130 => 82,  128 => 75,  127 => 73,  121 => 70,  116 => 67,  114 => 66,  105 => 60,  100 => 58,  95 => 56,  90 => 54,  84 => 51,  80 => 50,  76 => 49,  72 => 48,  68 => 47,  60 => 42,  57 => 41,  51 => 38,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% import 'components/form/fields_macros.html.twig' as fields %}

{% if total_number < 1 %}
   <div class=\"alert alert-info\">
      {{ __('No historical') }}
   </div>
{% else %}

   {{ include('components/pager.html.twig', {count: filtered_number}) }}
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
            <th>{{ __('ID') }}</th>
            <th>{{ _n('Date', 'Dates', 1) }}</th>
            <th>{{ 'User'|itemtype_name }}</th>
            <th>{{ _n('Field', 'Fields', 1) }}</th>
            <th>{{ _x('name', 'Update') }}</th>
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_log_filters {{ filters|length > 0 ? 'btn-secondary active' : 'btn-outline-secondary' }}\">
                     <i class=\"fas fa-filter\"></i>
                     <span class=\"d-none d-xl-block\">{{ __('Filter') }}</span>
                  </button>
                  <a href=\"{{ csv_url }}\" class=\"btn btn-sm text-capitalize btn-icon btn-outline-secondary\">
                     <i class=\"fas fa-file-download\"></i>
                     <span class=\"d-none d-xl-block\">{{ __('Export') }}</span>
                  </a>
               </span>
            </th>
         </tr>

         {% if filters|length > 0  %}
         <tr class=\"log_history_filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"{{ items_id }}\" />
            </td>
            <td>
               {{ fields.dateField(
                  'filters[date]',
                  filters['date'],
                  '',
                  {
                     no_label: true,
                     full_width: true,
                     mb: '',
                  },
               ) }}
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  {% for value, username in user_names %}
                     <option value=\"{{ value|verbatim_value }}\" {{ filters['users_names'] is defined and value in filters['users_names'] ? 'selected' : '' }}>
                        {{ username|verbatim_value }}
                     </option>
                  {% endfor %}
               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  {% for value, field in affected_fields %}
                     <option value=\"{{ value }}\" {{ filters['affected_fields'] is defined and value in filters['affected_fields'] ? 'selected' : '' }}>
                        {{ field }}
                     </option>
                  {% endfor %}
               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  {% for value, action in linked_actions %}
                     <option value=\"{{ value }}\" {{ filters['linked_actions'] is defined and value in filters['linked_actions'] ? 'selected' : '' }}>
                        {{ action }}
                     </option>
                  {% endfor %}
               </select>
            </td>
         </tr>
         {% endif %}

      </thead>
      <tbody>
      {% if filtered_number < 1 %}
         <tr><td colspan=\"6\">{{ __('No historical matching your filters') }}</td></tr>
      {% else %}
         {% for entry in logs %}
            <tr>
               <td>{{ entry['id'] }}</td>
               <td>{{ entry['date_mod'] }}</td>
               <td>{{ entry['user_name']|verbatim_value }}</td>
               <td>{{ entry['field']|verbatim_value }}</td>
               <td colspan=\"2\" style=\"width: 60%\">{{ entry['change']|raw }}</td>
            </tr>
         {% endfor %}
      {% endif %}
      </tbody>
   </table>
   </div>{# .table-responsive #}

   {% set limitdropdown = include('components/dropdown/limit.html.twig') %}
   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2\">
      {{ __('Show %s entries')|format(limitdropdown)|raw }}
   </div>
{% endif %}



<script type=\"text/javascript\">
\$(function() {
   \$('.logs-filter-select-multiple').select2();
});
</script>
", "components/logs.html.twig", "/var/www/glpi/templates/components/logs.html.twig");
    }
}
