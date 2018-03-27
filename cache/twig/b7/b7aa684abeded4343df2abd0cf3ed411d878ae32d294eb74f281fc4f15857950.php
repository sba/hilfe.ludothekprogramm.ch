<?php

/* forms/fields/file/file.html.twig */
class __TwigTemplate_52be20cafebcfaa789d6cadaaa4f3e6adb13016ac29ea655f4b752ae5d637f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["defaults"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array());
        // line 3
        $context["files"] = twig_array_merge($this->getAttribute(($context["defaults"] ?? null), "files", array()), ((array_key_exists("field", $context)) ? (_twig_default_filter(($context["field"] ?? null), array())) : (array())));
        // line 4
        $context["limit"] = (( !$this->getAttribute(($context["field"] ?? null), "multiple", array())) ? (1) : ($this->getAttribute(($context["files"] ?? null), "limit", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 60
    public function block_input($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $context["upload_limit"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "media", array()), "upload_limit", array()) / 1024) / 1024);
        // line 62
        echo "    ";
        $context["page_can_upload"] = (($context["exists"] ?? null) || (((($context["type"] ?? null) == "page") &&  !($context["exists"] ?? null)) &&  !((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute(($context["field"] ?? null), "destination", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "@self") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a))) || (is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $this->getAttribute(($context["field"] ?? null), "destination", array())) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "self@") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))))));
        // line 63
        echo "    ";
        if (( !array_key_exists("type", $context) || ($context["page_can_upload"] ?? null))) {
            // line 64
            echo "
    ";
            // line 65
            $context["settings"] = array("name" => $this->getAttribute(($context["field"] ?? null), "name", array()), "paramName" => ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["files"] ?? null), "multiple", array())) ? ("[]") : (""))), "limit" => ($context["limit"] ?? null), "filesize" => ($context["upload_limit"] ?? null), "accept" => $this->getAttribute(($context["files"] ?? null), "accept", array()));
            // line 66
            echo "
    <div class=\"form-input-wrapper dropzone files-upload ";
            // line 67
            if ( !($this->getAttribute(($context["field"] ?? null), "fancy", array()) === false)) {
                echo "form-input-file";
            }
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "size", array()), "xlarge")) : ("xlarge")), "html", null, true);
            echo "\" data-grav-file-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["settings"] ?? null)), "html_attr");
            echo "\" ";
            if (($context["file_url_add"] ?? null)) {
                echo "data-file-url-add=\"";
                echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " ";
            if (($context["file_url_remove"] ?? null)) {
                echo "data-file-url-remove=\"";
                echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
        <input
            ";
            // line 70
            echo "            ";
            $this->displayBlock('input_attributes', $context, $blocks);
            // line 78
            echo "        />

        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 81
                echo "            ";
                echo $this->getAttribute($this, "preview", array(0 => $context["path"], 1 => $context["file"], 2 => $context), "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        ";
            $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 83)->display(array_merge($context, array("field" => array("name" => ("_json." . $this->getAttribute(($context["field"] ?? null), "name", array()))), "value" => twig_jsonencode_filter(($context["value"] ?? null)))));
            // line 84
            echo "    </div>

    ";
        } else {
            // line 87
            echo "        <span class=\"note\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED");
            echo "</span>
    ";
        }
    }

    // line 70
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 71
        echo "                type=\"file\"
                ";
        // line 72
        if ($this->getAttribute(($context["files"] ?? null), "multiple", array())) {
            echo "multiple=\"multiple\"";
        }
        // line 73
        echo "                ";
        if ($this->getAttribute(($context["files"] ?? null), "accept", array())) {
            echo "accept=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["files"] ?? null), "accept", array()), ","), "html", null, true);
            echo "\"";
        }
        // line 74
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 75
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "random_name", array())) {
            echo "random=\"true\"";
        }
        // line 76
        echo "                ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
            ";
    }

    // line 8
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            ob_start();
            // line 10
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 11
            echo "        ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 12
            echo "        ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 13
            echo "        ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 14
            echo "
        ";
            // line 15
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 16
                echo "            ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 17
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 19
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 21
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getpreview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            if (($context["value"] ?? null)) {
                // line 31
                echo "        ";
                $context["uri"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", array()), "uri", array());
                // line 32
                echo "        ";
                $context["files"] = $this->getAttribute(($context["global"] ?? null), "files", array());
                // line 33
                echo "        ";
                $context["config"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", array()), "config", array());
                // line 34
                echo "        ";
                $context["route"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", array()), "route", array(), "method");
                // line 35
                echo "
        ";
                // line 36
                $context["type"] = (($this->getAttribute(($context["global"] ?? null), "blueprint_type", array())) ? ($this->getAttribute(($context["global"] ?? null), "blueprint_type", array())) : ((($this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", array()), "location", array())) ? ($this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", array()), "location", array())) : ("config"))));
                // line 37
                echo "
        ";
                // line 38
                $context["blueprint_name"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "blueprints", array()), "getFilename", array());
                // line 39
                echo "        ";
                if ((($context["type"] ?? null) == "pages")) {
                    // line 40
                    echo "            ";
                    $context["blueprint_name"] = ((($context["type"] ?? null) . "/") . ($context["blueprint_name"] ?? null));
                    // line 41
                    echo "        ";
                }
                // line 42
                echo "        ";
                $context["blueprint"] = base64_encode(($context["blueprint_name"] ?? null));
                // line 43
                echo "        ";
                $context["real_path"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", array()), "getPagePathFromToken", array(0 => ($context["path"] ?? null)), "method");
                // line 44
                echo "        ";
                $context["remove"] = (($this->getAttribute(($context["global"] ?? null), "file_url_remove", array())) ? ($this->getAttribute(($context["global"] ?? null), "file_url_remove", array())) : (($this->getAttribute(($context["global"] ?? null), "base_url_relative", array()) . "/media.json")));
                // line 45
                echo "        ";
                $context["remove"] = $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((((((((((((((((((((                // line 46
($context["remove"] ?? null) . "/route") . $this->getAttribute($this->getAttribute(                // line 47
($context["config"] ?? null), "system", array()), "param_sep", array())) . base64_encode((($this->getAttribute(($context["global"] ?? null), "base_path", array()) . "/") . ($context["real_path"] ?? null)))) . "/task") . $this->getAttribute($this->getAttribute(                // line 48
($context["config"] ?? null), "system", array()), "param_sep", array())) . "removeFileFromBlueprint") . "/proute") . $this->getAttribute($this->getAttribute(                // line 49
($context["config"] ?? null), "system", array()), "param_sep", array())) . base64_encode(($context["route"] ?? null))) . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 50
($context["config"] ?? null), "system", array()), "param_sep", array())) . ($context["blueprint"] ?? null)) . "/type") . $this->getAttribute($this->getAttribute(                // line 51
($context["config"] ?? null), "system", array()), "param_sep", array())) . ($context["type"] ?? null)) . "/field") . $this->getAttribute($this->getAttribute(                // line 52
($context["config"] ?? null), "system", array()), "param_sep", array())) . $this->getAttribute(($context["files"] ?? null), "name", array())) . "/path") . $this->getAttribute($this->getAttribute(                // line 53
($context["config"] ?? null), "system", array()), "param_sep", array())) . base64_encode($this->getAttribute(($context["value"] ?? null), "path", array()))), 1 => "admin-form", 2 => "admin-nonce"), "method");
                // line 54
                echo "
        ";
                // line 55
                $context["file"] = twig_array_merge(($context["value"] ?? null), array("remove" => ($context["remove"] ?? null), "path" => ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", array()) == "/")) ? ("/") : ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", array()) . "/") . ($context["real_path"] ?? null))))));
                // line 56
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["file"] ?? null)), "html_attr");
                echo "\"></div>
    ";
            }
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
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 56,  300 => 55,  297 => 54,  295 => 53,  294 => 52,  293 => 51,  292 => 50,  291 => 49,  290 => 48,  289 => 47,  288 => 46,  286 => 45,  283 => 44,  280 => 43,  277 => 42,  274 => 41,  271 => 40,  268 => 39,  266 => 38,  263 => 37,  261 => 36,  258 => 35,  255 => 34,  252 => 33,  249 => 32,  246 => 31,  243 => 30,  229 => 29,  213 => 26,  207 => 24,  201 => 22,  199 => 21,  194 => 20,  192 => 19,  187 => 18,  185 => 17,  180 => 16,  178 => 15,  175 => 14,  172 => 13,  169 => 12,  166 => 11,  163 => 10,  161 => 9,  149 => 8,  142 => 76,  137 => 75,  132 => 74,  125 => 73,  121 => 72,  118 => 71,  115 => 70,  107 => 87,  102 => 84,  99 => 83,  90 => 81,  86 => 80,  82 => 78,  79 => 70,  56 => 67,  53 => 66,  51 => 65,  48 => 64,  45 => 63,  42 => 62,  39 => 61,  36 => 60,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/file/file.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\file\\file.html.twig");
    }
}
