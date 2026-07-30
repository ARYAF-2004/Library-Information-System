<?php  include 'header.php'?>
<h1 class="text-center">Book Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >Book ID</th>
          <th  scope="col">Book Name</th>
          <th  scope="col">Author</th>
          <th  scope="col"> Price</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
            <?php             
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 
                   $query="SELECT * FROM library WHERE id_book = $userid ";  
                  $view_users= mysqli_query($link,$query);            
 
                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id_book'];
                      $user = $row['book_name'];
                      $email = $row['author_book'];
                      $pass = $row['book_price'];
                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$user}</td>";
                        echo " <td > {$email}</td>";
                        echo " <td >{$pass} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
