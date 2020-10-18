<?php



?>



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
    <a href="#">IQGreen</a>
  </div>  
  <nav>
    <form class="search" action="search.php"> 
      <input name="q" placeholder="Search..." type="search">
    </form>
    <ul>
      <li>
        <a href="index.php">Home</a>
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




<!--- form 2 -->

<div id="form-main">

  <div id="form-div">
    <form class="form" id="form1">
    <h2>Product Search</h2>

      <p class="name">
       <h3>Fertilizer</h3>   
      <button class="button button1" id="button-blue">Search</button>
      <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="" id="name" />
      </p>
     


      <p class="name">
       <h3>Soil</h3>
      <button class="button button1" id="button-blue">Search</button>
        <input name="email" type="text" class="validate[required,custom[onlyLetter],length[0,100]]  feedback-input" id="email" placeholder="" />
      </p>
      


      <p class="name">
          <h3>Pest Control</h3>
      <button class="button button1" id="button-blue" >Search</button>
      <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="" id="name" />
        <!--<textarea name="text" class="validate[required,custom[onlyLetter],length[0,100]]  feedback-input" id="comment" placeholder="Comment" ></textarea>-->
      </p>
     
      
      <div class="submit">
        <input type="submit" value="IQGreen" id="button-green"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>







<script src="nav.js"></script>
</body>
</html>