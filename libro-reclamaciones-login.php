<?php session_start();
include_once 'libro-header.php';
include_once 'bd/magia.php';

if(isset($_GET["cerrar_sesion"])){
    if(($_GET["cerrar_sesion"]=="true")){
        unset($_SESSION['logged_usuario']);

    }
}

$password = $_GET['password'];
$contenido='<div class="col-md-12 text-center" style="border: 2px solid black;padding:50px;max-width:480px;margin:auto">
<form method="post" class="form-horizontal" action="">
    <h3>Ingresar</h3>
    <br>
    <input name="contraseña" type="password"  class="form-control input-sm as_required">
    <br>
    <input type="submit" name="envio" class="btn btn-primary" value="Ingrese">
</form></div>';



if( (isset($_SESSION['logged_usuario']) ) || (isset($_POST["envio"]) && isset($_POST["contraseña"])) ){
    
    if ($_SESSION['logged_usuario']==$pass_real || ($_POST["contraseña"] == $pass_real)){
        $_SESSION['logged_usuario'] = $pass_real;
        
        $contenido='<div class="col-md-12 text-center"><a href="?cerrar_sesion=true"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></div>';
        
        $contenido.= '<div class="col-md-12 text-center" style="border: 2px solid black;padding:50px;max-width:820px;margin:auto">
          <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Estado</th>
                    <th></th>                
                </tr>
            </thead>
            <tbody>';
            $resultado = $db->query('SELECT * FROM libro_reclamaciones');
            $personas = $resultado->fetch_array(MYSQLI_BOTH);
            
            while ($personas != null){
                $estado_libro="Pendiente";
                if(isset($personas['respuesta']) && trim($personas['respuesta'])!=""){
                    $estado_libro="Atendido";
                }
                $contenido.= '<tr>
                    <td>'.$personas['id'].'</td>
                    <td>'.$personas['nombre'].'</td>
                    <td>'.$personas['dni'].'</td>
                    <td>'.$personas['telefono'].'</td>
                    <td>'.$estado_libro.'</td>
                    <td><a href="libro-reclamaciones-detalle-admin.php?tk='.$personas['token'].'" target="_blank">Ver Detalle</a></td>
                    <td></td>
                </tr>';
                $personas = $resultado->fetch_array(MYSQLI_BOTH);
            }
            $resultado->free();
                            
                $contenido.='
            </tbody>
          </table></div>
          ';
    }else{
      echo "<script>alert('Usuario o contraseña incorrectos!');</script>";
    }
}

?>
    <br><br>
    <style>
    .btn-libro, .btn-libro:hover{padding:5px 10px !important;color:#fff !important;background:#333 !important;line-height:auto !important;}
    .section-testi{height: auto !important;
    min-height: auto !important;
    margin-bottom: 30px;
    </style>
    <section class="contact-section sec-pad testimonial-section-service ContactoFSclass lazy section-testi">
      <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-bottom: 20px">
                    <h1>Libro de Reclamaciones Virtual</h1>
                    
                </div>
                
                    <?php echo $contenido; ?>
                
                
            </div>
        </div>
    </section>

<?php include_once 'libro-footer.php'; ?>