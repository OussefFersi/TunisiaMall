<?php

/* TMallClientBundle::vendor_layout.html.twig */
class __TwigTemplate_b0b62307c6a621dd5edc460c6af0378a669415e8de87d36c148b1b60c8464309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'myCarousel' => array($this, 'block_myCarousel'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from www.quixstore.com/en_Create+your+store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2016 19:11:18 GMT -->
<head>
<meta charset=\"utf-8\">
<title>Create your store</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"keywords\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/css/common.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/css/main.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/jquery.js"), "html", null, true);
        echo "\"></script>

</head>
<body>

<div id=\"header\">
<div class=\"container\">
<div class=\"row top-line-padding\">

\t<div class=\"col-xs-4\">
\t <a class=\"pull-left\" href=\"index.html\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/logo.png"), "html", null, true);
        echo "\" class=\"site-logo\" width=\"140\"/></a>
\t
\t
\t <div class=\"pull-left margin-top-5 margin-left-15\">
\t\t\t\t\t\t\t
\t\t\t\t\t<a href=\"index3120.html?lang=en&amp;page_id=39\"><img alt=\"English\"  title=\"English\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/flags/EN.gif"), "html", null, true);
        echo "\" width=\"26\"/></a>
\t\t\t\t\t \t\t
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t \t\t
\t\t\t\t\t
\t\t\t\t\t \t\t
\t\t\t\t\t</div>
\t</div>
\t<div class=\"col-xs-8\">

\t\t<a class=\"show-cart-link\" href=\"javascript:ShowCart()\">
<div class=\"cart-wrap\">
\t<img width=\"18\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/cart-m.png"), "html", null, true);
        echo "\"/>
\t<div id=\"Cart\">
\t</div>
\t<div class=\"clear\"></div>
</div>
</a>
\t\t
\t\t<div class=\"site-nav pull-right\">
\t\t <ul>
            <div class=\"hide-sm pull-left\">
<li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("t_mall_client_home");
        echo "\">Home</a></li>
<li><a href=";
        // line 57
        echo $this->env->getExtension('routing')->getPath("t_mall_client_create_store");
        echo ">Create your store</a></li>
<li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("t_mall_client_home");
        echo "\">About us</a></li>
<li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("t_mall_client_contact_page");
        echo "\">Contact</a></li></div>
\t\t\t\t<li><a class=\"top-right-link\" href=\"javascript:ShowLogin()\">Log In</a></li>

\t\t </ul>
\t\t</div>
\t\t
\t
\t</div>
</div>
<div class=\"navbar\">

  <div class=\"top-bar\">
  
\t<div class=\"row\">
  
\t<div class=\"col-md-2 hide-sm\">
\t\t<a class=\"shop-category-link hide-sm\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Shop by Category <b class=\"caret white-caret\"></b></a>
\t
<ul class=\"dropdown-menu text-left categories-wrapper\">
<li>
<div>

