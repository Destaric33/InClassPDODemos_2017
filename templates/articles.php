<!-- Page Content -->
    <div class="container">
        <h1 class="mt-4 mb-3">Articles</h1>
        
        <!-- mwilliams:  breadcrumb navigation -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">About</li>            
        </ol>
        <!-- end breadcrumb -->

<?php
      //1. Get the configuration file that holds the connection info
          require './includes/config.php';
          
          //2.connect to the database
          require MYSQL; 
          //var_dump ($dbc);
          
          //3. Build our query to retrieve all categories
          //$q = "SELECT id, title, description FROM pages";
          //3 Get the number of records in categories table
          $sql = 'SELECT COUNT(*) FROM pages';
          $stmt = $dbc->query($sql); // Execute the query
          
           //4. Display total number of categories
          $cnt = $stmt->fetchColumn(); // get one column result
          
           echo "<h2>Total Categories: $cnt</h2>";
          
          //5. Build the SQL query to retrive all articles
             $q = "SELECT id, title, description FROM pages;";
             
            //6. Execute the query
          $stmt = $dbc->query($q);
          
          //7.  Fetch all the records from the statement above
          $article_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
          //8. Loop and display the articles pages in html table
          echo "<table class='table table-striped table-bordered'>
              <thead class='thead-dark'>
                      <tr>
                      
                      <th>Title</th>
                      <th>Description</th>
                      </tr>
                      </thead>
                      </tbody>";
          
          foreach($article_list as $row){
               echo "<tr>
                     
                     <td><a href='article.php?id={$row['id']}'>{$row['title']}</a></td>
                     <td>{$row['description']}</td>
              </tr>";
          }
          
          //hyperlink will look like this
          // <a href='article.php?id={$row['id']}'>{$row['title']}</a> > quick guide to common attacks.
?>


</div>