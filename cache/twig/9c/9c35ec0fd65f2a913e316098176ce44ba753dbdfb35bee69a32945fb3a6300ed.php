<?php

/* pages.html.twig */
class __TwigTemplate_8f0f54e445f1cee8cfb38c733e0543567d21fffdebb273f1c9a88cdd1306b987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
($context["context"] ?? null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute(($context["context"] ?? null), "exists", array())) {
                // line 16
                $context["page_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) : ($this->getAttribute(($context["context"] ?? null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", array());
        // line 31
        $context["type"] = "page";
        // line 44
        $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) : ("/"));
        // line 45
        $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", array())) ? ((((("<a class=\"button\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 118
    public function block_titlebar($context, array $blocks = array())
    {
        // line 119
        echo "    <div class=\"button-bar\">
        ";
        // line 120
        if ((($context["mode"] ?? null) == "list")) {
            // line 121
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 124
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "bar")) {
                    // line 125
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "</a>
                ";
                }
                // line 127
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 139
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                // line 140
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 142
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 143
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "dropdown")) {
                    // line 144
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "label", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 146
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                </ul>
            </div>

            ";
            // line 150
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", array())) {
                // line 151
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 154
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), ($context["admin_lang"] ?? null), array(), "array");
                // line 155
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 157
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", array())) > 1)) {
                    // line 158
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 163
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 164
                        echo "                            ";
                        if (($context["langCode"] != ($context["admin_lang"] ?? null))) {
                            // line 165
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 167
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "                    </ul>
                    ";
                }
                // line 170
                echo "                </div>
            ";
            }
            // line 172
            echo "
        ";
        } elseif ((        // line 173
($context["mode"] ?? null) == "edit")) {
            // line 174
            echo "
            ";
            // line 175
            echo ($context["preview_link"] ?? null);
            echo "

            <a class=\"button\" href=\"";
            // line 177
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 179
            $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", array(), "method"), "children", array(), "method");
            // line 180
            echo "
            ";
            // line 181
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 182
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 183
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 184
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 186
            echo "
            ";
            // line 187
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 188
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 189
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 190
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 192
            echo "
            ";
            // line 193
            if (($context["exists"] ?? null)) {
                // line 194
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 202
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 204
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                    // line 205
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 207
                echo "                    </ul>
                </div>

                <a class=\"button disable-after-click\" href=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 211
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 212
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 213
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 215
                echo "                ";
                if (($context["warn"] ?? null)) {
                    // line 216
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 218
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 220
                echo "            ";
            }
            // line 221
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 223
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 224
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", array()))) {
                // line 225
                echo "                    ";
                if ($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array())) {
                    // line 226
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 230
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 231
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 232
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 233
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 235
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "                        </ul>
                    ";
                }
                // line 238
                echo "                ";
            }
            // line 239
            echo "            </div>


        ";
        }
        // line 243
        echo "    </div>
    ";
        // line 244
        if ((($context["mode"] ?? null) == "new")) {
            // line 245
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 246
($context["mode"] ?? null) == "edit")) {
            // line 247
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "menu", array()), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 251
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 255
    public function block_content($context, array $blocks = array())
    {
        // line 256
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 257
        if ((($context["mode"] ?? null) == "new")) {
            // line 258
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 258)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "pages/page"), "method"), "data" => ($context["context"] ?? null))));
            // line 259
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 260
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 263
            if (($this->getAttribute(($context["admin"] ?? null), "multilang", array()) && ($context["page_lang"] ?? null))) {
                // line 264
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 266
                if (($context["exists"] ?? null)) {
                    // line 267
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["page_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 269
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["admin_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                }
                // line 271
                echo "                        </button>
                        ";
                // line 272
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "translatedLanguages", array())) > 1))) {
                    // line 273
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 277
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 278
                        echo "                                    ";
                        if (($context["language"] != ($context["page_lang"] ?? null))) {
                            // line 279
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 281
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 282
                    echo "                            </ul>
                        ";
                }
                // line 284
                echo "                    </div>
                ";
            }
            // line 286
            echo "
                ";
            // line 287
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array())) {
                // line 288
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 289
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 290
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))));
                // line 291
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["normalText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 292
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => ($context["expertText"] ?? null), 1 => ($context["maxLen"] ?? null)), "method");
                // line 293
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 295
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 296
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 297
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 298
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 303
            echo "
            </div>

            ";
            // line 306
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0"))) {
                // line 307
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 307)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", array()), "data" => ($context["context"] ?? null))));
                // line 308
                echo "            ";
            } else {
                // line 309
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 309)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")), "method"), "data" => ($context["context"] ?? null))));
                // line 310
                echo "            ";
            }
            // line 311
            echo "        </div>
    ";
        } else {
            // line 313
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 315
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", array()), $this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 318
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 321
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 322
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 327
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => 0, 2 => $context), "method");
            echo "
            </ul>
            ";
            // line 329
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 329)->display($context);
            // line 330
            echo "        </div>
    ";
        }
        // line 332
        echo "    </div>

    ";
        // line 334
        if (($context["context"] ?? null)) {
            // line 335
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 336
            echo "
        ";
            // line 337
            if ((($context["mode"] ?? null) == "edit")) {
                // line 338
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", array(0 => ""), "method");
                // line 339
                echo "        ";
            }
            // line 340
            echo "    ";
        }
        // line 341
        echo "
    ";
        // line 342
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 343
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 344
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 344)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page")));
            // line 345
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 348
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 348)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder")));
            // line 349
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 352
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 352)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-modular")));
            // line 353
            echo "    </div>

    ";
            // line 355
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 356
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", array()), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 357
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", array()), "partials/blueprints-new.html.twig"), "pages.html.twig", 357)->display(array_merge($context, twig_array_merge(array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => $this->getAttribute($context["add_modal"], "blueprint", array())), "method"), "data" => ($context["context"] ?? null), "form_id" => "add-modal"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", array()), array()))));
                // line 358
                echo "        </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "    ";
        }
        // line 361
        echo "

    ";
        // line 363
        if ((($context["mode"] ?? null) == "edit")) {
            // line 364
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 366
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 366)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => ($context["context"] ?? null))));
            // line 367
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 369
            try {
                $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 369)->display(array_merge($context, array("data" => ($context["context"] ?? null))));
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 370
            echo "    </div>
    ";
        }
        // line 372
        echo "
    ";
        // line 373
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 373)->display($context);
        // line 374
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 379
        if (($context["context"] ?? null)) {
            // line 380
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 382
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 394
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 394)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 395
        echo "
