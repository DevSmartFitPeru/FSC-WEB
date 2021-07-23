$(document).ready(function(){
    $("#ContactoForm").submit(function(e){
        e.preventDefault();

        var datos = $(this).serialize();
        $.ajax({
            type:'post',
            url:'php/contacto.php',
            data:datos,
            success:function(response){
               // console.log('response', response)
               var res = JSON.parse(response); 
                if (res.response == 'ok') {
                    Swal.fire(
                        'Datos Enviados!',
                        'Gracias por comunicarse con nosotros, en unos minutos nos pondremos en contacto con usted!',
                        'success'
                    );

                    $("#btnEnviar").text('Enviado!');

                    $(".form_name").val('');
                    $(".form_email").val('');
                    $(".form_message").val('');
                } else if(res.response == 'error') {
                    Swal.fire(
                        'Datos no Enviados!',
                        'Favor de ingresar los campos requeridos',
                        'error'
                    );

                    $("#btnEnviar").text('Enviar!');

                }else{
                    Swal.fire(
                        'Error del servidor!',
                        'Favor de intentar dentro de unos minutos',
                        'error'
                    );

                    $("#btnEnviar").text('Enviar!');
                }
            }
        })

       
    })
})