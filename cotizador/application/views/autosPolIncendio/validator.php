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
                      Valide la información de la Poliza
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>

    </section>


<div style=" margin: 0 auto 0 auto; padding-top:30px;">
    <div class="row">
    <div class="col-xs-12">


    <div class="col-lg-2">
    </div>


    <div class="col-xs-12">
    <!-- 1era tabla -->
    <table class="table table-bordered">
<tr>
<td style="color:#CC0000; font-weight:bold; text-align:center;">Revise su Información:</td>
</tr>
<tr>
<td><span style="font-weight:bold;">Nombre:</span> <?php echo $nombre; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Cédula:</span> <?php echo $cedula; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Teléfono:</span> <?php echo $telefono; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Celular:</span> <?php echo $celular; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Correo Electrónico:</span> <?php echo $email; ?></td>
</tr>
<tr>
<td><span style="font-weight:bold;">Aseguradora seleccionada:</span> <?php echo $company; ?></td>
</tr>
</table>

    <!-- 2da tabla -->
<div style=" margin: 0 auto 0 auto; text-align:center;">
<table class="table-responsive table-bordered">
<tr>
<td colspan=2; style="color:#CC0000; font-weight:bold;">Coberturas Contratadas</td>
</tr>
<tr>
<td><b>Plan <?php echo $plan;?></b></td>
<td><?php if($plan=="Basico") {
echo "Incendio y/o Impacto de Rayo, Humo u Hollin, Explosión, Impacto de Vehículos Aéreos, Objetos Caídos del Cielo, Remoción de Escombros, Terremoto, Vendaval, Inundación y Daños por Agua.";
 }
else {
echo "Incendio y/o Impacto de Rayo, Humo u Hollin, Explosión, Impacto de Vehículos Aéreos, Objetos Caídos del Cielo, Remoción de Escombros, Terremoto, Vendaval, Inundación y Daños por Agua, Desórdenes Público y Daños por Maldad";
}
 ?></td>
</tr>
</table>
</div>
<!-- 3ra tabla -->
<div style=" margin: 0 auto 0 auto;">
<table class="table table-bordered">
<tr>
<td style="color:#CC0000; font-weight:bold; text-align:center;">Información del Bien Asegurado</td>
</tr>
<tr>
<td><b>Ubicación:</b> <?php if($sector=="CIUDAD"){echo "Ciudad de Panamá";} if($sector=="COSTADELESTE"){ echo "Costa del Este";} if($sector=="INTERIOR"){ echo "Interior del País";} ?>.</td>
</tr>
</table>
</div>
<!-- 4ta tabla -->
<div style=" margin: 0 auto 0 auto;">
<table class="table table-bordered">
<tr>
<td style="color:#CC0000; font-weight:bold; text-align:center;">Tipo de Construcción</td>
</tr>
<tr>
<td><b>Tipo de Vivienda:</b> <?php if($tipo_bien=="APTO"){ echo "Apartamento";} else { echo "Casa";}?></td>
</tr>
<tr>
<td><b>Material:</b> <?php echo $tipo_construccion; ?></td>
</tr>
</table>
</div>
<!-- 5ta tabla -->
<div style=" margin: 0 auto 0 auto;">
<table class="table-responsive  table-bordered">
<tr>
<td colspan=3 style="color:#CC0000; font-weight:bold; text-align:center;">Suma Asegurada</td>
</tr>
<tr>
<td colspan=3><b>Póliza de Incendio:</b> B/. <?php echo number_format($suma_asegurada, "2", ".", ","); ?></td>
</tr>



        <?php
        //Determinación de descuentos por forma de pago
        $descuentoUNPAGO = 0;
        $descuentoACH = 0;
        $descuentoTC = 0.05;
        switch ($company){
            case "Internacional de Seguros":
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "Generali":
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "ASSA":
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "Banesco":
                $descuentoUNPAGO = 0.07;
                $descuentoACH = 0.05;
                break;
            case "Acerta":
                $descuentoUNPAGO = 0.07;
                $descuentoACH = 0.05;
                break;
            case "HSBC":
                $descuentoUNPAGO = 0.1;
                $descuentoACH = 0.05;
                break;
            case "SURA":
                $descuentoUNPAGO = 0.06;
                $descuentoACH = 0;
                break;
        }
        ?>

        <!-- 6ta tabla -->

                <tr>
                    <td style="color:#CC0000; font-weight:bold;">Prima Anual</td>
                    <td style="color:#1E90FF; font-weight:bold;">&nbsp;</td>
                    <td style="color:#CC0000; font-weight:bold;">Deducibles</td>
                </tr>
                <tr>
                    <td>Pago Voluntario</td>
                    <td><?php echo "B/. "; echo number_format($suma, "2", ".", ","); ?></td>
                    <td rowspan=4 style="text-align:left;">
                        - Terremoto y Vendaval: 2% de la suma asegurada<br>
                        Mínimo de B./ 250.00<br><br>
                        - Inundación y Daños por Agua: 1% de la suma asegurada<br>
                        Mínimo de B./ 250.00<br>
                    </td>
                </tr>
                <tr>
                    <td>Un solo pago</td>
                    <td><?php echo "B/. "; echo number_format($suma-($suma*$descuentoUNPAGO), "2", ".", ","); ?></td>
                </tr>
                <tr>
                    <td>Pago por ACH</td>
                    <td><?php echo "B/. "; echo number_format($suma-($suma*$descuentoACH), "2", ".", ","); ?></td>
                </tr>
                <tr>
                    <td>Pago por tarjeta de crédito</td>
                    <td><?php echo "B/. "; echo number_format($suma-($suma*$descuentoTC), "2", ".", ","); ?></td>
                </tr>
            </table>
        </div>
