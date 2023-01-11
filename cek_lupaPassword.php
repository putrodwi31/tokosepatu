<?php

include 'koneksi.php';

if (isset($_POST['reset'])) {
    $email = $_POST['email'];
} else {
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
session_start();
try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'leonscatter076@gmail.com';                     // SMTP username
    $mail->Password   = 'dfzsnewvgydhlnyv';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('leonscatter076@gmail.com', 'Admin');
    $mail->addAddress($email);     // Add a recipient

    $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'), 0, 10);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http://localhost:8080/tokosepatu/ganti_password.php?code=' . $code . '">here </a>. </br>Reset your password in a day.';


    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }

    $verifyQuery = $conn->query("SELECT * FROM user WHERE email = '$email'");
    $timestamp = date("Y-m-d H:i:s");

    if ($verifyQuery->num_rows) {
        $codeQuery = $conn->query("UPDATE user SET code = '$code', updated_at = '$timestamp' WHERE email = '$email'");

        $mail->send();
        $_SESSION['flash_message'] = "<script>toastr['success']('Link reset password berhasil dikirim ke email anda', 'Berhasil')</script>";
        header("location:lupa_password");
    } else {
        $_SESSION['flash_message'] = "<script>toastr['error']('Email anda tidak terdaftar', 'Berhasil')</script>";
        header("location:lupa_password");
    }
    $conn->close();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
