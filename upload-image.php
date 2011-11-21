<?php 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { try { 
		$logoutUrl = $facebook->getLogoutUrl(); 
		} catch (FacebookApiException $e) { error_log($e); $user = null; }}
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); }
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Upload Image To Create A Meme</title>
		<LINK REV="made" href="mailto:andrew.fasch@gmail.com" />
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
	<body id="upload">
		<div id="container" class="meme">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table>
				<tr>
					<td>
			<div id="container_upload">
				<?php if ($user): ?>
				<form id="imageform" method="post" enctype="multipart/form-data" action="library/ajaximage.php">
					<input type="hidden" value="<?php echo $user ?>" id="user" name="user" />
					Upload your image <input type="file" name="photoimg" id="photoimg" />
				</form>
				<div id="preview"></div>
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
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>
		<script type="text/javascript">
			$('#photoimg').live('change', function() { 
				$("#preview").html('');
				$("#preview").html('<img src="img/loader.gif" alt="Uploading...."/>');
				$("#imageform").ajaxForm({
					target: '#preview'
				}).submit();
			});
		</script>
	</body>
</html>