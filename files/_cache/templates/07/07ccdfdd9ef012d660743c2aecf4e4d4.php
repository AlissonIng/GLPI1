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

/* components/itilobject/selfservice.html.twig */
class __TwigTemplate_d109227c888ed69fb910e59a3a9bdcb0 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/selfservice.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "full_width_adapt_column" => false, "fields_template" =>         // line 41
($context["itiltemplate"] ?? null), "rand" =>         // line 42
($context["rand"] ?? null)];
        // line 44
        $context["right_field_options"] = Twig\Extension\CoreExtension::merge(($context["base_field_options"] ?? null), ["is_horizontal" => true, "label_class" => "col-lg-3", "input_class" => "col-lg-9"]);
        // line 49
        yield "
<div class=\"container-lg\">
    ";
        // line 51
        if ((($context["has_tickets_to_validate"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(($context["url_validate"] ?? null)))) {
            // line 52
            yield "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There are some tickets awaiting approval"), "html", null, true);
            yield " — <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url_validate"] ?? null), "html", null, true);
            yield "\" class=\"alert-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("check it out!"), "html", null, true);
            yield "</a>
        </div>
    ";
        }
        // line 56
        yield "
    ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_open.html.twig");
        yield "
    ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Descripción de orden de servicio"), "html", null, true);
        yield "</h3>
        </div>

        <div class=\"card-body bg-secondary-lt pt-0\">
            ";
        // line 66
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["delegating"] ?? null))) {
            // line 67
            yield "                <div class=\"row align-items-end w-100\">
                    <div class=\"col-sm-6\">
                        ";
            // line 69
            $context["actor_add_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 70
                yield "                            <div id=\"delegate_other";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" class=\"card mt-2\">
                                <div class=\"card-body\">
                                    ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "showActorAddFormOnCreate", [Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), ($context["params"] ?? null)], "method", false, false, false, 72)), "truncate", [0], "method", false, false, false, 72), "html", null, true);
                yield "
                                </div>
                            </div>
                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            yield "
                        ";
            // line 77
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["nodelegate", (($__internal_compile_0 =             // line 79
($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nodelegate"] ?? null) : null), __("This ticket concerns me"), Twig\Extension\CoreExtension::merge(            // line 81
($context["base_field_options"] ?? null), ["add_field_html" => ($context["actor_add_form"] ?? null)])], 77, $context, $this->getSourceContext());
            // line 82
            yield "
                    </div>
                    <div class=\"col-sm-6 ";
            // line 84
            yield ((($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_check_pref") && (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["nodelegate"] ?? null) : null))) ? ("") : ("d-none"));
            yield "\" id=\"user-info";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "-block\">
                        ";
            // line 85
            $context["personal_information"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 86
                yield "                        <div class=\"d-inline-flex\">
                            <div class=\"card mb-0\" id=\"user-info";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\">
                                <div class=\"card-body\">
                                    ";
                // line 89
                $context["user"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser();
                // line 90
                yield "                                    ";
                $context["user_fields"] = CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 90);
                // line 91
                yield "                                    ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 91))]);
                // line 92
                yield "                                    ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["email" => CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 92)]);
                // line 93
                yield "                                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/user/info_card.html.twig", ["user" => ($context["user_fields"] ?? null), "can_edit" => true], false);
                yield "
                                </div>
                            </div>
                        </div>
                        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 98
            yield "                        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["", ($context["personal_information"] ?? null), __("Check your personal information"), ($context["base_field_options"] ?? null)], 98, $context, $this->getSourceContext());
            yield "
                    </div>
                </div>
            ";
        } else {
            // line 102
            yield "                <input type=\"hidden\" name=\"_users_id_requester\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"), "html", null, true);
            yield "\">
            ";
        }
        // line 104
        yield "        </div>

        <div class=\"card-body row mx-0\">
            <div class=\"col-md-8 col-xxl-6\">
                ";
        // line 108
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["urgency", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dropdownUrgency", [["value" => (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["urgency"] ?? null) : null), "width" => "100%", "display" => false, "required" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["right_field_options"] ?? null), "fields_template", [], "any", false, false, false, 108), "isMandatoryField", ["urgency"], "method", false, false, false, 108)]], "method", false, false, false, 108), __("Urgency"), ($context["right_field_options"] ?? null)], 108, $context, $this->getSourceContext());
        yield "

                ";
        // line 110
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_requester_custom_name"], "method", false, false, false, 110)) {
            // line 111
            yield "                    ";
            $context["requester_custom_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 112
                yield "                        <input type=\"text\" 
                               name=\"requester_custom_name\" 
                               value=\"";
                // line 114
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "requester_custom_name", [], "any", true, true, false, 114) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "requester_custom_name", [], "any", false, false, false, 114)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "requester_custom_name", [], "any", false, false, false, 114), "html", null, true)) : (yield ""));
                yield "\" 
                               class=\"form-control\"
                               ";
                // line 116
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_requester_custom_name"], "method", false, false, false, 116)) {
                    yield "required";
                }
                yield ">
                    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            yield "                    
                    ";
            // line 119
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["requester_custom_name", ($context["requester_custom_field"] ?? null), __("Nombre del solicitante"), Twig\Extension\CoreExtension::merge(($context["right_field_options"] ?? null), ["required" => true])], 119, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 121
        yield "                ";
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(($context["right_field_options"] ?? null), ["hide_if_no_elements" => true])], 121, $context, $this->getSourceContext());
        yield "

                ";
        // line 123
        if (((($__internal_compile_4 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["helpdesk_hardware"] ?? null) : null) && Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_5 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["helpdesk_item_type"] ?? null) : null)))) {
            // line 124
            yield "                    ";
            $context["associated_items"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 125
                yield "                        <a class=\"btn btn-sm btn-ghost-secondary mt-2\" role=\"button\"
                           id=\"btn-collapse-items";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"
                           aria-expanded=\"false\" aria-controls=\"collapse-items";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\"
                           data-bs-toggle=\"collapse\" href=\"#collapse-items";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\" >
                            <i class=\"fas fa-plus\"></i>
                        </a>
                        <div class=\"collapse\" id=\"collapse-items";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                yield "\">
                            ";
                // line 132
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Ticket::itemAddForm", [($context["item"] ?? null), Twig\Extension\CoreExtension::merge(($context["params"] ?? null), ["_canupdate" => Session::haveRight("ticket", Twig\Extension\CoreExtension::constant("CREATE")), "_tickettemplate" => ($context["itiltemplate"] ?? null)])]);
                // line 133
                yield "                        </div>
                    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 135
            yield "
                    ";
            // line 136
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["items_id", ($context["associated_items"] ?? null), _n("Associated element", "Associated elements", Session::getPluralNumber()), ($context["right_field_options"] ?? null)], 136, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 138
        yield "
                ";
        // line 139
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["name", (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null), __("Title"), ($context["right_field_options"] ?? null)], 139, $context, $this->getSourceContext());
        yield "

                ";
        // line 141
        $context["uploads"] = [];
        // line 142
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_content", [], "any", true, true, false, 142)) {
            // line 143
            yield "                    ";
            $context["uploads"] = Twig\Extension\CoreExtension::merge(($context["uploads"] ?? null), ["_content" => CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_content", [], "any", false, false, false, 143), "_tag_content" => CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tag_content", [], "any", false, false, false, 143)]);
            // line 144
            yield "                ";
        }
        // line 145
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_filename", [], "any", true, true, false, 145)) {
            // line 146
            yield "                    ";
            $context["uploads"] = Twig\Extension\CoreExtension::merge(($context["uploads"] ?? null), ["_filename" => CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_filename", [], "any", false, false, false, 146), "_tag_filename" => CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tag_filename", [], "any", false, false, false, 146)]);
            // line 147
            yield "                ";
        }
        // line 148
        yield "
                ";
        // line 149
        yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["content"] ?? null) : null), __("Description"), Twig\Extension\CoreExtension::merge(($context["right_field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_documents_id"], "method", false, false, false, 149)) ? (false) : (true)), "uploads" => ($context["uploads"] ?? null)])], 149, $context, $this->getSourceContext());
        yield "
            </div>

