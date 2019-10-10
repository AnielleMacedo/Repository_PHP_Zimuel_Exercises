<?php 


//OBS pra pode enviar emails vc deve habilitar no seu gmail a opcao: permitr apps menos seguros senao n funciona: https://support.google.com/accounts/answer/6010255?hl=es

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require_once("vendor/autoload.php");
//https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/examples/gmail.phps

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Cria uma nova instancia/objeto do PHPMailer
$mail = new PHPMailer;

//prepara o PHPMailer p enviar o email
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = 2;

$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail pode ser 1 alias
$mail->Username = "macedog.anielle@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "mara06061988";

//Set who the message is to be sent from
$mail->setFrom('macedog.anielle@gmail.com', 'Anielle Macedo');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('gabriele.armi@gmail.com', 'Gabriele Armitano');

//subject èe o assunto do emial
$mail->Subject = 'Testando o envio de email com PHPMailer';

//Read an HTML message body from an external file, convert referenced images to embedded,
//aki vc deve criar 1 file chamado contents e escrever nele o conteudo do seu email
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//corpo de email alternativo emm caso de n suportar o html, logo vc insere um texto em caso do html n funcionar
$mail->AltBody = 'This is a plain-text message body';

//se quiser enviar imagens
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
/*function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}*/



 ?>