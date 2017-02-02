<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="stylesheetmainphp.css" />
    </head>
    <body>

        
    
        <br>
        
        <form action="register.php" method="post">
            
            <div id="registerTextDiv">
            
            <img src="logo.jpg" id="registerLogo">
            

            
            <div class="registerFormText" > User Name: </div> 
            
            <br>
            
            
            
            <div class="registerFormText" > Password: </div> 
            
            <br>
            
           
            
            <div class="registerFormText" > Email: </div> 
            
            <br>
            
            
            <div class="registerFormText" > First Name: </div> 
            
            <br>
            
            
            <div class="registerFormText" > Last Name: </div> 
                              
            <br>
            
            
            <div class="registerFormText" > House Number: </div> 
            
            <br>
            
            
            <div class="registerFormText" > Street Name: </div> 
            
            <br>
            
            
            <div class="registerFormText" > City: </div> 
            
            <br>
            
            
            <div class="registerFormText" > State: </div> 
            
            <br>
            
            
            <div class="registerFormText" > Postal Number: </div> 
            
            <br>
            
            
            <div class="registerFormText" > Country: </div>
            
            <br>
            
            
            </div>
            
            <div id="fieldDiv">
            
                
            <input type="text" class="registerForm" name="userName">
            
            <br>
            <br>
            
            <input type="text" class="registerForm" name="password">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="email">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="firstName">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="lastName">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="houseNumber">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="streetName">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="city">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="state">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="postalNumber">
            
            <br>
            <br>
                
            <input type="text" class="registerForm" name="country">
            
                
            </div>
            
            <br><br>
            
            <input type="submit" value="register" id="registerSubmit">
             
        </form>
        
    <?php

    require "classes.php";
    require "functions.php";
  
  
    create_table_systemVars($con);
    
    //drop_table_systemVars($con);
    
    create_table_users($con);
    
    //drop_table_users($con);
    
    create_table_OrderbookBitcoin($con);
    
    //drop_table_OrderbookBitcoin($con);
    
    create_table_transactionsBitcoin($con);
    
    //drop_table_transactionsBitcoin($con);

    create_table_DepositsBitcoin($con);
    
    //drop_table_DepositsBitcoin($con);
    
    create_table_DepositsDollar($con);
    
    //drop_table_DepositsDollar($con);

    create_table_WithdrawsBitcoin($con);
    
    //drop_table_WithdrawsBitcoin($con);
    
    create_table_WithdrawsDollar($con);

    //drop_table_WithdrawsDollar($con);
    
    create_table_PendingValidations($con);
    
    //drop_table_PendingValidations($con);
    
    create_table_ApprovedValidations($con);
    
    //drop_table_ApprovedValidations($con);
    
     create_table_BitcoinForum($con);
     
     //drop_table_BitcoinForum($con);
    
    //display_user_list(connect_db());
 
   
   
   


        
    
    
    add_user_Users($con);
                   
    ?>
        <a href="http://web.engr.oregonstate.edu/~smithjoe/databasesfinal/index.php"> Click here to go to login page. </a>
    </body>
</html>
