<?php
if(isset($_POST['submit'])){
    $to = "sahilfaizal0704@gmail.com";


    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $body= $_POST['body'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $body , $headers)){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Mail Sent!")';
        echo '</script>';  
    }else{
         echo '<script type ="text/JavaScript">';   
         echo 'alert("Failed To Send Mail")';
         echo '</script>';  

    }
}

?>
