<?php

/* TMallClientBundle::en-mod-registration.html.twig */
class __TwigTemplate_3458b1e96b103d94e8490ebd55b0b351badd27565774638fedab91eee5da79fe extends Twig_Template
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
        echo "<h1>  Adding Your Store  <h1>
        
        
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle::en-mod-registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <h1>  Adding Your Store  <h1>*/
/*         */
/*         */
/* {{ form_widget(form) }}*/
/* */
