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
                        Valide la información de su póliza de Vida
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>

    </section>


<div style=" margin: 0 auto 0 auto;">

 <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8  table-bordered">
                <div class="col-lg-12"  style="color:#CC0000; font-weight:bold; text-align:center;">
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
                  <div class="col-lg-12"style="color:#000;">
               <span style="font-weight:bold;">Fecha de Nacimiento:</span> <?php echo $fecha_nac; ?>
                </div>
                  <div class="col-lg-12" style="color:#000;">
               <span style="font-weight:bold;">Teléfono o celular:</span> <?php echo $telefono; ?>
                </div>

                </div>
                <div class="col-lg-2">
                </div>

                </div>
</div>
<div style=" margin: 0 auto 0 auto;">

 <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8  table-bordered">
                <div class="col-lg-12"  style="color:#CC0000; font-weight:bold; text-align:center;">
               Información de la Poliza
                </div>

                <div class="col-lg-12" style="color:#000;">
               <span style="font-weight:bold;">Aseguradora:</span> <?php echo ($company); ?>
                </div>
                  <div class="col-lg-12" style="color:#000;">
               <span style="font-weight:bold;">Suma Asegurada:</span> <?php echo "B/. "; echo number_format($suma_asegurada, "2", ".", ","); ?>
                </div>

                  <div class="col-lg-12" style="color:#000;">
            <span style="font-weight:bold;">Periodo máximo de la poliza:</span> <?php echo $termino;?>
                </div>
                  <div class="col-lg-12" style="color:#000;">
               <span style="font-weight:bold;">Cobertura Principal:</span> Muerte por cualquier causa.
                </div>
                  <div class="col-lg-12" style="color:#000;">
               <span style="font-weight:bold;">Coberturas Adicionales:</span> No aplica.
                </div>

                </div>
                <div class="col-lg-2">
                </div>

                </div>
</div>

<div style=" margin: 0 auto 0 auto;">

 <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8  table-bordered">
                <div class="col-lg-12"  style="text-align:center; color:#CC0000; font-weight:bold;">
            Prima
                </div>

                <div class="col-lg-12" style="color:#000; font-weight:bold;">
            Frecuencia de Pago: <?php echo ($mensaje_periodo_pago); ?>
                </div>
                  <div class="col-lg-12"  style="color:#000; font-weight:bold;">
             Forma de Pago: <?php echo $formadepago; ?>
                </div>

                  <div class="col-lg-12" style="color:#000; font-weight:bold;">
           Prima: <?php echo "B/. "; echo number_format($poliza, "2", ".", ","); ?>
                </div>



                </div>
                <div class="col-lg-2">
                </div>

                </div>
</div>

    <div class="row">
    <div class="col-lg-2">
    </div>

    <div class="col-lg-8 ">
    <div class="col-lg-4" align="center">
    <a href="javascript:history.back(-1);">
    <button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;width: 130px;">Regresar</button></a>
    </div>
        
    <!--<div class="col-lg-4" align="center">
    <a href="javascript:window.history.go(-2);">
 <button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;">Actualizar Datos</button></a>

    </div>-->
    <div class="col-lg-4" align="center">
                                                 <form name="form" id="form" action="seguro_complete" method="POST">
                                                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                                                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                                                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                                                    <input type="hidden" name="company" value="<?=$company?>">

                                                    <input type="hidden" name="idaseguradora" value="<?=$idaseguradora?>">
                                                    <input type="hidden" name="sexo" value="<?=$sexo?>">
                                                    <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
                                                    <input type="hidden" name="email" value="<?=$email?>">
                                                    <input type="hidden" name="telefono" value="<?=$telefono?>">
                                                    <input type="hidden" name="formadepago" value="<?=$formadepago?>">
                                                    <input type="hidden" name="poliza" value="<?=$poliza?>">
                                                    <input type="hidden" name="prueba_aseguradora_especifica" value="<?=$prueba_aseguradora_especifica?>">
                                                    <input type="hidden" name="suma_asegurada" value="<?=$suma_asegurada?>">
                                                    <input type="hidden" name="fumador" value="<?=$fumador?>">
                                                    <input type="hidden" name="termino" value="<?=$termino?>">
                                                    <input type="hidden" name="periodo_pago" value="<?=$periodo_pago?>">
                                                     <!-- </a><a class="a_form"  href="life.php?nombre=<?php echo $_POST['nombre']." ".$_POST['apellido'];?>&ecivil=<?php echo $_POST['ecivil']; ?>&telefono=<?php echo $_POST['telefono']; ?>&celular=<?php echo $_POST['celular']; ?>&cedula=<?php echo $_POST['cedula']; ?>&correo=<?php echo $_POST['correo']; ?>&fecha_nac=<?php echo $_POST['fecha']; ?>&telefono=<?php echo $_POST['telefono']; ?>&suma=<?php echo $_POST['suma']; ?>&termino=<?php echo $_POST['termino'];?>&fumador=<?php echo $_POST['fumador'];?>&poliza=<?php echo $_POST['poliza'];?>&edad=<?php echo $_POST['edad']; ?>&company=<?php echo $_POST['company']; ?>&sexo=<?php echo $_POST['sexo']; ?>&periodo_pago=<?php echo $_POST['periodo_pago']; ?>&formadepago=<?php echo $_POST['formadepago']; ?>">-->
                                     <button class="btn btn-warning" type="submit" style="margin-top:10px;">
                                     Solicitar Póliza
                                     <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                     </button>
                                     </form>
    </div>
    </div>

    <div class="col-lg-2">
    </div>
    </div>



<div style="width:45%; margin: 0 auto 0 auto; text-align:center;">



</div>
</br></br>

<?php $this->load->view('tema/footer.php'); ?>