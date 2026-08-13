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

/* partials/topbar.html.twig */
class __TwigTemplate_88ea174f52a08892fbd089c203f5bf0d extends Template
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
        yield "<div id=\"top-bar\">
  ";
        // line 2
        if (($this->sandbox->ensureToStringAllowed(($context["github_link_position"] ?? null), 2, $this->source) == "top")) {
            // line 3
            yield "    <div id=\"top-github-link\">
      ";
            // line 4
            yield from $this->load("partials/github_link.html.twig", 4)->unwrap()->yield($context);
            // line 5
            yield "    </div>
  ";
        }
        // line 7
        yield "
  ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, true, 8), "breadcrumbs", [], "any", false, false, true, 8), "enabled", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    ";
            yield from $this->load("partials/breadcrumbs.html.twig", 9)->unwrap()->yield($context);
            // line 10
            yield "  ";
        }
        // line 11
        yield "
  <div id=\"navigation\">
    ";
        // line 13
        if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "github.link")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "      ";
            yield from $this->load("partials/github-link.html.twig", 14)->unwrap()->yield($context);
            // line 15
            yield "    ";
        }
        // line 16
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "isFirst", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 16), 16, $this->source)], "method", false, false, true, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "      <a class=\"nav-prev tooltip tooltip-bottom\" data-tooltip=\"Vorherige Seite [&larr;]\" href=\"";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "nextSibling", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 17), 17, $this->source)], "method", false, false, true, 17), "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true), 17, $this->source);
            yield "\"> <i class=\"fa fa-angle-left\"></i></a>
    ";
        } else {
            // line 19
            yield "      <span class=\"disabled\"><i class=\"fa fa-angle-left\"></i></span>
    ";
        }
        // line 21
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "isLast", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 21), 21, $this->source)], "method", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "      <a class=\"nav-next tooltip tooltip-bottom\" data-tooltip=\"Nächste Seite [&rarr;]\" href=\"";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["progress"] ?? null), "prevSibling", [$this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "path", [], "any", false, false, true, 22), 22, $this->source)], "method", false, false, true, 22), "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true), 22, $this->source);
            yield "\"><i class=\"fa fa-angle-right\"></i></a>
    ";
        } else {
            // line 24
            yield "      <span class=\"disabled\"><i class=\"fa fa-angle-right\"></i></span>
    ";
        }
        // line 26
        yield "  </div>
  <div class=\"progress\"></div>
</div>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/topbar.html.twig";
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
        return array (  107 => 26,  103 => 24,  97 => 22,  94 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  73 => 13,  69 => 11,  66 => 10,  63 => 9,  61 => 8,  58 => 7,  54 => 5,  52 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"top-bar\">
  {% if  github_link_position == \x27top\x27 %}
    <div id=\"top-github-link\">
      {% include \x27partials/github_link.html.twig\x27 %}
    </div>
  {% endif %}

  {% if config.plugins.breadcrumbs.enabled %}
    {% include \x27partials/breadcrumbs.html.twig\x27 %}
  {% endif %}

  <div id=\"navigation\">
    {% if theme_var(\x27github.link\x27) %}
      {% include \x27partials/github-link.html.twig\x27 %}
    {% endif %}
    {% if not progress.isFirst(page.path) %}
      <a class=\"nav-prev tooltip tooltip-bottom\" data-tooltip=\"Vorherige Seite [&larr;]\" href=\"{{ progress.nextSibling(page.path).url }}\"> <i class=\"fa fa-angle-left\"></i></a>
    {% else %}
      <span class=\"disabled\"><i class=\"fa fa-angle-left\"></i></span>
    {% endif %}
    {% if not progress.isLast(page.path) %}
      <a class=\"nav-next tooltip tooltip-bottom\" data-tooltip=\"Nächste Seite [&rarr;]\" href=\"{{ progress.prevSibling(page.path).url }}\"><i class=\"fa fa-angle-right\"></i></a>
    {% else %}
      <span class=\"disabled\"><i class=\"fa fa-angle-right\"></i></span>
    {% endif %}
  </div>
  <div class=\"progress\"></div>
</div>


", "partials/topbar.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\themes\\learn4\\templates\\partials\\topbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "include" => 4];
        static $filters = ["escape" => 17];
        static $functions = ["theme_var" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                ['theme_var'],
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
