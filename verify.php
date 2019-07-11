<?php
include('functions.php');
$user_id = $_GET['id'];
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
  <h2>Enter your password.</h2>
  <div class="card">
    <div class="card-body">
      <form action="/set_pass.php" method="post">
        <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $user_id ?>">
        <div class="form-group">
          <label for="email">Password:</label>
          <input type="password" class="form-control" id="pass" name="password" required>
        </div>
        <div class="form-group">
          <label for="pwd">Confirm Password:</label>
          <input type="password" class="form-control" id="c_pass" required>
        </div>
        <p class="text-danger" style="display: none">Password does not match.</p>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function (){
    $('form').submit(function (e){
      if($('#pass').val() != $('#c_pass').val()) {
        $('.text-danger').css('display' , 'block')
        e.preventDefault();
        
      }
    })
  })
</script>

</body>
</html>
