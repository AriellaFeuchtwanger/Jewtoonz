<?php

include ("header.php");
include ("menu.php");
require_once 'databaseConnection.php';
if(isset($_COOKIE['username'])){
    $username = $_COOKIE['username'];
        $result = mysqli_query($conn, sprintf("select * from post inner join user on user.userid=post.userid where email='%s'", $username));
        $count = mysqli_num_rows($result);
        
        echo "<h1>My Posts</h1><br/><table>";
        
        while($row = mysqli_fetch_assoc($result)){
            echo "<td>Date: ".date("m/d/Y", strtotime($row['datePosted']))."</td>";
            if($row['Title'] != null){
                echo "<td>Title: ".$row['Title']."</td>";
            } else{
                echo "<td>Title: N/A</td>";
            }
        }
        echo "</table>";
        echo "<h5>Total number of posts: $count";
} else{
    header("Location: login.php");
}
include("footer.php");
?>

