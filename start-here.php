<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => 'ENTER YOUR FACEBOOK APP ID HERE', 'secret' => 'ENTER YOUR FACEBOOK APP SECRET HERE', 'cookie' => true, ));
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Getting Started With MemeFriend</title>
		<LINK REV="made" href="mailto: enter email address here" />
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
	<body id="start-here">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div class="privacy">
							<h2>Getting Started</h2>
							<p>To access your online photos, click the “Log in with Facebook” tab on the link bar from the home page.</p>
							<p>Select one of the options under the “Create a Meme” tab on the left hand side of the page. Pictures can also be uploaded directly from your computer (.jpg format only) or imported from your Facebook profile. You can use either your own images or your friends’ images to create a meme.</p>
							<p>If using a friend’s image, select their name from the list to browse their albums and photos. If your friend's albums do not show up in the list their privacy settings are keeping them from doing so. If using your own image, your albums will be summoned automatically.</p>
							<p>Click any image for an enlarged preview then select “Use Image” to create the meme.</p>
							<p>You will be redirected to a new page where you can:</p>
							<ul>
								<li>Enter text</li>
								<li>Adjusts text size</li>
								<li>Change font</li>
							</ul>
							<p>Click “Save Image” to publish the meme. All created memes will appear on the “All Memes” page.</p>
							<p>There, viewers can share memes with their friends and vote on their favorites.</p>
							<p>All memes you have personally created will be listed under the “My Memes” tab.</p>
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