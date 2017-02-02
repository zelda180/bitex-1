<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="stylesheetmainphp.css" />
        <script src="js/libs/jquery/jquery.js"></script>
    </head>
    <body>
        <?php
        
            require "classes.php";
            
            require "functions.php";
            
            authenticate();
            
            
            
            
            $mainMenu1 = new mainMenu();
    
            $mainMenu1->displayEN_NoTopButtons();
            
            
            
            
            
            $user1 = new User($con);
            
            $user1->displayCurrencyBalancesInterface($con);
            
           
            
        ?>
        
        <script>
            
           $(document).ready(function()
           {
           
                $("#bitcoinWithdrawForm").submit(function(event){
                    
                    event.preventDefault();
                    
                    var $form = $(this),
                    
                    term1 = $form.find("input[name='bitcoinWithdrawAmount']").val(),
                    
                    term2 = $form.find("input[name='bitcoinWithdrawAddress']").val(),
                    
                    url = $form.attr("action");
                    
                    var posting = $.post(url, {operation:"withdrawBitcoinForm", amount:term1, price:term2});
                        
                    posting.done(function(data){
                      
                        console.log(data.success);
                        
                    });
                    
                    });

                   
                    $(".bitcoinWithdrawCancelButton").click(function(event){
                  
                  $.post("ajax.php", {operation: "withdrawBitcoinFormCancelOrder", id:event.target.id},function(data,status){
                      
                      
                  });
                  
                });
                    
                $("#dollarDepositForm").submit(function(event){

                    event.preventDefault();
                    
                    var $form = $(this),
                    
                    term1 = $form.find("input[name='dollarDepositAmount']").val(),
                    
                    url = $form.attr("action");
                    
                    
                    
                    var posting = $.post(url, {operation:"depositDollarForm", amount:term1});
                        
                    posting.done(function(data){
                      
                        console.log(data.success);
                        
                    });
                    
                    });
                    
                $(".dollarDepositCancelButton").click(function(event){
                  
                  $.post("ajax.php", {operation: "dollarDepositFormCancelOrder", id:event.target.id},function(data,status){
                      
                      
                  });
                  
                });                    
                

                    
                $("#dollarWithdrawForm").submit(function(event){
                
                    event.preventDefault();
                    
                    var $form = $(this),
                    
                    term1 = $form.find("input[name='dollarWithdrawAmount']").val(),
                    
                    term2 = $form.find("input[name='accountholderName']").val(),
                    
                    url = $form.attr("action");
                    
                    var posting = $.post(url, {operation:"withdrawDollarForm", amount:term1, accountholderName:term2});
                        
                    posting.done(function(data){
                      
                        console.log(data.success);
                        
                    });
                    
                    });  
                    
                $(".dollarWithdrawCancelButton").click(function(event){
                  
                  $.post("ajax.php", {operation: "withdrawDollarFormCancelOrder", id:event.target.id},function(data,status){
                      
                      
                  });
                  
                });
                
                
                });            
           
            
        </script>
    </body>
</html>
