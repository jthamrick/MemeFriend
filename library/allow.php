<?
//connect to database
include('configuration.php'); 

$memepath = Trim(stripslashes($_POST['image'])); 
$user = Trim(stripslashes($_POST['user'])); 
$value = Trim(stripslashes($_POST['allow']));

$redirect_url = "../meme-cfo.php?file=".$memepath;

//NOTE: MAKE SURE YOU DO YOUR OWN APPROPRIATE SERVERSIDE ERROR CHECKING HERE!!!
if(!empty($_POST) && isset($_POST)) {
	//query to insert data into table
	$sql = "UPDATE `facebook_images` SET `approved`='$value' WHERE `meme_path`='$memepath'";
	$result = mysql_query($sql);
	if(!$result) {echo "Failed to insert record";}
	else {header("Location: $redirect_url");}
}
?>