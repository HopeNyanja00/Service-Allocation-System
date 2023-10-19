<?php require_once "../connect.php";
session_start();
/*
if(!$_SESSION["email"]){
header("Location:userdashboard.php");
}else {
  */


// Query database to count number of users
$sql = "SELECT COUNT(id) as total_users FROM users";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$total_users = $row["total_users"];


// Query database to count number of vehicles
$sql = "SELECT COUNT(id) as total_vehicles FROM vehicles";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$total_vehicles = $row["total_vehicles"];



// Query database to count number of appointments
$sql = "SELECT COUNT(id) as total_appointments FROM appointments";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
$total_appointments = $row["total_appointments"];



?>
<head>

    <link rel="stylesheet" href="../user/user.css">
    <script src="functions.js"></script>

    <style>
      .card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  margin: 20px;
  overflow: hidden;
  transition: all 0.2s ease-in-out;
  width: 300px;
  float: left;
}

.card:hover {
  box-shadow: 0 4px 16px rgba(0,0,0,0.2);
  transform: translateY(-2px);
}

.card-body {
  padding: 20px;
}

.card-title {
  color: #333;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-text {
  color: #666;
  font-size: 36px;
  font-weight: bold;
  margin: 0;
  text-align: center;
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
    <h2>Admin Dashboard</h2>
    <a href="">Hello: <?php echo $_SESSION["email"];?></a>
    <a href="../logout.php">Logout</a>
  </div>

  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Total Registered Users</h5>
    <p class="card-text"><?php echo $total_users; ?></p>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Total Registered Vehicles</h5>
    <p class="card-text"><?php echo $total_vehicles; ?></p>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Total Appointments</h5>
    <p class="card-text"><?php echo $total_appointments; ?></p>
  </div>
</div>
  
</main>

<?php /* } */ ?>