<?php

/* TMallVendorBundle:Product:presentation.html.twig */
class __TwigTemplate_6240fde72587e7f5dd9ca42861b6f271878c131d736649329aaed746283c45fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TMallVendorBundle::layout.html.twig", "TMallVendorBundle:Product:presentation.html.twig", 2);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
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

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        // line 6
        echo "    
    
  <div class=\"navbar\">

  <div class=\"top-bar\">
  
\t<div class=\"row\">
  
\t\t<div class=\"pull-left visible-xs visible-sm padding_5 left_padding_15\">
\t\t\t<a href=\"javascript:ShowHide('nav_menu')\" class=\"expand_menu_link\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/menu-grid.gif"), "html", null, true);
        echo "\" alt=\"expand menu\"/> &nbsp; Menu</a>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
        <div id=\"nav_menu\" class=\"navbar-collapse\">
          <ul class=\"main-top-menu nav navbar-nav\">
            
<li class=\"dropdown\"><a class=\"main-top-link\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tmall_vendor_MyStores");
        echo "\">My Stores</a>

</li>






\t\t </ul>
\t\t\t\t\t
        </div>  
\t
\t</div>
\t
  </div>
</div>
  
    
    
    
    
    
    
    
    
    
    
    
    
    
";
    }

    // line 54
    public function block_container($context, array $blocks = array())
    {
        // line 55
        echo "   
<div class=\"container\">\t
\t
\t<div id=\"main_content\" class=\"text-left col-md-12 min-height-300\">
\t\t
\t\t<div class=\"fright\">
\t<a class=\"small-tile green-back\" href=\"index.php?category=products_manager&amp;action=products_add\"><img class=\"pull-right\" width=\"32\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/products_add.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Add New Product</h3>
\t</a><a class=\"small-tile lila-back\" href=\"index.php?category=products_manager&amp;action=products_export\"><img class=\"pull-right\" width=\"32\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/default.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Export or Import</h3>
\t</a></div>
<div class=\"clear\"></div>
<br>
<h3 class=\"no-margin\">My Products</h3>




\t
\t
<div class=\"pull-right\" style=\"position:relative;top:-10px\">
    ";
        // line 74
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TMallVendorBundle:produit:recherche"), array());
        // line 75
        echo "    
\t\t</div>
\t\t<div class=\"clear\"></div>
                
                <div class=\"table-responsive\">
    <table class=\"table table-hover admin-table\">
        <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Image</th>
                <th>Prix</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Show</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
       
            <tr bgcolor=\"#ffffff\">
                <td><input title=\"catalogAdd\" type=\"checkbox\" name=\"CheckList[]\" value=\"\" ></td>
                <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
                <td><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" class=\"hover\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" width=\"100\" height=\"60\"></a></td>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantity", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "nom", array()), "html", null, true);
        echo "</td>
                
                
                    
                <td><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/options_add.png"), "html", null, true);
        echo "\" height=\"23\"  border=\"0\"></a></td>
                    
                   
                    <td><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/edit-icon.gif"), "html", null, true);
        echo "\" border=\"0\">   </a></td>
                    
                    
                
            </tr>
                                                                    
        </tbody>
    </table>
        ";
        // line 117
        echo "        <div class=\"navigation\">
   
      </div>
                </div>
\t\t</div> 
\t\t\t\t
\t\t<div class=\"clear\"></div>
\t\t<br><br>
\t</div>

        
    ";
    }

    public function getTemplateName()
    {
        return "TMallVendorBundle:Product:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 117,  177 => 108,  169 => 105,  162 => 101,  158 => 100,  154 => 99,  148 => 98,  144 => 97,  120 => 75,  118 => 74,  103 => 62,  99 => 61,  91 => 55,  88 => 54,  52 => 21,  43 => 15,  32 => 6,  29 => 5,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "TMallVendorBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block navbar %}*/
