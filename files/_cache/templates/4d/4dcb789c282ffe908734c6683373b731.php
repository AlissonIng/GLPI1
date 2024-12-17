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

/* components/itilobject/mainform_open.html.twig */
class __TwigTemplate_f34d82f4c394cd60e33abf7c28be28e3 extends Template
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
        $context["enctype"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34)) ? ("multipart/form-data") : ("application/x-www-form-urlencoded"));
        // line 35
        $context["new_cls"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35)) ? ("new-itil-object") : (""));
        // line 36
        yield "
";
        // line 37
        $context["form_path"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 37);
        // line 38
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 38)) {
            // line 39
            yield "   ";
            $context["form_path"] = ((($context["form_path"] ?? null) . "?id=") . (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null));
        }
        // line 41
        yield "
";
        // line 42
        if (($context["selfservice"] ?? null)) {
            // line 43
            yield "   ";
            $context["form_path"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/tracking.injector.php");
        }
        // line 45
        yield "
";
        // line 46
        $context["track_changes"] = "true";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47)) {
            // line 48
            yield "   ";
            $context["track_changes"] = "false";
        }
        // line 50
        yield "
<form method=\"POST\" action=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_path"] ?? null), "html", null, true);
        yield "\" enctype=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["enctype"] ?? null), "html", null, true);
        yield "\"
      data-track-changes=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["track_changes"] ?? null), "html", null, true);
        yield "\" id=\"itil-form\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["new_cls"] ?? null), "html", null, true);
        yield "\" data-submit-once>
   ";
        // line 53
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 53)) {
            // line 54
            yield "       <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 56
        yield "   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   ";
        // line 59
        if (array_key_exists("itiltemplate_key", $context)) {
            // line 60
            yield "      <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itiltemplate_key"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 62
        yield "   ";
        if (array_key_exists("predefined_fields", $context)) {
            // line 63
            yield "      <input type=\"hidden\" name=\"_predefined_fields\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["predefined_fields"] ?? null), "html", null, true);
            yield "\" />
   ";
        }
        // line 65
        yield "
   ";
        // line 66
        if (($context["selfservice"] ?? null)) {
            // line 67
            yield "      <input type=\"hidden\" name=\"_from_helpdesk\" value=\"1\" />
         ";
        }
        // line 70
        yield "
   ";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 71) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tickets_id", [], "array", true, true, false, 71))) {
            // line 72
            yield "      <input type=\"hidden\" name=\"_tickets_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 72) &&  !(null === (($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["tickets_id"] ?? null) : null)))) ? ((($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["tickets_id"] ?? null) : null)) : ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["_tickets_id"] ?? null) : null))), "html", null, true);
            yield "\" />
   ";
        }
        // line 74
        yield "
   ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 75) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_problems_id", [], "array", true, true, false, 75))) {
            // line 76
            yield "      <input type=\"hidden\" name=\"_problems_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 76) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["problems_id"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["problems_id"] ?? null) : null)) : ((($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_problems_id"] ?? null) : null))), "html", null, true);
            yield "\" />
   ";
        }
        // line 78
        yield "
   ";
        // line 79
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_add_fromitem", [], "array", true, true, false, 79)) {
            // line 80
            yield "      <input type=\"hidden\" name=\"_from_items_id\" value=\"";
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_items_id", [], "array", true, true, false, 80) &&  !(null === (($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_from_items_id"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_from_items_id"] ?? null) : null), "html", null, true)) : (yield 0));
            yield "\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"";
            // line 81
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_itemtype", [], "array", true, true, false, 81) &&  !(null === (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_from_itemtype"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_from_itemtype"] ?? null) : null), "html", null, true)) : (yield ""));
            yield "\" />
   ";
        }
        // line 83
        yield "
   ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_fup_id", [], "array", true, true, false, 84) && ((($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_promoted_fup_id"] ?? null) : null) > 0))) {
            // line 85
            yield "      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_promoted_fup_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 87
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_task_id", [], "array", true, true, false, 87) && ((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_promoted_task_id"] ?? null) : null) > 0))) {
            // line 88
            yield "      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_promoted_task_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 90
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_skip_promoted_fields", [], "array", true, true, false, 90) && ((($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["_skip_promoted_fields"] ?? null) : null) > 0))) {
            // line 91
            yield "      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_skip_promoted_fields"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 93
        yield "
   ";
        // line 95
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_projecttasks_id", [], "array", true, true, false, 95) && ((($__internal_compile_19 = ($context["params"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["_projecttasks_id"] ?? null) : null) > 0))) {
            // line 96
            yield "      <input type=\"hidden\" name=\"_projecttasks_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = ($context["params"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["_projecttasks_id"] ?? null) : null), "html", null, true);
            yield "\" />
   ";
        }
        // line 98
        yield "
   ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tasktemplates_id", [], "array", true, true, false, 99) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_21 = ($context["params"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["_tasktemplates_id"] ?? null) : null)) > 0))) {
            // line 100
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_22 = ($context["params"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["_tasktemplates_id"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tasktemplate_id"]) {
                // line 101
                yield "         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tasktemplate_id"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasktemplate_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "   ";
        }
        // line 104
        yield "
   ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_hidden_fields", [], "array", true, true, false, 105) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_23 = ($context["params"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["_hidden_fields"] ?? null) : null)) > 0))) {
            // line 106
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_24 = ($context["params"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["_hidden_fields"] ?? null) : null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
                // line 107
                yield "         <input type=\"hidden\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_value"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/mainform_open.html.twig";
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
        return array (  255 => 109,  244 => 107,  239 => 106,  237 => 105,  234 => 104,  231 => 103,  222 => 101,  217 => 100,  215 => 99,  212 => 98,  206 => 96,  203 => 95,  200 => 93,  194 => 91,  191 => 90,  185 => 88,  182 => 87,  176 => 85,  174 => 84,  171 => 83,  166 => 81,  161 => 80,  159 => 79,  156 => 78,  150 => 76,  148 => 75,  145 => 74,  139 => 72,  137 => 71,  134 => 70,  130 => 67,  128 => 66,  125 => 65,  119 => 63,  116 => 62,  108 => 60,  106 => 59,  99 => 56,  93 => 54,  91 => 53,  85 => 52,  79 => 51,  76 => 50,  72 => 48,  70 => 47,  68 => 46,  65 => 45,  61 => 43,  59 => 42,  56 => 41,  52 => 39,  50 => 38,  48 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% set enctype = item.isNewItem() ? 'multipart/form-data' : 'application/x-www-form-urlencoded' %}
{% set new_cls = item.isNewItem() ? 'new-itil-object' : '' %}

{% set form_path = item.getFormURL() %}
{% if not item.isNewItem() %}
   {% set form_path = form_path ~ '?id=' ~ item.fields['id'] %}
{% endif %}

{% if selfservice %}
   {% set form_path = path('front/tracking.injector.php') %}
{% endif %}

{% set track_changes = 'true' %}
{% if item.isNewItem() %}
   {% set track_changes = 'false' %}
{% endif %}

<form method=\"POST\" action=\"{{ form_path }}\" enctype=\"{{ enctype }}\"
      data-track-changes=\"{{ track_changes }}\" id=\"itil-form\" class=\"{{ new_cls }}\" data-submit-once>
   {% if not item.isNewItem() %}
       <input type=\"hidden\" name=\"id\" value=\"{{ item.fields['id'] }}\" />
   {% endif %}
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   {% if itiltemplate_key is defined %}
      <input type=\"hidden\" name=\"{{ itiltemplate_key }}\" value=\"{{ itiltemplate.fields['id'] }}\" />
   {% endif %}
   {% if predefined_fields is defined %}
      <input type=\"hidden\" name=\"_predefined_fields\" value=\"{{ predefined_fields }}\" />
   {% endif %}

   {% if selfservice %}
      <input type=\"hidden\" name=\"_from_helpdesk\" value=\"1\" />
      {# TODO default requesttype #}
   {% endif %}

   {% if params['tickets_id'] is defined or params['_tickets_id'] is defined %}
      <input type=\"hidden\" name=\"_tickets_id\" value=\"{{ params['tickets_id'] ?? params['_tickets_id'] }}\" />
   {% endif %}

   {% if params['problems_id'] is defined or params['_problems_id'] is defined %}
      <input type=\"hidden\" name=\"_problems_id\" value=\"{{ params['problems_id'] ?? params['_problems_id'] }}\" />
   {% endif %}

   {% if params['_add_fromitem'] is defined %}
      <input type=\"hidden\" name=\"_from_items_id\" value=\"{{ params['_from_items_id'] ?? 0 }}\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"{{ params['_from_itemtype'] ?? '' }}\" />
   {% endif %}

   {% if params['_promoted_fup_id'] is defined and params['_promoted_fup_id'] > 0 %}
      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"{{ params['_promoted_fup_id'] }}\" />
   {% endif %}
   {% if params['_promoted_task_id'] is defined and params['_promoted_task_id'] > 0 %}
      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"{{ params['_promoted_task_id'] }}\" />
   {% endif %}
   {% if params['_skip_promoted_fields'] is defined and params['_skip_promoted_fields'] > 0 %}
      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"{{ params['_skip_promoted_fields'] }}\" />
   {% endif %}

   {# Ticket specific: created from project task, need to keep track of task id #}
   {% if params['_projecttasks_id'] is defined and params['_projecttasks_id'] > 0 %}
      <input type=\"hidden\" name=\"_projecttasks_id\" value=\"{{ params['_projecttasks_id'] }}\" />
   {% endif %}

   {% if params['_tasktemplates_id'] is defined and params['_tasktemplates_id']|length > 0 %}
      {% for tasktemplate_id in params['_tasktemplates_id'] %}
         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"{{ tasktemplate_id }}\" />
      {% endfor %}
   {% endif %}

   {% if params['_hidden_fields'] is defined and params['_hidden_fields']|length > 0 %}
      {% for field_name, field_value in params['_hidden_fields'] %}
         <input type=\"hidden\" name=\"{{ field_name }}\" value=\"{{ field_value }}\" />
      {% endfor %}
   {% endif %}
", "components/itilobject/mainform_open.html.twig", "/var/www/glpi/templates/components/itilobject/mainform_open.html.twig");
    }
}
