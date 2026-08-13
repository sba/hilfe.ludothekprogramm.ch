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

/* algolia-pro/blocks/footer.html.twig */
class __TwigTemplate_195926856d8289a4ee53802426c47ec7 extends Template
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
        $_trait_0 = $this->load("algolia-pro/blocks/pagination.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."algolia-pro/blocks/pagination.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'footer' => [$this, 'block_footer'],
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
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  <footer
    v-if=\"query\"
    class=\"flex justify-end md:justify-between items-center flex-none p-2 md:p-4 border-t border-gray-600 border-opacity-10\"
  >
    ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 8), "footer", [], "any", false, false, true, 8), "enabled", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "      <div class=\"hidden md:flex text-gray-600 text-xs font-mono\">
        ";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 10), "footer", [], "any", false, false, true, 10), "pagination", [], "any", false, false, true, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("pagination", $context, $blocks);
                yield "
        ";
            }
            // line 13
            yield "      </div>
      <div class=\"block h-4 py-1 flex items-center space-x-2\">
        ";
            // line 15
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 15), "footer", [], "any", false, false, true, 15), "algolia_copy", [], "any", false, false, true, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "        <ais-powered-by :theme=\"activeAppearance\"></ais-powered-by>
        ";
            }
            // line 18
            yield "
        ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 19), "footer", [], "any", false, false, true, 19), "algolia_copy", [], "any", false, false, true, 19) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 19), "footer", [], "any", false, false, true, 19), "algolia_pro_copy", [], "any", false, false, true, 19))) {
                // line 20
                yield "        <span class=\"text-gray-500 text-xs\">/</span>
        ";
            }
            // line 22
            yield "
        ";
            // line 23
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "interface", [], "any", false, false, true, 23), "footer", [], "any", false, false, true, 23), "algolia_pro_copy", [], "any", false, false, true, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "        <a
          href=\"https://getgrav.org/premium/algolia-pro\"
          rel=\"noopener noreferrer\"
          target=\"_blank\"
          class=\"flex items-center h-full\"
        >
          <span class=\"text-gray-500 dark:text-gray-200 text-[13px]\">
            Powered by <span class=\"text-algolia-pro dark:text-white text-bold tracking-wide\">Algolia Pro Plugin</span>
          </span>
        </a>
        ";
            }
            // line 35
            yield "      </div>
    ";
        }
        // line 37
        yield "  </footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "algolia-pro/blocks/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  131 => 37,  127 => 35,  114 => 24,  112 => 23,  109 => 22,  105 => 20,  103 => 19,  100 => 18,  96 => 16,  94 => 15,  90 => 13,  84 => 11,  82 => 10,  79 => 9,  77 => 8,  71 => 4,  60 => 3,  57 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% use \x27algolia-pro/blocks/pagination.html.twig\x27 %}

{% block footer %}
  <footer
    v-if=\"query\"
    class=\"flex justify-end md:justify-between items-center flex-none p-2 md:p-4 border-t border-gray-600 border-opacity-10\"
  >
    {% if settings.interface.footer.enabled %}
      <div class=\"hidden md:flex text-gray-600 text-xs font-mono\">
        {% if settings.interface.footer.pagination %}
          {{ block(\x27pagination\x27) }}
        {% endif %}
      </div>
      <div class=\"block h-4 py-1 flex items-center space-x-2\">
        {% if settings.interface.footer.algolia_copy %}
        <ais-powered-by :theme=\"activeAppearance\"></ais-powered-by>
        {% endif %}

        {% if settings.interface.footer.algolia_copy and settings.interface.footer.algolia_pro_copy %}
        <span class=\"text-gray-500 text-xs\">/</span>
        {% endif %}

        {% if settings.interface.footer.algolia_pro_copy %}
        <a
          href=\"https://getgrav.org/premium/algolia-pro\"
          rel=\"noopener noreferrer\"
          target=\"_blank\"
          class=\"flex items-center h-full\"
        >
          <span class=\"text-gray-500 dark:text-gray-200 text-[13px]\">
            Powered by <span class=\"text-algolia-pro dark:text-white text-bold tracking-wide\">Algolia Pro Plugin</span>
          </span>
        </a>
        {% endif %}
      </div>
    {% endif %}
  </footer>
{% endblock %}
", "algolia-pro/blocks/footer.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\plugins\\algolia-pro\\templates\\algolia-pro\\blocks\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["use" => 1, "block" => 3, "if" => 8];
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
