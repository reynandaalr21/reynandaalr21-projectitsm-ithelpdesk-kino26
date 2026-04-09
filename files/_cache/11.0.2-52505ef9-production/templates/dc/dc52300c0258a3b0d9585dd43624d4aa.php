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

/* @datainjection/modelcsv_additional_form.html.twig */
class __TwigTemplate_c776a2ef93240d41a5430630c451dfaa extends Template
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
        $context["field_options"] = ["field_class" => "col-6 col-sm-6", "label_class" => "col-6 col-sm-6", "input_class" => "col-6 col-sm-6"];
        // line 36
        yield "
<div class=\"hr-text mt-5 mb-5\">
    <i class=\"fa-2x ti ti-file-type-csv\"></i>
    <span>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Specific file format options", "datainjection"), "html", null, true);
        yield "</span>
</div>

<div class=\"row\">
    ";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 43, $this->getSourceContext())->macro_dropdownYesNo(...["is_header_present", ($context["is_header_present"] ?? null), __("Header's presence", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

    ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 45, $this->getSourceContext())->macro_textField(...["delimiter", ($context["delimiter"] ?? null), __("File delimitor", "datainjection"), ($context["field_options"] ?? null)]);
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/modelcsv_additional_form.html.twig";
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
        return array (  69 => 45,  64 => 43,  57 => 39,  52 => 36,  50 => 31,  47 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/modelcsv_additional_form.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/modelcsv_additional_form.html.twig");
    }
}
