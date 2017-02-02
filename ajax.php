<?php 



require "classes.php";
require "functions.php";
//$con = mysqli_connect("oniddb.cws.oregonstate.edu", "smithjoe-db", "quPNATmPBmdnbMQf", "smithjoe-db");


header("Content-type: application/json");

if ($_POST['operation'] == "androidTest")
{
    
    $field1 = $_POST['field1'];
    
        
            $array = array(
            "response" => "response1"
            );
    
    echo json_encode($array);   
    
    exit();
    
}

if ($_POST['operation'] == "logIn")
{
    
if (isset($_POST[userName]) && isset($_POST[password]))
        
    {
        
        if (!($stmt = $mysqli->prepare("SELECT userName, password FROM Users WHERE userName=?"))) 
        {
            echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
        if (!$stmt->bind_param("s", $_POST[userName])) 
        {
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
        }
        
        $stmt -> execute();
        
        if (!$stmt -> bind_result($userNameResult, $passwordResult))
        {
            echo "Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error;
        }

    
        while ($stmt->fetch()) 
        {
        
        
        
            //$row = mysqli_fetch_row($result);
            
            $salt1 = "dfds%^&";
            
            $salt2 = "pfd34#@";
            
            $pw_temp = $_POST[password];
            
            $token = sha1("$salt1$pw_temp$salt2");

 
         
            
            $userName = $_POST[userName];
            
            $password = $token;
         
            
            
            
            
            if ($userName == $userNameResult)
            {                
                              
                if ($password == $passwordResult)                
                {
                                        
                    //$_SESSION['auth'] = true;
                    
                   // $_SESSION['userName'] = $_POST[userName];
                    
                    $array = array(
                    "authenticated" => "true"
                     );
    
                    echo json_encode($array);   
    
                     exit();
                
                  
                }
                                        
                else 
                {
                
                    $array = array(
                    "authenticated" => "false"
                     );
    
                    echo json_encode($array);   
    
                    exit();
                
                }
                
                    
                    
                
            }
                
        
          
            else if ($userNameResult == NULL)
            {
               
                //die("Account does not exist.");
                
                echo "tag1";
                
                $array = array(
                    "authenticated" => "false"
                     );
    
                    echo json_encode($array);   
    
                    exit();
               
            }
        
            else 
            {
                
                echo "tag2";
            
                //die ("Username/password combination is invalid.<br>");   
                
                $array = array(
                    "authenticated" => "false"
                     );
    
                    echo json_encode($array);   
    
                    exit();
            
            }
        
        }
        
                $array = array(
                    "authenticated" => "false"
                     );
    
                    echo json_encode($array);   
    
                    exit();
                    
        

    }    
                
    
    
}

if ($_POST['operation'] == "deletePendingOrder")
    {
    
        $P_Id = $_POST['P_Id'];
        

        $sql = "DELETE FROM OrderbookBitcoin WHERE P_Id='$P_Id'";
        
        mysqli_query($con, $sql);
        
            $array = array(
            "currentPrice" => "$currentPrice"
            );
    
    echo json_encode($array);
        
    }
    
else if($_POST['operation'] == "updateSite")
    {
    
    header("Content-type: application/json");

    $sql = "SELECT * FROM SystemVars ORDER BY timeStamp DESC";
    
    $result = mysqli_query($con, $sql);
    
    $row = mysqli_fetch_array($result);
    
    $currentPrice = $row['bitcoinCurrentPrice'];
    
    $array1 = array(
            "currentPrice" => "$currentPrice"
            );
    
    echo json_encode($array1);
   
    
    
    
    }
    
else if($_POST['operation'] == "updateOrderbook")
{
    
    header("Content-type: application/json");
    
            if (!($stmt = $mysqli->prepare("SELECT P_Id, userName, amount, price, bid, ask FROM OrderbookBitcoin ORDER BY price DESC"))) 
            {
                echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        
      
            
            //if (!$stmt->bind_param("s", $_POST[userName])) 
            //{
            //    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            //}
             
            
        
            $stmt -> execute();
        
            if (!$stmt -> bind_result($P_IdResult, $usernameResult, $amountResult,  $priceResult, $bidResult, $askResult ))
            {
                echo "Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }

    
             
            //$array1[];
            $array1 = array();

            while ($stmt->fetch()) 
            {    
                
                $array2 = array();
                
                array_push($array2, $usernameResult, $amountResult, $priceResult, $bidResult, $askResult);
                
                array_push($array1, $array2);
               
    
    
                
            }
            
            echo json_encode($array1);
                 
    
}

else if ($_POST['operation'] == "updatePendingOrders")
{
    
    header("Content-type: application/json");
    
    
            if (!($stmt = $mysqli->prepare("SELECT SELECT P_Id, userName, amount, price, bid, ask FROM OrderbookBitcoin WHERE userName = ? ORDER BY price DESC"))) 
            {
                echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        
        
            
            if (!$stmt->bind_param("s", $_SESSION[userName])) 
            {
                echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }
             
            
        
        $stmt -> execute();
        
            if (!$stmt -> bind_result($P_IdResult, $usernameResult, $amountResult,  $priceResult, $bidResult, $askResult ))
            {
                echo "Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }

    
             
            //$array1[];
            $array1 = array();

            while ($stmt->fetch()) 
            {    
                
                $array2 = array();
                
                array_push($array2, $usernameResult, $amountResult, $priceResult, $bidResult, $askResult);
                
                array_push($array1, $array2);
               
    
    
                
            }
            
            echo json_encode($array1);
                 
        
}    

//$_POST['operation'] = "buyForm";
//$_POST['amount'] = 444;
//$_POST['price'] = 666;

else if ($_POST['operation']=="buyForm")
{
    $amount = $_POST['amount'];
    
    $price = $_POST['price'];
    
    $user1 = new User($con);
    
    $P_Id = $user1->bid($con, $amount, $price, $_SESSION['userName']);
    
    $success = "true";
    
    if ($P_Id == "notEnoughBalance")
    {
        $success = "notEnoughBalance";
    }
    
    
    $array1 = array(
    'success' => "$success", //can be " " to parse a php variable
    'amount' => "$amount",
    'price' => "$price",
    'P_Id' => "$P_Id"
    );
    
    echo json_encode($array1);
    
    
            
      
}




if ($_POST['operation']=="sellForm")
{

    $amount = $_POST['amount'];
    
    $price = $_POST['price'];
    
    $user1 = new User($con);
            
    $P_Id = $user1->ask($con, $amount, $price, $_SESSION['userName']);

    $success = "true";
    
    if ($P_Id == "notEnoughBalance")
    {
        $success = "notEnoughBalance";
    }

    $array1 = array(
    'success' => "$success", //can be " " to parse a php variable
    'amount' => "$amount",
    'price' => "$price",
    'P_Id' => "$P_Id" 
        
    );  

    echo json_encode($array1);
  
}

else if ($_POST['operation']=="withdrawBitcoinForm")
{
     
    $amount = $_POST['amount'];
    $addresss = $_POST['address'];
        
                
    //the automated withdrawal if the amount is less than 10
    if ($amount <= 10)
    {
                    
                   
        $sql = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";
                    
        $result = mysqli_query($con,$sql);
                    
        $row = mysqli_fetch_row($result);
                    
            if (($amount >= 0) && ($amount <= $row[0]))
            {
                        
                $newBalance = $row[0] - $amount;
                        
                echo "row: " . $row[0];
                        
                echo "new bal: " . $newBalance;
                        
                $sql = "UPDATE Users SET bitcoinBalance='$newBalance' WHERE userName='$_SESSION[userName]'";
                        
                mysqli_query($con, $sql);
                        
                rcp_withdraw($amount, $bitcoinWithdrawAddress);
                        
                        
            }
    }
                    
    else if ($amount > 10)
    {
                    
        $now  = new DateTime();
                    
        $sql = "INSERT INTO WithdrawsBitcoin(cleared, userName, withdrawAmount, time) VALUES('false', '$_SESSION[userName]', '$amount', '$now->getTimestamp' )";
                    
        mysqli_query($con, $sql);
                        
        if (mysqli_connect_errno())
        {
                        
                            echo mysqli_connect_error();
        }
    }
    
    $array1 = array(
    'success' => "$success", //can be " " to parse a php variable
    'amount' => "$amount",
    'price' => "$price",
    'P_Id' => "$P_Id" 
        
    );  

    echo json_encode($array1);
  
            
}

else if ($_POST['operation']=="withdrawBitcoinFormCancelOrder")
{
    
    $id = $_POST['id'];
    
    remove_withdraw_WithdrawsBitcoin($con, $id);
}

else if ($_POST['operation']=="depositDollarForm")
{
    
    $depositAmount = $_POST['amount'];
    
    add_deposit_DepositsDollar($con, $depositAmount);
    
    
}

else if ($_POST['operation']=="dollarDepositFormCancelOrder")
{
    
    $P_ID = $_POST['id'];
    
    remove_deposit_DepositsDollar($con, $P_ID);
    
}

else if ($_POST['operation']=="withdrawDollarForm")
{
    
    $withdrawAmount = $_POST['amount'];
    
    add_withdraw_WithdrawsDollar($con, $withdrawAmount);
    
    $Array = array(
'sucess' => 'true' //can be " " to parse a php variable
);
    
header("Content-type: application/json"); //return the content as JSON
echo json_encode($Array);
    
    
}

else if ($_POST['operation']=="withdrawDollarFormCancelOrder")
{
    
    $P_ID = $_POST['id'];
    
    
    
    remove_withdraw_WithdrawsDollar($con, $P_ID);
    
}
