<?php

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

$path = '../uploads' . $_FILES["resume"]["name"];
 move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
 $mail->IsSMTP();
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = 'tls';
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = 587;// TCP port to connect to
 $mail->CharSet = 'UTF-8';
 $mail->Username ='paginaleconcasse@gmail.com'; //Email para enviar
 $mail->Password = 'academialeconcasse1'; //Su password
 $mail->AddAttachment($path);
 //Agregar destinatario
 $mail->setFrom('paginaleconcasse@gmail.com', 'Mi nombre');
 $mail->AddAddress('leconcasse@gmail.com');//A quien mandar email
 $mail->SMTPKeepAlive = true;  
 $mail->Mailer = "smtp"; 


$name = $_POST['name'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$area = $_POST['area'];

//Contenido 
$mail->IsHTML(true);
$mail->CharSet = "utf-8";
$mail->Subject = "Nuevo Mensaje Reclutamiento";
$mail->Body = "<html> 
<body> 

<h1>Nuevo mensaje,Formulario de reclutamiento </h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>Nombre: {$name}</p>

<p>Correo: {$email}</p>

<p>Whatsapp/Célular: {$telefono}</p>

<p>Fecha de Nacimiento: {$fecha}</p>

<p>Área de Experiencia: {$area}</p>

</body> 

</html>

<br/>";
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )

);
$mail->AltBody = $telefono;

if($mail->send()){
echo "<script>alert('Mensaje Enviado');window.location.href='../index.php'</script>";
unlink($path);
} else {
  echo "<script>alert('Hubo Un error, Porfavor intente nuevamente');window.location.href='../index.php'</script>";
}
}
?>