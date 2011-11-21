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
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>MemeFriend</title>
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
	<body id="index">
		<div id="container">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<table id="body-table">
				<tr>
					<td>
						<div id="all-grid">
						<?php 
							$result = mysql_query("SELECT * FROM facebook_images WHERE meme_path IS NOT NULL ORDER BY id DESC $pages->limit") or die(mysql_error());
							$count = 0; 
							while($row = mysql_fetch_array($result)) { 
								$date = $row['timestamp'];
								list($path, $fileName) = explode('/', $row['meme_path']);
								if (time() - strtotime($date) <= 86400) {
									if( $count%2 == 0) {
										echo '<a href="meme.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' . 
											'<img src="http://memes.memefriend.com/sandbox/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
											"</div>" .
											'<img src="img/new-badge.png" alt="newbadge" width="74px" height="74px" />' . 
											"</div></a>";
									} else {
										echo '<a href="meme.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' .
											'<img src="http://memefriend.com/sandbox/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
											"</div>" .
											'<img src="img/new-badge.png" alt="newbadge" width="74px" height="74px" />' . 
											"</div></a>";
									}
								} else {
									if( $count%2 == 0) {
										echo '<a href="meme.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' .
											'<img src="http://memefriend.com/sandbox/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
											"</div></div></a>";
									} else {
										echo '<a href="meme.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' . 
											'<img src="http://memes.memefriend.com/sandbox/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
											"</div></div></a>";
										}
									}
									$count++; 
								} 
						?>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="paginator">
							<span class="pages"><?php echo "Page $pages->current_page of $pages->num_pages"?></span><br/>
							<?php echo $pages->display_pages(); ?>
						</div>
						<?php include('templates/footer.php') ?>
					</td>
				</tr>
			</table>
		</div>
		<p class="copy">&copy; 2011 MemeFriend</p>
	</body>
</html>