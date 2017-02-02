<?php session_start(); 



//session_start();


//$mysqli = new mysqli("127.0.0.1", "root", "", "db1");
$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "smithjoe-db", "quPNATmPBmdnbMQf", "smithjoe-db");
if ($mysqli->connect_errno) 
{
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$con = mysqli_connect("oniddb.cws.oregonstate.edu", "smithjoe-db", "quPNATmPBmdnbMQf", "smithjoe-db");
//	



session_save_path("./var/php_sessions");

//error_reporting(E_ALL);ini_set('display_errors',1);

//   <script src="/js/libs/jquery/jquery-1.10.2.min.js"></script>
//   <script src="/js/libs/json3/json3.js"></script>

//works good
function logInUser($mysqli)
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
        
        
        
            echo "password was: $passwordResult <br>";
            
            echo "username was: $userNameResult <br>";
        
            
            $row = mysqli_fetch_row($result);
            
            $salt1 = "dfds%^&";
            
            $salt2 = "pfd34#@";
            
            $pw_temp = $_POST[password];
            
            $token = sha1("$salt1$pw_temp$salt2");

            
            $userName = $_POST[userName];
            
            
            
            
            if ($userName == $userNameResult)
            {                
                              
                if ($token == $passwordResult)                
                {
                                        
                    $_SESSION['auth'] = true;
                    
                    $_SESSION['userName'] = $_POST[userName];
                
                    echo "<script type='text/javascript'>window.location.replace('main.php');</script>";
                                    
                }
                                        
                else 
                {
                
                    die ("Username/password combination is invalid.<br>");                   
                
                }
                
                    
                    
                
            }
                
        
          
            else if (isset ($_POST[userName]) && $userNameResult == NULL)
            {
               
                die("Account does not exist.");
               
            }
        
            else 
            {
            
                die ("Username/password combination is invalid.<br>");        
            
            }
        
        }
                    
        

    }    
                

    
    
}

//works good
function authenticate()
{
    session_save_path("./var/php_sessions");
    session_start();

    if ($_SESSION['auth'] != true)
    {
        die("Incorrect User/Password combination.");
    }
}

//works good
function connect_db() {
    //$con = mysqli_connect("oniddb.cws.oregonstate.edu", "smithjoe-db", "quPNATmPBmdnbMQf", "smithjoe-db");
    $con = mysqli_connect("127.0.0.1", "root", "", "db1");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error() . "<br>";
        }
    return $con;
}

//works good
function create_table_SystemVars($con)
{

    
        $sql="CREATE TABLE SystemVars(P_Id int NOT NULL AUTO_INCREMENT , timeStamp INT, bitcoinCurrentPrice INT, BitcoinOrderbookEditPermission INT, PRIMARY KEY (P_Id) )";
        
        if (mysqli_query($con,$sql))
        {
            echo "table SystemVars created successfully. <br>";
        }
        
        else 
        {
            //echo "Error creating table systemVars: " . mysqli_error($con) . "<br>";    
        }
         

}

    

//works good
function drop_table_systemVars($con)
{
    $sql="DROP TABLE systemVars";
        if (mysqli_query($con,$sql))
        {
            echo "table systemVars dropped successfully. <br. ";
        }
        else 
        {
            echo "Error dropping table systemVars: " . mysqli_error($con) . "<br>";    
        }    
    
}

function update_bitcoin_currentprice($con,$priceBitcoin, $timeStamp)
{
    
    $sql = "INSERT INTO SystemVars (timeStamp, bitcoinCurrentPrice) VALUES ('$timeStamp', '$priceBitcoin')";
    
    if (mysqli_query($con, $sql))
    {
        
    }
    else
    {
        echo "Error in update_bitcoin_currentprice function: " . mysqli_error($con) . "<br>";
    }
    
}


    
//works good
function create_table_users($con)
{

    
        $sql="CREATE TABLE Users(P_Id int NOT NULL AUTO_INCREMENT , userName CHAR(30) UNIQUE, password CHAR(60), email CHAR(30), firstName CHAR(30), lastName CHAR(30), bitcoinBalance INT, bitcoinPublicAddress CHAR(50), dollarBalance INT, validationStatus CHAR(15), houseNumber INT, streetName CHAR(50), city CHAR(50), state CHAR(50), postalNumber INT, country CHAR(50), PRIMARY KEY (P_Id) )";
        
        if (mysqli_query($con,$sql))
        {
            echo "table Users created successfully. <br>";
        }
        
        else 
        {
            echo "Error creating table Users: " . mysqli_error($con) . "<br>";    
        }
         

}

    

