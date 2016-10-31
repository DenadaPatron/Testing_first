<?php

include('../dbconnect.php');

$sql = 'SELECT * FROM marvelmovies WHERE title like "X-men%"';

$result=mysqli_query($link, $sql);
while($row=$result->fetch_array()){
    $movieTitle=$row['title'];
    echo "<p>" .$movieTitle . "</p>";
}

?>