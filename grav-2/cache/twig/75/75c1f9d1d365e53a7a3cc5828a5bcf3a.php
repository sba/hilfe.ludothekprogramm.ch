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

/* algolia-pro/blocks/hits.html.twig */
class __TwigTemplate_e6d5c4b874243750ad68be4a80e4216f extends Template
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
        $_trait_0 = $this->load("algolia-pro/blocks/hits_items.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/hits_items.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        // line 2
        $_trait_1 = $this->load("algolia-pro/blocks/hits_preview.html.twig", 2);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/hits_preview.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'hits' => [$this, 'block_hits'],
            ]
        );
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('hits', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hits(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "  <div v-if=\"query\" class=\"flex flex-grow border-t dark:border-gray-700  overflow-hidden\">
    <div class=\"flex-1 relative w-full overflow-y-auto scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-gray-100 scrollbar-thumb-gray-300 dark:scrollbar-track-gray-800 dark:scrollbar-thumb-gray-700\">
      <section aria-label=\"Search results\" aria-busy=\"false\" aria-live=\"polite\" class=\"\">
        <div
          class=\"flex items-center justify-between py-1 px-4 bg-gray-100 dark:bg-gray-700 dark:bg-opacity-25 text-[13px] text-gray-400\">
          <span class=\"uppercase font-semibold text-gray-500 dark:text-gray-400\">Results</span>
          ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 11), "stats", [], "any", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "            <ais-stats></ais-stats>
          ";
        }
        // line 14
        yield "        </div>
        ";
        // line 15
        yield from         $this->unwrap()->yieldBlock("hits_items", $context, $blocks);
        yield "
      </section>

      <div class=\"bg-gradient-to-b from-transparent to-white dark:to-gray-800 w-full h-8 sticky bottom-0\"></div>
    </div>
    ";
        // line 20
        yield from         $this->unwrap()->yieldBlock("hits_preview", $context, $blocks);
        yield "
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/hits.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  106 => 20,  98 => 15,  95 => 14,  91 => 12,  89 => 11,  81 => 5,  70 => 4,  67 => 3,  42 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% use \x27algolia-pro/blocks/hits_items.html.twig\x27 %}
{% use \x27algolia-pro/blocks/hits_preview.html.twig\x27 %}

{% block hits %}
  <div v-if=\"query\" class=\"flex flex-grow border-t dark:border-gray-700  overflow-hidden\">
    <div class=\"flex-1 relative w-full overflow-y-auto scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-gray-100 scrollbar-thumb-gray-300 dark:scrollbar-track-gray-800 dark:scrollbar-thumb-gray-700\">
      <section aria-label=\"Search results\" aria-busy=\"false\" aria-live=\"polite\" class=\"\">
        <div
          class=\"flex items-center justify-between py-1 px-4 bg-gray-100 dark:bg-gray-700 dark:bg-opacity-25 text-[13px] text-gray-400\">
          <span class=\"uppercase font-semibold text-gray-500 dark:text-gray-400\">Results</span>
          {% if settings.interface.stats %}
            <ais-stats></ais-stats>
          {% endif %}
        </div>
        {{ block(\x27hits_items\x27) }}
      </section>

      <div class=\"bg-gradient-to-b from-transparent to-white dark:to-gray-800 w-full h-8 sticky bottom-0\"></div>
    </div>
    {{ block(\x27hits_preview\x27) }}
  </div>
{% endblock %}
", "algolia-pro/blocks/hits.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\hits.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["use" => 1, "block" => 4, "if" => 11];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['use', 'block', 'if'],
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
