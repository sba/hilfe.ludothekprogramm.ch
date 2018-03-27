<?php

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_e621074129fd1870451c0ebe70f50484447b550990e19521fc3f8fcb8f71aca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("forms/fields/editor/editor.html.twig", "forms/fields/markdown/markdown.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/editor/editor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["codemirrorOptions"] = twig_array_merge(array("mode" => "gfm", "ignore" => array()), (($this->getAttribute(($context["field"] ?? null), "codemirror", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "codemirror", array()), array())) : (array())));
        // line 7
        if ($this->getAttribute(($context["field"] ?? null), "showPreview", array())) {
            // line 8
            $context["codemirrorOptions"] = twig_array_merge(($context["codemirrorOptions"] ?? null), array("ignore" => array()));
        }
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 8,  26 => 7,  24 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/markdown/markdown.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\markdown\\markdown.html.twig");
    }
}
