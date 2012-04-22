<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
		<div class="box">
			<p>Enter a URL in the box below and click submit to use the image to create a meme.</p>
			<p style="font-weight:bold; color:red;">Make sure you are using the URL for the image and not for the page it is on!</p><br/>
			<form method="post" action="library/down-from-url.php?user=<?php echo $user ?>" id="from-url">
				<input type="text" id="iUrl" name="iUrl" size="50" />
				<input type="submit" value="Submit" />
			</form>
		</div>
		<div class="box">
			<p>To use an image from your computer to create a meme upload it below.</p>
			<form id="imageform" method="post" enctype="multipart/form-data" action="library/ajaximage.php">
				<input type="hidden" value="<?php echo $user ?>" id="user" name="user" />
				Upload your image <input type="file" name="photoimg" id="photoimg" />
			</form>
			<div id="preview"></div>
		</div>
		<div class="box">
			<div class="facebook">
				<img src="img/facebook.png" alt="facebook" width="48px" height="48px" />
				<a href="create.php"><strong>Create using your images</strong></a>
			</div>
			<div class="facebook">
				<img src="img/facebook.png" alt="facebook" width="48px" height="48px" />
				<a href="create-friend.php"><strong>Create using your friend's images</strong></a>
			</div>
		</div>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript">
	$('#photoimg').live('change', function() { 
		$("#preview").html('');
		$("#preview").html('<img src="img/loader.gif" alt="Uploading...."/>');
		$("#imageform").ajaxForm({
			target: '#preview'
		}).submit();
	});
</script>
<?php include('templates/footer.php') ?>