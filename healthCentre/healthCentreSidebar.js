$(document).ready(function () {
    $(".title").click(function () {
		//REMOVE THE ON CLASS FROM ALL BUTTONS
		$(".title").removeClass('on');
        console.log('g');
		  
		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	$(".box").slideUp('normal');
   
		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if($(this).next().is(':hidden') == true) {
			
			//ADD THE ON CLASS TO THE BUTTON
			$(this).addClass('on');
			  
			//OPEN THE SLIDE
			$(this).next().slideDown('normal');
		} 	  
    });
});