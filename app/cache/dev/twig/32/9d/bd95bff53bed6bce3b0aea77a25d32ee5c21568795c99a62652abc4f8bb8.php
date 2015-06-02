<?php

/* ParadizApiBundle:Security:login.html.twig */
class __TwigTemplate_329dbd95bff53bed6bce3b0aea77a25d32ee5c21568795c99a62652abc4f8bb8 extends Twig_Template
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
        echo "<div class=\"form\">
    <form id=\"login\" class=\"vertical\" action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("paradiz_oauth_server_auth_login_check");
        echo "\" method=\"post\">
        <div class=\"form_title\">
            OAuth Authorization
        </div>
        ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "            <div class='form_error'></div>
        ";
        }
        // line 9
        echo "        <div class=\"form_item\">
            <div class=\"form_label\"><label for=\"username\">Username</label>:</div>
            <div class=\"form_widget\"><input type=\"text\" id=\"username\" name=\"_username\" /></div>
        </div>
        <div class=\"form_item\">
            <div class=\"form_label\"><label for=\"password\">Password</label>:</div>
            <div class=\"form_widget\"><input type=\"password\" id=\"password\" name=\"_password\" /></div>
        </div>
        <div class=\"form_button\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Log In\" />
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "ParadizApiBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
