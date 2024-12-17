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

/* components/form/item_disk.html.twig */
class __TwigTemplate_a9712f1b56ca2cfa112eef6d43dd51fe extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/item_disk.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["no_header"] = true;
        // line 38
        $context["no_inventory_footer"] = true;
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "components/form/item_disk.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "
    <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
        yield "\">

   ";
        // line 45
        yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["items_id", CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["asset_item"] ?? null), "getLink", [], "method", false, false, false, 47), __("Item link"), Twig\Extension\CoreExtension::merge(        // line 49
($context["field_options"] ?? null), ($context["params"] ?? null))], 45, $context, $this->getSourceContext());
        // line 50
        yield "

   ";
        // line 52
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["device", (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["device"] ?? null) : null), __("Partition"), Twig\Extension\CoreExtension::merge(        // line 56
($context["field_options"] ?? null), ($context["params"] ?? null))], 52, $context, $this->getSourceContext());
        // line 57
        yield "

   ";
        // line 59
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["mountpoint", (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["mountpoint"] ?? null) : null), __("Mount Point"), Twig\Extension\CoreExtension::merge(        // line 63
($context["field_options"] ?? null), ($context["params"] ?? null))], 59, $context, $this->getSourceContext());
        // line 64
        yield "

   ";
        // line 66
        $context["filesystems_label"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Filesystem::getTypeName", [0]);
        // line 67
        yield "   ";
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Filesystem", "filesystems_id", (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["filesystems_id"] ?? null) : null),         // line 71
($context["filesystems_label"] ?? null), Twig\Extension\CoreExtension::merge(        // line 72
($context["field_options"] ?? null), ($context["params"] ?? null))], 67, $context, $this->getSourceContext());
        // line 73
        yield "

   ";
        // line 75
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["totalsize", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["totalsize"] ?? null) : null), __("Global size"), Twig\Extension\CoreExtension::merge(        // line 79
($context["field_options"] ?? null), ($context["params"] ?? null))], 75, $context, $this->getSourceContext());
        // line 80
        yield "

   ";
        // line 82
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["freesize", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,         // line 84
($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["freesize"] ?? null) : null), __("Free size"), Twig\Extension\CoreExtension::merge(        // line 86
($context["field_options"] ?? null), ($context["params"] ?? null))], 82, $context, $this->getSourceContext());
        // line 87
        yield "

   ";
        // line 89
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownArrayField", ["encryption_status", (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,         // line 91
($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["encryption_status"] ?? null) : null),         // line 92
($context["encryption_status_list"] ?? null), __("Encryption tool"), Twig\Extension\CoreExtension::merge(        // line 94
($context["field_options"] ?? null), ($context["params"] ?? null))], 89, $context, $this->getSourceContext());
        // line 95
        yield "

   ";
        // line 97
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["encryption_tool", (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["encryption_tool"] ?? null) : null), __("Encryption Tool"), Twig\Extension\CoreExtension::merge(        // line 101
($context["field_options"] ?? null), ($context["params"] ?? null))], 97, $context, $this->getSourceContext());
        // line 102
        yield "

   ";
        // line 104
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["encryption_algorithm", (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["encryption_algorithm"] ?? null) : null), __("Encryption Algorithm"), Twig\Extension\CoreExtension::merge(        // line 108
($context["field_options"] ?? null), ($context["params"] ?? null))], 104, $context, $this->getSourceContext());
        // line 109
        yield "

   ";
        // line 111
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["encryption_type", (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source,         // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["encryption_type"] ?? null) : null), __("Encryption Type"), Twig\Extension\CoreExtension::merge(        // line 115
($context["field_options"] ?? null), ($context["params"] ?? null))], 111, $context, $this->getSourceContext());
        // line 116
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/item_disk.html.twig";
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
        return array (  153 => 116,  151 => 115,  150 => 113,  149 => 111,  145 => 109,  143 => 108,  142 => 106,  141 => 104,  137 => 102,  135 => 101,  134 => 99,  133 => 97,  129 => 95,  127 => 94,  126 => 92,  125 => 91,  124 => 89,  120 => 87,  118 => 86,  117 => 84,  116 => 82,  112 => 80,  110 => 79,  109 => 77,  108 => 75,  104 => 73,  102 => 72,  101 => 71,  100 => 70,  98 => 67,  96 => 66,  92 => 64,  90 => 63,  89 => 61,  88 => 59,  84 => 57,  82 => 56,  81 => 54,  80 => 52,  76 => 50,  74 => 49,  73 => 47,  72 => 45,  67 => 43,  63 => 42,  60 => 41,  56 => 40,  51 => 34,  49 => 38,  47 => 37,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/item_disk.html.twig", "/var/www/glpi/templates/components/form/item_disk.html.twig");
    }
}
