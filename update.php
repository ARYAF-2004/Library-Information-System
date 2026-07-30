<!-- Header -->
<?php include "header.php"?>
 


<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $id_book = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $id_book
      $query="SELECT * FROM library WHERE id_book = $id_book ";
      $view_users= mysqli_query($link,$query);
 
      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id_book'];
          $name = $row['book_name'];
          $author = $row['author_book'];
          $price = $row['book_price'];
        }
  
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $name = $_POST['name'];
      $author = $_POST['author'];
      $price = $_POST['price'];
       
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE library SET book_name = '{$name}' , author_book = '{$author}' , book_price = '{$price}' WHERE id_book = $id_book";
      $update_user = mysqli_query($link, $query);
      echo "<script type='text/javascript'>alert('Book data updated successfully!')</script>";
    }             
?>
 
<h1 class="text-center">Update Book Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" >Book Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name  ?>">
      </div>
 
      <div class="form-group">
        <label for="author" >Author</label>
        <input type="text" name="author"  class="form-control" value="<?php echo $author  ?>">
      </div>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     
      <div class="form-group">
        <label for="price" >Price</label>
        <input type="text" name="price"  class="form-control" value="<?php echo $price  ?>">
      </div>    
 
      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>
 
    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>
 