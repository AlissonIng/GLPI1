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

/* @fields/forms/status_override.html.twig */
class __TwigTemplate_c678714ad84792dae4ff1d06990fe536 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/forms/status_override.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 31
        yield "
<form id=\"form";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsStatusOverride"), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"container_id\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
        yield "\" />
   <div class=\"card-body pe-1 d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 39
        $context["itemtype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 39), "itemtype", [], "array", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["container_itemtypes"] ?? null))))) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["container_itemtypes"] ?? null)))));
        // line 40
        yield "
                  ";
        // line 41
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownArrayField", ["itemtype", ($context["itemtype"] ?? null), ($context["container_itemtypes"] ?? null), __("Item type")], 41, $context, $this->getSourceContext());
        yield "
                  ";
        // line 42
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownArrayField", ["plugin_fields_fields_id", (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["plugin_fields_fields_id"] ?? null) : null), ($context["container_fields"] ?? null), __("Field", "fields")], 42, $context, $this->getSourceContext());
        yield "

                  ";
        // line 44
        $context["status_field_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 45
            yield "                     <div id=\"status_inner_container";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">
                        ";
            // line 46
            yield $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsStatusOverride::getStatusDropdownForItemtype", [($context["itemtype"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 46), "states", [], "array", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 46)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["states"] ?? null) : null), [])) : ([]))]);
            yield "
                     </div>
                  ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                  ";
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["status_inner_container", ($context["status_field_html"] ?? null), __("Status")], 49, $context, $this->getSourceContext());
        yield "

                  ";
        // line 51
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["mandatory", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 51), "mandatory", [], "array", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 51)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["mandatory"] ?? null) : null), null)) : (null)), __("Mandatory field")], 51, $context, $this->getSourceContext());
        yield "
                  ";
        // line 52
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["is_readonly", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 52), "is_readonly", [], "array", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, true, false, 52)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["is_readonly"] ?? null) : null), null)) : (null)), __("Read only", "fields")], 52, $context, $this->getSourceContext());
        yield "
               </div> ";
        // line 54
        yield "               <div class=\"mx-n2 d-flex flex-row-reverse align-items-start\">
                  ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "isNewItem", [], "method", false, false, false, 55)) {
            // line 56
            yield "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                        <i class=\"far fa-plus\"></i>
                        <span>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
            yield "</span>
                     </button>
                  ";
        } else {
            // line 61
            yield "                     <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
            yield "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                        <i class=\"far fa-save\"></i>
                        <span>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Update"), "html", null, true);
            yield "</span>
                     </button>
                  ";
        }
        // line 67
        yield "                  <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
               </div>
            </div> ";
        // line 70
        yield "         </div> ";
        // line 71
        yield "      </div>
   </div> ";
        // line 73
        yield "</form>
<script>
   \$(document).ready(() => {
      const refresh_status_dropdown = () => {
         const itemtype = \$('#form";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').find('select[name=\"itemtype\"]').val();
         \$.ajax({
            url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
            method: 'GET',
            data: {
                action: 'get_status_dropdown',
                itemtype: itemtype
            }
         }).then((result) => {
            \$('#status_inner_container";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').html(result);
         });
      }

      \$('#form";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('change', 'select[name=\"itemtype\"]', () => {
         refresh_status_dropdown();
      });
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
        return "@fields/forms/status_override.html.twig";
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
        return array (  169 => 90,  162 => 86,  150 => 77,  144 => 73,  141 => 71,  139 => 70,  133 => 67,  127 => 64,  120 => 61,  114 => 58,  110 => 56,  108 => 55,  105 => 54,  101 => 52,  97 => 51,  91 => 49,  84 => 46,  79 => 45,  77 => 44,  72 => 42,  68 => 41,  65 => 40,  63 => 39,  54 => 33,  48 => 32,  45 => 31,  43 => 30,  41 => 29,  38 => 28,);
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

<form id=\"form{{ rand }}\" method=\"post\" action=\"{{ 'PluginFieldsStatusOverride'|itemtype_form_path }}\" enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"container_id\" value=\"{{ container_id }}\" />
   <div class=\"card-body pe-1 d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  {% set itemtype = override.fields['itemtype']|default(container_itemtypes|keys|first) %}

                  {{ fields.dropdownArrayField('itemtype', itemtype, container_itemtypes, __('Item type')) }}
                  {{ fields.dropdownArrayField('plugin_fields_fields_id', override.fields['plugin_fields_fields_id'], container_fields, __('Field', 'fields')) }}

                  {% set status_field_html %}
                     <div id=\"status_inner_container{{ rand }}\">
                        {{ call('PluginFieldsStatusOverride::getStatusDropdownForItemtype', [itemtype, override.fields['states']|default([])])|raw }}
                     </div>
                  {% endset %}
                  {{ fields.field('status_inner_container', status_field_html, __('Status')) }}

                  {{ fields.dropdownYesNo('mandatory', override.fields['mandatory']|default(null), __('Mandatory field')) }}
                  {{ fields.dropdownYesNo('is_readonly', override.fields['is_readonly']|default(null), __(\"Read only\", \"fields\")) }}
               </div> {# .row #}
               <div class=\"mx-n2 d-flex flex-row-reverse align-items-start\">
                  {% if override.isNewItem() %}
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\" value=\"1\">
                        <i class=\"far fa-plus\"></i>
                        <span>{{ _x('button', 'Add') }}</span>
                     </button>
                  {% else %}
                     <input type=\"hidden\" name=\"id\" value=\"{{ override.fields['id'] }}\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\" value=\"1\">
                        <i class=\"far fa-save\"></i>
                        <span>{{ _x('button', 'Update') }}</span>
                     </button>
                  {% endif %}
                  <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
               </div>
            </div> {# .row #}
         </div> {# .flex-row #}
      </div>
   </div> {# .card-body #}
</form>
<script>
   \$(document).ready(() => {
      const refresh_status_dropdown = () => {
         const itemtype = \$('#form{{ rand }}').find('select[name=\"itemtype\"]').val();
         \$.ajax({
            url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/status_override.php',
            method: 'GET',
            data: {
                action: 'get_status_dropdown',
                itemtype: itemtype
            }
         }).then((result) => {
            \$('#status_inner_container{{ rand }}').html(result);
         });
      }

      \$('#form{{ rand }}').on('change', 'select[name=\"itemtype\"]', () => {
         refresh_status_dropdown();
      });
   });
</script>
", "@fields/forms/status_override.html.twig", "/var/www/glpi/marketplace/fields/templates/forms/status_override.html.twig");
    }
}
