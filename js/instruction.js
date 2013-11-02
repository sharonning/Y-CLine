function instruction()
{
	     
         $(".mask").css("display","block");  
		 $(".instruction1").show(1000);
		  $(".instruction1").click(function(){
		  	$(".instruction1").hide(1000);
			$(".instruction2").show(1000);
		  });
		  
		  $(".instruction2").click(function(){
			
			$(".instruction2").hide(1000);
			$(".instruction3").show(1000);
		  });
		  
		  $(".instruction3").click(function(){
			$(".instruction3").hide(1000);
			$(".mask").fadeOut(2000);
		  });

		
		
		/*$("body").mousedown(function(){
			
		
			
			$(".mask").hide();
				});*/
}
	//$(document).ready(instruction);