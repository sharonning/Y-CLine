<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Y!CLine</title>
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/insert.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/instruction.css" type="text/css" media="screen">
	<link rel="stylesheet" href="inc/colorbox.css" type="text/css" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="icon" href="images/icon.png" type="image/png" />



	<script type="text/javascript" src="js/insert.js"></script>
	<script type="text/javascript" src="js/instruction.js"></script>
	<script type="text/javascript" src="inc/colorbox.js"></script>
	<script type="text/javascript" src="js/timeliner.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	
	 <script>
	 var ids = new Array();
	 
	 function unsearch(){
		$.timeliner({
				startOpen:['#19550828EX']
			});
			// Colorbox Modal
			$(".CBmodal").colorbox({inline:true, initialWidth:100, maxWidth:682, initialHeight:100, transition:"elastic",speed:750});
		}
	</script>
</head>
<?php
error_reporting(0);

$w="2306179";
$WeatherURL = "http://weather.yahooapis.com/forecastrss?w=".$w."&u=c&format=xml";
$_result = file_get_contents($WeatherURL);
$replaceStr=str_replace("Forecast",";",$_result);
$parseStr1 = explode( ';',$replaceStr);
$parseStr2= explode( "\n",$parseStr1[1]);
$status=array();
$high=array();
$low=array();
for($i=1;$i<=5;$i++){
           $parseStr3= explode( "-",$parseStr2[$i]);
		   $parseStr4=explode( ".",$parseStr3[1]);
		   $status[$i]=$parseStr4[0];
		   $parseStr5=explode( ":",$parseStr4[1]);
		   $parseStr6=explode("L",$parseStr5[1]);
		   $high[$i]=$parseStr6[0];
		   $low[$i]=$parseStr5[2];
		
  }
    $now="25°C";
	$high[1]=trim($high[1])."°C";
	$low[1]=str_replace("<br />","",$low[1])."°C";
		  if(strpos($status[1],"lear")>-1){
		    echo "<fieldset id=\"picBack\"><img class=\"pic\" src=\"images/cloudy.jpg\"> 
			<p class=\"city\">台北</p>
	<p class=\"low\">".$low[1]."</p>
	<p class=\"high\">".$high[1]."</p>
	<p class=\"now\">".$now."</p></fieldset>";
		}
		 else {
		      echo "<fieldset id=\"picBack\"><img class=\"pic\" src=\"images/cloudy.jpg\"> 
			<p class=\"city\">台北</p>
	<p class=\"low\">".$low[1]."</p>
	<p class=\"high\">".$high[1]."</p>
	<p class=\"now\">".$now."</p></fieldset>";	  }
?>
<div id="bar" class="barc">  </div>
<img class="pin" src="images/pin.png">
<img class="logo" src="images/logo.png">

<input type="image" src="images/googleLoginIcon.png" id="google" style="position:fixed;top:15px;right:80px;z-index:2;" />
<img src="images/FBLoginIcon.png" style="position:fixed;top:15px;right:40px;z-index:2;">

 <formw>  
	


　	<p class="word">Search <input type="text" id="searchText" placeholder=" 找找以前發生的大事..." name="Keyword" size="40">

	</p>

	 </formw> 
	
	<div class="container">
			
		<div id="timelineContainer">
