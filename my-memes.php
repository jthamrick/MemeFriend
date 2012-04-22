<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
						<?php 
							$result = mysql_query("SELECT * FROM facebook_images WHERE user=$user AND meme_path IS NOT NULL ORDER BY timestamp DESC") or die(mysql_error());
							$count = 0; 
							while($row = mysql_fetch_array($result)) { 
								$date = $row['timestamp'];
								list($path, $fileName) = explode('/', $row['meme_path']);
								if (time() - strtotime($date) <= 86400) {
									if( $count%2 == 0) {
										echo '<a href="meme-cfo.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' . 
											'<img src="http://memes.memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" />' . 
											"</div>" .
											'<img src="img/new-badge.png" alt="newbadge" />' . 
											"</div></a>";
									} else {
										echo '<a href="meme-cfo.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' .
											'<img src="http://memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" />' . 
											"</div>" .
											'<img src="img/new-badge.png" alt="newbadge" />' . 
											"</div></a>";
									}
								} else {
									if( $count%2 == 0) {
										echo '<a href="meme-cfo.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' .
											'<img src="http://memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" />' . 
											"</div></div></a>";
									} else {
										echo '<a href="meme-cfo.php?file='.$row['meme_path'].'">' .
											'<div class="image-container">' .
											'<div class="entry">' . 
											'<img src="http://memes.memefriend.com/thumbnails/'.$fileName.'" class="thumbnail" alt="Meme" />' . 
											"</div></div></a>";
										}
									}
									$count++; 
								} 
						?>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<?php include('templates/footer.php') ?>
