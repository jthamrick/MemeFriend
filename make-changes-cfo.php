<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
	
	include('library/configuration.php'); 
	function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
	$meme_path = protect($_GET['file']);
	$result = mysql_query("SELECT * FROM `facebook_images` WHERE `path`='photos/$meme_path'") or die(mysql_error());
	while($row = mysql_fetch_array($result)) { 
		$memeName = $row['meme_name'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Recreate A Meme</title>
		<LINK REV="made" href="mailto:andrew.fasch@gmail.com" />
		<META NAME="keywords" CONTENT="meme, meme generator, meme friend, memefriend, memefriend.com, facebook memes, memes from facebook images, friend meme, friendmeme" />
		<META NAME="description" CONTENT="A place where you can create memes from your pictures on Facebook. Because your friends are funnier than pictures of cats and frogs." />
		<META NAME="author" CONTENT="JT Hamrick" />
		<META NAME="ROBOTS" CONTENT="ALL" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<link rel="icon" type="image/png" href="http://memefriend.com/favicon.png" />
		<link href="css/reset.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/style.css" media="screen" type="text/css" rel="stylesheet" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Coda+Caption:800|Days+One|Candal|Carter+One|Oswald|Bowlby+One+SC' rel='stylesheet' type='text/css' />
		<!--<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();
</script>-->
	</head>
	<body id="make-changes">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<div id="content" class="create-meme">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td>
							<?php if ($user): ?>
							<canvas id="canvas" width="" height=""><p class="fallback">We are truely sorry but your browser does not support HTML5 canvas, which is what this website uses to create the memes. If you open this back up in Google Chrome or Mozilla Firefox it works like a charm and you will be able to create your masterpiece!</p></canvas>
						</td>
						<td>
							<div id="create-form">
								<img src="img/blank_loader.png" alt="loader" id="my_image" width="220px" height="19px" />
								<p class="itemLine">Meme Name:<br/><label><?php echo $memeName ?></label></p>
								<input type="hidden" value="<?php echo $memeName ?>" name="memename" id="memename" />
								<p class="itemLine">Font Style: 
									<select id="text_style">
										<option value="'Bowlby One SC'">Bowlby One SC</option>
										<option value="'Candal'">Candal</option>
										<option value="'Coda Caption'">Coda Caption</option>
										<option value="'Carter One'">Carter One</option>
										<option value="'Days One'">Days One</option>
										<option value="'Oswald'">Oswald</option>
									</select></p>
								<p class="section_title">Top Text</p>
								<p class="itemLine">Color: 
									<select id="tcolor">
										<option value="#FFFFFF">White</option>
										<option value="#000000">Black</option>
										<option value="red">Red</option>
										<option value="blue">Blue</option>
										<option value="green">Green</option>
										<option value="pink">Pink</option>
									</select>
									&nbsp;Size: 
									<select id="top_size">
										<option value="34pt">34</option>
										<option value="32pt">32</option>
										<option value="30pt">30</option>
										<option value="28pt">28</option>
										<option value="26pt">26</option>
										<option value="24pt">24</option>
										<option value="22pt">22</option>
										<option value="20pt">20</option>
										<option value="18pt">18</option>
									</select></p>
								<p><div class="label">Line One: </div><input type="text" id="topText1_" size="40" value=""/></p>
								<p><div class="label">Line Two: </div><input type="text" id="topText2_" size="40" value=""/></p><br/>
								<p class="section_title">Bottom Text</p>
								<p class="itemLine">Color: 
									<select id="bcolor">
										<option value="#FFFFFF">White</option>
										<option value="#000000">Black</option>
										<option value="red">Red</option>
										<option value="blue">Blue</option>
										<option value="green">Green</option>
										<option value="pink">Pink</option>
									</select>
									&nbsp;Size: 
									<select id="bottom_size">
										<option value="28pt">28</option>
										<option value="26pt">26</option>
										<option value="24pt">24</option>
										<option value="22pt">22</option>
										<option value="20pt">20</option>
										<option value="18pt">18</option>
										<option value="16pt">16</option>
										<option value="14pt">14</option>
										<option value="12pt">12</option>
									</select></p>
								<p><div class="label">Line One: </div><input type="text" id="bottomText1_" size="40" value=""/></p>
								<p><div class="label">Line Two: </div><input type="text" id="bottomText2_" size="40" value=""/></p><br/>
								<button onclick="saveViaAJAX();" class="button primary" id="sMeme">Save Meme</button>
							</div>
							<?php else: ?>
							<p class="one_liner">Login with facebook to create a meme</p>
							<?php endif ?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<?php include('templates/footer.php') ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<p class="copy">&copy; 2011 MemeFriend</p>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript">
			var timer;var path=document.URL.split("=")[1];
			if(path==undefined){path=""}if(path!=""){var fileName=path;$("#image").attr("src","photos/"+fileName)}window.onload=function(){var b=document.getElementById("canvas");
			var c=b.getContext("2d");
			var a=document.getElementById("image");
			a.onload=function(){b.width=a.width;b.height=a.height; $("#form").attr("height",a.height)};
			a.src="photos/"+fileName;
			timer=setInterval("changeScene()",50)};
			function changeScene(){
				var f=document.getElementById("canvas");
				var g=f.getContext("2d");
				var o=$("#text_style").val();
				var m=$("#top_size").val();
				var w=$("#tcolor").val();
				var s=$("#bcolor").val();
				var n=$("#bottom_size").val();
				var d=$("#topText2_").val();
				var e=$("#topText1_").val();
				var a=$("#bottomText2_").val();
				var b=$("#bottomText1_").val();
				width=$("canvas").width();
				height=$("canvas").height();
				var c=document.getElementById("image");
				g.drawImage(c,0,0,width,height);
				g.textAlign="center";
				g.font= m+o;
				g.strokeStyle="#000000";
				g.fillStyle=w;
				g.fillText(e,width/2,40);
				g.strokeText(e,width/2,40);
				g.fillText(d,width/2,75);
				g.strokeText(d,width/2,75);
				g.font= n+o;
				g.strokeStyle="#000000";
				g.fillStyle=s;
				g.fillText(b,width/2,height-50);
				g.strokeText(b,width/2,height-50);
				g.fillText(a,width/2,height-20);
				g.strokeText(a,width/2,height-20)};
		</script>
		<script type="text/javascript">
			function saveViaAJAX(){
				var c=document.getElementById("canvas");
				var b=c.toDataURL("image/png");
				var e=document.URL.split("=")[1];
				$("#my_image").attr("src","img/loader.gif");
				var aa=$("#memename").val();
				var bb=$("#allow").val();
				
				if(e==undefined){e=""}
				if(e!=""){var f=e}
				var a="canvasData="+b;
				var d=new XMLHttpRequest();
				d.open("POST","library/process-new.php?file="+f+"&name="+aa+"&allow=1",true);
				d.setRequestHeader("Content-Type","canvas/upload");
				d.send(a);
				d.onreadystatechange=function(){
					if(d.readyState==4){
						window.location.href="meme.php?file="+d.responseText
			}}};
			
		</script>
		<img src="" alt="Hidden Meme" id="image" class="hidden"/>
	</body>
</html>
