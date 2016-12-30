<?php
require_once 'databaseConnection.php';
include("header.php");
include("menu.php");

if(isset($_COOKIE['username'])){
$result = mysqli_query($conn, sprintf("select * from user inner join usertype on user.userTypeID=usertype.typeID where email='%s'", $_COOKIE['username']));
$result = mysqli_fetch_assoc($result);

echo "<div class='confirmation'>";
echo "<h1>Your Account Information:</h1><br>";
echo "First Name: ".$result['firstName']."<br>";
echo "Last Name: ".$result['lastName']."<br>";
echo "Email: ".$result['email']."<br>";
echo "Password: ".$result['password']."<br>";
echo "Type of User: ".$result['typeName']."<br>";
echo "</div>";
} else{
    header("Location: index.php");
}