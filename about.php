<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>About Us</title>
		<LINK REV="made" href="mailto:andrew.fasch@gmail.com" />
		<META NAME="keywords" CONTENT="meme, meme generator, meme friend, memefriend, memefriend.com, facebook memes, memes from facebook images, friend meme, friendmeme" />
		<META NAME="description" CONTENT="A place where you can create memes from your pictures on Facebook. Because your friends are funnier than pictures of cats and frogs." />
		<META NAME="author" CONTENT="JT Hamrick" />
		<META NAME="ROBOTS" CONTENT="ALL" />
		<link rel="icon" type="image/png" href="http://memefriend.com/favicon.png" />
		<link href="css/reset.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/style.css" media="screen" type="text/css" rel="stylesheet" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /><![endif]-->
		<!--<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();
</script>-->
	</head>
	<body id="about">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div class="about-page">
							<h2>Welcome to memefriend.com</h2>
							<p>A place where you can create memes from your pictures on Facebook.</p>
							<p>Because your friends are funnier than pictures of cats and frogs.</p>
							<p>We are currently in the testing phase for this website. The official launch will be in a couple weeks.</p>
							<p>If you have any comments or concerns please send us a detailed email at <a href="mailto:contact@memefriend.com?Subject=About%20Page%20Contact" class="mail">contact@memefriend.com</a> or send us a message on the contact page. We want to make this site better and right now we need your help.</p>
							<p>If you have an issue with the content of a meme itself please “Report Abuse” and state any comments and concerns regarding the meme. Our team will review the meme for content promptly.</p>
							<p>Don't post anything that is mean or offensive. Let's keep the humor clean, and hilarious!!!</p><br/>
							<h2>Getting Started</h2>
							<p>To access your pictures, click the “Log in with Facebook” tab on the link bar from the home page.</p>
							<p>Click “Create Meme” to start browsing your albums for the perfect picture.</p>
							<p>Select “Use Picture” on the image preview to add captions.</p>
							<p>You will be redirected to the page where you can: </p>
							<ul>
								<li>Enter text</li>
								<li>Adjusts text size</li>
								<li>Change font</li>
							</ul>
							<p>Click “Save Image” to publish the meme. It will then be posted to the “All Memes” page.</p>
							<p>All memes you have created will also be listed under the “My Memes” tab.</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<?php include('templates/footer.php') ?>
					</td>
				</tr>
			</table>
		</div>
		<p class="copy">&copy; 2011 MemeFriend</p>
	</body>
</html>