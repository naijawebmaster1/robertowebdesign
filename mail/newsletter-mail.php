<?php
    
    if(isset($_POST['email'])){
        $email  = $_POST['email'];
    }else{
        $email  = $_GET['email'];
    }
    
    $to = "yourmail@gmail.com";
    $subject = "New Subscriber";
    $from = 'support@yoursite.com';
    $headers = "From: $from";
    $msg = "New user subscribe $email";
    
    if(mail($to,$subject,$msg,$headers)){
        $arr = array("status"=>true);   
    }else{
        $arr = array("status"=>false);   
    }
    echo json_encode($arr);
?>