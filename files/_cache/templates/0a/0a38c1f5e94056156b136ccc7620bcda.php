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

/* components/itilobject/actors/main.html.twig */
class __TwigTemplate_5d428b52eb90832dce217951debbab6d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/actors/main.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        if ( !array_key_exists("display_actortypes", $context)) {
            // line 37
            yield "   ";
            $context["display_actortypes"] = ["requester", "requester name", "assign"];
        }
        // line 39
        if ( !array_key_exists("display_labels", $context)) {
            // line 40
            yield "   ";
            $context["display_labels"] = true;
        }
        // line 42
        yield "
";
        // line 43
        $context["actor_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["is_horizontal" => false, "add_field_class" => ((        // line 45
($context["is_expanded"] ?? null)) ? ("col-sm-4") : (""))]);
        // line 47
        $context["can_admin"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canAdminActors", [], "method", false, false, false, 47);
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 48)) {
            // line 49
            yield "   ";
            $context["can_admin"] = true;
        }
        // line 51
        yield "
";
        // line 53
        $context["allow_auto_submit"] = (($context["allow_auto_submit"]) ?? (true));
        // line 55
        yield "
";
        // line 57
        yield "
";
        // line 58
        if ((CoreExtension::inFilter("requester", ($context["display_actortypes"] ?? null)) && ( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_requester"], "method", false, false, false, 58) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_requester"], "method", false, false, false, 58)))) {
            // line 59
            yield "   ";
            $context["requester_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 60
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>                 // line 61
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "actortype" => "requester", "entities_id" =>                 // line 64
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 65
($context["itiltemplate"] ?? null), "params" =>                 // line 66
($context["params"] ?? null), "canupdate" =>                 // line 67
($context["canupdate"] ?? null), "canassigntome" => ((                // line 68
$context["canassigntome"]) ?? (false)), "main_rand" =>                 // line 69
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 70
($context["allow_auto_submit"] ?? null)], false);
                // line 71
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            yield "   ";
            if (($context["display_labels"] ?? null)) {
                // line 74
                yield "      ";
                yield CoreExtension::callMacro($macros["fields"], "macro_field", ["requester",                 // line 76
($context["requester_field"] ?? null), _n("Requester", "Requesters", 1), Twig\Extension\CoreExtension::merge(                // line 78
($context["actor_options"] ?? null), ["required" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 79
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_requester"], "method", false, false, false, 79) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_requester"], "method", false, false, false, 79))])], 74, $context, $this->getSourceContext());
                // line 81
                yield "
   ";
            } else {
                // line 83
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["requester_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 86
        yield "
";
        // line 87
        $context["requester_custom_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 88
            yield "   <input type=\"text\" 
          name=\"requester_custom_name\" 
          value=\"";
            // line 90
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "requester_custom_name", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "requester_custom_name", [], "any", false, false, false, 90)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "requester_custom_name", [], "any", false, false, false, 90), "html", null, true)) : (yield ""));
            yield "\" 
          class=\"form-control\"
          readonly  
          ";
            // line 93
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_requester_custom_name"], "method", false, false, false, 93)) {
                yield "required";
            }
            yield ">
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "
";
        // line 96
        if (($context["display_labels"] ?? null)) {
            // line 97
            yield "   ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["requester_custom_name",             // line 99
($context["requester_custom_field"] ?? null), __("Nombre del solicitante"), Twig\Extension\CoreExtension::merge(            // line 101
($context["actor_options"] ?? null), ["required" => CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["itiltemplate"] ?? null), "isMandatoryField", ["_requester_custom_name"], "method", false, false, false, 102)])], 97, $context, $this->getSourceContext());
            // line 104
            yield "
";
        } else {
            // line 106
            yield "   ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["requester_custom_field"] ?? null), "html", null, true);
            yield "
";
        }
        // line 108
        yield "
