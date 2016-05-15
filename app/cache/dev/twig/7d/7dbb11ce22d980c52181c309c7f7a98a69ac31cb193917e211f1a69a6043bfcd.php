<?php

/* TMallVendorBundle:Default:listCoupon.html.twig */
class __TwigTemplate_df9cd5361923b5ea75ece3c9176a231fb21d8b6941f4a6ad6b5158fd576430ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Default:listCoupon.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
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

\t<h3>Your current coupons</h3>

\t
\t
                <table class=\"table\" style=\"width :100%\">
    
        <th>Category</th>
        <th>Code</th>
        <th> Discount % </th>
        <th>Description</th>
        
        
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 19
            echo " 
    
    <tr data-id=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", array()), "html", null, true);
            echo "\">
    <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coupon"], "idCategorie", array()), "getNom", array(), "method"), "html", null, true);
            echo " </td> <br/>
    <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
            echo " </td> <br/>
    <td>   ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "discount", array()), "html", null, true);
            echo "   </td><br/>
    <td>   ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "description", array()), "html", null, true);
            echo "   </td><br/>
    
        <td> <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tmall_vendor_rejectCoupon", array("id" => $this->getAttribute($context["coupon"], "id", array()))), "html", null, true);
            echo "\" name=\"Rejected\" class=\"btn btn-danger\">Delete</a></td> <br/>

    
    
    </tr>
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    
  
    </table>  

    
    
    
    
    
    
       
    ";
        // line 47
        echo "<div class=\"navigation\">
    ";
        // line 48
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>


";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/js/data-coupon.js"), "html", null, true);
        echo "\"> </script>
    
";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Default:listCoupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  123 => 55,  120 => 54,  111 => 48,  108 => 47,  95 => 35,  81 => 27,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 19,  52 => 18,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/*    {%extends "TMallVendorBundle::layout.html.twig"%}*/
/* {% block container %}*/
/* */
/*     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* 	<h3>Your current coupons</h3>*/
/* */
/* 	*/
/* 	*/
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
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{parent()}}*/
/*     */
/*     <script src="{{asset('vendor/js/data-coupon.js')}}"> </script>*/
/*     */
/* {% endblock %}*/
