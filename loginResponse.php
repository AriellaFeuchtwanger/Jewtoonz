<?php
require_once "databaseConnection.php";
include("header.php");
include("menu.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//$validUsernames = ["User1", "User2", "User3"];
//$validPasswords = ["123456"];

$result = mysqli_query($conn, sprintf("select count(userid) as count from user where email='%s' and password='%s'", $username, $password));
echo mysqli_error($conn);
$result = mysqli_fetch_assoc($result);

if($result['count'] == 1){
    echo "<h4>Use <a href='content.php'>this link</a> to see the super-secure content!";
    setcookie('username', $username);
    $_SESSION['LoggedIn'] = true;
} else{
    echo "<h4>Error! There was a problem logging you in. Do you have the correct information?";
}

include("footer.php");
?>