<?php session_start();
include_once 'bd/magia.php'; 

if(!isset($_SESSION['logged_usuario']) && $_SESSION['logged_usuario']!=$pass_real ){
    exit();
}

$resultado = $db->query('SELECT * FROM libro_reclamaciones WHERE token="'.$_GET["tk"].'" LIMIT 1');
$personas = $resultado->fetch_array(MYSQLI_BOTH);
$token = $personas['token'];
$encontrado=1;
$resultado->free();
?>
<!DOCTYPE html>
<html lang="es-PE">
<head>
        <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css?v=2">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="stylesheet" href="css/miEstilo.css">
    <link rel="stylesheet" href="css/icons/all.css">

    <!-- whatsapp -->
    <link rel="stylesheet" href="./css/wsp.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/wsp2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
    .carrusel-laboratorio .owl-nav, .carrusel-organismo .owl-nav{display:none}
    .carrusel-laboratorio, .carrusel-organismo{margin-top:25px}
    
    .main-menu.style3 .navigation > li.active > a {
        background-color: #e9212e;
        color: white;
    }
    
    .boxed_wrapper section{min-height:calc(100vh - 50px);}
    .owl-carousel .owl-item >div {
        border: 0;
        vertical-align: middle;
    }
    .owl-carousel .owl-item >div>div {
        height: 140px;
        min-height: 140px;
        max-height: 140px;
        background: #fff;
        border: 1px solid #eee;
        display: table-cell;
        vertical-align: middle;
    }
    .owl-carousel .owl-item img {
        display: table-cell;
        width: 100%;
        alignment-baseline: middle;
        position: relative;
        max-height:140px;
    }
    .cursiva{font-style: italic !important;}
    </style>
    
    <style>
      .serv_titulo div {
        /* top: 10%;
        left: 10%;
        transform: translate(-10%, -10%); */
        padding: 0;
        position: relative;
        font-size: 18px;
        height: 100%;
        display: contents;    line-height: 20px;
      }
      .serv_titulo {
          position: relative;
          vertical-align: middle;
      }
      .serv_titulo {
        padding: 10px;
      }
      .testimonial-section .testimonial-content .text {
        font-size: 18px;
    }
    .carrusel-clientes .clientelogo {max-width: 220px;background:#fff; padding:15px; height: 100px; text-align:center;vertical-align: middle;
    display: flex;}
    .clientelogo img{max-height: 100%; width:auto;max-width: 90%;margin:auto}
    
    .clientelogo{margin:7px 0px;}
    
    
    #asForm .form-libro div, #asForm .form-libro label, #asForm2 .form-libro div, #asForm2 .form-libro label {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
    #asForm .clearfix, #asForm2 .clearfix {
        width: 100%;
        display: block;
    }
    
    @media print {
    .container {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
    }

    .as_btn_save {
        display: none;
    }
    .select2, #tienda, .select2-selection{width:100% !important;}
    h1{font-size:30px}
    button, .as_btn_print{display:none !important;}
}
    
