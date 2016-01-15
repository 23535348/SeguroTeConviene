<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/add.php'); ?>
<?php $url=base_url();?>
    <section id="featured">
        <!-- start slider -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Slider -->

                    <div class="gris">
                        Valide la informaci&oacute;n de la P&oacute;liza
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>

    </section>
    <!-- 1era tabla -->
    <div class="col-xs-12">

            <div class="row">
                <div class="col-xs-12">
                    <span style="color:#CC0000; font-weight:bold;">
                        Compañía de Seguros:
                    </span> <b>
                        <?php echo $company; ?>
                    </b>
                </div>
            </div>

            <div class="row">
                <!--<td><span style="color:#1E90FF; font-weight:bold;">Paquete:</span> <b><?php echo $plan; ?></b></td> -->
                <div class="col-xs-12">
                    <span style="color:#CC0000; font-weight:bold;">
                        Paquete:
                    </span>
                    <b>
                        <?php echo $plan; ?>
                    </b>
                </div>
            </div>
        </div>
<hr>
    <!-- 2da tabla -->
    <div class="col-xs-12" style="margin: 0 auto 0 auto; text-align:center;">
<hr>
            <div class="row">
                <div class="col-xs-12" style="color:#CC0000; font-weight:bold;">Coberturas y Límites</div>
            </div>
<hr>
    <div class="row">
        <div class="col-xs-12" >
        <div class="row">
            <div class="col-xs-6"><b>Coberturas</b></div>
             <div class="col-xs-6">Lesiones Corporales</div>
             </div>
            <div class="row">
            <div class="col-xs-6"><b>Límites de responsabilidad</b></div>
              <div class="col-xs-6"><?php echo ("B/. "); echo $lc_porpersona; echo (" por persona</br>"); echo ("B/. "); echo $lc_poraccidente; echo (" por accidente");?></div>
               </div>
                <div class="row">
            <div class="col-xs-6"><b>Deducibles</b></div>
              <div class="col-xs-6">No Aplica</div>
                </div>
            </div>

        </div>
<hr>
    <div class="row">
        <div class="col-xs-12" >
         <div class="row">
            <div class="col-xs-6"><b>Coberturas</b></div>
              <div class="col-xs-6">Daños a la propiedad ajena</div>
            </div>
             <div class="row">
            <div class="col-xs-6"><b>Límites de responsabilidad</b></div>
             <div class="col-xs-6"><?php echo ("B/. "); echo $dpa_poraccidente; echo (" por accidente");?></div>
                 </div>
                 <div class="row">
            <div class="col-xs-6"><b>Deducibles</b></div>
            <div class="col-xs-6">No aplica</div>
                 </div>
            </div>

        </div>
<hr>

    <div class="row">
        <div class="col-xs-12" >
        <div class="row">
            <div class="col-xs-6"><b>Coberturas</b></div>
             <div class="col-xs-6">Gastos Médicos</div>
             </div>
            <div class="row">
            <div class="col-xs-6"><b>Límites de responsabilidad</b></div>
            <div class="col-xs-6"><?php echo ("B/. "); echo $gm_porpersona; echo (" por persona</br>"); echo ("B/. "); echo $gm_poraccidente; echo (" por accidente");?></div>

                 </div>
                <div class="row">
            <div class="col-xs-6"><b>Deducibles</b></div>
            <div class="col-xs-6">No Aplica</div>
                </div>
            </div>
        </div>

<hr>

 <div class="row">
        <div class="col-xs-12" >
        <div class="row">
            <div class="col-xs-6"><b>Coberturas</b></div>
            <div class="col-xs-6">Comprensivo</div>
             </div>
            <div class="row">
            <div class="col-xs-6"><b>Límites de responsabilidad</b></div>
            <div class="col-xs-6">Valor acordado: B./ <?php echo $precio_venta; ?></div>
                 </div>
                <div class="row">
            <div class="col-xs-6"><b>Deducibles</b></div>
          <div class="col-xs-6">B./ <?php echo number_format($dcomprensivo, "2", ".", ","); ?></div>
                </div>
            </div>
        </div>

<hr>

