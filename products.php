<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="stylesheetmainphp.css" />
        <script src="js/libs/jquery/jquery.js"></script>
    </head>
    <body>
        
       <script>
                
               
            
                //document.write("functions written executed");
                function deletePendingOrder(P_Id) 
                {
                
                        
                        
                        $("#"+P_Id).remove();
                    
                    
                
                }
                
           
            
                $(document).ready(function() 
                {
                
                    $(".openOrderCancelButton").click(function(event) 
                    {
                    
                        
                            
                            $.post("ajax.php",
                                {
                                operation:"deletePendingOrder",
                                P_Id:event.target.id
                                
                                
                                },
                                function(data,status){
                                
                                deletePendingOrder(event.target.id);
                                
                                
                                
                                }, "json");
                                
                            window.location.reload();
                    });
                
                });
                
                function updateSite()
                {
                
                    //update current price
                    $.post("ajax.php",{operation:"updateSite"},function(JSON){
                        
                        console.log("JSON data iss: " + JSON.currentPrice);
                        
                        $("#currentPrice").empty().append(JSON.currentPrice);
                            
                    }, "json");
                    

                     //update order book
                    $.post("ajax.php",{operation:"updateOrderbook"}, function(JSON)
                    {
                        var tbdy=document.createElement('tbodybid');
                        
                        var tbdy=document.createElement('tbodyask');
                        
                        var tr=document.createElement('tr');
                        
                        var td=document.createElement('td');
                        
                        td.appendChild(document.createTextNode('Amount'));
                        
                        
                        
                        tbdybid.appendChild(td);
                        
                        var td=document.createElement('td');
                        
                        td.appendChild(document.createTextNode('Price'));                        
                        
                        tbdybid.appendChild(td);
                        
                       var tr=document.createElement('tr');
                        
                        var td=document.createElement('td');
                        
                        td.appendChild(document.createTextNode('Amount'));
                        
                        
                        
                        tbdyask.appendChild(td);                        
                        
                        var td=document.createElement('td');
                        
                        td.appendChild(document.createTextNode('Price'));                        
                        
                        tbdyask.appendChild(td);
                        
                        for(var i = 0; i < JSON.length; i++) {
                            var obj = json[i];
                            
                            
                            
                          
                            var tr=document.createElement('tr');
                                
                            var td=document.createElement('td');
                                
                            td.appendChild(obj[1]);
                            
                            tr.appendChild(td)
                            
                            
                            var td = document.createElement('td');
                            
                            td.appendChild[obj[2]];
                            
                            tr.appendChild(td);
                            
                            
                            if(obj[3] == "true")
                            {
                            

                            tbdybid.appendChild(tr);
                        }
                        else if (obj[3] == "true")
                        {
                            tbdyask.appendChild(tr);
                        }
                        }
                         
                    
                    //bid is 3, ask is 4
                    $("#orderbookBidTable").empty().append(tbdybid);
                    $("#orderbookBidTable").empty().append(tbdyask);
                        

                        
                        //orderbookBidTable
                        //orderbookAskTable
                       // $("#orderbookPendingAskTable").empty().append(JSON.currentPrice);

                       
                    }, "json");
                    
                    //update pending orders
                    $.post("ajax.php", {operation:"updatePendingOrders"}, function(JSON)
                    {
                       // $("#orderbookBidTable").empty().append(JSON.currentPrice);
                       // $("#orderbookAskTable").empty().append(JSON.currentPrice);
                        
                                                //orderbookPendingBidTable
                        //orderbookPendingAskTable
                       
                    }, "json");                    
                   
                    
                    
                    
                };
                                
                
                
                
                //update the site
                $(document).ready(function()
                {
                
                    
                    setInterval("updateSite()",1000);
                });
                
                
                
            
                //ajax for sell form
                $(document).ready(function()
                {
                    
                    $("#sellForm").submit(function(event){
                        
                        event.preventDefault();
                        
                        var $form = $(this),
                        term = $form.find("input[name='amount']").val(),
                        term2 = $form.find("input[name='price']").val(),
                        url = $form.attr("action");
                        
                        var posting=$.post(url, {operation:"sellForm", amount: term, price: term2}, "json");
                         
                        
                        posting.done(function(data) {
                            
                            console.log(data.success);
                            
                            if (data.success == "notEnoughBalance")
                            {
                                alert("You do not have enough balance for this transaction.");
                            }
        //dont be updating the site here, all updating should be done by update site ajax function
                            
                        });
                        
                        
                    });
                
                    
                    
                });
                
                //ajax for buy form
                $(document).ready(function()
                {
                
                    $("#buyForm").submit(function(event){
                        
                        
                        event.preventDefault();
                        
                        alert("Your buy order has been placed");
                        
                            window.location.reload(true);
                        
                        var $form = $(this),
                        term = $form.find("input[name='amount']").val(),
                        term2 = $form.find("input[name='price']").val(),
                        url = $form.attr("action");
                        
                        var posting=$.post(url, {operation:"buyForm", amount: term, price: term2});
                        
                        posting.done(function(data) {
                            
                            console.log(data.success);
                            
                            if (data.success == "notEnoughBalance")
                            {
                                alert("You do not have enough balance for this transaction.");
                            }
                            
                        });
                        
                        
                    });
                        
                    $("#sellForm").submit(function(event){
                        
                        
                        event.preventDefault();
                        
                        alert("Your sell order has been placed.");
                        
                            window.location.reload(true);
                        
                        var $form = $(this),
                        term = $form.find("input[name='amount']").val(),
                        term2 = $form.find("input[name='price']").val(),
                        url = $form.attr("action");
                        
                        var posting=$.post(url, {operation:"buyForm", amount: term, price: term2});
                        
                        posting.done(function(data) {
                            
                            console.log(data.success);
                            
                            if (data.success == "notEnoughBalance")
                            {
                                alert("You do not have enough balance for this transaction.");
                            }
                            
                        });
                        
                        
                    });
                        
                        
                        
                    //});
                    
                    
                });
                    
                        
                        
                        
                                        
                        
                    
                    
                
                    
                    
            
                    
                
                

            </script>
          