<div class=\"col-md-4\">
            <div class=\"card\"style=\"background-color: rgb(234, 241, 248);\">
                <div class=\"card-footer text-center\">
            <h4><span style=\"font-weight: bold; color: black;\">";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Horarios de Atención"), "html", null, true);
        yield "</span></h4>


                </div>
                <div class=\"card-body\">
    <p style=\"margin-right: 10px;\"> <!-- A�ade un margen derecho al texto -->
        <i class=\"fas fa-bullhorn\" style=\"font-size: 0.9rem;\"></i>
        ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lunes a viernes de 7:00am a 5:00pm en la Ext 543. Fuera de este horario los atenderemos en:"), "html", null, true);
        yield "</p>
<p>";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("- Sistemas: 3212014372."), "html", null, true);
        yield "</p>
<p>";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("- Mantenimiento y Biomédica: 3133455188."), "html", null, true);
        yield "</p> 
                </div>
            </div>
        </div>
    </div>
</div>

        ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

        <div class=\"card-footer text-center\">
            <input type=\"hidden\" name=\"entities_id\" value=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entities_id"] ?? null), "html", null, true);
        yield "\" />
            <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">
                <i class=\"fas fa-plus\"></i>
                <span>";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enviar solicitud"), "html", null, true);
        yield "</span>
            </button>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
