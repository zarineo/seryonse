<?php
if(isset($_POST['email'])) {
 $email = $_POST['email'];
 $email = htmlspecialchars($email);
 $email = urldecode($email);
 $email = trim($email);
    
 if (mail("tochilka007@mail.ru", "client", "E-mail: ".$email ,"From: xomya4ik@gmail.com \r\n")){
    echo "Success";
} else {
    echo "fartal error!";
}
}
