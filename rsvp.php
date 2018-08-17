<?php 
$name = $_GET["name"];
$number = $_GET["num-guests"];
$visitor_email = $_GET["email"];
$song = $_GET["song"];

$email_from = "lowlyherotech@gmail.com";

$email_subject = "New RSVP Submission";

$email_body = "$name has submitted their RSVP with $number of guests attending. \n" 
"Here is their e-mail: $email \n"
"Song Requests: $song\n"

$to = "e.nunn1009@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
