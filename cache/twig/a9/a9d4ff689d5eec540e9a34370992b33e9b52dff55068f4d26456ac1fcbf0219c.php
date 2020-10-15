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

/* partials/versions.html.twig */
class __TwigTemplate_b7726d48bf2da001d1a70a3dc4b48468d4f063ba0da67da24cbadb93819d21bd extends \Twig\Template
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
        echo "<div class=\"version-chooser column col-4 text-right\">
    <select id=\"switch-version\">
    ";
        // line 3
        $context["langobj"] = $this->getAttribute(($context["grav"] ?? null), "language", [], "array");
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["langswitcher"] ?? null), "languages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 5
            echo "        ";
            if (($context["key"] == $this->getAttribute(($context["langswitcher"] ?? null), "current", []))) {
                // line 6
                echo "            ";
                $context["lang_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
                // line 7
                echo "            ";
                $context["active"] = " selected=\"selected\"";
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
                $context["lang_url"] = ((((($context["base_url_simple"] ?? null) . $this->getAttribute(($context["langobj"] ?? null), "getLanguageURLPrefix", [0 => $context["key"]], "method")) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", []))) ? (((($context["base_url_simple"] ?? null) . $this->getAttribute(($context["langobj"] ?? null), "getLanguageURLPrefix", [0 => $context["key"]], "method")) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", []))) : ("/"));
                // line 10
                echo "            ";
                $context["active"] = "";
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <option value=\"";
            echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
            echo "\"";
            echo ($context["active"] ?? null);
            echo ">v";
            echo twig_number_format_filter($this->env, ($context["key"] / 10), 1);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>
</div>
<script>
jQuery(document).on('change', '#switch-version', function() { window.location.href = this.value });
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/versions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"version-chooser column col-4 text-right\">
    <select id=\"switch-version\">
    {% set langobj = grav['language'] %}
    {% for key in langswitcher.languages %}
        {% if key == langswitcher.current %}
            {% set lang_url = page.url %}
            {% set active = ' selected=\"selected\"' %}
        {% else %}
            {% set lang_url = base_url_simple ~ langobj.getLanguageURLPrefix(key)~langswitcher.page_route ?: '/' %}
            {% set active = '' %}
        {% endif %}
        <option value=\"{{ lang_url ~ uri.params }}\"{{ active }}>v{{ (key / 10)|number_format(1) }}</option>
    {% endfor %}
    </select>
</div>
<script>
jQuery(document).on('change', '#switch-version', function() { window.location.href = this.value });
</script>
", "partials/versions.html.twig", "C:\\htdocs\\grav-admin-test.local\\user\\themes\\learn4\\templates\\partials\\versions.html.twig");
    }
}
