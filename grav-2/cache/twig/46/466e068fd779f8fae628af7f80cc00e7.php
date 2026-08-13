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

/* partials/messages.html.twig */
class __TwigTemplate_1cc33a5a2ab622be86c98cb25efab656 extends Template
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
        $context["type_mapping"] = ["info" => "success", "error" => "error", "warning" => "warning"];
        // line 2
        $context["icon_mapping"] = ["info" => "checkmark", "error" => "wrong", "warning" => "information"];
        // line 3
        yield "
";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, true, 4), "all", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div id=\"messages\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "messages", [], "any", false, false, true, 6), "fetch", [], "any", false, false, true, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "
        ";
                // line 8
                $context["scope"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "scope", [], "any", false, false, true, 8), 8, $this->source));
                // line 9
                yield "        ";
                $context["type"] = (($_v0 = ($context["type_mapping"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["scope"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["type_mapping"] ?? null), ($context["scope"] ?? null), [], "array", false, false, true, 9));
                // line 10
                yield "        ";
                $context["icon"] = (($_v1 = ($context["icon_mapping"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["scope"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icon_mapping"] ?? null), ($context["scope"] ?? null), [], "array", false, false, true, 10));
                // line 11
                yield "
        <div class=\"toast toast-";
                // line 12
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 12, $this->source), "html", null, true), 12, $this->source);
                yield " ";
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["scope"] ?? null), 12, $this->source), "html", null, true), 12, $this->source);
                yield "\">
            <i class=\"icon dripicons-";
                // line 13
                yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 13, $this->source), "html", null, true), 13, $this->source);
                yield "\"></i> ";
                yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, true, 13), 13, $this->source), 13, $this->source);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/messages.html.twig";
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
        return array (  91 => 16,  80 => 13,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  63 => 8,  60 => 7,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set type_mapping = {\x27info\x27:\x27success\x27, \x27error\x27: \x27error\x27, \x27warning\x27: \x27warning\x27} %}
{% set icon_mapping = {\x27info\x27:\x27checkmark\x27, \x27error\x27:\x27wrong\x27, \x27warning\x27:\x27information\x27} %}

{% if grav.messages.all %}
    <div id=\"messages\">
    {% for message in grav.messages.fetch %}

        {% set scope = message.scope|e %}
        {% set type = type_mapping[scope] %}
        {% set icon = icon_mapping[scope] %}

        <div class=\"toast toast-{{ type }} {{ scope }}\">
            <i class=\"icon dripicons-{{ icon }}\"></i> {{ message.message|raw }}
        </div>
    {% endfor %}
    </div>
{% endif %}", "partials/messages.html.twig", "D:\\htdocs\\hilfe2.ludothekprogramm.ch\\grav-2\\user\\themes\\learn4\\templates\\partials\\messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 4, "for" => 6];
        static $filters = ["e" => 8, "escape" => 12, "raw" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['e', 'escape', 'raw'],
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
