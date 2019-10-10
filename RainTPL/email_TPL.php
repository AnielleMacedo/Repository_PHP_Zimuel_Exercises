<?php 


require_once("vendor/autoload.php");


// namespace
use Rain\Tpl;

// na config ele diz q precisa de uma pasta chamada templates/tpl e outra chamada cache entao criamos
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
   
);


Tpl::configure( $config );

// INSTANCIO O OBJETO e ele sabe onde esta pq usamos o namespace acima
$tpl = new Tpl;


// assegno a variable e chamo elas no index.html
$tpl->assign( "name", "Lucas Armitano" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// chamo o template atraves do metodo draw, e aki ele precisa do nome do nosso arquivo
$html= $tpl->draw( "index", true); //n precisa botar extensao html


//provandoo enviar email con raintpl
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
$mail->SMTPSecure = 'tls';

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
$mail->addAddress('anielelovely18@hotmail.com', 'Anita');

//subject èe o assunto do emial
$mail->Subject = 'Testando o envio de email com PHPMailer';

//Read an HTML message body from an external file, convert referenced images to embedded,
//aki vc deve criar 1 file chamado contents e escrever nele o conteudo do seu email
$mail->msgHTML($html);

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

 ?>