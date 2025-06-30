<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';
// Verifica si el formulario fue enviado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? '';
    $email = $_POST["email"] ?? '';
    $mensaje = $_POST["mensaje"] ?? '';

    $mail = new PHPMailer(true);

    try {
        // Config SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tania.agudelomurillo@gmail.com';  // TU CORREO GMAIL
        $mail->Password = 'cjle hqvb bovn cllw';          // TU CONTRASEÑA O APP PASSWORD
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Remitente y destinatario
        $mail->setFrom('tania.agudelomurillo@gmail.com', 'Tu Nombre');
        $mail->addAddress('tania.agudelomurillo@gmail.com');

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = 'Mensaje de formulario Coca Cola';
        $mail->Body    = "Nombre: $nombre <br>Email: $email <br>Mensaje: $mensaje";

        $mail->send();
        echo "<script>alert('Gracias, tu mensaje fue enviado correctamente'); window.location='index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Error al enviar el mensaje.'); window.location='index.php';</script>";
    }
}
?>
