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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_c88d9a678e59bb21c3defd3ff14b61ba extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 34)->unwrap();
        // line 35
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 37
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 38
($context["canupdate"] ?? null), "add_field_class" => ((        // line 39
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 41
        yield "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 44
        yield "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        yield "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 49
        yield ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 52
        if (((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null) != "solved")) {
            // line 53
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["status"] ?? null) : null)], "method", false, false, false, 53);
            yield "
";
        }
        // line 55
        yield "            </span>
            <span class=\"item-title\">
                ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 57), "html", null, true);
        yield "
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 61
        yield ((($context["main_show"] ?? null)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

            ";
        // line 66
        if (Session::isMultiEntitiesMode()) {
            // line 67
            yield "    ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(            // line 72
($context["field_options"] ?? null), ["entity" =>             // line 73
($context["userentities"] ?? null)])], 67, $context, $this->getSourceContext());
            // line 75
            yield "

    ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_recursive"], "method", false, false, false, 77)) {
                // line 78
                yield "        ";
                yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,                 // line 80
($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 82
($context["field_options"] ?? null)], 78, $context, $this->getSourceContext());
                // line 83
                yield "
    ";
            }
        }
        // line 86
        yield "
            ";
        // line 87
        yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date"] ?? null) : null), __("Opening date"),         // line 91
