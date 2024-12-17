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

/* components/itilobject/service_levels.html.twig */
class __TwigTemplate_6db50ac630009d67b2bbc17412e79e0c extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/service_levels.html.twig", 34)->unwrap();
        // line 35
        $macros["modals"] = $this->macros["modals"] = $this->loadTemplate("components/form/modals_macros.html.twig", "components/itilobject/service_levels.html.twig", 35)->unwrap();
        // line 36
        yield "
";
        // line 37
        $context["la_fields"] = [];
        // line 38
        yield "
";
        // line 39
        $context["la_fields"] = Twig\Extension\CoreExtension::merge(($context["la_fields"] ?? null), [["la" =>         // line 41
($context["sla"] ?? null), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "time_to_own", "lafieldname" => "slas_id_tto", "label" => __("TTO"), "helper" => __("Time to own")], ["la" =>         // line 49
($context["sla"] ?? null), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "time_to_resolve", "lafieldname" => "slas_id_ttr", "label" => __("TTR"), "helper" => __("Time to resolve")]]);
        // line 58
        yield "
";
        // line 59
        $context["la_fields"] = Twig\Extension\CoreExtension::merge(($context["la_fields"] ?? null), [["la" =>         // line 61
($context["ola"] ?? null), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "internal_time_to_own", "lafieldname" => "olas_id_tto", "label" => __("Internal TTO"), "helper" => __("Internal Time to own")], ["la" =>         // line 69
($context["ola"] ?? null), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "internal_time_to_resolve", "lafieldname" => "olas_id_ttr", "label" => __("Internal TTR"), "helper" => __("Internal Time to resolve")]]);
        // line 78
        yield "

";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["la_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["la_field"]) {
            // line 81
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 82
            yield "   ";
            $context["date_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 82) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 82), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 82)], "method", false, false, false, 82));
            // line 83
            yield "   ";
            $context["la_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 83) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 83), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 83)], "method", false, false, false, 83));
            // line 84
            yield "
   ";
            // line 85
            if ((($context["date_displayed"] ?? null) || ($context["la_displayed"] ?? null))) {
                // line 86
                yield "      ";
                $context["la_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 87
                    yield "         ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 87), "getDataForTicket", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 87)], "method", false, false, false, 87)) {
                        // line 88
                        yield "            ";
                        if (($context["date_displayed"] ?? null)) {
                            // line 89
                            yield "               <span class=\"text-muted\">
                  ";
                            // line 90
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 90)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 90)] ?? null) : null)), "html", null, true);
                            yield "
               </span>
            ";
                        }
                        // line 93
                        yield "
            ";
                        // line 94
                        if (($context["la_displayed"] ?? null)) {
                            // line 95
                            yield "               <span class=\"level_name badge itil-badge bg-secondary ms-1 flex-column flex-sm-row\">
                  <span class=\"d-flex align-items-center\">
                     <i class=\"fas fa-stopwatch slt me-1\"></i>
                     <span class=\"text-truncate\"
                           title=\"";
                            // line 99
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemComment(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 99), "getType", [], "method", false, false, false, 99), (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 99)] ?? null) : null)), "html", null, true);
                            yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        ";
                            // line 101
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 101), "getType", [], "method", false, false, false, 101), (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 101)] ?? null) : null)), "html", null, true);
                            yield "
                     </span>

                     ";
                            // line 104
                            if (($context["canupdate"] ?? null)) {
                                // line 105
                                yield "                        <i class=\"ti ti-x ms-1\" role=\"button\"
                           onclick=\"delete_date_";
                                // line 106
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "(event)\"
                           title=\"";
                                // line 107
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
                            }
                            // line 110
                            yield "                  </span>

                  ";
                            // line 112
                            $context["nextaction"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 112), "getNextActionForTicket", [($context["item"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 112)], "method", false, false, false, 112);
                            // line 113
                            yield "                  ";
                            $context["level"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 113), "getLevelFromAction", [($context["nextaction"] ?? null)], "method", false, false, false, 113);
                            // line 114
                            yield "                  ";
                            if ((($context["level"] ?? null) != false)) {
                                // line 115
                                yield "                     <span class=\"badge bg-info ms-0 ms-sm-1\">
                        <i class=\"fas fa-clock me-1\"
                           title=\"";
                                // line 117
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next escalation: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["nextaction"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date"] ?? null) : null))), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        <span title=\"";
                                // line 119
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), _n("Escalation level", "Escalation levels", 1), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null))), "html", null, true);
                                yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           ";
                                // line 121
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null)), "html", null, true);
                                yield "
                        </span>
                     </span>
                  ";
                            }
                            // line 125
                            yield "               </span>
               <script type=\"text/javascript\">
                  function delete_date_";
                            // line 127
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                            yield "(e) {
                     e.preventDefault();

                     var delete_date = 0;
                     if (confirm('";
                            // line 131
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Also delete date?"), "html", null, true);
                            yield "')) {
                        delete_date = 1;
                     }

                     submitGetLink('";
                            // line 135
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 135), "html", null, true);
                            yield "', {
                        '";
                            // line 136
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type_str", [], "any", false, false, false, 136), "html", null, true);
                            yield "_delete': 1,
                        'id': ";
                            // line 137
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
                            yield ",
                        'type': ";
                            // line 138
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 138), "html", null, true);
                            yield ",
                        '_glpi_csrf_token': '";
                            // line 139
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                            yield "',
                        '_glpi_simple_form': 1,
                        'delete_date': delete_date
                     });
                  }
               </script>
            ";
                        }
                        // line 146
                        yield "         ";
                    } else {
                        // line 147
                        yield "            <div class=\"d-flex align-items-center flex-wrap\">
               ";
                        // line 148
                        $context["assign_la_id"] = ("assign_la_" . ($context["rand"] ?? null));
                        // line 149
                        yield "
               ";
                        // line 150
                        if (($context["date_displayed"] ?? null)) {
                            // line 151
                            yield "                  <div class=\"la_datefield\">
                     ";
                            // line 152
                            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", [CoreExtension::getAttribute($this->env, $this->source,                             // line 153
$context["la_field"], "datefieldname", [], "any", false, false, false, 153), (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,                             // line 154
($context["item"] ?? null), "fields", [], "any", false, false, false, 154)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 154)] ?? null) : null), "", ["include_field" => false, "id" => ("date_" .                             // line 158
($context["assign_la_id"] ?? null)), "disabled" =>  !                            // line 159
($context["canupdate"] ?? null)]], 152, $context, $this->getSourceContext());
                            // line 161
                            yield "
                  </div>
               ";
                        }
                        // line 164
                        yield "
               ";
                        // line 165
                        if (($context["la_displayed"] ?? null)) {
                            // line 166
                            yield "                 <div class=\"w-100 mt-1\" id=\"dropdown_";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                            yield "\">
    <span class=\"text-muted\">
        ";
                            // line 168
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 168), "getType", [], "method", false, false, false, 168), (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 168)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 168)] ?? null) : null)), "html", null, true);
                            yield "
    </span>
