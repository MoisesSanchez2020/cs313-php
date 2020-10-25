<?php
require('dbConnect.php');
$db = get_db();

// From the reading:
// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = 'SELECT id, code, name  FROM course';
$stmt = $db->prepare($query);
$stmt->execute();
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IQGREEN</title>
<body>
<div id="container">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">IQGreen</a>
            </li>
            <li><a href="course_notes.php">Sol</a></li>
            <li><a href="insert_note.php">Fertilezer</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">LOG-IN</a></li>
        </ul>
    </nav>
</div>
	<h1>IQGREEN</h1>

	<ul>
<?php

foreach ($courses as $course)
{
	$id = $course['id'];
	$code = $course['code'];
    $name = $course['name'];
    $ProductID = $course['ProductID'];

	echo "<li><p><a href='course_notes.php?course_id=$id'>$code - $name - $ProductID</a></p></li>";
}
?>		
	</ul>

</body>
</html>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IQGREEN</title>
</head>
<body>

<div id="container">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">IQGreen</a>
            </li>
            <li><a href="#">Sol</a></li>
            <li><a href="#">Fertileze</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">LOG-IN</a></li>
        </ul>
    </nav>
  <h1>IQGREEN</h1>
<p> THis Project is a demo of PHP Injection to the DOM - SQL DATA BASE implementation</p>
</div>

      <h1>SOIL Classification</h1>

       <ul>
          // 
           //foreach ($Fertilizes as $Fertilize)
          // {
               //$ProductID = $Fertilize['ProductID'];
               //$ProductName = $Fertilize['ProductName'];
               //$ProductType = $Fertilize['ProductType'];
               //$ProductPrice = $Fertilize['ProductPrice'];
              // $ProductDescription = $Fertilize['ProductDescription'];

           //echo "<li><p><a href='course_notes.php?Fertilize_ProductID=$ProductID'>$ProductName - $ProductName - $ProductType - $ProductPrice - $ProductDescription</a></p></li>";



           }
          
          
     
       </ul>
    
</body>
</html>

