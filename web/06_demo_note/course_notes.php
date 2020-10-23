<?php
 
 if (!isset($_GET['course_id']))
 {
     die("Error, course id not  specified...");
 }

$course_id = htmlspecialchars($_GET['course_id']);
require('dbConnect.php');
$db = get_db();

// FROM THE READING:
$stmt = $db->prepare('SELECT c.code, c.name, n.content FROM note n JOIN course c ON n.course_id  = c.id
WHERE c.id = :id');
$stmt->bindValue(':id', $course_id, PDO::PARAM_INT);
//$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$note_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


$course_code = $note_rows[0]['code'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Notes</title>
</head>
<body>

   <h1>Course Notes for  <?php echo $course_code;?></h1>

  <?php
  foreach ($note_rows as $note_row)
  {
      $content = $note_row['content'];
      echo "<p>$content</p>";
  }

?>


 <form method="post" action="insert_note.php">
 <input type="hidden" name="course_id" value="<?php echo $course_id; ?>"
  <textarea name="note_content"> </textarea>
  <input type="submit" value="Create Note">
 
 
 
 </form>
    
</body>
</html>