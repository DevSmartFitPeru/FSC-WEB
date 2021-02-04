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
                if (response=="ok") {
                    Swal.fire({
                        title: 'Datos Enviados!',
                        text: 'En unos momentos nos pondremos en contacto contigo!',
                        icon: 'success'
                    }).then((value) => {
                        if (value.value) {
                          
                            window.location ="index.html";
                          
                        }
                    });
                } else {
                    Swal.fire(
                        'Datos no Enviados!',
                        'Favor de ingresar los campos requeridos',
                        'error'
                    );
                }
            }
        })

       
    })
})