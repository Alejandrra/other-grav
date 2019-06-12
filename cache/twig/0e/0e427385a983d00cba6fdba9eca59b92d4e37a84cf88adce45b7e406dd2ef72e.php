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

/* partials/navigation.html.twig */
class __TwigTemplate_96133079797f70cc958a5fea2e74e803ddb84bddd0fde144b3b23d007013e97c extends \Twig\Template
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
        // line 17
        echo "
<header id=\"masthead\" class=\"site-header\" role=\"banner\">
   <div class=\"stick\">
      <nav class=\"top-bar\" data-topbar=\"\" data-options=\"mobile_show_parent_link: true\">
         <ul class=\"title-area\">
            <li class=\"name\"></li>
            <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
         </ul>
         <section class=\"top-bar-section\">
            <ul id=\"menu-header\" class=\"right\">
              ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 28
            echo "                  ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
              ";
        } else {
            // line 30
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
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
                // line 31
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 32
                echo "                    <li id=\"menu-item-";
                echo $this->getAttribute($context["loop"], "index", []);
                echo "\" class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                        <a href=\"";
                // line 33
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                            ";
                // line 34
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 35
                echo "                            ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                        </a>
                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "              ";
        }
        // line 40
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 41
            echo "                  <li>
                      <a href=\"";
            // line 42
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                          ";
            // line 43
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 44
            echo "                          ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
                      </a>
                  </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
         </section>
      </nav>
      <hr>
   </div>
</header>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "      ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 4
                echo "          <li id=\"menu-item-";
                echo $this->getAttribute($context["loop"], "index", []);
                echo "\" class=\"menu-item ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    echo "menu-item-has-children has-dropdown";
                }
                echo " menu-item-";
                echo $this->getAttribute($context["loop"], "index", []);
                echo " not-click ";
                echo ($context["current_page"] ?? null);
                echo "\">
          <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">
              ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 7
                echo "              ";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "
          </a>
          ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 10
                    echo "              <ul class=\"sub-menu dropdown\">
                  ";
                    // line 11
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
              </ul>
          ";
                }
                // line 14
                echo "      </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 14,  216 => 11,  213 => 10,  211 => 9,  205 => 7,  199 => 6,  195 => 5,  182 => 4,  179 => 3,  161 => 2,  149 => 1,  139 => 48,  128 => 44,  122 => 43,  118 => 42,  115 => 41,  110 => 40,  107 => 39,  88 => 35,  82 => 34,  78 => 33,  71 => 32,  68 => 31,  50 => 30,  44 => 28,  42 => 27,  30 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
      {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
          <li id=\"menu-item-{{ loop.index }}\" class=\"menu-item {% if p.children.visible.count > 0 %}menu-item-has-children has-dropdown{% endif %} menu-item-{{ loop.index }} not-click {{ current_page }}\">
          <a href=\"{{ p.url }}\">
              {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
              {{ p.menu }}
          </a>
          {% if p.children.visible.count > 0 %}
              <ul class=\"sub-menu dropdown\">
                  {{ _self.loop(p) }}
              </ul>
          {% endif %}
      </li>
    {% endfor %}
{% endmacro %}

<header id=\"masthead\" class=\"site-header\" role=\"banner\">
   <div class=\"stick\">
      <nav class=\"top-bar\" data-topbar=\"\" data-options=\"mobile_show_parent_link: true\">
         <ul class=\"title-area\">
            <li class=\"name\"></li>
            <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
         </ul>
         <section class=\"top-bar-section\">
            <ul id=\"menu-header\" class=\"right\">
              {% if theme_config.dropdown.enabled %}
                  {{ _self.loop(pages) }}
              {% else %}
                  {% for page in pages.children.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li id=\"menu-item-{{ loop.index }}\" class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\">
                            {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                            {{ page.menu }}
                        </a>
                    </li>
                  {% endfor %}
              {% endif %}
              {% for mitem in site.menu %}
                  <li>
                      <a href=\"{{ mitem.url }}\">
                          {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                          {{ mitem.text }}
                      </a>
                  </li>
              {% endfor %}
            </ul>
         </section>
      </nav>
      <hr>
   </div>
</header>
", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/gateway/templates/partials/navigation.html.twig");
    }
}
