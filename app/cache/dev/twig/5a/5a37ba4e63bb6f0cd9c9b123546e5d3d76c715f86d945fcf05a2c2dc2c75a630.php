<?php

/* TMallClientBundle:Default:index.html.twig */
class __TwigTemplate_ee2d6eb1eea0431252d5868e84b730c337c116c00d241cf770f141520fe292a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TMallClientBundle::layout.html.twig", "TMallClientBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'myCarousel' => array($this, 'block_myCarousel'),
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
    <div class=\"alert alert-warning\">
\t\t<div class=\"col-md-9\">
\t\t\t<h3 class=\"margin-top-10\">Are you a merchant interested in selling online?</h3>
\t\t</div>
\t\t<div class=\"col-md-3 no-right-padding\">
\t\t\t<a class=\"btn width-100 new-store-button white-font\" href=\"\">
\t\t\t\tCreate your store now\t\t\t</a>
\t\t</div>
\t\t<div class=\"clear\"></div>
\t\t
\t</div>
    
    
    
    <!-- create  your store  -->
    \t<div class=\"text-left no-left-padding col-md-9 min-height-300\">
\t\t
\t\t<h3>Latest Products</h3>
<hr class=\"hr-margin\"/>

<div class=\"separator clear\"></div>

\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo " 
\t\t\t<div class=\"col-md-4 no-left-right\">
<div class=\"product featured-product\">
\t\t\t\t <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("t_mall_client_pdetails", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t<div class=\"image-wrap\">
\t<div class=\"product-image\">
\t\t\t\t\t
\t\t\t\t\t  <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute($context["entity"], "photo", array()), "path", array())) . "")), "html", null, true);
            echo "\" class=\"thumb-image \" width=\"150\" alt=\"\" />
\t\t\t\t
\t\t\t\t </div> </div>
\t\t\t
\t\t\t\t<div class=\"product-description\">
\t\t\t\t<div class=\"product-name\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</div>
</a>
\t<div class=\"margin-top-5\"></div> <div class=\"clear\"></div>
\t\t\t\t\t<hr class=\"top-bottom-10\"/>
\t\t\t\t\t<span class=\"price_style\">¢";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</span>
\t\t\t\t<br/><br/>
 

