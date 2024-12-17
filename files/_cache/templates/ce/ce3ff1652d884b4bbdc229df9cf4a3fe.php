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

/* @fields/container_display_conditions.html.twig */
class __TwigTemplate_fedac7168ac7a4b6a1afb8f121da1838 extends Template
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
        // line 28
        yield "
";
        // line 29
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@fields/container_display_conditions.html.twig", 29)->unwrap();
        // line 30
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 31
        yield "
<div id=\"container";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"asset\">
   <div class=\"flash-messages\">
      <div class=\"alert alert-info\">
         ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The engine is used for hide block when main object meets condition"), "html", null, true);
        yield "
      </div>
   </div>
   <div class=\"d-flex align-items-start mb-3\">
      ";
        // line 39
        if (($context["has_fields"] ?? null)) {
            // line 40
            yield "         <button class=\"btn btn-primary me-2\"
                 type=\"button\"
                 name=\"switch_add\"
                 value=\"1\"
                 data-container-id=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield "\">
            <i class=\"far fa-plus\"></i>
            <span>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add condition to hide block", "fields"), "html", null, true);
            yield "</span>
         </button>
      ";
        }
        // line 49
        yield "   </div>

   ";
        // line 51
        yield CoreExtension::callMacro($macros["fields"], "macro_largeTitle", [_n("Condition to hide block", "Conditions to hide block", Session::getPluralNumber(), "fields"), "", false], 51, $context, $this->getSourceContext());
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <table class=\"table\">
                     <thead>
                        <tr>
                           <th>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Item type"), "html", null, true);
        yield "</th>
                           <th>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field"), "html", null, true);
        yield "</th>
                           <th>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Condition"), "html", null, true);
        yield "</th>
                           <th>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Value"), "html", null, true);
        yield "</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        ";
        // line 68
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["container_display_conditions"] ?? null)) > 0)) {
            // line 69
            yield "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["container_display_conditions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["container_display_condition"]) {
                // line 70
                yield "                              <tr>
                                 <td>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "itemtype", [], "any", false, false, false, 71)), "html", null, true);
                yield "</td>
                                 <td>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsContainerDisplayCondition::getFieldName", [CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "search_option", [], "any", false, false, false, 72), CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "itemtype", [], "any", false, false, false, 72)]), "html", null, true);
                yield "</td>
                                 <td>";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsContainerDisplayCondition::getConditionName", [CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "condition", [], "any", false, false, false, 73)]), "html", null, true);
                yield "</td>
                                 <td>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginFieldsContainerDisplayCondition::getRawValue", [CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "search_option", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "itemtype", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "value", [], "any", false, false, false, 74)]), "html", null, true);
                yield "</td>
                                 <td>
                                    <form class=\"d-inline\" method=\"post\" action=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("PluginFieldsContainerDisplayCondition"), "html", null, true);
                yield "\">
                                       <input type=\"hidden\" name=\"id\" value=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["container_display_condition"], "id", [], "any", false, false, false, 77), "html", null, true);
                yield "\" />
                                       <input type=\"hidden\" name=\"plugin_fields_containers_id\" value=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
                yield "\" />
                                       <button type=\"button\" class=\"btn btn-sm btn-primary\" name=\"edit\"
                                               title=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Edit"), "html", null, true);
                yield "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-pencil\"></i>
                                       </button>
                                       <button type=\"submit\" class=\"btn btn-sm btn-danger\" name=\"delete\"
                                               title=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                yield "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                          <i class=\"ti ti-trash\"></i>
                                       </button>
                                       <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
                                    </form>
                                 </td>
                              </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container_display_condition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                        ";
        } else {
            // line 95
            yield "                           <tr>
                              <td colspan=\"6\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No item found"), "html", null, true);
            yield "</td>
                           </tr>
                        ";
        }
        // line 99
        yield "                     </tbody>
                  </table>
               </div> ";
        // line 102
        yield "            </div> ";
        // line 103
        yield "         </div> ";
        // line 104
        yield "      </div>
   </div> ";
        // line 106
        yield "   <script>
      \$(document).ready(() => {
         \$('#container";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', 'button[name=\"edit\"]', (e) => {
            const button = \$(e.currentTarget);
            const row = button.closest('tr');
            const id = row.find('input[name=\"id\"]').val();
            const container_id = row.find('input[name=\"plugin_fields_containers_id\"]').val();

            glpi_ajax_dialog(
               {
                  title: __('Edit condition to hide block', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/container_display_condition.php',
                  method: 'get',
                  params: {
                      action: 'get_edit_form',
                      id: id,
                      plugin_fields_containers_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });

         \$('#container";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').on('click', 'button[name=\"switch_add\"]', (e) => {
            const button = \$(e.currentTarget);
            const container_id = button.attr('data-container-id');

            glpi_ajax_dialog(
               {
                  title: __('Add condition to hide block', 'fields'),
                  url: CFG_GLPI.root_doc + '/' + GLPI_PLUGINS_PATH.fields + '/ajax/container_display_condition.php',
                  method: 'get',
                  params: {
                     action: 'get_add_form',
                     plugin_fields_containers_id: container_id
                  },
                  dialogclass: 'modal-xl'
               }
            );
         });
      });
   </script>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@fields/container_display_conditions.html.twig";
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
        return array (  233 => 129,  209 => 108,  205 => 106,  202 => 104,  200 => 103,  198 => 102,  194 => 99,  188 => 96,  185 => 95,  182 => 94,  171 => 89,  164 => 85,  156 => 80,  151 => 78,  147 => 77,  143 => 76,  138 => 74,  134 => 73,  130 => 72,  126 => 71,  123 => 70,  118 => 69,  116 => 68,  108 => 63,  104 => 62,  100 => 61,  96 => 60,  84 => 51,  80 => 49,  74 => 46,  69 => 44,  63 => 40,  61 => 39,  54 => 35,  48 => 32,  45 => 31,  43 => 30,  41 => 29,  38 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@fields/container_display_conditions.html.twig", "/var/www/glpi/marketplace/fields/templates/container_display_conditions.html.twig");
    }
}