<div class=\"category-column\">
<a class=\"category_link\" href=\"category-art-collectibles-5.html\">Art & Collectibles</a>
<a class=\"sub_category_link\" href=\"category-antiques-5-1.html\">Antiques</a>
<a class=\"sub_category_link\" href=\"category-art-from-resellers-5-2.html\">Art from Resellers</a>
<a class=\"sub_category_link\" href=\"category-coins-money-5-3.html\">Coins & Money</a>
<a class=\"category_link\" href=\"category-baby-3.html\">Baby</a>
<a class=\"sub_category_link\" href=\"category-baby-health-3-1.html\">Baby Health</a>
<a class=\"sub_category_link\" href=\"category-car-safety-seats-3-2.html\">Car Safety Seats</a>
<a class=\"sub_category_link\" href=\"category-feeding-3-3.html\">Feeding</a>
<a class=\"category_link\" href=\"category-books-7.html\">Books</a>
<a class=\"sub_category_link\" href=\"category-antiquarian-collectible-7-1.html\">Antiquarian & Collectible</a>
<a class=\"sub_category_link\" href=\"category-audiobooks-7-2.html\">Audiobooks</a>
<a class=\"sub_category_link\" href=\"category-catalogs-7-3.html\">Catalogs</a>
<a class=\"category_link\" href=\"category-cameras-photo-12.html\">Cameras & Photo</a>
<a class=\"sub_category_link\" href=\"category-binoculars-telescopes-12-1.html\">Binoculars & Telescopes</a>
<a class=\"sub_category_link\" href=\"category-camcorders-12-2.html\">Camcorders</a>
<a class=\"sub_category_link\" href=\"category-digital-cameras-12-3.html\">Digital Cameras</a>
</div>
<div class=\"category-column\">
<a class=\"category_link\" href=\"category-computers-10.html\">Computers</a>
<a class=\"sub_category_link\" href=\"category-software-10-13.html\">Software</a>
<a class=\"sub_category_link\" href=\"category-ipads-10-2.html\">iPads</a>
<a class=\"sub_category_link\" href=\"category-laptops-netbooks-10-3.html\">Laptops & Netbooks</a>
<a class=\"category_link\" href=\"category-consumer-electronics-8.html\">Consumer Electronics</a>
<a class=\"sub_category_link\" href=\"category-batteries-power-8-1.html\">Batteries & Power</a>
<a class=\"sub_category_link\" href=\"category-headphones-8-2.html\">Headphones</a>
<a class=\"sub_category_link\" href=\"category-tv-video-8-3.html\">TV & Video</a>
<a class=\"category_link\" href=\"category-crafts-13.html\">Crafts</a>
<a class=\"sub_category_link\" href=\"category-art-supplies-13-1.html\">Art Supplies</a>
<a class=\"sub_category_link\" href=\"category-beads-jewelry-making-13-2.html\">Beads & Jewelry Making</a>
<a class=\"sub_category_link\" href=\"category-glass-mosaics-13-3.html\">Glass & Mosaics</a>
<a class=\"category_link\" href=\"category-clothing-shoes-15.html\">Clothing & Shoes</a>
<a class=\"sub_category_link\" href=\"category-baby-clothing-15-1.html\">Baby Clothing</a>
<a class=\"sub_category_link\" href=\"category-kids-clothing-shoes-15-2.html\">Kids' Clothing & Shoes</a>
<a class=\"sub_category_link\" href=\"category-costumes-15-3.html\">Costumes</a>
</div>
<div class=\"category-column\">
<a class=\"category_link\" href=\"category-health-beauty-2.html\">Health & Beauty</a>
<a class=\"sub_category_link\" href=\"category-bath-body-2-1.html\">Bath & Body</a>
<a class=\"sub_category_link\" href=\"category-supplements-nutrition-2-2.html\">Supplements Nutrition</a>
<a class=\"sub_category_link\" href=\"category-fragrances-2-3.html\">Fragrances</a>
<a class=\"category_link\" href=\"category-business-17.html\">Business</a>
<a class=\"sub_category_link\" href=\"category-businesses-for-sale-17-1.html\">Businesses for Sale</a>
<a class=\"sub_category_link\" href=\"category-domain-names-17-2.html\">Domain names</a>
<a class=\"sub_category_link\" href=\"category-office-17-3.html\">Office</a>
<a class=\"category_link\" href=\"category-industrial-16.html\">Industrial</a>
<a class=\"sub_category_link\" href=\"category-agriculture-16-1.html\">Agriculture</a>
<a class=\"sub_category_link\" href=\"category-construction-16-2.html\">Construction</a>
<a class=\"sub_category_link\" href=\"category-electrical-16-3.html\">Electrical</a>
<a class=\"category_link\" href=\"category-other-18.html\">Other</a></div>
<div class=\"clear\"></div>
<a href=\"en-mod-categories.html\" class=\"all-categories-link\">See all categories</a>

</li>
</ul>
\t
\t</div>
\t<div class=\"col-md-5 no-right-padding\">
\t\t<form method=\"post\" action=\"http://www.quixstore.com/index.php\">

