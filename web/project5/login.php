<?php
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="week5.css">
	<title>IQGREEN </title>
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
        <a href="">Team</a>
      </li>
    </ul>
  </nav>
</div>
<!-- nav end-->
    


<div id="form-main">

  <div id="form-div">
	<div id="search">
		<h2>IQGREEN Product</h2>
		<p></p>
		<form method="post">
			<label for="Soil">Product Name:</label><br>
            <input type="text" name="soil" id="soil"><br>
            
			<label for="city">Product type:</label><br>
            <input type="text" name="Product-type" id="P-type"><br>
            
			<label for="state">Product Description:</label><br>
            <input type="text" name="description" id="Desc"><br>
            

			<label for="country">Zone</label><br>
            <input type="text" name="zone" id="Zone"><br>
        
			<input type="submit" name="submit" value="Submit"><br>
			
		</form>
	</div>
    </div>
    </div>

</body>
</html>

