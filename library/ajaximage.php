<?php
//include the configuration file
include('configuration.php');
include('resize.image.class.php');
require 'facebook.php'; 

$path = "../photos/";
$npath = "photos/";

$facebook = new Facebook(array( 'appId' => '125840664189504', 'secret' => '6790c4efd930a327aae18515c23a79c7', 'cookie' => true, ));
$user = $facebook->getUser();

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
		$name = $_FILES['photoimg']['name'];
		$size = $_FILES['photoimg']['size'];
			
		if(strlen($name)) {
			list($txt, $ext) = explode(".", $name);
			if(in_array($ext,$valid_formats)) {
				if($size<(1024*1024)) {
					$actual_image_name = time().substr(str_replace(" ", "_", $txt), strlen($txt)).".".$ext;
					$tmp = $_FILES['photoimg']['tmp_name'];
					if(move_uploaded_file($tmp, $path.$actual_image_name)) {
						mysql_query("INSERT INTO facebook_images SET path='$npath$actual_image_name', user='$user'");
						
						$image = new Resize_Image;
						$image->new_width = 500;
						$image->image_to_resize = "../photos/".$actual_image_name;
						$image->ratio = true;
						$ext = "";
						list($imageName, $ext) = explode('.', $actual_image_name);
						$image->new_image_name = $imageName;
						$image->save_folder = '../photos/';
						$process = $image->resize();
						
						echo '<a href="make-changes.php?file='.$actual_image_name.'" class="button primary" id="useImage">Use This Image</a>' .
							'<br/>';
						echo "<img src='photos/".$actual_image_name."' class='preview' />";
					}
					else 
						echo "failed";
				}
				else 
					echo "Image file size max 1 MB..!";
			}
			else 
				echo "Invalid file format..! Make sure your images doesn't have periods in the name and uses a lowercase file extension.";
		}	
		else 
			echo "Please select image..!";
	exit;
	}
?>
