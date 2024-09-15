<?php
$db = new mysqli('localhost', 'fscerti_usuarioweb', 'chYnIQ0lzA&s', 'fscerti_sitioweb');
if ($db->connect_errno != null) {
   echo "Error número $db->connect_errno conectando a la base de datos.<br>Mensaje: $db->connect_error.";
   exit();
}
$pass_real="#4dmin#";
/*
$resultado = $db->query('SELECT * FROM libro_reclamaciones');
$personas = $resultado->fetch_array(MYSQLI_BOTH);
while ($personas != null){
    echo $personas['id']." / ".$personas['dni'];
    $personas = $resultado->fetch_array(MYSQLI_BOTH);
}
$resultado->free();*/
?>