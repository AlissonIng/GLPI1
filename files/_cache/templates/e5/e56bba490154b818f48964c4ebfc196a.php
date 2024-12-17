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

/* components/user/info_card.html.twig */
class __TwigTemplate_f49f6b2cdfd53125cad25c01a2139600 extends Template
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
        $context["enable_anonymization"] = (($context["enable_anonymization"]) ?? (false));
        // line 35
        yield "
<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col pt-1\">
         ";
        // line 39
        if ((($__internal_compile_0 = ($context["user"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)) {
            // line 40
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_1 =             // line 41
($context["user"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "user_object" =>             // line 42
($context["user_object"] ?? null), "enable_anonymization" =>             // line 43
($context["enable_anonymization"] ?? null)]);
            // line 44
            yield "
         ";
        }
        // line 46
        yield "      </div>
      <div class=\"col-auto ms-2\">
         <h4 class=\"card-title mb-1\">
            ";
        // line 49
        if ((($__internal_compile_2 = ($context["user"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)) {
            // line 50
            yield "               <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User", (($__internal_compile_3 = ($context["user"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null)), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["user"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["user_name"] ?? null) : null), "html", null, true);
            yield "</a>
            ";
        } else {
            // line 52
            yield "               ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = ($context["user"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["user_name"] ?? null) : null), "html", null, true);
            yield "
            ";
        }
        // line 54
        yield "         </h4>

         <div class=\"text-muted\">
            ";
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_6 = ($context["user"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["email"] ?? null) : null)) > 0)) {
            // line 58
            yield "               <div>
                  <i class=\"fas fa-fw fa-envelope\"></i>
                  <a href=\"mailto:";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = ($context["user"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["email"] ?? null) : null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = ($context["user"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["email"] ?? null) : null), "html", null, true);
            yield "</a>
               </div>
            ";
        }
        // line 63
        yield "            ";
        if (( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_9 = ($context["user"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["phone"] ?? null) : null)) ||  !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_10 = ($context["user"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["phone2"] ?? null) : null)))) {
            // line 64
            yield "               <div>
                  ";
            // line 65
            if ( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_11 = ($context["user"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["phone"] ?? null) : null))) {
                // line 66
                yield "                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_12 = ($context["user"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["phone"] ?? null) : null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_13 = ($context["user"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["phone"] ?? null) : null), "html", null, true);
                yield "</a>
                  ";
            }
            // line 69
            yield "                  ";
            if (( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_14 = ($context["user"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["phone"] ?? null) : null)) &&  !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_15 = ($context["user"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["phone2"] ?? null) : null)))) {
                // line 70
                yield "                     <span> - </span>
                  ";
            }
            // line 72
            yield "                  ";
            if ( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_16 = ($context["user"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["phone2"] ?? null) : null))) {
                // line 73
                yield "                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_17 = ($context["user"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["phone2"] ?? null) : null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = ($context["user"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["phone2"] ?? null) : null), "html", null, true);
                yield "</a>
                  ";
            }
            // line 76
            yield "               </div>
            ";
        }
        // line 78
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_19 = ($context["user"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["mobile"] ?? null) : null)) > 0)) {
            // line 79
            yield "               <div>
                  <i class=\"fas fa-fw fa-mobile\"></i>
                  <a href=\"tel:";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = ($context["user"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["mobile"] ?? null) : null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = ($context["user"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["mobile"] ?? null) : null), "html", null, true);
            yield "</a>
               </div>
            ";
        }
        // line 84
        yield "            ";
        if (((($__internal_compile_22 = ($context["user"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["locations_id"] ?? null) : null) > 0)) {
            // line 85
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-map-marker-alt\"></i>
                  ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Location", (($__internal_compile_23 = ($context["user"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["locations_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 90
        yield "            ";
        if (((($__internal_compile_24 = ($context["user"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["usertitles_id"] ?? null) : null) > 0)) {
            // line 91
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("person", "Cargo"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tie\"></i>
                  ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserTitle", (($__internal_compile_25 = ($context["user"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["usertitles_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 96
        yield "            ";
        if (((($__internal_compile_26 = ($context["user"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["usercategories_id"] ?? null) : null) > 0)) {
            // line 97
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Área", "Área", 1), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tag\"></i>
                  ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserCategory", (($__internal_compile_27 = ($context["user"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["usercategories_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 102
        yield "            ";
        if (((($__internal_compile_28 = ($context["user"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["groups_id"] ?? null) : null) > 0)) {
            // line 103
            yield "               <div title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default group"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-users\"></i>
                  ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Group", (($__internal_compile_29 = ($context["user"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["groups_id"] ?? null) : null)), "html", null, true);
            yield "
               </div>
            ";
        }
        // line 108
        yield "         </div>
      </div>

      ";
        // line 111
        if (($context["can_edit"] ?? null)) {
            // line 112
            yield "         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/preference.php"), "html", null, true);
            yield "\"
               title=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"fas fa-user-edit\"></i>
            </a>
         </div>
      ";
        }
        // line 119
        yield "   </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/user/info_card.html.twig";
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
        return array (  240 => 119,  232 => 114,  228 => 113,  225 => 112,  223 => 111,  218 => 108,  212 => 105,  206 => 103,  203 => 102,  197 => 99,  191 => 97,  188 => 96,  182 => 93,  176 => 91,  173 => 90,  167 => 87,  161 => 85,  158 => 84,  150 => 81,  146 => 79,  143 => 78,  139 => 76,  132 => 74,  129 => 73,  126 => 72,  122 => 70,  119 => 69,  112 => 67,  109 => 66,  107 => 65,  104 => 64,  101 => 63,  93 => 60,  89 => 58,  87 => 57,  82 => 54,  76 => 52,  68 => 50,  66 => 49,  61 => 46,  57 => 44,  55 => 43,  54 => 42,  53 => 41,  51 => 40,  49 => 39,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/info_card.html.twig", "/var/www/glpi/templates/components/user/info_card.html.twig");
    }
}
