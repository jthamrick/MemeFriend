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
		<title>Advertise With Us</title>
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
	<body id="advertisement">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div class="ads">
							<h1>Advertise with MemeFriend</h1>
							<h2>Why you should advertise on MemeFriend</h2>
							<p>MemeFriend is a meme generation website. Users can login using Facebook and create memes from photos they have in their albums, or browse friends albums and create from there.</p>
							<p>The internet meme has grown in popularity in the recent years and has become a staple of internet humor. MemeFriend brings this directly to users using Facebook so they can create a humorous caption of their friends.</p>
							<h2>Demographic visiting MemeFriend</h2>
							<p>The typical type of user is projected to be late teens to mid 20s. Sharing both in male and female gender. College students are a large percentage of users on the website.</p>
							<h2>Size and Pricing of Ads</h2>
							<p>Bottom  - 728x90……………………………$15 for every 10,000 unique visitors/month</p>
							<p>Top - 468x60……………………………….…$15 for every 10,000 unique visitors/month</p>
							<p>In Meme Array - 156x100………………$20 for every 10,000 unique visitors/month</p>
							<h2>Placement of Ads</h2>
							<p>[ Screenshot with ad locations circles ]</p>
							<h2>Traffic &amp; Subscriber Statistics</h2>
							<ul>
								<li class="no-style">October 31 to November 15, 2011:</li>
								<li>1,053 unique visitors</li>
								<li>16,164 pageviews</li>
								<li class="no-style">MemeFriend users come from:</li>
								<li>United States 95.58%</li>
								<li>Canada 2.05%</li>
								<li>Germany 0.42%</li>
								<li>Australia 0.32%</li>
								<li>United Kingdom 0.26%</li>
								<li>Mexico 0.21%</li>
								<li>Ireland 0.11%</li>
								<li>New Zealand 0.11%</li>
								<li>Romania 0.11%</li>
								<li class="small-text">Source: Google Analytics</li>
							</ul>
							<h2>Enquire about Advertising</h2>
							<p>Please send us an email at <a href="mailto:contact@memefriend.com"><u>contact@memefriend.com</u></a></p>
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