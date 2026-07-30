<?php include "header.php"?>
  <div class="container">
    <h1 class="text-center" >Library information system</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New Book</a>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">book name</th>
              <th  scope="col">Author</th>
              <th  scope="col"> Price</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>  
          <?php
            $query="SELECT * FROM library";              
            $view_users= mysqli_query($link,$query);    
             while($row= mysqli_fetch_assoc($view_users)){
              $id_book = $row['id_book'];                
              $name = $row['book_name'];        
              $author = $row['author_book'];         
              $pric = $row['book_price'];        
 
              echo "<tr >";
              echo " <th scope='row' >{$id_book}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$author}</td>";
              echo " <td >{$pric} </td>";
              echo " <td class='text-center'> <a href='read.php?user_id={$id_book}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";
              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id_book}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
              echo " <td  class='text-center'>  <a href='delete.php?delete={$id_book}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
<div class="container text-center mt-5">
      <a href="welcome.php" class="btn btn-warning mt-5"> Back </a>
    <div>
