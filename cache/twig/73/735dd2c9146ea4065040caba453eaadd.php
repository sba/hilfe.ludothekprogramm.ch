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

/* algolia-pro/blocks/configure.html.twig */
class __TwigTemplate_019fe1fa85a3206f266736fd9bf87fde extends Template
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
            'configure' => [$this, 'block_configure'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('configure', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_configure(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <ais-configure
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "search", [], "any", false, false, true, 3));
        foreach ($context['_seq'] as $context["setting"] => $context["value"]) {
            // line 4
            yield "      ";
            $context["prop"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", $this->sandbox->ensureToStringAllowed($context["setting"], 4, $this->source));
            // line 5
            yield "      :";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["prop"] ?? null), 5, $this->source), "html", null, true), 5, $this->source);
            yield ((CoreExtension::inFilter("-", ($context["prop"] ?? null))) ? (".camel") : (""));
            yield "=\x27";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 5, $this->source)), 5, $this->source), "html", null, true), 5, $this->source);
            yield "\x27
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['setting'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  ></ais-configure>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/configure.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  78 => 7,  66 => 5,  63 => 4,  59 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block configure %}
  <ais-configure
    {% for setting, value in settings.search %}
      {% set prop = setting|hyphenize  %}
      :{{ prop }}{{ \x27-\x27 in prop ? \x27.camel\x27 }}=\x27{{ value|json_encode }}\x27
    {% endfor %}
  ></ais-configure>
{% endblock %}
", "algolia-pro/blocks/configure.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\configure.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "for" => 3, "set" => 4];
        static $filters = ["hyphenize" => 4, "escape" => 5, "json_encode" => 5];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set'],
                ['hyphenize', 'escape', 'json_encode'],
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
