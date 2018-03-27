<?php

/* @Page:C:/htdocs/lupohelp/user/pages/01.inhaltsverzeichnis */
class __TwigTemplate_7ee29d1eeb1c802bea64ea5723970a729c0df21d951998e5f6978cd6629119ef extends Twig_Template
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
        echo "<h1>Inhaltsverzeichnis</h1>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 3
            echo "<p><a href=\"";
            echo $this->getAttribute($context["p"], "link", array());
            echo "\">
  <h5>";
            // line 4
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h5>
</a></p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "@Page:C:/htdocs/lupohelp/user/pages/01.inhaltsverzeichnis", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "@Page:C:/htdocs/lupohelp/user/pages/01.inhaltsverzeichnis";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Page:C:/htdocs/lupohelp/user/pages/01.inhaltsverzeichnis", "");
    }
}
