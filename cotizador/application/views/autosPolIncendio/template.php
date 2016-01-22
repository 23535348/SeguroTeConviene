<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/js_poliza_incendio.php'); ?>
<?php $this->load->view('tema/add.php'); ?>
<div class="row col-xs-12">
    <div class="col-xs-12">
    <script>
        /* $(function () {
          $.datepicker.setDefaults($.datepicker.regional["es"]);
            $("#FormacionInicio").datepicker({
                firstDay: 1 ,
                changeMonth: true,
                changeYear: true
            });

        });*/
    </script>
<?php $url=base_url();?>
   
    <section id="featured" class="ocultar">
        <!-- start slider -->
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="gris_letras">
                        Cotización de Seguro para Incendio de Estructura Residencial
                    </div>

                </div>
            </div>
        </div>


    </section>
    <!--<div id="divActiveVehicle" style="display:none">
    <div class="row" align="center">
        <div class="col-xs-12">
            <div  class="col-lg-2">

            </div>
            <div id=1 class="col-lg-4">
                <div style="background-color:#e87b00;width:100%;padding:8px;display:inline-block;-webkit-border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-bottomleft: 5px;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;">
                    <img src="<?= $url ?>img/1.png">
                    <b>DATOS PERSONALES Y DEL INMUEBLE</b>
                </div>
            </div>
            <div id=2 class="col-lg-4">
                <div style="background-color:#e87b00;width:100%;padding:8px;display:inline-block;">
                    <img src="<?= $url ?>img/2.png">
                    <b>CONTRATAR SU SEGURO</b>
                </div>
            </div>
            <div  class="col-lg-2">

            </div>


        </div>
    </div>

    </div>-->





<? if(isset($brandon)){
    if($brandon==1){ $variableStyle="";?>

    <div id="divDatosPersonales" class="ocultar" >
    
        <div class="row" align="center">
        <div class="col-xs-12">
            <div id=1 class="col-xs-6">
            <div style="">
                <img src="<?= $url ?>img/1_select.png">

            </div>
            </div>
            <div id=2 class="col-xs-6">
            <div>
                <img src="<?= $url ?>img/2_select.png">

            </div>
            </div>


            </div>
        </div>
    </div>

<?}}elseif(isset($brandon)){
    if($brandon==1){{}}}else{
    $variableStyle='display:none';
    ?>
         <div id="divDatosPersonales" class="ocultar" >
    
        <div class="row" align="center">
        <div class="col-xs-12">
            <div id=1 class="col-xs-6">
            <div style="">
                <img src="<?= $url ?>img/1_select.png">

            </div>
            </div>
            <div id=2 class="col-xs-6">
            <div>
                <img src="<?= $url ?>img/2_no_select.png">

            </div>
            </div>


            </div>
        </div>
    </div>
    <?}  setlocale(LC_MONETARY, 'en_US');?>




