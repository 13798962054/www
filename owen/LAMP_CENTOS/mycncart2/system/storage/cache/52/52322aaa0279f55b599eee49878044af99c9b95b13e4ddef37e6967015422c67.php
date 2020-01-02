<?php

/* default/template/extension/module/blog_search.twig */
class __TwigTemplate_739dadd2a8af259005af93da033912cc9463ff060c4c94c33208efeab90424d5 extends Twig_Template
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
        echo "<div id=\"filter-blog\" class=\"form-group\">
    <div class=\"input-group\">
        <input class=\"form-control\" name=\"filter_blog\" type=\"text\" value=\"";
        // line 3
        echo (isset($context["filter_blog"]) ? $context["filter_blog"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_blog_search"]) ? $context["text_blog_search"] : null);
        echo "\" />    
        <div class=\"input-group-btn\">
            <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div id="filter-blog" class="form-group">*/
/*     <div class="input-group">*/
/*         <input class="form-control" name="filter_blog" type="text" value="{{ filter_blog }}" placeholder="{{ text_blog_search }}" />    */
/*         <div class="input-group-btn">*/
/*             <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
