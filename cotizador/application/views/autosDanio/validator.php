<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/add.php'); ?>

<?php $url=base_url();?>
    <section id="featured">
        <!-- start slider -->
        <div class="container hidden-xs">
            <div class="row  ">
                <div class="col-xs-12">
                    <!-- Slider -->

                    <div class="gris">
                        Cotización de Seguro de Auto de Uso Particular para Cobertura a Terceros
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>

    </section>
    <!-- 1era tabla -->
<div id="row_img_num">

</div>
<div id="row_letas"></div>
<div   ></div>
<div id="resultados2"></div>

  <div class="row hidden-xs" id="resultados">
      <div class="col-xs-12 ">
    <div class="col-xs-3" style="">
    <p>

        Lesiones Corporales
        <!--<a href="#" class="les" data-trigger="hover" data-placement="right auto" data-toggle="tooltip" title="Lesiones Corporales:  Le brinda cobertura hasta el límite contratado en caso de que usted lesione corporalmente a terceros en caso de accidente."><i class="glyphicon glyphicon-info-sign blue"></i></a>
    -->
        <br>
        <br>

        Daños a Propiedad Ajena
        <!--<a href="#" class="les" data-trigger="hover" data-placement="right auto" data-toggle="tooltip" title="Daños a la Propiedad Ajena: Esta cobertura se extiende para cubrir los daños ocasionados por su auto a bienes propiedad de terceros."><i class="glyphicon glyphicon-info-sign black"></i></a>
    -->
        <br>
        <br>
        Gastos Médicos
       <!-- <a href="#" class="les" data-trigger="hover" data-placement="right auto" data-toggle="tooltip" title="Gastos Médicos: Ampara el pago de gastos médicos como consecuencia de lesiones corporales que sufra el Asegurado, o cualquier persona ocupante del auto, a consecuencia de un accidente de tránsito cubierto por la póliza."><i class="glyphicon glyphicon-info-sign black"></i></a><br><br></p>
    -->
        <br>
        <br>

