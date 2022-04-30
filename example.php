<?php
$host = "localhost";
$user = "eliu8";
$pass = "eliu8";
$dbname = "eliu8";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error){
    echo "could not connect to server\n";
    die("connnection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE user_form (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "table STUDENTS created successfully";
} else {
    echo "Error creating table: " . $conn-error;
}

$conn->close();
?>