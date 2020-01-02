<?php

/* default/template/extension/module/blog_latest.twig */
class __TwigTemplate_2a9b65df69007da4713e77b5d03a76ba68461f632e92e2d4909ed7240e7b6341 extends Twig_Template
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
        echo "<h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<div class=\"row\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 4
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"caption\">
        <h4><a href=\"";
            // line 7
            echo $this->getAttribute($context["blog"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["blog"], "name", array());
            echo "</a></h4>
        <p>";
            // line 8
            echo $this->getAttribute($context["blog"], "brief", array());
            echo "</p>
        
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  40 => 8,  34 => 7,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h3>{{ heading_title }}</h3>*/
/* <div class="row">*/
/*   {% for blog in blogs %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/*       <div class="caption">*/
/*         <h4><a href="{{ blog.href }}">{{ blog.name }}</a></h4>*/
/*         <p>{{ blog.brief }}</p>*/
/*         */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
