<?php

include('../dbconnect.php');

$sql = 'SELECT * FROM marvelmovies WHERE productionStudio = "Marvel Studios"';

$result=mysqli_query($link, $sql);
while($row=$result->fetch_array())
{
  $movieTitle=$row['title'] ;
  echo "<p>" . $movieTitle . "</p>";
}


?>










