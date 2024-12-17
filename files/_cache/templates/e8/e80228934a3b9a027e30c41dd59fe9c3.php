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

/* @fields/fields.html.twig */
class __TwigTemplate_d16c43011ebbce7666743a94eb67aecd extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/fields.html.twig", 29)->unwrap();
        // line 30
        yield "
";
        // line 31
        $context["already_wrapped"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonITILObject") && ((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == "dom"));
        // line 32
        yield "
";
        // line 33
        if ( !($context["already_wrapped"] ?? null)) {
            // line 34
            yield "    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
";
        }
        // line 40
        yield "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 42
            yield "
    ";
            // line 43
            $context["type"] = (($__internal_compile_1 = $context["field"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null);
            // line 44
            yield "    ";
            $context["name"] = (($__internal_compile_2 = $context["field"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["name"] ?? null) : null);
            // line 45
            yield "    ";
            $context["label"] = (($__internal_compile_3 = $context["field"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["label"] ?? null) : null);
            // line 46
            yield "    ";
            $context["value"] = (((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 46)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["name"] ?? null)] ?? null) : null)) ?: ((($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["value"] ?? null) : null)));
            // line 47
            yield "    ";
            $context["readonly"] = (($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_readonly"] ?? null) : null);
            // line 48
            yield "    ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 49
            yield "
    ";
            // line 50
            $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["readonly" => (            // line 51
($context["readonly"] ?? null) ||  !($context["canedit"] ?? null)), "required" => (($__internal_compile_7 =             // line 52
$context["field"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["mandatory"] ?? null) : null), "full_width" =>             // line 53
($context["already_wrapped"] ?? null)]);
            // line 55
            yield "
    ";
            // line 56
            if ((($context["type"] ?? null) == "header")) {
                // line 57
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_largeTitle", [($context["label"] ?? null)], 57, $context, $this->getSourceContext());
                yield "

    ";
            } elseif ((            // line 59
($context["type"] ?? null) == "text")) {
                // line 60
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
                yield "

    ";
            } elseif ((            // line 62
($context["type"] ?? null) == "number")) {
                // line 63
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_numberField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["step" => "any", "min" => ""])], 63, $context, $this->getSourceContext());
                yield "

    ";
            } elseif ((            // line 65
($context["type"] ?? null) == "url")) {
                // line 66
                yield "            ";
                $context["ext_link"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 67
                    yield "            ";
                    if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null))) {
                        // line 68
                        yield "                <a target=\"_blank\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                        yield "\">
                    <i class=\"ti ti-external-link\"></i>
                    ";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("show", "fields"), "html", null, true);
                        yield "
                </a>
            ";
                    }
                    // line 73
                    yield "            ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 74
                yield "            ";
                yield CoreExtension::callMacro($macros["macros"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["type" => "url", "add_field_html" =>                 // line 76
($context["ext_link"] ?? null)])], 74, $context, $this->getSourceContext());
                // line 77
                yield "

    ";
            } elseif ((            // line 79
($context["type"] ?? null) == "textarea")) {
                // line 80
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_textareaField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 80, $context, $this->getSourceContext());
                yield "

    ";
            } elseif ((            // line 82
($context["type"] ?? null) == "richtext")) {
                // line 83
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_textareaField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["enable_richtext" => true, "field_class" => "col-12", "label_class" => "", "input_class" => "", "align_label_right" => false, "mb" => "m-2"])], 83, $context, $this->getSourceContext());
                // line 90
                yield "

    ";
            } elseif ((            // line 92
($context["type"] ?? null) == "yesno")) {
                // line 93
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_dropdownYesNo", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 93, $context, $this->getSourceContext());
                yield "

    ";
            } elseif ((            // line 95
($context["type"] ?? null) == "date")) {
                // line 96
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_dateField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 96, $context, $this->getSourceContext());
                yield "

    ";
            } elseif ((            // line 98
($context["type"] ?? null) == "datetime")) {
                // line 99
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_datetimeField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["field_options"] ?? null)], 99, $context, $this->getSourceContext());
                yield "

    ";
            } elseif ((            // line 101
($context["type"] ?? null) == "dropdown")) {
                // line 102
                yield "        ";
                $context["dropdown_options"] = ["entity" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 102)];
                // line 103
                yield "        ";
                if ((($__internal_compile_8 = $context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["multiple"] ?? null) : null)) {
                    // line 104
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                    // line 105
                    yield "        ";
                }
                // line 106
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 106)) {
                    // line 107
                    yield "            ";
                    $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                    // line 108
                    yield "        ";
                }
                // line 109
                yield "        ";
                if (CoreExtension::inFilter("dropdowns_id", ($context["name"] ?? null))) {
                    // line 110
                    yield "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [($context["name"] ?? null)]);
                    // line 111
                    yield "        ";
                } else {
                    // line 112
                    yield "            ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsDropdown::getClassname", [($context["name"] ?? null)]);
                    // line 113
                    yield "        ";
                }
                // line 114
                yield "        ";
                $context["name_fk"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getForeignKeyFieldForItemType", [($context["dropdown_itemtype"] ?? null)]);
                // line 115
                yield "        ";
                yield CoreExtension::callMacro($macros["macros"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), ($context["name_fk"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ($context["dropdown_options"] ?? null))], 115, $context, $this->getSourceContext());
                yield "

    ";
            } elseif (CoreExtension::matches("/^dropdown-.+/i",             // line 117
($context["type"] ?? null))) {
                // line 118
                yield "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 119
                    yield "            ";
                    $context["dropdown_options"] = ["condition" => (($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["dropdown_condition"] ?? null) : null), "entity" => CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 119)];
                    // line 120
                    yield "            ";
                    if (((($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["dropdown_class"] ?? null) : null) == "User")) {
                        // line 121
                        yield "                ";
                        $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["entity" =>  -1, "right" => "all"]);
                        // line 122
                        yield "            ";
                    } elseif ((((($__internal_compile_11 = $context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["dropdown_class"] ?? null) : null) == "Entity") || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 122))) {
                        // line 123
                        yield "                ";
                        $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["entity_sons" => true]);
                        // line 124
                        yield "            ";
                    }
                    // line 125
                    yield "            ";
                    if ((($__internal_compile_12 = $context["field"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["multiple"] ?? null) : null)) {
                        // line 126
                        yield "                ";
                        $context["dropdown_options"] = Twig\Extension\CoreExtension::merge(($context["dropdown_options"] ?? null), ["multiple" => true]);
                        // line 127
                        yield "            ";
                    }
                    // line 128
                    yield "            ";
                    yield CoreExtension::callMacro($macros["macros"], "macro_dropdownField", [(($__internal_compile_13 = $context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["dropdown_class"] ?? null) : null), ($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ($context["dropdown_options"] ?? null))], 128, $context, $this->getSourceContext());
                    yield "
        ";
                }
                // line 130
                yield "
    ";
            } elseif ((            // line 131
($context["type"] ?? null) == "glpi_item")) {
                // line 132
                yield "        ";
                if ( !($context["massiveaction"] ?? null)) {
                    // line 133
                    yield "            ";
                    $context["itemtype_prefix"] = "itemtype_";
                    // line 134
                    yield "            ";
                    $context["items_id_prefix"] = "items_id_";
                    // line 135
                    yield "
            ";
                    // line 136
                    if (((($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == "tab")) {
                        // line 137
                        yield "                                <div class=\"w-100\"></div>
            ";
                    }
                    // line 140
                    yield "
            ";
                    // line 141
                    yield CoreExtension::callMacro($macros["macros"], "macro_dropdownArrayField", [(($context["itemtype_prefix"] ?? null) . ($context["name"] ?? null)), CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 141), (($__internal_compile_15 = $context["field"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["allowed_values"] ?? null) : null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["rand" =>                     // line 142
($context["rand"] ?? null), "display_emptychoice" => true])], 141, $context, $this->getSourceContext());
                    // line 144
                    yield "
            <div class='form-field row col-12 ";
                    // line 145
                    yield ((((($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source, ($context["container"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["type"] ?? null) : null) == "tab")) ? ("col-sm-6") : (""));
                    yield " mb-2'>
                ";
                    // line 146
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [((("dropdown_" .                     // line 148
($context["itemtype_prefix"] ?? null)) . ($context["name"] ?? null)) . ($context["rand"] ?? null)), ("results_items_id" .                     // line 149
($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownAllItems.php"), ["idtable" => "__VALUE__", "name" => (                    // line 153
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "entity_restrict" => CoreExtension::getAttribute($this->env, $this->source,                     // line 154
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 154), "dom_name" => (                    // line 155
($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), "display_emptychoice" => false, "action" => "get_items_from_itemtype", "dom_rand" =>                     // line 158
($context["rand"] ?? null), "width" => "100%"]]);
                    // line 162
                    yield "
                ";
                    // line 164
                    yield "                <label class=\"col-form-label col-xxl-4 text-xxl-end\" for=\"dropdown_items_id_testfield";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\">
                </label>

                <div class=\"col-xxl-8 field-container\">
                    <span id='results_items_id";
                    // line 168
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "' class='col-lg-14'>
                        ";
                    // line 169
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 169) != "")) {
                        // line 170
                        yield "                            ";
                        yield CoreExtension::callMacro($macros["macros"], "macro_dropdownField", [CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "itemtype", [], "any", false, false, false, 170), (($context["items_id_prefix"] ?? null) . ($context["name"] ?? null)), CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "items_id", [], "any", false, false, false, 170), " ", Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["entity" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 171
($context["value"] ?? null), "itemtype", [], "any", false, false, false, 171) == "User")) ? ( -1) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 171))), "rand" =>                         // line 172
($context["rand"] ?? null), "right" => "all", "displaywith" => ["otherserial", "serial"], "display_emptychoice" => false, "no_label" => true])], 170, $context, $this->getSourceContext());
                        // line 177
                        yield "
                        ";
                    }
                    // line 179
                    yield "                    </span>
                </div>
            </div>
        ";
                }
                // line 183
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "
";
        // line 186
        if ( !($context["already_wrapped"] ?? null)) {
            // line 187
            yield "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@fields/fields.html.twig";
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
        return array (  369 => 187,  367 => 186,  364 => 185,  357 => 183,  351 => 179,  347 => 177,  345 => 172,  344 => 171,  342 => 170,  340 => 169,  336 => 168,  328 => 164,  325 => 162,  323 => 158,  322 => 155,  321 => 154,  320 => 153,  319 => 149,  318 => 148,  317 => 146,  313 => 145,  310 => 144,  308 => 142,  307 => 141,  304 => 140,  300 => 137,  298 => 136,  295 => 135,  292 => 134,  289 => 133,  286 => 132,  284 => 131,  281 => 130,  275 => 128,  272 => 127,  269 => 126,  266 => 125,  263 => 124,  260 => 123,  257 => 122,  254 => 121,  251 => 120,  248 => 119,  245 => 118,  243 => 117,  237 => 115,  234 => 114,  231 => 113,  228 => 112,  225 => 111,  222 => 110,  219 => 109,  216 => 108,  213 => 107,  210 => 106,  207 => 105,  204 => 104,  201 => 103,  198 => 102,  196 => 101,  190 => 99,  188 => 98,  182 => 96,  180 => 95,  174 => 93,  172 => 92,  168 => 90,  165 => 83,  163 => 82,  157 => 80,  155 => 79,  151 => 77,  149 => 76,  147 => 74,  143 => 73,  137 => 70,  131 => 68,  128 => 67,  125 => 66,  123 => 65,  117 => 63,  115 => 62,  109 => 60,  107 => 59,  101 => 57,  99 => 56,  96 => 55,  94 => 53,  93 => 52,  92 => 51,  91 => 50,  88 => 49,  85 => 48,  82 => 47,  79 => 46,  76 => 45,  73 => 44,  71 => 43,  68 => 42,  64 => 41,  61 => 40,  53 => 34,  51 => 33,  48 => 32,  46 => 31,  43 => 30,  41 => 29,  38 => 28,);
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

{% import 'components/form/fields_macros.html.twig' as macros %}

{% set already_wrapped = item is instanceof('CommonITILObject') and container.fields['type'] == 'dom' %}

{% if not already_wrapped %}
    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
{% endif %}

{% for field in fields %}

    {% set type     = field['type'] %}
    {% set name     = field['name'] %}
    {% set label    = field['label'] %}
    {% set value    = item.input[name] ?: field['value'] %}
    {% set readonly = field['is_readonly'] %}
    {% set rand = random() %}

    {% set field_options = field_options|merge({
        'readonly':   readonly or not canedit,
        'required':   field['mandatory'],
        'full_width': already_wrapped
    }) %}

    {% if type == 'header' %}
        {{ macros.largeTitle(label) }}

    {% elseif type == 'text' %}
        {{ macros.textField(name, value, label, field_options) }}

    {% elseif type == 'number' %}
        {{ macros.numberField(name, value, label, field_options|merge({step: 'any', min: ''})) }}

    {% elseif type == 'url' %}
            {% set ext_link %}
            {% if value|length %}
                <a target=\"_blank\" href=\"{{ value|verbatim_value }}\">
                    <i class=\"ti ti-external-link\"></i>
                    {{ __('show', 'fields') }}
                </a>
            {% endif %}
            {% endset %}
            {{ macros.textField(name, value, label, field_options|merge({
                'type': 'url',
                'add_field_html': ext_link
            })) }}

    {% elseif type == 'textarea' %}
        {{ macros.textareaField(name, value, label, field_options) }}

    {% elseif type == 'richtext' %}
        {{ macros.textareaField(name, value, label, field_options|merge({
            'enable_richtext': true,
            'field_class': 'col-12',
            'label_class': '',
            'input_class': '',
            'align_label_right': false,
            'mb': 'm-2'
        })) }}

    {% elseif type == 'yesno' %}
        {{ macros.dropdownYesNo(name, value, label, field_options) }}

    {% elseif type == 'date' %}
        {{ macros.dateField(name, value, label, field_options) }}

    {% elseif type == 'datetime' %}
        {{ macros.datetimeField(name, value, label, field_options) }}

    {% elseif type == 'dropdown' %}
        {% set dropdown_options = {'entity': item.getEntityID()} %}
        {% if field['multiple'] %}
            {% set dropdown_options = dropdown_options|merge({'multiple': true}) %}
        {% endif %}
        {% if item.isRecursive() %}
            {% set dropdown_options = dropdown_options|merge({'entity_sons': true}) %}
        {% endif %}
        {% if \"dropdowns_id\" in name %}
            {% set dropdown_itemtype = call(\"getItemtypeForForeignKeyField\", [name]) %}
        {% else %}
            {% set dropdown_itemtype = call(\"PluginFieldsDropdown::getClassname\", [name]) %}
        {% endif %}
        {% set name_fk = call(\"getForeignKeyFieldForItemType\", [dropdown_itemtype]) %}
        {{ macros.dropdownField(dropdown_itemtype, name_fk, value, label, field_options|merge(dropdown_options)) }}

    {% elseif type matches '/^dropdown-.+/i' %}
        {% if not massiveaction %}
            {% set dropdown_options = {'condition': field['dropdown_condition'], 'entity': item.getEntityID()} %}
            {% if field['dropdown_class'] == 'User' %}
                {% set dropdown_options = dropdown_options|merge({'entity': -1, 'right': 'all'}) %}
            {% elseif field['dropdown_class'] == 'Entity' or item.isRecursive() %}
                {% set dropdown_options = dropdown_options|merge({'entity_sons': true}) %}
            {% endif %}
            {% if field['multiple'] %}
                {% set dropdown_options = dropdown_options|merge({'multiple': true}) %}
            {% endif %}
            {{ macros.dropdownField(field['dropdown_class'], name, value, label, field_options|merge(dropdown_options)) }}
        {% endif %}

    {% elseif type == 'glpi_item' %}
        {% if not massiveaction %}
            {% set itemtype_prefix = 'itemtype_' %}
            {% set items_id_prefix = 'items_id_' %}

            {% if container.fields['type'] == 'tab' %}
                {# start new row for glpi object  #}
                <div class=\"w-100\"></div>
            {% endif %}

            {{ macros.dropdownArrayField(itemtype_prefix ~ name, value.itemtype, field['allowed_values'], label, field_options|merge({
                'rand': rand,
                'display_emptychoice': true,
            })) }}
            <div class='form-field row col-12 {{ container.fields['type'] == 'tab' ? 'col-sm-6' : '' }} mb-2'>
                {% do call('Ajax::updateItemOnSelectEvent',
                    [
                        'dropdown_' ~ itemtype_prefix ~ name ~ rand,
                        'results_items_id' ~ (rand),
                        config('root_doc') ~ '/ajax/dropdownAllItems.php',
                        {
                            'idtable'             : '__VALUE__',
                            'name'                : items_id_prefix ~ name,
                            'entity_restrict'     : item.getEntityID(),
                            'dom_name'            : items_id_prefix ~ name,
                            'display_emptychoice' : false,
                            'action'              : 'get_items_from_itemtype',
                            'dom_rand'            : rand,
                            'width'               : '100%',
                        }
                ]) %}

                {# fake label for DOM disposition #}
                <label class=\"col-form-label col-xxl-4 text-xxl-end\" for=\"dropdown_items_id_testfield{{rand}}\">
                </label>

                <div class=\"col-xxl-8 field-container\">
                    <span id='results_items_id{{rand}}' class='col-lg-14'>
                        {% if value.itemtype != '' %}
                            {{ macros.dropdownField(value.itemtype, items_id_prefix ~ name, value.items_id, ' ', field_options|merge({
                                'entity': value.itemtype == 'User' ? -1 : item.getEntityID(),
                                'rand': rand,
                                'right': 'all',
                                'displaywith': ['otherserial', 'serial'],
                                'display_emptychoice' : false,
                                'no_label': true
                            })) }}
                        {% endif %}
                    </span>
                </div>
            </div>
        {% endif %}
    {% endif %}
{% endfor %}

{% if not already_wrapped %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
", "@fields/fields.html.twig", "/var/www/glpi/marketplace/fields/templates/fields.html.twig");
    }
}
