<head>
    <link rel="stylesheet" href="user.css">
    <script src="functions.js"></script>
</head>
<span class="bckg"></span>

<header>
  <h1>Totoya Malawi</h1>
  <nav>
    <ul>
      
      <li>
        <a href="userdashboard.php">Dashboard</a>
      </li>
      <li>
        <a href="appointments.php">Make Appointment</a>
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
    <h2>Register Vehicle</h2>
    <a href="../logout.php">Logout</a>
  </div>

  
<form action="registervehicleprocess.php" method="POST">
  <div class="container">
    <h1>Register your Vehicle details</h1>
    <br>
    <label for="make"><b>Make</b></label> <br>
    <input type="text" placeholder="e.g Toyota" name="make" required> <br>

    <label for="model"><b>Model</b></label> <br>
    <input type="text" placeholder="e.g Corolla" name="model" required> <br>

    <label for="year"><b>Year</b></label> <br>
    <input type="number" placeholder="e.g 2009" name="year" required> <br>

    <label for="numberplate"><b>Number Plate</b></label> <br>
    <input type="text" placeholder="e.g MZ1289" name="numberplate" required> <br>

    <label for="Mileage"><b>Mileage</b></label> <br>
    <input type="number" placeholder="e.g 12800" name="mileage" required> <br>

    <hr>
    

    <button type="submit" class="registerbtn">Register</button>
  </div>
  


</main>