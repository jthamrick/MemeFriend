<?
//connect to database
include('configuration.php'); 
function protect($string){$string = trim(strip_tags(addslashes($string))); return $string;}
$memepath = protect($_GET['file']);
$redirect_url = "../meme.php?file=".$memepath;

//NOTE: MAKE SURE YOU DO YOUR OWN APPROPRIATE SERVERSIDE ERROR CHECKING HERE!!!
if(!empty($_POST) && isset($_POST)) {
	//make variables safe to insert
	$upvote = mysql_real_escape_string($_POST['popularity']);
	//query to insert data into table
	$sql = "UPDATE facebook_images SET popularity='$upvote' WHERE meme_path='$memepath'";
	$result = mysql_query($sql);
	if(!$result) {echo "Failed to insert record";}
	else {header("Location: $redirect_url");}
}
?>

