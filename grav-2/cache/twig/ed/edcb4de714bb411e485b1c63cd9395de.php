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

/* algolia-pro/blocks/hits_items.html.twig */
class __TwigTemplate_6763ebba10c19e6206f3fe0f382e57c2 extends Template
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
            'hits_items' => [$this, 'block_hits_items'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('hits_items', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hits_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <ais-hits class=\"flex h-full\" :transform-items=\"transformItems\">
    <template slot-scope=\"{ items }\">
      <span
        v-if=\"!Object.keys(items).length\"
        class=\"p-4 italic text-gray-700 dark:text-gray-400 items-center\"
      >
        ";
        // line 8
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 8), "lang", [], "any", false, false, true, 8), "no_results", [], "any", false, false, true, 8), 8, $this->source)), 8, $this->source), "html", null, true), 8, $this->source);
        yield "
      </span>
      <ul
        v-if=\"Object.keys(items).length\"
        role=\"listbox\"
        class=\"w-full divide-y divide-gray-200 dark:divide-gray-700\"
        aria-labelledby=\"search-label\"
      >
        <li v-for=\"(item, index) in items\"
            :key=\"item.objectID\"
            :id=\"`search-item-\${index}`\"
            :ref=\"`search-item-\${item.objectID}`\"
            @mouseenter=\"selected = item\"
            role=\"option\"
            :aria-selected=\"isSelected(item)\"
            class=\"group\"
            :class=\"{ \x27relative z-10\x27: isSelected(item) }\"
        >
          <a
            class=\"flex justify-between transition-none items-center leading-normal py-1 px-4 overflow-hidden\"
            :class=\"{
            \x27text-gray-900 dark:text-gray-300 bg-transparent\x27: !isSelected(item),
            \x27text-white bg-algolia-pro shadow\x27: isSelected(item)
          }\"
            :href=\"`";
        // line 32
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [], "any", false, false, true, 32), 32, $this->source), "html", null, true), 32, $this->source);
        yield "\${item.url}`\"
          >
            <div class=\"flex items-start overflow-hidden\">
              <div class=\"flex flex-col truncate\">
                <div class=\"flex items-center truncate text-xs leading-tight md:order-2 opacity-75\"
                     :class=\"{
                      \x27text-gray-900 dark:text-gray-300\x27: !isSelected(item),
                      \x27text-white\x27: isSelected(item)
                   }\"
                >
                  <template v-for=\"(crumb, index) in item.breadcrumbs\">
                    <template>
                      <div :key=\"`crumb-\${index}`\" class=\"flex-grow-0 truncate min-w-0\">
                        [[ crumb.name ]]
                      </div>
                      <svg
                        v-if=\"index != item.breadcrumbs.length - 1\"
                        :key=\"`icon-\${index}`\" viewBox=\"0 0 24 24\"
                        fill=\"none\"
                        stroke-linecap=\"round\"
                        stroke-linejoin=\"round\"
                        class=\"block w-4 h-4 py-0.5 stroke-current stroke-2 flex-none opacity-60\"
                        :class=\"{
                        \x27text-gray-400 dark:text-gray-300\x27: !isSelected(item),
                        \x27text-white\x27: isSelected(item)
                      }\"
                      >
                        <polyline points=\"9 18 15 12 9 6\"></polyline>
                      </svg>
                    </template>
                  </template>
                </div>
                <div class=\"md:order-1 truncate min-w-0 font-semibold\"
                     :class=\"{
                      \x27text-gray-500 dark:text-gray-300\x27: !isSelected(item),
                      \x27text-white\x27: isSelected(item)
                   }\"
                >
                  <div
                    class=\"truncate\"
                    :title=\"`\${item.title} \${item.subtitle && ";
        // line 72
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 72), "subtitle", [], "any", false, false, true, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
        yield " ? `(\${item.subtitle})` : \x27\x27}`\"
                  >
                    <ais-highlight
                      attribute=\"title\"
                      :hit=\"item\"
                      highlighted-tag-name=\"span\"
                      :class-names=\"{
                        \x27ais-Highlight\x27: \x27truncate\x27,
                        \x27ais-Highlight-highlighted\x27: `bg-transparent \${!isSelected(item) ? \x27text-algolia-pro\x27 : \x27text-white\x27}`,
                    }\"
                    ></ais-highlight>

                    ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 84), "subtitle", [], "any", false, false, true, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                    <template v-if=\"item.subtitle\">
                      (<ais-highlight
                        attribute=\"subtitle\"
                        :hit=\"item\"
                        highlighted-tag-name=\"span\"
                        :class-names=\"{
                          \x27ais-Highlight\x27: \x27truncate\x27,
                          \x27ais-Highlight-highlighted\x27: `bg-transparent \${!isSelected(item) ? \x27text-algolia-pro\x27 : \x27text-white\x27}`,
                      }\"
                      ></ais-highlight>)
                    </template>
                    ";
        }
        // line 97
        yield "                  </div>
                </div>
              </div>
            </div>
            <div class=\"w-6 ml-2 p-0.5 flex-none hidden\" :class=\"{ \x27flex\x27: isSelected(item) }\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
                   stroke-width=\"2\" stroke-linecap=\"round\"
                   stroke-linejoin=\"round\" class=\"block h-auto w-4\">
                <polyline points=\"9 10 4 15 9 20\"></polyline>
                <path d=\"M20 4v7a4 4 0 0 1-4 4H4\"></path>
              </svg>
            </div>
          </a>
        </li>
      </ul>
    </template>
  </ais-hits>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/hits_items.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  165 => 97,  151 => 85,  149 => 84,  134 => 72,  91 => 32,  64 => 8,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block hits_items %}
  <ais-hits class=\"flex h-full\" :transform-items=\"transformItems\">
    <template slot-scope=\"{ items }\">
      <span
        v-if=\"!Object.keys(items).length\"
        class=\"p-4 italic text-gray-700 dark:text-gray-400 items-center\"
      >
        {{ settings.interface.lang.no_results|t }}
      </span>
      <ul
        v-if=\"Object.keys(items).length\"
        role=\"listbox\"
        class=\"w-full divide-y divide-gray-200 dark:divide-gray-700\"
        aria-labelledby=\"search-label\"
      >
        <li v-for=\"(item, index) in items\"
            :key=\"item.objectID\"
            :id=\"`search-item-\${index}`\"
            :ref=\"`search-item-\${item.objectID}`\"
            @mouseenter=\"selected = item\"
            role=\"option\"
            :aria-selected=\"isSelected(item)\"
            class=\"group\"
            :class=\"{ \x27relative z-10\x27: isSelected(item) }\"
        >
          <a
            class=\"flex justify-between transition-none items-center leading-normal py-1 px-4 overflow-hidden\"
            :class=\"{
            \x27text-gray-900 dark:text-gray-300 bg-transparent\x27: !isSelected(item),
            \x27text-white bg-algolia-pro shadow\x27: isSelected(item)
          }\"
            :href=\"`{{ uri.rootUrl }}\${item.url}`\"
          >
            <div class=\"flex items-start overflow-hidden\">
              <div class=\"flex flex-col truncate\">
                <div class=\"flex items-center truncate text-xs leading-tight md:order-2 opacity-75\"
                     :class=\"{
                      \x27text-gray-900 dark:text-gray-300\x27: !isSelected(item),
                      \x27text-white\x27: isSelected(item)
                   }\"
                >
                  <template v-for=\"(crumb, index) in item.breadcrumbs\">
                    <template>
                      <div :key=\"`crumb-\${index}`\" class=\"flex-grow-0 truncate min-w-0\">
                        [[ crumb.name ]]
                      </div>
                      <svg
                        v-if=\"index != item.breadcrumbs.length - 1\"
                        :key=\"`icon-\${index}`\" viewBox=\"0 0 24 24\"
                        fill=\"none\"
                        stroke-linecap=\"round\"
                        stroke-linejoin=\"round\"
                        class=\"block w-4 h-4 py-0.5 stroke-current stroke-2 flex-none opacity-60\"
                        :class=\"{
                        \x27text-gray-400 dark:text-gray-300\x27: !isSelected(item),
                        \x27text-white\x27: isSelected(item)
                      }\"
                      >
                        <polyline points=\"9 18 15 12 9 6\"></polyline>
                      </svg>
                    </template>
                  </template>
                </div>
                <div class=\"md:order-1 truncate min-w-0 font-semibold\"
                     :class=\"{
                      \x27text-gray-500 dark:text-gray-300\x27: !isSelected(item),
                      \x27text-white\x27: isSelected(item)
                   }\"
                >
                  <div
                    class=\"truncate\"
                    :title=\"`\${item.title} \${item.subtitle && {{ settings.interface.subtitle ? 1 : 0 }} ? `(\${item.subtitle})` : \x27\x27}`\"
                  >
                    <ais-highlight
                      attribute=\"title\"
                      :hit=\"item\"
                      highlighted-tag-name=\"span\"
                      :class-names=\"{
                        \x27ais-Highlight\x27: \x27truncate\x27,
                        \x27ais-Highlight-highlighted\x27: `bg-transparent \${!isSelected(item) ? \x27text-algolia-pro\x27 : \x27text-white\x27}`,
                    }\"
                    ></ais-highlight>

                    {% if settings.interface.subtitle %}
                    <template v-if=\"item.subtitle\">
                      (<ais-highlight
                        attribute=\"subtitle\"
                        :hit=\"item\"
                        highlighted-tag-name=\"span\"
                        :class-names=\"{
                          \x27ais-Highlight\x27: \x27truncate\x27,
                          \x27ais-Highlight-highlighted\x27: `bg-transparent \${!isSelected(item) ? \x27text-algolia-pro\x27 : \x27text-white\x27}`,
                      }\"
                      ></ais-highlight>)
                    </template>
                    {% endif %}
                  </div>
                </div>
              </div>
            </div>
            <div class=\"w-6 ml-2 p-0.5 flex-none hidden\" :class=\"{ \x27flex\x27: isSelected(item) }\">
              <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
                   stroke-width=\"2\" stroke-linecap=\"round\"
                   stroke-linejoin=\"round\" class=\"block h-auto w-4\">
                <polyline points=\"9 10 4 15 9 20\"></polyline>
                <path d=\"M20 4v7a4 4 0 0 1-4 4H4\"></path>
              </svg>
            </div>
          </a>
        </li>
      </ul>
    </template>
  </ais-hits>
{% endblock %}
", "algolia-pro/blocks/hits_items.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\hits_items.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1, "if" => 84];
        static $filters = ["escape" => 8, "t" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