<? if(isset($brandon)){
    if($brandon==1){?>


       <!-- <div style="margin: 0 auto 0 auto;">
            <div class="row" >
                <div class="col-lg-4">
                </div>
                <div class="col-lg-8">
                    <div class="row" >
                       <div class="col-lg-6">
                       <td width="50%" valign="Top">
                                                <div  style="background-color:#ececec;"><div style=""class="encabez">Plan Básico</div><div class="beneficios"><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Incendio y/o Impacto de Rayo<br>
                                                        <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Humo u Hollin<br><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Explosión<br><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i>
                                                        Impacto de Vehículos Aéreos<br> <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Objetos Caídos del Cielo<br><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Remoción de Escombros<br>
                                                        <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Terremoto, Vendaval<br> <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Inundación y Daños por Agua<br><br><br></div></div>

                                            </div>
                                           <div class="col-lg-6">
                                                <div style="background-color:#ececec;"><div class="encabez">Plan Gold</div><div class="beneficios"><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Incendio y/o Impacto de Rayo<br>
                                                        <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Humo u Hollin<br><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Explosión<br><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Impacto de Vehículos Aéreos<br>
                                                        <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Objetos Caídos del Cielo<br><i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Remoción de Escombros<br>
                                                        <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Terremoto, Vendaval<br> <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> Inundación y Daños por Agua<br>
                                                        <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> <b>Desórdenes Públicos</b><br> <i class="glyphicon glyphicon-ok" style="color:#FFA500;"></i> <b>Daños por Maldad</b><br></div></div>
                                            </div>



                    </div>
                </div>

            </div>
        </div>-->




            <?php

   while ($iteracion < 7) {


?>

<div class="row well quitarRow">
    <div class="col-xs-12 ">

 <div class="col-xs-12 ocultar" align="Center">
<?php

$nombre_aseguradora = $tabla_resultados_ordenados1[$iteracion];
$prima_basico_conimpuesto = $tabla_resultados_ordenados2[$iteracion];
$prima_completo_conimpuesto = $tabla_resultados_ordenados3[$iteracion];


        if ($prueba_aseguradora_especifica == 0) {
switch ($nombre_aseguradora){
                            case "Internacional de Seguros":?>

                                <div class="logos col-xs-12 col-offset-2"><img src="<?=$url?>img/logos/iseguros133.png"></div>

                                <?php break;
                            case "Generali":?>

                                <div class="logos col-xs-12 col-offset-2"><img src="<?=$url?>img/logos/generali.png"></div>

                                <?php break;

                            case "ASSA":?>

                                <div class="logos col-xs-12 col-offset-2"><img src="<?=$url?>img/logos/assa.png"></div>

                                <?php break;
                            case "Banesco":?>

                                <div class="logos col-xs-12 col-offset-2"><img src="<?=$url?>img/logos/banesco.jpg"></div>

                                <?php break;
                            case "Acerta":?>

                                <div class="logos col-xs-12 col-offset-2"><img src="<?=$url?>img/logos/acerta.png"></div>

                                    <?php break;
                            case "Banistmo":?>

                                <div class="logos col-xs-12 col-offset-2"><img src="<?=$url?>img/logos/HSBC_Seguros.png"></div>

                                    <?php break;
                            case "SURA":?>

                                <div class="logos col-xs-12 col-offset-2"><img src="<?=$url?>img/logos/sura.png"></div>

                                    <?php break;
                           }

                       // echo $nombre_aseguradora;
                           ?>


            </div>
             <div>
            <div class="col-xs-12 ocultar" >
                
                <div class="col-xs-6 letras-resultado-plan">
                    <p>
                        <? if($prima_basico_conimpuesto<1){}else{ $basico="basico"; $premium="premium"; $ejecutivo="ejecutivo"; ?>
                        <?php $y = $y + 1; ?>
                        <a  class="letras-resultado-plan masInformacion" data-id="informacion<?=$y?>" ><?}?>
                        <span class="glyphicon glyphicon-info-sign">Básico </span>
                            <? if($prima_basico_conimpuesto<1){}else{?></a><?}?>
                   </p>

                </div>
                
                <div class="col-xs-6 precio">
                        <u>B/.
                            <?php if($prima_basico_conimpuesto<1){?>
                                <?php echo number_format($prima_basico_conimpuesto, "2", ".", ","); ?>
                            <?}else{?>
                            <a class="enviar" data-id="Aseguradora<?=$iteracion?>" href="#">
                                <?php echo number_format($prima_basico_conimpuesto, "2", ".", ","); ?>
                            </a>
                            <?}?>
                        </u>
                        
                    </div>
                
                    <div class="col-xs-6" align="Center">
                       <div class="col-xs-12">
                      <?php if($prima_basico_conimpuesto < 1){?>
                        

                     	<?php } else{ ?>




                            <form name="AseguradoraBasico<?=$iteracion?>" id="Aseguradora<?=$iteracion?>" action="validator" method="POST">
                                  <input type="hidden" name="nombre" value="<?=$nombre?>">
                                  <input type="hidden" name="apellido" value="<?=$apellido?>">
                                  <input type="hidden" name="cedula" value="<?=$cedula?>">
                                  <input type="hidden" name="suma_asegurada" value="<?=$suma_asegurada?>">
                                  <input type="hidden" name="bien" value="<?=$tipo_bien?>">
                                  <input type="hidden" name="tipo_construccion" value="<?=$tipo_construccion?>">
                                  <input type="hidden" name="plan" value="Basico">
                                  <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">


                                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                                <input type="hidden" name="sexo" value="<?=$sexo?>">


                                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                                <input type="hidden" name="prima_basico_conimpuesto" value="<?=$prima_basico_conimpuesto?>">
                                <input type="hidden" name="suma" value="<?=$prima_basico_conimpuesto?>">
                                <input type="hidden" name="sector" value="<?=$sector?>">
                                <input type="hidden" name="tipo_bien" value="<?=$tipo_bien?>">
                                  <input type="hidden" name="tipo_construccion" value="<?=$tipo_construccion?>">
                                <input type="hidden" name="email" value="<?=$email?>">

                                <input type="hidden" name="telefono" value="<?=$telefono?>">
                                  <input type="hidden" name="celular" value="<?=$celular?>">

                                      <!--  </a>-->

                                </form>








                     	<!--<a class="a_form" href="validator_b.php?suma_asegurada=
				<?php echo $suma_asegurada; ?>&sector=<?php echo $sector; ?>&bien=
				<?php echo $tipo_bien; ?>&tipo_construccion=<?php echo $tipo_construccion; ?>&provincia=
				<?php /*echo $provincia;*/ ?>&nombre=<?php echo $nombre." ".$apellido; ?>&correo=
				<?php /*echo $correo;*/ ?>&cedula=<?php echo $cedula; ?>&email=<?php echo $email; ?>&telefono=
				<?php echo $telefono; ?>&celular=<?php /*echo $celular; */?>&colision=<?php /*echo $calculo_colision_basico; */?>&dcolision=
				<?php /*echo $calculo_deducible_colision_basico;*/ ?>&comprensivo=<?php /*echo $calculo_comprensivo_basico;*/ ?>&dcompresivo=
				<?php /*echo $calculo_deducible_comprensivo_basico; */?>&p=Básico&nombre_aseguradora=<?php echo $nombre_aseguradora;?>&suma=
				<?php echo $prima_basico_conimpuesto; ?>"><button class="btn btn-warning btn-small" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right"></i></button></a>-->


<?}?>
 </div>
</div>


                                     <?php if($prima_basico_conimpuesto < 1){?>




		<?php } else {?>

				                
                                                                  </div><!-- informacion -->
  <div  id="informacion<?php echo $y; ?>" style="display:none;">


    <div >
      <div >
        <div >
			<span style="display:inline-block;color: #000;">
			  <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><br><br><img src="<?=$url?>img/logos/iseguros.png"><br><br><?php }?>
			  <?php if($nombre_aseguradora=="Generali") {?><br><br><img src="<?=$url?>img/logos/generali.png"><br><br><?php }?>
			  <?php if($nombre_aseguradora=="ASSA") {?><br><br><img src="<?=$url?>img/logos/assa.png"><br><br><?php }?>
			  <?php if($nombre_aseguradora=="Banesco") {?><br><br><img src="<?=$url?>img/logos/banesco.jpg"><br><br><?php }?>
			  <?php if($nombre_aseguradora=="Acerta") {?><br><br><img src="<?=$url?>img/logos/acerta.png"><br><br><?php }?>
			  <?php if($nombre_aseguradora=="HSBC") {?><br><br><img src="<?=$url?>img/logos/HSBC_Seguros.png"><br><br><?php }?>
			  <?php if($nombre_aseguradora=="SURA") {?><br><br><img src="<?=$url?>img/logos/sura.png"><br><br><?php }?>
			  <b>Plan:</b> Básico.<br>
			  <b>Formas de pago:</b> Voluntario, ACH o Tarjeta de crédito<br>
			  <b>Frecuencia de Pago:</b> Anual.<br>
			  
			</span>
			<span class="well col-xs-12" style="float:right; display:inline-block; font-size:11px;color: #000;">
			<b>Coberturas Especiales</b><br>
			<?php if($nombre_aseguradora=="Internacional de Seguros") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<?php }
			if($nombre_aseguradora=="Generali") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<?php }
			if($nombre_aseguradora=="ASSA") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<?php }
			if($nombre_aseguradora=="Banesco") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<?php }
			if($nombre_aseguradora=="Acerta") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<?php }
			if($nombre_aseguradora=="HSBC") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<?php }
			if($nombre_aseguradora=="SURA") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<?php } ?>
			</span>
        </div>
                                        <div class="col-xs-12" align="center"><? $basico="basico"; $premium="premium"; $ejecutivo="ejecutivo";?>
                                            <button type="button" data-id="informacion<?=$y?>"  class="btn btn-tema regresar" >Regresar</button>
                                        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php } ?>

         <div class="col-xs-12 ocultar">

                    <div class="col-xs-6 letras-resultado-plan">
                       <p>
                           <? if($prima_basico_conimpuesto<1){}else{ $basico="basico"; $premium="premium"; $ejecutivo="ejecutivo"; ?>
                           <?php $y = $y + 1; ?>
                           <a  class="letras-resultado-plan masInformacion" data-id="informacion2<?=$y?>" ><?}?>
                           <span class="glyphicon glyphicon-info-sign">Gold  </span>
                               <? if($prima_basico_conimpuesto<1){}else{?></a><?}?>
                        </p>

                    </div>
                    <div class="col-xs-6 precio">
                        <u>B/.
                            <?php if($prima_basico_conimpuesto<1){?>
                                <?php echo number_format($prima_completo_conimpuesto, "2", ".", ","); ?>
                            <?}else{?>
                           <a class="enviar" data-id="Aseguradora2<?=$iteracion?>" href="#">
                            <?php echo number_format($prima_completo_conimpuesto, "2", ".", ","); ?></a>
                            <?}?>
                        </u>
                        
                    </div>
             

                                <div class="col-xs-6 " align="center">
                          <?php if($prima_basico_conimpuesto<1){?>
                          
<?php
 } else {?>
  <form name="AseguradoraBasico<?=$iteracion?>" id="Aseguradora2<?=$iteracion?>" action="validator" method="POST">
                                  <input type="hidden" name="nombre" value="<?=$nombre?>">
                                  <input type="hidden" name="apellido" value="<?=$apellido?>">
                                  <input type="hidden" name="cedula" value="<?=$cedula?>">
                                  <input type="hidden" name="suma_asegurada" value="<?=$suma_asegurada?>">
                                  <input type="hidden" name="bien" value="<?=$tipo_bien?>">
                                  <input type="hidden" name="tipo_construccion" value="<?=$tipo_construccion?>">
                                  <input type="hidden" name="plan" value="Gold">
                                  <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">



                                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                                <input type="hidden" name="sexo" value="<?=$sexo?>">

   <input type="hidden" name="celular" value="<?=$celular?>">

                                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                                <input type="hidden" name="prima_basico_conimpuesto" value="<?=$prima_basico_conimpuesto?>">
                                <input type="hidden" name="suma" value="<?=$prima_basico_conimpuesto?>">
                                <input type="hidden" name="sector" value="<?=$sector?>">
                                <input type="hidden" name="tipo_bien" value="<?=$tipo_bien?>">
                                  <input type="hidden" name="tipo_construccion" value="<?=$tipo_construccion?>">
                                <input type="hidden" name="email" value="<?=$email?>">

                                <input type="hidden" name="telefono" value="<?=$telefono?>">
 
                                      <!--  </a>-->

                                        </form>
        <!--<a class="a_form" href="validator_b.php?suma_asegurada=<?php echo $suma_asegurada; ?>&sector=<?php echo $sector; ?>&bien=
				<?php echo $tipo_bien; ?>&tipo_construccion=<?php echo $tipo_construccion; ?>&provincia=<?php /*echo $provincia; */?>&nombre=<?php echo $nombre." ".$apellido; ?>&correo=<?php //echo $correo; ?>
	&telefono=<?php echo $telefono; ?>&cedula=<?php echo $cedula; ?>&celular=<?php //echo $celular; ?>&colision=<?php //echo $calculo_colision_ejecutivo; ?>
	&dcolision=<?php //echo $calculo_deducible_colision_ejecutivo; ?>&comprensivo=<?php //echo $calculo_comprensivo_ejecutivo; ?>
	&dcompresivo=<?php //echo $calculo_deducible_comprensivo_ejecutivo; ?>&p=Gold&nombre_aseguradora=<?php echo $nombre_aseguradora;?>
	&suma=<?php echo $prima_completo_conimpuesto; ?>"><button class="btn btn-warning btn-small" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right"></i></button></a>-->

                             </div>


                             </div>
                             </div>
                             <!-- Modal -->

        <div class="col-xs-12"  id="informacion2<?php echo $y; ?>" style="display:none;">
    <div >
      <div >
        
        <div >
			<span style="display:inline-block;color: #000;">
			  <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><br><br><img src="<?=$url?>img/logos/iseguros.png"><br><?php }?>
			  <?php if($nombre_aseguradora=="Generali") {?><br><br><img src="<?=$url?>img/logos/generali.png"><br><?php }?>
			  <?php if($nombre_aseguradora=="ASSA") {?><br><br><img src="<?=$url?>img/logos/assa.png"><br><?php }?>
			  <?php if($nombre_aseguradora=="Banesco") {?><br><br><img src="<?=$url?>img/logos/banesco.jpg"><br><?php }?>
			  <?php if($nombre_aseguradora=="Acerta") {?><br><br><img src="<?=$url?>img/logos/acerta.png"><br><?php }?>
			  <?php if($nombre_aseguradora=="HSBC") {?><br><br><img src="<?=$url?>img/logos/HSBC_Seguros.png"><br><?php }?>
			  <?php if($nombre_aseguradora=="SURA") {?><br><br><img src="<?=$url?>img/logos/sura.png"><br><?php }?><br>
			  <b>Plan:</b> Gold<br>
			  <b>Formas de pago:</b> Voluntario, ACH o Tarjeta de crédito<br>
			  <b>Frecuencia de Pago:</b> Anual.<br>
			</span>
			<span class="well col-xs-12" style="float:right; display:inline-block; font-size:11px;color: #000;">
			<b>Coberturas Especiales</b><br>
			<?php if($nombre_aseguradora=="Internacional de Seguros") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<i class="glyphicon glyphicon-ok">Desórdenes públicos</i><br>
			<i class="glyphicon glyphicon-ok">Daños por maldad</i><br>
			<?php }
			if($nombre_aseguradora=="Generali") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<i class="glyphicon glyphicon-ok">Desórdenes públicos</i><br>
			<i class="glyphicon glyphicon-ok">Daños por maldad</i><br>
			<?php }
			if($nombre_aseguradora=="ASSA") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<i class="glyphicon glyphicon-ok">Desórdenes públicos</i><br>
			<i class="glyphicon glyphicon-ok">Daños por maldad</i><br>
			<?php }
			if($nombre_aseguradora=="Banesco") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<i class="glyphicon glyphicon-ok">Desórdenes públicos</i><br>
			<i class="glyphicon glyphicon-ok">Daños por maldad</i><br>
			<?php }
			if($nombre_aseguradora=="Acerta") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<i class="glyphicon glyphicon-ok">Desórdenes públicos</i><br>
			<i class="glyphicon glyphicon-ok">Daños por maldad</i><br>
			<?php }
			if($nombre_aseguradora=="HSBC") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<i class="glyphicon glyphicon-ok">Desórdenes públicos</i><br>
			<i class="glyphicon glyphicon-ok">Daños por maldad</i><br>
			<?php }
			if($nombre_aseguradora=="SURA") {?>
			<i class="glyphicon glyphicon-ok">Incendio y/o Impacto de Rayo</i><br>
			<i class="glyphicon glyphicon-ok">Humo u Hollín</i><br>
			<i class="glyphicon glyphicon-ok">Explosión, impacto de vehículos aéreos</i><br>
			<i class="glyphicon glyphicon-ok">Objetos caídos del cielo</i><br>
			<i class="glyphicon glyphicon-ok">Remoción de escombros</i><br>
			<i class="glyphicon glyphicon-ok">Terremoto</i><br>
			<i class="glyphicon glyphicon-ok">Vendaval</i><br>
			<i class="glyphicon glyphicon-ok">Inundación y daños por agua</i><br>
			<i class="glyphicon glyphicon-ok">Desórdenes públicos</i><br>
			<i class="glyphicon glyphicon-ok">Daños por maldad</i><br>
			<?php } ?>
			</span>
        </div>
          <div class="col-xs-12" align="center"><? $basico="basico"; $premium="premium"; $ejecutivo="ejecutivo";?>
                                            <button type="button" data-id="informacion2<?=$y?>"  class="btn btn-tema regresar" >Regresar</button>
                                        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal --><?php } ?>


        </div>



         </div>




