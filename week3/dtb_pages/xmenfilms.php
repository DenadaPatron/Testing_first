<?php

include('../dbconnect.php');
$sql = 'SELECT * FROM marvelmovies WHERE title like "X-men%"';

$result=myslqi_query($link, $sql);
while($row=$result->fetch_array()){
    $movieTitle=$row['title'];
    echo "<p>" .$movieTitle . "</p>";
}

/*include('../dbconnect.php');

$sql =  'SELECT * FROM marvelmovies';

$result=mysqli_query($link, $sql);
while($row=$result->fetch_array())
{
$movieTitle=$row['title'];
echo "<p>" . $movieTitle . "</p>";

}*/


?>