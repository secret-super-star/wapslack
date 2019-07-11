<?php
include('../functions.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$dbh = connectToDatabase();

$statement = $dbh->prepare("select * from 'user' where user_name='".$username."' and password='".$password."'");

$statement->execute();

$count = 0;

while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$count++;
      $user_id = $row['id'];
		}

if($count > 0) {
  echo "success";
  $_SESSION["admin"] = $user_id;
} else {
  echo "error";
}
?>