<input type=\"hidden\" name=\"proceed_search\" value=\"1\"/>
<input type=\"hidden\" name=\"mod\" value=\"products\"/>
<input type=\"hidden\" name=\"lang\" value=\"en\"/>
<div class=\"col-xs-5 no-left-padding no-right-padding\">
\t<input type=\"text\" class=\"search-field width-100\" name=\"search_by\" value=\"\" placeholder=\" Search ...\"/>
</div>\t
<div class=\"col-xs-5 no-right-padding small-left-padding hide-sm\">\t
\t<select name=\"search_category\" class=\"search-field width-100\">
\t\t<option value=\"\">All Categories</option>
\t\t<option  value=\"5\">Art & Collectibles
</option><option  value=\"3\">Baby
</option><option  value=\"7\">Books
</option><option  value=\"12\">Cameras & Photo
</option><option  value=\"10\">Computers
</option><option  value=\"8\">Consumer Electronics
</option><option  value=\"13\">Crafts
</option><option  value=\"15\">Clothing & Shoes
</option><option  value=\"2\">Health & Beauty
</option><option  value=\"17\">Business
</option><option  value=\"16\">Industrial
</option><option  value=\"18\">Other</option>\t\t
\t\t</select>
</div>
<div class=\"col-xs-2\">\t\t
\t<button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\">Go</button>
</div>
</form>
\t
\t
\t
\t</div>
\t<div class=\"col-md-5 no-left-padding\">
\t
\t\t<a class=\"show-sm pull-right\" href=\"javascript:ShowHide('top_menu')\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/menu-grid.gif"), "html", null, true);
        echo "\"/></a>
\t\t
\t\t
\t\t<ul id=\"top_menu\" class=\"top-menu rel-5 hide-sm\">
\t\t\t<div class=\"show-sm\">
<li><a href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("t_mall_client_home");
        echo "\">Home</a></li>
<li><a href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("t_mall_client_create_store");
        echo "\">Create your store</a></li>
<li><a href=\"en_About%2bus.html\">About us</a></li>
<li><a href=\"en_Contact.html\">Contact</a></li></div>
\t\t\t\t<li class=\"show-sm\"><a href=\"en-mod-categories.html\">Shop by Category</a></li>
<li><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("t_mall_client_stores");
        echo "\">Stores</a></li>

<li><a href=\"en-mod-featured_products.html\">Special Offers</a></li>
<li><a href=\"en-mod-top_rated.html\">Top Rated</a></li>
<li><a href=\"en-mod-recent_reviews.html\">Reviews</a></li>
\t\t</ul>
\t\t\t
\t\t\t 
\t</div>
\t
\t
  
\t
\t</div>
\t
  </div>
</div>
</div>
</div>

";
        // line 204
        $this->displayBlock('myCarousel', $context, $blocks);
        // line 205
        echo "\t <div class=\"clearfix\"></div><br/><br/>


<div class=\"clear\"></div>
\t
<div class=\"main-back\">\t
<div class=\"container margin-top-10\">\t
\t

\t";
        // line 214
        $this->displayBlock('content', $context, $blocks);
        // line 215
        echo "\t\t
\t\t<div class=\"clear\"></div>
\t\t<br/><br/>
\t</div>\t
</div>\t
\t
<div  class=\"footer-section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t<h5>ABOUT</h5>
\t
\t\t\t\t\t\t<a class=\"upper\" href=\"index.html\">Home</a>
\t\t\t\t\t
\t\t\t\t\t\t<a class=\"upper\" href=\"en_Create%2byour%2bstore.html\">Create your store</a>
\t\t\t\t\t
\t\t\t\t\t\t<a class=\"upper\" href=\"en_About%2bus.html\">About us</a>
\t\t\t\t\t
\t\t\t\t\t\t<a class=\"upper\" href=\"en_Contact.html\">Contact</a>
\t\t\t\t\t </div>
<div class=\"col-md-3\">
\t<h5>INFORMATION</h5>
\t<a href=\"terms.html\">TERMS AND CONDITIONS</a> 
\t<a href=\"faq.html\">FAQ</a>
 </div>
<div class=\"col-md-3\">
\t<h5>OUR OFFERS</h5>
\t<a class=\"upper\" href=\"en-mod-categories.html\">Shop by Category</a>
\t<a class=\"upper\" href=\"";
        // line 243
        echo $this->env->getExtension('routing')->getPath("t_mall_client_stores");
        echo "\">Stores</a>
\t<a class=\"upper\" href=\"enproducts.html\">Special Offers</a>
\t<a class=\"upper\" href=\"en-mod-top_rated.html\">Top Rated</a>
\t<a class=\"upper\" href=\"en-mod-recent_reviews.html\">Reviews</a>

 </div>