<?php
        }
	       $iteracion++;
    }
	?>
       <div class="ocultar">
<center>Las tarifas que se detallan en esta página son solamente de referencia y por la naturaleza del riesgo ciertos lugares no</br>
son asegurables o llevan recargos en la prima.  Al momento de solicitar su póliza se verificará la ubicación del bien</br>
asegurado y se confirmará la tarifa correspondiente.</center></br>
</div>
<div class="ocultar">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="widget">
                                    <h5 class="widgetheading">Comuniquese con Nosotros</h5>
                                    <address>
                                        <strong> PARA MAYOR INFORMACIÓN CONTACTENOS</strong><br>
                                    </address>
                                    <p>
                                        <i class="icon-phone"></i>AL 227 7777 O ESCRIBANOS <br>
                                        <i class="icon-envelope-alt"></i> A INFO@SEGUROTECONVIENE.COM
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget">
                                    <h5 class="widgetheading"></h5>
                                    <ul class="link-list">
                                        <li><a href="#">EL USO DE ESTE SITIO CONSTITUYE UN ACUERDO A TODOS LOS TÉRMINOS Y CONDICIONES
                                                DEL MISMO, LE RECOMENDAMOS LEERLO ANTES DE UTILIZARLO.
                                                SEGUROTECONVIENE.COM ES UNA MARCA REGISTRADA EN LA REPÚBLICA DE PANAMA Y FORMA PARTE DE
                                                LA EMPRESA DE CORRETAJE JIMFOR, S.A.
                                            </a></li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </footer>
