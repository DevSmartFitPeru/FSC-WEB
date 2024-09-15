<?php
include("./magia.php");

if(isset($_POST["responder"])){
    
}
$id_libro = $_POST['id_libro'];
$nombre = $_POST['nombre_cliente'];
$email = $_POST['email_cliente'];
$respuesta = $_POST['respuesta'];

$numero = $id_libro;
$numeroConCeros = str_pad($numero, 5, "0", STR_PAD_LEFT);

$contenido='
Acabamos de atender su queja o reclamo N° '.$numeroConCeros.'

Nombre: '.$nombre.'
Email: '.$email.'
Respuesta de la empresa: '.$respuesta;

$emailContacto = 'fsc@fscertificaciones.com';
$emailSistemas = 'hramirez@grupofs.com,'.$email;

//$emailContacto = 'viceducc@gmail.com';
//$emailSistemas = 'educollantescarrasco@gmail.com';

if (!empty($nombre)&&!empty($email)&&!empty($respuesta)) {
    //Registramos en BD
    $fecha = new DateTime();
    $sql = "UPDATE libro_reclamaciones SET respuesta = '".$respuesta."', respuesta_fecha='".$fecha->format("Y-m-d H:i:s")."' WHERE id=".$id_libro;

    if ($db->query($sql) === TRUE) {
        
        

        //Enviamos los datos por correo
        $send = mail($emailContacto.','.$emailSistemas,'FSCERTIFICACIONES.COM - LIBRO DE RECLAMACIONES VIRTUAL N°'.$numeroConCeros, $contenido);

        //header("Location: https://fscertificaciones.com/libro-registrado.php?num=".$numeroConCeros);
        header("Location: https://fscertificaciones.com/libro-reclamaciones-login.php");
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} 
