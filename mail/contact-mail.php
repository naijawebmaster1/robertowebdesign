<?php
    session_start();
    if(!$_SESSION)["secValue"])



    if(isset($_POST['name'])){
        $email  = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
    }else{
        $email  = $_GET['email'];
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $message = $_GET['message'];
        $subject = $_GET['subject'];
    }
    
    $to = "tojurnanna@gmail.com";
    $from = $email;
    $headers = "From: $from";
    $msg = "This email is sent by $name with message $message";
    
    if(mail($to,$subject,$msg,$headers)){
        $arr = array("status"=>true);   
    }else{
        $arr = array("status"=>false);   
    }
    
    echo json_encode($arr);

?>