</div>

<?php // fin del algoritmo
?>
              <?
            }
}else{?>

    <form method="POST" action="<?=$url?>cotizador/index.php/AutosPolIncendio/form">

            <div class="tab-content">
                      <div id="personal" class="tab-pane active">
                          <input id="brandon" type="hidden" value="1" name="brandon">
                    <div class="row" align="center">
                        <div class="col-xs-12">
                            <div class="col-xs-12">

                        <div class="col-xs-12">
                            <div class="col-xs-12"> 

                    <div >
                        <div class="col-xs-12" style="margin-bottom:16px;">

                            <input id="name" class="form-control" type="text" placeholder="Nombre" name="nombre" required="">
                        </div>
                        <div class="col-xs-12"  style="margin-bottom:16px;">
                            <input class="form-control" type="text" onchange="act_apellido()" placeholder="Apellido"  last name="apellido" required="" tabindex="2">
                            <script>
                                function act_apellido()
                                    {
                                        document.getElementById("apellido").value=document.getElementById("apellido").value+" "+document.getElementById("last").value;
                                    }
                            </script>
                        </div>
                        <div class="col-xs-12" style="margin-bottom:16px;">
                            <input class="form-control" type="text" placeholder="Cédula o pasaporte" name="cedula" required="" tabindex="3">

                        </div>

                        <div class="col-xs-12" style="margin-bottom:16px;">
                            <input class="form-control" type="text" placeholder="Celular" name="celular" tabindex="7" required="">
                        </div>
                        <div class="col-xs-12" style="margin-bottom:16px;">
                            <input class="form-control" type="text" placeholder="Telefono" name="telefono" tabindex="7" required="">
                        </div>
                        <div class="col-xs-12" style="margin-bottom:16px;">
                            <input class="form-control"  type="email" required="" placeholder="Correo Electrónico" name="email">
                        </div>
                        <div class="col-xs-12" style="margin-bottom:16px;">
                            <select class="form-control" name="tipo_bien" required="">
                                <option value="Seleccionar">Tipo de Bien</option>
                                <option value="APTO">Apartamento</option>
                                <option value="CASA">Casa</option>
                            </select>
                        </div>
                        <div class="col-xs-12" style="margin-bottom:16px;">
                            <select class="form-control" name="sector" required="">
                                <option value="">Seleccionar Sector</option>
                                <option value="CIUDAD">Ciudad de Panamá</option>
                                <option value="COSTADELESTE">Costa del Este</option>
                                <option value="INTERIOR">Interior del País</option>
                            </select>

                        </div>



                        </div>
                        </div>



                            <div class="col-xs-12">

                                <div >

                                    
                                    

                                    <div class="col-xs-12" style="margin-bottom:16px;">
                                        <select class="form-control" name="tipo_construccion" required="">
                                            <option value="">Tipo de Construcción</option>
                                            <option value="Concreto">Concreto</option>
                                            <option value="Mixto">Concreto y Madera</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12" style="margin-bottom:16px;">

                                            <input id="suma_asegurada" class="form-control" type="text" placeholder="Valor a Asegurar en Dólares" name="suma_asegurada" onblur="validatePriceincendio()" size="10" required="">


                                    </div>


                                </div>
                            </div>


                               <!-- <div class="col-lg-4">
                                    <div class="col-xs-12">
                                        <a href="http://www.prontoprintonline.com/">
                                            <img class="img-thumbnail banners" src="<?= $url ?>img/pronto_print.jpg">
                                        </a>
                                    </div>
                                    <div class="col-xs-12">
                                        <a href="http://www.fordrealtyweb.com/">
                                            <img class="img-thumbnail " src="<?= $url ?>img/ford_realty.jpg">
                                        </a>
                                    </div>
                                </div>-->

                                </div>


                                </div>
                            <div class="col-xs-2">
                            </div>

                            </div>

                    <table border="0" width="100%">
                            <tr>
                                <td  align="Center" width="20%">
                                    <a onclick="ActivarTerminosPolIncendio();">Al precionar Cotizar ahora esta aceptando los Términos y Condiciones</a>

                                    <!--  <input required type="checkbox"> <span class="form_text">Acepto los T&eacute;rminos y Condiciones</span>
                                    <a data-toggle="modal" href="#ventanamodal" class="btn btn-siguiente">Leer</a>-->


                                </td>
                            </tr>

                        </table>

                        <div class="row" align="center">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div>
                                          &nbsp;<button type="submit" onclick="formvalidationincendio();"  class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;">Cotizar Ahora</button>


                                        <a href="#vehiculo"></a>
                                    </div>
                                </div>
                            </div>

                        </div>
            </div>
                      </div>







   </div>
    
 <script type="text/javascript" src="http://postlink.googlecode.com/svn/trunk/jquery.postlink.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                              //  $('.a_form').postlink();
                            });
                        </script>
    
                <div id="TerminosCondiciones" style="display:none">
                    <div class="row"> 
                        <div class="col-xs-12">
                            <p>
                            <b>TERMINOS Y CONDICIONES APLICABLES</b><br><br>

                            <b style="color:#FF9933";> www.seguroteconviene.com</b> es propiedad de la empresa JIMFOR, S.A. (Corredores de Seguros) qui&eacute;n posee todos sus derechos registrados y reservados para su uso y desarrollo exclusivo, y que en lo sucesivo se denominar&aacute; EL SITIO.
                            El indebido uso, total o parcial, del contenido, informaci&oacute;n, logo, modelos y dise&ntilde;os suministrados por EL SITIO est&aacute; prohibido por las leyes de la Rep&uacute;blica de Panam&aacute;, y ser&aacute; sancionada en los Tribunales de Justicia de nuestro
                            pa&iacute;s acorde con las leyes locales y tratados internacionales de Derecho de Autor.<br><br>
                            El t&eacute;rmino Usuario lo identifica a Usted y a todas las personas que accedan a EL SITIO.<br><br>
                            Por favor, antes de continuar con el uso de este SITIO Web lea detenidamente nuestros T&eacute;rminos y Condiciones de Uso. Estos T&eacute;rminos regir&aacute;n el uso de EL SITIO Web y usted se obliga a cumplirlos.<br><br>
                            Al entrar y utilizar nuestra p&aacute;gina www.seguroteconviene.com usted acepta los t&eacute;rminos y condiciones que detallamos a continuaci&oacute;n, por lo que debe leer detenida y cuidadosamente los t&eacute;rminos y condiciones del uso de EL SITIO.
                            Si Usted no est&aacute; de acuerdo con cualquiera de los t&eacute;rminos y condiciones que a continuaci&oacute;n se detallan debe salir de  EL SITIO y no utilizarlo.
                            Si usted contin&uacute;a utilizando EL SITIO entonces constituye una aceptaci&oacute;n de su parte de todos los t&eacute;rminos y condiciones descritos a continuaci&oacute;n, los cuales podr&iacute;an ser modificados por www.seguroteconviene.com en cualquier momento,
                            seg&uacute;n su criterio y sin previo aviso.  Nos reservamos el derecho de cambiar, alterar, eliminar, actualizar, agregar o de cualquier manera modificar, en parte o en su totalidad, los t&eacute;rminos y condiciones aqu&iacute; plasmados.
                            Dichas modificaciones ser&aacute;n efectivas inmediatamente despu&eacute;s de su publicaci&oacute;n. Al utilizar EL SITIO despu&eacute;s de haber publicado dichas modificaciones, alteraciones o actualizaciones el Usuario queda  obligado  a cumplir los nuevos t&eacute;rminos.<br><br>

                            <b style="color:#FF9933";>www.seguroteconviene.com</b> es una p&aacute;gina de b&uacute;squeda, cotizaci&oacute;n, comparaci&oacute;n e informaci&oacute;n de p&oacute;lizas de seguros ofrecidas por diferentes compa&ntilde;&iacute;as aseguradoras del mercado local paname&ntilde;o, exclusivamente para residentes de la Rep&uacute;blica de Panam&aacute;.<br><br>

                            La informaci&oacute;n y el material que se promueve en EL SITIO son solo una referencia y orientaci&oacute;n para la compra de seguros, y no detalla o incluye los t&eacute;rminos y condiciones aplicables a las p&oacute;lizas y coberturas  de cada compa&ntilde;&iacute;a aseguradora que
                            se presentan en esta p&aacute;gina.  Toda p&oacute;liza de seguros est&aacute; sujeta a las condiciones generales y particulares de cada compa&ntilde;&iacute;a aseguradora y es responsabilidad absoluta de usted quien se sirve de esta p&aacute;gina web (el usuario) de solicitar y revisar
                            las mismas al momento de contratar una p&oacute;liza con su respectiva compa&ntilde;&iacute;a aseguradora.<br><br>

                            Las tarifas ofrecidas en las cotizaciones realizadas por el Usuario a trav&eacute;s de EL SITIO, una vez sean solicitadas por el Usuario (es decir, al hacer  un clic en solicitar, lo cual otorga un n&uacute;mero de orden y cuya secuencia queda registrada), ser&aacute;n
                            validadas y honradas por la respectiva compa&ntilde;&iacute;a aseguradora durante un per&iacute;odo m&aacute;ximo de siete d&iacute;as calendario contados a partir de la fecha de la respectiva cotizaci&oacute;n, por lo que, en caso de darse un cambio de tarifas durante
                            dicho per&iacute;odo, tal cambio no afectar&aacute; la cotizaci&oacute;n dada al usuario.<br><br>

                            Toda la informaci&oacute;n que aparece y revelamos en www.seguroteconviene.com (indistintamente la p&aacute;gina web) es para el uso exclusivo del usuario y le est&aacute; prohibido el uso comercial y de parte de cualquier otra persona o entidad jur&iacute;dica sin la
                            autorizaci&oacute;n previa de JIMFOR, S.A.  JIMFOR, S.A. concede al usuario el derecho no exclusivo, revocable y no transferible de utilizar EL SITIO de conformidad con los presentes t&eacute;rminos y condiciones y, a su vez el usuario acepta no replicar
                            cualquier parte de esta p&aacute;gina web, cortar, hackear o interrumpir el servicio o los servicios usados para desarrollar el buen funcionamiento de la p&aacute;gina web.  El usuario s&oacute;lo podr&aacute; reproducir cualquier informaci&oacute;n contenida o publicada en EL
                            SITIO exclusivamente para su uso personal.<br><br>

                            Declara JIMFOR, S.A. y as&iacute; lo acepta el usuario que la informaci&oacute;n publicada en EL SITIO no necesariamente refleja la posici&oacute;n de JIMFOR, S.A., ni de sus empleados, oficiales, directores, accionistas y concesionarios. JIMFOR, S.A. no controla
                            el contenido disponible en EL SITIO; y, en consecuencia, JIMFOR, S.A. no asume responsabilidad alguna por el contenido suministrado a EL SITIO por sus proveedores  y agentes ajenos a JIMFOR, S.A. Por esta raz&oacute;n, JIMFOR, S.A. no se hace
                            responsable por ninguna de las informaciones y conceptos que se emitan en EL SITIO por parte de tales proveedores y agentes.<br><br>

                            JIMFOR, S.A. no garantiza la exactitud y veracidad de los contenidos provistos por terceros, y por tanto, no es responsable de cualesquiera da&ntilde;os y/o perjuicios, que pudieran ser sufridos por el usuario en virtud de la confianza este
                            haya depositado en EL SITIO.<br><br>

                            Para que el usuario tenga acceso a informaci&oacute;n de las diferentes p&oacute;lizas ofrecidas a trav&eacute;s de EL SITIO, el mismo deber&aacute; suministrar informaci&oacute;n veraz y espec&iacute;fica seg&uacute;n sea el caso, y en todo momento el
                            usuario responder&aacute; por la veracidad de la informaci&oacute;n proporcionada a www.seguroteconviene.com. Los datos solicitados por EL SITIO, para poder darle una propuesta de servicio o de seguros, ser&aacute;n utilizados &uacute;nicamente para hacer
                            contacto con su persona y no ser&aacute;n difundidos, distribuidos o comercializados a terceras personas o comercios.  No obstante la informaci&oacute;n suministrada por los usuarios otorgan a JIMFOR, S.A. las autorizaciones que otorga las leyes
                            de la Rep&uacute;blica de Panam&aacute;. JIMFOR, S.A. y www.seguroteconviene.com valora, respeta y protege la informaci&oacute;n que usted nos suministra.<br><br>

                            La informaci&oacute;n y contenido de EL SITIO se proporciona solo como una referencia y orientaci&oacute;n para la compra de seguros, con fines informativos y de orientaci&oacute;n sobre p&oacute;lizas de seguros ofrecidas en el mercado paname&ntilde;o.  JIMFOR, S.A. no pretende ofrecer todos los productos de todas las compa&ntilde;&iacute;as aseguradoras de la Rep&uacute;blica de Panam&aacute;, ni tampoco garantizar que el costo de estos productos sean los mejores y m&aacute;s bajos del mercado.  JIMFOR, S.A. no garantiza que estos productos y servicios presentados a trav&eacute;s de EL SITIO satisfagan a cada uno de nuestros usuarios o sus necesidades, solo son como base de ilustraci&oacute;n y comparaci&oacute;n.
                            EL SITIO no busca cerrar la venta a trav&eacute;s de internet, lo que busca es darle las herramientas al usuario para que pueda comparar p&oacute;lizas de seguro con diferentes compa&ntilde;&iacute;as aseguradoras en la Rep&uacute;blica de Panam&aacute;.
                            El cierre o contrataci&oacute;n de cualesquiera p&oacute;lizas de seguros se har&aacute; posteriormente por un personal id&oacute;neo de JIMFOR, S.A. cumpliendo con los requisitos y formalidades exigidos por las compa&ntilde;&iacute;as aseguradoras y la legislaci&oacute;n nacional.<br><br>

                            Ni JIMFOR, S.A. ni la p&aacute;gina web www.seguroteconviene.com garantizan:<br>
                            1. Que la operaci&oacute;n de EL SITIO no tenga errores o interrupciones, y que estos sean reparados.
                            <br>2. Que cualquier correo enviado al usuario o manejo de EL SITIO est&eacute; libre de virus u otros dispositivos da&ntilde;inos y contaminantes.  No somos responsables sobre da&ntilde;os, perjuicios o p&eacute;rdidas que el usuario pueda sufrir causados por fallas en el sistema, en el servidor o en internet, as&iacute; como tampoco por cualquier virus que pudiera infectar la computadora del usuario como consecuencia del acceso, uso o examen de EL SITIO o a ra&iacute;z de cualquier transferencia de datos, archivos, im&aacute;genes, textos o audios contenidos en el mismo.
                            <br>3. Que todo usuario califique para los productos y servicios ofrecidos a trav&eacute;s de EL SITIO.
                            <br>4. Que la informaci&oacute;n suministrada a trav&eacute;s de EL SITIO pueda ser cambiada por las compa&ntilde;&iacute;as aseguradoras participantes en cualquier momento.
                            <br>5. Que EL SITIO est&eacute; libre de errores en su informaci&oacute;n y contenido. El usuario reconoce que el confiar en cualquier aviso, opini&oacute;n, declaraci&oacute;n, memor&aacute;ndum o informaci&oacute;n ser&aacute; bajo su propio riesgo.
                            <br>6. El uso de la informaci&oacute;n presentada a trav&eacute;s de EL SITIO no es garant&iacute;a, ya sea expresa o t&aacute;cita, de que la misma est&eacute; sin errores y sea precisa,  por lo que ni  JIMFOR, S.A. ni www.seguroteconviene.com  se  hacen responsables, en ning&uacute;n caso, por da&ntilde;os directos, especiales, incidentales, indirectos o consecuenciales que en cualquier forma se deriven o se relacionen del uso del contenido e informaci&oacute;n suministrado por EL SITIO.
                            <br>7. P&oacute;lizas de Incendio: Cada compa&ntilde;&iacute;a de seguros mantiene pol&iacute;ticas de suscripci&oacute;n diferentes a la hora de asegurar un bien, es por ello que las tarifas descritas en EL SITIO para las p&oacute;lizas de incendio deben ser tomadas solamente como referencia.  A la hora de asegurar un bien las compa&ntilde;&iacute;as de seguros podr&aacute;n aceptar o declinar la contrataci&oacute;n del seguro seg&uacute;n sea el caso, tomando en consideraci&oacute;n la ubicaci&oacute;n, tipo de construcci&oacute;n y riesgo que tenga la vivienda.  En algunos casos la compa&ntilde;&iacute;a de seguros podr&iacute;a no asegurar viviendas debido a su ubicaci&oacute;n, o podr&iacute;a llevar una tarifa m&aacute;s alta a la presentada en EL SITIO.
                            <br>8. P&oacute;lizas de Vida: Las primas que presenta EL SITIO son de referencia, y est&aacute;n basadas en tarifas para personas con excelentes condiciones de salud.  A la hora de adquirir una p&oacute;liza de vida la compa&ntilde;&iacute;a de seguros le solicitar&aacute; que llene una Solicitud en la cual usted tendr&aacute; que responder un cuestionario m&eacute;dico, luego de evaluado el mismo la compa&ntilde;&iacute;a de seguros aceptar&aacute; su solicitud con las primas que presentamos en nuestra p&aacute;gina web o podr&aacute;, seg&uacute;n sea al caso, hacer recargos a la prima.  En algunos casos, debido a la edad y suma asegurada que solicite la persona, la compa&ntilde;&iacute;a de seguros podr&aacute; requerir ex&aacute;menes m&eacute;dicos y de laboratorio para evaluar su solicitud, estos se deber&aacute;n realizar a trav&eacute;s de los m&eacute;dicos y laboratorios aprobados por la compa&ntilde;&iacute;a de seguros.
                            <br>9. P&oacute;lizas de Auto: El usuario de esta p&aacute;gina autoriza a JIMFOR, S.A., y a las compa&ntilde;&iacute;as de seguros participantes, a revisar el historial de tr&aacute;nsito del usuario en la Autoridad de Tr&aacute;nsito y Transporte Terrestre (ATTT).  Las primas de referencia que se presentan en EL SITIO son para personas que tienen un buen historial de tr&aacute;nsito.  Cada compa&ntilde;&iacute;a de seguros tiene sus propias pol&iacute;ticas de suscripci&oacute;n, por lo que no hay uniformidad a la hora de clasificar qui&eacute;n tiene un mal historial de tr&aacute;nsito.  En caso de que una compa&ntilde;&iacute;a de seguros determine que el usuario entra en esta categor&iacute;a podr&iacute;a elegir no asegurarlo o aumentar la prima de referencia detallada en EL SITIO.
                            <br><br>
                            Declara JIMFOR, S.A. y as&iacute; lo acepta el usuario que JIMFOR, S.A. / www.seguroteconviene.com podr&aacute; realizar los cambios que estime conveniente a EL SITIO, en cualquier momento y cuando lo estime conveniente, ya sea sobre los precios o tarifas y condiciones, servicios y contenido en general, sin tener que notificar al usuario,  y sin que ello de lugar ni derecho a ninguna reclamaci&oacute;n o indemnizaci&oacute;n, ni que esto implique reconocimiento de responsabilidad alguna a favor del usuario.
                            <br><br>
                            JIMFOR, S.A., www.seguroteconviene.com, sus logotipos y material relacionado que aparece en EL SITIO, son marcas, nombres de dominio, nombres comerciales y obras art&iacute;sticas propiedad de sus respectivos titulares y est&aacute;n protegidos las leyes aplicables en materia de propiedad intelectual y derechos de autor en la Rep&uacute;blica de Panam&aacute;, as&iacute; como por los tratados internacionales.  Se proh&iacute;be expresamente a los usuarios modificar, alterar o suprimir, los avisos, marcas, nombre de dominio, nombres comerciales, logotipos o en general cualquier indicaci&oacute;n que se refiera a la propiedad de la informaci&oacute;n contenida en EL SITIO.
                            <br><br>
                            El Usuario no puede ni podr&aacute; copiar, publicar, distribuir, reproducir, modificar, vender, rentar, total o parcialmente, ninguno de los contenidos de EL SITIO ni realizar cualquier acto que viole o pueda violar, de alguna forma, los derechos de Propiedad Intelectual e Industrial de JIMFOR, S.A. o de www.seguroteconviene.com
                            <br><br>
                            www.seguroteconviene.com  puede tener en EL SITIO enlaces con p&aacute;ginas de terceras personas o empresas que ofrecen productos y servicios al usuario.  Estos enlaces son ofrecidos para conveniencia del usuario y no deben ser vistos como referidos o endosados por www.seguroteconviene.com.  Estos enlaces no son manejados o mantenidos por www.seguroteconviene.com  y la responsabilidad de lo que all&iacute; se publica y ofrece es responsabilidad exclusiva de sus anunciantes.  JIMFOR, S.A. / www.seguroteconviene.com no verificamos ni garantizamos el contenido, informaci&oacute;n, opiniones, productos y servicios ofrecidos por estas empresas y personas que mantiene enlaces con EL SITIO.
                            <br><br>
                            La presencia de un enlace de un tercero publicado en www.seguroteconviene.com, una marca registrada o marca de f&aacute;brica, no significa que estamos endosando, patrocinando o afiliados a la misma, o que tenga una asociaci&oacute;n con nuestra empresa o EL SITIO, y no podemos ofrecer ninguna garant&iacute;a sobre la calidad de los productos y servicios all&iacute; proporcionados, el usuario deber&aacute; realizar sus propias diligencias sobre la calidad y confiabilidad de estos productos o servicios antes de continuar con cualquier transacci&oacute;n comercial con ellos.
                            <br><br>
                            Declaran  JIMFOR, S.A. / www.seguroteconviene.com y as&iacute; lo acepta el Usuario, que la informaci&oacute;n publicada en EL SITIO no necesariamente refleja la posici&oacute;n de .  JIMFOR, S.A. / www.seguroteconviene.com ni de sus empleados, oficiales, directores, accionistas y concesionarios.
                            <br><br>
                            El Usuario acepta expresamente que ni .  JIMFOR, S.A. / www.seguroteconviene.com. son  responsables por las comunicaciones que puedan darse en virtud de la utilizaci&oacute;n de EL SITIO ni por el mal uso del servicio, ni por informaciones falsas o incorrectas dadas por los Usuarios o por terceros que accedan al servicio sin la debida autorizaci&oacute;n, ni  ser&aacute; responsable por los contenidos o servicios  de terceros a los que el Usuario pueda acceder mediante dispositivos t&eacute;cnicos de enlace o links desde EL SITIO.
                            <br><br>
                            EL USUARIO ACEPTA EXPRESAMENTE QUE EL USO DE EL SITIO ES BAJO SU PROPIO RIESGO.
                            <br><br>
                            El Usuario  (y no  JIMFOR, S.A. ni www.seguroteconviene.com) asumir&aacute; el costo de cualquier servicio, reparaci&oacute;n o correcci&oacute;n de su sistema y acepta expresamente que .  JIMFOR, S.A. / www.seguroteconviene.com no ser&aacute;n responsables de ninguna reclamaci&oacute;n o da&ntilde;os derivados de la falta de rendimiento, error, omisi&oacute;n, interrupci&oacute;n, supresi&oacute;n, defecto, retraso en la operaci&oacute;n, virus inform&aacute;tico, robo, destrucci&oacute;n, acceso no autorizado o la alteraci&oacute;n de documentos personales, o la dependencia o utilizaci&oacute;n de los datos, informaciones, opiniones u otros materiales que aparecen en EL SITIO.
                            <br><br>
                            El Usuario acepta expresamente que  JIMFOR, S.A. y  www.seguroteconviene.com no son ni ser&aacute;n responsables, directa o indirectamente, de ning&uacute;n acto o contenido difamatorio, injurioso, obsceno, sexista, violento o que induzca a la violencia, racista, ofensivo o conducta inmoral o ilegal, llevada a cabo por el Usuario,  otros Usuarios  o terceros.
                            <br><br>
                            Estas exclusiones han sido enunciadas en forma demostrativa, m&aacute;s no limitativa o restrictiva, toda vez que el Usuario acepta expresamente que JIMFOR, S.A. y www.seguroteconviene.com no son ni ser&aacute;n el responsables por cualquier p&eacute;rdida, da&ntilde;o, perjuicio, reclamo, acci&oacute;n, responsabilidad u otros, de cualquier tipo que &eacute;stos sean, basado en, o resultante del uso o tentativa de uso de EL SITIO o cualquier otro sitio vinculado, por lo que libera expresamente a   JIMFOR, S.A. y a www.seguroteconviene.com sus directores, accionistas o representantes, de cualquier reclamaci&oacute;n, acci&oacute;n o demanda, ya fuere penal, civil, administrativa o de cualquier otra naturaleza.
                            <br><br>
                            Los datos de inscripci&oacute;n y alguna otra informaci&oacute;n sobre el Usuario est&aacute; sujeta a la pol&iacute;tica de privacidad de JIMFOR, S.A. y www.seguroteconviene.com.  Para obtener m&aacute;s informaci&oacute;n, por favor revise nuestra pol&iacute;tica de privacidad completa que puede encontrarse en EL SITIO y que forma parte integral de estos T&eacute;rminos y Condiciones.
                            <br><br>
                            El Usuario se obliga a indemnizar a JIMFOR, S.A. y/o a  www.seguroteconviene.com por cualquier acci&oacute;n, demanda, p&eacute;rdida, da&ntilde;os y perjuicios, costas legales y administrativas generados por actos u omisiones del Usuario, culpa, negligencia, comisi&oacute;n de delitos y, en general,  por cualquier incumplimiento relacionado con estos T&eacute;rminos y Condiciones.
                            <br><br>
                            El Usuario autoriza expresamente a JIMFOR, S.A. y/o a  www.seguroteconviene.com a que ceda o transmita los derechos y obligaciones plasmadas en estos T&eacute;rminos y Condiciones a los socios o sucesores o cesionarios que pudiera  tener en un futuro.
                            <br><br>
                            Las presentes condiciones se regir&aacute;n e interpretar&aacute;n de conformidad con las leyes de la Rep&uacute;blica de Panam&aacute; y los Usuarios se someten a la jurisdicci&oacute;n de los tribunales de la Rep&uacute;blica de Panam&aacute; para efectos de la resoluci&oacute;n de cualquier duda, dificultad o controversia relacionada con todo o parte de los Terminos y Condiciones, por lo que el Usuario declara la renuncia expresa al domicilio.
                            <br><br>
                            POLITICAS DE PRIVACIDAD
                            <br><br>
                            Sabemos de la confianza que el Usuario (usted) deposita en a  www.seguroteconviene.com cuando ingresa a EL SITIO web. Por esta raz&oacute;n, la pol&iacute;tica de privacidad de la empresa JIMFOR, S.A. y/o a  www.seguroteconviene.com pretende reguardar su informaci&oacute;n de la forma en que lo hacen los m&aacute;s prestigiosos sitios web.
                            <br><br>
                            JIMFOR, S.A. y/o a  www.seguroteconviene.com se compromete a resguardar su informaci&oacute;n y confirma que s&oacute;lo eventualmente la utilizar&aacute;, siempre que cuando sea necesario, para completar transacciones con terceras partes, situaci&oacute;n que es plenamente conocida y aprobada por el Usuario en tal calidad, en el entendimiento de que, por el mero uso o acceso a los servicios de nuestro sitio web, el Usuario (usted) acepta y aprueba los t&eacute;rminos de esta pol&iacute;tica de privacidad. Si est&aacute; en desacuerdo, por favor salga de esta p&aacute;gina y no acceda a nuestros servicios.
                            <br><br>
                            Al suscribirse al servicio de www.seguroteconviene.com, los Usuarios deben facilitar algunos datos que ser&aacute;n utilizados, entre otras, para las siguientes finalidades:<br>
                            1. Ofrecer los servicios del sitio.
                            <br>2. Ofrecer otros productos o servicios que puedan ser de inter&eacute;s de los Usuarios.
                            <br>3. Personalizar el servicio del sitio.
                            <br>4. Mejorar nuestros servicios/productos y marketing.
                            <br>5. Compilar estad&iacute;sticas.
                            <br>6. Evaluar y administrar  el uso del Sitio Web.
                            <br>7. Identificar problemas sist&eacute;micos, soluci&oacute;n de controversias o temas regulatorios
                            <br>8. Para contactarlo
                            <br>9. Para la observancia de la ley, ordenamiento jur&iacute;dico y requerimientos judiciales.
                            <br>10. Es posible que usemos esta informaci&oacute;n con nuestros proveedores de servicios y auspiciadores, para efectos de medir la efectividad de nuestra publicidad, contenido y programaci&oacute;n, mas no asumimos responsabilidad por los actos de estos proveedores, ya que ellos saben que s&oacute;lo pueden contactar al Usuario con una finalidad comercial y porque sus conductas no est&aacute;n bajo nuestra dependencia.
                            <br><br>
                            Algunos de estos datos son requeridos de forma obligatoria y otros de forma voluntaria. En el caso de los primeros, si el Usuario decide no entregar dicha informaci&oacute;n no podr&aacute; solicitar  los servicios de www.seguroteconviene.com
                            <br><br>
                            El Usuario acepta y autoriza que JIMFOR, S.A. y/o a  www.seguroteconviene.com puede ceder o transmitir la citada informaci&oacute;n a los socios o sucesores que podr&iacute;a tener en un futuro.
                            <br><br>
                            Adicionalmente, el Usuario acepta que JIMFOR, S.A. y/o a  www.seguroteconviene.com podr&aacute;n utilizar otra informaci&oacute;n personal no identificable, siendo aquella la que no especifica un Usuario final determinado. Este tipo de informaci&oacute;n puede incluir una URL del sitio web que visit&oacute; antes de ingresar a nuestro sitio, las que visita despu&eacute;s de ingresar a nuestro sitio, el tipo de browser que utiliza o informaci&oacute;n sobre el Protocolo de Internet (IP). Esta informaci&oacute;n ser&aacute; recolectada de manera autom&aacute;tica a trav&eacute;s de herramientas electr&oacute;nicas como cookies que se utilizan para facilitar el uso de EL SITIO, las que se usan  con el objeto de ahorrarle tiempo en nuestro sitio web.  Las cookies sirven adem&aacute;s para recopilar informaci&oacute;n personal no identificable como p&aacute;ginas que ha visitado y los links que ha activado mediante un clic. El uso de cookies nos permite crear un ambiente web m&aacute;s amigable y f&aacute;cil de usar. Con todo siempre est&aacute; la posibilidad de que el Usuario rechace el uso de cookies pese a que nuestro sitio podr&iacute;a no desplegar toda la informaci&oacute;n &iacute;ntegra en este caso.
                            <br><br>
                            JIMFOR, S.A. y/o  www.seguroteconviene.com han tomado las precauciones que han considerado necesarias en su base de datos para que la informaci&oacute;n sobre los Usuarios est&eacute; protegida y est&aacute;n  comprometidos con la seguridad de la informaci&oacute;n brindada por el Usuario, para lo que han implementado sofisticados productos de firewall y de seguridad tecnol&oacute;gica pero no pueden garantizar que no sucedan eventos o que la informaci&oacute;n almacenada en sus  registros sean inquebrantables de forma ilegal por terceros.
                            <br><br>
                            JIMFOR, S.A. y/o a  www.seguroteconviene.com puede compartir informaci&oacute;n que el Usuario haya colocado  en EL SITIO, al momento de contactarse con otros Usuarios o al revisar productos, servicios o al incorporar contenido. Esta informaci&oacute;n podr&iacute;a ser accesible por otros clientes o empresas o proveedores, aparecer en otros sitios web y por ende ser utilizadas por terceros. JIMFOR, S.A. y/o a  www.seguroteconviene.com no controla a qui&eacute;nes leen la informaci&oacute;n que el Usuario ha subido a nuestra p&aacute;gina web o lo que puede suceder con estos datos que el Usuario voluntariamente comparti&oacute;. Le recomendamos que sea cauteloso y adopte las precauciones del caso, antes de compartir datos.
                            <br><br>
                            El Usuario podr&aacute; siempre solicitar que lo removamos de nuestra lista de contactos v&iacute;a e-mail, salvo respecto de aquellos correos electr&oacute;nicos que sean necesario para completar una transacci&oacute;n. Nuestros correos tendr&aacute;n un link al final para ser removidos.
                            <br><br>
                            La compa&ntilde;&iacute;a se reserva el derecho a cambiar esta pol&iacute;tica. En el evento de reformas a la pol&iacute;tica, por el solo hecho de usar nuestra p&aacute;gina web, el Usuario acepta los cambios y declara conocerlos ya que la compa&ntilde;&iacute;a ha procedido a publicarlos en EL SITIO web.
        </p>
                        </div>
                        </div>
                        <div class="row" align="center">
                            <div class="col-xs-12">
                                <div id="myTab" class="row">
                                    <div>

                                        <div class="col-xs-12"><a href="#personal"></a>
                                            <button type="button" class="btn btn-tema" onclick="DesactivarTerminosPolIncendio();return false;">ATRAS</button>&nbsp;<button type="submit"  onclick="formvalidationincendio();" class="btn btn-siguiente">Cotizar Ahora</button></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                
</form>








    <?}?>
<?php $this->load->view('tema/footer.php'); ?>