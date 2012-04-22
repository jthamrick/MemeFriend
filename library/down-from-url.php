<?php 
include('configuration.php'); 

function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}

$mysqldate = date( 'Y-m-d H:i:s', $phpdate ); 
$phpdate = strtotime( $mysqldate ); 
$max_file_size = 52428800; 
if(isset($_GET['file'])) {
	$fullPath = protect($_GET['file']); 
} else {
	$fullPath = protect($_POST['iUrl']);
}
$user = protect($_GET['user']); 
$save_path = '../photos/'; 
$db_path = 'photos/'; 
$valid_formats = array("jpg", "JPG", "png", "PNG", "gif", "GIF", "bmp", "BMP");

if(strlen($fullPath)) { 
	list($txt, $ext) = explode(".", $name);
	$ext = substr($fullPath, -3, 3);
	if(in_array($ext,$valid_formats)) { 
		$newName = time().substr(str_replace(" ", "_", $txt), strlen($txt)).".".$ext; 
		mysql_query("INSERT INTO facebook_images SET path='$db_path$newName', user=$user"); 
	} else header("Location: ../from-url.php"); 
} else echo "No image selected"; 

$fp = fopen($save_path.basename($newName), 'w'); 
$ch = curl_init($fullPath); 
curl_setopt($ch, CURLOPT_FILE, $fp); 
$data = curl_exec($ch); 
curl_close($ch); 
fclose($fp); 

list($width, $height) = getimagesize('../photos/'.$newName);
if ($width < 600) {
	$redirect_url = '../make-changes.php?file='.$newName; 
	header("Location: $redirect_url");	
} else {
	$redirect_url = 'resize-image.php?image='.$newName; 
	header("Location: $redirect_url"); 
}

mysql_close($con); 
?>