";
    }

    // line 398
    public function block_bottom($context, array $blocks = array())
    {
        // line 399
        echo "<script>
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["twig_vars"] ?? null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 49
            echo "    ";
            $context["display_field"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["twig_vars"] ?? null), "config", array(), "array"), "plugins", array()), "admin", array()), "pages_list_display_field", array());
            // line 50
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", array(), "array");
            // line 51
            echo "    ";
            $context["base_url_relative_frontend"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative_frontend", array(), "array");
            // line 52
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", array(), "array");
            // line 53
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", array(), "array");
            // line 54
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", array(), "array");
            // line 55
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", array(), "array");
            // line 56
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", array(), "array");
            // line 57
            echo "
    ";
            // line 58
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "admin", array()), "children_display_order", array()) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()))) {
                // line 59
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "custom", array())) {
                    // line 60
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "custom", array())), "method");
                    // line 61
                    echo "        ";
                } else {
                    // line 62
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc"))), "method");
                    // line 63
                    echo "        ";
                }
                // line 64
                echo "    ";
            } else {
                // line 65
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", array(), "method");
                // line 66
                echo "    ";
            }
            // line 67
            echo "
    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 69
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 70
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 71
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 72
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 73
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 74
                echo "
        ";
                // line 75
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 76
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 79
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 80
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 84
                echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                echo "\" class=\"hint--top page-item__content-hint\">
                            ";
                // line 85
                $context["page_label"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["p"], "header", array()), ($context["display_field"] ?? null)), $this->getAttribute($context["p"], ($context["display_field"] ?? null))), $this->getAttribute($context["p"], "title", array()));
                // line 86
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, ($context["page_label"] ?? null));
                echo "</a>
                        </span>
                        ";
                // line 88
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 89
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == ($context["admin_lang"] ?? null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 91
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", array())) {
                    // line 92
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 94
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 95
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 98
                $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) : ("/"));
                // line 99
                echo "                    ";
                $context["preview_link"] = (($this->getAttribute($context["p"], "routable", array())) ? ((((("<a class=\"page-view\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                // line 100
                echo "                    ";
                echo ($context["preview_link"] ?? null);
                echo "
                    ";
                // line 101
                if (($context["warn"] ?? null)) {
                    // line 102
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 104
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 106
                echo "                </span>
            </div>
            ";
                // line 108
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 109
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 110
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (($context["depth"] ?? null) + 1), 2 => ($context["twig_vars"] ?? null)), "method");
                    echo "
                </ul>
            ";
                }
                // line 113
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1115 => 113,  1109 => 110,  1104 => 109,  1102 => 108,  1098 => 106,  1092 => 104,  1086 => 102,  1084 => 101,  1079 => 100,  1076 => 99,  1074 => 98,  1066 => 95,  1063 => 94,  1059 => 92,  1056 => 91,  1046 => 89,  1044 => 88,  1036 => 86,  1034 => 85,  1030 => 84,  1021 => 80,  1017 => 79,  1012 => 77,  1009 => 76,  1007 => 75,  1004 => 74,  1002 => 73,  1001 => 72,  1000 => 71,  999 => 70,  997 => 69,  993 => 68,  990 => 67,  987 => 66,  984 => 65,  981 => 64,  978 => 63,  975 => 62,  972 => 61,  969 => 60,  966 => 59,  964 => 58,  961 => 57,  958 => 56,  955 => 55,  952 => 54,  949 => 53,  946 => 52,  943 => 51,  940 => 50,  937 => 49,  934 => 48,  920 => 47,  902 => 4,  889 => 3,  882 => 399,  879 => 398,  874 => 395,  867 => 394,  859 => 389,  855 => 388,  848 => 384,  844 => 382,  836 => 380,  834 => 379,  829 => 377,  824 => 374,  822 => 373,  819 => 372,  815 => 370,  808 => 369,  804 => 367,  802 => 366,  798 => 364,  796 => 363,  792 => 361,  789 => 360,  774 => 358,  772 => 357,  765 => 356,  748 => 355,  744 => 353,  742 => 352,  737 => 349,  735 => 348,  730 => 345,  728 => 344,  725 => 343,  723 => 342,  720 => 341,  717 => 340,  714 => 339,  711 => 338,  709 => 337,  706 => 336,  703 => 335,  701 => 334,  697 => 332,  693 => 330,  691 => 329,  686 => 327,  678 => 322,  674 => 321,  668 => 318,  656 => 315,  652 => 313,  648 => 311,  645 => 310,  642 => 309,  639 => 308,  636 => 307,  634 => 306,  629 => 303,  621 => 298,  609 => 297,  605 => 296,  593 => 295,  589 => 293,  586 => 292,  583 => 291,  580 => 290,  577 => 289,  574 => 288,  572 => 287,  569 => 286,  565 => 284,  561 => 282,  555 => 281,  545 => 279,  542 => 278,  538 => 277,  532 => 273,  530 => 272,  527 => 271,  521 => 269,  515 => 267,  513 => 266,  509 => 264,  507 => 263,  502 => 260,  499 => 259,  496 => 258,  494 => 257,  491 => 256,  488 => 255,  480 => 251,  474 => 248,  471 => 247,  469 => 246,  464 => 245,  462 => 244,  459 => 243,  453 => 239,  450 => 238,  446 => 236,  440 => 235,  430 => 233,  427 => 232,  424 => 231,  420 => 230,  414 => 226,  411 => 225,  409 => 224,  405 => 223,  401 => 221,  398 => 220,  392 => 218,  384 => 216,  381 => 215,  375 => 213,  373 => 212,  369 => 211,  363 => 210,  358 => 207,  352 => 205,  350 => 204,  346 => 203,  342 => 202,  333 => 196,  329 => 194,  327 => 193,  324 => 192,  316 => 190,  313 => 189,  310 => 188,  308 => 187,  305 => 186,  297 => 184,  294 => 183,  291 => 182,  289 => 181,  286 => 180,  284 => 179,  277 => 177,  272 => 175,  269 => 174,  267 => 173,  264 => 172,  260 => 170,  256 => 168,  250 => 167,  242 => 165,  239 => 164,  236 => 163,  232 => 162,  226 => 158,  224 => 157,  218 => 155,  216 => 154,  211 => 151,  209 => 150,  204 => 147,  198 => 146,  186 => 144,  183 => 143,  178 => 142,  172 => 140,  170 => 139,  166 => 138,  162 => 137,  153 => 131,  148 => 128,  142 => 127,  130 => 125,  127 => 124,  123 => 123,  115 => 121,  113 => 120,  110 => 119,  107 => 118,  100 => 41,  97 => 40,  90 => 37,  87 => 36,  84 => 35,  81 => 34,  78 => 33,  74 => 1,  72 => 45,  70 => 44,  68 => 31,  66 => 30,  64 => 29,  62 => 28,  60 => 27,  57 => 24,  55 => 23,  51 => 20,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  31 => 8,  29 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\admin\\themes\\grav\\templates\\pages.html.twig");
    }
}