<?php
    // put your code here
      //classes must be first

    require "functions.php";

    require "classes.php";
            

    authenticate();



    $mainMenu1 = new mainMenu();

    //$mainMenu1->displayENProducts();

    $mainMenu1->displayEN_NoTopButtons();

    //sell
    if (isset($_POST['productName']))
    {
        
        $sql = "INSERT INTO userSellsRelationship (productId, userName) VALUES ('$POST[idToBuy]', '$_SESSION[userName]')";

        mysqli_query($con, $sql);        

        $sql2 = "INSERT INTO Product(productName, productPrice, productLocation, userName, sellerEmail, sellerPhone) VALUES('$_POST[productName]', '$_POST[productPrice]', '$_POST[productLocation]', '$_SESSION[userName]', '$_POST[sellerEmail]', '$_POST[sellerPhone]' )";

        mysqli_query($con, $sql2);

        if (mysqli_query($con,$sql))
        {
            //echo "successfully";
        }
        else 
        {
            echo "Error inserting " . mysqli_error($con) . "<br>";    
        }

    }
    
    
    if (isset($_POST['idToDelete']))
    {

        $sql = "DELETE FROM Product WHERE P_Id = '$_POST[idToDelete]'";

        mysqli_query($con, $sql);

        if (mysqli_query($con,$sql))
        {
            //echo "successfully";
        }
        else 
        {
            echo "Error deleting " . mysqli_error($con) . "<br>";    
        }

    }
    
    
    if (isset($_POST['idToBuy']))
    {
        
        $sql = "INSERT INTO userBuysRelationship (productId, userName) VALUES ('$_POST[idToBuy]', '$_SESSION[userName]')";

        mysqli_query($con, $sql);
        


        $sql = "DELETE FROM Product WHERE P_Id = '$_POST[idToBuy]'";

        mysqli_query($con, $sql);
        
        
        $sql = "INSERT INTO Sold(productId, userName) VALUES ('$_POST[idToBuy]', '$_SESSION[userName]')";

        $sql = "INSERT INTO Bought(productId, userName) VALUES ('$_POST[idToBuy]', '$_SESSION[userName]')";
        
        $sql = "INSERT INTO isSoldRelationship(productId, userName) VALUES ('$_POST[idToBuy]', '$_SESSION[userName]')";
        
        $sql = "INSERT INTO isBoughtRelationship(productId, userName) VALUES ('$_POST[idToBuy]', '$_SESSION[userName]')";

        
        
        
        
        if (mysqli_query($con,$sql))
        {
            //echo "successfully";
        }
        else 
        {
            echo "Error inserting " . mysqli_error($con) . "<br>";    
        }

    }



    $sql="CREATE TABLE Product(P_Id int NOT NULL AUTO_INCREMENT , productName CHAR(30), productPrice CHAR(30), productLocation CHAR(30), userName CHAR(30), sellerPhone CHAR(30), sellerEmail CHAR(30), PRIMARY KEY (P_Id) )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE Sold(P_Id int NOT NULL AUTO_INCREMENT , productId INT, userName CHAR(30), PRIMARY KEY (P_Id) )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE Bought(P_Id int NOT NULL AUTO_INCREMENT , productId INT, userName CHAR(30), PRIMARY KEY (P_Id) )";

     mysqli_query($con, $sql);


    $sql="CREATE TABLE isSoldRelationship(P_Id int NOT NULL AUTO_INCREMENT , productId INT, userName CHAR(30), PRIMARY KEY (P_Id) )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE isBoughtRelationship(P_Id int NOT NULL AUTO_INCREMENT , productId INT, userName CHAR(30), PRIMARY KEY (P_Id) )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE userBuysRelationship(P_Id int NOT NULL AUTO_INCREMENT , productId INT, userName CHAR(30), PRIMARY KEY (P_Id) )";

    mysqli_query($con, $sql);

    $sql="CREATE TABLE userSellsRelationship(P_Id int NOT NULL AUTO_INCREMENT , productId INT, userName CHAR(30), PRIMARY KEY (P_Id) )";

    //
    
       

    $sql="CREATE TABLE Bid(P_Id int NOT NULL AUTO_INCREMENT , usersId INT, OrderbookBitcoinId INT, PRIMARY KEY (P_Id) )";
    mysqli_query($con, $sql);
    
    $sql="CREATE TABLE Ask(P_Id int NOT NULL AUTO_INCREMENT , usersId INT, OrderbookBitcoinId INT, PRIMARY KEY (P_Id) )";
    mysqli_query($con, $sql);
    
    $sql="CREATE TABLE Withdraw(P_Id int NOT NULL AUTO_INCREMENT , usersId INT, WithdrawsDollarId INT, WithdrawsBitcoinId INT, PRIMARY KEY (P_Id) )";
    mysqli_query($con, $sql);
    
    $sql="CREATE TABLE Deposits(P_Id int NOT NULL AUTO_INCREMENT , usersId INT, DepositsDollarId INT, DepositsBitcoinId INT, PRIMARY KEY (P_Id) )";
    mysqli_query($con, $sql);
    
    $sql="CREATE TABLE BitcoinTransactionClear(P_Id int NOT NULL AUTO_INCREMENT , OrderbookBitcoinId INT, TransactionBitcoinId INT, PRIMARY KEY (P_Id) )";
    mysqli_query($con, $sql);
    
    
    
    //

    mysqli_query($con, $sql);

    echo "<h1>Current products sold: </h1><br>";

    $sql = "SELECT * FROM Product";

    $result = mysqli_query($con,$sql);



    while ($row = mysqli_fetch_array($result))
    {
        echo "Product id: " . $row['P_Id'] . " " . "<br>Product seller: " . $row['userName'] . " " . "<br>Product Name: " . $row['productName'] . " " . "<br>Product Price: " . $row['productPrice']  . " " . "<br>Product Location: " . $row['productLocation'] . " " . "<br>Seller Phone Number: " . $row['sellerPhone'] . " " . "<br>Seller Email: " . $row['sellerEmail'];
        echo "<br><br>";
    }







        
?>
 
            
<h1>Sell Your Product:</h1>             
    <form action="products.php" method="post">
        Product Name:<input type="text" id="" name="productName"><br>
        Product Price:<input type="text" id="" name="productPrice"><br>
        Product Location:<input type="text" id="" name="productLocation"><br>
        Seller Contact Phone Number:<input type="text" id="" name="sellerPhone"><br>
        Seller Contact Email:<input type="text" id="" name="sellerEmail"><br>
        <input type="submit" value="Submit">
    </form>
<br>

<h1>Delete Your Posted Product</h1>
<h2>You can delete posts that you started only</h2>
<form action="products.php" method="post"> 
    Product Id to Delete: <input type="text" id="" name="idToDelete"><br>
    <input type="submit" value="Submit">
</form>

<h1>Buy a Product</h1>
<h2>You can buy a product here</h2>
<form action="products.php" method="post"> 
    Product Id to Buy: <input type="text" id="" name="idToBuy"><br>
    <input type="submit" value="Submit">
</form>
        
</body>
</html>