//works good
function drop_table_users($con)
{
    $sql="DROP TABLE Users";
    
        if (mysqli_query($con,$sql))
        {
            echo "table Users dropped successfully. <br. ";
        }
        else 
        {
            echo "Error dropping table table: " . mysqli_error($con) . "<br>";    
        }    
    
}

    
function add_user_Users($con)
{
    
    if (($_POST["userName"]!="" && $_POST["userName"]!=null) && ($_POST["password"]!="" && $_POST["password"]!=null))
    {
        
        $salt1 = "dfds%^&";
                
        $salt2 = "pfd34#@";
                 
        $pw_temp = $_POST['password'];
                 
        $token = sha1("$salt1$pw_temp$salt2");
        
        $email = $_POST['email'];
        
        $firstName = $_POST['firstName'];
        
        $lastName = $_POST['lastName'];
        
        $houseNumber = $_POST['houseNumber'];
        
        $streetName = $_POST['streetName'];
        
        $city = $_POST['city'];
        
        $state = $_POST['state'];
        
        $postalNumber = $_POST['postalNumber'];
        
        $country = $_POST['country'];
        
        $houseNumber = 3;
        $sql="INSERT INTO Users (userName, password, bitcoinBalance, dollarBalance, email, firstName, lastName, houseNumber, streetName, city, state, postalNumber, country) VALUES ('$_POST[userName]', '$token', 99999999, 9999999, '$email', '$firstName', '$lastName', '$houseNumber', '$streetName', '$city', '$state', '$postalNumber', '$country')";
         
        
        
        if (mysqli_query($con,$sql))
        {
        
            echo "Account registered successfully<br>";
             
            //RUN THIS ONLY HERE
             
            insert_blockchain_address_on_Users($con);
                         
        }
             
        else 
        {
            
           echo "Error adding user: " . mysqli_error($con) . "<br>";

            //check for availability of user name                
            $query = "SELECT * FROM Users WHERE userName='$_POST[userName]'";
         
            $result = mysqli_query($con,$query);
         
            if (!$result)
            {
             
                die ("We are experiencing technical difficulties. Try again later. <br>");
             
            }
            
            elseif (mysqli_num_rows($result))
             
            {
                          
            $row = mysqli_fetch_row($result);
        
            if ($row[1] == $_POST['userName'])
            {
             
                echo "Username $_POST[userName] is already taken." . "<br>";
             
            }
                  
        }
         
    }
         
} 
             

    
}

    
    

//works good
function display_user_list($con)
{
        echo "Current user list is: <br> ";
        $result = mysqli_query($con, "SELECT * FROM Users");
        while ($row = mysqli_fetch_array($result))
        {
            echo $row['P_Id'] . " " . $row['userName'] . " " . $row['password'] . " " . $row['bitcoinBalance'] . " " . $row['bitcoinPublicAddress']. "<br>";
            echo "<br>";
        }    
}


function echo_user_public_bitcoin_address($con)
{

    $sql = "Select bitcoinPublicAddress FROM Users WHERE userName='$_SESSION[userName]'";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_row($result);

    $address = $row[0]; //its a zero here because youre only selecting one 

    echo $address;






}


//START BITCOIN

//works good
//if it doesnt work its likely with the mysql configuration on host
function display_bitcoin_balance($con){
    
    $sql = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";
            
    $result = mysqli_query($con,$sql);
    
    $row = mysqli_fetch_array($result);
    
    echo $row[0];
}

function return_bitcoin_balance($con){
    
    $sql = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";
            
    $result = mysqli_query($con,$sql);
    
    $row = mysqli_fetch_array($result);
    
    return $row[0];
}

//working good
function deposit_bitcoin($con, $amount) {
    
    $new_balance = return_bitcoin_balance($con) + $amount;
    
    $sql = "UPDATE Users SET bitcoinBalance='$new_balance' WHERE userName='$_SESSION[userName]'";
    
    mysqli_query($con, $sql);
    //
    
}

