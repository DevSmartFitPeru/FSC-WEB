$(document).ready(function(){
    $("#ContactoForm").submit(function(e){
        e.preventDefault();

        var datos = $(this).serialize();
        $.ajax({
            type:'post',
            url:'php/contacto.php',
            data:datos,
            success:function(data){
                Swal.fire({
                    title: 'Datos Enviados!',
                    text: "En unos momentos nos pondremos en contacto contigo!",
                    icon: 'success'
                  }).then((value) => {
                    if (value.value) {
                      
                        window.location ="index.html";
                      
                    }
                  });

            }.fail(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops, Tenemos problemas con el Servidor',
                    text: 'Intentalo nuevamente!'
                  }).then((response) => {
                    if (response.value) {

                        window.location ="index.html";
                    }
                  });
            })
        })

       
    })
})