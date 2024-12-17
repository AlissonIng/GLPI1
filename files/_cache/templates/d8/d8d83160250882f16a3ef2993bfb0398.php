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

/* @fields/status_overrides.html.twig */
class __TwigTemplate_a6830513d4e043175c9050c7f714df7b extends Template
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
        // line 28
        yield "
";
        // line 29
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/status_overrides.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 31
        yield "
<div id=\"container";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"asset ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg"] ?? null), "html", null, true);
        yield "\">

   <div class='alert alert-primary d-flex align-items-center' role='alert'>
      <i class='fas fa-info-circle fa-xl'></i>
      <span class='ms-2'>
         ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Here you can redefine the following options :"), "html", null, true);
        yield "
         <ul>
            <li><i> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mandatory"), "html", null, true);
        yield " </i></li>
            <li><i>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Read-only"), "html", null, true);
        yield " </i></li>
         </ul>
         ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("for each field, depending on the states of the element attached to the container."), "html", null, true);
        yield "
      </span>
   </div>

   ";
        // line 46
        if (($context["has_fields"] ?? null)) {
            // line 47
            yield "      <div class=\"d-flex align-items-start mb-3\">
         <button class=\"btn btn-primary me-2\"
                 type=\"button\"
                 name=\"switch_add\"
                 data-container-id=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "\">
            <i class=\"far fa-plus\"></i>
            <span>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add new status override", "fields"), "html", null, true);
            yield "</span>
         </button>
      </div>
   ";
        }
        // line 57
        yield "
   ";
        // line 58
        yield CoreExtension::callMacro($macros["fields"], "macro_largeTitle", [__("Status overrides", "fields"), "", false], 58, $context, $this->getSourceContext());
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <table class=\"table\">
                     <thead>
                        <tr>
                           <th>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item type"), "html", null, true);
        yield "</th>
                           <th>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field"), "html", null, true);
        yield "</th>
                           <th>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "html", null, true);
        yield "</th>
                           <th>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mandatory"), "html", null, true);
        yield "</th>
                           <th>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Read only"), "html", null, true);
        yield "</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        ";
        // line 76
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["overrides"] ?? null)) > 0)) {
            // line 77
            yield "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["overrides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
                // line 78
                yield "                              <tr>
                                 <td>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "itemtype", [], "any", false, false, false, 79), "html", null, true);
                yield "</td>
                                 <td>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "field_name", [], "any", false, false, false, 80), "html", null, true);
                yield "</td>
                                 <td>";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "status_names", [], "any", false, false, false, 81), ", "), "html", null, true);
                yield "</td>
                                 <td>";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["override"], "mandatory", [], "any", false, false, false, 82)) ? (__("Yes")) : (__("No"))), "html", null, true);
                yield "</td>
                                 <td>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["override"], "is_readonly", [], "any", false, false, false, 83)) ? (__("Yes")) : (__("No"))), "html", null, true);
                yield "</td>
                                 <td>
                                    <form class=\"d-inline\" method=\"post\" action=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsStatusOverride"), "html", null, true);
                yield "\">
                                       <input type=\"hidden\" name=\"id\" value=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["override"], "id", [], "any", false, false, false, 86), "html", null, true);
                yield "\" />
                                       <input type=\"hidden\" name=\"container_id\" value=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
                yield "\" />
                                       <button type=\"button\" class=\"btn btn-sm btn-primary\" name=\"edit\"
                                               title=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Edit"), "html", null, true);
                yield "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-pencil\"></i>
                                       </button>
                                       <button type=\"submit\" class=\"btn btn-sm btn-danger\" name=\"delete\"
                                               title=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                yield "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-trash\"></i>
                                       </button>
                                       <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
                                    </form>
                                 </td>
                              </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['override'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "                        ";
        } else {
            // line 104
            yield "                           <tr>
                              <td colspan=\"6\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No item found", "fields"), "html", null, true);
            yield "</td>
                           </tr>
                        ";
        }
        // line 108
        yield "                     </tbody>
                  </table>
               </div> ";
        // line 111
        yield "            </div> ";
        // line 112
        yield "         </div> ";
        // line 113
        yield "      </div>
   </div> ";
        // line 115
        yield "   <script>
      \$(document).ready(() => {
         \$('#container";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', 'button[name=\"edit\"]', (e) => {
            const button = \$(e.currentTarget);
            const row = button.closest('tr');
            const id = row.find('input[name=\"id\"]').val();
            const container_id = row.find('input[name=\"container_id\"]').val();

            glpi_ajax_dialog(
               {
                  title: __('Edit status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_edit_form',
                     id: id,
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });

         \$('#container";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', 'button[name=\"switch_add\"]', (e) => {
            const button = \$(e.currentTarget);
            const container_id = button.attr('data-container-id');

            glpi_ajax_dialog(
               {
                  title: __('Add new status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_add_form',
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });
      });
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
        return "@fields/status_overrides.html.twig";
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
        return array (  259 => 138,  235 => 117,  231 => 115,  228 => 113,  226 => 112,  224 => 111,  220 => 108,  214 => 105,  211 => 104,  208 => 103,  197 => 98,  190 => 94,  182 => 89,  177 => 87,  173 => 86,  169 => 85,  164 => 83,  160 => 82,  156 => 81,  152 => 80,  148 => 79,  145 => 78,  140 => 77,  138 => 76,  130 => 71,  126 => 70,  122 => 69,  118 => 68,  114 => 67,  102 => 58,  99 => 57,  92 => 53,  87 => 51,  81 => 47,  79 => 46,  72 => 42,  67 => 40,  63 => 39,  58 => 37,  48 => 32,  45 => 31,  43 => 30,  41 => 29,  38 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # -------------------------------------------------------------------------
 # Fields plugin for GLPI
 # -------------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of Fields.
 #
 # Fields is free software; you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation; either version 2 of the License, or
 # (at your option) any later version.
 #
 # Fields is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with Fields. If not, see <http://www.gnu.org/licenses/>.
 # -------------------------------------------------------------------------
 # @copyright Copyright (C) 2013-2023 by Fields plugin team.
 # @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 # @link      https://github.com/pluginsGLPI/fields
 # -------------------------------------------------------------------------
 #}

{% import 'components/form/fields_macros.html.twig' as fields %}
{% set rand = random() %}

<div id=\"container{{ rand }}\" class=\"asset {{ bg }}\">

   <div class='alert alert-primary d-flex align-items-center' role='alert'>
      <i class='fas fa-info-circle fa-xl'></i>
      <span class='ms-2'>
         {{ __(\"Here you can redefine the following options :\") }}
         <ul>
            <li><i> {{__(\"Mandatory\") }} </i></li>
            <li><i>{{ __(\"Read-only\") }} </i></li>
         </ul>
         {{ __(\"for each field, depending on the states of the element attached to the container.\") }}
      </span>
   </div>

   {% if has_fields %}
      <div class=\"d-flex align-items-start mb-3\">
         <button class=\"btn btn-primary me-2\"
                 type=\"button\"
                 name=\"switch_add\"
                 data-container-id=\"{{ container_id }}\">
            <i class=\"far fa-plus\"></i>
            <span>{{ __('Add new status override', 'fields') }}</span>
         </button>
      </div>
   {% endif %}

   {{ fields.largeTitle(__('Status overrides', 'fields'), '', false) }}
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <table class=\"table\">
                     <thead>
                        <tr>
                           <th>{{ __('Item type') }}</th>
                           <th>{{ __('Field') }}</th>
                           <th>{{ __('Status') }}</th>
                           <th>{{ __('Mandatory') }}</th>
                           <th>{{ __('Read only') }}</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        {% if overrides|length > 0 %}
                           {% for override in overrides %}
                              <tr>
                                 <td>{{ override.itemtype }}</td>
                                 <td>{{ override.field_name }}</td>
                                 <td>{{ override.status_names|join(', ') }}</td>
                                 <td>{{ override.mandatory ? __('Yes') : __('No') }}</td>
                                 <td>{{ override.is_readonly ? __('Yes') : __('No') }}</td>
                                 <td>
                                    <form class=\"d-inline\" method=\"post\" action=\"{{ 'PluginFieldsStatusOverride'|itemtype_form_path }}\">
                                       <input type=\"hidden\" name=\"id\" value=\"{{ override.id }}\" />
                                       <input type=\"hidden\" name=\"container_id\" value=\"{{ container_id }}\" />
                                       <button type=\"button\" class=\"btn btn-sm btn-primary\" name=\"edit\"
                                               title=\"{{ _x('button', 'Edit') }}\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-pencil\"></i>
                                       </button>
                                       <button type=\"submit\" class=\"btn btn-sm btn-danger\" name=\"delete\"
                                               title=\"{{ _x('button', 'Delete permanently') }}\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-trash\"></i>
                                       </button>
                                       <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
                                    </form>
                                 </td>
                              </tr>
                           {% endfor %}
                        {% else %}
                           <tr>
                              <td colspan=\"6\">{{ __('No item found', 'fields') }}</td>
                           </tr>
                        {% endif %}
                     </tbody>
                  </table>
               </div> {# .row #}
            </div> {# .row #}
         </div> {# .flex-row #}
      </div>
   </div> {# .card-body #}
   <script>
      \$(document).ready(() => {
         \$('#container{{ rand }}').on('click', 'button[name=\"edit\"]', (e) => {
            const button = \$(e.currentTarget);
            const row = button.closest('tr');
            const id = row.find('input[name=\"id\"]').val();
            const container_id = row.find('input[name=\"container_id\"]').val();

            glpi_ajax_dialog(
               {
                  title: __('Edit status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_edit_form',
                     id: id,
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });

         \$('#container{{ rand }}').on('click', 'button[name=\"switch_add\"]', (e) => {
            const button = \$(e.currentTarget);
            const container_id = button.attr('data-container-id');

            glpi_ajax_dialog(
               {
                  title: __('Add new status override', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
                  method: 'get',
                  params: {
                     action: 'get_add_form',
                     container_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });
      });
   </script>
</div>
", "@fields/status_overrides.html.twig", "/var/www/glpi/marketplace/fields/templates/status_overrides.html.twig");
    }
}
