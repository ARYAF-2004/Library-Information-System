



<?php  include "header.php" ?>
<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];
         // SQL query to delete data from user table where id_book = $userid
         $query = "DELETE FROM library WHERE id_book = {$userid}"; 
         $delete_query= mysqli_query($link, $query);
         header("Location: home.php");
     }
         