//works good
function withdraw_bitcoin($con,$amount){
    
    $newBalance = return_bitcoin_balance($con) - $amount;
    
    $sql = "UPDATE Users SET bitcoinBalance='$newBalance' WHERE userName='$_SESSION[userName]'";
    
    mysqli_query($con,$sql);
    
}



function bitcoin_to_satoshi ($bitcoin)

    {
    
    $satoshi = $bitcoin * 100000000;
    
    return $satoshi;
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
//works good
function create_table_DepositsBitcoin($con){
    
        $sql="CREATE TABLE DepositsBitcoin(P_Id int NOT NULL AUTO_INCREMENT, cleared CHAR(5), userName CHAR(30), userIdNumber INT, depositAmount INT, time INT, fromAddress CHAR(40), transHash CHAR(60), balanceAtTimeOfTransaction INT, PRIMARY KEY(P_Id))";
        
        if (mysqli_query($con,$sql))
        {
            echo "table DepositsBitcoin created successfully" . "<br>";
        }
        
        else 
        {
           // echo "Error creating table DepositsBitcoin: " . mysqli_error($con) . "<br>";    
        }

    
    
}

//works good
function drop_table_DepositsBitcoin($con){
    $sql="DROP TABLE DepositsBitcoin";
        if (mysqli_query($con,$sql))
        {
            echo "table Deposits dropped successfully" . "<br>";
        }
        else 
        {
            echo "Error dropping table: " . mysqli_error($con) . "<br>";    
        }    
    

    
}

function display_deposits_table($con)
    {
    $sql = "SELECT * FROM DepositsBitcoin WHERE userName='$_SESSION[userName]';";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result))
        {
            echo $row['P_Id'] . " " . $row['userName'] . " " . $row['userIdNumber'] . " " . $row['depositAmount']  . " " . $row['time'] . " " . $row['fromAddress'] . " " . $row['transHash'] . " " . $row['balanceAtTimeOfTransaction'] .  "<br>";
            echo "<br>";
        }
    }
 
//works good
function add_deposit_DepositsBitcoin($con,$depositAmount, $address, $transaction_hash)
{
    
    $sql = "INSERT INTO DepositsBitcoin(depositAmount, fromAddress, transHash, userName) VALUES ('$depositAmount', '$address', '$transaction_hash', '$_SESSION[userName]');";
    if (mysqli_query($con,$sql))
        {
            echo "Deposit inserted successfully" . "<br>";
        }
        else 
        {
            echo "Deposit not inserted successfully: " . mysqli_error($con) . "<br>";    
        }    
        
    
    //update Users table bitcoinBalance
    $sql2 = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";
    
    $result = mysqli_query($con,$sql2);
        
        
    if (!$result) 
    {
        echo "Error selecting bitcoin balance from Users: "  . mysqli_error($con) . "<br>";
    }   
    
    $row2 = mysqli_fetch_row($result);
    
    $balance = $row2[0] + $depositAmount;

    $sql3 = "UPDATE Users SET bitcoinBalance='$balance' WHERE userName='$_SESSION[userName]';";
    
    if(mysqli_query($con, $sql3))
    {
        echo "bitcoin balance updated successfully <br>";
    }
    
    else
    {
        echo "bitcoin balance not updated successfully: " . mysqli_error($con);
        
    }
    
}

//BEGIN withdrawsBitcoin


function create_table_WithdrawsBitcoin($con){
    
        $sql="CREATE TABLE WithdrawsBitcoin(P_ID int NOT NULL AUTO_INCREMENT, cleared CHAR(5), userName CHAR(30), userIdNumber INT, withdrawAmount INT, time INT, fromAddress CHAR(40), transHash CHAR(60), balanceAtTimeOfTransaction INT, PRIMARY KEY(P_Id))";
        
        if (mysqli_query($con,$sql))
        {
            echo "table WithdrawsBitcoin created successfully" . "<br>";
        }
        
        else 
        {
           // echo "Error creating table WithdrawsBitcoin: " . mysqli_error($con) . "<br>";    
        }

    
    
}

//works good
function drop_table_WithdrawsBitcoin($con)
{
    
    $sql="DROP TABLE WithdrawsBitcoin";
        if (mysqli_query($con,$sql))
        {
            echo "table WithdrawsBitcoin dropped successfully" . "<br>";
        }
        else 
        {
            echo "Error dropping table: " . mysqli_error($con) . "<br>";    
        }    
    

    
}

