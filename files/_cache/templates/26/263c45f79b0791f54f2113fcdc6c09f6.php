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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_623325feb36b2e6f39049d055ee08a7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_followup.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = Twig\Extension\CoreExtension::merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("READ")) || Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("UPDATE"));
        // line 42
        $context["nokb"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 43
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_followup.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 47
            yield "      <div class=\"read-only-content\">
         <div class=\"rich_text_container\">
            ";
            // line 49
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 52
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 56
            if ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["requesttypes_id"] ?? null) : null)) {
                // line 57
                yield "               <span class=\"badge bg-blue-lt\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                yield "\">
                  <i class=\"fas fa-inbox me-1\"></i>
                  ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("RequestType", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["requesttypes_id"] ?? null) : null)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 62
            yield "
            ";
            // line 63
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["sourceitems_id"] ?? null) : null)) {
                // line 64
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 66
                $context["merged_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 67
                    yield "                     <span class=\"badge ms-2 me-n2\">
                        ";
                    // line 68
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sourceitems_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 74
            yield "
            ";
            // line 75
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sourceof_items_id"] ?? null) : null)) {
                // line 76
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 78
                $context["promoted_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 79
                    yield "                     <span class=\"badge ms-2 me-n2\">
                        ";
                    // line 80
                    yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sourceof_items_id"] ?? null) : null));
                    yield "
                     </span>
                  ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 83
                yield "                  ";
                yield Twig\Extension\CoreExtension::sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                yield "
               </span>
            ";
            }
            // line 86
            yield "
            ";
            // line 87
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            yield "
         </div>
      </div>
   ";
        } else {
            // line 91
            yield "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 93), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 94), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
            yield "\" />
            ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

            ";
            // line 98
            $context["add_reopen"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 98) &&  !(null === (($__internal_compile_9 = ($context["_get"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["_get"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_openfollowup"] ?? null) : null)) : (false)) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "needReopen", [], "method", false, false, false, 98));
            // line 99
            yield "            ";
            if (($context["add_reopen"] ?? null)) {
                // line 100
                yield "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 102
            yield "
            <div class=\"row mx-n3 mx-xxl-auto\">
               ";
            // line 104
            $context["col_md"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) ? ("col-xl-7 col-xxl-8") : ("col-xxl-12"));
            // line 105
            yield "               <div class=\"col-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_md"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 106
            yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source,             // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["entities_id"] ?? null) : null), "rand" =>             // line 117
($context["rand"] ?? null), "required" => true]], 106, $context, $this->getSourceContext());
            // line 120
            yield "
               </div>
               ";
            // line 122
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 123
                yield "                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                     <div class=\"row\">

                        ";
                // line 126
                $context["fup_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 127
                    yield "                           <i class=\"fas fa-reply fa-fw me-1\"
                              title=\"";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 130
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ITILFollowupTemplate", "itilfollowuptemplates_id", (($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source,                 // line 133
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["itilfollowuptemplates_id"] ?? null) : null),                 // line 134
($context["fup_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 138
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source,                 // line 139
($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["entities_id"] ?? null) : null), "rand" =>                 // line 140
($context["rand"] ?? null)]], 130, $context, $this->getSourceContext());
                // line 142
                yield "

                        ";
                // line 144
                $context["fup_source_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 145
                    yield "                           <i class=\"fas fa-inbox fa-fw me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 147
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source,                 // line 150
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["requesttypes_id"] ?? null) : null),                 // line 151
($context["fup_source_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "condition" => ["is_active" => 1, "is_itilfollowup" => 1], "rand" =>                 // line 159
($context["rand"] ?? null)]], 147, $context, $this->getSourceContext());
                // line 161
                yield "

                        ";
                // line 163
                $context["fup_private_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 164
                    yield "                           <i class=\"ti ti-lock fa-fw me-1\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
                    yield "\"></i>
                        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 166
                yield "                        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source,                 // line 168
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 168)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["is_private"] ?? null) : null),                 // line 169
($context["fup_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 173
($context["rand"] ?? null)]], 166, $context, $this->getSourceContext());
                // line 175
                yield "

                        ";
                // line 177
                if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                    // line 178
                    yield "                           ";
                    $context["link_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 179
                        yield "                              <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                 title=\"";
                        // line 180
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                        yield "\"></i>
                           ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 182
                    yield "                           ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                     // line 185
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 189
($context["rand"] ?? null), "yes_value" =>                     // line 190
($context["kb_id_toload"] ?? null)]], 182, $context, $this->getSourceContext());
                    // line 192
                    yield "
                        ";
                }
                // line 194
                yield "
                        ";
                // line 195
                if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                    // line 196
                    yield "                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 197
                        yield "                              <i class=\"far fa-save fa-fw me-1\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                        yield "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                        return; yield '';
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 200
                    yield "                           ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_sliderField", ["_fup_to_kb", 0,                     // line 203
($context["fup_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 207
($context["rand"] ?? null)]], 200, $context, $this->getSourceContext());
                    // line 209
                    yield "
                        ";
                }
                // line 211
                yield "                     </div>
                  </div>
               ";
            }
            // line 214
            yield "            </div>

            ";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "
            ";
            // line 218
            yield "            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               ";
            // line 219
            $context["pending_reasons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 220
                yield "                  ";
                $context["show_pending_reasons_actions"] = (((($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 220)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) &&  !($context["add_reopen"] ?? null));
                // line 221
                yield "                  ";
                if (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [(($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 221)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["status"] ?? null) : null), Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")], "method", false, false, false, 221)) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)]))) {
                    // line 222
                    yield "                     <span
                        class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
                    // line 223
                    yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("flex-fill") : (""));
                    yield "\"
                        id=\"pending-reasons-control-";
                    // line 224
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                     >
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 226
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set the status to pending"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"fas fa-pause me-2\"></i>
                           <label class=\"form-check form-switch mt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                    // line 232
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                                    role=\"button\"
                                    ";
                    // line 234
                    yield (((((($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 234)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["status"] ?? null) : null) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) &&  !($context["add_reopen"] ?? null))) ? ("checked") : (""));
                    yield "
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 235
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\" />
                           </label>
                        </span>

                        <div
                           class=\"collapse ps-2 py-1 flex-fill ";
                    // line 240
                    yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("show") : (""));
                    yield "\"
                           aria-expanded=\"";
                    // line 241
                    yield ((($context["show_pending_reasons_actions"] ?? null)) ? ("true") : ("false"));
                    yield "\"
                           id=\"pending-reasons-setup-";
                    // line 242
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\"
                        >
                           ";
                    // line 244
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                    yield "
                        </div>
                     </span>
                  ";
                }
                // line 248
                yield "               ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 249
            yield "
               ";
            // line 250
            if (((($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 250)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null) <= 0)) {
                // line 251
                yield "                  ";
                // line 252
                yield "                  <div class=\"input-group flex-nowrap\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 255
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
                     </button>
                     ";
                // line 257
                yield ($context["pending_reasons"] ?? null);
                yield "
                  </div>
               ";
            } else {
                // line 260
                yield "                  <input type=\"hidden\" name=\"id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 260)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null), "html", null, true);
                yield "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 263
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 266
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 266)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 266)) {
                    // line 267
                    yield "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 268
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "html", null, true);
                    yield "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 273
                yield "                  ";
                yield ($context["pending_reasons"] ?? null);
                yield "
               ";
            }
            // line 275
            yield "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: '";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/itilfollowup.php"), "html", null, true);
            yield "',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 288)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["id"] ?? null) : null), "html", null, true);
            yield "',
                  itemtype: '";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 289), "html", null, true);
            yield "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               setRichTextEditorContent(\"content_";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\", data.content);
               // set category
               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.requesttypes_name, requesttypes_id, true, true);
               \$(\"#dropdown_requesttypes_id";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").append(newOption).trigger('change');

               // set is_private
               \$(\"#is_private_";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\")
                  .prop(\"checked\", data.is_private == \"0\"
                     ? false
                     : true);
            });
         }
      </script>
   ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_followup.html.twig";
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
        return array (  525 => 305,  519 => 302,  511 => 297,  500 => 289,  496 => 288,  489 => 284,  484 => 282,  476 => 277,  472 => 275,  466 => 273,  460 => 270,  455 => 268,  452 => 267,  450 => 266,  444 => 263,  437 => 260,  431 => 257,  426 => 255,  421 => 252,  419 => 251,  417 => 250,  414 => 249,  410 => 248,  403 => 244,  398 => 242,  394 => 241,  390 => 240,  382 => 235,  378 => 234,  373 => 232,  364 => 226,  359 => 224,  355 => 223,  352 => 222,  349 => 221,  346 => 220,  344 => 219,  341 => 218,  337 => 216,  333 => 214,  328 => 211,  324 => 209,  322 => 207,  321 => 203,  319 => 200,  311 => 197,  308 => 196,  306 => 195,  303 => 194,  299 => 192,  297 => 190,  296 => 189,  295 => 185,  293 => 182,  287 => 180,  284 => 179,  281 => 178,  279 => 177,  275 => 175,  273 => 173,  272 => 169,  271 => 168,  269 => 166,  262 => 164,  260 => 163,  256 => 161,  254 => 159,  253 => 151,  252 => 150,  250 => 147,  243 => 145,  241 => 144,  237 => 142,  235 => 140,  234 => 139,  233 => 138,  232 => 134,  231 => 133,  229 => 130,  223 => 128,  220 => 127,  218 => 126,  213 => 123,  211 => 122,  207 => 120,  205 => 117,  204 => 116,  203 => 108,  202 => 106,  197 => 105,  195 => 104,  191 => 102,  187 => 100,  184 => 99,  182 => 98,  177 => 96,  173 => 95,  169 => 94,  165 => 93,  161 => 91,  154 => 87,  151 => 86,  144 => 83,  137 => 80,  134 => 79,  132 => 78,  128 => 76,  126 => 75,  123 => 74,  116 => 71,  109 => 68,  106 => 67,  104 => 66,  100 => 64,  98 => 63,  95 => 62,  89 => 59,  83 => 57,  81 => 56,  75 => 52,  73 => 49,  69 => 47,  66 => 46,  62 => 45,  57 => 34,  55 => 43,  53 => 42,  51 => 41,  49 => 40,  47 => 39,  45 => 37,  43 => 35,  36 => 34,);
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

