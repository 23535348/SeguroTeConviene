<?php $this->load->view('tema/header2.php'); ?>
<?php $this->load->view('tema/js_poliza_salud.php'); ?>
<?php $this->load->view('tema/add_3.php'); ?>
<?php $url=base_url();?>

    <script type="text/javascript">

        $(document).on("click", ".removeButton", function(){
            //  $(this).parent().parent().remove();
            //$(this).find("tr").remove();
            var current_row = $(this).parent().parent();
            // remove the row from DOM:
            current_row.remove();
            return false;
        });


        function addContact(){
            var template = '';

            var total_filas = document.getElementById("tablaHijos").rows.length;
            var filas_index = total_filas;
            total_filas = total_filas -1;

            var hijo_izq = total_filas +1 ;
            var hijo_der = total_filas + filas_index + 1;

            //$('#cotizador > tbody > tr')
            //$('#site_id_'+id).after().append('<tr id="delete"></tr>');
            var template = "<tr id='fila_hijo_"+filas_index+"'><td  valign='top'>&nbsp;</td><td   valign='top' style='width: 90%;' > <div style='float: right;margin-left: 0px;width: 100%;'><div id='hijo_fecha_nuevo_izq' class='col-xs-12' style='margin-bottom:16px;'><input id='InputHijo"+hijo_izq+"' tabindex='1' type='text' class='form-control datatimer' name='fecha_nac_hijo_izq[]' placeholder='Fecha Nacimiento Hijo " + hijo_izq + "' required></div></div></td><td  valign='center'>&nbsp;<a href='#' style='color:#000;' class='removeButton'><img class='' src=<?= $url ?>img/eliminar.png title='[Eliminar Hijos]'>  </A></td></tr>";
            // var template = "<tr style='float: right;width: 300px;margin-left: 0px;'><td  valign='top'>&nbsp;</td><td   valign='top' class='col-xs-12' style='margin-bottom:16px;'>  <input tabindex='1' type='text' class='form-control' name='nombre' placeholder='Nombre Del Hijo' required> </td><td   valign='top'>  <input tabindex='5' type='text' class='form-control fecha_hijo'  name='fecha_nac_hijo' placeholder='Fecha de Nacimiento'><a href='#' style='color:#000;' class='removeButton'>X</A>  </td><td  valign='top'>&nbsp;</td></tr> ";


            $("#fila_hijo_"+total_filas).after(template);
            //$("#cotizador").after("#fila_hijo").append(template);
            // $('#cotizador').after(template);
            //$(this).after(template);

            //var template = "<br /> <p > <input tabindex='1' type='text' class='form-control' name='nombre' placeholder='Nombre Del Hijo' required><a href='#' id='remScnt'>Remove</a></p><p> ";
            //var template2 ="<br /> <input tabindex='5' type='text' class='form-control' name='fecha_nac' placeholder='Fecha de Nacimiento'  required>";
            //var template2 ='   <p> <input tabindex="5" type="text" class="form-control fecha_hijo picker__input" name="fecha_nac_hijo[]" placeholder="Fecha de Nacimiento" readonly=""><a href="#" id="remScnt">Remove</a></p>';


            



        }
        $(".datatimer").each(function(){
            $(this).datetimepicker();
        });

        function formvalidation_e() {

            var f_nombre=document.getElementsByName("nombre")[0].value;
            var f_apellido=document.getElementsByName("apellido")[0].value;
            var f_cedula=document.getElementsByName("cedula")[0].value;
            var f_genero=document.getElementsByName("genero")[0].value;
            var f_fecha_nac=document.getElementsByName("fecha_nac")[0].value;
            var f_nacionalidad=document.getElementsByName("nacionalidad")[0].value;
            var f_correo=document.getElementsByName("correo")[0].value;
            var f_telefono=document.getElementsByName("telefono")[0].value;
            var f_celular=document.getElementsByName("celular")[0].value;

            if( f_nombre == '')
            {
                alert("Introduzca la Nombre");
                //document.getElementsByName("nombre")[0].focus();
                //x.focus();
                return false;
            }
            if ( f_apellido == '')
            {
                alert("Introduzca la Apellido");
                //x.focus();
                return false;
            }
            else if( f_cedula == '')
            {
                alert("Introduzca la Cédula");
                //x.focus();
                return false;
            }
            else if ( f_genero == '')
            {
                alert("Introduzca el Genero");
                //x.focus();
                return false;
            }
            else if( f_fecha_nac == '')
            {
                alert("Introduzca la Fecha de Nacimiento");
                //x.focus();
                return false;
            }
            else if((f_nacionalidad == '') || (f_nacionalidad == 'Nacionalidad'))
            {
                alert("Introduzca la Nacionalidad");
                //x.focus();
                return false;
            }
            else if( f_correo == '')
            {
                alert("Introduzca el correo");
                //x.focus();
                return false;
            }
            else if( f_telefono == '')
            {
                alert("Introduzca la Telefono");
                //x.focus();
                return false;
            }
            else if( f_celular == '')
            {
                alert("Introduzca la Celular");
                //x.focus();
                return false;
            }
            else{

                document.getElementById('divDatosPersonalesPlanSalud').style.display = 'none';
                document.getElementById('divDatosPlanSalud').style.display = 'block';
                //document.getElementById('divContratarSeguroPlanSalud').style.display = 'none';

                document.getElementById('personal').style.display = 'none';
                document.getElementById('plansalud').style.display = 'block';
                return true;
            }



        }


        function echandoPatras_c(){


            document.getElementById('divDatosPersonalesPlanSalud').style.display = 'block';
            document.getElementById('divDatosPlanSalud').style.display = 'none';
            //document.getElementById('divContratarSeguroPlanSalud').style.display = 'none';

            document.getElementById('personal').style.display = 'block';
            document.getElementById('plansalud').style.display = 'none';

            return true;
        }

        function validateForm() {
            // var f_nombre=document.getElementsByName("fecha_nac_conyugue")[0].value;

            var f_tipo_seguro = document.forms["myForm"]["tipo_seguro"].value;

            if (f_tipo_seguro == 3) {
                var total_filas = document.getElementById("tablaHijos").rows.length;
                //alert (total_filas);

                var total_filas_hijos = total_filas - 1

                if (total_filas_hijos == 1) {
                    var f_fecha_nac_hijo_izq = document.forms["myForm"]["fecha_nac_hijo_izq[]"].value;

                    var f_fecha_nac_hijo_der = document.forms["myForm"]["fecha_nac_hijo_der[]"].value;
                    //alert (f_fecha_nac_hijo_izq);
                    //alert(f_fecha_nac_hijo_der);
                    if (f_fecha_nac_hijo_izq == null || f_fecha_nac_hijo_izq == "") {
                        if (f_fecha_nac_hijo_der == null || f_fecha_nac_hijo_der == "") {

                            alert("Por Favor Ingrese la Fecha de los Hijos");
                            return false;
                        }

                    }
                } else {
                    var der = document.myForm.elements["fecha_nac_hijo_der[]"].length
                    var izq = document.myForm.elements["fecha_nac_hijo_izq[]"].length

                    var total_hijos = der + izq;
                    var is_chequed = false;

                    //alert (der);
                    //alert(izq);
                    //alert(total_hijos);

                    for (var i = 1; i <= total_hijos; i++ ){
                        var fecha_nac_hijo = $('#InputHijo'+i).val();
                        //alert(i);
                        //alert(fecha_nac_hijo);

                        if (fecha_nac_hijo.trim() != "") {
                            //alert("No esta vacio");
                            is_chequed = true;
                            break;
                        }

                    }
                    if (is_chequed == false) {
                        alert("Por Favor Ingrese la Fecha de los Hijos");
                        return false;
                    }
                }
            }

            //console.log(document.myForm.elements["fecha_nac_hijo_izq[]"].length);




            //alert("pase");

            // console.log(document.myForm.elements["fecha_nac_hijo_der[]"].length);



            //alert(f_fecha_nac_hijo_izq);

            var f_fecha_nac_conyugue = document.forms["myForm"]["fecha_nac_conyugue"].value;


            //alert (f_tipo_seguro);
            if (f_tipo_seguro == 2) {
                if (f_fecha_nac_conyugue == null || f_fecha_nac_conyugue == "") {
                    alert("Por Favor Ingrese la Fecha Nacimiento del Conyugue");
                    return false;
                }
            }


            return true;
        }



    </script>

    <section id="featured">
        <!-- start slider -->
        
            <div id="row_letas" class="row">
                <div class="col-xs-12">
                    <div class="gris_letras">
                        Cotización de Plan de Salud
                    </div>

                </div>
            </div>



    </section>
    
    <div id="divActiveVehicle" style="display:none">
    <div class="row" align="center">
        <div class="col-xs-12">
            <div id=1 class="col-xs-4">
                <div style="">
                    <img class="img-responsive"  src="<?= $url ?>img/1_select.png">

                </div>
            </div>
            <div id=2 class="col-xs-4">
                <div style="">
                    <img class="img-responsive" src="<?= $url ?>img/2_select.png">

                </div>
            </div>
            <div id="3" class="col-xs-4">
                <div style="">
                    <img class="img-responsive"  src="<?= $url ?>img/3_no_select.png">

                </div>
            </div>


        </div>
    </div>

    </div>





