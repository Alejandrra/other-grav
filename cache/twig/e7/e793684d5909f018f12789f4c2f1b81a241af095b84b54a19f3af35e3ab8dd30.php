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

/* forms/fields/permissions/permissions.html.twig */
class __TwigTemplate_8030664b6c55811071810d728030b045ddc35623e68318437661d8b69eb919c5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 4
        $context["value"] = (((($context["value"] ?? null) === false)) ? (0) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/permissions/permissions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 7
        echo "    data-grav-disabled=\"";
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
";
    }

    // line 16
    public function block_input($context, array $blocks = [])
    {
        // line 17
        echo "    <div class=\"permissions-container\">
        ";
        // line 18
        $context["permissions"] = $this->getAttribute(($context["admin"] ?? null), "getPermissions", []);
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
                $context["permissions"] = twig_array_merge(($context["permissions"] ?? null), [(($context["index_existing_permission"] . ".") . $context["index_segment1"]) => "boolean"]);
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
            $context["permission_value"] = $this->getAttribute($this->getAttribute(($context["value"] ?? null), $this->getAttribute(($context["permission_segments"] ?? null), 0, [], "array"), [], "array"), $this->getAttribute(($context["permission_segments"] ?? null), 1, [], "array"), [], "array");
            // line 29
            echo "                ";
            if (twig_in_filter(($context["permission_value"] ?? null), [0 => "on", 1 => "true", 2 => 1])) {
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
            $context["options"] = ["true" => "PLUGIN_ADMIN.YES", "false" => "PLUGIN_ADMIN.NO", "" => "PLUGIN_ADMIN.NOT_SET"];
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
                $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"])));
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
                $context["id"] = (((("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . ".") . $context["permission"]) . $context["key"]);
                // line 46
                echo "                        ";
                $context["translation"] = twig_trim_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", [], "any", false, true), "twig", [], "any", false, true), "filters", [], "any", false, true), "tu", [], "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]))));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])) . ".") . $context["permission"])), "html", null, true);
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
                if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
                    echo "required=\"required\"";
                }
                // line 57
                echo "                        />

                        <label for=\"";
                // line 59
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">";
                echo twig_trim_filter($this->getAttribute($this, "spanToggle", [0 => ($context["translation"] ?? null), 1 => ($context["maxLen"] ?? null)], "method"));
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
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

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
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
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
        return array (  237 => 13,  234 => 12,  221 => 11,  216 => 65,  207 => 61,  197 => 59,  193 => 57,  188 => 56,  184 => 54,  182 => 53,  178 => 52,  174 => 51,  170 => 50,  166 => 49,  162 => 47,  159 => 46,  156 => 45,  152 => 44,  149 => 43,  143 => 42,  140 => 41,  137 => 40,  132 => 39,  130 => 38,  127 => 37,  125 => 36,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  102 => 27,  99 => 26,  95 => 25,  92 => 24,  86 => 23,  80 => 22,  77 => 21,  72 => 20,  67 => 19,  65 => 18,  62 => 17,  59 => 16,  53 => 8,  48 => 7,  45 => 6,  40 => 1,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}
{% set value = (value is same as(false) ? 0 : value) %}

{% block global_attributes %}
    data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
    data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
{% endblock %}

{% macro spanToggle(input, length) %}
    {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
    {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% block input %}
    <div class=\"permissions-container\">
        {% set permissions = admin.getPermissions %}
        {% for index_existing_permission, value_existing_permission in value %}
            {% for index_segment1, value_segment1 in value_existing_permission %}
                {% set permissions = permissions|merge({ (index_existing_permission ~ \".\" ~ index_segment1): \"boolean\"}) %}
            {% endfor %}
        {% endfor %}

        {% for permission, type in permissions %}
            <div class=\"permission-container\">
                {% set permission_segments = permission|split('.') %}
                {% set permission_value = value[permission_segments[0]][permission_segments[1]] %}
                {% if permission_value in ['on', 'true', 1] %}
                    {% set permission_value = 'true' %}
                {% endif %}

                <input type=\"text\" class=\"medium permission-value\" value=\"{{ permission }}\" />

                <div class=\"switch-toggle switch-grav medium switch-3\">
                    {% set options = { true: 'PLUGIN_ADMIN.YES', false: 'PLUGIN_ADMIN.NO', '': 'PLUGIN_ADMIN.NOT_SET' } %}

                    {% set maxLen = 0 %}
                    {% for value, text in options %}
                        {% set translation = grav.twig.twig.filters['tu'] is defined ? text|tu : text|t %}
                        {% set maxLen = max(translation|length, maxLen) %}
                    {% endfor %}

                    {% for key, text in options %}
                        {% set id = \"toggle_\" ~ field.name ~ \".\" ~ permission ~ key %}
                        {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}

                        <input type=\"radio\"
                            value=\"{{ key }}\"
                            id=\"{{ id }}\"
                            name=\"{{ (scope ~ field.name ~ \".\" ~ permission)|fieldName }}\"
                            class=\"{{ 'true' == '' ~ key ? 'highlight' : '' }}\"
                            {% if key|fieldName == '' ~ permission_value|fieldName %}
                                checked=\"checked\"
                            {% endif %}
                            {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                        />

                        <label for=\"{{ id }}\">{{ (_self.spanToggle(translation, maxLen)|trim)|raw }}</label>
                    {% endfor %}
                    <a></a>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}


", "forms/fields/permissions/permissions.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/permissions/permissions.html.twig");
    }
}
