<?php require_once "../connect.php";


// Get the input data
$appointment_id = $_POST['appointment_id'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];

// Update the appointments table with the allocated date and time
$sql = "UPDATE appointments SET appointment_date='$appointment_date', appointment_time='$appointment_time' WHERE id='$appointment_id'";

if ($connection->query($sql) === TRUE) {
  echo "Appointment allocated successfully!";
} else {
  echo "Error allocating appointment: " . $connection->error;
}

$connection->close();

?>