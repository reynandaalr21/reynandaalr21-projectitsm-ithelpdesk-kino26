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

/* @datainjection/clientinjection_injection.html.twig */
class __TwigTemplate_ea9661a8baf77f27b7c7ec9df42f0c7d extends Template
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
<div class=\"card-header mx-5 mb-2\">
    <h3 class=\"card-title d-flex align-items-center \">
        <span class=\"status rounded-1 me-1\">
            <i class=\"ti ti-device-laptop\"></i>
            ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Model", "datainjection"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["model_name"] ?? null), "html", null, true);
        yield "
        </span>
        </h3>
</div>
<div class=\"card p-3 my-5\">
    <div class=\"hr-text mt-5 mb-5\">
        <i class=\"fa-2x ti ti-chart-bar\"></i>
        <span>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import progress", "datainjection"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"progress\" role=\"progressbar\" aria-label=";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection of the file", "datainjection"), "html", null, true);
        yield " aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"height: 20px;\">
        <div class=\"progress-bar progress-bar-striped bg-info\" style=\"width: 0%; height: 20px;\">
            ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection of the file", "datainjection"), "html", null, true);
        yield "
        </div>
    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/clientinjection_injection.html.twig";
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
        return array (  71 => 44,  66 => 42,  61 => 40,  49 => 33,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/clientinjection_injection.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/clientinjection_injection.html.twig");
    }
}
