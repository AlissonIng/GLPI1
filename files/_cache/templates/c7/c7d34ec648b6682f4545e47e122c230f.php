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

/* pages/setup/authentication.html.twig */
class __TwigTemplate_198a5699498026cbd80c128246a6e6f0 extends Template
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
      <div class=\"col-12 col-xxl-4\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("External authentications"), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               ";
        // line 42
        if (Session::haveRight("config", Twig\Extension\CoreExtension::constant("UPDATE"))) {
            // line 43
            yield "                  <a class=\"list-group-item list-group-item-action\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/auth.settings.php"), "html", null, true);
            yield "\">
                     <i class=\"fa-fw ti ti-adjustments me-1\"></i>
                     <span>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
            yield "</span>
                  </a>
               ";
        }
        // line 48
        yield "
               ";
        // line 49
        if (($context["can_use_ldap"] ?? null)) {
            // line 50
            yield "                  <a class=\"list-group-item list-group-item-action\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/authldap.php"), "html", null, true);
            yield "\">
                     <i class=\"fa-fw ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("AuthLDAP::getIcon"), "html", null, true);
            yield " me-1\"></i>
                     <span>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthLDAP"), "html", null, true);
            yield "</span>
                  </a>
               ";
        } else {
            // line 55
            yield "                  <div class=\"alert alert-important alert-warning m-3\">
                    <i class=\"fa-fw fa fa-exclamation-triangle me-2\"></i>
                    ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The LDAP extension of your PHP parser isn’t installed"), "html", null, true);
            yield "
                  </div>
               ";
        }
        // line 60
        yield "
               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/authmail.php"), "html", null, true);
        yield "\">
                  <i class=\"fa-fw ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("AuthMail::getIcon"), "html", null, true);
        yield " me-1\"></i>
                  <span>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthMail"), "html", null, true);
        yield "</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/auth.others.php"), "html", null, true);
        yield "\">
                  <i class=\"fa-fw ti ti-login me-1\"></i>
                  <span>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Others authentication methods"), "html", null, true);
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
        return "pages/setup/authentication.html.twig";
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
        return array (  118 => 68,  113 => 66,  107 => 63,  103 => 62,  99 => 61,  96 => 60,  90 => 57,  86 => 55,  80 => 52,  76 => 51,  71 => 50,  69 => 49,  66 => 48,  60 => 45,  54 => 43,  52 => 42,  46 => 39,  38 => 33,);
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
      <div class=\"col-12 col-xxl-4\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>{{ __('External authentications') }}</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               {% if has_profile_right('config', constant('UPDATE')) %}
                  <a class=\"list-group-item list-group-item-action\" href=\"{{ path('front/auth.settings.php') }}\">
                     <i class=\"fa-fw ti ti-adjustments me-1\"></i>
                     <span>{{ __('Setup') }}</span>
                  </a>
               {% endif %}

               {% if can_use_ldap %}
                  <a class=\"list-group-item list-group-item-action\" href=\"{{ path('front/authldap.php') }}\">
                     <i class=\"fa-fw {{ call('AuthLDAP::getIcon') }} me-1\"></i>
                     <span>{{ 'AuthLDAP'|itemtype_name }}</span>
                  </a>
               {% else %}
                  <div class=\"alert alert-important alert-warning m-3\">
                    <i class=\"fa-fw fa fa-exclamation-triangle me-2\"></i>
                    {{ __('The LDAP extension of your PHP parser isn’t installed') }}
                  </div>
               {% endif %}

               <a class=\"list-group-item list-group-item-action\" href=\"{{ path('front/authmail.php') }}\">
                  <i class=\"fa-fw {{ call('AuthMail::getIcon') }} me-1\"></i>
                  <span>{{ 'AuthMail'|itemtype_name }}</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"{{ path('front/auth.others.php') }}\">
                  <i class=\"fa-fw ti ti-login me-1\"></i>
                  <span>{{ __('Others authentication methods') }}</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
", "pages/setup/authentication.html.twig", "/var/www/glpi/templates/pages/setup/authentication.html.twig");
    }
}
