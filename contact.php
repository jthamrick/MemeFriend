<?php include('templates/header.php') ?>
<section id="middle"> 
	<?php include('templates/navigation.php') ?>
	<article id="main">
		<p class="aboveContact">If you are having problems with logging into facebook try the following steps:<br/>clear your browser's cache and cookies, refresh memefriend.com and try to login with<br/>facebook one more time. If that does not fix your error, let us know and we will see what we can do for you.<br/><br/></p>
		<form id="contact-form" method="post" action="library/send.php" onsubmit="return validation(this);">
			<ul> 
				<li>
					<label for="subject">Subject</label>
					<select name="Subject">
						<option value="General Inquiry">General Inquiry</option>
						<option value="Site Issue">Site Issue</option>
						<option value="Advertising">Advertising</option>
					</select>
				</li>
				<li class="slider"> 
					<label for="name">Name</label> 
					<input type="text" id="Name" name="Name" class="name" size="40" /> 
				</li> 	
				<li class="slider"> 
					<label for="email">Email</label> 
					<input type="text" id="Email" name="Email" class="email" size="40" /> 
				</li> 
				<li class="slider"> 
					<label for="phone">Phone</label> 
					<input type="text" id="Phone" name="Phone" class="phone" size="40" /> 
				</li> 
				<li class="slider"> 
					<label for="message">Message</label> 
					<textarea type="text" id="Inquiry" name="Inquiry" rows="15" cols="60" class="inquiry"></textarea> 
				</li>
			</ul> 
			<input type="image" name="submit" src="img/submit_button.png" class="submitBUTTON" />
		</form>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script> 
		<script type="text/javascript" src="js/jquery.slidinglabels.min.js"></script> 
		<script type="text/javascript" src="js/labels.js"></script>
		<script LANGUAGE="javascript">
		function validation(form) {
			if(form.Name.value == '') {
				alert('Please enter your name');
				form.Name.focus();
				return false;
			}
			if(form.Email.value == '') {
				alert('Please enter your email address');
				form.Email.focus();
				return false;
			}
			if(form.Inquiry.value == '') {
				alert('Please enter a message');
				form.Inquiry.focus();
				return false;
			}
		return true;
		} 
		</script>
	</article>
	<!-- make the middle region's background color expand -->
	<div class="clear"></div>
</section>
<?php include('templates/footer.php') ?>