<?php 

 


//$mysqli = new mysqli("127.0.0.1", "root", "", "db1");
$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "smithjoe-db", "quPNATmPBmdnbMQf", "smithjoe-db");

//error_reporting(E_ALL);ini_set('display_errors',1);

class mainMenu 

    {
    
        public function displayES()
        {
    

            
            echo 
                
                "
                
                <div id=\"topMenu\">
                
                        <div id=\"space1\"></div>
                    
                        <br>
                        
                        <div id=\"topButtons\">
                
                            <button > Comprar </button>
             
                            <button > Vender </button>

                        </div>
                        
                        <br>
                        
                        <div id=\"space2\"></div>
                   
                
                    
                    
                </div>  
            
            
            
     
                <div id=\"sideMenu\">
                
                    <button>Productos</button>
                    
                    <br>
                    
                    <button>Monedas</button>
                    
                    <br>
                    
                    <button type=\"button\" onclick=\"window.location.replace('bitcoin.php');\">Bitcoin</button>
                    <button type=\"button\" onclick=\"window.location.replace('products.php');\">Products</button>
                    <br>
                    
                    <!--
                    
                    <button>Bienes Raices</button>
                    
                    <br>
                
                    <button>Vehiculos</button>
                    
                    <br>
                    
                    <button>Productos De Coleccion</button>
    
                    <br>
                    
                    <button>Productos Para El Hogar</button>
                    
                    <br>
                    
                    <button>Muebles</button>
                    
                    <br>
                    
                    <button>Electrodomesticos</button>
                    
                    <br>
                    
                    <button>Productos Para Bebes</button>
                    
                    <br>
                    
                    <button>Productos Personales</button>
                    
                    <br>
                    
                    <button>Zapatos</button>
                    
                    <br>
                    
                    <button>Ropa</button>
                    
                    <br>
                    
                    <button>Productos de belleza</button>
                    
                    <br>
                    
                    <button>Productos Deportivos</button>
                    
                    <br>
                    
                    <button>Productos Industriales</button>
                    
                    <br>
                    
                    <button>Productos Electronicos</button>
                    
                    <br>
                    
                    <button>Productos Computadores</button>
                    
                    <br>
                    
                    <button>Productos Camaras</button>
                    
                    <br>
                    
                    <button>Celulares</button>
                    
                    <br>
                    
                    <button>Servicios</button>
                    
                    <br>
                    
                    <button>Otros Servicios</button>
                    
                    <br>
                    
                    -->

                </div>
                
                <canvas id=\"graph\" width = \"100\" height = \"100\"> </canvas>
                
                ";
        }    

        public function displayES_NoTopButtons()
        {
    

            
            echo 
                
                "
                
                <div id=\"topMenu\">
                
                        <div id=\"space1\"></div>
                    
                        <br>
                        
                        <div id=\"topButtons\">
                


                        </div>
                        
                        <br>
                        
                        <div id=\"space2\"></div>
                   
                
                    
                    
                </div>  
            
            
            
     
                <div id=\"sideMenu\">
                
                    <button>Productos</button>
                    
                    <br>
                    
                    <button>Monedas</button>
                    
                    <br>
                    
                    <button type=\"button\" onclick=\"window.location.replace('bitcoin.php');\">Bitcoin</button>
                    <button type=\"button\" onclick=\"window.location.replace('products.php');\">Products</button>
                    <br>
                    
                    <!--
                    
                    <button>Bienes Raices</button>
                    
                    <br>
                
                    <button>Vehiculos</button>
                    
                    <br>
                    
                    <button>Productos De Coleccion</button>
    
                    <br>
                    
                    <button>Productos Para El Hogar</button>
                    
                    <br>
                    
                    <button>Muebles</button>
                    
                    <br>
                    
                    <button>Electrodomesticos</button>
                    
                    <br>
                    
                    <button>Productos Para Bebes</button>
                    
                    <br>
                    
                    <button>Productos Personales</button>
                    
                    <br>
                    
                    <button>Zapatos</button>
                    
                    <br>
                    
                    <button>Ropa</button>
                    
                    <br>
                    
                    <button>Productos de belleza</button>
                    
                    <br>
                    
                    <button>Productos Deportivos</button>
                    
                    <br>
                    
                    <button>Productos Industriales</button>
                    
                    <br>
                    
                    <button>Productos Electronicos</button>
                    
                    <br>
                    
                    <button>Productos Computadores</button>
                    
                    <br>
                    
                    <button>Productos Camaras</button>
                    
                    <br>
                    
                    <button>Celulares</button>
                    
                    <br>
                    
                    <button>Servicios</button>
                    
                    <br>
                    
                    <button>Otros Servicios</button>
                    
                    <br>
                    
                    -->

                </div>
                
                <canvas id=\"graph\" width = \"100\" height = \"100\"> </canvas>
                
                ";
        
            
            
            
            
        }
        
        public function displayEN()
        {
    

            
            echo
                
                "
                <img src=\"logo.jpg\" id=\"menuLogo\">
    
<br>
                <div id=\"topMenu\">
                
                        <div id=\"space1\"></div>
                    
                        <br>
                        

                        
                        
                        <a href=\"logout.php\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\" id=\"logoutButtonTop\">Logout</a>
                        
                        <div id=\"topButtons\">
                        
                            <a id=\"currencyBalancesButton\" href=\"currencyBalances.php\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Currency Balances</a>
                            
                            <!--<button id=\"accountSettingsButton\" onclick=\"window.location.replace('accountSettings.php')\"> Account Settings </button>-->
                            <a id=\"accountSettingsButton\" onclick=\"window.location.replace('accountSettings.php')\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Account Settings</a>


                            <!--<button id=\"buyButton\" onclick=\"document.getElementById('buyInterface').style.visibility = 'visible'; document.getElementById('sellInterface').style.visibility = 'collapse';\"> Buy </button>-->
                            <a id=\"buyButton\" onclick=\"document.getElementById('buyInterface').style.visibility = 'visible'; document.getElementById('sellInterface').style.visibility = 'collapse';\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Buy</a>
             
                            <!--<button id=\"sellButton\" onclick=\"document.getElementById('sellInterface').style.visibility = 'visible'; document.getElementById('buyInterface').style.visibility = 'collapse';\"> Sell </button>-->
                            <a id=\"sellButton\" onclick=\"document.getElementById('sellInterface').style.visibility = 'visible'; document.getElementById('buyInterface').style.visibility = 'collapse';\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Sell</a>


                
                            

                        </div>
                        
                            
                        <br>
                        <!--<button type=\"button\" onclick=\"window.location.replace('bitcoin.php');\">Bitcoin</button>-->
                        <a id=\"bitcoinChoice\" onclick=\"window.location.replace('bitcoin.php');\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Bitcoin</a>
                         <a id=\"bitcoinChoice\" onclick=\"window.location.replace('products.php');\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Products</a>
                        <br>

                
                        
                        <div id=\"space2\"></div>
                   
                
                    
                    
                </div>  
            
            
                <!--
     
                <div id=\"sideMenu\">
                
                    <button>Products</button>
                    
                    <br>
                    
                    <button>Currency</button>
                    
                    <br>
                    
                    <button type=\"button\" onclick=\"window.location.replace('bitcoin.php');\">Bitcoin</button>
                    <button type=\"button\" onclick=\"window.location.replace('products.php');\">Bitcoin</button>
                    
                    <br>
                    
                    
                    
                    <button>Real Estate</button>
                    
                    <br>
                
                    <button>Vehicles</button>
                    
                    <br>
                    
                    <button>Collectible Products</button>
    
                    <br>
                    
                    <button>Home Products</button>
                    
                    <br>
                    
                    <button>Furniture</button>
                    
                    <br>
                    
                    <button>Home Electronics</button>
                    
                    <br>
                    
                    <button>Baby Products</button>
                    
                    <br>
                    
                    <button>Personal Products</button>
                    
                    <br>
                    
                    <button>Shoes</button>
                    
                    <br>
                    
                    <button>Clothes</button>
                    
                    <br>
                    
                    <button>Beauty Products</button>
                    
                    <br>
                    
                    <button>Sporting Products</button>
                    
                    <br>
                    
                    <button>Industrial Products</button>
                    
                    <br>
                    
                    <button>Electronic Products</button>
                    
                    <br>
                    
                    <button>Computer Products</button>
                    
                    <br>
                    
                    <button>Camara Products</button>
                    
                    <br>
                    
                    <button>Cell Phones</button>
                    
                    <br>
                    
                    <button>Services</button>
                    
                    <br>
                    
                    <button>Other Services</button>
                    
                    <br>
                    
                    

                </div>
                
                -->
                
                
                
                ";
            
            TransactionSystem::displayBuySellInterfaces();
        
            
            
            
            
        }
        

        public function displayEN_NoTopButtons()
        {
    

            
            echo 
                
                "
                    
                <img src=\"logo.jpg\" id=\"menuLogo\">
    
<br>
                
                <div id=\"topMenu\">
                
                        <div id=\"space1\"></div>
                    
                        <br>
                        
                        <a href=\"logout.php\" id=\"logoutButtonTop\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Logout</a>

                        
                        <div id=\"topButtons\">
                


                            <a id=\"currencyBalancesButton\" href=\"currencyBalances.php\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Currency Balances</a>
                            
                            <!--<button id=\"accountSettingsButton\" onclick=\"window.location.replace('accountSettings.php')\"> Account Settings </button>-->
                            <a id=\"accountSettingsButton\" onclick=\"window.location.replace('accountSettings.php')\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Account Settings</a>



                        </div>
                        
                        <br>
                        
                        <div id=\"space2\"></div>
                   
                
                        
                        <br>
                        <!--<button type=\"button\" onclick=\"window.location.replace('bitcoin.php');\">Bitcoin</button>-->
                        <a id=\"bitcoinChoice\" onclick=\"window.location.replace('bitcoin.php');\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Bitcoin</a>
                        <a id=\"bitcoinChoice\" onclick=\"window.location.replace('products.php');\" title=\"CSS by GenerateCSS.com\" class=\"generatecssdotcom_button_556bef69d12e7\">Products</a>
                        <br>
                    
                </div>  
            
            
            
<!--
     
                <div id=\"sideMenu\">
                
                    <button>Products</button>
                    
                    <br>
                    
                    <button>Currency</button>
                    
                    <br>
                    
                    <button type=\"button\" onclick=\"window.location.replace('bitcoin.php');\">Bitcoin</button>
                    
                    <br>
                    
                    
                    
                    <button>Real Estate</button>
                    
                    <br>
                
                    <button>Vehicles</button>
                    
                    <br>
                    
                    <button>Collectible Products</button>
    
                    <br>
                    
                    <button>Home Products</button>
                    
                    <br>
                    
                    <button>Furniture</button>
                    
                    <br>
                    
                    <button>Home Electronics</button>
                    
                    <br>
                    
                    <button>Baby Products</button>
                    
                    <br>
                    
                    <button>Personal Products</button>
                    
                    <br>
                    
                    <button>Shoes</button>
                    
                    <br>
                    
                    <button>Clothes</button>
                    
                    <br>
                    
                    <button>Beauty Products</button>
                    
                    <br>
                    
                    <button>Sporting Products</button>
                    
                    <br>
                    
                    <button>Industrial Products</button>
                    
                    <br>
                    
                    <button>Electronic Products</button>
                    
                    <br>
                    
                    <button>Computer Products</button>
                    
                    <br>
                    
                    <button>Camara Products</button>
                    
                    <br>
                    
                    <button>Cell Phones</button>
                    
                    <br>
                    
                    <button>Services</button>
                    
                    <br>
                    
                    <button>Other Services</button>
                    
                    <br>
                    
                    

                </div>
                
                -->
                
                                
                
                ";
            

        
            
            
            
            
        }        
        
        
        
    }
    

    
