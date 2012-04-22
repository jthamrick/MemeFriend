<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
			<?php 
				$sql = mysql_query('SELECT * FROM facebook_images WHERE meme_path IS NOT NULL ORDER BY RAND() LIMIT 1');
				while($row = mysql_fetch_array($sql)) {
					$popularity = $row['popularity'];
					$memeName = $row['meme_name'];
					$randUrl = $row['meme_path'];
					$approved = $row['approved'];
					$upvote = $row['popularity']+1;
					$downvote = $row['popularity']-1;
					$image = $row['path'];
					}
				echo '<img src="'.$randUrl.'" alt="memeFullsize" />'; 
			?>
		<div id="meme-buttons">
			<p class="share">Share</p>
			<ul>
				<li class="tu_background"><p class="tinyurl">TinyURL: <?php function get_tiny_url($url) { $ch = curl_init(); $timeout = 5; curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout); $data = curl_exec($ch); curl_close($ch); return $data; } $new_url = get_tiny_url('http://memefriend.com/meme.php?file='.$randUrl); echo $new_url ?></p></li>
				<li class="tr_background"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
				<li class="fb_background"><div class="fb-like" data-href="<?php echo $new_url ?>" data-send="true" data-layout="button_count" data-width="150" data-show-faces="false"></div></li>
				<li class="gp_background"><g:plusone annotation="inline"></g:plusone></li>
				<?php
					list($l_head, $l_tail) = explode("/", $image);
					if ($approved == 1) {
						echo '<li class="us_top"><a href="make-changes-cfo.php?file='.$l_tail.'" class="button primary" id="cNew-button">Caption This Image</a></li>';
					} else {}
				?>
				<li class="votes us_middle">
					<form id="Formup" action="library/data.php?file=<?php echo $randUrl ?>" method="post">
						<input type="hidden" value="<?php echo $upvote ?>" name="popularity" id="popularity-up" />
						<input type="image" name="submit" src="img/up-vote.png" class="thumbs" />
					</form>
					<div id="showdata"><?php echo $popularity ?></div>
					<form id="Formdown" action="library/data.php?file=<?php echo $randUrl ?>" method="post">
						<input type="hidden" value="<?php echo $downvote ?>" name="popularity" id="popularity-down" />
						<input type="image" name="submit" src="img/down-vote.png" class="thumbs" />
					</form>
				</li>
				<li class="us_bottom"><a href="random.php" class="button primary" id="randomize">Give me another random</a></li>
				<!--<li>
					<a href="library/report.php?file=<?php echo $randUrl ?>" class="button primary">Report Image</a> for review.
				</li>-->
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