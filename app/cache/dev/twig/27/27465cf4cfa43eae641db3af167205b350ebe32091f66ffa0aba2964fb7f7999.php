<?php

/* TMallClientBundle::layout.html.twig */
class __TwigTemplate_846f5eaa18f2792f5eaf841e6e7e1f4229f8ed5ac92f92768246744a2fdb979d extends Twig_Template
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
<script type=\"text/javascript\"
        src=\"https://www.simplify.com/commerce/simplify.pay.js\"></script>
        <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDlsfBOyV5HSxsyXdlmp4LSP02ilFM_AYc\"></script>
<script>
   var myCenter=new google.maps.LatLng(36.832410, 10.238118);
  var marker ; 
function initialize() {
  var mapProp = {
    center:myCenter,
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
  
        var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>

<div id=\"header\">
<div class=\"container\">
<div class=\"row top-line-padding\">

\t<div class=\"col-xs-4\">
\t <a class=\"pull-left\" href=\"index.html\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/logooooooo.png"), "html", null, true);
        echo "\" class=\"site-logo\" width=\"140\"/></a>
\t
\t
\t
\t</div>
\t<div class=\"cart-wrap\">
   
\t";
        // line 57
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TMallClientBundle:Default:menu"), array());
        // line 58
        echo "</div>

\t\t
\t\t<div class=\"site-nav pull-right\">
\t\t <ul>
            <div class=\"hide-sm pull-left\">
<li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("front");
        echo "\">Home</a></li>

<li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("t_mall_client_aboutUs");
        echo "\">About us</a></li>
<li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("t_mall_client_contact_page");
        echo "\">Contact</a></li>
<li>";
        // line 68
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Log IN</a></li>\t\t\t\t
<li> <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">REGISTER</a>";
        }
        echo "</li> 
<li>";
        // line 70
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a> </li> ";
        }
        echo "  
";
        // line 71
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 72
            echo "<li><a>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </a></li>
";
        }
        // line 74
        echo "            
            </div>
\t\t\t\t

\t\t </ul>
\t\t</div>
\t\t
\t
\t</div>

<div class=\"navbar\">

  <div class=\"top-bar\">
  
\t<div class=\"row\">
  
\t<div class=\"col-md-2 hide-sm\">
\t\t
\t

\t
\t</div>
\t<div class=\"col-md-5 no-right-padding\">
\t\t
\t
\t
\t
\t</div>
\t<div class=\"col-md-5 no-left-padding\">
\t
\t\t<a class=\"show-sm pull-right\" href=\"javascript:ShowHide('top_menu')\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/menu-grid.gif"), "html", null, true);
        echo "\"/></a>
\t\t
\t\t
\t\t<ul id=\"top_menu\" class=\"top-menu rel-5 hide-sm\">
\t\t\t<div class=\"show-sm\">
<li><a href=\"\">Home</a></li>

</div>
\t\t\t\t
<li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("t_mall_client_boutiqueDetail");
        echo "\">Stores</a></li>


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
        // line 131
        $this->displayBlock('myCarousel', $context, $blocks);
        // line 132
        echo "\t <div class=\"clearfix\"></div><br/><br/>


<div class=\"clear\"></div>
\t
<div class=\"main-back\">\t
<div class=\"container margin-top-10\">\t
\t

\t";
        // line 141
        $this->displayBlock('content', $context, $blocks);
        // line 142
        echo "\t\t
\t\t <div class=\"text-left col-md-3 no-left-padding no-right-padding\">
\t\t\t
\t\t\t<br/>

<div class=\"list-group add-border rounded-borders\">
\t
\t<div href=\"#\" class=\"top-bar rounded-borders\">
\t<h4>Nos Offres</h4>
\t</div>\t\t
\t
\t
\t
\t
\t

\t
\t
\t
\t

\t
\t
\t
\t

\t
\t
\t
\t

\t
\t
\t
\t


</div>


\t\t\t
\t\t\t
\t\t\t<div class=\"list-group add-border rounded-borders\">
\t
\t\t\t\t<div href=\"#\" class=\"top-bar rounded-borders\">
\t\t\t\t<h4>Latest Products</h4>
\t\t\t\t</div>\t
\t\t\t\t\t<a href=\"\" class=\"underline-link text-center list-group-item\">
\t</a>