\$(function () {
    \$('#btn-collapse-items";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', function() {
        \$(this).hide();
    });

    \$('#dropdown_nodelegate";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('change', function() {
        var is_for_me = (\$(this).val() == '1');
        \$('#user-info";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "-block').toggleClass('d-none', !is_for_me);
        \$('#delegate_other";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .card-body')
            .html(\"\")
            .load('";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownDelegationUsers.php"), "html", null, true);
        yield "', {
                'right': \"delegate\",
                'nodelegate': (is_for_me ? 1 : 0),
                '_users_id_requester': ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_users_id_requester"] ?? null) : null), "html", null, true);
        yield ",
                '_users_id_requester_notif': ";
        // line 198
        yield json_encode((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_users_id_requester_notif"] ?? null) : null));
        yield ",
                'use_notification': ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_users_id_requester_notif"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["use_notification"] ?? null) : null), "html", null, true);
        yield ",
                'entity_restrict': ";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"), "html", null, true);
        yield "
            });
    })

    saveActorsToDom();
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
        return "components/itilobject/selfservice.html.twig";
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
        return array (  396 => 200,  392 => 199,  388 => 198,  384 => 197,  378 => 194,  373 => 192,  369 => 191,  364 => 189,  357 => 185,  346 => 177,  340 => 174,  334 => 171,  324 => 164,  320 => 163,  316 => 162,  306 => 155,  297 => 149,  294 => 148,  291 => 147,  288 => 146,  285 => 145,  282 => 144,  279 => 143,  276 => 142,  274 => 141,  269 => 139,  266 => 138,  261 => 136,  258 => 135,  253 => 133,  251 => 132,  247 => 131,  241 => 128,  237 => 127,  233 => 126,  230 => 125,  227 => 124,  225 => 123,  219 => 121,  214 => 119,  211 => 118,  203 => 116,  198 => 114,  194 => 112,  191 => 111,  189 => 110,  184 => 108,  178 => 104,  172 => 102,  164 => 98,  154 => 93,  151 => 92,  148 => 91,  145 => 90,  143 => 89,  138 => 87,  135 => 86,  133 => 85,  127 => 84,  123 => 82,  121 => 81,  120 => 79,  119 => 77,  116 => 76,  108 => 72,  102 => 70,  100 => 69,  96 => 67,  94 => 66,  87 => 62,  80 => 58,  76 => 57,  73 => 56,  63 => 53,  60 => 52,  58 => 51,  54 => 49,  52 => 44,  50 => 42,  49 => 41,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
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

{% set rand = random() %}
{% set base_field_options = {
    'is_horizontal': false,
    'full_width': true,
    'full_width_adapt_column': false,
    'fields_template': itiltemplate,
    'rand': rand,
} %}
{% set right_field_options = base_field_options|merge({
    'is_horizontal': true,
    'label_class': 'col-lg-3',
    'input_class': 'col-lg-9',
}) %}

<div class=\"container-lg\">
    {% if has_tickets_to_validate and not url_validate is empty %}
        <div class=\"alert alert-warning\" role=\"alert\">
            {{ __('There are some tickets awaiting approval') }} — <a href=\"{{ url_validate }}\" class=\"alert-link\">{{ __('check it out!') }}</a>
        </div>
    {% endif %}

    {{ include('components/itilobject/mainform_open.html.twig') }}
    {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::PRE_ITEM_FORM'), {'item': item, 'options': params}) }}

    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">{{ __('Descripción de orden de servicio') }}</h3>
        </div>

        <div class=\"card-body bg-secondary-lt pt-0\">
            {% if delegating|length %}
                <div class=\"row align-items-end w-100\">
                    <div class=\"col-sm-6\">
                        {% set actor_add_form %}
                            <div id=\"delegate_other{{ rand }}\" class=\"card mt-2\">
                                <div class=\"card-body\">
                                    {{ item.showActorAddFormOnCreate(constant('CommonITILActor::REQUESTER'), params)|u.truncate(0) }}
                                </div>
                            </div>
                        {% endset %}

                        {{ fields.dropdownYesNo(
                            'nodelegate',
                            params['nodelegate'],
                            __('This ticket concerns me'),
                            base_field_options|merge({'add_field_html': actor_add_form})
                        ) }}
                    </div>
                    <div class=\"col-sm-6 {{ config('use_check_pref') and params['nodelegate'] ? \"\" : \"d-none\" }}\" id=\"user-info{{ rand }}-block\">
                        {% set personal_information %}
                        <div class=\"d-inline-flex\">
                            <div class=\"card mb-0\" id=\"user-info{{ rand }}\">
                                <div class=\"card-body\">
                                    {% set user = get_current_user() %}
                                    {% set user_fields = user.fields %}
                                    {% set user_fields = user_fields|merge({user_name: user.getFriendlyName()|verbatim_value}) %}
                                    {% set user_fields = user_fields|merge({email: user.getDefaultEmail()}) %}
                                    {{ include('components/user/info_card.html.twig', {'user': user_fields, 'can_edit': true}, with_context = false) }}
                                </div>
                            </div>
                        </div>
                        {% endset %}
                        {{ fields.field('', personal_information, __('Check your personal information'), base_field_options) }}
                    </div>
                </div>
            {% else %}
                <input type=\"hidden\" name=\"_users_id_requester\" value=\"{{ session('glpiID') }}\">
            {% endif %}
        </div>

        <div class=\"card-body row mx-0\">
            <div class=\"col-md-8 col-xxl-6\">
                {{ fields.field('urgency', item.dropdownUrgency({'value': params['urgency'], 'width': '100%', 'display': false, 'required': right_field_options.fields_template.isMandatoryField('urgency')}), __('Urgency'), right_field_options) }}

                {% if not itiltemplate.isHiddenField('_requester_custom_name') %}
                    {% set requester_custom_field %}
                        <input type=\"text\" 
                               name=\"requester_custom_name\" 
                               value=\"{{ item.requester_custom_name ?? '' }}\" 
                               class=\"form-control\"
                               {% if itiltemplate.isMandatoryField('_requester_custom_name') %}required{% endif %}>
                    {% endset %}
                    
                    {{ fields.field('requester_custom_name', requester_custom_field, __('Nombre del solicitante'), right_field_options|merge({required: true})) }}
                {% endif %}
                {{ fields.dropdownField('Location', 'locations_id', params['locations_id'], 'Location'|itemtype_name, right_field_options|merge({'hide_if_no_elements': true})) }}

                {% if session('glpiactiveprofile')['helpdesk_hardware'] and session('glpiactiveprofile')['helpdesk_item_type']|length %}
                    {% set associated_items %}
                        <a class=\"btn btn-sm btn-ghost-secondary mt-2\" role=\"button\"
                           id=\"btn-collapse-items{{ rand }}\"
                           aria-expanded=\"false\" aria-controls=\"collapse-items{{ rand }}\"
                           data-bs-toggle=\"collapse\" href=\"#collapse-items{{ rand }}\" >
                            <i class=\"fas fa-plus\"></i>
                        </a>
                        <div class=\"collapse\" id=\"collapse-items{{ rand }}\">
                            {% do call('Item_Ticket::itemAddForm', [item, params|merge({'_canupdate': has_profile_right('ticket', constant('CREATE')), '_tickettemplate': itiltemplate,})]) %}
                        </div>
                    {% endset %}

                    {{ fields.field('items_id', associated_items, _n('Associated element', 'Associated elements', get_plural_number()), right_field_options) }}
                {% endif %}

                {{ fields.textField('name', params['name'], __('Title'), right_field_options) }}

                {% set uploads = [] %}
                {% if params._content is defined %}
                    {% set uploads = uploads|merge({'_content': params._content, '_tag_content': params._tag_content}) %}
                {% endif %}
                {% if params._filename is defined %}
                    {% set uploads = uploads|merge({'_filename': params._filename, '_tag_filename': params._tag_filename}) %}
                {% endif %}

                {{ fields.textareaField('content', params['content'], __('Description'), right_field_options|merge({'enable_richtext': true, 'enable_fileupload': (itiltemplate.isHiddenField('_documents_id')) ? false : true, 'uploads': uploads,})) }}
            </div>

<div class=\"col-md-4\">
            <div class=\"card\"style=\"background-color: rgb(234, 241, 248);\">
                <div class=\"card-footer text-center\">
            <h4><span style=\"font-weight: bold; color: black;\">{{ __('Horarios de Atención') }}</span></h4>


                </div>
                <div class=\"card-body\">
    <p style=\"margin-right: 10px;\"> <!-- A�ade un margen derecho al texto -->
        <i class=\"fas fa-bullhorn\" style=\"font-size: 0.9rem;\"></i>
        {{ __('Lunes a viernes de 7:00am a 5:00pm en la Ext 543. Fuera de este horario los atenderemos en:') }}</p>
<p>{{ __('- Sistemas: 3212014372.') }}</p>
<p>{{ __('- Mantenimiento y Biomédica: 3133455188.') }}</p> 
                </div>
            </div>
        </div>
    </div>
</div>

        {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::POST_ITEM_FORM'), {'item': item, 'options': params}) }}

        <div class=\"card-footer text-center\">
            <input type=\"hidden\" name=\"entities_id\" value=\"{{ entities_id }}\" />
            <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">
                <i class=\"fas fa-plus\"></i>
                <span>{{ __('Enviar solicitud') }}</span>
            </button>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
\$(function () {
    \$('#btn-collapse-items{{ rand }}').on('click', function() {
        \$(this).hide();
    });

    \$('#dropdown_nodelegate{{ rand }}').on('change', function() {
        var is_for_me = (\$(this).val() == '1');
        \$('#user-info{{ rand }}-block').toggleClass('d-none', !is_for_me);
        \$('#delegate_other{{ rand }} .card-body')
            .html(\"\")
            .load('{{ path('ajax/dropdownDelegationUsers.php') }}', {
                'right': \"delegate\",
                'nodelegate': (is_for_me ? 1 : 0),
                '_users_id_requester': {{ params['_users_id_requester'] }},
                '_users_id_requester_notif': {{ params['_users_id_requester_notif']|json_encode()|raw }},
                'use_notification': {{ params['_users_id_requester_notif']['use_notification'] }},
                'entity_restrict': {{ session('glpiID') }}
            });
    })

    saveActorsToDom();
});
</script>
", "components/itilobject/selfservice.html.twig", "/var/www/glpi/templates/components/itilobject/selfservice.html.twig");
    }
}
