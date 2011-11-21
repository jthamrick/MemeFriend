<div id="nav">
	
	<h2 class="other"><a href="start-here.php" id="start">Getting Started</a></h2>
	
	<h2 class="nav-padding">Login with</h2>
	<div class="divider"></div>
	<ul>
		<li><a href="<?php echo $loginUrl; ?>">Facebook</a></li>
	</ul>
	
	<?php if ($user): ?>
		<h2 class="nav-padding"><a href="<?php echo $logoutUrl; ?>">Logout</a></h2>
	<?php endif ?>
	
	<h2 class="nav-padding">Create A Meme</h2>
	<div class="divider"></div>
	<ul>
		<li><a href="create.php" id="create">My Images</a></li>
		<li><a href="create-friend.php" id="create-friend">Friends Images</a></li>
		<li><a href="http://memefriend.com/sandbox/upload-image" id="upload">Upload Image</a></li>
	</ul>

	<h2 class="nav-padding">Filter by</h2>
	<div class="divider"></div>
	<ul>
		<li><a href="index.php" id="home">All Memes</a></li>
		<li><a href="popular-all-time.php" id="popular">Popular Memes</a></li>
		<li><a href="random.php" id="random">Random Meme</a></li>
		<?php if ($user): ?>
		<li><a href="my-memes.php" id="mymemes">My Memes</a></li>
		<?php endif ?>
	</ul>
	
	<h2 class="nav-padding">Connect with us</h2>
	<div class="divider"></div>
	<ul>
		<li><a href="http://www.facebook.com/pages/memefriendcom/249289061793991?sk=wall">Facebook</a></li>
		<li><a href="https://twitter.com/#!/memefriend">Twitter</a></li>
	</ul>
	
	<h2 class="nav-padding other"><a href="http://memefriend.com/blog" id="blog">Blog</a></h2>
	<h2 class="other"><a href="about.php" id="about">About</a></h2>
	<h2 class="other"><a href="privacy.php" id="privacy">Privacy</a></h2>
	<h2 class="other"><a href="terms.php" id="terms">Terms</a></h2>
	<h2 class="other"><a href="advertisement.php" id="advertisement">Advertisement</a></h2>
	<h2 class="other"><a href="contact.php" id="issues">Contact</a></h2>
	
</div>