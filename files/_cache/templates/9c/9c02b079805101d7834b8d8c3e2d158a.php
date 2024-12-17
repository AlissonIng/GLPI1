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

/* pages/admin/ldap.users.html.twig */
class __TwigTemplate_3c7de59c478160f67433e04ace9adc87 extends Template
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
<div class=\"container\">
   <div class=\"row justify-content-evenly\">
      <div class=\"col-12 col-xxl-5\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bulk import users from a LDAP directory"), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/ldap.import.php"), "html", null, true);
        yield "?mode=1&amp;action=show\">
                  <i class=\"fas fa-fw fa-users-cog me-1\"></i>
                  <span>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Synchronizing already imported users"), "html", null, true);
        yield "</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/ldap.import.php"), "html", null, true);
        yield "?mode=0&amp;action=show\">
                  <i class=\"fas fa-fw fa-user-plus me-1\"></i>
                  <span>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import new users"), "html", null, true);
        yield "</span>
               </a>
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
        return "pages/admin/ldap.users.html.twig";
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
        return array (  68 => 49,  63 => 47,  57 => 44,  52 => 42,  46 => 39,  38 => 33,);
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

<div class=\"container\">
   <div class=\"row justify-content-evenly\">
      <div class=\"col-12 col-xxl-5\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>{{ __('Bulk import users from a LDAP directory') }}</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               <a class=\"list-group-item list-group-item-action\" href=\"{{ path('front/ldap.import.php') }}?mode=1&amp;action=show\">
                  <i class=\"fas fa-fw fa-users-cog me-1\"></i>
                  <span>{{ __('Synchronizing already imported users') }}</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"{{ path('front/ldap.import.php') }}?mode=0&amp;action=show\">
                  <i class=\"fas fa-fw fa-user-plus me-1\"></i>
                  <span>{{ __('Import new users') }}</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
", "pages/admin/ldap.users.html.twig", "/var/www/glpi/templates/pages/admin/ldap.users.html.twig");
    }
}
