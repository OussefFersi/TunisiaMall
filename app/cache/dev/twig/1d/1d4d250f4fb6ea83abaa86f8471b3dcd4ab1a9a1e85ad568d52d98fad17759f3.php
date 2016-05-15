<?php

/* TmallAdminBundle:Default:stores_reviews.html.twig */
class __TwigTemplate_1e43d5c6f6d96dacbdad0b43a2132dedc063932ada790fed2634aada588c6a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallClientBundle::admin_layout.html.twig", "TmallAdminBundle:Default:stores_reviews.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallClientBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    
    
    
";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Default:stores_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "TMallClientBundle::admin_layout.html.twig" %}*/
/* {% block  content %}*/
/*     */
/*     */
/*     */
/* {% endblock %}*/
