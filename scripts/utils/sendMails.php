<?PHP

require ''.dirname(__FILE__).'/../../PHPMailer/class.phpmailer.php';

$server  = "godaddy";
$asunto = "New User!";
$body = "You have a new user from Mowisatinvest.mx";
$mailQueRecibe = "manlioelnum1@hotmail.com";
$from    = "hi@mowisatinvest.com";                             // mail que verá el receptor
$nombreQueEnvia  = "Mowisat";



$mailDes = $mailQueRecibe;                                // Mail Destino(a mandar)
$email   = $mailQueRecibe;                             // mail del cliente no se manda a el
$date = date("D, d M Y H:i:s -0000");

$headers = 'From: "'.$nombreQueEnvia.'" <'.$mailDes.'>
Return-Path: '.$mailDes.'
Date: '.$date.'
X-Mailer: SMF
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary="SMF-fd3a2ff78aeec0baba4bc352c33ca57f"
Content-Transfer-Encoding: 7bit';

$body=utf8_decode($body);
$bodyHTML= $body;

$mail = new PHPMailer;
$mail->IsSMTP();        
                                // Set mailer to use SMTP
if($server=="bluehost"){                              
  $mail->Host = 'box894.bluehost.com';                  // Specify main and backup server
  $mail->Port = 465;                                    // Set the SMTP port
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'soporte@boogapp.com';              // SMTP username
  $mail->Password = 'boogapp.com';                      // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
} else if($server=="mailchimp"){
  $mail->Host = 'smtp.mandrillapp.com'; 
  $mail->Mailer = "smtp";                               // Server remoto al que nos conectarémos
  $mail->Port = 587;                                    // Puerto SMTP
  $mail->SMTPAuth = true;                               // Autenticación SMTP
  $mail->Username = 'manlioelnum1@hotmail.com';         // Usuario
  $mail->Password = 'rh2MdhYLZFpIphC5bMl-Ew';           // Password OJO! Es confidencial
} else if($server=="godaddy"){                              
    $mail->Host = 'p3plcpnl0773.prod.phx3.secureserver.net';                  // Specify main and backup server
    //$mail->Host = 'mail.mowisatinvest.mx';
    $mail->Port = 465;                                                       // Set the SMTP port
    $mail->SMTPAuth = true;                                                  // Enable SMTP authentication
    $mail->Username = 'hi@mowisatinvest.mx';                                // SMTP username
    $mail->Password = 'HYCddfrek84389';                                       // SMTP password
    $mail->SMTPSecure = 'ssl';                                              // Enable encryption, 'ssl' also accepted
  } 
$mail->From = $from;
$mail->FromName = $nombreQueEnvia;
$mail->addAddress($mailDes, $nombreQueEnvia);
$mail->AddBCC('manlioelnum1@hotmail.com');                          // Agregar Destinatario
// mail->AddAttachment("Sismo_".date("dmY").".pdf");    // Para que pongas el attachment
$mail->IsHTML(true);                                                                                                 // Formato HTML
$mail->Subject = ''.$asunto.'';
$mail->Body    = $bodyHTML;
$mail->AltBody = $bodyHTML;


if($mail->Send()){

} else { 
  echo 'Error: '.$mail->ErrorInfo.' '.$mail->Host.''; 
}
//$mail->ClearAllRecipients();                       //Limpiar Destinatarios para nuevo Desti..
    


?>