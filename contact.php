<?php 
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='yteditz2004@gmail.com';
$email_subject='NEW FORM SUBMISSON' ;
$email_body= "User Name:$name.\n".
             "User Email:$visitor_email.\n". 
             "Subject: $subject.\n". 
             "User Message:$message .\n";
             
$to='jayakumarm2004@gmail.com';
$headers="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)
header("Location:contact.html")

?>