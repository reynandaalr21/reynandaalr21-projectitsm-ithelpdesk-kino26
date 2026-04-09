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

/* components/itilobject/fields/global_validation.html.twig */
class __TwigTemplate_0a4b9c94f7dfad6beda75ae93b06ca1b extends Template
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
";
        // line 33
        $context["rand"] = Html::sanitizeDomId(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 34
        yield "
";
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 35)->unwrap();
        // line 36
        yield "
";
        // line 37
        $context["validation"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 37);
        // line 38
        yield "
";
        // line 39
        if ((($tmp =  !(null === ($context["validation"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "   ";
            $context["create_right_val"] = Twig\Extension\CoreExtension::constant("CREATE");
            // line 41
            yield "   ";
            $context["validation_right"] = "validate";
            // line 42
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 42) == "Ticket")) {
                // line 43
                yield "      ";
                if (((($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                    // line 44
                    yield "         ";
                    $context["create_right_val"] = Twig\Extension\CoreExtension::constant("TicketValidation::CREATEINCIDENT");
                    // line 45
                    yield "         ";
                    $context["validation_right"] = "validate_incident";
                    // line 46
                    yield "      ";
                } elseif (((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                    // line 47
                    yield "         ";
                    $context["create_right_val"] = Twig\Extension\CoreExtension::constant("TicketValidation::CREATEREQUEST");
                    // line 48
                    yield "         ";
                    $context["validation_right"] = "validate_request";
                    // line 49
                    yield "      ";
                }
                // line 50
                yield "   ";
            }
            // line 51
            yield "   ";
            $context["can_create"] = Session::haveRight($this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["validation"] ?? null), "rightname"), ($context["create_right_val"] ?? null));
            // line 52
            yield "
   ";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "      ";
                if ((($tmp = ($context["can_create"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "         ";
                    $context["required"] = [];
                    // line 56
                    yield "         ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 56), "isMandatoryField", ["_add_validation"], "method", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 57
                        yield "            ";
                        $context["required"] = ["required" => true];
                        // line 60
                        yield "         ";
                    }
                    // line 61
                    yield "
         ";
                    // line 62
                    yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 62, $this->getSourceContext())->macro_field(...["_add_validation", CoreExtension::getAttribute($this->env, $this->source,                     // line 64
($context["validation"] ?? null), "dropdownValidator", [Twig\Extension\CoreExtension::merge(["prefix" => "_validation_targets[0]", "entity" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,                     // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["entities_id"] ?? null) : null), "itemtype_target" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 67
($context["params"] ?? null), "_validation_targets", [], "array", false, true, false, 67), 0, [], "array", false, true, false, 67), "itemtype_target", [], "array", true, true, false, 67) &&  !(null === (($_v3 = (($_v4 = (($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["_validation_targets"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[0] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["itemtype_target"] ?? null) : null)))) ? ((($_v6 = (($_v7 = (($_v8 = ($context["params"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["_validation_targets"] ?? null) : null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[0] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["itemtype_target"] ?? null) : null)) : ("")), "items_id_target" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 68
($context["params"] ?? null), "_validation_targets", [], "array", false, true, false, 68), 0, [], "array", false, true, false, 68), "items_id_target", [], "array", true, true, false, 68) &&  !(null === (($_v9 = (($_v10 = (($_v11 = ($context["params"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["_validation_targets"] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[0] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["items_id_target"] ?? null) : null)))) ? ((($_v12 = (($_v13 = (($_v14 = ($context["params"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["_validation_targets"] ?? null) : null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[0] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["items_id_target"] ?? null) : null)) : ("")), "groups_id" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 69
($context["params"] ?? null), "_validation_targets", [], "array", false, true, false, 69), 0, [], "array", false, true, false, 69), "groups_id", [], "array", true, true, false, 69) &&  !(null === (($_v15 = (($_v16 = (($_v17 = ($context["params"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["_validation_targets"] ?? null) : null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[0] ?? null) : null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["groups_id"] ?? null) : null)))) ? ((($_v18 = (($_v19 = (($_v20 = ($context["params"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["_validation_targets"] ?? null) : null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[0] ?? null) : null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["groups_id"] ?? null) : null)) : ("")), "users_id_requester" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 70
($context["params"] ?? null), "_users_id_requester", [], "array", true, true, false, 70) &&  !(null === (($_v21 = ($context["params"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["_users_id_requester"] ?? null) : null)))) ? ((($_v22 = ($context["params"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["_users_id_requester"] ?? null) : null)) : ("")), "right" =>                     // line 71
($context["validation_right"] ?? null), "display" => false, "disabled" => (!                    // line 73
($context["canupdate"] ?? null)), "readonly" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 74
($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 74), "isReadonlyField", ["_add_validation"], "method", false, false, false, 74), "rand" =>                     // line 75
($context["rand"] ?? null)],                     // line 76
($context["required"] ?? null))], "method", false, false, false, 64), __("Approval request"),                     // line 78
($context["field_options"] ?? null)]);
                    // line 79
                    yield "

         ";
                    // line 82
                    yield "         ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 82, $this->getSourceContext())->macro_dropdownField(...["ValidationStep", "_validationsteps_id", "", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("ValidationStep"), Twig\Extension\CoreExtension::merge(["rand" =>                     // line 88
($context["rand"] ?? null), "value" => CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("ValidationStep::getDefault"), "id", [], "any", false, false, false, 89)],                     // line 90
($context["field_options"] ?? null))]);
                    // line 91
                    yield "

         <script type=\"text/javascript\">
            // --- show/hide validation step field depending on validation type seleted
            \$(
                () => {
                    const validationstep_wrapper = \$('#dropdown__validationsteps_id";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "').closest('.form-field');
                    validationstep_wrapper.hide();
                }
            );

            \$(\"#dropdown__validation_targets_0__validatortype_";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "\").on(
                'change',
                function() {
                   const validationstep_wrapper = \$('#dropdown__validationsteps_id";
                    // line 105
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                    yield "').closest('.form-field');
                   const validation_activated = \$(this).val() !== '0';
                   validationstep_wrapper.toggle(validation_activated);
                }
            );
         </script>

         <input type=\"hidden\" name=\"_add_validation\" value=\"";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = ($context["params"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["_add_validation"] ?? null) : null), "html", null, true);
                    yield "\" />
      ";
                }
                // line 114
                yield "   ";
            } else {
                // line 115
                yield "        ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["global_validation"], "method", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 116
                    yield "            ";
                    yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 116, $this->getSourceContext())->macro_htmlField(...["global_validation", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("TicketValidation::getStatus", [(($_v24 = CoreExtension::getAttribute($this->env, $this->source,                     // line 118
($context["item"] ?? null), "fields", [], "any", false, false, false, 118)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["global_validation"] ?? null) : null), true]), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILValidation"),                     // line 120
($context["field_options"] ?? null)]);
                    // line 121
                    yield "
        ";
                }
                // line 123
                yield "   ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/fields/global_validation.html.twig";
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
        return array (  196 => 123,  192 => 121,  190 => 120,  189 => 118,  187 => 116,  184 => 115,  181 => 114,  176 => 112,  166 => 105,  160 => 102,  152 => 97,  144 => 91,  142 => 90,  141 => 88,  139 => 82,  135 => 79,  133 => 78,  132 => 76,  131 => 75,  130 => 74,  129 => 73,  128 => 71,  127 => 70,  126 => 69,  125 => 68,  124 => 67,  123 => 66,  122 => 64,  121 => 62,  118 => 61,  115 => 60,  112 => 57,  109 => 56,  106 => 55,  103 => 54,  101 => 53,  98 => 52,  95 => 51,  92 => 50,  89 => 49,  86 => 48,  83 => 47,  80 => 46,  77 => 45,  74 => 44,  71 => 43,  68 => 42,  65 => 41,  62 => 40,  60 => 39,  57 => 38,  55 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields/global_validation.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields/global_validation.html.twig");
    }
}
