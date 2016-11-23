<!DOCTYPE html>
<html>
<head>
	<title>Register to Scholaria</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
	<ul class="navbar">
	  <li><a href="index.html">Home</a></li>
	  <li class="right"><a href="login.php">Login</a></li>
	  <li class="right"><a class="active" href="register.php">Register</a></li>
	</ul>
	</nav>

	<div class="container">
		<img src="img/Scholaria.png" width="400px" height="110px" align="center">
		<div class="main-content">
		<form class="form" action="index.html" method="POST">
			<input type="text" name="fullname" placeholder="fullname" autofocus="">
			<input type="text" name="username" placeholder="username">
			<input type="text" name="email" placeholder="email">
			<input type="password" name="password" placeholder="password">
			<input type="password" name="confirmpassword" placeholder="confirmpassword">
			<button class="btn-search">Register</button>
		</form>
		
		</div>
	</div>
	<?php include 'inc/footer.html';?>
</body>
</html>
