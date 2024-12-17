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

/* components/rss_feed.html.twig */
class __TwigTemplate_deecfa32f41aa36bb699d927b0064a9e extends Template
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
<div class=\"firstbloc\">
   ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["rss_feed"] ?? null), "error", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["rss_feed"] ?? null), "error", [], "any", false, false, false, 35)))) {
            // line 36
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rss_feed"] ?? null), "error", [], "any", false, false, false, 36), "html", null, true);
            yield "
   ";
        }
        // line 38
        yield "   <table class=\"table table-striped table-hover\">
      <thead>
         <tr>
            <th colspan=\"3\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rss_feed"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
        yield "</th>
         </tr>
      </thead>
      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["rss_feed"] ?? null), "items", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["rss_item"]) {
            // line 45
            yield "         <tr class=\"tab_bg_1\">
            <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rss_item"], "timestamp", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
            <td>
               ";
            // line 48
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["rss_item"], "link", [], "any", false, false, false, 48))) {
                // line 49
                yield "                  <a target=\"_blank\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rss_item"], "link", [], "any", false, false, false, 49), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rss_item"], "title", [], "any", false, false, false, 49), "html", null, true);
                yield "</a>
               ";
            } else {
                // line 51
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rss_item"], "title", [], "any", false, false, false, 51), "html", null, true);
                yield "
               ";
            }
            // line 53
            yield "            </td>
            <td>
               ";
            // line 55
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 56
            yield "               ";
            $context["preview"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml(CoreExtension::getAttribute($this->env, $this->source, $context["rss_item"], "content", [], "any", false, false, false, 56));
            // line 57
            yield "               ";
            $context["preview"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["preview"] ?? null)) > 1000)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["preview"] ?? null), 0, 1000) . " (...)")) : (($context["preview"] ?? null)));
            // line 58
            yield "               <span id=\"rssitem";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" class=\"pointer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["preview"] ?? null), "html", null, true);
            yield "</span>
               ";
            // line 59
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [CoreExtension::getAttribute($this->env, $this->source, $context["rss_item"], "content", [], "any", false, false, false, 59), ["applyto" => ("rssitem" .             // line 60
($context["rand"] ?? null)), "display" => true]]);
            // line 63
            yield "            </td>
         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rss_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "   </table>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/rss_feed.html.twig";
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
        return array (  119 => 66,  111 => 63,  109 => 60,  108 => 59,  101 => 58,  98 => 57,  95 => 56,  93 => 55,  89 => 53,  83 => 51,  75 => 49,  73 => 48,  68 => 46,  65 => 45,  61 => 44,  55 => 41,  50 => 38,  44 => 36,  42 => 35,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/rss_feed.html.twig", "/var/www/glpi/templates/components/rss_feed.html.twig");
    }
}
