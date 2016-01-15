<?php $this->load->view('tema/header.php'); ?>
<div class="container">



    <style type="text/css">
        .bs-example{
            margin: 20px;
        }


        .letras{
            font-weight:bold;
            font-family: Helvetica, Arial;
            font-size:150%;
            outline:0;
            color:#202020;
            /*text-shadow:rgba(0,0,0, 0.7) 0px 4px 3px;*/

            background-size:contain;
            border-radius: 5px;
            box-shadow: 0px 0px 3px rgba(255, 255, 255, 1.0);


        }

    </style>




    <?php


        if (isset($captado)) {
            if ($captado != 'Error') {
            //variables
            foreach ($captado as $fila) {
                $ubicacionqsl=$fila->WERKS2;
                $areaqsl=$fila->APTYP;
                $departamentoqsl=$fila->SPAPL;
                $sucursalqsl=$fila->BTRTL2;
                $tratamientoqsl=$fila->ANREX;
                $nombresql=$fila->VORNA;
                $nombre2sql=$fila->NAME2;
                $apellidosql=$fila->NACHN;
                $apellido2sql=$fila->NACH2;
                $fecha_nacimiento=$fila->GBDAT;
                $masculino=$fila->GESC1;
                $idiomasql=$fila->SPRSL;
                $nacionalidadsql=$fila->NATIO;
                $estado_civilsql=$fila->FATXT;
                $direccionsql=$fila->STRAS;
                $telefonosql=$fila->TELNR;
                $paisnaci_sql=$fila->GBLND;
                $correo_sql=$fila->USRID_LONG;
                $fecha_ini_sql=$fila->BEGDA;
                $fecha_fin_sql=$fila->ENDDA22;
                $tipo_formacion_sql=$fila->SLART;
                $academi_formation_sql=$fila->AUSBI;
                $nombre_insti_sql=$fila->INSTI;
                $pais_instit_sql=$fila->SLAND;
                $titulo_sql=$fila->SLABS;
                $especialidad_sql=$fila->SLTP1;
                $duracion_sql=$fila->ANZKL;
                $unidad_tiempo_sql=$fila->ANZEH;
                $fecha_inicio_labsql=$fila->BEGDA23;
                $fecha_fin_labsql=$fila->ENDDA23;
                $empresa_sql=$fila->ARBGB;
                $pais_trabajosql=$fila->LAND123;
                $area_trabajosql=$fila->BRANC;
                $actividad_empresasql=$fila->TAETE;
                $id=$fila->id_CANDIDATOS;
            }
            }
      else {

            $mensaje = "Error, no se pudo procesar su transacción";

        }
        }
    ?>



    <div class="col-sm-12">
    <div class="row">
    <div class="col-sm-12">

        <div class="col-sm-12">
            <br>

            Bienvenido(a)
            <?php echo strtoupper("$apellidosql,$nombresql");?>
        </div>
    <!-- End of the body content for CoffeeCup Web Form Builder -->

    </div>
    </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="letras" align="center">
                    <p>
                        Captación de Talento
                    </p>
                    <br>
                    <br>
                    <br>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <div  align="center">



                        <div class="panel panel-primary">

                            <div class="panel-heading">Aviso Importante</div>
                            <div class="panel-body">
                                <p>Te Recomendamos mantener su perfil actualizado</p><br>
                                <p>Gracias!!</p>
                            </div>

                            <table class="table">

                            </table>
                        </div>


                    </div>
                </div>

                <div class="col-sm-4">
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-sm-12">
                <div class="row">


                <div class="col-sm-2">
                    &nbsp;
                </div>

                    <div class="col-sm-1">
                        &nbsp;
                    </div>

                        <div class="col-sm-6">



<div align="center">


                    <form action="<?php echo base_url()?>captacion/captacion_nuevo" method="post">
                    <div class="btn-group" role="group" aria-label="...">

                            <input type="hidden" name="form[txt][opcion]" value="ver">
                            <input type="hidden" name="form[formula][nada]" value="ver">
                            <input type="hidden" name="form[alphaNum][n]" value="ver">
                            <input type="hidden" name="form[int][id]" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-default">Ver/Editar</button>
                        <button type="button" class="btn btn-default"  onclick="return cambio_c();">Cambiar Contraseña</button>
                        <button type="button" class="btn btn-default" onclick="return confirmar();">Salir</button>

                    </div>
</div>
                    </form>
                        </div>

                                    <div class="col-sm-1">
                                        &nbsp;
                                    </div>

                                        <div class="col-sm-2">
                                            &nbsp;
                                            </div>











                </div>
                </div>
            </div>



        <div class="row">
            <div class="col-sm-12">

                    <div class="col-sm-12">
                        <?php
                        if(isset($opcion)){
                            if($opcion=='modificado'){
                                echo   "<script>
					alert('Cambio Exitoso');

				</script>";

                                ?>

                            <?php }}

                        if(isset($_GET['m'])){
                        if($_GET['m']=='3'){
                        echo   "<script>
					alert('Cambio Exitoso');

				</script>";

                        }}

                        ?>
                    </div>

            </div>

        </div>

    </div>



</div>
    <script>
        function confirmar(){


                location.href="<?php echo base_url()?>login/login/salir";

        }
        function cambio_c(){


                location.href="<?php echo base_url()?>login/login/cambio_password";


        }

    </script>
<br>
<br>
<?php $this->load->view('tema/footer.php'); ?>