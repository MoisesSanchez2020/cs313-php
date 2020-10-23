<?php

   $course_id = htmlspecialchars($_POST['course_id']);
   $content = htmlspecialchars($_POST['note_content']);
 


   // echo "$course_id\n";
   // echo $content;


   require('dbConnect.php');
   $db = get_db();
   
   // FROM THE READING:
   $stmt = $db->prepare('INSERT INTO note(course_id, content) VALUES (:course_id, :content);');
   $stmt->bindValue(':course_id', $course_id, PDO::PARAM_INT);
   $stmt->bindValue(':content', $content, PDO::PARAM_STR);
   $stmt->execute();
   
   $new_page = "course_note.php?course_id=$course_id";

   header("Location: $new_page");
   die();

?>