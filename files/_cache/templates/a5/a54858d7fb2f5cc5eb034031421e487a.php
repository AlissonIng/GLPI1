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

/* pages/self-service/home.html.twig */
class __TwigTemplate_022b9a5dafd1b07d2348b149c581d82e extends Template
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
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["password_alert"] ?? null))) {
            // line 35
            yield "   <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
      <div class=\"d-flex mb-2\">
         <div>
            <i class=\"fas fa-exclamation-triangle me-1\"></i>
         </div>
         <div>
            ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["password_alert"] ?? null), "html", null, true);
            yield "
         </div>
      </div>

      <div class=\"btn-list\">
         <a class=\"btn btn-outline-warning\" href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
            yield " \">
            ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update my password"), "html", null, true);
            yield "
         </a>
      </div>
   </div>
";
        }
        // line 52
        yield "
<table class=\"central\">
   ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        yield "
</table>

";
        // line 57
        $context["optional_grid_item_keys"] = ["survey_list", "reminder_list", "rss_feed", "kb_popular", "kb_recent", "kb_lastupdate"];
        // line 60
        $context["grid_items"] = [        // line 61
($context["ticket_summary"] ?? null)];
        // line 63
        yield "
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["optional_grid_item_keys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["optional_grid_item_key"]) {
            // line 65
            yield "   ";
            $context["item_content"] = (($__internal_compile_0 = $context) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["optional_grid_item_key"]] ?? null) : null);
            // line 66
            yield "   ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["item_content"] ?? null))) {
                // line 67
                yield "      ";
                $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [(("<div class=\"card\">" .                 // line 68
($context["item_content"] ?? null)) . "</div>")]);
                // line 70
                yield "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optional_grid_item_key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "
";
        // line 73
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 74
($context["grid_items"] ?? null)], false);
        // line 75
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/self-service/home.html.twig";
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
        return array (  116 => 75,  114 => 74,  113 => 73,  110 => 72,  103 => 70,  101 => 68,  99 => 67,  96 => 66,  93 => 65,  89 => 64,  86 => 63,  84 => 61,  83 => 60,  81 => 57,  75 => 54,  71 => 52,  63 => 47,  59 => 46,  51 => 41,  43 => 35,  41 => 34,  38 => 33,);
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

{% if password_alert|length %}
   <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
      <div class=\"d-flex mb-2\">
         <div>
            <i class=\"fas fa-exclamation-triangle me-1\"></i>
         </div>
         <div>
            {{ password_alert }}
         </div>
      </div>

      <div class=\"btn-list\">
         <a class=\"btn btn-outline-warning\" href=\"{{ path('/front/updatepassword.php') }} \">
            {{ __('Update my password') }}
         </a>
      </div>
   </div>
{% endif %}

<table class=\"central\">
   {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::DISPLAY_CENTRAL')) }}
</table>

{% set optional_grid_item_keys = [
   'survey_list', 'reminder_list', 'rss_feed', 'kb_popular', 'kb_recent', 'kb_lastupdate'
] %}
{% set grid_items = [
   ticket_summary
] %}

{% for optional_grid_item_key in optional_grid_item_keys %}
   {% set item_content = _context[optional_grid_item_key] %}
   {% if item_content is not empty %}
      {% set grid_items = grid_items|merge([
         '<div class=\"card\">' ~ item_content ~ '</div>'
      ]) %}
   {% endif %}
{% endfor %}

{{ include('components/masonry_grid.html.twig', {
   'grid_items': grid_items,
}, with_context = false) }}
", "pages/self-service/home.html.twig", "/var/www/glpi/templates/pages/self-service/home.html.twig");
    }
}
