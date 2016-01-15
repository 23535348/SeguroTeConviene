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
                      Valide la información de la Poliza
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>

    </section>


<div style=" margin: 0 auto 0 auto;">
    <div class="row">
    <div class="col-lg-12">

    <div class="col-lg-2">

    </div>
        <div class="col-lg-8">








<table class="table table-bordered">
<tr>
<td colspan=3; >    Datos Generales</td>
</tr>
<tr>
<td colspan=3; > <span style="font-weight:bold;">Nombre:</span> <?php echo $nombre; ?></td>
</tr>
<tr>
<td colspan=3; style="color:#000;"> <span style="font-weight:bold;">Cédula:</span> <?php echo $cedula; ?></td>
</tr>
<tr>
<td colspan=3; style="color:#000;"><span style="font-weight:bold;">Correo Electrónico:</span> <?php echo $email; ?></td>
</tr>
<tr>
<td colspan=3; style="color:#000;"> <span style="font-weight:bold;">Fecha de Nacimiento:</span> <?php echo $fecha_nac; ?></td>
</tr>
<tr>
<td colspan=3; style="color:#000;"> <span style="font-weight:bold;">Teléfono o celular:</span> <?php echo $telefono; ?></td>
</tr>
<tr>
<td colspan=3; style="color:#000;">  <span style="font-weight:bold;">Compañía de seguros:</span> <?php echo ($company); ?></td>
</tr>
</table>

<!-- 3ra tabla -->
<div style=" margin: 0 auto 0 auto;">
<table class="table table-bordered">
<tr>
<td colspan=3;></td>
</tr>
<tr>
<td colspan=3; ></td>
</tr>
<tr>
<td colspan=3; ></td>
</tr>
<tr>
<td colspan=3; style="color:#000;"></td>
</tr>
<tr>
<td colspan=3; style="color:#000;"></td>
</tr>
</table>

<table class="table table-bordered">
<tr>
<td style="color:#CC0000; font-weight:bold; text-align:center;">Información de la Póliza de Incendio</td>
</tr>
<tr>
<td><b>Ubicación:</b> <?php if($sector=="CIUDAD"){ echo "Ciudad de Panamá";} if($sector=="COSTADELESTE"){ echo "Costa del Este";} if($sector=="INTERIOR"){ echo "Interior del País";}?>.</td>
</tr>
<tr>
<td><b>Tipo de Vivienda:</b> <?php if($tipo_bien=="APTO"){ echo "Apartamento";} else { echo "Casa";}?></td>
</tr>
<tr>
<td><b>Material:</b> <?php echo $tipo_construccion; ?></td>
</tr>
<tr>
<td><b>Póliza de Incendio:</b> B/. <?php echo number_format($suma_asegurada_incendio, "2", ".", ","); ?></td>
</tr>
<tr>
<td>Coberturas: Incendio y/o Impacto de Rayo, Humo u Hollin, Explosión, Impacto de Vehículos Aéreos, Objetos Caídos del Cielo, Remoción de Escombros, Terremoto, Vendaval, Inundación y Daños por Agua.</td>
</tr>
</table>

<table class="table table-bordered">
<tr>
<td colspan=3; style="color:#CC0000; font-weight:bold; text-align:center;">Información de la Prima</td>
</tr>
<tr>
<td colspan=3; style="color:#000; font-weight:bold;">Frecuencia de Pago: <?php echo ($mensaje_periodo_pago); ?></td>
</tr>
<tr>
<td colspan=2; style="color:#1E90FF; font-weight:bold;">Prima Anual</td>
<td style="color:#1E90FF; font-weight:bold;">Deducibles</td>
</tr>
<tr>
<td rowspan=3; colspan=2;>Pago Voluntario: <?php echo "B/. "; echo number_format($prima_planeada, "2", ".", ","); ?></td>
<td rowspan=3 style="text-align:left;">
- Terremoto y Vendaval: 2% de la suma asegurada<br>
Mínimo de B./ 250.00<br><br>
- Inundación y Daños por Agua: 1% de la suma asegurada<br>
Mínimo de B./ 250.00<br>
</td>
</tr>
</table>
</div>
<div style=" margin: 0 auto 0 auto; text-align:center;">
<a  href="javascript:history.back(-1);"><button class="btn btn-primary">Regresar</button></a> <a href="javascript:window.history.go(-2);">









<button class="btn btn-primary">Actualizar Datos</button></a>

