<?php
   require('dbConnect.php');
$db = get_db();


// FROM THE READING:
/* $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); */


    $query  = 'SELECT id, code, name FROM course';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>

<div id="container">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">WordPress</a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Tutorials</a></li>
            </ul>        
            </li>
            <li><a href="#">Web Design</a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Links</a></li>
                <li><a href="#">Tutorials</a>
            	<!-- Second Tier Drop Down -->
                <ul>
                    <li><a href="#">HTML/CSS</a></li>
                    <li><a href="#">jQuery</a></li>
                    <li><a href="#">Other</a>
                        <!-- Third Tier Drop Down -->
                        <ul>
                            <li><a href="#">Stuff</a></li>
                            <li><a href="#">Things</a></li>
                            <li><a href="#">Other Stuff</a></li>
                        </ul>
                    </li>
                </ul>
                </li>
            </ul>
            </li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
  <h1>Pure CSS Drop Down Menu</h1>
<p> A simple dropdown navigation menu made with CSS Only. Dropdowns are marked with a plus sign ( + )</p>
</div>

      <h1>Courses</h1>

       <ul>
           <?PHP
           foreach ($courses as $course)
           {
               $id = $course['id'];
               $code = $course['code'];
               $name = $course['name'];

           echo "<li><p><a href='course_notes.php?course_id=$id'>$code - $name</a></p></li>";



           }
          
          
       ?>
       </ul>
    
</body>
</html>

