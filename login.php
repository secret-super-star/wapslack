<?php
include('functions.php');

session_start();

$user_email = $_POST['login_email'];
$user_pass = $_POST['login_pass'];

$dbh = connectToDatabase();

$statement = $dbh->prepare("select * from user where email='".$user_email."' and password='".$user_pass."'");

$statement->execute();

$count = 0;

while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$count++;
      $user_id = $row['id'];
		}

if($count > 0) {
  echo "success";
  $_SESSION["user_id"] = $user_id;
} else {
  echo "error";
}


?>
