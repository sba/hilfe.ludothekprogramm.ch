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

/* partials/sidebar.html.twig */
class __TwigTemplate_854d0f6cfe147ec98a301c129dfde588 extends Template
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
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("macros/macros.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"learn-brand\">
    <div id=\"header\">
        <a id=\"logo\" href=\"";
        // line 5
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "home_url", [], "any", false, false, true, 5)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "home_url", [], "any", false, false, true, 5), 5, $this->source), "html", null, true), 5, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["base_url_absolute"] ?? null), 5, $this->source), "html", null, true), 5, $this->source)));
        yield "\">";
        yield from $this->load("partials/logo.html.twig", 5)->unwrap()->yield($context);
        yield "</a>
        <div class=\"search-options\">
            <a href=\"#\" data-algolia-pro-trigger>
                <div class=\"adv-search column col-12\"><i class=\"fa fa-search\"></i> Suche <em>&nbsp;&nbsp;[CTRL]+[k]</em></div>
            </a>
        </div>
    </div>
</div>
<div class=\"learn-nav\" data-simplebar>
    <div class=\"highlightable\">
        ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "top_level_version", [], "any", false, false, true, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, true, 16));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 17
                yield "                ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_version", $context, 17, $this->getSourceContext())->macro_version(...[$context["ver"]]);
                yield "
                <ul class=\"was\" id=\"";
                // line 18
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["slug"], 18, $this->source), "html", null, true), 18, $this->source);
                yield "\" class=\"topics\">
                    ";
                // line 19
                yield $macros["͜macros"]->getTemplateForMacro("macro_loop", $context, 19, $this->getSourceContext())->macro_loop(...[$context["ver"], ""]);
                yield "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['slug'], $context['ver'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "        ";
        } else {
            // line 23
            yield "            <ul class=\"topics\">
                ";
            // line 24
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "root_page", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "                    ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_loop", $context, 25, $this->getSourceContext())->macro_loop(...[CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["theme_config"] ?? null), "root_page", [], "any", false, false, true, 25), 25, $this->source)], "method", false, false, true, 25), ""]);
                yield "
                ";
            } else {
                // line 27
                yield "                    ";
                yield $macros["͜macros"]->getTemplateForMacro("macro_loop", $context, 27, $this->getSourceContext())->macro_loop(...[($context["pages"] ?? null), ""]);
                yield "
                ";
            }
            // line 29
            yield "            </ul>
        ";
        }
        // line 31
        yield "
        <a class=\" padding\" href=\"https://www.ludothekprogramm.ch/support/forum\" target=\"_blank\">
            <i class=\"fa fa-fw fa-question-circle\"></i> Support-Forum
        </a><br/><br/>
        <hr/>
        <br/>
        <a class=\"side-tools padding\" href=\"#\" data-clear-history-toggle>
            <i class=\"fa fa-fw fa-history\"></i> ";
        // line 38
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_LEARN4_CLEAR_HISTORY"), 38, $this->source), "html", null, true), 38, $this->source);
        yield "
        </a><br/>
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
        return "partials/sidebar.html.twig";
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
        return array (  124 => 38,  115 => 31,  111 => 29,  105 => 27,  99 => 25,  97 => 24,  94 => 23,  91 => 22,  82 => 19,  78 => 18,  73 => 17,  68 => 16,  66 => 15,  51 => 5,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/macros.html.twig\x27 as macros %}

<div class=\"learn-brand\">
    <div id=\"header\">
        <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">{% include \x27partials/logo.html.twig\x27 %}</a>
        <div class=\"search-options\">
            <a href=\"#\" data-algolia-pro-trigger>
                <div class=\"adv-search column col-12\"><i class=\"fa fa-search\"></i> Suche <em>&nbsp;&nbsp;[CTRL]+[k]</em></div>
            </a>
        </div>
    </div>
</div>
<div class=\"learn-nav\" data-simplebar>
    <div class=\"highlightable\">
        {% if theme_config.top_level_version %}
            {% for slug, ver in pages.children %}
                {{ macros.version(ver) }}
                <ul class=\"was\" id=\"{{ slug }}\" class=\"topics\">
                    {{ macros.loop(ver, \x27\x27) }}
                </ul>
            {% endfor %}
        {% else %}
            <ul class=\"topics\">
                {% if theme_config.root_page %}
                    {{ macros.loop(page.find(theme_config.root_page), \x27\x27) }}
                {% else %}
                    {{ macros.loop(pages, \x27\x27) }}
                {% endif %}
            </ul>
        {% endif %}

        <a class=\" padding\" href=\"https://www.ludothekprogramm.ch/support/forum\" target=\"_blank\">
            <i class=\"fa fa-fw fa-question-circle\"></i> Support-Forum
        </a><br/><br/>
        <hr/>
        <br/>
        <a class=\"side-tools padding\" href=\"#\" data-clear-history-toggle>
            <i class=\"fa fa-fw fa-history\"></i> {{ \x27THEME_LEARN4_CLEAR_HISTORY\x27|t }}
        </a><br/>
    </div>
</div>
", "partials/sidebar.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\user\\themes\\learn4\\templates\\partials\\sidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 1, "include" => 5, "if" => 15, "for" => 16];
        static $filters = ["escape" => 5, "t" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'include', 'if', 'for'],
                ['escape', 't'],
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