/*     */
/*     */
/*   <div class="navbar">*/
/* */
/*   <div class="top-bar">*/
/*   */
/* 	<div class="row">*/
/*   */
/* 		<div class="pull-left visible-xs visible-sm padding_5 left_padding_15">*/
/* 			<a href="javascript:ShowHide('nav_menu')" class="expand_menu_link"><img src="{{asset('vendor/images/menu-grid.gif')}}" alt="expand menu"/> &nbsp; Menu</a>*/
/* 		</div>*/
/* 		<div class="clearfix"></div>*/
/*         <div id="nav_menu" class="navbar-collapse">*/
/*           <ul class="main-top-menu nav navbar-nav">*/
/*             */
/* <li class="dropdown"><a class="main-top-link" href="{{path('tmall_vendor_MyStores')}}">My Stores</a>*/
/* */
/* </li>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* 		 </ul>*/
/* 					*/
/*         </div>  */
/* 	*/
/* 	</div>*/
/* 	*/
/*   </div>*/
/* </div>*/
/*   */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* {% endblock %}*/
/* */
/* {% block container %}*/
/*    */
/* <div class="container">	*/
/* 	*/
/* 	<div id="main_content" class="text-left col-md-12 min-height-300">*/
/* 		*/
/* 		<div class="fright">*/
/* 	<a class="small-tile green-back" href="index.php?category=products_manager&amp;action=products_add"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/products_add.png')}}"><h3 class="h3-tile">Add New Product</h3>*/
/* 	</a><a class="small-tile lila-back" href="index.php?category=products_manager&amp;action=products_export"><img class="pull-right" width="32" src="{{asset('vendor/images/icons/default.png')}}"><h3 class="h3-tile">Export or Import</h3>*/
/* 	</a></div>*/
/* <div class="clear"></div>*/
/* <br>*/
/* <h3 class="no-margin">My Products</h3>*/
/* */
/* */
/* */
/* */
/* 	*/
/* 	*/
/* <div class="pull-right" style="position:relative;top:-10px">*/
/*     {% render(controller('TMallVendorBundle:produit:recherche'))%}*/
/*     */
/* 		</div>*/
/* 		<div class="clear"></div>*/
/*                 */
/*                 <div class="table-responsive">*/
/*     <table class="table table-hover admin-table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th></th>*/
/*                 <th>Title</th>*/
/*                 <th>Image</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Quantity</th>*/
/*                 <th>Category</th>*/
/*                 <th>Show</th>*/
/*                 <th>Edit</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*        */
/*             <tr bgcolor="#ffffff">*/
/*                 <td><input title="catalogAdd" type="checkbox" name="CheckList[]" value="" ></td>*/
/*                 <td>{{ entity.titre }}</td>*/
/*                 <td><a href="{{asset(''~ entity.photo.path ~'')}}" class="hover"><img src="{{asset(''~ entity.photo.path ~'')}}" width="100" height="60"></a></td>*/
/*                 <td>{{ entity.prix }}</td>*/
/*                 <td>{{ entity.quantity }}</td>*/
/*                 <td>{{entity.category.nom}}</td>*/
/*                 */
/*                 */
/*                     */
/*                 <td><a href="{{ path('produit_show', { 'id': entity.id }) }}"><img src="{{asset('vendor/images/icons/options_add.png')}}" height="23"  border="0"></a></td>*/
/*                     */
/*                    */
/*                     <td><a href="{{ path('produit_edit', { 'id': entity.id }) }}"><img src="{{asset('vendor/images/edit-icon.gif')}}" border="0">   </a></td>*/
/*                     */
/*                     */
/*                 */
/*             </tr>*/
/*                                                                     */
/*         </tbody>*/
/*     </table>*/
/*         {# display navigation #}*/
/*         <div class="navigation">*/
/*    */
/*       </div>*/
/*                 </div>*/
/* 		</div> */
/* 				*/
/* 		<div class="clear"></div>*/
/* 		<br><br>*/
/* 	</div>*/
/* */
/*         */
/*     {% endblock %}*/
/* */
