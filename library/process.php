<?php 
	include('resize.image.class.php');
	include('configuration.php'); 
	function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
	$imgPath = protect($_GET['file']); 
	$memeName = protect($_GET['name']); 
	$allow = protect($_GET['allow']);
	
	if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) { 
		$imageData=$GLOBALS['HTTP_RAW_POST_DATA']; 
		$filteredData=substr($imageData, strpos($imageData, ",")+1); 
		$unencodedData=base64_decode($filteredData); 
		$ext = "png"; 
		$newName = time().".".$ext; 
		$fp = fopen( '../memes/'.$newName, 'w' ); 
		fwrite( $fp, $unencodedData); fclose( $fp ); 
		$fullPath = "photos/".$imgPath; 
		$mPath = "memes/".$newName; 
		mysql_query("UPDATE `facebook_images` SET `meme_path`='$mPath', `approved`='$allow', `meme_name`='$memeName' WHERE `path`='$fullPath'"); 
		echo "memes/".$newName; 
		
		$image = new Resize_Image;
		$image->new_width = 156;
		$image->image_to_resize = "../memes/".$newName;
		$image->ratio = true;
		$ext = "";
		list($imageName, $ext) = explode('.', $newName);
		$image->new_image_name = $imageName;
		$image->save_folder = '../thumbnails/';
		$process = $image->resize();
		
		mysql_close($con); 
} ?>