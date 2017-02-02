<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheet1.css" />
        
        <title>Abstracted Universes</title>
        
    </head>
    <body>
       
       <script>
           
           
           
           
       </script>
        
    
        <div id="n"> 
            
            <img src="logo.jpg" id="logo">
            
                <form action="index.php" method="post" name="form"   >
                    
                <div id="div2">    
                    
                    <div id="loginText">Login: </div>
                    
                    <input id="userInput" type="text" name="userName" >
                    
                    <div id="passText">Password: </div>
                    
                    <input id="passInput" type="password" name="password"  >
                    
                        
                        
                    
                    <input id="submitButton" type="submit" value="Submit" > 
                    
                </div>
                    
                </form>
            
                <button id="registerButton" onclick= "window.location.href='register.php'">Register</button>
            
        </div>
        
        <!--
        <div id="indexLanguageChoose">
            
            <a href="index.php"> English </a> :
            
            <a href="indexES.php"> Espanol </a>
            
        </div>
        -->
        
  
       
       
        <?php

            

            
            require "functions.php";
            require "classes.php";
           
            
            logInUser($mysqli);
   
            authenticate();

        ?>
        
    
        <br><br><br><br>
    </body>
</html>
