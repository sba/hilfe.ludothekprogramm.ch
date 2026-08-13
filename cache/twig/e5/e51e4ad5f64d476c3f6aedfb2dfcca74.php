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

/* algolia-pro/blocks/searchbox.html.twig */
class __TwigTemplate_b5bff0c7213fc7eb93740fba6de3b301 extends Template
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
        $_trait_0 = $this->load("algolia-pro/blocks/searchbox_input.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/searchbox_input.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'searchbox' => [$this, 'block_searchbox'],
            ]
        );
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('searchbox', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searchbox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  <div class=\"flex items-center flex-none h-16 border-b border-transparent\">
    <div class=\"w-full h-full flex\">
      ";
        // line 6
        yield from         $this->unwrap()->yieldBlock("searchbox_input", $context, $blocks);
        yield "
    </div>
    <div class=\"w-px h-8 bg-gray-200 dark:bg-gray-600 flex-none\"></div>
    <button
      class=\"px-4 h-full text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-300 transition-fast-out\"
      @click.prevent=\"isOpen = false;query = null;\"
    >
      ";
        // line 13
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 13), "lang", [], "any", false, false, true, 13), "cancel", [], "any", false, false, true, 13), 13, $this->source)), 13, $this->source), "html", null, true), 13, $this->source);
        yield "
    </button>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/searchbox.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  85 => 13,  75 => 6,  71 => 4,  60 => 3,  57 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% use \x27algolia-pro/blocks/searchbox_input.html.twig\x27 %}

{% block searchbox %}
  <div class=\"flex items-center flex-none h-16 border-b border-transparent\">
    <div class=\"w-full h-full flex\">
      {{ block(\x27searchbox_input\x27) }}
    </div>
    <div class=\"w-px h-8 bg-gray-200 dark:bg-gray-600 flex-none\"></div>
    <button
      class=\"px-4 h-full text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-300 transition-fast-out\"
      @click.prevent=\"isOpen = false;query = null;\"
    >
      {{ settings.interface.lang.cancel|t }}
    </button>
  </div>
{% endblock %}
", "algolia-pro/blocks/searchbox.html.twig", "D:\\htdocs\\_lupo\\hilfe.ludothekprogramm.ch\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\searchbox.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["use" => 1, "block" => 3];
        static $filters = ["escape" => 13, "t" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['use', 'block'],
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