";
        // line 109
        if ((CoreExtension::inFilter("assign", ($context["display_actortypes"] ?? null)) && (( !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_assign"], "method", false, false, false, 109) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_assign"], "method", false, false, false, 109)) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_supplier_id_assign"], "method", false, false, false, 109)))) {
            // line 110
            yield "   ";
            $context["assign_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 111
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>                 // line 112
($context["item"] ?? null), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN"), "actortype" => "assign", "users_right" => "own_ticket", "entities_id" =>                 // line 116
($context["entities_id"] ?? null), "itiltemplate" =>                 // line 117
($context["itiltemplate"] ?? null), "params" =>                 // line 118
($context["params"] ?? null), "canupdate" =>                 // line 119
($context["canassign"] ?? null), "canassigntome" => ((                // line 120
$context["canassigntome"]) ?? (false)), "main_rand" =>                 // line 121
($context["main_rand"] ?? null), "allow_auto_submit" =>                 // line 122
($context["allow_auto_submit"] ?? null)], false);
                // line 123
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            yield "   ";
            if (($context["display_labels"] ?? null)) {
                // line 126
                yield "      ";
                yield CoreExtension::callMacro($macros["fields"], "macro_field", ["assign",                 // line 128
($context["assign_field"] ?? null), __("Assigned to"), Twig\Extension\CoreExtension::merge(                // line 130
($context["actor_options"] ?? null), ["required" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 131
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_assign"], "method", false, false, false, 131) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_assign"], "method", false, false, false, 131)) || CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_supplier_id_assign"], "method", false, false, false, 131))])], 126, $context, $this->getSourceContext());
                // line 133
                yield "
   ";
            } else {
                // line 135
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_field"] ?? null), "html", null, true);
                yield "
   ";
            }
        }
        // line 138
        yield "
<input type=\"hidden\" name=\"_actors\" id=\"_actors\" />

";
        // line 142
        yield "<div class=\"modal fade\" id=\"editActorNotifySettings\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">
            <i class=\"fas fa-envelope\"></i>
            &nbsp;";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit notification settings"), "html", null, true);
        yield "
         </h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
         <div class=\"mb-3\">
            <label class=\"form-label\" for=\"actorname\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actor"), "html", null, true);
        yield "</label>
            <input type=\"text\" class=\"form-control\" id=\"actorname\" name=\"_notifications_actorname\" />
            <input type=\"hidden\" name=\"_notifications_actortype\" value=\"\" />
            <input type=\"hidden\" name=\"_notifications_actorindex\" value=\"\" />
         </div>
         <div class=\"mb-3\">
            <label for=\"alternative_email\" class=\"form-label\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
        yield "</label>
            <div class=\"form-check form-switch\">
               <input class=\"form-check-input\" type=\"checkbox\" id=\"use_notification\" name=\"_notifications_use_notification\" />
               <label class=\"form-check-label\" for=\"use_notification\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email followup"), "html", null, true);
        yield "</label>
            </div>
            <input type=\"email\" class=\"form-control\" id=\"alternative_email\" name=\"_notifications_alternative_email\" />
         </div>
      </div>
      <div class=\"modal-footer\">
         <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"ti ti-x\"></i>
            <span>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "<span>
         </button>
         <button type=\"button\" class=\"btn btn-primary\" id=\"saveActorNotifySettings\">
            <i class=\"far fa-save\"></i>
            <span>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "</span>
         </button>
      </div>
    </div>
  </div>
</div>

