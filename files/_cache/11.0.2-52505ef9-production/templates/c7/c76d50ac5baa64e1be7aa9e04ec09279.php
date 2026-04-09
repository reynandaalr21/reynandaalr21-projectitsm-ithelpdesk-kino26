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

/* @datainjection/log_results.html.twig */
class __TwigTemplate_136bc60b994a84cf1480c3cd0cffeb2c extends Template
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
<div class=\"log-results\">

  ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["logresults"] ?? null), ($context["SUCCESS"] ?? null), [], "array", true, true, false, 31)) {
            // line 32
            yield "    <div>
      <div class=\"hr-text mt-5 mb-5\">
          <i class=\"fa-2x ti ti-progress-check\"></i>
          <span>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Array of successful injections", "datainjection"), "html", null, true);
            yield "</span>
      </div>
      <table class=\"table table-striped card-table table-hover\">
        <thead>
          <tr>
            <th></th>
            <th>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Line", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Import", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection type", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Object Identifier", "datainjection"), "html", null, true);
            yield "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = ($context["logresults"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["SUCCESS"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 49
                yield "          <tr>
            <td><i class=\"ti ti-circle-check\" style=\"color: #28a745;\"></i></td>
            <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "line", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>
            <td>";
                // line 52
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_message", [], "any", false, false, false, 52), "html", null, true));
                yield "</td>
            <td>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "type", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
            <td>";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "url", [], "any", false, false, false, 54);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 61
        yield "
  ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["logresults"] ?? null), ($context["FAILED"] ?? null), [], "array", true, true, false, 62)) {
            // line 63
            yield "    <div>
      <div class=\"hr-text mt-5 mb-5\">
          <i class=\"fa-2x ti ti-progress-x\"></i>
          <span>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Array of failed injections", "datainjection"), "html", null, true);
            yield "</span>
      </div>
      <table class=\"table table-striped card-table table-hover\">
        <thead>
          <tr>
            <th></th>
            <th>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Line", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data check", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Import", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection type", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Object Identifier", "datainjection"), "html", null, true);
            yield "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = ($context["logresults"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["FAILED"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 81
                yield "          <tr>
            <td><i class=\"ti ti-circle-x\" style=\"color: #dc3545;\"></i></td>
            <td>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "line", [], "any", false, false, false, 83), "html", null, true);
                yield "</td>
            <td>";
                // line 84
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "check_message", [], "any", false, false, false, 84), "html", null, true));
                yield "</td>
            <td>";
                // line 85
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_message", [], "any", false, false, false, 85), "html", null, true));
                yield "</td>
            <td>";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "type", [], "any", false, false, false, 86), "html", null, true);
                yield "</td>
            <td>";
                // line 87
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "url", [], "any", false, false, false, 87);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 94
        yield "
  ";
        // line 95
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["resume"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "    <div>
      <div class=\"hr-text mt-5 mb-5\">
          <i class=\"fa-2x ti ti-report\"></i>
          <span>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global report", "datainjection"), "html", null, true);
            yield "</span>
      </div>
      <p><em>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of lines processed", "datainjection"), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nblines"] ?? null), "html", null, true);
            yield "</em></p>
      <table class=\"table table-striped card-table table-hover\">
        <thead>
          <tr>
            <th></th>
            <th>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Import", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Injection type", "datainjection"), "html", null, true);
            yield "</th>
            <th>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Counter", "datainjection"), "html", null, true);
            yield "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["resume"] ?? null));
            foreach ($context['_seq'] as $context["status"] => $context["types"]) {
                // line 113
                yield "          ";
                $context["rowspan"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["types"]);
                // line 114
                yield "          <tr>
            <td rowspan=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowspan"] ?? null), "html", null, true);
                yield "\">
              ";
                // line 116
                if (($context["status"] == ($context["SUCCESS"] ?? null))) {
                    // line 117
                    yield "                <i class=\"ti ti-circle-check\" style=\"color: #28a745;\"></i>
              ";
                } else {
                    // line 119
                    yield "                <i class=\"ti ti-circle-x\" style=\"color: #dc3545;\"></i>
              ";
                }
                // line 121
                yield "            </td>
            <td rowspan=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowspan"] ?? null), "html", null, true);
                yield "\">
              ";
                // line 123
                $context["label"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PluginDatainjectionCommonInjectionLib::getLogLabel", [$context["status"]]);
                // line 124
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                yield "
            </td>
            ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["types"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["type"] => $context["value"]) {
                    // line 127
                    yield "              ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 128
                        yield "                <tr>
              ";
                    }
                    // line 130
                    yield "              <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield "</td>
              <td>";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "</td>
              ";
                    // line 132
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 133
                        yield "                </tr>
              ";
                    }
                    // line 135
                    yield "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['type'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['status'], $context['types'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 142
        yield "
  <div class=\"mt-4 text-center\">
    <a href=\"javascript:window.close()\" class=\"btn btn-outline-danger\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "</a>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/log_results.html.twig";
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
        return array (  347 => 144,  343 => 142,  337 => 138,  330 => 136,  316 => 135,  312 => 133,  310 => 132,  306 => 131,  301 => 130,  297 => 128,  294 => 127,  277 => 126,  271 => 124,  269 => 123,  265 => 122,  262 => 121,  258 => 119,  254 => 117,  252 => 116,  248 => 115,  245 => 114,  242 => 113,  238 => 112,  231 => 108,  227 => 107,  223 => 106,  213 => 101,  208 => 99,  203 => 96,  201 => 95,  198 => 94,  192 => 90,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 81,  159 => 80,  152 => 76,  148 => 75,  144 => 74,  140 => 73,  136 => 72,  127 => 66,  122 => 63,  120 => 62,  117 => 61,  111 => 57,  102 => 54,  98 => 53,  94 => 52,  90 => 51,  86 => 49,  82 => 48,  75 => 44,  71 => 43,  67 => 42,  63 => 41,  54 => 35,  49 => 32,  47 => 31,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/log_results.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/log_results.html.twig");
    }
}
