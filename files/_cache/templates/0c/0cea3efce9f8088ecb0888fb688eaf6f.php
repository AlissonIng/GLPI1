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

/* components/itilobject/fields/status.html.twig */
class __TwigTemplate_8b9f3cf31056874b68e39cf339a59af2 extends Template
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
        yield " ";
        // line 33
        yield "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields/status.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["all_statuses"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getAllStatuses", [], "method", false, false, false, 36);
        // line 37
        $context["linkable_statuses"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusLink", [], "method", false, false, false, 37);
        // line 38
        yield "
";
        // line 39
        if (($context["canupdate"] ?? null)) {
            // line 40
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "<div class=\"dropdown\">
    <button class=\"btn dropdown w-100 custom-button\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <span class=\"status-text\">
            <i ";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null)], "method", false, false, false, 44);
                yield "</i>
            ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["all_statuses"] ?? null), (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["status"] ?? null) : null), [], "array", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_2 = ($context["all_statuses"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[(($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 45)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["status"] ?? null) : null)] ?? null) : null), "")) : ("")), "html", null, true);
                yield "
        </span>
        <span class=\"select2-selection__arrow\" role=\"presentation\">
            <b role=\"presentation\"></b>
        </span>
    </button>
    <ul class=\"dropdown-menu w-100\" aria-labelledby=\"dropdownMenuButton\">
        ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["all_statuses"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["label"]) {
                    // line 53
                    yield "            ";
                    $context["link"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["linkable_statuses"] ?? null), $context["key"], [], "array", false, true, false, 53), "link", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["linkable_statuses"] ?? null), $context["key"], [], "array", false, true, false, 53), "link", [], "any", false, false, false, 53), null)) : (null));
                    // line 54
                    yield "            <li>
                <a class=\"dropdown-item ";
                    // line 55
                    if (($context["key"] == (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["status"] ?? null) : null))) {
                        yield "active";
                    }
                    yield "\" 
                   href=\"";
                    // line 56
                    ((($context["link"] ?? null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["link"] ?? null) . "&status=") . $context["key"]), "html", null, true)) : (yield "#"));
                    yield "\"
                   ";
                    // line 57
                    if (($context["link"] ?? null)) {
                        yield "onclick=\"window.location.href='";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["link"] ?? null) . "&status=") . $context["key"]), "html", null, true);
                        yield "'; return false;\"";
                    }
                    yield ">
                    ";
                    // line 58
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [$context["key"]], "method", false, false, false, 58);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                    yield "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "    </ul>
</div>

<style>

.dropdownMenuButton.btn.drpodown-toggle.custom-button {
padding: 0px 20px 0px 80x;

}

/* Alineaci�n del texto en el span */
.status-text {
    display: inline-block;
    text-align: left; /* Alinea el span a la izquierda */
}

/* Estilo personalizado para el bot�n de estado */
.custom-button {
    color: #444444; /* Color del texto en el bot�n (puedes elegir cualquier color que prefieras) */
    font-weight: normal; /* Quitar la negrita */
text-align: left;
justify-content: flex-start; /* Asegura que el contenido se alinee al principio */
line-height: calc(1.4285714286em + 0.875rem + 2px);
padding: 0px 10px;
border-color: #d9dbde;
}
/* Estilo para pegar el men� al bot�n */
.dropdown-menu {
    margin-top: -1px; /* Quita el espacio vertical entre el bot�n y el men� */
    border-radius: 0; /* Opcional: Quitar el redondeo si lo deseas */
    padding: 0; /* Opcional: Reducir el espacio interno del men� */
}

/* Asegurar que el dropdown est� alineado con el bot�n */
.custom-button + .dropdown-menu {
    top: 100%; /* Asegura que el men� se alinee justo debajo del bot�n */
    left: 0; /* Alinea el men� al borde izquierdo del bot�n */
}

/* Asegurarse de que la flecha se muestre al lado derecho */
.custom-button .select2-selection__arrow {
border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    right: 07px; /* Mueve la flecha al lado derecho */
    top: 57%;
    width: 0;
}

button[aria-expanded=\"true\"] .select2-selection__arrow {
    transform: rotate(180deg); /* Invierte la flecha hacia arriba */
}
/* Asegurarse de que el bot�n no cambie de color al pasar el mouse */
.custom-button:hover {
    color: #444444; /* Mantener el color del texto sin cambios al pasar el mouse */
border-color: #d9dbde;
}
.dropdown-item {
    color: #444444; /* Negro para el texto del estado seleccionado */
}

.dropdown-item.active {
    background-color: #eaeef2; /* Gris para el fondo del estado seleccionado */
    color: #444444; /* Negro para el texto del estado seleccionado */
}

.dropdown-item:hover {
    background-color: #c8eafd; /* Cambiar color de fondo en hover */
    color: white; /* Cambiar color de texto */
}
</style>

      ";
                // line 137
                $context["validation_class"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 137);
                // line 138
                yield "      ";
                if ( !(null === ($context["validation_class"] ?? null))) {
                    // line 139
                    yield "         ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [($context["item"] ?? null), "status"], "method", false, false, false, 139), "html", null, true);
                    yield "
      ";
                }
                // line 141
                yield "
      ";
                // line 142
                yield Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig", ["display_for_parent" => true]);
                // line 144
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        } else {
            // line 147
            yield "   ";
            $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["center" => true]);
            // line 148
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 149
                yield "      ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null)], "method", false, false, false, 149);
                yield "
      ";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["all_statuses"] ?? null), (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["status"] ?? null) : null), [], "array", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_7 = ($context["all_statuses"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[(($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["status"] ?? null) : null)] ?? null) : null), "")) : ("")), "html", null, true);
                yield "

   ";
                // line 152
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canReopen", [], "method", false, false, false, 152)) {
                    // line 153
                    yield "      <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getLinkURL", [], "method", false, false, false, 153), "html", null, true);
                    yield "&amp;_openfollowup=1\"
         class=\"btn btn-ghost-secondary\">
         <i class=\"far fa-folder-open\"></i>
         <span>";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reopen"), "html", null, true);
                    yield "</span>
      </a>
   ";
                }
                // line 159
                yield "
   ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 162
        yield "
";
        // line 163
        yield CoreExtension::callMacro($macros["fields"], "macro_field", ["status",         // line 165
($context["status_field"] ?? null), __("Status"),         // line 167
($context["field_options"] ?? null)], 163, $context, $this->getSourceContext());
        // line 168
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/fields/status.html.twig";
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
        return array (  262 => 168,  260 => 167,  259 => 165,  258 => 163,  255 => 162,  249 => 159,  243 => 156,  236 => 153,  234 => 152,  229 => 150,  224 => 149,  221 => 148,  218 => 147,  212 => 144,  210 => 142,  207 => 141,  201 => 139,  198 => 138,  196 => 137,  119 => 62,  107 => 58,  99 => 57,  95 => 56,  89 => 55,  86 => 54,  83 => 53,  79 => 52,  69 => 45,  65 => 44,  60 => 41,  57 => 40,  55 => 39,  52 => 38,  50 => 37,  48 => 36,  45 => 35,  43 => 34,  40 => 33,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields/status.html.twig", "/var/www/glpi/templates/components/itilobject/fields/status.html.twig");
    }
}
