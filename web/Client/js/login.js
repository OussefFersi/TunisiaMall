var AnimationStep = 25; 
var AnimationInterval = 10; 
var LoginHeight = 240;
var c_step=0;

function ShowLogin() 
{

	var oDiv = document.getElementById("main-login-form");
		
	if (c_step < (LoginHeight / AnimationInterval))
	{
		oDiv.style.display = "block";
	 
		Animate(oDiv);
	}
	else
	{
		HideAnimate(oDiv);
	}
	
}

function HideLogin() 
{
	
	var oDiv = document.getElementById("main-login-form");
	HideAnimate(oDiv);
}

function HideAnimate(element) 
{
   
    if (c_step <= 0)
	{
		element.style.display = "none";
		return true;
	}
        
	
	c_step--;	
	
	element.style.clip="rect(0px 500px "+(c_step*AnimationStep)+"px 0px)";
	
    window.setTimeout(function() {
        HideAnimate(element);
    }, AnimationInterval);
    return false;
}


function Animate(element) 
{
   
    if (c_step >= (LoginHeight / AnimationInterval))
        return true;
	
	c_step++;	
	
	element.style.clip="rect(0px 500px "+(c_step*AnimationStep)+"px 0px)";
	
    window.setTimeout(function() {
        Animate(element);
    }, AnimationInterval);
    return false;
}

var glob_lock = true;
document.body.onmousedown = function(evt) 
{ 
	glob_lock = false;
 		
	return true;
}






function sub_loc_select(x,field_name)
{
	if(x=="") return;
	
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			show_sub_locs(xmlhttp.responseText,x,field_name);
		}
	}
	if(loc_type=="admin")
	{
		xmlhttp.open("GET","../include/suggest_category.php?location="+x+"&q=",true);
	}
	else
	{
		xmlhttp.open("GET","include/suggest_category.php?location="+x+"&q=",true);
	}
	xmlhttp.send(null);
	
}
var up_html = new Array();
var i_last_level = -1;
function show_sub_locs(text,x,field_name)
{
	var i_level = (x.split(".").length - 1);

	for(i=i_level;i<=4;i++)
	{
		document.getElementById("s_"+field_name+"_"+i).innerHTML="";	
	}
	
	var new_html="";
	var splitArray = text.split("~");

	var j = 0;
	for(j = 0; j < splitArray.length; j++)
	{
		var location = splitArray[j].split("#");
		 
		if(location[0]=="no suggestion")
		{
			
			
		}
		else
		{
			new_html += "<option value=\""+location[1]+"\">"+location[0]+"</option>";
		}
	}
	
	if(new_html!="")
	{
		new_html ='<select '+(field_name=="category_1"?'required':'')+' onChange="sub_loc_select(this.value,\''+field_name+'\'")" type="text" class="form-control input-sm" id="'+field_name+'_'+(i_level+1)+'" name="'+field_name+'_'+(i_level+1)+'">'
		+'<option value="">'+m_all+'</option>'+new_html+'</select>';
		document.getElementById("s_"+field_name+"_"+i_level).innerHTML=new_html;
	}
	
	i_last_level = i_level
}	



function ShowHide(div_name)
{

	if(document.getElementById(div_name).style.display=="block")
	{
		document.getElementById(div_name).style.display="none";
	}
	else
	{
		document.getElementById(div_name).style.display="block";
	}

}



function ShowPopup()
{

	document.getElementById("popup").style.display="block";
	setTimeout('HidePopup()', 3000);
}
function HidePopup()
{
	document.getElementById("popup").style.display="none";
}

function AddToCart(url)
{
	window.frames["ajax-ifr"].location=url;
}



function sub_loc_select(x,field_name,all_text,suggest_action)
{
	if(x=="") return;
	
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			show_sub_locs(xmlhttp.responseText,x,field_name);
		}
	}
	
	xmlhttp.open("GET",suggest_action+".php?location="+x+"&q=",true);
	
	xmlhttp.send(null);
	
}
var up_html = new Array();
var i_last_level = -1;
function show_sub_locs(text,x,field_name)
{
	var i_level = (x.split(".").length - 1);

	for(i=i_level;i<=4;i++)
	{
		document.getElementById("s_"+field_name+"_"+i).innerHTML="";	
	}
	
	var new_html="";
	var splitArray = text.split("~");

	var j = 0;
	for(j = 0; j < splitArray.length; j++)
	{
		var location = splitArray[j].split("#");
		 
		if(location[0]=="no suggestion")
		{
			
			
		}
		else
		{
			new_html += "<option value=\""+location[1]+"\">"+location[0]+"</option>";
		}
	}
	
	if(new_html!="")
	{
		new_html ='<select '+(field_name=="category_1"?'required':'')+' onChange="sub_loc_select(this.value,\''+field_name+'\'")" type="text" class="sub-loc-select" id="'+field_name+'_'+(i_level+1)+'" name="'+field_name+'_'+(i_level+1)+'">'
		+'<option value="">'+m_all+'</option>'+new_html+'</select>';
		document.getElementById("s_"+field_name+"_"+i_level).innerHTML=new_html;
	}

	i_last_level = i_level
}	


function get_cat_value(x)
{
	for(i=4;i>=0;i--)
	{
		if(document.getElementById(x+"_"+i))
		
		{
			var e = document.getElementById(x+"_"+i);
			return  e.options[e.selectedIndex].value;
		
		}
	
	}
	return "";
}
