<?php

/* TMallVendorBundle:Product:recherche.html.twig */
class __TwigTemplate_0b8842b79a201fadd21ea711688ceafdeefd2c64247f489e4d46e1f944217578 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("produit_recherche");
        echo "\" method=\"post\">
\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "\t\t\t\t\t              

<input type=\"submit\" class=\"btn btn-default btn-gradient\" value=\" Search \">
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Product:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <form action="{{path('produit_recherche')}}" method="post">*/
/* 	{{form_widget(form.recherche)}}					              */
/* */
/* <input type="submit" class="btn btn-default btn-gradient" value=" Search ">*/
/* {{form_widget(form)}}*/
/* </form>*/
