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

/* forms/fields/indexstatus/indexstatus.html.twig */
class __TwigTemplate_a1e9915d51fc96f42efaa086df4a01db0ad1126f4d95fb008daf7c07cf5c05b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/indexstatus/indexstatus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"form-list-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\">
        <div class=\"index-status\">
            ";
        // line 6
        if ($this->getAttribute(($context["tntsearch_index_status"] ?? null), "status", [])) {
            // line 7
            echo "                <button id=\"tntsearch-index\" class=\"button reindex tntsearch-reindex\">Re-Index Content</button>
                <span class=\"tntsearch-status success\"><i class=\"fa fa-book\"></i> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tntsearch_index_status"] ?? null), "msg", []), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 10
            echo "                <button id=\"tntsearch-index\" class=\"button critical tntsearch-reindex\">Index Content</button>
                <span class=\"tntsearch-status error\"><i class=\"fa fa-warning\"></i> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tntsearch_index_status"] ?? null), "msg", []), "html", null, true);
            echo "</span>
            ";
        }
        // line 13
        echo "            <div class=\"warning tntsearch-error-details\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/indexstatus/indexstatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 11,  58 => 10,  53 => 8,  50 => 7,  48 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"form-list-wrapper {{ field.size }}\">
        <div class=\"index-status\">
            {% if tntsearch_index_status.status %}
                <button id=\"tntsearch-index\" class=\"button reindex tntsearch-reindex\">Re-Index Content</button>
                <span class=\"tntsearch-status success\"><i class=\"fa fa-book\"></i> {{ tntsearch_index_status.msg }}</span>
            {% else %}
                <button id=\"tntsearch-index\" class=\"button critical tntsearch-reindex\">Index Content</button>
                <span class=\"tntsearch-status error\"><i class=\"fa fa-warning\"></i> {{ tntsearch_index_status.msg }}</span>
            {% endif %}
            <div class=\"warning tntsearch-error-details\"></div>
        </div>
    </div>
{% endblock %}", "forms/fields/indexstatus/indexstatus.html.twig", "C:\\htdocs\\grav-admin-test.local\\user\\plugins\\tntsearch\\templates\\forms\\fields\\indexstatus\\indexstatus.html.twig");
    }
}
