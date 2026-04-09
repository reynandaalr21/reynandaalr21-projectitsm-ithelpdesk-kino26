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

/* pages/tools/reminder_planning.html.twig */
class __TwigTemplate_039f0bc5524dab1f50a0455e4fbc23a3 extends Template
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
        // line 32
        yield "
<img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["planning_img"] ?? null), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Reminder", 1), "html", null, true);
        yield "\">
<a id=\"reminder_";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v0 = ($context["val"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["reminders_id"] ?? null) : null) . ($context["rand"] ?? null)), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Reminder", (($_v1 = ($context["val"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["reminders_id"] ?? null) : null)), "html", null, true);
        yield "\">
    ";
        // line 35
        if (((($_v2 = ($context["val"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["users_id"] ?? null) : null) != $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) {
            // line 36
            yield "        <br>
        ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), __("By"), ($context["user_name"] ?? null)), "html", null, true);
            yield "
    ";
        }
        // line 39
        yield "</a>

";
        // line 41
        $context["recall"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["planning_recall"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "        <br>
        <span class=\"fw-bold\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Recall on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["planning_recall"] ?? null))), "html", null, true);
                yield "</span>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "
";
        // line 48
        $context["text"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["val"] ?? null), "transtext", [], "array", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["val"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["transtext"] ?? null) : null), (($_v4 = ($context["val"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["text"] ?? null) : null))) : ((($_v5 = ($context["val"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["text"] ?? null) : null)));
        // line 49
        yield "
";
        // line 50
        if ((($tmp = ($context["complete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "    <span>";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::getState", [(($_v6 = ($context["val"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["state"] ?? null) : null)]);
            yield "</span>
    <div class=\"event-description rich_text_container\">
        ";
            // line 53
            yield ($context["text"] ?? null);
            yield "
        ";
            // line 54
            yield ($context["recall"] ?? null);
            yield "
    </div>
";
        } else {
            // line 57
            yield "    ";
            $context["tooltip_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 58
                yield "        <span class=\"fw-bold\">";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Planning::getState", [(($_v7 = ($context["val"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["state"] ?? null) : null)]);
                yield "</span>
        <br>
        ";
                // line 60
                yield ($context["text"] ?? null);
                yield "
        ";
                // line 61
                yield ($context["recall"] ?? null);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "    ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [($context["tooltip_content"] ?? null), ["applyto" => (("reminder_" . (($_v8 =             // line 64
($context["val"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["reminders_id"] ?? null) : null)) . ($context["rand"] ?? null))]]);
        }
        // line 67
        yield "
";
        // line 68
        yield ($context["parent_link"] ?? null);
        yield "
<br>
<span>";
        // line 70
        yield ($context["parent_entity_badge"] ?? null);
        yield "</span>
<br>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/reminder_planning.html.twig";
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
        return array (  144 => 70,  139 => 68,  136 => 67,  133 => 64,  131 => 63,  125 => 61,  121 => 60,  115 => 58,  112 => 57,  106 => 54,  102 => 53,  96 => 51,  94 => 50,  91 => 49,  89 => 48,  86 => 47,  79 => 44,  76 => 43,  73 => 42,  71 => 41,  67 => 39,  62 => 37,  59 => 36,  57 => 35,  51 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/reminder_planning.html.twig", "/var/www/html/glpi/templates/pages/tools/reminder_planning.html.twig");
    }
}
