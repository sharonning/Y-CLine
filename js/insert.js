function insertForm()
{
		$("#insertImg").click(function(){
			$("#insertImg").hide(500);
			$("#insertForm").show(800);
		});
		
		$("#insertImg").hover(
			function(){
			$("#insertImg").attr("src","images/add1.png");
			},	
			function(){
			$("#insertImg").attr("src","images/add.png");
		});
		
		
		$("#cancel").click(function(){
		$("#insertImg").show(500);
		$("#insertForm").hide(500);
	
	});
	
	$("#send").click(function(){
		
		var date = $('input[name="user_date"]').val();
		var data = $('textarea[name="user_data"]').val();
		var data_title = $('textarea[name="user_data_title"]').val();
		var result = date.split("-");
		if(date == ""|| data=="" || data_title=="")
		{
			alert("資料好像有少填哦 :D");
			return 0;
		}
		//alert(result[1]);
		switch(result[1])
		{
			case "01":var mon = "Jan";break;
			case "02":var mon = "Feb";break;
			case "03":var mon = "Mar";break;
			case "04":var mon = "Apr";break;
			case "05":var mon = "May";break;
			case "06":var mon = "Jun";break;
			case "07":var mon = "Jul";break;
			case "08":var mon = "Aug";break;
			case "09":var mon = "Sep";break;
			case "10":var mon = "Oct";break;
			case "11":var mon = "Nov";break;
			case "12":var mon = "Dec";break;
		}
		//alert(mon);
		$("#insertForm").hide(1000);
		$("#insertImg").show(1000);
		$(".timelineMajorMarker:first").after("<dl class=\"timelineMinor\"><dt id=\""+result[0]+result[1]+result[2]+"\"><a>"+data_title+"</a></dt><dd class=\"timelineEvent\" id=\""+result[0]+result[1]+result[2]+"EX\" style=\"display:none;\"><h3>"+mon+", "+result[2]+", "+result[0]+"</h3><p>"+data+"<br class=\"clear\"></dd></dl>");

		$('textarea[name="user_data"]').val('');
		$('textarea[name="user_data_title"]').val('');
		$('input[name="user_date"]').val('');
	});
	
		
		
}


$(document).ready(insertForm);
