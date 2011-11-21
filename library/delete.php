<?php
	include('configuration.php');
	function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
	$meme = protect($_GET['file']);
	list($memePath, $memeName) = explode('/', $meme);
	
	mysql_query("DELETE FROM `facebook_images` WHERE `meme_path`='$meme'");
	
	$file = '../memes/'.$memeName;
	$newfile = '../delete/'.$memeName;

	if (!copy($file, $newfile)) {
	    echo "failed to copy $file...\n";
	}
	
	unlink($file);
	
	header("Location: ../my-memes.php");
?>