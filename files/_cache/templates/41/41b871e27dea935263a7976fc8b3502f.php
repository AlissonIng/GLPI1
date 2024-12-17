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

/* central/widget_tab.html.twig */
class __TwigTemplate_ad8e06635c806e29cce8ee025b7ccdd9 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        yield "<table class=\"tab_cadre_central\">
   ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        yield "
</table>

<div id=\"home-dashboard";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"container-fluid\">
   ";
        // line 40
        $context["grid_items"] = [];
        // line 41
        yield "   ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 42
            yield "      ";
            $context["card_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 43
                yield "         <div class=\"card\">
            <div class=\"card-body p-0\">
              <div class=\"lazy-widget\" data-itemtype=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "itemtype", [], "any", false, false, false, 45), "html", null, true);
                yield "\" data-widget=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "widget", [], "any", false, false, false, 45), "html", null, true);
                yield "\"
                 data-params=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", false, false, false, 46), [])) : ([]))), "html", null, true);
                yield "\">
              </div>
            </div>
         </div>
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            yield "
      ";
            // line 52
            $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [            // line 53
($context["card_html"] ?? null)]);
            // line 55
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
   ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 58
($context["grid_items"] ?? null)], false);
        // line 59
        yield "

   <script>
   \$(function () {
      \$('#home-dashboard";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .lazy-widget').each(function() {
         const this_obj = \$(this);
         const params = {
            'itemtype': this_obj.data('itemtype'),
            'widget': this_obj.data('widget'),
            'params': this_obj.data('params')
         };
         this_obj.html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
            .load('";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/central.php"), "html", null, true);
        yield "', params, function(response, status, xhr) {
               const parent = this_obj.closest('.grid-item').parent();

               if (status === 'error' || !response) {
                  window['msnry_' + parent.prop('id')].remove(this_obj.closest('.grid-item'));
               }

               window['msnry_' + parent.prop('id')].layout();
            });
      });
   });
   </script>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "central/widget_tab.html.twig";
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
        return array (  120 => 71,  109 => 63,  103 => 59,  101 => 58,  100 => 57,  97 => 56,  91 => 55,  89 => 53,  88 => 52,  85 => 51,  76 => 46,  70 => 45,  66 => 43,  63 => 42,  58 => 41,  56 => 40,  52 => 39,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% set rand = random() %}
<table class=\"tab_cadre_central\">
   {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::DISPLAY_CENTRAL')) }}
</table>

<div id=\"home-dashboard{{ rand }}\" class=\"container-fluid\">
   {% set grid_items = [] %}
   {% for card in cards %}
      {% set card_html %}
         <div class=\"card\">
            <div class=\"card-body p-0\">
              <div class=\"lazy-widget\" data-itemtype=\"{{ card.itemtype }}\" data-widget=\"{{ card.widget }}\"
                 data-params=\"{{ card.params|default({})|json_encode }}\">
              </div>
            </div>
         </div>
      {% endset %}

      {% set grid_items = grid_items|merge([
         card_html
      ]) %}
   {% endfor %}

   {{ include('components/masonry_grid.html.twig', {
      'grid_items': grid_items,
   }, with_context = false) }}

   <script>
   \$(function () {
      \$('#home-dashboard{{ rand }} .lazy-widget').each(function() {
         const this_obj = \$(this);
         const params = {
            'itemtype': this_obj.data('itemtype'),
            'widget': this_obj.data('widget'),
            'params': this_obj.data('params')
         };
         this_obj.html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
            .load('{{ path('/ajax/central.php') }}', params, function(response, status, xhr) {
               const parent = this_obj.closest('.grid-item').parent();

               if (status === 'error' || !response) {
                  window['msnry_' + parent.prop('id')].remove(this_obj.closest('.grid-item'));
               }

               window['msnry_' + parent.prop('id')].layout();
            });
      });
   });
   </script>
</div>
", "central/widget_tab.html.twig", "/var/www/glpi/templates/central/widget_tab.html.twig");
    }
}
