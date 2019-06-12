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

/* form.html.twig */
class __TwigTemplate_df5eb7040ccc3511aa17cf2e7433d2c7dac559ff9bdcbe09e7db3f1bd38e1ff7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-";
        // line 6
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              ";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "
            </h2>
          </header>
          <div class=\"entry-content\">
            ";
        // line 15
        echo ($context["content"] ?? null);
        echo "
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "enabled", [])) {
            // line 17
            echo "            ";
            $this->loadTemplate("forms/form.html.twig", "form.html.twig", 17)->display($context);
            // line 18
            echo "            ";
        }
        // line 19
        echo "          </div>
        </article>
      </main>
    </div>
    ";
        // line 23
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            // line 24
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 26
            $this->loadTemplate("partials/sidebar.html.twig", "form.html.twig", 26)->display($context);
            // line 27
            echo "      </div>
    </div>
    ";
        }
        // line 30
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  91 => 27,  89 => 26,  85 => 24,  83 => 23,  77 => 19,  74 => 18,  71 => 17,  69 => 16,  65 => 15,  58 => 11,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              {{ page.header.title }}
            </h2>
          </header>
          <div class=\"entry-content\">
            {{ content }}
            {% if config.plugins.form.enabled %}
            {% include \"forms/form.html.twig\" %}
            {% endif  %}
          </div>
        </article>
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
", "form.html.twig", "/var/www/html/grav/user/themes/gateway/templates/form.html.twig");
    }
}
