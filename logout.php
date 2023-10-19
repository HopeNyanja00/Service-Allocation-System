<?php
session_start();
// remove all session variables
session_unset();
// destroy the sessionsession_destroy();
//to direct you to the home page.
header("Location:index.php");
exit();
?>