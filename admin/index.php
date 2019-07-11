<?php

session_start();
ob_start();

if(isset($_SESSION['admin'])){
    header("location:dashboard.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Wapslack</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Wapslack</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="login.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Username" name="username" autofocus required>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password" required>
          </div>

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });

      $('.login-form').submit(function (e){
        e.preventDefault();

        $.ajax({
            url: '/admin/login.php',
            type: 'post',
  					data: $('.login-form').serialize(),
            cache: false,
            beforeSend: function (xhr) { },
            success: function (data, textStatus, jQxhr) {
                if(data == "success"){
  								window.location.href="/admin/dashboard.php";
  							} else {
  								alert("Invalid Login.");
  							}
            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        }).done(function () { });
      })
    </script>
  </body>
</html>
