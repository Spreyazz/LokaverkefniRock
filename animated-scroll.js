$(document).ready(function(){

	/* insert element to click and element to scroll to */
	$('#Metal').click(function (){
                
           scrollToElement('#Metal1');	               
    });
   	$('#ClassicRock').click(function (){
                
    	   scrollToElement('#ClassicRock1');	               
    });
       	$('#Rock').click(function (){
                
    	   scrollToElement('#Rock1');	               
    });
    
    //muna að afblocka þegar indi myndir eru komnar inn
       /*	$('#Indi').click(function (){
                
    	   scrollToElement('#Indi1');	               
    });*/

});

var scrollToElement = function(element)
{
	$('body').animate({
               scrollTop: ($(element).offset().top)
           }, 1000);
}