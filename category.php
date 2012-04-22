<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
		<?php
			function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
			$category = protect($_GET['name']);
		?>
		<p>Here are the memes named <?php echo $category ?></p>
		<?php 
			$result = mysql_query("SELECT * FROM `facebook_images` WHERE `meme_name` ='$category' AND `meme_path` IS NOT NULL ORDER BY popularity DESC"); 
			$num_rows = mysql_num_rows($result);
			$pages = new Paginator;
			$pages->items_total = $num_rows;
			$pages->mid_range = 9;
			$pages->paginate();
							
			$result = mysql_query("SELECT * FROM `facebook_images` WHERE `meme_name` ='$category' ORDER BY popularity DESC $pages->limit") or die(mysql_error());
			$count = 0; 
			while($row = mysql_fetch_array($result)) { 
				$date = $row['timestamp'];
				$MEMEpath = $row['meme_path'];
				list($extension, $fullmemepath) = explode("/", $MEMEpath);
				if (time() - strtotime($date) <= 86400) {
					if( $count%2 == 0) {
						echo '<a href="meme.php?file='.$row['meme_path'].'">' .
							'<div class="image-container">' .
							'<div class="entry">' . 
							'<img src="http://memes.memefriend.com/thumbnails/'.$fullmemepath.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
							"</div>" .
							'<img src="img/new-badge.png" alt="newbadge" width="74px" height="74px" />' . 
							"</div></a>";
					} else {
						echo '<a href="meme.php?file='.$row['meme_path'].'">' .
							'<div class="image-container">' .
							'<div class="entry">' .
							'<img src="http://memefriend.com/thumbnails/'.$fullmemepath.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
							"</div>" .
							'<img src="img/new-badge.png" alt="newbadge" width="74px" height="74px" />' . 
							"</div></a>";
					}
				} else {
					if( $count%2 == 0) {
						echo '<a href="meme.php?file='.$row['meme_path'].'">' .
							'<div class="image-container">' .
							'<div class="entry">' .
							'<img src="http://memefriend.com/thumbnails/'.$fullmemepath.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
							"</div></div></a>";
					} else {
						echo '<a href="meme.php?file='.$row['meme_path'].'">' .
							'<div class="image-container">' .
							'<div class="entry">' . 
							'<img src="http://memes.memefriend.com/thumbnails/'.$fullmemepath.'" class="thumbnail" alt="Meme" width="156px" height="auto" />' . 
							"</div></div></a>";
						}
					}
					$count++; 
				} 
		?>
		<div class="paginator">
			<span class="pages"><?php echo "Page $pages->current_page of $pages->num_pages"?></span><br/>
			<?php echo $pages->display_pages(); ?>
		</div>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<?php include('templates/footer.php') ?>
