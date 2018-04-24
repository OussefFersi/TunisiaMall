<?php

/* ::default/base.html.twig */
class __TwigTemplate_995515b8699c511dff42d20d7c9eaa911e374f06cbefec6b7cdc977530776494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
<title>Tunisia Mall</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"keywords\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("form_style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/css/common.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/css/main.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!--/mycustomization -->
    </head>
    <body>
        <!--myheader -->
        
        
        <div id=\"header\">
<div class=\"container\">
<div class=\"row top-line-padding\">

\t<div class=\"col-xs-4\">
\t <a class=\"pull-left\" href=\"index.html\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/logooooooo.png"), "html", null, true);
        echo "\" class=\"site-logo\" width=\"140\"/></a>
\t
\t
\t
\t</div>
\t<div class=\"col-xs-8\">

\t\t<a class=\"show-cart-link\" href=\"javascript:ShowCart()\">

</a>
\t\t
\t\t<div class=\"site-nav pull-right\">
\t\t <ul>
             <div class=\"toplogin\">
                                <p>";
        // line 42
        if ( !$this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Log IN</a> <span class=\"separator\">|</span> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">REGISTER</a>";
        }
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "<span class=\"separator\">|</span> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a> ";
        }
        echo "<a class=\"separator\">|</a> ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 43
            echo "   <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </a>
";
        }
        // line 45
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            echo " <a class=\"separator\">|</a> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("tmall_admin_homepage");
            echo "\">Admin Page</a>";
        }
        // line 46
        echo "</p>
                            </div>    


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
\t\t
\t
<ul class=\"dropdown-menu text-left categories-wrapper\">
<li>
<div>




<div class=\"clear\"></div>
<a href=\"en-mod-categories.html\" class=\"all-categories-link\">See all categories</a>

</li>
</ul>
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/menu-grid.gif"), "html", null, true);
        echo "\"/></a>
\t\t
\t\t
\t\t<ul id=\"top_menu\" class=\"top-menu rel-5 hide-sm\">
\t\t\t
                    ";
        // line 92
        if ($this->env->getExtension('security')->isGranted("ROLE_VENDOR")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("t_mall_client_listBoutique");
            echo "\">Create Stores</a></li>";
        }
        echo "\t\t\t\t
";
        // line 93
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("t_mall_client_boutiqueDetail");
            echo "\">Stores</a></li>";
        }
        // line 94
        echo "

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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!--/myheader -->
        
        <div class=\"main-back\">\t
<div class=\"container margin-top-10\">
        
        
        
     
           
        ";
        // line 136
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 138
        echo "            <!-- after content -->
            
            <!--/ after content -->
        </div>
</div>      
            <!-- footer -->
           
            <div  class=\"footer-section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t<h5>ABOUT</h5>
\t
\t\t\t\t\t\t<a class=\"upper\" href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("front");
        echo "\">Home</a>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<a class=\"upper\" href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("t_mall_client_aboutUs");
        echo "\">About us</a>
\t\t\t\t\t
\t\t\t\t\t\t<a class=\"upper\" href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("t_mall_client_contact_page");
        echo "\">Contact</a>
\t\t\t\t\t </div>

<div class=\"col-md-3\">
\t<h5>OUR OFFERS</h5>
\t
\t<a class=\"upper\" href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("t_mall_client_boutiqueDetail");
        echo "\">Stores</a>
\t

 </div>
<div id=\"socialMedia\" class=\"col-md-3 pull-right\">
\t<h5>SOCIAL MEDIA </h5>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/facebook.png"), "html", null, true);
        echo "\" title=\"facebook\" alt=\"facebook\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/twitter.png"), "html", null, true);
        echo "\" title=\"twitter\" alt=\"twitter\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/youtube.png"), "html", null, true);
        echo "\" title=\"youtube\" alt=\"youtube\"/></a>
 </div> 
\t\t </div>
\t\t<p class=\"pull-right\">2016 &copy; Tunisia Mall</p>
\t</div>
\t</div>
            <!--/ footer -->
       
       
    ";
        // line 180
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t

\t<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/login.js"), "html", null, true);
        echo "\"></script>
<div id=\"main-login-form\">
\t<a href=\"javascript:HideLogin()\"><img class=\"close-login-icon\" alt=\"close\" src=\"";
        // line 187
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
\t\t\t
\t\t\t<br/>
\t
\t<br/>
</div>
<div id=\"popup\" class=\"popup\">
\t
\tThe product was added successfully to your cart!\t<br/><br/>
\t<a class=\"underline-link\" href=\"javascript:ShowCart()\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/cart-m.png"), "html", null, true);
        echo "\"/></a>
\t<br/>
\t
</div>\t
<iframe id=\"ajax-ifr\" name=\"ajax-ifr\" src=\"Client/include/empty-page.html\" style=\"position:absolute;top:0px;left:0px;visibility:hidden\" width=\"1\" height=\"1\"> </iframe>


</body>

