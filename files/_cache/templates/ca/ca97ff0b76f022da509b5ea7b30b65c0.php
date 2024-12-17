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

/* components/photoswipe.html.twig */
class __TwigTemplate_bfee854079554a92d0d0ce52bf52e439 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/photoswipe.html.twig", 34)->unwrap();
        // line 35
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        $context["field_name"] = ((array_key_exists("field_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["field_name"] ?? null), ("psgallery" . ($context["rand"] ?? null)))) : (("psgallery" . ($context["rand"] ?? null))));
        // line 37
        yield "
<div id=\"psgallery";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
   <div class=\"pswp__bg\"></div>
   <div class=\"pswp__scroll-wrap\">
      <div class=\"pswp__container\">
         <div class=\"pswp__item\"></div>
         <div class=\"pswp__item\"></div>
         <div class=\"pswp__item\"></div>
      </div>
      <div class=\"pswp__ui pswp__ui--hidden\">
         <div class=\"pswp__top-bar\">
            <div class=\"pswp__counter\"></div>
            ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["controls"] ?? null), "close", [], "any", false, false, false, 49)) {
            // line 50
            yield "               <button class=\"pswp__button pswp__button--close\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close (Esc)"), "html", null, true);
            yield "\"></button>
            ";
        }
        // line 52
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["controls"] ?? null), "share", [], "any", false, false, false, 52)) {
            // line 53
            yield "               <button class=\"pswp__button pswp__button--share\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Share"), "html", null, true);
            yield "\"></button>
            ";
        }
        // line 55
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["controls"] ?? null), "fullscreen", [], "any", false, false, false, 55)) {
            // line 56
            yield "               <button class=\"pswp__button pswp__button--fs\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle fullscreen"), "html", null, true);
            yield "\"></button>
            ";
        }
        // line 58
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["controls"] ?? null), "zoom", [], "any", false, false, false, 58)) {
            // line 59
            yield "               <button class=\"pswp__button pswp__button--zoom\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom in/out"), "html", null, true);
            yield "\"></button>
            ";
        }
        // line 61
        yield "
            <div class=\"pswp__preloader\">
               <div class=\"pswp__preloader__icn\">
                  <div class=\"pswp__preloader__cut\">
                     <div class=\"pswp__preloader__donut\"></div>
                  </div>
               </div>
            </div>
         </div>

         <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
            <div class=\"pswp__share-tooltip\"></div>
         </div>

         <button type=\"button\" class=\"pswp__button pswp__button--arrow--left\" title=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous (arrow left)"), "html", null, true);
        yield "\">
         </button>

         <button type=\"button\" class=\"pswp__button pswp__button--arrow--right\" title=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next (arrow right)"), "html", null, true);
        yield "\">
         </button>

         <div class=\"pswp__caption\">
            <div class=\"pswp__caption__center\"></div>
         </div>
      </div>
   </div>
</div>

