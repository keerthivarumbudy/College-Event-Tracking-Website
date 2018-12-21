<?php
$dbServerName="localhost";
$username="root";
$password="password";
$dbName="Project";

$conn=mysqli_connect($dbServerName,$username,$password,$dbName) or die("Unable to connect");
echo "<script type='text/javascript'>console.log('Connection established');</script>";
?>
