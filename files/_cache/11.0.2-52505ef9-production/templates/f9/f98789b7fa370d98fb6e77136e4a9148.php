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

/* pages/helpdesk/index.html.twig */
class __TwigTemplate_2762ca170b2ce60667f8e9438400ea54 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "layout/page_skeleton.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["scene_left"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getHelpdeskSceneId", ["custom_helpdesk_home_scene_left"], "method", false, false, false, 35);
        // line 36
        $context["scene_right"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getHelpdeskSceneId", ["custom_helpdesk_home_scene_right"], "method", false, false, false, 36);
        // line 33
        $this->parent = $this->load("layout/page_skeleton.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        // line 42
        yield "    <div class=\"d-flex flex-column helpdesk-home-container force-full-width\">
        <div class=\"search-banner d-flex\">
            <div class=\"scene scene-left\">
                ";
        // line 45
        yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderScene(($context["scene_left"] ?? null));
        yield "
            </div>
            <div class=\"container-narrow search-banner-content\">
                <h1 class=\"text-center mb-0\" data-testid=\"home-title\">
                    ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getHelpdeskHomeTitle", [], "method", false, false, false, 49), "html", null, true);
        yield "
                </h1>

                ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "isHelpdeskSearchBarEnabled", [], "method", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                    <div id=\"search-overlay\" class=\"search-overlay bg-dark\"></div>
                    <div class=\"input-icon search-bar-container\">
                        <span class=\"input-icon-addon\">
                            <i class=\"ti ti-search\"></i>
                        </span>
                        <input
                            id=\"search-input\"
                            type=\"text\"
                            value=\"\"
                            class=\"form-control home-search\"
                            placeholder=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for knowledge base entries or forms"), "html", null, true);
            yield "\"
                            data-testid=\"home-search\"
                        >
                        <section
                            id=\"search-results\"
                            class=\"position-absolute search-result-container w-100 d-none\"
                            aria-label=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search results"), "html", null, true);
            yield "\"
                        >
                        </section>
                    </div>
                ";
        } else {
            // line 74
            yield "                    ";
            // line 75
            yield "                    <div class=\"search-bar-container-placeholder\"></div>
                ";
        }
        // line 77
        yield "            </div>
            <div class=\"scene scene-right\">
                ";
        // line 79
        yield $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderScene(($context["scene_right"] ?? null));
        yield "
            </div>
        </div>
        
\t<section class=\"tiles-banner\" aria-label=\"Quick Access\" data-testid=\"quick-access\">
            <div class=\"container-xl\">
                <table class=\"central\">
                </table>

                <div class=\"row\">                              
                <div class=\"col-12 col-sm-6 col-md-4 d-flex\">
                            <a class=\"card mx-1 my-2 flex-grow-1\" href=\"/glpi/ServiceCatalog\">
                                <section class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"aspect-ratio-1\">    
                                    <svg role=\"img\" width=\"70px\" height=\"70px\" class=\"flex-shrink-0\">
                                        <title>Request support</title>
                                        <use xlink:href=\"/glpi/lib/glpi-project/illustrations/glpi-illustrations-icons.svg#request-support\"></use>
                                    </svg>
                                </div>
                                        <div class=\"ms-4\">
                                            <h2 class=\"card-title mb-2 text-break\">
                                            Create a Ticket
                                            </h2>
                                            <div class=\"text-secondary remove-last-tinymce-margin\">
                                                <p>Go to our service catalog and pick a form to create a new ticket.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </a>
                        </div>
                                                                                            
                        <div class=\"col-12 col-sm-6 col-md-4 d-flex\">
                            <a class=\"card mx-1 my-2 flex-grow-1\" href=\"/glpi/front/ticket.php?is_deleted=0&as_map=0&browse=0&unpublished=1&criteria%5B0%5D%5Blink%5D=AND&criteria%5B0%5D%5Bfield%5D=7&criteria%5B0%5D%5Bsearchtype%5D=equals&criteria%5B0%5D%5Bvalue%5D=1&criteria%5B1%5D%5Blink%5D=OR&criteria%5B1%5D%5Bfield%5D=7&criteria%5B1%5D%5Bsearchtype%5D=equals&criteria%5B1%5D%5Bvalue%5D=8&criteria%5B2%5D%5Blink%5D=OR&criteria%5B2%5D%5Bfield%5D=7&criteria%5B2%5D%5Bsearchtype%5D=equals&criteria%5B2%5D%5Bvalue%5D=33&criteria%5B3%5D%5Blink%5D=OR&criteria%5B3%5D%5Bfield%5D=7&criteria%5B3%5D%5Bsearchtype%5D=equals&criteria%5B3%5D%5Bvalue%5D=46&criteria%5B4%5D%5Blink%5D=OR&criteria%5B4%5D%5Bfield%5D=7&criteria%5B4%5D%5Bsearchtype%5D=equals&criteria%5B4%5D%5Bvalue%5D=123&criteria%5B5%5D%5Blink%5D=OR&criteria%5B5%5D%5Bfield%5D=7&criteria%5B5%5D%5Bsearchtype%5D=equals&criteria%5B5%5D%5Bvalue%5D=124&params%5Bhide_criteria%5D=0&params%5Bhide_controls%5D=0&params%5Bshowmassiveactions%5D=1&itemtype=Ticket&start=0\">
                                <section class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"aspect-ratio-1\">      
                                    <svg role=\"img\" width=\"70px\" height=\"70px\" class=\"flex-shrink-0\">
                                        <title>Tickets</title>
                                        <use xlink:href=\"/glpi/lib/glpi-project/illustrations/glpi-illustrations-icons.svg#tickets\"></use>
                                    </svg>
                                </div>

                                        <div class=\"ms-4\">
                                            <h2 class=\"card-title mb-2 text-break\">
                                            See your tickets
                                            </h2>
                                            <div class=\"text-secondary remove-last-tinymce-margin\">
                                                <p>View all the tickets that you have created.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </a>
                        </div>
                    </div>
                </div>
        </section>

        <div class=\"tickets-banner\">
            <div class=\"container-xl\">
                ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["tabs"] ?? null), "showTabsContent", [], "method", false, false, false, 141), "html", null, true);
        yield "
            </div>
        </div>
    </div>

    <script>
        (async function() {
            const module = await import(
                \"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath("js/modules/Helpdesk/IndexController.js"), "html", null, true);
        yield "\"
            );
            new module.GlpiHelpdeskIndexController();
        })();
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/helpdesk/index.html.twig";
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
        return array (  200 => 149,  189 => 141,  124 => 79,  120 => 77,  116 => 75,  114 => 74,  106 => 69,  97 => 63,  85 => 53,  83 => 52,  77 => 49,  70 => 45,  65 => 42,  63 => 39,  56 => 38,  51 => 33,  49 => 36,  47 => 35,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/helpdesk/index.html.twig", "/var/www/html/glpi/templates/pages/helpdesk/index.html.twig");
    }
}
