<?php require_once "../connect.php";



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $service_type = $_POST["service_type"];
  // $date = $_POST["appointment_date"];
  // $time = $_POST["appointment_time"];

  // Prepare and execute SQL query to insert appointment data
  $stmt = $connection->prepare("INSERT INTO appointments (service_type) VALUES ('$service_type')");
  // $stmt->bind_param("ssssssss", $service_type);
  $stmt->execute();

  // echo "Appointment booked successfully!";
}


?>
