<!DOCTYPE html>
<html>
<head>
  <title>Welcome!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <nav>
    <ul class="navbar">
      <li><a class="active" href="#">Home</a></li>
      <li class="right"><a href="login.php">Profil(user)</a></li>
      <li class="right"><a href="login.php">Logout</a></li>
    </ul>
  </nav>
  
  <div class="container">
    <img src="img/Scholaria.png" width="400px" height="110px" align="center">
    <form class="searchbar" method="POST" action="">
      <input class="search" type="text" name="search_key" placeholder="Enter key search" autofocus="">
      <button class="btn-search">Search!</button>
    </form>

    <div class="filter">
      <input type="radio" name="filter">Most seen
      <input type="radio" name="filter">Most applied
      <select>
        <option value="today">today</option>
        <option value="this week">this week</option>
        <option value="this month">this month</option>
        <option value="this year">this year</option>
      </select>
    </div>

    <div class="main-content">
      <div class="scholarship-info-container">
        <h3>Scholarship 1</h3>
        <p>lalala</p>
        <div class="align-right"><a href="description.php">Info lengkap >>></a></div>
      </div>  
      <div class="scholarship-info-container">
        <h3>Scholarship 2</h3>
        <p>lalala</p>
        <div class="align-right"><a href="description.php">Info lengkap >>></a></div>
      </div>  
    </div>
  </div>

<footer>
  <p> Copyrigth 2016 Scholaria </p>
  <p> All Right Reserved </p>
</footer>
</body>
</html>
