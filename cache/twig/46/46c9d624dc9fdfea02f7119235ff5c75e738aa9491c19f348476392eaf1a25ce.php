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

/* error.html.twig */
class __TwigTemplate_c705cd0ae886a4f111b08c1c03ef0d9dfbf4525d87c0bc617046c1a1e23f2eac extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<div id=\"primary\" class=\"content-area\">
  <main id=\"main\" class=\"site-main\" role=\"main\">
    <section class=\"error-404 not-found\">
      <div class=\"row\">
        <div class=\"large-12 columns\">
          <header class=\"page-header\">
            <h1 class=\"page-title\">Error ";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h1>
          </header>
        </div>
      </div>
      <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
            <p>";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  50 => 10,  42 => 4,  39 => 3,  29 => 1,);
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
<div id=\"primary\" class=\"content-area\">
  <main id=\"main\" class=\"site-main\" role=\"main\">
    <section class=\"error-404 not-found\">
      <div class=\"row\">
        <div class=\"large-12 columns\">
          <header class=\"page-header\">
            <h1 class=\"page-title\">Error {{ page.header.http_response_code }}</h1>
          </header>
        </div>
      </div>
      <div class=\"page-content\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
            <p>{{ page.content }}</p>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
{% endblock %}
", "error.html.twig", "/var/www/html/grav/user/themes/gateway/templates/error.html.twig");
    }
}
