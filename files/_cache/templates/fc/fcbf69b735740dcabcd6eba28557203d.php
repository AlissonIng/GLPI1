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

/* components/itilobject/actors/field.html.twig */
class __TwigTemplate_ffc97b65bff3e421d30e6cb1cca49bee extends Template
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
        // line 1
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 2
        yield "
";
        // line 3
        $context["load_actors"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "load_actors", [], "array", true, true, false, 3) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["load_actors"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["load_actors"] ?? null) : null)) : (true));
        // line 4
        $context["actors"] = ((($context["load_actors"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [($context["actortypeint"] ?? null), ($context["params"] ?? null)], "method", false, false, false, 4)) : ([]));
        // line 5
        yield "
";
        // line 6
        $context["required"] = false;
        // line 7
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 7) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 7)) || ((($context["actortype"] ?? null) == "assign") && CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 7)))) {
            // line 8
            yield "   ";
            $context["required"] = true;
        }
        // line 10
        yield "
";
        // line 11
        $context["is_actor_hidden"] = false;
        // line 12
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 12) && CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 12)) && ((($context["actortype"] ?? null) != "assign") || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 12)))) {
            // line 13
            yield "   ";
            $context["is_actor_hidden"] = true;
        }
        // line 15
        yield "
";
        // line 16
        $context["onchange"] = "";
        // line 17
        $context["allow_auto_submit"] = (($context["allow_auto_submit"]) ?? (true));
        // line 18
        if (((($context["allow_auto_submit"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 18)) && (($context["actortype"] ?? null) == "requester"))) {
            // line 19
            yield "   ";
            $context["onchange"] = "this.form.submit();";
        }
        // line 21
        yield "
";
        // line 22
        if ( !($context["is_actor_hidden"] ?? null)) {
            // line 23
            yield "   <select class=\"form-select\" multiple=\"true\" id=\"actor_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\" data-actor-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 24
            yield ((($context["required"] ?? null)) ? ("required") : (""));
            yield ">
   ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 26
                yield "      ";
                $context["unique_id"] = ((("user_opt_" . ($context["actortype"] ?? null)) . CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "itemtype", [], "any", false, false, false, 26)) . CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "items_id", [], "any", false, false, false, 26));
                // line 27
                yield "      <option selected=\"true\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["itemtype"] ?? null) : null) . "_") . (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["items_id"] ?? null) : null)), "html", null, true);
                yield "\"
            data-itemtype=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), "html", null, true);
                yield "\" data-items-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["items_id"] ?? null) : null), "html", null, true);
                yield "\"
            data-use-notification=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["use_notification"] ?? null) : null), "html", null, true);
                yield "\"
            data-default-email=\"";
                // line 30
                (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 30) &&  !(null === (($__internal_compile_7 = $context["actor"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["default_email"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = $context["actor"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["default_email"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "\"
            data-alternative-email=\"";
                // line 31
                (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 31) &&  !(null === (($__internal_compile_9 = $context["actor"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["alternative_email"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = $context["actor"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["alternative_email"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "\"
            ";
                // line 32
                if (((((($__internal_compile_11 = $context["actor"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["itemtype"] ?? null) : null) == "User") && CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 32)) || (((($__internal_compile_12 = $context["actor"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itemtype"] ?? null) : null) == "Group") && CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 32)))) {
                    // line 33
                    yield "               disabled=\"disabled\" style=\"display: none;\"
            ";
                }
                // line 35
                yield "            data-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_13 = $context["actor"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["text"] ?? null) : null)), "html", null, true);
                yield "\" data-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_14 = $context["actor"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["title"] ?? null) : null)), "html", null, true);
                yield "\" data-glpi-popover-source=\"content";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\">
         ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_15 = $context["actor"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["title"] ?? null) : null)), "html", null, true);
                yield "
      </option>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "   </select>

   ";
            // line 41
            if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 41) &&  !(($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["template_preview"] ?? null) : null)) && ($context["canassigntome"] ?? null))) {
                // line 42
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/assign_to_me.html.twig");
                yield "
   ";
            }
            // line 44
            yield "
   <script type=\"text/javascript\">

   // Do not use jquery ready wrapper here as it behave unexpectedly with ajax
   // requests, adding an unnecessary delay
   (function() {
      var actorytype = '";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "';

      // function to display an option in the list or the selected input
      var genericTemplate_";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " = function(option = {}, is_selection = false) {
         var element   = \$(option.element);
         var itemtype  = element.data('itemtype') ?? option.itemtype;
         var items_id  = element.data('items-id') ?? option.items_id;
         var text      = escapeMarkupText(element.data('text') ?? option.text ?? '');
         var title     = escapeMarkupText(element.data('title') ?? option.title ?? '');
         var use_notif = element.data('use-notification') ?? option.use_notification ?? 1;
         var alt_email = element.data('alternative-email') ?? option.alternative_email ?? '';

         var icon = \"\";
         var fk   = \"\";
         switch (itemtype) {
            case \"User\":
               if (items_id == 0) {
                  text = alt_email;
                  icon = `<i class=\"ti  fa-fw ti-mail mx-1\" title=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Direct email"), "html", null, true);
            yield "\"></i>`;
               } else {
                  icon = `<i class=\"ti  fa-fw ti-user mx-1\" title=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            yield "\"></i>`;
               }
               if (\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"assign\") {
                  fk = \"users_id_assign\";
               } else if (\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"requester\") {
                  fk = \"users_id_requester\";
               } else if (\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"observer\") {
                  fk = \"users_id_observer\";
               }
               break;
            case \"Group\":
               icon = `<i class=\"ti  fa-fw ti-users mx-1\" title=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            yield "\"></i>`;
               if (\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"assign\") {
                  fk = \"groups_id_assign\";
               } else if (\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"requester\") {
                  fk = \"groups_id_requester\";
               } else if (\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"observer\") {
                  fk = \"groups_id_observer\";
               }
               break;
            case \"Supplier\":
               icon = `<i class=\"ti fa-fw ti-package mx-1\" title=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), "html", null, true);
            yield "\"></i>`;
               fk   = \"suppliers_id_assign\";
               break;
         }

         var actions = \"\";
         ";
            // line 97
            if (($context["canupdate"] ?? null)) {
                // line 98
                yield "         if (['User', 'Supplier', 'Email'].includes(itemtype)
            && is_selection) {
            var fa_class = \"far\";
            if (use_notif) {
               fa_class = \"fas\";
            }
            actions = `<button class=\"btn btn-sm btn-ghost-secondary edit-notify-user\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email followup"), "html", null, true);
                yield "\"
                              type=\"button\">
               <i class=\"\${fa_class} fa-bell notify-icon\"></i>
            </button>`;
         }
         ";
            }
            // line 112
            yield "
         // manage specific display for tree data (like groups)
         var indent = \"\";
         if (!is_selection && \"level\" in option && option.level > 1) {
            for (let index = 1; index < option.level; index++) {
               indent = \"&nbsp;&nbsp;&nbsp;\"+indent;
            }
            indent = indent+\"&raquo;\";
         }

         // prepare html for option element
         var text = (is_selection && itemtype == \"Group\") ? title : text;
         var option_text    = `<span class=\"actor_text\">\${text}</span>`;
         var option_element = \$(`<span class=\"actor_entry\" data-itemtype=\"\${itemtype}\" data-items-id=\"\${items_id}\" data-actortype=\"\${actorytype}\">\${indent}\${icon}\${option_text}\${actions}</span>`);

          if (is_selection && itemtype == \"User\") {
              const unique_id = \"user_opt_\" + actor_select.attr('data-actor-type') + \"User\" + items_id;
              \$.ajax({
                  url: '";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/comments.php"), "html", null, true);
            yield "',
                  type: 'POST',
                  data: {
                      'itemtype': 'User',
                      'value': items_id,
                  }
              }).then((result) => {
                  if (result) {
                      actor_select.parent().append('<' + `div id=\"content\${unique_id}\" style=\"display: none;\">` + result + '<' + '/div>');
                      option_element.attr('data-glpi-popover-source', `content\${unique_id}`);
                  }
              });
          }

         // manage ticket information (number of assigned ticket for an actor)
         if (is_selection && itemtype != \"Email\") {
            var label = '';
            if (\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"assign\") {
               label = \"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of tickets already assigned"), "html", null, true);
            yield "\";
            } else if (\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
            yield "\" == \"requester\") {
               label = \"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of tickets as requester"), "html", null, true);
            yield "\";
            }
            var existing_element = \$(
               `<span class=\"assign_infos ms-1\" title=\"\${label}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                     data-id=\"\${items_id}\" data-fk=\"\${fk}\">
                  <i class=\"fas fa-spinner fa-spin\"></i>
               </span>`
            );
            option_element.append(existing_element);

            \$.get(\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actorinformation.php"), "html", null, true);
            yield "\", {
               [fk]: items_id,
               only_number: true,
            }).done(function (number) {
               var badge = \"\";
               if (number.length > 0) {
                  badge = `<span class=\"badge bg-secondary-lt\">
                  \${number}
               </span>`;
               }
               existing_element.html(badge);
            });
         }

         return option_element;
      };

      var select2_width = \"";
            // line 178
            yield ((($context["canassigntome"] ?? null)) ? ("calc(100% - 30px)") : ("100%"));
            yield "\";

      const actor_select = \$(\"#actor_";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\");
      actor_select.select2({
         tags: true,
         width: select2_width,
         tokenSeparators: [',', ' '],
         containerCssClass: 'actor-field',
         templateSelection: function(option) { return genericTemplate_";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(option, true); },
         templateResult:    function(option) { return genericTemplate_";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(option, false); },
         disabled: ";
            // line 188
            yield ((($context["canupdate"] ?? null)) ? ("false") : ("true"));
            yield ",
         createTag: function (params) {
            var term = \$.trim(params.term);

            if (term === '') {
               return null;
            }

            // Don't offset to create a tag if it's not an email
            if (!new RegExp(/^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,63}\$/).test(term)) {
               // Return null to disable tag creation
               return null;
            }

            return {
               id: term,
               text: term,
               itemtype: \"User\",
               items_id: 0,
               use_notification: 1,
               alternative_email: term,
            }
         },
         ajax: {
            url: '";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actors.php"), "html", null, true);
            yield "',
            datatype: 'json',
            type: 'POST',
            delay:250,
            data: function (params) {
               var is_new_item = ";
            // line 217
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 217)) ? ("true") : ("false"));
            yield ";
               return {
                  action: 'getActors',
                  actortype: actorytype,
                  users_right: '";
            // line 221
            (((array_key_exists("users_right", $context) &&  !(null === ($context["users_right"] ?? null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["users_right"] ?? null), "html", null, true)) : (yield "all"));
            yield "',
                  entity_restrict: (actors.requester.length == 0 && is_new_item) ? -1 : ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entities_id"] ?? null), "html", null, true);
            yield ",
                  searchText: params.term,
                  _idor_token: '";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 224), ["users_right" => (($context["users_right"]) ?? ("all"))]), "html", null, true);
            yield "',
                  itiltemplate_class: '";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "getType", [], "method", false, false, false, 225), "html", null, true);
            yield "',
                  itiltemplates_id: ";
            // line 226
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 226), "id", [], "array", true, true, false, 226) &&  !(null === (($__internal_compile_17 = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 226)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 226)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null), "html", null, true)) : (yield 0));
            yield ",
                  itemtype: '";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 227), "html", null, true);
            yield "',
                  items_id: ";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 228)) ? ( -1) : ((($__internal_compile_19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null))), "html", null, true);
            yield ",
                  item: ";
            // line 229
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 229));
            yield ",
                  returned_itemtypes: ";
            // line 230
            yield json_encode((($context["returned_itemtypes"]) ?? (["User", "Group", "Supplier"])));
            yield ",
                  page: params.page || 1
               };
            },
         }
      }).on('select2:open', () => {
          // Close popovers
          \$('.popover').popover('hide');
      });

      \$(function () {
         actor_select.parent().popover({
            selector: '[data-glpi-popover-source]',
            container: actor_select.parent(),
            html: true,
            sanitize: false,
            trigger: 'hover',
            delay: {
               hide: 300
            },
            template: '<' + 'div class=\"popover shadow\" role=\"tooltip\"><' + 'div class=\"popover-arrow\"><' + '/div><' + 'h3 class=\"popover-header\"><' + '/h3><' + 'div class=\"popover-body\"><' + '/div><' + '/div>',
            content: function() {
               // Close other popovers
               \$('.popover').popover('hide');
               return \$('#' + \$(this).attr('data-glpi-popover-source')).html();
            }
         }).on('hide.bs.popover', function () {
            // prevent closing popover when user card is hover
            if (\$('.user-info-card:hover').length > 0) {
               return false;
            }
         });
      });

        // when the mouse leave the user card in the popover, close it
        \$(document).on('mouseleave', '.user-info-card', function() {
            setTimeout(() => {
                \$('.popover').popover('hide');
            }, 300);
        });

      // manage actors change
      var updateActors";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " = function() {
         var data = \$(\"#actor_";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").select2('data');

         var new_actors = [];
         data.forEach(function(selection) {
            var element = \$(selection.element);

            var itemtype  = selection.itemtype ?? element.data('itemtype');
            var items_id  = selection.items_id ?? element.data('items-id');
            var use_notif = selection.use_notification  ?? element.data('use-notification')  ?? false;
            var def_email = selection.default_email ?? element.data('default-email') ?? '';
            var alt_email = selection.alternative_email ?? element.data('alternative-email') ?? '';

            if (itemtype == \"Email\") {
               itemtype  = \"User\";
               use_notif = true;
               alt_email = selection.id;
            }

            new_actors.push({
               itemtype: itemtype,
               items_id: items_id,
               use_notification: use_notif,
               default_email: def_email,
               alternative_email: alt_email,
            });
         });

         actors[actorytype] = new_actors;

         saveActorsToDom();
      };
      \$(\"#actor_";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").on('select2:select', function () {
         updateActors";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "();
         ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["onchange"] ?? null), "html", null, true);
            yield "
      });
      \$(\"#actor_";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\").on('select2:unselect', function () {
         updateActors";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "();
         ";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["onchange"] ?? null), "html", null, true);
            yield "
      });

      // intercept event for edit notification button
      document.addEventListener('click', event => {
         if (event.target.closest(\"#actor_";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " + .select2 .edit-notify-user\")) {
            return openNotifyModal(event);
         }
         // if a click on assign info is detected prevent opening of select2
         if (event.target.closest(\"#actor_";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " + .select2 .assign_infos\")) {
            event.stopPropagation();
         }
      }, {capture: true})
      document.addEventListener('keydown', event => {
         if (event.target.closest(\"#actor_";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield " + .select2 .edit-notify-user\")
            && event.key == \"Enter\") {
            return openNotifyModal(event);
         }
      }, {capture: true})

      ";
            // line 330
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 330)) {
                // line 331
                yield "         \$(\".actor_entry[data-itemtype=\\\"User\\\"][data-actortype=\\\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
                yield "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 333
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 333)) {
                // line 334
                yield "         \$(\".actor_entry[data-itemtype=\\\"Group\\\"][data-actortype=\\\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["actortype"] ?? null), "html", null, true);
                yield "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 336
            yield "   })();
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
        return "components/itilobject/actors/field.html.twig";
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
        return array (  612 => 336,  606 => 334,  603 => 333,  597 => 331,  595 => 330,  586 => 324,  578 => 319,  571 => 315,  563 => 310,  559 => 309,  555 => 308,  550 => 306,  546 => 305,  542 => 304,  508 => 273,  504 => 272,  459 => 230,  455 => 229,  451 => 228,  447 => 227,  443 => 226,  439 => 225,  435 => 224,  430 => 222,  426 => 221,  419 => 217,  411 => 212,  384 => 188,  380 => 187,  376 => 186,  367 => 180,  362 => 178,  342 => 161,  328 => 150,  324 => 149,  320 => 148,  316 => 147,  296 => 130,  276 => 112,  267 => 106,  257 => 98,  255 => 97,  246 => 91,  238 => 86,  233 => 84,  228 => 82,  224 => 81,  216 => 76,  211 => 74,  206 => 72,  201 => 70,  196 => 68,  178 => 53,  172 => 50,  164 => 44,  158 => 42,  156 => 41,  152 => 39,  143 => 36,  134 => 35,  130 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  110 => 28,  105 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  85 => 22,  82 => 21,  78 => 19,  76 => 18,  74 => 17,  72 => 16,  69 => 15,  65 => 13,  63 => 12,  61 => 11,  58 => 10,  54 => 8,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set rand = random() %}

{% set load_actors = params['load_actors'] ?? true %}
{% set actors = load_actors ? item.getActorsForType(actortypeint, params) : [] %}

{% set required = false %}
{% if itiltemplate.isMandatoryField('_users_id_' ~ actortype) or itiltemplate.isMandatoryField('_groups_id_' ~ actortype) or (actortype == 'assign' and itiltemplate.isMandatoryField('_suppliers_id_' ~ actortype)) %}
   {% set required = true %}
{% endif %}

{% set is_actor_hidden = false %}
{% if itiltemplate.isHiddenField('_users_id_' ~ actortype) and itiltemplate.isHiddenField('_groups_id_' ~ actortype) and (actortype != 'assign' or itiltemplate.isHiddenField('_suppliers_id_' ~ actortype)) %}
   {% set is_actor_hidden = true %}
{% endif %}

{% set onchange = '' %}
{% set allow_auto_submit = allow_auto_submit ?? true %}
{% if allow_auto_submit and item.isNewItem() and actortype == \"requester\" %}
   {% set onchange = 'this.form.submit();' %}
{% endif %}

{% if not is_actor_hidden %}
   <select class=\"form-select\" multiple=\"true\" id=\"actor_{{ rand }}\" data-actor-type=\"{{ actortype }}\"
        {{ required ? 'required' : '' }}>
   {% for actor in actors %}
      {% set unique_id = \"user_opt_\" ~ actortype ~ actor.itemtype ~ actor.items_id %}
      <option selected=\"true\" value=\"{{ actor['itemtype'] ~ '_' ~ actor['items_id'] }}\"
            data-itemtype=\"{{ actor['itemtype'] }}\" data-items-id=\"{{ actor['items_id'] }}\"
            data-use-notification=\"{{ actor['use_notification'] }}\"
            data-default-email=\"{{ actor['default_email'] ?? '' }}\"
            data-alternative-email=\"{{ actor['alternative_email'] ?? '' }}\"
            {% if (actor['itemtype'] == 'User' and itiltemplate.isHiddenField('_users_id_' ~ actortype)) or (actor['itemtype'] == 'Group' and itiltemplate.isHiddenField('_groups_id_' ~ actortype)) %}
               disabled=\"disabled\" style=\"display: none;\"
            {% endif %}
            data-text=\"{{ actor['text']|verbatim_value }}\" data-title=\"{{ actor['title']|verbatim_value }}\" data-glpi-popover-source=\"content{{ unique_id }}\">
         {{ actor['title']|verbatim_value }}
      </option>
   {% endfor %}
   </select>

   {% if not item.isNewItem() and not params['template_preview'] and canassigntome %}
      {{ include('components/itilobject/actors/assign_to_me.html.twig') }}
   {% endif %}

   <script type=\"text/javascript\">

   // Do not use jquery ready wrapper here as it behave unexpectedly with ajax
   // requests, adding an unnecessary delay
   (function() {
      var actorytype = '{{ actortype }}';

      // function to display an option in the list or the selected input
      var genericTemplate_{{ rand }} = function(option = {}, is_selection = false) {
         var element   = \$(option.element);
         var itemtype  = element.data('itemtype') ?? option.itemtype;
         var items_id  = element.data('items-id') ?? option.items_id;
         var text      = escapeMarkupText(element.data('text') ?? option.text ?? '');
         var title     = escapeMarkupText(element.data('title') ?? option.title ?? '');
         var use_notif = element.data('use-notification') ?? option.use_notification ?? 1;
         var alt_email = element.data('alternative-email') ?? option.alternative_email ?? '';

         var icon = \"\";
         var fk   = \"\";
         switch (itemtype) {
            case \"User\":
               if (items_id == 0) {
                  text = alt_email;
                  icon = `<i class=\"ti  fa-fw ti-mail mx-1\" title=\"{{ __('Direct email') }}\"></i>`;
               } else {
                  icon = `<i class=\"ti  fa-fw ti-user mx-1\" title=\"{{ 'User'|itemtype_name }}\"></i>`;
               }
               if (\"{{ actortype }}\" == \"assign\") {
                  fk = \"users_id_assign\";
               } else if (\"{{ actortype }}\" == \"requester\") {
                  fk = \"users_id_requester\";
               } else if (\"{{ actortype }}\" == \"observer\") {
                  fk = \"users_id_observer\";
               }
               break;
            case \"Group\":
               icon = `<i class=\"ti  fa-fw ti-users mx-1\" title=\"{{ 'Group'|itemtype_name }}\"></i>`;
               if (\"{{ actortype }}\" == \"assign\") {
                  fk = \"groups_id_assign\";
               } else if (\"{{ actortype }}\" == \"requester\") {
                  fk = \"groups_id_requester\";
               } else if (\"{{ actortype }}\" == \"observer\") {
                  fk = \"groups_id_observer\";
               }
               break;
            case \"Supplier\":
               icon = `<i class=\"ti fa-fw ti-package mx-1\" title=\"{{ 'Supplier'|itemtype_name }}\"></i>`;
               fk   = \"suppliers_id_assign\";
               break;
         }

         var actions = \"\";
         {% if canupdate %}
         if (['User', 'Supplier', 'Email'].includes(itemtype)
            && is_selection) {
            var fa_class = \"far\";
            if (use_notif) {
               fa_class = \"fas\";
            }
            actions = `<button class=\"btn btn-sm btn-ghost-secondary edit-notify-user\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"{{ __('Email followup') }}\"
                              type=\"button\">
               <i class=\"\${fa_class} fa-bell notify-icon\"></i>
            </button>`;
         }
         {% endif %}

         // manage specific display for tree data (like groups)
         var indent = \"\";
         if (!is_selection && \"level\" in option && option.level > 1) {
            for (let index = 1; index < option.level; index++) {
               indent = \"&nbsp;&nbsp;&nbsp;\"+indent;
            }
            indent = indent+\"&raquo;\";
         }

         // prepare html for option element
         var text = (is_selection && itemtype == \"Group\") ? title : text;
         var option_text    = `<span class=\"actor_text\">\${text}</span>`;
         var option_element = \$(`<span class=\"actor_entry\" data-itemtype=\"\${itemtype}\" data-items-id=\"\${items_id}\" data-actortype=\"\${actorytype}\">\${indent}\${icon}\${option_text}\${actions}</span>`);

          if (is_selection && itemtype == \"User\") {
              const unique_id = \"user_opt_\" + actor_select.attr('data-actor-type') + \"User\" + items_id;
              \$.ajax({
                  url: '{{ path('/ajax/comments.php') }}',
                  type: 'POST',
                  data: {
                      'itemtype': 'User',
                      'value': items_id,
                  }
              }).then((result) => {
                  if (result) {
                      actor_select.parent().append('<' + `div id=\"content\${unique_id}\" style=\"display: none;\">` + result + '<' + '/div>');
                      option_element.attr('data-glpi-popover-source', `content\${unique_id}`);
                  }
              });
          }

         // manage ticket information (number of assigned ticket for an actor)
         if (is_selection && itemtype != \"Email\") {
            var label = '';
            if (\"{{ actortype }}\" == \"assign\") {
               label = \"{{ __('Number of tickets already assigned') }}\";
            } else if (\"{{ actortype }}\" == \"requester\") {
               label = \"{{ __('Number of tickets as requester') }}\";
            }
            var existing_element = \$(
               `<span class=\"assign_infos ms-1\" title=\"\${label}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                     data-id=\"\${items_id}\" data-fk=\"\${fk}\">
                  <i class=\"fas fa-spinner fa-spin\"></i>
               </span>`
            );
            option_element.append(existing_element);

            \$.get(\"{{ path('/ajax/actorinformation.php') }}\", {
               [fk]: items_id,
               only_number: true,
            }).done(function (number) {
               var badge = \"\";
               if (number.length > 0) {
                  badge = `<span class=\"badge bg-secondary-lt\">
                  \${number}
               </span>`;
               }
               existing_element.html(badge);
            });
         }

         return option_element;
      };

      var select2_width = \"{{ canassigntome ? 'calc(100% - 30px)' : '100%' }}\";

      const actor_select = \$(\"#actor_{{ rand }}\");
      actor_select.select2({
         tags: true,
         width: select2_width,
         tokenSeparators: [',', ' '],
         containerCssClass: 'actor-field',
         templateSelection: function(option) { return genericTemplate_{{ rand }}(option, true); },
         templateResult:    function(option) { return genericTemplate_{{ rand }}(option, false); },
         disabled: {{ canupdate ? 'false' : 'true' }},
         createTag: function (params) {
            var term = \$.trim(params.term);

            if (term === '') {
               return null;
            }

            // Don't offset to create a tag if it's not an email
            if (!new RegExp(/^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,63}\$/).test(term)) {
               // Return null to disable tag creation
               return null;
            }

            return {
               id: term,
               text: term,
               itemtype: \"User\",
               items_id: 0,
               use_notification: 1,
               alternative_email: term,
            }
         },
         ajax: {
            url: '{{ path('/ajax/actors.php') }}',
            datatype: 'json',
            type: 'POST',
            delay:250,
            data: function (params) {
               var is_new_item = {{ item.isNewItem() ? \"true\" : \"false\" }};
               return {
                  action: 'getActors',
                  actortype: actorytype,
                  users_right: '{{ users_right ?? 'all' }}',
                  entity_restrict: (actors.requester.length == 0 && is_new_item) ? -1 : {{ entities_id }},
                  searchText: params.term,
                  _idor_token: '{{ idor_token(item.getType(), {'users_right': users_right ?? 'all'}) }}',
                  itiltemplate_class: '{{ itiltemplate.getType() }}',
                  itiltemplates_id: {{ itiltemplate.fields['id'] ?? 0 }},
                  itemtype: '{{ item.getType() }}',
                  items_id: {{ item.isNewItem() ? -1 : item.fields['id'] }},
                  item: {{ item.fields|json_encode|raw }},
                  returned_itemtypes: {{ (returned_itemtypes ?? ['User', 'Group', 'Supplier'])|json_encode()|raw }},
                  page: params.page || 1
               };
            },
         }
      }).on('select2:open', () => {
          // Close popovers
          \$('.popover').popover('hide');
      });

      \$(function () {
         actor_select.parent().popover({
            selector: '[data-glpi-popover-source]',
            container: actor_select.parent(),
            html: true,
            sanitize: false,
            trigger: 'hover',
            delay: {
               hide: 300
            },
            template: '<' + 'div class=\"popover shadow\" role=\"tooltip\"><' + 'div class=\"popover-arrow\"><' + '/div><' + 'h3 class=\"popover-header\"><' + '/h3><' + 'div class=\"popover-body\"><' + '/div><' + '/div>',
            content: function() {
               // Close other popovers
               \$('.popover').popover('hide');
               return \$('#' + \$(this).attr('data-glpi-popover-source')).html();
            }
         }).on('hide.bs.popover', function () {
            // prevent closing popover when user card is hover
            if (\$('.user-info-card:hover').length > 0) {
               return false;
            }
         });
      });

        // when the mouse leave the user card in the popover, close it
        \$(document).on('mouseleave', '.user-info-card', function() {
            setTimeout(() => {
                \$('.popover').popover('hide');
            }, 300);
        });

      // manage actors change
      var updateActors{{ rand }} = function() {
         var data = \$(\"#actor_{{ rand }}\").select2('data');

         var new_actors = [];
         data.forEach(function(selection) {
            var element = \$(selection.element);

            var itemtype  = selection.itemtype ?? element.data('itemtype');
            var items_id  = selection.items_id ?? element.data('items-id');
            var use_notif = selection.use_notification  ?? element.data('use-notification')  ?? false;
            var def_email = selection.default_email ?? element.data('default-email') ?? '';
            var alt_email = selection.alternative_email ?? element.data('alternative-email') ?? '';

            if (itemtype == \"Email\") {
               itemtype  = \"User\";
               use_notif = true;
               alt_email = selection.id;
            }

            new_actors.push({
               itemtype: itemtype,
               items_id: items_id,
               use_notification: use_notif,
               default_email: def_email,
               alternative_email: alt_email,
            });
         });

         actors[actorytype] = new_actors;

         saveActorsToDom();
      };
      \$(\"#actor_{{ rand }}\").on('select2:select', function () {
         updateActors{{ rand }}();
         {{ onchange }}
      });
      \$(\"#actor_{{ rand }}\").on('select2:unselect', function () {
         updateActors{{ rand }}();
         {{ onchange }}
      });

      // intercept event for edit notification button
      document.addEventListener('click', event => {
         if (event.target.closest(\"#actor_{{ rand }} + .select2 .edit-notify-user\")) {
            return openNotifyModal(event);
         }
         // if a click on assign info is detected prevent opening of select2
         if (event.target.closest(\"#actor_{{ rand }} + .select2 .assign_infos\")) {
            event.stopPropagation();
         }
      }, {capture: true})
      document.addEventListener('keydown', event => {
         if (event.target.closest(\"#actor_{{ rand }} + .select2 .edit-notify-user\")
            && event.key == \"Enter\") {
            return openNotifyModal(event);
         }
      }, {capture: true})

      {% if itiltemplate.isHiddenField('_users_id_' ~ actortype) %}
         \$(\".actor_entry[data-itemtype=\\\"User\\\"][data-actortype=\\\"{{ actortype }}\\\"]\").parent().css(\"display\", \"none\");
      {% endif %}
      {% if itiltemplate.isHiddenField('_groups_id_' ~ actortype) %}
         \$(\".actor_entry[data-itemtype=\\\"Group\\\"][data-actortype=\\\"{{ actortype }}\\\"]\").parent().css(\"display\", \"none\");
      {% endif %}
   })();
   </script>
{% endif %}
", "components/itilobject/actors/field.html.twig", "/var/www/glpi/templates/components/itilobject/actors/field.html.twig");
    }
}
