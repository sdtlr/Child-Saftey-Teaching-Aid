//if statement which executes when the nav bar is opened, fading out the tool tip
$(document).scroll(function(){
    if ($(this).scrollTop()>55){
        $('#menu_tooltip').fadeOut("fast", function(){
    		var div = $('<a id="menu_tooltip2" class = "menu_tooltip"> &#8678; </a>').hide();
    		$(this).replaceWith(div);
    		$('#menu_tooltip2').fadeIn("slow");
		});
    } else {
        $('#menu_tooltip2').fadeOut("fast", function(){
    		var div = $('<a id="menu_tooltip" class = "menu_tooltip"> &#8678; Choose a topic </a>').hide();
    		$(this).replaceWith(div);
    		$('#menu_tooltip').fadeIn("slow");
		});
    }
}); 