</div>

                  ";
                            // line 172
                            if (($context["canupdate"] ?? null)) {
                                // line 173
                                yield "                     <button class=\"btn btn-sm btn-ghost-secondary ms-1\" type=\"button\"
                           id=\"button_";
                                // line 174
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"modal\" data-bs-target=\"#";
                                // line 175
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\"
                           aria-expanded=\"false\" aria-controls=\"";
                                // line 176
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\">
                        <i class=\"fas fa-stopwatch slt pointer\"
                           title=\"";
                                // line 178
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Assign a SLA"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     </button>

                     ";
                                // line 182
                                yield CoreExtension::callMacro($macros["modals"], "macro_confirm", [__("Warning"), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 184
$context["la_field"], "la", [], "any", false, false, false, 184), "getAddConfirmation", [], "method", false, false, false, 184), "<br />"), ["id" =>                                 // line 186
($context["assign_la_id"] ?? null), "confirm_label" => ("<i class=\"fas fa-stopwatch me-1\"></i>" . __("Assign")), "confirm_event" => (("toggleAssignLA_" .                                 // line 188
($context["rand"] ?? null)) . "()")]], 182, $context, $this->getSourceContext());
                                // line 190
                                yield "

                     <script type=\"text/javascript\">
                        function toggleAssignLA_";
                                // line 193
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "() {
                           // hide button clicked
                           \$(\"#button_";
                                // line 195
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\").hide();

                           // hide date field
                           \$(\"#date_";
                                // line 198
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\").closest('.la_datefield').hide();

                           // show dropdown field
                           \$('#dropdown_assign_la_";
                                // line 201
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "').removeClass('d-none');

                           // show level agreement dropdown
                           var myCollapse = new bootstrap.Collapse(document.getElementById('dropdown_";
                                // line 204
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "'));
                           myCollapse.show();
                        }
                     </script>
                  ";
                            }
                            // line 209
                            yield "               ";
                        }
                        // line 210
                        yield "            </div>
         ";
                    }
                    // line 212
                    yield "      ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 213
                yield "      ";
                yield CoreExtension::callMacro($macros["fields"], "macro_field", [CoreExtension::getAttribute($this->env, $this->source,                 // line 214
$context["la_field"], "lafieldname", [], "any", false, false, false, 214),                 // line 215
($context["la_html"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                 // line 216
$context["la_field"], "label", [], "any", false, false, false, 216), ["helper" => CoreExtension::getAttribute($this->env, $this->source,                 // line 218
$context["la_field"], "helper", [], "any", false, false, false, 218), "mb" => "mb-2", "label_class" => "col-auto", "full_width" => true, "is_horizontal" => false, "add_field_class" => ((                // line 223
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))]], 213, $context, $this->getSourceContext());
                // line 225
                yield "
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['la_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/service_levels.html.twig";
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
        return array (  348 => 225,  346 => 223,  345 => 218,  344 => 216,  343 => 215,  342 => 214,  340 => 213,  336 => 212,  332 => 210,  329 => 209,  321 => 204,  315 => 201,  309 => 198,  303 => 195,  298 => 193,  293 => 190,  291 => 188,  290 => 186,  289 => 184,  288 => 182,  281 => 178,  276 => 176,  272 => 175,  268 => 174,  265 => 173,  263 => 172,  256 => 168,  250 => 166,  248 => 165,  245 => 164,  240 => 161,  238 => 159,  237 => 158,  236 => 154,  235 => 153,  234 => 152,  231 => 151,  229 => 150,  226 => 149,  224 => 148,  221 => 147,  218 => 146,  208 => 139,  204 => 138,  200 => 137,  196 => 136,  192 => 135,  185 => 131,  178 => 127,  174 => 125,  167 => 121,  162 => 119,  157 => 117,  153 => 115,  150 => 114,  147 => 113,  145 => 112,  141 => 110,  135 => 107,  131 => 106,  128 => 105,  126 => 104,  120 => 101,  115 => 99,  109 => 95,  107 => 94,  104 => 93,  98 => 90,  95 => 89,  92 => 88,  89 => 87,  86 => 86,  84 => 85,  81 => 84,  78 => 83,  75 => 82,  72 => 81,  68 => 80,  64 => 78,  62 => 69,  61 => 61,  60 => 59,  57 => 58,  55 => 49,  54 => 41,  53 => 39,  50 => 38,  48 => 37,  45 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% import 'components/form/fields_macros.html.twig' as fields %}
{% import 'components/form/modals_macros.html.twig' as modals %}

{% set la_fields = [] %}

{% set la_fields = la_fields|merge([
   {
      'la': sla,
      'type_str': 'sla',
      'type': constant('SLM::TTO'),
      'datefieldname': 'time_to_own',
      'lafieldname': 'slas_id_tto',
      'label': __('TTO'),
      'helper': __('Time to own'),
   }, {
      'la': sla,
      'type_str': 'sla',
      'type': constant('SLM::TTR'),
      'datefieldname': 'time_to_resolve',
      'lafieldname': 'slas_id_ttr',
      'label': __('TTR'),
      'helper': __('Time to resolve'),
   }
]) %}

{% set la_fields = la_fields|merge([
   {
      'la': ola,
      'type_str': 'ola',
      'type': constant('SLM::TTO'),
      'datefieldname': 'internal_time_to_own',
      'lafieldname': 'olas_id_tto',
      'label': __('Internal TTO'),
      'helper': __('Internal Time to own'),
   }, {
      'la': ola,
      'type_str': 'ola',
      'type': constant('SLM::TTR'),
      'datefieldname': 'internal_time_to_resolve',
      'lafieldname': 'olas_id_ttr',
      'label': __('Internal TTR'),
      'helper': __('Internal Time to resolve'),
   }
]) %}


{% for la_field in la_fields %}
   {% set rand = random() %}
   {% set date_displayed = field_options.fields_template is not defined or not field_options.fields_template.isHiddenField(la_field.datefieldname) %}
   {% set la_displayed = field_options.fields_template is not defined or not field_options.fields_template.isHiddenField(la_field.lafieldname) %}

   {% if date_displayed or la_displayed %}
      {% set la_html %}
         {% if la_field.la.getDataForTicket(item.fields['id'], la_field.type) %}
            {% if date_displayed %}
               <span class=\"text-muted\">
                  {{ item.fields[la_field.datefieldname]|formatted_datetime }}
               </span>
            {% endif %}

            {% if la_displayed %}
               <span class=\"level_name badge itil-badge bg-secondary ms-1 flex-column flex-sm-row\">
                  <span class=\"d-flex align-items-center\">
                     <i class=\"fas fa-stopwatch slt me-1\"></i>
                     <span class=\"text-truncate\"
                           title=\"{{ get_item_comment(la_field.la.getType(), item.fields[la_field.lafieldname]) }}\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        {{ get_item_name(la_field.la.getType(), item.fields[la_field.lafieldname]) }}
                     </span>

                     {% if canupdate %}
                        <i class=\"ti ti-x ms-1\" role=\"button\"
                           onclick=\"delete_date_{{ rand }}(event)\"
                           title=\"{{ _x('button', 'Delete permanently') }}\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     {% endif %}
                  </span>

                  {% set nextaction = la_field.la.getNextActionForTicket(item, la_field.type) %}
                  {% set level  = la_field.la.getLevelFromAction(nextaction) %}
                  {% if level != false %}
                     <span class=\"badge bg-info ms-0 ms-sm-1\">
                        <i class=\"fas fa-clock me-1\"
                           title=\"{{ __('Next escalation: %s')|format(nextaction.fields['date']|formatted_datetime) }}\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        <span title=\"{{ __('%1\$s: %2\$s')|format(_n('Escalation level', 'Escalation levels', 1), get_item_name(level)) }}\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           {{ get_item_name(level) }}
                        </span>
                     </span>
                  {% endif %}
               </span>
               <script type=\"text/javascript\">
                  function delete_date_{{ rand }}(e) {
                     e.preventDefault();

                     var delete_date = 0;
                     if (confirm('{{ __('Also delete date?') }}')) {
                        delete_date = 1;
                     }

                     submitGetLink('{{ item.getFormURL() }}', {
                        '{{ la_field.type_str }}_delete': 1,
                        'id': {{ item.fields['id'] }},
                        'type': {{ la_field.type }},
                        '_glpi_csrf_token': '{{ csrf_token() }}',
                        '_glpi_simple_form': 1,
                        'delete_date': delete_date
                     });
                  }
               </script>
            {% endif %}
         {% else %}
            <div class=\"d-flex align-items-center flex-wrap\">
               {% set assign_la_id = 'assign_la_' ~ rand %}

               {% if date_displayed %}
                  <div class=\"la_datefield\">
                     {{ fields.datetimeField(
                        la_field.datefieldname,
                        item.fields[la_field.datefieldname],
                        '',
                        {
                           'include_field': false,
                           'id': 'date_' ~ assign_la_id,
                           'disabled': (not canupdate),
                        }
                     ) }}
                  </div>
               {% endif %}

               {% if la_displayed %}
                 <div class=\"w-100 mt-1\" id=\"dropdown_{{ assign_la_id }}\">
    <span class=\"text-muted\">
        {{ get_item_name(la_field.la.getType(), item.fields[la_field.lafieldname]) }}
    </span>
</div>

                  {% if canupdate %}
                     <button class=\"btn btn-sm btn-ghost-secondary ms-1\" type=\"button\"
                           id=\"button_{{ assign_la_id }}\"
                           data-bs-toggle=\"modal\" data-bs-target=\"#{{ assign_la_id }}\"
                           aria-expanded=\"false\" aria-controls=\"{{ assign_la_id }}\">
                        <i class=\"fas fa-stopwatch slt pointer\"
                           title=\"{{ __('Assign a SLA') }}\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     </button>

                     {{ modals.confirm(
                        __('Warning'),
                        la_field.la.getAddConfirmation()|join('<br />'),
                        {
                           'id': assign_la_id,
                           'confirm_label': '<i class=\"fas fa-stopwatch me-1\"></i>' ~ __('Assign'),
                           'confirm_event': 'toggleAssignLA_' ~ rand ~ '()',
                        }
                     ) }}

                     <script type=\"text/javascript\">
                        function toggleAssignLA_{{ rand }}() {
                           // hide button clicked
                           \$(\"#button_{{ assign_la_id }}\").hide();

                           // hide date field
                           \$(\"#date_{{ assign_la_id }}\").closest('.la_datefield').hide();

                           // show dropdown field
                           \$('#dropdown_assign_la_{{ rand }}').removeClass('d-none');

                           // show level agreement dropdown
                           var myCollapse = new bootstrap.Collapse(document.getElementById('dropdown_{{ assign_la_id }}'));
                           myCollapse.show();
                        }
                     </script>
                  {% endif %}
               {% endif %}
            </div>
         {% endif %}
      {% endset %}
      {{ fields.field(
         la_field.lafieldname,
         la_html,
         la_field.label,
         {
            helper: la_field.helper,
            mb: 'mb-2',
            label_class: 'col-auto',
            full_width: true,
            is_horizontal: false,
            add_field_class: (is_expanded ? 'col-sm-6' : ''),
         }
      ) }}
   {% endif %}
{% endfor %}
", "components/itilobject/service_levels.html.twig", "/var/www/glpi/templates/components/itilobject/service_levels.html.twig");
    }
}
