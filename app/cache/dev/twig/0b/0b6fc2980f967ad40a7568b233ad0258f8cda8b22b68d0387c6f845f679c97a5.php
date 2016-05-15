<?php

/* TMallVendorBundle:Default:addCoupon.html.twig */
class __TwigTemplate_b1d4b7ce555b615270bd767011b09cee0a5ba2fbcad7da4ab1f43b4cf89c6997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:addCoupon.html.twig", 1);
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<h1>Add a new Coupon</h1>

 
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group\">
    
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'label');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idCategorie", array()), 'widget');
        echo "
    
    </div>
    <div class=\"form-group\">
    
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget');
        echo "
    
    </div>
    
    <div class=\"form-group\">
    
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'errors');
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount", array()), 'widget');
        echo "
     
    </div>
        
        
        <div class=\"form-group\">
    
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
     
    </div>
        
      
        
         
        
";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t


<h3> your current coupons </h3>


                <table class=\"table\" style=\"width :100%\">
    
        <th>Category</th>
        <th>Code</th>
        <th> Discount % </th>
        <th>Description</th>
        
        
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 64
            echo " 
    
    <tr data-id=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", array()), "html", null, true);
            echo "\">
    <td> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coupon"], "idCategorie", array()), "getNom", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
            echo " </td> <br/>
    <td>   ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "discount", array()), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "description", array()), "html", null, true);
            echo "   </td><br/>
    
        <td> <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_rejectCoupon", array("id" => $this->getAttribute($context["coupon"], "id", array()))), "html", null, true);
            echo "\" name=\"Rejected\" class=\"btn btn-danger\">Delete</a></td> <br/>

    
    
    </tr>
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    
  
    </table>  

    
    
    
    
    
    
       
    ";
        // line 92
        echo "<div class=\"navigation\">
    ";
        // line 93
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>








\t<a class=\"small-tile green-back\" href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_listCoupon");
        echo "\"><img class=\"pull-right\" width=\"32\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/approved.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">liste Coupons</h3>



<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"> </script>






";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:addCoupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 108,  221 => 107,  212 => 103,  199 => 93,  196 => 92,  183 => 80,  169 => 72,  164 => 70,  160 => 69,  156 => 68,  152 => 67,  148 => 66,  144 => 64,  140 => 63,  122 => 48,  111 => 40,  107 => 39,  103 => 38,  93 => 31,  89 => 30,  85 => 29,  76 => 23,  72 => 22,  68 => 21,  60 => 16,  56 => 15,  52 => 14,  46 => 11,  42 => 10,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "TMallVendorBundle::layout.html.twig"%}*/
/* {% block container %}*/
/* */
/*     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
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
/* <h3> your current coupons </h3>*/
/* */
/* */
/*                 <table class="table" style="width :100%">*/
/*     */
/*         <th>Category</th>*/
/*         <th>Code</th>*/
/*         <th> Discount % </th>*/
/*         <th>Description</th>*/
/*         */
/*         */
/*         {% for coupon in pagination %}*/
/*  */
/*     */
/*     <tr data-id="{{coupon.id}}">*/
/*     <td> {{coupon.idCategorie.getNom()}} </td> <br/>*/
/*     <td> {{coupon.code}} </td> <br/>*/
/*     <td>   {{coupon.discount}}   </td><br/>*/
/*     <td>   {{coupon.description}}   </td><br/>*/
/*     */
/*         <td> <a href="{{path('tmall_vendor_rejectCoupon',{'id':coupon.id})}}" name="Rejected" class="btn btn-danger">Delete</a></td> <br/>*/
/* */
/*     */
/*     */
/*     </tr>*/
/*     */
/* */
/*     {% endfor %}*/
/*     */
/*   */
/*     </table>  */
/* */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*        */
/*     {# display navigation #}*/
/* <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* 	<a class="small-tile green-back" href="{{path('tmall_vendor_listCoupon')}}"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/approved.png')}}"><h3 class="h3-tile">liste Coupons</h3>*/
/* */
/* */
/* */
/* <script src="{{asset('js/bootstrap.min.js')}}"> </script>*/
/* <script src="{{asset('js/jquery.js')}}"> </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
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
