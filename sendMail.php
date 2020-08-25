<?php

if(isset($_POST['send_mail'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //email to send to 
    $mail_to = "yusuf.keraan@creativespark.co.za";
    $headers = "From: ".$email;
    $txt =  "You have recieved an email from ".$name.".\n\n".$message;

    mail($mail_to, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
}




