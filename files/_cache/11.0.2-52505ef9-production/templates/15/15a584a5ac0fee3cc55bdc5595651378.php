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
use Twig\TemplateWrapper;

/* @datainjection/clientinjection.html.twig */
class __TwigTemplate_b393f5c09fd9ec4a267ca2d155dbcc02 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "
";
        // line 29
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 29)->unwrap();
        // line 30
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 30)->unwrap();
        // line 31
        yield "
";
        // line 32
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 33
        yield "<div class=\"firstbloc\">
    <form name=\"clientinjection_form";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" id=\"clientinjection_form";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_action"] ?? null), "html", null, true);
        yield "\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
        <div class=\"card p-3 m-5\">
            <div class=\"row\">
                <div class=\"hr-text mt-2 mb-5\">
                    <i class=\"fa-2x ti ti-adjustments-alt\"></i>
                    <span>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Client Injection Configuration", "datainjection"), "html", null, true);
        yield "</span>
                </div>
                <div class=\"col-12\">
                    ";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["models"] ?? null)) > 0)) {
            // line 44
            yield "                        ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 44, $this->getSourceContext())->macro_dropdownField(...["PluginDatainjectionModel", "dropdown_models", 0, __("Model", "datainjection"), ["add_field_class" => "col-sm-12", "input_class" => "col-6 col-sm-6", "label_class" => "col-6 col-sm-6"]]);
            // line 54
            yield "
                    ";
        } else {
            // line 56
            yield "                        ";
            $context["text"] = __("No model currently available", "datainjection");
            // line 57
            yield "                        ";
            if ((($tmp = ($context["can_create_model"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                            ";
                $context["text"] = ((((($context["text"] ?? null) . ". ") . __("You can start the model creation by hitting the button", "datainjection")) . ": ") . ($context["model_type_name"] ?? null));
                // line 59
                yield "                        ";
            }
            // line 60
            yield "                        ";
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_info", $context, 60, $this->getSourceContext())->macro_alert_info(...[($context["text"] ?? null)]);
            yield "
                    ";
        }
        // line 62
        yield "                </div>
            </div>

            <div class=\"row mt-3\">
                <div class=\"col-12\">
                    <span id=\"span_injection\" name=\"span_injection\"></span>
                </div>
            </div>

            ";
        // line 71
        if ((($tmp = ($context["models_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                <div class=\"row mt-3\">
                    <div class=\"col-12\">
                        ";
            // line 74
            if ((($context["step"] ?? null) == ($context["upload_step"] ?? null))) {
                // line 75
                yield "                            <script>
                                Ajax.updateItem(\"span_injection\", \"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upload_url"] ?? null), "html", null, true);
                yield "\", ";
                yield json_encode(($context["params"] ?? null));
                yield ");
                            </script>
                        ";
            } elseif ((            // line 78
($context["step"] ?? null) == ($context["result_step"] ?? null))) {
                // line 79
                yield "                            <script>
                                Ajax.updateItem(\"span_injection\", \"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["result_url"] ?? null), "html", null, true);
                yield "\", ";
                yield json_encode(($context["params"] ?? null));
                yield ");
                            </script>
                        ";
            }
            // line 83
            yield "                    </div>
                </div>
            ";
        }
        // line 86
        yield "        </div>
    </form>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/clientinjection.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 86,  148 => 83,  140 => 80,  137 => 79,  135 => 78,  128 => 76,  125 => 75,  123 => 74,  119 => 72,  117 => 71,  106 => 62,  100 => 60,  97 => 59,  94 => 58,  91 => 57,  88 => 56,  84 => 54,  81 => 44,  79 => 43,  73 => 40,  65 => 35,  57 => 34,  54 => 33,  52 => 32,  49 => 31,  47 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/clientinjection.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/clientinjection.html.twig");
    }
}
