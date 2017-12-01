<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_558861022c5342cc8efa81f7c1ffa9f81d8372c2af84802b45ea6fb15b0a30d8 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "<div class=\"alert alert-danger\" role=\"alert\">
    ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <div class=\"container\">
    ";
        // line 10
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 11
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "
    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"form-control form-control-lg\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
    <br/>
    <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\"  class=\"form-control form-control-lg\" id=\"password\" name=\"_password\" required=\"required\" />
    <br/>
    <input type=\"checkbox\" class=\"form-check-input form-control-lg\"id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <br/>
    <input type=\"submit\" id=\"_submit\" class=\"btn btn-success btn-lg btn-block\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> <br />
        <!--<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "\" class=\"loginBtn loginBtn--facebook btn-lg\"><span class=\"centretxt\">Login with Facebook</span></a>-->
    <button type=\"button\" onclick=\"window.location.href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "'\" class=\"btn btn-lg btn-fb btn-block\"><i class=\"fa fa-facebook left\"></i> Facebook</button>
    <script>
        \$(document).ready(function(){
            \$(\".btn\").click(function(){
                \$(this).button('loading');
            });
        });
    </script>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  76 => 24,  72 => 23,  67 => 21,  60 => 17,  55 => 15,  51 => 14,  48 => 13,  42 => 11,  40 => 10,  35 => 8,  32 => 7,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "C:\\Users\\Ayoub\\Desktop\\sym_proj\\test\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
