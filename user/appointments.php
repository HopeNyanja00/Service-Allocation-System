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
        <a href="viewappointment.php">View Appointment</a>
      </li>
      <li>
        <a href="chat.php">Chat</a>
      </li>
      <li>
        <a href="cart.php">Purchase Parts</a>
      </li>
    </ul>
  </nav>
</header>

<main>
  <div class="title">
    <h2>Make Appointment</h2>
    <a href="../logout.php">Logout</a>
  </div>

  
<form action="appointmentsprocess.php" method="POST">
  <div class="container">
    <h1>Book a Service</h1>
    <br>
    <label for="fname"><b>Service Type</b></label> <br>
    <select id="service_type" name="service_type" required>
    <option value="oil_change">Oil Change</option>
    <option value="tire_rotation">Over-all Checkup</option>
    <option value="brake_service">Tyre Replacement</option>
   
  </select><br><br>

    <label for="lname"><b>Date</b></label> <br>
    <input type="text" placeholder="date is placed by service advisor" name="appointment_date" disabled> <br>

    <label for="email"><b>Time</b></label> <br>
    <input type="text" placeholder="time is placed by service advisor" name="appointment_time" disabled> <br>

    <button type="submit" class="registerbtn">submit</button>
  </div>
  
  <br>
 
</main>