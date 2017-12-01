<?php

/* @HWIOAuth/layout.html.twig */
class __TwigTemplate_aa0cf286bb68417f68d400d7fd24367948739371a7ed3ebde6f4f3d5f52338d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@HWIOAuth/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "            ";
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
    }

    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        // line 5
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@HWIOAuth/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HWIOAuth/layout.html.twig", "C:\\Users\\Ayoub\\Desktop\\sym_proj\\test\\app\\Resources\\HWIOAuthBundle\\views\\layout.html.twig");
    }
}
