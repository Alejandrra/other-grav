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

/* simplesearch_results.html.twig */
class __TwigTemplate_0c735d827a2caea70c08cfbd1fedd404daaa4ecd77066d7b4a1d7a330c1dfd21 extends \Twig\Template
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
        return "partials/simplesearch_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/simplesearch_base.html.twig", "simplesearch_results.html.twig", 1);
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
              Query: <strong>";
        // line 11
        echo ($context["query"] ?? null);
        echo "</strong> found ";
        echo $this->getAttribute(($context["search_results"] ?? null), "count", []);
        echo " ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("plural", "result", $this->getAttribute(($context["search_results"] ?? null), "count", []));
        echo "
            </h2>
          </header>
          <div class=\"entry-content\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["search_results"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "                ";
            $this->loadTemplate("partials/simplesearch_item.html.twig", "simplesearch_results.html.twig", 16)->display(twig_array_merge($context, ["page" => $context["page"]]));
            // line 17
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "          </div>
        </article>
      </main>
    </div>
    ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "fullwidth", [])) {
            // line 23
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 25
            $this->loadTemplate("partials/sidebar.html.twig", "simplesearch_results.html.twig", 25)->display($context);
            // line 26
            echo "      </div>
    </div>
    ";
        }
        // line 29
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "simplesearch_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 29,  117 => 26,  115 => 25,  111 => 23,  109 => 22,  103 => 18,  89 => 17,  86 => 16,  69 => 15,  58 => 11,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/simplesearch_base.html.twig' %}

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              Query: <strong>{{ query }}</strong> found {{ search_results.count }} {{ 'result'|pluralize(search_results.count) }}
            </h2>
          </header>
          <div class=\"entry-content\">
            {% for page in search_results %}
                {% include 'partials/simplesearch_item.html.twig' with {'page':page} %}
            {% endfor %}
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
", "simplesearch_results.html.twig", "/var/www/html/grav/user/themes/gateway/templates/simplesearch_results.html.twig");
    }
}
