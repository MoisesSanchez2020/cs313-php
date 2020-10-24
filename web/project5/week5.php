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





<!--- form 2 -->

<div id="form-main">

  <div id="form-div">
  
    <form  class="form" id="form1"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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


  <?php
			    try
		        {
		        $dbUrl = getenv('DATABASE_URL');
		        
		        $dbOpts = parse_url($dbUrl);
		        
		        $dbHost = $dbOpts["host"];
		        $dbPort = $dbOpts["port"];
		        $dbUser = $dbOpts["user"];
		        $dbPassword = $dbOpts["pass"];
		        $dbName = ltrim($dbOpts["path"],'/');
		        
		        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		        
		        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        }
		        catch (PDOException $ex)
		        {
		        echo 'Error!: ' . $ex->getMessage();
		        die();
		        } 


		        $bird = $_POST['name'];
		        $city = $_POST['type'];
		        $state = $_POST['price'];
				
				

	if (!empty($soil)) {
   foreach ($db->query('SELECT Soil.soilname, Fertilize.fertname, PestControl.pestnam  FROM Products INNER JOIN  soil  On Products.ProductNumber=Soil.ProductId ') as $row)
					{
						if ($_POST['name'] == $row['ProductName']) {
							echo '<h3>' . $row['ProductName'] . '</h3><br>';
					  		echo 'Producttype: ' . $row['ProductPrice'] . ', ' . $row['State'] . ', ' . $row['Country'] . '<br>';
					  		echo 'Date: ' . $row['Fertilize'] . '<br>';
						}
					}
		        }
			?>





<script src="nav.js"></script>
</body>
</html>