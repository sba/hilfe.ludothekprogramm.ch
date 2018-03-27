<?php

/* partials/userinfo-avatar.html.twig */
class __TwigTemplate_042d76912f593f47782d54441a296263640fc6c98857a04c12d5e66e0edad43e extends Twig_Template
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
        if ($this->getAttribute(($context["data"] ?? null), "avatar", array())) {
            // line 2
            echo "    <label><img src=\"";
            echo twig_escape_filter($this->env, ((($context["base_url_simple"] ?? null) . "/") . $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["data"] ?? null), "avatar", array())), "path", array())), "html", null, true);
            echo "\" /></label>
";
        } else {
            // line 4
            echo "    <label><img src=\"https://www.gravatar.com/avatar/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute(($context["data"] ?? null), "email", array())), "html", null, true);
            echo "?s=200\" /></label>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/userinfo-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/userinfo-avatar.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\userinfo-avatar.html.twig");
    }
}
