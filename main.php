<?php session_start(); ?>
<!DOCTYPE html>


<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheetmainphp.css" />
        <script src="js/libs/jquery/jquery.js"></script>
       
        <title></title>
        
    </head>
    
    <body>
        
        <?php


            require "functions.php";
    
            require "classes.php";
    
            authenticate();
    
            
                 
            if (mysqli_connect_errno()) 
                
                {
                 
                echo "Failed to connect to MYSQL: " . mysqli_connect_error() . "<br>";                
                
                }
                
 
    
         
         
            $mainMenu1 = new mainMenu();
    
            $mainMenu1->displayEN_NoTopButtons();
    
                
    
    
    
     
        ?>
        
       
        <div id="welcomeText"> 
            
            test version
        </div>

      
       
    </body>
</html>
