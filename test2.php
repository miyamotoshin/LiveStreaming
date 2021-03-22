<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true); 

try {
  //Office365 認証情報
  $host = 'smtp.office365.com';
  $username = 'shin.miyamoto@jp.ricoh.com';
  $password = '9gDi2bgV';

  //差出人
  $from = 'shin.miyamoto@jp.ricoh.com';
  $fromname = '宮本　真';

  //宛先
  $to = 'shin.miyamoto@jp.ricoh.com';
  $toname = 'shin miyamoto';

  //件名・本文
  $subject = '宮本テスト';
  $body = 'test';

  //メール設定
  //$mail->SMTPDebug = 2; //デバッグ用
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = $host;
  $mail->Username = $username;
  $mail->Password = $password;
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->CharSet = "utf-8";
  $mail->Encoding = "base64";
  $mail->setFrom($from, $fromname);
  $mail->addAddress($to, $toname);
  $mail->Subject = $subject;
  $mail->Body    = $body;

  //メール送信
  $mail->send();
  echo '成功';

} catch (Exception $e) {
  echo '失敗: ', $mail->ErrorInfo;
}
