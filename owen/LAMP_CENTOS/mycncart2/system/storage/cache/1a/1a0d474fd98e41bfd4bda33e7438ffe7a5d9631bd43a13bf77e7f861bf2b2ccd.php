<?php

/* common/footer.twig */
class __TwigTemplate_7de0716cc59e965fd82289e7597b458ed1703a71485f4d9debf56a75ca15009a extends Twig_Template
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
        echo "<footer>
  <div class=\"container\"><a href=\"http://www.mycncart.com\" target=\"_blank\">";
        // line 2
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://www.mycncart.com/index.php?route=blog/all\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"http://www.mycncart.cn\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br />
    </div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container"><a href="http://www.mycncart.com" target="_blank">{{ text_project }}</a>|<a href="http://www.mycncart.com/index.php?route=blog/all" target="_blank">{{ text_documentation }}</a>|<a href="http://www.mycncart.cn" target="_blank">{{ text_support }}</a><br />*/
/*     </div>*/
/* </footer>*/
/* </body></html>*/
