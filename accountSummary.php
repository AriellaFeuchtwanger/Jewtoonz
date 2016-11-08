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

echo "<div class='confirmation'>";
echo "<h1>Thank you for making your account!</h1><br>";
echo "Your Account Information:<br>";
echo "First Name: $first<br>";
echo "Last Name: $last<br>";
echo "Email: $email<br>";
echo "Password: $password<br>";
echo "Gender: $gender<br>";
echo "Type of User: $type<br>";
echo "</div>";
?>
<?php

include("footer.php");
?>