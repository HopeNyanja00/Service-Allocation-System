<?php require_once "../connect.php";

session_start();
$make= $_POST["make"];
$model= $_POST["model"];
$year= $_POST["year"];
$numberplate = $_POST["numberplate"];
$mileage= $_POST["mileage"];

$query="INSERT INTO `vehicles`(id,`make`,`model`,`year`,`numberplate`,`mileage`)
values(null,'$make','$model','$year','$numberplate','$mileage')";

$ret=mysqli_query ($connection,$query);
if ($ret)
{
?>
<p>Vehicle registered successfully, </p>
<p>you can now book appointment: <a href="userdashboard.php">Dashboard</a> </p>
<?php
} else
{ echo "ERROR!check.".mysqli_error($connection); }
?>