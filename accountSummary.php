<?php

include ("header.php");
include ("menu.php");
?>
<?php
require_once 'databaseConnection.php';

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

mysqli_query($conn, sprintf("insert into user (firstName, lastName, email, userTypeID, password) values ('%s', '%s', '%s', %s, '%s')", $first, $last, $email, $type, $password));
$lastID = mysqli_insert_id($conn);

$result = mysqli_query($conn, "select * from user inner join usertype on user.userTypeID=usertype.typeID where userID=$lastID");
$result = mysqli_fetch_assoc($result);

echo "<div class='confirmation'>";
echo "<h1>Thank you for making your account!</h1><br>";
echo "Your Account Information:<br>";
echo "First Name: ".$result['firstName']."<br>";
echo "Last Name: ".$result['lastName']."<br>";
echo "Email: ".$result['email']."<br>";
echo "Password: ".$result['password']."<br>";
echo "Type of User: ".$result['typeName']."<br>";
echo "</div>";
?>
<?php

include("footer.php");
?>