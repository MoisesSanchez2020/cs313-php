<?php
?>



  




</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="week5.css">
  
    <title>Document</title>
</head>
<body>
<!--nav -->
<div id="header">
  <div class="logo">
    <a href="index.php">IQGreen</a>
  </div>  
  <nav>
    <form class="search" action="search.php"> 
      <input name="q" placeholder="Search..." type="search">
    </form>
    <ul>
      <li>
        <a href="week5.php">Search</a>
      </li>
      <li>
        <a href="">About</a>
        <ul class="mega-dropdown">
          <li class="row">
            <ul class="mega-col">
              <li><a href="#">About</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="mega-col">
              <li><a href="#">Help</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Services</a></li>
            </ul>
            <ul class="mega-col">
              <li><a href="#">Coming Soon</a></li>
              <li><a href="#">404 Error</a></li>
              <li><a href="#">Search</a></li>
              <li><a href="#">Author Page</a></li>
            </ul>
            <ul class="mega-col">
              <li><a href="#">Full Width</a></li>
              <li><a href="#">Right Column</a></li>
              <li><a href="#">Left Column</a></li>
              <li><a href="#">Maintenance</a></li>
            </ul>
          </li>
        </ul>        
      </li>
      <li class="dropdown">
        <a href="">Contact</a>
          <ul>
            <li><a href="#">About Version</a></li>
            <li><a href="#">About Version</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>        
      </li>
      <li>
        <a href="">Portfolio</a>
      </li>
      <li>
        <a href="login.php">Log-in</a>
      </li>
    </ul>
  </nav>
</div>
<!-- nav end-->


	<div>
		<h2>Welcome to IQGreen</h2>
		<p>Select the "Search" to look for your Fertilizer</p>
		<button class="button button1">Search</button>

		<!-- Search form -->
<input class="form-control" type="text" placeholder="Search" aria-label="Search">
		<p>Select the "LOG" New seach </p>
		<button class="button button2">NEW SEARCH</button>
		<!-- Search form -->
<input class="form-control" type="text" placeholder="Search" aria-label="Search">
        
	</div>







<script src="nav.js"></script>
</body>
</html>