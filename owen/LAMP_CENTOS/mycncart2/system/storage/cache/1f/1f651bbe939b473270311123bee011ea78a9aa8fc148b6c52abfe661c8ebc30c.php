<?php

/* default/template/extension/module/blog_comment.twig */
class __TwigTemplate_78b25b64d5a5c13c920db9fcae249f0423e30f89ad2d7eaf5cca832d61990fe1 extends Twig_Template
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
";
        // line 2
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 3
            echo "<div class=\"list-group\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 5
                echo "  \t\t<li class=\"list-group-item\">
        <i class=\"fa fa-commenting\"></i> ";
                // line 6
                echo $this->getAttribute($context["comment"], "text", array(), "array");
                echo "
        <div class=\"text-right\"><strong>----";
                // line 7
                echo $this->getAttribute($context["comment"], "author", array());
                echo "</strong></div>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 7,  36 => 6,  33 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <h3>{{ heading_title }}</h3>*/
/* {% if comments %}*/
/* <div class="list-group">*/
/* 	{% for comment in comments %}*/
/*   		<li class="list-group-item">*/
/*         <i class="fa fa-commenting"></i> {{ comment['text'] }}*/
/*         <div class="text-right"><strong>----{{ comment.author }}</strong></div>*/
/*         </li>*/
/*     {% endfor %}*/
/* </div>*/
/* {% endif %}*/
