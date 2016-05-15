$(function() {

    $('#side-menu').metisMenu();
	

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse')
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse')
        }

        height = (this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    })
})


var default_content="";
var lock_check = false;
var interval_id = 0;

$(document).ready(function(){
	
		checkURL();
		$('ul li a').click(function (e){

				checkURL(this.hash);

		});
		
		
		default_content = $('#main-content').html();
		
		
		interval_id = setInterval("checkURL()",250);
	
});

var lasturl="";

var check_url_count=0;

function checkURL(hash)
{
	if(lock_check)
	{
	
	}
	else
	{
		if(!hash) hash=window.location.hash;
		
		check_url_count++;
		
		if(hash != lasturl)
		{
			lasturl=hash;
			
			if(hash=="")
			$('#main-content').html(default_content);
			
			else
			loadPage(hash);
		}
		
		if(check_url_count==10)
		{
			
		}
	}
}


function loadPage(url)
{
	
	if(lock_check)
	{
	
	}
	else
	{
	url=url.replace('#','');
	
	var array_url = url.split('-');
	
	var url_data = "category="+array_url[0]+"&action="+array_url[1];
	
	if(array_url[2])
	{
		url_data = url_data + "&"+array_url[2];
	}

	$('#loading').css('visibility','visible');
	
	$.ajax({
		type: "POST",
		url: "admin_page.php",
		data: url_data,
		dataType: "html",
		success: function(msg){
			
			if(parseInt(msg)!=0)
			{
			
				$('#main-content').html(msg);
				$('#loading').css('visibility','hidden');
				
				if($(window).width()<768)
				{
					if($('.navbar-toggle').css('display') !='none')
					{
						$(".navbar-toggle").trigger( "click" );
					}
				}
				
			}
			
		},
		error: function(msg)
		{
			
			
			$('#main-content').html("There was an error while processing the page.<br/><br/>Click <a href=\"admin_page.php?"+url_data+"\">here</a> to see details.<br/><br/><br/><br/>");
			$('#loading').css('visibility','hidden');
			
		}
		
	});
	}
}

function isFunction(possibleFunction) 
{
  return (typeof(possibleFunction) == typeof(Function));
}

function ShowLoading()
{
	do_process=true;
	if(isFunction(ValidateForm))
	{
		if(!ValidateForm(document.getElementById("add-form")))
		{
			do_process=false;
		}
	}
	
	if(do_process)
	{
		lock_check = true;
		$('#loading').css('visibility','hidden');
		$('#add-form').submit();
	}
}

function LoadingIcon()
{
	$('#loading').css('visibility','visible');
}

function HideLoadingIcon()
{
	$('#loading').css('visibility','hidden');
}

function StartOver()
{
	
}


function PageLoaded()
{	
	document.getElementById("main_navigation").style.visibility="visible";
	
	if(current_cat!=""&&document.getElementById("link_"+current_cat))
	{
		$("#link_"+current_cat).click();
	}
	
}
