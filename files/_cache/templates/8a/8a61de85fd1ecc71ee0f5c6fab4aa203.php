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

/* pages/tools/project_task.html.twig */
class __TwigTemplate_2f0f480729f2f9bdd2b87dca9d3b7a1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/tools/project_task.html.twig", 35)->unwrap();
        // line 37
        $context["form_id"] = ("project_task_" . ($context["rand"] ?? null));
        // line 38
        $context["content_field_id"] = ("content_" . ($context["rand"] ?? null));
        // line 39
        $context["params"] = ["formoptions" => (("id=\"" .         // line 40
($context["form_id"] ?? null)) . "\"")];
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/tools/project_task.html.twig", 34);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "
    ";
        // line 45
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ProjectTaskTemplate", "projecttasktemplates_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48), "projecttasktemplates_id", [], "any", false, false, false, 48), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("ProjectTaskTemplate"), ["entity" => CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 51), "on_change" => "projecttasktemplate_update(this.value)"]], 45, $context, $this->getSourceContext());
        // line 54
        yield "

    <script>
        const form = \$('#";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "');
        function projecttasktemplate_update(value) {
            \$.ajax({
                url: CFG_GLPI.root_doc + \"/ajax/projecttask.php\",
                type: \"POST\",
                data: {
                    projecttasktemplates_id: value
                }
            }).done(function(data) {
                // Set simple inputs
                form.find('input[name=name]').val(data.name);
                form.find('textarea[name=comment]').val(data.comments);

                // Set flatpickr dates
                form.find('input[name=plan_start_date]').parent()[0]._flatpickr.setDate(data.plan_start_date);
                form.find('input[name=plan_end_date]').parent()[0]._flatpickr.setDate(data.plan_end_date);
                form.find('input[name=real_start_date]').parent()[0]._flatpickr.setDate(data.real_start_date);
                form.find('input[name=real_end_date]').parent()[0]._flatpickr.setDate(data.real_end_date);

                // Set content
                setRichTextEditorContent(\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["content_field_id"] ?? null), "html", null, true);
        yield "\", data.description);

                // Set dropdowns and dates
                form.find('select[name=projecttasks_id]').trigger(\"setValue\", data.projecttasks_id);
                form.find('select[name=projectstates_id]').trigger(\"setValue\", data.projectstates_id);
                form.find('select[name=projecttasktypes_id]').trigger(\"setValue\", data.projecttasktypes_id);
                form.find('select[name=percent_done]').trigger(\"setValue\", data.percent_done);
                form.find('select[name=is_milestone]').trigger(\"setValue\", data.is_milestone);
                form.find('select[name=effective_duration]').trigger(\"setValue\", data.effective_duration);
                form.find('select[name=planned_duration]').trigger(\"setValue\", data.planned_duration);
            });
         }
    </script>

    ";
        // line 91
        yield CoreExtension::callMacro($macros["fields"], "macro_nullField", [], 91, $context, $this->getSourceContext());
        yield "

    ";
        // line 93
        $context["project_link"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 94
            yield "        <span class=\"col-form-label d-inline-flex\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "getLink", [], "method", false, false, false, 94);
            yield "</span>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "    ";
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["_project",         // line 98
($context["project_link"] ?? null), CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["parent"] ?? null), "getTypeName", [], "method", false, false, false, 99)], 96, $context, $this->getSourceContext());
        // line 100
        yield "

    ";
        // line 102
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 102)) {
            // line 103
            yield "        <input type='hidden' name='projects_id' value='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["projects_id"] ?? null), "html", null, true);
            yield "'>
        <input type='hidden' name='is_recursive' value='";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recursive"] ?? null), "html", null, true);
            yield "'>
    ";
        }
        // line 106
        yield "
    ";
        // line 107
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ProjectTask", "projecttasks_id",         // line 110
($context["projecttasks_id"] ?? null), __("As child of"), ["entity" => CoreExtension::getAttribute($this->env, $this->source,         // line 113
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 113), "condition" => ["glpi_projecttasks.projects_id" =>         // line 114
($context["projects_id"] ?? null)], "used" => [CoreExtension::getAttribute($this->env, $this->source,         // line 115
($context["item"] ?? null), "getID", [], "method", false, false, false, 115)]]], 107, $context, $this->getSourceContext());
        // line 117
        yield "

    ";
        // line 119
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["name", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 121
($context["item"] ?? null), "fields", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), __("Name")], 119, $context, $this->getSourceContext());
        // line 123
        yield "

    ";
        // line 125
        yield CoreExtension::callMacro($macros["fields"], "macro_nullField", [], 125, $context, $this->getSourceContext());
        yield "

    ";
        // line 127
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ProjectState", "projectstates_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 130
($context["item"] ?? null), "fields", [], "any", false, false, false, 130), "projectstates_id", [], "any", false, false, false, 130), _x("item", "State")], 127, $context, $this->getSourceContext());
        // line 132
        yield "

    ";
        // line 134
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownField", ["ProjectTaskType", "projecttasktypes_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 137
($context["item"] ?? null), "fields", [], "any", false, false, false, 137), "projecttasktypes_id", [], "any", false, false, false, 137), _n("Type", "Types", 1)], 134, $context, $this->getSourceContext());
        // line 139
        yield "

    ";
        // line 141
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownNumberField", ["percent_done", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 143
($context["item"] ?? null), "fields", [], "any", false, false, false, 143), "percent_done", [], "any", false, false, false, 143), __("Percent done"), Twig\Extension\CoreExtension::merge(["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 146
($context["item"] ?? null), "fields", [], "any", false, false, false, 146), "percent_done", [], "any", false, false, false, 146), "min" => 0, "max" => 100, "step" => 5, "unit" => "%"], ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 151
($context["item"] ?? null), "fields", [], "any", false, false, false, 151), "auto_percent_done", [], "any", false, false, false, 151)) ? (["specific_tags" => ["disabled" => "disabled"]]) : ([])))], 141, $context, $this->getSourceContext());
        // line 152
        yield "

    ";
        // line 154
        $context["tooltip"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 155
            yield "        ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [__("When automatic computation is active, percentage is computed based on the average of all child task percent done.")]);
            // line 158
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "    ";
        yield CoreExtension::callMacro($macros["fields"], "macro_checkboxField", ["auto_percent_done", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 161
($context["item"] ?? null), "fields", [], "any", false, false, false, 161), "auto_percent_done", [], "any", false, false, false, 161), __("Automatically calculate"), ["add_field_html" =>         // line 164
($context["tooltip"] ?? null)]], 159, $context, $this->getSourceContext());
        // line 166
        yield "
    <script>
        form.find(\"input[name=auto_percent_done]\").on('change', function() {
            \$(\"select[name='percent_done']\").prop('disabled', \$(\"input[name='auto_percent_done']\").eq(1).prop('checked'));
        });
    </script>

    ";
        // line 173
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownYesNo", ["is_milestone", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 175
($context["item"] ?? null), "fields", [], "any", false, false, false, 175), "is_milestone", [], "any", false, false, false, 175), __("Milestone")], 173, $context, $this->getSourceContext());
        // line 177
        yield "
    <script>
        form.find('select[name=is_milestone]').on('change', function() {
            \$('.is_milestone').toggleClass('d-none', Boolean(Number(this.value)));
        });
    </script>

    ";
        // line 184
        yield CoreExtension::callMacro($macros["fields"], "macro_nullField", [], 184, $context, $this->getSourceContext());
        yield "

    <div class=\"hr-text\">
        <i class=\"ti ti-calendar-event\"></i>
        <span>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Planning"), "html", null, true);
        yield "</span>
    </div>

    ";
        // line 191
        yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["plan_start_date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 193
($context["item"] ?? null), "fields", [], "any", false, false, false, 193), "plan_start_date", [], "any", false, false, false, 193), __("Planned start date")], 191, $context, $this->getSourceContext());
        // line 195
        yield "

    ";
        // line 197
        yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["real_start_date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 199
($context["item"] ?? null), "fields", [], "any", false, false, false, 199), "real_start_date", [], "any", false, false, false, 199), __("Real start date")], 197, $context, $this->getSourceContext());
        // line 201
        yield "

    ";
        // line 203
        yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["plan_end_date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 205
($context["item"] ?? null), "fields", [], "any", false, false, false, 205), "plan_end_date", [], "any", false, false, false, 205), __("Planned end date"), ["field_class" => ("col-12 col-sm-6 is_milestone " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 208
($context["item"] ?? null), "fields", [], "any", false, false, false, 208), "is_milestone", [], "any", false, false, false, 208)) ? ("d-none") : ("")))]], 203, $context, $this->getSourceContext());
        // line 210
        yield "

    ";
        // line 212
        yield CoreExtension::callMacro($macros["fields"], "macro_datetimeField", ["real_end_date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 214
($context["item"] ?? null), "fields", [], "any", false, false, false, 214), "real_end_date", [], "any", false, false, false, 214), __("Real end date"), ["field_class" => ("col-12 col-sm-6 is_milestone " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 217
($context["item"] ?? null), "fields", [], "any", false, false, false, 217), "is_milestone", [], "any", false, false, false, 217)) ? ("d-none") : ("")))]], 212, $context, $this->getSourceContext());
        // line 219
        yield "

    ";
        // line 221
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", ["planned_duration", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 223
($context["item"] ?? null), "fields", [], "any", false, false, false, 223), "planned_duration", [], "any", false, false, false, 223), __("Planned duration"), ["min" => 0, "max" => (8 * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" =>         // line 230
($context["duration_dropdown_to_add"] ?? null), "field_class" => ("col-12 col-sm-6 is_milestone " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 231
($context["item"] ?? null), "fields", [], "any", false, false, false, 231), "is_milestone", [], "any", false, false, false, 231)) ? ("d-none") : ("")))]], 221, $context, $this->getSourceContext());
        // line 233
        yield "

    ";
        // line 235
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownTimestampField", ["effective_duration", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 237
($context["item"] ?? null), "fields", [], "any", false, false, false, 237), "effective_duration", [], "any", false, false, false, 237), __("Effective duration"), ["min" => 0, "max" => (8 * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" =>         // line 244
($context["duration_dropdown_to_add"] ?? null), "field_class" => ("col-12 col-sm-6 is_milestone " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 245
($context["item"] ?? null), "fields", [], "any", false, false, false, 245), "is_milestone", [], "any", false, false, false, 245)) ? ("d-none") : ("")))]], 235, $context, $this->getSourceContext());
        // line 247
        yield "

    ";
        // line 249
        if (($context["id"] ?? null)) {
            // line 250
            yield "        ";
            $context["ticket_duration"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 251
                yield "            <span class=\"fw-normal col-form-label d-inline-flex \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration(($context["duration"] ?? null), false), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            yield "        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["_ticket_duration",             // line 255
($context["ticket_duration"] ?? null), __("Tickets duration")], 253, $context, $this->getSourceContext());
            // line 257
            yield "

        ";
            // line 259
            $context["total_duration"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 260
                yield "            <span class=\"fw-normal col-form-label d-inline-flex \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($context["duration"] ?? null) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 260), "effective_duration", [], "any", false, false, false, 260)), false), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 262
            yield "        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_field", ["_total_duration",             // line 264
($context["total_duration"] ?? null), __("Total duration")], 262, $context, $this->getSourceContext());
            // line 266
            yield "
    ";
        }
        // line 268
        yield "
    <div class=\"hr-text\">
        <i class=\"ti ti-file-description\"></i>
        <span>";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Details"), "html", null, true);
        yield "</span>
    </div>

    ";
        // line 274
        yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["content", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 276
($context["item"] ?? null), "fields", [], "any", false, false, false, 276), "content", [], "any", false, false, false, 276), __("Description"), ["name" => "content", "enable_richtext" => true, "id" =>         // line 281
($context["content_field_id"] ?? null), "label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "field_class" => "col-12"]], 274, $context, $this->getSourceContext());
        // line 286
        yield "

    ";
        // line 288
        yield CoreExtension::callMacro($macros["fields"], "macro_textareaField", ["comment", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 290
($context["item"] ?? null), "fields", [], "any", false, false, false, 290), "comment", [], "any", false, false, false, 290), __("Comments"), ["label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "field_class" => "col-12"]], 288, $context, $this->getSourceContext());
        // line 297
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/tools/project_task.html.twig";
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
        return array (  351 => 297,  349 => 290,  348 => 288,  344 => 286,  342 => 281,  341 => 276,  340 => 274,  334 => 271,  329 => 268,  325 => 266,  323 => 264,  321 => 262,  314 => 260,  312 => 259,  308 => 257,  306 => 255,  304 => 253,  297 => 251,  294 => 250,  292 => 249,  288 => 247,  286 => 245,  285 => 244,  284 => 237,  283 => 235,  279 => 233,  277 => 231,  276 => 230,  275 => 223,  274 => 221,  270 => 219,  268 => 217,  267 => 214,  266 => 212,  262 => 210,  260 => 208,  259 => 205,  258 => 203,  254 => 201,  252 => 199,  251 => 197,  247 => 195,  245 => 193,  244 => 191,  238 => 188,  231 => 184,  222 => 177,  220 => 175,  219 => 173,  210 => 166,  208 => 164,  207 => 161,  205 => 159,  201 => 158,  198 => 155,  196 => 154,  192 => 152,  190 => 151,  189 => 146,  188 => 143,  187 => 141,  183 => 139,  181 => 137,  180 => 134,  176 => 132,  174 => 130,  173 => 127,  168 => 125,  164 => 123,  162 => 121,  161 => 119,  157 => 117,  155 => 115,  154 => 114,  153 => 113,  152 => 110,  151 => 107,  148 => 106,  143 => 104,  138 => 103,  136 => 102,  132 => 100,  130 => 99,  129 => 98,  127 => 96,  120 => 94,  118 => 93,  113 => 91,  96 => 77,  73 => 57,  68 => 54,  66 => 51,  65 => 48,  64 => 45,  61 => 44,  57 => 43,  52 => 34,  50 => 40,  49 => 39,  47 => 38,  45 => 37,  43 => 35,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/tools/project_task.html.twig", "/var/www/glpi/templates/pages/tools/project_task.html.twig");
    }
}
