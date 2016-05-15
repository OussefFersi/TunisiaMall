<?php

/* TMallClientBundle:Default:index.html.twig */
class __TwigTemplate_6d288633abf7acfb368a85a459064c3172bca25836202604a1077e8cc4d6bf4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TMallClientBundle::layout.html.twig");

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
    \t\t
\t<div class=\"text-left no-left-padding col-md-9 min-height-300\">
\t\t
\t\t<h3>Latest Products</h3>
<hr class=\"hr-margin\"/>

<div class=\"separator clear\"></div>

\t\t\t 
\t\t\t<div class=\"col-md-4 no-left-right\">
<div class=\"product featured-product\">
\t\t\t\t <a href=\"product-moulinex-masterchef-gourmet-21.html\">
\t\t\t<div class=\"image-wrap\">
\t<div class=\"product-image\">
\t\t\t\t\t
\t\t\t\t\t  <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/thumbnails/34437784.jpg"), "html", null, true);
        echo "\" class=\"thumb-image \" width=\"150\" alt=\"\" />
\t\t\t\t
\t\t\t\t </div> </div>
\t\t\t
\t\t\t\t<div class=\"product-description\">
\t\t\t\t<div class=\"product-name\">Moulinex MasterChef Gourmet</div>
</a>
\t<div class=\"margin-top-5\"></div><a href=\"review-moulinex-masterchef-gourmet-21.html\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/full-star.gif"), "html", null, true);
        echo "\" width=\"13\" height=\"12\" alt=\"\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/full-star.gif"), "html", null, true);
        echo "\" width=\"13\" height=\"12\" alt=\"\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/full-star.gif"), "html", null, true);
        echo "\" width=\"13\" height=\"12\" alt=\"\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/empty-star.gif"), "html", null, true);
        echo "\" width=\"13\" height=\"12\" alt=\"\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/empty-star.gif"), "html", null, true);
        echo "\" width=\"13\" height=\"12\" alt=\"\"/><span class=\"n-reviews\">(2)</span></a> <div class=\"clear\"></div>
\t\t\t\t\t<hr class=\"top-bottom-10\"/>
\t\t\t\t\t<strike class=\"strike_price\">\$119.00</strike> <span class=\"price_style\">\$149.00</span>
\t\t\t\t<br/><br/>
 <a class=\"btn btn-default\" href=\"javascript:AddToCart('add_to_cart509e.html?lang=en&amp;vendor=perfecthome&amp;quantity=1&amp;action=add&amp;id=21')\">Add to Cart</a>

<a href=\"product-moulinex-masterchef-gourmet-21.html\" class=\"btn btn-primary\">Details</a>

\t\t\t\t</div>\t

\t\t</div>\t</div>

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
        return array (  59 => 27,  49 => 20,  31 => 4,  28 => 3,);
    }
}