<? if(isset($_POST['sesion_cotizacion'])){
    if($_POST['sesion_cotizacion']==1){ $variableStyle="";?>

    <div class="row" align="center">
        <div class="col-xs-12">
            <div id=1 class="col-lg-4">
            <div style="background-color:#e87b00;width:100%;padding:8px;display:inline-block;-webkit-border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-bottomleft: 5px;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;">
                <img src="<?= $url ?>img/1.png">
                <b>DATOS PERSONALES</b>
            </div>
            </div>
            <div id=2 class="col-lg-4">
            <div style="background-color:#e87b00;width:100%;padding:8px;display:inline-block;">
                <img src="<?= $url ?>img/2.png">
                <b> DATOS DEL PLAN</b>
            </div>
            </div>
            <div id="3" class="col-lg-4">
            <div style="background-color:#e87b00;width:100%;padding:8px;display:inline-block;-webkit-border-top-right-radius: 5px;
-webkit-border-bottom-right-radius: 5px;
-moz-border-radius-topright: 5px;
-moz-border-radius-bottomright: 5px;
border-top-right-radius: 5px;
border-bottom-right-radius: 5px;">
                <img src="<?= $url ?>img/3.png">
                <b>CONTRATAR SU SEGURO</b>
            </div>
            </div>


            </div>
        </div>

<?}}else{
    $variableStyle='display:none';
    ?>
    <div id="divDatosPersonales" >
    <div class="row" align="center">
        <div class="col-xs-12">
            <div id=1 class="col-xs-4">
                <div style="">
                    <img class="img-responsive" src="<?= $url ?>img/1_select.png">

                </div>
            </div>
            <div id=2 class="col-xs-4">
                <div style="">
                    <img class="img-responsive"  src="<?= $url ?>img/2_no_select.png">

                </div>
            </div>
            <div id="3" class="col-xs-4">
                <div style="">
                    <img class="img-responsive" src="<?= $url ?>img/3_no_select.png">

                </div>
            </div>


        </div>
    </div>
    </div>
    <?}  setlocale(LC_MONETARY, 'en_US');?>