<form name="form" id="form" action="complete" method="POST">
                                                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                                                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                                                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                                                    <input type="hidden" name="company" value="<?=$company?>">

                                                    <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                                                    <input type="hidden" name="sexo" value="<?=$sexo?>">
                                                    <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                                                    <input type="hidden" name="email" value="<?=$email?>">
                                                    <input type="hidden" name="telefono" value="<?=$telefono?>">
                                                    <input type="hidden" name="celular" value="<?=$celular?>">
                                                    <input type="hidden" name="formadepago" value="<?=$formadepago?>">
                                                    <input type="hidden" name="suma_asegurada_vida" value="<?=$suma_asegurada_vida?>">
                                                    <input type="hidden" name="suma_asegurada_incendio" value="<?=$suma_asegurada_incendio?>">

                                                    <input type="hidden" name="prueba_aseguradora_especifica" value="<?=$prueba_aseguradora_especifica?>">

                                                    <input type="hidden" name="fumador" value="<?=$fumador?>">
                                                    <input type="hidden" name="termino" value="<?=$termino?>">
                                                     <input type="hidden" name="sector" value="<?=$sector?>">
                                                    <input type="hidden" name="edad" value="<?=$edad?>">
                                                     <input type="hidden" name="prima_vida" value="<?=$prima_vida?>">
                                                    <input type="hidden" name="prima_incendio" value="<?=$prima_incendio?>">
                                                    <input type="hidden" name="tipo_construccion" value="<?=$tipo_construccion?>">
                                                    <input type="hidden" name="tipo_bien" value="<?=$tipo_bien?>">
                                                    <input type="hidden" name="prima_planeada" value="<?=$prima_planeada?>">
                                                    <input type="hidden" name="periodo_pago" value="1">
                                                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
               <!-- <a class="a_form"
                   href="validator_a.php?nombre=<?php echo $nombre . " " . $pellido; ?>&ecivil=<?php echo $estado_civil; ?>&telefono=<?php echo $telefono; ?>&celular=<?php echo $celular; ?>&cedula=<?php echo $_POST['cedula']; ?>&correo=<?php echo $correo; ?>&fecha=<?php echo $fecha_nac; ?>&telefono=<?php echo $telefono; ?>&suma=<?php echo $suma_asegurada; ?>&termino=<?php echo $termino; ?>&fumador=<?php echo $_POST['fumador']; ?>&poliza=<?php echo($prima_planeada * 1.05); ?>&edad=<?php echo $edad; ?>&company=<?php echo $nombre_aseguradora; ?>&sexo=<?php echo $_POST["sexo"]; ?>&periodo_pago=<?php echo $periodo_pago; ?>&formadepago=<?php echo $_POST["formadepago"]; ?>">
                   </a>-->
                    <button class="btn btn-warning btn-small" type="sumbit">
                        Solicitar Póliza
                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </button>

                                                </form>




<!--<a class="a_form" href="mortgage.php?nombre=<?php echo $_POST['nombre']." ".$_POST['apellido'];?>&ecivil=<?php echo $_POST['ecivil']; ?>&telefono=<?php echo $_POST['telefono']; ?>&celular=<?php echo $_POST['celular']; ?>&cedula=<?php echo $_POST['cedula']; ?>&correo=<?php echo $_POST['correo']; ?>&fecha_nac=<?php echo $_POST['fecha']; ?>&telefono=<?php echo $_POST['telefono']; ?>&suma_asegurada_vida=<?php echo $_POST['suma_asegurada_vida']; ?>&termino=<?php echo $_POST['termino'];?>&sector=<?php echo $_POST['sector']; ?>&fumador=<?php echo $_POST['fumador'];?>&prima_planeada=<?php echo $_POST['prima_planeada'];?>&edad=<?php echo $_POST['edad']; ?>&nombre_aseguradora=<?php echo $_POST['nombre_aseguradora']; ?>&sexo=<?php echo $_POST['sexo']; ?>&periodo_pago=<?php echo $_POST['periodo_pago']; ?>&bien=<?php echo $_POST['bien']; ?>&tipo_construccion=<?php echo $_POST['tipo_construccion']; ?>&suma_asegurada_incendio=<?php echo $_POST['suma_asegurada_incendio']; ?>"><button class="btn btn-warning">Solicitar Póliza <i class="glyphicon glyphicon-circle-arrow-right"></i></button></a>-->
</div></br></br>

</div>
    <div class="col-lg-2">

    </div>
    </div>
    </div>
    </div>

<?php $this->load->view('tema/footer.php'); ?>