<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$contenido = "DE: ".$nombre."\n";
$contenido .= "EMAIL: ".$email."\n";
$contenido .= "MENSAJE: ".$mensaje;


if (!empty($nombre)&&!empty($email)&&!empty($mensaje)) {
    mail('sistemas@grupofs.com','CONTACTO DESDE LA WEB',$contenido);

    $data['response']="ok";

    return json_encode($data);
} else {
    
    return null;
}
