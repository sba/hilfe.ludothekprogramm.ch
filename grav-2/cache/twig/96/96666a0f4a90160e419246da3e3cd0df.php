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

/* docs.html.twig */
class __TwigTemplate_028222d39832ddc2be2ec1b97474eef8 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["body_classes"] = (($this->sandbox->ensureToStringAllowed(($context["body_classes"] ?? null), 1, $this->source) . " ") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 1), "body_classes", [], "any", false, false, true, 1), 1, $this->source));
        // line 4
        $context["tags"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, true, 4), "tag", [], "any", false, false, true, 4);
        // line 5
        if ((($tmp = ($context["tags"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            $context["progress"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [["items" => ["@taxonomy" => ["category" => "docs", "tag" => $this->sandbox->ensureToStringAllowed(($context["tags"] ?? null), 6, $this->source)]], "order" => ["by" => "default", "dir" => "asc"]]], "method", false, false, true, 6);
        } else {
            // line 8
            $context["progress"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [["items" => ["@taxonomy" => ["category" => "docs"]], "order" => ["by" => "default", "dir" => "asc"]]], "method", false, false, true, 8);
        }
        // line 2
        $this->parent = $this->load("partials/base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        yield from $this->load("partials/toc.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "
    ";
        // line 14
        yield from $this->load("partials/page.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "
    ";
        // line 16
        yield from $this->load("partials/github-note.html.twig", 16)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "docs.html.twig";
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
        return array (  84 => 16,  81 => 15,  79 => 14,  76 => 13,  73 => 12,  66 => 11,  61 => 2,  58 => 8,  55 => 6,  53 => 5,  51 => 4,  49 => 1,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set body_classes = body_classes ~ \x27 \x27 ~ page.header.body_classes %}
{% extends \x27partials/base.html.twig\x27 %}

{% set tags = page.taxonomy.tag %}
{% if tags %}
    {% set progress = page.collection({\x27items\x27:{\x27@taxonomy\x27:{\x27category\x27: \x27docs\x27, \x27tag\x27: tags}},\x27order\x27: {\x27by\x27: \x27default\x27, \x27dir\x27: \x27asc\x27}}) %}
{% else %}
    {% set progress = page.collection({\x27items\x27:{\x27@taxonomy\x27:{\x27category\x27: \x27docs\x27}},\x27order\x27: {\x27by\x27: \x27default\x27, \x27dir\x27: \x27asc\x27}}) %}
{% endif %}

{% block content %}
    {% include \x27partials/toc.html.twig\x27 %}

    {% include \x27partials/page.html.twig\x27 %}

    {% include \x27partials/github-note.html.twig\x27 %}
{% endblock %}
", "docs.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\themes\\learn4\\templates\\docs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "extends" => 2, "if" => 5, "include" => 12];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'extends', 'if', 'include'],
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