</div>
    <div class="col-xs-3" style="">
    <div class="btn-titulo">
        Plan Obligatorio
    </div>
    <br>
    B./5,000.00  por persona
    <br>
    B./10,000.00  por accidente
    <hr>B./5,000.00 por accidente
    <hr>Específico por aseguradora.
    <br>Revisar en Más Información
    </p>

    </div>
    <div class="col-xs-3" style="">
   <div class="btn-titulo">Plan Intermedio</div>
        <br>B./10,000.00  por persona
        <br>B./20,000.00  por accidente
        <hr>B./10,000 por accidente
        <hr>B./2,000.00  por persona
        <br>B./10,000.00  por accidente
        </p>
    </div>
    <div class="col-xs-3" style="">
        <div class="btn-titulo">
            Plan Deluxe
        </div>
        <br>
        B./25,000.00 por persona
        <br>B./50,000.00 por accidente
        <hr>B./25,000.00 por accidente
        <hr>B./5,000.00  por persona
        <br>B./25,000.00  por accidente
        </p>
    </div>
        </div>
        </div>
        <hr>



    <div id="resultados1" class="row" style="">
    <div class="col-xs-12">




    <? $iteracion1=0;
    $Obligatorio="Obligatorio"; $Intermedio="Intermedio"; $Deluxe="Deluxe";
    foreach ($autos_terceros as $filas1) {

            $i=$filas1->idaseguradora;
            $monto_obligatorio = $filas1->monto_obligatorio;
            $iteracion1 = $iteracion1 + 1;

        $idaseguradoras=$filas1->idaseguradora;
        $plan1 = $idaseguradoras;
        $plan2 = $idaseguradoras+100;
        $plan3 = $idaseguradoras+200;


?>
                <div  id="tab_<?=$iteracion?>"  class="col-xs-12 well">
                    <div class="row">
                <div class="col-xs-12 aseguradoras" align="center">

<?     switch ($filas1->idaseguradora) {
            case 1:?>
        <div class="logos col-xs-12" align="center">  <img src="<?= $url ?>img/logos/iseguros133.png" style="margin-bottom:20px;"></div>
                <?php break;
            case 2:?>
            <div class="logos col-xs-12" align="center">  <img src="<?= $url ?>img/logos/generali.png"></div>
                <?php break;
            case 3:?>
    <div class="logos col-xs-12" align="center"> <img src="<?= $url ?>img/logos/assa.png" style="margin-bottom:25px; margin-top:10px;"></div>
                <?php break;
            case 4:?>
    <div class="logos col-xs-12" align="center"><img src="<?= $url ?>img/logos/banesco.jpg" style="margin-bottom:20px;"></div>
                <?php break;
            case 5:?>
    <div class="logos col-xs-12" align="center">  <img src="<?= $url ?>img/logos/acerta.png" style="margin-bottom:20px;"></div>
                <?php break;
            case 6:?>
    <div class="logos col-xs-12" align="center"> <img src="<?= $url ?>img/logos/HSBC_Seguros.png" style="margin-bottom:15px;"></div>
                <?php break;
            case 7:?>
    <div class="logos col-xs-12" align="center">  <img src="<?= $url ?>img/logos/sura.png" style="margin-bottom:20px;"></div>
                <?php break;
            case 9:?>
    <div class="logos col-xs-12" align="center">   <img src="<?= $url ?>img/logos/Logo NASE.JPG" style="margin-bottom:20px;"></div>
                <?php break;
        }
   ?>


              <?
                   $nombre_aseguradora_c=$aseguradoras_consult[$iteracion1];
                   foreach ($nombre_aseguradora_c as $filas3) {

                     $nombre_aseguradora1=$filas3->nombre;
                   }

              ?>

            <div class="col-xs-6 precio">
                <?php if(($monto_obligatorio == 0.00)||($monto_obligatorio == 9999.99)){
                   echo "<span class=' letras-resultado-plan glyphicon glyphicon-info-sign'>".$Obligatorio;
                   echo "</span>";
                }else{?>
 <a  class="letras-resultado-plan" onclick="ActivarInformacion('<?=$Obligatorio?>','<?=$plan1?>');">
        <?  echo "<span class='glyphicon glyphicon-info-sign'>".$Obligatorio;?>
        </span></a><?}?>

            </div>
            <?php if(($monto_obligatorio == 0.00)||($monto_obligatorio == 9999.99)){?>
                        <div class="col-xs-6 letras-resultado-prima" align="center" ><u>B/.
                          <?php if(($monto_obligatorio == 0.00)||($monto_obligatorio == 9999.99)){?>
                              <?php echo number_format($monto_obligatorio, "2", ".", ","); ?>
                          <?}else{?>
                              <a href="validator/?nombre=<?=$nombre?>&apellido=<?=$apellido?>&monto=<?=$filas1->monto_obligatorio?>&cedula=<?=$cedula?>&&company=<?=$nombre_aseguradora1?>&plan=Obligatorio&poliza=<?=$monto_obligatorio?>&marca=<?=$marca?>&modelo=<?=$modelo?>&anio_auto=<?=$anio_auto?>&sexo=<?=$sexo?>&tipo_auto=<?=$tipo_auto?>&estado_civil=<?=$estado_civil?>&fecha_nac=<?=$fecha_nac?>&email=<?=$email?>&estado_auto=<?=$estado_auto?>&telefono=<?=$telefono?>&celular=<?=$celular?>">
                                  <?php echo number_format($monto_obligatorio, "2", ".", ","); ?></a>
                          <?}?>
                      </u>
                     </div>
                <!--<button class="btn btn-warning btn-small" disabled="disabled" type="button">Solicitar
                    <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </button>
                <p>
                <a data-toggle="modal" href="<?php echo "#".$i; ?>"> Más Información</a>
                </p>-->
            <?php }else{?>
                <form name="PlanObligatorio<?=$i?>" id="Aseguradora<?=$i?>" action="complete" method="POST">
                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                 <!--   <input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">
                    <input type="hidden" name="dcolision" value="<?=$calculo_deducible_colision_premium?>">
                    <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                    <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">
                      <input type="hidden" name="poliza" value="<?=$prima_premium_total?>">
                       <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                          <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">-->
                    <input type="hidden" name="plan" value="Plan Obligatorio">

                    <input type="hidden" name="marca" value="<?=$marca?>">
                    <input type="hidden" name="modelo" value="<?=$modelo?>">
                    <input type="hidden" name="monto" value="<?=$filas1->monto_obligatorio?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora1?>">
                    <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

                    <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                    <input type="hidden" name="sexo" value="<?=$sexo?>">
                    <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                    <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">

                    <input type="hidden" name="email" value="<?=$email?>">
                    <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
                    <input type="hidden" name="telefono" value="<?=$telefono?>">
                    <input type="hidden" name="celular" value="<?=$celular?>">
                    <!-- <button class="btn btn-warning btn-small" type="submit">
                        Solicitar
                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </button>
                     </a>-->

                </form>
                  <div class="col-xs-6 letras-resultado-prima" align="center" ><u>B/.
                          <?php if(($monto_obligatorio == 0.00)||($monto_obligatorio == 9999.99)){?>
                              <?php echo number_format($monto_obligatorio, "2", ".", ","); ?>
                          <?}else{?>
                              <a href="complete/?nombre=<?=$nombre?>&apellido=<?=$apellido?>&monto=<?=$filas1->monto_obligatorio?>&cedula=<?=$cedula?>&&company=<?=$nombre_aseguradora1?>&plan=Plan de Seguro Obligatorio&poliza=<?=$monto_obligatorio?>&marca=<?=$marca?>&modelo=<?=$modelo?>&anio_auto=<?=$anio_auto?>&sexo=<?=$sexo?>&tipo_auto=<?=$tipo_auto?>&estado_civil=<?=$estado_civil?>&fecha_nac=<?=$fecha_nac?>&email=<?=$email?>&estado_auto=<?=$estado_auto?>&telefono=<?=$telefono?>&celular=<?=$celular?>">
                                  <?php echo number_format($monto_obligatorio, "2", ".", ","); ?></a>
                          <?}?>
                      </u>
                     </div>
                </div>
              <div class="col-xs-12 aseguradoras" align="center">
                <div class="col-xs-6 precio">

                <div class="col-xs-6 precio">
                <?php if($filas1->monto_intermedio==0.00){
                   echo "<span class=' letras-resultado-plan glyphicon glyphicon-info-sign'>".$Intermedio;
                   echo "</span>";
                }else{?>
 <a  class="letras-resultado-plan" onclick="ActivarInformacion('<?=$Intermedio?>','<?=$plan2?>');">
        <?  echo "<span class='glyphicon glyphicon-info-sign'>".$Intermedio;?>
        </span></a><?}?>

            </div>






         <?php /*if($filas1->monto_intermedio==0.00){echo "No Aplica";
         }else {
            echo "B./ ".$filas1->monto_intermedio;
         }*/ ?>
     </div>
     <?php
     if($filas1->monto_intermedio==0.00){?>

                    <div class="col-xs-6 letras-resultado-prima" align="center" ><u>B/.
                          <?php if($filas1->monto_intermedio==0.00){?>
                              <?php echo number_format($filas1->monto_intermedio, "2", ".", ","); ?>
                          <?}else{?>
                              <a href="complete/?nombre=<?=$nombre?>&apellido=<?=$apellido?>&monto=<?=$filas1->monto_intermedio?>&cedula=<?=$cedula?>&company=<?=$nombre_aseguradora1?>&plan=Intermedio&poliza=<?=$monto_obligatorio?>&marca=<?=$marca?>&modelo=<?=$modelo?>&anio_auto=<?=$anio_auto?>&sexo=<?=$sexo?>&tipo_auto=<?=$tipo_auto?>&estado_civil=<?=$estado_civil?>&fecha_nac=<?=$fecha_nac?>&email=<?=$email?>&estado_auto=<?=$estado_auto?>&telefono=<?=$telefono?>&celular=<?=$celular?>">
                                  <?php echo number_format($monto_obligatorio, "2", ".", ","); ?></a>
                          <?}?>
                      </u>
                     </div>



         <!--<button class="btn btn-warning btn-small" disabled="disabled" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right">
             </i>
         </button>
         <p>
         <a data-toggle="modal" href="<?php echo "#".$i; ?>"> Más Información</a></p>-->



     <?php }else {
         ?>


         <form name="PlanIntermedio<?=$i?>" id="Aseguradora<?=$i?>" action="complete" method="POST">
             <input type="hidden" name="nombre" value="<?=$nombre?>">
             <input type="hidden" name="apellido" value="<?=$apellido?>">
             <input type="hidden" name="cedula" value="<?=$cedula?>">
             <!--   <input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">
                    <input type="hidden" name="dcolision" value="<?=$calculo_deducible_colision_premium?>">
                    <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                    <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">
                      <input type="hidden" name="poliza" value="<?=$prima_premium_total?>">
                       <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                          <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">-->
             <input type="hidden" name="historial" value="<?=$historial_manejo?>">
             <input type="hidden" name="plan" value="Plan Intermedio">

             <input type="hidden" name="marca" value="<?=$marca?>">
             <input type="hidden" name="modelo" value="<?=$modelo?>">

             <input type="hidden" name="company" value="<?=$nombre_aseguradora1?>">
             <input type="hidden" name="monto" value="<?=$filas1->monto_intermedio?>">
             <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

             <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
             <input type="hidden" name="sexo" value="<?=$sexo?>">
             <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
             <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
             <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">

             <input type="hidden" name="email" value="<?=$email?>">
             <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
             <input type="hidden" name="telefono" value="<?=$telefono?>">
             <input type="hidden" name="celular" value="<?=$celular?>">
             <!--<button class="btn btn-warning btn-small" type="submit">
                 Solicitar
                 <i class="glyphicon glyphicon-circle-arrow-right"></i>
             </button>
               </a>-->

         </form>


                    <div class="col-xs-6 letras-resultado-prima" align="center" ><u>B/.
                          <?php if($filas1->monto_intermedio==0.00){?>
                              <?php echo number_format($filas1->monto_intermedio, "2", ".", ","); ?>
                          <?}else{?>
                              <a href="complete/?nombre=<?=$nombre?>&apellido=<?=$apellido?>&monto=<?=$filas1->monto_intermedio?>&cedula=<?=$cedula?>&company=<?=$nombre_aseguradora1?>&plan=Plan Intermedio&poliza=<?=$monto_obligatorio?>&marca=<?=$marca?>&modelo=<?=$modelo?>&anio_auto=<?=$anio_auto?>&sexo=<?=$sexo?>&tipo_auto=<?=$tipo_auto?>&estado_civil=<?=$estado_civil?>&fecha_nac=<?=$fecha_nac?>&email=<?=$email?>&estado_auto=<?=$estado_auto?>&telefono=<?=$telefono?>&celular=<?=$celular?>">
                                  <?php echo number_format($monto_obligatorio, "2", ".", ","); ?></a>
                          <?}?>
                      </u>
                     </div>


         <!--<a class="a_form" href="validator_d.php?nombre=<?php echo $nombre; ?>&cedula=<?php echo $cedula; ?>&sexo=<?php echo $sexo; ?>&fecha_nac=<?php echo $fecha_nac; ?>&estado_civil=<?php echo $estado_civil; ?>&email=<?php echo $email; ?>&celular=<?php echo $celular; ?>&telefono=<?php echo $telefono; ?>&monto=<?php echo $filas1->monto_intermedio; ?>&rango_terceros=<?php echo $filas1->rango_intermedio; ?>&cobertura_terceros=<?php echo $filas1->cobertura_intermedio; ?>&tipo=Plan Intermedio&poliza=Autos-Terceros&aseguradora=<?php echo $filas1->idaseguradora; ?>"><button class="btn btn-warning btn-small" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right"></i></button></a>--><p>
     <!--<a data-toggle="modal" href="<?php echo "#".$i; ?>">
     Más Información</a>-->
     <?php } ?>
     </p>

</div>
              <div class="col-xs-12 aseguradoras" align="center">

               <?php


        foreach ($nombre_aseguradora_c as $filas3) {

            $nombre_aseguradora1=$filas3->nombre;
        }?>

         <? /* if($filas1->monto_plan3==0.00){
         echo "No Aplica";
         }else {
         echo "B./ ".$filas1->monto_plan3;
          } */
          ?>


           <div class="col-xs-6 precio">
                <?php if($filas1->monto_plan3==0.00){
                   echo "<span class=' letras-resultado-plan glyphicon glyphicon-info-sign'>".$Obligatorio;
                   echo "</span>";
                }else{?>
 <a  class="letras-resultado-plan" onclick="ActivarInformacion('<?=$Deluxe?>','<?=$plan3?>');">
        <?  echo "<span class='glyphicon glyphicon-info-sign'>".$Deluxe;?>
        </span></a><?}?>

            </div>

                <?
                if($filas1->monto_plan3==0.00){?>
     <!--   <button class="btn btn-warning btn-small" disabled="disabled" type="button">
        Solicitar
         <i class="glyphicon glyphicon-circle-arrow-right"></i></button>
        <p>
        <a data-toggle="modal" href="<?php echo "#".$i; ?>">Más Información</a>
        </p>-->

                         <div class="col-xs-6 letras-resultado-prima" align="center" ><u>B/.
                          <?php if($filas1->monto_plan3 == 0.00){?>
                              <?php echo number_format($filas1->monto_plan3, "2", ".", ","); ?>
                          <?}else{?>
                              <a href="complete/?nombre=<?=$nombre?>&apellido=<?=$apellido?>&monto=<?=$filas1->monto_plan3?>&cedula=<?=$cedula?>&company=<?=$nombre_aseguradora1?>&plan=Plan Deluxe&poliza=<?=$monto_obligatorio?>&marca=<?=$marca?>&modelo=<?=$modelo?>&anio_auto=<?=$anio_auto?>&sexo=<?=$sexo?>&tipo_auto=<?=$tipo_auto?>&estado_civil=<?=$estado_civil?>&fecha_nac=<?=$fecha_nac?>&email=<?=$email?>&estado_auto=<?=$estado_auto?>&telefono=<?=$telefono?>&celular=<?=$celular?>">
                                  <?php echo number_format($filas1->monto_plan3, "2", ".", ","); ?></a>
                          <?}?>
                      </u>
                     </div>


        <?php }
        else {?>
            <form name="PlanDeluxe<?=$i?>" id="Aseguradora<?=$i?>" action="complete" method="POST">
                <input type="hidden" name="nombre" value="<?=$nombre?>">
                <input type="hidden" name="apellido" value="<?=$apellido?>">
                <input type="hidden" name="cedula" value="<?=$cedula?>">
                <!--   <input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">
                    <input type="hidden" name="dcolision" value="<?=$calculo_deducible_colision_premium?>">
                    <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                    <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">
                      <input type="hidden" name="poliza" value="<?=$prima_premium_total?>">
                       <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                          <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">-->
                     <input type="hidden" name="historial" value="<?=$historial_manejo?>">
                <input type="hidden" name="plan" value="Plan Deluxe">

                <input type="hidden" name="marca" value="<?=$marca?>">
                <input type="hidden" name="modelo" value="<?=$modelo?>">

 <input type="hidden" name="monto" value="<?=$filas1->monto_plan3?>">
<input type="hidden" name="company" value="<?=$nombre_aseguradora1?>">
                <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                <input type="hidden" name="sexo" value="<?=$sexo?>">
                <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
                <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">

                <input type="hidden" name="email" value="<?=$email?>">
                <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
                <input type="hidden" name="telefono" value="<?=$telefono?>">
                <input type="hidden" name="celular" value="<?=$celular?>">
               <!--  <button class="btn btn-warning btn-small" type="submit">
                    Solicitar
                    <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </button>
                 </a>-->

            </form>


                <div class="col-xs-6 letras-resultado-prima" align="center" ><u>B/.
                          <?php if($filas1->monto_plan3 == 0.00){?>
                              <?php echo number_format($filas1->monto_plan3, "2", ".", ","); ?>
                          <?}else{?>
                              <a href="complete/?nombre=<?=$nombre?>&apellido=<?=$apellido?>&monto=<?=$filas1->monto_plan3?>&cedula=<?=$cedula?>&company=<?=$nombre_aseguradora1?>&plan=Plan Deluxe&poliza=<?=$monto_obligatorio?>&marca=<?=$marca?>&modelo=<?=$modelo?>&anio_auto=<?=$anio_auto?>&sexo=<?=$sexo?>&tipo_auto=<?=$tipo_auto?>&estado_civil=<?=$estado_civil?>&fecha_nac=<?=$fecha_nac?>&email=<?=$email?>&estado_auto=<?=$estado_auto?>&telefono=<?=$telefono?>&celular=<?=$celular?>">
                                  <?php echo number_format($filas1->monto_plan3, "2", ".", ","); ?></a>
                          <?}?>
                      </u>
                     </div>

       <!-- <a class="a_form" href="validator_d.php?nombre=<?php echo $nombre; ?>&cedula=<?php echo $cedula; ?>&sexo=<?php echo $sexo; ?>&fecha_nac=<?php echo $fecha_nac; ?>&estado_civil=<?php echo $estado_civil; ?>&email=<?php echo $email; ?>&celular=<?php echo $celular; ?>&telefono=<?php echo $telefono; ?>&monto=<?php echo $filas1->monto_plan3; ?>&rango_terceros=<?php echo $filas1->rango_plan3; ?>&cobertura_terceros=<?php echo $filas1->cobertura_plan3; ?>&tipo=Plan Deluxe&poliza=Autos-Terceros&aseguradora=<?php echo $filas1->idaseguradora; ?>"><button class="btn btn-warning btn-small" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right"></i></button>--></a>
       <!-- <p>
        <a data-toggle="modal" href="<?php echo "#".$i; ?>">
        Más Información
        </a>-->
        <?php } ?>
</div>


                         </div>
                </div>

   <?}




    }
    ?>
    </div>


    <!-- Resultados para Obligatorio
    <div class=" col-xs-3 well" style=""> -->


        <?/*   foreach ($autos_terceros as $filas1) {
            $i=$filas1->idaseguradora;
            $monto_obligatorio = $filas1->monto_obligatorio;

            $iteracion1 = $iteracion1 + 1;

            $nombre_aseguradora_c=$aseguradoras_consult[$iteracion1];
        foreach ($nombre_aseguradora_c as $filas3) {

            $nombre_aseguradora1=$filas3->nombre;
        }
            ?>
            <br>
            <div class="col-xs-6 precio">
                <?php if(($monto_obligatorio == 0.00)||($monto_obligatorio == 9999.99)){
                    echo "No Aplica";
                }else{
                    echo "B./ ".$filas1->monto_obligatorio;
                }?>
            </div>
            <?php if(($monto_obligatorio == 0.00)||($monto_obligatorio == 9999.99)){?>
                <button class="btn btn-warning btn-small" disabled="disabled" type="button">Solicitar
                    <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </button>
                <p>
                <a data-toggle="modal" href="<?php echo "#".$i; ?>"> Más Información</a>
                </p>
            <?php }else{?>
                <form name="PlanObligatorio<?=$i?>" id="Aseguradora<?=$i?>" action="complete" method="POST">
                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                 <!--   <input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">
                    <input type="hidden" name="dcolision" value="<?=$calculo_deducible_colision_premium?>">
                    <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                    <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">
                      <input type="hidden" name="poliza" value="<?=$prima_premium_total?>">
                       <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                          <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">-->
                    <input type="hidden" name="plan" value="Plan Obligatorio">

                    <input type="hidden" name="marca" value="<?=$marca?>">
                    <input type="hidden" name="modelo" value="<?=$modelo?>">
                    <input type="hidden" name="monto" value="<?=$filas1->monto_obligatorio?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora1?>">
                    <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

                    <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                    <input type="hidden" name="sexo" value="<?=$sexo?>">
                    <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                    <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">

                    <input type="hidden" name="email" value="<?=$email?>">
                    <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
                    <input type="hidden" name="telefono" value="<?=$telefono?>">
                    <input type="hidden" name="celular" value="<?=$celular?>">
                    <button class="btn btn-warning btn-small" type="submit">
                        Solicitar
                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </button>
                    <!--  </a>-->

                </form>





               <!-- <a class="a_form" href="validator_d.php?nombre=<?php echo $nombre; ?>&cedula=<?php echo $cedula; ?>&sexo=<?php echo $sexo; ?>&fecha_nac=<?php echo $fecha_nac; ?>&estado_civil=<?php echo $estado_civil; ?>&email=<?php echo $email; ?>&celular=<?php echo $celular; ?>&telefono=<?php echo $telefono; ?>&monto=<?php echo $filas1->monto_obligatorio; ?>&rango_terceros=<?php echo $filas1->rango_obligatorio; ?>&cobertura_terceros=<?php echo $filas1->cobertura_obligatorio; ?>&tipo=Plan de Seguro Obligatorio&poliza=Autos-Terceros&aseguradora=<?php echo $filas1->idaseguradora; ?>"><button class="btn btn-warning btn-small" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right"></i></button></a>--><p>
            <a data-toggle="modal" href="<?php echo "#".$i; ?>">Más Información</a>
            <?php } ?></p>

            <?
        }
        */
        ?>




    <!--</div>&nbsp;-->



    <!-- Resultados para Intermedio
    <div class="col-xs-3 well" style="">-->

 <? /*$iteracion1=0; foreach ($autos_terceros as $filas1) {
            $i=$filas1->idaseguradora +100;
            $monto_obligatorio = $filas1->monto_obligatorio;

     $iteracion1 = $iteracion1 + 1;

     $nombre_aseguradora_c=$aseguradoras_consult[$iteracion1];
     foreach ($nombre_aseguradora_c as $filas3) {

         $nombre_aseguradora1=$filas3->nombre;
     }

 ?>

     <br>
     <div class="col-xs-6 precio">
         <?php if($filas1->monto_intermedio==0.00){echo "No Aplica";
         }else {
             echo "B./ ".$filas1->monto_intermedio;
         } ?>
     </div>
     <?php
     if($filas1->monto_intermedio==0.00){?>
         <button class="btn btn-warning btn-small" disabled="disabled" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right">
             </i>
         </button>
         <p>
         <a data-toggle="modal" href="<?php echo "#".$i; ?>"> Más Información</a></p>
     <?php }else {
         ?>


         <form name="PlanIntermedio<?=$i?>" id="Aseguradora<?=$i?>" action="complete" method="POST">
             <input type="hidden" name="nombre" value="<?=$nombre?>">
             <input type="hidden" name="apellido" value="<?=$apellido?>">
             <input type="hidden" name="cedula" value="<?=$cedula?>">
             <!--   <input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">
                    <input type="hidden" name="dcolision" value="<?=$calculo_deducible_colision_premium?>">
                    <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                    <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">
                      <input type="hidden" name="poliza" value="<?=$prima_premium_total?>">
                       <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                          <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">-->
             <input type="hidden" name="historial" value="<?=$historial_manejo?>">
             <input type="hidden" name="plan" value="Plan Intermedio">

             <input type="hidden" name="marca" value="<?=$marca?>">
             <input type="hidden" name="modelo" value="<?=$modelo?>">

             <input type="hidden" name="company" value="<?=$nombre_aseguradora1?>">
             <input type="hidden" name="monto" value="<?=$filas1->monto_intermedio?>">
             <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

             <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
             <input type="hidden" name="sexo" value="<?=$sexo?>">
             <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
             <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
             <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">

             <input type="hidden" name="email" value="<?=$email?>">
             <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
             <input type="hidden" name="telefono" value="<?=$telefono?>">
             <input type="hidden" name="celular" value="<?=$celular?>">
             <button class="btn btn-warning btn-small" type="submit">
                 Solicitar
                 <i class="glyphicon glyphicon-circle-arrow-right"></i>
             </button>
             <!--  </a>-->

         </form>
         <!--<a class="a_form" href="validator_d.php?nombre=<?php echo $nombre; ?>&cedula=<?php echo $cedula; ?>&sexo=<?php echo $sexo; ?>&fecha_nac=<?php echo $fecha_nac; ?>&estado_civil=<?php echo $estado_civil; ?>&email=<?php echo $email; ?>&celular=<?php echo $celular; ?>&telefono=<?php echo $telefono; ?>&monto=<?php echo $filas1->monto_intermedio; ?>&rango_terceros=<?php echo $filas1->rango_intermedio; ?>&cobertura_terceros=<?php echo $filas1->cobertura_intermedio; ?>&tipo=Plan Intermedio&poliza=Autos-Terceros&aseguradora=<?php echo $filas1->idaseguradora; ?>"><button class="btn btn-warning btn-small" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right"></i></button></a>--><p>
     <a data-toggle="modal" href="<?php echo "#".$i; ?>">
     Más Información</a>
     <?php } ?>
     </p>



<?
 }*/?>
    <!--</div>-->

    <!-- Resultados para Deluxe
    <div class="col-xs-3 well" style="">-->
