<?php

include('../dbconnect.php');


$result=mysqli_query($db, $sql);
while($row=$result->fetch_array())
{
    $movieTitle=$row['title'];
    echo "<p>" . $movieTitle . "</p>";
}
?>