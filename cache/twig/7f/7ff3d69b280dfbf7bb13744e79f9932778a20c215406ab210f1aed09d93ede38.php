<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/github-link.html.twig */
class __TwigTemplate_bdeca27bef8e41f596f7bf1b1873ac3acf75b3fd03a0ee9649fcd429f3944575 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a class=\"github-link tooltip tooltip-bottom\" href=\"";
        echo ($this->getAttribute(($context["github_config"] ?? null), "tree", []) . twig_replace_filter(("/" . $this->getAttribute(($context["page"] ?? null), "filePathClean", [])), ["/user/pages/" => ""]));
        echo "\" data-tooltip=\"Edit this page on GitHub\"><i class=\"fa fa-pencil-square\"></i> ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN4_GITHUB_EDIT");
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "partials/github-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"github-link tooltip tooltip-bottom\" href=\"{{ github_config.tree ~  ('/'~page.filePathClean)|replace({'/user/pages/':''}) }}\" data-tooltip=\"Edit this page on GitHub\"><i class=\"fa fa-pencil-square\"></i> {{ 'THEME_LEARN4_GITHUB_EDIT'|t }}</a>
", "partials/github-link.html.twig", "C:\\htdocs\\grav-admin-test.local\\user\\themes\\learn4\\templates\\partials\\github-link.html.twig");
    }
}
