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
    
    
    #asForm .form-libro div, #asForm .form-libro label {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
    #asForm .clearfix {
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
                    
                </div>
            </div>
        </header>