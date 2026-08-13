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

/* partials/algolia-pro/instantsearch-scopes.html.twig */
class __TwigTemplate_d7ca99bffd0e67905857d707bc5a0577 extends Template
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

        // line 1
        $_trait_0 = $this->load("algolia-pro/blocks/configure.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/configure.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 2
        $_trait_1 = $this->load("algolia-pro/blocks/searchbox.html.twig", 2);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/searchbox.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 3
        $_trait_2 = $this->load("algolia-pro/blocks/hits.html.twig", 3);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/hits.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        // line 4
        $_trait_3 = $this->load("algolia-pro/blocks/footer.html.twig", 4);
        if (!$_trait_3->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/footer.html.twig".'" cannot be used as a trait.', 4, $this->source);
        }
        $_trait_3_blocks = $_trait_3->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
            ]
        );
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
";
        // line 6
        yield from         $this->unwrap()->yieldBlock("configure", $context, $blocks);
        yield "
";
        // line 7
        yield from         $this->unwrap()->yieldBlock("searchbox", $context, $blocks);
        yield "
";
        // line 8
        yield from         $this->unwrap()->yieldBlock("hits", $context, $blocks);
        yield "
";
        // line 9
        yield from         $this->unwrap()->yieldBlock("footer", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/algolia-pro/instantsearch-scopes.html.twig";
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
        return array (  97 => 9,  93 => 8,  89 => 7,  85 => 6,  82 => 5,  56 => 4,  49 => 3,  42 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% use \x27algolia-pro/blocks/configure.html.twig\x27 %}
{% use \x27algolia-pro/blocks/searchbox.html.twig\x27 %}
{% use \x27algolia-pro/blocks/hits.html.twig\x27 %}
{% use \x27algolia-pro/blocks/footer.html.twig\x27 %}

{{ block(\x27configure\x27) }}
{{ block(\x27searchbox\x27) }}
{{ block(\x27hits\x27) }}
{{ block(\x27footer\x27) }}
", "partials/algolia-pro/instantsearch-scopes.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\user\\plugins\\algolia-pro\\templates\\partials\\algolia-pro\\instantsearch-scopes.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["use" => 1];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['use'],
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
