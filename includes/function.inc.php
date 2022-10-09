<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require __DIR__.'/../vendor/autoload.php';

// Sendmail
function sendMail($to, $subject, $html){
    $mail = new PHPMailer;
    try {
        //Server settings
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

        // $mail->SMTPDebug = 2;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.eu-indiaconsulting.com';                     //Set the SMTP server to send through
        $mail->Port       = 587;      
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@eu-indiaconsulting.com';                     //SMTP username
        $mail->Password   = 'eu-linda2022@';                               //SMTP password
        
        //Recipients
        $mail->setFrom('info@eu-indiaconsulting.com', 'EU-India Consulting');
        $addresses = explode(',', $to);
        foreach ($addresses as $address) {
            $mail->AddAddress($address);
        }
        $mail->addReplyTo('info@eu-indiaconsulting.com', 'EU-India Consulting');

        //Content
        $mail->Subject = $subject;
        $mail->msgHTML($html);

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>