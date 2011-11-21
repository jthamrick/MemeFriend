<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser(); 
	
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); } else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<TITLE>Choose A Friend</TITLE> 
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
	<body id="create-friend">
		<div id="container" class="meme">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<label for="filter" class="bold">Filter: </label><input type="text" name="searchInput" value="" id="searchInput" size="25"/>
						<span class="bold">&lt;-- type someone's name to filter the results</span>
					</td>
				</tr>
				<tr>
					<td>
						<?php if ($user): ?>
							<table>
								<tbody id="resultTable">
								<tr>
								<?php
									if ($user) { try { 
										$friends = $facebook->api('/me/friends');
										$count = 0;
										foreach ($friends as $key=>$value) {
											foreach ($value as $fkey=>$fvalue) {
												if($count%3 == 0 && $count != 0) 
													echo '</tr><tr>';
												echo '<td>' .
													'<a href="friend-albums.php?id='. $fvalue['id'] .'" />' .
													' <img src="https://graph.facebook.com/'.$fvalue['id'].'/picture" width="54px" height="54px" />' .
													'<span>' . 
													stringTruncate($fvalue['name'], 20) . 
													'</span>' .
													'</a></td>';
													$count++;
												}
											}
											} catch (FacebookApiException $e) { error_log($e); $user = null; }
										}
								?>
								</tr>
								</tbody>
							</table>
						<?php else: ?>
						<p class="one_liner_create">Login with facebook to create a meme</p>
						<?php endif ?>
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(document).ready(function() {
		 //Declare the custom selector 'containsIgnoreCase'.
		      $.expr[':'].containsIgnoreCase = function(n,i,m){
		          return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase())>=0;
		      };

		      $("#searchInput").keyup(function(){

		          $("#resultTable").find("td").hide();
		          var data = this.value.split(" ");
		          var jo = $("#resultTable").find("td");
		          $.each(data, function(i, v){
		               //Use the new containsIgnoreCase function instead
		               jo = jo.filter("*:containsIgnoreCase('"+v+"')");
		          });
		          jo.show();

		      }).focus(function(){
		          this.value="";
		          $(this).css({"color":"black"});
		          $(this).unbind('focus');
		      }).css({"color":"#C0C0C0"});
		  });
		</script>
	</body>
</html>