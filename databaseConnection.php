<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="jewtoonz";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn, $database);

?>