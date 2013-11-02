<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Y!CLine</title>
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/insert.css" type="text/css" media="screen">
	<link rel="stylesheet" href="inc/colorbox.css" type="text/css" media="screen">
	
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
    
		  if(strpos($status[1],"lear")>-1){
		    echo "<img class=\"pic\" src=\"images/sunny.png\"> ";
		 }else if(strpos($status[1],"ain")>-1){
		       echo "<img class=\"pic\" src=\"images/sunny.png\"> ";
		  }
		 else if(strpos($status[1],"hunderstorms")>-1){
		         echo "<img class=\"pic\" src=\"images/sunny.png\"> ";		  }
		else  if(strpos($status[1],"loudy")>-1){
		      echo "<img class=\"pic\" src=\"images/sunny.png\"> ";		  }
		 else {
		      echo "<img class=\"pic\" src=\"images/sunny.png\"> ";	  }
?>
<div id="bar" class="barc"> </div>
<div id="bar2" class="barc2"> </div>
<img class="logo" src="images/logo.png">
	<div class="container">
		
		<div id="timelineContainer">

			<div class="timelineToggle"><p><a class="expandAll">展開全部</a></p></div>

			<br class="clear">

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>2013</span></h2>
				<dl class="timelineMinor">
					<dt id="19540517"><a>Brown v. Board of Education</a></dt>
					<dd class="timelineEvent" id="19540517EX" style="display:none;">
						<h3>May 17, 1954</h3>
						<p>
							The U.S. Supreme Court hands down a unanimous 9-0 decision in the Brown v. Board of Education of Topeka case, opening the door for the civil rights movement and ultimately racial integration in all aspects of U.S. society. In overturning Plessy v. Ferguson (1896), the court rules that “separate educational facilities are inherently unequal.”<sup>1</sup></p>

							<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->
			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>2012</span></h2>
				<dl class="timelineMinor">
					<dt id="19550828"><a>Emmett Till</a></dt>
					<dd class="timelineEvent" id="19550828EX" style="display:none;">
						<h3>August 28, 1955</h3>

						<div class="media">
							<a href="#inline-1955-08-282" class="CBmodal"><img src="http://img.youtube.com/vi/GU1wuqyOP98/0.jpg" width="240" height="180" alt="Related Video: The Emmett Till Murder"></a>
							<p class="mediaLink"><a href="#inline-1955-08-282" class="CBmodal" title="Related Video: The Emmett Till Murder">Watch: The Emmett Till Murder</a></p>
							<div style="display:none">
								<div id="inline-1955-08-282" class="modalBox">
									<object>
										<param name="movie" value="http://www.youtube.com/v/GU1wuqyOP98?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380">
										<param name="allowFullScreen" value="true">
										<param name="allowScriptAccess" value="always">
										<embed src="http://www.youtube.com/v/GU1wuqyOP98?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="380">
										</object>
									</div>
								</div>
						</div><!-- /.media -->

						<p>
							Fourteen-year-old African-American Emmett Till is brutally murdered after reportedly flirting with a white woman while visiting relatives in Mississippi. For the first time, both black and white reporters cover the trial epitomizing “one of the most shocking and enduring stories of the twentieth century.”<sup>2</sup> The white defendants, Roy Bryant and J.W. Milam, are acquitted by an all-white jury in only 67 minutes; later they describe in full detail to Look magazine (which paid them $4,000) how they killed Till.<sup>3</sup> His mother insists on an open casket funeral, and the powerful image of his mutilated body sparks a strong reaction across the country and the world.</p>

						<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->


				<dl class="timelineMinor">
					<dt id="19551201"><a>Rosa Parks</a></dt>
					<dd class="timelineEvent" id="19551201EX" style="display:none;">
						<h3>December 1, 1955</h3>
						<p>
							The arrest of Rosa Parks, a 42-year-old African-American seamstress and civil rights activist who refused to give up her bus seat to a white passenger, sets off a long anticipated bus boycott by residents of Montgomery, Ala. The 13-month protest and ensuing litigation eventually make it to the U.S. Supreme Court, which declares that segregation on public buses is unconstitutional.<sup>4</sup> The Montgomery bus boycott brings the Rev. Dr. Martin Luther King Jr. and his nonviolent approach to social change to the forefront of the civil rights movement.</p>

							<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->
			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>1957</span></h2>
				<dl class="timelineMinor">
					<dt id="19570904"><a>Little Rock</a></dt>
					<dd class="timelineEvent" id="19570904EX" style="display:none;">
						<h3>September 4, 1957</h3>

						<div class="media">
							<a href="#inline-1957-09-044" class="CBmodal"><img src="http://img.youtube.com/vi/h148GEIgUeA/0.jpg" width="240" height="180" alt="Related Video: Reporting Little Rock"></a>
							<p class="mediaLink"><a href="#inline-1957-09-044" class="CBmodal" title="Related Video: Reporting Little Rock">Watch: Reporting Little Rock</a></p>
							<div style="display:none">
								<div id="inline-1957-09-044" class="modalBox">
									<object>
										<param name="movie" value="http://www.youtube.com/v/h148GEIgUeA?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380">
										<param name="allowFullScreen" value="true">
										<param name="allowScriptAccess" value="always">
										<embed src="http://www.youtube.com/v/h148GEIgUeA?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="380">
										</object>
									</div>
								</div>
						</div><!-- /.media -->

						<p>
							Three years removed from the Brown v. Board of Education decision, Arkansas Gov. Orval Faubus orders the National Guard to stop nine black students from attending the all-white Little Rock Central High School. President Dwight D. Eisenhower intervenes by federalizing the National Guard and deploying Army troops to protect the students, stripping the state of power. Media coverage of the physical and verbal harassment the black students were subjected to is reported and broadcast around the world. In the end, they successfully integrate Central High. <sup>5</sup></p>

						<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->
			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>1961</span></h2>
				<dl class="timelineMinor">
					<dt id="19610504"><a>Freedom Rides</a></dt>
					<dd class="timelineEvent" id="19610504EX" style="display:none;">
						<h3>May 4, 1961</h3>

						<div class="media">
							<a href="#inline-1961-05-045" class="CBmodal"><img src="http://img.youtube.com/vi/Sxe9dJoZ-AQ/0.jpg" width="240" height="180" alt="Related Video: Freedom Rides"></a>
							<p class="mediaLink"><a href="#inline-1961-05-045" class="CBmodal" title="Related Video: Freedom Rides">Watch: Freedom Rides</a></p>
							<div style="display:none">
								<div id="inline-1961-05-045" class="modalBox">
									<object>
										<param name="movie" value="http://www.youtube.com/v/Sxe9dJoZ-AQ?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380">
										<param name="allowFullScreen" value="true">
										<param name="allowScriptAccess" value="always">
										<embed src="http://www.youtube.com/v/Sxe9dJoZ-AQ?fs=1&amp;hd=0&amp;showsearch=0&amp;showinfo=0&amp;width=640&amp;height=380" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="380">
										</object>
									</div>
								</div>
						</div><!-- /.media -->

					<p>
						The first of many civil rights “Freedom Rides” leaves Washington, D.C., for New Orleans. The Freedom Riders want to test the validity of the Supreme Court’s decision to outlaw racial segregation in bus terminals and through interstate bus travel.<sup>6</sup> Angry white mobs – with the blessing of Alabama law enforcement – meet the convoy in Anniston and Birmingham, brutally beating the Freedom Riders and firebombing one of the buses.<sup>7</sup></p>
						<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->
			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>1963</span></h2>
				<dl class="timelineMinor">
					<dt id="19630828"><a>"I Have a Dream"</a></dt>
					<dd class="timelineEvent" id="19630828EX" style="display:none;">
						<h3>August 28, 1963</h3>
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
						</div><!-- /.media -->

						<p>
							In one of the largest gatherings in the nation’s capital and one of the first to be broadcast live on national television, at least 200,000 civil rights protesters stage a March on Washington concluding at the Lincoln Memorial. The march is dedicated to jobs and freedom and takes place 100 years after the&nbsp;Emancipation Proclamation. The highlight of the event is Martin Luther King Jr.’s historic “I Have a Dream” speech.</p>

						<blockquote>
							I have a dream that one day this nation will rise up and live out the true meaning of its creed: "We hold these truths to be self-evident: that all men are created equal."
							<div class="attribution">&mdash;Martin Luthar King Jr.</div>
						</blockquote>

						<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->

			</div><!-- /.timelineMajor -->

			<div class="timelineMajor">
				<h2 class="timelineMajorMarker"><span>1964</span></h2>

				<dl class="timelineMinor">
					<dt id="19640702"><a>Civil Rights Act</a></dt>
					<dd class="timelineEvent" id="19640702EX" style="display:none;">
						<h3>July 2, 1964</h3>
						<p>
							President Lyndon B. Johnson signs the Civil Rights Act of 1964, mandating equal opportunity employment, and complete desegregation of schools and other public facilities. It also outlaws unequal voter registration requirements.<sup>13</sup> Although it would take years for these changes to take effect in communities around the country, the law is a monumental victory for the civil rights movement.</p>

							<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->

				<dl class="timelineMinor">
					<dt id="19641014"><a>Nobel Peace Prize</a></dt>
					<dd class="timelineEvent" id="19641014EX" style="display:none;">
						<h3>October 14, 1964</h3>
						<p>Martin Luther King Jr. is awarded the Nobel Peace Prize; at 35, he is the youngest recipient.</p>
						<br class="clear">
					</dd><!-- /.timelineEvent -->
				</dl><!-- /.timelineMinor -->

			</div><!-- /.timelineMajor -->
			<br class="clear">
		</div><!-- /#timelineContainer -->
	</div><!-- /.container -->
		<img id="insertImg" src="images/add.png" width="100" height="100">	
		<div id="addData" style="width:480px;height:300px">
			
			<form id="insertForm" style="display:none;-webkit-border-radius: 28px;">
			
			 &nbsp &nbsp &nbsp &nbsp
				<p><span id="area"  align="center" style="width:200px;height:20px">
				選擇行程地點</span>
				<span id="taiwan" style="display:none">
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
				</span>
				<br><br>
				
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
	

	<!-- GLOBAL CORE SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="inc/colorbox.js"></script>
	<script type="text/javascript" src="js/timeliner.min.js"></script>
	<script type="text/javascript" src="js/insert.js"></script>
	<div id="fb-root"></div>
    <script>
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
		};
      
		//設定 FB 登入 function
		function loginFB(){

			// perms(string): 使用者同意之權限。
			var perms = 'read_stream';
			
			// FB JavaScript login function
			FB.login(function(response){
				// API 回傳 response 值
				ShowTaoble(response);
			}, { scope: perms } ); // 設定 scope(使用者同意之權限) 參數      
		}	
      
		function logoutFB(){
       
			// FB JavaScript login function
			FB.logout(function(response) {
				ShowTaoble(response);
			});
		}
		$(document).ready(function() {
			$.timeliner({
			});
			// Colorbox Modal
			$(".CBmodal").colorbox({inline:true, initialWidth:100, maxWidth:682, initialHeight:100, transition:"elastic",speed:750});
        $("#fbLoginBtn").click(function(){
          loginFB();
        });

        $("#fbLogoutBtn").click(function(){
          logoutFB();
        });
        
        $("#meBtn").click(function() {
          FB.api('/me/feed?date_format=U&fields=id,message,created_time,picture,place', function(response){
            var data = response.data[4];
            var id = data.id;
            var message = data.message;
            var time = new Date(data.created_time * 1000); //1383060917
            var picture = data.picture;
            var place = data.place;            
            
            if(message) {
              $("#postId").text("https://www.facebook.com/" + id.replace("_", "/posts/")); //取得目前仲用者的 id 資料。
              $("#message").text(message);
              $("#time").text( dateFormat(time) );
              $("#picture").text(picture.replace("_s.jpg", "_n.jpg"));
              if(place) {
                $("#place").text(place.location.city);
              }              
            }
            //ShowTaoble(response);
          });
        });
		
		$("#fun").click( function(time, msg, title) {
			time = new Date(1383060917 * 1000);
			msg = "吃飯的時候看惹小淳的康熙，\n就算在不熟的場合反應還是很快欸 XDD\n\n是很討喜的主持人 :3".replace(/\n/g, "<br>");
			title = msg.substring(0, 5) + "...";
			
			var major = $("h2.timelineMajorMarker:contains('" + dateFormat(time).substring(0, 4) + "')").parent();
			var minor = '<dl class="timelineMinor">' + 
							'<dt id="' + dateFormat(time) + '"><a>' + title + '</a></dt>' +
							'<dd class="timelineEvent" id="' + dateFormat(time) + 'EX" style="display:none;">' +
								'<h3>' + dateText(time) + '</h3>' +
								'<p id="' + dateFormat(time) + '0">' + msg + '</p>' +
								'<br class="clear">' +
							'</dd>' +
						'</d1>';
			major.append(minor);
		});
		
        function dateFormat(date) {
          var y = date.getFullYear();
          var m = date.getMonth() + 1;
          var d = date.getDate();
          var h = date.getHours();
          //return y + "/" + m + "/" + d + "/" + h;
          //return y + "/" + m + "/" + d;
		  return "" + y + m + d;
        }
		function dateText(date) {
			var monthName = ['January', 'February', 'March', 'April', 'May', 'June', 
			'July', 'August', 'September', 'October', 'November', 'December'];
			var y = date.getFullYear();
			var m = date.getMonth();
			var d = date.getDate();
			
			return d + " " + monthName[m] + ", " + y;
		}
        
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
    <input type="button" id="fbLoginBtn" value="Login"/> | 
    <input type="button" id="fbLogoutBtn" value="LogOut"/>

    <input type="button" id="meBtn" value="取得使用者貼文" />
	<input type="button" id="fun" value="test" />
</body>
</html>