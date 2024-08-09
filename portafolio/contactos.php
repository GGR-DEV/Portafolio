<?php
    $destinario = "gonzagrolon@gmail.com";
    $nombre = $_POST ['name'];
    $mail = $_POST ['email'];
    $asunto = $_POST ['asunto'];
    $mensaje = $_POST ['mensaje'];

    $header = "Enviado desde GGR";
    $mensajecompleto = "$mensaje" . \nAtentamente: " . $nombre";

    mail($destinario, $asunto, $mensajecompleto, $header);
    echo "<script> alert ('correo enviado') </script>";
?>