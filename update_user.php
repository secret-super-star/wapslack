<?php

include('functions.php');
require "vendor/autoload.php";
session_start();

$surname = $_POST['surname'];
$biz_name = $_POST['biz_name'];
$short_name = $_POST['short_name'];
$eamil_address = $_POST['eamil_address'];
$site_address = $_POST['site_address'];
$country = $_POST['country'];
$phone_number = $_POST['phone_number'];
$workspace = $_POST['workspace'];
$password = $_POST['password'];
$active = $_POST['active'];


$dbh = connectToDatabase();
$statement = $dbh->prepare("update user set user_name='$surname', biz_name='$biz_name', short_name='$short_name', email='$eamil_address', site_email='$site_address', country='$country', phone='$phone_number', spark_email='$workspace', password='$password', actived='$active'");


$result = $statement->execute();

if($result) {
  $_SESSION["status"] = "Updated successfully.";
}



header("location:/usersetting.php");
