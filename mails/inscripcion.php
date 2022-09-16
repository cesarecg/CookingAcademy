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

//Recipiente (s)
$mail->setFrom("paginaleconcasse@gmail.com");
$mail->AddAddress("leconcasse@gmail.com");

$name = $_POST["name-i"];
$email = $_POST["email-i"];
$phone = $_POST["phone-i"];
$cedula = $_POST["cedula-i"];
$curso = $_POST["curso-i"];
$fecha = $_POST["fecha-i"];
if($_POST['turno-i'] == "Mañana"){
  $turno = "Mañana";
} elseif($_POST['turno-i'] == "Tarde"){
  $turno = "Tarde";
} else {
  $turno = "No especificado";
}


//Contenido 
$mail->IsHTML(true);
$mail->CharSet = "utf-8";
$mail->Subject = "Nuevo Estudiante";
$mail->Body = "<html> 
<body> 

<h1>Nuevo mensaje,Formulario de Inscripciones </h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>Nombre: {$name}</p>

<p>Correo: {$email}</p>

<p>Curso que le interesa: {$curso}</p>

<p>Whatsapp/Celular: {$phone}</p>

<p>Número de Cédula: {$cedula}</p>

<p>fecha de nacimiento: {$fecha}</p>

<p>Turno del curso: {$turno}</p>



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
} else {
  echo "<script>alert('Hubo Un error, Porfavor intente nuevamente');window.location.href='../index.php'</script>";
}
}
?>