function display_WithdrawsBitcoin_table($con)
    {
    $sql = "SELECT * FROM WithdrawsBitcoin WHERE userName='$_SESSION[userName]';";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result))
        {
            echo $row['P_Id'] . " " . $row['userName'] . " " . $row['userIdNumber'] . " " . $row['depositAmount']  . " " . $row['time'] . " " . $row['fromAddress'] . " " . $row['transHash'] . " " . $row['balanceAtTimeOfTransaction'] .  "<br>";
            echo "<br>";
        }
    }
 
//works good
function add_withdraw_WithdrawsBitcoin($con,$withdrawAmount, $address, $transaction_hash)
{
    
    $sql = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";
    
    $result = mysqli_query($con,$sql);
        
        
    if (!$result) 
    {
        echo "Error selecting bitcoin balance from Users: "  . mysqli_error($con) . "<br>";
    }   
    
    $row = mysqli_fetch_row($result);
    
    if ($withdrawAmount <= $row[0] && $row[0] >= 0 && $withdrawAmount >= 0)
    {

    
    
        $sql = "INSERT INTO WithdrawsBitcoin(withdrawAmount, fromAddress, transHash, userName) VALUES ('$withdrawAmount', '$address', '$transaction_hash', '$_SESSION[userName]');";
        if (mysqli_query($con,$sql))
        {
            echo "WIthdraw inserted successfully" . "<br>";
        }
        else 
        {
            echo "Withdraw not inserted successfully: " . mysqli_error($con) . "<br>";    
        }    
        
    
        //update Users table bitcoinBalance
        $sql2 = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";
    
        $result = mysqli_query($con,$sql2);
        
        
        if (!$result) 
        {
            echo "Error selecting bitcoin balance from Users: "  . mysqli_error($con) . "<br>";
        }   
    
        $row2 = mysqli_fetch_row($result);
    
        $balance = $row2[0] - $withdrawAmount;

        $sql3 = "UPDATE Users SET bitcoinBalance='$balance' WHERE userName='$_SESSION[userName]';";
    
        if(mysqli_query($con, $sql3))
        {
            echo "bitcoin balance updated successfully <br>";
        }
    
        else
        {
            echo "bitcoin balance not updated successfully: " . mysqli_error($con);
        
        }
    
    }
}


function remove_withdraw_WithdrawsBitcoin($con, $P_ID)
{
    
    $sql = "DELETE FROM WithdrawsBitcoin WHERE P_ID='$P_ID'";
    
    mysqli_query($con,$sql);
        
    
}



//END withdrawBitcoin

//begin deposits fiat



//works good
function create_table_DepositsDollar($con){
    
        $sql="CREATE TABLE DepositsDollar(P_ID int NOT NULL AUTO_INCREMENT, cleared CHAR(5), userName CHAR(30), userIdNumber INT, depositAmount INT, time INT, fromAddress CHAR(40), transHash CHAR(60), balanceAtTimeOfTransaction INT, PRIMARY KEY(P_Id))";
        
        if (mysqli_query($con,$sql))
        {
            echo "table DepositsDollar created successfully" . "<br>";
        }
        
        else 
        {
            //echo "Error creating table DepositsDollar: " . mysqli_error($con) . "<br>";    
        }

    
    
}

//works good
function drop_table_DepositsDollar($con){
    $sql="DROP TABLE DepositsDollar";
        if (mysqli_query($con,$sql))
        {
            echo "table DepositsDollar dropped successfully" . "<br>";
        }
        else 
        {
            echo "Error dropping table: " . mysqli_error($con) . "<br>";    
        }    
    

    
}

function display_depositsDollar_table($con)
    {
    $sql = "SELECT * FROM DepositsDollar WHERE userName='$_SESSION[userName]';";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result))
        {
            echo $row['P_Id'] . $row['userName'] . " " . $row['userIdNumber'] . " " . $row['depositAmount']  . " " . $row['time'] . " " . $row['fromAddress'] . " " . $row['transHash'] . " " . $row['balanceAtTimeOfTransaction'] .  "<br>";
            echo "<br>";
        }
    }
 
