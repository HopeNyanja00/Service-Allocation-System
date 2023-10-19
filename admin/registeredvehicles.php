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
    <h2>Registered Vehicles</h2>
    <a href="">Hello: <?php echo $_SESSION["email"];?></a>
    <a href="../logout.php">Logout</a>
  </div>

  <?php
    
// Query database to retrieve user data
$sql = "SELECT make, model, year, numberplate, mileage FROM vehicles";
$result = $connection->query($sql);

// Create table headers
echo "<table>";
echo "<tr><th>Make</th><th>Model</th><th>Year</th><th>Number Plate</th><th>Mileage</th></tr>";

// Loop through results and display data in table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["make"] . "</td><td>" . $row["model"] . "</td><td>" . $row["year"] . "</td><td>" . $row["numberplate"] . "</td><td>" . $row["mileage"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>No users found.</td></tr>";
}

// Close table and database connection
echo "</table>";
$connection->close();
  ?>

  
</main>

<?php /* } */ ?>