<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$contenido = "DE: ".$nombre."\n";
$contenido .= "EMAIL: ".$email."\n";
$contenido .= "MENSAJE: ".$mensaje;

$cuerpo=utf8_decode($contenido);

if (!empty($nombre)&&!empty($email)&&!empty($mensaje)) {
    mail('sistemas@grupofs.com,lab@fscertificaciones.com,
    fsc@fscertificaciones.com','CONTACTO DESDE LA WEB FSC',$cuerpo);

    $data['response']="ok";

    return json_encode($data);
} else {
    
    return null;
}
