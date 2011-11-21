<?php 

$EmailTo = "contact@memefriend.com"; 
$Subject = Trim(stripslashes($_POST['Subject']));
$Name = Trim(stripslashes($_POST['Name'])); 
$EmailFrom = Trim(stripslashes($_POST['Email'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Message = Trim(stripslashes($_POST['Inquiry']));

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= $Message;

// send email 
$success = mail($EmailTo, $Subject, $Body, $EmailFrom);

header('Location: ../thankyou.php'); 
?>