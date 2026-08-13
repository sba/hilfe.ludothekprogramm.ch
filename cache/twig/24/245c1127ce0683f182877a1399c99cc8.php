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

/* chapter.html.twig */
class __TwigTemplate_e62a46df172081a2f8bdb19e41d38f68 extends Template
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
        return "docs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["body_classes"] = "center-content";
        // line 2
        $this->parent = $this->load("docs.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <div id=\"chapter\">
        ";
        // line 6
        yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 6), 6, $this->source), 6, $this->source);
        yield "
        ";
        // line 7
        if (((($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slug", [], "any", false, false, true, 7), 7, $this->source) == "inhaltsverzeichnis") || (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, true, 7)) && is_string($_v1 = "/inhaltsverzeichnis") && str_ends_with($_v0, $_v1))) || ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 7), 7, $this->source) == "Inhaltsverzeichnis"))) {
            // line 8
            yield "            ";
            $context["chapter_pages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, true, 8), "children", [], "any", false, false, true, 8), "visible", [], "any", false, false, true, 8);
            // line 9
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($this->sandbox->ensureToStringAllowed(($context["chapter_pages"] ?? null), 9, $this->source))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "                <div class=\"chapter-links\">
                    ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["chapter_pages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 12
                    yield "                        ";
                    if (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "route", [], "any", false, false, true, 12), 12, $this->source) != $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, true, 12), 12, $this->source))) {
                        // line 13
                        yield "                            <a href=\"";
                        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true), 13, $this->source);
                        yield "\"><h5>";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, true, 13)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, true, 13), 13, $this->source), "html", null, true), 13, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true), 13, $this->source)));
                        yield "</h5></a>
                        ";
                    }
                    // line 15
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                yield "                </div>
            ";
            }
            // line 18
            yield "        ";
        }
        // line 19
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chapter.html.twig";
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
        return array (  109 => 19,  106 => 18,  102 => 16,  96 => 15,  88 => 13,  85 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  70 => 7,  66 => 6,  63 => 5,  56 => 4,  51 => 2,  49 => 1,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set body_classes = \x27center-content\x27 %}
{% extends \x27docs.html.twig\x27 %}

{% block content %}
    <div id=\"chapter\">
        {{ page.content|raw }}
        {% if page.slug == \x27inhaltsverzeichnis\x27 or page.route ends with \x27/inhaltsverzeichnis\x27 or page.title == \x27Inhaltsverzeichnis\x27 %}
            {% set chapter_pages = page.parent.children.visible %}
            {% if chapter_pages is not empty %}
                <div class=\"chapter-links\">
                    {% for p in chapter_pages %}
                        {% if p.route != page.route %}
                            <a href=\"{{ p.url }}\"><h5>{{ p.menu ?: p.title }}</h5></a>
                        {% endif %}
                    {% endfor %}
                </div>
            {% endif %}
        {% endif %}
    </div>
{% endblock %}
", "chapter.html.twig", "D:\\htdocs\\_lupo\\hilfe.ludothekprogramm.ch\\user\\themes\\learn4\\templates\\chapter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "extends" => 2, "if" => 7, "for" => 11];
        static $filters = ["raw" => 6, "escape" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'extends', 'if', 'for'],
                ['raw', 'escape'],
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
