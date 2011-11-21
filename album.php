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
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Choose An Image</title>
		<LINK REV="made" href="mailto:andrew.fasch@gmail.com" />
		<META NAME="keywords" CONTENT="meme, meme generator, meme friend, memefriend, memefriend.com, facebook memes, memes from facebook images, friend meme, friendmeme" />
		<META NAME="description" CONTENT="A place where you can create memes from your pictures on Facebook. Because your friends are funnier than pictures of cats and frogs." />
		<META NAME="author" CONTENT="JT Hamrick" />
		<META NAME="ROBOTS" CONTENT="ALL" />
		<link rel="icon" type="image/png" href="http://memefriend.com/favicon.png" />
		<link href="css/jquery.fancybox-1.3.4.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/reset.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/style.css" media="screen" type="text/css" rel="stylesheet" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /><![endif]-->
		<!--<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();</script>-->
	</head>
	<body id="create">
		<div id="container" class="meme">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div id="container_other">
							<table id="album">
								<tr>
							<?php 
								$count = 0; 
								foreach($photos as $photo) { 
									$lastChild = ""; 
									if( $count%4 == 0 && $count != 0 ) 
										echo "</tr><tr>"; 
									$count++; 
									echo "<td>" . 
										"<a href=\"{$photo['source']}\" title=\"{$photo['source']}\" rel=\"pic_gallery\">" . 
										"<div class=\"thumb\" style=\"background-image: url({$photo['picture']})\"></div>" . 
										"</a></td>"; 
								} 
								?>
								</tr>
							</table>
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
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script> 
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
		<script>$(function(){$("a[rel=pic_gallery]").fancybox({titlePosition:"over",titleFormat:function(d,c,a,b){return'<a href="library/download.php?user=<?=$user?>&file='+d+'" class="button primary">Use This Image</a>'}})});</script>
		<p class="copy">&copy; 2011 MemeFriend</p>
	</body>
</html>