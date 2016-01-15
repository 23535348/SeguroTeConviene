<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/add.php'); ?>
<?php $url=base_url();?>

    <section id="featured">
        <!-- start slider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slider -->

                    <div class="gris">
                        ¡Gracias por su Solicitud!
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
    <div style="text-align:left; margin: 0 auto 0 auto;"><br>
        <p>Gracias por utilizar nuestros servicios.</p>
        <p>En <b style="color:#FF9933;">www.seguroteconviene.com</b> nos esforzamos por ofrecerles las tarifas más bajas del mercado, con las mejores coberturas y condiciones
            a través de las más reconocidas y sólidas compañias de seguro del país.</p>
        <p>En las próximas 24 horas laborables uno de nuestros ejecutivos le estará contactando.</p>
        <p>Para referencia, su número de orden es: <b style="color:#FF9933;"><?php echo $solicitud; ?></b></p>
    </div><br>
    <div style="width:45%; margin: 0 auto 0 auto; text-align:center;">
        <a href="<?=$url?>cotizador/index.php/Autos/form"><button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;">Página de inicio</button></a>     <a href="imprimir_terceros/?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>&id=<?php echo $solicitud; ?>&anio_auto=<?php echo $anio_auto; ?>&mensaje_lc=<?php echo $mensaje_lc; ?>&mensaje_dpa=<?php echo $mensaje_dpa; ?>&mensaje_gm=<?php echo $mensaje_gm; ?>&dcomprensivo=<?php echo $dcomprensivo; ?>&dcolision=<?php echo $dcolision; ?>&pago_voluntario=<?php echo $pago_voluntario; ?>&pago_UNPAGO=<?php echo $pago_UNPAGO; ?>&pago_ACH=<?php echo $pago_ACH; ?>&idaseguradora=<?php echo $idaseguradora; ?>&fecha_solicitud=<?php echo $fecha_solicitud; ?>" > <button class="btn btn-warning" style="margin-top:10px;">Imprimir orden</button></a>
    </div>
    <br><br>
            </div>
                <div class="col-lg-3">
                </div>
            </div>
    </div>
<?php $this->load->view('autos/imprimir_terceros.php'); ?>
<?
$this->load->view('tema/footer.php');
?>