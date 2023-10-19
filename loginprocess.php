<?php
session_start();
require('connect.php');


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];


	$sql="select * from users where email='".$email."' AND password='".$password."' ";

	$result=mysqli_query($connection,$sql);

	$row=mysqli_fetch_array($result);

	if($row["role_as"]=="1")
	{	

		$_SESSION["email"]=$email;

		header("location:admin/admindashboard.php");
	}

	elseif($row["role_as"]=="0")
	{

		$_SESSION["email"]=$email;
		
		header("location:user/userdashboard.php");
	}

	else
	{
		echo "email or password incorrect";
	}

}


?>