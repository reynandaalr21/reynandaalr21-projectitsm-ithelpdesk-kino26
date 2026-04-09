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

/* @datainjection/infoadditionnalinfo.html.twig */
class __TwigTemplate_d47421fe9dc92582e737a9bbfc462358 extends Template
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
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["infos"] ?? null)) > 0) || ($context["has_sample"] ?? null)) || ($context["comment"] ?? null))) {
            // line 30
            yield "    <div class=\"hr-text mt-2 mb-5\">
        <i class=\"fa-2x ti ti-file-download\"></i>
        <span>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((__("Complementary information", "datainjection") . " (") . __("Choose a file", "datainjection")) . ")"), "html", null, true);
            yield "</span>
    </div>

    ";
            // line 35
            if ((($tmp = ($context["has_sample"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "        <div class=\"text-center mt-3\">
            <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getFormURL", [], "method", false, false, false, 37), "html", null, true);
                yield "?sample=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getField", ["id"], "method", false, false, false, 37), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"ti ti-download\"></i> &nbsp;
                ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Download file sample", "datainjection"), "html", null, true);
                yield "
            </a>
        </div>
    ";
            }
            // line 43
            yield "
    ";
            // line 44
            if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "        <div class=\"text-center mt-3\">
            <p>";
                // line 46
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true));
                yield "</p>
        </div>
    ";
            }
            // line 49
            yield "
    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["infos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 51
                yield "        <div class=\"text-center mt-3\">
            ";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["self"] ?? null), "displayAdditionalInformation", [$context["info"], ($context["session_infos"] ?? null)], "method", false, false, false, 52);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/infoadditionnalinfo.html.twig";
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
        return array (  100 => 52,  97 => 51,  93 => 50,  90 => 49,  84 => 46,  81 => 45,  79 => 44,  76 => 43,  69 => 39,  62 => 37,  59 => 36,  57 => 35,  51 => 32,  47 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/infoadditionnalinfo.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/infoadditionnalinfo.html.twig");
    }
}
