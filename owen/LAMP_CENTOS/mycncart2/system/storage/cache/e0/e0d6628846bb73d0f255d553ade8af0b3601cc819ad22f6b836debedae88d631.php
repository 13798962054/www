<?php

/* default/template/extension/module/blog_category.twig */
class __TwigTemplate_d6b194b34b96aa2e20c231828e18e2ab24f366cb9d2833ddbdbb4b69c7240942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"list-group\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blog_categories"]) ? $context["blog_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog_category"]) {
            // line 3
            echo "  ";
            if (($this->getAttribute($context["blog_category"], "blog_category_id", array()) == (isset($context["blog_category_id"]) ? $context["blog_category_id"] : null))) {
                echo " 
  <a href=\"";
                // line 4
                echo $this->getAttribute($context["blog_category"], "href", array());
                echo "\" class=\"list-group-item active\">";
                echo $this->getAttribute($context["blog_category"], "name", array());
                echo "</a> 
  ";
                // line 5
                if ($this->getAttribute($context["blog_category"], "children", array())) {
                    // line 6
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["blog_category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        echo "  ";
                        if (($this->getAttribute($context["child"], "blog_category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 8
                            echo "  <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a> 
  ";
                        } else {
                            // line 9
                            echo " 
  <a href=\"";
                            // line 10
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
  ";
                        }
                        // line 12
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "  ";
                }
                // line 14
                echo "  ";
            } else {
                echo " <a href=\"";
                echo $this->getAttribute($context["blog_category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["blog_category"], "name", array());
                echo "</a>
  ";
            }
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  84 => 16,  74 => 14,  71 => 13,  65 => 12,  58 => 10,  55 => 9,  47 => 8,  44 => 7,  39 => 6,  37 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="list-group">*/
/*   {% for blog_category in blog_categories %}*/
/*   {% if blog_category.blog_category_id == blog_category_id %} */
/*   <a href="{{ blog_category.href }}" class="list-group-item active">{{ blog_category.name }}</a> */
/*   {% if blog_category.children %}*/
/*   {% for child in blog_category.children %}*/
/*   {% if child.blog_category_id == child_id %}*/
/*   <a href="{{ child.href }}" class="list-group-item active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a> */
/*   {% else %} */
/*   <a href="{{ child.href }}" class="list-group-item">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/*   {% endif %}*/
/*   {% else %} <a href="{{ blog_category.href }}" class="list-group-item">{{ blog_category.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* */
