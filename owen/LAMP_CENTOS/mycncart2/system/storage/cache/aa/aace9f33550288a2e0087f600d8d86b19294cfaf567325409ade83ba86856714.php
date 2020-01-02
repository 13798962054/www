<?php

/* cms/press_category_list.twig */
class __TwigTemplate_dfc0a4d15ffcaf74df82f0eec781c280707616185d788ab7d23604b85769bdcc extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
        echo (isset($context["repair"]) ? $context["repair"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_rebuild"]) ? $context["button_rebuild"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo " ') ? \$('#form-press_category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 11
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo " 
    ";
        // line 22
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 23
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo " </h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-press_category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  
                  <td class=\"text-left\">";
        // line 39
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            echo " 
                    <a href=\"";
            // line 40
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo " </a>
                    ";
        } else {
            // line 41
            echo "   
                    <a href=\"";
            // line 42
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo " </a>
                    ";
        }
        // line 44
        echo "                     </td>
                  <td class=\"text-right\">";
        // line 45
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            echo " 
                    <a href=\"";
            // line 46
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo " </a>
                    ";
        } else {
            // line 47
            echo "   
                    <a href=\"";
            // line 48
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo " </a>
                    ";
        }
        // line 50
        echo "                     </td>
                  <td class=\"text-right\">";
        // line 51
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo " </td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 55
        if ((isset($context["press_categories"]) ? $context["press_categories"] : null)) {
            echo " 
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["press_categories"]) ? $context["press_categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["press_category"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">";
                // line 58
                if (twig_in_filter($this->getAttribute($context["press_category"], "press_category_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 59
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["press_category"], "press_category_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 60
                    echo "   
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 61
                    echo $this->getAttribute($context["press_category"], "press_category_id", array());
                    echo "\" />
                    ";
                }
                // line 62
                echo " </td>
                  <td class=\"text-left\">";
                // line 63
                echo $this->getAttribute($context["press_category"], "name", array());
                echo " </td>
                  <td class=\"text-right\">";
                // line 64
                echo $this->getAttribute($context["press_category"], "sort_order", array());
                echo " </td>
                  <td class=\"text-right\"><a href=\"";
                // line 65
                echo $this->getAttribute($context["press_category"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['press_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo " 
                ";
        } else {
            // line 69
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 70
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
                </tr>
                ";
        }
        // line 73
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 78
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo " </div>
          <div class=\"col-sm-6 text-right\">";
        // line 79
        echo (isset($context["results"]) ? $context["results"] : null);
        echo " </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 85
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "cms/press_category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 85,  251 => 79,  247 => 78,  240 => 73,  234 => 70,  231 => 69,  227 => 67,  216 => 65,  212 => 64,  208 => 63,  205 => 62,  200 => 61,  197 => 60,  191 => 59,  189 => 58,  182 => 56,  178 => 55,  171 => 51,  168 => 50,  161 => 48,  158 => 47,  149 => 46,  145 => 45,  142 => 44,  135 => 42,  132 => 41,  123 => 40,  119 => 39,  109 => 32,  103 => 29,  98 => 26,  91 => 23,  87 => 22,  84 => 21,  77 => 18,  73 => 17,  66 => 12,  56 => 11,  50 => 10,  45 => 8,  38 => 6,  28 => 5,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }} */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a> <a href="{{ repair }}" data-toggle="tooltip" title="{{ button_rebuild }}" class="btn btn-default"><i class="fa fa-refresh"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }} ') ? $('#form-press_category').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }} </h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %} */
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }} </a></li>*/
/*         {% endfor %} */
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/*     {% if success %} */
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }} </h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-press_category">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   */
/*                   <td class="text-left">{% if sort  ==  'name' %} */
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }} </a>*/
/*                     {% else %}   */
/*                     <a href="{{ sort_name }}">{{ column_name }} </a>*/
/*                     {% endif %}*/
/*                      </td>*/
/*                   <td class="text-right">{% if sort  ==  'sort_order' %} */
/*                     <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }} </a>*/
/*                     {% else %}   */
/*                     <a href="{{ sort_sort_order }}">{{ column_sort_order }} </a>*/
/*                     {% endif %}*/
/*                      </td>*/
/*                   <td class="text-right">{{ column_action }} </td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if press_categories %} */
/*                 {% for press_category in press_categories %} */
/*                 <tr>*/
/*                   <td class="text-center">{% if press_category.press_category_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ press_category.press_category_id}}" checked="checked" />*/
/*                     {% else %}   */
/*                     <input type="checkbox" name="selected[]" value="{{ press_category.press_category_id }}" />*/
/*                     {% endif %} </td>*/
/*                   <td class="text-left">{{ press_category.name }} </td>*/
/*                   <td class="text-right">{{ press_category.sort_order }} </td>*/
/*                   <td class="text-right"><a href="{{ press_category.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %} */
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="4">{{ text_no_results }} </td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }} </div>*/
/*           <div class="col-sm-6 text-right">{{ results }} </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
