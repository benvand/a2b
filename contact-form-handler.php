
<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$to = 'bookings@a2bprestigecars.london';
$email_subject = "Contact form: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $to\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: contact-thanks');
?>