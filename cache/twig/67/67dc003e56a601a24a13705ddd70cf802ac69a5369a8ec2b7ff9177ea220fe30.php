<?php

/* partials/tntsearch.html.twig */
class __TwigTemplate_573e8ed6f953fdd66eac7d131119f9547babfa00b789bea4c94f6ac360dc5867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tntsearch_input' => array($this, 'block_tntsearch_input'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["url"] = ((array_key_exists("url", $context)) ? (_twig_default_filter(($context["url"] ?? null), (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/") . twig_trim_filter($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.query_route", 1 => "s"), "method"), "/")))) : ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/") . twig_trim_filter($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.query_route", 1 => "s"), "method"), "/"))));
        // line 2
        $context["limit"] = ((array_key_exists("limit", $context)) ? (_twig_default_filter(($context["limit"] ?? null), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.limit", 1 => 20), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.limit", 1 => 20), "method")));
        // line 3
        $context["snippet"] = ((array_key_exists("snippet", $context)) ? (_twig_default_filter(($context["snippet"] ?? null), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.snippet", 1 => 300), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.snippet", 1 => 300), "method")));
        // line 4
        $context["min"] = ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? null), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.min", 1 => 3), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.min", 1 => 3), "method")));
        // line 5
        $context["search_type"] = ((array_key_exists("search_type", $context)) ? (_twig_default_filter(($context["search_type"] ?? null), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.search_type", 1 => "auto"), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.search_type", 1 => "auto"), "method")));
        // line 6
        $context["placeholder"] = ((array_key_exists("placeholder", $context)) ? (_twig_default_filter(($context["placeholder"] ?? null), "Search...")) : ("Search..."));
        // line 7
        $context["live_update"] = ((($context["in_page"] ?? null)) ? (((array_key_exists("live_update", $context)) ? (_twig_default_filter(($context["live_update"] ?? null), $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.live_uri_update", 1 => 1), "method"))) : ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.live_uri_update", 1 => 1), "method")))) : (0));
        // line 8
        echo "
";
        // line 9
        $context["options"] = array("uri" => ($context["url"] ?? null), "limit" => ($context["limit"] ?? null), "snippet" => ($context["snippet"] ?? null), "min" => ($context["min"] ?? null), "in_page" => ($context["in_page"] ?? null), "live_update" => ($context["live_update"] ?? null), "search_type" => ($context["search_type"] ?? null));
        // line 10
        echo "<form role=\"form\" class=\"tntsearch-form\">
    ";
        // line 11
        $this->displayBlock('tntsearch_input', $context, $blocks);
        // line 19
        echo "    <div class=\"tntsearch-results";
        echo ((($context["in_page"] ?? null)) ? (" tntsearch-results-inpage") : (""));
        echo "\">
    ";
        // line 20
        if (((array_key_exists("tntsearch_results", $context) &&  !twig_test_empty(($context["tntsearch_results"] ?? null))) && ($context["in_page"] ?? null))) {
            // line 21
            echo "        ";
            $this->loadTemplate("tntquery-ajax.html.twig", "partials/tntsearch.html.twig", 21)->display($context);
            // line 22
            echo "    ";
        }
        // line 23
        echo "    </div>
</form>
";
    }

    // line 11
    public function block_tntsearch_input($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"tntsearch-wrapper\" class=\"form-group";
        echo ((($context["dropdown"] ?? null)) ? (" tntsearch-dropdown") : (""));
        echo "\">
        <input type=\"text\" class=\"form-control tntsearch-field";
        // line 13
        echo ((($context["in_page"] ?? null)) ? (" tntsearch-field-inpage") : (""));
        echo "\" data-tntsearch=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html_attr");
        echo "\" placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" value=\"";
        echo (( !($context["dropdown"] ?? null)) ? (twig_escape_filter($this->env, ($context["query"] ?? null))) : (""));
        echo "\">
        ";
        // line 14
        if ($this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.tntsearch.built_in_css"), "method")) {
            // line 15
            echo "            <span class=\"tntsearch-clear\"";
            echo ((( !($context["query"] ?? null) || ($context["dropdown"] ?? null))) ? (" style=\"display: none;\"") : (""));
            echo ">&times;</span>
        ";
        }
        // line 17
        echo "    </div>
    ";
    }

    public function getTemplateName()
    {
        return "partials/tntsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  83 => 15,  81 => 14,  71 => 13,  66 => 12,  63 => 11,  57 => 23,  54 => 22,  51 => 21,  49 => 20,  44 => 19,  42 => 11,  39 => 10,  37 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/tntsearch.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\tntsearch\\templates\\partials\\tntsearch.html.twig");
    }
}
