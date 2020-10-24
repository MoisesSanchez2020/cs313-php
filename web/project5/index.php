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
    
      <li class="dropdown">
        <a href="contact.php">Contact</a>
            
      </li>
      
      <li>
        <a href="login.php">Log-in</a>
      </li>
    </ul>
  </nav>
</div>
<!-- nav end-->




  <div id="form-div">
<div id="form-main">
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


    </div>

    </div>


<script src="nav.js"></script>
</body>
</html>