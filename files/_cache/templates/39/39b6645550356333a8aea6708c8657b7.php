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

/* components/dates_timeline.html.twig */
class __TwigTemplate_c31b23763d8062466ef10729f0c3ed60 extends Template
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
<div class=\"dates_timelines\">
   ";
        // line 35
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["title"] ?? null)) > 0)) {
            // line 36
            yield "      <h2 class=\"header\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</h2>
   ";
        }
        // line 38
        yield "
   <ul>
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 41
            yield "         ";
            if (((($__internal_compile_0 = $context["data"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["timestamp"] ?? null) : null) != 0)) {
                // line 42
                yield "            <li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["data"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["class"] ?? null) : null), "html", null, true);
                yield "\">
               &nbsp;
               <time title=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_2 = $context["data"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["date"] ?? null) : null)), "html", null, true);
                yield "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
                  ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime((($__internal_compile_3 = $context["data"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date"] ?? null) : null)), "html", null, true);
                yield "
               </time>
               <span class=\"dot\"></span>
               <label>";
                // line 49
                yield (($__internal_compile_4 = $context["data"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["label"] ?? null) : null);
                yield "</label>
            </li>
         ";
            }
            // line 52
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "   </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/dates_timeline.html.twig";
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
        return array (  90 => 53,  84 => 52,  78 => 49,  72 => 46,  67 => 44,  61 => 42,  58 => 41,  54 => 40,  50 => 38,  44 => 36,  42 => 35,  38 => 33,);
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

<div class=\"dates_timelines\">
   {% if title|length > 0 %}
      <h2 class=\"header\">{{ title }}</h2>
   {% endif %}

   <ul>
      {% for data in dates %}
         {% if data['timestamp'] != 0 %}
            <li class=\"{{ data['class'] }}\">
               &nbsp;
               <time title=\"{{ data['date']|formatted_datetime }}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
                  {{ data['date']|relative_datetime }}
               </time>
               <span class=\"dot\"></span>
               <label>{{ data['label']|raw }}</label>
            </li>
         {% endif %}
      {% endfor %}
   </ul>
</div>
", "components/dates_timeline.html.twig", "/var/www/glpi/templates/components/dates_timeline.html.twig");
    }
}