/*.boxed_wrapper {*/
/*    position: relative;*/
/*    overflow-x: hidden;*/
/*    margin: 0 auto;*/
/*    width: 100%;*/
/*    min-width: 300px;*/
/*}*/
    
    
form#asForm input, form#asForm textarea, form#asForm2 input, form#asForm2 textarea {
    background: #fff !important;
    vertical-align: top;
}
</style>
</head>
<body>
     <div class="boxed_wrapper">

        <header class="mainmenu-style3-area stricky">
            <div class="container">

                <div class="main-menu-box clearfix">
                    <div class="mainmenu-left style3 float-left">
                       <div class="button" slot="margin-left:5%;">
                            <img src="images/FSC-SLIDER/logo_new.png" alt="FS Certificaciones" width="100">
                        </div>
                    </div>
                    <nav class="main-menu style3 clearfix float-right">

                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix" style="list-style: none;  margin: 0;  padding: 0;">
                                <li id="InicioFSCid" class="current"><a href="./#">Inicio</a></li>

                                <li id="NosotrosFSCid" class="dropdown" ><a href="#">Nosotros</a>
                                    <ul>
                                        <li>
                                            <a href="./#NosotrosFSC" class="nav-link">¿Quienes Somos?</a>
                                        </li>
                                        <li>
                                            <a href="./#MisionFSC" class="nav-link">Misión</a>
                                        </li>
                                        <li>
                                            <a href="./#VisionFSC" class="nav-link">Visión</a>
                                        </li>
                                    </ul
                                ></li>

                                <li id="LaboratorioFSCid" ><a href="./#LaboratorioFSC">Laboratorio</a></li>

                                <li id="InspeccionFSCid" ><a href="./#InspeccionFSC">Org. Inspección</a></li>

                                <li id="ClientesFSid" class="dropdown"><a href="#ClientesFSC">Clientes</a>
                                    <ul>
                                        <li id="ClientesLab">
                                            <a href="./#ClientesFSC" class="nav-link">Laboratorio</a>
                                        </li>
                                        <li id="ClientesOrg">
                                            <a href="./#ClientesFSC" class="nav-link">Org. Inspeccion</a>
                                        </li>
                                    </ul>
                                </li>

                                <li id="ContactoFSid"><a href="./#ContactoFSC">Contactar</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- <div class="mainmenu-right style3 float-right">
                        <div class="button">
                            <a class="btn-one" href="#">Request for Quote<span class="flaticon-next"></span></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </header>

 

    <!-- LIBRO RECLAMACIONES -->
    <section class="contact-section sec-pad testimonial-section-service ContactoFSclass lazy">
      <div class="container">

            
            
            
            
    <div class="row">
        <div class="col-md-12 text-center" style="margin-bottom: 20px;margin-top: 50px">
            <h1>Libro de Reclamaciones Virtual</h1>
        </div>
                    <h3>Hoja de Reclamación N° <?php echo str_pad($personas["id"], 5, "0", STR_PAD_LEFT); ?></h3>
                    
            <div class="col-md-12" style="border: 2px solid black;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-bottom:15px">
                <form accept-charset="UTF-8" id="asForm2" class="form-horizontal" action="/bd/envio-respuesta.php" method="post">
                    <div class="col-md-12" style="background-color: #bebebe;color:#333">
                        OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR
                    </div>
                    <label for="fecha" class="col-sm-5 control-label mt-3" style="text-align: left">RESPONDER:</label>
                    <div class="col-sm-12">
                        <textarea class="form-control input-sm" name="respuesta" rows="5" ><?php echo $personas["respuesta"]; ?></textarea>
                        <div class="clearfix"></div>
                        <input type="hidden" name="id_libro" value="<?php echo $personas["id"]; ?>" readonly>
                        <input type="hidden" name="email_cliente" value="<?php echo $personas["email"]; ?>" readonly>
                        <input type="hidden" name="nombre_cliente" value="<?php echo $personas["nombre"]; ?>" readonly>
                        <button type="submit" name="responder" class="btn btn-primary btn-sm mt-3">Guardar y Enviar respuesta al cliente</button>

                    </div>
                </form>
            </div>
                
                

            <div class="col-md-12" style="border: 2px solid black">
                
                <form accept-charset="UTF-8" id="asForm" class="form-horizontal">

                <div class="form-group form-libro row">
                    <div class="col-sm-12 text-center" style="margin-bottom:10px;margin-top:10px">
                        FS CERTIFICACIONES SOCIEDAD ANONIMA CERRADA / RUC N°: 20514553719
                        <br><span style="font-size: 0.85em">Av. del Pinar Nro. 110 Int. 407 Chacarilla del Estanque, Santiago de Surco</span>
                    </div>
                    
                    
                    <div class="clearfix"></div>
                    <div class="col-md-12" style="background-color: #bebebe;color:#333">
                        1. IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE
                    </div>
                    <label for="nombre" class="col-sm-2 control-label" style="text-align: left">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-sm as_required" id="nombre" name="nombre"
                               placeholder="" value="<?php echo $personas["nombre"]; ?>" readonly>
                    </div>
                    <label for="domicilio" class="col-sm-2 control-label" style="text-align: left">DOMICILIO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-sm as_required" id="domicilio" name="domicilio"
                               placeholder="" value="<?php echo $personas["domicilio"]; ?>" readonly>
                    </div>
                    <label for="dni" class="col-sm-2 control-label" style="text-align: left">DNI / CE:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control input-sm as_required number" id="dni" name="dni"
                               placeholder="" value="<?php echo $personas["dni"]; ?>" readonly>
                    </div>
                    <label for="telefono" class="col-sm-1 control-label" style="text-align: left">TELEF:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control input-sm as_required number" id="telefono"
                               name="telefono"
                               placeholder="" value="<?php echo $personas["telefono"]; ?>" readonly>
                    </div>
                    <label for="email" class="col-sm-1 control-label" style="text-align: left">EMAIL:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control input-sm as_required" id="email" name="email"
                               placeholder="" value="<?php echo $personas["email"]; ?>" readonly>
                    </div>
                    
                    
                    <div class="clearfix"></div>
                    
                    <label for="menor" class="col-sm-3 control-label" style="text-align: left">
                        <input type="checkbox"
                               class=""
                               id="menor"
                               name="menor"
                               value="1" <?php echo $personas["menor"]==1 ? "checked" : ""; ?>>
                        MENOR DE EDAD </label>
                    <div class="clearfix"></div>
                    <div class="col-sm-12">
                        <span style="font-size: 12px;clear: both;">[LLENAR INFORMACIÓN DEL APODERADO]</span>
                    </div>
                    <label for="nombre_padre" class="col-sm-2 control-label" style="text-align: left">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="nombre_padre" name="nombre_padre"
                               placeholder="" disabled="disabled" readonly  value="<?php echo $personas["nombre_padre"]; ?>">
                    </div>
                    <label for="domicilio_padre" class="col-sm-2 control-label"
                           style="text-align: left">DOMICILIO:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="domicilio_padre" name="domicilio_padre"
                               placeholder="" readonly value="<?php echo $personas["domicilio_padre"]; ?>">
                    </div>
                    <label for="dni_padre" class="col-sm-2 control-label" style="text-align: left">DNI / CE:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control input-sm number" id="dni_padre" name="dni_padre"
                               placeholder=""  readonly value="<?php echo $personas["dni_padre"]; ?>">
                    </div>
                    <label for="telefono_padre" class="col-sm-1 control-label" style="text-align: left">TELEF:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control input-sm number" id="telefono_padre"
                               name="telefono_padre"
                               placeholder=""  readonly value="<?php echo $personas["telefono_padre"]; ?>">
                    </div>
                    <label for="email_padre" class="col-sm-1 control-label" style="text-align: left">EMAIL:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control input-sm" id="email_padre" name="email_padre"
                               placeholder=""  readonly value="<?php echo $personas["email_padre"]; ?>">
                    </div>
                    
                    
                    <div class="clearfix"></div>
                    <div class="col-md-12" style="background-color: #bebebe;color:#333">
                        2. IDENTIFICACIÓN DEL BIEN CONTRATADO
                    </div>
                    
                    <label for="producto" class="col-sm-2 control-label" style="text-align: left">
                        <input type="radio" class="as_required" id="producto" name="tipo_bien" value="producto" readonly <?php echo $personas["producto"]==1 ? "checked" : ""; ?>> PRODUCTO
                    </label>
                    <label for="monto" class="col-sm-3 control-label" style="text-align: left">MONTO RECLAMADO:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control input-sm as_required number" id="monto" name="monto"
                               placeholder="" value="<?php echo $personas["monto"]; ?>" readonly>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <label for="servicio" class="col-sm-2 control-label" style="text-align: left">
                        <input type="radio" class="as_required" id="servicio" name="tipo_bien" value="servicio" readonly <?php echo $personas["servicio"]==1 ? "checked" : ""; ?>> SERVICIO
                    </label>
                    <label for="descripcion" class="col-sm-3 control-label"
                           style="text-align: left">DESCRIPCIÓN:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control input-sm as_required" id="descripcion" name="descripcion"
                               placeholder="" value="<?php echo $personas["descripcion"]; ?>" readonly>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8" style="background-color: #bebebe;color:#333">
                        3. DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR
                    </div>
                    <label for="reclamo" class="col-sm-2 control-label" style="text-align: left">
                        <input type="radio" class="as_required" id="reclamo" name="tipo_reclamo" value="reclamo"  <?php echo $personas["tipo_reclamo"]=="reclamo" ? "checked" : ""; ?> readonly>
                        RECLAMO
                    </label>
                    <label for="queja" class="col-sm-2 control-label" style="text-align: left">
                        <input type="radio" class="as_required" id="queja" name="tipo_reclamo" value="queja"  <?php echo $personas["tipo_reclamo"]=="queja" ? "checked" : ""; ?> readonly> QUEJA
                    </label>

                    <div class="col-sm-12">
                        <textarea class="form-control input-sm as_required" id="detalle" name="detalle" rows="10"
                                  placeholder="DETALLE.."  readonly><?php echo $personas["detalle"]; ?></textarea>
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control input-sm as_required" id="pedido" name="pedido" rows="8"
                                  placeholder="PEDIDO.." readonly><?php echo $personas["pedido"]; ?></textarea>
                    </div>
                    <div class="clearfix"></div>
                    
                    
                     
                      
                    
                    <div class="col-sm-12" style="font-size: 12px">
                        <b>RECLAMO:</b> Disconformidad relacionada a los productos o servicios.
                    </div>
                    <div class="col-sm-12" style="margin-bottom: 30px;font-size: 12px">
                        <b>QUEJA:</b> Disconformidad no relacionada a los productos o servicios, o, malestar o
                        descontento respecto
                        a la atención al público.
                    </div>


                    </form>

                    
                </div>
            </div>
            
            
            
            <div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px">
                
                
                <p style="font-size: 11px">* La formulación del reclamo no impide acudir a otras vias de solución de
                    controversias ni es requisito
                    previo para interponer una denuncia ante el INDECOPI.<br/>
                    * El proveedor deberá dar respuesta a los reclamos y las quejas que se consignen en un plazo no mayor a quince (15) días hábiles, improrrogables.</p>

            </div>
            
            

            </div>
            
            
            
            

        </div>
      
    </section>
    <!-- LIBRO RECLAMACIONES -->
    
    

