<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { try {
		$userId = $_GET['id']; 
		$userAlbums = "/{$userId}/albums?&limit=400&offset=0&access_token={$facebook->getAccessToken()}";
		$user_albums = $facebook->api($userAlbums); 
		$albums = array(); 
		if(!empty($user_albums['data'])) { 
			foreach($user_albums['data'] as $album) { 
				$temp = array(); $temp['id'] = $album['id']; 
				$temp['name'] = $album['name']; 
				$temp['thumb'] = "https://graph.facebook.com/{$album['id']}/picture?type=album&access_token={$facebook->getAccessToken()}"; 
				$temp['count'] = (!empty($album['count'])) ? $album['count']:0; 
				if($temp['count']>1 || $temp['count'] == 0) $temp['count'] = $temp['count'] . " photos"; 
				else $temp['count'] = $temp['count'] . " photo"; 
				$albums[] = $temp; } } } catch (FacebookApiException $e) { error_log($e); 
		$user = null; }} 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
	
	function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
	$userName = protect($_GET['name']);
	
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
		<script src="http://www.i-marco.nl/weblog/jquery-accordion-menu/jquery-1.2.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			function initMenu() {
				$('#nav ul').hide();
				$('#nav li a').click(
					function() {
						$(this).next().slideToggle('normal');	
					}
				);
			}
			$(document).ready(function() {initMenu();});
		</script>
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
					<?php if(!empty($albums)) { ?>
						<?php 
							$count = 0; 
							foreach($albums as $album) { 
								echo "<div id='album'>" . 
									"<a href=\"album.php?id={$album['id']}\">" . 
									"<div class=\"thumb\" style=\"background: url({$album['thumb']}) no-repeat 50% 50%\"></div>" . 
									stringTruncate($album['name'], 25) . 
									"<p class=\"bold_number\">{$album['count']}</p>" . 
									"</a></div>"; 
							$count++; } 
						?>
							<?php } ?>
							<?php if(empty($albums)) { ?>
								<p>It appears that your friend's privacy settings are keeping us from showing their images.</p>
							<?php } ?>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<?php include('templates/footer.php') ?>