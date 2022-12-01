<?php

$senderName = 'kovtun.yelyzaveta1119@vu.cdu.edu.ua';
$address = htmlspecialchars($_POST['email']);
$body = htmlspecialchars($_POST['message']);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/Exception.php';
require_once __DIR__ . '/PHPMailer.php';
require_once __DIR__ . '/SMTP.php';

$mail = new PHPMailer(true);
if ($address == $senderName) {
  echo "<p>Щось пішло не так\nВи не можете відправити повідомлення самому собі!</p>";
} else {
    try {
      $mail->IsSMTP();
      $mail->Host = 'smtp-pulse.com';
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 2525;
      $mail->CharSet = "UTF-8";
      $mail->setFrom($senderName, 'Sender Name');
      $mail->Username = $senderName;
      $mail->Password = "AG83fYRB88SNt6";
      $mail->addAddress($address);
      $mail->Subject = "Service";
      $mail->msgHTML($body);
      $mail->send();
      echo  "<p>Успішно\nПовідомлення успішно відправлено!</p>";
    } catch (Exception $e) {
      echo "Mailer Error: {$mail->ErrorInfo} {$e}";
    }
}
