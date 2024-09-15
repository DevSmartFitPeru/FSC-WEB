<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$contenido = "DE: ".$nombre."\n";
$contenido .= "EMAIL: ".$email."\n";
$contenido .= "MENSAJE: ".$mensaje;

$cuerpo=utf8_decode($contenido);

$emailLab = 'lab@grupofoodsolutions.onmicrosoft.com';
$emailSistemas = 'sistemas@grupofoodsolutions.onmicrosoft.com';

if (!empty($nombre)&&!empty($email)&&!empty($mensaje)) {

    $send = mail($emailLab.','.$emailSistemas,'CONTACTO DESDE LA WEB FSC',$cuerpo);
    if ($send) {
         $data['response']="ok";
    } else {
         $data['response']="fail";
    }
    
} else {
    
    $data['response']="error";

}
echo json_encode($data);
?>