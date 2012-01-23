<?php 
	require 'library/functions.php'; 
	require 'library/facebook.php'; 
	$facebook = new Facebook(array( 'appId' => 'ENTER YOUR FACEBOOK APP ID HERE', 'secret' => 'ENTER YOUR FACEBOOK APP SECRET HERE', 'cookie' => true, ));
	include('library/configuration.php'); 
	$user = $facebook->getUser(); 
	if ($user) { $logoutUrl = $facebook->getLogoutUrl(); 
	} else { $loginUrl = $facebook->getLoginUrl(array( 'scope' => 'user_photos,friends_photos' )); } 
	
	function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
	$meme_path = protect($_GET['file']);

	include('library/configuration.php'); 
	$result = mysql_query("SELECT * FROM facebook_images WHERE meme_path ='$meme_path'") or die(mysql_error());
	while($row = mysql_fetch_array($result)) { 
		$image = $row['path'];
		list($ext, $nImage) = explode('/', $image);
		$upvote = $row['popularity']+1;
		$downvote = $row['popularity']-1;
		$id = $row['id'];
		$approved = $row['approved'];
		$popularity = $row['popularity'];
		$memeName = $row['meme_name'];
	}
	
	$origin_id = mysql_query("SELECT `id` FROM `facebook_images` WHERE `meme_path` ='$meme_path'") or die(mysql_error());
	$original_id = mysql_fetch_array($origin_id);
	
	$original_image = $_GET['file'];
	
	//get the max database row from the database
	$results = mysql_query("SELECT MAX(id) FROM `facebook_images` WHERE `meme_path` IS NOT NULL");
	$data = mysql_fetch_array($results);
	
	if ($original_id[0] == 1) {
		$next_meme = $_GET['file'];
	} else {
		//get the next database row for the next button
		$select_2 = mysql_query("SELECT * FROM `facebook_images` WHERE `id` < $id AND `meme_path` IS NOT NULL ORDER BY `id` DESC LIMIT 1");
		while($rowsn = mysql_fetch_array($select_2)) {
			$next_meme = $rowsn['meme_path'];
		}
	}
	
	if ($original_id[0] == $data[0]) {
		$previous_meme = $_GET['file'];
	} else {
		//get the previous database row for the previous button
		$select_1 = mysql_query("SELECT * FROM `facebook_images` WHERE `id` > $id AND `meme_path` IS NOT NULL ORDER BY `id` ASC LIMIT 1");
		while($rows = mysql_fetch_array($select_1)) {
			$previous_meme = $rows['meme_path'];
		}
	}
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Meme</title>
		<LINK REV="made" href="mailto: enter email address here" />
		<META NAME="keywords" CONTENT="meme, meme generator, meme friend, memefriend, memefriend.com, facebook memes, memes from facebook images, friend meme, friendmeme" />
		<META NAME="description" CONTENT="A place where you can create memes from your pictures on Facebook. Because your friends are funnier than pictures of cats and frogs." />
		<META NAME="author" CONTENT="JT Hamrick" />
		<META NAME="ROBOTS" CONTENT="ALL" />
		<link rel="icon" type="image/png" href="http://memefriend.com/favicon.png" />
		<link href="css/reset.css" media="screen" type="text/css" rel="stylesheet" />
		<link href="css/style.css" media="screen" type="text/css" rel="stylesheet" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/all-ie-only.css" /><![endif]-->
        <!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
		<!--<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-6340872-7"]);_gaq.push(["_setDomainName","memefriend.com"]);_gaq.push(["_trackPageview"]);(function(){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)})();</script>-->
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
		<div id="container" class="meme">
			<?php include('templates/header.php') ?>
			<?php include('templates/navigation.php') ?>
			<?php include('templates/announcement.php') ?>
			<div id="container_other" class="meme-cfo">
				<table>
					<tr>
						<td>
							<a href="category.php?name=<?php echo $memeName ?>"><p class="meme-title"><?php echo $memeName ?></p></a>
						</td>
					</tr>
					<tr>
						<td>
							<?php $name = $_GET['file']; echo '<img src='.$name.' alt="memeFullsize" />'; ?>
						</td>
						<td>
							<div id="meme-buttons">
								<ul>
									<li><p class="tinyurl">TinyURL: <?php function get_tiny_url($url) { $ch = curl_init(); $timeout = 5; curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout); $data = curl_exec($ch); curl_close($ch); return $data; } $new_url = get_tiny_url('http://memefriend.com/meme.php?file='.$name); echo $new_url ?></p>
										
										</li>
									<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
									<li><div class="fb-like" data-href="<?php echo $new_url ?>" data-send="true" data-layout="button_count" data-width="150" data-show-faces="false"></div></li>
									<li><g:plusone annotation="inline"></g:plusone></li>
									<li class="votes">
										<div id="showdata">Rating: <? echo $popularity?></div>
										<form id="Formup" action="library/data.php?file=<?php echo $name ?>" method="post">
											<input type="hidden" value="<?php echo $upvote ?>" name="popularity" id="popularity-up" />
											<input type="submit" value="Up Vote" class="button primary"/>
										</form>
										<form id="Formdown" action="library/data.php?file=<?php echo $name ?>" method="post">
											<input type="hidden" value="<?php echo $downvote ?>" name="popularity" id="popularity-down" />
											<input type="submit" value="Down Vote" class="button primary"/>
										</form>
									</li>
									<li>
										<a href="meme.php?file=<?php echo $previous_meme ?>" class="button primary" id="previous-button">Previous Meme</a>&nbsp;&nbsp;
										<a href="meme.php?file=<?php echo $next_meme ?>" class="button primary" id="next-button">Next Meme</a>
									</li>
										<?php if ($user): ?>
									<li>
										<a href="library/report.php?file=<?php echo $name ?>" class="button primary">Report Image</a> for review.
									</li>
									<?php
									if ($approved == 1) {
										echo '<li><a href="make-changes-cfo.php?file='.$nImage.'" class="button primary" id="cNew-button">Create A Meme</a> using this image.</li>';
									} else {}
									?>
										<?php else: ?>
									<li>Login to report this image for review.</li>
										<?php endif ?>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" id="advertisement">
							<?php include('templates/footer.php') ?>
							<div id="eight-grid">
									<?php 
										$result = mysql_query("SELECT * FROM facebook_images WHERE meme_path IS NOT NULL ORDER BY RAND() LIMIT 8") or die(mysql_error());
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
				</table>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
		<p class="copy">&copy; 2011 MemeFriend</p>
	</body>
</html>