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

/* @datainjection/model_validation_form.html.twig */
class __TwigTemplate_a5cadebfa7ede8da93459872d7228414 extends Template
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
<form method=\"post\" name=\"form\" action=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
    <div class=\"hr-text mt-5 mb-5\">
        <i class=\"fa-2x ti ti-square-check\"></i>
        <span>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Validation", "datainjection"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"tab_cadre_fixe\">
        <div class=\"tab_bg_1 text-center\">
            <input type=\"submit\" class=\"btn btn-primary\" name=\"validate\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Validate the model", "datainjection"), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        </div>
    </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/model_validation_form.html.twig";
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
        return array (  66 => 38,  62 => 37,  55 => 33,  49 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/model_validation_form.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/model_validation_form.html.twig");
    }
}
