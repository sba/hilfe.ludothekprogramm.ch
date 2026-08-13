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

/* algolia-pro/blocks/hits_preview.html.twig */
class __TwigTemplate_c96d73b0dbfc52b3b5127e0aa23101a1 extends Template
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
            'hits_preview' => [$this, 'block_hits_preview'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('hits_preview', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hits_preview(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 2), "preview", [], "any", false, false, true, 2), "enabled", [], "any", false, false, true, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "  <div
    v-if=\"selected\"
    class=\"preview-panel bg-gray-100 dark:bg-gray-900 bg-opacity-60 hidden md:block w-1/2 flex-none overflow-y-auto leading-normal scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-gray-100 scrollbar-thumb-gray-300 dark:scrollbar-track-gray-800 dark:scrollbar-thumb-gray-700\"
  >
    <section aria-label=\"Preview panel\" aria-busy=\"false\" aria-live=\"polite\" class=\"w-full py-4 px-7 lg:px-14\">
      <ul
        aria-label=\"Breadcrumb\"
        class=\"flex justify-center items-center flex-wrap text-xs text-gray-700 dark:text-gray-400\"
      >
        <li
          v-for=\"(crumb, index) in selected.breadcrumbs\"
          :key=\"index\"
          class=\"flex items-center\"
        >
          <span>[[ crumb.name ]]</span>
          <svg
            v-if=\"index != selected.breadcrumbs.length - 1\"
            viewBox=\"0 0 24 24\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
            role=\"presentation\"
            class=\"block w-4 h-4 py-0.5 stroke-current stroke-2 flex-none text-gray-500 dark:text-gray-400 opacity-60\"
          >
            <polyline points=\"9 18 15 12 9 6\"></polyline>
          </svg>
        </li>
      </ul>
      <div class=\"flex justify-center text-center py-2 m-auto\">
        <h1 class=\"text-xl font-bold dark:text-gray-200\">
          <span class=\"tracking-tight\">
            <ais-highlight
              attribute=\"title\"
              :hit=\"selected\"
              highlighted-tag-name=\"span\"
              :class-names=\"{
                \x27ais-Highlight\x27: \x27\x27,
                \x27ais-Highlight-highlighted\x27: \x27text-algolia-pro\x27,
              }\"
            ></ais-highlight>

            ";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 41), "subtitle", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "            <template v-if=\"selected.subtitle\">
              (<ais-highlight
                attribute=\"subtitle\"
                :hit=\"selected\"
                highlighted-tag-name=\"span\"
                :class-names=\"{
                    \x27ais-Highlight\x27: \x27\x27,
                    \x27ais-Highlight-highlighted\x27: \x27text-algolia-pro\x27,
                }\"
              ></ais-highlight>)
            </template>
            ";
            }
            // line 54
            yield "          </span>
        </h1>
      </div>
      <div role=\"document\">
        <ais-snippet
          attribute=\"summary\"
          :hit=\"selected\"
          highlighted-tag-name=\"span\"
          :class-names=\"{
            \x27ais-Snippet\x27: \x27leading-normal text-left text-gray-800 dark:text-gray-300 mt-4 m-auto break-words mb-4\x27,
            \x27ais-Snippet-highlighted\x27: \x27bg-transparent text-algolia-pro\x27,
          }\"
        ></ais-snippet>
      </div>
      ";
            // line 68
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 68), "preview", [], "any", false, false, true, 68), "toc", [], "any", false, false, true, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "        <div class=\"mt-6\" v-if=\"Object.keys(selected.headers || []).length && !selected.subtitle\">
          <h2 class=\"font-sans-alt uppercase font-semibold tracking-wide text-gray-500 dark:text-gray-400 text-xs\">
            On this page
          </h2>
          <div v-for=\"(titles, header) in selected.headers || []\"
            :key=\"header\"
            role=\"directory\"
            class=\"list-inside pt-1 text-sm list-decimal space-y-1 divide-y divide-gray-300 dark:divide-gray-800\"
          >
            <template v-for=\"(title, index) in titles\">
              <div :key=\"index\"
                  class=\"text-xs text-gray-600 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-400 leading-normal\">
                [[ title ]]
              </div>
            </template>
          </div>
        </div>
      ";
            }
            // line 87
            yield "    </section>
  </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/hits_preview.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 87,  133 => 69,  131 => 68,  115 => 54,  101 => 42,  99 => 41,  59 => 3,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block hits_preview %}
  {% if settings.interface.preview.enabled %}
  <div
    v-if=\"selected\"
    class=\"preview-panel bg-gray-100 dark:bg-gray-900 bg-opacity-60 hidden md:block w-1/2 flex-none overflow-y-auto leading-normal scrollbar-thin scrollbar-thumb-rounded-full scrollbar-track-gray-100 scrollbar-thumb-gray-300 dark:scrollbar-track-gray-800 dark:scrollbar-thumb-gray-700\"
  >
    <section aria-label=\"Preview panel\" aria-busy=\"false\" aria-live=\"polite\" class=\"w-full py-4 px-7 lg:px-14\">
      <ul
        aria-label=\"Breadcrumb\"
        class=\"flex justify-center items-center flex-wrap text-xs text-gray-700 dark:text-gray-400\"
      >
        <li
          v-for=\"(crumb, index) in selected.breadcrumbs\"
          :key=\"index\"
          class=\"flex items-center\"
        >
          <span>[[ crumb.name ]]</span>
          <svg
            v-if=\"index != selected.breadcrumbs.length - 1\"
            viewBox=\"0 0 24 24\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
            role=\"presentation\"
            class=\"block w-4 h-4 py-0.5 stroke-current stroke-2 flex-none text-gray-500 dark:text-gray-400 opacity-60\"
          >
            <polyline points=\"9 18 15 12 9 6\"></polyline>
          </svg>
        </li>
      </ul>
      <div class=\"flex justify-center text-center py-2 m-auto\">
        <h1 class=\"text-xl font-bold dark:text-gray-200\">
          <span class=\"tracking-tight\">
            <ais-highlight
              attribute=\"title\"
              :hit=\"selected\"
              highlighted-tag-name=\"span\"
              :class-names=\"{
                \x27ais-Highlight\x27: \x27\x27,
                \x27ais-Highlight-highlighted\x27: \x27text-algolia-pro\x27,
              }\"
            ></ais-highlight>

            {% if settings.interface.subtitle %}
            <template v-if=\"selected.subtitle\">
              (<ais-highlight
                attribute=\"subtitle\"
                :hit=\"selected\"
                highlighted-tag-name=\"span\"
                :class-names=\"{
                    \x27ais-Highlight\x27: \x27\x27,
                    \x27ais-Highlight-highlighted\x27: \x27text-algolia-pro\x27,
                }\"
              ></ais-highlight>)
            </template>
            {% endif %}
          </span>
        </h1>
      </div>
      <div role=\"document\">
        <ais-snippet
          attribute=\"summary\"
          :hit=\"selected\"
          highlighted-tag-name=\"span\"
          :class-names=\"{
            \x27ais-Snippet\x27: \x27leading-normal text-left text-gray-800 dark:text-gray-300 mt-4 m-auto break-words mb-4\x27,
            \x27ais-Snippet-highlighted\x27: \x27bg-transparent text-algolia-pro\x27,
          }\"
        ></ais-snippet>
      </div>
      {% if settings.interface.preview.toc %}
        <div class=\"mt-6\" v-if=\"Object.keys(selected.headers || []).length && !selected.subtitle\">
          <h2 class=\"font-sans-alt uppercase font-semibold tracking-wide text-gray-500 dark:text-gray-400 text-xs\">
            On this page
          </h2>
          <div v-for=\"(titles, header) in selected.headers || []\"
            :key=\"header\"
            role=\"directory\"
            class=\"list-inside pt-1 text-sm list-decimal space-y-1 divide-y divide-gray-300 dark:divide-gray-800\"
          >
            <template v-for=\"(title, index) in titles\">
              <div :key=\"index\"
                  class=\"text-xs text-gray-600 hover:text-gray-800 dark:text-gray-500 dark:hover:text-gray-400 leading-normal\">
                [[ title ]]
              </div>
            </template>
          </div>
        </div>
      {% endif %}
    </section>
  </div>
  {% endif %}
{% endblock %}
", "algolia-pro/blocks/hits_preview.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\hits_preview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "if" => 2];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
