<?php require_once "connect.php";

session_start();
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$password= $_POST["password"];

$query="INSERT INTO `users`(ID,`firstname`,`lastname`,`phonenumber`,`email`,`password`)
values(null,'$fname','$lname','$phonenumber','$email','$password')";

$ret=mysqli_query ($connection,$query);
if ($ret)
{
?>
<p>Registration COMPLETE.</p>
<p>You can now log in the <a href="index.php">home page</a> </p>
<?php
} else
{ echo "ERROR!check.".mysqli_error($connection); }
?>