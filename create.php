<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => 'ENTER YOUR FACEBOOK APP ID HERE', 'secret' => 'ENTER YOUR FACEBOOK APP SECRET HERE', 'cookie' => true, ));
	$user = $facebook->getUser(); 
	if ($user) { try { 
		$user_albums = $facebook->api('/me/albums?limit=400&offset=0'); 
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
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<TITLE>Choose An Album</TITLE> 
		<LINK REV="made" href="mailto: enter email address here" />
		<META NAME="keywords" CONTENT="meme, meme generator, meme friend, memefriend, memefriend.com, facebook memes, memes from facebook images, friend meme, friendmeme" />
		<META NAME="description" CONTENT="A place where you can create memes from your pictures on Facebook. Because your friends are funnier than pictures of cats and frogs." />
		<META NAME="author" CONTENT="JT Hamrick" />
		<META NAME="ROBOTS" CONTENT="ALL" />
		<link rel="icon" type="image/png" href="http://memefriend.com/favicon.png" />
		<link href="css/reset.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/style.css" media="screen" type="text/css" rel="stylesheet" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /><![endif]-->
		<!--<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();</script>-->
	</head>
	<body id="create" class="your-create">
		<div id="container" class="meme">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div id="container_other">
							<?php if ($user): ?>
							<p class="bold">Don't want to use an image from Facebook? <a href="upload-image.php" class="button primary">Click Here</a> to use an image from your computer!</p><br/>
							<?php if(!empty($albums)) { ?>
							<table id="albums">
								<tr>
						<?php 
							$count = 0; 
							foreach($albums as $album) { 
								if( $count%4 == 0 && $count != 0 ) 
									echo "</tr><tr>"; 
								echo "<td>" . 
									"<a href=\"album.php?id={$album['id']}\">" . 
									"<div class=\"thumb\" style=\"background: url({$album['thumb']}) no-repeat 50% 50%\"></div>" . 
									stringTruncate($album['name'], 25) . 
									"<p class=\"bold_number\">{$album['count']}</p>" . 
									"</a></td>"; 
							$count++; } 
						?>
								</tr>
							</table>
							<?php } ?>
							<?php else: ?>
							<p class="one_liner_create">Login with facebook to create a meme</p>
							<?php endif ?>
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