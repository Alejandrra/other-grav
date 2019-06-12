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

/* forms/form.html.twig */
class __TwigTemplate_89d553e50babc02e2d750d0215fa292146c2c74f2824f3ffa011f5f6f95a51b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'form_classes' => [$this, 'block_form_classes'],
            'button_classes' => [$this, 'block_button_classes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form_classes($context, array $blocks = [])
    {
        // line 3
        echo "  class=\"";
        echo $this->getAttribute(($context["form"] ?? null), "classes", []);
        echo " contact-form commentsblock\"
";
    }

    // line 6
    public function block_button_classes($context, array $blocks = [])
    {
        // line 7
        echo "  class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", []), "button")) : ("button"));
        echo " pushbutton-wide\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  50 => 6,  43 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'forms/default/form.html.twig' %}
{% block form_classes %}
  class=\"{{ form.classes }} contact-form commentsblock\"
{% endblock %}

{% block button_classes %}
  class=\"{{ button.classes|default('button') }} pushbutton-wide\"
{% endblock %}
", "forms/form.html.twig", "/var/www/html/grav/user/themes/gateway/templates/forms/form.html.twig");
    }
}
