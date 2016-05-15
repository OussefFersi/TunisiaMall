<?php

/* PersonneBundle:Default:index.html.twig */
class __TwigTemplate_2fbacc74edde0efe2c0ea848d77c5d5f451cc9bf975539ab973e7f94cd960013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/base.html.twig", "PersonneBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'myCarousel' => array($this, 'block_myCarousel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('myCarousel', $context, $blocks);
        // line 50
        echo "<iframe width=\"980\" height=\"480\" src=\"https://www.youtube.com/embed/Sc2rNZsNobw\" frameborder=\"0\" allowfullscreen></iframe>
";
    }

    // line 4
    public function block_myCarousel($context, array $blocks = array())
    {
        // line 5
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
        // line 14
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
        // line 25
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
        // line 36
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
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/carousel-arrow-left.png"), "html", null, true);
        echo "\" class=\"carousel-icon\"/></a>
\t\t  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/carousel-arrow-right.png"), "html", null, true);
        echo "\" class=\"carousel-icon\"/></a>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "PersonneBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  94 => 45,  82 => 36,  68 => 25,  54 => 14,  43 => 5,  40 => 4,  35 => 50,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::default/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% block myCarousel %}*/
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
/* <iframe width="980" height="480" src="https://www.youtube.com/embed/Sc2rNZsNobw" frameborder="0" allowfullscreen></iframe>*/
/* {% endblock %}  */
/* */
/* */
