<?php
    $houses = []; 

class marketValue
{
    var $price; 
    var $pictures;
    var $location;
    var $sellingCost;
    var $bedroom; 
    var $bathroom; 
    var $sqft; 
}

$h1 = new marketValue; 
$h1->price = "$450,000";
$h1->pictures = "./house1.jpeg";
$h1->location= "342 Main Street";
$h1->sellingCost= "2.1%";
$h1->bedroom= "4";
$h1->bathroom= "3 1/2";
$h1->sqft= "3,050 ";
$marketValue = $h1;

$h2 = new marketValue; 
$h2->price = "$540,000";
$h2->pictures = "house2.jpeg";
$h2->location= "333 Vermack Rd";
$h2->sellingCost= "5%";
$h2->bedroom= "5";
$h2->bathroom= "3";
$h2->sqft= "3,200 ";
$marketValue = $h2;

$h3 = new marketValue; 
$h3->price = "$400,000";
$h3->pictures = "house3.jpg";
$h3->location= "777 Elven St";
$h3->sellingCost= "3.5%";
$h3->bedroom= "4";
$h3->bathroom= "2 1/2";
$h3->sqft= "3,000";
$marketValue = $h3;

$h4 = new marketValue; 
$h4->price = "$390,000";
$h4->pictures = "house4.png";
$h4->location= "444 Georgia St";
$h4->sellingCost= "2.5%";
$h4->bedroom= "3";
$h4->bathroom= "2";
$h4->sqft= "2,500";
$marketValue = $h4;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatiable" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Seller's Dashboard</title>
    </head>
    <body style="background-color:#b5deca;">
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">Buy</a>
        <a href="#contact">Rent</a>
        <a href="#sell">Sell</a>
        <a href="#about">About</a>
        <a class="logout" href="loginform.php">Log Out</a>
        <img class="logo" src="logo.png" style="width:60px;">
    </div>

    <br>
    <div>
        <p class="displayP">Market Values of Your Home:</p>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h1->pictures . ">";
            echo "<h3>" . "Location: " . "</h3>";
            echo "<p>" . $h1->location . "</p>";
            echo "<h3>" . "Market Price:" . "</h3>";
            echo "<p>" . $h1->price . "</p>";
            echo "<h3>" . "Selling Cost:" . "</h3>";
            echo "<p>" . $h1->sellingCost . "</p>";
            echo "<h3>" . "Bedroom:" . "</h3>";
            echo "<p>" . $h1->bedroom . "</p>";
            echo "<h3>" . "Bathroom:" . "</h3>";
            echo "<p>" . $h1->bathroom. "</p>";
            echo "<h3>" . "Sqft:" . "</h3>";
            echo "<p>" . $h1->sqft . "</p>";
            ?>


        </div>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h2->pictures . ">";
            echo "<h3>" . "Location: " . "</h3>";
            echo "<p>" . $h1->location . "</p>";
            echo "<h3>" . "Market Price:" . "</h3>";
            echo "<p>" . $h1->price . "</p>";
            echo "<h3>" . "Selling Cost:" . "</h3>";
            echo "<p>" . $h1->sellingCost . "</p>";
            echo "<h3>" . "Bedroom:" . "</h3>";
            echo "<p>" . $h1->bedroom . "</p>";
            echo "<h3>" . "Bathroom:" . "</h3>";
            echo "<p>" . $h1->bathroom. "</p>";
            echo "<h3>" . "Sqft:" . "</h3>";
            echo "<p>" . $h1->sqft . "</p>";
            ?>

        </div>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h3->pictures . ">";
            echo "<h3>" . "Location: " . "</h3>";
            echo "<p>" . $h1->location . "</p>";
            echo "<h3>" . "Market Price:" . "</h3>";
            echo "<p>" . $h1->price . "</p>";
            echo "<h3>" . "Selling Cost:" . "</h3>";
            echo "<p>" . $h1->sellingCost . "</p>";
            echo "<h3>" . "Bedroom:" . "</h3>";
            echo "<p>" . $h1->bedroom . "</p>";
            echo "<h3>" . "Bathroom:" . "</h3>";
            echo "<p>" . $h1->bathroom. "</p>";
            echo "<h3>" . "Sqft:" . "</h3>";
            echo "<p>" . $h1->sqft . "</p>";
            ?>

        </div>
        <div class="window">
            <?php
            echo "<img class='windowimage' src=" . $h4->pictures . ">";
            echo "<h3>" . "Location: " . "</h3>";
            echo "<p>" . $h1->location . "</p>";
            echo "<h3>" . "Market Price:" . "</h3>";
            echo "<p>" . $h1->price . "</p>";
            echo "<h3>" . "Selling Cost:" . "</h3>";
            echo "<p>" . $h1->sellingCost . "</p>";
            echo "<h3>" . "Bedroom:" . "</h3>";
            echo "<p>" . $h1->bedroom . "</p>";
            echo "<h3>" . "Bathroom:" . "</h3>";
            echo "<p>" . $h1->bathroom. "</p>";
            echo "<h3>" . "Sqft:" . "</h3>";
            echo "<p>" . $h1->sqft . "</p>";
            ?>


        </div>


    </div>

</body>

</html>

