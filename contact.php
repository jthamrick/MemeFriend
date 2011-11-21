<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contact Us At MemeFriend</title>
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
	<body id="contact">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table>
				<tr>
					<td>
			<p class="aboveContact">If you are having problems with logging into facebook try the following steps:<br/>clear your browser's cache and cookies, refresh memefriend.com and try to login with<br/>facebook one more time. If that does not fix your error, let us know and we will see what we can do for you.<br/><br/></p>
			<form id="contact-form" method="post" action="library/send.php" onsubmit="return validation(this);">
				<ul> 
					<li>
						<label for="subject">Subject</label>
						<select name="Subject">
							<option value="General Inquiry">General Inquiry</option>
							<option value="Site Issue">Site Issue</option>
							<option value="Advertising">Advertising</option>
						</select>
					</li>
					<li class="slider"> 
						<label for="name">Name</label> 
						<input type="text" id="Name" name="Name" class="name" size="40" /> 
					</li> 	
					<li class="slider"> 
						<label for="email">Email</label> 
						<input type="text" id="Email" name="Email" class="email" size="40" /> 
					</li> 
					<li class="slider"> 
						<label for="phone">Phone</label> 
						<input type="text" id="Phone" name="Phone" class="phone" size="40" /> 
					</li> 
					<li class="slider"> 
						<label for="message">Message</label> 
						<textarea type="text" id="Inquiry" name="Inquiry" rows="15" cols="60" class="inquiry"></textarea> 
					</li>
				</ul> 
				<input type="image" name="submit" src="img/submit_button.png" class="submitBUTTON" />
			</form>
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
		<script type="text/javascript" src="js/jquery.slidinglabels.min.js"></script> 
		<script type="text/javascript" src="js/labels.js"></script>
		<script LANGUAGE="javascript">
		function validation(form) {
			if(form.Name.value == '') {
				alert('Please enter your name');
				form.Name.focus();
				return false;
			}
			if(form.Email.value == '') {
				alert('Please enter your email address');
				form.Email.focus();
				return false;
			}
			if(form.Inquiry.value == '') {
				alert('Please enter a message');
				form.Inquiry.focus();
				return false;
			}
		return true;
		} 
		</script>
	</body>
</html>