<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mailer {
    var $mail;
    function __construct() {
        
        $this->mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host ='mail.onikom.com.mx';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = "jmarinos@onikom.com.mx";// SMTP username
        $this->mail->Password = '3420949';                           // SMTP password
        $this->mail->SMTPSecure ='tls'; //'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                 // TCP port to connect to
        $this->mail->CharSet = 'UTF-8';
        $this->mail->setFrom('contacto@eligetubelleza.mx', 'Elige tu Belleza');
    }
    

}

?>