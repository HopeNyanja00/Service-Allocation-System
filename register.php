<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registert</title>
</head>
<body>

<nav>    
<ul>
  <li><a href="index.php">Toyota Malawi</a></li>
  
  <li style="float:right"><a class="active" href="register.php">Register</a></li>
  <li style="float:right"><a class="" href="login.php">Login</a></li>
</ul>
</nav>

<form action="registerprocess.php" method="POST">
  <div class="container">
    <h1>Register your details</h1>
    <p>Please fill in this form to create an account with Toyota Malawi.</p>
    <hr>

    <label for="fname"><b>First Name</b></label> <br>
    <input type="text" placeholder="Enter firstname" name="fname" required> <br>

    <label for="lname"><b>Last Name</b></label> <br>
    <input type="text" placeholder="Enter lastname" name="lname" required> <br>

    <label for="email"><b>Email</b></label> <br>
    <input type="text" placeholder="Enter Email" name="email" required> <br>

    <label for="email"><b>Phonenumber</b></label> <br>
    <input type="text" placeholder="phonenumber" name="phonenumber" required> <br>

    <label for="psw"><b>Password</b></label> <br>
    <input type="password" placeholder="Enter Password" name="password" required> <br>

    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>

</form>
</body>
</html>