<div class="row">
        <div class="col-xs-12" >
        <div class="row">
            <div class="col-xs-6"><b>Coberturas</b></div>
             <div class="col-xs-6">Colisión o Vuelco</div>
             </div>
            <div class="row">
            <div class="col-xs-6"><b>Límites de responsabilidad</b></div>
            <div class="col-xs-6">Valor acordado: B./ <?php echo $precio_venta; ?></div>
                 </div>
                <div class="row">
            <div class="col-xs-6"><b>Deducibles</b></div>
           <div class="col-xs-6">B./ <?php echo number_format($dcolision, "2", ".", ","); ?></div>
                </div>
            </div>
        </div>

            </div>




    </div>
    <hr>
    <!-- 3ra tabla -->
    <div style="margin: 0 auto 0 auto; text-align:center;">

            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-12"  style="color:#CC0000; font-weight:bold;">Formas de Pago</div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-4">Pago Voluntario</div>
                <div class="col-xs-4">Hasta 10 pagos mensuales iguales</div>
                <div class="col-xs-4"><?php echo "B/. "; echo number_format($poliza, "2", ".", ","); ?>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-4">Pago al contado</div>
                <div class="col-xs-4">Un solo pago (a la entrega de la póliza)</div>
                <div class="col-xs-4"><?php echo "B/. "; echo $pago_contado; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-4">Pago por tarjeta de crédito o ACH</div>
                <div class="col-xs-4">Hasta 10 pagos mensuales iguales</div>
                <div class="col-xs-4"><?php echo "B/. "; echo $pago_credito_hcm; ?></div>
                </div>
            </div>

    </div>
    <hr>
    <!-- 4ta tabla -->
    <div  align="center" style="margin: 0 auto 0 auto;">

            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-12" style="text-align:center; color:#CC0000; font-weight:bold;">Revise su Información</div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-12"><b>Su correo electrónico</b> &nbsp; <?php echo $email; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">

                <div class="col-xs-12"><b>Teléfono</b> &nbsp; <?php echo $telefono; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-12"><b>Celular</b> &nbsp; <?php echo $celular; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                <div class="col-xs-12"><b>Identificaci&oacute;n</b> &nbsp; <?php echo $cedula; ?></div>
                </div>
            </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12" align="center">

            <div class="col-xs-6">
                  <form name="regresar" id="AseguradoraRegresar" action="<?=$url?>cotizador/index.php/Autos/form" method="POST">
                            <input type="hidden" name="nombre" value="<?=$nombre?>">
                            <input type="hidden" name="apellido" value="<?=$apellido?>">
                            <input type="hidden" name="cedula" value="<?=$cedula?>">
                            <!--<input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">-->
                            <!--
                                  <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                                  <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">-->
                            <input type="hidden" name="company" value="<?=$company?>">
                            <input type="hidden" name="historial_manejo" value="<?=$historial_manejo?>">
                            <input type="hidden" name="plan" value="<?=$plan?>">
                           <input type="hidden" name="poliza" value="<?=$poliza?>">
                            <input type="hidden" name="item1_select_1" value="<?=$marca?>">
                            <input type="hidden" name="ittem2_select_2" value="<?=$modelo?>">


                            <input type="hidden" name="dcolision" value="<?=$dcolision?>">
                            <input type="hidden" name="dcomprensivo" value="<?=$dcomprensivo?>">
                            <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                            <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

                            <input type="hidden" name="sexo" value="<?=$sexo?>">
                            <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
                            <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                            <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                            <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                            <input type="hidden" name="email" value="<?=$email?>">
                            <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
                            <input type="hidden" name="telefono" value="<?=$telefono?>">
                            <input type="hidden" name="celular" value="<?=$celular?>">
                            <input type="hidden" id="brandon" name="brandon" value="1">

                            <input type="hidden"  name="sesion_cotizacion" value="1">
     <!--<a  class="a_form" href="autos_completo.php?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>">-->

<input type="submit" class="btn" style="
       background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;" value="Regresar">




        </form>






           <!-- <a   href="javascript:window.history.go(-1);">
        <button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;">Regresar
        </button>
        </a>-->
            </div>



                    <div class="col-lg-6">
                        <form name="Aseguradora<?=$plan?>" id="Aseguradora" action="<?=$url?>cotizador/index.php/Autos/autos_complete" method="POST">
                            <input type="hidden" name="nombre" value="<?=$nombre?>">
                            <input type="hidden" name="apellido" value="<?=$apellido?>">
                            <input type="hidden" name="cedula" value="<?=$cedula?>">
                            <!--<input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">-->
                            <!--
                                  <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                                  <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">-->
                            <input type="hidden" name="company" value="<?=$company?>">
                            <input type="hidden" name="historial" value="<?=$historial_manejo?>">
                            <input type="hidden" name="plan" value="<?=$plan?>">
                           <input type="hidden" name="poliza" value="<?=$poliza?>">
                            <input type="hidden" name="marca" value="<?=$marca?>">
                            <input type="hidden" name="modelo" value="<?=$modelo?>">


                            <input type="hidden" name="dcolision" value="<?=$dcolision?>">
                            <input type="hidden" name="dcomprensivo" value="<?=$dcomprensivo?>">
                            <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                            <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

                            <input type="hidden" name="sexo" value="<?=$sexo?>">
                            <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
                            <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                            <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                            <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                            <input type="hidden" name="email" value="<?=$email?>">
                            <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
                            <input type="hidden" name="telefono" value="<?=$telefono?>">
                            <input type="hidden" name="celular" value="<?=$celular?>">
     <!--<a  class="a_form" href="autos_completo.php?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>">-->
         <button class="btn btn-warning"  style="margin-top:10px;">
         Solicitar Póliza
         <i class="glyphicon glyphicon-circle-arrow-right">
</i>
</button>
</a>




        </form>

        </br></br>
                    </div>

        </div>
    </div>

    </div>
    <script type="text/javascript" src="http://postlink.googlecode.com/svn/trunk/jquery.postlink.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.a_form').postlink();
        });
    </script>



<?php $this->load->view('tema/footer.php'); ?>