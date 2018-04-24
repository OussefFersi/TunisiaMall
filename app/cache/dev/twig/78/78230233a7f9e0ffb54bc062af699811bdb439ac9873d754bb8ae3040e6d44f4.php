<?php

/* TMallVendorBundle::layout.html.twig */
class __TwigTemplate_99713fb01bba39a7ad068b49ef8fe781e9fc262256070b940ad073fc0cacd62d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<title>Vendors Admin Panel</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"/>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/css/common.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/css/main.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/css/admin.css"), "html", null, true);
        echo "\"/>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/js/context_menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/js/admin.js"), "html", null, true);
        echo "\"></script>
</head>
<body>

<div id=\"header\">
<div  class=\"container\">



<div class=\"row top-line-padding\">

\t<div class=\"col-md-3\">
\t\t
\t\t<a href=\"index.php\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/logooooooo.png"), "html", null, true);
        echo "\" class=\"site-logo\" width=\"170\"/></a>
\t\t
\t</div>
\t
\t<div class=\"col-md-9 text-right\">
\t
\t\t<a class=\"underline-link language-link left-margin-20px\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("front");
        echo "\">Home</a> <a class=\"underline-link language-link left-margin-20px\" href=\"";
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_MyStores");
        echo "\" target=\"_blank\">My Store</a> 
\t 
";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "<a class=\"underline-link language-link left-margin-20px\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a> ";
        }
        echo "  
";
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 39
            echo "<a class=\"underline-link language-link left-margin-20px\" >  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </a>
";
        }
        // line 40
        echo "\t
\t\t
\t
\t</div>
</div>

<!-- navbar -->
";
        // line 47
        $this->displayBlock('navbar', $context, $blocks);
        // line 51
        echo "<!-- navbar -->


</div>
</div>


<div class=\"clear\"></div>




<!-- code here -->

";
        // line 65
        $this->displayBlock('container', $context, $blocks);
        // line 66
        echo "

























<!-- code here -->


<div  class=\"footer-section\">
\t<div class=\"container\">
\t
\t\t<div class=\"row\">
\t\t\t
<div class=\"col-sm-2 no-right-padding\">
\t<h5>SOCIAL MEDIA </h5>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/facebook.png"), "html", null, true);
        echo "\" title=\"facebook\" alt=\"facebook\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/twitter.png"), "html", null, true);
        echo "\" title=\"twitter\" alt=\"twitter\"/></a>
\t<a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/youtube.png"), "html", null, true);
        echo "\" title=\"youtube\" alt=\"youtube\"/></a>
 </div> 




<div class=\"col-sm-2 no-right-padding\">
<h5 class=\"upper\">Information</h5>
<a class=\"upper admin-bottom-link\" href=\"\">Reports</a>
<a class=\"upper admin-bottom-link\" href=\"\">Orders</a>
<a class=\"upper admin-bottom-link\" href=\"\">Referrals</a>
</div>\t
\t\t</div>
\t\t
\t</div>
</div>

\t
\t<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
<div id=\"ContextMenuContainer\"></div>
<iframe id=\"ajax-ifr\" name=\"ajax-ifr\" src=\"vendor/include/empty-page.php\" style=\"position:absolute;top:0px;left:0px;visibility:hidden\" width=\"1\" height=\"1\"> </iframe>
\t

</body>
</html>
</html>";
    }

    // line 47
    public function block_navbar($context, array $blocks = array())
    {
        // line 48
        echo "

";
    }

    // line 65
    public function block_container($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 65,  222 => 48,  219 => 47,  206 => 122,  185 => 104,  181 => 103,  177 => 102,  139 => 66,  137 => 65,  121 => 51,  119 => 47,  110 => 40,  104 => 39,  102 => 38,  94 => 37,  87 => 35,  78 => 29,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 8,  21 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <title>Vendors Admin Panel</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <link href="{{asset('vendor/css/base.css')}}" rel="stylesheet" media="screen"/>*/
/* <link href="{{asset('vendor/css/bootstrap.css')}}" rel="stylesheet"/>*/
/* <link rel="stylesheet" href="{{asset('vendor/css/common.css')}}">*/
/* <link rel="stylesheet" href="{{asset('vendor/css/main.css')}}">*/
/* <link rel="stylesheet" href="{{asset('vendor/css/admin.css')}}"/>*/
/* <script type="text/javascript" src="{{asset('vendor/js/context_menu.js')}}"></script>*/
/* <script src="{{asset('vendor/js/jquery.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('vendor/js/jquery-ui.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('vendor/js/admin.js')}}"></script>*/
/* </head>*/
/* <body>*/
/* */
/* <div id="header">*/
/* <div  class="container">*/
/* */
/* */
/* */
/* <div class="row top-line-padding">*/
/* */
/* 	<div class="col-md-3">*/
/* 		*/
/* 		<a href="index.php"><img src="{{asset('Client/images/logooooooo.png')}}" class="site-logo" width="170"/></a>*/
/* 		*/
/* 	</div>*/
/* 	*/
/* 	<div class="col-md-9 text-right">*/
/* 	*/
/* 		<a class="underline-link language-link left-margin-20px" href="{{path('front')}}">Home</a> <a class="underline-link language-link left-margin-20px" href="{{path('tmall_vendor_MyStores')}}" target="_blank">My Store</a> */
/* 	 */
/* {% if is_granted("ROLE_USER") %}<a class="underline-link language-link left-margin-20px" href="{{ path('fos_user_security_logout') }}">Logout</a> {% endif %}  */
/* {% if is_granted("ROLE_USER") %}*/
/* <a class="underline-link language-link left-margin-20px" >  {{ app.user.username }} </a>*/
/* {% endif %}	*/
/* 		*/
/* 	*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- navbar -->*/
/* {% block navbar %}*/
/* */
/* */
/* {% endblock %}*/
/* <!-- navbar -->*/
/* */
/* */
/* </div>*/
/* </div>*/
/* */
/* */
/* <div class="clear"></div>*/
/* */
/* */
/* */
/* */
/* <!-- code here -->*/
/* */
/* {% block container %}{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* <!-- code here -->*/
/* */
/* */
/* <div  class="footer-section">*/
/* 	<div class="container">*/
/* 	*/
/* 		<div class="row">*/
/* 			*/
/* <div class="col-sm-2 no-right-padding">*/
/* 	<h5>SOCIAL MEDIA </h5>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/facebook.png')}}" title="facebook" alt="facebook"/></a>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/twitter.png')}}" title="twitter" alt="twitter"/></a>*/
/* 	<a href="#"><img width="60" height="60" src="{{asset('Client/images/youtube.png')}}" title="youtube" alt="youtube"/></a>*/
/*  </div> */
/* */
/* */
/* */
/* */
/* <div class="col-sm-2 no-right-padding">*/
/* <h5 class="upper">Information</h5>*/
/* <a class="upper admin-bottom-link" href="">Reports</a>*/
/* <a class="upper admin-bottom-link" href="">Orders</a>*/
/* <a class="upper admin-bottom-link" href="">Referrals</a>*/
/* </div>	*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* </div>*/
/* */
/* 	*/
/* 	<script src="{{asset('vendor/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* 	*/
/* <div id="ContextMenuContainer"></div>*/
/* <iframe id="ajax-ifr" name="ajax-ifr" src="vendor/include/empty-page.php" style="position:absolute;top:0px;left:0px;visibility:hidden" width="1" height="1"> </iframe>*/
/* 	*/
/* */
/* </body>*/
/* </html>*/
/* </html>*/
