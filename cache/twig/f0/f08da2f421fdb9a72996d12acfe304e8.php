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

/* algolia-pro/blocks/assets.html.twig */
class __TwigTemplate_0281421e1091e766ff73675faa348c87 extends Template
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
            'assets' => [$this, 'block_assets'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 2), "css", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "        ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["plugin://algolia-pro/build/css/algolia-pro.css", ["priority" => 100]], "method", false, false, true, 3);
            // line 4
            yield "    ";
        }
        // line 5
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineCss", [((":root { --algolia-pro-accent: " . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 5), "accent", [], "any", false, false, true, 5), 5, $this->source)) . "; }")], "method", false, false, true, 5);
        // line 6
        yield "
    ";
        // line 7
        if (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "plugin", [], "any", false, false, true, 7), "vue_env", [], "any", false, false, true, 7), 7, $this->source) != "development")) {
            // line 8
            yield "        ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addLink", ["plugin://algolia-pro/build/js/vendor.js", ["rel" => "modulepreload"]], "method", false, false, true, 8);
            // line 9
            yield "        ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJsModule", ["plugin://algolia-pro/build/js/algolia-pro.js", ["group" => "bottom"]], "method", false, false, true, 9);
            // line 10
            yield "    ";
        } else {
            // line 11
            yield "        ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", [(((("http://" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "plugin", [], "any", false, false, true, 11), "dev_host", [], "any", false, false, true, 11), 11, $this->source)) . ":") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "plugin", [], "any", false, false, true, 11), "dev_port", [], "any", false, false, true, 11), 11, $this->source)) . "/src/main.js"), ["group" => "bottom", "type" => "module"]], "method", false, false, true, 11);
            // line 12
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/assets.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  59 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block assets %}
    {% if settings.interface.css %}
        {% do assets.addCss(\x27plugin://algolia-pro/build/css/algolia-pro.css\x27, { priority: 100 }) %}
    {% endif %}
    {% do assets.addInlineCss(\x27:root { --algolia-pro-accent: \x27 ~ settings.interface.accent ~ \x27; }\x27) %}

    {% if settings.plugin.vue_env != \x27development\x27 %}
        {% do assets.addLink(\x27plugin://algolia-pro/build/js/vendor.js\x27, { rel: \x27modulepreload\x27 }) %}
        {% do assets.addJsModule(\x27plugin://algolia-pro/build/js/algolia-pro.js\x27, { group: \x27bottom\x27 }) %}
    {% else %}
        {% do assets.addJs(\x27http://\x27 ~ settings.plugin.dev_host ~ \x27:\x27 ~ settings.plugin.dev_port ~ \x27/src/main.js\x27, { group: \x27bottom\x27, type: \x27module\x27}) %}
    {% endif %}
{% endblock %}
", "algolia-pro/blocks/assets.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\assets.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "if" => 2, "do" => 3];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'do'],
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