<p>

     <?/* $iteracion1=0; foreach ($autos_terceros as $filas1) {
            $i=$filas1->idaseguradora +200;
 $iteracion1 = $iteracion1 + 1;

            $nombre_aseguradora_c=$aseguradoras_consult[$iteracion1];
        foreach ($nombre_aseguradora_c as $filas3) {

            $nombre_aseguradora1=$filas3->nombre;
        }
     ?>

         <br>
         <div class="col-xs-6 precio">
         <?php if($filas1->monto_plan3==0.00){
         echo "No Aplica";
         }else {
         echo "B./ ".$filas1->monto_plan3;
          } ?>
          </div>
        <?php if($filas1->monto_plan3==0.00){?>
        <button class="btn btn-warning btn-small" disabled="disabled" type="button">
        Solicitar
         <i class="glyphicon glyphicon-circle-arrow-right"></i></button>
        <p>
        <a data-toggle="modal" href="<?php echo "#".$i; ?>">Más Información</a>
        </p>
        <?php }
        else {?>
            <form name="PlanDeluxe<?=$i?>" id="Aseguradora<?=$i?>" action="complete" method="POST">
                <input type="hidden" name="nombre" value="<?=$nombre?>">
                <input type="hidden" name="apellido" value="<?=$apellido?>">
                <input type="hidden" name="cedula" value="<?=$cedula?>">
                <!--   <input type="hidden" name="colision" value="<?=$calculo_colision_premium?>">
                    <input type="hidden" name="dcolision" value="<?=$calculo_deducible_colision_premium?>">
                    <input type="hidden" name="comprensivo" value="<?=$calculo_comprensivo_premium?>">
                    <input type="hidden" name="dcomprensivo" value="<?=$calculo_deducible_comprensivo_premium?>">
                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">
                      <input type="hidden" name="poliza" value="<?=$prima_premium_total?>">
                       <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                          <input type="hidden" name="precio_venta" value="<?=$precio_venta?>">
                    <input type="hidden" name="historial" value="<?=$historial_manejo?>">-->
                     <input type="hidden" name="historial" value="<?=$historial_manejo?>">
                <input type="hidden" name="plan" value="Plan Deluxe">

                <input type="hidden" name="marca" value="<?=$marca?>">
                <input type="hidden" name="modelo" value="<?=$modelo?>">

 <input type="hidden" name="monto" value="<?=$filas1->monto_plan3?>">
<input type="hidden" name="company" value="<?=$nombre_aseguradora1?>">
                <input type="hidden" name="anio_auto" value="<?=$anio_auto?>">

                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                <input type="hidden" name="sexo" value="<?=$sexo?>">
                <input type="hidden" name="tipo_auto" value="<?=$tipo_auto?>">
                <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">

                <input type="hidden" name="email" value="<?=$email?>">
                <input type="hidden" name="estado_auto" value="<?=$estado_auto?>">
                <input type="hidden" name="telefono" value="<?=$telefono?>">
                <input type="hidden" name="celular" value="<?=$celular?>">
                <button class="btn btn-warning btn-small" type="submit">
                    Solicitar
                    <i class="glyphicon glyphicon-circle-arrow-right"></i>
                </button>
                <!--  </a>-->

            </form>




       <!-- <a class="a_form" href="validator_d.php?nombre=<?php echo $nombre; ?>&cedula=<?php echo $cedula; ?>&sexo=<?php echo $sexo; ?>&fecha_nac=<?php echo $fecha_nac; ?>&estado_civil=<?php echo $estado_civil; ?>&email=<?php echo $email; ?>&celular=<?php echo $celular; ?>&telefono=<?php echo $telefono; ?>&monto=<?php echo $filas1->monto_plan3; ?>&rango_terceros=<?php echo $filas1->rango_plan3; ?>&cobertura_terceros=<?php echo $filas1->cobertura_plan3; ?>&tipo=Plan Deluxe&poliza=Autos-Terceros&aseguradora=<?php echo $filas1->idaseguradora; ?>"><button class="btn btn-warning btn-small" type="button">Solicitar <i class="glyphicon glyphicon-circle-arrow-right"></i></button>--></a>
        <p>
        <a data-toggle="modal" href="<?php echo "#".$i; ?>">
        Más Información
        </a>
        <?php } ?></p>
<?php } </div> */?>
 <?foreach ($autos_terceros as $filas1) {


     if ($filas1 === end($autos_terceros)){
?></div>
</div>
 <div class="col-xs-12">
                    <p align="justify">
                        Mensaje importante: Las primas que presentamos en esta página
                        están sujetas a la verificación de su historial de tránsito.
                        Los deducibles de algunas compañías de seguros tendrán recargo
                        si la persona es menor de 25 años de edad. Habrá vehículos que
                        no son asegurables según compañía de seguros. Las primas antes
                        detalladas solo aplican para coberturas en autos de uso particular,
                        en caso de requerir cotización para autos de uso comercial favor
                        llamar a nuestras oficinas.

                    </p>
                    </div>
    <div class="col-xs-12">
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
<?} }  ?>


