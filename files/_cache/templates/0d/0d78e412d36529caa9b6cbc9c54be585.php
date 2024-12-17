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

/* components/form/dates.html.twig */
class __TwigTemplate_bb4c398b73d47c91e92a67e7be9e0fdc extends Template
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
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["withtemplate"] ?? null) : null)) : (""));
        // line 35
        yield "
";
        // line 36
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) {
            // line 37
            yield "<div class=\"row\">
   ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_creation"], "method", false, false, false, 38)) {
                // line 39
                yield "   <div class=\"col-sm-6 col-12\">
      ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Created on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["date_creation"] ?? null) : null))), "html", null, true);
                yield "
   </div>
   ";
            }
            // line 43
            yield "
   ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 44)) {
                // line 45
                yield "   <div class=\"col-sm-6 col-12\">
      ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Last update on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["date_mod"] ?? null) : null))), "html", null, true);
                yield "
   </div>
   ";
            }
            // line 49
            yield "</div>
";
        }
        // line 51
        yield "
";
        // line 52
        if (((array_key_exists("withtemplate", $context) && (($context["withtemplate"] ?? null) > 0)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["template_name"] ?? null) : null)) > 0))) {
            // line 53
            yield "<div class=\"row\">
   <div class=\"col-12\">
      ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Created from the template %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["template_name"] ?? null) : null))), "html", null, true);
            yield "
   </div>
</div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/dates.html.twig";
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
        return array (  89 => 55,  85 => 53,  83 => 52,  80 => 51,  76 => 49,  70 => 46,  67 => 45,  65 => 44,  62 => 43,  56 => 40,  53 => 39,  51 => 38,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% set withtemplate = params['withtemplate'] ?? '' %}

{% if not (item.isNewItem()) %}
<div class=\"row\">
   {% if item.isField('date_creation') %}
   <div class=\"col-sm-6 col-12\">
      {{ __('Created on %s')|format(item.fields['date_creation']|formatted_datetime) }}
   </div>
   {% endif %}

   {% if item.isField('date_mod') %}
   <div class=\"col-sm-6 col-12\">
      {{ __('Last update on %s')|format(item.fields['date_mod']|formatted_datetime) }}
   </div>
   {% endif %}
</div>
{% endif %}

{% if withtemplate is defined and withtemplate > 0 and item.fields['template_name']|length > 0 %}
<div class=\"row\">
   <div class=\"col-12\">
      {{ __('Created from the template %s')|format(item.fields['template_name']|verbatim_value) }}
   </div>
</div>
{% endif %}
", "components/form/dates.html.twig", "/var/www/glpi/templates/components/form/dates.html.twig");
    }
}
