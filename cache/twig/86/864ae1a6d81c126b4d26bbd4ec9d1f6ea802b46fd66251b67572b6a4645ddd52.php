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

/* blog.html.twig */
class __TwigTemplate_57958f6f4a3b554ab7613115bdee14ae36e6e2b7fd8ff6df1b9c7903298c04d2 extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1404085516")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
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

{% set collection = page.collection() %}
{% set the_base_url = page.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      {{ page.content }}
       
    </div>
  </div>
</div>
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        {% for child in collection %}
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        </div>
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}
      </main>
    </div>
    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}

{% endembed %}
", "blog.html.twig", "/var/www/html/grav/user/themes/gateway/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_57958f6f4a3b554ab7613115bdee14ae36e6e2b7fd8ff6df1b9c7903298c04d2___1404085516 extends \Twig\Template
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
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["the_base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 5
        $context["feed_url"] = ($context["the_base_url"] ?? null);
        // line 7
        if ((($context["the_base_url"] ?? null) == "/")) {
            // line 8
            $context["the_base_url"] = "";
        }
        // line 11
        if ((($context["the_base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["the_base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      ";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
       
    </div>
  </div>
</div>
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-";
        // line 26
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 29
            echo "        <div class=\"row\">
          ";
            // line 30
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 30)->display(twig_array_merge($context, ["page" => $context["child"], "truncate" => true]));
            // line 31
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        ";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 35
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 35)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 36
            echo "        ";
        }
        // line 37
        echo "      </main>
    </div>
    ";
        // line 39
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            // line 40
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 42
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 42)->display($context);
            // line 43
            echo "      </div>
    </div>
    ";
        }
        // line 46
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 46,  236 => 43,  234 => 42,  230 => 40,  228 => 39,  224 => 37,  221 => 36,  218 => 35,  216 => 34,  213 => 33,  198 => 31,  196 => 30,  193 => 29,  176 => 28,  167 => 26,  157 => 19,  152 => 16,  149 => 15,  144 => 1,  141 => 12,  139 => 11,  136 => 8,  134 => 7,  132 => 5,  130 => 4,  128 => 3,  30 => 1,);
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

{% set collection = page.collection() %}
{% set the_base_url = page.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      {{ page.content }}
       
    </div>
  </div>
</div>
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        {% for child in collection %}
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        </div>
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}
      </main>
    </div>
    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}

{% endembed %}
", "blog.html.twig", "/var/www/html/grav/user/themes/gateway/templates/blog.html.twig");
    }
}
