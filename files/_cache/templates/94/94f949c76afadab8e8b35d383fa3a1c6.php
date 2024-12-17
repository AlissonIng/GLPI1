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
class __TwigTemplate_57a8f837d1c58c3c5b65649581c3e523 extends Template
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
";
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["itilcategories_id"], "method", false, false, false, 160)) {
            // line 161
            yield "   ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 164
($context["item"] ?? null), "fields", [], "any", false, true, false, 164), "itilcategories_id", [], "array", true, true, false, 164) &&  !(null === (($__internal_compile_14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 164)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itilcategories_id"] ?? null) : null)))) ? ((($__internal_compile_15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 164)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itilcategories_id"] ?? null) : null)) : ("")), _n("Category", "Categories", 1),             // line 166
($context["cat_params"] ?? null)], 161, $context, $this->getSourceContext());
            // line 167
            yield "
";
        }
        // line 169
        yield "
            ";
        // line 170
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 170) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 170) == "Ticket"))) {
            // line 171
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 174
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 176
($context["field_options"] ?? null), ["entity" => (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source,             // line 177
($context["item"] ?? null), "fields", [], "any", false, false, false, 177)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])], 171, $context, $this->getSourceContext());
            // line 182
            yield "
            ";
        }
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

  ";
        // line 186
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 186)) {
            // line 187
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["location", "locations_id", (($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source,             // line 190
($context["item"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("location"), Twig\Extension\CoreExtension::merge(            // line 192
($context["field_options"] ?? null), ["hide_if_no_elements" => true, "entity" => (($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source,             // line 194
($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "entity_sons" => true])], 187, $context, $this->getSourceContext());
            // line 197
            yield "
            ";
        }
        // line 199
        yield "
            ";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["requesttypes_id"], "method", false, false, false, 200)) {
            // line 201
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_20 = CoreExtension::getAttribute($this->env, $this->source,             // line 204
($context["item"] ?? null), "fields", [], "any", false, false, false, 204)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), Twig\Extension\CoreExtension::merge(            // line 206
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], 201, $context, $this->getSourceContext());
            // line 212
            yield "
            ";
        }
        // line 214
        yield "
            ";
        // line 215
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 215) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 215) == "Ticket"))) {
            // line 216
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 219
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_21 = ($context["params"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 221
($context["field_options"] ?? null), ["entity" => (($__internal_compile_22 = CoreExtension::getAttribute($this->env, $this->source,             // line 222
($context["item"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])], 216, $context, $this->getSourceContext());
            // line 227
            yield "
            ";
        }
        // line 229
        yield "
            ";
        // line 230
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 230) != "Ticket") || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 230))) {
            // line 231
            yield "               ";
            yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_23 = CoreExtension::getAttribute($this->env, $this->source,             // line 233
($context["item"] ?? null), "fields", [], "any", false, false, false, 233)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["actiontime"] ?? null) : null), __("Total duration"),             // line 235
($context["field_options"] ?? null)], 231, $context, $this->getSourceContext());
            // line 236
            yield "
            ";
        }
        // line 238
        yield "
            ";
        // line 239
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        yield "

            
         </div>
      </div>
   </div>
   ";
        // line 245
        $context["actors_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 245) || ((($__internal_compile_24 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 246
        yield "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 248
        yield ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 254), "html", null, true);
        yield "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 258
        yield ((($context["actors_show"] ?? null)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 260
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/main.html.twig");
        yield "
         </div>
      </div>
   </div>

   ";
        // line 265
        if ((array_key_exists("item_ticket", $context) &&  !(null === ($context["item_ticket"] ?? null)))) {
            // line 266
            yield "      ";
            $context["items_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 266) || ((($__internal_compile_25 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 267
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 269
            yield ((($context["items_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               ";
            // line 275
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["items_id"], "method", false, false, false, 275)) {
                // line 276
                yield "                  <span class=\"required\">*</span>
               ";
            }
            // line 278
            yield "            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 280
            yield ((($context["items_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item_ticket"] ?? null), "itemAddForm", [($context["item"] ?? null), Twig\Extension\CoreExtension::merge(((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])), ["entities_id" => ($context["entities_id"] ?? null)])], "method", false, false, false, 282), "html", null, true);
            yield "
            </div>
         </div>
      </div>
   ";
        }
        // line 287
        yield "
   ";
        // line 288
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 288) == "Ticket")) {
            // line 289
            yield "      ";
            $context["la_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 290
                yield "         ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/service_levels.html.twig");
                yield "
      ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 292
            yield "
      ";
            // line 293
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["la_content"] ?? null))) > 0)) {
                // line 294
                yield "         ";
                $context["nb_la"] = (((((((($__internal_compile_26 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 294)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($__internal_compile_27 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 294)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_28 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 294)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 294)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 295
                yield "         ";
                $context["servicelevels_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 295) && ((($__internal_compile_30 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 296
                yield "         <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 298
                yield ((($context["servicelevels_show"] ?? null)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm me-1\"></i>
                  <span class=\"item-title\">
                     ";
                // line 301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "
                  </span>
                  ";
                // line 303
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 304
                    yield "                     <span class=\"badge bg-secondary ms-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_la"] ?? null), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 306
                yield "               </button>
            </h2>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 308
                yield ((($context["servicelevels_show"] ?? null)) ? ("show") : (""));
                yield "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["la_content"] ?? null), "html", null, true);
                yield "
               </div>
            </div>
         </div>
      ";
            }
            // line 315
            yield "   ";
        }
        // line 316
        yield "
   ";
        // line 317
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 317), ["Problem", "Change"])) {
            // line 318
            yield "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 324
            yield "
      ";
            // line 325
            $context["nb_analysis"] = 0;
            // line 326
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 327
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 327) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($__internal_compile_31 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 327)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 328
                    yield "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 329
                    yield "         ";
                }
                // line 330
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            yield "      ";
            $context["analysis_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 331) && ((($__internal_compile_32 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 332
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 334
            yield ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "
               </span>
               ";
            // line 339
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 340
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_analysis"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 342
            yield "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 344
            yield ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 347
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 347)) {
                    // line 348
                    yield "                     ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [                    // line 349
$context["analysis_field"], (($__internal_compile_33 = CoreExtension::getAttribute($this->env, $this->source,                     // line 350
($context["item"] ?? null), "fields", [], "any", false, false, false, 350)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["analysis_field"]] ?? null) : null),                     // line 351
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 352
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 348, $context, $this->getSourceContext());
                    // line 356
                    yield "
                  ";
                }
                // line 358
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 359
            yield "            </div>
         </div>
      </div>
   ";
        }
        // line 363
        yield "
   ";
        // line 364
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 364) == "Change")) {
            // line 365
            yield "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 370
            yield "
      ";
            // line 371
            $context["nb_plans"] = 0;
            // line 372
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 373
                yield "         ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 373) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($__internal_compile_34 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 373)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 374
                    yield "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 375
                    yield "         ";
                }
                // line 376
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            yield "
      ";
            // line 378
            $context["plans_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 378) && ((($__internal_compile_35 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 379
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 381
            yield ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "
               </span>
               ";
            // line 386
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 387
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_plans"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 389
            yield "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 391
            yield ((($context["plans_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 394
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 394)) {
                    // line 395
                    yield "                     ";
                    yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", [                    // line 396
$context["plans_field"], (($__internal_compile_36 = CoreExtension::getAttribute($this->env, $this->source,                     // line 397
($context["item"] ?? null), "fields", [], "any", false, false, false, 397)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[$context["plans_field"]] ?? null) : null),                     // line 398
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 399
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 395, $context, $this->getSourceContext());
                    // line 403
                    yield "
                  ";
                }
                // line 405
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            yield "            </div>
         </div>
      </div>
   ";
        }
        // line 410
        yield "
   ";
        // line 411
        if (($context["ticket_ticket"] ?? null)) {
            // line 412
            yield "      ";
            $context["linked_tickets_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_tickets", [], "array", true, true, false, 412) && ((($__internal_compile_37 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["linked_tickets"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 413
            yield "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"linked_tickets-heading\" title=\"";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 415
            yield ((($context["linked_tickets_show"] ?? null)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_tickets\" aria-expanded=\"true\" aria-controls=\"linked_tickets\">
               <i class=\"ti ti-link me-1\"></i>
               ";
            // line 417
            $context["linked_tickets"] = CoreExtension::getAttribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [(($__internal_compile_38 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 417)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["id"] ?? null) : null), true], "method", false, false, false, 417);
            // line 418
            yield "               ";
            $context["nb_linked_tickets"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["linked_tickets"] ?? null));
            // line 419
            yield "               ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 419) && ((($__internal_compile_39 = (($__internal_compile_40 = ($context["params"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["_link"] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["tickets_id_2"] ?? null) : null) > 0))) {
                // line 420
                yield "                  ";
                $context["nb_linked_tickets"] = 1;
                // line 421
                yield "               ";
            }
            // line 422
            yield "               <span class=\"item-title\">
                    ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            yield "
               </span>
               ";
            // line 425
            if ((($context["nb_linked_tickets"] ?? null) > 0)) {
                // line 426
                yield "                  <span class=\"badge bg-secondary ms-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_linked_tickets"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 428
            yield "            </button>
         </h2>
         <div id=\"linked_tickets\" class=\"accordion-collapse collapse ";
            // line 430
            yield ((($context["linked_tickets_show"] ?? null)) ? ("show") : (""));
            yield "\" aria-labelledby=\"linked_tickets-heading\">
            <div class=\"accordion-body\">
               ";
            // line 432
            yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/linked_tickets.html.twig");
            yield "
            </div>
         </div>
      </div>
   ";
        }
        // line 437
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
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .field-container').load(
        '";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        yield "',
        {
            'type': type,
            'entity_restrict': ";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_41 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 461)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["entities_id"] ?? null) : null), "html", null, true);
        yield ",
            'value': ";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_42 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 462)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["itilcategories_id"] ?? null) : null), "html", null, true);
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
        return array (  829 => 462,  825 => 461,  819 => 458,  815 => 457,  793 => 437,  785 => 432,  780 => 430,  776 => 428,  770 => 426,  768 => 425,  763 => 423,  760 => 422,  757 => 421,  754 => 420,  751 => 419,  748 => 418,  746 => 417,  741 => 415,  737 => 414,  734 => 413,  731 => 412,  729 => 411,  726 => 410,  720 => 406,  714 => 405,  710 => 403,  708 => 399,  707 => 398,  706 => 397,  705 => 396,  703 => 395,  700 => 394,  696 => 393,  691 => 391,  687 => 389,  681 => 387,  679 => 386,  674 => 384,  668 => 381,  664 => 380,  661 => 379,  659 => 378,  656 => 377,  650 => 376,  647 => 375,  644 => 374,  641 => 373,  636 => 372,  634 => 371,  631 => 370,  628 => 365,  626 => 364,  623 => 363,  617 => 359,  611 => 358,  607 => 356,  605 => 352,  604 => 351,  603 => 350,  602 => 349,  600 => 348,  597 => 347,  593 => 346,  588 => 344,  584 => 342,  578 => 340,  576 => 339,  571 => 337,  565 => 334,  561 => 333,  558 => 332,  555 => 331,  549 => 330,  546 => 329,  543 => 328,  540 => 327,  535 => 326,  533 => 325,  530 => 324,  527 => 318,  525 => 317,  522 => 316,  519 => 315,  511 => 310,  506 => 308,  502 => 306,  496 => 304,  494 => 303,  489 => 301,  483 => 298,  479 => 297,  476 => 296,  473 => 295,  470 => 294,  468 => 293,  465 => 292,  458 => 290,  455 => 289,  453 => 288,  450 => 287,  442 => 282,  437 => 280,  433 => 278,  429 => 276,  427 => 275,  421 => 272,  415 => 269,  411 => 268,  408 => 267,  405 => 266,  403 => 265,  395 => 260,  390 => 258,  383 => 254,  377 => 251,  371 => 248,  367 => 247,  364 => 246,  362 => 245,  353 => 239,  350 => 238,  346 => 236,  344 => 235,  343 => 233,  341 => 231,  339 => 230,  336 => 229,  332 => 227,  330 => 222,  329 => 221,  328 => 219,  326 => 216,  324 => 215,  321 => 214,  317 => 212,  315 => 206,  314 => 204,  312 => 201,  310 => 200,  307 => 199,  303 => 197,  301 => 194,  300 => 192,  299 => 190,  297 => 187,  295 => 186,  290 => 184,  286 => 182,  284 => 177,  283 => 176,  282 => 174,  280 => 171,  278 => 170,  275 => 169,  271 => 167,  269 => 166,  268 => 164,  266 => 161,  264 => 160,  259 => 159,  256 => 158,  253 => 157,  250 => 156,  247 => 155,  245 => 154,  240 => 153,  237 => 152,  234 => 151,  231 => 150,  228 => 149,  225 => 148,  222 => 147,  219 => 146,  216 => 143,  213 => 142,  210 => 141,  207 => 138,  204 => 137,  202 => 135,  201 => 134,  200 => 133,  197 => 132,  193 => 130,  191 => 129,  190 => 127,  188 => 125,  184 => 124,  182 => 123,  178 => 121,  176 => 120,  174 => 119,  171 => 118,  169 => 117,  168 => 114,  166 => 113,  164 => 112,  161 => 111,  157 => 109,  155 => 108,  154 => 106,  152 => 104,  150 => 103,  147 => 102,  143 => 100,  141 => 99,  140 => 97,  138 => 95,  136 => 94,  132 => 92,  130 => 91,  129 => 89,  128 => 87,  125 => 86,  120 => 83,  118 => 82,  117 => 80,  115 => 78,  113 => 77,  109 => 75,  107 => 73,  106 => 72,  105 => 70,  103 => 67,  101 => 66,  96 => 64,  90 => 61,  83 => 57,  79 => 55,  73 => 53,  71 => 52,  65 => 49,  61 => 47,  59 => 46,  55 => 44,  53 => 43,  51 => 42,  48 => 41,  46 => 39,  45 => 38,  44 => 37,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "/var/www/glpi/templates/components/itilobject/fields_panel.html.twig");
    }
}
