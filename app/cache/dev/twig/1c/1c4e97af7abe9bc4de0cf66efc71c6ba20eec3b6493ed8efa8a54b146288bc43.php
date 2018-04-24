<?php

/* TMallClientBundle:Default:product_details.html.twig */
class __TwigTemplate_ec1d9df45df9e1bf5efc8fb9b46e1db04e39f6740639ce8fde1dea118c86f421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TMallClientBundle::layout.html.twig", "TMallClientBundle:Default:product_details.html.twig", 2);
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
        echo "\t<div class=\"text-left no-left-padding col-md-9 min-height-300\">
\t\t
\t\t
<script>

function ValueChanged(x)
{
\tdocument.location.href=\"index6409.html?mod=details&amp;lang=en&amp;id=&amp;id=22&amp;item=\"+x.options[x.selectedIndex].value;
}

</script>


 

<a rel=\"nofollow\" href=\"http://plus.google.com/share?url=http://www.quixstore.com/product-sony-dschx-mp-22.html\" target=\"_blank\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/googleplus.gif"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" class=\"pull-right share-icon\" alt=\"\"/></a>
<a rel=\"nofollow\" href=\"http://www.twitter.com/intent/tweet?text=Sony+DSC-HX50%2C+18MP%2C+Wi-Fi&amp;url=http://www.quixstore.com/product-sony-dschx-mp-22.html\" target=\"_blank\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/twitter.gif"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" class=\"pull-right  share-icon\" alt=\"\"/></a>
<a rel=\"nofollow\" href=\"http://www.facebook.com/sharer.php?u=http://www.quixstore.com/product-sony-dschx-mp-22.html\" target=\"_blank\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/images/facebook.gif"), "html", null, true);
        echo "\" width=\"18\" height=\"18\" alt=\"\" class=\"pull-right share-icon\"/></a>
 

<h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</h3>

