<?php
//Load composer's autoloader
if(isset($_POST['submit'])){
require_once('../php/PHPMailerAutoload.php'); 

$mail = new PHPMailer(true); 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;// TCP port to connect to
$mail->CharSet = 'UTF-8';
$mail->Username ='paginaleconcasse@gmail.com'; //Email para enviar
$mail->Password = 'academialeconcasse1'; //Su password
//Agregar destinatario
$mail->setFrom('paginaleconcasse@gmail.com', 'Mi nombre');
$mail->AddAddress('leconcasse@gmail.com');//A quien mandar email
$mensaje = $_POST['mensaje-c'];
$email = $_POST['email-c'];
$mail->SMTPKeepAlive = true;  
$mail->Mailer = "smtp"; 


    //Content
$mail->isHTML(true); // Set email format to HTML

$mail->Subject = 'Nuevo Mensaje';
$mail->Body    = "<html> 
<body> 

<h1>Nuevo mensaje, Sección de contacto </h1>

<p>Informacion enviada por el usuario: </p>

<p>Email: {$email}</p>

<p>Mensaje Completo: {$mensaje}</p>
</body> 

</html>

<br/>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($mail->send()){
echo "<script>alert('Mensaje Enviado');window.location.href='../index.php'</script>";
} else {
  echo "<script>alert('Hubo Un error, Porfavor intente nuevamente');window.location.href='../index.php'</script>";
}
}