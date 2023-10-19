<?php require_once "../connect.php";
session_start();
/*
if(!$_SESSION["email"]){
header("Location:userdashboard.php");
}else {
  */



?>
<head>

    <link rel="stylesheet" href="../user/user.css">
    <script src="functions.js"></script>

    <style>
    table {
  border-collapse: collapse;
  margin: 20px;
  width: 100%;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: red;
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #e6e6e6;
}

.actions {
  display: flex;
  justify-content: space-between;
  align-items: center;
  
}

.actions a {
  padding: 8px 16px;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 4px;
}

.actions a:hover {
  background-color: #3e8e41;
}
    </style>
 
</head>
<span class="bckg"></span>

<header>
  <h1>Toyota Malawi</h1>
  <nav>
    <ul>
      
      <li>
        <a href="admindashboard.php">Dash Board</a>
      </li>
      <li>
        <a href="registeredusers.php">Registered users</a>
      </li>
      <li>
        <a href="registeredvehicles.php">Registered Vehicles</a>
      </li>
      <li>
        <a href="viewappointments.php">View Appointments</a>
      </li>
      <li>
        <a href="appointments.php">Allocate Appointments</a>
      </li>
      <li>
        <a href="admin.php">Send notification</a>
      </li>
      <!-- <li>
        <a href="partrequests.php">Part Requests</a>
      </li> -->
    </ul>
  </nav>
</header>


<main>
  <div class="title">
    <h2>Registered users</h2>
    <a href="">Hello: <?php echo $_SESSION["email"];?></a>
    <a href="../logout.php">Logout</a>
  </div>
 
  <?php
  
  // Retrieve the service type, allocated date, and allocated time from the appointments table
  $sql = "SELECT id, service_type, appointment_date, appointment_time FROM appointments";
  
  $result = $connection->query($sql);
  
  if ($result->num_rows > 0) {
    // Output the table headers
    echo "<table>";
    echo "<tr><th>ID</th><th>Service Type</th><th>Allocated Date</th><th>Allocated Time</th></tr>";
  
    // Output the table rows with appointment data
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["id"] .  "</td><td>" . $row["service_type"] . "</td><td>" . $row["appointment_date"] . "</td><td>" . $row["appointment_time"] . "</td></tr>";
    }
  
    echo "</table>";
  } else {
    echo "No appointments found.";
  }
  
  $connection->close();
      
    ?>
 

</main>

<?php /* } */ ?>