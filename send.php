<?php
//���������, ���������� �� ���������� � ������� POST
if(!isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="email" name="email" placeholder="������� e-mail" required>
<input type="submit" value="���������">
</form> <?php
} else {
 //���������� �����

 $email = $_POST['email'];
 $email = htmlspecialchars($email);
 $email = urldecode($email);
 $email = trim($email);
 if (mail("tochilka007@mail.ru", "������ � �����", E-mail: ".$email ,"From: xomya4ik@gmail.com \r\n")){
 echo "��������� ������� ����������";
 } else {
 echo "��� �������� ��������� �������� ������";
 }
}
?>
