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

/* components/dropdown/limit.html.twig */
class __TwigTemplate_c91a1d2d5421f7e15ca77d03a095d18e extends Template
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
        if ( !array_key_exists("additional_params", $context)) {
            // line 35
            yield "   ";
            $context["additional_params"] = "";
        } else {
            // line 37
            yield "   ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["additional_params"] ?? null)) > 0) &&  !(is_string($__internal_compile_0 = ($context["additional_params"] ?? null)) && is_string($__internal_compile_1 = "&") && str_starts_with($__internal_compile_0, $__internal_compile_1)))) {
                // line 38
                yield "      ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 39
                yield "   ";
            }
        }
        // line 41
        yield "
";
        // line 42
        if ( !($context["no_onchange"] ?? null)) {
            // line 43
            yield "   ";
            $context["href_separator"] = ((CoreExtension::inFilter("?", ($context["href"] ?? null))) ? ("&") : ("?"));
            // line 44
            yield "   ";
            $context["href"] = ((((("location.href='" . ($context["href"] ?? null)) . ($context["href_separator"] ?? null)) . "glpilist_limit='+this.value+'") . ($context["additional_params"] ?? null)) . "'");
            // line 45
            yield "   ";
            if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
                // line 46
                yield "      ";
                $context["href"] = (("javascript:reloadTab('glpilist_limit='+this.value+'" . ($context["additional_params"] ?? null)) . "');");
                // line 47
                yield "   ";
            }
        }
        // line 49
        yield "
";
        // line 50
        $context["options"] = [];
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 19, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(20, 49, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(50, 249, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(250, 999, 250));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 61
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1000, 4999, 1000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5000, 10000, 5000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [9999999]);
        // line 70
        $context["max"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->phpConfig("max_input_vars");
        // line 71
        if ((($context["max"] ?? null) > 10)) {
            // line 72
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [(($context["max"] ?? null) - 10)]);
        }
        // line 74
        if (!CoreExtension::inFilter($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit"), ($context["options"] ?? null))) {
            // line 75
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit")]);
        }
        // line 77
        yield "<select class=\"form-select form-select-sm mx-1 d-inline-block w-auto ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("select_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["select_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\"
        ";
        // line 78
        if ( !($context["no_onchange"] ?? null)) {
            yield "onChange=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
   ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, ($context["options"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 80
            yield "      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield ((($context["value"] == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit"))) ? ("selected") : (""));
            yield ">
         ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
      </option>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "</select>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/dropdown/limit.html.twig";
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
        return array (  198 => 84,  189 => 81,  182 => 80,  178 => 79,  170 => 78,  165 => 77,  161 => 75,  159 => 74,  155 => 72,  153 => 71,  151 => 70,  149 => 69,  142 => 67,  138 => 66,  131 => 64,  127 => 63,  120 => 61,  116 => 60,  109 => 58,  105 => 57,  98 => 55,  94 => 54,  87 => 52,  83 => 51,  81 => 50,  78 => 49,  74 => 47,  71 => 46,  68 => 45,  65 => 44,  62 => 43,  60 => 42,  57 => 41,  53 => 39,  50 => 38,  47 => 37,  43 => 35,  41 => 34,  38 => 33,);
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

{% if additional_params is not defined %}
   {% set additional_params = '' %}
{% else %}
   {% if additional_params|length > 0 and not (additional_params starts with '&') %}
      {% set additional_params = '&' ~ additional_params %}
   {% endif %}
{% endif %}

{% if not no_onchange %}
   {% set href_separator = '?' in href ? '&' : '?' %}
   {% set href = \"location.href='\" ~ href ~ href_separator ~ \"glpilist_limit='+this.value+'\" ~ additional_params ~ \"'\" %}
   {% if is_tab is defined and is_tab == true %}
      {% set href = \"javascript:reloadTab('glpilist_limit='+this.value+'\" ~ additional_params ~ \"');\" %}
   {% endif %}
{% endif %}

{% set options = [] %}
{% for i in range(5, 19, 5) %}
   {% set options = options|merge([i]) %}
{% endfor %}
{% for i in range(20, 49, 10) %}
   {% set options = options|merge([i]) %}
{% endfor %}
{% for i in range(50, 249, 50) %}
   {% set options = options|merge([i]) %}
{% endfor %}
{% for i in range(250, 999, 250) %}
   {% set options = options|merge([i]) %}
{% endfor %}
{% for i in range(1000, 4999, 1000) %}
   {% set options = options|merge([i]) %}
{% endfor %}
{% for i in range(5000, 10000, 5000) %}
   {% set options = options|merge([i]) %}
{% endfor %}
{% set options = options|merge([9999999]) %}
{% set max = php_config('max_input_vars') %}
{% if max > 10 %}
   {% set options = options|merge([max - 10]) %}
{% endif %}
{% if user_pref('list_limit') not in options %}
   {% set options = options|merge([user_pref('list_limit')]) %}
{% endif %}
<select class=\"form-select form-select-sm mx-1 d-inline-block w-auto {{ select_class|default('') }}\"
        {% if not no_onchange %}onChange=\"{{ href }}\"{% endif %}>
   {% for value in options|sort %}
      <option value=\"{{ value }}\" {{ value == user_pref('list_limit') ? 'selected' : '' }}>
         {{ value }}
      </option>
   {% endfor %}
</select>
", "components/dropdown/limit.html.twig", "/var/www/glpi/templates/components/dropdown/limit.html.twig");
    }
}