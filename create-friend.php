<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
		<?php if ($user): ?>
		<label for="filter" class="bold">Filter: </label><input type="text" name="searchInput" value="" id="searchInput" size="25"/>
		<span class="bold">&lt;-- type a friend's name to filter the results</span>
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
								'<a href="friend-albums.php?id='. $fvalue['id'] .'&name='.$fvalue['name'].'" />' .
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
		<p class="one_liner_create">Login with Facebook to create a meme using your Facebook images - <a href="<?php echo $loginUrl; ?>">Click here to login</a></p>
		<?php endif ?>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<?php include('templates/footer.php') ?>