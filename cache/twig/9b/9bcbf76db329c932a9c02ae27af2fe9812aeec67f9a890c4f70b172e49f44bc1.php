<?php

/* tntquery-ajax.html.twig */
class __TwigTemplate_2d143941d53ad76723370aa1600ff264dafe9e84b710a1b4d2901a2ce1c48638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tntsearch_results"] ?? null), "hits", array()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 3
            echo "        <h5 class=\"title\">
            <a href=\"";
            // line 4
            echo (($context["base_url"] ?? null) . $this->getAttribute($context["val"], "link", array()));
            echo "\">";
            echo $this->getAttribute($context["val"], "title", array());
            echo "</a>
        </h5>
        ";
            // line 6
            if ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.display_route"), "method")) {
                // line 7
                echo "            <!-- <h6 class=\"route\">";
                echo $this->getAttribute($context["val"], "link", array());
                echo "</h6> -->
        ";
            }
            // line 9
            echo "        <p>";
            echo $this->getAttribute($context["val"], "content", array());
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "tntquery-ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  44 => 9,  38 => 7,  36 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tntquery-ajax.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\tntsearch\\templates\\tntquery-ajax.html.twig");
    }
}
