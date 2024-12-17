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

/* components/form/computerantivirus.html.twig */
class __TwigTemplate_7cc0d129c68d63cc2f05ef7585669bcc extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/computerantivirus.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["no_header"] = true;
        // line 38
        $context["no_inventory_footer"] = true;
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "components/form/computerantivirus.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "
    <input type=\"hidden\" name=\"computers_id\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["computers_id"] ?? null) : null), "html", null, true);
        yield "\">

   ";
        // line 44
        yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["computers_id", CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["computer"] ?? null), "getLink", [], "method", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["computer"] ?? null), "getTypeName", [1], "method", false, false, false, 47), Twig\Extension\CoreExtension::merge(        // line 48
($context["field_options"] ?? null), ($context["params"] ?? null))], 44, $context, $this->getSourceContext());
        // line 49
        yield "

   ";
        // line 51
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["is_uptodate", (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_uptodate"] ?? null) : null), __("Up to date"),         // line 55
($context["field_options"] ?? null)], 51, $context, $this->getSourceContext());
        // line 56
        yield "

   ";
        // line 58
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["antivirus_version", (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["antivirus_version"] ?? null) : null), __("Antivirus version"), Twig\Extension\CoreExtension::merge(        // line 62
($context["field_options"] ?? null), ($context["params"] ?? null))], 58, $context, $this->getSourceContext());
        // line 63
        yield "

   ";
        // line 65
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["signature_version", (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["signature_version"] ?? null) : null), __("Signature database version"), Twig\Extension\CoreExtension::merge(        // line 69
($context["field_options"] ?? null), ($context["params"] ?? null))], 65, $context, $this->getSourceContext());
        // line 70
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/computerantivirus.html.twig";
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
        return array (  97 => 70,  95 => 69,  94 => 67,  93 => 65,  89 => 63,  87 => 62,  86 => 60,  85 => 58,  81 => 56,  79 => 55,  78 => 53,  77 => 51,  73 => 49,  71 => 48,  70 => 47,  69 => 46,  68 => 44,  63 => 42,  60 => 41,  56 => 40,  51 => 34,  49 => 38,  47 => 37,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/computerantivirus.html.twig", "/var/www/glpi/templates/components/form/computerantivirus.html.twig");
    }
}
