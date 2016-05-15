<?php

/* TMallClientBundle:Default:stores.html.twig */
class __TwigTemplate_ad0024663ee8f2f48f3b2a5332764f6fc7c96fcfdfcc2aee2ff294a7b9725924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TMallClientBundle::layout.html.twig", "TMallClientBundle:Default:stores.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallClientBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"text-left no-left-padding col-md-9 min-height-300\">
\t\t
\t\t<br/>

\tCreate easily your online store, add your products and start selling online.\t<br/><br/>
\t<a class=\"btn btn-gradient btn-default\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("t_mall_client_listBoutique");
        echo "\">
\t\tCreate your store now\t</a>
\t<br/>
\t
\t<div class=\"clear\"></div>
\t<br/><br/>
\t\t

\t<h3>Find stores near you</h3>
\t<hr/>
\t<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("t_mall_client_stores");
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"search_stores\" value=\"1\"/>
\t<input type=\"hidden\" name=\"mod\" value=\"stores\"/>
\t\t<input type=\"hidden\" name=\"lang\" value=\"en\"/>
\t\t
                
                ";
        // line 26
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TMallClientBundle:Default:rechercheBoutique"), array());
        // line 27
        echo "           <div class=\"clear\"></div>
\t<br/><br/>
        
\t\t\t
\t\t\t
     <div class=\"list-group add-border rounded-borders\">          
             <div href=\"#\" class=\"top-bar rounded-borders\">
\t<h4>Store List</h4>
\t</div>       
    
    
      
        
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutiques"]) ? $context["boutiques"] : $this->getContext($context, "boutiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 41
            echo " 
    <a href=\"#\" class=\"list-group-item\">
     
        <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["boutique"], "getWebPath", array())), "html", null, true);
            echo "\" alt=\"\" class=\"spaced img-responsive\" /> &nbsp name: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
            echo " &nbsp location:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "cordonne", array()), "html", null, true);
            echo "    </a>
   
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </div>
                
              
\t
\t\t
\t\t
\t\t
\t\t</div> 
";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:stores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 49,  87 => 44,  82 => 41,  78 => 40,  63 => 27,  61 => 26,  52 => 20,  39 => 10,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {%extends  "TMallClientBundle::layout.html.twig"%}*/
/* {% block content %}*/
/* */
/* <div class="text-left no-left-padding col-md-9 min-height-300">*/
/* 		*/
/* 		<br/>*/
/* */
/* 	Create easily your online store, add your products and start selling online.	<br/><br/>*/
/* 	<a class="btn btn-gradient btn-default" href="{{path('t_mall_client_listBoutique')}}">*/
/* 		Create your store now	</a>*/
/* 	<br/>*/
/* 	*/
/* 	<div class="clear"></div>*/
/* 	<br/><br/>*/
/* 		*/
/* */
/* 	<h3>Find stores near you</h3>*/
/* 	<hr/>*/
/* 	<form action="{{path('t_mall_client_stores')}}" method="post">*/
/* 	<input type="hidden" name="search_stores" value="1"/>*/
/* 	<input type="hidden" name="mod" value="stores"/>*/
/* 		<input type="hidden" name="lang" value="en"/>*/
/* 		*/
/*                 */
/*                 {% render(controller("TMallClientBundle:Default:rechercheBoutique")) %}*/
/*            <div class="clear"></div>*/
/* 	<br/><br/>*/
/*         */
/* 			*/
/* 			*/
/*      <div class="list-group add-border rounded-borders">          */
/*              <div href="#" class="top-bar rounded-borders">*/
/* 	<h4>Store List</h4>*/
/* 	</div>       */
/*     */
/*     */
/*       */
/*         */
/*     {% for boutique in boutiques %}*/
/*  */
/*     <a href="#" class="list-group-item">*/
/*      */
/*         <img src="{{ asset(boutique.getWebPath) }}" alt="" class="spaced img-responsive" /> &nbsp name: {{boutique.nom}} &nbsp location:{{boutique.cordonne}}    </a>*/
/*    */
/*     */
/* */
/*     {% endfor %}*/
/*                 </div>*/
/*                 */
/*               */
/* 	*/
/* 		*/
/* 		*/
/* 		*/
/* 		</div> */
/* {% endblock %}*/
