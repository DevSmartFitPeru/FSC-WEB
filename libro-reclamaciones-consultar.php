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
                    <form method="post" class="form-horizontal" action="libro-reclamaciones-buscar.php">
                        <input name="dni" type="text" placeholder="Ingrese su num DNI" class="form-control input-sm as_required">
                        <br>
                        <input name="numero" type="text" placeholder="Ingrese num de queja o reclamo" class="form-control input-sm as_required">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Consultar">
                    </form>
                </div>
                
            </div>
        </div>
    </section>

<?php include_once 'libro-footer.php'; ?>