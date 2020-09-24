

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LOGIN FORM</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="validation.php" method="post">
        <h2 class="text-center">Log-in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="unm" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="pwd" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="sub">Log in</button>
        </div>
               
    </form>
    
</div>
</body>
</html>

<?php

        // to insert data into the database

        include 'connection.php';

        if(isset($_POST['sub'])){
            $uname = $_POST['unm'];
            $pass = $_POST['pwd'];
            

            $insertquery = " insert into info(FIRSTNAME,LASTNAME) values('$uname','$pass') ";

            $res = mysqli_query($con,$insertquery );

            if($res){
                ?>
                    <script>
                        alert("Data inserted properly")
                    </script>
                <?php
            }else{

                ?> 
                    <script>
                        alert("Data not inserted properly")
                    </script>
                <?php
            }


            }?>

        }
    }

    ?>  