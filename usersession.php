<?php
/*This is the session. You can either write it on a separate script or in the
same line login_process.php whichever style you prefer */
$_SESSION["userID"]=$row['userID'];
$_SESSION["name"]=$row['name'];
$_SESSION["username"]=$row['username'];
//
if($_SESSION["userID"]&&$_SESSION["name"]&&$_SESSION["username"] ==TRUE){
header("Location:user_dashboard.php");exit;
}
else{
$message= "Invalid username or Password!";
}
if(!$_SESSION["userID"]){
header("Location:index.php");
}
/*In a different case you would have added the connect.php to this but since
this script will be added to the login_process.php which the connect.php is
already added, they'll be no need*/
?>