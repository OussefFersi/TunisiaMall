<?php

/* TMallVendorBundle:Default:coupons.html.twig */
class __TwigTemplate_fa9cd4a72fa03cb374d9b748cdaf17392e63ced25469578b0ca40d71d51750d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:coupons.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallVendorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
     <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<h1>Add a new Coupon</h1>

 
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group\">
    
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'widget');
        echo "
    
    </div>
    <div class=\"form-group\">
    
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget');
        echo "
    
    </div>
    
    <div class=\"form-group\">
    
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'errors');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'widget');
        echo "
     
    </div>
        
        
        <div class=\"form-group\">
    
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
     
    </div>
        
      
        
         
        
";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t


    
    
    



<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"> </script>




    
 \t<a class=\"small-tile green-back\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_listCoupon");
        echo "\"><img class=\"pull-right\" width=\"32\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/approved.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">List Coupons</h3>
  
    
    



\t\t
\t\t\t\t
\t\t<div class=\"clear\"></div>
\t\t<br><br>
\t</div>

    
    
    
    
    ";
        // line 84
        echo "<div class=\"navigation\">
    ";
        // line 85
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>




";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:coupons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 85,  170 => 84,  148 => 66,  139 => 60,  135 => 59,  122 => 49,  111 => 41,  107 => 40,  103 => 39,  93 => 32,  89 => 31,  85 => 30,  76 => 24,  72 => 23,  68 => 22,  60 => 17,  56 => 16,  52 => 15,  46 => 12,  42 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "TMallVendorBundle::layout.html.twig" %}*/
/* */
/* {% block container %}*/
/* */
/*      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <h1>Add a new Coupon</h1>*/
/* */
/*  */
/*     {# ... #}*/
/* {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.idCategorie) }}*/
/*         {{ form_errors(form.idCategorie) }}*/
/*         {{ form_widget(form.idCategorie) }}*/
/*     */
/*     </div>*/
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.code) }}*/
/*         {{ form_errors(form.code) }}*/
/*         {{ form_widget(form.code) }}*/
/*     */
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*     */
/*         {{ form_label(form.discount) }}*/
/*         {{ form_errors(form.discount) }}*/
/*         {{ form_widget(form.discount) }}*/
/*      */
/*     </div>*/
/*         */
/*         */
/*         <div class="form-group">*/
/*     */
/*         {{ form_label(form.description) }}*/
/*         {{ form_errors(form.description) }}*/
/*         {{ form_widget(form.description) }}*/
/*      */
/*     </div>*/
/*         */
/*       */
/*         */
/*          */
/*         */
/* {{ form_end(form) }}*/
/* 	*/
/* */
/* */
/*     */
/*     */
/*     */
/* */
/* */
/* */
/* <script src="{{asset('js/bootstrap.min.js')}}"> </script>*/
/* <script src="{{asset('js/jquery.js')}}"> </script>*/
/* */
/* */
/* */
/* */
/*     */
/*  	<a class="small-tile green-back" href="{{path('tmall_vendor_listCoupon')}}"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/approved.png')}}"><h3 class="h3-tile">List Coupons</h3>*/
/*   */
/*     */
/*     */
/* */
/* */
/* */
/* 		*/
/* 				*/
/* 		<div class="clear"></div>*/
/* 		<br><br>*/
/* 	</div>*/
/* */
/*     */
/*     */
/*     */
/*     */
/*     {# display navigation #}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
