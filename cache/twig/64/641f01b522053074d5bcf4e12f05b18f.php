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

/* algolia-pro/blocks/searchbox_input.html.twig */
class __TwigTemplate_b8b3d4233f547c43af80943c1c8e7df4 extends Template
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
            'searchbox_input' => [$this, 'block_searchbox_input'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('searchbox_input', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searchbox_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <form
    class=\"flex items-center w-full h-full outline-none rounded-tl-lg\"
    action=\"\"
    novalidate=\"\"
    role=\"search\"
  >
    <label
      for=\"algolia-instantsearch-input\"
      class=\"h-full px-4 flex items-center justify-center transition-colors duration-200 ease-in-out text-gray-200\"
    >
      <svg viewBox=\"0 0 20 20\" fill=\"currentColor\" class=\"flex-none h-6 py-1\">
        <path
          d=\"M19.71,18.29,16,14.61A9,9,0,1,0,14.61,16l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,19.71,18.29ZM2,9a7,7,0,1,1,12,4.93h0s0,0,0,0A7,7,0,0,1,2,9Z\"></path>
      </svg>
    </label>
    <ais-search-box class=\"relative flex flex-1 items-center\">
      <template
        slot-scope=\"{ currentRefinement, isSearchStalled, refine }\"
      >
        <input
          class=\"flex flex-1 h-full bg-transparent focus:text-gray-900 dark:focus:text-gray-300 text-gray-500 placeholder-gray-300 dark:placeholder-gray-600 shadow-none outline-none truncate text-lg sm:text-2xl caret-algolia-pro leading-normalized w-full !appearance-none rounded-none transition-colors duration-200 ease-in-out\"
          id=\"algolia-instantsearch-input\"
          ref=\"searchbox\"
          type=\"search\"
          :value=\"query\"
          @input=\"refineWrapper(refine, \$event.currentTarget.value)\"
          aria-autocomplete=\"both\"
          aria-labelledby=\"search-label\"
          placeholder=\"";
        // line 30
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 30), "lang", [], "any", false, false, true, 30), "placeholder", [], "any", false, false, true, 30), 30, $this->source)), 30, $this->source), "html", null, true), 30, $this->source);
        yield "\"
          maxlength=\"512\"
          enterkeyhint=\"go\"
          autocomplete=\"off\"
          autocorrect=\"off\"
          autocapitalize=\"off\"
          spellcheck=\"false\"
        />
        <span :hidden=\"!isSearchStalled\">";
        // line 38
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 38), "lang", [], "any", false, false, true, 38), "loading", [], "any", false, false, true, 38), 38, $this->source)), 38, $this->source), "html", null, true), 38, $this->source);
        yield "</span>
        <button
          v-if=\"query\"
          aria-label=\"Clear\"
          type=\"reset\"
          @click.prevent=\"refine(query = null);\"
          class=\"flex items-center justify-center h-full px-4 py-6 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-300 opacity-75 fill-current cursor-pointer transition-fast-out\"
        >
          <svg viewBox=\"0 0 14 14\" class=\"w-2 h-2\">
            <path
              d=\"M8.41,7l5.3-5.29A1,1,0,1,0,12.29.29L7,5.59,1.71.29A1,1,0,0,0,.29,1.71L5.59,7,.29,12.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L7,8.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z\"></path>
          </svg>
        </button>
      </template>
    </ais-search-box>
  </form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/searchbox_input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  97 => 38,  86 => 30,  56 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block searchbox_input %}
  <form
    class=\"flex items-center w-full h-full outline-none rounded-tl-lg\"
    action=\"\"
    novalidate=\"\"
    role=\"search\"
  >
    <label
      for=\"algolia-instantsearch-input\"
      class=\"h-full px-4 flex items-center justify-center transition-colors duration-200 ease-in-out text-gray-200\"
    >
      <svg viewBox=\"0 0 20 20\" fill=\"currentColor\" class=\"flex-none h-6 py-1\">
        <path
          d=\"M19.71,18.29,16,14.61A9,9,0,1,0,14.61,16l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,19.71,18.29ZM2,9a7,7,0,1,1,12,4.93h0s0,0,0,0A7,7,0,0,1,2,9Z\"></path>
      </svg>
    </label>
    <ais-search-box class=\"relative flex flex-1 items-center\">
      <template
        slot-scope=\"{ currentRefinement, isSearchStalled, refine }\"
      >
        <input
          class=\"flex flex-1 h-full bg-transparent focus:text-gray-900 dark:focus:text-gray-300 text-gray-500 placeholder-gray-300 dark:placeholder-gray-600 shadow-none outline-none truncate text-lg sm:text-2xl caret-algolia-pro leading-normalized w-full !appearance-none rounded-none transition-colors duration-200 ease-in-out\"
          id=\"algolia-instantsearch-input\"
          ref=\"searchbox\"
          type=\"search\"
          :value=\"query\"
          @input=\"refineWrapper(refine, \$event.currentTarget.value)\"
          aria-autocomplete=\"both\"
          aria-labelledby=\"search-label\"
          placeholder=\"{{ settings.interface.lang.placeholder|t }}\"
          maxlength=\"512\"
          enterkeyhint=\"go\"
          autocomplete=\"off\"
          autocorrect=\"off\"
          autocapitalize=\"off\"
          spellcheck=\"false\"
        />
        <span :hidden=\"!isSearchStalled\">{{ settings.interface.lang.loading|t }}</span>
        <button
          v-if=\"query\"
          aria-label=\"Clear\"
          type=\"reset\"
          @click.prevent=\"refine(query = null);\"
          class=\"flex items-center justify-center h-full px-4 py-6 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-300 opacity-75 fill-current cursor-pointer transition-fast-out\"
        >
          <svg viewBox=\"0 0 14 14\" class=\"w-2 h-2\">
            <path
              d=\"M8.41,7l5.3-5.29A1,1,0,1,0,12.29.29L7,5.59,1.71.29A1,1,0,0,0,.29,1.71L5.59,7,.29,12.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L7,8.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z\"></path>
          </svg>
        </button>
      </template>
    </ais-search-box>
  </form>
{% endblock %}", "algolia-pro/blocks/searchbox_input.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\searchbox_input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 1];
        static $filters = ["escape" => 30, "t" => 30];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
