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

/* dropdown_form.html.twig */
class __TwigTemplate_acae4a5dbd871ac3fec4912e432aaa13 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "dropdown_form.html.twig", 34)->unwrap();
        // line 35
        yield "
<div class=\"asset\">
    ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig");
        yield "
    ";
        // line 38
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 39
        yield "    ";
        $context["base_fields_params"] = (($context["fields_params"]) ?? ([]));
        // line 40
        yield "    ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 41
        yield "    ";
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 41)));
        // line 42
        yield "    ";
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 43
        yield "
    <div class=\"card-body row\">
        ";
        // line 45
        $context["picture_fields"] = ["picture_front", "picture_rear", "pictures"];
        // line 46
        yield "        ";
        $context["has_picture_field"] = false;
        // line 47
        yield "
        ";
        // line 49
        yield "        ";
        yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", [((CoreExtension::getAttribute($this->env, $this->source,         // line 50
($context["item"] ?? null), "isField", ["designation"], "method", false, false, false, 50)) ? ("designation") : ("name")),         // line 51
($context["item"] ?? null), __("Name"),         // line 53
($context["withtemplate"] ?? null)], 49, $context, $this->getSourceContext());
        // line 54
        yield "

        ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["comment"], "method", false, false, false, 56)) {
            // line 57
            yield "            ";
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,             // line 59
($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber())], 57, $context, $this->getSourceContext());
            // line 61
            yield "
        ";
        }
        // line 63
        yield "
        ";
        // line 65
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 66
            yield "            ";
            $context["fields_params"] = ($context["base_fields_params"] ?? null);
            // line 67
            yield "            ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_5 = $context["field"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["type"] ?? null) : null), "")) : (""));
            // line 68
            yield "            ";
            $context["show_field"] = true;
            // line 69
            yield "            ";
            if ((((($__internal_compile_6 = $context["field"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null) == "entities_id") && ((($context["type"] ?? null) != "parent") || ((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null) == 0)))) {
                // line 70
                yield "                ";
                // line 71
                yield "                ";
                $context["show_field"] = false;
                // line 72
                yield "            ";
            }
            // line 73
            yield "            ";
            if (CoreExtension::inFilter((($__internal_compile_8 = $context["field"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 74
                yield "                ";
                $context["show_field"] = false;
                // line 75
                yield "            ";
            }
            // line 76
            yield "            ";
            if (($context["show_field"] ?? null)) {
                // line 77
                yield "
                ";
                // line 78
                if (((($__internal_compile_9 = $context["field"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null) == "header")) {
                    // line 79
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_largeTitle", [(($__internal_compile_10 = $context["field"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["label"] ?? null) : null)], 79, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif (((($__internal_compile_11 =                 // line 80
$context["field"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["name"] ?? null) : null) == "content")) {
                    // line 81
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source,                     // line 83
($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null), (($__internal_compile_13 =                     // line 84
$context["field"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["label"] ?? null) : null), ["full_width" => true, "full_width_adapt_column" => false, "is_horizontal" => false, "enable_richtext" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 89
$context["field"], "enable_richtext", [], "array", true, true, false, 89)) ? ((($__internal_compile_14 = $context["field"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["enable_richtext"] ?? null) : null)) : (true))]], 81, $context, $this->getSourceContext());
                    // line 91
                    yield "
                ";
                } elseif ((                // line 92
($context["type"] ?? null) == "UserDropdown")) {
                    // line 93
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["User", (($__internal_compile_15 =                     // line 95
$context["field"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["name"] ?? null) : null), (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source,                     // line 96
($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($__internal_compile_17 = $context["field"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_18 =                     // line 97
$context["field"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["label"] ?? null) : null), ["entity" => (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source,                     // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "right" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 100
$context["field"], "right", [], "array", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_20 = $context["field"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["right"] ?? null) : null), "interface")) : ("interface")), "rand" =>                     // line 101
($context["rand"] ?? null)]], 93, $context, $this->getSourceContext());
                    // line 103
                    yield "
                ";
                } elseif ((                // line 104
($context["type"] ?? null) == "dropdownValue")) {
                    // line 105
                    yield "                    ";
                    $context["dropdown_params"] = ["entity" => (($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source,                     // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["entities_id"] ?? null) : null)];
                    // line 108
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "condition", [], "array", true, true, false, 108)) {
                        // line 109
                        yield "                        ";
                        $context["dropdown_params"] = Twig\Extension\CoreExtension::merge(($context["dropdown_params"] ?? null), ["condition" => (($__internal_compile_22 = $context["field"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["condition"] ?? null) : null)]);
                        // line 110
                        yield "                    ";
                    }
                    // line 111
                    yield "                    ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [(($__internal_compile_23 = $context["field"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["name"] ?? null) : null)]);
                    // line 112
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", [($context["dropdown_itemtype"] ?? null), (($__internal_compile_24 = $context["field"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["name"] ?? null) : null), (($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[(($__internal_compile_26 = $context["field"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_27 = $context["field"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["label"] ?? null) : null), ($context["dropdown_params"] ?? null)], 112, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 113
($context["type"] ?? null) == "text")) {
                    // line 114
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_autoNameField", [(($__internal_compile_28 = $context["field"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["name"] ?? null) : null), ($context["item"] ?? null), (($__internal_compile_29 = $context["field"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["label"] ?? null) : null), ($context["withtemplate"] ?? null), ($context["fields_params"] ?? null)], 114, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 115
($context["type"] ?? null) == "textarea")) {
                    // line 116
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [(($__internal_compile_30 = $context["field"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["name"] ?? null) : null), (($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[(($__internal_compile_32 = $context["field"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_33 = $context["field"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["label"] ?? null) : null), ($context["fields_params"] ?? null)], 116, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 117
($context["type"] ?? null) == "integer")) {
                    // line 118
                    yield "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source,                     // line 119
($context["item"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[(($__internal_compile_35 = $context["field"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["name"] ?? null) : null)] ?? null) : null)];
                    // line 121
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 121)) {
                        // line 122
                        yield "                        ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_36 = $context["field"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["min"] ?? null) : null)]);
                        // line 123
                        yield "                    ";
                    }
                    // line 124
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 124)) {
                        // line 125
                        yield "                        ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_37 = $context["field"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["step"] ?? null) : null)]);
                        // line 126
                        yield "                    ";
                    }
                    // line 127
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 127)) {
                        // line 128
                        yield "                        ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_38 = $context["field"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["max"] ?? null) : null)]);
                        // line 129
                        yield "                    ";
                    }
                    // line 130
                    yield "
                    ";
                    // line 131
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["type" => "number"]);
                    // line 132
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_numberField", [(($__internal_compile_39 = $context["field"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["name"] ?? null) : null), (($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[(($__internal_compile_41 = $context["field"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_42 = $context["field"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["label"] ?? null) : null), ($context["fields_params"] ?? null)], 132, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 133
($context["type"] ?? null) == "timestamp")) {
                    // line 134
                    yield "                    ";
                    $context["fields_params"] = ["value" => (($__internal_compile_43 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[(($__internal_compile_44 = $context["field"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["name"] ?? null) : null)] ?? null) : null)];
                    // line 135
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 135)) {
                        // line 136
                        yield "                        ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["min" => (($__internal_compile_45 = $context["field"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["min"] ?? null) : null)]);
                        // line 137
                        yield "                    ";
                    }
                    // line 138
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 138)) {
                        // line 139
                        yield "                        ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["step" => (($__internal_compile_46 = $context["field"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["step"] ?? null) : null)]);
                        // line 140
                        yield "                    ";
                    }
                    // line 141
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 141)) {
                        // line 142
                        yield "                        ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["max" => (($__internal_compile_47 = $context["field"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["max"] ?? null) : null)]);
                        // line 143
                        yield "                    ";
                    }
                    // line 144
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_48 = $context["field"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["name"] ?? null) : null), (($__internal_compile_49 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 144)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[(($__internal_compile_50 = $context["field"]) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_51 = $context["field"]) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["label"] ?? null) : null), ($context["fields_params"] ?? null)], 144, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 145
($context["type"] ?? null) == "parent")) {
                    // line 146
                    yield "                    ";
                    $context["restrict"] = ((((($__internal_compile_52 = $context["field"]) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["name"] ?? null) : null) == "entities_id")) ? ( -1) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 146)));
                    // line 147
                    yield "                    ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["entity" => ($context["restrict"] ?? null)]);
                    // line 148
                    yield "                    ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["used" => ((((($__internal_compile_53 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["id"] ?? null) : null) > 0)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getSonsOf", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTable", [], "method", false, false, false, 148), (($__internal_compile_54 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["id"] ?? null) : null)])) : ([]))]);
                    // line 149
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", [($context["item"] ?? null), (($__internal_compile_55 = $context["field"]) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["name"] ?? null) : null), (($__internal_compile_56 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[(($__internal_compile_57 = $context["field"]) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_58 = $context["field"]) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58["label"] ?? null) : null), ($context["fields_params"] ?? null)], 149, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 150
($context["type"] ?? null) == "icon")) {
                    // line 151
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownIcons", [(($__internal_compile_59 = $context["field"]) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59["name"] ?? null) : null), (($__internal_compile_60 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 151)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[(($__internal_compile_61 = $context["field"]) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_62 = $context["field"]) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62["label"] ?? null) : null), ($context["fields_params"] ?? null)], 151, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 152
($context["type"] ?? null) == "bool")) {
                    // line 153
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", [(($__internal_compile_63 = $context["field"]) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63["name"] ?? null) : null), (($__internal_compile_64 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[(($__internal_compile_65 = $context["field"]) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_66 = $context["field"]) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66["label"] ?? null) : null), ($context["fields_params"] ?? null)], 153, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 154
($context["type"] ?? null) == "color")) {
                    // line 155
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_colorField", [(($__internal_compile_67 = $context["field"]) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67["name"] ?? null) : null), (($__internal_compile_68 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 155)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[(($__internal_compile_69 = $context["field"]) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_70 = $context["field"]) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70["label"] ?? null) : null), ($context["fields_params"] ?? null)], 155, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 156
($context["type"] ?? null) == "date")) {
                    // line 157
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dateField", [(($__internal_compile_71 = $context["field"]) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71["name"] ?? null) : null), (($__internal_compile_72 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[(($__internal_compile_73 = $context["field"]) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_74 = $context["field"]) && is_array($__internal_compile_74) || $__internal_compile_74 instanceof ArrayAccess ? ($__internal_compile_74["label"] ?? null) : null), ($context["fields_params"] ?? null)], 157, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 158
($context["type"] ?? null) == "datetime")) {
                    // line 159
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", [(($__internal_compile_75 = $context["field"]) && is_array($__internal_compile_75) || $__internal_compile_75 instanceof ArrayAccess ? ($__internal_compile_75["name"] ?? null) : null), (($__internal_compile_76 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_76) || $__internal_compile_76 instanceof ArrayAccess ? ($__internal_compile_76[(($__internal_compile_77 = $context["field"]) && is_array($__internal_compile_77) || $__internal_compile_77 instanceof ArrayAccess ? ($__internal_compile_77["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_78 = $context["field"]) && is_array($__internal_compile_78) || $__internal_compile_78 instanceof ArrayAccess ? ($__internal_compile_78["label"] ?? null) : null), ($context["fields_params"] ?? null)], 159, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 160
($context["type"] ?? null) == "picture")) {
                    // line 161
                    yield "                    ";
                    if ( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_79 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_79) || $__internal_compile_79 instanceof ArrayAccess ? ($__internal_compile_79[(($__internal_compile_80 = $context["field"]) && is_array($__internal_compile_80) || $__internal_compile_80 instanceof ArrayAccess ? ($__internal_compile_80["name"] ?? null) : null)] ?? null) : null))) {
                        // line 162
                        yield "                        ";
                        yield CoreExtension::callMacro($macros["fields"], "macro_imageField", [(($__internal_compile_81 = $context["field"]) && is_array($__internal_compile_81) || $__internal_compile_81 instanceof ArrayAccess ? ($__internal_compile_81["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_82 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 162)) && is_array($__internal_compile_82) || $__internal_compile_82 instanceof ArrayAccess ? ($__internal_compile_82[(($__internal_compile_83 = $context["field"]) && is_array($__internal_compile_83) || $__internal_compile_83 instanceof ArrayAccess ? ($__internal_compile_83["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_84 = $context["field"]) && is_array($__internal_compile_84) || $__internal_compile_84 instanceof ArrayAccess ? ($__internal_compile_84["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["clearable" => ( !CoreExtension::getAttribute($this->env, $this->source,                         // line 163
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 163) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 163))])], 162, $context, $this->getSourceContext());
                        // line 164
                        yield "
                    ";
                    } else {
                        // line 166
                        yield "                        ";
                        yield CoreExtension::callMacro($macros["fields"], "macro_fileField", [(($__internal_compile_85 = $context["field"]) && is_array($__internal_compile_85) || $__internal_compile_85 instanceof ArrayAccess ? ($__internal_compile_85["name"] ?? null) : null), null, (($__internal_compile_86 = $context["field"]) && is_array($__internal_compile_86) || $__internal_compile_86 instanceof ArrayAccess ? ($__internal_compile_86["label"] ?? null) : null), ["onlyimages" => true]], 166, $context, $this->getSourceContext());
                        // line 168
                        yield "
                    ";
                    }
                    // line 170
                    yield "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 171
                    yield "                    ";
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [(($__internal_compile_87 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_87) || $__internal_compile_87 instanceof ArrayAccess ? ($__internal_compile_87[(($__internal_compile_88 = $context["field"]) && is_array($__internal_compile_88) || $__internal_compile_88 instanceof ArrayAccess ? ($__internal_compile_88["name"] ?? null) : null)] ?? null) : null)]);
                    // line 172
                    yield "                    ";
                    $context["picture_urls"] = [];
                    // line 173
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 174
                        yield "                        ";
                        $context["picture_urls"] = Twig\Extension\CoreExtension::merge(($context["picture_urls"] ?? null), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 175
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_89 = $context["field"]) && is_array($__internal_compile_89) || $__internal_compile_89 instanceof ArrayAccess ? ($__internal_compile_89["name"] ?? null) : null), ($context["picture_urls"] ?? null), (($__internal_compile_90 = $context["field"]) && is_array($__internal_compile_90) || $__internal_compile_90 instanceof ArrayAccess ? ($__internal_compile_90["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["clearable" => ( !CoreExtension::getAttribute($this->env, $this->source,                     // line 177
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 177) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 177))])], 176, $context, $this->getSourceContext());
                    // line 178
                    yield "
                ";
                } elseif ((                // line 179
($context["type"] ?? null) == "password")) {
                    // line 180
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_passwordField", [(($__internal_compile_91 = $context["field"]) && is_array($__internal_compile_91) || $__internal_compile_91 instanceof ArrayAccess ? ($__internal_compile_91["name"] ?? null) : null), (($__internal_compile_92 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_92) || $__internal_compile_92 instanceof ArrayAccess ? ($__internal_compile_92[(($__internal_compile_93 = $context["field"]) && is_array($__internal_compile_93) || $__internal_compile_93 instanceof ArrayAccess ? ($__internal_compile_93["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_94 = $context["field"]) && is_array($__internal_compile_94) || $__internal_compile_94 instanceof ArrayAccess ? ($__internal_compile_94["label"] ?? null) : null), ($context["fields_params"] ?? null)], 180, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 181
($context["type"] ?? null) == "tinymce")) {
                    // line 182
                    yield "                    ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["enable_richtext" => true]);
                    // line 183
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [(($__internal_compile_95 = $context["field"]) && is_array($__internal_compile_95) || $__internal_compile_95 instanceof ArrayAccess ? ($__internal_compile_95["name"] ?? null) : null), (($__internal_compile_96 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_96) || $__internal_compile_96 instanceof ArrayAccess ? ($__internal_compile_96[(($__internal_compile_97 = $context["field"]) && is_array($__internal_compile_97) || $__internal_compile_97 instanceof ArrayAccess ? ($__internal_compile_97["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_98 = $context["field"]) && is_array($__internal_compile_98) || $__internal_compile_98 instanceof ArrayAccess ? ($__internal_compile_98["label"] ?? null) : null), ($context["fields_params"] ?? null)], 183, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 184
($context["type"] ?? null) == "duration")) {
                    // line 185
                    yield "                    ";
                    $context["toadd"] = [];
                    // line 186
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(9, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 187
                        yield "                        ";
                        $context["toadd"] = Twig\Extension\CoreExtension::merge(($context["toadd"] ?? null), [($context["i"] * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"))]);
                        // line 188
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", [(($__internal_compile_99 = $context["field"]) && is_array($__internal_compile_99) || $__internal_compile_99 instanceof ArrayAccess ? ($__internal_compile_99["name"] ?? null) : null), (($__internal_compile_100 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($__internal_compile_100) || $__internal_compile_100 instanceof ArrayAccess ? ($__internal_compile_100[(($__internal_compile_101 = $context["field"]) && is_array($__internal_compile_101) || $__internal_compile_101 instanceof ArrayAccess ? ($__internal_compile_101["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_102 = $context["field"]) && is_array($__internal_compile_102) || $__internal_compile_102 instanceof ArrayAccess ? ($__internal_compile_102["label"] ?? null) : null), ($context["fields_params"] ?? null)], 189, $context, $this->getSourceContext());
                    yield "
                ";
                } elseif ((                // line 190
($context["type"] ?? null) == "itemtypename")) {
                    // line 191
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "itemtype_list", [], "array", true, true, false, 191)) {
                        // line 192
                        yield "                        ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge(($context["fields_params"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config((($__internal_compile_103 = $context["field"]) && is_array($__internal_compile_103) || $__internal_compile_103 instanceof ArrayAccess ? ($__internal_compile_103["itemtype_list"] ?? null) : null))]);
                        // line 193
                        yield "                    ";
                    }
                    // line 194
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_dropdownItemTypes", [(($__internal_compile_104 = $context["field"]) && is_array($__internal_compile_104) || $__internal_compile_104 instanceof ArrayAccess ? ($__internal_compile_104["name"] ?? null) : null), (($__internal_compile_105 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_105) || $__internal_compile_105 instanceof ArrayAccess ? ($__internal_compile_105[(($__internal_compile_106 = $context["field"]) && is_array($__internal_compile_106) || $__internal_compile_106 instanceof ArrayAccess ? ($__internal_compile_106["name"] ?? null) : null)] ?? null) : null), (($__internal_compile_107 = $context["field"]) && is_array($__internal_compile_107) || $__internal_compile_107 instanceof ArrayAccess ? ($__internal_compile_107["label"] ?? null) : null), ($context["fields_params"] ?? null)], 194, $context, $this->getSourceContext());
                    yield "
                ";
                } else {
                    // line 196
                    yield "                    ";
                    $context["field_value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 197
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "displaySpecificTypeField", [(($__internal_compile_108 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 197)) && is_array($__internal_compile_108) || $__internal_compile_108 instanceof ArrayAccess ? ($__internal_compile_108["id"] ?? null) : null), $context["field"], ($context["fields_params"] ?? null)], "method", false, false, false, 197), "html", null, true);
                        yield "
                    ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 199
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_field", [(($__internal_compile_109 = $context["field"]) && is_array($__internal_compile_109) || $__internal_compile_109 instanceof ArrayAccess ? ($__internal_compile_109["name"] ?? null) : null), ($context["field_value"] ?? null), (($__internal_compile_110 = $context["field"]) && is_array($__internal_compile_110) || $__internal_compile_110 instanceof ArrayAccess ? ($__internal_compile_110["label"] ?? null) : null)], 199, $context, $this->getSourceContext());
                    yield "
                ";
                }
                // line 201
                yield "            ";
            } elseif (CoreExtension::inFilter((($__internal_compile_111 = $context["field"]) && is_array($__internal_compile_111) || $__internal_compile_111 instanceof ArrayAccess ? ($__internal_compile_111["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 202
                yield "                ";
                $context["has_picture_field"] = true;
                // line 203
                yield "            ";
            }
            // line 204
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "
        ";
        // line 206
        if (($context["has_picture_field"] ?? null)) {
            // line 207
            yield "            ";
            yield CoreExtension::callMacro($macros["fields"], "macro_largeTitle", [_n("Picture", "Pictures", Session::getPluralNumber()), "fas fa-image"], 207, $context, $this->getSourceContext());
            yield "
        ";
        }
        // line 209
        yield "        ";
        // line 210
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 211
            yield "            ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_112 = $context["field"]) && is_array($__internal_compile_112) || $__internal_compile_112 instanceof ArrayAccess ? ($__internal_compile_112["type"] ?? null) : null), "")) : (""));
            // line 212
            yield "            ";
            if (CoreExtension::inFilter((($__internal_compile_113 = $context["field"]) && is_array($__internal_compile_113) || $__internal_compile_113 instanceof ArrayAccess ? ($__internal_compile_113["name"] ?? null) : null), ($context["picture_fields"] ?? null))) {
                // line 213
                yield "                ";
                if ((($context["type"] ?? null) == "picture")) {
                    // line 214
                    yield "                    ";
                    if (((($__internal_compile_114 = $context["field"]) && is_array($__internal_compile_114) || $__internal_compile_114 instanceof ArrayAccess ? ($__internal_compile_114["name"] ?? null) : null) == "picture_front")) {
                        // line 215
                        yield "                        ";
                        yield CoreExtension::callMacro($macros["fields"], "macro_smallTitle", [__("Rack pictures"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Rack")], 215, $context, $this->getSourceContext());
                        yield "
                    ";
                    }
                    // line 217
                    yield "                    ";
                    if ( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_115 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 217)) && is_array($__internal_compile_115) || $__internal_compile_115 instanceof ArrayAccess ? ($__internal_compile_115[(($__internal_compile_116 = $context["field"]) && is_array($__internal_compile_116) || $__internal_compile_116 instanceof ArrayAccess ? ($__internal_compile_116["name"] ?? null) : null)] ?? null) : null))) {
                        // line 218
                        yield "                        ";
                        yield CoreExtension::callMacro($macros["fields"], "macro_imageField", [(($__internal_compile_117 = $context["field"]) && is_array($__internal_compile_117) || $__internal_compile_117 instanceof ArrayAccess ? ($__internal_compile_117["name"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl((($__internal_compile_118 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 218)) && is_array($__internal_compile_118) || $__internal_compile_118 instanceof ArrayAccess ? ($__internal_compile_118[(($__internal_compile_119 = $context["field"]) && is_array($__internal_compile_119) || $__internal_compile_119 instanceof ArrayAccess ? ($__internal_compile_119["name"] ?? null) : null)] ?? null) : null)), (($__internal_compile_120 = $context["field"]) && is_array($__internal_compile_120) || $__internal_compile_120 instanceof ArrayAccess ? ($__internal_compile_120["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(($context["base_fields_params"] ?? null), ["clearable" => CoreExtension::getAttribute($this->env, $this->source,                         // line 219
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 219)])], 218, $context, $this->getSourceContext());
                        // line 220
                        yield "
                    ";
                    } else {
                        // line 222
                        yield "                        ";
                        yield CoreExtension::callMacro($macros["fields"], "macro_fileField", [(($__internal_compile_121 = $context["field"]) && is_array($__internal_compile_121) || $__internal_compile_121 instanceof ArrayAccess ? ($__internal_compile_121["name"] ?? null) : null), null, (($__internal_compile_122 = $context["field"]) && is_array($__internal_compile_122) || $__internal_compile_122 instanceof ArrayAccess ? ($__internal_compile_122["label"] ?? null) : null), ["onlyimages" => true]], 222, $context, $this->getSourceContext());
                        // line 224
                        yield "
                    ";
                    }
                    // line 226
                    yield "                ";
                } elseif ((($context["type"] ?? null) == "picture_gallery")) {
                    // line 227
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_smallTitle", [__("Other pictures"), "fas fa-images"], 227, $context, $this->getSourceContext());
                    yield "
                    ";
                    // line 228
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [(($__internal_compile_123 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_123) || $__internal_compile_123 instanceof ArrayAccess ? ($__internal_compile_123[(($__internal_compile_124 = $context["field"]) && is_array($__internal_compile_124) || $__internal_compile_124 instanceof ArrayAccess ? ($__internal_compile_124["name"] ?? null) : null)] ?? null) : null)]);
                    // line 229
                    yield "                    ";
                    $context["picture_urls"] = [];
                    // line 230
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["pictures"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 231
                        yield "                        ";
                        $context["picture_urls"] = Twig\Extension\CoreExtension::merge(($context["picture_urls"] ?? null), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 232
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 233
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_imageGalleryField", [(($__internal_compile_125 = $context["field"]) && is_array($__internal_compile_125) || $__internal_compile_125 instanceof ArrayAccess ? ($__internal_compile_125["name"] ?? null) : null), ($context["picture_urls"] ?? null), "", Twig\Extension\CoreExtension::merge(($context["base_fields_params"] ?? null), ["clearable" => CoreExtension::getAttribute($this->env, $this->source,                     // line 234
($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 234), "no_label" => true])], 233, $context, $this->getSourceContext());
                    // line 236
                    yield "
                ";
                }
                // line 238
                yield "            ";
            }
            // line 239
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "    </div>
    ";
        // line 241
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dropdown_form.html.twig";
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
        return array (  580 => 241,  577 => 240,  571 => 239,  568 => 238,  564 => 236,  562 => 234,  560 => 233,  554 => 232,  551 => 231,  546 => 230,  543 => 229,  541 => 228,  536 => 227,  533 => 226,  529 => 224,  526 => 222,  522 => 220,  520 => 219,  518 => 218,  515 => 217,  509 => 215,  506 => 214,  503 => 213,  500 => 212,  497 => 211,  492 => 210,  490 => 209,  484 => 207,  482 => 206,  479 => 205,  473 => 204,  470 => 203,  467 => 202,  464 => 201,  458 => 199,  451 => 197,  448 => 196,  442 => 194,  439 => 193,  436 => 192,  433 => 191,  431 => 190,  426 => 189,  420 => 188,  417 => 187,  412 => 186,  409 => 185,  407 => 184,  402 => 183,  399 => 182,  397 => 181,  392 => 180,  390 => 179,  387 => 178,  385 => 177,  383 => 176,  377 => 175,  374 => 174,  369 => 173,  366 => 172,  363 => 171,  360 => 170,  356 => 168,  353 => 166,  349 => 164,  347 => 163,  345 => 162,  342 => 161,  340 => 160,  335 => 159,  333 => 158,  328 => 157,  326 => 156,  321 => 155,  319 => 154,  314 => 153,  312 => 152,  307 => 151,  305 => 150,  300 => 149,  297 => 148,  294 => 147,  291 => 146,  289 => 145,  284 => 144,  281 => 143,  278 => 142,  275 => 141,  272 => 140,  269 => 139,  266 => 138,  263 => 137,  260 => 136,  257 => 135,  254 => 134,  252 => 133,  247 => 132,  245 => 131,  242 => 130,  239 => 129,  236 => 128,  233 => 127,  230 => 126,  227 => 125,  224 => 124,  221 => 123,  218 => 122,  215 => 121,  213 => 119,  211 => 118,  209 => 117,  204 => 116,  202 => 115,  197 => 114,  195 => 113,  190 => 112,  187 => 111,  184 => 110,  181 => 109,  178 => 108,  176 => 106,  174 => 105,  172 => 104,  169 => 103,  167 => 101,  166 => 100,  165 => 99,  164 => 97,  163 => 96,  162 => 95,  160 => 93,  158 => 92,  155 => 91,  153 => 89,  152 => 84,  151 => 83,  149 => 81,  147 => 80,  142 => 79,  140 => 78,  137 => 77,  134 => 76,  131 => 75,  128 => 74,  125 => 73,  122 => 72,  119 => 71,  117 => 70,  114 => 69,  111 => 68,  108 => 67,  105 => 66,  100 => 65,  97 => 63,  93 => 61,  91 => 59,  89 => 57,  87 => 56,  83 => 54,  81 => 53,  80 => 51,  79 => 50,  77 => 49,  74 => 47,  71 => 46,  69 => 45,  65 => 43,  62 => 42,  59 => 41,  56 => 40,  53 => 39,  51 => 38,  47 => 37,  43 => 35,  41 => 34,  38 => 33,);
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

<div class=\"asset\">
    {{ include('components/form/header.html.twig') }}
    {% set rand          = random() %}
    {% set base_fields_params = fields_params ?? [] %}
    {% set params        = params ?? [] %}
    {% set target        = params['target'] ?? item.getFormURL() %}
    {% set withtemplate  = params['withtemplate'] ?? '' %}

    <div class=\"card-body row\">
        {% set picture_fields = ['picture_front', 'picture_rear', 'pictures'] %}
        {% set has_picture_field = false %}

        {# Show fields common to all dropdowns #}
        {{ fields.autoNameField(
            item.isField('designation') ? 'designation' : 'name',
            item,
            __('Name'),
            withtemplate
        ) }}

        {% if item.isField('comment') %}
            {{ fields.textareaField(
                'comment',
                item.fields['comment'],
                _n('Comment', 'Comments', get_plural_number()),
            ) }}
        {% endif %}

        {# Dynamically show additional fields unique to certain dropdowns #}
        {% for field in additional_fields %}
            {% set fields_params = base_fields_params %}
            {% set type = field['type']|default('') %}
            {% set show_field = true %}
            {% if field['name'] == 'entities_id' and (type != 'parent' or item.fields['id'] == 0) %}
                {# Show entity selector only if it is a \"parent\" field #}
                {% set show_field = false %}
            {% endif %}
            {% if field['name'] in picture_fields %}
                {% set show_field = false %}
            {% endif %}
            {% if show_field %}

                {% if field['name'] == 'header' %}
                    {{ fields.largeTitle(field['label']) }}
                {% elseif field['name'] == 'content' %}
                    {{ fields.textareaField(
                        'content',
                        item.fields['content'],
                        field['label'],
                        {
                            full_width: true,
                            full_width_adapt_column: false,
                            is_horizontal: false,
                            enable_richtext: field['enable_richtext'] is defined ? field['enable_richtext'] : true,
                        }
                    ) }}
                {% elseif type == 'UserDropdown' %}
                    {{ fields.dropdownField(
                        'User',
                        field['name'],
                        item.fields[field['name']],
                        field['label'],
                        {
                            'entity': item.fields['entities_id'],
                            'right': field['right']|default('interface'),
                            'rand': rand,
                        }
                    ) }}
                {% elseif type == 'dropdownValue' %}
                    {% set dropdown_params = {
                        'entity': item.fields['entities_id']
                    } %}
                    {% if field['condition'] is defined %}
                        {% set dropdown_params = dropdown_params|merge({'condition': field['condition']}) %}
                    {% endif %}
                    {% set dropdown_itemtype = call('getItemtypeForForeignKeyField', [field['name']]) %}
                    {{ fields.dropdownField(dropdown_itemtype, field['name'], item.fields[field['name']], field['label'], dropdown_params) }}
                {% elseif type == 'text' %}
                    {{ fields.autoNameField(field['name'], item, field['label'], withtemplate, fields_params) }}
                {% elseif type == 'textarea' %}
                    {{ fields.textareaField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'integer' %}
                    {% set fields_params = {
                        'value': item.fields[field['name']]
                    } %}
                    {% if field['min'] is defined %}
                        {% set fields_params = fields_params|merge({'min': field['min']}) %}
                    {% endif %}
                    {% if field['step'] is defined %}
                        {% set fields_params = fields_params|merge({'step': field['step']}) %}
                    {% endif %}
                    {% if field['max'] is defined %}
                        {% set fields_params = fields_params|merge({'max': field['max']}) %}
                    {% endif %}

                    {% set fields_params = fields_params|merge({'type': 'number'}) %}
                    {{ fields.numberField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'timestamp' %}
                    {% set fields_params = {'value': item.fields[field['name']]} %}
                    {% if field['min'] is defined %}
                        {% set fields_params = fields_params|merge({'min': field['min']}) %}
                    {% endif %}
                    {% if field['step'] is defined %}
                        {% set fields_params = fields_params|merge({'step': field['step']}) %}
                    {% endif %}
                    {% if field['max'] is defined %}
                        {% set fields_params = fields_params|merge({'max': field['max']}) %}
                    {% endif %}
                    {{ fields.dropdownTimestampField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'parent' %}
                    {% set restrict = field['name'] == 'entities_id' ? -1 : item.getEntityID() %}
                    {% set fields_params = fields_params|merge({'entity': restrict}) %}
                    {% set fields_params = fields_params|merge({'used': (item.fields['id'] > 0 ? call('getSonsOf', [item.getTable(), item.fields['id']]) : [])}) %}
                    {{ fields.dropdownField(item, field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'icon' %}
                    {{ fields.dropdownIcons(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'bool' %}
                    {{ fields.dropdownYesNo(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'color' %}
                    {{ fields.colorField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'date' %}
                    {{ fields.dateField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'datetime' %}
                    {{ fields.datetimeField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'picture' %}
                    {% if item.fields[field['name']] is not empty %}
                        {{ fields.imageField(field['name'], item.fields[field['name']]|picture_url, field['label'], fields_params|merge({
                        'clearable': (not item.isNewItem() and item.canUpdateItem())
                    })) }}
                    {% else %}
                        {{ fields.fileField(field['name'], null, field['label'], {
                        'onlyimages': true
                    }) }}
                    {% endif %}
                {% elseif type == 'picture_gallery' %}
                    {% set pictures = call('importArrayFromDB', [item.fields[field['name']]]) %}
                    {% set picture_urls = [] %}
                    {% for picture in pictures %}
                        {% set picture_urls = picture_urls|merge([picture|picture_url]) %}
                    {% endfor %}
                    {{ fields.imageGalleryField(field['name'], picture_urls, field['label'], fields_params|merge({
                    'clearable': (not item.isNewItem() and item.canUpdateItem())
                })) }}
                {% elseif type == 'password' %}
                    {{ fields.passwordField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'tinymce' %}
                    {% set fields_params = fields_params|merge({'enable_richtext': true}) %}
                    {{ fields.textareaField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'duration' %}
                    {% set toadd = [] %}
                    {% for i in 9..100 %}
                        {% set toadd = toadd|merge([i * constant('HOUR_TIMESTAMP')]) %}
                    {% endfor %}
                    {{ fields.dropdownTimestampField(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% elseif type == 'itemtypename' %}
                    {% if field['itemtype_list'] is defined %}
                        {% set fields_params = fields_params|merge({'types': config(field['itemtype_list'])}) %}
                    {% endif %}
                    {{ fields.dropdownItemTypes(field['name'], item.fields[field['name']], field['label'], fields_params) }}
                {% else %}
                    {% set field_value %}
                        {{ item.displaySpecificTypeField(item.fields['id'], field, fields_params) }}
                    {% endset %}
                    {{ fields.field(field['name'], field_value, field['label']) }}
                {% endif %}
            {% elseif field['name'] in picture_fields %}
                {% set has_picture_field = true %}
            {% endif %}
        {% endfor %}

        {% if has_picture_field %}
            {{ fields.largeTitle(_n('Picture', 'Pictures', get_plural_number()), 'fas fa-image') }}
        {% endif %}
        {# Show pictures at the bottom of the form #}
        {% for field in additional_fields %}
            {% set type = field['type']|default('') %}
            {% if field['name'] in picture_fields %}
                {% if type == 'picture' %}
                    {% if field['name'] == 'picture_front' %}
                        {{ fields.smallTitle(__('Rack pictures'), 'Rack'|itemtype_icon) }}
                    {% endif %}
                    {% if item.fields[field['name']] is not empty %}
                        {{ fields.imageField(field['name'], item.fields[field['name']]|picture_url, field['label'], base_fields_params|merge({
                        'clearable': item.canUpdateItem()
                    })) }}
                    {% else %}
                        {{ fields.fileField(field['name'], null, field['label'], {
                        'onlyimages': true
                    }) }}
                    {% endif %}
                {% elseif type == 'picture_gallery' %}
                    {{ fields.smallTitle(__('Other pictures'), 'fas fa-images') }}
                    {% set pictures = call('importArrayFromDB', [item.fields[field['name']]]) %}
                    {% set picture_urls = [] %}
                    {% for picture in pictures %}
                        {% set picture_urls = picture_urls|merge([picture|picture_url]) %}
                    {% endfor %}
                    {{ fields.imageGalleryField(field['name'], picture_urls, '', base_fields_params|merge({
                        'clearable': item.canUpdateItem(),
                        'no_label': true
                    })) }}
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
    {{ include('components/form/buttons.html.twig') }}
</div>
", "dropdown_form.html.twig", "/var/www/glpi/templates/dropdown_form.html.twig");
    }
}