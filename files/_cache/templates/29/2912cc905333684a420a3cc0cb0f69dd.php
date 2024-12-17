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

/* pages/setup/dropdowns_list.html.twig */
class __TwigTemplate_ea149fb1590c98de060df9beae9ecb3f extends Template
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
        $context["grid_items"] = [];
        // line 35
        yield "
";
        // line 36
        $context["nb_opt"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["optgroup"] ?? null));
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["optgroup"] ?? null));
        foreach ($context['_seq'] as $context["label"] => $context["dropdown"]) {
            // line 38
            yield "   ";
            $context["card_id"] = ("dropdowns_list_" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 39
            yield "   ";
            $context["card_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 40
                yield "      <div class=\"card\">
         <div class=\"accordion accordion-flush\">
            <div class=\"accordion-item\">
               <h2 class=\"accordion-header\">
                  <button class=\"accordion-button ";
                // line 44
                yield (((($context["nb_opt"] ?? null) > 1)) ? ("collapsed") : (""));
                yield "\" type=\"button\"
                     data-bs-toggle=\"collapse\" data-bs-target=\"#";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_id"] ?? null), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                     ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "
                  </button>
               </h2>
               <div id=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["card_id"] ?? null), "html", null, true);
                yield "\" class=\"accordion-collapse ";
                yield (((($context["nb_opt"] ?? null) > 1)) ? ("collapse") : (""));
                yield "\" style=\"transition: none\">
                  <div class=\"list-group list-group-flush list-group-hoverable\">
                     ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["dropdown"]);
                foreach ($context['_seq'] as $context["itemtype"] => $context["dropdown_label"]) {
                    // line 52
                    yield "                        ";
                    $context["is_entity_assign"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeClass($context["itemtype"]), "isEntityAssign", [], "method", false, false, false, 52);
                    // line 53
                    yield "                        <a class=\"list-group-item list-group-item-action ";
                    yield ((($context["is_entity_assign"] ?? null)) ? ("") : ("dropdown-no-entity"));
                    yield "\"
                           href=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeSearchPath($context["itemtype"]), "html", null, true);
                    yield "\">
                           <div class=\"row\">
                              <div class=\"col-auto\">
                                 <i class=\"fa-fw ";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon($context["itemtype"]), "html", null, true);
                    yield "\"></i>
                              </div>
                              <div class=\"col text-truncate\">
                                 ";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["dropdown_label"], "html", null, true);
                    yield "
                              </div>
                              <div class=\"col-1 text-muted\">
                                 ";
                    // line 63
                    if (($context["is_entity_assign"] ?? null)) {
                        // line 64
                        yield "                                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Entity"), "html", null, true);
                        yield " fa-sm\"
                                       data-bs-toggle=\"tooltip\"
                                       title=\"";
                        // line 66
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dropdown with entity management"), "html", null, true);
                        yield "\"></i>
                                 ";
                    }
                    // line 68
                    yield "                              </div>
                           </div>
                        </a>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['itemtype'], $context['dropdown_label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                yield "                  </div>
               </div>
            </div>
         </div>
      </div>
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            yield "
   ";
            // line 79
            $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [            // line 80
($context["card_html"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['dropdown'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "

<div class=\"container-fluid text-start mb-4 dropdowns-list\">
   <div class=\"input-icon mb-3\">
      <input class=\"form-control\" placeholder=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter dropdowns"), "html", null, true);
        yield "\" id=\"filter-dropdown\" />
      <span class=\"input-icon-addon\">
         <i class=\"fas fa-search\"></i>
      </span>
   </div>

   ";
        // line 93
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 94
($context["grid_items"] ?? null), "grid_item_class" => "col-lg-6 col-xl-4 col-xxl-3"], false);
        // line 96
        yield "
</div>

<script>
\$(function () {
   var timerid;
   \$('#filter-dropdown').on('input',function() {
      var input_value = \$(this).val();

      clearTimeout(timerid);

      // reset state
      \$('.dropdowns-list .collapse').removeClass('show');
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
      \$('.dropdowns-list .list-group-item').show();
      \$('.dropdowns-list .accordion-collapse').removeClass('show')
      \$('.dropdowns-list .accordion-button').addClass('collapsed')

      if (input_value.length > 0) {
         timerid = setTimeout(function() {
            \$('.dropdowns-list .list-group-item:not(:icontains('+input_value+'))').hide();
            \$('.dropdowns-list .list-group-item:icontains('+input_value+')')
               .closest('.accordion-collapse').addClass('show')
               .siblings('.accordion-header')
                  .children('.accordion-button').removeClass('collapsed');

            \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");

         }, 500);
      }
   })

   \$('.dropdowns-list .collapse').on('shown.bs.collapse hidden.bs.collapse', function() {
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
   })
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/setup/dropdowns_list.html.twig";
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
        return array (  174 => 96,  172 => 94,  171 => 93,  162 => 87,  156 => 83,  150 => 80,  149 => 79,  146 => 78,  137 => 72,  128 => 68,  123 => 66,  117 => 64,  115 => 63,  109 => 60,  103 => 57,  97 => 54,  92 => 53,  89 => 52,  85 => 51,  78 => 49,  72 => 46,  68 => 45,  64 => 44,  58 => 40,  55 => 39,  52 => 38,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% set grid_items = [] %}

{% set nb_opt = optgroup|length %}
{% for label, dropdown in optgroup %}
   {% set card_id = 'dropdowns_list_' ~ random() %}
   {% set card_html %}
      <div class=\"card\">
         <div class=\"accordion accordion-flush\">
            <div class=\"accordion-item\">
               <h2 class=\"accordion-header\">
                  <button class=\"accordion-button {{ nb_opt > 1 ? \"collapsed\" : \"\" }}\" type=\"button\"
                     data-bs-toggle=\"collapse\" data-bs-target=\"#{{ card_id }}\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                     {{ label }}
                  </button>
               </h2>
               <div id=\"{{ card_id }}\" class=\"accordion-collapse {{ nb_opt > 1 ? \"collapse\" : \"\" }}\" style=\"transition: none\">
                  <div class=\"list-group list-group-flush list-group-hoverable\">
                     {% for itemtype, dropdown_label in dropdown %}
                        {% set is_entity_assign = itemtype|itemtype_class.isEntityAssign() %}
                        <a class=\"list-group-item list-group-item-action {{ is_entity_assign ? '' : 'dropdown-no-entity' }}\"
                           href=\"{{ itemtype|itemtype_search_path }}\">
                           <div class=\"row\">
                              <div class=\"col-auto\">
                                 <i class=\"fa-fw {{ itemtype|itemtype_icon }}\"></i>
                              </div>
                              <div class=\"col text-truncate\">
                                 {{ dropdown_label }}
                              </div>
                              <div class=\"col-1 text-muted\">
                                 {% if is_entity_assign %}
                                    <i class=\"{{ 'Entity'|itemtype_icon }} fa-sm\"
                                       data-bs-toggle=\"tooltip\"
                                       title=\"{{ __('Dropdown with entity management') }}\"></i>
                                 {% endif %}
                              </div>
                           </div>
                        </a>
                     {% endfor %}
                  </div>
               </div>
            </div>
         </div>
      </div>
   {% endset %}

   {% set grid_items = grid_items|merge([
      card_html
   ]) %}
{% endfor %}


<div class=\"container-fluid text-start mb-4 dropdowns-list\">
   <div class=\"input-icon mb-3\">
      <input class=\"form-control\" placeholder=\"{{ __('Filter dropdowns') }}\" id=\"filter-dropdown\" />
      <span class=\"input-icon-addon\">
         <i class=\"fas fa-search\"></i>
      </span>
   </div>

   {{ include('components/masonry_grid.html.twig', {
      'grid_items': grid_items,
      'grid_item_class': 'col-lg-6 col-xl-4 col-xxl-3',
   }, with_context = false) }}
</div>

<script>
\$(function () {
   var timerid;
   \$('#filter-dropdown').on('input',function() {
      var input_value = \$(this).val();

      clearTimeout(timerid);

      // reset state
      \$('.dropdowns-list .collapse').removeClass('show');
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
      \$('.dropdowns-list .list-group-item').show();
      \$('.dropdowns-list .accordion-collapse').removeClass('show')
      \$('.dropdowns-list .accordion-button').addClass('collapsed')

      if (input_value.length > 0) {
         timerid = setTimeout(function() {
            \$('.dropdowns-list .list-group-item:not(:icontains('+input_value+'))').hide();
            \$('.dropdowns-list .list-group-item:icontains('+input_value+')')
               .closest('.accordion-collapse').addClass('show')
               .siblings('.accordion-header')
                  .children('.accordion-button').removeClass('collapsed');

            \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");

         }, 500);
      }
   })

   \$('.dropdowns-list .collapse').on('shown.bs.collapse hidden.bs.collapse', function() {
      \$('.dropdowns-list .masonry_grid').trigger(\"layout:refresh\");
   })
});
</script>
", "pages/setup/dropdowns_list.html.twig", "/var/www/glpi/templates/pages/setup/dropdowns_list.html.twig");
    }
}
