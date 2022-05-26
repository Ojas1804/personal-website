<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
// echo "Name cannot be empty.";
header("Location: email_unsuccess.html");
die();
}
if ($email === ''){
// echo "Email cannot be empty.";
header("Location: email_unsuccess.html");
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
// echo "Email format invalid.";
header("Location: email_unsuccess.html");
die();
}
}
if ($subject === ''){
// echo "Subject cannot be empty.";
header("Location: email_unsuccess.html");
die();
}
if ($message === ''){
// echo "Message cannot be empty.";
header("Location: email_unsuccess.html");
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient1 = "ojas-srivastava-2001@gmx.com";
$recipient2 = "ojassriv@ojas-srivastava.xyz";
$mailheader = "From: $email \r\n";
mail($recipient1, $subject, $content, $mailheader) or die("Error!");
mail($recipient2, $subject, $content, $mailheader) or die("Error!");
header("Location: email_success.html");
exit();
?>