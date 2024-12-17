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

/* pages/assets/operatingsystem.html.twig */
class __TwigTemplate_b75fa23edf7321745bf7e2deaa30b4e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/operatingsystem.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["no_header"] = true;
        // line 38
        $context["no_inventory_footer"] = true;
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/operatingsystem.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    <input type=\"hidden\" name=\"itemtype\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
        yield "\">

    ";
        // line 44
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["OperatingSystem", "operatingsystems_id", (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["operatingsystems_id"] ?? null) : null), __("Name"),         // line 49
($context["field_options"] ?? null)], 44, $context, $this->getSourceContext());
        // line 50
        yield "

    ";
        // line 52
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["OperatingSystemVersion", "operatingsystemversions_id", (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["operatingsystemversions_id"] ?? null) : null), _n("Version", "Versions", 1),         // line 57
($context["field_options"] ?? null)], 52, $context, $this->getSourceContext());
        // line 58
        yield "

    ";
        // line 60
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["OperatingSystemArchitecture", "operatingsystemarchitectures_id", (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["item"] ?? null), "fields", [], "any", false, false, false, 63)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["operatingsystemarchitectures_id"] ?? null) : null), _n("Architecture", "Architectures", 1),         // line 65
($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
        // line 66
        yield "

    ";
        // line 68
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["OperatingSystemServicePack", "operatingsystemservicepacks_id", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["operatingsystemservicepacks_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("OperatingSystemServicePack"),         // line 73
($context["field_options"] ?? null)], 68, $context, $this->getSourceContext());
        // line 74
        yield "

    ";
        // line 76
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["OperatingSystemKernelVersion", "operatingsystemkernelversions_id", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["operatingsystemkernelversions_id"] ?? null) : null), _n("Kernel", "Kernels", 1),         // line 81
($context["field_options"] ?? null)], 76, $context, $this->getSourceContext());
        // line 82
        yield "

    ";
        // line 84
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["OperatingSystemEdition", "operatingsystemeditions_id", (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,         // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["operatingsystemeditions_id"] ?? null) : null), _n("Edition", "Editions", 1),         // line 89
($context["field_options"] ?? null)], 84, $context, $this->getSourceContext());
        // line 90
        yield "

    ";
        // line 92
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["licenseid", (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,         // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["licenseid"] ?? null) : null), __("Product ID"),         // line 96
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
        // line 97
        yield "

    ";
        // line 99
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["license_number", (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source,         // line 101
($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["license_number"] ?? null) : null), __("Serial number"),         // line 103
($context["field_options"] ?? null)], 99, $context, $this->getSourceContext());
        // line 104
        yield "

    ";
        // line 106
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["company", (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source,         // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["company"] ?? null) : null), __("Company"),         // line 110
($context["field_options"] ?? null)], 106, $context, $this->getSourceContext());
        // line 111
        yield "

    ";
        // line 113
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["owner", (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source,         // line 115
($context["item"] ?? null), "fields", [], "any", false, false, false, 115)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["owner"] ?? null) : null), __("Owner"),         // line 117
($context["field_options"] ?? null)], 113, $context, $this->getSourceContext());
        // line 118
        yield "

    ";
        // line 120
        yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["install_date", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source,         // line 122
($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["install_date"] ?? null) : null)), __("Installation date")], 120, $context, $this->getSourceContext());
        // line 124
        yield "

    ";
        // line 126
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["hostid", (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source,         // line 128
($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["hostid"] ?? null) : null), __("Host ID"),         // line 130
($context["field_options"] ?? null)], 126, $context, $this->getSourceContext());
        // line 131
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/assets/operatingsystem.html.twig";
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
        return array (  161 => 131,  159 => 130,  158 => 128,  157 => 126,  153 => 124,  151 => 122,  150 => 120,  146 => 118,  144 => 117,  143 => 115,  142 => 113,  138 => 111,  136 => 110,  135 => 108,  134 => 106,  130 => 104,  128 => 103,  127 => 101,  126 => 99,  122 => 97,  120 => 96,  119 => 94,  118 => 92,  114 => 90,  112 => 89,  111 => 87,  110 => 84,  106 => 82,  104 => 81,  103 => 79,  102 => 76,  98 => 74,  96 => 73,  95 => 71,  94 => 68,  90 => 66,  88 => 65,  87 => 63,  86 => 60,  82 => 58,  80 => 57,  79 => 55,  78 => 52,  74 => 50,  72 => 49,  71 => 47,  70 => 44,  65 => 42,  60 => 41,  56 => 40,  51 => 34,  49 => 38,  47 => 37,  45 => 36,  43 => 35,  36 => 34,);
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
{% set params = params ?? [] %}
{% set no_header = true %}
{% set no_inventory_footer = true %}

{% block more_fields %}
    <input type=\"hidden\" name=\"itemtype\" value=\"{{ item.fields['itemtype'] }}\">
    <input type=\"hidden\" name=\"items_id\" value=\"{{ item.fields['items_id'] }}\">

    {{ fields.dropdownField(
        'OperatingSystem',
        'operatingsystems_id',
        item.fields['operatingsystems_id'],
        __('Name'),
        field_options
    ) }}

    {{ fields.dropdownField(
        'OperatingSystemVersion',
        'operatingsystemversions_id',
        item.fields['operatingsystemversions_id'],
        _n('Version', 'Versions', 1),
        field_options
    ) }}

    {{ fields.dropdownField(
        'OperatingSystemArchitecture',
        'operatingsystemarchitectures_id',
        item.fields['operatingsystemarchitectures_id'],
        _n('Architecture', 'Architectures', 1),
        field_options
    ) }}

    {{ fields.dropdownField(
        'OperatingSystemServicePack',
        'operatingsystemservicepacks_id',
        item.fields['operatingsystemservicepacks_id'],
        \"OperatingSystemServicePack\"|itemtype_name,
        field_options
    ) }}

    {{ fields.dropdownField(
        'OperatingSystemKernelVersion',
        'operatingsystemkernelversions_id',
        item.fields['operatingsystemkernelversions_id'],
        _n('Kernel', 'Kernels', 1),
        field_options
    ) }}

    {{ fields.dropdownField(
        'OperatingSystemEdition',
        'operatingsystemeditions_id',
        item.fields['operatingsystemeditions_id'],
        _n('Edition', 'Editions', 1),
        field_options
    ) }}

    {{ fields.textField(
        'licenseid',
        item.fields['licenseid'],
        __('Product ID'),
        field_options
    ) }}

    {{ fields.textField(
        'license_number',
        item.fields['license_number'],
        __('Serial number'),
        field_options
    ) }}

    {{ fields.textField(
        'company',
        item.fields['company'],
        __('Company'),
        field_options
    ) }}

    {{ fields.textField(
        'owner',
        item.fields['owner'],
        __('Owner'),
        field_options
    ) }}

    {{ fields.htmlField(
        'install_date',
        item.fields['install_date']|formatted_datetime,
        __('Installation date')
    ) }}

    {{ fields.textField(
        'hostid',
        item.fields['hostid'],
        __('Host ID'),
        field_options
    ) }}
{% endblock %}
", "pages/assets/operatingsystem.html.twig", "/var/www/glpi/templates/pages/assets/operatingsystem.html.twig");
    }
}