<div id=\"socialMedia\" class=\"col-md-3 pull-right\">
\t<h5>SOCIAL MEDIA </h5>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/facebook.png"), "html", null, true);
        echo "\" title=\"facebook\" alt=\"facebook\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/twitter.png"), "html", null, true);
        echo "\" title=\"twitter\" alt=\"twitter\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/youtube.png"), "html", null, true);
        echo "\" title=\"youtube\" alt=\"youtube\"/></a>
 </div> 
\t\t </div>
\t\t<p class=\"pull-right\">2014 &copy; QuixStore.com</p>
\t</div>
\t</div>

\t
    
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t

\t<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/login.js"), "html", null, true);
        echo "\"></script>
<div id=\"main-login-form\">
\t<a href=\"javascript:HideLogin()\"><img class=\"close-login-icon\" alt=\"close\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/closeicon.png"), "html", null, true);
        echo "\"/></a>
\t<h3 class=\"lfloat\" id=\"top_msg_header\">
\tLogin\t</h3>
\t
\t\t<hr class=\"clear\"/>
\t\t
\t\t\t<script>
\t\t\tfunction ValidateLoginForm(x)
\t\t\t{
\t\t\t\tif(x.Email.value==\"\")
\t\t\t\t{
\t\t\t\t\tdocument.getElementById(\"top_msg_header\").innerHTML=
\t\t\t\t\t\"Please enter your username!\";
\t\t\t\t\tx.Email.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\telse
\t\t\t\tif(x.Password.value==\"\")
\t\t\t\t{
\t\t\t\t
\t\t\t\t\tdocument.getElementById(\"top_msg_header\").innerHTML=
\t\t\t\t\t\"Please enter your password!\";
\t\t\t\t\tx.Password.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t}
\t\t\t</script>
\t\t\t\t\t\t
\t\t\t<form class=\"no-margin\" action=\"http://www.quixstore.com/loginaction.php\" method=\"post\" onsubmit=\"return ValidateLoginForm(this)\">
\t\t\t
\t\t\t<table class=\"bcollapse\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"lang\" value=\"en\">
\t\t\t\t\t\t\t<tr height=\"36\">
\t\t\t\t
\t\t\t\t\t<td >Username: </td>
\t\t\t\t\t<td><input type=\"text\" size=\"40\" class=\"form-field\" value=\"\" name=\"Email\"/></td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >Password: </td>
\t\t\t\t\t<td><input  size=\"40\" class=\"form-field\" type=\"password\" name=\"Password\"/></td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">  
\t\t\t\t\t
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary pull-right margin-20\" value=\"Login\"/>
\t\t\t\t\t<br/>
\t\t\t\t\t<a class=\"pull-left\" href=\"en-mod-forgotten_password.html\">forgotten password?</a> 
\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t</table>
\t\t\t</form>
\t\t\t<br/>
\t
\t<br/>
</div>
<div id=\"popup\" class=\"popup\">
\t
\tThe product was added successfully to your cart!\t<br/><br/>
\t<a class=\"underline-link\" href=\"javascript:ShowCart()\"><img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/cart-m.png"), "html", null, true);
        echo "\"/></a>
\t<br/>
\t
</div>\t
<iframe id=\"ajax-ifr\" name=\"ajax-ifr\" src=\"Client/include/empty-page.html\" style=\"position:absolute;top:0px;left:0px;visibility:hidden\" width=\"1\" height=\"1\"> </iframe>


</body>

<!-- Mirrored from www.quixstore.com/en_Create+your+store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2016 19:12:15 GMT -->
</html><script>
\t\t
\t\tfunction ShowCart()
\t\t{
\t\t\tdocument.location.href='";
        // line 345
        echo $this->env->getExtension('routing')->getPath("t_mall_client_cart");
        echo "';
\t\t}
\t\tif(parent.document.getElementById('Cart'))
\t\t\t\t{
\t\t\t\t\tparent.document.getElementById('Cart').innerHTML=\"Your cart is empty!\";
\t\t\t\t}
\t\t\t\t</script>";
    }

    // line 204
    public function block_myCarousel($context, array $blocks = array())
    {
    }

    // line 214
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TMallClientBundle::vendor_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 214,  453 => 204,  442 => 345,  425 => 331,  359 => 268,  354 => 266,  347 => 262,  335 => 253,  331 => 252,  327 => 251,  316 => 243,  286 => 215,  284 => 214,  273 => 205,  271 => 204,  248 => 184,  241 => 180,  237 => 179,  229 => 174,  111 => 59,  107 => 58,  103 => 57,  99 => 56,  86 => 46,  70 => 33,  62 => 28,  49 => 18,  45 => 17,  41 => 16,  36 => 14,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <!-- Mirrored from www.quixstore.com/en_Create+your+store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2016 19:11:18 GMT -->*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <title>Create your store</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="description" content="">*/
/* <meta name="keywords" content="">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <link href="{{asset('Client/css/bootstrap.css')}}" rel="stylesheet"/>*/
/* */
/* <link rel="stylesheet" href="{{asset('Client/css/common.css')}}">*/
/* <link rel="stylesheet" href="{{asset('Client/css/main.css')}}">*/
/* <script src="{{asset('Client/js/jquery.js')}}"></script>*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <div id="header">*/
/* <div class="container">*/
/* <div class="row top-line-padding">*/
/* */
/* 	<div class="col-xs-4">*/
/* 	 <a class="pull-left" href="index.html"><img src="{{asset('Client/images/logo.png')}}" class="site-logo" width="140"/></a>*/
/* 	*/
/* 	*/
/* 	 <div class="pull-left margin-top-5 margin-left-15">*/
/* 							*/
/* 					<a href="index3120.html?lang=en&amp;page_id=39"><img alt="English"  title="English" src="{{asset('Client/images/flags/EN.gif')}}" width="26"/></a>*/
/* 					 		*/
/* 					*/
/* 							*/
/* 					 		*/
/* 					*/
/* 					 		*/
/* 					</div>*/
/* 	</div>*/
/* 	<div class="col-xs-8">*/
/* */
/* 		<a class="show-cart-link" href="javascript:ShowCart()">*/
/* <div class="cart-wrap">*/
/* 	<img width="18" src="{{asset('Client/images/cart-m.png')}}"/>*/
/* 	<div id="Cart">*/
/* 	</div>*/
/* 	<div class="clear"></div>*/
/* </div>*/
/* </a>*/
/* 		*/
/* 		<div class="site-nav pull-right">*/
/* 		 <ul>*/
/*             <div class="hide-sm pull-left">*/
/* <li><a href="{{path('t_mall_client_home')}}">Home</a></li>*/
/* <li><a href={{path('t_mall_client_create_store')}}>Create your store</a></li>*/
/* <li><a href="{{path('t_mall_client_home')}}">About us</a></li>*/
/* <li><a href="{{path('t_mall_client_contact_page')}}">Contact</a></li></div>*/
/* 				<li><a class="top-right-link" href="javascript:ShowLogin()">Log In</a></li>*/
/* */
/* 		 </ul>*/
/* 		</div>*/
/* 		*/
/* 	*/
/* 	</div>*/
/* </div>*/
/* <div class="navbar">*/
/* */
/*   <div class="top-bar">*/
/*   */
/* 	<div class="row">*/
/*   */
/* 	<div class="col-md-2 hide-sm">*/
/* 		<a class="shop-category-link hide-sm" href="#" data-toggle="dropdown" class="dropdown-toggle">Shop by Category <b class="caret white-caret"></b></a>*/
/* 	*/
/* <ul class="dropdown-menu text-left categories-wrapper">*/
/* <li>*/
/* <div>*/
/* */
/* <div class="category-column">*/
/* <a class="category_link" href="category-art-collectibles-5.html">Art & Collectibles</a>*/
/* <a class="sub_category_link" href="category-antiques-5-1.html">Antiques</a>*/
/* <a class="sub_category_link" href="category-art-from-resellers-5-2.html">Art from Resellers</a>*/
/* <a class="sub_category_link" href="category-coins-money-5-3.html">Coins & Money</a>*/
/* <a class="category_link" href="category-baby-3.html">Baby</a>*/
/* <a class="sub_category_link" href="category-baby-health-3-1.html">Baby Health</a>*/
/* <a class="sub_category_link" href="category-car-safety-seats-3-2.html">Car Safety Seats</a>*/
/* <a class="sub_category_link" href="category-feeding-3-3.html">Feeding</a>*/
/* <a class="category_link" href="category-books-7.html">Books</a>*/
/* <a class="sub_category_link" href="category-antiquarian-collectible-7-1.html">Antiquarian & Collectible</a>*/
/* <a class="sub_category_link" href="category-audiobooks-7-2.html">Audiobooks</a>*/
/* <a class="sub_category_link" href="category-catalogs-7-3.html">Catalogs</a>*/
/* <a class="category_link" href="category-cameras-photo-12.html">Cameras & Photo</a>*/
/* <a class="sub_category_link" href="category-binoculars-telescopes-12-1.html">Binoculars & Telescopes</a>*/
/* <a class="sub_category_link" href="category-camcorders-12-2.html">Camcorders</a>*/
/* <a class="sub_category_link" href="category-digital-cameras-12-3.html">Digital Cameras</a>*/
/* </div>*/
/* <div class="category-column">*/
/* <a class="category_link" href="category-computers-10.html">Computers</a>*/
/* <a class="sub_category_link" href="category-software-10-13.html">Software</a>*/
/* <a class="sub_category_link" href="category-ipads-10-2.html">iPads</a>*/
/* <a class="sub_category_link" href="category-laptops-netbooks-10-3.html">Laptops & Netbooks</a>*/
/* <a class="category_link" href="category-consumer-electronics-8.html">Consumer Electronics</a>*/
/* <a class="sub_category_link" href="category-batteries-power-8-1.html">Batteries & Power</a>*/
/* <a class="sub_category_link" href="category-headphones-8-2.html">Headphones</a>*/
/* <a class="sub_category_link" href="category-tv-video-8-3.html">TV & Video</a>*/
/* <a class="category_link" href="category-crafts-13.html">Crafts</a>*/
/* <a class="sub_category_link" href="category-art-supplies-13-1.html">Art Supplies</a>*/
/* <a class="sub_category_link" href="category-beads-jewelry-making-13-2.html">Beads & Jewelry Making</a>*/
/* <a class="sub_category_link" href="category-glass-mosaics-13-3.html">Glass & Mosaics</a>*/
/* <a class="category_link" href="category-clothing-shoes-15.html">Clothing & Shoes</a>*/
/* <a class="sub_category_link" href="category-baby-clothing-15-1.html">Baby Clothing</a>*/
/* <a class="sub_category_link" href="category-kids-clothing-shoes-15-2.html">Kids' Clothing & Shoes</a>*/
/* <a class="sub_category_link" href="category-costumes-15-3.html">Costumes</a>*/
/* </div>*/
/* <div class="category-column">*/
/* <a class="category_link" href="category-health-beauty-2.html">Health & Beauty</a>*/
/* <a class="sub_category_link" href="category-bath-body-2-1.html">Bath & Body</a>*/
/* <a class="sub_category_link" href="category-supplements-nutrition-2-2.html">Supplements Nutrition</a>*/
/* <a class="sub_category_link" href="category-fragrances-2-3.html">Fragrances</a>*/
/* <a class="category_link" href="category-business-17.html">Business</a>*/
/* <a class="sub_category_link" href="category-businesses-for-sale-17-1.html">Businesses for Sale</a>*/
/* <a class="sub_category_link" href="category-domain-names-17-2.html">Domain names</a>*/
/* <a class="sub_category_link" href="category-office-17-3.html">Office</a>*/
/* <a class="category_link" href="category-industrial-16.html">Industrial</a>*/
/* <a class="sub_category_link" href="category-agriculture-16-1.html">Agriculture</a>*/
/* <a class="sub_category_link" href="category-construction-16-2.html">Construction</a>*/
/* <a class="sub_category_link" href="category-electrical-16-3.html">Electrical</a>*/
/* <a class="category_link" href="category-other-18.html">Other</a></div>*/
/* <div class="clear"></div>*/
/* <a href="en-mod-categories.html" class="all-categories-link">See all categories</a>*/
/* */
/* </li>*/
/* </ul>*/
/* 	*/
/* 	</div>*/
/* 	<div class="col-md-5 no-right-padding">*/
/* 		<form method="post" action="http://www.quixstore.com/index.php">*/
/* */
/* <input type="hidden" name="proceed_search" value="1"/>*/
/* <input type="hidden" name="mod" value="products"/>*/
/* <input type="hidden" name="lang" value="en"/>*/
/* <div class="col-xs-5 no-left-padding no-right-padding">*/
/* 	<input type="text" class="search-field width-100" name="search_by" value="" placeholder=" Search ..."/>*/
/* </div>	*/
/* <div class="col-xs-5 no-right-padding small-left-padding hide-sm">	*/
/* 	<select name="search_category" class="search-field width-100">*/
/* 		<option value="">All Categories</option>*/
/* 		<option  value="5">Art & Collectibles*/
/* </option><option  value="3">Baby*/
/* </option><option  value="7">Books*/
/* </option><option  value="12">Cameras & Photo*/
/* </option><option  value="10">Computers*/
/* </option><option  value="8">Consumer Electronics*/
/* </option><option  value="13">Crafts*/
/* </option><option  value="15">Clothing & Shoes*/
/* </option><option  value="2">Health & Beauty*/
/* </option><option  value="17">Business*/
/* </option><option  value="16">Industrial*/
/* </option><option  value="18">Other</option>		*/
/* 		</select>*/
/* </div>*/
/* <div class="col-xs-2">		*/
/* 	<button type="submit" id="submitButton" class="btn btn-primary">Go</button>*/
/* </div>*/
/* </form>*/
/* 	*/
/* 	*/
/* 	*/
/* 	</div>*/
/* 	<div class="col-md-5 no-left-padding">*/
/* 	*/
/* 		<a class="show-sm pull-right" href="javascript:ShowHide('top_menu')"><img src="{{asset('Client/images/menu-grid.gif')}}"/></a>*/
/* 		*/
/* 		*/
/* 		<ul id="top_menu" class="top-menu rel-5 hide-sm">*/
/* 			<div class="show-sm">*/
/* <li><a href="{{path('t_mall_client_home')}}">Home</a></li>*/
/* <li><a href="{{path('t_mall_client_create_store')}}">Create your store</a></li>*/
/* <li><a href="en_About%2bus.html">About us</a></li>*/
/* <li><a href="en_Contact.html">Contact</a></li></div>*/
/* 				<li class="show-sm"><a href="en-mod-categories.html">Shop by Category</a></li>*/
/* <li><a href="{{path('t_mall_client_stores')}}">Stores</a></li>*/
/* */
/* <li><a href="en-mod-featured_products.html">Special Offers</a></li>*/
/* <li><a href="en-mod-top_rated.html">Top Rated</a></li>*/
/* <li><a href="en-mod-recent_reviews.html">Reviews</a></li>*/
/* 		</ul>*/
/* 			*/
/* 			 */
/* 	</div>*/
/* 	*/
/* 	*/
/*   */
/* 	*/
/* 	</div>*/
/* 	*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* {% block myCarousel %}{% endblock %}*/
/* 	 <div class="clearfix"></div><br/><br/>*/
/* */
/* */
/* <div class="clear"></div>*/
/* 	*/
/* <div class="main-back">	*/
/* <div class="container margin-top-10">	*/
/* 	*/
/* */
/* 	{% block content %}{% endblock %}*/
/* 		*/
/* 		<div class="clear"></div>*/
/* 		<br/><br/>*/
/* 	</div>	*/
/* </div>	*/
/* 	*/
/* <div  class="footer-section">*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-md-3">*/
/* 	<h5>ABOUT</h5>*/
/* 	*/
/* 						<a class="upper" href="index.html">Home</a>*/
/* 					*/
/* 						<a class="upper" href="en_Create%2byour%2bstore.html">Create your store</a>*/
/* 					*/
/* 						<a class="upper" href="en_About%2bus.html">About us</a>*/
/* 					*/
/* 						<a class="upper" href="en_Contact.html">Contact</a>*/
/* 					 </div>*/
/* <div class="col-md-3">*/
/* 	<h5>INFORMATION</h5>*/
/* 	<a href="terms.html">TERMS AND CONDITIONS</a> */
/* 	<a href="faq.html">FAQ</a>*/
/*  </div>*/
/* <div class="col-md-3">*/
/* 	<h5>OUR OFFERS</h5>*/
/* 	<a class="upper" href="en-mod-categories.html">Shop by Category</a>*/
/* 	<a class="upper" href="{{path('t_mall_client_stores')}}">Stores</a>*/
/* 	<a class="upper" href="enproducts.html">Special Offers</a>*/
/* 	<a class="upper" href="en-mod-top_rated.html">Top Rated</a>*/
/* 	<a class="upper" href="en-mod-recent_reviews.html">Reviews</a>*/
/* */
/*  </div>*/
/* <div id="socialMedia" class="col-md-3 pull-right">*/
/* 	<h5>SOCIAL MEDIA </h5>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/facebook.png')}}" title="facebook" alt="facebook"/></a>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/twitter.png')}}" title="twitter" alt="twitter"/></a>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/youtube.png')}}" title="youtube" alt="youtube"/></a>*/
/*  </div> */
/* 		 </div>*/
/* 		<p class="pull-right">2014 &copy; QuixStore.com</p>*/
/* 	</div>*/
/* 	</div>*/
/* */
/* 	*/
/*     */
/*     <script src="{{asset('Client/js/bootstrap.min.js')}}"></script>*/
/* */
/* 	*/
/* */
/* 	<script src="{{asset('Client/js/login.js')}}"></script>*/
/* <div id="main-login-form">*/
/* 	<a href="javascript:HideLogin()"><img class="close-login-icon" alt="close" src="{{asset('Client/images/closeicon.png')}}"/></a>*/
/* 	<h3 class="lfloat" id="top_msg_header">*/
/* 	Login	</h3>*/
/* 	*/
/* 		<hr class="clear"/>*/
/* 		*/
/* 			<script>*/
/* 			function ValidateLoginForm(x)*/
/* 			{*/
/* 				if(x.Email.value=="")*/
/* 				{*/
/* 					document.getElementById("top_msg_header").innerHTML=*/
/* 					"Please enter your username!";*/
/* 					x.Email.focus();*/
/* 					return false;*/
/* 				}*/
/* 				else*/
/* 				if(x.Password.value=="")*/
/* 				{*/
/* 				*/
/* 					document.getElementById("top_msg_header").innerHTML=*/
/* 					"Please enter your password!";*/
/* 					x.Password.focus();*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			}*/
/* 			</script>*/
/* 						*/
/* 			<form class="no-margin" action="http://www.quixstore.com/loginaction.php" method="post" onsubmit="return ValidateLoginForm(this)">*/
/* 			*/
/* 			<table class="bcollapse">*/
/* 							<input type="hidden" name="lang" value="en">*/
/* 							<tr height="36">*/
/* 				*/
/* 					<td >Username: </td>*/
/* 					<td><input type="text" size="40" class="form-field" value="" name="Email"/></td>*/
/* 					*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td >Password: </td>*/
/* 					<td><input  size="40" class="form-field" type="password" name="Password"/></td>*/
/* 					*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td colspan="2">  */
/* 					*/
/* 					<input type="submit" class="btn btn-primary pull-right margin-20" value="Login"/>*/
/* 					<br/>*/
/* 					<a class="pull-left" href="en-mod-forgotten_password.html">forgotten password?</a> */
/* 					*/
/* 					</td>*/
/* 				</tr>*/
/* 				*/
/* 			</table>*/
/* 			</form>*/
/* 			<br/>*/
/* 	*/
/* 	<br/>*/
/* </div>*/
/* <div id="popup" class="popup">*/
/* 	*/
/* 	The product was added successfully to your cart!	<br/><br/>*/
/* 	<a class="underline-link" href="javascript:ShowCart()"><img src="{{asset('Client/images/cart-m.png')}}"/></a>*/
/* 	<br/>*/
/* 	*/
/* </div>	*/
/* <iframe id="ajax-ifr" name="ajax-ifr" src="Client/include/empty-page.html" style="position:absolute;top:0px;left:0px;visibility:hidden" width="1" height="1"> </iframe>*/
/* */
/* */
/* </body>*/
/* */
/* <!-- Mirrored from www.quixstore.com/en_Create+your+store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2016 19:12:15 GMT -->*/
/* </html><script>*/
/* 		*/
/* 		function ShowCart()*/
/* 		{*/
/* 			document.location.href='{{path('t_mall_client_cart')}}';*/
/* 		}*/
/* 		if(parent.document.getElementById('Cart'))*/
/* 				{*/
/* 					parent.document.getElementById('Cart').innerHTML="Your cart is empty!";*/
/* 				}*/
/* 				</script>*/