//works good
function add_deposit_DepositsDollar($con,$depositAmount)
{
    
    $sql = "INSERT INTO DepositsDollar(depositAmount, fromAddress, transHash, userName) VALUES ('$depositAmount', '$address', '$transaction_hash', '$_SESSION[userName]');";
    if (mysqli_query($con,$sql))
        {
            echo "Deposit into DepositsDollar inserted successfully" . "<br>";
        }
        else 
        {
            echo "Deposit into DepositsDollar not inserted successfully: " . mysqli_error($con) . "<br>";    
        }    
        
}
 
function update_Users_Table_dollarBalance($depositAmount)
{
    $sql2 = "SELECT dollarBalance FROM Users WHERE userName='$_SESSION[userName]'";
    
    $result = mysqli_query($con,$sql2);
        
        
    if (!$result) 
    {
        echo "Error selecting dollarBalance from Users: "  . mysqli_error($con) . "<br>";
    }   
    
    $row2 = mysqli_fetch_row($result);
    
    $balance = $row2[0] + $depositAmount;

    $sql3 = "UPDATE Users SET dollarBalance='$balance' WHERE userName='$_SESSION[userName]';";
    
    if(mysqli_query($con, $sql3))
    {
        echo "bitcoin balance updated successfully <br>";
    }
    
    else
    {
        echo "bitcoin balance not updated successfully: " . mysqli_error($con);
        
    }
    
}

function remove_deposit_DepositsDollar($con, $P_ID)
{
    
    $sql = "DELETE FROM DepositsDollar WHERE P_ID='$P_ID'";
    
    mysqli_query($con,$sql);
        
    
}

//end deposits fiat
       

//BEGIN WITHDRAW FIAT
//pending withdrawals


//works good
function create_table_WithdrawsDollar($con){
    
        $sql="CREATE TABLE WithdrawsDollar(P_ID int NOT NULL AUTO_INCREMENT, cleared CHAR(5), userName CHAR(30), userIdNumber INT, withdrawAmount INT, time INT, fromAddress CHAR(40), transHash CHAR(60), balanceAtTimeOfTransaction INT, PRIMARY KEY(P_Id))";
        
        if (mysqli_query($con,$sql))
        {
            echo "table WithdrawsDollar created successfully" . "<br>";
        }
        
        else 
        {
            //echo "Error creating table: " . mysqli_error($con) . "<br>";    
        }

    
    
}

//works good
function drop_table_WithdrawsDollar($con)
{
    $sql="DROP TABLE WithdrawsDollar";
        if (mysqli_query($con,$sql))
        {
            echo "table WithdrawsDollar dropped successfully" . "<br>";
        }
        else 
        {
            echo "Error dropping table: " . mysqli_error($con) . "<br>";    
        }    
    

    
}

function display_WithdrawsDollar_table($con)
    {
    $sql = "SELECT * FROM WithdrawDollar WHERE userName='$_SESSION[userName]';";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result))
        {
            echo $row['P_id'] . $row['userName'] . " " . $row['userIdNumber'] . " " . $row['depositAmount']  . " " . $row['time'] . " " . $row['fromAddress'] . " " . $row['transHash'] . " " . $row['balanceAtTimeOfTransaction'] .  "<br>";
            echo "<br>";
        }
    }
 
//works good
function add_withdraw_WithdrawsDollar($con,$withdrawAmount)
{
    
    $sql2 = "SELECT dollarBalance FROM Users WHERE userName='$_SESSION[userName]'";
    
    $result = mysqli_query($con,$sql2);

            
    if (!$result) 
    {
        //echo "Error selecting dollarBalance from Users: "  . mysqli_error($con) . "<br>";
    }   
    
    $row = mysqli_fetch_row($result);
    
    
    
    if ($row[0]>=$withdrawAmount && $row[0] >= 0 && $withdrawAmount >=0)
    {
    
        $sql = "INSERT INTO WithdrawsDollar(withdrawAmount,  userName) VALUES ('$withdrawAmount', '$_SESSION[userName]');";
        if (mysqli_query($con,$sql))
            {
                //echo "Withdraw into WithdrawsDollar inserted successfully" . "<br>";
            }
            else 
            {
                //echo "Withdraw into WithdrawsDollar not inserted successfully: " . mysqli_error($con) . "<br>";    
            }    
        
    }
    
    else
    {
        //echo "Insufficient funds.<br>";
    }
}