<div class="col-xs-12" style="text-align: center;">
            <div class="col-lg-4">
                <a href="javascript:history.back(-1);">
                    <button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;width: 135px;" >
                        Regresar
                    </button></a>

            </div>
            
            <div class="col-lg-4">
                <form  action="complete" method="POST">
                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                    <input type="hidden" name="suma_asegurada" value="<?=$suma_asegurada?>">
                    <input type="hidden" name="bien" value="<?=$tipo_bien?>">
                    <input type="hidden" name="tipo_construccion" value="<?=$tipo_construccion?>">
                    <input type="hidden" name="plan" value="<?=$plan?>">

                    <input type="hidden" name="company" value="<?=$company?>">


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

                    <button class="btn btn-warning btn-small" type="submit" style="margin-top:10px;" >
                        Solicitar Póliza
                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </button>
                    <!--  </a>-->

                </form>
                <!--<a class="a_form" href="fire.php?suma_asegurada=<?php echo $_POST['suma_asegurada']; ?>&sector=<?php echo $_POST['sector']; ?>&bien=<?php echo $_POST['bien']; ?>&tipo_construccion=<?php echo $_POST['tipo_construccion']; ?>&nombre=<?php echo $_POST['nombre']." ".$_POST['apellido']; ?>&correo=<?php echo $_POST[correo]; ?>&telefono=<?php echo $_POST[telefono]; ?>&cedula=<?php echo $_POST['cedula']; ?>&celular=<?php echo $_POST['celular']; ?>&p=<?php echo $_POST['p'];?>&company=<?php echo $_POST['nombre_aseguradora'];?>&nombre_aseguradora=<?php echo $_POST['nombre_aseguradora'];?>&descuentoUNPAGO=<?php echo ($descuentoUNPAGO);?>&descuentoACH=<?php echo ($descuentoACH);?>&descuentoTC=<?php echo ($descuentoTC);?>&prima=<?php echo $_POST['suma'];?>">
 <button class="btn btn-warning">Solicitar Póliza <i class="glyphicon glyphicon-circle-arrow-right"></i></button></a>-->

            </div>



        </div>


        </div>


        <div class="col-lg-2">
        </div>
        </div>
        </div>


</div>



<?php $this->load->view('tema/footer.php'); ?>