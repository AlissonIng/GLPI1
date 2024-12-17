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

/* pages/management/softwarelicense.html.twig */
class __TwigTemplate_abaa4e70d40d7c9c7948b965e11e460f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/management/softwarelicense.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/management/softwarelicense.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "

   ";
        // line 41
        if (((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null) > 0)) {
            // line 42
            yield "
      <input type=\"hidden\" name=\"softwares_id\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["softwares_id"] ?? null) : null), "html", null, true);
            yield "\" />

      ";
            // line 45
            $context["software_link"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 46
                yield "         <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Software::getFormURLWithID", [(($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["softwares_id"] ?? null) : null)]), "html", null, true);
                yield "\">
         ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::getDropdownName", ["glpi_softwares", (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["softwares_id"] ?? null) : null)]), "html", null, true);
                yield " </a>
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            yield "
      ";
            // line 50
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["software",             // line 52
($context["software_link"] ?? null), _n("Software", "Software", Session::getPluralNumber()), ["width" => "100%", "height" => "100%", "input_class" => "d-flex col-xxl-7 field-container align-items-center"]], 50, $context, $this->getSourceContext());
            // line 59
            yield "

   ";
        } else {
            // line 62
            yield "
      ";
            // line 63
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Software", "softwares_id", (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,             // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["softwares_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Software"), ["entity" => (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["entities_id"] ?? null) : null), "condition" => ["is_template" => 0, "is_deleted" => 0], "on_change" => "this.form.submit()"]], 63, $context, $this->getSourceContext());
            // line 76
            yield "

   ";
        }
        // line 79
        yield "


   ";
        // line 82
        yield CoreExtension::callMacro($macros["fields"], "macro_nullField", [], 82, $context, $this->getSourceContext());
        yield "

   ";
        // line 84
        yield from $this->yieldParentBlock("form_fields", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 87
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        yield "   ";
        $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 89
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [["name" => "softwareversions_id_use", "softwares_id" => (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["softwares_id"] ?? null) : null), "value" => (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,             // line 92
($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["softwareversions_id_use"] ?? null) : null), "width" => "100%"]]);
            // line 95
            yield "   ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "   ";
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["softwareversions_id_use", ($context["field"] ?? null), __("Version in use")], 96, $context, $this->getSourceContext());
        yield "

   ";
        // line 98
        $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 99
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("SoftwareVersion::dropdownForOneSoftware", [["name" => "softwareversions_id_buy", "softwares_id" => (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["softwares_id"] ?? null) : null), "value" => (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["softwareversions_id_buy"] ?? null) : null), "width" => "100%"]]);
            // line 105
            yield "   ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "   ";
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["softwareversions_id_buy", ($context["field"] ?? null), __("Purchase version")], 106, $context, $this->getSourceContext());
        yield "

   ";
        // line 108
        $context["validity_msg"] = null;
        // line 109
        yield "   ";
        if ((($context["item_type"] ?? null) == "SoftwareLicense")) {
            // line 110
            yield "      ";
            $context["validity_msg"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 111
                yield "         ";
                if ((($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["is_valid"] ?? null) : null)) {
                    // line 112
                    yield "            <span class=\"green\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("adjective", "Valid"), "html", null, true);
                    yield "</span>
         ";
                } elseif (( !(($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source,                 // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_valid"] ?? null) : null) && (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["allow_overquota"] ?? null) : null))) {
                    // line 114
                    yield "            <span class=\"green\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("adjective", "Valid (Over Quota)"), "html", null, true);
                    yield "</span>
         ";
                } else {
                    // line 116
                    yield "            <span class=\"red\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("adjective", "Invalid"), "html", null, true);
                    yield "</span>
         ";
                }
                // line 118
                yield "      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 119
            yield "   ";
        }
        // line 120
        yield "   ";
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownNumberField", ["number", (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["number"] ?? null) : null), _x("quantity", "Number"), ["min" => 1, "max" => 10000, "step" => 1, "toadd" => ["-1" => __("Unlimited")], "add_field_html" =>         // line 125
($context["validity_msg"] ?? null)]], 120, $context, $this->getSourceContext());
        // line 126
        yield "

   ";
        // line 128
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["allow_overquota", (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["allow_overquota"] ?? null) : null), __("Allow Over-Quota")], 128, $context, $this->getSourceContext());
        yield "

   ";
        // line 130
        yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["expire", (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["expire"] ?? null) : null), __("Expiration"), ["helper" => __("On search engine, use \"Expiration contains NULL\" to search licenses with no expiration date")]], 130, $context, $this->getSourceContext());
        // line 132
        yield "

   ";
        // line 134
        if (((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["withtemplate"] ?? null) : null) == 1)) {
            // line 135
            yield "      ";
            yield CoreExtension::callMacro($macros["fields"], "macro_hiddenField", ["withtemplate", "1"], 135, $context, $this->getSourceContext());
            yield "
   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/management/softwarelicense.html.twig";
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
        return array (  221 => 135,  219 => 134,  215 => 132,  213 => 130,  208 => 128,  204 => 126,  202 => 125,  200 => 120,  197 => 119,  193 => 118,  187 => 116,  181 => 114,  179 => 113,  174 => 112,  171 => 111,  168 => 110,  165 => 109,  163 => 108,  157 => 106,  153 => 105,  151 => 102,  150 => 101,  148 => 99,  146 => 98,  140 => 96,  136 => 95,  134 => 92,  133 => 91,  131 => 89,  128 => 88,  124 => 87,  117 => 84,  112 => 82,  107 => 79,  102 => 76,  100 => 69,  99 => 66,  98 => 63,  95 => 62,  90 => 59,  88 => 52,  87 => 50,  84 => 49,  78 => 47,  73 => 46,  71 => 45,  66 => 43,  63 => 42,  61 => 41,  57 => 39,  53 => 38,  48 => 34,  46 => 36,  44 => 35,  37 => 34,);
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

{% extends \"generic_show_form.html.twig\" %}
{% import 'components/form/fields_macros.html.twig' as fields %}
{% set params  = params ?? [] %}

{% block form_fields %}


   {% if item.fields['id'] > 0 %}

      <input type=\"hidden\" name=\"softwares_id\" value=\"{{ item.fields['softwares_id'] }}\" />

      {% set software_link %}
         <a href=\"{{ call('Software::getFormURLWithID', [item.fields['softwares_id']]) }}\">
         {{ call('Dropdown::getDropdownName', [\"glpi_softwares\", item.fields['softwares_id']]) }} </a>
      {% endset %}

      {{ fields.field(
         'software',
         software_link,
         _n('Software', 'Software', get_plural_number()),
         {
            'width': '100%',
            'height': '100%',
            'input_class' : 'd-flex col-xxl-7 field-container align-items-center'
         }
      ) }}

   {% else %}

      {{ fields.dropdownField(
         'Software',
         'softwares_id',
         item.fields['softwares_id'],
         \"Software\"|itemtype_name,
         {
            'entity': item.fields['entities_id'],
            'condition': {
               'is_template': 0,
               'is_deleted': 0,
            },
            'on_change': 'this.form.submit()'
         }
      ) }}

   {% endif %}



   {{ fields.nullField() }}

   {{ parent() }}
{% endblock %}

{% block more_fields %}
   {% set field %}
      {% do call('SoftwareVersion::dropdownForOneSoftware', [{
         'name': 'softwareversions_id_use',
         'softwares_id': item.fields['softwares_id'],
         'value': item.fields['softwareversions_id_use'],
         'width': '100%',
      }]) %}
   {% endset %}
   {{ fields.field('softwareversions_id_use', field, __('Version in use')) }}

   {% set field %}
      {% do call('SoftwareVersion::dropdownForOneSoftware', [{
      'name': 'softwareversions_id_buy',
      'softwares_id': item.fields['softwares_id'],
      'value': item.fields['softwareversions_id_buy'],
      'width': '100%',
      }]) %}
   {% endset %}
   {{ fields.field('softwareversions_id_buy', field, __('Purchase version')) }}

   {% set validity_msg = null %}
   {% if item_type == 'SoftwareLicense' %}
      {% set validity_msg %}
         {% if item.fields['is_valid'] %}
            <span class=\"green\">{{ _x('adjective', 'Valid') }}</span>
         {% elseif not item.fields['is_valid'] and item.fields['allow_overquota'] %}
            <span class=\"green\">{{ _x('adjective', 'Valid (Over Quota)') }}</span>
         {% else %}
            <span class=\"red\">{{ _x('adjective', 'Invalid') }}</span>
         {% endif %}
      {% endset %}
   {% endif %}
   {{ fields.dropdownNumberField('number', item.fields['number'], _x('quantity', 'Number'), {
      'min': 1,
      'max': 10000,
      'step': 1,
      'toadd': {'-1': __('Unlimited')},
      'add_field_html': validity_msg
   }) }}

   {{ fields.dropdownYesNo('allow_overquota', item.fields['allow_overquota'], __('Allow Over-Quota')) }}

   {{ fields.datetimeField('expire', item.fields['expire'], __('Expiration'), {
      'helper': __('On search engine, use \"Expiration contains NULL\" to search licenses with no expiration date')
   }) }}

   {% if params['withtemplate'] == 1 %}
      {{ fields.hiddenField('withtemplate', '1') }}
   {% endif %}
{% endblock %}
", "pages/management/softwarelicense.html.twig", "/var/www/glpi/templates/pages/management/softwarelicense.html.twig");
    }
}
