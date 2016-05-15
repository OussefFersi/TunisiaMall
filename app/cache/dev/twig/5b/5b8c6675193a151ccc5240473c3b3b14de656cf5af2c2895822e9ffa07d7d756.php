<?php

/* TmallAdminBundle:Default:stores_users.html.twig */
class __TwigTemplate_ec8f59102f3a9c3e680e0202fc7bfc18299cf1288ffe237510bdf01ac6c128cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TMallClientBundle::admin_layout.html.twig", "TmallAdminBundle:Default:stores_users.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TMallClientBundle::admin_layout.html.twig";
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
            <div id=\"page-wrapper\">
<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\" id=\"main-content\"><script>


</script>


<div class=\"fright\">

<a class=\"small-tile blue-back\" href=\"index.php?category=home&amp;action=welcome\"><img class=\"hide-sm pull-right\" width=\"32\" src=\"images/icons/welcome.png\"><h3 class=\"h3-tile\">Dashboard</h3>
\t</a>\t\t
\t
</div>
<div class=\"clear\"></div>
<h3>
Received messages</h3>
<div style=\"float:right\">
\t\t<form action=\"index.php\" method=\"post\">
\t\t
\t\t
\t\t<input type=\"hidden\" name=\"category\" value=\"home\"><input type=\"hidden\" name=\"action\" value=\"messages\">
\t\tSearch in <select name=\"comboSearch\"><option value=\"date\">Date</option><option value=\"name\">Name</option><option value=\"email\">Email</option><option value=\"phone\">Phone</option><option value=\"subject\">Subject</option><option value=\"message\">Message</option></select> 
\t\t&nbsp; 
\t\t<input value=\"\" type=\"text\" required=\"\" name=\"textSearch\"> 
\t\t<input type=\"submit\" class=\"btn btn-default btn-gradient\" value=\" Search \">
\t\t</form>
\t\t</div>
\t\t<div class=\"clear\"></div>
\t
\t\t
\t<script>
\tfunction SubmitForm()
\t{
\t\t
\t\tdocument.getElementById('table-form').submit();
\t}
\t</script>
\t
\t<script>
\t\tfunction CheckAll(source) 
\t\t{
\t\t  checkboxes = document.getElementsByName('CheckList[]');
\t\t  for(var i=0, n=checkboxes.length;i<n;i++) {
\t\t\tcheckboxes[i].checked = source.checked;
\t\t\t}
\t\t}
\t</script>
\t<form action=\"index.php\" id=\"table-form\" method=\"post\" enctype=\"multipart/form-data\"><input type=\"hidden\" name=\"FormSubmitted\" value=\"1\"><input type=\"hidden\" name=\"category\" value=\"home\"><input type=\"hidden\" name=\"action\" value=\"messages\"><div class=\"table-responsive\"><table cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" style=\"border-color:#eeeeee;border-width:1px 1px 1px 1px;border-style:solid\"><tbody><tr class=\"table-tr\" nowrap=\"\"><td width=\"40\" class=\"header-td\">
\t\t<input type=\"checkbox\" title=\"Delete All\" onclick=\"CheckAll(this)\">
\t\t</td><td class=\"header-td\" width=\"120\" nowrap=\"\">
\t\t\t
\t\t\t<a class=\"header-td underline-link\" href=\"index.php?category=home&amp;action=messages&amp;order=date&amp;order_type=desc\">
\t\t\tDate
\t\t\t</a>
\t\t\t
\t\t\t
\t\t\t
\t\t\t</td><td class=\"header-td\" width=\"120\" nowrap=\"\">
\t\t\t
\t\t\t<a class=\"header-td underline-link\" href=\"index.php?category=home&amp;action=messages&amp;order=name&amp;order_type=desc\">
\t\t\tName
\t\t\t</a>
\t\t\t
\t\t\t
\t\t\t
\t\t\t</td><td class=\"header-td\" width=\"120\" nowrap=\"\">
\t\t\t
\t\t\t<a class=\"header-td underline-link\" href=\"index.php?category=home&amp;action=messages&amp;order=email&amp;order_type=desc\">
\t\t\tEmail
\t\t\t</a>
\t\t\t
\t\t\t
\t\t\t
\t\t\t</td><td class=\"header-td\" width=\"120\" nowrap=\"\">
\t\t\t
\t\t\t<a class=\"header-td underline-link\" href=\"index.php?category=home&amp;action=messages&amp;order=phone&amp;order_type=desc\">
\t\t\tPhone
\t\t\t</a>
\t\t\t
\t\t\t
\t\t\t
\t\t\t</td><td class=\"header-td\" width=\"120\" nowrap=\"\">
\t\t\t
\t\t\t<a class=\"header-td underline-link\" href=\"index.php?category=home&amp;action=messages&amp;order=subject&amp;order_type=desc\">
\t\t\tSubject
\t\t\t</a>
\t\t\t
\t\t\t
\t\t\t
\t\t\t</td><td class=\"header-td\" width=\"120\" nowrap=\"\">
\t\t\t
\t\t\t<a class=\"header-td underline-link\" href=\"index.php?category=home&amp;action=messages&amp;order=message&amp;order_type=desc\">
\t\t\tMessage
\t\t\t</a>
\t\t\t
\t\t\t
\t\t\t
\t\t\t</td></tr><tr bgcolor=\"#ffffff\" height=\"30\"><td nowrap=\"\"><input title=\"Delete\" type=\"checkbox\" name=\"CheckList[]\" value=\"4\"></td><td class=\"oMain\">14/05/15 12:12</td><td>sdfd</td><td>asd@asd.com</td><td></td><td>anton</td><td>sdfsa</td></tr><tr bgcolor=\"#f0f1f4\" height=\"30\"><td nowrap=\"\"><input title=\"Delete\" type=\"checkbox\" name=\"CheckList[]\" value=\"3\"></td><td class=\"oMain\">14/05/15 12:11</td><td>sdfd</td><td>asd@asd.com</td><td></td><td>anton</td><td>sdfsa</td></tr><tr bgcolor=\"#ffffff\" height=\"30\"><td nowrap=\"\"><input title=\"Delete\" type=\"checkbox\" name=\"CheckList[]\" value=\"2\"></td><td class=\"oMain\">12/10/14 10:37</td><td>fgh</td><td>asd@asd.com</td><td>032234234</td><td>ghdfghd</td><td> jhgfghj</td></tr><tr bgcolor=\"#f0f1f4\" height=\"30\"><td nowrap=\"\"><input title=\"Delete\" type=\"checkbox\" name=\"CheckList[]\" value=\"1\"></td><td class=\"oMain\">12/10/14 10:36</td><td>fgh</td><td>asd@asd.com</td><td>032234234</td><td>ghdfghd</td><td></td></tr></tbody></table></div>
\t\t\t<br>
\t\t\t<input type=\"hidden\" name=\"Delete\" value=\"1\">
\t\t\t
\t\t\t<div class=\"fleft\">
\t\t\t<input type=\"submit\" value=\" Delete \" class=\"btn btn-default btn-gradient\">
\t\t\t</div>
\t\t</form>
</div>
            </div>        
        </div>
  
    
