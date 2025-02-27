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

/* components/itilobject/timeline/sub_documents.html.twig */
class __TwigTemplate_b75e55834c495384b4836db9ff3755c0 extends Template
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
        $context["documents"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry"] ?? null), "documents", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["entry"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["documents"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["entry"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["documents"] ?? null) : null)) : ([]));
        // line 35
        yield "<div class=\"list-group list-group-hoverable sub-documents\">
   ";
        // line 36
        $context["media_docs"] = Twig\Extension\CoreExtension::filter($this->env, ($context["documents"] ?? null), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return ((($__internal_compile_2 = ($context["d"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_is_image"] ?? null) : null) || (is_string($__internal_compile_3 = (($__internal_compile_5 = (($__internal_compile_6 = ($context["d"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["item"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["mime"] ?? null) : null)) && is_string($__internal_compile_4 = "video") && str_starts_with($__internal_compile_3, $__internal_compile_4))); });
        // line 37
        yield "   ";
        $context["other_docs"] = Twig\Extension\CoreExtension::filter($this->env, ($context["documents"] ?? null), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return  !((($__internal_compile_7 = ($context["d"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_is_image"] ?? null) : null) || (is_string($__internal_compile_8 = (($__internal_compile_10 = (($__internal_compile_11 = ($context["d"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["item"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["mime"] ?? null) : null)) && is_string($__internal_compile_9 = "video") && str_starts_with($__internal_compile_8, $__internal_compile_9))); });
        // line 38
        yield "
   ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["media_docs"] ?? null)) > 0)) {
            // line 40
            yield "      ";
            $context["imgs"] = [];
            // line 41
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["media_docs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 42
                yield "         ";
                $context["fk"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 42);
                // line 43
                yield "         ";
                $context["docpath"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(((((("front/document.send.php?docid=" . (($__internal_compile_12 = (($__internal_compile_13 = $context["document"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["item"] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)) . "&") . ($context["fk"] ?? null)) . "=") . (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null)));
                // line 44
                yield "         ";
                $context["delete_link"] = ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 44) . "?delete_document&documents_id=") . (($__internal_compile_15 = (($__internal_compile_16 = $context["document"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["item"] ?? null) : null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)) . "&") . ($context["fk"] ?? null)) . "=") . (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null));
                // line 45
                yield "
         ";
                // line 46
                $context["post_figure_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 47
                    yield "            <div class=\"col-auto\">
               <div class=\"list-group-item-actions d-flex flex-column\">
                  ";
                    // line 49
                    if ((($__internal_compile_18 = (($__internal_compile_19 = $context["document"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["item"] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_can_edit"] ?? null) : null)) {
                        // line 50
                        yield "                     <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document", (($__internal_compile_20 = (($__internal_compile_21 = $context["document"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["item"] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null)), "html", null, true);
                        yield "\"
                        class=\"btn btn-sm btn-ghost-secondary\" title=\"";
                        // line 51
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Edit"), "html", null, true);
                        yield "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-edit\"></i>
                     </a>
                  ";
                    }
                    // line 56
                    yield "
                  ";
                    // line 57
                    if ((($__internal_compile_22 = (($__internal_compile_23 = $context["document"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["item"] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["_can_delete"] ?? null) : null)) {
                        // line 58
                        yield "                     <form class=\"d-inline\" method=\"post\" action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 58), "html", null, true);
                        yield "\">
                        <input type=\"hidden\" name=\"";
                        // line 59
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fk"] ?? null), "html", null, true);
                        yield "\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 59)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["id"] ?? null) : null), "html", null, true);
                        yield "\">
                        <input type=\"hidden\" name=\"documents_id\" value=\"";
                        // line 60
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_25 = (($__internal_compile_26 = $context["document"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["item"] ?? null) : null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
                        yield "\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                        // line 61
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                        yield "\" />
                        <button type=\"submit\" class=\"btn btn-sm btn-ghost-secondary\" name=\"delete_document\"
                                title=\"";
                        // line 63
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           <i class=\"ti ti-trash\"></i>
                        </button>
                     </form>
                  ";
                    }
                    // line 69
                    yield "               </div>
            </div>
         ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 72
                yield "
         ";
                // line 73
                if ((($__internal_compile_27 = $context["document"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["_is_image"] ?? null) : null)) {
                    // line 74
                    yield "            ";
                    $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), [["title" => "", "thumbnail_src" => (                    // line 76
($context["docpath"] ?? null) . "&context=timeline"), "thumbnail_w" => "auto", "thumbnail_h" => "auto", "src" =>                     // line 79
($context["docpath"] ?? null), "w" => (($__internal_compile_28 = (($__internal_compile_29 =                     // line 80
$context["document"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["_size"] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[0] ?? null) : null), "h" => (($__internal_compile_30 = (($__internal_compile_31 =                     // line 81
$context["document"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["_size"] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[1] ?? null) : null), "img_class" => "shadow ", "gallery_item_class" => "list-group-item border-0 d-flex", "post_figure_content" =>                     // line 84
($context["post_figure_content"] ?? null)]]);
                    // line 86
                    yield "         ";
                } else {
                    // line 87
                    yield "            ";
                    $context["video_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 88
                        yield "               <span class=\"d-flex justify-content-center align-items-center mt-5\">
                  <video controls=\"controls\" width=\"90%\" src=\"";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["docpath"] ?? null), "html", null, true);
                        yield "\"></video>
               </span>
            ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 92
                    yield "            ";
                    $context["imgs"] = Twig\Extension\CoreExtension::merge(($context["imgs"] ?? null), [["title" => "", "_video" => true, "html" =>                     // line 95
($context["video_html"] ?? null), "img_class" => "shadow", "gallery_item_class" => "list-group-item border-0 d-flex", "post_figure_content" =>                     // line 98
($context["post_figure_content"] ?? null)]]);
                    // line 100
                    yield "         ";
                }
                // line 101
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "      ";
            yield from             $this->loadTemplate("components/photoswipe.html.twig", "components/itilobject/timeline/sub_documents.html.twig", 102)->unwrap()->yield(CoreExtension::merge($context, ["imgs" =>             // line 103
($context["imgs"] ?? null), "gallery_type" => "horizontal", "controls" => ["close" => true, "share" => true, "fullscreen" => true, "zoom" => true]]));
            // line 107
            yield "   ";
        }
        // line 108
        yield "
   ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["other_docs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 110
            yield "      <div class=\"list-group-item border-0\">
         ";
            // line 111
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/form_document_item.html.twig", ["form_mode" => "view", "entry_i" => (($__internal_compile_32 =             // line 113
$context["document"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["item"] ?? null) : null)]);
            // line 114
            yield "
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/sub_documents.html.twig";
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
        return array (  229 => 117,  213 => 114,  211 => 113,  210 => 111,  207 => 110,  190 => 109,  187 => 108,  184 => 107,  182 => 103,  180 => 102,  174 => 101,  171 => 100,  169 => 98,  168 => 95,  166 => 92,  159 => 89,  156 => 88,  153 => 87,  150 => 86,  148 => 84,  147 => 81,  146 => 80,  145 => 79,  144 => 76,  142 => 74,  140 => 73,  137 => 72,  131 => 69,  122 => 63,  117 => 61,  113 => 60,  107 => 59,  102 => 58,  100 => 57,  97 => 56,  89 => 51,  84 => 50,  82 => 49,  78 => 47,  76 => 46,  73 => 45,  70 => 44,  67 => 43,  64 => 42,  59 => 41,  56 => 40,  54 => 39,  51 => 38,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/sub_documents.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/sub_documents.html.twig");
    }
}
