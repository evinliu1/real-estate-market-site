<?php
$houses = [];
class House
{
    var $price;
    var $address;
    var $picture;
    var $isSold;
}

$h1 = new House;
$h1->price = "$500,000";
$h1->address = "123 Main Street";
$h1->picture = "./beachHouse.webp";
$h1->isSold = "No";
$houses = $h1;

$h2 = new House;
$h2->price = "$1,000,000";
$h2->address = "747 Main Street";
$h2->picture = "ex2.jpeg";
$h2->isSold = "No";
$houses = $h2;

$h3 = new House;
$h3->price = "$1,700,000";
$h3->address = "353 Model Ave";
$h3->picture = "ex3.jpeg";
$h3->isSold = "No";
$houses = $h3;

$h4 = new House;
$h4->price = "$1,100,000";
$h4->address = "777 Evergreen Terrace";
$h4->picture = "ex4.jpeg";
$h4->isSold = "No";
$houses = $h4;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buyer's Dashboard</title>
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
    <div class="splash">
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Find the house of your dreams">
                <br>
                <button type="submit" class="searchButton">
                    Go
                </button>
            </div>
        </div>

    </div>
    <br>
    <div>
        <p class="displayP">Please check out 10 of our trending houses below:</p>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h1->picture . ">";
            echo "<h3>" . "Address: " . "</h3>";
            echo "<p>" . $h1->address . "</p>";
            echo "<h3>" . "Price:" . "</h3>";
            echo "<p>" . $h1->price . "</p>";
            echo "<h3>" . "Sold:" . "</h3>";
            echo "<p>" . $h1->isSold . "</p>";
            ?>

        </div>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h2->picture . ">";
            echo "<h3>" . "Address: " . "</h3>";
            echo "<p>" . $h2->address . "</p>";
            echo "<h3>" . "Price:" . "</h3>";
            echo "<p>" . $h2->price . "</p>";
            echo "<h3>" . "Sold:" . "</h3>";
            echo "<p>" . $h2->isSold . "</p>";
            ?>

        </div>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h3->picture . ">";
            echo "<h3>" . "Address: " . "</h3>";
            echo "<p>" . $h3->address . "</p>";
            echo "<h3>" . "Price:" . "</h3>";
            echo "<p>" . $h3->price . "</p>";
            echo "<h3>" . "Sold:" . "</h3>";
            echo "<p>" . $h3->isSold . "</p>";
            ?>

        </div>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h4->picture . ">";
            echo "<h3>" . "Address: " . "</h3>";
            echo "<p>" . $h4->address . "</p>";
            echo "<h3>" . "Price:" . "</h3>";
            echo "<p>" . $h4->price . "</p>";
            echo "<h3>" . "Sold:" . "</h3>";
            echo "<p>" . $h4->isSold . "</p>";
            ?>

        </div>


    </div>

</body>

</html>
