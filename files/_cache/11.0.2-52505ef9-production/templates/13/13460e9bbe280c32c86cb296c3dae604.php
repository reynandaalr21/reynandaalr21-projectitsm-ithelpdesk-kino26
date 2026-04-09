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

/* pages/admin/ldap.users.html.twig */
class __TwigTemplate_a1e5e9a77a110e1e52e02d199bd835a8 extends Template
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
<div class=\"container\">
   <div class=\"row justify-content-evenly\">
      <div class=\"col-12 col-xxl-5\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bulk import users from a LDAP directory"), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/ldap.import.php"), "html", null, true);
        yield "?mode=1&amp;action=show\">
                  <i class=\"ti ti-user-cog me-1\"></i>
                  <span>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Synchronizing already imported users"), "html", null, true);
        yield "</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/ldap.import.php"), "html", null, true);
        yield "?mode=0&amp;action=show\">
                  <i class=\"ti ti-user-plus me-1\"></i>
                  <span>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import new users"), "html", null, true);
        yield "</span>
               </a>
            </div>
         </div>
      </div>
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
        return "pages/admin/ldap.users.html.twig";
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
        return array (  72 => 48,  67 => 46,  61 => 43,  56 => 41,  50 => 38,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/ldap.users.html.twig", "/var/www/html/glpi/templates/pages/admin/ldap.users.html.twig");
    }
}