function remove_withdraw_WithdrawsDollar($con, $P_ID)
{
    
    $sql = "DELETE FROM WithdrawsDollar WHERE P_ID='$P_ID'";
    
    mysqli_query($con,$sql);
        
    
}

function update_Users_table_dollarBalance2()
{
        $sql2 = "SELECT dollarBalance FROM Users WHERE userName='$_SESSION[userName]'";
    
        $result = mysqli_query($con,$sql2);
        
        
        if (!$result) 
        {
            echo "Error selecting dollarBalance from Users: "  . mysqli_error($con) . "<br>";
        }   
    
        $row2 = mysqli_fetch_row($result);
    
        $balance = $row2[0] - $withdrawAmount;

        $sql3 = "UPDATE Users SET dollarBalance='$balance' WHERE userName='$_SESSION[userName]';";
    
        if(mysqli_query($con, $sql3))
        {
            echo "bitcoin balance updated successfully <br>";
        }
    
        else
        {
            echo "bitcoin balance not updated successfully: " . mysqli_error($con);
        
        }
    
    
    

    
}




//END WITHDRAW FIAT


//In construction
function create_table_OrderbookBitcoin($con)
{

    
        $sql="CREATE TABLE OrderbookBitcoin(P_Id int NOT NULL AUTO_INCREMENT, userName CHAR(30), amount INT, price INT, bid CHAR(4), ask CHAR(4), PRIMARY KEY(P_Id))";
        
        
       
        if (mysqli_query($con,$sql))
        {
            echo "table orderbook created successfully";
        }
        else 
        {
            //echo "Error creating table: " . mysqli_error($con) . "<br>";    
        }
         

}


//In Construction
function drop_table_OrderbookBitcoin($con)
{
    $sql="DROP TABLE OrderbookBitcoin";
        if (mysqli_query($con,$sql))
        {
            echo "table Users dropped successfully";
        }
        else 
        {
            echo "Error dropping table table: " . mysqli_error($con) . "<br>";    
        }    
    
}


function OrderbookBitcoin_add($con, $type, $amount, $price)
{
    
    $sql = "INSERT INTO OrderbookBitcoin VALUES(userName, amount, price) VALUES ('$_GLOBAL[userName]', $amount, $price)";
    
    if (mysqli_query($con,$sql))
    {
        
        return;
        
    }
    
    else
    {
     
        echo "OrderbookBitcoin_add() failed <br>";
        
    }
}

function OrderbookBitcoin_remove($id)
{
    
    $sql = "DELETE FROM OrderbookBitcoin WHERE id='$id'";
    
    if (mysqli_query($con,$sql))
    {
        
        
    }
    
    else
    {
        
        echo "OrderbookBitcoin failed <b>";
    }
    
}
    


//In construction
function create_table_TransactionsBitcoin($con)
{

    
        $sql="CREATE TABLE TransactionsBitcoin(P_ID int NOT NULL AUTO_INCREMENT, userNameSeller CHAR(30), userNameBuyer CHAR(30), amount INT, pricePerUnit INT, priceTotalTransaction INT, dateMonth INT, dateDay INT, dateHour INT, dateMinute INT, PRIMARY KEY(P_Id))";
        
        if (mysqli_query($con,$sql))
        {
            echo "table TransactionsBitcoin created successfully";
        }
        else 
        {
            //echo "Error creating table: " . mysqli_error($con) . "<br>";    
        }
         

}

//In Construction
function drop_table_transactionsBitcoin($con)
{
    
    $sql="DROP TABLE TransactionsBitcoin";
        if (mysqli_query($con,$sql))
        {
            echo "table TransactionsBitcoin dropped successfully. <br>";
        }
        else 
        {
            echo "Error dropping table table: " . mysqli_error($con) . "<br>";    
        }    
    
}

//works good
function create_table_PendingValidations($con){
    
        $sql="CREATE TABLE PendingValidations(P_Id int NOT NULL AUTO_INCREMENT, userName CHAR(30), userIdNumber INT, governmentId MEDIUMBLOB, proofOfResidence MEDIUMBLOB,  PRIMARY KEY(P_Id))";
        
        if (mysqli_query($con,$sql))
        {
            echo "table PendingValidations created successfully" . "<br>";
        }
        
        else 
        {
           // echo "Error creating table PendingValidations: " . mysqli_error($con) . "<br>";    
        }

    
    
}

