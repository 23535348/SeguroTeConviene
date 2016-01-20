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
    <div style=" margin: 0 auto 0 auto;">

        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8  table-bordered">
                <div class="col-lg-12">
                    <div style="text-align:left; margin: 0 auto 0 auto;"><br>
                        <p style="font-size:18px;">Gracias por utilizar nuestros servicios.</p>
                        <p style="font-size:18px;">En <b style="color:#FF9933;">www.seguroteconviene.com</b> nos esforzamos por ofrecerles las tarifas más bajas del mercado, con las mejores coberturas y condiciones
                            a través de las más reconocidas y sólidas compañias de seguro del país.</p>
                        <p style="font-size:18px;">En las próximas 24 horas laborables uno de nuestros ejecutivos le estará contactando.</p>
                        <p style="font-size:18px;">Para referencia, su número de orden es: <b style="color:#FF9933;"><?php echo $id_registro; ?></b></p>
                    </div>
                </div>

                <div class="col-lg-12" >
                    <div class="col-lg-6" style=" margin: 0 auto 0 auto; text-align:center;">
                        <a href="<?=base_url()?>index.php">
                            <button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;">Página de inicio</button></a>
                    </div>
                    <div class="col-lg-6" style=" margin: 0 auto 0 auto; text-align:center;">
                        <a href="imprimir_terceros/?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>&id=<?php echo $id_registro; ?>&fecha_solicitud=<?php echo $fecha_solicitud; ?>&termino=<?php echo $termino; ?>">

                            <button class="btn btn-warning" style="margin-top:10px;">Imprimir orden</button></a>
                    </div>
                </div>





            </div>
            <div class="col-lg-2">
            </div>

        </div>
    </div>



<?php $this->load->view('autosPolVida/imprimir_terceros_correo.php'); ?>

<?
$this->load->view('tema/footer.php');
?>