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