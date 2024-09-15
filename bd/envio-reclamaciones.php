<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
<?php
include("./magia.php");

$nombre = $_POST['nombre'];
$domicilio = $_POST['domicilio'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$tipo_bien = $_POST['tipo_bien'];
$monto = $_POST['monto'];
$descripcion = $_POST['descripcion'];
$tipo_reclamo = $_POST['tipo_reclamo'];
$detalle = $_POST['detalle'];
$pedido = $_POST['pedido'];

$token=bin2hex(openssl_random_pseudo_bytes(16));

$producto = 0;
$servicio = 0;
if($_POST["tipo_bien"]=="producto"){
    $producto = 1;
}else{
    $servicio = 1;    
}

$contenido_menor='';
$menor = '';
$nombre_padre = '';
$domicilio_padre = '';
$dni_padre = '';
$telefono_padre = '';
$email_padre = '';

if(isset($_POST["menor"])){
    $menor = $_POST['menor'];
    $nombre_padre = $_POST['nombre_padre'];
    $domicilio_padre = $_POST['domicilio_padre'];
    $dni_padre = $_POST['dni_padre'];
    $telefono_padre = $_POST['telefono_padre'];
    $email_padre = $_POST['email_padre'];
    
    $contenido_menor='
    Nombre padre: '.$nombre_padre.'
    Domicilio padre: '.$domicilio_padre.'
    DNI padre: '.$dni_padre.'
    Telefono padre: '.$telefono_padre.'
    Email padre: '.$email_padre.'
    ';
}


$contenido='
Nombre: '.$nombre.'
Domicilio: '.$domicilio.'
DNI: '.$dni.'
Telefono: '.$telefono.'
Email: '.$email.'
Tipo_bien: '.$tipo_bien.'
Monto: '.$monto.'
Descripcion: '.$descripcion.'
Tipo_reclamo: '.$tipo_reclamo.'
Detalle: '.$detalle.'
Pedido: '.$pedido.'
'.$contenido_menor;

$emailContacto = 'fsc@fscertificaciones.com';
$emailSistemas = 'hramirez@grupofs.com';

//$emailContacto = 'viceducc@gmail.com';
//$emailSistemas = 'educollantescarrasco@gmail.com';

if (!empty($nombre)&&!empty($email)&&!empty($dni)) {
    //Registramos en BD
    $sql = "INSERT INTO libro_reclamaciones (
nombre,
domicilio,
dni,
telefono,
email,
tipo_bien,
producto,
servicio,
monto,
descripcion,
tipo_reclamo,
detalle,
pedido,
menor,
nombre_padre,
domicilio_padre,
dni_padre,
telefono_padre,
email_padre,
token
) VALUES (
'".$nombre."',
'".$domicilio."',
'".$dni."',
'".$telefono."',
'".$email."',
'".$tipo_bien."',
'".$producto."',
'".$servicio."',
'".$monto."',
'".$descripcion."',
'".$tipo_reclamo."',
'".$detalle."',
'".$pedido."',
'".$menor."',
'".$nombre_padre."',
'".$domicilio_padre."',
'".$dni_padre."',
'".$telefono_padre."',
'".$email_padre."',
'".$token."'
)";
    if ($db->query($sql) === TRUE) {
        
        $numero = $db->insert_id;
        $numeroConCeros = str_pad($numero, 5, "0", STR_PAD_LEFT);

        //Enviamos los datos por correo
        $send = mail($emailContacto.','.$emailSistemas,'FSCERTIFICACIONES.COM - LIBRO DE RECLAMACIONES VIRTUAL N°'.$numeroConCeros, $contenido);
        //   if ($send) {
        //         $data['response']="ok";
        //   } else {
        //         $data['response']="fail";
        //   }

        header("Location: https://fscertificaciones.com/libro-registrado.php?num=".$numeroConCeros);
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} 
//else {
//     $data['response']="error";
   
// }
 //echo json_encode($data);