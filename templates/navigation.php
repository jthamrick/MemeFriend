<aside id="sidebar">
	<ul id="nav">
		<li class="other"><a href="start-here.php" id="start">Getting Started</a></li>
	
		<li class="other red"><a href="create-meme.php" class="red">Create A Meme</a></li>
	
		<li class="other title"><a>Filter By</a>
			<ul>
				<li><a href="index.php" id="home">All Memes</a></li>
				<li><a href="popular-all-time.php" id="popular">Popular Memes</a></li>
				<li><a href="random.php" id="random">Random Meme</a></li>
				<?php if ($user): ?>
					<li><a href="my-memes.php" id="mymemes">My Memes</a></li>
				<?php endif ?>
			</ul>
		</li>
		<li class="other title"><a>Connect With Us</a>
			<ul>
				<li><a href="http://www.facebook.com/pages/memefriendcom/249289061793991?sk=wall">Facebook</a></li>
				<li><a href="https://twitter.com/#!/memefriend">Twitter</a></li>
			</ul>
		</li>
		<li class="other title"><a>Additional</a>
			<ul>
				<li><a href="/blog/" id="blog">Blog</a></li>
				<li><a href="about.php" id="about">About</a></li>
				<li><a href="privacy.php" id="privacy">Privacy</a></li>
				<li><a href="terms.php" id="terms">Terms</a></li>
				<li><a href="advertisement.php" id="advertisement">Advertisement</a></li>
				<li><a href="contact.php" id="issues">Contact</a></li>
			</ul>
		</li>
	</ul>
</aside>