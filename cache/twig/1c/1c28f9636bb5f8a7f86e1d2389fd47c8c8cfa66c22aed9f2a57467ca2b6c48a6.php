<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/sidebar.html.twig */
class __TwigTemplate_82820ccf619aaaa758258a21bf7f293b496af180261f47c454378147cdb2cf32 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/sidebar.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"learn-brand\">
    <div id=\"header\">
        <a id=\"logo\" href=\"";
        // line 5
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", [])) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", [])) : (($context["base_url_absolute"] ?? null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/sidebar.html.twig", 5)->display($context);
        echo "</a>
        <div class=\"searchbox\">
            <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
            <input id=\"search-by\" type=\"text\" placeholder=\"";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN4_SEARCH_DOCUMENTATION");
        echo "\"
                   data-search-input=\"";
        // line 9
        echo ($context["base_url_relative"] ?? null);
        echo "/s/q\"/>
            <span data-search-clear><i class=\"fa fa-close\"></i></span>
        </div>
        <div class=\"search-options columns\">
            <div class=\"adv-search column col-8\"><i class=\"fa fa-sliders\"></i> <a href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("search");
        echo "\">Advanced</a></div>
            ";
        // line 14
        $this->loadTemplate("partials/versions.html.twig", "partials/sidebar.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
    </div>
</div>
<div class=\"learn-nav\" data-simplebar>
    <div class=\"highlightable\">
        ";
        // line 20
        if ($this->getAttribute(($context["theme_config"] ?? null), "top_level_version", [])) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 22
                echo "                ";
                echo $context["macros"]->getversion($context["ver"]);
                echo "
                <ul id=\"";
                // line 23
                echo $context["slug"];
                echo "\" class=\"topics\">
                ";
                // line 24
                echo $context["macros"]->getloop($context["ver"], "");
                echo "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "            <ul class=\"topics\">
                ";
            // line 29
            if ($this->getAttribute(($context["theme_config"] ?? null), "root_page", [])) {
                // line 30
                echo "                    ";
                echo $context["macros"]->getloop($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["theme_config"] ?? null), "root_page", [])], "method"), "");
                echo "
                ";
            } else {
                // line 32
                echo "            ";
                echo $context["macros"]->getloop(($context["pages"] ?? null), "");
                echo "
                ";
            }
            // line 34
            echo "            </ul>
        ";
        }
        // line 36
        echo "        <hr />

        <a class=\"side-tools padding\" href=\"#\" data-clear-history-toggle>
            <i class=\"fa fa-fw fa-history\"></i> ";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN4_CLEAR_HISTORY");
        echo "
        </a><br/>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  118 => 36,  114 => 34,  108 => 32,  102 => 30,  100 => 29,  97 => 28,  94 => 27,  85 => 24,  81 => 23,  76 => 22,  71 => 21,  69 => 20,  62 => 15,  60 => 14,  56 => 13,  49 => 9,  45 => 8,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

<div class=\"learn-brand\">
    <div id=\"header\">
        <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">{% include 'partials/logo.html.twig' %}</a>
        <div class=\"searchbox\">
            <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
            <input id=\"search-by\" type=\"text\" placeholder=\"{{ 'THEME_LEARN4_SEARCH_DOCUMENTATION'|t }}\"
                   data-search-input=\"{{ base_url_relative }}/s/q\"/>
            <span data-search-clear><i class=\"fa fa-close\"></i></span>
        </div>
        <div class=\"search-options columns\">
            <div class=\"adv-search column col-8\"><i class=\"fa fa-sliders\"></i> <a href=\"{{ url('search') }}\">Advanced</a></div>
            {% include 'partials/versions.html.twig' %}
        </div>
    </div>
</div>
<div class=\"learn-nav\" data-simplebar>
    <div class=\"highlightable\">
        {% if theme_config.top_level_version %}
            {% for slug, ver in pages.children %}
                {{ macros.version(ver) }}
                <ul id=\"{{ slug }}\" class=\"topics\">
                {{ macros.loop(ver, '') }}
                </ul>
            {% endfor %}
        {% else %}
            <ul class=\"topics\">
                {% if theme_config.root_page %}
                    {{ macros.loop(page.find(theme_config.root_page), '') }}
                {% else %}
            {{ macros.loop(pages, '') }}
                {% endif %}
            </ul>
        {% endif %}
        <hr />

        <a class=\"side-tools padding\" href=\"#\" data-clear-history-toggle>
            <i class=\"fa fa-fw fa-history\"></i> {{ 'THEME_LEARN4_CLEAR_HISTORY'|t }}
        </a><br/>
    </div>
</div>
", "partials/sidebar.html.twig", "C:\\htdocs\\grav-admin-test.local\\user\\themes\\learn4\\templates\\partials\\sidebar.html.twig");
    }
}
