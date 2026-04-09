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

/* @datainjection/model_advanced_form.html.twig */
class __TwigTemplate_0096620a87a4722b08653570fc903253 extends Template
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
<form name=\"form\" method=\"post\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
        yield "\">
    <div id=\"tabsbody\">
        <div class=\"row\">
            <div class=\"hr-text mt-5 mb-5\">
                <i class=\"fa-2x ti ti-template\"></i>
                <span>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type_name"] ?? null), "html", null, true);
        yield "</span>
            </div>
            ";
        // line 45
        yield "            ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 46, $this->getSourceContext())->macro_htmlField(...["", ($context["status_label"] ?? null), __("Model status", "datainjection"), ($context["field_options"] ?? null)]);
            yield "
                ";
            // line 47
            yield $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 47, $this->getSourceContext())->macro_nullField(...[]);
            yield "
            ";
        }
        // line 49
        yield "
            ";
        // line 50
        yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 50, $this->getSourceContext())->macro_hiddenField(...["users_id", ($context["session_user_id"] ?? null), "", ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 53
        yield "            ";
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 53, $this->getSourceContext())->macro_textField(...["name", (($_v0 = ($context["values"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null), __("Name"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 55
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 55, $this->getSourceContext())->macro_dropdownYesNo(...["is_private", (($_v1 = ($context["values"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_private"] ?? null) : null), __("Visibility"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 57
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 57, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", (($_v2 = ($context["values"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["entities_id"] ?? null) : null), __("Entity"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 59, $this->getSourceContext())->macro_dropdownYesNo(...["is_recursive", (($_v3 = ($context["values"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["is_recursive"] ?? null) : null), __("Child entities"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 61
        if ((((($_v4 = ($context["values"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["step"] ?? null) : null) == "") || ((($_v5 = ($context["values"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["step"] ?? null) : null) == ($context["initial_step"] ?? null)))) {
            // line 62
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 62, $this->getSourceContext())->macro_dropdownArrayField(...["itemtype", (($_v6 = ($context["values"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["itemtype"] ?? null) : null), ($context["injection_types"] ?? null), __("Type of data to import", "datainjection"), ($context["field_options"] ?? null)]);
            yield "
            ";
        } else {
            // line 64
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 64, $this->getSourceContext())->macro_htmlField(...["itemtype", (($_v7 = ($context["values"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["itemtype"] ?? null) : null), __("Type of data to import", "datainjection"), ($context["field_options"] ?? null)]);
            yield "
            ";
        }
        // line 66
        yield "
            ";
        // line 67
        yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 67, $this->getSourceContext())->macro_textareaField(...["comment", (($_v8 = ($context["values"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["comment"] ?? null) : null), __("Comments"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 69
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 69, $this->getSourceContext())->macro_dropdownYesNo(...["behavior_add", (($_v9 = ($context["values"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["behavior_add"] ?? null) : null), __("Allow lines creation", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 71, $this->getSourceContext())->macro_dropdownYesNo(...["behavior_update", (($_v10 = ($context["values"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["behavior_update"] ?? null) : null), __("Allow lines update", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 74
        yield "            <div class=\"hr-text mt-5 mb-5\">
                <i class=\"fa-2x ti ti-adjustments-cog\"></i>
                <span>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Advanced options", "datainjection"), "html", null, true);
        yield "</span>
            </div>

            ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 79, $this->getSourceContext())->macro_dropdownYesNo(...["can_add_dropdown", (($_v11 = ($context["values"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["can_add_dropdown"] ?? null) : null), __("Allow creation of dropdowns (Except Entity)", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 81
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 81, $this->getSourceContext())->macro_dropdownArrayField(...["date_format", (($_v12 = ($context["values"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["date_format"] ?? null) : null), ($context["date_formats"] ?? null), __("Dates format", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 83, $this->getSourceContext())->macro_dropdownYesNo(...["can_overwrite_if_not_empty", (($_v13 = ($context["values"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["can_overwrite_if_not_empty"] ?? null) : null), __("Allow update of existing fields", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 85
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 85, $this->getSourceContext())->macro_dropdownArrayField(...["float_format", (($_v14 = ($context["values"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["float_format"] ?? null) : null), ($context["float_formats"] ?? null), __("Float format", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 87
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 87, $this->getSourceContext())->macro_dropdownArrayField(...["port_unicity", (($_v15 = ($context["values"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["port_unicity"] ?? null) : null), ($context["port_unicity_values"] ?? null), __("Port unicity criteria", "datainjection"), ($context["field_options"] ?? null)]);
        yield "

            ";
        // line 89
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 89, $this->getSourceContext())->macro_dropdownYesNo(...["replace_multiline_value", ($context["replace_multiline_value"] ?? null), __("Replacing the value of multiline text fields", "datainjection"), ($context["field_options"] ?? null)]);
        yield "
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@datainjection/model_advanced_form.html.twig";
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
        return array (  177 => 89,  172 => 87,  167 => 85,  162 => 83,  157 => 81,  152 => 79,  146 => 76,  142 => 74,  137 => 71,  132 => 69,  127 => 67,  124 => 66,  118 => 64,  112 => 62,  110 => 61,  105 => 59,  100 => 57,  95 => 55,  89 => 53,  84 => 50,  81 => 49,  76 => 47,  71 => 46,  68 => 45,  63 => 42,  55 => 37,  52 => 36,  50 => 31,  47 => 30,  45 => 29,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@datainjection/model_advanced_form.html.twig", "/var/www/html/glpi/marketplace/datainjection/templates/model_advanced_form.html.twig");
    }
}
