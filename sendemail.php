<!--  Email HTML File -->
 <?php
// multiple recipients
$to  = 'mikelawrenz.04@gmail.com';

// subject
$subject = 'Michael Lawrenz Saturno';

// message
$message = "
<html>
<head>
  <title>Message</title>
</head>
<body table><td>
Message<p>Hello , we have sent you an Email
</p>

</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "To: Sir Romack <romacknatividad@gmail.com>\r\n";
$headers .= 'From: Lawrenz <mikelawrenz.04@gmail.com>' . "\r\n";

// Mail it
$retval = mail($to, $subject, $message, $headers);
if($retval === true){
  echo "Message sent.";
}else{
  echo "Failed.";
}
?>