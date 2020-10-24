<?php

   $Fertilize_ProductID = htmlspecialchars($_POST['Ferttilize_ProductID']);
   $ProductDescription = htmlspecialchars($_POST['CustomerInfo_ProductDecription']);
 


   // echo "$course_id\n";
   // echo $content;


   require('dbConnect.php');
   $db = get_db();
   
   // FROM THE READING:
   $stmt = $db->prepare('INSERT INTO note(Fertilize_ProductID, ProductDescription) VALUES (:Fertilize_ProductID, :ProductDescription);');
   $stmt->bindValue(':Fertilize_ProductID', $Fertilize_ProductID, PDO::PARAM_INT);
   $stmt->bindValue(':ProductDescription', $ProductDescription, PDO::PARAM_STR);
   $stmt->execute();
   
   $new_page = "course_note.php?Fertilize_ProductID=$Fertilize_ProductID";

   header("Location: $new_page");
   die();

?>