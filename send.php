<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="email" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму

 $email = $_POST['email'];
 $email = htmlspecialchars($email);
 $email = urldecode($email);
 $email = trim($email);
 if (mail("tochilka007@mail.ru", "Заявка с сайта", E-mail: ".$email ,"From: xomya4ik@gmail.com \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>
