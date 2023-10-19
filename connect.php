<?php
//create a database connection
$host="localhost";
$user="root";
$pass="";
$database="toyotamalawi";
$connection=mysqli_connect($host,$user,$pass,$database);
//check if database connected.
if(mysqli_connect_errno()){
die("Could not connect to database:".
mysqli_connect_error()."(".mysqli_connect_errno().")");}
mysqli_select_db($connection,$database);
?>