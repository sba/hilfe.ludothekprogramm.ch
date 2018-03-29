<?php

/* partials/base.html.twig */
class __TwigTemplate_eff4090577453435f9827080261219cad9e469f7ab384bfb8e382b363e5c0baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
    ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 98
        echo " </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 10
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed.atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed.rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/theme.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 20
        echo "
        ";
        // line 21
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 22
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        ";
        // line 27
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 37
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        // line 44
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 47
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 47)->display($context);
        echo "</a>
                <div class=\"searchbox\">
                    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
                    ";
        // line 50
        $this->loadTemplate("partials/base.html.twig", "partials/base.html.twig", 50, "81463070")->display(array_merge($context, array("limit" => 3, "snippet" => 150, "min" => 3, "search_type" => "auto", "dropdown" => true)));
        // line 51
        echo "                </div>
                <br>
                <a href=\"/search\"><i class=\"fa fa-external-link\"></i> Erweiterte Suche</a>
            </div>
        </div>
        ";
        // line 56
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "    </nav>
    ";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 67
        $this->displayBlock('topbar', $context, $blocks);
        // line 80
        echo "
            ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "
            ";
        // line 83
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
        </div>
        ";
        // line 90
        $this->displayBlock('navigation', $context, $blocks);
        // line 91
        echo "    </section>
    ";
    }

    // line 67
    public function block_topbar($context, array $blocks = array())
    {
        if ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array()) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 68
            echo "            <div id=\"top-bar\">
                ";
            // line 69
            if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array()) == "top")) {
                // line 70
                echo "                <div id=\"top-github-link\">
                ";
                // line 71
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 71)->display($context);
                // line 72
                echo "                </div>
                ";
            }
            // line 74
            echo "
                ";
            // line 75
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
                // line 76
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 76)->display($context);
                // line 77
                echo "                ";
            }
            // line 78
            echo "            </div>
            ";
        }
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        // line 84
        echo "                ";
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array()) == "bottom")) {
            // line 85
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 85)->display($context);
            // line 86
            echo "                ";
        }
        // line 87
        echo "            ";
    }

    // line 90
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 93
    public function block_analytics($context, array $blocks = array())
    {
        // line 94
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 95
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 95)->display($context);
            // line 96
            echo "        ";
        }
        // line 97
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 97,  318 => 96,  315 => 95,  312 => 94,  309 => 93,  304 => 90,  300 => 87,  297 => 86,  294 => 85,  291 => 84,  288 => 83,  283 => 81,  277 => 78,  274 => 77,  271 => 76,  269 => 75,  266 => 74,  262 => 72,  260 => 71,  257 => 70,  255 => 69,  252 => 68,  248 => 67,  243 => 91,  241 => 90,  237 => 88,  235 => 83,  232 => 82,  230 => 81,  227 => 80,  225 => 67,  217 => 61,  214 => 60,  209 => 57,  207 => 56,  200 => 51,  198 => 50,  190 => 47,  185 => 44,  182 => 43,  175 => 37,  172 => 36,  169 => 35,  166 => 34,  163 => 33,  160 => 32,  157 => 31,  154 => 30,  148 => 27,  145 => 26,  142 => 25,  139 => 24,  136 => 23,  133 => 22,  131 => 21,  128 => 20,  125 => 19,  122 => 18,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  105 => 39,  103 => 30,  100 => 29,  98 => 14,  93 => 12,  89 => 11,  85 => 10,  82 => 9,  80 => 8,  72 => 7,  69 => 6,  66 => 5,  60 => 98,  57 => 93,  55 => 60,  52 => 59,  50 => 43,  44 => 42,  41 => 41,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/base.html.twig", "C:\\htdocs\\lupohelp - Github\\user\\themes\\learn2-git-sync\\templates\\partials\\base.html.twig");
    }
}


/* partials/base.html.twig */
class __TwigTemplate_eff4090577453435f9827080261219cad9e469f7ab384bfb8e382b363e5c0baa_81463070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 50
        $this->parent = $this->loadTemplate("partials/tntsearch.html.twig", "partials/base.html.twig", 50);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/tntsearch.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 50,  321 => 97,  318 => 96,  315 => 95,  312 => 94,  309 => 93,  304 => 90,  300 => 87,  297 => 86,  294 => 85,  291 => 84,  288 => 83,  283 => 81,  277 => 78,  274 => 77,  271 => 76,  269 => 75,  266 => 74,  262 => 72,  260 => 71,  257 => 70,  255 => 69,  252 => 68,  248 => 67,  243 => 91,  241 => 90,  237 => 88,  235 => 83,  232 => 82,  230 => 81,  227 => 80,  225 => 67,  217 => 61,  214 => 60,  209 => 57,  207 => 56,  200 => 51,  198 => 50,  190 => 47,  185 => 44,  182 => 43,  175 => 37,  172 => 36,  169 => 35,  166 => 34,  163 => 33,  160 => 32,  157 => 31,  154 => 30,  148 => 27,  145 => 26,  142 => 25,  139 => 24,  136 => 23,  133 => 22,  131 => 21,  128 => 20,  125 => 19,  122 => 18,  119 => 17,  116 => 16,  113 => 15,  110 => 14,  105 => 39,  103 => 30,  100 => 29,  98 => 14,  93 => 12,  89 => 11,  85 => 10,  82 => 9,  80 => 8,  72 => 7,  69 => 6,  66 => 5,  60 => 98,  57 => 93,  55 => 60,  52 => 59,  50 => 43,  44 => 42,  41 => 41,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/base.html.twig", "C:\\htdocs\\lupohelp - Github\\user\\themes\\learn2-git-sync\\templates\\partials\\base.html.twig");
    }
}
