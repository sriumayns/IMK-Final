<!DOCTYPE html>
<html>
<head>
  <title>Welcome!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/filter.js"></script>
</head>
<body>
  <nav>
    <ul class="navbar">
      <li><a class="active" href="#">Home</a></li>
      <li class="right"><a href="profil.php">Hi Lala!</a></li>
      
    </ul>
  </nav>

  <div class="container">
    <img src="img/Scholaria.png" width="400px" height="110px" align="center">
    <form class="searchbar" method="POST" action="">
        <input class="search" type="text" name="search_key" list="scholar" id="ajax" placeholder="Enter key search" autofocus="" autocomplete="off">
      
      <datalist id="scholar">
        <option value="Astra">
        <option value="BBM">
        <option value="BIUS">
        <option value="Dompet Duafa">
        <option value="Djarum">
        <option value="Erasmus Mundus">
        <option value="LPDP">
        <option value="Makan">
        <option value="Pertamina">
        <option value="Sampoerna">
        <option value="Tanoto">
        <option value="Toyota">
      </datalist>
  <!--
      <label for="ajax">Pick an HTML Element (options loaded using AJAX)</label>
  <input type="text" id="ajax" list="json-datalist" placeholder="e.g. datalist" onkeyup="suggestion()">
  <datalist id="json-datalist"></datalist>
-->

      <button class="btn-search">Search!</button>
      <div class="filter">
      <p>Type : 
        <select name="scholarship-type">
          <option value="None">None</option>
          <option value="Full Scholarship">Full Scholarship</option>
          <option value="Tuition Fee">Tuition Fee</option>
          <option value="Living Cost">Living Cost</option>
        </select>
      </p>
      
      <p>Degree: 
        <select name="scholarship-deg">
          <option value="None">None</option>
          <option value="Undergraduate">Undergraduate</option>
          <option value="Post-graduae">Post-graduae</option>
        </select>
      </p>

    </div>
    </form>

    

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchVal = $_POST["search_key"];
        $type = $_POST["scholarship-type"];
        $deg = $_POST["scholarship-deg"];

        
        if ($searchVal=="Astra") {
          
        }

        echo "<p>Search result for <strong>".$searchVal."</strong> </p>";
        if ($type!="None") {
          echo "<p>Filter by Type: ".$type."</p>";
        }
        if ($deg!="None") {
          echo "<p>Filter by Degree: ".$deg."</p>";
        }

        
      }
        
      




  ?>

    <div class="main-content">
      <div class="scholarship-info-container">
        <h3>Scholarship 1</h3>
        <p>lalala</p>
        <div class="align-right"><a href="description.php">Info lengkap >>></a></div>
      </div>  
      <div class="scholarship-info-container">
        <h3>Scholardeefvship 2</h3>
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
