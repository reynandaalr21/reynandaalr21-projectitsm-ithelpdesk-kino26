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

/* __string_template__10a6de9833969276b20e86cb549b2846 */
class __TwigTemplate_b5e271ff1c0ff25c074022b1674fba6d extends Template
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
        yield "            ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "
            ";
        // line 3
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 3, $this->getSourceContext())->macro_dropdownArrayField(...[CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["question"] ?? null), "getEndUserInputName", [], "method", false, false, false, 4), (((($tmp =  !        // line 5
($context["is_multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["checked_values"] ?? null))) : ("")),         // line 6
($context["values"] ?? null), "", ["no_label" => true, "values" =>         // line 10
($context["checked_values"] ?? null), "multiple" =>         // line 11
($context["is_multiple"] ?? null), "mb" => "", "aria_label" =>         // line 13
($context["label"] ?? null), "display_emptychoice" => (Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 14
($context["checked_values"] ?? null)) == 0)]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__10a6de9833969276b20e86cb549b2846";
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
        return array (  55 => 14,  54 => 13,  53 => 11,  52 => 10,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__10a6de9833969276b20e86cb549b2846", "");
    }
}
