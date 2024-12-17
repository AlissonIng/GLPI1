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

/* pages/assets/software.html.twig */
class __TwigTemplate_8b5047144c4d275df943daee42f9f6d1 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/software.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/software.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        $context["dd_software"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            yield "    ";
            yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Software", ["value" => (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["softwares_id"] ?? null) : null), "rand" =>             // line 42
($context["rand"] ?? null)]);
            // line 43
            yield "
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        yield "
    ";
        // line 46
        yield CoreExtension::callMacro($macros["fields"], "macro_checkboxField", ["is_update", (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_update"] ?? null) : null), __("Upgrade"), Twig\Extension\CoreExtension::merge(        // line 50
($context["field_options"] ?? null), ["add_field_html" => (__("from") .         // line 51
($context["dd_software"] ?? null))])], 46, $context, $this->getSourceContext());
        // line 53
        yield "

    ";
        // line 55
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["SoftwareCategory", "softwarecategories_id", (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["softwarecategories_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SoftwareCategory"),         // line 60
($context["field_options"] ?? null)], 55, $context, $this->getSourceContext());
        // line 61
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/assets/software.html.twig";
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
        return array (  85 => 61,  83 => 60,  82 => 58,  81 => 55,  77 => 53,  75 => 51,  74 => 50,  73 => 48,  72 => 46,  69 => 45,  64 => 43,  62 => 42,  61 => 41,  59 => 40,  56 => 39,  52 => 38,  47 => 34,  45 => 36,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/assets/software.html.twig", "/var/www/glpi/templates/pages/assets/software.html.twig");
    }
}
