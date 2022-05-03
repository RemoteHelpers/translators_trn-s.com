
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $name = htmlspecialchars($name);
  $email = htmlspecialchars($email);
  $name = urldecode($name);
  $email = urldecode($email);
  $name = trim($name);
  $email = trim($email);

          ini_set('display_errors','On');
          error_reporting('E_ALL');

  mail("asven0099@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: trn-s.com \r\n")
?>