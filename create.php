<!-- Header -->
<?php  include "header.php" ?>
 



<?php 
  if(isset($_POST['create'])) 
    {
        $name = $_POST['name'];
        $author = $_POST['author'];
        $price = $_POST['price'];
       
//        $query= "INSERT INTO library(book_name, author_book, book_price) VALUES('{$name}','{$author}','{$price}')";
        $query= "INSERT INTO library(book_name, author_book, book_price) VALUES('$name','$author','$price')";
        $add_user = mysqli_query($link,$query);
     
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($link);
          }
 
          else { echo "<script type='text/javascript'>alert('Book added successfully!')</script>";
              }         
    }
?>
 
<h1 class="text-center">Add Book details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="name" class="form-label">Book Name</label>
        <input type="text" name="name"  class="form-control">
      </div>
 
      <div class="form-group">
        <label for="author" class="form-label">Author</label>
        <input type="text" name="author"  class="form-control">
      </div>
     
      <div class="form-group">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price"  class="form-control">
      </div>    
 
      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>
 
   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
 