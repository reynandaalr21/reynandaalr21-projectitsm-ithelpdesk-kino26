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

/* pages/admin/ldap.user_criteria.html.twig */
class __TwigTemplate_c64e97b5f4f05c1e73c822defc807df3 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["is_sync_mode"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "mode", [], "array", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["_request"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["mode"] ?? null) : null), 0)) : (0)) == Twig\Extension\CoreExtension::constant("AuthLDAP::ACTION_SYNCHRONIZE"));
        // line 37
        $context["is_expert_interface"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "interface", [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["_request"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["interface"] ?? null) : null), "simple")) : ("simple")) == Twig\Extension\CoreExtension::constant("AuthLDAP::EXPERT_INTERFACE"));
        // line 38
        $context["selected_authldaps_id"] = (($_v2 = ($context["_request"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["authldaps_id"] ?? null) : null);
        // line 39
        $context["selected_entity"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "entities_id", [], "array", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default((($_v3 = ($context["_request"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["entities_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")));
        // line 40
        yield "
<form method=\"get\" action=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/ldap.import.php"), "html", null, true);
        yield "\" data-submit-once>
    <div class=\"card\">
        <div class=\"card-header justify-content-between\">
            <h1 class=\"fs-2\">";
        // line 44
        yield (((($tmp = ($context["is_sync_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Synchronizing already imported users"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import new users"), "html", null, true)));
        yield "</h1>
            ";
        // line 45
        if ((($tmp = ($context["can_use_expert_interface"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                ";
            yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 46, $this->getSourceContext())->macro_sliderField(...["interface", ($context["is_expert_interface"] ?? null), (((($tmp = ($context["is_expert_interface"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (__("Expert mode")) : (__("Simple mode"))), ["no_value" => "simple", "yes_value" => "expert"]]);
            // line 49
            yield "
            ";
        }
        // line 51
        yield "        </div>
        <div class=\"card-body\">
            ";
        // line 54
        yield "            <div class=\"d-flex flex-wrap row\">
                ";
        // line 55
        if ((($tmp = ($context["has_multiple_servers"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 56, $this->getSourceContext())->macro_dropdownField(...["AuthLDAP", "authldaps_id", ($context["selected_authldaps_id"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AuthLDAP"), ["condition" => ["is_active" => 1], "display_emptychoice" => false]]);
            // line 59
            yield "
                ";
        }
        // line 61
        yield "                ";
        if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 62, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", ($context["selected_entity"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity"), ["entity" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveentities"), "add_field_class" => (((($tmp =             // line 64
($context["is_expert_interface"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : ("")), "add_field_attribs" => ["data-interface" => "simple"]]]);
            // line 68
            yield "
                ";
        }
        // line 70
        yield "
                ";
        // line 71
        yield $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 71, $this->getSourceContext())->macro_smallTitle(...[__("Search criteria for users")]);
        yield "
                ";
        // line 72
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 72, $this->getSourceContext())->macro_textField(...["basedn", (((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "basedn", [], "array", true, true, false, 72) &&  !(null === (($_v4 = ($context["_request"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["basedn"] ?? null) : null)))) ? ((($_v5 = ($context["_request"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["basedn"] ?? null) : null)) : ("")), __("BaseDN"), ["full_width" => true, "add_field_class" => (((($tmp =         // line 74
($context["is_expert_interface"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none")), "add_field_attribs" => ["data-interface" => "expert"]]]);
        // line 78
        yield "
                ";
        // line 79
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 79, $this->getSourceContext())->macro_textField(...["ldap_filter", (((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "ldap_filter", [], "array", true, true, false, 79) &&  !(null === (($_v6 = ($context["_request"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["ldap_filter"] ?? null) : null)))) ? ((($_v7 = ($context["_request"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["ldap_filter"] ?? null) : null)) : ("")), __("Search filter for users"), ["full_width" => true, "add_field_class" => (((($tmp =         // line 81
($context["is_expert_interface"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none")), "add_field_attribs" => ["data-interface" => "expert"]]]);
        // line 85
        yield "

                ";
        // line 87
        $context["simple_fields"] = ["login_field" => __("Login"), "sync_field" => (((__("Synchronization field") . " (") . (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["authldap"] ?? null), "fields", [], "any", false, true, false, 89), "sync_field", [], "array", true, true, false, 89) &&  !(null === (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["authldap"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["sync_field"] ?? null) : null)))) ? ((($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["authldap"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["sync_field"] ?? null) : null)) : (""))) . ")"), "email1_field" => _n("Email", "Emails", 1), "email2_field" => Twig\Extension\CoreExtension::sprintf(__("%1\$s %2\$s"), _n("Email", "Emails", 1), "2"), "email3_field" => Twig\Extension\CoreExtension::sprintf(__("%1\$s %2\$s"), _n("Email", "Emails", 1), "3"), "email4_field" => Twig\Extension\CoreExtension::sprintf(__("%1\$s %2\$s"), _n("Email", "Emails", 1), "4"), "realname_field" => __("Surname"), "firstname_field" => __("First name"), "phone_field" => _x("ldap", "Phone"), "phone2_field" => __("Phone 2"), "mobile_field" => __("Mobile phone"), "title_field" => _x("person", "Title"), "category_field" => _n("Category", "Categories", 1), "picture_field" => _n("Picture", "Pictures", 1)];
        // line 103
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["simple_fields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 104
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["authldap"] ?? null), "fields", [], "any", false, true, false, 104), $context["field"], [], "array", true, true, false, 104) &&  !Twig\Extension\CoreExtension::testEmpty((($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["authldap"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[$context["field"]] ?? null) : null)))) {
                // line 105
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 105, $this->getSourceContext())->macro_textField(...[(("criterias[" . $context["field"]) . "]"), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "criterias", [], "array", false, true, false, 105), $context["field"], [], "array", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default((($_v11 = (($_v12 = ($context["_request"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["criterias"] ?? null) : null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[$context["field"]] ?? null) : null), "")) : ("")), $context["label"], ["add_field_class" => (((($tmp =                 // line 106
($context["is_expert_interface"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : ("")), "add_field_attribs" => ["data-interface" => "simple"]]]);
                // line 110
                yield "
                    ";
            }
            // line 112
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['field'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "
                ";
        // line 114
        $context["updated_date_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 115
            yield "                    ";
            yield $macros["inputs"]->getTemplateForMacro("macro_datetime", $context, 115, $this->getSourceContext())->macro_datetime(...["begin_date", ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "begin_date", [], "array", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default((($_v13 = ($context["_request"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["begin_date"] ?? null) : null), null)) : (null)), ["maybeempty" => true, "clearable" => true]]);
            // line 118
            yield "
                    <span class=\"mx-3\">-></span>
                    ";
            // line 120
            yield $macros["inputs"]->getTemplateForMacro("macro_datetime", $context, 120, $this->getSourceContext())->macro_datetime(...["end_date", ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "end_date", [], "array", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default((($_v14 = ($context["_request"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["end_date"] ?? null) : null), null)) : (null)), ["maybeempty" => true, "clearable" => true]]);
            // line 123
            yield "
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 125, $this->getSourceContext())->macro_htmlField(...["", ($context["updated_date_fields"] ?? null), __("View updated users"), ["add_field_class" => (((($tmp =         // line 126
($context["is_expert_interface"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : ("")), "add_field_attribs" => ["data-interface" => "simple"]]]);
        // line 130
        yield "
            </div>
        </div>
        <div class=\"card-footer d-flex flex-row-reverse\">
            ";
        // line 134
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 134, $this->getSourceContext())->macro_hidden(...["action", ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "action", [], "array", true, true, false, 134)) ? (Twig\Extension\CoreExtension::default((($_v15 = ($context["_request"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["action"] ?? null) : null), "show")) : ("show"))]);
        yield "
            ";
        // line 135
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 135, $this->getSourceContext())->macro_hidden(...["mode", ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "mode", [], "array", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default((($_v16 = ($context["_request"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["mode"] ?? null) : null), Twig\Extension\CoreExtension::constant("AuthLDAP::ACTION_IMPORT"))) : (Twig\Extension\CoreExtension::constant("AuthLDAP::ACTION_IMPORT")))]);
        yield "
            ";
        // line 136
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 136, $this->getSourceContext())->macro_hidden(...["_in_modal", ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "_in_modal", [], "array", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default((($_v17 = ($context["_request"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["_in_modal"] ?? null) : null), "")) : (""))]);
        yield "
            ";
        // line 137
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 137, $this->getSourceContext())->macro_submit(...["search", _x("button", "Search"), 1]);
        yield "
        </div>
        <script>
            \$(() => {
                \$('input[name=\"interface\"]').on('change', (e) => {
                    const chkbox = \$(e.target);
                    const is_expert_mode = chkbox.prop('checked');
                    chkbox.closest('.form-field').find('> label').text(is_expert_mode ? '";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expert mode"), "js"), "html", null, true);
        yield "' : '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Simple mode"), "js"), "html", null, true);
        yield "');
                    chkbox.closest('form').find('.form-field[data-interface=\"expert\"]').toggleClass('d-none', !is_expert_mode);
                    chkbox.closest('form').find('.form-field[data-interface=\"simple\"]').toggleClass('d-none', is_expert_mode);
                    // Disable hidden fields
                    chkbox.closest('form').find('.form-field input').prop('disabled', false);
                    chkbox.closest('form').find('.form-field.d-none input').prop('disabled', true);
                }).trigger('change');
            });
        </script>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/ldap.user_criteria.html.twig";
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
        return array (  205 => 144,  195 => 137,  191 => 136,  187 => 135,  183 => 134,  177 => 130,  175 => 126,  173 => 125,  168 => 123,  166 => 120,  162 => 118,  159 => 115,  157 => 114,  154 => 113,  148 => 112,  144 => 110,  142 => 106,  140 => 105,  137 => 104,  132 => 103,  130 => 89,  129 => 87,  125 => 85,  123 => 81,  122 => 79,  119 => 78,  117 => 74,  116 => 72,  112 => 71,  109 => 70,  105 => 68,  103 => 64,  101 => 62,  98 => 61,  94 => 59,  91 => 56,  89 => 55,  86 => 54,  82 => 51,  78 => 49,  75 => 46,  73 => 45,  69 => 44,  63 => 41,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/ldap.user_criteria.html.twig", "/var/www/html/glpi/templates/pages/admin/ldap.user_criteria.html.twig");
    }
}
