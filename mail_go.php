<?php
require_once('class.phpmailer.php');
//Variáveis
 
$nome = $_GET['nome'];
$email = $_GET['email'];
var_dump($email);

include('libs/phpqrcode/qrlib.php');

    $conteudo = $email;
    QRcode::png($conteudo, "images/QR_Code.png", QR_ECLEVEL_L , 4);

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'xxxxxxxxx';                 // SMTP username
    $mail->Password = 'xxxxxxx';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('rairangelos@gmail.com', 'Mailer');
    $mail->addAddress($email, $nome);     // Add a recipient
    $mail->addAddress($email);           // Name is optional
    //var_dump($mail->addAddress($nome));
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('images/QR_Code.png', $nome.'.jpg');    // Optional name

    //Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Seu QR Code';
    $mail->Body    = $nome.', seu QR Code está anexado nesse e-mail!';
    $mail->AltBody = 'Seu QR Code';

    $mail->send();
    header("location: views/consultar.php?enviado=ok");;
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>