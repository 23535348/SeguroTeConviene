<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/add.php'); ?>

    <section id="featured">
        <!-- start slider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slider -->

                    <div class="gris">
                        <span style="color:#5ACA17; font-weight:bold;"><h1>¡Gracias por su Solicitud!</h1></span>
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>

    </section>

    <!-- 1era tabla -->
    <div class="row">
    <div class="col-lg-12">

    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">
       <!-- <div class="col-lg-12" style="color:#CC0000; font-weight:bold; text-align:center;">
            Datos Generales
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Nombre:</span> <?php echo $nombre; ?>
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Cédula:</span> <?php echo $cedula; ?>
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Correo Electrónico:</span> <?php echo $email; ?>
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Fecha de Nacimiento:</span> <?php echo $fecha_nac; ?>
        </div>
        <div class="col-lg-12">
            <span style="font-weight:bold;">Teléfono o celular:</span> <?php echo $telefono; ?>
        </div>
        <div class="col-lg-12">
            <span style="font-weight:bold;">Compañía de seguros:</span> <?php echo ($company); ?>
        </div>

        <div class="col-lg-12"  style="color:#CC0000; font-weight:bold; text-align:center;">
            Información de la Póliza de Vida
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Suma Asegurada:</span> <?php echo ("B/. "); echo number_format($suma_asegurada_vida, "2", ".", ","); ?>
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Periodo máximo de la póliza:</span> <?php echo $termino;?>
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Cobertura Principal:</span> Muerte por cualquier causa.
        </div>
        <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Coberturas Adicionales:</span> No aplica.
        </div>-->

    <div style="text-align:left;  margin: 0 auto 0 auto;"><br>
        <p >Gracias por utilizar nuestros servicios.</p>
        <p >En <b style="color:#FF9933;">www.seguroteconviene.com</b> nos esforzamos por ofrecerles las tarifas más bajas del mercado, con las mejores coberturas y condiciones
            a través de las más reconocidas y sólidas compañias de seguro del país.</p>
        <p >En las próximas 24 horas laborables uno de nuestros ejecutivos le estará contactando.</p>
        <p>Para referencia, su número de orden es: <b style="color:#FF9933;"><?php echo $id_registro; ?></b></p>
    </div><br><br>
    <div style=" margin: 0 auto 0 auto; text-align:center;">
        <a href="javascript:window.history.go(-1);">
            <button class="btn"  style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;" >Página de inicio</button></a>
        <a  href="imprimir_terceros/?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>&id=<?php echo $id_registro; ?>&nombre_completo=<?php echo $nombre_completo; ?>&fecha_solicitud=<?php echo $fecha_solicitud; ?>
        &company=<?php echo $company; ?>
        "><button class="btn btn-warning"  style="margin-top:10px;" >Imprimir orden</button></a>
    </div><br><br>
</div>
    <div class="col-lg-3">
    </div>
    </div>
    </div>
<?php $this->load->view('autosPolHipo/imprimir_terceros.php'); ?>
<?
$this->load->view('tema/footer.php');
?>