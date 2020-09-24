<?php

    session_start();
    include("config.php");
    include("header.php");

    $pid = $_GET['id'];
    $img = $_GET['Image'];
    $det= $_GET['details'];
    $pri=$_GET['Price'];

    function add()
    {
        alert("a");

    }

?>
<?php 
if($_SESSION['name'])
{ ?>
    <div align="right">
        <h2>Welcome <?php echo $_SESSION['name']; ?> </h2></br>Click here to <a href="logout.php" title="logout">logout</a>
    </div>
    <?php
}
?>
<?php
$sql=mysqli_query($conn,"SELECT * FROM view item");
if(mysqli_num_rows($sql))
{
    while($row=mysqli_fetch_array($sql))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itmes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="margin-top: 160px;">

    <div class="container" style="display: flex; align-items:stretch;">
    <div class="card" style="margin-top:160px; margin-bottom:70px;">
  <img class="column card-img-top" src="<?php echo $row['Image']; ?>" alt="Card image cap">
  <div class=" columncard-body">
    <h5 class="column card-title"><?php echo $row['details']; ?></h5>
    <h6 class="column card-price"><?php echo '₹' ,$row['Price']; ?></h6>
    <!-- <div class="column cart-aciton"><input type="text" class="quantity" name="quantity" value="1" size="2"/> -->
    <a href="addtocart.php" class="btn btn-primary" onclick="addtocart($row['id'],$row['Price'])">Add to cart</a>
  </div>
</div>
</div>

    <?php
    }
    include ('footer.php');
}
    ?>
    </div>
    <script>
        function addtocart(id,rate)
        {
            fetch("addtocart.php?id="+pid+"&Price="+pri).then(function (res)
            {
                console.log(res.text());
            });
        }
    </script>

   
</body>
</html>