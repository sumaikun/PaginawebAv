<?php

//return print_r($_POST);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'angelv.ingenieria@gmail.com';                 // SMTP username
$mail->Password = 'avingsophia17';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('avingenieria@avingenieria.com', 'Notificacion');
$mail->addAddress('ventas.javc@gmail.com', 'Pagina web');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('angelv.ingenieria@gmail.com', 'Pagina web');
$mail->addCC('angelv.ingenieria@gmail.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['name'].' con el correo electronico '.$_POST['email'].' y numero '.$_POST['phone'].' te ha mandado un mensaje por medio de la pagina web:';
$mail->Body    = $mail->Body.'<br>'.$_POST['message'];
$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
$variable1 = 'enviado';
header("Location: contact.html?fieldname1=$variable1");
exit;