{% extends 'components/itilobject/timeline/form_timeline_item.html.twig' %}
{% import 'components/form/fields_macros.html.twig' as fields %}

{% set params = {'item': item}|merge(params|default({})) %}

{% set candedit = item.maySolve() %}
{% set can_read_kb = has_profile_right('knowbase', constant('READ')) or has_profile_right('knowbase', constant('KnowbaseItem::READFAQ')) %}
{% set can_update_kb = has_profile_right('knowbase', constant('UPDATE')) %}
{% set nokb = params['nokb'] is defined or params['nokb'] == true %}
{% set rand = random() %}

{% block timeline_card %}
   {% if form_mode == 'view' %}
      <div class=\"read-only-content\">
         <div class=\"rich_text_container\">
            {{ entry_i['content']|enhanced_html({
               'user_mentions': true,
               'images_gallery': true
            }) }}
         </div>

         <div class=\"timeline-badges\">
            {% if entry_i['requesttypes_id'] %}
               <span class=\"badge bg-blue-lt\" title=\"{{ __('Source of followup') }}\">
                  <i class=\"fas fa-inbox me-1\"></i>
                  {{ get_item_name('RequestType', entry_i['requesttypes_id']) }}
               </span>
            {% endif %}

            {% if entry_i['sourceitems_id'] %}
               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  {% set merged_badge %}
                     <span class=\"badge ms-2 me-n2\">
                        {{ get_item_link('Ticket', entry_i['sourceitems_id']) }}
                     </span>
                  {% endset %}
                  {{ __('Merged from Ticket %1\$s')|format(merged_badge)|raw }}
               </span>
            {% endif %}

            {% if entry_i['sourceof_items_id'] %}
               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  {% set promoted_badge %}
                     <span class=\"badge ms-2 me-n2\">
                        {{ get_item_link('Ticket', entry_i['sourceof_items_id']) }}
                     </span>
                  {% endset %}
                  {{ __('Promoted to Ticket %1\$s')|format(promoted_badge)|raw }}
               </span>
            {% endif %}

            {{ include('components/itilobject/timeline/pending_reasons_messages.html.twig') }}
         </div>
      </div>
   {% else %}
      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"{{ subitem.getFormURL() }}\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"{{ item.getType() }}\" />
            <input type=\"hidden\" name=\"items_id\" value=\"{{ item.fields['id'] }}\" />
            {{ call_plugin_hook('pre_item_form', {\"item\": subitem, 'options': params}) }}

            {% set add_reopen = (_get['_openfollowup'] ?? false) or item.needReopen() %}
            {% if add_reopen %}
               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            {% endif %}

            <div class=\"row mx-n3 mx-xxl-auto\">
               {% set col_md = get_current_interface() == 'central' ? 'col-xl-7 col-xxl-8' : 'col-xxl-12' %}
               <div class=\"col-12 {{ col_md }}\">
                  {{ fields.textareaField(
                     'content',
                     subitem.fields['content'],
                     '',
                     {
                        'full_width': true,
                        'no_label': true,
                        'enable_richtext': true,
                        'enable_fileupload': true,
                        'enable_mentions': true,
                        'entities_id': item.fields['entities_id'],
                        'rand': rand,
                        'required': true
                     }
                  ) }}
               </div>
               {% if get_current_interface() == 'central' %}
                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                     <div class=\"row\">

                        {% set fup_template_lbl %}
                           <i class=\"fas fa-reply fa-fw me-1\"
                              title=\"{{ _n('Followup template', 'Followup templates', get_plural_number()) }}\"></i>
                        {% endset %}
                        {{ fields.dropdownField(
                           'ITILFollowupTemplate',
                           'itilfollowuptemplates_id',
                           subitem.fields['itilfollowuptemplates_id'],
                           fup_template_lbl,
                           {
                              'full_width': true,
                              'icon_label': true,
                              'on_change': 'itilfollowuptemplate_update' ~ rand ~ '(this.value)',
                              'entity': item.fields['entities_id'],
                              'rand': rand,
                           }
                        ) }}

                        {% set fup_source_lbl %}
                           <i class=\"fas fa-inbox fa-fw me-1\" title=\"{{ __('Source of followup') }}\"></i>
                        {% endset %}
                        {{ fields.dropdownField(
                           'RequestType',
                           'requesttypes_id',
                           subitem.fields['requesttypes_id'],
                           fup_source_lbl,
                           {
                              'full_width': true,
                              'icon_label': true,
                              'condition': {
                                 'is_active': 1,
                                 'is_itilfollowup': 1,
                              },
                              'rand': rand,
                           }
                        ) }}

                        {% set fup_private_lbl %}
                           <i class=\"ti ti-lock fa-fw me-1\" title=\"{{ __('Private') }}\"></i>
                        {% endset %}
                        {{ fields.sliderField(
                           'is_private',
                           subitem.fields['is_private'],
                           fup_private_lbl,
                           {
                              'full_width': true,
                              'icon_label': true,
                              'rand': rand,
                           }
                        ) }}

                        {% if can_read_kb and kb_id_toload > 0 %}
                           {% set link_kb_lbl %}
                              <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                 title=\"{{ __('Link to knowledge base entry #%id')|replace({'%id': kb_id_toload}) }}\"></i>
                           {% endset %}
                           {{ fields.sliderField(
                              'kb_linked_id',
                              1,
                              link_kb_lbl,
                              {
                                 'full_width': true,
                                 'icon_label': true,
                                 'rand': rand,
                                 'yes_value': kb_id_toload,
                              }
                           ) }}
                        {% endif %}

                        {% if candedit and can_update_kb and not nokb %}
                           {% set fup_to_kb_lbl %}
                              <i class=\"far fa-save fa-fw me-1\" title=\"{{ __('Save and add to the knowledge base') }}\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           {% endset %}
                           {{ fields.sliderField(
                              '_fup_to_kb',
                              0,
                              fup_to_kb_lbl,
                              {
                                 'full_width': true,
                                 'icon_label': true,
                                 'rand': rand,
                              }
                           ) }}
                        {% endif %}
                     </div>
                  </div>
               {% endif %}
            </div>

            {{ call_plugin_hook('post_item_form', {\"item\": subitem, 'options': params}) }}
            {# Fixed min-height ensure no height increase when toggling the pending reason button, as select 2 dropdown are a bit higher than the default footer height #}
            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               {% set pending_reasons %}
                  {% set show_pending_reasons_actions = item.fields['status'] == constant('CommonITILObject::WAITING') and not add_reopen %}
                  {% if get_current_interface() == 'central' and item.isAllowedStatus(item.fields['status'], constant('CommonITILObject::WAITING')) and call('PendingReason_Item::canDisplayPendingReasonForItem', [subitem]) %}
                     <span
                        class=\"input-group-text bg-yellow-lt py-0 pe-0 {{ show_pending_reasons_actions ? 'flex-fill' : '' }}\"
                        id=\"pending-reasons-control-{{ rand }}\"
                     >
                        <span class=\"d-inline-flex align-items-center\" title=\"{{ __(\"Set the status to pending\") }}\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"fas fa-pause me-2\"></i>
                           <label class=\"form-check form-switch mt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-{{ rand }}\"
                                    role=\"button\"
                                    {{ item.fields['status'] == constant('CommonITILObject::WAITING') and not add_reopen ? 'checked' : '' }}
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-{{ rand }}\" />
                           </label>
                        </span>

                        <div
                           class=\"collapse ps-2 py-1 flex-fill {{ show_pending_reasons_actions ? 'show' : '' }}\"
                           aria-expanded=\"{{ show_pending_reasons_actions ? 'true' : 'false' }}\"
                           id=\"pending-reasons-setup-{{ rand }}\"
                        >
                           {{ include('components/itilobject/timeline/pending_reasons.html.twig') }}
                        </div>
                     </span>
                  {% endif %}
               {% endset %}

               {% if subitem.fields['id'] <= 0 %}
                  {# Do not enable flex wrapping when creating a new item as the pending form will be merged with the add button in an input group #}
                  <div class=\"input-group flex-nowrap\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>{{ _x('button', 'Add') }}</span>
                     </button>
                     {{ pending_reasons|raw }}
                  </div>
               {% else %}
                  <input type=\"hidden\" name=\"id\" value=\"{{ subitem.fields['id'] }}\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>{{ _x('button', 'Save') }}</span>
                  </button>

                  {% if subitem.can(subitem.fields['id'], constant('PURGE')) %}
                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('{{ __('Confirm the final deletion?') }}');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>{{ _x('button', 'Delete permanently') }}</span>
                     </button>
                  {% endif %}
                  {{ pending_reasons|raw }}
               {% endif %}
            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update{{ rand }}(value) {
            \$.ajax({
               url: '{{ path('/ajax/itilfollowup.php') }}',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '{{ item.fields['id'] }}',
                  itemtype: '{{ item.getType() }}'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               setRichTextEditorContent(\"content_{{ rand }}\", data.content);
               // set category
               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.requesttypes_name, requesttypes_id, true, true);
               \$(\"#dropdown_requesttypes_id{{ rand }}\").append(newOption).trigger('change');

               // set is_private
               \$(\"#is_private_{{ rand }}\")
                  .prop(\"checked\", data.is_private == \"0\"
                     ? false
                     : true);
            });
         }
      </script>
   {% endif %}
{% endblock %}
", "components/itilobject/timeline/form_followup.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/form_followup.html.twig");
    }
}
