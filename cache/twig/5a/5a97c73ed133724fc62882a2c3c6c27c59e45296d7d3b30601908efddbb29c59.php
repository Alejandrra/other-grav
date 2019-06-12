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

/* forms/fields/2fa_secret/2fa_secret.html.twig */
class __TwigTemplate_ff865d7eac6dac4b9a388be02b16f088e8a917cd79724c312121f899e8e12525 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/2fa_secret/2fa_secret.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"form-input-wrapper twofa-wrapper\">
        ";
        // line 5
        $this->getAttribute(($context["admin"] ?? null), "get2FAData", [0 => ($context["value"] ?? null)], "method");
        // line 6
        echo "        ";
        $context["data"] = $this->getAttribute(($context["admin"] ?? null), "json_response", []);
        // line 7
        echo "        ";
        if (($this->getAttribute(($context["data"] ?? null), "status", []) == "success")) {
            // line 8
            echo "
            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "image", []), "html", null, true);
            echo "\" />
            <div>
                <span>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.2FA_SECRET"), "html", null, true);
            echo ": </span><span class=\"twofa-secret-code\" data-2fa-secret>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "secret", []), "html", null, true);
            echo "</span>
            </div>
            <div class=\"danger\">
                <button data-hint=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.2FA_REGEN_HINT"), "html", null, true);
            echo "\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_ADMIN.2FA_REGENERATE"), "html", null, true);
            echo "</button>
            </div>
            <input type=\"text\" style=\"display:none;\" name=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\" data-2fa-value value=\"";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["data"] ?? null), "secret", []), [" " => ""]), "html", null, true);
            echo "\" />

        ";
        } else {
            // line 19
            echo "            <div class=\"notice error\">
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "message", []), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/2fa_secret/2fa_secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  87 => 20,  84 => 19,  76 => 16,  69 => 14,  61 => 11,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
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

{% block input %}
    <div class=\"form-input-wrapper twofa-wrapper\">
        {% do admin.get2FAData(value) %}
        {% set data = admin.json_response %}
        {% if data.status == 'success' %}

            <img style=\"border: 1px solid #ddd\" data-2fa-image src=\"{{ data.image }}\" />
            <div>
                <span>{{ 'PLUGIN_ADMIN.2FA_SECRET'|tu }}: </span><span class=\"twofa-secret-code\" data-2fa-secret>{{ data.secret }}</span>
            </div>
            <div class=\"danger\">
                <button data-hint=\"{{ 'PLUGIN_ADMIN.2FA_REGEN_HINT'|tu }}\" class=\"button button-small hint--bottom\" data-2fa-regenerate><i class=\"fa fa-fw fa-refresh\"></i> {{ 'PLUGIN_ADMIN.2FA_REGENERATE'|t }}</button>
            </div>
            <input type=\"text\" style=\"display:none;\" name=\"{{ (scope ~ field.name)|fieldName }}\" data-2fa-value value=\"{{ data.secret|replace({' ':''}) }}\" />

        {% else %}
            <div class=\"notice error\">
                <p>{{ data.message }}</p>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "forms/fields/2fa_secret/2fa_secret.html.twig", "/var/www/html/grav/user/plugins/admin/themes/grav/templates/forms/fields/2fa_secret/2fa_secret.html.twig");
    }
}
