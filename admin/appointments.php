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


/* form styling */
.form-container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
  }

  .appointments{
    margin-left: 50px;
  }

  /* Style the form labels */
  .appointments label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  /* Style the form input fields */
  .appointments  input[type="text"],
  input[type="date"],
  input[type="time"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }

  /* Style the form submit button */
  .appointments input[type="submit"] {
    background-color: red;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  /* Change the submit button background color on hover */
  .appointments input[type="submit"]:hover {
    background-color: grey;
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
    <h2>Allocate Appointment </h2>
    <a href="">Hello: <?php echo $_SESSION["email"];?></a>
    <a href="../logout.php">Logout</a>
  </div>
<div class="form-container">
  <form class="appointments" action="allocate_appointment.php" method="post">
  <label for="appointment_id">Appointment ID:</label>
  <input type="text" name="appointment_id">
  <label for="appointment_date">Appointment Date:</label>
  <input type="date" name="appointment_date">
  <label for="appointment_time">Appointment Time:</label>
  <input type="time" name="appointment_time"> <br> <br>
  
  <input type="submit" value="Allocate Appointment">
</form>
</div>
 
</main>

<?php /* } */ ?>