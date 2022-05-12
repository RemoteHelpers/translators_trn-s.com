
<?php 

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/PHPMailer.php';
  require 'phpmailer/src/Exception.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'phpmailer/language/');
  $mail->IsHTML(true);



  if (!empty($_POST)) {
    $mail->setFrom($_POST['email'], 'trn-s.com');
    $mail->addAddress('asven0099@gmail.com');

    $mail->Subject = 'Consultation!';
    $body = '<h3>New Message!</h3>';
    
  
    if(trim(!empty($_POST['name']))) {
      $body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['email']))) {
      $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['message_input']))) {
      $body.='<p><strong>Message:</strong> '.$_POST['message_input'].'</p>';
    }
    if(trim(!empty($_POST['select_industry']))) {
      $body.='<p><strong>Industry:</strong> '.$_POST['select_industry'].'</p>';
    }
    if(trim(!empty($_POST['select_country']))) {
      $body.='<p><strong>Country:</strong> '.$_POST['select_country'].'</p>';
    }
  
  
  
    $mail->Body = $body;
  
  
    // Отправка на почту
    if (!$mail->send()) {} else {};
  
    $response = ['message' => $message];
  
    // header('Content-type: application/json');
    // echo json_encode($response);
  }



?>
