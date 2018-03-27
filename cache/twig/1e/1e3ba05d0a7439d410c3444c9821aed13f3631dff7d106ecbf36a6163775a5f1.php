<?php

/* @Page:C:/htdocs/lupohelp/user/pages/01.installation */
class __TwigTemplate_b9bdb295c2da54d024d3f89b1c1e706aa1f5f8d6252d3a0b9c24679cf9657a7d extends Twig_Template
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
        echo "# Installation



The author of this page is: ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
    }

    public function getTemplateName()
    {
        return "@Page:C:/htdocs/lupohelp/user/pages/01.installation";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Page:C:/htdocs/lupohelp/user/pages/01.installation", "");
    }
}
