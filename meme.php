<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
		<?php
			function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
			$meme_path = protect($_GET['file']);
			$tail = substr($meme_path, strlen($meme_path)-14, 14);
			$memePATH = "memes/".$tail;

			$result = mysql_query("SELECT * FROM facebook_images WHERE meme_path ='$memePATH'") or die(mysql_error());
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

			$origin_id = mysql_query("SELECT `id` FROM `facebook_images` WHERE `meme_path` ='$memePATH'") or die(mysql_error());
			$original_id = mysql_fetch_array($origin_id);

			$original_image = $memePATH;

			//get the max database row from the database
			$results = mysql_query("SELECT MAX(id) FROM `facebook_images` WHERE `meme_path` IS NOT NULL");
			$data = mysql_fetch_array($results);

			if ($original_id[0] == 1) {
				$next_meme = $memePATH;
			} else {
				//get the next database row for the next button
				$result = mysql_query("SELECT `meme_path` FROM `facebook_images` WHERE `id` < $id AND `meme_path` IS NOT NULL ORDER BY `id` DESC LIMIT 1") or die(mysql_error());
				while($row = mysql_fetch_array($result)){ 
					$next_meme = $row['meme_path'];
				}
			}

			if ($original_id[0] == $data[0]) {
				$previous_meme = $memePATH;
			} else {
				//get the previous database row for the previous button
				$result = mysql_query("SELECT `meme_path` FROM `facebook_images` WHERE `id` > $id AND `meme_path` IS NOT NULL ORDER BY `id` ASC LIMIT 1") or die(mysql_error());
				while($row = mysql_fetch_array($result)){ 
					$previous_meme = $row['meme_path'];
				}
			}
		?>
			<a href="category.php?name=<?php echo $memeName ?>" style="color:black;"><p class="meme-title"><?php echo $memeName ?></p></a>
			<?php echo '<img src='.$memePATH.' alt="memeFullsize" />'; ?>
			<div id="meme-buttons">
				<p class="share">Share</p>
				<ul>
					<li class="tu_background"><p class="tinyurl">TinyURL: <?php function get_tiny_url($url) { $ch = curl_init(); $timeout = 5; curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout); $data = curl_exec($ch); curl_close($ch); return $data; } $new_url = get_tiny_url('http://memefriend.com/meme.php?file='.$memePATH); echo $new_url ?></p>
					</li>
					<li class="tr_background"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
					<li class="fb_background"><div class="fb-like" data-href="<?php echo $new_url ?>" data-send="true" data-layout="button_count" data-width="150" data-show-faces="false"></div></li>
					<li class="gp_background"><g:plusone annotation="inline"></g:plusone></li>
					<li class="us_top">
						<a href="meme.php?file=<?php echo $previous_meme ?>" class="button primary" id="previous-button">Previous Meme</a>&nbsp;&nbsp;
						<a href="meme.php?file=<?php echo $next_meme ?>" class="button primary" id="next-button">Next Meme</a>
					</li>
					<li class="votes us_middle">
						<form id="Formup" action="library/data.php?file=<?php echo $memePATH ?>" method="post">
							<input type="hidden" value="<?php echo $upvote ?>" name="popularity" id="popularity-up" />
							<input type="image" name="submit" src="img/up-vote.png" class="thumbs" />
						</form>
						<div id="showdata"><? echo $popularity?></div>
						<form id="Formdown" action="library/data.php?file=<?php echo $memePATH ?>" method="post">
							<input type="hidden" value="<?php echo $downvote ?>" name="popularity" id="popularity-down" />
							<input type="image" name="submit" src="img/down-vote.png" class="thumbs" />
						</form>
					</li>
					<?php
						if ($approved == 1) {
							echo '<li class="us_bottom"><a href="make-changes-cfo.php?file='.$nImage.'" class="button primary" id="cNew-button">Caption This Image</a></li>';
						} else {}
					?>
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