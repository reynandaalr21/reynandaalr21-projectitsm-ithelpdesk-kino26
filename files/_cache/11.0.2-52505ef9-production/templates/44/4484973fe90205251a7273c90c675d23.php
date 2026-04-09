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

/* __string_template__8389a4e4f57275eed605b9ef52d27048 */
class __TwigTemplate_b67025b78022dd15eb0cb2a5ac215bb7 extends Template
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
        // line 1
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                <div class=\"d-flex justify-content-center\">
                    ";
        // line 3
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 3, $this->getSourceContext())->macro_dropdownArrayField(...["condition", CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "condition", [], "any", false, false, false, 3), ($context["conditions"] ?? null), ($context["label"] ?? null), ["on_change" => (((("reloadTab(\"start=0&inherited=" . CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["p"] ?? null), "inherited", [], "any", false, false, false, 4)) . "&childrens=") . CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "childrens", [], "any", false, false, false, 4)) . "&condition=\" + this.value)")]]);
        // line 5
        yield "
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__8389a4e4f57275eed605b9ef52d27048";
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
        return array (  51 => 5,  49 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__8389a4e4f57275eed605b9ef52d27048", "");
    }
}
