<?php
//incluimos phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/POP3.php';
//variables de formulario anterior
$primer_nombre = $_POST['primer_nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$numero_telefonico = $_POST['numero_telefonico'];
$numero_celular = $_POST['numero_celular'];

//fin variables de formulario anterior

if(isset($_POST['submit'])) {
 $emailAddress = 'jcollipal1212@gmail.com';
 require "class.phpmailer.php";
$msg = 'primer_nombre:'.$_POST['`primer_nombre'].'<br /> apellidos:'.$_POST['apellidos'].'<br /> Email:'.$_POST['email'].'<br />'.'<br /> Email:'.$_POST['numero_telefonico'].'<br />'.'<br /> Email:'.$_POST['numero_celular'].'<br />';
move_uploaded_file($_FILES["archivo_adjunto"]["tmp_name"], $_FILES["archivo_adjunto"]["name"]);
  $mail = new PHPMailer();
  $mail->IsMail();

  $mail->AddReplyTo($$_POST['email'], $_POST['name']);
  $mail->AddAddress($emailAddress);
  $mail->SetFrom($$_POST['email'], $_POST['name']);
  $mail->Subject = "Mi Curriculum";
  $mail->MsgHTML($msg);
  $mail->AddAttachment( $_FILES["archivo_adjunto"]["name"]);
  $mail->Send();

 // echo'<script> window.location="../gracias.php"; </script> ';
}
?>