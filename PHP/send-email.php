<?php

$name = $_POST["name"];
$name = $_POST["email"];
$name = $_POST["subject"];
$name = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-mail.outlook.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "poppyandlewis2025@outlook.com";
$mail->Password = "jemmiW-contig-zojju6";

$mail->setFrom($email, $name);
$mail->addAddress("poppyandlewis2025@outlook.com", "Poppy and Lewis 2025");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";