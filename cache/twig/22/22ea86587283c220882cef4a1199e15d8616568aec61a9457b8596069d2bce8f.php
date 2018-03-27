<?php

/* forms/fields/permissions/permissions.html.twig */
class __TwigTemplate_86cf9d31dc6bf8bb45e9f56881c45535ca89a9f436ea5e3518dc349aa4f7bdef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/permissions/permissions.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 4
        $context["value"] = (((($context["value"] ?? null) === false)) ? (0) : (($context["value"] ?? null)));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 7
        echo "    data-grav-disabled=\"";
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 16
    public function block_input($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"permissions-container\">
        ";
        // line 18
        $context["permissions"] = $this->getAttribute(($context["admin"] ?? null), "getPermissions", array());
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["index_existing_permission"] => $context["value_existing_permission"]) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value_existing_permission"]);
            foreach ($context['_seq'] as $context["index_segment1"] => $context["value_segment1"]) {
                // line 21
                echo "                ";
                $context["permissions"] = twig_array_merge(($context["permissions"] ?? null), array((($context["index_existing_permission"] . ".") . $context["index_segment1"]) => "boolean"));
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index_segment1'], $context['value_segment1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index_existing_permission'], $context['value_existing_permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["permission"] => $context["type"]) {
            // line 26
            echo "            <div class=\"permission-container\">
                ";
            // line 27
            $context["permission_segments"] = twig_split_filter($this->env, $context["permission"], ".");
            // line 28
            echo "                ";
            $context["permission_value"] = $this->getAttribute($this->getAttribute(($context["value"] ?? null), $this->getAttribute(($context["permission_segments"] ?? null), 0, array(), "array"), array(), "array"), $this->getAttribute(($context["permission_segments"] ?? null), 1, array(), "array"), array(), "array");
            // line 29
            echo "                ";
            if (twig_in_filter(($context["permission_value"] ?? null), array(0 => "on", 1 => "true", 2 => 1))) {
                // line 30
                echo "                    ";
                $context["permission_value"] = "true";
                // line 31
                echo "                ";
            }
            // line 32
            echo "
                <input type=\"text\" class=\"medium permission-value\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
            echo "\" />

                <div class=\"switch-toggle switch-grav medium switch-3\">
                    ";
            // line 36
            $context["options"] = array("true" => "PLUGIN_ADMIN.YES", "false" => "PLUGIN_ADMIN.NO", "" => "PLUGIN_ADMIN.NOT_SET");
            // line 37
            echo "
                    ";
            // line 38
            $context["maxLen"] = 0;
            // line 39
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 40
                echo "                        ";
                $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"])));
                // line 41
                echo "                        ";
                $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
                // line 42
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 45
                echo "                        ";
                $context["id"] = (((("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", array())) . ".") . $context["permission"]) . $context["key"]);
                // line 46
                echo "                        ";
                $context["translation"] = twig_trim_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]))));
                // line 47
                echo "
                        <input type=\"radio\"
                            value=\"";
                // line 49
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                            id=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"
                            name=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())) . ".") . $context["permission"])), "html", null, true);
                echo "\"
                            class=\"";
                // line 52
                echo ((("true" == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                            ";
                // line 53
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter($context["key"]) == ("" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(($context["permission_value"] ?? null))))) {
                    // line 54
                    echo "                                checked=\"checked\"
                            ";
                }
                // line 56
                echo "                            ";
                if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                    echo "required=\"required\"";
                }
                // line 57
                echo "                        />

                        <label for=\"";
                // line 59
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">";
                echo twig_trim_filter($this->getAttribute($this, "spanToggle", array(0 => ($context["translation"] ?? null), 1 => ($context["maxLen"] ?? null)), "method"));
                echo "</label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    <a></a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['permission'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>
";
    }

    // line 11
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
            // line 12
            echo "    ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 13
            echo "    ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
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

    public function getTemplateName()
    {
        return "forms/fields/permissions/permissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 13,  223 => 12,  210 => 11,  205 => 65,  196 => 61,  186 => 59,  182 => 57,  177 => 56,  173 => 54,  171 => 53,  167 => 52,  163 => 51,  159 => 50,  155 => 49,  151 => 47,  148 => 46,  145 => 45,  141 => 44,  138 => 43,  132 => 42,  129 => 41,  126 => 40,  121 => 39,  119 => 38,  116 => 37,  114 => 36,  108 => 33,  105 => 32,  102 => 31,  99 => 30,  96 => 29,  93 => 28,  91 => 27,  88 => 26,  84 => 25,  81 => 24,  75 => 23,  69 => 22,  66 => 21,  61 => 20,  56 => 19,  54 => 18,  51 => 17,  48 => 16,  42 => 8,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/permissions/permissions.html.twig", "C:\\htdocs\\lupohelp\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\permissions\\permissions.html.twig");
    }
}
