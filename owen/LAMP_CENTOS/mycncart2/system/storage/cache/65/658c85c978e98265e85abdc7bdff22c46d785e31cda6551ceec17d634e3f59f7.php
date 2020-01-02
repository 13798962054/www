<?php

/* customer/customer_form.twig */
class __TwigTemplate_c59d4b4710ef095b9a320f6eaf2e1f550286901ddd84931386d9434fb1fac180 extends Twig_Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
  <div class=\"container-fluid\"> ";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-affiliate\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_affiliate"]) ? $context["tab_affiliate"] : null);
        echo "</a></li>
            ";
        // line 30
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 31
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 32
            echo (isset($context["tab_transaction"]) ? $context["tab_transaction"] : null);
            echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 33
            echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
            echo "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 34
            echo (isset($context["tab_ip"]) ? $context["tab_ip"] : null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 42
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                    ";
        // line 43
        $context["address_row"] = 1;
        // line 44
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 45
            echo "                    <li><a href=\"#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "').remove();\"></i> ";
            echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
            echo " ";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "</a></li>
                    ";
            // line 46
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 47
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    <li id=\"address-add\"><a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_address_add"]) ? $context["button_address_add"] : null);
        echo "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 55
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 57
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 61
            echo "                              ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 62
                echo "                              <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                              ";
            } else {
                // line 64
                echo "                              <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                              ";
            }
            // line 66
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 71
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                            ";
        // line 74
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 75
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                            ";
        }
        // line 76
        echo "</div>
                        </div>
\t\t\t\t\t\t
                        <input type=\"hidden\" name=\"lastname\" value=\"";
        // line 79
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
\t\t\t\t\t\t\t
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 82
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 84
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                            ";
        // line 85
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 86
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                            ";
        }
        // line 87
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 90
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 92
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                            ";
        // line 93
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 94
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                            ";
        }
        // line 95
        echo "</div>
                        </div>
                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 98
            echo "                        ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 99
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 100
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 101
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"custom_field[";
                    // line 103
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 104
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                              ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 106
                        echo "                              ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 107
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        } else {
                            // line 109
                            echo "                              <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                              ";
                        }
                        // line 111
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "                            </select>
                            ";
                    // line 113
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 114
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 115
                    echo "</div>
                        </div>
                        ";
                }
                // line 118
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 119
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 120
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 123
                        echo "                              <div class=\"radio\"> ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 124
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 125
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 126
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        } else {
                            // line 128
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 129
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                                  ";
                            // line 130
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        }
                        // line 131
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo " </div>
                            ";
                    // line 133
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 134
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 135
                    echo "</div>
                        </div>
                        ";
                }
                // line 138
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 139
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 140
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 143
                        echo "                              <div class=\"checkbox\">";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 144
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 145
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 146
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        } else {
                            // line 148
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 149
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                                  ";
                            // line 150
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                ";
                        }
                        // line 151
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "</div>
                            ";
                    // line 153
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 154
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 155
                    echo "</div>
                        </div>
                        ";
                }
                // line 158
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 159
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 160
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 162
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                            ";
                    // line 163
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 164
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 165
                    echo "</div>
                        </div>
                        ";
                }
                // line 168
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 169
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 170
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[";
                    // line 172
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                            ";
                    // line 173
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 174
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 175
                    echo "</div>
                        </div>
                        ";
                }
                // line 178
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 179
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 180
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                    // line 182
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                            <input type=\"hidden\" name=\"custom_field[";
                    // line 183
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                            ";
                    // line 184
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 185
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 186
                    echo "</div>
                        </div>
                        ";
                }
                // line 189
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 190
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 191
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 194
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 198
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 199
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 200
                    echo "</div>
                        </div>
                        ";
                }
                // line 203
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 204
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 205
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 212
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 213
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 214
                    echo "</div>
                        </div>
                        ";
                }
                // line 217
                echo "                        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 218
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 219
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 222
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 226
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 227
                        echo "                            <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                            ";
                    }
                    // line 228
                    echo "</div>
                        </div>
                        ";
                }
                // line 231
                echo "                        ";
            }
            // line 232
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 235
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 237
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 239
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                            ";
        // line 240
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 241
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                            ";
        }
        // line 242
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 245
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 247
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\" />
                            ";
        // line 248
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 249
            echo "                            <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                            ";
        }
        // line 250
        echo "</div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 254
        echo (isset($context["text_other"]) ? $context["text_other"] : null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 256
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 259
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 260
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 261
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 263
            echo "                              <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 264
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 266
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 270
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 273
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 274
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 275
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 277
            echo "                              <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 278
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 280
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\">";
        // line 284
        echo (isset($context["entry_safe"]) ? $context["entry_safe"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 287
        if ((isset($context["safe"]) ? $context["safe"] : null)) {
            // line 288
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                              <option value=\"0\">";
            // line 289
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        } else {
            // line 291
            echo "                              <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 292
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        }
        // line 294
        echo "                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    ";
        // line 299
        $context["address_row"] = 1;
        // line 300
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 301
            echo "                    <div class=\"tab-pane\" id=\"tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">
                      <input type=\"hidden\" name=\"address[";
            // line 302
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_id]\" value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\" />
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname";
            // line 304
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 306
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][firstname]\" value=\"";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "\" id=\"input-firstname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 307
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array())) {
                // line 308
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array());
                echo "</div>
                          ";
            }
            // line 309
            echo "</div>
                      </div>
                      
                      <input type=\"hidden\" name=\"address[";
            // line 312
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][lastname]\" value=\"";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "\" id=\"input-lastname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-shipping-telephone";
            // line 315
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_shipping_telephone"]) ? $context["entry_shipping_telephone"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 317
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][shipping_telephone]\" value=\"";
            echo $this->getAttribute($context["address"], "shipping_telephone", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_shipping_telephone"]) ? $context["entry_shipping_telephone"] : null);
            echo "\" id=\"input-shipping-telephone";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 318
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "shipping_telephone", array())) {
                // line 319
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "shipping_telephone", array());
                echo "</div>
                          ";
            }
            // line 321
            echo "                        </div>
                      </div>
                          
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-company";
            // line 325
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 327
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][company]\" value=\"";
            echo $this->getAttribute($context["address"], "company", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "\" id=\"input-company";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-country";
            // line 332
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 334
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][country_id]\" id=\"input-country";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" onchange=\"country(this, '";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "', '";
            echo $this->getAttribute($context["address"], "zone_id", array());
            echo "');\" class=\"form-control\">
                            <option value=\"\">";
            // line 335
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                            ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 337
                echo "                            ";
                if (($this->getAttribute($context["country"], "country_id", array()) == $this->getAttribute($context["address"], "country_id", array()))) {
                    // line 338
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                            ";
                } else {
                    // line 340
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                            ";
                }
                // line 342
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "                          </select>
                          ";
            // line 344
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array())) {
                // line 345
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array());
                echo "</div>
                          ";
            }
            // line 346
            echo "</div>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-zone";
            // line 350
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 352
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][zone_id]\" id=\"input-zone";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" onchange=\"zone(this, '";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "', '";
            echo $this->getAttribute($context["address"], "city_id", array());
            echo "');\" class=\"form-control\">
                          </select>
                          ";
            // line 354
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array())) {
                // line 355
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array());
                echo "</div>
                          ";
            }
            // line 357
            echo "                        </div>
                      </div>
\t\t\t\t\t  
                      <div class=\"form-group required\" id=\"china-city";
            // line 360
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 361
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 363
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][city_id]\" id=\"input-city";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" onchange=\"city(this, '";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "', '";
            echo $this->getAttribute($context["address"], "district_id", array());
            echo "');\" class=\"form-control\">
                          </select>
                          ";
            // line 365
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array())) {
                // line 366
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array());
                echo "</div>
                          ";
            }
            // line 368
            echo "                        </div>
                      </div>
                      <div class=\"form-group required\" id=\"china-district";
            // line 370
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-district";
            // line 371
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_district"]) ? $context["entry_district"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 373
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][district_id]\" id=\"input-district";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\">
                          </select>
                          ";
            // line 375
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "district", array())) {
                // line 376
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "district", array());
                echo "</div>
                          ";
            }
            // line 378
            echo "                        </div>
                      </div>
                      <div class=\"form-group required\" id=\"world-city";
            // line 380
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 381
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 383
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][city]\" value=\"";
            echo $this->getAttribute($context["address"], "city", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "\" id=\"input-city";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 384
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array())) {
                // line 385
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array());
                echo "</div>
                          ";
            }
            // line 387
            echo "                        </div>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-1";
            // line 391
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 393
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_1]\" value=\"";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "\" id=\"input-address-1";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 394
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array())) {
                // line 395
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array());
                echo "</div>
                          ";
            }
            // line 396
            echo "</div>
                      </div>
                      
                      <input type=\"hidden\" name=\"address[";
            // line 399
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_2]\" value=\"";
            echo $this->getAttribute($context["address"], "address_2", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
            echo "\" id=\"input-address-2";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                        
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-postcode";
            // line 402
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 404
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][postcode]\" value=\"";
            echo $this->getAttribute($context["address"], "postcode", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "\" id=\"input-postcode";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\" />
                          ";
            // line 405
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array())) {
                // line 406
                echo "                          <div class=\"text-danger\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array());
                echo "</div>
                          ";
            }
            // line 407
            echo "</div>
                      </div>
