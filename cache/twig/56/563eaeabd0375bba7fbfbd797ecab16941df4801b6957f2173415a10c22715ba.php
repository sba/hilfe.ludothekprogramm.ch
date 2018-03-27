<?php

/* partials/themes-list.html.twig */
class __TwigTemplate_3184bb98af54170de3315a44b09bae955a7e1df6dfd366b8a02fd8a0cd6cf0e9 extends Twig_Template
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
        echo "<div class=\"grav-update themes\"></div>
";
        // line 2
        if (($context["installing"] ?? null)) {
            // line 3
            echo "    ";
            $this->loadTemplate("partials/release-toggle.html.twig", "partials/themes-list.html.twig", 3)->display($context);
        }
        // line 5
        $this->loadTemplate("partials/list-sort.html.twig", "partials/themes-list.html.twig", 5)->display(array_merge($context, array("list_view" => "themes")));
        // line 6
        echo "<h1>
    ";
        // line 7
        echo twig_escape_filter($this->env, ((($context["installing"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_THEMES")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_THEMES"))), "html", null, true);
        echo "
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "html", null, true);
        echo "\" data-gpm-filter>
    </div>
</form>

<div class=\"themes card-row grid fixed-blocks pure-g\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "themes", array(0 =>  !($context["installing"] ?? null)), "method"), "toArray", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["slug"] => $context["theme"]) {
            // line 17
            echo "        ";
            $context["state"] = "inactive";
            // line 18
            echo "        ";
            if (($context["installing"] ?? null)) {
                $context["state"] = "installing";
            }
            // line 19
            echo "        ";
            if (($this->getAttribute(($context["config"] ?? null), "get", array(0 => "system.pages.theme"), "method") == $context["slug"])) {
                $context["state"] = "active";
            }
            // line 20
            echo "        ";
            $context["isTestingRelease"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", array()), "isTestingRelease", array(0 => $context["slug"]), "method");
            // line 21
            echo "        ";
            $context["releaseDate"] = (($this->getAttribute($context["theme"], "date", array())) ? ($this->getAttribute($context["theme"], "date", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", array()), "findPackage", array(0 => $context["slug"], 1 => true), "method"), "date", array())));
            // line 22
            echo "
        <div class=\"theme card-item pure-u-1-3 ";
            // line 23
            echo twig_escape_filter($this->env, ($context["state"] ?? null), "html", null, true);
            echo "-theme\" data-gpm-theme=\"";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\" data-gpm-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "\" data-gpm-release-date=\"";
            echo twig_escape_filter($this->env, ($context["releaseDate"] ?? null), "html", null, true);
            echo "\" data-gpm-author=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "author", array()), "name", array()), "html", null, true);
            echo "\" data-gpm-official=\"";
            echo (($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", array(0 => $context["theme"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-updatable=\"";
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", array()), "isUpdatable", array(0 => $context["slug"]), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-enabled=\"";
            echo (($this->getAttribute(($context["data"] ?? null), "get", array(0 => "enabled"), "method")) ? ("1") : ("2"));
            echo "\" data-gpm-testing=\"";
            echo ((($context["isTestingRelease"] ?? null)) ? ("1") : ("2"));
            echo "\">
            <div class=\"gpm-name\">
                <i class=\"fa fa-fw fa-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "icon", array()), "html", null, true);
            echo "\"></i>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/themes/";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</a>
                ";
            // line 27
            if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", array(0 => $context["theme"]), "method")) {
                // line 28
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
                echo "\"></i></span></small>
                ";
            }
            // line 30
            echo "                ";
            if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", array(0 => $context["theme"]), "method")) {
                // line 31
                echo "                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
                echo "</span></small>
                ";
            }
            // line 33
            echo "                ";
            if ($this->getAttribute($context["theme"], "symlink", array())) {
                // line 34
                echo "                    <span class=\"hint--bottom\"  data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 38
            echo "                <span class=\"gpm-version\">v";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true);
            echo "</span>
                ";
            // line 39
            if (($context["isTestingRelease"] ?? null)) {
                echo "<span class=\"gpm-testing\">test release</span>";
            }
            // line 40
            echo "            </div>
            <div class=\"gpm-screenshot\">
                ";
            // line 42
            $context["thumb"] = ((($context["installing"] ?? null)) ? (("//getgrav.org/images/" . $this->getAttribute($context["theme"], "screenshot", array()))) : ($this->getAttribute($context["theme"], "thumbnail", array())));
            // line 43
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/themes/";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "html", null, true);
            echo "\" /></a>
            </div>
            ";
            // line 45
            if ((($context["state"] ?? null) == "installing")) {
                // line 46
                echo "                <div class=\"gpm-actions\">
                    <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                // line 47
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
                echo "</a>
                </div>
            ";
            } elseif ((            // line 49
($context["state"] ?? null) == "active")) {
                // line 50
                echo "                <div class=\"gpm-actions\">
                    <i class=\"fa fa-star\"></i> ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVE_THEME"), "html", null, true);
                echo "
                </div>
            ";
            } else {
                // line 54
                echo "                <a data-remodal-target=\"theme-switch-warn\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((((($context["base_url_relative"] ?? null) . "/themes/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "activate"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"gpm-actions\">
                    ";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVATE"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 58
            echo "        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.OFFLINE_WARNING"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</div>

<div class=\"remodal theme-switcher\" data-remodal-id=\"theme-switch-warn\" data-remodal-options=\"hashTracking: false\">
    <form>
        <h1>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO"), "html", null, true);
        echo " <strong>{theme_name}</strong></h1>
        <p class=\"bigger\">
            ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_DESCRIPTION"), "html", null, true);
        echo "
        </p>
        <p class=\"bigger\">
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_CONFIRMATION"), "html", null, true);
        echo " <strong>{theme_name}</strong>?
        </p>
        <br>
        <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
        </div>
    </form>
</div>

";
        // line 81
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-list.html.twig", 81)->display(array_merge($context, array("type" => "theme")));
        // line 82
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-list.html.twig", 82)->display(array_merge($context, array("type" => "theme")));
    }

    public function getTemplateName()
    {
        return "partials/themes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 82,  246 => 81,  238 => 76,  234 => 75,  227 => 71,  221 => 68,  216 => 66,  210 => 62,  201 => 60,  195 => 58,  189 => 55,  184 => 54,  178 => 51,  175 => 50,  173 => 49,  166 => 47,  163 => 46,  161 => 45,  151 => 43,  149 => 42,  145 => 40,  141 => 39,  136 => 38,  128 => 34,  125 => 33,  119 => 31,  116 => 30,  110 => 28,  108 => 27,  100 => 26,  96 => 25,  75 => 23,  72 => 22,  69 => 21,  66 => 20,  61 => 19,  56 => 18,  53 => 17,  48 => 16,  40 => 11,  33 => 7,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/themes-list.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\themes-list.html.twig");
    }
}
