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

/* @Page:C:/htdocs/grav-admin-test.local/user/pages/08.statistik-listen */
class __TwigTemplate_750e43c62958a27ad04665d92cebbc3b5d00aa401d02b2d257f006c62341f7d2 extends \Twig\Template
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
        echo "<h1>Statistik &amp; Listen</h1>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 3
            echo "<p><a href=\"";
            echo $this->getAttribute($context["p"], "url", []);
            echo "\"><h5>";
            echo $this->getAttribute($context["p"], "title", []);
            echo "</h5></a></p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Page:C:/htdocs/grav-admin-test.local/user/pages/08.statistik-listen";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1>Statistik &amp; Listen</h1>
{% for p in page.collection %}
<p><a href=\"{{p.url}}\"><h5>{{ p.title }}</h5></a></p>
{% endfor %}", "@Page:C:/htdocs/grav-admin-test.local/user/pages/08.statistik-listen", "");
    }
}
