<?php

/* default/template/blog/all.twig */
class __TwigTemplate_e14be35eb8ecefa32d39ad81c5b70a31885dd6b33757660743aa0ec05d9dbb72 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " 
";
        // line 2
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            echo " 
<div class=\"container visible-xs\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
            // line 5
            echo (isset($context["text_blog_category"]) ? $context["text_blog_category"] : null);
            echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex2-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " 
        ";
                // line 11
                if ($this->getAttribute($context["category"], "children", array())) {
                    echo " 
        <li class=\"dropdown\"><a href=\"";
                    // line 12
                    echo $this->getAttribute($context["category"], "href", array());
                    echo " \" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\">
              ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        echo " 
              <ul class=\"list-unstyled\">
                <li><a href=\"";
                        // line 17
                        echo $this->getAttribute($context["children"], "href", array());
                        echo " \">";
                        echo $this->getAttribute($context["children"], "name", array());
                        echo "</a></li>
              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo " 
            </div>
          </div>
        </li>
        ";
                } else {
                    // line 23
                    echo "   
        <li><a href=\"";
                    // line 24
                    echo $this->getAttribute($context["category"], "href", array());
                    echo " \">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
      </ul>
    </div>
  </nav>
</div>
";
        }
        // line 31
        echo " 
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 35
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo " 
  </ul>
  <div class=\"row\">";
        // line 38
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
    ";
        // line 39
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 40
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 41
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 42
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 43
            echo "    ";
        } else {
            // line 44
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 45
            echo "    ";
        }
        echo " 
     
    <div id=\"content\" class=\"";
        // line 47
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " \">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo " 
      ";
        // line 48
        if ((isset($context["blogs"]) ? $context["blogs"] : null)) {
            echo " 
      
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
          
          ";
                // line 52
                if ((isset($context["cms_blog_category_page_show_image"]) ? $context["cms_blog_category_page_show_image"] : null)) {
                    echo " 
            ";
                    // line 53
                    if ($this->getAttribute($context["blog"], "thumb", array())) {
                        echo " 
            <div><img src=\"";
                        // line 54
                        echo $this->getAttribute($context["blog"], "thumb", array());
                        echo " \" alt=\"";
                        echo $this->getAttribute($context["blog"], "title", array());
                        echo " \" title=\"";
                        echo $this->getAttribute($context["blog"], "title", array());
                        echo " \" class=\"img-thumbnail\" /></div>
            ";
                    }
                    // line 55
                    echo " 
          ";
                }
                // line 56
                echo " 
          
      
          ";
                // line 59
                if ((isset($context["cms_blog_category_page_show_title"]) ? $context["cms_blog_category_page_show_title"] : null)) {
                    echo " 
          <h4><a href=\"";
                    // line 60
                    echo $this->getAttribute($context["blog"], "link", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["blog"], "title", array());
                    echo "\">";
                    echo $this->getAttribute($context["blog"], "title", array());
                    echo "</a></h4>
          ";
                }
                // line 61
                echo " 
          
          <div>
\t\t
\t\t  \t";
                // line 65
                if ((isset($context["cms_blog_category_page_show_author"]) ? $context["cms_blog_category_page_show_author"] : null)) {
                    echo " 
\t\t\t<span><i class=\"fa fa-pencil\"></i> <b>";
                    // line 66
                    echo (isset($context["text_written_by"]) ? $context["text_written_by"] : null);
                    echo "</b> ";
                    echo $this->getAttribute($context["blog"], "author", array());
                    echo "</span> 
\t\t\t";
                }
                // line 67
                echo " 
\t\t\t
\t\t\t";
                // line 69
                if ((isset($context["cms_blog_category_page_show_created_date"]) ? $context["cms_blog_category_page_show_created_date"] : null)) {
                    echo " 
\t\t\t<span><i class=\"fa fa-calendar\"></i> <b>";
                    // line 70
                    echo (isset($context["text_created_date"]) ? $context["text_created_date"] : null);
                    echo "</b> ";
                    echo $this->getAttribute($context["blog"], "created", array());
                    echo "</span> 
\t\t\t";
                }
                // line 71
                echo " 
\t\t\t
\t\t\t
\t\t\t";
                // line 74
                if ((isset($context["cms_blog_category_page_show_hits"]) ? $context["cms_blog_category_page_show_hits"] : null)) {
                    echo " 
\t\t\t<span><i class=\"fa fa-insert-template\"></i> <b>";
                    // line 75
                    echo (isset($context["text_hits"]) ? $context["text_hits"] : null);
                    echo "</b> ";
                    echo $this->getAttribute($context["blog"], "hits", array());
                    echo "  </span>
\t\t\t";
                }
                // line 76
                echo " \t\t
\t\t\t

\t\t\t
\t\t\t";
                // line 80
                if ((isset($context["cms_blog_category_page_show_comment_counter"]) ? $context["cms_blog_category_page_show_comment_counter"] : null)) {
                    echo " 
\t\t\t<span><i class=\"fa fa-comment\"></i> <b>";
                    // line 81
                    echo (isset($context["text_comment_count"]) ? $context["text_comment_count"] : null);
                    echo "</b> ";
                    echo $this->getAttribute($context["blog"], "comment_count", array());
                    echo "  </span>
\t\t\t";
                }
                // line 82
                echo " \t
\t\t\t
\t\t
\t\t  </div>
          
          ";
                // line 87
                if ((isset($context["cms_blog_category_page_show_brief"]) ? $context["cms_blog_category_page_show_brief"] : null)) {
                    echo " 
            ";
                    // line 88
                    if ($this->getAttribute($context["blog"], "brief", array())) {
                        echo " 
            <div>";
                        // line 89
                        echo $this->getAttribute($context["blog"], "brief", array());
                        echo "</div>
            ";
                    }
                    // line 90
                    echo " 
          ";
                }
                // line 91
                echo " 
          
          
        
        <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
            // line 98
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
            <div class=\"col-sm-6 text-right\">";
            // line 99
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
       ";
        } else {
            // line 101
            echo "   
      <p>";
            // line 102
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 104
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo " \" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 106
        echo "  
      ";
        // line 107
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 108
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 110
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/blog/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 110,  348 => 108,  344 => 107,  341 => 106,  333 => 104,  328 => 102,  325 => 101,  319 => 99,  315 => 98,  312 => 97,  301 => 91,  297 => 90,  292 => 89,  288 => 88,  284 => 87,  277 => 82,  270 => 81,  266 => 80,  260 => 76,  253 => 75,  249 => 74,  244 => 71,  237 => 70,  233 => 69,  229 => 67,  222 => 66,  218 => 65,  212 => 61,  203 => 60,  199 => 59,  194 => 56,  190 => 55,  181 => 54,  177 => 53,  173 => 52,  166 => 50,  161 => 48,  155 => 47,  149 => 45,  146 => 44,  143 => 43,  140 => 42,  137 => 41,  134 => 40,  132 => 39,  128 => 38,  124 => 36,  114 => 35,  108 => 34,  103 => 31,  90 => 26,  83 => 24,  80 => 23,  73 => 19,  62 => 17,  55 => 15,  47 => 12,  43 => 11,  37 => 10,  29 => 5,  23 => 2,  19 => 1,);
    }
}
/* {{ header }} */
/* {% if categories %} */
/* <div class="container visible-xs">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_blog_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex2-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %} */
/*         {% if category.children %} */
/*         <li class="dropdown"><a href="{{ category.href }} " class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner">*/
/*               {% for children in category %} */
/*               <ul class="list-unstyled">*/
/*                 <li><a href="{{ children.href }} ">{{ children.name }}</a></li>*/
/*               </ul>*/
/*               {% endfor %} */
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*         {% else %}   */
/*         <li><a href="{{ category.href }} ">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %} */
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %} */
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %} */
/*     <li><a href="{{ breadcrumb.href }} ">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %} */
/*   </ul>*/
/*   <div class="row">{{ column_left }} */
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %} */
/*      */
/*     <div id="content" class="{{ class }} ">{{ content_top }} */
/*       {% if blogs %} */
/*       */
/*         {% for blog in blogs %} */
/*           */
/*           {% if cms_blog_category_page_show_image %} */
/*             {% if blog.thumb %} */
/*             <div><img src="{{ blog.thumb }} " alt="{{ blog.title }} " title="{{ blog.title }} " class="img-thumbnail" /></div>*/
/*             {% endif %} */
/*           {% endif %} */
/*           */
/*       */
/*           {% if cms_blog_category_page_show_title %} */
/*           <h4><a href="{{ blog.link }}" title="{{ blog.title }}">{{ blog.title }}</a></h4>*/
/*           {% endif %} */
/*           */
/*           <div>*/
/* 		*/
/* 		  	{% if cms_blog_category_page_show_author  %} */
/* 			<span><i class="fa fa-pencil"></i> <b>{{ text_written_by }}</b> {{ blog.author }}</span> */
/* 			{% endif %} */
/* 			*/
/* 			{% if cms_blog_category_page_show_created_date  %} */
/* 			<span><i class="fa fa-calendar"></i> <b>{{ text_created_date }}</b> {{ blog.created }}</span> */
/* 			{% endif %} */
/* 			*/
/* 			*/
/* 			{% if cms_blog_category_page_show_hits  %} */
/* 			<span><i class="fa fa-insert-template"></i> <b>{{ text_hits }}</b> {{ blog.hits }}  </span>*/
/* 			{% endif %} 		*/
/* 			*/
/* */
/* 			*/
/* 			{% if cms_blog_category_page_show_comment_counter  %} */
/* 			<span><i class="fa fa-comment"></i> <b>{{ text_comment_count }}</b> {{ blog.comment_count }}  </span>*/
/* 			{% endif %} 	*/
/* 			*/
/* 		*/
/* 		  </div>*/
/*           */
/*           {% if cms_blog_category_page_show_brief %} */
/*             {% if blog.brief %} */
/*             <div>{{ blog.brief }}</div>*/
/*             {% endif %} */
/*           {% endif %} */
/*           */
/*           */
/*         */
/*         <hr>*/
/*         {% endfor %}*/
/*         <div class="row">*/
/*             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*        {% else %}   */
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }} " class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}  */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
