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

/* @Page:D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/01.inhaltsverzeichnis */
class __TwigTemplate_f8bec6adf963fa54d2470d9396329204 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<h1>LUPO Online-Hilfe</h1>
<div class=\"notices yellow\">
<p>Mit den Pfeiltasten (Icons oben oder Tastatur-Pfeile) kann bequem durch die einzelnen Seiten geblättert werden.</p>
</div>
<h1>Inhaltsverzeichnis</h1>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/01.inhaltsverzeichnis";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>LUPO Online-Hilfe</h1>
<div class=\"notices yellow\">
<p>Mit den Pfeiltasten (Icons oben oder Tastatur-Pfeile) kann bequem durch die einzelnen Seiten geblättert werden.</p>
</div>
<h1>Inhaltsverzeichnis</h1>", "@Page:D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/01.inhaltsverzeichnis", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
