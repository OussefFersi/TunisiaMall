<?php

/* TMallClientBundle:Default:logo.html.twig */
class __TwigTemplate_fe20f77f8dacd67f2b451c35c70520360fbf8ec73ee2610bdade24d6ff06fed1 extends Twig_Template
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
        echo "<li>
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("t_mall_client_cart");
        echo "\"><img width=\"18\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/cart-m.png"), "html", null, true);
        echo "\"/>
            <span style=\"position:relative;top:-10px;height:15px;left:-10px;background:black\"
                  class=\"badge badge-notify\">
                ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
        echo "
            </span>
        Cart
    </a> 
</li>
";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <li>*/
/*     <a href="{{path('t_mall_client_cart')}}"><img width="18" src="{{asset('Client/images/cart-m.png')}}"/>*/
/*             <span style="position:relative;top:-10px;height:15px;left:-10px;background:black"*/
/*                   class="badge badge-notify">*/
/*                 {{ articles }}*/
/*             </span>*/
/*         Cart*/
/*     </a> */
/* </li>*/
/* */
