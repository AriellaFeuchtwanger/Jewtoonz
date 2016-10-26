<?php
include("header.php");
include("menu.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$validUsernames = ["User1", "User2", "User3"];
$validPasswords = ["123456"];

$valid = false;

foreach($validUsernames as $name){
    if($username == $name){
        $valid = true;
        break;
    }
}

foreach($validPasswords as $p){
        if($password == $p){
            $valid = true;
            break;
        } else{
            $valid = false;
        }
    }

if($valid){
    echo "<h4>Use <a href='content.php'>this link</a> to see the super-secure content!";
    setcookie('username', $username);
    $_SESSION['LoggedIn'] = true;
} else{
    echo "<h4>Error! There was a problem logging you in. Do you have the correct information?";
}

include("footer.php");
?>