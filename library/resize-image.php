<?php
include 'resize.image.class.php';

$image = new Resize_Image;

$image->new_width = 500;
//$image->new_height = 200;

$image->image_to_resize = "../photos/".$_GET['image']; // Full Path to the file

$image->ratio = true; // Keep Aspect Ratio?

// Name of the new image (optional) - If it's not set a new will be added automatically

$ext = "";
$iName = $_GET['image'];
list($imageName, $ext) = explode('.', $iName);
$image->new_image_name = $imageName;

/* Path where the new image should be saved. If it's not set the script will output the image without saving it */

$image->save_folder = '../photos/';

$process = $image->resize();

if($process['result'] && $image->save_folder)
{
	$redirect_url = '../make-changes.php?file='.$iName; 
	header("Location: $redirect_url");
	//echo 'The new image ('.$process['new_file_path'].') has been saved.';
}
?>