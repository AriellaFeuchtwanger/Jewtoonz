<?php
include("header.php");
include ("menu.php");
require_once 'functions.php';
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
//$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'jewtoonz@gmail.com';
$mail->Password = 'jewt00nz';
//$mail->setFrom('leahy1818@gmail.com');
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('jewtoonz@gmail.com');
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];
//send the message, check for errors
if (!$mail->send()) {
    //echo "ERROR: " . $mail->ErrorInfo;
    echo "Whoops! Something went wrong!";
} else {
    echo "Thank you for your message! We value every message we receive from our users!";
}
include("footer.php");
