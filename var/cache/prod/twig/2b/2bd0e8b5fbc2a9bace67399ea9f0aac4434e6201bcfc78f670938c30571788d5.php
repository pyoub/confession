<?php

/* ::topnav.html.twig */
class __TwigTemplate_c57f8cbf59a9dbfcfd0f122712ec9e4c4b9938086fe3db9439eb35bdc17466e5 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">Now you can confession</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\" style=\"margin-right: 20px;\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "                    <p class=\"navbar-text\">
                        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                    </p>
                    <li>
                        <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        } else {
            // line 17
            echo "                    <li>
                        <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        // line 21
        echo "            </ul>
        </div><!--/.nav-collapse -->
</nav>";
    }

    public function getTemplateName()
    {
        return "::topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  52 => 18,  49 => 17,  42 => 13,  38 => 12,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::topnav.html.twig", "C:\\Users\\Ayoub\\Desktop\\sym_proj\\test\\app/Resources\\views/topnav.html.twig");
    }
}
