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

/* pages/login.html.twig */
class __TwigTemplate_b99744c759c26098153fdf1baa8f8a81 extends Template
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

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "layout/page_card_notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layout/page_card_notlogged.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/login.php"), "html", null, true);
        yield "\" method=\"post\" autocomplete=\"off\" data-submit-once>
        <input type=\"hidden\" name=\"noAUTO\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noAuto"] ?? null), "html", null, true);
        yield "\"/>
        <input type=\"hidden\" name=\"redirect\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect"] ?? null), "html", null, true);
        yield "\"/>
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\"/>
        ";
        // line 40
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["text_login"] ?? null)) > 0)) {
            // line 41
            yield "            <div class=\"rich_text_container text-center\">
                ";
            // line 42
            yield $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["text_login"] ?? null));
            yield "
            </div>
        ";
        }
        // line 45
        yield "        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"card-header mb-4\">
                    <h2 class=\"mx-auto\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login to your account"), "html", null, true);
        yield "</h2>
                </div>
                <div class=\"mb-3\">
                    <input type=\"text\" placeholder=\"Login\" class=\"form-control\" id=\"login_name\" name=\"login_name\" placeholder=\"\" tabindex=\"1\"/>
                </div>
                <div class=\"mb-4\">
                  <input type=\"password\"  placeholder=\"Password\"  class=\"form-control\" id=\"login_password\" name=\"login_password\" placeholder=\"\" autocomplete=\"off\" tabindex=\"2\"/>
                </div>


                ";
        // line 58
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"dropdown_auth";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Login source"), "html", null, true);
            yield "</label>
                        ";
            // line 61
            yield ($context["auth_dropdown_login"] ?? null);
            yield "
                    </div>
                ";
        }
        // line 64
        yield "\t\t
\t\t ";
        // line 65
        if ((($tmp = ($context["show_lost_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                            <span class=\"ms-auto form-label-description forgot_password ";
            yield (((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\">
                                <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/lostpassword.php?lostpassword=1"), "html", null, true);
            yield "\">
                                    ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Forgotten password?"), "html", null, true);
            yield "
                                </a>
                            </span>
                            ";
            // line 71
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("display_login_source")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "                                <script>
                                    \$(() => {
                                        if (\$('select[name=\"auth\"]').val() === 'local') {
                                            \$('.forgot_password').removeClass('d-none');
                                        }
                                        \$('select[name=\"auth\"]').on('change', function () {
                                            if (\$(this).val() === 'local') {
                                                \$('.forgot_password').removeClass('d-none');
                                            } else {
                                                \$('.forgot_password').addClass('d-none');
                                            }
                                        });
                                    });
                                </script>
                            ";
            }
            // line 87
            yield "                        ";
        }
        // line 88
        yield "

                ";
        // line 90
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_time")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                    <div class=\"mb-2\">
                        <label class=\"form-check\" for=\"login_remember\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"login_remember\" name=\"login_remember\" ";
            // line 93
            yield (((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("login_remember_default")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield "/>
                            <span class=\"form-check-label\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remember me"), "html", null, true);
            yield "</span>
                        </label>
                    </div>
                ";
        }
        // line 98
        yield "
                <div class=\"form-footer\">
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary w-100\" tabindex=\"3\">
                        ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sign in"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
\t
\t<div>&nbsp;</div>

\t<p align=\"center\">
\t<a href=\"https://kino.co.id/\" target=\"_blank\" rel=\"noopener noreferrer\">
  Copyright © <span id=\"year\"></span> PT Kino Indonesia Tbk.
\t</a>
\t</p>

\t<script>
  document.getElementById(\"year\").textContent = new Date().getFullYear();
\t</script>

            ";
        // line 118
        if ((($tmp = ($context["right_panel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                <div class=\"col-auto px-2 text-center\">
                    ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_LOGIN")), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 123
        yield "        </div>
        ";
        // line 124
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_public_faq")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "            <div class=\"text-center mt-4 border-top\">
                <a class=\"btn btn-outline-secondary mt-4\" href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/helpdesk.faq.php"), "html", null, true);
            yield "\">
                    <i class=\"ti ti-help\"></i>&nbsp;
                    ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("FAQ"), "html", null, true);
            yield "
                </a>
            </div>
        ";
        }
        // line 132
        yield "    </form>
";
        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 136
        yield "    <script type=\"text/javascript\">
        \$(function () {
            \$('#login_name').focus();
        });
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/login.html.twig";
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
        return array (  254 => 136,  247 => 135,  241 => 132,  234 => 128,  229 => 126,  226 => 125,  224 => 124,  221 => 123,  215 => 120,  212 => 119,  210 => 118,  190 => 101,  185 => 98,  178 => 94,  174 => 93,  170 => 91,  168 => 90,  164 => 88,  161 => 87,  144 => 72,  142 => 71,  136 => 68,  132 => 67,  127 => 66,  125 => 65,  122 => 64,  116 => 61,  110 => 60,  107 => 59,  105 => 58,  92 => 48,  87 => 45,  81 => 42,  78 => 41,  76 => 40,  72 => 39,  68 => 38,  64 => 37,  59 => 36,  52 => 35,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/login.html.twig", "/var/www/html/glpi/templates/pages/login.html.twig");
    }
}
