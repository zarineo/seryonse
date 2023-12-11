<?php
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $email = htmlspecialchars($email);
    $email = urldecode($email);
    $email = trim($email);

    $to      = 'seryonse@gmail.com'; // Используйте полученный email в качестве адресата
    $subject = 'Тема письма';
    $headers = 'From: zayd.makayev@mail.ru' . "\r\n" .
               'Reply-To: zayd.makayev@mail.ru          ' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $email, $headers)){
        echo "Письмо отправлено";
    } else {
        echo "Не удалось отправить письмо";
    }
}
