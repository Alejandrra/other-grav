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

/* partials/base.html.twig */
class __TwigTemplate_c3f17f1dae20a1ebc34c8a16dc6c7ce8f1d504db6f6957ba529d46c6b0f30dbe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\" class=\"";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
    <div id=\"page\">
        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('navigation', $context, $blocks);
        // line 49
        echo "
        <div id=\"content\" class=\"site-content\">
          ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "        </div>

        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "    </div>

    <script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tvar infiniteScroll = {\"settings\":{\"id\":\"main\",\"type\":\"scroll\",\"wrapper\":true,\"wrapper_class\":\"infinite-wrap\",\"footer\":\"page\",\"click_handle\":\"1\",\"text\":\"Older posts\"}};
\t\t//]]>
\t\t</script>
    <div id=\"infinite-footer\">
      <div class=\"container\">
        <div class=\"blog-info\">
          <a id=\"infinity-blog-title\" href=\"";
        // line 67
        echo ($context["base_url_absolute"] ?? null);
        echo "\" rel=\"home\" title=\"";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "\">
            ";
        // line 68
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "
          </a>
        </div>
        ";
        // line 71
        if ($this->getAttribute(($context["site"] ?? null), "copyright", [])) {
            // line 72
            echo "        <div class=\"blog-credits\">
              ";
            // line 73
            echo $this->getAttribute(($context["site"] ?? null), "copyright", []);
            echo "
        </div>
        ";
        }
        // line 76
        echo "      </div>
    </div>

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/img/favicon.png\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    <link rel='stylesheet' id='gateway-fonts-css'  href='//fonts.googleapis.com/css?family=Quattrocento%3A400%2C700%7CFanwood+Text%3A400%2C400italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.min.css"], "method");
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://fonts/css/font-awesome.css", 1 => 100], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/rescue_shortcodes_styles.css"], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/app.css"], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://genericons/genericons.css"], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/jetpack.css"], "method");
        // line 20
        echo "    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/foundation.js"], "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.js", 1 => 100], "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skip-link-focus-fix.js"], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/scripts.js"], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/rescue_toggle.js"], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/rescue_progressbar.js"], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/waypoints.min.js"], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/infinity.js"], "method");
        // line 34
        echo "    ";
    }

    // line 42
    public function block_header($context, array $blocks = [])
    {
        // line 43
        echo "          ";
        $this->loadTemplate("partials/header_alt.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "        ";
    }

    // line 46
    public function block_navigation($context, array $blocks = [])
    {
        // line 47
        echo "          ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "        ";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        // line 55
        echo "          ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "        ";
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
        return array (  258 => 56,  255 => 55,  252 => 54,  247 => 51,  243 => 48,  240 => 47,  237 => 46,  233 => 44,  230 => 43,  227 => 42,  223 => 34,  220 => 33,  217 => 32,  214 => 31,  211 => 30,  208 => 29,  205 => 28,  202 => 27,  199 => 26,  196 => 25,  193 => 24,  189 => 20,  186 => 19,  183 => 18,  180 => 17,  177 => 16,  174 => 15,  171 => 14,  168 => 13,  165 => 12,  157 => 35,  155 => 24,  150 => 22,  147 => 21,  145 => 12,  140 => 10,  137 => 9,  135 => 8,  127 => 7,  124 => 6,  121 => 5,  112 => 76,  106 => 73,  103 => 72,  101 => 71,  95 => 68,  89 => 67,  77 => 57,  75 => 54,  71 => 52,  69 => 51,  65 => 49,  63 => 46,  60 => 45,  58 => 42,  52 => 39,  49 => 38,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.png\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/animate.min.css') %}
        {% do assets.addCss('theme://fonts/css/font-awesome.css',100) %}
        {% do assets.addCss('theme://css/rescue_shortcodes_styles.css') %}
        {% do assets.addCss('theme://css/app.css') %}
        {% do assets.addCss('theme://css/style.css') %}
        {% do assets.addCss('theme://genericons/genericons.css') %}
        {% do assets.addCss('theme://css/jetpack.css') %}
    {% endblock %}

    {{ assets.css() }}
    <link rel='stylesheet' id='gateway-fonts-css'  href='//fonts.googleapis.com/css?family=Quattrocento%3A400%2C700%7CFanwood+Text%3A400%2C400italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/foundation.js') %}
        {% do assets.addJs('theme://js/modernizr.custom.js',100) %}
        {% do assets.addJs('theme://js/skip-link-focus-fix.js') %}
        {% do assets.addJs('theme://js/scripts.js') %}
        {% do assets.addJs('theme://js/rescue_toggle.js') %}
        {% do assets.addJs('theme://js/rescue_progressbar.js') %}
        {% do assets.addJs('theme://js/waypoints.min.js') %}
        {% do assets.addJs('theme://js/infinity.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
    <div id=\"page\">
        {% block header %}
          {% include 'partials/header_alt.html.twig' %}
        {% endblock %}

        {% block navigation %}
          {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        <div id=\"content\" class=\"site-content\">
          {% block content %}{% endblock %}
        </div>

        {% block footer %}
          {% include 'partials/footer.html.twig' %}
        {% endblock %}
    </div>

    <script type=\"text/javascript\">
\t\t//<![CDATA[
\t\tvar infiniteScroll = {\"settings\":{\"id\":\"main\",\"type\":\"scroll\",\"wrapper\":true,\"wrapper_class\":\"infinite-wrap\",\"footer\":\"page\",\"click_handle\":\"1\",\"text\":\"Older posts\"}};
\t\t//]]>
\t\t</script>
    <div id=\"infinite-footer\">
      <div class=\"container\">
        <div class=\"blog-info\">
          <a id=\"infinity-blog-title\" href=\"{{ base_url_absolute }}\" rel=\"home\" title=\"{{ site.title }}\">
            {{ site.title }}
          </a>
        </div>
        {% if site.copyright %}
        <div class=\"blog-credits\">
              {{ site.copyright }}
        </div>
        {% endif %}
      </div>
    </div>

</body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/gateway/templates/partials/base.html.twig");
    }
}
