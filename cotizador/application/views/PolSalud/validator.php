<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/add.php'); ?>

    <section id="featured">
        <!-- start slider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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


    <div style="width:45%; margin: 0 auto 0 auto;">
        <table class="table table-bordered">
            <tr>
                <td colspan=3; style="color:#CC0000; font-weight:bold; text-align:center;">Datos Generales</td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Nombre:</span> <?php echo $_POST['nombre']." ".$_POST['apellido']; ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">CÉdula:</span> <?php echo $_POST['cedula']; ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Correo Electrónico:</span> <?php echo $_POST['correo']; ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Fecha de Nacimiento:</span> <?php echo $_POST['fecha_nac']; ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Teléfono o celular:</span> <?php echo $_POST['telefono']; ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Compaña de seguros:</span> <?php echo ($_POST['nombre_aseguradora']); ?></td>
            </tr>


            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Edad del Principal:</span> <?php echo ($_POST['edad_principal']); ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Edad del Conyugue:</span> <?php echo ($_POST['edad_conyugue']); ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Cantidad de Hijos:</span> <?php echo ($_POST['total_hijos_plan']); ?></td>
            </tr>
        </table>
    </div>
    <!-- 3ra tabla -->
    <div style="width:45%; margin: 0 auto 0 auto;">
        <table class="table table-bordered">
            <tr>
                <td colspan=3; style="color:#CC0000; font-weight:bold; text-align:center;">Información de la Póliza de Salud</td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Alcance de Cobertura::</span> <?php echo ($_POST['descripcion_alcance_cobertura']); ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Tipo de Proveedor:</span> <?php echo $_POST['descripcion_tipo_proveedor'];?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Tipo de Seguro: </span><?php echo $_POST['descripcion_tipo_seguro'];?></td>
            </tr>
            <!--
<tr>
<td colspan=3; style="color:#000;"><span style="font-weight:bold;">Suma Asegurada M&aacute;xima: </span> <?php echo utf8_encode($descripcion_suma_asegurada_maxima);?></td>
</tr>
-->

        </table>


        <table class="table table-bordered">
            <tr>
                <td colspan=3; style="color:#CC0000; font-weight:bold; text-align:center;">Información de la Prima</td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Nombre del Plan:</span> <?php echo ($_POST['nombre_plan_salud']); ?></td>
            </tr>
            <tr>
                <td colspan=3; style="color:#000;"><span style="font-weight:bold;">Prima:</span>  <?php echo "B/. "; echo number_format(trim($_POST['monto_total_plan_salud']), "2", ".", ","); ?></td>
            </tr>

        </table>


    </div>
    <div style="width:45%; margin: 0 auto 0 auto; text-align:center;">
        <a  href="javascript:history.back(-1);">
            <button class="btn btn-primary">Regresar</button>
        </a>

        <a href="javascript:window.history.go(-2);">
            <button class="btn btn-primary">Actualizar Datos</button>
        </a>
        <form name="form" id="form" action="complete" method="POST">
            <input type="hidden" name="nombre" value="<?=$nombre?>">
            <input type="hidden" name="apellido" value="<?=$apellido?>">
            <input type="hidden" name="cedula" value="<?=$cedula?>">
            <input type="hidden" name="company" value="<?=$company?>">

            <input type="hidden" name="genero" value="<?=$genero?>">
            <input type="hidden" name="fecha_nac" value="<?=$fecha_nac?>">
            <input type="hidden" name="correo" value="<?=$correo?>">
            <input type="hidden" name="telefono" value="<?=$telefono?>">
            <input type="hidden" name="celular" value="<?=$celular?>">
            <input type="hidden" name="id_alcance_cobertura" value="<?=$id_alcance_cobertura?>">
            <input type="hidden" name="suma_asegurada_maxima" value="<?=$id_suma_asegurada_maxima?>">
            <input type="hidden" name="id_tipo_proveedor" value="<?=$id_tipo_proveedor?>">

            <input type="hidden" name="id_tipo_seguro" value="<?=$id_tipo_seguro?>">

            <input type="hidden" name="fecha_nac_conyugue" value="<?=$fecha_nac_conyugue?>">

            <input type="hidden" name="edad" value="<?=$edad?>">
            <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
            <input type="hidden" name="nacionalidad" value="<?=$nacionalidad?>">


            <input type="hidden" name="nombre_aseguradora" value="<?=$company?>">
            <input type="hidden" name="monto_total_plan_salud" value="<?=$monto_total_plan_salud?>">
            <input type="hidden" name="descripcion_alcance_cobertura" value="<?=$descripcion_alcance_cobertura?>">
            <input type="hidden" name="descripcion_suma_asegurada_maxima" value="<?=$descripcion_suma_asegurada_maxima?>">
            <input type="hidden" name="descripcion_tipo_proveedor" value="<?=$descripcion_tipo_proveedor?>">
            <input type="hidden" name="descripcion_tipo_seguro" value="<?=$descripcion_tipo_seguro?>">

            <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
            <input type="hidden" name="id_suma_asegurada_maxima" value="<?=$id_suma_asegurada_maxima?>">

            <input type="hidden" name="edad_principal" value="<?=$edad_principal?>">
            <input type="hidden" name="edad_conyugue" value="<?=$edad_conyugue?>">
            <input type="hidden" name="total_hijos_plan" value="<?=$total_hijos_plan?>">
            <input type="hidden" name="nombre_plan_salud" value="<?=$nombre_plan_salud?>">




            <button class="btn btn-warning btn-small" type="sumbit">
                Solicitar Póliza
                <i class="glyphicon glyphicon-circle-arrow-right"></i>
            </button>

        </form>






       <!-- <a class="a_form" href="health.php?nombre=<?php echo $_POST['nombre'];?>
   &apellido=<?php echo $_POST['apellido']; ?>
   &telefono=<?php echo $_POST['telefono']; ?>
   &celular=<?php echo $_POST['celular']; ?>
   &cedula=<?php echo $_POST['cedula']; ?>
   &correo=<?php echo $_POST['correo']; ?>
   &nombre_aseguradora=<?php echo $_POST['nombre_aseguradora']; ?>
   &fecha_nac=<?php echo $_POST['fecha_nac']; ?>
   &nacionalidad=<?php echo $_POST['nacionalidad']; ?>
   &genero=<?php echo $_POST['genero']; ?>
   &fecha_nac_conyugue=<?php echo $_POST['fecha_nac_conyugue']; ?>
   &descripcion_tipo_seguro=<?php echo $_POST['descripcion_tipo_seguro']; ?>
   &nombre_plan_salud=<?php echo $_POST['nombre_plan_salud']; ?>
   &descripcion_tipo_proveedor=<?php echo $_POST['descripcion_tipo_proveedor']; ?>
   &descripcion_alcance_cobertura=<?php echo $_POST['descripcion_alcance_cobertura']; ?>
   &monto_total_plan_salud=<?php echo $_POST['monto_total_plan_salud']; ?>
   &total_hijos_plan=<?php echo $_POST['total_hijos_plan']; ?>
   &descripcion_suma_asegurada_maxima=<?php echo $_POST['descripcion_suma_asegurada_maxima']; ?>
   &id_suma_asegurada_maxima=<?php echo $_POST['id_suma_asegurada_maxima']; ?>
  ">
            <button class="btn btn-warning">Solicitar Póliza <i class="glyphicon glyphicon-circle-arrow-right"></i></button>
        </a>-->
    </div>
    <script type="text/javascript" src="http://postlink.googlecode.com/svn/trunk/jquery.postlink.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.a_form').postlink();
        });
    </script>



<?php $this->load->view('tema/footer.php'); ?>