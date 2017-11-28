
        <?php
        /*
         * 2 ways to bring external scripts into existing:
         * 1-INCLUDE
         * 2- REQUIRE
         * 
         * Note: There is also an INCLUDE_ONCE and REQUIRE_ONCE
         * 
         * Differences Between each are:
         * 
         * Failuire to include a file results in a warning and the script continues..
         * 
         * Failure to require a file results is a fatal error and the script is halted.
         * 
         * Typically INCLUDE files like HTML header, footer, sidebar, etc
         * 
         * Typically REQUIRE files that are critical to the site's functionality like 
         * database connections, Configuration files, etc
         */
        
        // Retrieve the database info (outside of root fodler)
        $root = dirname($_SERVER['DOCUMENT_ROOT']).'/dbconn';
         //C:/xampp/dbconn
        
        // Create a constant to represent the final DB connection file location
        define('MYSQL',$root.'/2017_pdo_connect.php');
         //giving the final path
         //C:/xampp/dbconn/2017_mysqli_connect.php
        //var_dump(MYSQL);
        
       