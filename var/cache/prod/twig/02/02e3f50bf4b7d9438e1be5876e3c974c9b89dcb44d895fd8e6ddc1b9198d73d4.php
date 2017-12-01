<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_22a1308bdcb2f070d0c209850a9e23f9db7b18c57f44dd882a873319271bc37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"cadre\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\".col-md-4\">
                <h3>Sign Up</h3>
                <button type=\"button\" onclick=\"window.location.href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "'\" class=\"btn btn-lg btn-fb btn-block\"><i class=\"fa fa-facebook left\"></i> Sign Up with Facebook</button>
                <hr>
                ";
        // line 11
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 11)->display($context);
        // line 12
        echo "            </div>
        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  43 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "C:\\Users\\Ayoub\\Desktop\\sym_proj\\test\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