<? if(isset($brandon)){
    if($brandon==1){?>

        <div class="row">
             <div class="col-xs-12">
          <div class="aseguradoras col-lg-7" style="margin-left:16.5%;" >
            <div class="encabez">Datos del Plan Salud</div>
            <table border="1" width="100%">
                <tr>
                    <td width="20%">
                        <p>Alcance de Cobertura: </p>
                    </td>
                    <td width="80%">
                        <p><?php echo $descripcion_alcance_cobertura; ?></p>
                    </td>
                </tr>

                <tr>
                   <td width="20%">
                        <p>Tipo de Proveedor: </p>
                    </td>
                    <td width="80%">
                        <p><?php echo $descripcion_tipo_proveedor; ?></p>
                    </td>
                </tr>

                <tr>
                    <td width="20%">
                        <p>Tipo de Seguro:  </p>
                    </td>
                   <td width="80%">
                        <p><?php echo $descripcion_tipo_seguro; ?></p>
                    </td>
                </tr>

                <tr>
                    <td width="20%">
                        <p>Suma Asegurada M&aacute;xima:  </p>
                    </td>
                   <td width="80%">
                        <p><?php echo utf8_encode($descripcion_suma_asegurada_maxima); ?></p>
                    </td>
                </tr>


            </table>


        </div>


    </div>



            </div>

            </div>
        </div>














<?
    $existen_resultados = 0;
    while ($iteracion < 4) {


    ?>
        <br>
        <div class="row" style="margin-left:2%;"> <!-- Inicia Fila Principal -->

            <?php

                $id_aseguradora_salud = $tabla_resultados_ordenados[1][$iteracion];
                $nombre_aseguradora = $tabla_resultados_ordenados[2][$iteracion];
                $nombre_plan_salud_1 = $tabla_resultados_ordenados[3][$iteracion];
                $monto_total_plan_salud_1 = $tabla_resultados_ordenados[4][$iteracion];
                $nombre_plan_salud_2 = $tabla_resultados_ordenados[5][$iteracion];
                $monto_total_plan_salud_2 = $tabla_resultados_ordenados[6][$iteracion];
                $nombre_plan_salud_3 = $tabla_resultados_ordenados[7][$iteracion];
                $monto_total_plan_salud_3 = $tabla_resultados_ordenados[8][$iteracion];
                $total_hijos_plan = $tabla_resultados_ordenados[9][$iteracion];
                $informacion_adicional_1 = $tabla_resultados_ordenados[10][$iteracion];
                $informacion_adicional_2 = $tabla_resultados_ordenados[11][$iteracion];
                $informacion_adicional_3 = $tabla_resultados_ordenados[12][$iteracion];

                $gran_total_plan_salud = $monto_total_plan_salud_1 + $monto_total_plan_salud_2 + $monto_total_plan_salud_3;

                if ($gran_total_plan_salud > 0) {
                    $existen_resultados = 1;


                 switch ($nombre_aseguradora){
                            case "Internacional de Seguros":?>
                                <div class="logos col-lg-2 col-offset-1"><img src="<?=$url?>img/logos/iseguros133.png"></div>
                                <?php break;
                            case "ASSA":?>
                                <div class="logos col-lg-2 col-offset-1"><img src="<?=$url?>img/logos/assa.png"></div>
                                <?php break;
                            case "PALIG":?>
                                <div class="logos col-lg-2 col-offset-1"><img src="<?=$url?>img/logos/palig.png"></div>
                                <?php break;
                           }

            ?>

             <!-- Plan de Salud 1 -->
             <?php  if ($monto_total_plan_salud_1 > 0) { ?>
            <div class="aseguradoras col-lg-2">
                <div class="basico"><p><?php echo utf8_encode($nombre_plan_salud_1); ?></p></div>

                <div class="col-lg-6 precio">B/.<?php echo number_format($monto_total_plan_salud_1, "2", ".", ","); ?></div>

                <?php if($monto_total_plan_salud_1<1){?>
                    <a href="#?<?php $empresa=$empresa+1;?>">
                        <button class="btn btn-warning btn-small" style="margin-top:0;" type="button" disabled>
                            <p class="msj">No Cotizable</p>
                        </button>
                    </a>
                   <br>
                    <a style="color:#1E90FF; text-decoration:none;" > &nbsp; </a>

                <?php } else {?>
                <form name="form<?=$iteracion?>" id="form<?=$iteracion?>" action="validator" method="POST">
                                                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                                                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                                                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                                                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">

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
                                                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                                                    <input type="hidden" name="edad" value="<?=$edad?>">

                                                     <input type="hidden" name="nacionalidad" value="<?=$nacionalidad?>">


                                                    <input type="hidden" name="nombre_aseguradora" value="<?=$nombre_aseguradora?>">
                                                    <input type="hidden" name="monto_total_plan_salud" value="<?=$monto_total_plan_salud_1?>">
                                                    <input type="hidden" name="descripcion_alcance_cobertura" value="<?=$descripcion_alcance_cobertura?>">
                                                    <input type="hidden" name="descripcion_suma_asegurada_maxima" value="<?=$descripcion_suma_asegurada_maxima?>">
                                                    <input type="hidden" name="descripcion_tipo_proveedor" value="<?=$descripcion_tipo_proveedor?>">
                                                    <input type="hidden" name="descripcion_tipo_seguro" value="<?=$descripcion_tipo_seguro?>">
                                                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                                                    <input type="hidden" name="id_suma_asegurada_maxima" value="<?=$id_suma_asegurada_maxima?>">
                                                    <input type="hidden" name="edad_principal" value="<?=$edad_principal?>">
                                                    <input type="hidden" name="edad_conyugue" value="<?=$edad_conyugue?>">
                                                    <input type="hidden" name="total_hijos_plan" value="<?=$total_hijos_plan?>">
                                                     <input type="hidden" name="nombre_plan_salud" value="<?=$nombre_plan_salud_1?>">




                    <button class="btn btn-warning btn-small" type="sumbit">
                        Solicitar
                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </button>

                                                </form>






                   <!-- <a class="a_form" href="validator_e.php?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>&nombre_plan_salud=<?php echo $nombre_plan_salud_1; ?>
                       &nombre_aseguradora=<?php echo $nombre_aseguradora; ?>
                       &monto_total_plan_salud=<?php echo $monto_total_plan_salud_1; ?>
                       &descripcion_alcance_cobertura=<?php echo $descripcion_alcance_cobertura; ?>
                       &descripcion_suma_asegurada_maxima=<?php echo $descripcion_suma_asegurada_maxima; ?>
                       &descripcion_tipo_proveedor=<?php echo $descripcion_tipo_proveedor; ?>
                       &descripcion_tipo_seguro=<?php echo $descripcion_tipo_seguro; ?>
                       &id_alcance_cobertura=<?php echo $id_alcance_cobertura; ?>
                       &id_suma_asegurada_maxima=<?php echo $id_suma_asegurada_maxima; ?>
                       &id_tipo_proveedor=<?php echo $id_tipo_proveedor; ?>
                       &id_tipo_seguro=<?php echo $id_tipo_seguro; ?>
                       &edad_principal=<?php echo $edad_principal; ?>
                       &edad_conyugue=<?php echo $edad_conyugue; ?>
                       &total_hijos_plan=<?php echo $total_hijos_plan; ?>
                       ">

                        <button class="btn btn-warning btn-small" type="button">
                            Solicitar
                            <i class="glyphicon glyphicon-circle-arrow-right"></i>
                        </button>
                    </a>-->

                    <br>
                    <a style="color:#1E90FF; text-decoration:none;" class="view-pdf" href="<?=$url?>pdf/plan_salud/<?php echo $informacion_adicional_1 ?> " >Mas informaci&oacute;n</a>  <!-- Modal -->




                <?php } ?>
            </div>
             <?php  } ?>
             <!-- Fin Plan de Salud 1 -->
             <!-- Plan de Salud 2 -->
              <?php  if ($monto_total_plan_salud_2 > 0) { ?>
            <div class="aseguradoras col-lg-2">
                <div class="basico"><p><?php echo utf8_encode($nombre_plan_salud_2); ?></p></div>

                <div class="col-lg-6 precio">B/.<?php echo number_format($monto_total_plan_salud_2, "2", ".", ","); ?></div>

                <?php if($monto_total_plan_salud_2<1){?>
                    <a href="#?<?php $empresa=$empresa+1;?>">
                        <button class="btn btn-warning btn-small" style="margin-top:0;" type="button" disabled>
                            <p class="msj">No Cotizable</p>
                        </button>
                    </a>
                 <br>
                    <a style="color:#1E90FF; text-decoration:none;" > &nbsp; </a>


                <?php } else {?>
                <form name="form<?=$iteracion?>" id="form<?=$iteracion?>" action="validator" method="POST">
                                                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                                                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                                                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                                                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">

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
                                                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                                                    <input type="hidden" name="edad" value="<?=$edad?>">

<input type="hidden" name="nacionalidad" value="<?=$nacionalidad?>">

                                                    <input type="hidden" name="nombre_aseguradora" value="<?=$nombre_aseguradora?>">
                                                    <input type="hidden" name="monto_total_plan_salud" value="<?=$monto_total_plan_salud_2?>">
                                                    <input type="hidden" name="descripcion_alcance_cobertura" value="<?=$descripcion_alcance_cobertura?>">
                                                    <input type="hidden" name="descripcion_suma_asegurada_maxima" value="<?=$descripcion_suma_asegurada_maxima?>">
                                                    <input type="hidden" name="descripcion_tipo_proveedor" value="<?=$descripcion_tipo_proveedor?>">
                                                    <input type="hidden" name="descripcion_tipo_seguro" value="<?=$descripcion_tipo_seguro?>">
                                                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                                                    <input type="hidden" name="id_suma_asegurada_maxima" value="<?=$id_suma_asegurada_maxima?>">

                                                     <input type="hidden" name="edad_principal" value="<?=$edad_principal?>">
                                                    <input type="hidden" name="edad_conyugue" value="<?=$edad_conyugue?>">
                                                    <input type="hidden" name="total_hijos_plan" value="<?=$total_hijos_plan?>">
                                                     <input type="hidden" name="nombre_plan_salud" value="<?=$nombre_plan_salud_2?>">

<input type="hidden" name="nacionalidad" value="<?=$nacionalidad?>">



                    <button class="btn btn-warning btn-small" type="sumbit">
                        Solicitar
                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </button>

                                                </form>

                  <!--  <a class="a_form" href="validator_e.php?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>&nombre_plan_salud=<?php echo $nombre_plan_salud_2; ?>
                       &nombre_aseguradora=<?php echo $nombre_aseguradora; ?>
                       &monto_total_plan_salud=<?php echo $monto_total_plan_salud_2; ?>
                       &descripcion_alcance_cobertura=<?php echo $descripcion_alcance_cobertura; ?>
                       &descripcion_suma_asegurada_maxima=<?php echo $descripcion_suma_asegurada_maxima; ?>
                       &descripcion_tipo_proveedor=<?php echo $descripcion_tipo_proveedor; ?>
                       &descripcion_tipo_seguro=<?php echo $descripcion_tipo_seguro; ?>
                       &id_alcance_cobertura=<?php echo $id_alcance_cobertura; ?>
                       &id_suma_asegurada_maxima=<?php echo $id_suma_asegurada_maxima; ?>
                       &id_tipo_proveedor=<?php echo $id_tipo_proveedor; ?>
                       &id_tipo_seguro=<?php echo $id_tipo_seguro; ?>
                       &edad_principal=<?php echo $edad_principal; ?>
                       &edad_conyugue=<?php echo $edad_conyugue; ?>
                       &total_hijos_plan=<?php echo $total_hijos_plan; ?>
                       ">

                        <button class="btn btn-warning btn-small" type="button">
                            Solicitar
                            <i class="glyphicon glyphicon-circle-arrow-right"></i>
                        </button>
                    </a>-->

                    <br>
                    <!-- <a style="color:#1E90FF; text-decoration:none;" data-toggle="modal" href="pdf/plan_salud/<?php echo $informacion_adicional_2 ?> " target="_blank"">Mas informaci&oacute;n</a> -->  <!-- Modal -->
                    <a style="color:#1E90FF; text-decoration:none;" class="view-pdf" href="<?=$url?>pdf/plan_salud/<?php echo $informacion_adicional_2 ?> " >Mas informaci&oacute;n</a>  <!-- Modal -->

                <?php } ?>
            </div>
             <?php } ?>
             <!-- Fin Plan de Salud 2 -->
             <!-- Plan de Salud 3 -->
               <?php  if ($monto_total_plan_salud_3 > 0) { ?>
            <div class="aseguradoras col-lg-2">
                <div class="basico"><p><?php echo utf8_encode($nombre_plan_salud_3); ?></p></div>

                <div class="col-lg-6 precio">B/.<?php echo number_format($monto_total_plan_salud_3, "2", ".", ","); ?></div>

                <?php if($monto_total_plan_salud_3<1){?>
                    <a href="#?<?php $empresa=$empresa+1;?>">
                        <button class="btn btn-warning btn-small" style="margin-top:0;" type="button" disabled>
                            <p class="msj">No Cotizable</p>
                        </button>
                    </a>
                    <br>
                    <a style="color:#1E90FF; text-decoration:none;" > &nbsp; </a>
                <?php } else {?>
 <form name="form<?=$iteracion?>" id="form<?=$iteracion?>" action="validator" method="POST">
                                                    <input type="hidden" name="nombre" value="<?=$nombre?>">
                                                    <input type="hidden" name="apellido" value="<?=$apellido?>">
                                                    <input type="hidden" name="cedula" value="<?=$cedula?>">
                                                    <input type="hidden" name="company" value="<?=$nombre_aseguradora?>">

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
                                                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                                                    <input type="hidden" name="edad" value="<?=$edad?>">

<input type="hidden" name="nacionalidad" value="<?=$nacionalidad?>">

                                                    <input type="hidden" name="nombre_aseguradora" value="<?=$nombre_aseguradora?>">
                                                    <input type="hidden" name="monto_total_plan_salud" value="<?=$monto_total_plan_salud_3?>">
                                                    <input type="hidden" name="descripcion_alcance_cobertura" value="<?=$descripcion_alcance_cobertura?>">
                                                    <input type="hidden" name="descripcion_suma_asegurada_maxima" value="<?=$descripcion_suma_asegurada_maxima?>">
                                                    <input type="hidden" name="descripcion_tipo_proveedor" value="<?=$descripcion_tipo_proveedor?>">
                                                    <input type="hidden" name="descripcion_tipo_seguro" value="<?=$descripcion_tipo_seguro?>">

                                                    <input type="hidden" name="estado_civil" value="<?=$estado_civil?>">
                                                    <input type="hidden" name="id_suma_asegurada_maxima" value="<?=$id_suma_asegurada_maxima?>">

                                                     <input type="hidden" name="edad_principal" value="<?=$edad_principal?>">
                                                    <input type="hidden" name="edad_conyugue" value="<?=$edad_conyugue?>">
                                                    <input type="hidden" name="total_hijos_plan" value="<?=$total_hijos_plan?>">
                                                     <input type="hidden" name="nombre_plan_salud" value="<?=$nombre_plan_salud_3?>">
<input type="hidden" name="nacionalidad" value="<?=$nacionalidad?>">




                    <button class="btn btn-warning btn-small" type="sumbit">
                        Solicitar
                        <i class="glyphicon glyphicon-circle-arrow-right"></i>
                    </button>

                                                </form>


                  <!--  <a class="a_form" href="validator_e.php?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>&nombre_plan_salud=<?php echo $nombre_plan_salud_3; ?>
                      &nombre_aseguradora=<?php echo $nombre_aseguradora; ?>
                       &monto_total_plan_salud=<?php echo $monto_total_plan_salud_3; ?>
                       &descripcion_alcance_cobertura=<?php echo $descripcion_alcance_cobertura; ?>
                       &descripcion_suma_asegurada_maxima=<?php echo $descripcion_suma_asegurada_maxima; ?>
                       &descripcion_tipo_proveedor=<?php echo $descripcion_tipo_proveedor; ?>
                       &descripcion_tipo_seguro=<?php echo $descripcion_tipo_seguro; ?>
                       &id_alcance_cobertura=<?php echo $id_alcance_cobertura; ?>
                       &id_suma_asegurada_maxima=<?php echo $id_suma_asegurada_maxima; ?>
                       &id_tipo_proveedor=<?php echo $id_tipo_proveedor; ?>
                       &id_tipo_seguro=<?php echo $id_tipo_seguro; ?>
                       &edad_principal=<?php echo $edad_principal; ?>
                       &edad_conyugue=<?php echo $edad_conyugue; ?>
                       &total_hijos_plan=<?php echo $total_hijos_plan; ?>
                       ">

                        <button class="btn btn-warning btn-small" type="button">
                            Solicitar
                            <i class="glyphicon glyphicon-circle-arrow-right"></i>
                        </button>
                    </a>-->

                    <br>
                   <!-- <a style="color:#1E90FF; text-decoration:none;" data-toggle="modal" href="pdf/plan_salud/<?php echo $informacion_adicional_3 ?> " target="_blank"">Mas informaci&oacute;n</a> --> <!-- Modal -->
                    <a style="color:#1E90FF; text-decoration:none;" class="view-pdf" href="<?=$url?>pdf/plan_salud/<?php echo $informacion_adicional_3 ?> " >Mas informaci&oacute;n</a>  <!-- Modal -->

                <?php } ?>
            </div>
              <?php } ?>
             <!-- Fin Plan de Salud 3 -->
        </div>  <!-- Fin Fila Principal -->

    <?php
                } //if ($gran_total_plan_salud > 0) {
     $iteracion++;

    } // fin while iteracion de impresion

    ?>

        <br>





            <table border="0" width="100%">
                <tr>
                    <td width="20%">
                        <p></p>
                    </td>
                    <td width="20%">
                        <p></p>
                    </td>
                    <td width="20%" align="center">
                         <!--<a class="a_form" href="cotizador_e.php?<?php echo str_replace('+', '%20', http_build_query($_POST)); ?>&nombre_plan_salud=prueba">-->
                          <a class="a_form" href="cotizador_e.php?<?php echo str_replace('+', '', http_build_query($_POST)); ?>
                             &reenvio=1
                             &fecha_nac_1=<?php echo $_POST['fecha_nac']; ?>
                                ">
                        <button class="btn btn-primary" type="button">
                            ATRAS
                        </button>
                    </a>
                    </td>
                    <td width="20%">
                        <p></p>
                    </td>
                    <td width="20%">
                        <p></p>
                    </td>
                </tr>




            </table>



   <!--  no se encuentran resultados -->
         <?php if ($existen_resultados == 0) {  ?>
               <div class="row" style="width: 100%;padding-left: 150px;padding-right: 366px;text-align: justify;">
                <br>

                <p style="font-size:18px; padding-left: 250px;">Gracias por utilizar nuestros servicios.</p>
                <p style="font-size:18px;">Algunos de los  par&aacute;metros seleccionados no cumplen con los criterios de las aseguradoras participantes.
                Por favor regrese y modifique los mismos para que pueda obtener los resultados deseados.</p>

            </div>

            <br>
            <br>

<!--  fin no se encuentran resultados -->

               <?php }


    }

}else{?>

    <form method="POST" name="myForm"  id="myForm" action="<?=$url?>cotizador/index.php/Pol_salud/form">


            <div class="tab-content">
                      <div id="personal" class="tab-pane active">
                        <input id="sesion_cotizacion" type="hidden" value="1" name="sesion_cotizacion">
                    <div class="row" align="center">
                        <div class="col-xs-12">
                            <div class="col-lg-4">

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
                            <div class="act">
                           <input  id="datepicker" class="form-control" type="text" placeholder="Fec.Nac: dd/mm/aaaa "  name="fecha_nac" tabindex="5" required="">


                               <!--  <div id="dateP" class="picker" style="display: none"></div><input name="form[formula][GBDAT]" class="picker" id="Nacimiento" required type="text"
                                       onkeyup="mascara(this,'/',patron,true)"  value=""   data-hint="" />-->

<span class="add-on">
<i class="icon-th"></i>
</span>
                            </div>

                        </div>
                        <div class="col-xs-12" style="margin-bottom:16px;">
                                        <select class="form-control" name="sexo" required="" tabindex="4">
                                            <option value="">Género</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                        <div class="col-xs-12" style="margin-bottom:16px;">
                                        <select class="form-control" name="nacionalidad" tabindex="6">
                                            <option value="">Nacionalidad</option>
                                            <option value="P">Panameño (a)</option>
                                            <option value="E">Extranjero (a)</option>
                                        </select>
                                    </div>
                            <div class="col-xs-12" style="margin-bottom:16px;">
                                <input class="form-control" type="text" value="" placeholder="Teléfono Residencial" name="telefono" tabindex="7">
                            </div>
                            <div class="col-xs-12" style="margin-bottom:16px;">
                                <input class="form-control" type="text" value="" placeholder="Celular" name="celular" tabindex="9">
                            </div>
                        </div>
                        </div>

                            <div class="col-lg-4">

                                <div >
                                    

                                    
                                    
                                    <div class="col-xs-12" style="margin-bottom:16px;">
                                        <input class="form-control" type="text" value="" placeholder="Correo Electrónico" name="correo" tabindex="8">
                                    </div>
                                    <div class="col-xs-12" style="margin-bottom:16px;">

                                    </div>




                                </div>
                            </div>


                                <!--<div class="col-lg-4">
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

                    
                        <div class="row" align="center">
                            <div class="col-xs-12">
                                <div id="myTab" class="row">
                                    <div>
                                        <button class="btn btn-siguiente" onclick="formvalidation(); return false;" type="button">Siguiente</button>
                                        <a href="#vehiculo"></a>
                                    </div>
                            </div>
                            </div>

                        </div>
            </div>

    <div class="tab-pane" id="vehiculo" >
    <input type="hidden" id="brandon" name="brandon" value="1"/>
    <div class="row" align="center">
    <div class="col-xs-12">
        <div  class="col-xs-12" >
            <div  class="col-xs-12"  style="margin-bottom:16px;">
                <select class="form-control" name="alcance_cobertura" required="" tabindex="1">
                    <option value="">Alcance de la Cobertura</option>
                    <option value="1">Solo Local</option>
                    <option value="2">Local e Internacional</option>
                </select>
            </div>
            <div class="col-xs-12" style="margin-bottom:16px;">
                <select class="form-control" name="tipo_proveedor" tabindex="3">
                    <option value="">Tipo de Proveedor</option>
                    <option value="1">Red de Proveedores</option>
                    <option value="2">Abierto</option>
                </select>
            </div>

        </div>

        <div class="col-xs-12" >
            <div class="col-xs-12" style="margin-bottom:16px;">
                <select class="form-control" name="suma_asegurada_maxima" tabindex="3">
                    <option value="">Suma Asegurada Máxima</option>
                    <option value="1">Máximo Vitalicio</option>
                    <option value="2">Anual Renovable</option>
                </select>


            </div>

            <div class="col-xs-12" style="margin-bottom:16px;">
                <select id="tipo_seguro" class="form-control" name="tipo_seguro" tabindex="3">
                    <option value="">Tipo de Seguro</option>
                    <option value="1">Asegurado Solo</option>
                    <option value="2">Asegurado y Conyugue</option>
                    <option value="3">Asegurado Solo e Hijos</option>
                    <option value="4">Asegurado y Familiar</option>
                    <option value="5">Menores de Edad Solos</option>
                </select>
            </div>



            <?php $ver_tabla_hijos = "hide";

            if(isset($_POST['tipo_seguro'])) {
                if ($_POST['tipo_seguro'] == 3) {
                    $ver_tabla_hijos = "";
                }

                if ($_POST['tipo_seguro'] == 4) {
                    $ver_tabla_hijos = "";
                }

                if ($_POST['tipo_seguro'] == 5) {
                    $ver_tabla_hijos = "";
                }
            }
            if(isset($ver_tabla_hijos)){
                if ($ver_tabla_hijos == "hide"){
                    unset($_POST['fecha_nac_hijo_izq']);
                    unset($_POST['fecha_nac_hijo_der']);
                }
                }



            ?>




            <br>

            <?php
            $ver_fecha_nac_conyugue = "hide";

             if(isset($_POST['tipo_seguro'] )){
                 if ($_POST['tipo_seguro'] == 2) {
                     $ver_fecha_nac_conyugue = "";
                 }

                 if ($_POST['tipo_seguro'] == 4) {
                     $ver_fecha_nac_conyugue = "";
                 }
             }


            if ($ver_fecha_nac_conyugue == "hide"){
                unset($_POST['fecha_nac_conyugue']);
            }

            ?>

            <div id="FechaNacConyugue"  class="col-xs-12 <?php echo $ver_fecha_nac_conyugue ?>" style="margin-bottom:16px;">
                
                <input  id="datepicker" class="form-control datatimer" type="text" placeholder="Fecha de Nacimiento Conyugue"  name="fecha_nac_conyugue" tabindex="5" required="" value="<? if(isset($_POST['fecha_nac_conyugue'])){ echo $_POST['fecha_nac_conyugue'];} ?>">
                
                <span class="add-on"><i class="icon-th"></i></span>
            </div>


            <table  border="0" cellspacing="0" cellpadding="0" id="tablaHijos" class="table-responsive <?php echo $ver_tabla_hijos ?>" style="border: none;">

                <tr  id="fila_hijo_1">
                    <td  valign="top"width="78">&nbsp;</td>

                    <td   valign="top" style="width: 90%;" >



                        <div style="float: right;margin-left: 0px;width: 100%;">

                            <div id="hijo_fecha_nuevo_izq" class="col-xs-12" style="margin-bottom:16px;">
                                <input tabindex="11" id="datepicker" class="form-control datatimer" type="text" placeholder="Fecha Nacimiento Hijo 1"  name="fecha_nac_hijo_izq[]"   value="<? if(isset($_POST['fecha_nac_hijo_izq'])){ echo $_POST['fecha_nac_hijo_izq']['0'];} ?>">
                            </div>
                        </div>




                    </td>




                    <td  valign="center" width="450">
                        <a href="#" style="color: #000;font-size: 13px;" onclick="javascript:addContact(); return false; " >
                            <img class="" src="<?= $url ?>img/agregar.png" title="[Agregar Hijos]">
                        </a>
                    </td>

                    <td  valign="top" width="75">&nbsp;</td>
                </tr>

                <?php


                $indice_fecha = 0;
                $indice_fila = 1;
                $InputHijoIndice = 3;
                if(isset($_POST['fecha_nac_hijo_izq'])){
                foreach ($_POST['fecha_nac_hijo_izq'] as &$value) {
                    if ($indice_fecha % 2 == 0) {
                        if (strlen(trim($value)) > 0) {

                            if ($indice_fila > 1) {
                                ?>
                                <!-- Inicia Filas en caso de que existan fechas de hijos -->
                                <tr id='fila_hijo_<?= $indice_fila ?>'>
                                    <td  valign='top'>&nbsp;
                                    </td>

                                    <td   valign='top' >
                                        <div style='float: right;width: 300px;margin-left: 0px;'>
                                            <div id='hijo_fecha_nuevo_izq' class='col-xs-12' style='margin-bottom:16px;'>
                                                <input id ='InputHijo<?php echo $InputHijoIndice ?>' tabindex='1' type='text' class='form-control fecha_hijo' name='fecha_nac_hijo_izq[]' placeholder='Fecha Nacimiento Hijo ' readonly value="<?= $_POST['fecha_nac_hijo_izq'][$indice_fecha] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <?php $InputHijoIndice++; ?>
                                    <td   valign='top'>
                                        <div id='hijo_fecha_nuevo_der' class='col-xs-12' style='margin-bottom:16px;'>
                                            <input id='InputHijo<?php echo $InputHijoIndice ?>' tabindex='5' type='text' class='form-control fecha_hijo'  name='fecha_nac_hijo_der[]' placeholder='Fecha de Nacimiento Hijo ' readonly value="<?= $_POST['fecha_nac_hijo_der'][$indice_fecha] ?>">
                                        </div>
                                    </td>
                                    <?php $InputHijoIndice++; ?>
                                    <td  valign='center'>&nbsp;<a href='#' style='color:#000;' class='removeButton'><img class="" src="<?= $url ?>img/eliminar.png" title="[Eliminar Hijos]"> </a>
                                    </td>
                                </tr>
                                <!-- Fin filas en caso de que existan fechas de hijos -->
                                <?php
                            }
                            $indice_fila = $indice_fila + 1;
                        }

                    }
                    $indice_fecha = $indice_fecha + 1;
                }

                }
                ?>


                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>





            </br>
            <!-- <input required type="checkbox"> <span class="form_text">Acepto los T&eacute;rminos y Condiciones</span> <a data-toggle="modal" href="#ventanamodal" class="btn btn-primary btn-mini">Leer</a>
-->

            <!--<div class="row" id="myTab">
                <div class="col-xs-12"><a href="#personal"><button type="button" class="btn btn-primary">ATRAS</button></a>&nbsp;<button type="submit" class="btn btn-primary">CONTINUAR</button></div>
            </div>
            -->
                <table border="0" width="100%">
                            <tr>
                                <td  align="Center" width="20%">
                                    <a onclick="ActivarTerminosPolSalud();">Al precionar Cotizar ahora esta aceptando los Términos y Condiciones</a>

                                    <!--  <input required type="checkbox"> <span class="form_text">Acepto los T&eacute;rminos y Condiciones</span>
                                    <a data-toggle="modal" href="#ventanamodal" class="btn btn-siguiente">Leer</a>-->


                                </td>
                            </tr>

                        </table>

        </div>


        <!--
            <div style="float: left;width: 200px;margin-left: 2px;">
                <div class="col-xs-12">
                    <img class="img-thumbnail banners" src="img/mapfre.png">
                </div>
                <div  class="col-xs-12">
                    <img class="img-thumbnail" src="img/petroautos.png">
                </div>
            </div>
  -->

      <!--  <div  class="col-lg-4">

            <div  class="col-xs-12">
                <a href="http://www.fordrealtyweb.com/"><img class="img-thumbnail " src="<?=$url?>img/ford_realty.jpg"></a>
            </div>
        </div>-->


    <div class="row" align="center">
        <div class="col-xs-12">
            <div id="myTab" class="row">
                <div>

                        <div class="col-xs-12"><a href="#personal"></a>
                            <button type="button" class="btn"style="background-color:#428bca;border-color: #428bca; color: #fff;margin-top:10px; color: #fff;" onclick="echandoPatras();return false;">ATRAS</button>&nbsp;<button type="submit" class="btn btn-siguiente">CONTINUAR</button></div>
                    </div>

            </div>

    </div>
    </div>
    </div>
    </div>
    </div>





   </div>
        <div id="TerminosCondiciones" style="display:none">
                    <div class="row"> 
                        <div class="col-xs-12">
                    <p>

                        <b>TERMINOS Y CONDICIONES APLICABLES</b><br><br>

                        <b style="color:#FF9933";> www.seguroteconviene.com</b> es propiedad de la empresa JIMFOR, S.A. (Corredores de Seguros) qui&eacute;n posee todos sus derechos registrados y reservados para su uso y desarrollo exclusivo, y que en lo sucesivo se denominar&aacute; EL SITIO.
                        El indebido uso, total o parcial, del contenido, informaci&oacute;n, logo, modelos y diseños suministrados por EL SITIO est&aacute; prohibido por las leyes de la Rep&uacute;blica de Panam&aacute;, y ser&aacute; sancionada en los Tribunales de Justicia de nuestro
                        pa&iacute;s acorde con las leyes locales y tratados internacionales de Derecho de Autor.<br><br>
                        El t&eacute;rmino Usuario lo identifica a Usted y a todas las personas que accedan a EL SITIO.<br><br>
                        Por favor, antes de continuar con el uso de este SITIO Web lea detenidamente nuestros T&eacute;rminos y Condiciones de Uso. Estos T&eacute;rminos regir&aacute;n el uso de EL SITIO Web y usted se obliga a cumplirlos.<br><br>
                        Al entrar y utilizar nuestra p&aacute;gina www.seguroteconviene.com usted acepta los t&eacute;rminos y condiciones que detallamos a continuaci&oacute;n, por lo que debe leer detenida y cuidadosamente los t&eacute;rminos y condiciones del uso de EL SITIO.
                        Si Usted no est&aacute; de acuerdo con cualquiera de los t&eacute;rminos y condiciones que a continuaci&oacute;n se detallan debe salir de  EL SITIO y no utilizarlo.
                        Si usted contin&uacute;a utilizando EL SITIO entonces constituye una aceptaci&oacute;n de su parte de todos los t&eacute;rminos y condiciones descritos a continuaci&oacute;n, los cuales podr&iacute;an ser modificados por www.seguroteconviene.com en cualquier momento,
                        seg&uacute;n su criterio y sin previo aviso.  Nos reservamos el derecho de cambiar, alterar, eliminar, actualizar, agregar o de cualquier manera modificar, en parte o en su totalidad, los t&eacute;rminos y condiciones aqu&iacute; plasmados.
                        Dichas modificaciones ser&aacute;n efectivas inmediatamente despu&eacute;s de su publicaci&oacute;n. Al utilizar EL SITIO despu&eacute;s de haber publicado dichas modificaciones, alteraciones o actualizaciones el Usuario queda  obligado  a cumplir los nuevos t&eacute;rminos.<br><br>

                        <b style="color:#FF9933";>www.seguroteconviene.com</b> es una p&aacute;gina de b&uacute;squeda, cotizaci&oacute;n, comparaci&oacute;n e informaci&oacute;n de p&oacute;lizas de seguros ofrecidas por diferentes compañ&iacute;as aseguradoras del mercado local panameño, exclusivamente para residentes de la Rep&uacute;blica de Panam&aacute;.<br><br>

                        La informaci&oacute;n y el material que se promueve en EL SITIO son solo una referencia y orientaci&oacute;n para la compra de seguros, y no detalla o incluye los t&eacute;rminos y condiciones aplicables a las p&oacute;lizas y coberturas  de cada compañ&iacute;a aseguradora que
                        se presentan en esta p&aacute;gina.  Toda p&oacute;liza de seguros est&aacute; sujeta a las condiciones generales y particulares de cada compañ&iacute;a aseguradora y es responsabilidad absoluta de usted quien se sirve de esta p&aacute;gina web (el usuario) de solicitar y revisar
                        las mismas al momento de contratar una p&oacute;liza con su respectiva compañ&iacute;a aseguradora.<br><br>

                        Las tarifas ofrecidas en las cotizaciones realizadas por el Usuario a trav&eacute;s de EL SITIO, una vez sean solicitadas por el Usuario (es decir, al hacer  un clic en solicitar, lo cual otorga un n&uacute;mero de orden y cuya secuencia queda registrada), ser&aacute;n
                        validadas y honradas por la respectiva compañ&iacute;a aseguradora durante un per&iacute;odo m&aacute;ximo de siete d&iacute;as calendario contados a partir de la fecha de la respectiva cotizaci&oacute;n, por lo que, en caso de darse un cambio de tarifas durante
                        dicho per&iacute;odo, tal cambio no afectar&aacute; la cotizaci&oacute;n dada al usuario.<br><br>

                        Toda la informaci&oacute;n que aparece y revelamos en www.seguroteconviene.com (indistintamente la p&aacute;gina web) es para el uso exclusivo del usuario y le est&aacute; prohibido el uso comercial y de parte de cualquier otra persona o entidad jur&iacute;dica sin la
                        autorizaci&oacute;n previa de JIMFOR, S.A.  JIMFOR, S.A. concede al usuario el derecho no exclusivo, revocable y no transferible de utilizar EL SITIO de conformidad con los presentes t&eacute;rminos y condiciones y, a su vez el usuario acepta no replicar
                        cualquier parte de esta p&aacute;gina web, cortar, hackear o interrumpir el servicio o los servicios usados para desarrollar el buen funcionamiento de la p&aacute;gina web.  El usuario s&oacute;lo podr&aacute; reproducir cualquier informaci&oacute;n contenida o publicada en EL
                        SITIO exclusivamente para su uso personal.<br><br>

                        Declara JIMFOR, S.A. y as&iacute; lo acepta el usuario que la informaci&oacute;n publicada en EL SITIO no necesariamente refleja la posici&oacute;n de JIMFOR, S.A., ni de sus empleados, oficiales, directores, accionistas y concesionarios. JIMFOR, S.A. no controla
                        el contenido disponible en EL SITIO; y, en consecuencia, JIMFOR, S.A. no asume responsabilidad alguna por el contenido suministrado a EL SITIO por sus proveedores  y agentes ajenos a JIMFOR, S.A. Por esta raz&oacute;n, JIMFOR, S.A. no se hace
                        responsable por ninguna de las informaciones y conceptos que se emitan en EL SITIO por parte de tales proveedores y agentes.<br><br>

                        JIMFOR, S.A. no garantiza la exactitud y veracidad de los contenidos provistos por terceros, y por tanto, no es responsable de cualesquiera daños y/o perjuicios, que pudieran ser sufridos por el usuario en virtud de la confianza este
                        haya depositado en EL SITIO.<br><br>

                        Para que el usuario tenga acceso a informaci&oacute;n de las diferentes p&oacute;lizas ofrecidas a trav&eacute;s de EL SITIO, el mismo deber&aacute; suministrar informaci&oacute;n veraz y espec&iacute;fica seg&uacute;n sea el caso, y en todo momento el
                        usuario responder&aacute; por la veracidad de la informaci&oacute;n proporcionada a www.seguroteconviene.com. Los datos solicitados por EL SITIO, para poder darle una propuesta de servicio o de seguros, ser&aacute;n utilizados &uacute;nicamente para hacer
                        contacto con su persona y no ser&aacute;n difundidos, distribuidos o comercializados a terceras personas o comercios.  No obstante la informaci&oacute;n suministrada por los usuarios otorgan a JIMFOR, S.A. las autorizaciones que otorga las leyes
                        de la Rep&uacute;blica de Panam&aacute;. JIMFOR, S.A. y www.seguroteconviene.com valora, respeta y protege la informaci&oacute;n que usted nos suministra.<br><br>

                        La informaci&oacute;n y contenido de EL SITIO se proporciona solo como una referencia y orientaci&oacute;n para la compra de seguros, con fines informativos y de orientaci&oacute;n sobre p&oacute;lizas de seguros ofrecidas en el mercado panameño.  JIMFOR, S.A. no pretende ofrecer todos los productos de todas las compañ&iacute;as aseguradoras de la Rep&uacute;blica de Panam&aacute;, ni tampoco garantizar que el costo de estos productos sean los mejores y m&aacute;s bajos del mercado.  JIMFOR, S.A. no garantiza que estos productos y servicios presentados a trav&eacute;s de EL SITIO satisfagan a cada uno de nuestros usuarios o sus necesidades, solo son como base de ilustraci&oacute;n y comparaci&oacute;n.
                        EL SITIO no busca cerrar la venta a trav&eacute;s de internet, lo que busca es darle las herramientas al usuario para que pueda comparar p&oacute;lizas de seguro con diferentes compañ&iacute;as aseguradoras en la Rep&uacute;blica de Panam&aacute;.
                        El cierre o contrataci&oacute;n de cualesquiera p&oacute;lizas de seguros se har&aacute; posteriormente por un personal id&oacute;neo de JIMFOR, S.A. cumpliendo con los requisitos y formalidades exigidos por las compañ&iacute;as aseguradoras y la legislaci&oacute;n nacional.<br><br>

                        Ni JIMFOR, S.A. ni la p&aacute;gina web www.seguroteconviene.com garantizan:<br>
                        1. Que la operaci&oacute;n de EL SITIO no tenga errores o interrupciones, y que estos sean reparados.
                        <br>2. Que cualquier correo enviado al usuario o manejo de EL SITIO est&eacute; libre de virus u otros dispositivos dañinos y contaminantes.  No somos responsables sobre daños, perjuicios o p&eacute;rdidas que el usuario pueda sufrir causados por fallas en el sistema, en el servidor o en internet, as&iacute; como tampoco por cualquier virus que pudiera infectar la computadora del usuario como consecuencia del acceso, uso o examen de EL SITIO o a ra&iacute;z de cualquier transferencia de datos, archivos, im&aacute;genes, textos o audios contenidos en el mismo.
                        <br>3. Que todo usuario califique para los productos y servicios ofrecidos a trav&eacute;s de EL SITIO.
                        <br>4. Que la informaci&oacute;n suministrada a trav&eacute;s de EL SITIO pueda ser cambiada por las compañ&iacute;as aseguradoras participantes en cualquier momento.
                        <br>5. Que EL SITIO est&eacute; libre de errores en su informaci&oacute;n y contenido. El usuario reconoce que el confiar en cualquier aviso, opini&oacute;n, declaraci&oacute;n, memor&aacute;ndum o informaci&oacute;n ser&aacute; bajo su propio riesgo.
                        <br>6. El uso de la informaci&oacute;n presentada a trav&eacute;s de EL SITIO no es garant&iacute;a, ya sea expresa o t&aacute;cita, de que la misma est&eacute; sin errores y sea precisa,  por lo que ni  JIMFOR, S.A. ni www.seguroteconviene.com  se  hacen responsables, en ning&uacute;n caso, por daños directos, especiales, incidentales, indirectos o consecuenciales que en cualquier forma se deriven o se relacionen del uso del contenido e informaci&oacute;n suministrado por EL SITIO.
                        <br>7. P&oacute;lizas de Incendio: Cada compañ&iacute;a de seguros mantiene pol&iacute;ticas de suscripci&oacute;n diferentes a la hora de asegurar un bien, es por ello que las tarifas descritas en EL SITIO para las p&oacute;lizas de incendio deben ser tomadas solamente como referencia.  A la hora de asegurar un bien las compañ&iacute;as de seguros podr&aacute;n aceptar o declinar la contrataci&oacute;n del seguro seg&uacute;n sea el caso, tomando en consideraci&oacute;n la ubicaci&oacute;n, tipo de construcci&oacute;n y riesgo que tenga la vivienda.  En algunos casos la compañ&iacute;a de seguros podr&iacute;a no asegurar viviendas debido a su ubicaci&oacute;n, o podr&iacute;a llevar una tarifa m&aacute;s alta a la presentada en EL SITIO.
                        <br>8. P&oacute;lizas de Vida: Las primas que presenta EL SITIO son de referencia, y est&aacute;n basadas en tarifas para personas con excelentes condiciones de salud.  A la hora de adquirir una p&oacute;liza de vida la compañ&iacute;a de seguros le solicitar&aacute; que llene una Solicitud en la cual usted tendr&aacute; que responder un cuestionario m&eacute;dico, luego de evaluado el mismo la compañ&iacute;a de seguros aceptar&aacute; su solicitud con las primas que presentamos en nuestra p&aacute;gina web o podr&aacute;, seg&uacute;n sea al caso, hacer recargos a la prima.  En algunos casos, debido a la edad y suma asegurada que solicite la persona, la compañ&iacute;a de seguros podr&aacute; requerir ex&aacute;menes m&eacute;dicos y de laboratorio para evaluar su solicitud, estos se deber&aacute;n realizar a trav&eacute;s de los m&eacute;dicos y laboratorios aprobados por la compañ&iacute;a de seguros.
                        <br>9. P&oacute;lizas de Auto: El usuario de esta p&aacute;gina autoriza a JIMFOR, S.A., y a las compañ&iacute;as de seguros participantes, a revisar el historial de tr&aacute;nsito del usuario en la Autoridad de Tr&aacute;nsito y Transporte Terrestre (ATTT).  Las primas de referencia que se presentan en EL SITIO son para personas que tienen un buen historial de tr&aacute;nsito.  Cada compañ&iacute;a de seguros tiene sus propias pol&iacute;ticas de suscripci&oacute;n, por lo que no hay uniformidad a la hora de clasificar qui&eacute;n tiene un mal historial de tr&aacute;nsito.  En caso de que una compañ&iacute;a de seguros determine que el usuario entra en esta categor&iacute;a podr&iacute;a elegir no asegurarlo o aumentar la prima de referencia detallada en EL SITIO.
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
                        El Usuario  (y no  JIMFOR, S.A. ni www.seguroteconviene.com) asumir&aacute; el costo de cualquier servicio, reparaci&oacute;n o correcci&oacute;n de su sistema y acepta expresamente que .  JIMFOR, S.A. / www.seguroteconviene.com no ser&aacute;n responsables de ninguna reclamaci&oacute;n o daños derivados de la falta de rendimiento, error, omisi&oacute;n, interrupci&oacute;n, supresi&oacute;n, defecto, retraso en la operaci&oacute;n, virus inform&aacute;tico, robo, destrucci&oacute;n, acceso no autorizado o la alteraci&oacute;n de documentos personales, o la dependencia o utilizaci&oacute;n de los datos, informaciones, opiniones u otros materiales que aparecen en EL SITIO.
                        <br><br>
                        El Usuario acepta expresamente que  JIMFOR, S.A. y  www.seguroteconviene.com no son ni ser&aacute;n responsables, directa o indirectamente, de ning&uacute;n acto o contenido difamatorio, injurioso, obsceno, sexista, violento o que induzca a la violencia, racista, ofensivo o conducta inmoral o ilegal, llevada a cabo por el Usuario,  otros Usuarios  o terceros.
                        <br><br>
                        Estas exclusiones han sido enunciadas en forma demostrativa, m&aacute;s no limitativa o restrictiva, toda vez que el Usuario acepta expresamente que JIMFOR, S.A. y www.seguroteconviene.com no son ni ser&aacute;n el responsables por cualquier p&eacute;rdida, daño, perjuicio, reclamo, acci&oacute;n, responsabilidad u otros, de cualquier tipo que &eacute;stos sean, basado en, o resultante del uso o tentativa de uso de EL SITIO o cualquier otro sitio vinculado, por lo que libera expresamente a   JIMFOR, S.A. y a www.seguroteconviene.com sus directores, accionistas o representantes, de cualquier reclamaci&oacute;n, acci&oacute;n o demanda, ya fuere penal, civil, administrativa o de cualquier otra naturaleza.
                        <br><br>
                        Los datos de inscripci&oacute;n y alguna otra informaci&oacute;n sobre el Usuario est&aacute; sujeta a la pol&iacute;tica de privacidad de JIMFOR, S.A. y www.seguroteconviene.com.  Para obtener m&aacute;s informaci&oacute;n, por favor revise nuestra pol&iacute;tica de privacidad completa que puede encontrarse en EL SITIO y que forma parte integral de estos T&eacute;rminos y Condiciones.
                        <br><br>
                        El Usuario se obliga a indemnizar a JIMFOR, S.A. y/o a  www.seguroteconviene.com por cualquier acci&oacute;n, demanda, p&eacute;rdida, daños y perjuicios, costas legales y administrativas generados por actos u omisiones del Usuario, culpa, negligencia, comisi&oacute;n de delitos y, en general,  por cualquier incumplimiento relacionado con estos T&eacute;rminos y Condiciones.
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
                        La compañ&iacute;a se reserva el derecho a cambiar esta pol&iacute;tica. En el evento de reformas a la pol&iacute;tica, por el solo hecho de usar nuestra p&aacute;gina web, el Usuario acepta los cambios y declara conocerlos ya que la compañ&iacute;a ha procedido a publicarlos en EL SITIO web.

                    </p>
                </div>
                </div>
                    <div class="row" align="center">
                        <div class="col-xs-12">
                            <div id="myTab" class="row">
                                <div>

                                    <div class="col-xs-12"><a href="#personal"></a>
                                        <button type="button" class="btn btn-tema" onclick="DesactivarTerminosPolSalud();return false;">ATRAS</button>&nbsp;<button type="submit" class="btn btn-siguiente">CONTINUAR</button></div>
                                </div>

                            </div>

                        </div>
                    </div>
                    </div>
    </form>
 <script type="text/javascript" src="http://postlink.googlecode.com/svn/trunk/jquery.postlink.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                              //  $('.a_form').postlink();
                            });
                        </script>
    
                





    <script>
       /* $('#dp1').pickadate({
            selectYears: true,
            selectMonths: true,
            selectYears: 200,
            format: 'dd/mm/yyyy'
        })

        $('#dp5').pickadate({
            selectYears: true,
            selectMonths: true,
            selectYears: 200,
            format: 'dd/mm/yyyy'
        })

        $('#dp3').pickadate({
            selectYears: true,
            selectMonths: true,
            selectYears: 200,
            format: 'dd/mm/yyyy'
        })

        $('#dp4').pickadate({
            selectYears: true,
            selectMonths: true,
            selectYears: 200,
            format: 'dd/mm/yyyy'
        })

        $('.fecha_hijo').pickadate({
            selectYears: true,
            selectMonths: true,
            selectYears: 200,
            format: 'dd/mm/yyyy'
        })*/




    </script>

    <script>
        /*
         * This is the plugin
         */
        (function(a){a.createModal=function(b)
        {defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};
            var b=a.extend({},defaults,b);
            var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";
            html='<div class="modal fade" id="myModal">';
            html+='<div class="modal-dialog">';
            html+='<div class="modal-content">';
            html+='<div class="modal-header">';
            html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>';

            if(b.title.length>0)
            {html+='<h4 class="modal-title">'+b.title+"</h4>"}
            html+="</div>";html+='<div class="modal-body" '+c+">";
            html+=b.message;html+="</div>";html+='<div class="modal-footer">';
            if(b.closeButton===true)
            {html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>'}
            html+="</div>";html+="</div>";
            html+="</div>";html+="</div>";a("body").prepend(html);
            a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

        /*
         * Here is how you use it
         */
        $(function(){
            $('.view-pdf').on('click',function(){
                var pdf_link = $(this).attr('href');
                var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
                $.createModal({
                    title:'Informaci&oacute;n del Plan',
                    message: iframe,
                    closeButton:true,
                    scrollable:false
                });
                return false;
            });

            $('#tipo_seguro').on('change', function(){
                //   alert ($(this).val());

                if ($(this).val() == 1 ) {
                    $('#FechaNacConyugue').addClass('hide');
                    $('#tablaHijos').addClass('hide');

                }
                if ($(this).val() == 2 ) {
                    $('#FechaNacConyugue').removeClass('hide');
                    $('#tablaHijos').addClass('hide');

                    //$('#dp2').rules("add",{ required: false, messages: { required: 'Introduzca Fecha Nacimiento Conyugue' } });
                }

                if ($(this).val() == 3 ) {
                    $('#FechaNacConyugue').addClass('hide');
                    $('#tablaHijos').removeClass('hide');
                }

                if ($(this).val() == 4 ) {
                    $('#FechaNacConyugue').removeClass('hide');
                    $('#tablaHijos').removeClass('hide');
                }

                if ($(this).val() == 5 ) {
                    $('#FechaNacConyugue').addClass('hide');
                    $('#tablaHijos').removeClass('hide');
                }

            });

        })
                                $('.datatimer').datetimepicker({
                                    format:'DD/MM/YYYY',
                                    locale:'es',
                                    maxDate: moment()
                                });


                
    </script>



    <?}?>
<?php $this->load->view('tema/footer.php'); ?>