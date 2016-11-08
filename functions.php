<?php
require_once 'databaseConnection.php';

function getUserTypes(){
    global $conn;
    $result = mysqli_query($conn, "select * from usertype");
    
    while($row = mysqli_fetch_assoc($result)){
        echo sprintf("<option value=%s>%s</option>", $row['typeID'], $row['typeName']);
    }
}
?>