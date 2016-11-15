<?php
echo 'testing';
include("header.php");
include ("menu.php");
require_once 'functions.php';
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 80;
$mail->Username = 'jewtoonz@gmail.com';
$mail->Password = 'jewt00nz';
$mail->setFrom('leahy1818@gmail.com');
$mail->addAddress('jewtoonz@gmail.com');
$mail->Subject = 'Hello from PHPMailer!';
$mail->Body = 'This is a test.';
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}
