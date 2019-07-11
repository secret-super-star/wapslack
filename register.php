<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include('functions.php');
require "vendor/autoload.php";

$mail = new PHPMailer;

session_start();

$surname = $_POST['surname'];
$biz_name = $_POST['biz_name'];
// $short_name = $_POST['short_name'];
$eamil_address = $_POST['eamil_address'];
$site_address = $_POST['site_address'];
$country = $_POST['country'];
$phone_number = $_POST['phone_number'];
// $workspace = $_POST['workspace'];

$dbh = connectToDatabase();

$statement = $dbh->prepare("INSERT INTO user (user_name, biz_name, short_name, email, site_email, country, phone, spark_email, password) VALUES ('$surname', '$biz_name', '', '$eamil_address', '$site_address', '$country', '$phone_number', '', '')");

$statement->execute();
$inserted_id = $dbh->lastInsertId();

header('Location: index.php');
//
// // $to = $eamil_address;
//
// // $subject = 'Verify your email address.';
//
// // $headers = "MIME-Version: 1.0\r\n";
// // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//
// // $message = '<html><body>';
// // $message .= '<h1>Welcome to Spark!</h1>';
// // $message .= '<p>Go to this link to verify your email address</p>';
// // $message .= '<a href="http://hison.laragit.com/verify.php?id='.$inserted_id.'">http://hison.laragit.com/verify.php?id='.$inserted_id.'</a>';
// // $message .= '</body></html>';
//
// // $return = mail($to, $subject, $message);
//
// // echo $return;
//
// $actual_link = 'http://'.$_SERVER['HTTP_HOST'].'/verify.php?id='.$inserted_id;
// //Enable SMTP debugging. $mail->SMTPDebug = ;
// //Set PHPMailer to use SMTP.
// $mail->SMTPDebug = 2;
// $mail->isSMTP();
// //Set SMTP host name
//
// $mail->Host = "smtp.gmail.com";
// //Set this to true if SMTP host requires authentication to send email
// $mail->SMTPAuth = true;
// //Provide username and password
// $mail->Username = "";
// $mail->Password = "";
// //If SMTP requires TLS encryption then set it
// $mail->SMTPSecure = "tls";
// //Set TCP port to connect to
// $mail->Port = 587;
//
// $mail->From = "name@gmail.com";
// $mail->FromName = "Full Name";
//
// $mail->addAddress($eamil_address, "Recepient Name");
//
// $mail->isHTML(true);
//
// $mail->Subject = "Subject Text";
// $mail->Body = "<p>Go this link to verify your email.</p><a href='".$actual_link."'>".$actual_link."</a>";
// $mail->AltBody = "This is the plain text version of the email content";
//
// // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
// // $mail->isSMTP();                                      // Set mailer to use SMTP
// // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// // $mail->SMTPAuth = true;                               // Enable SMTP authentication
// // $mail->Username = '';                 // SMTP username
// // $mail->Password = "";                           // SMTP password
// // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// // $mail->Port = 587;                                    // TCP port to connect to
//
// // //Recipients
// // $mail->setFrom($eamil_address, $surname );
// // $mail->addAddress($eamil_address, $surname );     // Add a recipient
//
//
// // //Content
// // $mail->isHTML(true);                                  // Set email format to HTML
// // $mail->Subject = 'Here is the subject';
// // $mail->Body    = 'This is the HTML message bod';
// // $mail->AltBody = 'This is the body is';
//
// // $mail->send();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <h1>
      <?php
      if(!$mail->send())
      {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else
      {
          echo "Message has been sent successfully";
      }

      ?>
      </h1>
    </div>
  </body>
</html>