</div>
    </div>
</div>
<?
 $iteracion=0;
$counter_aseguradoras = 0;
    foreach ($aseguradoras as $filas2) {
        $iteracion = $iteracion + 1;
        $idaseguradoras =  $filas2->idaseguradoras;
        $nombre_aseguradora =  $filas2->nombre;
        $plan1 = $idaseguradoras;
        $plan2 = $idaseguradoras+100;
        $plan3 = $idaseguradoras+200;
        $consulta_coberturas_especiales=$r17[$iteracion];
        $consulta_coberturas_especiales_b=$r18[$iteracion];
        $consulta_coberturas_especiales_c=$r19[$iteracion];

    ?>
    <div class="letras_resultado_informacion" style="display:none" id="aseguradora_plan_Obligatorio<?=$plan1?>">
       <div class="modal-body">

                        <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><img src="<?= $url ?>img/logos/iseguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Generali") {?><img src="<?= $url ?>img/logos/generali.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="ASSA") {?><img src="<?= $url ?>img/logos/assa.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banesco") {?><img src="<?= $url ?>img/logos/banesco.jpg"><br><?php }?>
                        <?php if($nombre_aseguradora=="Acerta") {?><img src="<?= $url ?>img/logos/acerta.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banistmo") {?><img src="<?= $url ?>img/logos/HSBC_Seguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="SURA") {?><img src="<?= $url ?>img/logos/sura.png"><br><?php }?><br>
                        <?php if($nombre_aseguradora=="Nacional de Seguros") {?><img src="<?= $url ?>img/logos/Logo NASE.JPG"><br><?php }?><br>

                        <b>Coberturas Especiales:</b><br>
                        <?php

                        $counter_coberturas = 0;
                        foreach ($consulta_coberturas_especiales as $ResultCoberturaEspecial) {

                            $cobertura_especial[$counter_coberturas] =  $ResultCoberturaEspecial->cobertura;
                            $counter_coberturas = $counter_coberturas + 1;

                        }

                        ?>
                        <?php
                        while ($counter_coberturas > 0) {
                            echo ("<li>");
                            echo htmlentities($cobertura_especial[$counter_coberturas-1], ENT_QUOTES | ENT_IGNORE, "UTF-8");
                            $counter_coberturas = $counter_coberturas - 1;
                            echo ("</li><br>");
                        }


                        ?>
                        <!--
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Asistencia en accidentes de tránsito.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Referencia de Talleres.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Servicio de grúa por colisión o desperfecto mecánico hasta B/.150.00.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Emergencia médica.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Cerrajero por pérdida o extravío de llaves.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Auxilio vial.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Gastos Médicos: No aplica.<br>
                        -->

                    </div>
                     <div class="col-xs-12" align="center">
        <button type="button" class="btn btn-tema" onclick="OcultarDiv('<?=$Obligatorio?>','<?=$plan1?>');">Regresar</button>
    </div>

    </div>


    <div class="letras_resultado_informacion" style="display:none" id="aseguradora_plan_Intermedio<?=$plan2?>">
         <div class="modal-body">

                        <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><img src="<?= $url ?>img/logos/iseguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Generali") {?><img src="<?= $url ?>img/logos/generali.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="ASSA") {?><img src="<?= $url ?>img/logos/assa.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banesco") {?><img src="<?= $url ?>img/logos/banesco.jpg"><br><?php }?>
                        <?php if($nombre_aseguradora=="Acerta") {?><img src="<?= $url ?>img/logos/acerta.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banistmo") {?><img src="<?= $url ?>img/logos/HSBC_Seguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="SURA") {?><img src="<?= $url ?>img/logos/sura.png"><br><?php }?><br>
                        <?php if($nombre_aseguradora=="Nacional de Seguros") {?><img src="<?= $url ?>img/logos/Logo NASE.JPG"><br><?php }?><br>


                        <b>Coberturas Especiales:</b><br>
                        <?php


                        $counter_coberturas = 0;
                        foreach ($consulta_coberturas_especiales_b as $ResultCoberturaEspecial) {

                            $cobertura_especial[$counter_coberturas] =  $ResultCoberturaEspecial->cobertura;
                            $counter_coberturas = $counter_coberturas + 1;

                        }

                        ?>
                        <?php
                        while ($counter_coberturas > 0) {
                            echo ("<li>");
                            echo htmlentities($cobertura_especial[$counter_coberturas-1], ENT_QUOTES | ENT_IGNORE, "UTF-8");
                            $counter_coberturas = $counter_coberturas - 1;
                            echo ("</li><br>");
                        }
                        ?>
                        <!--
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Asistencia en accidentes de tránsito.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Referencia de Talleres.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Servicio de grúa por colisión o desperfecto mecánico hasta B/.150.00.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Emergencia médica.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Cerrajero por pérdida o extravío de llaves.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Auxilio vial.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Gastos Médicos: No aplica.<br>
                        -->

                    </div>
                    <div class="col-xs-12" align="center">
        <button type="button" class="btn btn-tema" onclick="OcultarDiv('<?=$Intermedio?>','<?=$plan2?>');">Regresar</button>
    </div>

    </div>

     <div class="letras_resultado_informacion" style="display:none" id="aseguradora_plan_Deluxe<?=$plan3?>">
        <div class="modal-body">

                        <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><img src="<?= $url ?>img/logos/iseguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Generali") {?><img src="<?= $url ?>img/logos/generali.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="ASSA") {?><img src="<?= $url ?>img/logos/assa.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banesco") {?><img src="<?= $url ?>img/logos/banesco.jpg"><br><?php }?>
                        <?php if($nombre_aseguradora=="Acerta") {?><img src="<?= $url ?>img/logos/acerta.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banistmo") {?><img src="<?= $url ?>img/logos/HSBC_Seguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="SURA") {?><img src="<?= $url ?>img/logos/sura.png"><br><?php }?><br>
                        <?php if($nombre_aseguradora=="Nacional de Seguros") {?><img src="<?= $url ?>img/logos/Logo NASE.JPG"><br><?php }?><br>

                        <b>Coberturas Especiales:</b><br>
                        <?php
                        $counter_coberturas = 0;
                        foreach ($consulta_coberturas_especiales_c as $ResultCoberturaEspecial) {

                            $cobertura_especial[$counter_coberturas] =  $ResultCoberturaEspecial->cobertura;
                            $counter_coberturas = $counter_coberturas + 1;

                        }
                        ?>
                        <?php
                        while ($counter_coberturas > 0) {
                            echo ("<li>");
                            echo htmlentities($cobertura_especial[$counter_coberturas-1], ENT_QUOTES | ENT_IGNORE, "UTF-8");
                            $counter_coberturas = $counter_coberturas - 1;
                            echo ("</li><br>");
                        }
                        ?>
                        <!--
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Asistencia en accidentes de tránsito.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Referencia de Talleres.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Servicio de grúa por colisión o desperfecto mecánico hasta B/.150.00.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Emergencia médica.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Cerrajero por pérdida o extravío de llaves.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Auxilio vial.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Gastos Médicos: No aplica.<br>
                        -->

                    </div>
                 <div class="col-xs-12" align="center">
        <button type="button" class="btn btn-tema" onclick="OcultarDiv('<?=$Deluxe?>','<?=$plan3?>');">Regresar</button>
    </div>

    </div>

        <div class="modal fade" id="<?php echo $plan1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">M&Aacute;S INFORMACIÓN</h4>
                    </div>
                    <div class="modal-body">

                        <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><img src="<?= $url ?>img/logos/iseguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Generali") {?><img src="<?= $url ?>img/logos/generali.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="ASSA") {?><img src="<?= $url ?>img/logos/assa.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banesco") {?><img src="<?= $url ?>img/logos/banesco.jpg"><br><?php }?>
                        <?php if($nombre_aseguradora=="Acerta") {?><img src="<?= $url ?>img/logos/acerta.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banistmo") {?><img src="<?= $url ?>img/logos/HSBC_Seguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="SURA") {?><img src="<?= $url ?>img/logos/sura.png"><br><?php }?><br>
                        <?php if($nombre_aseguradora=="Nacional de Seguros") {?><img src="<?= $url ?>img/logos/Logo NASE.JPG"><br><?php }?><br>

                        <b>Coberturas Especiales:</b><br>
                        <?php

                        $counter_coberturas = 0;
                        foreach ($consulta_coberturas_especiales as $ResultCoberturaEspecial) {

                            $cobertura_especial[$counter_coberturas] =  $ResultCoberturaEspecial->cobertura;
                            $counter_coberturas = $counter_coberturas + 1;

                        }

                        ?>
                        <?php
                        while ($counter_coberturas > 0) {
                            echo ("<li>");
                            echo htmlentities($cobertura_especial[$counter_coberturas-1], ENT_QUOTES | ENT_IGNORE, "UTF-8");
                            $counter_coberturas = $counter_coberturas - 1;
                            echo ("</li><br>");
                        }


                        ?>
                        <!--
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Asistencia en accidentes de tránsito.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Referencia de Talleres.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Servicio de grúa por colisión o desperfecto mecánico hasta B/.150.00.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Emergencia médica.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Cerrajero por pérdida o extravío de llaves.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Auxilio vial.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Gastos Médicos: No aplica.<br>
                        -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="<?php echo $plan2; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">M&Aacute;S INFORMACIÓN</h4>
                    </div>
                    <div class="modal-body">

                        <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><img src="<?= $url ?>img/logos/iseguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Generali") {?><img src="<?= $url ?>img/logos/generali.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="ASSA") {?><img src="<?= $url ?>img/logos/assa.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banesco") {?><img src="<?= $url ?>img/logos/banesco.jpg"><br><?php }?>
                        <?php if($nombre_aseguradora=="Acerta") {?><img src="<?= $url ?>img/logos/acerta.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banistmo") {?><img src="<?= $url ?>img/logos/HSBC_Seguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="SURA") {?><img src="<?= $url ?>img/logos/sura.png"><br><?php }?><br>
                        <?php if($nombre_aseguradora=="Nacional de Seguros") {?><img src="<?= $url ?>img/logos/Logo NASE.JPG"><br><?php }?><br>


                        <b>Coberturas Especiales:</b><br>
                        <?php


                        $counter_coberturas = 0;
                        foreach ($consulta_coberturas_especiales_b as $ResultCoberturaEspecial) {

                            $cobertura_especial[$counter_coberturas] =  $ResultCoberturaEspecial->cobertura;
                            $counter_coberturas = $counter_coberturas + 1;

                        }

                        ?>
                        <?php
                        while ($counter_coberturas > 0) {
                            echo ("<li>");
                            echo htmlentities($cobertura_especial[$counter_coberturas-1], ENT_QUOTES | ENT_IGNORE, "UTF-8");
                            $counter_coberturas = $counter_coberturas - 1;
                            echo ("</li><br>");
                        }
                        ?>
                        <!--
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Asistencia en accidentes de tránsito.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Referencia de Talleres.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Servicio de grúa por colisión o desperfecto mecánico hasta B/.150.00.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Emergencia médica.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Cerrajero por pérdida o extravío de llaves.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Auxilio vial.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Gastos Médicos: No aplica.<br>
                        -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="<?php echo $plan3; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">M&Aacute;S INFORMACIÓN</h4>
                    </div>
                    <div class="modal-body">

                        <b>Compañia de Seguros:</b> <?php if($nombre_aseguradora=="Internacional de Seguros") {?><img src="<?= $url ?>img/logos/iseguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Generali") {?><img src="<?= $url ?>img/logos/generali.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="ASSA") {?><img src="<?= $url ?>img/logos/assa.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banesco") {?><img src="<?= $url ?>img/logos/banesco.jpg"><br><?php }?>
                        <?php if($nombre_aseguradora=="Acerta") {?><img src="<?= $url ?>img/logos/acerta.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="Banistmo") {?><img src="<?= $url ?>img/logos/HSBC_Seguros.png"><br><?php }?>
                        <?php if($nombre_aseguradora=="SURA") {?><img src="<?= $url ?>img/logos/sura.png"><br><?php }?><br>
                        <?php if($nombre_aseguradora=="Nacional de Seguros") {?><img src="<?= $url ?>img/logos/Logo NASE.JPG"><br><?php }?><br>

                        <b>Coberturas Especiales:</b><br>
                        <?php
                        $counter_coberturas = 0;
                        foreach ($consulta_coberturas_especiales_c as $ResultCoberturaEspecial) {

                            $cobertura_especial[$counter_coberturas] =  $ResultCoberturaEspecial->cobertura;
                            $counter_coberturas = $counter_coberturas + 1;

                        }
                        ?>
                        <?php
                        while ($counter_coberturas > 0) {
                            echo ("<li>");
                            echo htmlentities($cobertura_especial[$counter_coberturas-1], ENT_QUOTES | ENT_IGNORE, "UTF-8");
                            $counter_coberturas = $counter_coberturas - 1;
                            echo ("</li><br>");
                        }
                        ?>
                        <!--
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Asistencia en accidentes de tránsito.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Referencia de Talleres.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Servicio de grúa por colisión o desperfecto mecánico hasta B/.150.00.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Emergencia médica.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Cerrajero por pérdida o extravío de llaves.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Auxilio vial.<br>
                        <span class="glyphicon glyphicon-ok" style="color:orange;"></span> Gastos Médicos: No aplica.<br>
                        -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


    <?php   }   ?>



    <script type="text/javascript">
        $('.les').tooltip();
    </script>

<?php $this->load->view('tema/footer.php'); ?>