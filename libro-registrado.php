
<!DOCTYPE html>
<html lang="es-PE">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js" integrity="sha512-mx0L9xs+R5jFQ6OoBbS9oOfdPyymQXsrSAjJ8rncuCxA9FPPrlrCxrr8Xwo+N246jOgHtIPBR0eF61OQuPSoDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    
    
    .form-libro div, .form-libro label {
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
    .clearfix {
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
    
    
    
    </style>
</head>

<body class="boxed_wrapper" íd="CuerpoWeb">
     <script>
        window.onload = function() {
          document.getElementById('loadh').className = 'fixed-header';
        };     
     </script>
    <header id="loadh" class="main-header fixed-header">
        <div class="container">
        </div>
        <div class="sticky-header">
          <?php include_once 'views/main_menu_options_sticky.php'; ?>
        </div>
    </header>

 

    <!-- LIBRO RECLAMACIONES -->
    <section class="contact-section sec-pad testimonial-section-service ContactoFSclass lazy">
      <div class="container">

            
            
            
            
            <div class="row">
        <div class="col-md-12 text-center" style="margin-bottom: 20px">
            <h1>Libro de Reclamaciones Virtual</h1>
        </div>
                    <h3 class="col-md-12 text-center">Su queja o reclamo fue registrado con exito!</h3>

            <div class="col-md-12 text-center" style="border: 2px solid black;padding:50px">
                                <h3 style="margin-top:0">REGISTRO N° <?php echo $_GET["num"];?></h3>
                                <br> <br>
                                <img src="./images/enviao.png" style="max-width:100px">
                                <br> <br>
               Estaremos antendiendo su mensaje a la brevedad.
               
            </div>
            
            
            
            <div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px">
                

                

            </div>
            
            

            </div>
            
            
            
            

        </div>
      
    </section>
    <!-- LIBRO RECLAMACIONES -->
    
    

    <footer class="main-footer" style="background-color:#044372;">
      <?php include_once 'views/footer.php'; ?>
    </footer>

    <div class="footer-bottom centred" >
        <div class="container">
            <div class="copyright">
                Copyright <strong id="Año"></strong> | Todos los Derechos Reservados | Grupo FS - Área de Sistemas
            </div>
        </div>
    </div>
    
    <!-- INICIO Whatsapp-->
    <?php /*include_once 'views/modal_whatsapp.php';*/ ?>
    <!-- FIN Whatsapp-->
   
    <!--INICIO SCROLL-->
    <div class="scroll-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>
    <!--FIN SCROLL-->

    <!--jquery js -->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/map-helper.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/eventos.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    <!-- main-js -->
    <script src="js/script.js?v=7"></script>
    <!-- WHATSAPP -->
    <script src="./js/whatsapp.js"></script>
    <!-- LAZY -->
    <script src="./js/lazy.js"></script>
    <script>
      function calc_height(clase_div){
        var max_altura = 0;
        $(clase_div).each(function() {
            if($(this).height()>max_altura){
                max_altura = $(this).height();
            }   
        });
        console.log(max_altura);
        $(clase_div).height(max_altura);
      }

      calc_height(".text_desc");
      calc_height(".serv_titulo ");


      $('.carrusel-clientes').owlCarousel({
        items:5,
        loop:true,
        margin:1,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        slideBy:20,
      
        responsive:{
            0:{
                items:3
            },
            768:{
                items:5
            }
        }
      });
    </script>
    
    
    <script>
    $("body").on("change", "#menor", function () {

            if ($(this).prop("checked")) {

                $("#nombre_padre").removeAttr('disabled');
                $("#domicilio_padre").removeAttr('disabled');
                $("#dni_padre").removeAttr('disabled');
                $("#telefono_padre").removeAttr('disabled');
                $("#email_padre").removeAttr('disabled');

                $("#nombre_padre").addClass('as_required');
                $("#domicilio_padre").addClass('as_required');
                $("#dni_padre").addClass('as_required');
                $("#telefono_padre").addClass('as_required');
                $("#email_padre").addClass('as_required');

            } else {

                $("#nombre_padre").attr('disabled', 'disabled');
                $("#domicilio_padre").attr('disabled', 'disabled');
                $("#dni_padre").attr('disabled', 'disabled');
                $("#telefono_padre").attr('disabled', 'disabled');
                $("#email_padre").attr('disabled', 'disabled');

                $("#nombre_padre").removeClass('as_required');
                $("#domicilio_padre").removeClass('as_required');
                $("#dni_padre").removeClass('as_required');
                $("#telefono_padre").removeClass('as_required');
                $("#email_padre").removeClass('as_required');
            }

        });
    $(document).ready(function () {
        
        
        
        


    $("body").on('click', '.as_btn_save', function () {

        var errors = 0;


        $('.custom-error').remove();

        /** VALIDAR REQUIRED **/

        $("#asForm" + " .as_required").each(function (i, v) {

            var el = $(this).attr('id');
            var tipo = $(this).attr('type');

            if ($(this).is('input')) {

                if ($("#" + el).val().trim() == ''  && tipo != "radio") {
                    errors++;
                    if (tipo == "text" || tipo == "password") {
                        $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Este campo es obligatorio</div></div>');
                    }

                    if (tipo == "file") {
                        $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar un archivo</div></div>');
                    }

                }

            }

            if(tipo == "radio"){

                    var name = $("#" + el).attr('name');
                    var ubic = $("#" + el).attr('errorUbi');

                    if (!$("input[name='" + name + "']").is(':checked')) {
                        if(ubic == "top"){
                            $("#" + el).parent().parent().prepend('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar una opción</div></div>');
                        }else{
                            $("#" + el).parent().parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar una opción</div></div>');
                        }
                    }
                    
            }


            if(tipo == "checkbox"){

                    var name = $("#" + el).attr('name');
                    var ubic = $("#" + el).attr('errorUbi');
                    var req = $("#" + el).attr('req');
                    var total = $("#" + el).parent().parent().find('input[type="checkbox"]:checked').length;

                    if(req > 0){

                        if(total < req){
                            
                            if(ubic == "top"){
                                $("#" + el).parent().parent().prepend('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar al menos ' + req + ' opciones</div></div>');
                            }else{
                                $("#" + el).parent().parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar al menos ' + req + ' opciones</div></div>');
                            }
                            
                        }

                    }else if(req == 0){

                        if(total == 0){

                            if(ubic == "top"){
                                $("#" + el).parent().parent().prepend('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar al menos una opción</div></div>');
                            }else{
                                $("#" + el).parent().parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar al menos una opción</div></div>');
                            }

                        }

                    }
                    
            }


            if ($(this).is('select')) {

                if ($("#" + el).val() == '') {
                    errors++;
                    $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar un elemento</div></div>');


                }

            }

            if ($(this).is('textarea')) {

                if ($("#" + el).val() == '') {
                    errors++;
                    $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Este campo es obligatorio</div></div>');


                }

            }

        });


        /** CHECK ERRORES **/

        if (errors > 0) {
            return false;
        } else {
            $("#asForm").submit();
        }


    });

    $("body").on('click', '.as_btn_print', function () {

        var errors = 0;


        $('.custom-error').remove();

        /** VALIDAR REQUIRED **/

        $("#asForm" + " .as_required").each(function (i, v) {

            var el = $(this).attr('id');
            var tipo = $(this).attr('type');

            if ($(this).is('input')) {

                if ($("#" + el).val().trim() == '') {
                    errors++;
                    if (tipo == "text" || tipo == "password") {
                        $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Este campo es obligatorio</div></div>');
                    }

                    if (tipo == "file") {
                        $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar un archivo</div></div>');
                    }

                }

            }

            if ($(this).is('select')) {

                if ($("#" + el).val() == '') {
                    errors++;
                    $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Debe seleccionar un elemento</div></div>');


                }

            }

            if ($(this).is('textarea')) {

                if ($("#" + el).val() == '') {
                    errors++;
                    $("#" + el).parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Este campo es obligatorio</div></div>');


                }

            }

        });

        /** CHECK PASSWORD **/

        if ($("#password") != "" && $("#repassword") != "") {

            if ($("#password").val() != $("#repassword").val()) {
                errors++;
                $("#password").parent().append('<div class="custom-error"><div style="color: red; font-size: 11px">* Las contraseñas no coinciden</div></div>');
            }

        }


        /** CHECK ERRORES **/

        if (errors > 0) {
            return false;
        } else {

            window.print();

        }


    });



    $(".number").bind("keydown", function (event) {

        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
            // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||

            // Allow: Ctrl+C
            (event.keyCode == 67 && event.ctrlKey === true) ||

            // Allow: Ctrl+V
            (event.keyCode == 86 && event.ctrlKey === true) ||

            // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        } else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 ) && ( event.keyCode != 110) && (event.keyCode != 190)) {
                event.preventDefault();
            }
        }


    });

});
    </script>
</body><!-- End of .page_wrapper -->

</html>