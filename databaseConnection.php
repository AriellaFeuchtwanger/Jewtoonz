<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="Jewtoonz";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn, $database);

?>