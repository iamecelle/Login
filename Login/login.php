<!DOCTYPE html>
<html>
<head>
  <title> Succesfully Login </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
  <nav> 
    <div>
    <div class="main-raffle">
      <ul>
        <li><a href="index.html"> Home </li>
      </ul>
    </a>
  </li>
</ul>
</div>
</div>
</nav>

<br> <br> 

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header"><br>
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group"><br>
  		<label>Username</label>
  		<input type="text" name="username" > <br>
  	</div>
  	<div class="input-group">
  		<label>Password</label> 
  		<input type="password" name="password"><br>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user" ><a href="success.php">Login</a></button><br>
      <?php
      $loggedIn = true;
      if ($loggedIn == true){
          echo "You are Logged In";
      } else {
        echo "Please Login";
        # code...
      }
      ?>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>