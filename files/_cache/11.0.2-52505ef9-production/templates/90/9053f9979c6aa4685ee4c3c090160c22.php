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

/* @datainjection/clientinjection_result.html.twig */
class __TwigTemplate_a3c7042874810fb5bdd26dc79c48dda6 extends Template
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
  <form method=\"post\" action=";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["from_url"] ?? null), "html", null, true);
        yield ">
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
    <div class=\"hr-text mt-5 mb-5\">
        <i class=\"fa-2x ti ti-chart-bar\"></i>
        <span>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection's results", "datainjection"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"center\">
      ";
        // line 36
        if ((($tmp = ($context["ok"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "        <i class=\"ti ti-check\" style=\"color: #28a745;\"></i>
        ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection successful", "datainjection"), "html", null, true);
            yield "
      ";
        } else {
            // line 40
            yield "        <i class=\"ti ti-x\" style=\"color: #dc3545;\"></i>
        ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection encounters errors", "datainjection"), "html", null, true);
            yield "
      ";
        }
        // line 43
        yield "    </div>

    <div class=\"center mt-2\">
      <div class=\"d-flex justify-content-center gap-3\">
        <a href=\"#\" onclick=\"var w = window.open('";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popup_url"] ?? null), "html", null, true);
        yield "', 'glpipopup', 'height=400, width=1000, top=100, left=100, scrollbars=yes');w.focus();\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("See the log", "datainjection"), "html", null, true);
        yield "\">
          <h2><i class=\"fa-2x ti ti-file-search\"></i></h2>
        </a>

        ";
        // line 51
        if ((($tmp = ($context["has_pdf"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "          <a href=\"#\" onclick=\"location.href='export.pdf.php?models_id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["model_id"] ?? null), "html", null, true);
            yield "'\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Export rapport in PDF", "datainjection"), "html", null, true);
            yield "\">
            <h2><i class=\"fa-2x ti ti-file-type-pdf\"></i></h2>
          </a>
        ";
        }
        // line 56
        yield "
        ";
        // line 57
        if ((($tmp = ($context["has_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "          <a href=\"#\" onclick=\"location.href='export.csv.php'\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Export the log", "datainjection"), "html", null, true);
            yield "\">
            <h2><i class=\"fa-2x ti ti-file-type-csv\" style=\"color: #dc3545;\"></i></h2>
          </a>
        ";
        }
        // line 62
        yield "      </div>
    </div>

    <div class=\"d-flex justify-content-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"finish\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Finish", "datainjection"), "html", null, true);
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
        return "@datainjection/clientinjection_result.html.twig";
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
        return array (  125 => 66,  119 => 62,  111 => 58,  109 => 57,  106 => 56,  96 => 52,  94 => 51,  85 => 47,  79 => 43,  74 => 41,  71 => 40,  66 => 38,  63 => 37,  61 => 36,  55 => 33,  49 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/clientinjection_result.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/clientinjection_result.html.twig");
    }
}