<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("t_mall_client_pdetails", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Details</a>

\t\t\t\t</div>\t

\t\t</div>\t</div>
\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t
\t\t\t<div class=\"navigation\">
    ";
        // line 56
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
      </div>
\t\t
\t\t</div> 
            
";
    }

    // line 63
    public function block_myCarousel($context, array $blocks = array())
    {
        // line 64
        echo "
\t\t<div id=\"myCarousel\" class=\"carousel slide\">
\t  
\t\t
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"item active slide-back\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"xcarousel-caption text-left\">
\t\t\t\t<a class=\"carousel-link\" href=\"product-olympus-xz-mp-26.html\">
\t\t\t\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/uploaded_images/84570835.jpg"), "html", null, true);
        echo "\" class=\"img-responsive slide-product-image right-margin-40\" alt=\"Olympus XZ-2, 12MP, FlashAir Card\" align=\"left\"/><h1 class=\"no-top-margin hide-xs\">Olympus XZ-2, 12MP, FlashAir Card, \$319.00</h1>
\t\t\t\t  <div class=\"hide-sm\">Combine the ease-of-use of a point and shoot with the image quality of a more advanced camera and you get the Olympus XZ-2. This premium compact helps you push the creative envelope with an arsenal of amazing technology. A super-fast f1.8 iZuiko lens and a large, high-sensitivity BSI (Backside-Illuminated) CMOS ...<br/><br/><br/>
\t\t\t\t\t<button class=\"btn slider-details-button custom-back-color white-font hide-xs\">Details</button> </div>
\t\t\t\t  </a>
\t\t\t\t <br/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><div class=\"item  slide-back\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"xcarousel-caption text-left\">
\t\t\t\t<a class=\"carousel-link\" href=\"product-sony-dscwp-mp-24.html\">
\t\t\t\t<img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/uploaded_images/49443438.jpg"), "html", null, true);
        echo "\" class=\"img-responsive slide-product-image right-margin-40\" alt=\"Sony DSCW830P, 20MP\" align=\"left\"/><h1 class=\"no-top-margin hide-xs\">Sony DSCW830P, 20MP, \$89.00</h1>
\t\t\t\t  <div class=\"hide-sm\">Capture beautiful memories everyday with the pink Sony Cyber-shot DSC-W830/P digital camera. It features 20.1 MP resolution, Super HAD CCD sensor, BIONZ image processor, ZEISS lens and 2.7 TFT LCD screen with 230,400 dots resolution that allows you to capture perfect stills and videos, with ease. This efficient camera can ...<br/><br/><br/>
\t\t\t\t\t<button class=\"btn slider-details-button custom-back-color white-font hide-xs\">Details</button> </div>
\t\t\t\t  </a>
\t\t\t\t <br/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><div class=\"item  slide-back\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"xcarousel-caption text-left\">
\t\t\t\t<a class=\"carousel-link\" href=\"product-moulinex-masterchef-gourmet-21.html\">
\t\t\t\t<img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/uploaded_images/34437784.jpg"), "html", null, true);
        echo "\" class=\"img-responsive slide-product-image right-margin-40\" alt=\"Moulinex MasterChef Gourmet\" align=\"left\"/><h1 class=\"no-top-margin hide-xs\">Moulinex MasterChef Gourmet, \$149.00</h1>
\t\t\t\t  <div class=\"hide-sm\">The Moulinex QA400GBM Masterchef Gourmet Kitchen Machine is the perfect sous-chef for all your kitchen creations. It features a 900 watt motor that gives optimum performance for tougher mixing tasks and a 4 litre stainless steel bowl is big enough to create a meal for the family. It's planetary mixing ...<br/><br/><br/>
\t\t\t\t\t<button class=\"btn slider-details-button custom-back-color white-font hide-xs\">Details</button> </div>
\t\t\t\t  </a>
\t\t\t\t <br/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t</div>
\t\t
\t\t  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/carousel-arrow-left.png"), "html", null, true);
        echo "\" class=\"carousel-icon\"/></a>
\t\t  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/carousel-arrow-right.png"), "html", null, true);
        echo "\" class=\"carousel-icon\"/></a>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 105,  175 => 104,  163 => 95,  149 => 84,  135 => 73,  124 => 64,  121 => 63,  111 => 56,  107 => 54,  94 => 47,  87 => 43,  80 => 39,  72 => 34,  65 => 30,  57 => 27,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* */
/* {%extends  "TMallClientBundle::layout.html.twig"%}*/
/* {% block content %}*/
/*     */
/*     <div class="alert alert-warning">*/
/* 		<div class="col-md-9">*/
/* 			<h3 class="margin-top-10">Are you a merchant interested in selling online?</h3>*/
/* 		</div>*/
/* 		<div class="col-md-3 no-right-padding">*/
/* 			<a class="btn width-100 new-store-button white-font" href="">*/
/* 				Create your store now			</a>*/
/* 		</div>*/
/* 		<div class="clear"></div>*/
/* 		*/
/* 	</div>*/
/*     */
/*     */
/*     */
/*     <!-- create  your store  -->*/
/*     	<div class="text-left no-left-padding col-md-9 min-height-300">*/
/* 		*/
/* 		<h3>Latest Products</h3>*/
/* <hr class="hr-margin"/>*/
/* */
/* <div class="separator clear"></div>*/
/* */
/* 			{%for entity in pagination %} */
/* 			<div class="col-md-4 no-left-right">*/
/* <div class="product featured-product">*/
/* 				 <a href="{{path('t_mall_client_pdetails',{'id':entity.id})}}">*/
/* 			<div class="image-wrap">*/
/* 	<div class="product-image">*/
/* 					*/
/* 					  <img src="{{asset(''~ entity.photo.path ~'')}}" class="thumb-image " width="150" alt="" />*/
/* 				*/
/* 				 </div> </div>*/
/* 			*/
/* 				<div class="product-description">*/
/* 				<div class="product-name">{{ entity.titre }}</div>*/
/* </a>*/
/* 	<div class="margin-top-5"></div> <div class="clear"></div>*/
/* 					<hr class="top-bottom-10"/>*/
/* 					<span class="price_style">¢{{ entity.prix }}</span>*/
/* 				<br/><br/>*/
/*  */
/* */
/* <a href="{{path('t_mall_client_pdetails',{'id':entity.id})}}" class="btn btn-primary">Details</a>*/
/* */
/* 				</div>	*/
/* */
/* 		</div>	</div>*/
/* 			*/
/* 			{%endfor%}*/
/* 			*/
/* 			<div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/*       </div>*/
/* 		*/
/* 		</div> */
/*             */
/* {% endblock %}*/
/* */
/* {% block myCarousel %}*/
/* */
/* 		<div id="myCarousel" class="carousel slide">*/
/* 	  */
/* 		*/
/* 		<div class="carousel-inner">*/
/* 			<div class="item active slide-back">*/
/* 			<div class="container">*/
/* 				<div class="xcarousel-caption text-left">*/
/* 				<a class="carousel-link" href="product-olympus-xz-mp-26.html">*/
/* 				<img src="{{asset('Client/uploaded_images/84570835.jpg')}}" class="img-responsive slide-product-image right-margin-40" alt="Olympus XZ-2, 12MP, FlashAir Card" align="left"/><h1 class="no-top-margin hide-xs">Olympus XZ-2, 12MP, FlashAir Card, $319.00</h1>*/
/* 				  <div class="hide-sm">Combine the ease-of-use of a point and shoot with the image quality of a more advanced camera and you get the Olympus XZ-2. This premium compact helps you push the creative envelope with an arsenal of amazing technology. A super-fast f1.8 iZuiko lens and a large, high-sensitivity BSI (Backside-Illuminated) CMOS ...<br/><br/><br/>*/
/* 					<button class="btn slider-details-button custom-back-color white-font hide-xs">Details</button> </div>*/
/* 				  </a>*/
/* 				 <br/>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><div class="item  slide-back">*/
/* 			<div class="container">*/
/* 				<div class="xcarousel-caption text-left">*/
/* 				<a class="carousel-link" href="product-sony-dscwp-mp-24.html">*/
/* 				<img src="{{asset('Client/uploaded_images/49443438.jpg')}}" class="img-responsive slide-product-image right-margin-40" alt="Sony DSCW830P, 20MP" align="left"/><h1 class="no-top-margin hide-xs">Sony DSCW830P, 20MP, $89.00</h1>*/
/* 				  <div class="hide-sm">Capture beautiful memories everyday with the pink Sony Cyber-shot DSC-W830/P digital camera. It features 20.1 MP resolution, Super HAD CCD sensor, BIONZ image processor, ZEISS lens and 2.7 TFT LCD screen with 230,400 dots resolution that allows you to capture perfect stills and videos, with ease. This efficient camera can ...<br/><br/><br/>*/
/* 					<button class="btn slider-details-button custom-back-color white-font hide-xs">Details</button> </div>*/
/* 				  </a>*/
/* 				 <br/>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><div class="item  slide-back">*/
/* 			<div class="container">*/
/* 				<div class="xcarousel-caption text-left">*/
/* 				<a class="carousel-link" href="product-moulinex-masterchef-gourmet-21.html">*/
/* 				<img src="{{asset('Client/uploaded_images/34437784.jpg')}}" class="img-responsive slide-product-image right-margin-40" alt="Moulinex MasterChef Gourmet" align="left"/><h1 class="no-top-margin hide-xs">Moulinex MasterChef Gourmet, $149.00</h1>*/
/* 				  <div class="hide-sm">The Moulinex QA400GBM Masterchef Gourmet Kitchen Machine is the perfect sous-chef for all your kitchen creations. It features a 900 watt motor that gives optimum performance for tougher mixing tasks and a 4 litre stainless steel bowl is big enough to create a meal for the family. It's planetary mixing ...<br/><br/><br/>*/
/* 					<button class="btn slider-details-button custom-back-color white-font hide-xs">Details</button> </div>*/
/* 				  </a>*/
/* 				 <br/>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>		</div>*/
/* 		*/
/* 		  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="{{asset('Client/images/carousel-arrow-left.png')}}" class="carousel-icon"/></a>*/
/* 		  <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="{{asset('Client/images/carousel-arrow-right.png')}}" class="carousel-icon"/></a>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