//works good
function drop_table_PendingValidations($con){
    $sql="DROP TABLE PendingValidations";
        if (mysqli_query($con,$sql))
        {
            echo "table PendingValidations dropped successfully" . "<br>";
        }
        else 
        {
            echo "Error dropping table: " . mysqli_error($con) . "<br>";    
        }    
    

    
}

//works good
function create_table_ApprovedValidations($con){
    
        $sql="CREATE TABLE ApprovedValidations(P_Id int NOT NULL AUTO_INCREMENT, userName CHAR(30), userIdNumber INT, governmentId MEDIUMBLOB, proofOfResidence MEDIUMBLOB,  PRIMARY KEY(P_Id))";
        
        if (mysqli_query($con,$sql))
        {
            echo "table ApprovedValidations created successfully" . "<br>";
        }
        
        else 
        {
           // echo "Error creating table ApprovedValidations: " . mysqli_error($con) . "<br>";    
        }

    
    
}

//works good
function drop_table_ApprovedValidations($con){
    $sql="DROP TABLE ApprovedValidations";
        if (mysqli_query($con,$sql))
        {
            echo "table ApprovedValidations dropped successfully" . "<br>";
        }
        else 
        {
            echo "Error dropping table: " . mysqli_error($con) . "<br>";    
        }    
    

    
}

//
function create_table_BitcoinForum($con)
{

    
        $sql="CREATE TABLE BitcoinForum(P_Id int NOT NULL AUTO_INCREMENT , timeStamp INT, userName CHAR(30), message LONGTEXT, PRIMARY KEY (P_Id) )";
        
        if (mysqli_query($con,$sql))
        {
            echo "table BitcoinForum created successfully. <br>";
        }
        
        else 
        {
            //echo "Error creating table BitcoinForum: " . mysqli_error($con) . "<br>";    
        }
         

}

function drop_table_BitcoinForum($con){
    $sql="DROP TABLE BitcoinForum";
        if (mysqli_query($con,$sql))
        {
            echo "table BitcoinForum dropped successfully" . "<br>";
        }
        else 
        {
            echo "Error dropping table: " . mysqli_error($con) . "<br>";    
        }    
    

    
}

////////////////////
//blockchain section
////////////////////

//works good
function blockchain_deposit_to_address($to,$amount){
    
    $main_password = "c5430131c60d92d7ecfeea145b8e87a2";
    
    $from = "15AVGckPNe9YCudu5QKVq5NAhhqUiLJHTJ";
    
    $guid = "6ba20283-6ed6-49f1-97bb-a4a2c5cc4936";
    
    $json_url="http://blockchain.info/merchant/$guid/payment?password=$main_password&second_password=$second_password&to=$to&amount=$amount&from=$from&shared=$shared&fee=$fee";

    $json_data = file_get_contents($json_url);
    
    $json_feed = json_decode($json_data);
            
    $txid = $json_feed->tx_hash;        
    
    $message = $json_feed->message;
    
    

}

//works fine
//overrites
function insert_blockchain_address_on_Users($con)

{
    
    $guid = "6ba20283-6ed6-49f1-97bb-a4a2c5cc4936";

    $main_password = "c5430131c60d92d7ecfeea145b8e87a2";
    
    $label = $_POST["userName"];
    
    $json_url="https://blockchain.info/merchant/$guid/new_address?password=$main_password&label=$label";

    $json_data = file_get_contents($json_url);
    
    $json_feed = json_decode($json_data);
            
    $addressGenerated = $json_feed->address;        
    
    $labelGenerated = $json_feed->label;
    
    //works up to here
    
    $sql = "UPDATE Users SET bitcoinPublicAddress='$addressGenerated' WHERE userName='$_POST[userName]'";
    
    if (mysqli_query($con,$sql))
            
    {
        //echo "Users updated with a new blockchain public address";
    }
    
    else
    {
       // echo "Failed to update Users with new blockchain address: " . mysqli_error($con);
        
    }
    
}
        

///
///
///START rcp section
function rcp_withdraw($amount, $destination)
{
    
    
}

function rcp_return_balance()
{
    
    
}


//END rcp section
    

            
//deposit validator
//have user enter amount they want to put in and send with some unique key
//have a unique file get the http notification and check if it matches in the queue
//if it matches in the queue then add to user account
    




