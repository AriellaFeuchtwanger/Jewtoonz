<?php

include ("header.php");
include ("menu.php");
?>
<?php

$userName = $_POST['userName'];
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

echo "Account Information:<br>";
echo "Username: $userName<br>";
echo "Email: $email<br>";
echo "Password: $password<br>";
echo "Gender: $gender<br>";
echo "Type of Jewtoonz: $type<br>";
?>
<?php

include("footer.php");
?>