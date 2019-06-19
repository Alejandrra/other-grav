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

/* archive.html.twig */
class __TwigTemplate_032e8357c764d94c55f6bf980994eae941fd5c8c2d2c6df716b84ccd8905b8a6 extends \Twig\Template
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
        $this->loadTemplate("archive.html.twig", "archive.html.twig", 1, "981210496")->display($context);
        // line 41
        echo "

";
    }

    public function getTemplateName()
    {
        return "archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 41,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}
\t{% set collection = page.collection() %}
\t{% set the_base_url = page.url %}
    {% set feed_url = the_base_url %}

    {% if the_base_url == '/' %}
        {% set the_base_url = '' %}
    {% endif %}

    {% if the_base_url == base_url_relative %}
        {% set feed_url = the_base_url~'/'~page.slug %}
    {% endif  %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first %}
        {% if blog_image %}
        <div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
        <h1>{{ page.title }}</h1>
        </div>
        {% endif %}

\t\t<div class=\"content-wrapper archive-list g-grid pure-g-r\">
\t\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
            {{ page.content }}
\t\t\t  {% if config.plugins.taxonomylist.enabled %}
             <h4>Archives by tags</h4>
             {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
             {% endif  %}

             {% if config.plugins.archives.enabled %}
             <h4>Archives by month</h4>
\t         {% include 'partials/archives.html.twig' %}
             {% endif  %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}
{% endembed %}


", "archive.html.twig", "/var/www/html/grav/user/themes/gateway/templates/archive.html.twig");
    }
}


/* archive.html.twig */
class __TwigTemplate_032e8357c764d94c55f6bf980994eae941fd5c8c2d2c6df716b84ccd8905b8a6___981210496 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 3
        $context["the_base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 4
        $context["feed_url"] = ($context["the_base_url"] ?? null);
        // line 6
        if ((($context["the_base_url"] ?? null) == "/")) {
            // line 7
            $context["the_base_url"] = "";
        }
        // line 10
        if ((($context["the_base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 11
            $context["feed_url"] = ((($context["the_base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "archive.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        // line 15
        echo "\t\t";
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 16
        echo "        ";
        if (($context["blog_image"] ?? null)) {
            // line 17
            echo "        <div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bg_color", []);
            echo " url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", []);
            echo ") no-repeat right;\">
        <h1>";
            // line 18
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
        </div>
        ";
        }
        // line 21
        echo "
\t\t<div class=\"content-wrapper archive-list g-grid pure-g-r\">
\t\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
            ";
        // line 24
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t\t\t  ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 26
            echo "             <h4>Archives by tags</h4>
             ";
            // line 27
            $this->loadTemplate("partials/taxonomylist.html.twig", "archive.html.twig", 27)->display(twig_array_merge($context, ["taxonomy" => "tag"]));
            // line 28
            echo "             ";
        }
        // line 29
        echo "
             ";
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 31
            echo "             <h4>Archives by month</h4>
\t         ";
            // line 32
            $this->loadTemplate("partials/archives.html.twig", "archive.html.twig", 32)->display($context);
            // line 33
            echo "             ";
        }
        // line 34
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 36
        $this->loadTemplate("partials/sidebar.html.twig", "archive.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 37,  209 => 36,  205 => 34,  202 => 33,  200 => 32,  197 => 31,  195 => 30,  192 => 29,  189 => 28,  187 => 27,  184 => 26,  182 => 25,  178 => 24,  173 => 21,  167 => 18,  160 => 17,  157 => 16,  154 => 15,  151 => 14,  146 => 1,  143 => 11,  141 => 10,  138 => 7,  136 => 6,  134 => 4,  132 => 3,  130 => 2,  124 => 1,  32 => 41,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}
\t{% set collection = page.collection() %}
\t{% set the_base_url = page.url %}
    {% set feed_url = the_base_url %}

    {% if the_base_url == '/' %}
        {% set the_base_url = '' %}
    {% endif %}

    {% if the_base_url == base_url_relative %}
        {% set feed_url = the_base_url~'/'~page.slug %}
    {% endif  %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first %}
        {% if blog_image %}
        <div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
        <h1>{{ page.title }}</h1>
        </div>
        {% endif %}

\t\t<div class=\"content-wrapper archive-list g-grid pure-g-r\">
\t\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
            {{ page.content }}
\t\t\t  {% if config.plugins.taxonomylist.enabled %}
             <h4>Archives by tags</h4>
             {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
             {% endif  %}

             {% if config.plugins.archives.enabled %}
             <h4>Archives by month</h4>
\t         {% include 'partials/archives.html.twig' %}
             {% endif  %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}
{% endembed %}


", "archive.html.twig", "/var/www/html/grav/user/themes/gateway/templates/archive.html.twig");
    }
}
