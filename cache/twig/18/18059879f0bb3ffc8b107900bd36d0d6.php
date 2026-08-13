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

/* @Page:D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/02.installation */
class __TwigTemplate_d0134c053c44f6d5d4966c5f5934bc17 extends Template
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
        yield "<h1>Installation</h1>
<p>";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "any", false, false, true, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 3
            yield "<a href=\"";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 3), 3, $this->source), "html", null, true), 3, $this->source);
            yield "\"><h5>";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, true, 3), 3, $this->source), "html", null, true), 3, $this->source);
            yield "</h5></a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        yield "</p>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/02.installation";
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
        return array (  62 => 4,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Installation</h1>
<p>{% for p in page.collection %}
<a href=\"{{p.url}}\"><h5>{{ p.title }}</h5></a>
{% endfor %}</p>", "@Page:D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/02.installation", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 2];
        static $filters = ["escape" => 3];
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
