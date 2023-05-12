<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aparnamailer@gmail.com';
    $mail->Password = 'bwkqnhendyjiexee';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('aparnamailer@gmail.com');
    $mail->addAddress('anilbalanja@gmail.com');
    $mail->isHTML(true);


    $mail->Subject = "Email From Website";
    $emailContents = "Name :- " . $_POST['username'] . "<br>" . "Email Address :- " . $_POST['email'] . "<br>" . "Contact Number :- " . $_POST['number'] . "<br>" . "Message :- " . $_POST['message'];
    $mail->Body = $emailContents;
    // $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Email Sent Successfully');
    document.location.href = 'index.html';
    </script>
    ";
}
?>