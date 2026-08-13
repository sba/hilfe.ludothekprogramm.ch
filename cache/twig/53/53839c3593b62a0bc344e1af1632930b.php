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
class __TwigTemplate_f31f45edca879202f3efee99e03b519d extends Template
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
<h1>Inhaltsverzeichnis</h1>
<p>";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "any", false, false, true, 6), "visible", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 7
            yield "<a href=\"";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "link", [], "any", false, false, true, 7), 7, $this->source), "html", null, true), 7, $this->source);
            yield "\"><h5>";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true), 7, $this->source);
            yield "</h5></a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "</p>";
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  66 => 8,  55 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>LUPO Online-Hilfe</h1>
<div class=\"notices yellow\">
<p>Mit den Pfeiltasten (Icons oben oder Tastatur-Pfeile) kann bequem durch die einzelnen Seiten geblättert werden.</p>
</div>
<h1>Inhaltsverzeichnis</h1>
<p>{% for p in page.collection.visible %}
<a href=\"{{p.link}}\"><h5>{{ p.title }}</h5></a>
{% endfor %}</p>", "@Page:D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/01.inhaltsverzeichnis", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 6];
        static $filters = ["escape" => 7];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
