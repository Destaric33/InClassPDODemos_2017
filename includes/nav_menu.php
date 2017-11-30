      
          <ul class="navbar-nav ml-auto">
<!--            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>-->
        <?php
         //Convert the static menu to a dynamic menu using an array of labels and pages
        // to allow us to dynamically set the active menu item based on the current page the user is visiting
        
        $pages = array(
                 'Home'=>'/InClassPDODemos/index.php',
                 'Categories'=>'/InclassPDODemos/Categories.php',
                 'Add Category'=>'/InclassPDODemos/addcategory.php',
                 'Articles'=>'/InClassPDODemos/Articles.php',
                 'About'=>'/InClassPDODemos/about.php',
                 'Services'=>'/InClassPDODemos/services.php',
                 'Contact'=>'/InClassPDODemos/contact.php',
                   
        );
            //Find out which page user is viewing
         $this_page = $_SERVER['REQUEST_URI'];
         // =================== test ================//
         //echo $this_page;
         //exit();
         //==================end test=================//
         
         //Loop the array and check if array page matches $this_page
         
         foreach($pages as $k=>$v):
        echo '<li class="nav-item';
              
            if($this_page==$v){
                echo ' active">';
            }else{
                echo '">';
            }
        echo '<a class="nav-link" href="'.$v.'">'. $k.'</a>
            </li>';
    endforeach;
        ?>
          </ul>