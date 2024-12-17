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

/* components/form/computervirtualmachine.html.twig */
class __TwigTemplate_cd7b4b5d87c8e77b881a7547797626a5 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/computervirtualmachine.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_header"] ?? null), ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false))))) : (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false)))));
        // line 37
        $context["bg"] = "";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 38)) {
            // line 39
            yield "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 41
        yield "
<div class=\"asset ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        yield "

   ";
        // line 45
        $context["params"] = (($context["params"]) ?? ([]));
        // line 46
        yield "   ";
        $context["field_options"] = ["locked_fields" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 47)];
        // line 49
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">

                  ";
        // line 56
        $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ($context["params"] ?? null));
        // line 57
        yield "
                  <input type=\"hidden\" name=\"computers_id\"  value=";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["computer"] ?? null), "getID", [], "method", false, false, false, 58), "html", null, true);
        yield ">

                  ";
        // line 60
        yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["Computer", CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["computer"] ?? null), "getLink", [], "method", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["computer"] ?? null), "getTypeName", [1], "method", false, false, false, 63),         // line 64
($context["field_options"] ?? null)], 60, $context, $this->getSourceContext());
        // line 65
        yield "

                  ";
        // line 67
        $context["is_dynamic_value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::getYesNo", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["is_dynamic"] ?? null) : null)]);
        // line 68
        yield "                  ";
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["is_dynamic", ($context["is_dynamic_value"] ?? null), __("Automatic Inventory")], 68, $context, $this->getSourceContext());
        yield "

                  ";
        // line 70
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["name", (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null), __("Name"),         // line 74
($context["field_options"] ?? null)], 70, $context, $this->getSourceContext());
        // line 75
        yield "

                  ";
        // line 77
        yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),         // line 81
($context["field_options"] ?? null)], 77, $context, $this->getSourceContext());
        // line 82
        yield "

                  ";
        // line 84
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["VirtualMachineType", "virtualmachinetypes_id", (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["virtualmachinetypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("VirtualMachineType"),         // line 89
($context["field_options"] ?? null)], 84, $context, $this->getSourceContext());
        // line 90
        yield "

                  ";
        // line 92
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["VirtualMachineSystem", "virtualmachinesystems_id", (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,         // line 95
($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["virtualmachinesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("VirtualMachineSystem"),         // line 97
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
        // line 98
        yield "

                  ";
        // line 100
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["VirtualMachineState", "virtualmachinestates_id", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["virtualmachinestates_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("VirtualMachineState"),         // line 105
($context["field_options"] ?? null)], 100, $context, $this->getSourceContext());
        // line 106
        yield "

                  ";
        // line 108
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["uuid", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,         // line 110
($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["uuid"] ?? null) : null), __("UUID"),         // line 112
($context["field_options"] ?? null)], 108, $context, $this->getSourceContext());
        // line 113
        yield "

                  ";
        // line 115
        yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["Computer",         // line 117
($context["linked_computer"] ?? null), __("Machine"),         // line 119
($context["field_options"] ?? null)], 115, $context, $this->getSourceContext());
        // line 120
        yield "

                  ";
        // line 122
        yield CoreExtension::callMacro($macros["fields"], "macro_numberField", ["ram", (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,         // line 124
($context["item"] ?? null), "fields", [], "any", false, false, false, 124)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["ram"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")), Twig\Extension\CoreExtension::merge(        // line 126
($context["field_options"] ?? null), ["min" => 0])], 122, $context, $this->getSourceContext());
        // line 127
        yield "

                  ";
        // line 129
        yield CoreExtension::callMacro($macros["fields"], "macro_numberField", ["vcpu", (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,         // line 131
($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["vcpu"] ?? null) : null), _x("quantity", "Processors number"), Twig\Extension\CoreExtension::merge(        // line 133
($context["field_options"] ?? null), ["min" => 0])], 129, $context, $this->getSourceContext());
        // line 134
        yield "

               </div> ";
        // line 137
        yield "            </div> ";
        // line 138
        yield "         </div> ";
        // line 139
        yield "      </div> ";
        // line 140
        yield "   </div> ";
        // line 141
        yield "
   ";
        // line 142
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
        return "components/form/computervirtualmachine.html.twig";
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
        return array (  193 => 142,  190 => 141,  188 => 140,  186 => 139,  184 => 138,  182 => 137,  178 => 134,  176 => 133,  175 => 131,  174 => 129,  170 => 127,  168 => 126,  167 => 124,  166 => 122,  162 => 120,  160 => 119,  159 => 117,  158 => 115,  154 => 113,  152 => 112,  151 => 110,  150 => 108,  146 => 106,  144 => 105,  143 => 103,  142 => 100,  138 => 98,  136 => 97,  135 => 95,  134 => 92,  130 => 90,  128 => 89,  127 => 87,  126 => 84,  122 => 82,  120 => 81,  119 => 79,  118 => 77,  114 => 75,  112 => 74,  111 => 72,  110 => 70,  104 => 68,  102 => 67,  98 => 65,  96 => 64,  95 => 63,  94 => 62,  93 => 60,  88 => 58,  85 => 57,  83 => 56,  74 => 49,  72 => 47,  70 => 46,  68 => 45,  63 => 43,  59 => 42,  56 => 41,  52 => 39,  50 => 38,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/computervirtualmachine.html.twig", "/var/www/glpi/templates/components/form/computervirtualmachine.html.twig");
    }
}