\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"list-group add-border rounded-borders\">
\t
\t\t\t\t<div href=\"#\" class=\"top-bar rounded-borders\">
\t\t\t\t<h4>Advertisements</h4>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t
\t\t\t\t<!--
\t\t\t\t<center>
\t\t\t\t\t<a rel=\"nofollow\" href=\"http://www.bestwebscripts.com\" target=\"_blank\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/http://www.quixstore.com/best-web-scripts.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"best web scripts\"/></a>
\t\t\t\t</center>
\t\t\t\t<br/>
\t\t\t\t-->
\t\t\t</div>
\t\t</div>
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
        // line 237
        echo $this->env->getExtension('routing')->getPath("t_mall_client_boutiqueDetail");
        echo "\">Stores</a>
\t<a class=\"upper\" href=\"enproducts.html\">Special Offers</a>
\t<a class=\"upper\" href=\"en-mod-top_rated.html\">Top Rated</a>
\t<a class=\"upper\" href=\"en-mod-recent_reviews.html\">Reviews</a>

 </div>
<div id=\"socialMedia\" class=\"col-md-3 pull-right\">
\t<h5>SOCIAL MEDIA </h5>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/facebook.png"), "html", null, true);
        echo "\" title=\"facebook\" alt=\"facebook\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/twitter.png"), "html", null, true);
        echo "\" title=\"twitter\" alt=\"twitter\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/youtube.png"), "html", null, true);
        echo "\" title=\"youtube\" alt=\"youtube\"/></a>
 </div> 
\t\t </div>
\t\t<p class=\"pull-right\">2014 &copy; QuixStore.com</p>
\t</div>
\t</div>

\t
    
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t

\t<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/login.js"), "html", null, true);
        echo "\"></script>
<div id=\"main-login-form\">
\t<a href=\"javascript:HideLogin()\"><img class=\"close-login-icon\" alt=\"close\" src=\"";
        // line 262
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
\t\t\t<form class=\"no-margin\" action=\"#\" method=\"post\" onsubmit=\"return ValidateLoginForm(this)\">
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
        // line 325
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
        // line 339
        echo $this->env->getExtension('routing')->getPath("t_mall_client_cart");
        echo "';
