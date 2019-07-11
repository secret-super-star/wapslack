<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include('functions.php');
require "vendor/autoload.php";

$mail = new PHPMailer;

$email_address = $_POST['forgot_email'];

$dbh = connectToDatabase();
$user_id = '';
$statement = $dbh->prepare("select * from user where email='".$email_address."'");
$statement->execute();
while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  $user_id = $row['id'];
}

$inserted_id = $dbh->lastInsertId();


$actual_link = 'http://'.$_SERVER['HTTP_HOST'].'/verify.php?id='.$user_id;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "mjone352@gmail.com";
$mail->Password = "qkwkrqifth";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->From = "name@gmail.com";
$mail->FromName = "Full Name";

$mail->addAddress($email_address, "Recepient Name");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<p>Go this link to reset your password.</p><a href='".$actual_link."'>".$actual_link."</a>";
$mail->AltBody = "This is the plain text version of the email content";

  if(!$mail->send())
  {
      echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
      echo "Message has been sent successfully";
  }

  ?>
