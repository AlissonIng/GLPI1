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

/* components/pager.html.twig */
class __TwigTemplate_89150758cc9f4b6e73d77ae16e690892 extends Template
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
            yield "    ";
            $context["additional_params"] = "";
        } else {
            // line 37
            yield "    ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["additional_params"] ?? null)) > 0) &&  !(is_string($__internal_compile_0 = ($context["additional_params"] ?? null)) && is_string($__internal_compile_1 = "&") && str_starts_with($__internal_compile_0, $__internal_compile_1)))) {
                // line 38
                yield "        ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 39
                yield "    ";
            }
        }
        // line 41
        yield "
";
        // line 42
        $context["href_separator"] = ((CoreExtension::inFilter("?", ($context["href"] ?? null))) ? ("&") : ("?"));
        // line 43
        $context["href"] = (((($context["href"] ?? null) . ($context["href_separator"] ?? null)) . "start=%start%") . ($context["additional_params"] ?? null));
        // line 44
        if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
            // line 45
            yield "   ";
            $context["href"] = (("javascript:reloadTab('start=%start%" . ($context["additional_params"] ?? null)) . "');");
        }
        // line 47
        if ( !array_key_exists("limit", $context)) {
            // line 48
            yield "    ";
            $context["limit"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit");
        }
        // line 50
        yield "
";
        // line 51
        $context["forward"] = (($context["start"] ?? null) + ($context["limit"] ?? null));
        // line 52
        $context["end"] = (($context["count"] ?? null) - ($context["limit"] ?? null));
        // line 53
        $context["current_start"] = (($context["start"] ?? null) + 1);
        // line 54
        $context["current_end"] = ((($context["current_start"] ?? null) + ($context["limit"] ?? null)) - 1);
        // line 55
        if ((($context["current_end"] ?? null) > ($context["count"] ?? null))) {
            // line 56
            yield "    ";
            $context["current_end"] = ($context["count"] ?? null);
        }
        // line 58
        yield "
";
        // line 59
        $context["back"] = (($context["start"] ?? null) - ($context["limit"] ?? null));
        // line 60
        if (((($context["current_start"] ?? null) - ($context["list_limit"] ?? null)) <= 0)) {
            // line 61
            yield "   ";
            $context["back"] = 0;
        }
        // line 63
        yield "
";
        // line 64
        $context["nb_pages"] = Twig\Extension\CoreExtension::round((($context["count"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
        // line 65
        $context["current_page"] = (Twig\Extension\CoreExtension::round(((($context["current_start"] ?? null) - 1) / ($context["limit"] ?? null)), 0, "ceil") + 1);
        // line 66
        yield "
";
        // line 68
        $context["adjacents"] = 2;
        // line 69
        $context["skip_adjacents"] = false;
        // line 70
        yield "
<div class=\"flex-grow-1 d-flex flex-wrap flex-md-nowrap  align-items-center justify-content-between mb-2 search-pager\">
    ";
        // line 72
        $context["limitdropdown"] = Twig\Extension\CoreExtension::include($this->env, $context, "components/dropdown/limit.html.twig", ["no_onchange" => ((        // line 73
array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), false)) : (false)), "select_class" => "search-limit-dropdown", "href" => Twig\Extension\CoreExtension::replace(        // line 75
($context["href"] ?? null), ["%start%" => ($context["start"] ?? null)])]);
        // line 77
        yield "    <span class=\"search-limit d-none d-md-block\">
        ";
        // line 78
        yield Twig\Extension\CoreExtension::sprintf(__("%s rows / page"), ($context["limitdropdown"] ?? null));
        yield "
    </span>
    <span class=\"search-limit d-block d-md-none\">
        ";
        // line 81
        yield ($context["limitdropdown"] ?? null);
        yield "
    </span>
    <p class=\"m-0 text-muted d-none d-md-block page-infos\">
        ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Showing %s to %s of %s rows"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
        yield "
    </p>
    <p class=\"m-0 text-muted d-block d-md-none text-nowrap ms-2 page-infos\">
        ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s-%s/%s"), ($context["current_start"] ?? null), ($context["current_end"] ?? null), ($context["count"] ?? null)), "html", null, true);
        yield "
    </p>

    <ul class=\"pagination m-0 mt-sm-2 mt-md-0\">
        ";
        // line 91
        if ((($context["nb_pages"] ?? null) > 1)) {
            // line 92
            yield "            ";
            $context["is_first_page"] = (($context["start"] ?? null) == 0);
            // line 93
            yield "            ";
            $context["is_last_page"] = (($context["forward"] ?? null) >= ($context["count"] ?? null));
            // line 94
            yield "
            <li class=\"page-item ";
            // line 95
            if (($context["is_first_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-start\" href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => 0]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start"), "html", null, true);
            yield "\" data-start=\"0\" ";
            if (($context["is_first_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-left\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 100
            if (($context["is_first_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-prev\" href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["back"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["back"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["is_first_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-left\"></i>
                </a>
            </li>
            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["nb_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 106
                yield "                ";
                if ((((($context["current_page"] ?? null) - ($context["adjacents"] ?? null)) <= $context["page"]) && ((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) >= $context["page"]))) {
                    // line 107
                    yield "                    ";
                    $context["page_start"] = (($context["page"] - 1) * ($context["limit"] ?? null));
                    // line 108
                    yield "                    <li class=\"d-none d-sm-block page-item ";
                    if (($context["page"] == ($context["current_page"] ?? null))) {
                        yield "active selected";
                    }
                    yield "\">
                    <a class=\"page-link page-link-num\" href=\"";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["page_start"] ?? null)]), "html", null, true);
                    yield "\" data-start=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_start"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                    ";
                    // line 111
                    if (((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) == $context["page"])) {
                        // line 112
                        yield "                    ";
                        $context["skip_adjacents"] = false;
                        // line 113
                        yield "                    ";
                    }
                    // line 114
                    yield "                ";
                } elseif ((($context["skip_adjacents"] ?? null) == false)) {
                    // line 115
                    yield "                    ";
                    $context["skip_adjacents"] = true;
                    // line 116
                    yield "                    <li class=\"d-none d-sm-block page-item disabled\">
                    <a class=\"page-link\" href=\"#\" aria-disabled=\"true\">...</a>
                    </li>
                ";
                }
                // line 120
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "
            <li class=\"page-item ";
            // line 122
            if (($context["is_last_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-next\" href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["forward"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["forward"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["is_last_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevron-right\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 127
            if (($context["is_last_page"] ?? null)) {
                yield "disabled";
            }
            yield "\">
                <a class=\"page-link page-link-last\" href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["href"] ?? null), ["%start%" => ($context["end"] ?? null)]), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("End"), "html", null, true);
            yield "\" data-start=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["end"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["is_last_page"] ?? null)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
                    <i class=\"ti ti-chevrons-right\"></i>
                </a>
            </li>
        ";
        }
        // line 133
        yield "    </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/pager.html.twig";
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
        return array (  303 => 133,  287 => 128,  281 => 127,  266 => 123,  260 => 122,  257 => 121,  251 => 120,  245 => 116,  242 => 115,  239 => 114,  236 => 113,  233 => 112,  231 => 111,  222 => 109,  215 => 108,  212 => 107,  209 => 106,  205 => 105,  190 => 101,  184 => 100,  171 => 96,  165 => 95,  162 => 94,  159 => 93,  156 => 92,  154 => 91,  147 => 87,  141 => 84,  135 => 81,  129 => 78,  126 => 77,  124 => 75,  123 => 73,  122 => 72,  118 => 70,  116 => 69,  114 => 68,  111 => 66,  109 => 65,  107 => 64,  104 => 63,  100 => 61,  98 => 60,  96 => 59,  93 => 58,  89 => 56,  87 => 55,  85 => 54,  83 => 53,  81 => 52,  79 => 51,  76 => 50,  72 => 48,  70 => 47,  66 => 45,  64 => 44,  62 => 43,  60 => 42,  57 => 41,  53 => 39,  50 => 38,  47 => 37,  43 => 35,  41 => 34,  38 => 33,);
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
    {% set additional_params = \"\" %}
{% else %}
    {% if additional_params|length > 0 and not (additional_params starts with '&') %}
        {% set additional_params = \"&\" ~ additional_params %}
    {% endif %}
{% endif %}

{% set href_separator = '?' in href ? '&' : '?' %}
{% set href = href ~ href_separator ~ \"start=%start%\" ~ additional_params %}
{% if is_tab is defined and is_tab == true %}
   {% set href = \"javascript:reloadTab('start=%start%\" ~ additional_params ~ \"');\" %}
{% endif %}
{% if limit is not defined %}
    {% set limit = user_pref('list_limit') %}
{% endif %}

{% set forward = start + limit %}
{% set end = count - limit %}
{% set current_start = start + 1 %}
{% set current_end = current_start + limit - 1 %}
{% if current_end > count %}
    {% set current_end = count %}
{% endif %}

{% set back = start - limit %}
{% if current_start - list_limit <= 0 %}
   {% set back = 0 %}
{% endif %}

{% set nb_pages = (count / limit)|round(0, 'ceil') %}
{% set current_page = ((current_start - 1) / limit)|round(0, 'ceil') + 1 %}

{# limit the number of adjacents links displayed #}
{% set adjacents = 2 %}
{% set skip_adjacents = false %}

<div class=\"flex-grow-1 d-flex flex-wrap flex-md-nowrap  align-items-center justify-content-between mb-2 search-pager\">
    {% set limitdropdown = include('components/dropdown/limit.html.twig', {
        'no_onchange': fluid_search|default(false),
        'select_class': 'search-limit-dropdown',
        'href': href|replace({'%start%': start}),
    }) %}
    <span class=\"search-limit d-none d-md-block\">
        {{ __('%s rows / page')|format(limitdropdown)|raw }}
    </span>
    <span class=\"search-limit d-block d-md-none\">
        {{ limitdropdown|raw }}
    </span>
    <p class=\"m-0 text-muted d-none d-md-block page-infos\">
        {{ __('Showing %s to %s of %s rows')|format(current_start, current_end, count) }}
    </p>
    <p class=\"m-0 text-muted d-block d-md-none text-nowrap ms-2 page-infos\">
        {{ __('%s-%s/%s')|format(current_start, current_end, count) }}
    </p>

    <ul class=\"pagination m-0 mt-sm-2 mt-md-0\">
        {% if nb_pages > 1 %}
            {% set is_first_page = start == 0 %}
            {% set is_last_page = forward >= count %}

            <li class=\"page-item {% if is_first_page %}disabled{% endif %}\">
                <a class=\"page-link page-link-start\" href=\"{{ href|replace({'%start%': 0}) }}\" title=\"{{ __('Start') }}\" data-start=\"0\" {% if is_first_page %}aria-disabled=\"true\"{% endif %}>
                    <i class=\"ti ti-chevrons-left\"></i>
                </a>
            </li>
            <li class=\"page-item {% if is_first_page %}disabled{% endif %}\">
                <a class=\"page-link page-link-prev\" href=\"{{ href|replace({'%start%': back}) }}\" title=\"{{ __('Previous') }}\" data-start=\"{{ back }}\" {% if is_first_page %}aria-disabled=\"true\"{% endif %}>
                    <i class=\"ti ti-chevron-left\"></i>
                </a>
            </li>
            {% for page in range(1, nb_pages) %}
                {% if current_page - adjacents <= page and current_page + adjacents >= page %}
                    {% set page_start = (page - 1) * limit %}
                    <li class=\"d-none d-sm-block page-item {% if page == current_page %}active selected{% endif %}\">
                    <a class=\"page-link page-link-num\" href=\"{{ href|replace({'%start%': page_start}) }}\" data-start=\"{{ page_start }}\">{{ page }}</a>
                    </li>
                    {% if current_page + adjacents == page %}
                    {% set skip_adjacents = false %}
                    {% endif %}
                {% elseif skip_adjacents == false %}
                    {% set skip_adjacents = true %}
                    <li class=\"d-none d-sm-block page-item disabled\">
                    <a class=\"page-link\" href=\"#\" aria-disabled=\"true\">...</a>
                    </li>
                {% endif %}
            {% endfor %}

            <li class=\"page-item {% if is_last_page %}disabled{% endif %}\">
                <a class=\"page-link page-link-next\" href=\"{{ href|replace({'%start%': forward}) }}\" title=\"{{ __('Next') }}\" data-start=\"{{ forward }}\" {% if is_last_page %}aria-disabled=\"true\"{% endif %}>
                    <i class=\"ti ti-chevron-right\"></i>
                </a>
            </li>
            <li class=\"page-item {% if is_last_page %}disabled{% endif %}\">
                <a class=\"page-link page-link-last\" href=\"{{ href|replace({'%start%': end}) }}\" title=\"{{ __('End') }}\" data-start=\"{{ end }}\" {% if is_last_page %}aria-disabled=\"true\"{% endif %}>
                    <i class=\"ti ti-chevrons-right\"></i>
                </a>
            </li>
        {% endif %}
    </ul>
</div>
", "components/pager.html.twig", "/var/www/glpi/templates/components/pager.html.twig");
    }
}