<hr/>
\t
<div class=\"col-md-5 no-left-padding\">
\t
\t<link rel=\"stylesheet\" href=\"css/prettyPhoto.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Client/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t<div class=\"final-result-image\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" rel=\"prettyPhoto[ad_gal]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Sony DSC-HX50, 18MP, Wi-Fi\"/></a></div>\t
\t<div class=\"clear\"></div><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" rel=\"prettyPhoto[ad_gal]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" width=\"100\" alt=\"Sony DSC-HX50, 18MP, Wi-Fi\"/></a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" rel=\"prettyPhoto[ad_gal]\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" width=\"100\" alt=\"Sony DSC-HX50, 18MP, Wi-Fi\"/></a><script type=\"text/javascript\" charset=\"utf-8\">
\t\t\$(document).ready(function()
\t\t{
\t\t\t\$(\"a[rel='prettyPhoto[ad_gal]']\").prettyPhoto({

\t\t\t});
\t\t});
\t\t</script>
</div>
<div class=\"col-md-7\">
\t";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo ".<br/><br/>description:<b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</b><br/><br/><br/>
        
        
       <form action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("t_mall_client_ajouter", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"get\" >


                        <select style=\"width:50px\" name=\"qte\" class=\"span1\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 300));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "                                
                                <option value=\"";
            // line 52
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                            
                        </select>
                                
                                <div>
                                    </br>
                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                        </div>
    </form> 
        
        
        
        
        
        
        
        
        
</div>
<div class=\"clear\"></div>
<br/>
<div class=\"pull-left\">
\t<span class=\"price_style\">Price: ¢";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</span><br/></span>  
</div>

<div class=\"clear\"></div>
<hr/>

\t\t<div class=\"clear\"></div>
\t\t
<br/><br/><br/>


\t\t
\t\t</div> 

\t";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:product_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 76,  134 => 55,  123 => 52,  120 => 51,  116 => 50,  109 => 46,  101 => 43,  82 => 33,  76 => 32,  72 => 31,  62 => 24,  56 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {%extends "TMallClientBundle::layout.html.twig"%}*/
/* {% block content %}*/
/* 	<div class="text-left no-left-padding col-md-9 min-height-300">*/
/* 		*/
/* 		*/
/* <script>*/
/* */
/* function ValueChanged(x)*/
/* {*/
/* 	document.location.href="index6409.html?mod=details&amp;lang=en&amp;id=&amp;id=22&amp;item="+x.options[x.selectedIndex].value;*/
/* }*/
/* */
/* </script>*/
/* */
/* */
/*  */
/* */
/* <a rel="nofollow" href="http://plus.google.com/share?url=http://www.quixstore.com/product-sony-dschx-mp-22.html" target="_blank"><img src="{{asset('Client/images/googleplus.gif')}}" width="18" height="18" class="pull-right share-icon" alt=""/></a>*/
/* <a rel="nofollow" href="http://www.twitter.com/intent/tweet?text=Sony+DSC-HX50%2C+18MP%2C+Wi-Fi&amp;url=http://www.quixstore.com/product-sony-dschx-mp-22.html" target="_blank"><img src="{{asset('Client/images/twitter.gif')}}" width="18" height="18" class="pull-right  share-icon" alt=""/></a>*/
/* <a rel="nofollow" href="http://www.facebook.com/sharer.php?u=http://www.quixstore.com/product-sony-dschx-mp-22.html" target="_blank"><img src="{{asset('Client/images/facebook.gif')}}" width="18" height="18" alt="" class="pull-right share-icon"/></a>*/
/*  */
/* */
/* <h3>{{entity.titre}}</h3>*/
/* */
/* <hr/>*/
/* 	*/
/* <div class="col-md-5 no-left-padding">*/
/* 	*/
/* 	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />*/
/* 	<script src="{{asset('Client/js/jquery.prettyPhoto.js')}}" type="text/javascript" charset="utf-8"></script>*/
/* 	<div class="final-result-image"><a href="{{asset(''~ entity.photo.path ~'')}}" rel="prettyPhoto[ad_gal]"><img src="{{asset(''~ entity.photo.path ~'')}}" class="img-responsive" alt="Sony DSC-HX50, 18MP, Wi-Fi"/></a></div>	*/
/* 	<div class="clear"></div><a href="{{asset(''~ entity.photo.path ~'')}}" rel="prettyPhoto[ad_gal]"><img src="{{asset(''~ entity.photo.path ~'')}}" width="100" alt="Sony DSC-HX50, 18MP, Wi-Fi"/></a><a href="{{asset(''~ entity.photo.path ~'')}}" rel="prettyPhoto[ad_gal]"><img src="{{asset(''~ entity.photo.path ~'')}}" width="100" alt="Sony DSC-HX50, 18MP, Wi-Fi"/></a><script type="text/javascript" charset="utf-8">*/
/* 		$(document).ready(function()*/
/* 		{*/
/* 			$("a[rel='prettyPhoto[ad_gal]']").prettyPhoto({*/
/* */
/* 			});*/
/* 		});*/
/* 		</script>*/
/* </div>*/
/* <div class="col-md-7">*/
/* 	{{entity.titre}}.<br/><br/>description:<b>{{entity.description}}</b><br/><br/><br/>*/
/*         */
/*         */
/*        <form action="{{ path('t_mall_client_ajouter', { 'id' : entity.id }) }}" method="get" >*/
/* */
/* */
/*                         <select style="width:50px" name="qte" class="span1">*/
/*                             {% for i in 1..300 %}*/
/*                                 */
/*                                 <option value="{{ i}}">{{ i}}</option>*/
/*                                 */
/*                                 {% endfor %}*/
/*                             */
/*                         </select>*/
/*                                 */
/*                                 <div>*/
/*                                     </br>*/
/*                             <button class="btn btn-primary">Ajouter au panier</button>*/
/*                         </div>*/
/*     </form> */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/* </div>*/
/* <div class="clear"></div>*/
/* <br/>*/
/* <div class="pull-left">*/
/* 	<span class="price_style">Price: ¢{{entity.prix}}</span><br/></span>  */
/* </div>*/
/* */
/* <div class="clear"></div>*/
/* <hr/>*/
/* */
/* 		<div class="clear"></div>*/
/* 		*/
/* <br/><br/><br/>*/
/* */
/* */
/* 		*/
/* 		</div> */
/* */
/* 	{% endblock %}*/
/* */
