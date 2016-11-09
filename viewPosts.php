<?php
require_once 'databaseConnection.php';
include("header.php");
include("menu.php");

$query =
"select u.firstName, u.lastName, DATE_FORMAT(p.dateposted,'%m/%d/%Y') as datePosted, i.imagePath, jc.jewtooncategoryname
from post p
join user u
on p.userID = u.userID
join image i
on i.imageID = p.imageID
join jewtoonImage ji
on i.imageID = ji.imageID
join jewtoonCategory jc
on ji.jewtooncategoryID = ji.jewtoonCategoryID";

$result = mysqli_query($conn, $query);

echo mysqli_error($conn);

$num = $result->num_rows;

if ($num > 0){
    echo "<table border>"
    . "<tr>"
            . "<th>First Name</th>"
            . "<th>Last Name</th>"
            . "<th>Date Posted</th>"
            . "<th>Image Path</th>"
            . "<th>Jewtoon Category</th>"
            . "</tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["firstName"]."</td>"
                . "<td>".$row["lastName"]."</td>"
                . "<td>".$row["datePosted"]."</td>"
                . "<td>".$row["imagePath"]."</td>"
                . "<td>".$row["jewtooncategoryname"]."</td>";
    }
        echo "</table>";
    }
    else {
        echo "0 results";
    }
    $conn->close();
?>