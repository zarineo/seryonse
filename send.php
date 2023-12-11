<?php
    $email = $_POST['email'];
    $to = "tochilka007@mail.ru"; 
    $date = date ("d.m.Y"); 
    $time = date ("h:i");
    $from = $email;
    $subject = "Заявка c сайта Seryonse";
    $msg="
    Email: $email";   
  mail($to, $subject, $msg, "From: $to ");
?>
