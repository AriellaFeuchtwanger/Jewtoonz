<?php
require_once 'databaseConnection.php';
$query="select * from tablename";
$result = $conn->query($query);
$num = mysql_numrows($result);

if (num > 0){
    echo "<table><tr><th>PostID</th><th>User</th></tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["postID"]."</td>"
                . "<td>".$row["userID"]."</td>";
        }
        echo "</table>";
    }
    else {
        echo "0 results";
    }
    $conn->close();
?>