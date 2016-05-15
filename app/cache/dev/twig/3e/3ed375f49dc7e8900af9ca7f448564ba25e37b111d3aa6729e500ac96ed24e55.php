<?php

/* TMallClientBundle:Default:aboutUs.html.twig */
class __TwigTemplate_98a133c278b72a358261ad6f47bab90c6a007fbb558026a861b6c3d92cf1bea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallClientBundle::layout.html.twig", "TMallClientBundle:Default:aboutUs.html.twig", 1);
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

    </br>
    </br>
    </br>
    <center><h1><B><i style=\"color: #08c\">Tunisia Mall</h1></B></i></center>
    </br>
  
    
    </br>
    <table border=\"5\">
        <th>
         

        <div id=\"googleMap\" style=\"width:800px;height:500px;text-align: center\" ></div>   
\t\t
    </th>\t
</table> 
    </br>
    <center><h1><B><i style=\"color: #08c\">presentation</h1></B></i></center>
    </br>
   
    <div><h4>The extension of the first shopping center Mall Tunisia, recently opened to 
        the Berges du Lac 2, will be open before the end of 2016. The cost of the project, 
        which extends over an area of 21 000 m2, amounts to 55 million dinars (MD).
Tunisia Mall will have 4 theaters 7D, a children's area and a car park with a capacity of
400 cars and is expected to employ about 500 people.</h4></div>
   </div>  
";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:aboutUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "TMallClientBundle::layout.html.twig"%}*/
/* {% block content %}*/
/*     */
/*    */
/* <div class="text-left no-left-padding col-md-9 min-height-300">*/
/* */
/*     </br>*/
/*     </br>*/
/*     </br>*/
/*     <center><h1><B><i style="color: #08c">Tunisia Mall</h1></B></i></center>*/
/*     </br>*/
/*   */
/*     */
/*     </br>*/
/*     <table border="5">*/
/*         <th>*/
/*          */
/* */
/*         <div id="googleMap" style="width:800px;height:500px;text-align: center" ></div>   */
/* 		*/
/*     </th>	*/
/* </table> */
/*     </br>*/
/*     <center><h1><B><i style="color: #08c">presentation</h1></B></i></center>*/
/*     </br>*/
/*    */
/*     <div><h4>The extension of the first shopping center Mall Tunisia, recently opened to */
/*         the Berges du Lac 2, will be open before the end of 2016. The cost of the project, */
/*         which extends over an area of 21 000 m2, amounts to 55 million dinars (MD).*/
/* Tunisia Mall will have 4 theaters 7D, a children's area and a car park with a capacity of*/
/* 400 cars and is expected to employ about 500 people.</h4></div>*/
/*    </div>  */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
