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

/* partials/toc.html.twig */
class __TwigTemplate_848f178436f5636517c9bf3b7399ca80 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["plugins.page-toc.active"], "method", false, false, true, 1) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 1), "page-toc", [], "any", false, false, true, 1), "active", [], "any", false, false, true, 1))) {
            // line 2
            yield "  <div class=\"page-toc\">
    ";
            // line 3
            $context["table_of_contents"] = $this->env->getFunction('toc')->getCallable()($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 3), 3, $this->source));
            // line 4
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty($this->sandbox->ensureToStringAllowed(($context["table_of_contents"] ?? null), 4, $this->source))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "      <span class=\"toc-toggle\"><i class=\"fa fa-angle-up\"></i></span>
      <h5>Quick Menu</h5>
      ";
                // line 7
                yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(($context["table_of_contents"] ?? null), 7, $this->source), 7, $this->source);
                yield "
    ";
            }
            // line 9
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/toc.html.twig";
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
        return array (  63 => 9,  58 => 7,  54 => 5,  51 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if config.get(\x27plugins.page-toc.active\x27) or attribute(page.header, \x27page-toc\x27).active %}
  <div class=\"page-toc\">
    {% set table_of_contents = toc(page.content) %}
    {% if table_of_contents is not empty %}
      <span class=\"toc-toggle\"><i class=\"fa fa-angle-up\"></i></span>
      <h5>Quick Menu</h5>
      {{ table_of_contents|raw }}
    {% endif %}
  </div>
{% endif %}", "partials/toc.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\user\\themes\\learn4\\templates\\partials\\toc.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 3];
        static $filters = ["raw" => 7];
        static $functions = ["toc" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['raw'],
                ['toc'],
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
