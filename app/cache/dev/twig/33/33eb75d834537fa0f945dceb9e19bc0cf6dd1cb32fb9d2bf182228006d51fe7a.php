<?php

/* TMallClientBundle:Default:Contact.html.twig */
class __TwigTemplate_ee1249d81d06b186e8e0c3cbf34ddecdd3f90d9b5bfa785b00e0cca157bdd25c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallClientBundle::layout.html.twig", "TMallClientBundle:Default:Contact.html.twig", 1);
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
    
    <p style=\"text-align: center \" > <B><i><h1 style=\"color: #08c\">Reclamtion : </h1></i></B>\t</p>
         ";
        // line 8
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != null)) {
            // line 9
            echo "         <span class=\"btn btn-success\" style=\"margin-left:300px\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
         
   ";
        } elseif ((        // line 11
(isset($context["message2"]) ? $context["message2"] : $this->getContext($context, "message2")) != null)) {
            // line 12
            echo "       <span class=\"btn btn-danger\" style=\"margin-left:300px\">";
            echo twig_escape_filter($this->env, (isset($context["message2"]) ? $context["message2"] : $this->getContext($context, "message2")), "html", null, true);
            echo "</span>
         ";
        }
        // line 14
        echo "         <br/>
         <br/>
       
         
<form id=\"main\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("t_mall_client_mail");
        echo "\" method=\"POST\"  enctype=\"multipart/form-data\">
\t\t\t<input type=\"hidden\" name=\"page\" value=\"en_Contact\"/>
\t\t
\t<input type=\"hidden\" name=\"SubmitContact\" value=\"1\"/>
\t<fieldset>
\t\t<legend>please enter your message :</legend>
\t\t<ol>
\t\t\t<li>
\t\t\t\t<label for=\"subject\">Subject : 
\t\t\t\t<br>
\t\t\t\t
\t\t\t\t</label>
\t\t\t\t<input id=\"subject\"  name=\"subject\" placeholder=\"\" type=\"text\" required/>
\t\t\t
\t\t\t</li>
                        <li>
                            <label for=\"subject\" >Your mail  <image src=\"http://www.geeky-gadgets.com/wp-content/uploads/2012/03/Gmail-iOS-App.jpg\" width=\"50\" height=\"20\" />
\t\t\t\t<br>
\t\t\t\t
\t\t\t\t</label>
\t\t\t\t<input id=\"subject\"  name=\"mail\" placeholder=\"\" type=\"text\" required/>
\t\t\t
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<label for=\"description\">Reclamation : 
\t\t\t\t<br>
\t\t\t\t
\t\t\t\t</label>
\t\t\t\t<textarea id=\"message\" name=\"reclamation\" rows=\"8\" required></textarea>
\t\t\t
                        </li>
                       
                <button class=\"btn btn-primary pull-right\" type=\"submit\">Submit</button>        
                       
</form>
    

    

 
\t\t
\t\t</div> 
                
    
";
    }

    public function getTemplateName()
    {
        return "TMallClientBundle:Default:Contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  54 => 14,  48 => 12,  46 => 11,  40 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "TMallClientBundle::layout.html.twig"%}*/
/* {% block content %}*/
/*     */
/*    */
/* <div class="text-left no-left-padding col-md-9 min-height-300">*/
/*     */
/*     <p style="text-align: center " > <B><i><h1 style="color: #08c">Reclamtion : </h1></i></B>	</p>*/
/*          {% if message!=null %}*/
/*          <span class="btn btn-success" style="margin-left:300px">{{message}}</span>*/
/*          */
/*    {% elseif message2!=null  %}*/
/*        <span class="btn btn-danger" style="margin-left:300px">{{message2}}</span>*/
/*          {% endif %}*/
/*          <br/>*/
/*          <br/>*/
/*        */
/*          */
/* <form id="main" action="{{ path('t_mall_client_mail')}}" method="POST"  enctype="multipart/form-data">*/
/* 			<input type="hidden" name="page" value="en_Contact"/>*/
/* 		*/
/* 	<input type="hidden" name="SubmitContact" value="1"/>*/
/* 	<fieldset>*/
/* 		<legend>please enter your message :</legend>*/
/* 		<ol>*/
/* 			<li>*/
/* 				<label for="subject">Subject : */
/* 				<br>*/
/* 				*/
/* 				</label>*/
/* 				<input id="subject"  name="subject" placeholder="" type="text" required/>*/
/* 			*/
/* 			</li>*/
/*                         <li>*/
/*                             <label for="subject" >Your mail  <image src="http://www.geeky-gadgets.com/wp-content/uploads/2012/03/Gmail-iOS-App.jpg" width="50" height="20" />*/
/* 				<br>*/
/* 				*/
/* 				</label>*/
/* 				<input id="subject"  name="mail" placeholder="" type="text" required/>*/
/* 			*/
/* 			</li>*/
/* 			<li>*/
/* 				<label for="description">Reclamation : */
/* 				<br>*/
/* 				*/
/* 				</label>*/
/* 				<textarea id="message" name="reclamation" rows="8" required></textarea>*/
/* 			*/
/*                         </li>*/
/*                        */
/*                 <button class="btn btn-primary pull-right" type="submit">Submit</button>        */
/*                        */
/* </form>*/
/*     */
/* */
/*     */
/* */
/*  */
/* 		*/
/* 		</div> */
/*                 */
/*     */
/* {% endblock %}*/
/* */
