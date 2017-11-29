<!-- Page Content -->
    <div class="container">
        <h1 class="mt-4 mb-3">Article</h1>
        
        
        <?php
        //var_dump($_GET);
        //Retrieve the id parameter from the URL querystring
        if ( isset($_GET['id']) && is_numeric($_GET['id'])  ){
        $id= $_GET['id'];
        
        //2. Get the database configuration file
         require './includes/config.php';
        
        //3 Connect to the database
        require MYSQL;
        
        //4 build the SQL query
        $stmt = $dbc->prepare("SELECT id, title, content 
                               FROM pages
                               WHERE id=:id");
        
        //Using PDO prepared statement with the following named parameter
        // :id
        
        // Bind the parameter
        $stmt->bindvalue(':id',$id,PDO::PARAM_INT);
        
        //5. Execute the query
        $stmt->execute();
        
        //6. Fetch the records
        $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //var_dump($article);
        }
        //This all will help to protect against hacking.
        // prepare and bind go together. All the time.
        
        //7. Display the article
         foreach($article as $row){
             echo "<ol class='breadcrumb'>
            <li class='breadcrumb-item'><a href='index.php'>Home</a></li>
            <li class='breadcrumb-item'><a href='Articles.php'>Articles</a></li>  
            <li class='breadcrumb-item active'>{$row['title']}</li>
        </ol>";
            
            echo "<h2 class='mt-3 ,b-3'>{$row['title']}</h2>";
            echo "{$row['content']}";
            
         
                
         }
        ?>
        
      
    </div>