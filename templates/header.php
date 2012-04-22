<?php
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
	
	include('library/configuration.php'); 
	
	include('library/paginator.class.php'); 
	$result = mysql_query("SELECT * FROM facebook_images WHERE meme_path IS NOT NULL"); 
	$num_rows = mysql_num_rows($result);
	$pages = new Paginator;
	$pages->items_total = $num_rows;
	$pages->mid_range = 9;
	$pages->paginate();
	
	date_default_timezone_set('America/Denver');
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
		<title>MemeFriend</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rev="made" href="mailto:andrew.fasch@gmail.com" />
		<meta name="keywords" content="meme, meme generator, meme friend, memefriend, memefriend.com, facebook memes, memes from facebook images, friend meme, friendmeme" />
		<meta name="description" content="A place where you can create memes from your pictures on Facebook. Because your friends are funnier than pictures of cats and frogs." />
		<meta name="author" content="JT Hamrick" />
		<meta name="ROBOTS" content="ALL" />
		<link rel="icon" type="image/png" href="http://memefriend.com/favicon.png" />
		<link href="css/reset.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/style.css?version=12" media="screen" type="text/css" rel="stylesheet" />
			
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Coda+Caption:800|Days+One|Candal|Carter+One|Oswald|Bowlby+One+SC' rel='stylesheet' type='text/css' />
		<script src="http://chrisjacob.github.com/Respond/respond.src.js" language="javascript" type="text/javascript"></script>
		<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();</script>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) {return;}
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
		<div id="container">
			<header id="header">
				<a href="http://memefriend.com/">
					<img src="img/mf_logo.png" alt="MemeFriend" />
				</a>
				<div id="top-advertisement">
					<script type="text/javascript"><!--
					google_ad_client = "ca-pub-1591856625609850";
					google_ad_slot = "9272261326";
					google_ad_width = 468;
					google_ad_height = 60;
					//-->
				</script>
				<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
				</div>
				<div id="announcement">
					<p class="line-height-fifty">***Brand new site and brand new list of features. Click <a href="new-features.php"><u>here</u></a> to see what we added.</p>
				</div>
			</header>