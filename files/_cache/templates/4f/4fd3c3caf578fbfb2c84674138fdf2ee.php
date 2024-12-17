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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_c889d627d15845ffbd59628603429d79 extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["item"] ?? null)]);
        // line 35
        yield "
";
        // line 36
        if (($context["display_for_parent"] ?? null)) {
            // line 37
            yield "   ";
            $context["pending_reason"] = ((($context["pending_reason_item_parent"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pendingreasons_id"] ?? null) : null)])) : (false));
        } else {
            // line 39
            yield "   ";
            $context["pending_item"] = (($context["pending_item"]) ?? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($__internal_compile_1 = ($context["entry"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null) . "::getById"), [(($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)])));
            // line 40
            yield "   ";
            $context["pending_reason_item"] = ((($context["pending_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["pending_item"] ?? null)])) : (false));
            // line 41
            yield "   ";
            $context["pending_reason"] = ((($context["pending_reason_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["pendingreasons_id"] ?? null) : null)])) : (false));
        }
        // line 43
        yield "
";
        // line 44
        if (($context["pending_reason"] ?? null)) {
            // line 45
            yield "   <span class=\"badge bg-blue-lt ";
            yield ((($context["display_for_parent"] ?? null)) ? ("mt-1 w-100 text-truncate") : (""));
            yield "\">
      <i class=\"fas fa-pause me-1\"></i>
      ";
            // line 47
            yield Twig\Extension\CoreExtension::sprintf(__("Pending: %s"), CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason"] ?? null), "getLink", [], "method", false, false, false, 47));
            yield "

      ";
            // line 49
            if ((($context["display_for_parent"] ?? null) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 50
($context["item"] ?? null),             // line 51
($context["pending_item"] ?? null)]))) {
                // line 53
                yield "         ";
                $context["next_bump"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getNextFollowupDate", [], "method", false, false, false, 53);
                // line 54
                yield "         ";
                if (($context["next_bump"] ?? null)) {
                    // line 55
                    yield "
            <i class=\"fas fa-clock ms-2\" title=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["next_bump"] ?? null)])), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 59
                yield "
         ";
                // line 60
                $context["resolve"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getAutoResolvedate", [], "method", false, false, false, 60);
                // line 61
                yield "         ";
                if (($context["resolve"] ?? null)) {
                    // line 62
                    yield "            <i class=\"fas fa-stop ms-2\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["resolve"] ?? null)])), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 65
                yield "      ";
            }
            // line 66
            yield "   </span>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
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
        return array (  115 => 66,  112 => 65,  105 => 62,  102 => 61,  100 => 60,  97 => 59,  91 => 56,  88 => 55,  85 => 54,  82 => 53,  80 => 51,  79 => 50,  78 => 49,  73 => 47,  67 => 45,  65 => 44,  62 => 43,  58 => 41,  55 => 40,  52 => 39,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% set pending_reason_item_parent = call(\"PendingReason_Item::getForItem\", [item]) %}

{% if display_for_parent %}
   {% set pending_reason = pending_reason_item_parent ? call(\"PendingReason::getById\", [pending_reason_item_parent.fields['pendingreasons_id']]) : false %}
{% else %}
   {% set pending_item = pending_item ?? call(entry['type'] ~ \"::getById\", [entry_i['id']]) %}
   {% set pending_reason_item = pending_item ? call(\"PendingReason_Item::getForItem\", [pending_item]) : false %}
   {% set pending_reason = pending_reason_item ? call(\"PendingReason::getById\", [pending_reason_item.fields['pendingreasons_id']]) : false %}
{% endif %}

{% if pending_reason %}
   <span class=\"badge bg-blue-lt {{ display_for_parent ? \"mt-1 w-100 text-truncate\" : \"\" }}\">
      <i class=\"fas fa-pause me-1\"></i>
      {{ __(\"Pending: %s\")|format(pending_reason.getLink())|raw }}

      {% if display_for_parent or call(\"PendingReason_Item::isLastPendingForItem\", [
         item,
         pending_item
      ]) %}
         {% set next_bump = pending_reason_item_parent.getNextFollowupDate() %}
         {% if next_bump %}

            <i class=\"fas fa-clock ms-2\" title=\"{{ __(\"Next automatic follow-up scheduled on %s\")|format(call(\"Html::convDate\", [next_bump])) }}\"
               data-bs-toggle=\"tooltip\"></i>
         {% endif %}

         {% set resolve = pending_reason_item_parent.getAutoResolvedate() %}
         {% if resolve %}
            <i class=\"fas fa-stop ms-2\" title=\"{{ __(\"Automatic resolution scheduled on %s\")|format(call(\"Html::convDate\", [resolve])) }}\"
               data-bs-toggle=\"tooltip\"></i>
         {% endif %}
      {% endif %}
   </span>
{% endif %}
", "components/itilobject/timeline/pending_reasons_messages.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/pending_reasons_messages.html.twig");
    }
}
