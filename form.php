<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$subject = $_POST["subject"];




$mail = new PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.brevo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ceeyliin1@gmail.com';                     //SMTP username
    $mail->Password   = 'ySqd5U02Rmk93PAV'; //SMTP password



    $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
    $mail->charset = "UTF-8"; 
    $mail->setFrom($email);
    $mail->addAddress('ceeyliin1@gmail.com', 'Ceylin Un'); 


    if(isset($_FILES['attachment']['name'])){
    $mail->addAttachment($_FILES['attachment']['tmp_name'],$_FILES['attachment']['name']);
  }


  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Formunuzu aldik, ' . $email;
  $mail->Body    =  $subject;

  $mail->send();
    echo 'Mesajınız Gönderilmiştir';
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>