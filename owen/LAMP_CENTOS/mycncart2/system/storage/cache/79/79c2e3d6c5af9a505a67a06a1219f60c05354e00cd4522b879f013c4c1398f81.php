<?php

/* default/template/extension/module/qq_login.twig */
class __TwigTemplate_980f9b1ac50ccce27e173804072c11bb741a14108ef5ad6d52c1f7c03457b2e0 extends Twig_Template
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
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 

";
        } elseif (        // line 3
(isset($context["qq_login_authorized"]) ? $context["qq_login_authorized"] : null)) {
            echo " 

";
        } elseif (        // line 5
(isset($context["is_weixin"]) ? $context["is_weixin"] : null)) {
            echo " 

";
        } else {
            // line 7
            echo "   
<div class=\"list-group\">
\t<a href=\"";
            // line 9
            echo (isset($context["qq_login_url"]) ? $context["qq_login_url"] : null);
            echo " \" class=\"list-group-item\"><img src=\"catalog/view/theme/default/image/qq_login.png\" title=\"";
            echo (isset($context["text_qq_login"]) ? $context["text_qq_login"] : null);
            echo "\" alt=\"";
            echo (isset($context["text_qq_login"]) ? $context["text_qq_login"] : null);
            echo "\" border=\"0\" /></a>
      
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/qq_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  35 => 7,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {% if logged %} */
/* */
/* {% elseif qq_login_authorized %} */
/* */
/* {% elseif is_weixin %} */
/* */
/* {% else %}   */
/* <div class="list-group">*/
/* 	<a href="{{ qq_login_url }} " class="list-group-item"><img src="catalog/view/theme/default/image/qq_login.png" title="{{ text_qq_login }}" alt="{{ text_qq_login }}" border="0" /></a>*/
/*       */
/* </div>*/
/* {% endif %}*/
