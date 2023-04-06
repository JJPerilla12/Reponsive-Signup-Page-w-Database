<?php
$host ="localhost";
$user ="root";
$pass ="";
$dbname ="loginform";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn){
die ("Connection Error:" . mysqli_connect_error());
}

?>