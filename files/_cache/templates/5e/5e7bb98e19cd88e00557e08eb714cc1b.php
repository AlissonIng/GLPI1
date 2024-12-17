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

/* pages/assets/socket.html.twig */
class __TwigTemplate_0c7a005d90c0716ffdc68e1722139834 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/socket.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/socket.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "   <input type=\"hidden\" name=\"itemtype\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
        yield "\">
   <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
        yield "\">

   ";
        // line 42
        yield CoreExtension::callMacro($macros["fields"], "macro_nullField", [], 42, $context, $this->getSourceContext());
        yield "

   ";
        // line 44
        yield CoreExtension::callMacro($macros["fields"], "macro_numberField", ["position", (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["position"] ?? null) : null), __("Position"),         // line 48
($context["field_options"] ?? null)], 44, $context, $this->getSourceContext());
        // line 49
        yield "


   ";
        // line 52
        $context["wiring_side"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 53
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Socket::dropdownWiringSide", ["wiring_side", ["value" => (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,             // line 56
($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["wiring_side"] ?? null) : null)]]);
            // line 59
            yield "   ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "   ";
        yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["wiring_side",         // line 62
($context["wiring_side"] ?? null), __("Wiring side")], 60, $context, $this->getSourceContext());
        // line 64
        yield "

   ";
        // line 66
        $context["networkports"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 67
            yield "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Socket::showNetworkPortForm", [(($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,             // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["items_id"] ?? null) : null), (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["networkports_id"] ?? null) : null),             // line 71
($context["params"] ?? null)]);
            // line 73
            yield "   ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        yield "   ";
        yield CoreExtension::callMacro($macros["fields"], "macro_htmlField", ["networkports_id",         // line 76
($context["networkports"] ?? null), _n("Network port", "Network ports", Session::getPluralNumber())], 74, $context, $this->getSourceContext());
        // line 78
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/assets/socket.html.twig";
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
        return array (  115 => 78,  113 => 76,  111 => 74,  107 => 73,  105 => 71,  104 => 70,  103 => 69,  102 => 68,  100 => 67,  98 => 66,  94 => 64,  92 => 62,  90 => 60,  86 => 59,  84 => 56,  82 => 53,  80 => 52,  75 => 49,  73 => 48,  72 => 46,  71 => 44,  66 => 42,  61 => 40,  56 => 39,  52 => 38,  47 => 34,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/socket.html.twig", "/var/www/glpi/templates/pages/assets/socket.html.twig");
    }
}
