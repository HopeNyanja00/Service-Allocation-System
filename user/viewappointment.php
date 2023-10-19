<?php require_once "../connect.php"; ?>
<head>
    <link rel="stylesheet" href="user.css">
    <script src="functions.js"></script>
</head>
<span class="bckg"></span>

<header>
  <h1>Toyota Malawi</h1>
  <nav>
    <ul>
    <li>
        <a href="userdashboard.php">Dashboard</a>
      </li>
      <li>
        <a href="registervehicle.php">Register Vehicle</a>
      </li>
      <li>
        <a href="appointments.php">Make Appointment</a>
      </li>
      <li>
        <a href="chat.php">chat</a>
      </li>
      <li>
        <a href="cart.php">Purchase Parts</a>
      </li>
    </ul>
  </nav>
</header>

<main>
  <div class="title">
    <h2>Your Scheduled Appointments</h2>
    <a href="../logout.php">Logout</a>
  </div>
  <br>
  <br>
  
 <?php
  
// Retrieve the service type, allocated date, and allocated time from the appointments table
$sql = "SELECT service_type, appointment_date, appointment_time FROM appointments";

$result = $connection->query($sql);

if ($result->num_rows > 0) {
  // Output the table headers
  echo "<table>";
  echo "<tr><th>Service Type</th><th>Allocated Date</th><th>Allocated Time</th></tr>";

  // Output the table rows with appointment data
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["service_type"] . "</td><td>" . $row["appointment_date"] . "</td><td>" . $row["appointment_time"] . "</td></tr>";
  }

  echo "</table>";
} else {
  echo "No appointments found.";
}

$connection->close();
    
  ?>


</main>