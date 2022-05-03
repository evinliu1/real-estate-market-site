<?php
@include 'config.php';
session_start();

if(!isset($_SESSION['admin_name'])){
    header('location: loginform.php');
}


$query="SELECT username FROM user_form";
$all_users=mysqli_query($conn, $query);
$total_users = mysqli_num_rows($all_users);

$query="SELECT username FROM user_form WHERE user_type = 'admin'";
$admins=mysqli_query($conn, $query);
$num_admins = mysqli_num_rows($admins);

$query="SELECT username FROM user_form WHERE user_type = 'buyer'";
$buyers=mysqli_query($conn, $query);
$num_buyers = mysqli_num_rows($buyers);

$query="SELECT username FROM user_form WHERE user_type = 'seller'";
$sellers=mysqli_query($conn, $query);
$num_sellers = mysqli_num_rows($sellers);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>

<body style="background-color:#b5deca;">
    <div class="topnav">
        <a class="active" href="home.html">Home</a>
        <a href="#news">Buy</a>
        <a href="#contact">Rent</a>
        <a href="#about">Sell</a>
        <a href="about.html">About</a>
        <a class="logout" href="loginform.php">Log Out</a>
        <img class="logo" src="pictures/logo.png" style="width:60px;">
    </div>
    <div class='userinfo'>
        <div class='col' style="grid-area: header">
                <div class="card">
                    <img src="userpic.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Total Users</b></h4>
                        <div class = 'usernumber'>
                        <p><?php echo $total_users?> </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class='col' style="grid-area: left">
                <div class="card">
                    <img src="userpic.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Admins</b></h4>
                        <div class = 'usernumber'>
                        <p><?php echo $num_admins?> </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class='col'style="grid-area: main" >
                <div class="card">
                    <img src="userpic.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Buyers</b></h4>
                        <div class = 'usernumber'>
                        <p><?php echo $num_buyers?> </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class='col' style="grid-area: right">
                <div class="card">
                    <img src="userpic.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Sellers</b></h4>
                        <div class = 'usernumber'>
                        <p><?php echo $num_sellers ?> </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
</body>


</html>
