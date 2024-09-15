<?php
$encontrado=0;
if(isset($_POST["dni"]) && isset($_POST["numero"])){

    include_once "./bd/magia.php";

    $dni_buscar=(int)$_POST["dni"];
    $numero_buscar=(int)$_POST["numero"];
    
    $resultado = $db->query('SELECT * FROM libro_reclamaciones WHERE dni="'.$dni_buscar.'" AND id="'.$numero_buscar.'" LIMIT 1');
    $personas = $resultado->fetch_array(MYSQLI_BOTH);
    while ($personas != null){
        $token = $personas['token'];
        $encontrado=1;
        
        //echo $personas['id']." / ".$personas['telefono'];
        //echo "Redireccionar a la web de token: ".$personas['token'];
        header('Location: ./libro-reclamaciones-detalle.php?tk='.$personas['token']);

        $personas = $resultado->fetch_array(MYSQLI_BOTH);
        exit();
    }
    $resultado->free();
}

if($encontrado==0){

?>


<?php include_once 'libro-header.php'; ?>
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
                <div class="col-md-12 text-center" style="border: 2px solid black;padding:50px;max-width:480px;margin:auto">
                    Lo sentimos el reclamo no fue encontrado, verifique bien sus datos y vuelva a intentarlo.<br>
                    <a href="./libro-reclamaciones-consultar.php">Volver</a>
                </div>
                
            </div>
        </div>
    </section>

<?php include_once 'libro-footer.php'; ?>


<?php
}
?>