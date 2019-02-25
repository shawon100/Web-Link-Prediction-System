<?php

require_once("connection.php");

$key=$_GET['key'];
$array = array();

$query="SELECT * from mytable where url LIKE '%{$key}%' ORDER BY frecency DESC";
$send=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($send))
{
      $array[] = $row['url'];
}
 echo json_encode($array);


?>