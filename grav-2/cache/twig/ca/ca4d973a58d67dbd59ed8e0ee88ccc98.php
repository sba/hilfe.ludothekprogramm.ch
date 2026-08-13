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

/* macros/macros.html.twig */
class __TwigTemplate_f5f69fe5e0fc29e3f29a174fd7a1bfc1 extends Template
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
        // line 24
        yield "
";
        yield from [];
    }

    // line 1
    public function macro_loop($page = null, $parent_loop = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "page" => $page,
            "parent_loop" => $parent_loop,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            $macros["͜macros"] = $this;
            // line 3
            yield "  ";
            if (($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["parent_loop"] ?? null), 3, $this->source)), 3, $this->source) > 0)) {
                // line 4
                yield "    ";
                $context["data_level"] = ($context["parent_loop"] ?? null);
                // line 5
                yield "  ";
            } else {
                // line 6
                yield "    ";
                $context["data_level"] = 0;
                // line 7
                yield "  ";
            }
            // line 8
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, true, 8), "visible", [], "any", false, false, true, 8));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                yield "    ";
                $context["parent_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" parent") : (""));
                // line 10
                yield "    ";
                $context["current_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, true, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
                // line 11
                yield "    <li class=\"dd-item";
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["parent_page"] ?? null), 11, $this->source), "html", null, true), 11, $this->source);
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null), 11, $this->source), "html", null, true), 11, $this->source);
                yield "\" data-nav-id=\"";
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "route", [], "any", false, false, true, 11), 11, $this->source), "html", null, true), 11, $this->source);
                yield "\">
      <a href=\"";
                // line 12
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 12), 12, $this->source), "html", null, true), 12, $this->source);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "header", [], "any", false, false, true, 12), "class", [], "any", false, false, true, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "class=\"";
                    yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "header", [], "any", false, false, true, 12), "class", [], "any", false, false, true, 12), 12, $this->source), "html", null, true), 12, $this->source);
                    yield "\"";
                }
                yield ">
        <i class=\"fa fa-check-square read-icon\"></i>
        <span><b>";
                // line 14
                if (($this->sandbox->ensureToStringAllowed(($context["data_level"] ?? null), 14, $this->source) == 0)) {
                    yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 14), 14, $this->source), "html", null, true), 14, $this->source);
                    yield ". ";
                }
                yield "</b>";
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, true, 14), 14, $this->source), "html", null, true), 14, $this->source);
                yield "</span>
      </a>
      ";
                // line 16
                if (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, true, 16), "count", [], "any", false, false, true, 16), 16, $this->source) > 0)) {
                    // line 17
                    yield "        <ul>
          ";
                    // line 18
                    yield $macros["͜macros"]->getTemplateForMacro("macro_loop", $context, 18, $this->getSourceContext())->macro_loop(...[$context["p"], (((array_key_exists("parent_loop", $context)) ? ($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["parent_loop"] ?? null), 18, $this->source), 0), 18, $this->source)) : (0)) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 18))]);
                    yield "
        </ul>
      ";
                }
                // line 21
                yield "    </li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function macro_version($p = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "p" => $p,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 26
            yield "  ";
            $context["parent_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "activeChild", [], "any", false, false, true, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" parent") : (""));
            // line 27
            yield "  ";
            $context["current_page"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "active", [], "any", false, false, true, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" active") : (""));
            // line 28
            yield "  <h5 class=\"";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["parent_page"] ?? null), 28, $this->source), "html", null, true), 28, $this->source);
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null), 28, $this->source), "html", null, true), 28, $this->source);
            yield "\">
    ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "activeChild", [], "any", false, false, true, 29) || CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "active", [], "any", false, false, true, 29))) {
                // line 30
                yield "      <i class=\"fa fa-chevron-down fa-fw\"></i>
    ";
            } else {
                // line 32
                yield "      <i class=\"fa fa-plus fa-fw\"></i>
    ";
            }
            // line 34
            yield "    <a href=\"";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true), 34, $this->source);
            yield "\">";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "menu", [], "any", false, false, true, 34), 34, $this->source), "html", null, true), 34, $this->source);
            yield "</a>
  </h5>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/macros.html.twig";
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
        return array (  198 => 34,  194 => 32,  190 => 30,  188 => 29,  182 => 28,  179 => 27,  176 => 26,  164 => 25,  145 => 21,  139 => 18,  136 => 17,  134 => 16,  124 => 14,  113 => 12,  105 => 11,  102 => 10,  99 => 9,  81 => 8,  78 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  50 => 1,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro loop(page, parent_loop) %}
  {% import _self as macros %}
  {% if parent_loop|length > 0 %}
    {% set data_level = parent_loop %}
  {% else %}
    {% set data_level = 0 %}
  {% endif %}
  {% for p in page.children.visible %}
    {% set parent_page = p.activeChild ? \x27 parent\x27 : \x27\x27 %}
    {% set current_page = p.active ? \x27 active\x27 : \x27\x27 %}
    <li class=\"dd-item{{ parent_page }}{{ current_page }}\" data-nav-id=\"{{ p.route }}\">
      <a href=\"{{ p.url }}\" {% if p.header.class %}class=\"{{ p.header.class }}\"{% endif %}>
        <i class=\"fa fa-check-square read-icon\"></i>
        <span><b>{% if data_level == 0 %}{{ loop.index }}. {% endif %}</b>{{ p.menu }}</span>
      </a>
      {% if p.children.count > 0 %}
        <ul>
          {{ macros.loop(p, parent_loop|default(0)+loop.index) }}
        </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}

{% macro version(p) %}
  {% set parent_page = p.activeChild ? \x27 parent\x27 : \x27\x27 %}
  {% set current_page = p.active ? \x27 active\x27 : \x27\x27 %}
  <h5 class=\"{{ parent_page }}{{ current_page }}\">
    {% if p.activeChild or p.active %}
      <i class=\"fa fa-chevron-down fa-fw\"></i>
    {% else %}
      <i class=\"fa fa-plus fa-fw\"></i>
    {% endif %}
    <a href=\"{{ p.url }}\">{{ p.menu }}</a>
  </h5>
{% endmacro %}", "macros/macros.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\themes\\learn4\\templates\\macros\\macros.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["macro" => 1, "import" => 2, "if" => 3, "set" => 4, "for" => 8];
        static $filters = ["length" => 3, "escape" => 11, "default" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'import', 'if', 'set', 'for'],
                ['length', 'escape', 'default'],
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
