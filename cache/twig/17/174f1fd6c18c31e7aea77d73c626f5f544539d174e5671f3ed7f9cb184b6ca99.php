<?php

/* @Page:C:/htdocs/lupohelp/user/pages/01.installation */
class __TwigTemplate_1a3ef93f83a414f55721d6c7124f6957c9529a111eeacb5c677ff673cae59ca0 extends Twig_Template
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
        echo "<h1>Installation</h1>
";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), $this->getAttribute(($context["page"] ?? null), "path", array()), array(), "array"));
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
        return array (  22 => 2,  19 => 1,);
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
