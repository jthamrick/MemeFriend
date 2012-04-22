<?php 
	if( !isset($_GET['id']) ) die("No direct access allowed!"); 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { try { $logoutUrl = $facebook->getLogoutUrl(); 
		$params = array(); 
		if( isset($_GET['offset']) ) $params['offset'] = $_GET['offset']; 
		if( isset($_GET['limit']) ) $params['limit'] = $_GET['limit']; 
		$params['fields'] = 'name,source,images'; 
		$params = http_build_query($params, null, '&'); 
		$album_photos = $facebook->api("/{$_GET['id']}/photos?limit=400&offset=0"); 
		$photos = array(); 
		if(!empty($album_photos['data'])) { 
			foreach($album_photos['data'] as $photo) { 
				$temp = array(); 
				$temp['id'] = $photo['id']; 
				$temp['name'] = (isset($photo['name'])) ? $photo['name']:''; 
				$temp['picture'] = $photo['images'][1]['source']; 
				$temp['source'] = $photo['source']; 
				$photos[] = $temp; 
		}} 
		} catch (FacebookApiException $e) { error_log($e); $user = null; } 
	} else {header("Location: index.php");} 
	
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
		<link href="css/jquery.fancybox-1.3.4.css" media="screen" type="text/css" rel="stylesheet" />
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
			<section id="middle"> 
				<?php include('templates/navigation.php') ?>
				<article id="main">
					<?php if ($user): ?>
					<?php if(!empty($albums)) { ?>
							<?php 
								$count = 0; 
								foreach($photos as $photo) { 
									$lastChild = ""; 
									$count++; 
									echo "<div id='album'>" . 
										"<a href=\"{$photo['source']}\" title=\"{$photo['source']}\" rel=\"pic_gallery\">" . 
										"<div class=\"thumb\" style=\"background-image: url({$photo['picture']})\"></div>" . 
										"</a></div>"; 
								} 
								?>
					<?php } ?>
					<?php else: ?>
					<p class="one_liner_create">Login with facebook to create a meme</p>
					<?php endif ?>
				</article>
				<!-- make the middle region's background color expand -->
				<div class="clear"></div>
			</section>
			<footer id="footer">
				<div id="bottomAdvertisement">
								<script type="text/javascript"><!--
								google_ad_client = "ca-pub-1591856625609850";
								/* Footer Ad */
								google_ad_slot = "9960839848";
								google_ad_width = 728;
								google_ad_height = 90;
								//-->
								</script>
								<script type="text/javascript"
								src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
								</script>
				</div>
				<p class="copy">&copy; 2011 MemeFriend</p>
			</footer>
		</div>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script> 
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
		<script>$(function(){$("a[rel=pic_gallery]").fancybox({titlePosition:"over",titleFormat:function(d,c,a,b){return'<a href="library/download.php?user=<?=$user?>&file='+d+'" class="button primary">Use This Image</a>'}})});</script>
	</body>
</html>