<!--End latest blog area style2-->
        <footer style="background-color: #042c5c;">
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                        <p style="color: white;" class="pt-4 text-center">Copyright <span id="txtAnio"></span> FS Certificaciones | Todos los Derechos Reservados | Área de Sistemas</p>
                    </div>
                    
                    <div class="col-md-12 text-center text-white" style="margin-top:50px">
                        <a href="./libro-reclamaciones.php"><img src="./images/libro-reclamaciones.webp" style="width:90px">
                        <br>
                        Libro de Reclamaciones</a>
                        <br>
                        <small>RUC: 20514553719
                        <br>
                        Razón social: FS CERTIFICACIONES S.A.C.</small>
                    </div>
                    
                    
                </div>
            </div>
        </footer>
    <!-- INICIO Whatsapp-->
    <?php /*include_once 'views/modal_whatsapp.php';*/ ?>
    <!-- FIN Whatsapp-->
   
</div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span><img src="images/FSC-SLIDER/flecha-hacia-arriba.png" alt=""></span></div>

     <script src="js/jquery.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/contacto.js"></script>
    <script src="js/map-helper.js"></script>

    <script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/timepicker/timePicker.js"></script>
    <script src="assets/html5lightbox/html5lightbox.js"></script>

    <script src="js/scroll.js?v=2"></script>

    <!-- thm custom script -->
    <script src="js/custom.js?v=2"></script>

    <!-- Lazy Load -->
    <script src="js/lazyl_oad.js"></script>
    <script src="js/lazyLoad.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js" integrity="sha512-mx0L9xs+R5jFQ6OoBbS9oOfdPyymQXsrSAjJ8rncuCxA9FPPrlrCxrr8Xwo+N246jOgHtIPBR0eF61OQuPSoDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body><!-- End of .page_wrapper -->

</html>