";
    }

    public function getTemplateName()
    {
        return "TmallAdminBundle:Default:stores_users.html.twig";
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
/* {% extends "TMallClientBundle::admin_layout.html.twig" %}*/
/* {% block  content %}*/
/*     */
/*             <div id="page-wrapper">*/
/* <div class="row">*/
/* 				<div class="col-lg-12" id="main-content"><script>*/
/* */
/* */
/* </script>*/
/* */
/* */
/* <div class="fright">*/
/* */
/* <a class="small-tile blue-back" href="index.php?category=home&amp;action=welcome"><img class="hide-sm pull-right" width="32" src="images/icons/welcome.png"><h3 class="h3-tile">Dashboard</h3>*/
/* 	</a>		*/
/* 	*/
/* </div>*/
/* <div class="clear"></div>*/
/* <h3>*/
/* Received messages</h3>*/
/* <div style="float:right">*/
/* 		<form action="index.php" method="post">*/
/* 		*/
/* 		*/
/* 		<input type="hidden" name="category" value="home"><input type="hidden" name="action" value="messages">*/
/* 		Search in <select name="comboSearch"><option value="date">Date</option><option value="name">Name</option><option value="email">Email</option><option value="phone">Phone</option><option value="subject">Subject</option><option value="message">Message</option></select> */
/* 		&nbsp; */
/* 		<input value="" type="text" required="" name="textSearch"> */
/* 		<input type="submit" class="btn btn-default btn-gradient" value=" Search ">*/
/* 		</form>*/
/* 		</div>*/
/* 		<div class="clear"></div>*/
/* 	*/
/* 		*/
/* 	<script>*/
/* 	function SubmitForm()*/
/* 	{*/
/* 		*/
/* 		document.getElementById('table-form').submit();*/
/* 	}*/
/* 	</script>*/
/* 	*/
/* 	<script>*/
/* 		function CheckAll(source) */
/* 		{*/
/* 		  checkboxes = document.getElementsByName('CheckList[]');*/
/* 		  for(var i=0, n=checkboxes.length;i<n;i++) {*/
/* 			checkboxes[i].checked = source.checked;*/
/* 			}*/
/* 		}*/
/* 	</script>*/
/* 	<form action="index.php" id="table-form" method="post" enctype="multipart/form-data"><input type="hidden" name="FormSubmitted" value="1"><input type="hidden" name="category" value="home"><input type="hidden" name="action" value="messages"><div class="table-responsive"><table cellpadding="3" cellspacing="0" width="100%" style="border-color:#eeeeee;border-width:1px 1px 1px 1px;border-style:solid"><tbody><tr class="table-tr" nowrap=""><td width="40" class="header-td">*/
/* 		<input type="checkbox" title="Delete All" onclick="CheckAll(this)">*/
/* 		</td><td class="header-td" width="120" nowrap="">*/
/* 			*/
/* 			<a class="header-td underline-link" href="index.php?category=home&amp;action=messages&amp;order=date&amp;order_type=desc">*/
/* 			Date*/
/* 			</a>*/
/* 			*/
/* 			*/
/* 			*/
/* 			</td><td class="header-td" width="120" nowrap="">*/
/* 			*/
/* 			<a class="header-td underline-link" href="index.php?category=home&amp;action=messages&amp;order=name&amp;order_type=desc">*/
/* 			Name*/
/* 			</a>*/
/* 			*/
/* 			*/
/* 			*/
/* 			</td><td class="header-td" width="120" nowrap="">*/
/* 			*/
/* 			<a class="header-td underline-link" href="index.php?category=home&amp;action=messages&amp;order=email&amp;order_type=desc">*/
/* 			Email*/
/* 			</a>*/
/* 			*/
/* 			*/
/* 			*/
/* 			</td><td class="header-td" width="120" nowrap="">*/
/* 			*/
/* 			<a class="header-td underline-link" href="index.php?category=home&amp;action=messages&amp;order=phone&amp;order_type=desc">*/
/* 			Phone*/
/* 			</a>*/
/* 			*/
/* 			*/
/* 			*/
/* 			</td><td class="header-td" width="120" nowrap="">*/
/* 			*/
/* 			<a class="header-td underline-link" href="index.php?category=home&amp;action=messages&amp;order=subject&amp;order_type=desc">*/
/* 			Subject*/
/* 			</a>*/
/* 			*/
/* 			*/
/* 			*/
/* 			</td><td class="header-td" width="120" nowrap="">*/
/* 			*/
/* 			<a class="header-td underline-link" href="index.php?category=home&amp;action=messages&amp;order=message&amp;order_type=desc">*/
/* 			Message*/
/* 			</a>*/
/* 			*/
/* 			*/
/* 			*/
/* 			</td></tr><tr bgcolor="#ffffff" height="30"><td nowrap=""><input title="Delete" type="checkbox" name="CheckList[]" value="4"></td><td class="oMain">14/05/15 12:12</td><td>sdfd</td><td>asd@asd.com</td><td></td><td>anton</td><td>sdfsa</td></tr><tr bgcolor="#f0f1f4" height="30"><td nowrap=""><input title="Delete" type="checkbox" name="CheckList[]" value="3"></td><td class="oMain">14/05/15 12:11</td><td>sdfd</td><td>asd@asd.com</td><td></td><td>anton</td><td>sdfsa</td></tr><tr bgcolor="#ffffff" height="30"><td nowrap=""><input title="Delete" type="checkbox" name="CheckList[]" value="2"></td><td class="oMain">12/10/14 10:37</td><td>fgh</td><td>asd@asd.com</td><td>032234234</td><td>ghdfghd</td><td> jhgfghj</td></tr><tr bgcolor="#f0f1f4" height="30"><td nowrap=""><input title="Delete" type="checkbox" name="CheckList[]" value="1"></td><td class="oMain">12/10/14 10:36</td><td>fgh</td><td>asd@asd.com</td><td>032234234</td><td>ghdfghd</td><td></td></tr></tbody></table></div>*/
/* 			<br>*/
/* 			<input type="hidden" name="Delete" value="1">*/
/* 			*/
/* 			<div class="fleft">*/
/* 			<input type="submit" value=" Delete " class="btn btn-default btn-gradient">*/
/* 			</div>*/
/* 		</form>*/
/* </div>*/
/*             </div>        */
/*         </div>*/
/*   */
/*     */
/* {% endblock %}*/
