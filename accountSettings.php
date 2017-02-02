<?php session_start();  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="stylesheetmainphp.css" />
        <script src="js/libs/jquery/jquery.js"></script>
    </head>
    <body>
        <?php
            require "functions.php";
            
            require "classes.php";
            
            authenticate();
            
            $mainMenu1 = new mainMenu();
    
            $mainMenu1->displayEN_NoTopButtons();
            
            if ($_FILES['proofOfResidence']['size'] > 0 && $_FILES['governmentId']['size'] > 0)
            {
                
                $fileName1 = $_FILES['proofOfResidence']['name'];
                
                $tmpName1 = $_FILES['proofOfResidence']['tmp_name'];
                    
                $fileSize1 = $_FILES['proofOfResidence']['size'];
                        
                $fileType1 = $_FILES['proofOfResidence']['type'];
                
                $fp1 = fopen($tmpName, 'r');
                
                $content1 = fread($fp, filesize($tmpName1));
                
                $content1 = addslashes($content1);
                
                fclose($fp1);
                
                $fileName2 = $_FILES['governmentId']['name'];
                
                $tmpName2 = $_FILES['proofOfResidence']['tmp_name'];
                    
                $fileSize2 = $_FILES['proofOfResidence']['size'];
                        
                $fileType2 = $_FILES['proofOfResidence']['type'];
                
                $fp2 = fopen($tmpName, 'r');
                
                $content2 = fread($fp, filesize($tmpName2));
                
                $content2 = addslashes($content2);
                
                fclose($fp2);
                
                include 'library/config.php';
                
                include 'library/opendb.php';
                
                $sql = "INSERT INTO PendingValidations (userName, governmentId, proofOfResidence) VALUES ('$_SESSION[userName]', '$content2', '$content1')";
                
                mysqli_query($con, $sql);
            
                include 'library/closedb.php';
                
            }
           
            
                
            
            
               
        ?>
        
        <div id="settingsValidate" style="float:left;"> 
        
            <h1>Account Validation:</h1>
        
        <br>
        
        <h2>To validate your account you must submit:</h2>
        <ul>
            
            
            
            
            
            <li> One Government issued ID: Passport, Driver's license, Government ID card.</li>
            
            <li> One Proof of residence: Utility bill, banking statement.</li> 
            
        </ul>
        
        <br>
        
        <h3> Submit here:</h3>
        
        <form method='post' action='accountSettings.php' enctype='multipart/form-data'>
   
            <input type="hidden" name="MAX_FILE_SIZE" value="300000">
            
            Government ID: <input type='file' name='governmentId' size='10'/>
            
            <br>
            
            Proof of residence: <input  type='file' name='proofOfResidence' size='10'/>
            
            <br>
            
            <input name='upload' type='submit' value='Upload' id='upload'>
            
        </form>
            
            
        </form>
        
        </div>
        <br>
       
    </body>
</html>
