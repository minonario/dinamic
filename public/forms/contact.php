<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = '1mail.bcpexperts.net';                 //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //$mail->AuthType = 'LOGIN';
    $mail->Username   = 'notificaciones@dinamic.tech';          //SMTP username
    $mail->Password   = '606melon';                             //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contacto@dinamic.tech', 'Dinamic Mailer');
//    $mail->addAddress($_POST['email']);     //Add a recipient
    $mail->addAddress('contacto@dinamic.tech');     //Add a recipient
    //$mail->addAddress('hugospock@gmail.com');                   //Name is optional
    $mail->addReplyTo($_POST['email']);
    $mail->addCC('ricardo@navazambrano.com');
    //$mail->addCC('hugo480@gmail.com');
    //$mail->addBCC('bcc@example.com');
    $correoemisor=$_POST['email'];
    $mensaje=$_POST['mensaje'] . "<br><br>Enviado por: <b>" . $_POST['name'] . "</b> " . $correoemisor . "<br><br>";
    //Attachments
    //$mail->addAttachment('/home/udpos/ssl.cert');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['asunto'];
    $mail->Body    = $mensaje; //is is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "OK";
    //echo 'Message has been sent ' . $_POST['email'];
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


if ($_POST['g-recaptcha-response'] == '') {
    echo "Captcha invalido";
    } else {
    $obj = new stdClass();
    $obj->secret = "6LfRSNISAAAAACKaHw2e-JvgeG-3src_dRGpL-Ql";
    $obj->response = $_POST['g-recaptcha-response'];
    $obj->remoteip = $_SERVER['REMOTE_ADDR'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    $options = array(
    'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    'method' => 'POST',
    'content' => http_build_query($obj)
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    $validar = json_decode($result);
    
    /* FIN DE CAPTCHA */