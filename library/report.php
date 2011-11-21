<?php 
	require 'facebook.php'; 
	$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, )); 
	$user = $facebook->getUser();
	$user_profile = $facebook->api($user);
	
	include('configuration.php'); 
	
	function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
	$name = protect($_GET['file']); 
	$result = mysql_query("UPDATE facebook_images SET reported=1 WHERE meme_path='$name'") or die(mysql_error()); 
	$EmailTo = "contact@memefriend.com"; 
	$Subject = "Reported Image"; 
	$ImageName = Trim(stripslashes($name)); 
	$Body = ""; 
	$Body .= "Image Name: "; 
	$Body .= "http://www.memefriend.com/". $ImageName; 
	$Body .= "\n\n";
	$Body .= "Name: ";
	$Body .= $user_profile['first_name'];
	$Body .= " ";
	$Body .= $user_profile['last_name'];
	
	mail($EmailTo, $Subject, $Body); 
	header('Location: ../reported-image.php'); 
?>