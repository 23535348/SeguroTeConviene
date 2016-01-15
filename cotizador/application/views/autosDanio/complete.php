<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/add.php'); ?>

    <section id="featured">
        <!-- start slider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slider -->

                    <div class="gris">
                        Cotización de Seguro de Auto de Uso Particular para Cobertura a Terceros
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>

    </section>

    <div class="row">
    <div class="col-lg-12">
        <div class="row">

    <div class="col-lg-3">
    </div>
    <div class="col-lg-6  table-bordered">
    <div class="row">
    <div class="col-lg-12 ">
  <span style="color:#1E90FF; font-weight:bold;">Compañía de Seguros:</span> <b>
 <?php
	   echo $company;
?>
</b>


    </div>
    </div>
    <div class="row ">
        <div class="col-lg-12">
<span style="color:#1E90FF; font-weight:bold;">Paquete:</span> <b><?php echo $plan; ?></b>

            </div>
             </div>
              <div class="row">
        <div class="col-lg-12 " align="center">
<span style="color:#1E90FF; font-weight:bold;">Póliza</span>

            </div>
             </div>
              <div class="row" >
        <div class="col-lg-6" align="center" >
<span style="color:#1E90FF; font-weight:bold;">Prima Anual:</span>

            </div>
             <div class="col-lg-6 " align="center">
B./ <?php echo $monto; ?>

            </div>
             </div>
    </div>
     <div class="col-lg-3">
    </div>

    </div>
        </div>

      </div>


<!-- 3ra tabla -->




    <div class="row">
    <div class="col-lg-12">

    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">
        <div class="row">
        <div class="col-lg-12 table table-bordered">
            <div class="row">
                <div class="col-lg-12"  style="text-align:center; color:#CC0000; font-weight:bold;">
                Valide sus Datos
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
               <b>Nombre: </b> &nbsp; <?php echo $nombre ?>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
              <b>Cédula o Pasaporte: </b> &nbsp; <?php echo $cedula ?>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12" >
               <b>Su correo electrónico: </b> &nbsp; <?php echo $email ?>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12" >
                <b>Teléfono: </b> &nbsp; <?php echo $telefono ?>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12" >
                <b>Celular: </b> &nbsp; <?php echo $celular ?>
                </div>
            </div>

</div>
            </div>
</div>
    <div class="col-lg-3">
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
    <div class="row">

    <div class="col-lg-3">
    </div>
    <div class="col-lg-6  table-bordered">
    <div class="row">
    <div class="col-lg-12 " style="text-align:center;">
        <div class="row">
            <div class="col-lg-4 ">
            <a href="javascript:window.history.go(-1);"><button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;">Regresar</button></a>
            </div>
            <div class="col-lg-4 ">
            <a href="javascript:window.history.go(-2);"><button class="btn" style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;" >Actualizar Datos</button></a>
            </div>
            <div class="col-lg-4 ">
            <form  action="autos_complete" method="POST">
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
            <input type="hidden" name="plan" value="<?=$plan?>">
                <input type="hidden" name="monto" value="<?=$monto?>">
            <input type="hidden" name="marca" value="<?=$marca?>">
            <input type="hidden" name="modelo" value="<?=$modelo?>">


            <input type="hidden" name="company" value="<?=$company?>">
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
 <button type=submit class="btn btn-warning" style="margin-top:10px;">Solicitar Póliza <i class="glyphicon glyphicon-circle-arrow-right"></i> </button>

    </form>
        </div>
    </div>
    </div>
    </div>

    </div>
        <div class="col-lg-3">
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






<?
$this->load->view('tema/footer.php');
?>