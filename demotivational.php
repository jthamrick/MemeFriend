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
		<title>Demotivational</title>
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
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css' />
		<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();</script>
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
								<p><div class="label">Title: </div><input type="text" id="bottomText1_" size="40" value=""/></p>
								<p><div class="label">Text: </div><input type="text" id="bottomText2_" size="40" value=""/></p>
								<p><input type="text" id="bottomText3_" size="40" value=""/></p><br/>
								<button onclick="saveViaAJAX();" class="button primary" id="sMeme">Save Motivation</button>
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
			var timer;
			var path=document.URL.split("=")[1];
			if(path==undefined){
				path=""
			}
			if(path!=""){
				var fileName=path;
				$("#image").attr("src","photos/"+fileName)
			}
			window.onload=function(){
				var b=document.getElementById("canvas");
				var c=b.getContext("2d");
				var a=document.getElementById("image");
				a.onload=function(){
					b.width=a.width+80;
					b.height=a.height+180; 
					$("#form").attr("height",a.height)
				};
				a.src="photos/"+fileName;
				timer=setInterval("changeScene()",50);
			};
			function changeScene(){
				var f=document.getElementById("canvas");
				var g=f.getContext("2d");
				var r=$("#bottomText3_").val();
				var a=$("#bottomText2_").val();
				var b=$("#bottomText1_").val();
				width=$("canvas").width();
				height=$("canvas").height();
				var c=document.getElementById("image");
				g.fillStyle="#000000";
				g.fillRect(0, 0, width+80, height+180);
				g.lineWidth=1;
				g.strokeStyle="#FFFFFF";
				g.strokeRect(50, 50, width-100, height-200);
				g.drawImage(c,55,55,width-110,height-210);
				g.textAlign="center";
				g.lineWidth=2;
				g.font="36pt 'Playfair Display'";
				g.fillStyle="#FFFFFF";
				g.fillText(b,width/2,height-100);
				g.font="18pt Verdana";
				g.fillText(a,width/2,height-50);
				g.fillText(r,width/2,height-20);
			};
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
				d.open("POST","library/process-new.php?file="+f+"&name="+aa+"&allow="+bb,true);
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
