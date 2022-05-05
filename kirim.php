<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';

if (isset($_POST['registrasi'])) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];


    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'chikal.m21@gmail.com';                     //SMTP username
    $mail->Password   = 'Ch!k4lbo';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('chikal.m21@gmail.com', 'Registrasi');
    $mail->addAddress($email, $username);     //Add a recipient

    $mail->addReplyTo('chikal.m21@gmail.com', 'Registrasi');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Registrasi account Tubirit';
    $mail->Body    = 'halo,'.$username.'selamat akun anda telah berhasil didaftarkan pada website kami';
   
    if ($mail->send()) {    
    echo 'Message has been sent';
    }else {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";    
    }
}else{
    echo "tekan tombolnya terlebih dahulu";
}