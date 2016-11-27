<!DOCTYPE html>
<html>
<head>
	<title>Login to Scholaria</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
		<ul class="navbar">
		  <li><a href="index.html">Home</a></li>
		  <li class="right"><a class="active" href="login.php">Login</a></li>
		  <li class="right"><a href="register.php">Register</a></li>
		</ul>
	</nav>
	<div class="container">
		<img src="img/Scholaria.png" width="400px" height="110px" align="center">
		<div class="main-content">
		<form class="form" action="home.php" method="POST">
			<input type="text" name="username" placeholder="username" autofocus="">
			<input type="password" name="password" placeholder="password">
			<button class="btn-search">Login</button>
		</form>
		
		</div>
	</div>
	<?php include 'inc/footer.html';?>
</body>
</html>
