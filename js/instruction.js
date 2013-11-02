function instruction()
{
	     
         $(".mask").css("display","block");  
		 $("#ins1").show(1000);
		  $("#ins1").click(function(){
		  	$("#ins1").hide(1000);
			$("#ins2").show(1000);
		  });
		  
		  $("#ins2").click(function(){
			
			$("#ins2").hide(1000);
			$("#ins3").show(1000);
		  });
		  
		  $("#ins3").click(function(){
			$("#ins3").hide(1000);
			$(".mask").fadeOut(2000);
		  });

		
		
		/*$("body").mousedown(function(){
			
		
			
			$(".mask").hide();
				});*/
}
	//$(document).ready(instruction);