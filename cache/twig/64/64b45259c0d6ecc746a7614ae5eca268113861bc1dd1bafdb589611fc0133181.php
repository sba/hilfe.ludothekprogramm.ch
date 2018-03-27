<?php

/* search.html.twig */
class __TwigTemplate_be2eaffa8c5a8fad8719126b1a525ac3529b18262a15037aac186369b21e6cd9 extends Twig_Template
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
        $this->loadTemplate("search.html.twig", "search.html.twig", 1, "680972168")->display(array_merge($context, array("github_link_position" => false)));
    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.html.twig", "C:\\htdocs\\lupohelp\\user\\themes\\learn2\\templates\\search.html.twig");
    }
}


/* search.html.twig */
class __TwigTemplate_be2eaffa8c5a8fad8719126b1a525ac3529b18262a15037aac186369b21e6cd9_680972168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "search.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

        ";
        // line 6
        $this->loadTemplate("partials/tntsearch.html.twig", "search.html.twig", 6)->display(array_merge($context, array("in_page" => true, "placeholder" => "Dokumentation durchsuchen...")));
        // line 7
        echo "    ";
    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  88 => 7,  86 => 6,  80 => 4,  77 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.html.twig", "C:\\htdocs\\lupohelp\\user\\themes\\learn2\\templates\\search.html.twig");
    }
}