";
        // line 88
        $context["imgs"] = ((array_key_exists("imgs", $context)) ? (Twig\Extension\CoreExtension::default(($context["imgs"] ?? null), [])) : ([]));
        // line 89
        $context["galleryclass"] = ((array_key_exists("gallery_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["gallery_class"] ?? null), "")) : (""));
        // line 90
        $context["gallery_type"] = ((array_key_exists("gallery_type", $context)) ? (Twig\Extension\CoreExtension::default(($context["gallery_type"] ?? null), "")) : (""));
        // line 91
        yield "
";
        // line 92
        if ((($context["gallery_type"] ?? null) == "horizontal")) {
            // line 93
            yield "   <div class=\"col-12\">
      <div class=\"d-flex flex-row overflow-auto pswp-horizontal-gallery pswp-img";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gallery_item_class"] ?? null), "html", null, true);
            yield "\" itemscope itemtype=\"https://schema.org/ImageGallery\">
         ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["imgs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 96
                yield "            <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "gallery_item_class", [], "array", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = $context["img"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["gallery_item_class"] ?? null) : null), "")) : ("")), "html", null, true);
                yield "\">
            ";
                // line 97
                if ((($__internal_compile_1 = $context["img"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pre_figure_content"] ?? null) : null)) {
                    // line 98
                    yield "               ";
                    yield (($__internal_compile_2 = $context["img"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pre_figure_content"] ?? null) : null);
                    yield "
            ";
                }
                // line 100
                yield "            <figure itemprop=\"associatedMedia\" itemscope itemtype=\"https://schema.org/ImageObject\" class=\"d-flex flex-column me-2\">
                  ";
                // line 101
                if ((($__internal_compile_3 = $context["img"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["_video"] ?? null) : null)) {
                    // line 102
                    yield "                     <span class=\"bg-black pswp-trigger pointer d-flex justify-content-center align-items-center\">
                        <i class=\"fas fa-video\"></i>
                     </span>
                  ";
                } else {
                    // line 106
                    yield "                     <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["img"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["src"] ?? null) : null));
                    yield "\" itemprop=\"contentUrl\" data-index=\"0\">
                        <img src=\"";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumbnail_src", [], "array", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_5 = $context["img"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["thumbnail_src"] ?? null) : null), (($__internal_compile_6 = $context["img"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["src"] ?? null) : null))) : ((($__internal_compile_7 = $context["img"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["src"] ?? null) : null))), "html", null, true);
                    yield "\"
                             itemprop=\"thumbnail\" alt=\"";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "title", [], "array", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_8 = $context["img"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["title"] ?? null) : null), "")) : ("")), "html", null, true);
                    yield "\"
                             class=\"";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "img_class", [], "array", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_9 = $context["img"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["img_class"] ?? null) : null), "")) : ("")), "html", null, true);
                    yield " pointer pswp-trigger\" />
                     </a>
                  ";
                }
                // line 112
                yield "               <figcaption itemprop=\"caption description\" class=\"text-muted fst-italic\">
                  ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "title", [], "array", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_10 = $context["img"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["title"] ?? null) : null), "")) : ("")), "html", null, true);
                yield "
               </figcaption>
            </figure>
            ";
                // line 116
                if ((($__internal_compile_11 = $context["img"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["post_figure_content"] ?? null) : null)) {
                    // line 117
                    yield "               ";
                    yield (($__internal_compile_12 = $context["img"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["post_figure_content"] ?? null) : null);
                    yield "
            ";
                }
                // line 119
                yield "         </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "      </div>
   </div>
";
        } else {
            // line 124
            yield "   <div class=\"pswp-img";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gallery_item_class"] ?? null), "html", null, true);
            yield "\" itemscope itemtype=\"https://schema.org/ImageGallery\">
      ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["imgs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 126
                yield "         ";
                $context["clearable"] = (($__internal_compile_13 = $context["img"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["clearable"] ?? null) : null);
                // line 127
                yield "         <figure itemprop=\"associatedMedia\" itemscope itemtype=\"https://schema.org/ImageObject\"
                 style=\"width: ";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumbnail_w", [], "array", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_14 = $context["img"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["thumbnail_w"] ?? null) : null), "auto")) : ("auto")), "html", null, true);
                yield "; height: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumbnail_h", [], "array", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_15 = $context["img"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["thumbnail_h"] ?? null) : null), "auto")) : ("auto")), "html", null, true);
                yield "\">
            ";
                // line 129
                yield CoreExtension::callMacro($macros["fields"], "macro_imageField", [((((                // line 130
($context["clearable"] ?? null)) ? ("pictures") : (($context["field_name"] ?? null))) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 130)), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 131
$context["img"], "thumbnail_src", [], "array", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_16 = $context["img"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["thumbnail_src"] ?? null) : null), (($__internal_compile_17 = $context["img"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["src"] ?? null) : null))) : ((($__internal_compile_18 = $context["img"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["src"] ?? null) : null))), "", ["no_label" => true, "full_width" => true, "mb" => "", "clearable" =>                 // line 137
($context["clearable"] ?? null), "class" => "cursor-pointer pswp-trigger", "alt" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 139
$context["img"], "title", [], "array", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_19 = $context["img"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["title"] ?? null) : null), "")) : ("")), "itemprop" => "thumbnail"], ["itemprop" => "contentUrl", "data-index" => "0"]], 129, $context, $this->getSourceContext());
                // line 146
                yield "
            <figcaption itemprop=\"caption description\" class=\"text-muted fst-italic\">
               ";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["img"], "title", [], "array", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_20 = $context["img"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["title"] ?? null) : null), "")) : ("")), "html", null, true);
                yield "
            </figcaption>
         </figure>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "   </div>
";
        }
        // line 154
        yield "
<script>
   ((\$) => {
      const pswp = document.getElementById(\"psgallery";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\");
      \$(\".pswp-img";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\").on('click', 'figure .pswp-trigger', function(event) {
         event.preventDefault();
         const options = {
            index: \$(this).closest('figure').parent().index(),
            bgOpacity: 0.7,
            showHideOpacity: true,
            shareButtons: [
               {
                  id: 'download',
                  label: __('Download'),
                  url: '";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["raw_image_url"] ?? null), "html", null, true);
        yield "',
                  download: true
               }
            ]
         };
         const lightbox = new PhotoSwipe(pswp, PhotoSwipeUI_Default, ";
        // line 173
        yield json_encode(($context["imgs"] ?? null));
        yield ", options);
         \$(pswp).closest('.card-tabs').css('z-index', 50); // Be sure that tabs are displayed above form in vsplit layout
         lightbox.init();

         // Prevent dragging around cusotm HTML slide content
         \$(lightbox.container).find('.pswp__item span').on('pointerdown MSPointerDown touchstart mousedown', function (e) {
            return false;
         });
         lightbox.listen('destroy', function() {
            \$(this.container).closest('.card-tabs').css('z-index', '');
         });
      })
   })(jQuery);
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/photoswipe.html.twig";
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
        return array (  328 => 173,  320 => 168,  307 => 158,  303 => 157,  298 => 154,  294 => 152,  276 => 148,  272 => 146,  270 => 139,  269 => 137,  268 => 131,  267 => 130,  266 => 129,  260 => 128,  257 => 127,  254 => 126,  237 => 125,  230 => 124,  225 => 121,  218 => 119,  212 => 117,  210 => 116,  204 => 113,  201 => 112,  195 => 109,  191 => 108,  187 => 107,  182 => 106,  176 => 102,  174 => 101,  171 => 100,  165 => 98,  163 => 97,  158 => 96,  154 => 95,  148 => 94,  145 => 93,  143 => 92,  140 => 91,  138 => 90,  136 => 89,  134 => 88,  121 => 78,  115 => 75,  99 => 61,  93 => 59,  90 => 58,  84 => 56,  81 => 55,  75 => 53,  72 => 52,  66 => 50,  64 => 49,  50 => 38,  47 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/photoswipe.html.twig", "/var/www/glpi/templates/components/photoswipe.html.twig");
    }
}