\t\t}
\t\tif(parent.document.getElementById('Cart'))
\t\t\t\t{
\t\t\t\t\tparent.document.getElementById('Cart').innerHTML=\"Your cart\";
\t\t\t\t}
\t\t\t\t</script>";
    }

    // line 131
    public function block_myCarousel($context, array $blocks = array())
    {
    }

    // line 141
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TMallClientBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 141,  462 => 131,  451 => 339,  434 => 325,  368 => 262,  363 => 260,  356 => 256,  344 => 247,  340 => 246,  336 => 245,  325 => 237,  289 => 204,  225 => 142,  223 => 141,  212 => 132,  210 => 131,  189 => 113,  177 => 104,  145 => 74,  139 => 72,  137 => 71,  129 => 70,  123 => 69,  117 => 68,  113 => 67,  109 => 66,  104 => 64,  96 => 58,  94 => 57,  84 => 50,  49 => 18,  45 => 17,  41 => 16,  36 => 14,  21 => 1,);
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
/* <script type="text/javascript"*/
/*         src="https://www.simplify.com/commerce/simplify.pay.js"></script>*/
/*         <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDlsfBOyV5HSxsyXdlmp4LSP02ilFM_AYc"></script>*/
/* <script>*/
/*    var myCenter=new google.maps.LatLng(36.832410, 10.238118);*/
/*   var marker ; */
/* function initialize() {*/
/*   var mapProp = {*/
/*     center:myCenter,*/
/*     zoom:5,*/
/*     mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*   };*/
/*   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
/*   */
/*         var marker=new google.maps.Marker({*/
/*   position:myCenter,*/
/*   animation:google.maps.Animation.BOUNCE*/
/*   });*/
/* */
/* marker.setMap(map);*/
/* }*/
/* google.maps.event.addDomListener(window, 'load', initialize);*/
/* </script>*/
/* </head>*/
/* <body>*/
/* */
/* <div id="header">*/
/* <div class="container">*/
/* <div class="row top-line-padding">*/
/* */
/* 	<div class="col-xs-4">*/
/* 	 <a class="pull-left" href="index.html"><img src="{{asset('Client/images/logooooooo.png')}}" class="site-logo" width="140"/></a>*/
/* 	*/
/* 	*/
/* 	*/
/* 	</div>*/
/* 	<div class="cart-wrap">*/
/*    */
/* 	{% render(controller('TMallClientBundle:Default:menu')) %}*/
/* </div>*/
/* */
/* 		*/
/* 		<div class="site-nav pull-right">*/
/* 		 <ul>*/
/*             <div class="hide-sm pull-left">*/
/* <li><a href="{{path('front')}}">Home</a></li>*/
/* */
/* <li><a href="{{path('t_mall_client_aboutUs')}}">About us</a></li>*/
/* <li><a href="{{path('t_mall_client_contact_page')}}">Contact</a></li>*/
/* <li>{% if not is_granted("ROLE_USER") %}<a href="{{ path('fos_user_security_login') }}">Log IN</a></li>				*/
/* <li> <a href="{{ path('fos_user_registration_register') }}">REGISTER</a>{% endif %}</li> */
/* <li>{% if is_granted("ROLE_USER") %}<a href="{{ path('fos_user_security_logout') }}">Logout</a> </li> {% endif %}  */
/* {% if is_granted("ROLE_USER") %}*/
/* <li><a>  {{ app.user.username }} </a></li>*/
/* {% endif %}*/
/*             */
/*             </div>*/
/* 				*/
/* */
/* 		 </ul>*/
/* 		</div>*/
/* 		*/
/* 	*/
/* 	</div>*/
/* */
/* <div class="navbar">*/
/* */
/*   <div class="top-bar">*/
/*   */
/* 	<div class="row">*/
/*   */
/* 	<div class="col-md-2 hide-sm">*/
/* 		*/
/* 	*/
/* */
/* 	*/
/* 	</div>*/
/* 	<div class="col-md-5 no-right-padding">*/
/* 		*/
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
/* <li><a href="">Home</a></li>*/
/* */
/* </div>*/
/* 				*/
/* <li><a href="{{path('t_mall_client_boutiqueDetail')}}">Stores</a></li>*/
/* */
/* */
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
/* 		 <div class="text-left col-md-3 no-left-padding no-right-padding">*/
/* 			*/
/* 			<br/>*/
/* */
/* <div class="list-group add-border rounded-borders">*/
/* 	*/
/* 	<div href="#" class="top-bar rounded-borders">*/
/* 	<h4>Nos Offres</h4>*/
/* 	</div>		*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* */
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* */
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* */
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* */
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* */
/* */
/* </div>*/
/* */
/* */
/* 			*/
/* 			*/
/* 			<div class="list-group add-border rounded-borders">*/
/* 	*/
/* 				<div href="#" class="top-bar rounded-borders">*/
/* 				<h4>Latest Products</h4>*/
/* 				</div>	*/
/* 					<a href="" class="underline-link text-center list-group-item">*/
/* 	</a>*/
/* */
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<div class="list-group add-border rounded-borders">*/
/* 	*/
/* 				<div href="#" class="top-bar rounded-borders">*/
/* 				<h4>Advertisements</h4>*/
/* 				</div>*/
/* 				<br/>*/
/* 				*/
/* 				<!--*/
/* 				<center>*/
/* 					<a rel="nofollow" href="http://www.bestwebscripts.com" target="_blank"><img src="{{asset('Client/http://www.quixstore.com/best-web-scripts.jpg')}}" class="img-responsive" alt="best web scripts"/></a>*/
/* 				</center>*/
/* 				<br/>*/
/* 				-->*/
/* 			</div>*/
/* 		</div>*/
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
/* 	<a class="upper" href="{{path('t_mall_client_boutiqueDetail')}}">Stores</a>*/
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
/* 			<form class="no-margin" action="#" method="post" onsubmit="return ValidateLoginForm(this)">*/
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
/* 					parent.document.getElementById('Cart').innerHTML="Your cart";*/
/* 				}*/
/* 				</script>*/
