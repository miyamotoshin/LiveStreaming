<?php
echo 'teat1';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

echo 'teat2';
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

echo 'teat3';
// 文字エンコードを指定
mb_language('uni');
mb_internal_encoding('UTF-8');

// インスタンスを生成（true指定で例外を有効化）
$mail = new PHPMailer(true);

echo 'Current PHP version: ' . phpversion();
// 文字エンコードを指定
$mail->CharSet = 'utf-8';

try {
  // デバッグ設定
  // $mail->SMTPDebug = 2; // デバッグ出力を有効化（レベルを指定）
  // $mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str<br>";};

  // SMTPサーバの設定
  $mail->isSMTP();                          // SMTPの使用宣言
  $mail->Host       = 'smtp.office365.com';   // SMTPサーバーを指定
  $mail->SMTPAuth   = true;                 // SMTP authenticationを有効化
  $mail->Username   = 'shin.miyamoto@jp.ricoh.com';   // SMTPサーバーのユーザ名
  $mail->Password   = '9gDi2bgV';           // SMTPサーバーのパスワード
  $mail->SMTPSecure = 'tls';  // 暗号化を有効（tls or ssl）無効の場合はfalse
  $mail->Port       = 465; // TCPポートを指定（tlsの場合は465や587）

  // 送受信先設定（第二引数は省略可）
  $mail->setFrom('shin.miyamoto@jp.ricoh.com', '差出人名'); // 送信者
  $mail->addAddress('shin.miyamoto@jp.ricoh.com', '受信者名');   // 宛先
  $mail->addReplyTo('shin.miyamoto@jp.ricoh.com', 'お問い合わせ'); // 返信先
  $mail->addCC('shin.miyamoto@jp.ricoh.com', '受信者名'); // CC宛先
  $mail->Sender = 'shin.miyamoto@jp.ricoh.com'; // Return-path

  // 送信内容設定
  $mail->Subject = 'テスト'; 
  $mail->Body    = 'テスト';  

  // 送信
  $mail->send();
} catch (Exception $e) {
  // エラーの場合
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
