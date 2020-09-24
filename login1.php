<?php
  session_start();
  include("config.php");
//   $s= "select * from register where ("$name","$pwd")";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
<?php include("header.php");?>
<!-- <div class="container">
</div> -->
<div class="login-form">
    <form action="Items.php" method="post">
        <h2 class="text-center">Log-in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="unm" required="required" width="50%">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="pwd" required="required" width="50%">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="sub" width="50%">Log in</button>
        </div>
               
    </form>
    
</div>
<?php include("footer.php")?>
</body>
</html>
