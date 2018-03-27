<?php

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_a124d31233bd47d6fb2546753a68ce1b44d9707405fa67d344f5b620750a260e extends Twig_Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ((($this->getAttribute(($context["field"] ?? null), "evaluate", array())) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute(($context["field"] ?? null), "default", array()))) : ($this->getAttribute(($context["field"] ?? null), "default", array())))) : (($context["value"] ?? null)));
        // line 2
        echo "
<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/hidden/hidden.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\form\\templates\\forms\\fields\\hidden\\hidden.html.twig");
    }
}
