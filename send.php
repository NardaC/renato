<?php
function send_email($from, $to, $subject, $message_html, $message_txt = '') {
        
    $email = $to;
    				
    //create a boundary for the email. This 
    $boundary = uniqid('np');
    				
    //headers - specify your from email address and name here
    //and specify the boundary for the email
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from \r\n";
    $headers .= "To: $email\r\n";
    //'Reply-To: ' . $from,
    //'Return-Path: ' . $from,
    $headers .= 'Date: ' . date('r', $_SERVER['REQUEST_TIME'])."\r\n";
    $headers .= 'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME'].$subject) . '@' . $_SERVER['SERVER_NAME'] . '>'."\r\n";
    $headers .= 'X-Mailer: PHP v' . phpversion()."\r\n";
    $headers .= 'X-Originating-IP: ' . $_SERVER['SERVER_ADDR']."\r\n";
    
    $headers .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";
    
    //here is the content body
    $message = "This is a MIME encoded message.";
    
    //Plain text body
    $message .= "\r\n\r\n--" . $boundary . "\r\n";
    $message .= "Content-type: text/plain;charset=iso-8859-1\r\n\r\n";
    
    if ( $message_txt == '' ) {
    	$message_txt = nl2br( $message_html );
    	$message_txt = strip_tags( $message_txt );
    }
    $message .= $message_txt;
    //Html body
    $message .= "\r\n\r\n--" . $boundary . "\r\n";
    $message .= "Content-type: text/html;charset=uiso-8859-1\r\n\r\n";
    $message .= $message_html;
    
    $message .= "\r\n\r\n--" . $boundary . "--";
    
    //invoke the PHP mail function
    mail('', $subject, $message, $headers);

}





if ( ! isset($_POST['email']) ) {
	exit;
}

// Construimos el mensaje
$to= 'contacto@mafrox.com';
$reply1 = 'no-responder@mafrox.com';
$reply2 = 'contactanos@mafrox.com';
$user_email = $_POST['email'];
$subject1 = 'Web Mafrox'.$_POST['subject'];
$subject2 = 'Contáctanos-Mafrox'.$_POST['subject'];


$message1 = '<div><p>Pronto nos estaremos contactando con usted<p><table><tr><td>Nombre: </td><td>'.$_POST['name'].'</td></tr><br><tr><td>Email: </td><td>'.$_POST['email'].'</td></tr><br><tr><td>Mensaje: </td><td>'.$_POST['message'].'</td></tr><br></table></div>';

$message2 = '<div><p>Hay una persona que quiere contactarse con usted<p><table><tr><td>Nombre: </td><td>'.$_POST['name'].'</td></tr><br><tr><td>Email: </td><td>'.$_POST['email'].'</td></tr><br><tr><td>Mensaje: </td><td>'.$_POST['message'].'</td></tr><br></table></div>';

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/fabicon_mafrox.png" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Mensaje de confirmación</title>
</head>
<body style="background: #1b1b1a">
   <div style="    
   margin-top:9rem;
   display: flex;
   flex-direction: column;
   text-align: center;
   justify-content: center;">  
   <img style="margin:auto; width: 30%; height : auto" src="assets/img/logo-mafrox.svg" alt="">
	<p style="text-align:center;font-size:1rem; padding: 1rem; text-transform: uppercase; font-weight: 600">Gracias por contactarte con nosotros, <br>revisaremos su solicitud y le estaremos respondiendo a la mayor brevedad posible.</p>
    <a href="index.html" style="font-size: 1rem;
    background-color: #12b870;
    width: 23%;
    margin: 0 auto;
    border-radius: 7px;
    padding: .2em;">Regresar a página principal</a>
	</div>
</body>
</html>';


send_email($reply1, $user_email, $subject1, $message1);
send_email($reply2, $to, $subject2, $message2);



?>