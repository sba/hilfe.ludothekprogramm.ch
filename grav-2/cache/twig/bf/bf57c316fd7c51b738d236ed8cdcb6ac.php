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

/* partials/algolia-pro/instantsearch.html.twig */
class __TwigTemplate_49acc5f6bdeb6ab3dd951cd6e157dd73 extends Template
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

        // line 7
        $_trait_0 = $this->load("algolia-pro/blocks/assets.html.twig", 7);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/assets.html.twig".'" cannot be used as a trait.', 7, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

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
        // line 1
        if ((($tmp = ($context["index"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "
  ";
            // line 3
            $context["settings"] = $this->env->getFunction('algolia_pro_settings')->getCallable()($context, $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 3, $this->source));
            // line 4
            yield "

  ";
            // line 6
            if ((($tmp = ($context["settings"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "    ";
                // line 8
                yield "    ";
                yield from                 $this->unwrap()->yieldBlock("assets", $context, $blocks);
                yield "

    <div
      data-algolia-pro=\"";
                // line 11
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->base64EncodeFilter($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, ["app_id" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "plugin", [], "any", false, false, true, 11), "application_id", [], "any", false, false, true, 11), 11, $this->source), "api_key" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "plugin", [], "any", false, false, true, 11), "search_only_api_key", [], "any", false, false, true, 11), 11, $this->source), "rootUrl" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [], "any", false, false, true, 11), 11, $this->source), "appearance" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 11), "appearance", [], "any", false, false, true, 11), 11, $this->source), "warmConnection" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 11), "warm_connection", [], "any", false, false, true, 11), 11, $this->source), "debounce" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 11), "debounce", [], "any", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (250) : (0)), "expose" => $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 11), "advanced", [], "any", false, false, true, 11), "expose_global", [], "any", false, false, true, 11), 11, $this->source)]), 11, $this->source)), 11, $this->source), "html", null, true), 11, $this->source);
                yield "\"
      :class=\"algoliaProAppearance\"
      v-show=\"isOpen\"
    >
      <ais-instant-search
        index-name=\"";
                // line 16
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "index_key", [], "any", false, false, true, 16), 16, $this->source), "html", null, true), 16, $this->source);
                yield "\"
        :search-client=\"searchClient\"
        :class-names=\"{
          \x27ais-InstantSearch\x27: \x27search fixed inset-0 flex justify-center items-start bg-gray-400 bg-opacity-50 z-500 overflow-hidden md:p-8\x27,
        }\"
      >
        <div
          class=\"md:max-w-4xl w-full flex flex-col justify-between bg-white dark:bg-gray-800 shadow-md md:rounded-lg max-h-screen md:max-h-[min(36rem,calc(100vh-4rem))]\"
          :aria-expanded=\"isOpen\"
          aria-haspopup=\"listbox\"
          aria-labelledby=\"search-label\"
        >
          ";
                // line 28
                yield from $this->load("partials/algolia-pro/instantsearch-scopes.html.twig", 28)->unwrap()->yield($context);
                // line 29
                yield "        </div>
      </ais-instant-search>
    </div>
  ";
            }
        } else {
            // line 34
            yield "  <pre>Index is required but missing</pre>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/algolia-pro/instantsearch.html.twig";
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
        return array (  110 => 34,  103 => 29,  101 => 28,  86 => 16,  78 => 11,  71 => 8,  69 => 7,  67 => 6,  63 => 4,  61 => 3,  58 => 2,  56 => 1,  35 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if index %}

  {% set settings = algolia_pro_settings(index) %}


  {% if settings %}
    {% use \x27algolia-pro/blocks/assets.html.twig\x27 %}
    {{ block(\x27assets\x27) }}

    <div
      data-algolia-pro=\"{{ { app_id: settings.plugin.application_id, api_key: settings.plugin.search_only_api_key, rootUrl: uri.rootUrl, appearance: settings.interface.appearance, warmConnection: settings.interface.warm_connection, debounce: settings.interface.debounce ? 250 : 0, expose: settings.interface.advanced.expose_global }|json_encode|base64_encode }}\"
      :class=\"algoliaProAppearance\"
      v-show=\"isOpen\"
    >
      <ais-instant-search
        index-name=\"{{ settings.index_key }}\"
        :search-client=\"searchClient\"
        :class-names=\"{
          \x27ais-InstantSearch\x27: \x27search fixed inset-0 flex justify-center items-start bg-gray-400 bg-opacity-50 z-500 overflow-hidden md:p-8\x27,
        }\"
      >
        <div
          class=\"md:max-w-4xl w-full flex flex-col justify-between bg-white dark:bg-gray-800 shadow-md md:rounded-lg max-h-screen md:max-h-[min(36rem,calc(100vh-4rem))]\"
          :aria-expanded=\"isOpen\"
          aria-haspopup=\"listbox\"
          aria-labelledby=\"search-label\"
        >
          {% include \x27partials/algolia-pro/instantsearch-scopes.html.twig\x27 %}
        </div>
      </ais-instant-search>
    </div>
  {% endif %}
{% else %}
  <pre>Index is required but missing</pre>
{% endif %}
", "partials/algolia-pro/instantsearch.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\plugins\\algolia-pro\\templates\\partials\\algolia-pro\\instantsearch.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 3, "use" => 7, "include" => 28];
        static $filters = ["escape" => 11, "base64_encode" => 11, "json_encode" => 11];
        static $functions = ["algolia_pro_settings" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'use', 'include'],
                ['escape', 'base64_encode', 'json_encode'],
                ['algolia_pro_settings'],
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
