<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
<?php
	function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
	$meme_path = protect($_GET['file']);
	$tail = substr($meme_path, strlen($meme_path)-14, 14);
	$memePATH = "memes/".$tail;
	
	$result = mysql_query("SELECT * FROM facebook_images WHERE meme_path ='$meme_path'");
	while($row = mysql_fetch_array($result)) { 
		$image = $row['path'];
		list($ext, $nImage) = explode('/', $image);
		$upvote = $row['popularity']+1;
		$downvote = $row['popularity']-1;
		$id = $row['id'];
		$approved = $row['approved'];
		$popularity = $row['popularity'];
		$memeName = $row['meme_name'];
		$memePath = $row['meme_path'];
	}
	
	if ($approved == 0) {
		$Dchecked = 'checked';
	} else {
		$Achecked = 'checked';
	}
	
	$original_image = protect($_GET['file']);
?>
	<script type="text/javascript" src="http://webstuffshare.com/demo/AskUserAction/jquery-1.4.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.ask').click(function(e) {
				e.preventDefault();
				thisHref = $(this).attr('href');
				if($(this).next('div.question').length <= 0)
					$(this).after('<div class="question">Are you sure?<br/> <span class="yes">Yes</span><span class="cancel">Cancel</span></div>');
				$('.question').animate({opacity: 1}, 300);
				$('.yes').live('click', function(){
					window.location = thisHref;
				});
				$('.cancel').live('click', function(){
					$(this).parents('div.question').fadeOut(300, function() {
						$(this).remove();
					});
				});	
			});	
		});
	</script>
	<a href="category.php?name=<?php echo $memeName ?>" style="color:black;"><p class="meme-title"><?php echo $memeName ?></p></a>
	<?php $name = $_GET['file']; echo '<img src='.$name.' alt="memeFullsize" />'; ?>
	<div id="meme-buttons">
		<p class="share">Share</p>
								<ul>
									<li class="tu_background"><p class="tinyurl">TinyURL: <?php function get_tiny_url($url) { $ch = curl_init(); $timeout = 5; curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout); $data = curl_exec($ch); curl_close($ch); return $data; } $new_url = get_tiny_url('http://memefriend.com/meme.php?file='.$memePATH); echo $new_url ?></p></li>
									<li class="tr_background"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
									<li class="fb_background"><div class="fb-like" data-href="<?php echo $new_url ?>" data-send="true" data-layout="button_count" data-width="150" data-show-faces="false"></div></li>
									<li class="gp_background"><g:plusone annotation="inline"></g:plusone></li>
									<li class="us_top">
										<form id="Formallow" action="library/allow.php" method="post">
											<p>Allow others to create a meme<br/>using this image: 
												<input type="radio" name="allow" id="allow" value="1" <?php echo $Achecked ?> /> Yes
												<input type="radio" name="allow" id="dallow" value="0" <?php echo $Dchecked ?> /> No
											</p>
											<input type="hidden" name="user" id="user" value="<?php echo $user ?>" />
											<input type="hidden" name="image" id="image" value="<?php echo $original_image ?>" />
											<input type="submit" value="Allow" id="sAllow" class="button primary"/>
										</form>
									</li>
									<li class="votes us_middle">
										<form id="Formup" action="library/data.php?file=<?php echo $memePATH ?>" method="post">
												<input type="hidden" value="<?php echo $upvote ?>" name="popularity" id="popularity-up" />
												<input type="image" name="submit" src="img/up-vote.png" class="thumbs" />
										</form>
										<div id="showdata"><? echo $popularity ?></div>
										<form id="Formdown" action="library/data.php?file=<?php echo $memePATH ?>" method="post">
											<input type="hidden" value="<?php echo $downvote ?>" name="popularity" id="popularity-down" />
											<input type="image" name="submit" src="img/down-vote.png" class="thumbs" />
										</form>
									</li>
									<?php
									if ($approved == 1) {
										echo '<li class="us_middle"><a href="make-changes-cfo.php?file='.$nImage.'" class="button primary" id="cNew-button">Caption this image</a></li>';
									} else {}
									?>
									<li class="us_bottom"><a href="library/delete.php?file=<?php echo $original_image ?>" class="ask button danger icon trash primary">Delete Meme</a></li>
								</ul>
							</div>
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
														'<img src="http://memes.memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
														"</div>" .
														'<img src="img/new-badge.png" alt="newbadge" width="74px" height="74px" />' . 
														"</div></a>";
												} else {
													echo '<a href="meme.php?file='.$row['meme_path'].'">' .
														'<div class="image-container">' .
														'<div class="entry">' .
														'<img src="http://memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
														"</div>" .
														'<img src="img/new-badge.png" alt="newbadge" width="74px" height="74px" />' . 
														"</div></a>";
												}
											} else {
												if( $count%2 == 0) {
													echo '<a href="meme.php?file='.$row['meme_path'].'">' .
														'<div class="image-container">' .
														'<div class="entry">' .
														'<img src="http://memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
														"</div></div></a>";
												} else {
													echo '<a href="meme.php?file='.$row['meme_path'].'">' .
														'<div class="image-container">' .
														'<div class="entry">' . 
														'<img src="http://memes.memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
														"</div></div></a>";
													}
												}
												$count++; 
											} 
									?>
		</div>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<?php include('templates/footer.php') ?>