($context["field_options"] ?? null)], 87, $context, $this->getSourceContext());
        // line 92
        yield "

            ";
        // line 94
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 94) != "Ticket")) {
            // line 95
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 99
($context["field_options"] ?? null)], 95, $context, $this->getSourceContext());
            // line 100
            yield "
            ";
        }
        // line 102
        yield "
            ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 103)) {
            // line 104
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source,             // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["closedate"] ?? null) : null), __("Close date"),             // line 108
($context["field_options"] ?? null)], 104, $context, $this->getSourceContext());
            // line 109
            yield "
            ";
        }
        // line 111
        yield "
            ";
        // line 112
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 112) == "Ticket")) {
            // line 113
            yield "               ";
            $context["type_params"] = Twig\Extension\CoreExtension::merge(["value" => (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source,             // line 114
($context["item"] ?? null), "fields", [], "any", false, false, false, 114)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 117
($context["field_options"] ?? null));
            // line 118
            yield "
";
            // line 119
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 119)) {
                // line 120
                yield "   ";
                // line 121
                yield "   ";
                $context["type_params"] = ($context["type_params"] ?? null);
            } else {
                // line 123
                yield "   ";
                // line 124
                yield "   ";
                $context["type_params"] = ($context["type_params"] ?? null);
            }
            // line 125
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["type", CoreExtension::getAttribute($this->env, $this->source,             // line 127
($context["item"] ?? null), "dropdownType", ["type", ($context["type_params"] ?? null)], "method", false, false, false, 127), _n("Type", "Types", 1),             // line 129
($context["field_options"] ?? null)], 125, $context, $this->getSourceContext());
            // line 130
            yield "
            ";
        }
        // line 132
        yield "
            ";
        // line 133
        $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = CoreExtension::getAttribute($this->env, $this->source,         // line 134
($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null), "disabled" =>  !(        // line 135
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 137
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 137)) {
            // line 138
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 141
            yield "            ";
        }
        // line 142
        yield "            ";
        if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 142) && CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["itilcategories_id"], "method", false, false, false, 142)) && ((($__internal_compile_11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["itilcategories_id"] ?? null) : null) > 0))) {
            // line 143
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 146
            yield "            ";
        }
        // line 147
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 147) == "Ticket")) {
            // line 148
            yield "               ";
            if (((($__internal_compile_12 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 148)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                // line 149
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 150
                yield "               ";
            } elseif (((($__internal_compile_13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                // line 151
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 152
                yield "               ";
            }
            // line 153
            yield " ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
            yield "
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 154
($context["item"] ?? null), "getType", [], "method", false, false, false, 154) == "Problem")) {
            // line 155
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 156
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 156) == "Change")) {
            // line 157
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 158
            yield "            ";
        }
        // line 159
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/status.html.twig");
        yield "
            <span id=\"category_block_";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 161
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source,         // line 164
($context["item"] ?? null), "fields", [], "any", false, false, false, 164)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 166
($context["cat_params"] ?? null)], 161, $context, $this->getSourceContext());
        // line 167
        yield "
            </span>
            ";
        // line 169
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 169) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 169) == "Ticket"))) {
            // line 170
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 173
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 173)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 175
($context["field_options"] ?? null), ["entity" => (($__internal_compile_16 = CoreExtension::getAttribute($this->env, $this->source,             // line 176
($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])], 170, $context, $this->getSourceContext());
            // line 181
            yield "
            ";
        }
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

  ";
        // line 185
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 185)) {
            // line 186
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["location", "locations_id", (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source,             // line 189
($context["item"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("location"), Twig\Extension\CoreExtension::merge(            // line 191
($context["field_options"] ?? null), ["hide_if_no_elements" => true, "entity" => (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source,             // line 193
($context["item"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null), "entity_sons" => true])], 186, $context, $this->getSourceContext());
            // line 196
            yield "
            ";
        }
        // line 198
        yield "
            ";
        // line 199
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["requesttypes_id"], "method", false, false, false, 199)) {
            // line 200
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source,             // line 203
($context["item"] ?? null), "fields", [], "any", false, false, false, 203)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), Twig\Extension\CoreExtension::merge(            // line 205
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], 200, $context, $this->getSourceContext());
            // line 211
            yield "
            ";
        }
        // line 213
        yield "
            ";
        // line 214
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 214) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 214) == "Ticket"))) {
            // line 215
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 218
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_20 = ($context["params"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 220
($context["field_options"] ?? null), ["entity" => (($__internal_compile_21 = CoreExtension::getAttribute($this->env, $this->source,             // line 221
($context["item"] ?? null), "fields", [], "any", false, false, false, 221)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])], 215, $context, $this->getSourceContext());
            // line 226
            yield "
            ";
        }
        // line 228
        yield "
            ";
        // line 229
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 229) != "Ticket") || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 229))) {
            // line 230
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source,             // line 232
($context["item"] ?? null), "fields", [], "any", false, false, false, 232)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["actiontime"] ?? null) : null), __("Total duration"),             // line 234
($context["field_options"] ?? null)], 230, $context, $this->getSourceContext());
            // line 235
            yield "
            ";
        }
        // line 237
        yield "
            ";
        // line 238
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        yield "

            
         </div>
      </div>
   </div>
   ";
        // line 244
        $context["actors_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 244) || ((($__internal_compile_23 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 245
        yield "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 247
        yield ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 253), "html", null, true);
        yield "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 257
        yield ((($context["actors_show"] ?? null)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 259
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/main.html.twig");
        yield "
         </div>
      </div>
   </div>

   ";
        // line 264
        if ((array_key_exists("item_ticket", $context) &&  !(null === ($context["item_ticket"] ?? null)))) {
            // line 265
            yield "      ";
            $context["items_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 265) || ((($__internal_compile_24 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 266
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 268
            yield ((($context["items_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               ";
            // line 274
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["items_id"], "method", false, false, false, 274)) {
                // line 275
                yield "                  <span class=\"required\">*</span>
               ";
            }
            // line 277
            yield "            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 279
            yield ((($context["items_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item_ticket"] ?? null), "itemAddForm", [($context["item"] ?? null), Twig\Extension\CoreExtension::merge(((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])), ["entities_id" => ($context["entities_id"] ?? null)])], "method", false, false, false, 281), "html", null, true);
            yield "
            </div>
         </div>
      </div>
   ";
        }
        // line 286
        yield "
   ";
        // line 287
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 287) == "Ticket")) {
            // line 288
            yield "      ";
            $context["la_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 289
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/service_levels.html.twig");
                yield "
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 291
            yield "
      ";
            // line 292
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["la_content"] ?? null))) > 0)) {
                // line 293
                yield "         ";
                $context["nb_la"] = (((((((($__internal_compile_25 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 293)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 293)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 293)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 293)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 294
                yield "         ";
                $context["servicelevels_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 294) && ((($__internal_compile_29 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 295
                yield "         <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 297
                yield ((($context["servicelevels_show"] ?? null)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm me-1\"></i>
                  <span class=\"item-title\">
                     ";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "
                  </span>
                  ";
                // line 302
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 303
                    yield "                     <span class=\"badge bg-secondary ms-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_la"] ?? null), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 305
                yield "               </button>
            </h2>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 307
                yield ((($context["servicelevels_show"] ?? null)) ? ("show") : (""));
                yield "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["la_content"] ?? null), "html", null, true);
                yield "
               </div>
            </div>
         </div>
      ";
            }
            // line 314
            yield "   ";
        }
        // line 315
        yield "
   ";
        // line 316
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 316), ["Problem", "Change"])) {
            // line 317
            yield "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 323
            yield "
      ";
            // line 324
            $context["nb_analysis"] = 0;
            // line 325
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 326
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 326) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($__internal_compile_30 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 326)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 327
                    yield "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 328
                    yield "         ";
                }
                // line 329
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            yield "      ";
            $context["analysis_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 330) && ((($__internal_compile_31 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 331
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 333
            yield ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "
               </span>
               ";
            // line 338
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 339
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_analysis"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 341
            yield "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 343
            yield ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 346
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 346)) {
                    // line 347
                    yield "                     ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [                    // line 348
$context["analysis_field"], (($__internal_compile_32 = CoreExtension::getAttribute($this->env, $this->source,                     // line 349
($context["item"] ?? null), "fields", [], "any", false, false, false, 349)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["analysis_field"]] ?? null) : null),                     // line 350
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 351
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 347, $context, $this->getSourceContext());
                    // line 355
                    yield "
                  ";
                }
                // line 357
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            yield "            </div>
         </div>
      </div>
   ";
        }
        // line 362
        yield "
   ";
        // line 363
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 363) == "Change")) {
            // line 364
            yield "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 369
            yield "
      ";
            // line 370
            $context["nb_plans"] = 0;
            // line 371
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 372
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 372) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($__internal_compile_33 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 372)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 373
                    yield "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 374
                    yield "         ";
                }
                // line 375
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            yield "
      ";
            // line 377
            $context["plans_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 377) && ((($__internal_compile_34 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 378
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 380
            yield ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "
               </span>
               ";
            // line 385
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 386
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_plans"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 388
            yield "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 390
            yield ((($context["plans_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 392
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 393
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 393)) {
                    // line 394
                    yield "                     ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [                    // line 395
$context["plans_field"], (($__internal_compile_35 = CoreExtension::getAttribute($this->env, $this->source,                     // line 396
($context["item"] ?? null), "fields", [], "any", false, false, false, 396)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["plans_field"]] ?? null) : null),                     // line 397
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 398
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 394, $context, $this->getSourceContext());
                    // line 402
                    yield "
                  ";
                }
                // line 404
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 405
            yield "            </div>
         </div>
      </div>
   ";
        }
        // line 409
        yield "
   ";
        // line 410
        if (($context["ticket_ticket"] ?? null)) {
            // line 411
            yield "      ";
            $context["linked_tickets_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_tickets", [], "array", true, true, false, 411) && ((($__internal_compile_36 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["linked_tickets"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 412
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"linked_tickets-heading\" title=\"";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 414
            yield ((($context["linked_tickets_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_tickets\" aria-expanded=\"true\" aria-controls=\"linked_tickets\">
               <i class=\"ti ti-link me-1\"></i>
               ";
            // line 416
            $context["linked_tickets"] = CoreExtension::getAttribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [(($__internal_compile_37 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 416)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["id"] ?? null) : null), true], "method", false, false, false, 416);
            // line 417
            yield "               ";
            $context["nb_linked_tickets"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked_tickets"] ?? null));
            // line 418
            yield "               ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 418) && ((($__internal_compile_38 = (($__internal_compile_39 = ($context["params"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["_link"] ?? null) : null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["tickets_id_2"] ?? null) : null) > 0))) {
                // line 419
                yield "                  ";
                $context["nb_linked_tickets"] = 1;
                // line 420
                yield "               ";
            }
            // line 421
            yield "               <span class=\"item-title\">
                    ";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            yield "
               </span>
               ";
            // line 424
            if ((($context["nb_linked_tickets"] ?? null) > 0)) {
                // line 425
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_linked_tickets"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 427
            yield "            </button>
         </h2>
         <div id=\"linked_tickets\" class=\"accordion-collapse collapse ";
            // line 429
            yield ((($context["linked_tickets_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"linked_tickets-heading\">
            <div class=\"accordion-body\">
               ";
            // line 431
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/linked_tickets.html.twig");
            yield "
            </div>
         </div>
      </div>
   ";
        }
        // line 436
        yield "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .field-container').load(
        '";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        yield "',
        {
            'type': type,
            'entity_restrict': ";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_40 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 460)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["entities_id"] ?? null) : null), "html", null, true);
        yield ",
            'value': ";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 461)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["itilcategories_id"] ?? null) : null), "html", null, true);
        yield ",
        }
    );
};
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
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
        return array (  827 => 461,  823 => 460,  817 => 457,  813 => 456,  791 => 436,  783 => 431,  778 => 429,  774 => 427,  768 => 425,  766 => 424,  761 => 422,  758 => 421,  755 => 420,  752 => 419,  749 => 418,  746 => 417,  744 => 416,  739 => 414,  735 => 413,  732 => 412,  729 => 411,  727 => 410,  724 => 409,  718 => 405,  712 => 404,  708 => 402,  706 => 398,  705 => 397,  704 => 396,  703 => 395,  701 => 394,  698 => 393,  694 => 392,  689 => 390,  685 => 388,  679 => 386,  677 => 385,  672 => 383,  666 => 380,  662 => 379,  659 => 378,  657 => 377,  654 => 376,  648 => 375,  645 => 374,  642 => 373,  639 => 372,  634 => 371,  632 => 370,  629 => 369,  626 => 364,  624 => 363,  621 => 362,  615 => 358,  609 => 357,  605 => 355,  603 => 351,  602 => 350,  601 => 349,  600 => 348,  598 => 347,  595 => 346,  591 => 345,  586 => 343,  582 => 341,  576 => 339,  574 => 338,  569 => 336,  563 => 333,  559 => 332,  556 => 331,  553 => 330,  547 => 329,  544 => 328,  541 => 327,  538 => 326,  533 => 325,  531 => 324,  528 => 323,  525 => 317,  523 => 316,  520 => 315,  517 => 314,  509 => 309,  504 => 307,  500 => 305,  494 => 303,  492 => 302,  487 => 300,  481 => 297,  477 => 296,  474 => 295,  471 => 294,  468 => 293,  466 => 292,  463 => 291,  456 => 289,  453 => 288,  451 => 287,  448 => 286,  440 => 281,  435 => 279,  431 => 277,  427 => 275,  425 => 274,  419 => 271,  413 => 268,  409 => 267,  406 => 266,  403 => 265,  401 => 264,  393 => 259,  388 => 257,  381 => 253,  375 => 250,  369 => 247,  365 => 246,  362 => 245,  360 => 244,  351 => 238,  348 => 237,  344 => 235,  342 => 234,  341 => 232,  339 => 230,  337 => 229,  334 => 228,  330 => 226,  328 => 221,  327 => 220,  326 => 218,  324 => 215,  322 => 214,  319 => 213,  315 => 211,  313 => 205,  312 => 203,  310 => 200,  308 => 199,  305 => 198,  301 => 196,  299 => 193,  298 => 191,  297 => 189,  295 => 186,  293 => 185,  288 => 183,  284 => 181,  282 => 176,  281 => 175,  280 => 173,  278 => 170,  276 => 169,  272 => 167,  270 => 166,  269 => 164,  268 => 161,  264 => 160,  259 => 159,  256 => 158,  253 => 157,  250 => 156,  247 => 155,  245 => 154,  240 => 153,  237 => 152,  234 => 151,  231 => 150,  228 => 149,  225 => 148,  222 => 147,  219 => 146,  216 => 143,  213 => 142,  210 => 141,  207 => 138,  204 => 137,  202 => 135,  201 => 134,  200 => 133,  197 => 132,  193 => 130,  191 => 129,  190 => 127,  188 => 125,  184 => 124,  182 => 123,  178 => 121,  176 => 120,  174 => 119,  171 => 118,  169 => 117,  168 => 114,  166 => 113,  164 => 112,  161 => 111,  157 => 109,  155 => 108,  154 => 106,  152 => 104,  150 => 103,  147 => 102,  143 => 100,  141 => 99,  140 => 97,  138 => 95,  136 => 94,  132 => 92,  130 => 91,  129 => 89,  128 => 87,  125 => 86,  120 => 83,  118 => 82,  117 => 80,  115 => 78,  113 => 77,  109 => 75,  107 => 73,  106 => 72,  105 => 70,  103 => 67,  101 => 66,  96 => 64,  90 => 61,  83 => 57,  79 => 55,  73 => 53,  71 => 52,  65 => 49,  61 => 47,  59 => 46,  55 => 44,  53 => 43,  51 => 42,  48 => 41,  46 => 39,  45 => 38,  44 => 37,  43 => 35,  41 => 34,  38 => 33,);
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
{% set field_options = {
   'full_width': true,
   'fields_template': itiltemplate,
   'disabled': (not canupdate),
   'add_field_class': (is_expanded ? 'col-sm-6' : ''),
} %}

{% set itil_layout    = user_pref('itil_layout', true) %}
{% set headers_states = itil_layout['items'] %}

<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   {% set main_show = headers_states['item-main'] is not defined or headers_states['item-main'] == \"true\" ? true : false %}
   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button {{ main_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                {% if item.fields['status'] != 'solved' %}
    {{ item.getStatusIcon(item.fields['status'])|raw }}
{% endif %}
            </span>
            <span class=\"item-title\">
                {{ item.getTypeName(1) }}
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse {{ main_show ? \"show\" : \"\" }}\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            {{ call_plugin_hook('pre_item_form', {\"item\": item, 'options': params}) }}

            {% if is_multi_entities_mode() %}
    {{ fields.dropdownField(
        'Entity',
        'entities_id',
        item.fields['entities_id'],
        _n('Entity', 'Entities', 1),
        field_options|merge({
            'entity': userentities,
        })
    ) }}

    {% if item.isField('is_recursive') %}
        {{ fields.dropdownYesNo(
            'is_recursive',
            item.fields['is_recursive'],
            __('Child entities'),
            field_options
        ) }}
    {% endif %}
{% endif %}

            {{ fields.datetimeField(
               'date',
               item.fields['date'],
               __('Opening date'),
               field_options
            ) }}

            {% if item.getType() != 'Ticket' %}
               {{ fields.datetimeField(
                  'time_to_resolve',
                  item.fields['time_to_resolve'],
                  __('Time to resolve'),
                  field_options
               ) }}
            {% endif %}

            {% if item.isClosed() %}
               {{ fields.datetimeField(
               'closedate',
               item.fields['closedate'],
               __('Close date'),
               field_options
            ) }}
            {% endif %}

            {% if item.getType() == 'Ticket' %}
               {% set type_params = {
   'value': item.fields['type'],
   'width': '100%',
   'display': false
}|merge(field_options) %}

{% if item.isNewItem() %}
   {# Aquí eliminamos la función 'this.form.submit()' #}
   {% set type_params = type_params %}
{% else %}
   {# Aquí puedes reemplazar 'reloadCategory()' con otra acción si es necesario #}
   {% set type_params = type_params %}
{% endif %}               {{ fields.field(
                  'type',
                  item.dropdownType('type', type_params),
                  _n('Type', 'Types', 1),
                  field_options
               ) }}
            {% endif %}

            {% set cat_params = field_options|merge({
               'entity': item.fields['entities_id'],
               'disabled': (not (canupdate or can_requester)),
            }) %}
            {% if item.isNewItem() %}
               {% set cat_params = cat_params|merge({
                  'on_change': 'this.form.submit()',
               }) %}
            {% endif %}
            {% if not item.isNewItem() and itiltemplate.isMandatoryField('itilcategories_id') and item.fields['itilcategories_id'] > 0 %}
               {% set cat_params = cat_params|merge({
                  'display_emptychoice': false
               }) %}
            {% endif %}
            {% if item.getType() == 'Ticket' %}
               {% if item.fields['type'] == constant('Ticket::DEMAND_TYPE') %}
                  {% set cat_params = cat_params|merge({'condition': {'is_request': 1}}) %}
               {% elseif item.fields['type'] == constant('Ticket::INCIDENT_TYPE') %}
                  {% set cat_params = cat_params|merge({'condition': {'is_incident': 1}}) %}
               {% endif %}
 {{ include('components/itilobject/fields/priority_matrix.html.twig') }}
            {% elseif item.getType() == 'Problem' %}
               {% set cat_params = cat_params|merge({'condition': {'is_problem': 1}}) %}
            {% elseif item.getType() == 'Change' %}
               {% set cat_params = cat_params|merge({'condition': {'is_change': 1}}) %}
            {% endif %}
            {{ include('components/itilobject/fields/status.html.twig') }}
            <span id=\"category_block_{{ rand }}\">
            {{ fields.dropdownField(
               'ITILCategory',
               'itilcategories_id',
               item.fields['itilcategories_id'],
               _n('Category', 'Categories', 1),
               cat_params
            ) }}
            </span>
            {% if item.isNewItem() and item.getType() == 'Ticket' %}
               {{ fields.dropdownField(
                  'Contract',
                  '_contracts_id',
                  params['_contracts_id']|default(0),
                  'Contract'|itemtype_name,
                  field_options|merge({
                     'entity': item.fields['entities_id'],
                     'width': '100%',
                     'hide_if_no_elements': true,
                     'nochecklimit': true
                  })
               ) }}
            {% endif %}
{{ call_plugin_hook('post_item_form', {\"item\": item, 'options': params}) }}

  {% if item.isField('locations_id') %}
               {{ fields.dropdownField(
                  'location',
                  'locations_id',
                  item.fields['locations_id'],
                  'location'|itemtype_name,
                  field_options|merge({
                     'hide_if_no_elements': true,
                     'entity': item.fields['entities_id'],
                     'entity_sons': true
                  })
               ) }}
            {% endif %}

            {% if item.isField('requesttypes_id') %}
               {{ fields.dropdownField(
                  'RequestType',
                  'requesttypes_id',
                  item.fields['requesttypes_id'],
                  'RequestType'|itemtype_name,
                  field_options|merge({
                     'condition': {
                        'is_active': 1,
                        'is_ticketheader': 1
                     }
                  })
               ) }}
            {% endif %}

            {% if item.isNewItem() and item.getType() == 'Ticket' %}
               {{ fields.dropdownField(
                  'Contract',
                  '_contracts_id',
                  params['_contracts_id']|default(0),
                  'Contract'|itemtype_name,
                  field_options|merge({
                     'entity': item.fields['entities_id'],
                     'width': '100%',
                     'hide_if_no_elements': true,
                     'nochecklimit': true
                  })
               ) }}
            {% endif %}

            {% if item.getType() != 'Ticket' or item.isNewItem() %}
               {{ fields.dropdownTimestampField(
                  'actiontime',
                  item.fields['actiontime'],
                  __('Total duration'),
                  field_options
               ) }}
            {% endif %}

            {{ include('components/itilobject/fields/global_validation.html.twig') }}

            
         </div>
      </div>
   </div>
   {% set actors_show = headers_states['actors'] is not defined or headers_states['actors'] == \"true\" ? true : false %}
   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"{{ __('Actors') }}\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button {{ actors_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                {{ __('Actors') }}
            </span>
            <span class=\"badge bg-secondary ms-2\">
               {{ item.countActors() }}
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse {{ actors_show ? \"show\" : \"\" }}\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            {{ include('components/itilobject/actors/main.html.twig') }}
         </div>
      </div>
   </div>

   {% if item_ticket is defined and item_ticket is not null %}
      {% set items_show = headers_states['items'] is not defined or headers_states['items'] == \"true\" ? true : false %}
      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"{{ _n('Item', 'Items', get_plural_number()) }}\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button {{ items_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    {{ _n('Item', 'Items', get_plural_number()) }}
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               {% if itiltemplate.isMandatoryField('items_id') %}
                  <span class=\"required\">*</span>
               {% endif %}
            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse {{ items_show ? \"show\" : \"\" }}\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               {{ item_ticket.itemAddForm(item, params|default({})|merge({entities_id: entities_id})) }}
            </div>
         </div>
      </div>
   {% endif %}

   {% if item.getType() == 'Ticket' %}
      {% set la_content %}
         {{ include('components/itilobject/service_levels.html.twig') }}
      {% endset %}

      {% if la_content|trim|length > 0 %}
         {% set nb_la = (item.fields['slas_id_tto'] > 0 ? 1 : 0) + (item.fields['slas_id_ttr'] > 0 ? 1 : 0) + (item.fields['olas_id_tto'] > 0 ? 1 : 0) + (item.fields['olas_id_ttr'] > 0 ? 1 : 0) %}
         {% set servicelevels_show = headers_states['service-levels'] is defined and headers_states['service-levels'] == \"true\" ? true : false %}
         <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"{{ _n('Service level', 'Service levels', get_plural_number()) }}\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button {{ servicelevels_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm me-1\"></i>
                  <span class=\"item-title\">
                     {{ _n('Service level', 'Service levels', get_plural_number()) }}
                  </span>
                  {% if nb_la > 0 %}
                     <span class=\"badge bg-secondary ms-2\">{{ nb_la }}</span>
                  {% endif %}
               </button>
            </h2>
            <div id=\"service-levels\" class=\"accordion-collapse collapse {{ servicelevels_show ? \"show\" : \"\" }}\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  {{ la_content }}
               </div>
            </div>
         </div>
      {% endif %}
   {% endif %}

   {% if item.getType() in ['Problem', 'Change'] %}
      {% set analysis_fields = {
         'impactcontent': __('Impacts'),
         'causecontent': __('Causes'),
         'symptomcontent': __('Symptoms'),
         'controlistcontent': __('Control list'),
      } %}

      {% set nb_analysis = 0 %}
      {% for analysis_field, label in analysis_fields %}
         {% if item.isField(analysis_field) and item.fields[analysis_field]|trim|length > 0 %}
            {% set nb_analysis = nb_analysis + 1 %}
         {% endif %}
      {% endfor %}
      {% set analysis_show = headers_states['analysis'] is defined and headers_states['analysis'] == \"true\" ? true : false %}
      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"{{ __(\"Analysis\") }}\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button {{ analysis_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    {{ __(\"Analysis\") }}
               </span>
               {% if nb_analysis > 0 %}
                  <span class=\"badge bg-secondary ms-2\">{{ nb_analysis }}</span>
               {% endif %}
            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse {{ analysis_show ? \"show\" : \"\" }}\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               {% for analysis_field, label in analysis_fields %}
                  {% if item.isField(analysis_field) %}
                     {{ fields.textareaField(
                        analysis_field,
                        item.fields[analysis_field],
                        label,
                        field_options|merge({
                           'enable_richtext': true,
                           'is_horizontal': false,
                        })
                     ) }}
                  {% endif %}
               {% endfor %}
            </div>
         </div>
      </div>
   {% endif %}

   {% if item.getType() == 'Change' %}
      {% set plans_fields = {
         'rolloutplancontent': __('Deployment plan'),
         'backoutplancontent': __('Backup plan'),
         'checklistcontent': __('Checklist'),
      } %}

      {% set nb_plans = 0 %}
      {% for plans_field, label in plans_fields %}
         {% if item.isField(plans_field) and item.fields[plans_field]|trim|length > 0 %}
            {% set nb_plans = nb_plans + 1 %}
         {% endif %}
      {% endfor %}

      {% set plans_show = headers_states['plans'] is defined and headers_states['plans'] == \"true\" ? true : false %}
      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"{{ __(\"Plans\") }}\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button {{ plans_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    {{ __(\"Plans\") }}
               </span>
               {% if nb_plans > 0 %}
                  <span class=\"badge bg-secondary ms-2\">{{ nb_plans }}</span>
               {% endif %}
            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse {{ plans_show ? \"show\" : \"\" }}\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               {% for plans_field, label in plans_fields %}
                  {% if item.isField(plans_field) %}
                     {{ fields.textareaField(
                        plans_field,
                        item.fields[plans_field],
                        label,
                        field_options|merge({
                           'enable_richtext': true,
                           'is_horizontal': false,
                        })
                     ) }}
                  {% endif %}
               {% endfor %}
            </div>
         </div>
      </div>
   {% endif %}

   {% if ticket_ticket %}
      {% set linked_tickets_show = headers_states['linked_tickets'] is defined and headers_states['linked_tickets'] == \"true\" ? true : false %}
      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"linked_tickets-heading\" title=\"{{ 'Ticket_Ticket'|itemtype_name(nb_linked_tickets) }}\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button {{ linked_tickets_show ? \"\" : \"collapsed\" }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_tickets\" aria-expanded=\"true\" aria-controls=\"linked_tickets\">
               <i class=\"ti ti-link me-1\"></i>
               {% set linked_tickets = ticket_ticket.getLinkedTicketsTo(item.fields['id'], true) %}
               {% set nb_linked_tickets = linked_tickets|length %}
               {% if item.isNewItem() and params['_link']['tickets_id_2'] > 0 %}
                  {% set nb_linked_tickets = 1 %}
               {% endif %}
               <span class=\"item-title\">
                    {{ 'Ticket_Ticket'|itemtype_name(nb_linked_tickets) }}
               </span>
               {% if nb_linked_tickets > 0 %}
                  <span class=\"badge bg-secondary ms-2\">{{ nb_linked_tickets }}</span>
               {% endif %}
            </button>
         </h2>
         <div id=\"linked_tickets\" class=\"accordion-collapse collapse {{ linked_tickets_show ? \"show\" : \"\" }}\" aria-labelledby=\"linked_tickets-heading\">
            <div class=\"accordion-body\">
               {{ include('components/itilobject/linked_tickets.html.twig') }}
            </div>
         </div>
      </div>
   {% endif %}

    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_{{ rand }} .field-container').load(
        '{{ path(\"ajax/dropdownTicketCategories.php\") }}',
        {
            'type': type,
            'entity_restrict': {{ item.fields['entities_id'] }},
            'value': {{ item.fields['itilcategories_id'] }},
        }
    );
};
</script>
", "components/itilobject/fields_panel.html.twig", "/var/www/glpi/templates/components/itilobject/fields_panel.html.twig");
    }
}
