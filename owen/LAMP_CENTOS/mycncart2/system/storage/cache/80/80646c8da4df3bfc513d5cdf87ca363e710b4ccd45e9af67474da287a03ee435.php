<?php

/* cms/press_list.twig */
class __TwigTemplate_34df6a82082560e7f64f9bb4f1bef7b8944e9605b57ba9cd0583917e3f38503b extends Twig_Template
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
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo " ') ? \$('#form-press').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 30
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
\t\t\t  <label class=\"control-label\" for=\"input-title\">";
        // line 34
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo " </label>
\t\t\t  <input type=\"text\" title=\"filter_title\" value=\"";
        // line 35
        echo (isset($context["filter_title"]) ? $context["filter_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-title\" class=\"form-control\" />
\t\t\t</div>
            <div class=\"form-group\">
\t\t\t  <label class=\"control-label\" for=\"input-status\">";
        // line 38
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo " </label>
\t\t\t  <select title=\"filter_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t<option value=\"*\"></option>
\t\t\t\t";
        // line 41
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            echo " 
\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 42
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
\t\t\t\t";
        } else {
            // line 43
            echo "   
\t\t\t\t<option value=\"1\">";
            // line 44
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
\t\t\t\t";
        }
        // line 45
        echo "  
\t\t\t\t";
        // line 46
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            echo " 
\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 47
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
\t\t\t\t";
        } else {
            // line 48
            echo "   
\t\t\t\t<option value=\"0\">";
            // line 49
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
\t\t\t\t";
        }
        // line 50
        echo " 
\t\t\t  </select>
\t\t\t</div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 54
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 62
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 65
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-press\">
\t\t\t<div class=\"table-responsive\">
\t\t\t  <table class=\"table table-bordered table-hover\">
\t\t\t\t<thead>
\t\t\t\t  <tr>
\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t<td class=\"text-left\">";
        // line 71
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.title")) {
            echo " 
\t\t\t\t\t  <a href=\"";
            // line 72
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo " </a>
\t\t\t\t\t  ";
        } else {
            // line 73
            echo "   
\t\t\t\t\t  <a href=\"";
            // line 74
            echo (isset($context["sort_title"]) ? $context["sort_title"] : null);
            echo "\">";
            echo (isset($context["column_title"]) ? $context["column_title"] : null);
            echo " </a>
\t\t\t\t\t  ";
        }
        // line 76
        echo "\t\t\t\t\t   </td>
\t\t\t\t\t
\t\t\t\t\t<td class=\"text-left\">";
        // line 78
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
            echo " 
\t\t\t\t\t  <a href=\"";
            // line 79
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo " </a>
\t\t\t\t\t  ";
        } else {
            // line 80
            echo "   
\t\t\t\t\t  <a href=\"";
            // line 81
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo " </a>
\t\t\t\t\t  ";
        }
        // line 83
        echo "\t\t\t\t\t   </td>
