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

/* partials/github-link.html.twig */
class __TwigTemplate_edf1e120fdf9c1f063f2b88f58053b9f extends Template
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
        yield "<a class=\"github-link tooltip tooltip-bottom\" href=\"";
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["github_config"] ?? null), "tree", [], "any", false, false, true, 1), 1, $this->source) . $this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::replace(("/" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "filePathClean", [], "any", false, false, true, 1), 1, $this->source)), ["/user/pages/" => ""]), 1, $this->source)), "html", null, true), 1, $this->source);
        yield "\" data-tooltip=\"Verbesserungsvorschlag einreichen\"><i class=\"fa fa-pencil-square\"></i> ";
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_LEARN4_GITHUB_EDIT"), 1, $this->source), "html", null, true), 1, $this->source);
        yield "</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/github-link.html.twig";
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
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a class=\"github-link tooltip tooltip-bottom\" href=\"{{ github_config.tree ~  (\x27/\x27~page.filePathClean)|replace({\x27/user/pages/\x27:\x27\x27}) }}\" data-tooltip=\"Verbesserungsvorschlag einreichen\"><i class=\"fa fa-pencil-square\"></i> {{ \x27THEME_LEARN4_GITHUB_EDIT\x27|t }}</a>
", "partials/github-link.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\user\\themes\\learn4\\templates\\partials\\github-link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1, "replace" => 1, "t" => 1];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'replace', 't'],
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
