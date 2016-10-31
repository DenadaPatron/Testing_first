<?php

include('../dbconnect.php');

$sql = 'SELECT * FROM marvelmovies WHERE yearReleased => 2010';

$result=mysqli_query($link, $sql);
while($row=$result->fetch_array())
{
    $movieTitle = $row['title'];
    echo "<p>" . $movieTitle . "</p>";
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