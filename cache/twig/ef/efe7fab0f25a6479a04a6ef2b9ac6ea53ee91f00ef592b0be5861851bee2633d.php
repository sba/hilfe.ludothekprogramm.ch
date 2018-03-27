<?php

/* @Page:C:/htdocs/lupohelp/user/pages/01.inhaltsverzeichnis */
class __TwigTemplate_2e014701d6cdf18f9890470ff144962f8d1e69ca4e43518928f0193c8cbed455 extends Twig_Template
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
        echo "# Inhaltsverzeichnis

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 4
            echo "<a href=\"";
            echo $this->getAttribute($context["p"], "link", array());
            echo "\">
  <h5>";
            // line 5
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h5>
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  32 => 5,  27 => 4,  23 => 3,  19 => 1,);
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
