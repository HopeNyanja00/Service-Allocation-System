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
 
		form {
			margin: 50px auto;
			padding: 20px;
			max-width: 600px;
			border: 2px solid #ccc;
			border-radius: 10px;
		}

		label {
			display: block;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		input[type=text], input[type=email], input[type=tel] {
			font-size: 16px;
			padding: 10px;
			margin-bottom: 20px;
			width: 100%;
			border-radius: 5px;
			border: none;
			box-shadow: 2px 2px 2px rgba(0,0,0,0.1);
		}

		input[type=submit] {
			background-color: red;
			color: white;
			font-size: 16px;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #3e8e41;
		}
	</style>
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
        <a href="appointments.php">Appointments</a>
      </li>
      <li>
        <a href="partrequests.php">Part Requests</a>
      </li>
    </ul>
  </nav>
</header>

<main>
  <div class="title">
    <h2>Admin Dashboard</h2>
    <a href="">Hello: <?php echo $_SESSION["email"];?></a>
    <a href="../logout.php">Logout</a>
  </div>

 
<?php
   
// Retrieve user details from database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $connection->query($sql);

    // Display user details in form
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $phonenumber = $row['phonenumber'];
    } else {
        echo "No user found with ID $id";
    }
}

// Close database connection
$connection->close();
?>
  

  <form action="update_user.php" method="post">
  <label for="firstname">First Name:</label>
  <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>">

  <label for="lastname">Last Name:</label>
  <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>">

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo $email; ?>">

  <label for="phonenumber">Phone Number:</label>
  <input type="text" id="phonenumber" name="phonenumber" value="<?php echo $phonenumber; ?>">

  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="submit" value="Update">
</form>

</main>

<?php /* } */ ?>