\t\t\t\t\t  
\t\t\t\t\t  
                      ";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 412
                echo "                      ";
                if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                    // line 413
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                        // line 414
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 415
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
                        // line 417
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">
                            <option value=\"\">";
                        // line 418
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>
                            ";
                        // line 419
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 420
                            echo "                            ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 421
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 423
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 425
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 426
                        echo "                          </select>
                          ";
                        // line 427
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 428
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 429
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 432
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                        // line 433
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 434
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 436
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 437
                            echo "                            <div class=\"radio\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 438
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 439
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" />
                                ";
                                // line 440
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            } else {
                                // line 442
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 443
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" />
                                ";
                                // line 444
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            }
                            // line 445
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 446
                        echo " </div>
                          ";
                        // line 447
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 448
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 449
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 452
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                        // line 453
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 454
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 456
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 457
                            echo "                            <div class=\"checkbox\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 458
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 459
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\" />
                                ";
                                // line 460
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            } else {
                                // line 462
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 463
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" />
                                ";
                                // line 464
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                              ";
                            }
                            // line 465
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 466
                        echo " </div>
                          ";
                        // line 467
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 468
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 469
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 472
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                        // line 473
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 474
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
                        // line 476
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                          ";
                        // line 477
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 478
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 479
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 482
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                        // line 483
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 484
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"address[";
                        // line 486
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "</textarea>
                          ";
                        // line 487
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 488
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 489
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 492
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                        // line 493
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 494
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-address";
                        // line 496
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-loading-text=\"";
                        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                        echo "</button>
                          <input type=\"hidden\" name=\"address[";
                        // line 497
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                        echo "\" />
                          ";
                        // line 498
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 499
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 500
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 503
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                        // line 504
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 505
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"address[";
                        // line 508
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 512
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 513
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 514
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 517
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                        // line 518
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 519
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"address[";
                        // line 522
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"HH:mm\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 526
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 527
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 528
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 531
                    echo "                      ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                        // line 532
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 533
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"address[";
                        // line 536
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span> </div>
                          ";
                        // line 540
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 541
                            echo "                          <div class=\"text-danger\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                          ";
                        }
                        // line 542
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 545
                    echo "                      ";
                }
                // line 546
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 547
            echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 548
            echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio\">";
            // line 550
            if ((($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null)) ||  !(isset($context["addresses"]) ? $context["addresses"] : null))) {
                // line 551
                echo "                            <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\" checked=\"checked\" />
                            ";
            } else {
                // line 553
                echo "                            <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\" />
                            ";
            }
            // line 554
            echo "</label>
                        </div>
                      </div>
                    </div>
                    ";
            // line 558
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 559
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 560
        echo "                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-affiliate\">
              <fieldset>
                <legend>";
        // line 566
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 568
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"";
        // line 570
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
        // line 574
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
        // line 576
        echo (isset($context["website"]) ? $context["website"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "\" id=\"input-website\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tracking\"><span data-toggle=\"tooltip\" title=\"";
        // line 580
        echo (isset($context["help_tracking"]) ? $context["help_tracking"] : null);
        echo "\">";
        echo (isset($context["entry_tracking"]) ? $context["entry_tracking"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"";
        // line 582
        echo (isset($context["tracking"]) ? $context["tracking"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_tracking"]) ? $context["entry_tracking"] : null);
        echo "\" id=\"input-tracking\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 586
        echo (isset($context["help_commission"]) ? $context["help_commission"] : null);
        echo "\">";
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 588
        echo (isset($context["commission"]) ? $context["commission"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_commission"]) ? $context["entry_commission"] : null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 592
            echo "                ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "affiliate")) {
                // line 593
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 594
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 595
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                    // line 597
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 598
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                      ";
                    // line 599
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 600
                        echo "                      ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 601
                            echo "                      <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                      ";
                        } else {
                            // line 603
                            echo "                      <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                      ";
                        }
                        // line 605
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 606
                    echo "                    </select>
                    ";
                    // line 607
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 608
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 609
                    echo "</div>
                </div>
                ";
                }
                // line 612
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 613
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 614
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 616
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 617
                        echo "                      <div class=\"radio\">";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 618
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 619
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                          ";
                            // line 620
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        } else {
                            // line 622
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 623
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                          ";
                            // line 624
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        }
                        // line 625
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 626
                    echo " </div>
                    ";
                    // line 627
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 628
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 629
                    echo "</div>
                </div>
                ";
                }
                // line 632
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 633
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 634
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 636
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 637
                        echo "                      <div class=\"checkbox\">";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 638
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 639
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\" />
                          ";
                            // line 640
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        } else {
                            // line 642
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 643
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" />
                          ";
                            // line 644
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                        ";
                        }
                        // line 645
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 646
                    echo " </div>
                    ";
                    // line 647
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 648
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 649
                    echo "</div>
                </div>
                ";
                }
                // line 652
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 653
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 654
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 656
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                    ";
                    // line 657
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 658
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 659
                    echo "</div>
                </div>
                ";
                }
                // line 662
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 663
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 664
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 666
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                    ";
                    // line 667
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 668
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 669
                    echo "</div>
                </div>
                ";
                }
                // line 672
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 673
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 674
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 676
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                    // line 677
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
                    ";
                    // line 678
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 679
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 680
                    echo "</div>
                </div>
                ";
                }
                // line 683
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 684
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 685
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 688
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 692
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 693
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 694
                    echo "</div>
                </div>
                ";
                }
                // line 697
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 698
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 699
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 702
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 706
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 707
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 708
                    echo "</div>
                </div>
                ";
                }
                // line 711
                echo "                ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 712
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 713
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 716
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 720
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 721
                        echo "                    <div class=\"text-danger\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 722
                    echo "</div>
                </div>
                ";
                }
                // line 725
                echo "                ";
            }
            // line 726
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 727
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 729
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 731
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 733
        echo (isset($context["tax"]) ? $context["tax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 737
        echo (isset($context["entry_payment"]) ? $context["entry_payment"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>";
        // line 740
        if (((isset($context["payment"]) ? $context["payment"] : null) == "cheque")) {
            // line 741
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        ";
        } else {
            // line 743
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        ";
        }
        // line 745
        echo "                        ";
        echo (isset($context["text_cheque"]) ? $context["text_cheque"] : null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 748
        if (((isset($context["payment"]) ? $context["payment"] : null) == "paypal")) {
            // line 749
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        ";
        } else {
            // line 751
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        ";
        }
        // line 753
        echo "                        ";
        echo (isset($context["text_paypal"]) ? $context["text_paypal"] : null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 756
        if (((isset($context["payment"]) ? $context["payment"] : null) == "bank")) {
            // line 757
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        ";
        } else {
            // line 759
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        ";
        }
        // line 761
        echo "                        ";
        echo (isset($context["text_bank"]) ? $context["text_bank"] : null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 767
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 769
        echo (isset($context["cheque"]) ? $context["cheque"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cheque"]) ? $context["entry_cheque"] : null);
        echo "\" id=\"input-cheque\" class=\"form-control\" />
                      ";
        // line 770
        if ((isset($context["error_cheque"]) ? $context["error_cheque"] : null)) {
            // line 771
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_cheque"]) ? $context["error_cheque"] : null);
            echo "</div>
                      ";
        }
        // line 772
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 777
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 779
        echo (isset($context["paypal"]) ? $context["paypal"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_paypal"]) ? $context["entry_paypal"] : null);
        echo "\" id=\"input-paypal\" class=\"form-control\" />
                      ";
        // line 780
        if ((isset($context["error_paypal"]) ? $context["error_paypal"] : null)) {
            // line 781
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_paypal"]) ? $context["error_paypal"] : null);
            echo "</div>
                      ";
        }
        // line 782
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 787
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 789
        echo (isset($context["bank_name"]) ? $context["bank_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_name"]) ? $context["entry_bank_name"] : null);
        echo "\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 793
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 795
        echo (isset($context["bank_branch_number"]) ? $context["bank_branch_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_branch_number"]) ? $context["entry_bank_branch_number"] : null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 799
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 801
        echo (isset($context["bank_swift_code"]) ? $context["bank_swift_code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_swift_code"]) ? $context["entry_bank_swift_code"] : null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 805
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 807
        echo (isset($context["bank_account_name"]) ? $context["bank_account_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_account_name"]) ? $context["entry_bank_account_name"] : null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\" />
                      ";
        // line 808
        if ((isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null)) {
            // line 809
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_bank_account_name"]) ? $context["error_bank_account_name"] : null);
            echo "</div>
                      ";
        }
        // line 810
        echo "</div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 813
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 815
        echo (isset($context["bank_account_number"]) ? $context["bank_account_number"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_bank_account_number"]) ? $context["entry_bank_account_number"] : null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\" />
                      ";
        // line 816
        if ((isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null)) {
            // line 817
            echo "                      <div class=\"text-danger\">";
            echo (isset($context["error_bank_account_number"]) ? $context["error_bank_account_number"] : null);
            echo "</div>
                      ";
        }
        // line 818
        echo "</div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 822
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      ";
        // line 825
        if ((isset($context["affiliate"]) ? $context["affiliate"] : null)) {
            // line 826
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 827
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        } else {
            // line 829
            echo "                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 830
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      ";
        }
        // line 832
        echo "                     </select>
                  </div>
                </div>
              </fieldset>           
            </div>         
            ";
        // line 837
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 838
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 840
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 845
            echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 847
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 849
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 854
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-transaction\">
              <fieldset>
                <legend>";
            // line 859
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</legend>
                <div id=\"transaction\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 864
            echo (isset($context["text_transaction_add"]) ? $context["text_transaction_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">";
            // line 866
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 868
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
            // line 872
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 874
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "\" id=\"input-amount\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 879
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_transaction_add"]) ? $context["button_transaction_add"] : null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <fieldset>
                <legend>";
            // line 884
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</legend>
                <div id=\"reward\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 889
            echo (isset($context["text_reward_add"]) ? $context["text_reward_add"] : null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">";
            // line 891
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 893
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-reward-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
            // line 897
            echo (isset($context["help_points"]) ? $context["help_points"] : null);
            echo "\">";
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 899
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "\" id=\"input-points\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 904
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
            echo "</button>
              </div>
            </div>
            ";
        }
        // line 908
        echo "            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 910
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type=\"text/javascript\"><!--
  \$('input[name=\"affiliate\"]').on('change', function() {
    if (\$(this).val() == '1') { 
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', false);
    } else {
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', true);
    }
  }); 

  \$('input[name=\\'affiliate\\']:checked').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 934
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  var address_row = ";
        // line 959
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo ";

  function addAddress() {
    html  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 966
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 967
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '    <input type=\"hidden\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 970
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" />';
\t
\thtml += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-shipping-telephone' + address_row + '\">";
        // line 973
        echo (isset($context["entry_shipping_telephone"]) ? $context["entry_shipping_telephone"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][shipping_telephone]\" value=\"\" placeholder=\"";
        // line 974
        echo (isset($context["entry_shipping_telephone"]) ? $context["entry_shipping_telephone"] : null);
        echo "\" id=\"input-shipping-telephone' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 978
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 979
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';
\t
    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 983
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">";
        // line 985
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
      ";
        // line 986
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 987
            echo "      html += '         <option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 989
        echo "      html += '      </select></div>';
    html += '  </div>';

\thtml += '  <div class=\"form-group required\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 993
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\"  onchange=\"zone(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\"><option value=\"\">";
        // line 994
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option></select></div>';
\thtml += '  </div>';
\t
\thtml += '  <div class=\"form-group required\" id=\"china-city' + address_row + '\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 998
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][city_id]\" id=\"input-city' + address_row + '\"  onchange=\"city(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\"><option value=\"\">";
        // line 999
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option></select></div>';
\thtml += '  </div>';
\t
\thtml += '  <div class=\"form-group required\" id=\"china-district' + address_row + '\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-district' + address_row + '\">";
        // line 1003
        echo (isset($context["entry_district"]) ? $context["entry_district"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][district_id]\" id=\"input-district' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 1004
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option></select></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group required\" id=\"world-city' + address_row + '\">';
\thtml += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 1008
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 1009
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';
\t
\thtml += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 1013
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 1014
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '    <input type=\"hidden\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 1017
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" />';
\t
\thtml += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 1020
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 1021
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    // Custom Fields
    ";
        // line 1025
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 1026
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 1027
                echo "    ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 1028
                    echo "
    html += '  <div class=\"form-group custom-field custom-field";
                    // line 1029
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1030
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 1032
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">';
    html += '  \t\t\t<option value=\"\">";
                    // line 1033
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>';

    ";
                    // line 1035
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1036
                        echo "    html += '  \t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                        echo "</option>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1038
                    echo "
    html += '  \t\t  </select>';
    html += '  \t\t</div>';
    html += '  \t  </div>';
    ";
                }
                // line 1043
                echo "
    ";
                // line 1044
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 1045
                    echo "    html += '  \t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 1046
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <div>';

    ";
                    // line 1050
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1051
                        echo "    html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1053
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1058
                echo "
    ";
                // line 1059
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 1060
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1061
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div>';

    ";
                    // line 1065
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1066
                        echo "    html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1068
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1073
                echo "
    ";
                // line 1074
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 1075
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1076
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1078
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1082
                echo "
    ";
                // line 1083
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 1084
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1085
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 1087
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "</textarea>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1091
                echo "
    ";
                // line 1092
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 1093
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1094
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 1096
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>';
    html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 1097
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1101
                echo "
    ";
                // line 1102
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 1103
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1104
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1106
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1110
                echo "
    ";
                // line 1111
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 1112
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1113
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1115
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1119
                echo "
    ";
                // line 1120
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 1121
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1122
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1124
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1128
                echo "
    ";
            }
            // line 1130
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1131
        echo "
    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\">";
        // line 1133
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
    html += '  </div>';

    html += '</div>';

    \$('#tab-general .tab-content').append(html);

    \$('select[name=\\'customer_group_id\\']').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 1145
        echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
        echo " ' + address_row + '</a></li>');

    \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

    \$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1150
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickTime: false
    });

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 1155
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
    });

    \$('.time').datetimepicker({
\t\tlanguage: '";
        // line 1161
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickDate: false
    });

    \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
    });

    address_row++;
  }
  //--></script> 
<script type=\"text/javascript\"><!--
function country(element, index, zone_id) {
\tif (element.value == 44) {
\t\t\$('#world-city' + index).hide();
\t\t\$('#china-city' + index).show();
\t\t\$('#china-district' + index).show();
\t} else {
\t\t\$('#world-city' + index).show();
\t\t\$('#china-city' + index).hide();
\t\t\$('#china-district' + index).hide();
\t}
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1194
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + element.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'address[' + index + '][country_id]\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.fa-spin').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 1209
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == zone_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\">";
        // line 1222
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
\t\t\t
\t\t\t\$('select[name=\\'address[' + index + '][zone_id]\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function zone(element, index, city_id) {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/zone/zone&user_token=";
        // line 1237
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&zone_id=' + element.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'address[' + index + '][zone_id]\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.fa-spin').remove();
\t\t},
\t\tsuccess: function(json) {

\t\t\thtml = '<option value=\"\">";
        // line 1247
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['city'] && json['city'] != '') {
\t\t\t\tfor (i = 0; i < json['city'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['city'][i]['city_id'] + '\"';

\t\t\t\t\tif (json['city'][i]['city_id'] == city_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['city'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\">";
        // line 1260
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'address[' + index + '][city_id]\\']').html(html);
\t\t\t\$('select[name=\\'address[' + index + '][city_id]\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function city(element, index, district_id) {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/city/city&user_token=";
        // line 1274
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&city_id=' + element.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'address[' + index + '][city_id]\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.fa-spin').remove();
\t\t},
\t\tsuccess: function(json) {

\t\t\thtml = '<option value=\"\">";
        // line 1284
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['district'] && json['district'] != '') {
\t\t\t\tfor (i = 0; i < json['district'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['district'][i]['district_id'] + '\"';

\t\t\t\t\tif (json['district'][i]['district_id'] == district_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['district'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\">";
        // line 1297
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'address[' + index + '][district_id]\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

\$('select[name\$=\\'[country_id]\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1317
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 1323
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
      beforeSend: function() {
        \$('#button-history').button('loading');
      },
      complete: function() {
        \$('#button-history').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1343
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-history textarea[name=\\'comment\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1361
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 1367
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
      beforeSend: function() {
        \$('#button-transaction').button('loading');
      },
      complete: function() {
        \$('#button-transaction').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1387
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-transaction input[name=\\'amount\\']').val('');
          \$('#tab-transaction input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1406
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1412
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
      beforeSend: function() {
        \$('#button-reward').button('loading');
      },
      complete: function() {
        \$('#button-reward').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1432
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

          \$('#tab-reward input[name=\\'points\\']').val('');
          \$('#tab-reward input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1450
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=";
        // line 1470
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('.date').datetimepicker({
    language: '";
        // line 1507
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 1512
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 1518
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
    pickDate: false
  });

  // Sort the custom fields
  ";
        // line 1523
        $context["address_row"] = 1;
        // line 1524
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1525
            echo "  \$('#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1526
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1527
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1530
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1531
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1534
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1535
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:first').before(this);
    }
  });
  ";
            // line 1538
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 1539
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1540
        echo "
  \$('#tab-customer .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:first').before(this);
    }
  });

  \$('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:first').before(this);
    }
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
  //--></script> 
</div>
";
        // line 1579
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4015 => 1579,  3974 => 1540,  3968 => 1539,  3966 => 1538,  3960 => 1535,  3956 => 1534,  3950 => 1531,  3946 => 1530,  3940 => 1527,  3936 => 1526,  3931 => 1525,  3926 => 1524,  3924 => 1523,  3916 => 1518,  3907 => 1512,  3899 => 1507,  3859 => 1470,  3834 => 1450,  3811 => 1432,  3786 => 1412,  3775 => 1406,  3751 => 1387,  3726 => 1367,  3715 => 1361,  3692 => 1343,  3667 => 1323,  3656 => 1317,  3633 => 1297,  3617 => 1284,  3604 => 1274,  3587 => 1260,  3571 => 1247,  3558 => 1237,  3540 => 1222,  3524 => 1209,  3506 => 1194,  3470 => 1161,  3461 => 1155,  3453 => 1150,  3445 => 1145,  3430 => 1133,  3426 => 1131,  3420 => 1130,  3416 => 1128,  3403 => 1124,  3396 => 1122,  3389 => 1121,  3387 => 1120,  3384 => 1119,  3371 => 1115,  3364 => 1113,  3357 => 1112,  3355 => 1111,  3352 => 1110,  3339 => 1106,  3332 => 1104,  3325 => 1103,  3323 => 1102,  3320 => 1101,  3311 => 1097,  3303 => 1096,  3298 => 1094,  3291 => 1093,  3289 => 1092,  3286 => 1091,  3273 => 1087,  3266 => 1085,  3259 => 1084,  3257 => 1083,  3254 => 1082,  3241 => 1078,  3234 => 1076,  3227 => 1075,  3225 => 1074,  3222 => 1073,  3215 => 1068,  3200 => 1066,  3196 => 1065,  3189 => 1061,  3182 => 1060,  3180 => 1059,  3177 => 1058,  3170 => 1053,  3157 => 1051,  3153 => 1050,  3146 => 1046,  3141 => 1045,  3139 => 1044,  3136 => 1043,  3129 => 1038,  3118 => 1036,  3114 => 1035,  3109 => 1033,  3103 => 1032,  3096 => 1030,  3090 => 1029,  3087 => 1028,  3084 => 1027,  3081 => 1026,  3077 => 1025,  3070 => 1021,  3066 => 1020,  3060 => 1017,  3054 => 1014,  3050 => 1013,  3043 => 1009,  3039 => 1008,  3032 => 1004,  3028 => 1003,  3021 => 999,  3017 => 998,  3010 => 994,  3006 => 993,  3000 => 989,  2989 => 987,  2985 => 986,  2981 => 985,  2976 => 983,  2969 => 979,  2965 => 978,  2958 => 974,  2954 => 973,  2948 => 970,  2942 => 967,  2938 => 966,  2928 => 959,  2900 => 934,  2873 => 910,  2869 => 908,  2860 => 904,  2852 => 899,  2845 => 897,  2838 => 893,  2833 => 891,  2828 => 889,  2820 => 884,  2810 => 879,  2802 => 874,  2797 => 872,  2790 => 868,  2785 => 866,  2780 => 864,  2772 => 859,  2762 => 854,  2754 => 849,  2749 => 847,  2744 => 845,  2736 => 840,  2732 => 838,  2730 => 837,  2723 => 832,  2718 => 830,  2713 => 829,  2708 => 827,  2703 => 826,  2701 => 825,  2695 => 822,  2689 => 818,  2683 => 817,  2681 => 816,  2675 => 815,  2670 => 813,  2665 => 810,  2659 => 809,  2657 => 808,  2651 => 807,  2646 => 805,  2637 => 801,  2632 => 799,  2623 => 795,  2618 => 793,  2609 => 789,  2604 => 787,  2597 => 782,  2591 => 781,  2589 => 780,  2583 => 779,  2578 => 777,  2571 => 772,  2565 => 771,  2563 => 770,  2557 => 769,  2552 => 767,  2542 => 761,  2538 => 759,  2534 => 757,  2532 => 756,  2525 => 753,  2521 => 751,  2517 => 749,  2515 => 748,  2508 => 745,  2504 => 743,  2500 => 741,  2498 => 740,  2492 => 737,  2483 => 733,  2478 => 731,  2473 => 729,  2469 => 727,  2463 => 726,  2460 => 725,  2455 => 722,  2449 => 721,  2447 => 720,  2434 => 716,  2426 => 713,  2419 => 712,  2416 => 711,  2411 => 708,  2405 => 707,  2403 => 706,  2390 => 702,  2382 => 699,  2375 => 698,  2372 => 697,  2367 => 694,  2361 => 693,  2359 => 692,  2346 => 688,  2338 => 685,  2331 => 684,  2328 => 683,  2323 => 680,  2317 => 679,  2315 => 678,  2307 => 677,  2299 => 676,  2294 => 674,  2287 => 673,  2284 => 672,  2279 => 669,  2273 => 668,  2271 => 667,  2261 => 666,  2254 => 664,  2247 => 663,  2244 => 662,  2239 => 659,  2233 => 658,  2231 => 657,  2221 => 656,  2214 => 654,  2207 => 653,  2204 => 652,  2199 => 649,  2193 => 648,  2191 => 647,  2188 => 646,  2181 => 645,  2176 => 644,  2170 => 643,  2167 => 642,  2162 => 640,  2156 => 639,  2153 => 638,  2150 => 637,  2146 => 636,  2141 => 634,  2134 => 633,  2131 => 632,  2126 => 629,  2120 => 628,  2118 => 627,  2115 => 626,  2108 => 625,  2103 => 624,  2097 => 623,  2094 => 622,  2089 => 620,  2083 => 619,  2080 => 618,  2077 => 617,  2073 => 616,  2068 => 614,  2061 => 613,  2058 => 612,  2053 => 609,  2047 => 608,  2045 => 607,  2042 => 606,  2036 => 605,  2028 => 603,  2020 => 601,  2017 => 600,  2013 => 599,  2009 => 598,  2003 => 597,  1996 => 595,  1989 => 594,  1986 => 593,  1983 => 592,  1979 => 591,  1971 => 588,  1964 => 586,  1955 => 582,  1948 => 580,  1939 => 576,  1934 => 574,  1925 => 570,  1920 => 568,  1915 => 566,  1907 => 560,  1901 => 559,  1899 => 558,  1893 => 554,  1885 => 553,  1877 => 551,  1875 => 550,  1870 => 548,  1867 => 547,  1861 => 546,  1858 => 545,  1853 => 542,  1847 => 541,  1845 => 540,  1828 => 536,  1818 => 533,  1811 => 532,  1808 => 531,  1803 => 528,  1797 => 527,  1795 => 526,  1778 => 522,  1768 => 519,  1761 => 518,  1758 => 517,  1753 => 514,  1747 => 513,  1745 => 512,  1728 => 508,  1718 => 505,  1711 => 504,  1708 => 503,  1703 => 500,  1697 => 499,  1695 => 498,  1687 => 497,  1677 => 496,  1672 => 494,  1665 => 493,  1662 => 492,  1657 => 489,  1651 => 488,  1649 => 487,  1635 => 486,  1626 => 484,  1619 => 483,  1616 => 482,  1611 => 479,  1605 => 478,  1603 => 477,  1589 => 476,  1580 => 474,  1573 => 473,  1570 => 472,  1565 => 469,  1559 => 468,  1557 => 467,  1554 => 466,  1547 => 465,  1542 => 464,  1534 => 463,  1531 => 462,  1526 => 460,  1518 => 459,  1515 => 458,  1512 => 457,  1508 => 456,  1503 => 454,  1496 => 453,  1493 => 452,  1488 => 449,  1482 => 448,  1480 => 447,  1477 => 446,  1470 => 445,  1465 => 444,  1457 => 443,  1454 => 442,  1449 => 440,  1441 => 439,  1438 => 438,  1435 => 437,  1431 => 436,  1426 => 434,  1419 => 433,  1416 => 432,  1411 => 429,  1405 => 428,  1403 => 427,  1400 => 426,  1394 => 425,  1386 => 423,  1378 => 421,  1375 => 420,  1371 => 419,  1367 => 418,  1357 => 417,  1348 => 415,  1341 => 414,  1338 => 413,  1335 => 412,  1331 => 411,  1325 => 407,  1319 => 406,  1317 => 405,  1307 => 404,  1300 => 402,  1288 => 399,  1283 => 396,  1277 => 395,  1275 => 394,  1265 => 393,  1258 => 391,  1252 => 387,  1246 => 385,  1244 => 384,  1234 => 383,  1227 => 381,  1223 => 380,  1219 => 378,  1213 => 376,  1211 => 375,  1204 => 373,  1197 => 371,  1193 => 370,  1189 => 368,  1183 => 366,  1181 => 365,  1170 => 363,  1163 => 361,  1159 => 360,  1154 => 357,  1148 => 355,  1146 => 354,  1135 => 352,  1128 => 350,  1122 => 346,  1116 => 345,  1114 => 344,  1111 => 343,  1105 => 342,  1097 => 340,  1089 => 338,  1086 => 337,  1082 => 336,  1078 => 335,  1068 => 334,  1061 => 332,  1047 => 327,  1040 => 325,  1034 => 321,  1028 => 319,  1026 => 318,  1016 => 317,  1009 => 315,  997 => 312,  992 => 309,  986 => 308,  984 => 307,  974 => 306,  967 => 304,  960 => 302,  955 => 301,  950 => 300,  948 => 299,  941 => 294,  936 => 292,  931 => 291,  926 => 289,  921 => 288,  919 => 287,  913 => 284,  907 => 280,  902 => 278,  897 => 277,  892 => 275,  887 => 274,  885 => 273,  879 => 270,  873 => 266,  868 => 264,  863 => 263,  858 => 261,  853 => 260,  851 => 259,  845 => 256,  840 => 254,  834 => 250,  828 => 249,  826 => 248,  820 => 247,  815 => 245,  810 => 242,  804 => 241,  802 => 240,  796 => 239,  791 => 237,  786 => 235,  782 => 233,  776 => 232,  773 => 231,  768 => 228,  762 => 227,  760 => 226,  747 => 222,  739 => 219,  732 => 218,  729 => 217,  724 => 214,  718 => 213,  716 => 212,  703 => 208,  695 => 205,  688 => 204,  685 => 203,  680 => 200,  674 => 199,  672 => 198,  659 => 194,  651 => 191,  644 => 190,  641 => 189,  636 => 186,  630 => 185,  628 => 184,  620 => 183,  612 => 182,  607 => 180,  600 => 179,  597 => 178,  592 => 175,  586 => 174,  584 => 173,  574 => 172,  567 => 170,  560 => 169,  557 => 168,  552 => 165,  546 => 164,  544 => 163,  534 => 162,  527 => 160,  520 => 159,  517 => 158,  512 => 155,  506 => 154,  504 => 153,  501 => 152,  494 => 151,  489 => 150,  483 => 149,  480 => 148,  475 => 146,  469 => 145,  466 => 144,  463 => 143,  459 => 142,  454 => 140,  447 => 139,  444 => 138,  439 => 135,  433 => 134,  431 => 133,  428 => 132,  421 => 131,  416 => 130,  410 => 129,  407 => 128,  402 => 126,  396 => 125,  393 => 124,  390 => 123,  386 => 122,  381 => 120,  374 => 119,  371 => 118,  366 => 115,  360 => 114,  358 => 113,  355 => 112,  349 => 111,  341 => 109,  333 => 107,  330 => 106,  326 => 105,  322 => 104,  316 => 103,  309 => 101,  302 => 100,  299 => 99,  296 => 98,  292 => 97,  288 => 95,  282 => 94,  280 => 93,  274 => 92,  269 => 90,  264 => 87,  258 => 86,  256 => 85,  250 => 84,  245 => 82,  237 => 79,  232 => 76,  226 => 75,  224 => 74,  218 => 73,  213 => 71,  207 => 67,  201 => 66,  193 => 64,  185 => 62,  182 => 61,  178 => 60,  172 => 57,  167 => 55,  156 => 48,  150 => 47,  148 => 46,  135 => 45,  130 => 44,  128 => 43,  124 => 42,  116 => 36,  111 => 34,  107 => 33,  103 => 32,  98 => 31,  96 => 30,  92 => 29,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-customer" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-customer" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-affiliate" data-toggle="tab">{{ tab_affiliate }}</a></li>*/
/*             {% if customer_id %}*/
/*             <li><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*             <li><a href="#tab-transaction" data-toggle="tab">{{ tab_transaction }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-ip" data-toggle="tab">{{ tab_ip }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="address">*/
/*                     <li class="active"><a href="#tab-customer" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                     <li><a href="#tab-address{{ address_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('#address a:first').tab('show'); $('#address a[href=\'#tab-address{{ address_row }}\']').parent().remove(); $('#tab-address{{ address_row }}').remove();"></i> {{ tab_address }} {{ address_row }}</a></li>*/
/*                     {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li id="address-add"><a onclick="addAddress();"><i class="fa fa-plus-circle"></i> {{ button_address_add }}</a></li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content">*/
/*                     <div class="tab-pane active" id="tab-customer">*/
/*                       <fieldset>*/
/*                         <legend>{{ text_account }}</legend>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                               {% for customer_group in customer_groups %}*/
/*                               {% if customer_group.customer_group_id == customer_group_id %}*/
/*                               <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                               {% else %}*/
/*                               <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                               {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*                             {% if error_firstname %}*/
/*                             <div class="text-danger">{{ error_firstname }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/* 						*/
/*                         <input type="hidden" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/* 							*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                             {% if error_email %}*/
/*                             <div class="text-danger">{{ error_email }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                             {% if error_telephone %}*/
/*                             <div class="text-danger">{{ error_telephone }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% for custom_field in custom_fields %}*/
/*                         {% if custom_field.location == 'account' %}*/
/*                         {% if custom_field.type == 'select' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                               <option value="">{{ text_select }}</option>*/
/*                               {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                               {% else %}*/
/*                               <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                               {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'radio' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               <div class="radio"> {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <label>*/
/*                                   <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% else %}*/
/*                                 <label>*/
/*                                   <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% endif %}</div>*/
/*                               {% endfor %} </div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'checkbox' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                               <div class="checkbox">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                                 <label>*/
/*                                   <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% else %}*/
/*                                 <label>*/
/*                                   <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                   {{ custom_field_value.name }}</label>*/
/*                                 {% endif %}</div>*/
/*                               {% endfor %}</div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'text' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'textarea' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'file' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                             <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}" />*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'date' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group date">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span></div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'time' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group time">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span></div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if custom_field.type == 'datetime' %}*/
/*                         <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                           <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <div class="input-group datetime">*/
/*                               <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                               <span class="input-group-btn">*/
/*                               <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                               </span></div>*/
/*                             {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                             <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_password }}</legend>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" autocomplete="off" />*/
/*                             {% if error_password %}*/
/*                             <div class="text-danger">{{ error_password }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                           <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" autocomplete="off" id="input-confirm" class="form-control" />*/
/*                             {% if error_confirm %}*/
/*                             <div class="text-danger">{{ error_confirm }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_other }}</legend>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-newsletter">{{ entry_newsletter }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="newsletter" id="input-newsletter" class="form-control">*/
/*                               {% if newsletter %}*/
/*                               <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                               <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_enabled }}</option>*/
/*                               <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="status" id="input-status" class="form-control">*/
/*                               {% if status %}*/
/*                               <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                               <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_enabled }}</option>*/
/*                               <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label class="col-sm-2 control-label" for="input-safe">{{ entry_safe }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="safe" id="input-safe" class="form-control">*/
/*                               {% if safe %}*/
/*                               <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                               <option value="0">{{ text_no }}</option>*/
/*                               {% else %}*/
/*                               <option value="1">{{ text_yes }}</option>*/
/*                               <option value="0" selected="selected">{{ text_no }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                     </div>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                     <div class="tab-pane" id="tab-address{{ address_row }}">*/
/*                       <input type="hidden" name="address[{{ address_row }}][address_id]" value="{{ address.address_id }}" />*/
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-firstname{{ address_row }}">{{ entry_firstname }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][firstname]" value="{{ address.firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].firstname %}*/
/*                           <div class="text-danger">{{ error_address[address_row].firstname }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       */
/*                       <input type="hidden" name="address[{{ address_row }}][lastname]" value="{{ address.lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname{{ address_row }}" class="form-control" />*/
/* 					  */
/* 					  <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-shipping-telephone{{ address_row }}">{{ entry_shipping_telephone }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][shipping_telephone]" value="{{ address.shipping_telephone }}" placeholder="{{ entry_shipping_telephone }}" id="input-shipping-telephone{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].shipping_telephone %}*/
/*                           <div class="text-danger">{{ error_address[address_row].shipping_telephone }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                           */
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-company{{ address_row }}">{{ entry_company }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][company]" value="{{ address.company }}" placeholder="{{ entry_company }}" id="input-company{{ address_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       */
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-country{{ address_row }}">{{ entry_country }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][country_id]" id="input-country{{ address_row }}" onchange="country(this, '{{ address_row }}', '{{ address.zone_id }}');" class="form-control">*/
/*                             <option value="">{{ text_select }}</option>*/
/*                             {% for country in countries %}*/
/*                             {% if country.country_id == address.country_id %}*/
/*                             <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           {% if error_address[address_row].country %}*/
/*                           <div class="text-danger">{{ error_address[address_row].country }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/* 					  */
/* 					  <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-zone{{ address_row }}">{{ entry_zone }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][zone_id]" id="input-zone{{ address_row }}" onchange="zone(this, '{{ address_row }}', '{{ address.city_id }}');" class="form-control">*/
/*                           </select>*/
/*                           {% if error_address[address_row].zone %}*/
/*                           <div class="text-danger">{{ error_address[address_row].zone }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/* 					  */
/*                       <div class="form-group required" id="china-city{{ address_row }}">*/
/*                         <label class="col-sm-2 control-label" for="input-city{{ address_row }}">{{ entry_city }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][city_id]" id="input-city{{ address_row }}" onchange="city(this, '{{ address_row }}', '{{ address.district_id }}');" class="form-control">*/
/*                           </select>*/
/*                           {% if error_address[address_row].city %}*/
/*                           <div class="text-danger">{{ error_address[address_row].city }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required" id="china-district{{ address_row }}">*/
/*                         <label class="col-sm-2 control-label" for="input-district{{ address_row }}">{{ entry_district }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][district_id]" id="input-district{{ address_row }}" class="form-control">*/
/*                           </select>*/
/*                           {% if error_address[address_row].district %}*/
/*                           <div class="text-danger">{{ error_address[address_row].district }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required" id="world-city{{ address_row }}">*/
/*                         <label class="col-sm-2 control-label" for="input-city{{ address_row }}">{{ entry_city }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][city]" value="{{ address.city }}" placeholder="{{ entry_city }}" id="input-city{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].city %}*/
/*                           <div class="text-danger">{{ error_address[address_row].city }}</div>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       </div>*/
/* 					  */
/* 					  <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-address-1{{ address_row }}">{{ entry_address_1 }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][address_1]" value="{{ address.address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].address_1 %}*/
/*                           <div class="text-danger">{{ error_address[address_row].address_1 }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       */
/*                       <input type="hidden" name="address[{{ address_row }}][address_2]" value="{{ address.address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2{{ address_row }}" class="form-control" />*/
/*                         */
/*                       <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-postcode{{ address_row }}">{{ entry_postcode }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][postcode]" value="{{ address.postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode{{ address_row }}" class="form-control" />*/
/*                           {% if error_address[address_row].postcode %}*/
/*                           <div class="text-danger">{{ error_address[address_row].postcode }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/* 					  */
/* 					  */
/*                       {% for custom_field in custom_fields %}*/
/*                       {% if custom_field.location == 'address' %}*/
/*                       {% if custom_field.type == 'select' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                             <option value="">{{ text_select }}</option>*/
/*                             {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'radio' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="radio"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                               <label>*/
/*                                 <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% else %}*/
/*                               <label>*/
/*                                 <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% endif %}</div>*/
/*                             {% endfor %} </div>*/
/*                           {% if error_address[address_row].custom_field[custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'checkbox' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                             <div class="checkbox"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address.custom_field[custom_field.custom_field_id] %}*/
/*                               <label>*/
/*                                 <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% else %}*/
/*                               <label>*/
/*                                 <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                                 {{ custom_field_value.name }}</label>*/
/*                               {% endif %}</div>*/
/*                             {% endfor %} </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'text' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'textarea' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'file' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <button type="button" id="button-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                           <input type="hidden" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] }}" />*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'date' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'time' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group time">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if custom_field.type == 'datetime' %}*/
/*                       <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                         <label class="col-sm-2 control-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group datetime">*/
/*                             <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span> </div>*/
/*                           {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                           <div class="text-danger">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                           {% endif %}</div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_default }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <label class="radio">{% if address.address_id == address_id or not addresses %}*/
/*                             <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" checked="checked" />*/
/*                             {% else %}*/
/*                             <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" />*/
/*                             {% endif %}</label>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-affiliate">*/
/*               <fieldset>*/
/*                 <legend>{{ text_affiliate }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-company">{{ entry_company }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-company" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-website">{{ entry_website }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="website" value="{{ website }}" placeholder="{{ entry_website }}" id="input-website" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tracking"><span data-toggle="tooltip" title="{{ help_tracking }}">{{ entry_tracking }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="tracking" value="{{ tracking }}" placeholder="{{ entry_tracking }}" id="input-tracking" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-commission"><span data-toggle="tooltip" title="{{ help_commission }}">{{ entry_commission }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="commission" value="{{ commission }}" placeholder="{{ entry_commission }}" id="input-commission" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 {% for custom_field in custom_fields %}*/
/*                 {% if custom_field.location == 'affiliate' %}*/
/*                 {% if custom_field.type == 'select' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                       {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                       <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'radio' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                       <div class="radio">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                         <label>*/
/*                           <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% else %}*/
/*                         <label>*/
/*                           <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% endif %}</div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'checkbox' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                       <div class="checkbox">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                         <label>*/
/*                           <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% else %}*/
/*                         <label>*/
/*                           <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*                           {{ custom_field_value.name }}</label>*/
/*                         {% endif %}</div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'text' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'textarea' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'file' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}" />*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'date' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'time' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if custom_field.type == 'datetime' %}*/
/*                 <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*                       <span class="input-group-btn">*/
/*                       <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                     <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_payment }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="tax" value="{{ tax }}" placeholder="{{ entry_tax }}" id="input-tax" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_payment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="radio">*/
/*                       <label>{% if payment == 'cheque' %}*/
/*                         <input type="radio" name="payment" value="cheque" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="radio" name="payment" value="cheque" />*/
/*                         {% endif %}*/
/*                         {{ text_cheque }}</label>*/
/*                     </div>*/
/*                     <div class="radio">*/
/*                       <label> {% if payment == 'paypal' %}*/
/*                         <input type="radio" name="payment" value="paypal" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="radio" name="payment" value="paypal" />*/
/*                         {% endif %}*/
/*                         {{ text_paypal }}</label>*/
/*                     </div>*/
/*                     <div class="radio">*/
/*                       <label> {% if payment == 'bank' %}*/
/*                         <input type="radio" name="payment" value="bank" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="radio" name="payment" value="bank" />*/
/*                         {% endif %}*/
/*                         {{ text_bank }}</label>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="payment-cheque" class="payment">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-cheque">{{ entry_cheque }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="cheque" value="{{ cheque }}" placeholder="{{ entry_cheque }}" id="input-cheque" class="form-control" />*/
/*                       {% if error_cheque %}*/
/*                       <div class="text-danger">{{ error_cheque }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="payment-paypal" class="payment">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-paypal">{{ entry_paypal }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="paypal" value="{{ paypal }}" placeholder="{{ entry_paypal }}" id="input-paypal" class="form-control" />*/
/*                       {% if error_paypal %}*/
/*                       <div class="text-danger">{{ error_paypal }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div id="payment-bank" class="payment">*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-name">{{ entry_bank_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_name" value="{{ bank_name }}" placeholder="{{ entry_bank_name }}" id="input-bank-name" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-branch-number">{{ entry_bank_branch_number }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_branch_number" value="{{ bank_branch_number }}" placeholder="{{ entry_bank_branch_number }}" id="input-bank-branch-number" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-swift-code">{{ entry_bank_swift_code }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_swift_code" value="{{ bank_swift_code }}" placeholder="{{ entry_bank_swift_code }}" id="input-bank-swift-code" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-account-name">{{ entry_bank_account_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_account_name" value="{{ bank_account_name }}" placeholder="{{ entry_bank_account_name }}" id="input-bank-account-name" class="form-control" />*/
/*                       {% if error_bank_account_name %}*/
/*                       <div class="text-danger">{{ error_bank_account_name }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-bank-account-number">{{ entry_bank_account_number }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="bank_account_number" value="{{ bank_account_number }}" placeholder="{{ entry_bank_account_number }}" id="input-bank-account-number" class="form-control" />*/
/*                       {% if error_bank_account_number %}*/
/*                       <div class="text-danger">{{ error_bank_account_number }}</div>*/
/*                       {% endif %}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-affiliate">{{ entry_status }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="affiliate" id="input-affiliate" class="form-control">*/
/*                       {% if affiliate %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                       {% endif %}*/
/*                      </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>           */
/*             </div>         */
/*             {% if customer_id %}*/
/*             <div class="tab-pane" id="tab-history">*/
/*               <fieldset>*/
/*                 <legend>{{ text_history }}</legend>*/
/*                 <div id="history"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_history_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-comment">{{ entry_comment }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="comment" rows="8" placeholder="{{ entry_comment }}" id="input-comment" class="form-control"></textarea>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-transaction">*/
/*               <fieldset>*/
/*                 <legend>{{ text_transaction }}</legend>*/
/*                 <div id="transaction"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_transaction_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-transaction-description">{{ entry_description }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-transaction-description" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-amount">{{ entry_amount }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="amount" value="" placeholder="{{ entry_amount }}" id="input-amount" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button type="button" id="button-transaction" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_transaction_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <fieldset>*/
/*                 <legend>{{ text_reward }}</legend>*/
/*                 <div id="reward"></div>*/
/*               </fieldset>*/
/*               <br />*/
/*               <fieldset>*/
/*                 <legend>{{ text_reward_add }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-reward-description">{{ entry_description }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-reward-description" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="points" value="" placeholder="{{ entry_points }}" id="input-points" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <div class="text-right">*/
/*                 <button type="button" id="button-reward" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_reward_add }}</button>*/
/*               </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="tab-pane" id="tab-ip">*/
/*               <fieldset>*/
/*                 <legend>{{ text_ip }}</legend>*/
/*                 <div id="ip"></div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <script type="text/javascript"><!--*/
/*   $('input[name="affiliate"]').on('change', function() {*/
/*     if ($(this).val() == '1') { */
/*       $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', false);*/
/*     } else {*/
/*       $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', true);*/
/*     }*/
/*   }); */
/* */
/*   $('input[name=\'affiliate\']:checked').trigger('change');*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('select[name=\'customer_group_id\']').on('change', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/customfield&user_token={{ user_token }}&customer_group_id=' + this.value,*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         $('.custom-field').hide();*/
/*         $('.custom-field').removeClass('required');*/
/* */
/*         for (i = 0; i < json.length; i++) {*/
/*           custom_field = json[i];*/
/* */
/*           $('.custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*           if (custom_field['required']) {*/
/*             $('.custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('select[name=\'customer_group_id\']').trigger('change');*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   var address_row = {{ address_row }};*/
/* */
/*   function addAddress() {*/
/*     html  = '<div class="tab-pane" id="tab-address' + address_row + '">';*/
/*     html += '  <input type="hidden" name="address[' + address_row + '][address_id]" value="" />';*/
/* */
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-firstname' + address_row + '">{{ entry_firstname }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][firstname]" value="" placeholder="{{ entry_firstname }}" id="input-firstname' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '    <input type="hidden" name="address[' + address_row + '][lastname]" value="" placeholder="{{ entry_lastname }}" id="input-lastname' + address_row + '" class="form-control" />';*/
/* 	*/
/* 	html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-shipping-telephone' + address_row + '">{{ entry_shipping_telephone }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][shipping_telephone]" value="" placeholder="{{ entry_shipping_telephone }}" id="input-shipping-telephone' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-company' + address_row + '">{{ entry_company }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][company]" value="" placeholder="{{ entry_company }}" id="input-company' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* 	*/
/*     html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-country' + address_row + '">{{ entry_country }}</label>';*/
/*     html += '    <div class="col-sm-10"><select name="address[' + address_row + '][country_id]" id="input-country' + address_row + '" onchange="country(this, \'' + address_row + '\', \'0\');" class="form-control">';*/
/*       html += '         <option value="">{{ text_select }}</option>';*/
/*       {% for country in countries %}*/
/*       html += '         <option value="{{ country.country_id }}">{{ country.name|escape('js') }}</option>';*/
/*       {% endfor %}*/
/*       html += '      </select></div>';*/
/*     html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-zone' + address_row + '">{{ entry_zone }}</label>';*/
/* 	html += '    <div class="col-sm-10"><select name="address[' + address_row + '][zone_id]" id="input-zone' + address_row + '"  onchange="zone(this, \'' + address_row + '\', \'0\');" class="form-control"><option value="">{{ text_none }}</option></select></div>';*/
/* 	html += '  </div>';*/
/* 	*/
/* 	html += '  <div class="form-group required" id="china-city' + address_row + '">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-city' + address_row + '">{{ entry_city }}</label>';*/
/* 	html += '    <div class="col-sm-10"><select name="address[' + address_row + '][city_id]" id="input-city' + address_row + '"  onchange="city(this, \'' + address_row + '\', \'0\');" class="form-control"><option value="">{{ text_none }}</option></select></div>';*/
/* 	html += '  </div>';*/
/* 	*/
/* 	html += '  <div class="form-group required" id="china-district' + address_row + '">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-district' + address_row + '">{{ entry_district }}</label>';*/
/* 	html += '    <div class="col-sm-10"><select name="address[' + address_row + '][district_id]" id="input-district' + address_row + '" class="form-control"><option value="">{{ text_none }}</option></select></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group required" id="world-city' + address_row + '">';*/
/* 	html += '    <label class="col-sm-2 control-label" for="input-city' + address_row + '">{{ entry_city }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][city]" value="" placeholder="{{ entry_city }}" id="input-city' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* 	*/
/* 	html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-address-1' + address_row + '">{{ entry_address_1 }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_1]" value="" placeholder="{{ entry_address_1 }}" id="input-address-1' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '    <input type="hidden" name="address[' + address_row + '][address_2]" value="" placeholder="{{ entry_address_2 }}" id="input-address-2' + address_row + '" class="form-control" />';*/
/* 	*/
/* 	html += '  <div class="form-group required">';*/
/*     html += '    <label class="col-sm-2 control-label" for="input-postcode' + address_row + '">{{ entry_postcode }}</label>';*/
/*     html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][postcode]" value="" placeholder="{{ entry_postcode }}" id="input-postcode' + address_row + '" class="form-control" /></div>';*/
/*     html += '  </div>';*/
/* */
/*     // Custom Fields*/
/*     {% for custom_field in custom_fields %}*/
/*     {% if custom_field.location == 'address' %}*/
/*     {% if custom_field.type == 'select' %}*/
/* */
/*     html += '  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '  		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '  		<div class="col-sm-10">';*/
/*     html += '  		  <select name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">';*/
/*     html += '  			<option value="">{{ text_select }}</option>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '  			<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field.name|e('js') }}</option>';*/
/*     {% endfor %}*/
/* */
/*     html += '  		  </select>';*/
/*     html += '  		</div>';*/
/*     html += '  	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'radio' %}*/
/*     html += '  	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}">';*/
/*     html += '  		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '  		<div class="col-sm-10">';*/
/*     html += '  		  <div>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '  			<div class="radio"><label><input type="radio" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*     {% endfor %}*/
/* */
/*     html += '		  </div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'checkbox' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div>';*/
/* */
/*     {% for custom_field_value in custom_field.custom_field_value %}*/
/*     html += '			<div class="checkbox"><label><input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*     {% endfor %}*/
/* */
/*     html += '		  </div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'text' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" />';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'textarea' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <textarea name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value|e('js') }}</textarea>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'file' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label">{{ custom_field.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <button type="button" id="button-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>';*/
/*     html += '		  <input type="hidden" name="address[' + address_row + '][{{ custom_field.custom_field_id }}]" value="" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" />';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'date' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group date"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }} data-date-format="YYYY-MM-DD" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'time' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group time"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% if custom_field.type == 'datetime' %}*/
/*     html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/*     html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field_value.name|e('js') }}</label>';*/
/*     html += '		<div class="col-sm-10">';*/
/*     html += '		  <div class="input-group datetime"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';*/
/*     html += '		</div>';*/
/*     html += '	  </div>';*/
/*     {% endif %}*/
/* */
/*     {% endif %}*/
/*     {% endfor %}*/
/* */
/*     html += '  <div class="form-group">';*/
/*     html += '    <label class="col-sm-2 control-label">{{ entry_default }}</label>';*/
/*     html += '    <div class="col-sm-10"><label class="radio"><input type="radio" name="address[' + address_row + '][default]" value="1" /></label></div>';*/
/*     html += '  </div>';*/
/* */
/*     html += '</div>';*/
/* */
/*     $('#tab-general .tab-content').append(html);*/
/* */
/*     $('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/*     $('select[name=\'address[' + address_row + '][country_id]\']').trigger('change');*/
/* */
/*     $('#address-add').before('<li><a href="#tab-address' + address_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'#address a:first\').tab(\'show\'); $(\'a[href=\\\'#tab-address' + address_row + '\\\']\').parent().remove(); $(\'#tab-address' + address_row + '\').remove();"></i> {{ tab_address }} ' + address_row + '</a></li>');*/
/* */
/*     $('#address a[href=\'#tab-address' + address_row + '\']').tab('show');*/
/* */
/*     $('.date').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickTime: false*/
/*     });*/
/* */
/* 	$('.datetime').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickDate: true,*/
/* 		pickTime: true*/
/*     });*/
/* */
/*     $('.time').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickDate: false*/
/*     });*/
/* */
/*     $('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {*/
/* 		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 		}*/
/* 		*/
/* 		if ($(this).attr('data-sort') > $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:last').after(this);*/
/* 		}*/
/* 		*/
/* 		if ($(this).attr('data-sort') < -$('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:first').before(this);*/
/* 		}*/
/*     });*/
/* */
/*     address_row++;*/
/*   }*/
/*   //--></script> */
/* <script type="text/javascript"><!--*/
/* function country(element, index, zone_id) {*/
/* 	if (element.value == 44) {*/
/* 		$('#world-city' + index).hide();*/
/* 		$('#china-city' + index).show();*/
/* 		$('#china-district' + index).show();*/
/* 	} else {*/
/* 		$('#world-city' + index).show();*/
/* 		$('#china-city' + index).hide();*/
/* 		$('#china-district' + index).hide();*/
/* 	}*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + element.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'address[' + index + '][country_id]\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('.fa-spin').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('input[name=\'address[' + index + '][postcode]\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('input[name=\'address[' + index + '][postcode]\']').parent().parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == zone_id) {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'address[' + index + '][zone_id]\']').html(html);*/
/* 			*/
/* 			$('select[name=\'address[' + index + '][zone_id]\']').trigger('change');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function zone(element, index, city_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/zone/zone&user_token={{ user_token }}&zone_id=' + element.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'address[' + index + '][zone_id]\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('.fa-spin').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['city'] && json['city'] != '') {*/
/* 				for (i = 0; i < json['city'].length; i++) {*/
/* 					html += '<option value="' + json['city'][i]['city_id'] + '"';*/
/* */
/* 					if (json['city'][i]['city_id'] == city_id) {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['city'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'address[' + index + '][city_id]\']').html(html);*/
/* 			$('select[name=\'address[' + index + '][city_id]\']').trigger('change');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function city(element, index, district_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/city/city&user_token={{ user_token }}&city_id=' + element.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'address[' + index + '][city_id]\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('.fa-spin').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['district'] && json['district'] != '') {*/
/* 				for (i = 0; i < json['district'].length; i++) {*/
/* 					html += '<option value="' + json['district'][i]['district_id'] + '"';*/
/* */
/* 					if (json['district'][i]['district_id'] == district_id) {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['district'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'address[' + index + '][district_id]\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $('select[name$=\'[country_id]\']').trigger('change');*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('#history').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#history').load(this.href);*/
/*   });*/
/* */
/*   $('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-history').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addhistory&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'comment=' + encodeURIComponent($('#tab-history textarea[name=\'comment\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-history').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-history').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-history').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-history').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-history textarea[name=\'comment\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('#transaction').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#transaction').load(this.href);*/
/*   });*/
/* */
/*   $('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-transaction').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addtransaction&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'description=' + encodeURIComponent($('#tab-transaction input[name=\'description\']').val()) + '&amount=' + encodeURIComponent($('#tab-transaction input[name=\'amount\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-transaction').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-transaction').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-transaction').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-transaction').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-transaction input[name=\'amount\']').val('');*/
/*           $('#tab-transaction input[name=\'description\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('#reward').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#reward').load(this.href);*/
/*   });*/
/* */
/*   $('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#button-reward').on('click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/addreward&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: 'description=' + encodeURIComponent($('#tab-reward input[name=\'description\']').val()) + '&points=' + encodeURIComponent($('#tab-reward input[name=\'points\']').val()),*/
/*       beforeSend: function() {*/
/*         $('#button-reward').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-reward').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*            $('#tab-reward').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#tab-reward').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*           $('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*           $('#tab-reward input[name=\'points\']').val('');*/
/*           $('#tab-reward input[name=\'description\']').val('');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('#ip').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#ip').load(this.href);*/
/*   });*/
/* */
/*   $('#ip').load('index.php?route=customer/customer/ip&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/*   $('#content').delegate('button[id^=\'button-custom-field\'], button[id^=\'button-address\']', 'click', function() {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*         clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function() {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function() {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $(node).parent().find('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input[type=\'hidden\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/*             }*/
/* */
/*             if (json['code']) {*/
/*               $(node).parent().find('input[type=\'hidden\']').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/* */
/*   $('.date').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: '{{ datepicker }}',*/
/*     pickDate: false*/
/*   });*/
/* */
/*   // Sort the custom fields*/
/*   {% set address_row = 1 %}*/
/*   {% for address in addresses %}*/
/*   $('#tab-address{{ address_row }} .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#tab-address{{ address_row }} .form-group').length) {*/
/*       $('#tab-address{{ address_row }} .form-group:first').before(this);*/
/*     }*/
/*   });*/
/*   {% set address_row = address_row + 1 %}*/
/*   {% endfor %}*/
/* */
/*   $('#tab-customer .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#tab-customer .form-group').length) {*/
/*       $('#tab-customer .form-group:first').before(this);*/
/*     }*/
/*   });*/
/* */
/*   $('#tab-affiliate .form-group[data-sort]').detach().each(function() {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-affiliate .form-group').length) {*/
/*       $('#tab-affiliate .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#tab-affiliate .form-group').length) {*/
/*       $('#tab-affiliate .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#tab-affiliate .form-group').length) {*/
/*       $('#tab-affiliate .form-group:first').before(this);*/
/*     }*/
/*   });*/
/*   //--></script> */
/*   <script type="text/javascript"><!--*/
/*   $('input[name=\'payment\']').on('change', function() {*/
/*     $('.payment').hide();*/
/* */
/*     $('#payment-' + this.value).show();*/
/*   });*/
/* */
/*   $('input[name=\'payment\']:checked').trigger('change');*/
/*   //--></script> */
/* </div>*/
/* {{ footer }} */
/* */
