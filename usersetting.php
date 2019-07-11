<?php
include('functions.php');
session_start();
$dbh = connectToDatabase();
$user_id = $_SESSION['user_id'];

$statement = $dbh->prepare("SELECT * FROM user where id=$user_id");

$statement->execute();

$row = $statement->fetch(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="jumbotron">
    <h1 class="text-center">User Settings/Javascript</h1>
  </div>

  <?php if(isset($_SESSION["status"])) {?>
  <div class="alert alert-success">
    <strong><?php echo $_SESSION["status"] ?></strong>
  </div>
  <?php } ?>

  <div class="card">
    <div class="card-header">Settings</div>
    <div class="card-body">
      <form action="update_user.php" method="post">
        <div class="row">
            <div class="col-md-5 font-weight-bold text-right">Name and Surname :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['user_name'] ?>" name="surname"></div>

            <div class="col-md-5 font-weight-bold text-right">Full Business Name :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['biz_name'] ?>" name="biz_name"></div>

            <div class="col-md-5 font-weight-bold text-right">Display name / Short name / Abbreviation :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['short_name'] ?>" name="short_name"></div>

            <div class="col-md-5 font-weight-bold text-right">Email address :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['email'] ?>" name="eamil_address"></div>

            <div class="col-md-5 font-weight-bold text-right">Website address :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['site_email'] ?>" name="site_address"></div>

            <div class="col-md-5 font-weight-bold text-right">Country (optional) :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['country'] ?>" name="country"></div>

            <div class="col-md-5 font-weight-bold text-right">Your telephone number (optional) :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['phone'] ?>" name="phone_number"></div>

            <div class="col-md-5 font-weight-bold text-right">Your Spark workspace :</div>
            <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $row['spark_email'] ?>" name="workspace"></div>

            <div class="col-md-5 font-weight-bold text-right">Your password to log in to Wespark :</div>
            <div class="col-md-6"><input type="password" class="form-control" value="<?php echo $row['password'] ?>" name="password"></div>

            <div class="col-md-5 font-weight-bold text-right">Service active :</div>
            <div class="col-md-6">
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="active" <?php if($row['actived']) echo "checked"  ?> value='1'>Yes
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="active" <?php if(!$row['actived']) echo "checked"  ?> value='0'>No
              </label>
            </div>
            </div>
            <div class="col-md-12 text-right"><input type="submit" class="btn btn-primary" value="Update"></input></div>
        </div>
      </form>

    </div>
  </div>

  <div class="card mt-4 mb-5">
    <div class="card-header">Javascript</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-2 font-weight-bold text-right">Get your Javascript:</div>
        <div class="col-md-10 text-right">
          <textarea name="" id="" rows="5" class="form-control"></textarea>
          <button type="button" name="button" class="btn btn-primary btn-sm mt-2">copy</button>
        </div>
      </div>


    </div>
  </div>
</div>

</body>
</html>