class graph
    {
    
    public function echoCanvas()
        {
        
            echo "<canvas id=\"graph\" width = \"1000\" height = \"500\"> </canvas>";
        
        }
        
    public function getContext()
        {
        
            echo "
            
                <script>
                
                
                var canvas = document.getElementById(\"graph\");
                var ctx = canvas.getContext(\"2d\");
                
                
                </script>

             ";
        
        }
    }
    
    
class User
{
    
    public $bitcoinBalance;
    
    public function __construct($con)
    {
        
        
        
        
        
        $query = "SELECT * FROM Users WHERE userName='$_SESSION[userName]'";
        
        $result = mysqli_query($con,$query);
        
        if (mysqli_num_rows($result))
        
        {
            
            $row = mysqli_fetch_row($result);
            
            $this->bitcoinBalance = $row[6];
            
            $this->dollarBalance = $row[8];
            
            
            
            
        
        }
    }
    
    public function displayCurrencyBalancesInterface($con)
            
    {
        
        echo "
            
        <div id=\"bitcoin\">
            
            <h1>Bitcoin</h1>
            
            <br>
            
            <h3>
            
            Bitcoin balance:

            $this->bitcoinBalance
        
            </h3>
        
            <br>
            
            <br>
            
            <div id=\"currencyBalanceBitcoinPendingTrans\">
            
                <h2>Pending Deposits Or Withdrawals:</h2>
                
                <br>
                
                
                
        ";
        
        //deposits
        $sql = "SELECT * FROM DepositsBitcoin WHERE userName ='$_SESSION[userName]'";
        
        $result = mysqli_query($con, $sql);
        
        echo "<h3>Deposits:</h3>";
        
        for ($x = 0; $x <  6; $x++)
        {
            
            if (mysqli_num_rows($result) == 0) {break;}            
        
            $row = mysqli_fetch_array($result);
            
            echo $row['P_ID'] . " " . $row['amount'] . "<br>"; 
        
        }

        //withdraws
        $sql = "SELECT * FROM WithdrawsBitcoin WHERE userName ='$_SESSION[userName]'";
        
        $result = mysqli_query($con, $sql);
        
        echo "<h3>Withdraws:</h3>";
        
        for ($x = 0; $x <  6; $x++)
        {
            
            if (mysqli_num_rows($result) == 0) {break;}
        
            $row = mysqli_fetch_array($result);
            
            echo $row['P_ID'] . " " . $row['withdrawAmount'] . "<button id=\"$row[P_ID]\" class=\"bitcoinWithdrawCancelButton\">Cancel</button><br>"; 
        
        }
        
        
        
        echo "
            
            
            </div>
            
            
            <br>
            
            <br>
            
            <div id=\"currencyBalancesBitcoinDeposit\">
            
                <h2>Deposit:</h2>
                
                
                <br>
                <br>
            
                Deposit bitcoin to this address: ";  
        
            
        
        echo_user_public_bitcoin_address($con);
         
                
        echo "
            
            </div>
            
            <br>
            
            <br>
            
            <div id=\"currencyBalancesBitcoinWithdraw\">
            
                <h2>Withdraw:</h2> 
                
                <form id=\"bitcoinWithdrawForm\" action=\"ajax.php\" method =\"post\">
                
                <br>
                
                Withdraw amount: <input type=\"text\" name=\"bitcoinWithdrawAmount\">
                
                <br>
                
                Address to withdraw to: <input type=\"text\" name=\"bitcoinWithdrawAddress\">
                
                <br>
                
                <input type=\"submit\" value=\"Withdraw\">  </input>
                
            </form>

            </div>
            
        </div>
        
        <div id=\"pendingBitcoinDeposits\"
        
        </div>
        
        <div id=\"bitcoin\">
            
            <h1>Dollar</h1>
            
            <br>
            
            <h3>

            Current dollar balance:

            $this->dollarBalance
                
            </h3>
            
        
            <br>
            
            <br>
            
            <div id=\"currencyBalanceDollarPendingTrans\">
            
                <h2>Pending Deposits Or Withdrawals:</h2>
        
        ";
        
        
        //deposits
        $sql = "SELECT * FROM DepositsDollar WHERE userName ='$_SESSION[userName]'";
        
        $result = mysqli_query($con, $sql);
        
        echo "<h3>Deposits:</h3>";
        
        for ($x = 0; $x <  6; $x++)
        {
            
            if (mysqli_num_rows($result) == 0) {break;}            
        
            $row = mysqli_fetch_array($result);
            
            echo $row['P_ID'] . " " . $row['depositAmount'] . " " . "<button id=\"$row[P_ID]\" class=\"dollarDepositCancelButton\">Cancel</button> <br>"; 
        
        }

        //withdraws
        $sql = "SELECT * FROM WithdrawsDollar WHERE userName ='$_SESSION[userName]'";
        
        $result = mysqli_query($con, $sql);
        
        echo "<h3>Withdraws:</h3>";
        
        for ($x = 0; $x <  6; $x++)
        {
            
            if (mysqli_num_rows($result) == 0) {break;}
        
            $row = mysqli_fetch_array($result);
            
            echo $row['P_ID'] . " " . $row['withdrawAmount'] . " " . "<button id=\"$row[P_ID]\" class=\"dollarWithdrawCancelButton\">Cancel</button> <br>"; 
        
        }
        
        echo "
            
            </div>
            
            <br><br>
            
            <div id=\"currencyBalancesDollarDeposit\">
            
                <h2>Deposit:</h2>
                
                
                <br>
                
                <ol>
                
                <li> Make sure to insert the amount to deposit into this form</li>
                
                <li>On pending deposits bellow, make sure to get the transaction id and include it on your deposit as a memo</li>
                
                <li>Deposit to the following account:</li>
                
                <ul>
                
                <li>Address: </li>
                
                <li>City: </li>
                
                <li>Country: </li>
                
                <li>Account number:</li>
                
                <li>Iban:</li>
                
                <li>Bank name:</li>
                
                <li>Address</li>
                
                <li>City:</li>
                
                <li>Country:</li>
                
                <li>SWIFT:</li>
                
                </ul>
                
                </ol>
                
                <br><br>

            <form id = \"dollarDepositForm\" action=\"ajax.php\" method=\"post\">
            
                Amount of dollars to deposit: <input type=\"text\" name=\"dollarDepositAmount\">
                
                <br>
                
                <input type=\"submit\" value=\"Deposit\">
                

                 
        
            </form>
        
        
            
            </div>
            
            <br>
            
            <br>
            
            <div id=\"currencyBalancesDollarWithdraw\">
            
                <h2>Withdraw: </h2>
                
                <form id=\"dollarWithdrawForm\" action=\"ajax.php\" method=\"post\">

                <br>
                
                Withdraw amount: <input type=\"text\" name=\"dollarWithdrawAmount\">
                
                <br>
                
                Accountholder name: <input type=\"text\" name=\"accountholderName\">
                
                <br>
                

                
                Accountholder address: <input type=\"text\" name=\"accountholderAddress\">
                
                <br>
                
                Accountholder postal code:  <input type=\"text\" name=\"accountholderPostalCode\">
                
                <br>
                
                Accountholder city: <input type=\"text\" name=\"accountholderCity\">
                
                <br>
                
                Accountholder country: <input type=\"text\" name=\"accountholderCity\">
                
                <br>
                
                IBAN / account number: <input type=\"text\" name=\"iban\">
                
                <br>
                
                SWIFT/BIC: <input type=\"text\" name=\"swift\">
                
                <br>
                
                Bank name: <input type=\"text\" name=\"bankName\">
                
                <br>
                
                Bank address: <input type=\"text\" name=\"bankAddress\">
                
                <br>
                
                Bank postal code: <input type=\"text\" name=\"bankPostalCode\">
                
                <br>
                
                Bank city: <input type=\"text\" name=\"bankCity\">
                
                <br>
                
                Bank country: <input type=\"text\" name=\"bankCountry\">
                
                <br>
                
                Other: <input type=\"text\" name=\"other\">
                
                <br>
                
                <input type=\"submit\" value=\"Withdraw\">  </input>
                
                </form>
                


            </div>
            
        </div>

            
        ";

    }
    
    
    

    
    
    
    
    
    
    
    public function ask($con, $amount, $price, $user)
    {
        
        
        
        $sql = "SELECT bitcoinBalance FROM Users WHERE userName = '$_SESSION[userName]'";
        
        $result = mysqli_query($con,$sql);
        
        if (!$result)
        {
            die("Database access fail <br>");
        }
        
        elseif (mysqli_num_rows($result))
        {
            
            
            
            $row = mysqli_fetch_row($result);
            
            $totalprice = $price * $amount;
            
            $amountOfProductLeftInOrder = $amount;
            
            if ($row[0] >= $amount)
            {
                
                $newBalanceBitcoin = $row[0] - $amount;
                
                //the entire balance of the order is subtracted from the users bitcoin balance
                $sql3 = "UPDATE Users SET bitcoinBalance = '$newBalanceBitcoin' WHERE userName='$_SESSION[userName]'";
                
                
                
                
                mysqli_query($con,$sql3);
                
                
                
                //START execute those that are possible, put the rest in OrderbookBitcoin table
                
                $sql4 = "SELECT * FROM OrderbookBitcoin WHERE price >= '$price' AND bid='true' ORDER BY price DESC";
                
                $result = mysqli_query($con,$sql4);
              
                $dollarAmountLeftInOrderTotal = $totalprice;
                
                
                
               
                while ($row = (mysqli_fetch_array($result)))
                {
                    
                    if ($amountOfProductLeftInOrder <= 0)
                    {
                        break;
                    }
                    
                    $P_Id = $row['P_Id'];
                    
                    $time = new DateTime();
                    $timeStamp = $time->getTimestamp();
                    
                    update_bitcoin_currentprice($con, $row['price'], $timeStamp);
                    
                    //here there are two possibilities
                    //here there are two possibilities
                    //one where the entire bid is consumed
                    //the other where the bid is only partially consumed
                    
                    //whole bid is consumed
                    if ($amountOfProductLeftInOrder >= $row['amount'])
                    {
                        
                    
                        $dollarAmountLeftInOrderTotal = $dollarAmountLeftInOrderTotal - $row['amount']*$row['price'];
                    
                        $amountSoldThisRow = $row['amount'];
                    
                        $amountOfProductLeftInOrder = $amountOfProductLeftInOrder - $amountSoldThisRow;
                    
                        $sql5 = "SELECT dollarBalance FROM Users WHERE userName='$_SESSION[userName]'";
                    
                        $result = mysqli_query($con, $sql5);
                    
                        $row = mysqli_fetch_row($result);
                    
                        $newAmount = $amountSoldThisRow * $price + $row[0] ;
                    
                        $sql6 = "UPDATE Users SET dollarBalance = '$newAmount'";
                    
                        mysqli_query($con, $sql6);
                        
                        //delete the bid
                        $sql7  = "DELETE FROM OrderbookBitcoin WHERE P_Id = '$P_Id'";
                        mysqli_query($con, $sql7);  
                        
                        
                    
                    }
                    
                    else if($amountOfProductLeftInOrder < $row['amount'])
                    {

                        
                        $dollarAmountLeftInOrderTotal = $dollarAmountLeftInOrderTotal - $row['amount']*$row['price'];
                        
                        
                        
                        $amountSoldThisRow = $amountOfProductLeftInOrder;
                        
                        $amountLeftInBid = $row['amount'] - $amountSoldThisRow;
                    
                        $amountOfProductLeftInOrder = $amountOfProductLeftInOrder - $amountsoldThisRow;
                    
                        $sql5 = "SELECT dollarBalance FROM Users WHERE userName='$_SESSION[userName]'";
                    
                        $result = mysqli_query($con, sql5);
                    
                        $row = mysqli_fetch_row($result);
                    
                        $newAmount = $amountSoldThisRow * $price + $row[0] ;
                    
                        $sql6 = "UPDATE Users SET dollarBalance = '$newAmount'";
                    
                        mysqli_query($con, $sql6);
                        
                        //update the bid
                        $sql7 = "UPDATE OrderbookBitcoin SET amount = 'amountLeftInBid'";
                        mysqli_query($con, $sql7);
                        
                        
                        

                        
                        
                    }
                    
                }
                    
            
                
                //put the money that was left into the orderbook
                
                //put the amount that was not bought in the order book
                
                if ($amountOfProductLeftInOrder > 0)
                {
                        $sql7 = "INSERT INTO OrderbookBitcoin(userName, amount, price, ask) VALUES ('$_SESSION[userName]', '$amountOfProductLeftInOrder', '$price', 'true') ";    
                    
                        mysqli_query($con, $sql7);   
                    
                    //get the trans id
                        
                        $sql8 = "SELECT P_Id FROM OrderbookBitcoin ORDER BY P_Id DESC";
                        $result2 = mysqli_query($con, $sql8);
                        $row2 = mysqli_fetch_row($result2);
                        $P_Id = $row2[0];
                    
                        return $P_Id;
                
                }
            }    
                    
            
            else
            {
        
                return "notEnoughBalance";
            }                    
        }
                

                
               
        
            

                
            
       
    }//function end
    
    
    
    
    
    
    
    
    public function bid($con, $amount, $price, $user)
    {
        
        $sql = "SELECT dollarBalance FROM Users WHERE userName = '$_SESSION[userName]'";
        
        $result = mysqli_query($con,$sql);
        
        if (!$result)
        {
            die("Database access fail <br>");
        }
        
        elseif (mysqli_num_rows($result))
        {
            
            
            
            $row = mysqli_fetch_row($result);
            
            $totalprice = $price * $amount;
            
            if ($row[0] >= $totalprice)
            {
                
                $newBalanceDollar = $row[0] - $totalprice;
                
                //the entire balance of the order is subtracted from the users dollar balance
                $sql3 = "UPDATE Users SET dollarBalance = '$newBalanceDollar' WHERE userName='$_SESSION[userName]'";
                
                mysqli_query($con,$sql3);
                
                //START execute those that are possible, put the rest in OrderbookBitcoin table
                
                $sql4 = "SELECT * FROM OrderbookBitcoin WHERE price <= '$price' AND ask='true' ORDER BY price ASC";
                
                $result = mysqli_query($con,$sql4);
              
                $dollarAmountLeftInOrderTotal = $totalprice;
                
                
                $amountOfProductLeftInOrder = $amount;
                
                while ($row = (mysqli_fetch_array($result)))
                {
                    
                    if ($amountOfProductLeftInOrder <= 0)
                    {
                        break;
                    }
                    
                    $P_Id = $row['P_Id'];  
                    
                    $time = new DateTime();
                    $timeStamp = $time->getTimestamp();
                    
                    update_bitcoin_currentprice($con, $row['price'], $timeStamp);
                    
                    //here there are two possibilities
                    //one where the entire bid is consumed
                    //the other where the bid is only partially consumed
                    
                    //whole ask is consumed
                    if ($amountOfProductLeftInOrder >= $row['amount'])
                    {                    
                    
                        $dollarAmountLeftInOrderTotal = $dollarAmountLeftInOrderTotal - $row['amount']*$row['price'];
                    
                        $amountPurchasedThisRow = $row['amount'];
                    
                        $amountOfProductLeftInOrder = $amountOfProductLeftInOrder - $amountPurchasedThisRow;
                    
                        $sql5 = "SELECT bitcoinBalance FROM Users WHERE userName='$_SESSION[userName]'";
                    
                        $result = mysqli_query($con, $sql5);
                    
                        $row = mysqli_fetch_row($result);
                    
                        $newAmount = $amountPurchasedThisRow + $row[0] ;
                    
                        $sql6 = "UPDATE Users SET bitcoinBalance = '$newAmount'";
                    
                        mysqli_query($con, $sql6);
                    
                        //destroy the row
                        $sql7  = "DELETE FROM OrderbookBitcoin WHERE P_Id = '$P_Id'";
                        
                        mysqli_query($con, $sql7);
                        
                       
                    
                        }
                        
                    else if($amountOfProductLeftInOrder < $row['amount'])
                    {
                        
                        
                        
                        $dollarAmountLeftInOrderTotal = $dollarAmountLeftInOrderTotal - $row['amount']*$row['price'];
                    
                        $amountSoldThisRow = $amountOfProductLeftInOrder;
                        
                        $amountLeftInAsk = $row['amount'] - $amountSoldThisRow;
                    
                        $amountOfProductLeftInOrder = $amountOfProductLeftInOrder - $amountsoldThisRow;
                    
                        $sql5 = "SELECT dollarBalance FROM Users WHERE userName='$_SESSION[userName]'";
                    
                        $result = mysqli_query($con, sql5);
                    
                        $row = mysqli_fetch_row($result);
                    
                        $newAmount = $amountSoldThisRow * $price + $row[0] ;
                        
                        
                    
                        $sql6 = "UPDATE Users SET dollarBalance = '$newAmount'";
                    
                        mysqli_query($con, $sql6);
                        
                        //update the row
                        $sql7 = "UPDATE OrderbookBitcoin SET amount = '$amountLeftInAsk'";
                        mysqli_query($con, $sql7);
                        

                        
                        
                    }
                    
                    
                    
                }
                
                //put the money that was left into the orderbook
                
                //put the amount that was not bought in the order book
                
                if ($amountOfProductLeftInOrder > 0)
                {        
                    
                    $sql7 = "INSERT INTO OrderbookBitcoin(userName, amount, price, bid) VALUES ('$_SESSION[userName]', '$amountOfProductLeftInOrder', '$price', 'true') ";    
                
                    mysqli_query($con, $sql7);  
                    
                        //get the trans id
                        $sql8 = "SELECT P_Id FROM OrderbookBitcoin ORDER BY P_id DESC";
                        $result = mysqli_query($con, $sql8);
                        $row = mysqli_fetch_row($result);
                        $P_Id = $row[0];
                        
                        return $P_Id;
                
                }
                
                //put the money that was left into the orderbook
                
                //put the amount that was not bought in the order book
                    
  
                
                
                
            }
                
            else
            {
        
               // echo "You do not have enough balance to execute this trade. <br>";
                return "notEnoughBalance";
            }
                
               
        }
            

                
            
       
    }//function end
        
    public function cancelPendingOrder($con, $P_Id)
    {
        
        $sql = "DELETE FROM OrderbookBitcoin WHERE $P_Id = '$P_Id'";
        
        if (mysqli_query($con, $sql))
        {
            return true;
        }
        
        else 
        {
            return false;
        }
        
    }
           
                
        
        
        
}//class end
    
    
    
    
    
class TransactionSystem
    {
    
        public function echoJavascriptFunctions()
        {
            
            
            echo "
            
            
            ";
            
            
        }
        
        public function echoJavascript()
        {
            
        echo "
            
            
        ";
            
            
        }
        
        
    
        public function displayTransactionInterface($mysqli)    
        {
        
            echo "<div id=\"currentPriceTag\"> <h1>Current Price: <br><div id=\"currentPrice\"> 0 </div> </h1></div>";
            
            //echo "<br>";
            
            //echo "<div id=\"lastDayChangeTag\"> <h2>Last Day Change: <div id=\"lastDayChange\"> </div> Percentage: <div id=\"lastDayChangePercentage\"> </div></h2></div>";
                
            
            
        
            
            
            echo "<div id=\"currentPendingOrders\">";
            
            echo "<h1>Current Open Orders: </h1><div id=\"currentOpenOrders\"> </div>";
            
            echo "<h2>Asks: </h2><br>";
            
            $this->displayPendingOrders($mysqli, "ask");
            
            echo "<h2>Bids: </h2><br>";

            $this->displayPendingOrders($mysqli, "bid");
        
           echo "</div>";
           
           echo "<div id=\"currentOrderBook\">";
            
            echo "<h1>Current Order Book: </h1><br>";
            
            echo "<h2>Asks: </h2><br>";
            
            $this->displayOrderbookBitcoin($mysqli, "ask");
            
            echo "<h2>Bids: </h2><br>";
            
            $this->displayOrderbookBitcoin($mysqli, "bid");
            
            echo "</div>";
              
             
                
        }
        
        static public function displayBuySellInterfaces()
        {
        
            echo "
                
            
            
            <div id=\"buyInterface\"> 
            
                <div id=\"buyInterfaceTitle\" > BUY </div>
                
                <div id=\"buyInterfaceStatus\"> </div>
                
                <form  action=\"bitcoin.php\" id=\"buyForm\" method=\"post\">
                
                amount: <input type=\"text\" name=\"amount\"> 
                
                price: <input type=\"text\" name=\"price\"> 
                
                <input type=\"hidden\" name=\"operation\" value=\"buyForm\">
                
                <br>
                
                <input type=\"submit\" value=\"buy\" > 
                
               <!-- <button id=\"buyFormButton\" onclick=\"$(this).closest('form').submit();window.alert(\"Your buy order has been placed.\");window.location.reload();\">submit</button> -->

               <!--<button id=\"buyFormButton\">Buy</button> -->

                </form>

                <button onclick=\" document.getElementById('buyInterface').style.visibility = 'collapse';\"> cancel </button>



            </div>
            
            

                
                
            <div id=\"sellInterface\"> 

            
                <div id=\"sellInterfaceTitle\"> SELL </div>
                
                <div id=\"sellInterfaceStatus\"> </div>
                
                
                
                <form   action=\"bitcoin.php\" id=\"sellForm\" method=\"post\">
                
                amount: <input type=\"text\" name=\"amount\"> 
                
                price: <input type=\"text\" name=\"price\"> 
                
                <input type=\"hidden\" name=\"operation\" value=\"sellForm\">
                
                <br>
                
                <input type=\"submit\" value=\"sell\" >
                <!--<button id=\"sellFormButton\" onclick=\"$(this).closest('form').submit();window.alert(\"Your sell order has been placed.\");window.location.reload();\">submit</button> -->

                <!--<button id=\"buyFormButton\">Buy</button>-->

                </form>
                
                <button onclick=\"document.getElementById('sellInterface').style.visibility = 'collapse';\"> cancel </button>



            </div>
                
            
            
            ";
        }
        
        //type is ask or bid
        public function displayOrderbookBitcoin($mysqli, $type)
        {            
            if (!($stmt = $mysqli->prepare("SELECT amount, price, bid, ask FROM OrderbookBitcoin"))) 
            {
                echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        
        
            /*
            if (!$stmt->bind_param("s", $_POST[userName])) 
            {
                echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }
             
            */
        
            $stmt -> execute();
        
            if (!$stmt -> bind_result($amountResult, $priceResult, $bidResult, $askResult ))
            {
                echo "Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }

            if($type == "bid")
            {
            echo "<table id=\"orderbookBidTable\">";
            }
            
            else if ($type == "ask")
            {
                echo "<table id=\" orderbookAskTable\">";
                
            }
            
            echo "<tr><th>Amount</th> <th>Price</th> </tr>";        
            while ($stmt->fetch()) 
            {    
                if ($type == "bid")
                {

                    if ($bidResult == "true" )    
                    {
                        echo "<tr><td>$amountResult</td> <td>$priceResult</td> </tr>";

                    }

                }



                elseif ($type == "ask")
                {

                    if ($askResult == "true")
                    {

                        echo "<tr><td>$amountResult</td> <td>$priceResult</td> </tr>";
                    }


                }

            }
            echo "</table>";
            
           
        }            
            

                
        
        //type is ask or bid
        public function displayPendingOrders($mysqli, $type)
        {
            
            
            //echo "<script src=\"/js/libs/masonry.pkgd.min.js\"></script>";
            
            if (!($stmt = $mysqli->prepare("SELECT P_Id, userName, amount, price, bid, ask FROM OrderbookBitcoin WHERE userName = ?"))) 
            {
                echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        
        
            
            if (!$stmt->bind_param("s", $_SESSION[userName])) 
            {
                echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }
             
            
        
            $stmt -> execute();
        
            if (!$stmt -> bind_result($P_IdResult, $userNameResult, $amountResult, $priceResult, $bidResult, $askResult ))
            {
                echo "Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            
                
            }

           // echo "<div id=\"masonry\" class=\"js-masonry\">";
        
                        if($type == "bid")
            {
            echo "<table id=\"orderbookPendingBidTable\">";
            }
            
            else if ($type == "ask")
            {
                echo "<table id=\" orderbookPendingAskTable\">";
                
            }
            echo "<tr><th>Amount</th> <th>Price</th> <th>Click to cancel order:</ht></tr>";
            while ($stmt->fetch()) 
            {  
            

            
            
            
            
                
                if ($type == "bid")
                {
                
                       
                    
                    if ($bidResult == "true" )    
                    {
                        
                        echo "<tr><div id= \"$P_IdResult\" class=\"PendingOrder\"> <td>$amountResult</td> <td> $priceResult</td> <td><button id = \"$P_IdResult\" class=\"openOrderCancelButton\">cancel</button> </td></div> </tr> <br><br>";

                        
                    }
                   
                    
                    
                }
                
                elseif ($type == "ask")
                {
                    
                    if ($askResult == "true")
                    {
                        
                        echo "<tr><div id= \"$P_IdResult\">  <td>$amountResult</td> <td> $priceResult </td> <td> <button id = \"$P_IdResult\" class=\"openOrderCancelButton\">cancel</button> <td> </tr></div> <br>";
                    }
                    
                    
                }
                
                
            }
            echo "</table>";
            //echo "</div>"; //close masonry div
                        
            
            
        }
        
        public function displayForum($mysqli)
        {
            echo "<div id=forum>";
            
            
            if (!($stmt = $mysqli->prepare("SELECT P_Id, userName, amount, price, bid, ask FROM OrderbookBitcoin WHERE userName = ?"))) 
            {
                echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
            }
        
        
            
            if (!$stmt->bind_param("s", $_SESSION[userName])) 
            {
                echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }
             
            
        
            $stmt -> execute();
        
            if (!$stmt -> bind_result($P_IdResult, $userNameResult, $amountResult, $priceResult, $bidResult, $askResult ))
            {
                echo "Binding output parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }            
            
            echo "div id=forum>";

            
        }
        
        
    
    }
            
        
        

    
    
    
    

    
    

