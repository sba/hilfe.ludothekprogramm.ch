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

/* partials/base.html.twig */
class __TwigTemplate_4a2f0aa98a13f56a3fb034f5b2f40440 extends Template
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
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'topbar' => [$this, 'block_topbar'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["github_config"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "github");
        // line 2
        $context["grid_size"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "production-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (".min.css") : (".css"));
        // line 4
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 5
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 5), "getActive", [], "any", false, false, true, 5)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 5), "getActive", [], "any", false, false, true, 5), 5, $this->source), "html", null, true), 5, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, true, 5), "site", [], "any", false, false, true, 5), "default_lang", [], "any", false, false, true, 5), 5, $this->source), "html", null, true), 5, $this->source)));
        yield "\">
<head>
";
        // line 7
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 18
        yield "
";
        // line 19
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 30
        yield "
";
        // line 31
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 35
        yield "</head>
<body id=\"top\" class=\"";
        // line 36
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["sidebar_color"] ?? null), 36, $this->source), "html", null, true), 36, $this->source);
        yield " ";
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield "\" data-url=\"";
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, true, 36), 36, $this->source), "html", null, true), 36, $this->source);
        yield "\">
    <div id=\"page-wrapper\" class=\"off-canvas off-canvas-sidebar-show\">
        <!-- off-screen toggle button -->
        <a class=\"off-canvas-toggle btn btn-primary btn-action\" href=\"#sidebar-id\">
            <i class=\"fa fa-bars\"></i>
        </a>

        <div id=\"sidebar-id\" class=\"learn-sidebar off-canvas-sidebar\">
            <!-- off-screen sidebar -->
            ";
        // line 45
        yield from $this->load("partials/sidebar.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "        </div>

        <a class=\"off-canvas-overlay\" href=\"#close\"></a>

        <div class=\"learn-content off-canvas-content\">
            ";
        // line 51
        yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
        // line 54
        yield "
            <section id=\"start\">
                ";
        // line 56
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 66
        yield "            </section>

            ";
        // line 68
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 71
        yield "        </div>
    </div>

    ";
        // line 74
        try {
            $_v0 = $this->load("partials/algolia-pro/instantsearch.html.twig", 74);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield(CoreExtension::merge($context, ["index" => "pages"]));
        }
        // line 75
        yield "
    ";
        // line 76
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 80
        yield "</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'head');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html"), 9, $this->source);
            yield " | ";
        }
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html"), 9, $this->source);
        yield "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        yield from $this->load("partials/metadata.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("https://www.ludothekprogramm.ch/templates/yoo_moreno/favicon.ico"), 15, $this->source), "html", null, true), 15, $this->source);
        yield "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, true, 16), 16, $this->source), "html", null, true), 16, $this->source);
        yield "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/fork-awesome.min.css"], "method", false, false, true, 20);
        // line 21
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/spectre" . $this->sandbox->ensureToStringAllowed(($context["compress"] ?? null), 21, $this->source))], "method", false, false, true, 21);
        // line 22
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", [("theme://css-compiled/theme" . $this->sandbox->ensureToStringAllowed(($context["compress"] ?? null), 22, $this->source))], "method", false, false, true, 22);
        // line 23
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/custom.css"], "method", false, false, true, 23);
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["jquery", 101], "method", false, false, true, 27);
        // line 28
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/learn4.js", ["group" => "bottom"]], "method", false, false, true, 28);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'assets');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, true, 32), 32, $this->source), 32, $this->source);
        yield "
    ";
        // line 33
        yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, true, 33), 33, $this->source), 33, $this->source);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(($context["body_classes"] ?? null), 36, $this->source)), 36, $this->source), "html", null, true), 36, $this->source);
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 52
        yield "                ";
        yield from $this->load("partials/topbar.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "            ";
        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "                    <section id=\"body-wrapper\" class=\"section\">
                        <section class=\"container ";
        // line 58
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["grid_size"] ?? null), 58, $this->source), "html", null, true), 58, $this->source);
        yield "\">
                            ";
        // line 59
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 62
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 63
        yield "                        </section>
                    </section>
                ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "                                ";
        try {
            $_v1 = $this->load("partials/messages.html.twig", 60);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield($context);
        }
        // line 61
        yield "                            ";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "                ";
        yield from $this->load("partials/footer.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "            ";
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "        <script src=\"https://unpkg.com/simplebar@4.0.0-alpha.4/dist/simplebar.min.js\"></script>
        ";
        // line 78
        yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, true, 78), 78, $this->source), 78, $this->source);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  383 => 78,  380 => 77,  373 => 76,  368 => 70,  365 => 69,  358 => 68,  348 => 62,  343 => 61,  332 => 60,  325 => 59,  318 => 63,  315 => 62,  313 => 59,  309 => 58,  306 => 57,  299 => 56,  294 => 53,  291 => 52,  284 => 51,  273 => 36,  265 => 33,  260 => 32,  243 => 31,  237 => 28,  234 => 27,  227 => 26,  221 => 23,  218 => 22,  215 => 21,  212 => 20,  205 => 19,  197 => 16,  193 => 15,  190 => 14,  188 => 13,  177 => 9,  174 => 8,  157 => 7,  149 => 80,  147 => 76,  144 => 75,  134 => 74,  129 => 71,  127 => 68,  123 => 66,  121 => 56,  117 => 54,  115 => 51,  108 => 46,  106 => 45,  90 => 36,  87 => 35,  85 => 31,  82 => 30,  80 => 26,  77 => 25,  75 => 19,  72 => 18,  70 => 7,  65 => 5,  62 => 4,  60 => 3,  58 => 2,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set github_config = theme_var(\x27github\x27) %}
{% set grid_size = theme_var(\x27grid-size\x27) %}
{% set compress = theme_var(\x27production-mode\x27) ? \x27.min.css\x27 : \x27.css\x27 %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e(\x27html\x27) }} | {% endif %}{{ site.title|e(\x27html\x27) }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include \x27partials/metadata.html.twig\x27 %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url(\x27https://www.ludothekprogramm.ch/templates/yoo_moreno/favicon.ico\x27) }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss(\x27theme://css/fork-awesome.min.css\x27) %}
    {% do assets.addCss(\x27theme://css-compiled/spectre\x27~compress) %}
    {% do assets.addCss(\x27theme://css-compiled/theme\x27~compress) %}
    {% do assets.addCss(\x27theme://css/custom.css\x27) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs(\x27jquery\x27, 101) %}
    {% do assets.addJs(\x27theme://js/learn4.js\x27, { group:\x27bottom\x27 }) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{{ sidebar_color }} {% block body_classes %}{{ body_classes|trim }}{% endblock %}\" data-url=\"{{ page.route }}\">
    <div id=\"page-wrapper\" class=\"off-canvas off-canvas-sidebar-show\">
        <!-- off-screen toggle button -->
        <a class=\"off-canvas-toggle btn btn-primary btn-action\" href=\"#sidebar-id\">
            <i class=\"fa fa-bars\"></i>
        </a>

        <div id=\"sidebar-id\" class=\"learn-sidebar off-canvas-sidebar\">
            <!-- off-screen sidebar -->
            {% include \x27partials/sidebar.html.twig\x27 %}
        </div>

        <a class=\"off-canvas-overlay\" href=\"#close\"></a>

        <div class=\"learn-content off-canvas-content\">
            {% block topbar %}
                {% include \x27partials/topbar.html.twig\x27 %}
            {% endblock %}

            <section id=\"start\">
                {% block body %}
                    <section id=\"body-wrapper\" class=\"section\">
                        <section class=\"container {{ grid_size }}\">
                            {% block messages %}
                                {% include \x27partials/messages.html.twig\x27 ignore missing %}
                            {% endblock %}
                            {% block content %}{% endblock %}
                        </section>
                    </section>
                {% endblock %}
            </section>

            {% block footer %}
                {% include \x27partials/footer.html.twig\x27 %}
            {% endblock %}
        </div>
    </div>

    {% include \x27partials/algolia-pro/instantsearch.html.twig\x27 ignore missing with { index: \x27pages\x27 } %}

    {% block bottom %}
        <script src=\"https://unpkg.com/simplebar@4.0.0-alpha.4/dist/simplebar.min.js\"></script>
        {{ assets.js(\x27bottom\x27)|raw }}
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "D:\\htdocs\\_lupo\\hilfe.ludothekprogramm.ch\\user\\themes\\learn4\\templates\\partials\\base.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 7, "include" => 45, "if" => 9, "do" => 20];
        static $filters = ["escape" => 5, "e" => 9, "raw" => 32, "trim" => 36];
        static $functions = ["theme_var" => 1, "url" => 15];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include', 'if', 'do'],
                ['escape', 'e', 'raw', 'trim'],
                ['theme_var', 'url'],
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
    private $deferred;
}
