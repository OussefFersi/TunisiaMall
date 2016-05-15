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

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "   
<div class=\"container\">\t
\t
\t<div id=\"main_content\" class=\"text-left col-md-12 min-height-300\">
\t\t
\t\t<div class=\"fright\">
\t<a class=\"small-tile green-back\" href=\"index.php?category=products_manager&amp;action=products_add\"><img class=\"pull-right\" width=\"32\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/products_add.png"), "html", null, true);
        echo "\"><h3 class=\"h3-tile\">Add New Product</h3>
\t</a><a class=\"small-tile lila-back\" href=\"index.php?category=products_manager&amp;action=products_export\"><img class=\"pull-right\" width=\"32\" src=\"";
        // line 12
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
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("TMallVendorBundle:produit:recherche"), array());
        // line 25
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
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
                <td><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" class=\"hover\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo", array()), "path", array())) . "")), "html", null, true);
        echo "\" width=\"100\" height=\"60\"></a></td>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantity", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "nom", array()), "html", null, true);
        echo "</td>
                
                
                    
                <td><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/icons/options_add.png"), "html", null, true);
        echo "\" height=\"23\"  border=\"0\"></a></td>
                    
                   
                    <td><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendor/images/edit-icon.gif"), "html", null, true);
        echo "\" border=\"0\">   </a></td>
                    
                    
                
            </tr>
                                                                    
        </tbody>
    </table>
        ";
        // line 67
        echo "        <div class=\"navigation\">
   
      </div>
                </div>
\t\t</div> 
\t\t\t\t
\t\t<div class=\"clear\"></div>
\t\t<br><br>
\t</div>

        <ul>
        <li>
            <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("produit_new", array("id" => 1));
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
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
        return array (  144 => 79,  130 => 67,  117 => 58,  109 => 55,  102 => 51,  98 => 50,  94 => 49,  88 => 48,  84 => 47,  60 => 25,  58 => 24,  43 => 12,  39 => 11,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "TMallVendorBundle::layout.html.twig" %}*/
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
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('produit_new',{'id':1}) }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