";
        // line 182
        $context["actortypes"] = ["requester" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "observer" => Twig\Extension\CoreExtension::constant("CommonITILActor::OBSERVER"), "assign" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN")];
        // line 187
        yield "
<script type=\"text/javascript\">
   /* global bootstrap */
   var editActorNotifySettings_modal = null;
   \$(function () {
      editActorNotifySettings_modal = new bootstrap.Modal(document.getElementById('editActorNotifySettings'), {});
   });

   var actors = {
      ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["actortypes"] ?? null));
        foreach ($context['_seq'] as $context["actortype"] => $context["actortypeint"]) {
            // line 197
            yield "         ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield ": [
            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [$context["actortypeint"], ($context["params"] ?? null)], "method", false, false, false, 198));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 199
                yield "            {
               itemtype: \"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["actor"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
                yield "\",
               items_id: \"";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["actor"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
                yield "\",
               use_notification: ";
                // line 202
                yield (((($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["use_notification"] ?? null) : null)) ? ("1") : ("0"));
                yield ",
               alternative_email: \"";
                // line 203
                (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 203) &&  !(null === (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["alternative_email"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["alternative_email"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "\",
               default_email: \"";
                // line 204
                (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 204) &&  !(null === (($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_email"] ?? null) : null)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["default_email"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "\",
            },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            yield "         ],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actortype'], $context['actortypeint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "   };

   // edit email preference when .edit-notify-user button is activated
   function openNotifyModal(event) {
      event.stopPropagation();

      var element = \$(event.target).closest('.actor_entry');
      var itemtype  = element.data('itemtype');
      var items_id  = element.data('items-id');
      var actortype = element.data('actortype');
      var text      = element.find('.actor_text').text().trim();

      actorIndex = actors[actortype].findIndex(element =>
         element.itemtype == itemtype &&
         (items_id === 0 ? element.alternative_email == text : element.items_id == items_id)
      );
      var actor = actors[actortype][actorIndex];

      var modal = \$('#editActorNotifySettings');
      modal.find(\"input[name=_notifications_actortype]\").val(actortype);
      modal.find(\"input[name=_notifications_actorindex]\").val(actorIndex);
      modal.find(\"input[name=_notifications_actorname]\").removeAttr('readonly').val(text).attr('readonly', 'true');
      modal.find(\"input[name=_notifications_use_notification]\").prop('checked', parseInt(actor.use_notification));
      modal.find(\"input[name=_notifications_alternative_email]\").attr('placeholder', actor.default_email);
      modal.find(\"input[name=_notifications_alternative_email]\").val(actor.alternative_email);

      editActorNotifySettings_modal.show();
   }

   // save edited actor when clicking on save button
   \$(document).on('click', '#saveActorNotifySettings', function(event) {
      saveNotificationSettings();
   });

   // prevent submit on enter key in modal (but save notification settings)
   \$(document).on('keyup keypress', '#editActorNotifySettings input', function(event) {
      var keyCode = event.keyCode || event.which;
      if (keyCode === 13) {
         event.preventDefault();
         saveNotificationSettings();
         return false;
      }
   });

   // save settings from modal (get modal data, and serialize them into input hidden)
   function saveNotificationSettings() {
      var modal = \$('#editActorNotifySettings');
      var actortype  = modal.find(\"input[name=_notifications_actortype]\").val();
      var actorIndex = modal.find(\"input[name=_notifications_actorindex]\").val();
      var use_notif  = (modal.find(\"input[name=_notifications_use_notification]\").is(\":checked\") ? 1 : 0);
      var alt_email  = modal.find(\"input[name=_notifications_alternative_email]\").val();

      var actor = actors[actortype][actorIndex];
      actor.use_notification = use_notif;
      actor.alternative_email = alt_email;

      // update notif setting icon for actor
      var fa_class = \"far\";
      if (use_notif) {
         fa_class = \"fas\";
      }

      var actor_entry = \$('.actor_entry[data-itemtype='+actor.itemtype+'][data-items-id='+actor.items_id+'][data-actortype='+actortype+']')
         .filter(function() {
            if(actor.items_id == 0 && actor.itemtype == \"User\") {
               return \$(this).text().trim() === actor.alternative_email;
            }
            return \$(this).text()
         });

      // toggle notify icon
      actor_entry.find('.notify-icon')
         .removeClass('fas far')
         .addClass(fa_class);

      // toggle text for direct email
      if (actor.itemtype == \"User\" && parseInt(actor.items_id) == 0) {
         actor_entry.find('.actor_text').html(alt_email);
      }


      editActorNotifySettings_modal.hide();
      saveActorsToDom();
   }

   // save actors object to dom
   function saveActorsToDom() {
      \$('#_actors').val(JSON.stringify(actors));
   }
   saveActorsToDom();
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/actors/main.html.twig";
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
        return array (  341 => 209,  334 => 207,  325 => 204,  321 => 203,  317 => 202,  313 => 201,  309 => 200,  306 => 199,  302 => 198,  297 => 197,  293 => 196,  282 => 187,  280 => 182,  270 => 175,  263 => 171,  252 => 163,  246 => 160,  237 => 154,  230 => 150,  225 => 148,  217 => 142,  212 => 138,  205 => 135,  201 => 133,  199 => 131,  198 => 130,  197 => 128,  195 => 126,  192 => 125,  187 => 123,  185 => 122,  184 => 121,  183 => 120,  182 => 119,  181 => 118,  180 => 117,  179 => 116,  178 => 112,  176 => 111,  173 => 110,  171 => 109,  168 => 108,  162 => 106,  158 => 104,  156 => 102,  155 => 101,  154 => 99,  152 => 97,  150 => 96,  147 => 95,  139 => 93,  133 => 90,  129 => 88,  127 => 87,  124 => 86,  117 => 83,  113 => 81,  111 => 79,  110 => 78,  109 => 76,  107 => 74,  104 => 73,  99 => 71,  97 => 70,  96 => 69,  95 => 68,  94 => 67,  93 => 66,  92 => 65,  91 => 64,  90 => 61,  88 => 60,  85 => 59,  83 => 58,  80 => 57,  77 => 55,  75 => 53,  72 => 51,  68 => 49,  66 => 48,  64 => 47,  62 => 45,  61 => 43,  58 => 42,  54 => 40,  52 => 39,  48 => 37,  46 => 36,  43 => 35,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/main.html.twig", "/var/www/glpi/templates/components/itilobject/actors/main.html.twig");
    }
}
