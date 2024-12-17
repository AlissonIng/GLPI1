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

/* components/plugin_uninstall_modal.html.twig */
class __TwigTemplate_b90d5437d9ee43a674a3af1d2d5d0d15 extends Template
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
<!-- Button trigger modal -->
";
        // line 35
        yield ($context["open_btn"] ?? null);
        yield "

<!-- Modal -->
<div class=\"modal fade\" id=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "html", null, true);
        yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <a type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></a>
            <div class=\"modal-status bg-danger\"></div>
            <div
                class=\"modal-body text-center py-4\">
                <i class=\"fa-2x ti ti-alert-triangle mb-2 text-danger\"></i>
                <h3>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("uninstall_plugin", "Are you sure?"), "html", null, true);
        yield "</h3>
                <div class=\"text-muted\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("By uninstalling the \"%s\" plugin you will lose all the data of the plugin."), ($context["plugin_name"] ?? null)), "html", null, true);
        yield "</div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"w-100\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <a class=\"btn w-100\" data-bs-dismiss=\"modal\">
                                ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "html", null, true);
        yield "
                            </a>
                        </div>
                        <div class=\"col\">
                            ";
        // line 58
        yield ($context["uninstall_btn"] ?? null);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/plugin_uninstall_modal.html.twig";
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
        return array (  80 => 58,  73 => 54,  63 => 47,  59 => 46,  48 => 38,  42 => 35,  38 => 33,);
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

<!-- Button trigger modal -->
{{ open_btn|raw }}

<!-- Modal -->
<div class=\"modal fade\" id=\"{{ modal_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <a type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></a>
            <div class=\"modal-status bg-danger\"></div>
            <div
                class=\"modal-body text-center py-4\">
                <i class=\"fa-2x ti ti-alert-triangle mb-2 text-danger\"></i>
                <h3>{{ _x('uninstall_plugin', 'Are you sure?') }}</h3>
                <div class=\"text-muted\">{{ __('By uninstalling the \"%s\" plugin you will lose all the data of the plugin.')|format(plugin_name) }}</div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"w-100\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <a class=\"btn w-100\" data-bs-dismiss=\"modal\">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                        <div class=\"col\">
                            {{ uninstall_btn|raw }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "components/plugin_uninstall_modal.html.twig", "/var/www/glpi/templates/components/plugin_uninstall_modal.html.twig");
    }
}
