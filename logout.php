<?php session_start(); ?>
<!DOCTYPE html>

<br><a href="http://web.engr.oregonstate.edu/~smithjoe/databasesfinal/index.php"> Click here to go to login page. </a><br>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require "functions.php";
    
            require "classes.php";
    
            authenticate();
            
            $_SESSION['auth'] = false;
    
            die("You have been logged out.");
            
            
            
            
            $_SESSION = array(); //set session array to empty array

            session_destroy(); //session id assigned to the cookie no longer valid

            //redirecting a user
            //$filePath = explode('/', $_SERVER['PHP_SELF'], -1); //split strings wehre there is / and return array

           // $filePath = implode('/', $filePath); //combines things in array into string and puts slashes behind them
		
           // $redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;

			
            //header("Location: {$redirect}/Logout.html", true); //when the browser gets this header it knows follow link somewhere else

            die();



    
        ?>
    

    </body>
</html>
