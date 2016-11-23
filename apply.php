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
			<li><a href="#">Home</a></li>
			<li class="right"><a href="login.php">Login</a></li>
			<li class="right"><a href="register.php">Register</a></li>
	    </ul>
	</nav>

	<div class="container">
		<img src="img/Scholaria.png" width="400px" height="110px" align="center">
		<div class="main-content">
			<div class="scholarship-info-container">
				<p>lalal</p>
			</div>
			<form class="form" action="index.html" method="POST">
				<p>Nama lengkap:</p>
				<input type="text" name="fullname" autofocus="">
				<p>Nama panggilan:</p>
				<input type="text" name="nickname">
				<p>Tempat, tanggal lahir:</p>
				<input type="text" name="borndate">
				<p>Universitas:</p>
				<input type="text" name="univ">
				<p>Jurusan:</p>
				<input type="text" name="major">
				<p>Deskripsikan diri anda dalam 200 kata:</p>
				<textarea type="text" name="major"></textarea> 
			    <p>Unggah CV:</p> 
			    <input class="upload-file" type="file" name="fileToUpload" id="fileToUpload">
			    <p><a href="">Ketentuan mengenai beasiswa</a></p>
			    <div class="checkbox">
				<input type="checkbox" name="fileToUpload" id="fileToUpload">Saya telah mebaca dan menyetujui peraturan yang berlaku<br>
				</div>
				<button class="btn-search right">Save</button>
				<button class="btn-search right">Submit</button>	
			</form>
			
		</div>
	</div>
	<?php include 'inc/footer.html';?>
</body>
</html>