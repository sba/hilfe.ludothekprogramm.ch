<?php

/* partials/logo.html.twig */
class __TwigTemplate_6685cdee9aecf21cb2e0178f2afda2b60928d20528c439fd2ed24e5411b123f4 extends Twig_Template
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
        echo "<p><div style=\"margin-bottom: -5rem;\">&nbsp;</div></p>
<h5><span style=\"color:white\">";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</span></h5>
<p><div style=\"margin-top: -4rem;\">&nbsp;</div></p>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
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
        return new Twig_Source("", "partials/logo.html.twig", "C:\\htdocs\\lupohelp\\user\\themes\\learn2-git-sync\\templates\\partials\\logo.html.twig");
    }
}
