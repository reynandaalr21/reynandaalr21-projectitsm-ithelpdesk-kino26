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

/* /components/itilobject/itilsatisfaction.html.twig */
class __TwigTemplate_bbaae58d91e5c604324cfe4669798baa extends Template
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
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 33)->unwrap();
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        if (array_key_exists("url", $context)) {
            // line 38
            yield "        ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 38, $this->getSourceContext())->macro_htmlField(...["", (((("<a href=\"" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(            // line 40
($context["url"] ?? null))) . "\">") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null))) . "</a>"), __("External survey"), ["full_width" => true]]);
            // line 45
            yield "

    ";
        } else {
            // line 48
            yield "        ";
            if ((($tmp = ($context["expired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "            ";
                $context["message"] = __("Satisfaction survey expired.");
                // line 50
                yield "        ";
            } else {
                // line 51
                yield "            ";
                $context["message"] = __("After 12 hours, you can no longer modify your response.");
                // line 52
                yield "        ";
            }
            // line 53
            yield "        ";
            yield $macros["alerts"]->getTemplateForMacro("macro_alert_info", $context, 53, $this->getSourceContext())->macro_alert_info(...[($context["message"] ?? null)]);
            yield "
        ";
            // line 54
            if ((Twig\Extension\CoreExtension::testEmpty((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["date_answered"] ?? null) : null)) && ($context["expired"] ?? null))) {
                // line 55
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 55, $this->getSourceContext())->macro_htmlField(...["", "", __("No response given"), ["full_width" => true]]);
                // line 62
                yield "
        ";
            } else {
                // line 64
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 64, $this->getSourceContext())->macro_hiddenField(...[CoreExtension::getAttribute($this->env, $this->source,                 // line 65
($context["parent_item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 65), (($_v1 = CoreExtension::getAttribute($this->env, $this->source,                 // line 66
($context["parent_item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null), "", ["full_width" => true]]);
                // line 71
                yield "

            ";
                // line 73
                $context["select_dom"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 74
                    yield "                <select id=\"satisfaction_data\" name=\"satisfaction\">
                    ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, ($context["max_rate"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 76
                        yield "                        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "\" ";
                        if (($context["i"] == (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["satisfaction"] ?? null) : null))) {
                            yield " selected ";
                        }
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    yield "                </select>
                <div class=\"rateit\" id=\"stars\"></div>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 81
                yield "
            ";
                // line 82
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 82, $this->getSourceContext())->macro_htmlField(...["satisfaction",                 // line 84
($context["select_dom"] ?? null), Twig\Extension\CoreExtension::sprintf(__("Satisfaction with the resolution of the %s"), CoreExtension::getAttribute($this->env, $this->source,                 // line 85
($context["parent_item"] ?? null), "getTypeName", [1], "method", false, false, false, 85)), ["full_width" => true, "input_class" => "col-xxl-7 text-start"]]);
                // line 90
                yield "

            ";
                // line 92
                yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 92, $this->getSourceContext())->macro_textareaField(...["comment", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,                 // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()), ["full_width" => true, "readonly" =>                 // line 98
($context["expired"] ?? null)]]);
                // line 100
                yield "

            ";
                // line 102
                if (((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["date_answered"] ?? null) : null) > 0)) {
                    // line 103
                    yield "
                ";
                    // line 104
                    yield $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 104, $this->getSourceContext())->macro_datetimeField(...["date_answered", (($_v5 = CoreExtension::getAttribute($this->env, $this->source,                     // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["date_answered"] ?? null) : null), __("Response date to the satisfaction survey."), ["full_width" => true, "readonly" => true]]);
                    // line 112
                    yield "

            ";
                }
                // line 115
                yield "
            <script>
                \$(function() {
                    \$('#stars').rateit({
                        value: ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["satisfaction"] ?? null) : null), "html", null, true);
                yield ",
                        min: 0,
                        max: ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_rate"] ?? null), "html", null, true);
                yield ",
                        step: 1,
                        backingfld: '#satisfaction_data',
                        ispreset: true,
                        resetable: false
                    });
                });
            </script>

            ";
                // line 130
                if ((($tmp =  !($context["expired"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 131
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
                    yield "
            ";
                }
                // line 133
                yield "        ";
            }
            // line 134
            yield "    ";
        }
        // line 135
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/components/itilobject/itilsatisfaction.html.twig";
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
        return array (  213 => 135,  210 => 134,  207 => 133,  201 => 131,  199 => 130,  187 => 121,  182 => 119,  176 => 115,  171 => 112,  169 => 106,  168 => 104,  165 => 103,  163 => 102,  159 => 100,  157 => 98,  156 => 94,  155 => 92,  151 => 90,  149 => 85,  148 => 84,  147 => 82,  144 => 81,  138 => 78,  123 => 76,  119 => 75,  116 => 74,  114 => 73,  110 => 71,  108 => 66,  107 => 65,  105 => 64,  101 => 62,  98 => 55,  96 => 54,  91 => 53,  88 => 52,  85 => 51,  82 => 50,  79 => 49,  76 => 48,  71 => 45,  69 => 40,  67 => 38,  64 => 37,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "/components/itilobject/itilsatisfaction.html.twig", "/var/www/html/glpi/templates/components/itilobject/itilsatisfaction.html.twig");
    }
}
