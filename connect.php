<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'train1';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>