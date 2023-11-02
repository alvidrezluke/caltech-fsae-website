<?php
$email = $_POST["contactemail"];
$subject = $_POST["subject"];
$contactbox = $_POST['contactbox'];



$body = $email."\n".$contactbox;
$body = wordwrap($body,70);
$result = mail('racing@caltech.edu', $subject, $body);
if($result){
    header('Location: index.html');
} else {
    echo "Error. Please Try Again";
}
?>
?>