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

/* algolia-pro/blocks/pagination.html.twig */
class __TwigTemplate_59b47964e5aaa5b76a0019020bb5d44a extends Template
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
            'pagination' => [$this, 'block_pagination'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('pagination', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pagination(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <ais-pagination>
    <template
      v-slot=\"{
      currentRefinement,
      nbPages,
      pages,
      isFirstPage,
      isLastPage,
      refine,
      createURL
    }\"
    >
      <div v-if=\"nbPages <= 1\"></div>
      <nav
        v-if=\"nbPages > 1\"
        class=\"select-none relative z-0 inline-flex rounded-md shadow-sm -space-x-px\"
        aria-label=\"Pagination\"
      >
        <span
          class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 text-xs font-medium\"
          :class=\"{
            \x27cursor-pointer bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-800\x27: !isFirstPage,
            \x27text-gray-300 bg-gray-50 dark:text-gray-500 dark:bg-gray-600\x27: isFirstPage
          }\"
          :href=\"createURL(currentRefinement - 1)\"
          @click.prevent=\"refine(currentRefinement - 1)\"
        >
          <span class=\"sr-only\">Previous</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
               stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
          >
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <polyline points=\"15 6 9 12 15 18\"/>
          </svg>
        </span>

        <span
          v-for=\"page in pages\"
          :key=\"page\"
          :aria-current=\"page === currentRefinement ? \x27page\x27 : false\"
          class=\"hidden md:inline-flex relative items-center px-3 py-1 border text-xs font-medium\"
          :class=\"{
            \x27z-10 bg-algolia-pro border-transparent text-white\x27: page === currentRefinement,
            \x27cursor-pointer bg-white border-gray-300 text-gray-500 hover:bg-gray-50 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-800\x27: page !== currentRefinement
          }\"
          @click.prevent=\"refine(page)\"
        >
          [[ page + 1 ]]
        </span>

        <span
          class=\"relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 text-xs font-medium\"
          :class=\"{
            \x27cursor-pointer bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-800\x27: !isLastPage,
            \x27text-gray-300 bg-gray-50 dark:text-gray-500 dark:bg-gray-600\x27: isLastPage
          }\"
          :href=\"createURL(currentRefinement + 1)\"
          @click.prevent=\"refine(currentRefinement + 1)\"
        >
          <span class=\"sr-only\">Next</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
               stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
          >
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <polyline points=\"9 6 15 12 9 18\"/>
          </svg>
        </span>
      </nav>
    </template>
  </ais-pagination>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block pagination %}
  <ais-pagination>
    <template
      v-slot=\"{
      currentRefinement,
      nbPages,
      pages,
      isFirstPage,
      isLastPage,
      refine,
      createURL
    }\"
    >
      <div v-if=\"nbPages <= 1\"></div>
      <nav
        v-if=\"nbPages > 1\"
        class=\"select-none relative z-0 inline-flex rounded-md shadow-sm -space-x-px\"
        aria-label=\"Pagination\"
      >
        <span
          class=\"relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 text-xs font-medium\"
          :class=\"{
            \x27cursor-pointer bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-800\x27: !isFirstPage,
            \x27text-gray-300 bg-gray-50 dark:text-gray-500 dark:bg-gray-600\x27: isFirstPage
          }\"
          :href=\"createURL(currentRefinement - 1)\"
          @click.prevent=\"refine(currentRefinement - 1)\"
        >
          <span class=\"sr-only\">Previous</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
               stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
          >
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <polyline points=\"15 6 9 12 15 18\"/>
          </svg>
        </span>

        <span
          v-for=\"page in pages\"
          :key=\"page\"
          :aria-current=\"page === currentRefinement ? \x27page\x27 : false\"
          class=\"hidden md:inline-flex relative items-center px-3 py-1 border text-xs font-medium\"
          :class=\"{
            \x27z-10 bg-algolia-pro border-transparent text-white\x27: page === currentRefinement,
            \x27cursor-pointer bg-white border-gray-300 text-gray-500 hover:bg-gray-50 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-800\x27: page !== currentRefinement
          }\"
          @click.prevent=\"refine(page)\"
        >
          [[ page + 1 ]]
        </span>

        <span
          class=\"relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 text-xs font-medium\"
          :class=\"{
            \x27cursor-pointer bg-white text-gray-500 hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-800\x27: !isLastPage,
            \x27text-gray-300 bg-gray-50 dark:text-gray-500 dark:bg-gray-600\x27: isLastPage
          }\"
          :href=\"createURL(currentRefinement + 1)\"
          @click.prevent=\"refine(currentRefinement + 1)\"
        >
          <span class=\"sr-only\">Next</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\"
               stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
          >
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <polyline points=\"9 6 15 12 9 18\"/>
          </svg>
        </span>
      </nav>
    </template>
  </ais-pagination>
{% endblock %}
", "algolia-pro/blocks/pagination.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
