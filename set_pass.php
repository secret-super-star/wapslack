<?php
include('functions.php');
session_start();
$user_id = $_POST['user_id'];
$user_pass = $_POST['password'];

$dbh = connectToDatabase();
$statement = $dbh->prepare("update user set password ='".$user_pass."' where id='".$user_id."'");

$statement->execute();
$_SESSION["user_id"] = $user_id;

header("location:/index.php");

 ?>
