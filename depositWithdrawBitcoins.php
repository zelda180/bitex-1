<?php session_start(); ?>
<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require "functions.php";
                           
        authenticate();

        add_deposit($con,(.0001),"testaddress88","testtranshash66");
        
        
    
        //create_table_deposits($con);
    
        //add_deposit($con ,3, "addressfhdg34gdh", "fhdh3737");
    
        //display_deposits_table($con);
        
        //blockchain_deposit_to_address("1Q81DBGKiv5Upky3Z6wB5q3fu7inxdZsbw", "100000");
        
        
        
        //display_user_list($con);
        
//old code
/*        
      
//$sql = "INSERT INTO Users (bitcoinBalance) VALUES (10) WHERE userName='user1'";  
//$sql = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";  
$sql = "SELECT * FROM Users WHERE userName='$_SESSION[userName]'";
//echo "userName is: " . $_SESSION[userName];        
$result = mysqli_query($con,$sql);

if (!result)
{
    die ("Unable to access the server.");
}

elseif (mysqli_num_rows($result))
{
    
    
    
    $row = mysqli_fetch_row($result);
    
    echo "Your current bitcoin balance is: " . $row[6];
    
}

*/


        


        
 
        ?>
        
        Deposit Bitcoin<br>

        Deposit to the following address: 
        <?php
        echo_user_public_bitcoin_address($con);
        ?>
        
        <br><br>
       

        
        Withdraw Bitcoin
        <form action="depositWithdrawBitcoins.php" method="post">
        <input type="text" id="" name="bitcoinWithdrawAmount"> 
        <input type="submit" value="Deposit">
        </form>
        <br><br>
        
        Deposit Fiat
        <br><br>
        
        Withdraw Fiat
        
        <br><br>
        
        <?php
        display_deposits_table($con);
        ?>
    </body>
</html>