</html>
<script>
\t\t
\t\tfunction ShowCart()
\t\t{
\t\t\tdocument.location.href='';
\t\t}
\t\tif(parent.document.getElementById('Cart'))
\t\t\t\t{
\t\t\t\t\tparent.document.getElementById('Cart').innerHTML=\"Your cart is empty!\";
\t\t\t\t}
\t\t\t\t</script>
";
    }

    // line 136
    public function block_content($context, array $blocks = array())
    {
    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
    }

    // line 180
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 180,  378 => 137,  373 => 136,  347 => 224,  307 => 187,  302 => 185,  294 => 181,  292 => 180,  280 => 171,  276 => 170,  272 => 169,  263 => 163,  254 => 157,  249 => 155,  242 => 151,  227 => 138,  224 => 137,  222 => 136,  178 => 94,  172 => 93,  164 => 92,  156 => 87,  113 => 46,  106 => 45,  98 => 43,  83 => 42,  66 => 28,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/* <title>Tunisia Mall</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="description" content="">*/
/* <meta name="keywords" content="">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <link href="{{asset('Client/css/bootstrap.css')}}" rel="stylesheet"/>*/
/* <link rel="stylesheet" href="{{ asset('form_style.css') }}">*/
/* <link rel="stylesheet" href="{{asset('Client/css/common.css')}}">*/
/* <link rel="stylesheet" href="{{asset('Client/css/main.css')}}">*/
/* <script src="{{asset('Client/js/jquery.js')}}"></script>*/
/*         <!--/mycustomization -->*/
/*     </head>*/
/*     <body>*/
/*         <!--myheader -->*/
/*         */
/*         */
/*         <div id="header">*/
/* <div class="container">*/
/* <div class="row top-line-padding">*/
/* */
/* 	<div class="col-xs-4">*/
/* 	 <a class="pull-left" href="index.html"><img src="{{asset('Client/images/logooooooo.png')}}" class="site-logo" width="140"/></a>*/
/* 	*/
/* 	*/
/* 	*/
/* 	</div>*/
/* 	<div class="col-xs-8">*/
/* */
/* 		<a class="show-cart-link" href="javascript:ShowCart()">*/
/* */
/* </a>*/
/* 		*/
/* 		<div class="site-nav pull-right">*/
/* 		 <ul>*/
/*              <div class="toplogin">*/
/*                                 <p>{% if not is_granted("ROLE_USER") %}<a href="{{ path('fos_user_security_login') }}">Log IN</a> <span class="separator">|</span> <a href="{{ path('fos_user_registration_register') }}">REGISTER</a>{% endif %}{% if is_granted("ROLE_USER") %}<span class="separator">|</span> <a href="{{ path('fos_user_security_logout') }}">Logout</a> {% endif %}<a class="separator">|</a> {% if is_granted("ROLE_USER") %}*/
/*    <a href="{{ path('fos_user_profile_show') }}">  {{ app.user.username }} </a>*/
/* {% endif %}*/
/*   {% if  is_granted("ROLE_SUPER_ADMIN") %} <a class="separator">|</a> <a href="{{ path('tmall_admin_homepage') }}">Admin Page</a>{% endif %}*/
/* </p>*/
/*                             </div>    */
/* */
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
/* 		*/
/* 	*/
/* <ul class="dropdown-menu text-left categories-wrapper">*/
/* <li>*/
/* <div>*/
/* */
/* */
/* */
/* */
/* <div class="clear"></div>*/
/* <a href="en-mod-categories.html" class="all-categories-link">See all categories</a>*/
/* */
/* </li>*/
/* </ul>*/
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
/* 			*/
/*                     {% if is_granted("ROLE_VENDOR") %}<li><a href="{{path('t_mall_client_listBoutique')}}">Create Stores</a></li>{% endif %}				*/
/* {% if is_granted("ROLE_USER") %}<li><a href="{{path('t_mall_client_boutiqueDetail')}}">Stores</a></li>{% endif %}*/
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
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         <!--/myheader -->*/
/*         */
/*         <div class="main-back">	*/
/* <div class="container margin-top-10">*/
/*         */
/*         */
/*         */
/*      */
/*            */
/*         {% block content %}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*             <!-- after content -->*/
/*             */
/*             <!--/ after content -->*/
/*         </div>*/
/* </div>      */
/*             <!-- footer -->*/
/*            */
/*             <div  class="footer-section">*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-md-3">*/
/* 	<h5>ABOUT</h5>*/
/* 	*/
/* 						<a class="upper" href="{{path('front')}}">Home</a>*/
/* 					*/
/* 						*/
/* 					*/
/* 						<a class="upper" href="{{path('t_mall_client_aboutUs')}}">About us</a>*/
/* 					*/
/* 						<a class="upper" href="{{path('t_mall_client_contact_page')}}">Contact</a>*/
/* 					 </div>*/
/* */
/* <div class="col-md-3">*/
/* 	<h5>OUR OFFERS</h5>*/
/* 	*/
/* 	<a class="upper" href="{{path('t_mall_client_boutiqueDetail')}}">Stores</a>*/
/* 	*/
/* */
/*  </div>*/
/* <div id="socialMedia" class="col-md-3 pull-right">*/
/* 	<h5>SOCIAL MEDIA </h5>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/facebook.png')}}" title="facebook" alt="facebook"/></a>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/twitter.png')}}" title="twitter" alt="twitter"/></a>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/youtube.png')}}" title="youtube" alt="youtube"/></a>*/
/*  </div> */
/* 		 </div>*/
/* 		<p class="pull-right">2016 &copy; Tunisia Mall</p>*/
/* 	</div>*/
/* 	</div>*/
/*             <!--/ footer -->*/
/*        */
/*        */
/*     {% block javascripts %}{% endblock %}*/
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
/* 			*/
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
/* </html>*/
/* <script>*/
/* 		*/
/* 		function ShowCart()*/
/* 		{*/
/* 			document.location.href='';*/
/* 		}*/
/* 		if(parent.document.getElementById('Cart'))*/
/* 				{*/
/* 					parent.document.getElementById('Cart').innerHTML="Your cart is empty!";*/
/* 				}*/
/* 				</script>*/
/* */
