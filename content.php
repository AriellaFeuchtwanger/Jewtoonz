<?php
include("header.php");
include("menu.php");

session_start();

if($_SESSION['LoggedIn']){
    echo "<h4>Hello ".$_COOKIE['username']."!";
} else{
    echo "<h4>There was an error accessing your account. Please <a href='login.php'>log in</a> again.";
}

include("footer.php");
?>