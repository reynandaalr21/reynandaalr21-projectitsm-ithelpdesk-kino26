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

/* @datainjection/clientinjection_upload_file.html.twig */
class __TwigTemplate_5c1be1ef11d757ea80ccb9e47e0eb664 extends Template
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
        yield "
";
        // line 31
        if ((($tmp = ($context["add_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "    <form method=\"post\" name=\"form\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
            yield "\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
";
        }
        // line 35
        yield "    <div class=\"hr-text mt-5 mb-5\">
        <i class=\"fa-2x ti ti-file-arrow-left\"></i>
        <span>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File to inject", "datainjection"), "html", null, true);
        yield "</span>
    </div>

    <input type=\"hidden\" name=\"id\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["models_id"] ?? null), "html", null, true);
        yield "\">

    ";
        // line 42
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 42, $this->getSourceContext())->macro_htmlField(...["filename", "<input type=\"file\" name=\"filename\">", __("Choose a file", "datainjection"), ["add_field_class" => "col-sm-12", "label_class" => "col-5 col-sm-5", "input_class" => "col-6 col-sm-6"]]);
        // line 51
        yield "
    ";
        // line 52
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 52, $this->getSourceContext())->macro_dropdownArrayField(...["file_encoding", 2,         // line 55
($context["file_encoding_values"] ?? null), __("File encoding", "datainjection"), ["add_field_class" => "col-sm-12", "label_class" => "col-5 col-sm-5", "input_class" => "col-6 col-sm-6", "width" => "325px"]]);
        // line 63
        yield "

    <div class=\"center pt-2\">
        ";
        // line 66
        if ((($tmp = ($context["confirm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "            ";
            if ((($context["confirm"] ?? null) == "creation")) {
                // line 68
                yield "                ";
                $context["message"] = __("Warning : existing mapped column will be overridden", "datainjection");
                // line 69
                yield "            ";
            } else {
                // line 70
                yield "                ";
                $context["message"] = __("Watch out, you're about to inject data into GLPI. Are you sure you want to do it ?", "datainjection");
                // line 71
                yield "            ";
            }
            // line 72
            yield "            <input type=\"submit\" class=\"btn btn-primary\" name=\"upload\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_label"] ?? null), "html", null, true);
            yield "\" onclick=\"return window.confirm('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "');\">
        ";
        } else {
            // line 74
            yield "            <input type=\"submit\" class=\"btn btn-primary\" name=\"upload\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["submit_label"] ?? null), "html", null, true);
            yield "\">
        ";
        }
        // line 76
        yield "        &nbsp;&nbsp;
        <input type=\"submit\" class=\"btn btn-outline-danger\" name=\"cancel\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Cancel"), "html", null, true);
        yield "\">
    </div>
";
        // line 79
        if ((($tmp = ($context["add_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "    </form>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/clientinjection_upload_file.html.twig";
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
        return array (  131 => 80,  129 => 79,  124 => 77,  121 => 76,  115 => 74,  107 => 72,  104 => 71,  101 => 70,  98 => 69,  95 => 68,  92 => 67,  90 => 66,  85 => 63,  83 => 55,  82 => 52,  79 => 51,  77 => 42,  72 => 40,  66 => 37,  62 => 35,  57 => 33,  52 => 32,  50 => 31,  47 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/clientinjection_upload_file.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/clientinjection_upload_file.html.twig");
    }
}
