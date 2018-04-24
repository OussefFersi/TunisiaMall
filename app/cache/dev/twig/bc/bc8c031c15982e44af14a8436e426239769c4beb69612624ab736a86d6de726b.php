<?php

/* TMallClientBundle:Default:detailBoutique.html.twig */
class __TwigTemplate_e7a96a63cfe74263092806d2dc436b7739173af899468a3ab1ff3ee1189dd50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallClientBundle::layout.html.twig", "TMallClientBundle:Default:detailBoutique.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    
    
    
   
   
   <div class=\"text-left no-left-padding col-md-9 min-height-300\">  
       
       
\t\t<h3>List Des Boutique</h3>
<hr class=\"hr-margin\"/>

<div class=\"separator clear\"></div>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 17
            echo " 
    <div class=\"col-md-4 no-left-right\">
<div class=\"product featured-product\">
\t\t\t\t <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("t_mall_client_home", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t<div class=\"image-wrap\">
\t<div class=\"product-image\">
\t\t\t\t\t
\t\t\t\t\t  <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["boutique"], "getWebPath", array())), "html", null, true);
            echo "\" class=\"thumb-image \" width=\"150\" alt=\"\" />
\t\t\t\t
\t\t\t\t </div> </div>
\t\t\t
\t\t\t\t<div class=\"product-description\">
\t\t\t\t<div class=\"product-name\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
            echo "</div>
</a>
\t
\t\t\t\t\t<hr class=\"top-bottom-10\"/>
\t\t\t\t\t
\t\t\t\t<br/><br/>
 



\t\t\t\t</div>\t

\t\t</div>\t</div>
   
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "     <div class=\"navigation\" style=\"padding-right: 20\">
    ";
        // line 47
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
     </div>
  \t</div> 
      
    
    
     
    
    
    ";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:detailBoutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 47,  93 => 46,  70 => 29,  62 => 24,  55 => 20,  50 => 17,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "TMallClientBundle::layout.html.twig"%}*/
/* {% block content %}*/
/* */
/*     */
/*     */
/*     */
/*    */
/*    */
/*    <div class="text-left no-left-padding col-md-9 min-height-300">  */
/*        */
/*        */
/* 		<h3>List Des Boutique</h3>*/
/* <hr class="hr-margin"/>*/
/* */
/* <div class="separator clear"></div>*/
/*     {% for boutique in pagination %}*/
/*  */
/*     <div class="col-md-4 no-left-right">*/
/* <div class="product featured-product">*/
/* 				 <a href="{{path('t_mall_client_home',{'id':boutique.id})}}">*/
/* 			<div class="image-wrap">*/
/* 	<div class="product-image">*/
/* 					*/
/* 					  <img src="{{ asset(boutique.getWebPath) }}" class="thumb-image " width="150" alt="" />*/
/* 				*/
/* 				 </div> </div>*/
/* 			*/
/* 				<div class="product-description">*/
/* 				<div class="product-name">{{boutique.nom}}</div>*/
/* </a>*/
/* 	*/
/* 					<hr class="top-bottom-10"/>*/
/* 					*/
/* 				<br/><br/>*/
/*  */
/* */
/* */
/* */
/* 				</div>	*/
/* */
/* 		</div>	</div>*/
/*    */
/*     */
/* */
/*     {% endfor %}*/
/*      <div class="navigation" style="padding-right: 20">*/
/*     {{ knp_pagination_render(pagination) }}*/
/*      </div>*/
/*   	</div> */
/*       */
/*     */
/*     */
/*      */
/*     */
/*     */
/*     {% endblock %}*/