\t\t\t\t\t<td class=\"text-right\">";
        // line 84
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo " </td>
\t\t\t\t  </tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t  ";
        // line 88
        if ((isset($context["presses"]) ? $context["presses"] : null)) {
            echo " 
\t\t\t\t  ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["presses"]) ? $context["presses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["press"]) {
                echo " 
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-center\">";
                // line 91
                if (twig_in_filter($this->getAttribute($context["press"], "press_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 92
                    echo "\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["press"], "press_id", array());
                    echo "\" checked=\"checked\" />
\t\t\t\t\t  ";
                } else {
                    // line 93
                    echo "   
\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 94
                    echo $this->getAttribute($context["press"], "press_id", array());
                    echo "\" />
\t\t\t\t\t  ";
                }
                // line 95
                echo " </td>
\t\t\t\t\t<td class=\"text-left\">";
                // line 96
                echo $this->getAttribute($context["press"], "title", array());
                echo " </td>
\t\t\t\t\t<td class=\"text-left\">";
                // line 97
                echo $this->getAttribute($context["press"], "status", array());
                echo " </td>
\t\t\t\t\t<td class=\"text-right\"><a href=\"";
                // line 98
                echo $this->getAttribute($context["press"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
\t\t\t\t  </tr>
\t\t\t\t   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['press'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t   ";
        } else {
            echo "   
\t\t\t\t  <tr>
\t\t\t\t\t<td class=\"text-center\" colspan=\"8\">";
            // line 103
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
\t\t\t\t  </tr>
\t\t\t\t   ";
        }
        // line 105
        echo " 
\t\t\t\t</tbody>
\t\t\t  </table>
\t\t\t</div>
\t\t  </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 111
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 112
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=cms/press&user_token=";
        // line 121
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_title = \$('input[title=\\'filter_title\\']').val();

\tif (filter_title) {
\t\turl += '&filter_title=' + encodeURIComponent(filter_title);
\t}

\tvar filter_status = \$('select[title=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[title=\\'filter_title\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=cms/press/autocomplete&user_token=";
        // line 142
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_title=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['title'],
\t\t\t\t\t\tvalue: item['press_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[title=\\'filter_title\\']').val(item['label']);
\t}
});

//--></script></div>
";
        // line 160
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "cms/press_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 160,  355 => 142,  331 => 121,  319 => 112,  315 => 111,  307 => 105,  301 => 103,  295 => 101,  284 => 98,  280 => 97,  276 => 96,  273 => 95,  268 => 94,  265 => 93,  259 => 92,  257 => 91,  250 => 89,  246 => 88,  239 => 84,  236 => 83,  229 => 81,  226 => 80,  217 => 79,  213 => 78,  209 => 76,  202 => 74,  199 => 73,  190 => 72,  186 => 71,  177 => 65,  171 => 62,  160 => 54,  154 => 50,  149 => 49,  146 => 48,  141 => 47,  137 => 46,  134 => 45,  129 => 44,  126 => 43,  121 => 42,  117 => 41,  111 => 38,  103 => 35,  99 => 34,  92 => 30,  86 => 26,  78 => 22,  75 => 21,  67 => 17,  65 => 16,  60 => 13,  49 => 11,  45 => 10,  40 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }} ') ? $('#form-press').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-product" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/* 			  <label class="control-label" for="input-title">{{ entry_title }} </label>*/
/* 			  <input type="text" title="filter_title" value="{{ filter_title }}" placeholder="{{ entry_title }}" id="input-title" class="form-control" />*/
/* 			</div>*/
/*             <div class="form-group">*/
/* 			  <label class="control-label" for="input-status">{{ entry_status }} </label>*/
/* 			  <select title="filter_status" id="input-status" class="form-control">*/
/* 				<option value="*"></option>*/
/* 				{% if filter_status == '1' %} */
/* 				<option value="1" selected="selected">{{ text_enabled }} </option>*/
/* 				{% else %}   */
/* 				<option value="1">{{ text_enabled }} </option>*/
/* 				{% endif %}  */
/* 				{% if filter_status == '0' %} */
/* 				<option value="0" selected="selected">{{ text_disabled}} </option>*/
/* 				{% else %}   */
/* 				<option value="0">{{ text_disabled }} </option>*/
/* 				{% endif %} */
/* 			  </select>*/
/* 			</div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-press">*/
/* 			<div class="table-responsive">*/
/* 			  <table class="table table-bordered table-hover">*/
/* 				<thead>*/
/* 				  <tr>*/
/* 					<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/* 					<td class="text-left">{% if sort  ==  'pd.title' %} */
/* 					  <a href="{{ sort_title }}" class="{{ order|lower }}">{{ column_title }} </a>*/
/* 					  {% else %}   */
/* 					  <a href="{{ sort_title }}">{{ column_title }} </a>*/
/* 					  {% endif %}*/
/* 					   </td>*/
/* 					*/
/* 					<td class="text-left">{% if sort  ==  'p.status' %} */
/* 					  <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }} </a>*/
/* 					  {% else %}   */
/* 					  <a href="{{ sort_status }}">{{ column_status }} </a>*/
/* 					  {% endif %}*/
/* 					   </td>*/
/* 					<td class="text-right">{{ column_action }} </td>*/
/* 				  </tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 				  {% if presses %} */
/* 				  {% for press in presses %} */
/* 				  <tr>*/
/* 					<td class="text-center">{% if press.press_id in selected %}*/
/* 					  <input type="checkbox" name="selected[]" value="{{ press.press_id}}" checked="checked" />*/
/* 					  {% else %}   */
/* 					  <input type="checkbox" name="selected[]" value="{{ press.press_id }}" />*/
/* 					  {% endif %} </td>*/
/* 					<td class="text-left">{{ press.title }} </td>*/
/* 					<td class="text-left">{{ press.status }} </td>*/
/* 					<td class="text-right"><a href="{{ press.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/* 				  </tr>*/
/* 				   {% endfor %}*/
/* 				   {% else %}   */
/* 				  <tr>*/
/* 					<td class="text-center" colspan="8">{{ text_no_results }} </td>*/
/* 				  </tr>*/
/* 				   {% endif %} */
/* 				</tbody>*/
/* 			  </table>*/
/* 			</div>*/
/* 		  </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = 'index.php?route=cms/press&user_token={{ user_token }}';*/
/* */
/* 	var filter_title = $('input[title=\'filter_title\']').val();*/
/* */
/* 	if (filter_title) {*/
/* 		url += '&filter_title=' + encodeURIComponent(filter_title);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[title=\'filter_status\']').val();*/
/* */
/* 	if (filter_status != '*') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('input[title=\'filter_title\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=cms/press/autocomplete&user_token={{ user_token }}&filter_title=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['title'],*/
/* 						value: item['press_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[title=\'filter_title\']').val(item['label']);*/
/* 	}*/
/* });*/
/* */
/* //--></script></div>*/
/* {{ footer }} */
