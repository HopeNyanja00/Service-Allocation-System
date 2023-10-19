<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav>    
<ul>
  <li><a href="index.php">Toyota Malawi</a></li>
  
  <li style="float:right"><a class="" href="register.php">Register</a></li>
  <li style="float:right"><a class="active" href="login.php">Login</a></li>
</ul>
</nav>
<form action="loginprocess.php" method="POST">
  <div class="container">
    <h1>Login</h1>
    
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <hr>
    <button type="submit" class="registerbtn">Login</button>
  </div>
  
  
</form>
</body>
</html>
