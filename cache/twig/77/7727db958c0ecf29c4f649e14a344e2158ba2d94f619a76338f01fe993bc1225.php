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

/* partials/header.html.twig */
class __TwigTemplate_b7b728925a37b4948105dfa12d0f43325d3ec0d35dc1cbb5dec9a6abbb214346 extends \Twig\Template
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
        echo "
<style type=\"text/css\" id=\"rescue_custom_css\">
.home-header-bg {
  background:url( '";
        // line 4
        echo ($context["theme_url"] ?? null);
        echo "/img/";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "background", []);
        echo "' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
/* for background-size:cover replacement on iOS devices */
@media only screen and (max-width: 40em) {
  .home-header-bg {
    background-attachment: scroll;
  }
}
@media only screen and (orientation: portrait) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: auto 150%;
    background-attachment: scroll;
  }
}
@media only screen and (orientation: landscape) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: 150% auto;
    background-attachment: scroll;
  }
}

.bg-image-header {
  background:url( '";
        // line 30
        echo ($context["theme_url"] ?? null);
        echo "/img/";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "background", []);
        echo "' ) center bottom #ffffff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}

.bg-center-center {
  background-position: center center;
}

.site-branding {
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"home-header-bg clearfix\">
  <div class=\"site-branding\">
    <a href=\"";
        // line 51
        echo ($context["base_url_absolute"] ?? null);
        echo "\">
      <img class=\"logo\" src=\"";
        // line 52
        echo ($context["theme_url"] ?? null);
        echo "/img/";
        echo $this->getAttribute(($context["site"] ?? null), "logo", []);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["site"] ?? null), "logo", []);
        echo "\"></a>
    </div>
    <div class=\"hero-widgets-wrap\">
      <div class=\"row\">
        <div class=\"large-8 large-centered columns\">
          <aside id=\"text-3\" class=\"widget widget_text\">
            <h1 class=\"widget-title\">";
        // line 58
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "title", []);
        echo "</h1>
            <div class=\"textwidget\">
              <p>";
        // line 60
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "description", []);
        echo "</p>
              <p>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 63
            echo "                <a href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", []);
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "              </p>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 65,  123 => 63,  119 => 62,  114 => 60,  109 => 58,  96 => 52,  92 => 51,  66 => 30,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<style type=\"text/css\" id=\"rescue_custom_css\">
.home-header-bg {
  background:url( '{{ theme_url }}/img/{{ site.header.background }}' ) #ffffff no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
/* for background-size:cover replacement on iOS devices */
@media only screen and (max-width: 40em) {
  .home-header-bg {
    background-attachment: scroll;
  }
}
@media only screen and (orientation: portrait) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: auto 150%;
    background-attachment: scroll;
  }
}
@media only screen and (orientation: landscape) and (device-width: 320px), (device-width: 768px) {
  .home-header-bg {
    -webkit-background-size: 150% auto;
    background-attachment: scroll;
  }
}

.bg-image-header {
  background:url( '{{ theme_url }}/img/{{ site.header.background }}' ) center bottom #ffffff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}

.bg-center-center {
  background-position: center center;
}

.site-branding {
  margin: 0 auto;
  display: table;
  padding-top: 2em;
}
</style>

<div class=\"home-header-bg clearfix\">
  <div class=\"site-branding\">
    <a href=\"{{ base_url_absolute }}\">
      <img class=\"logo\" src=\"{{ theme_url }}/img/{{ site.logo }}\" alt=\"{{ site.logo }}\"></a>
    </div>
    <div class=\"hero-widgets-wrap\">
      <div class=\"row\">
        <div class=\"large-8 large-centered columns\">
          <aside id=\"text-3\" class=\"widget widget_text\">
            <h1 class=\"widget-title\">{{ site.header.title }}</h1>
            <div class=\"textwidget\">
              <p>{{ site.header.description }}</p>
              <p>
                {% for button in site.header.buttons %}
                <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
                {% endfor %}
              </p>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
", "partials/header.html.twig", "/var/www/html/grav/user/themes/gateway/templates/partials/header.html.twig");
    }
}