<div class="timelineToggle"><p><a class="expandAll">+ Expand All</a></p></div>
			
			<br class="clear">

			

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>2013 November</span></h2>
				<dl class="timelineMinor">
					<dt id="19550828"><a>在yahoo...</a></dt>
					<dd class="timelineEvent" id="19550828EX" style="display:none;">
						<h3>November 3, 2013</h3>

						<div class="media">
							<a href="#inline-1955-08-282" class="CBmodal"><img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-prn2/v/1391686_632284440127771_54880886_n.jpg?oh=5ed88f22d591f83e557d6a86e443f5fa&oe=5277DA7C&__gda__=1383624254_30b788eb7ecbe728196bf782b12af636" width="240" height="180" alt="Related Video: The Emmett Till Murder"></a>
							<p class="mediaLink"><a href="#inline-1955-08-282" class="CBmodal" title="Related Video: The Emmett Till Murder"></a></p>
							<div style="display:none">
								<div id="inline-1955-08-282" class="modalBox">
									<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-prn2/v/1391686_632284440127771_54880886_n.jpg?oh=5ed88f22d591f83e557d6a86e443f5fa&oe=5277DA7C&__gda__=1383624254_30b788eb7ecbe728196bf782b12af636">
									</div>
								</div>
						</div><!-- /.media -->

						<p id="195508280">
							在yahoo day好好玩!<br>
							第一天有很多課程還有樂團表演!<br>
							看到好多跟我一樣是學生的隊伍!<br>
							第一天晚上我們幾乎沒睡,de了好久的bug XD<br>
						    第二天早上還有超HIGH早操活動!<br>
							兩天有一半的時間都一直在吃!<br>
						    好想睡ING!!<br>
							但是真的值回票價啦!!<br>
							Yahoo Rock!!<br></p>

						<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->


				
			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>2013 October</span></h2>
				
			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>2013 September</span></h2>
				
			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>2013 August</span></h2>
				

			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>2013 July</span></h2>

				
			</div><!-- /.timelineMajor -->
			<br class="clear">
		</div><!-- /#timelineContainer -->
	</div><!-- /.container -->
	
		<div class="mask">
		</div>
		
			<img src="images/ins1.png"  style="display:none" id="ins1" width="100%" height="100%">
			
			<img src="images/ins2.png" id="ins2" style="display:none" width="100%" height="100%">  
			
			
			<img src="images/ins3.png" id="ins3" style="display:none" width="100%" height="100%">
			 
			
			<img src="images/ins4.png" id="ins4" style="display:none" width="100%" height="100%">
			
			
			<img src="images/ins5.png" id="ins5" style="display:none" width="100%" height="100%">
			 
			
			<img src="images/ins6.png" id="ins6" style="display:none" width="100%" height="100%">
			
		<fieldset id="rightText">
		
		<p><br>
		<span id="rinnerText">
		Recently...
		</span>
		</p><br>
			<fieldset id="rinnerContent">
				<ul type="square">
					<li id="t1">
					福懋混油，經部決撤銷GMP	</li><br>
					<li id="t2">
					警：潑糞案 不排除雙方有糾紛</li><br>
					<li id="t3">颱風外圍環流影響 週末各地有雨</li><br>
					<li id="t4">柯羅莎外圍雲系影響 雙北市、東北部防豪雨</li><br>
				</ul>
			
			</fieldset>
		</fieldset>
	
		<img id="insertImg" src="images/add.png" width="90" height="90">	
		<div id="addData" style="width:480px;height:300px">
			
			<form id="insertForm" style="display:none;-webkit-border-radius: 28px;">
			 &nbsp &nbsp &nbsp &nbsp
				<p><span id="area"  align="center" style="width:200px;height:20px">
				選擇行程地點</span>
					<span id="taipei" style="width:90px;height:20px">
					台北</span>
					<span id="taichung" style="width:90px;height:20px">
					台中</span>
					<span id="tainan" style="width:90px;height:20px">
					台南</span>
					<span id="kaoshong" style="width:90px;height:20px">
					高雄</span>
					<span id="pingdong" style="width:90px;height:20px">
					屏東</span>
				<br>
				
				<input type="date" name="user_date" /><br>
				<textarea  id="insertTextTitle" type="text" name="user_data_title" placeholder="標題是..."  rows=1 cols=20 ></textarea><br>
				<textarea  id="insertText" type="text" name="user_data" placeholder="輸入點什麼呢..."  rows=3 cols=30 ></textarea><br>
				  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<input type="button" id="send" value="加入" />
				   <input type="button" id="cancel" value="取消" /></p>
			</form>
		</div>
	
	<script>
			function findID(key){
			    var point=0;
				var idArray = [];
				$("dl.timelineMinor dt").each( function(){ idArray.push(this.id); } );
				for (var i=0; i<idArray.length; i++){ 
					var context= $("p#" + idArray[i] + "0").text();
					if(context.indexOf(key) > -1){
						openTimeEvent(idArray[i]);
						point=1;
						//break;
					}
					
				}				
			}
			function open(){
			$.timeliner({
				startOpen:[ID]
			});
			// Colorbox Modal
			$(".CBmodal").colorbox({inline:true, initialWidth:100, maxWidth:682, initialHeight:100, transition:"elastic",speed:750});
			}
	</script>
	
	
	
	<div id="fb-root"></div>
    <script>
	    var count=0;
		var tmp=0;
		// 載入 SDK' source code 後執行此 function
		window.fbAsyncInit = function() {
			// init the FB JS SDK
			FB.init({
				appId      : '487657981341607', // App ID from the App Dashboard
				//channelUrl : 'http://localhost/channel.html', // Channel File for x-domain communication
				status     : true, // check the login status upon init?
				cookie     : true, // set sessions cookies to allow your server to access the session?
				xfbml      : true  // parse XFBML tags on this page?
			});

			// 於 SDK 載入後，設定相關事件
			// 設家  jQuery 觸發器處理程序，觸發 'fbAsyncInit' 事件
			$(window).triggerHandler('fbAsyncInit');
			FB.getLoginStatus(function(response){
				loadFb();
				if(tmp==1){
					setTimeout("findID(keyword)", 5000 )
				}
				else if(tmp==2){
					setTimeout("open()", 5000 )
				}
				else{
				}
			});
		};
		
		//設定 FB 登入 function
		function loginFB(){
             
			// perms(string): 使用者同意之權限。
			var perms = 'read_stream';
			
			// FB JavaScript login function
			FB.login(function(response){
				// API 回傳 response 值
				//ShowTaoble(response);
			}, { scope: perms } ); // 設定 scope(使用者同意之權限) 參數      
		}	
      
		function logoutFB(){
       
			// FB JavaScript login function
			FB.logout(function(response) {
			});
		}
		
		function loadFb() {
			FB.api('/me/feed?limit=100&date_format=U&fields=id,message,created_time,picture,place', function(response){
				var data = response.data;
				var id, msg, time;
				var picture;
				var place;
				for(var i = 0; i < data.length; i++) {
					id = data[i].id;
					msg = data[i].message;
					time = new Date(data[i].created_time * 1000);
					//$("#infotest").append("https://www.facebook.com/" + id.replace("_", "/posts/") + "<br>");
					if(msg) {
						insertFbMsg(time, msg);
					}
				}
			});
		}
			
		function insertFbMsg(time, msg) {
			var major = $("h2.timelineMajorMarker:contains('" + monthName[ timeFormat(time).substring(4, 6) - 1 ] + "')").parent();
			var minor = '<dl class="timelineMinor">' + 
							'<dt id="' + timeFormat(time) + '"><a>' + msg.substring(0, 5) + '...</a></dt>' +
							'<dd class="timelineEvent" id="' + timeFormat(time) + 'EX" style="display:none;">' +
								'<h3>' + dateText(time) + '</h3>' +
								'<p id="' + timeFormat(time) + '0">' + msg + '</p>' +
								'<br class="clear">' +
							'</dd>' +
						'</d1>';
			ids[count]=parseInt(timeFormat(time));
			count++;			
			major.append(minor);
			
		}
		
		function timeFormat(date) {
			var y = date.getFullYear();
			var m = date.getMonth() + 1;
			var d = ("0" + date.getDate()).slice(-2);
			var hour = ("0" + date.getHours()).slice(-2);
			var min = ("0" + date.getMinutes()).slice(-2);
			return "" + y + ("0" + m).slice(-2) + d + hour + min;
		}
		function dateText(date) {
			var y = date.getFullYear();
			var m = date.getMonth();
			var d = date.getDate();
			
			return d + " " + monthName[m] + ", " + y;
		}
		
		function openTimeEvent(id) {
			$("#" + id + " a").removeClass('closed').addClass('open').animate({ fontSize: "1.2em" }, 200);
			$("#" + id + "EX").show(800);
		}
		
		var monthName = ['January', 'February', 'March', 'April', 'May', 'June', 
			'July', 'August', 'September', 'October', 'November', 'December'];
			
		$(document).ready(function() {
		
			$("#searchText").keypress(function(e) {
				var keycode = (e.keyCode ? e.keyCode : e.which);
				if(keycode == 13 && $("#searchText").val() != "") {
					findID($("#searchText").val());
				}
			});
			
			$("#fbLoginBtn").click(function(){
			  loginFB();
			});

			$("#fbLogoutBtn").click(function(){
			  logoutFB();
			});
			
			$("#google").click(function(){
				$.ajax({		
					url: 'calendar.php',
					success:function(response){
						insertGoogleMsg(response);
					},		
					error:function(xhr, ajaxOptions, thrownError){ 
						alert(xhr.status); 
						alert(thrownError); 
					}
				});
			  
			});
			
			$.ajax({		
					url: 'calendar.php',
					success:function(response){
						insertGoogleMsg(response);
					},		
					error:function(xhr, ajaxOptions, thrownError){ 
						alert(xhr.status); 
						alert(thrownError); 
					}
				});
			
			$("#meBtn").click(function() {
				FB.api('/me/feed?limit=100&date_format=U&fields=id,message,created_time,picture,place', function(response){
					var data = response.data;
					var id, msg, time;
					var picture;
					var place;
					//$("#infotest").append(data.length);
					/*$.each(data, function(index, value) {
						id = value.id;
						msg = value.message;
						time = new Date(value.created_time * 1000); //1383060917
						picture = value.picture;
						place = value.place;
						if(msg) {
							insertFbMsg(time, msg);
						}					
					})*/
					for(var i = 0; i < data.length; i++) {
						id = data[i].id;
						msg = data[i].message;
						time = new Date(data[i].created_time * 1000);
						$("#infotest").append("https://www.facebook.com/" + id.replace("_", "/posts/") + "<br>");
						if(msg) {
							insertFbMsg(time, msg);
						}
					}
					/*
								
					
					if(message) {
						$("#postId").text("https://www.facebook.com/" + id.replace("_", "/posts/")); //取得目前仲用者的 id 資料。
						$("#message").text(message);
						$("#time").text( timeFormat(time) );
						$("#picture").text(picture.replace("_s.jpg", "_n.jpg"));
						if(place) {
							$("#place").text(place.location.city);
						}              
					}
					*/
				});
			});
		
			$("#fun").click( function(time, msg, title) {
				openTimeEvent();
			/*
				time = new Date(1383060917 * 1000);
				msg = "吃飯的時候看惹小淳的康熙，\n就算在不熟的場合反應還是很快欸 XDD\n\n是很討喜的主持人 :3".replace(/\n/g, "<br>");
				title = msg.substring(0, 5) + "...";
				
				var major = $("h2.timelineMajorMarker:contains('" + timeFormat(time).substring(0, 4) + "')").parent();
				var minor = '<dl class="timelineMinor">' + 
								'<dt id="' + timeFormat(time) + '"><a>' + title + '</a></dt>' +
								'<dd class="timelineEvent" id="' + timeFormat(time) + 'EX" style="display:none;">' +
									'<h3>' + dateText(time) + '</h3>' +
									'<p id="' + timeFormat(time) + '0">' + msg + '</p>' +
									'<br class="clear">' +
								'</dd>' +
							'</d1>';
				major.append(minor);
			*/
			});

			
			function insertGoogleMsg(msg) {
				var elements = msg.split(";");
				
				for(var i = 0; i < elements.length; i++) {
					var title = elements[i++];
					var msg =elements[i++];
					var time = new Date(elements[i]);
					
					var major = $("h2.timelineMajorMarker:contains('" + monthName[ timeFormat(time).substring(4, 6) - 1 ] + "')").parent();
					var minor = '<dl class="timelineMinor">' + 
									'<dt id="' + timeFormat(time) + '"><a>' + title.substring(0, 5) + '...</a></dt>' +
									'<dd class="timelineEvent" id="' + timeFormat(time) + 'EX" style="display:none;">' +
										'<h3>' + dateText(time) + '</h3>' +
										'<p id="' + timeFormat(time) + '0">' + msg + '</p>' +
										'<br class="clear">' +
									'</dd>' +
								'</d1>';
					ids[count]=parseInt(timeFormat(time));
					count++;
					major.append(minor);
				}	
			}
			
			function insertMedia() {
				var media = '<div class="media">' + 
								'<a href="#inline-1963-08-287" class="CBmodal"><img src="http://img.youtube.com/vi/gvAQE66jwcg/0.jpg" width="240" height="180" alt="Related Video: Black Press"></a>'
			}
			
			/*
						<div class="media">
							<a href="#inline-1963-08-287" class="CBmodal"><img src="http://img.youtube.com/vi/gvAQE66jwcg/0.jpg" width="240" height="180" alt="Related Video: Black Press"></a>
							<p class="mediaLink"><a href="#inline-1963-08-287" class="CBmodal" title="Related Video: Black Press">Watch: Black Press</a></p>
							<div style="display:none">
								<div id="inline-1963-08-287" class="modalBox">
									<object>
										<param name="movie" value="http://www.youtube.com/v/gvAQE66jwcg?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380">
										<param name="allowFullScreen" value="true">
										<param name="allowScriptAccess" value="always">
										<embed src="http://www.youtube.com/v/gvAQE66jwcg?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="380">
										</object>
									</div>
								</div>
						</div>
			*/
		});
		
      
		// 非同部載入 SDK's source code
		(function(d){
			var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement('script'); js.id = id; js.async = true;
			js.src = "//connect.facebook.net/zh_TW/all.js";
			ref.parentNode.insertBefore(js, ref);
		}(document));
		
		
    </script> 
   
	
	<?php
error_reporting(0);
$search = $_GET[s]; 
$isID = $_GET[i];
$ID = $_GET[id];
if(strcmp($search,"Y")==0){
  $keyword=$_POST[Keyword];
  echo"<script>tmp=1;
  keyword=\"". $keyword."\";</script>";
}else if(strcmp($isID,"Y")==0){
  echo"<script>
			tmp=2;
			var ID='#".$ID."EX';
	</script>";
}else{
  echo"<script>unsearch();</script>";
}

?>
</body>
</html>