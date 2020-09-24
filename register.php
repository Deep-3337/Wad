 <?php

// session_start();
include("config.php");
// mysqli_select_db($con,'sem5');
if(isset($_GET["submit"]))
    {
        $name = $_GET["Name"];
        $phone = $_GET["Phone"];
        $email = $_GET["EMAIL"];
        $address = $_GET["Address"];
        $pwd = $_GET["password"];
        $conpwd = $_GET["conpwd"];




        $query=mysqli_query($conn,"INSERT INTO register ( Name, Phone, EMAIL, Address, password, conpwd) VALUES 
        ('".$name."', .$phone., '".$email."', '".$address."', '".$pwd."', '".$conpwd."')");
        $result = pg_query($query);
        if (!$result)
        {
            $errormessage = preg_last_error();
            echo "Error with query : ".$errormessage;
        }
        else
        {
        
        echo "Registration completed.";
        }
    // }
    }
    else{
        echo "Invalid.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register</title>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="ajax_response.js"></script>
<script>
    function Submit(e){
        datainsert(e);
        return false;
    }

    async function datainsert(e)
    {
        d=document.forms[0];

        n = d.elements("Name").value;
        ph = d.elements("Phone").value;
        en = d.elements("EMAIL").value;
        ad = d.elements("Address").value;
        pwd = d.elements("password").value;
        conpwd = d.elements("conpwd").value;
        try
        {
                let res=await fetch("Name="+n+"&Phone="+ph+"&EMAIL="+en+"&Address="+ad+"&password="+pwd+"&conpwd"=+conpwd+"");
                let json=await res.json();
                if(json.res==1){
                    alert("Successfully registration");
                    location.href="login1.php";
            }
            else
            {
                alert("incoreect details");
            }
            console.log(json);
        }
        catch(e)
        {
            console.log(e);
        }
    }
</script>
    
  </head>
<body>
<div class="regi" width="50%">
<?php include_once("header.php");?>
<!-- <div class="img">
<img class="bg" src="image/img.jpg" height="100%" width="100%">
</div> -->


<!-- require("header.php");?> -->
<form id="registrationForm" method="GET">
    <div class="reg">
        <p><input type="text" id="name" name="name" placeholder="Name"></p>
        <p><input type="text" id="Phone" name="phone" placeholder="phone"></p>
        <p><input type="text" id="email" name="email" placeholder="Email id"></p>
        <p><input type="text" id="add" name="address" placeholder="Address"></p>
        <p><input type="text" id="pwd" name="pwd" placeholder="password"></p>
        <p><input type="text" id="conpwd" name="conpwd" placeholder="confirm password"></p>
        
        <p><button type="submit" id="submitButton" onclick="return Submit(event)">Submit</button></p>
    </div>
    </form>
    <div id="result"></div>
<!--onclick="return Submt"-->
<?php include_once("footer.php"); ?>
</div>
</body>
</html>