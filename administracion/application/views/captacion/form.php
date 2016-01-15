<?php $this->load->view('tema/header.php'); ?>







<div class="container">



    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
        .letras {
            font-weight: bold;
            font-family: Helvetica, Arial;
            font-size: 150%;
            outline: 0;
            color: #202020;
            /*text-shadow:rgba(0,0,0, 0.7) 0px 4px 3px;*/

            background-size: contain;
            border-radius: 5px;
            box-shadow: 0px 0px 3px rgba(255, 255, 255, 1.0);
        }
    </style>




    <?php


    if(isset($opcion)){


        if($opcion=='ver'){

          $disable_ver="disabled";
?>

            <script>
                $(function () {
                    $.datepicker.setDefaults($.datepicker.regional["es"]);
                    $("#Nacimiento").datepicker({
                        firstDay: 1,
                        changeMonth: true,
                        changeYear: true

                    });


                });
            </script>
            <script>
                $(function () {
                    $.datepicker.setDefaults($.datepicker.regional["es"]);
                    $("#FormacionInicio").datepicker({
                        firstDay: 1 ,
                        changeMonth: true,
                        changeYear: true
                    });

                });
            </script>
            <script>
                $(function () {
                    $.datepicker.setDefaults($.datepicker.regional["es"]);
                    $("#FormacionFin").datepicker({
                        firstDay: 1,
                        changeMonth: true,
                        changeYear: true
                    });

                });
            </script>
            <script>
                $(function () {
                    $.datepicker.setDefaults($.datepicker.regional["es"]);
                    $("#ExperienciaFin").datepicker({
                        firstDay: 1,
                        changeMonth: true,
                        changeYear: true
                    });

                });
            </script>
            <script>
                $(function () {
                    $.datepicker.setDefaults($.datepicker.regional["es"]);
                    $("#ExperienciaInicio").datepicker({
                        firstDay: 1,
                        changeMonth: true,
                        changeYear: true
                    });

                });
            </script>

            <?


        }if($opcion=='modificar'){
            $disable_editar="disabled";
            $disable_ver_editar="disabled";




            ?>




            <?





        }

        if (isset($captado)) {
            if ($captado != 'Error') {
            //variables
            foreach ($captado as $fila) {
                $ubicacionqsl=$fila->WERKS;
                $areaqsl=$fila->APTYP;
                $departamentoqsl=$fila->SPAPL;
                $sucursalqsl=$fila->BTRTL2;
                $tratamientoqsl=$fila->ANREX;
                $nombresql=$fila->VORNA;
                $nombre2sql=$fila->NAME2;
                $apellidosql=$fila->NACHN;
                $apellido2sql=$fila->NACH2;
                $fecha_nacimiento=str_replace(".", "/",$fila->GBDAT);
                $masculino=$fila->GESC1;
                $femenina=$fila->GESC2;
                $idiomasql=$fila->SPRSL;
                $nacionalidadsql=$fila->NATIO;
                $estado_civilsql=$fila->FATXT;
                $direccionsql=$fila->STRAS;
                $telefonosql=$fila->TELNR;
                $paisnaci_sql=$fila->GBLND;
                $correo_sql=$fila->USRID_LONG;
                $fecha_ini_sql=str_replace(".", "/",$fila->BEGDA22);
                $fecha_fin_sql=str_replace(".", "/",$fila->ENDDA22);
                $tipo_formacion_sql=$fila->SLART;
                $academi_formation_sql=$fila->AUSBI;
                $nombre_insti_sql=$fila->INSTI;
                $pais_instit_sql=$fila->SLAND;
                $titulo_sql=$fila->SLABS;
                $especialidad_sql=$fila->SLTP1;
                $duracion_sql=$fila->ANZKL;
                $unidad_tiempo_sql=$fila->ANZEH;
                $fecha_inicio_labsql=str_replace(".", "/",$fila->BEGDA23);
                $fecha_fin_labsql=str_replace(".", "/",$fila->ENDDA23);
                $empresa_sql=$fila->ARBGB;
                $pais_trabajosql=$fila->LAND123;
                $cedula_sql=$fila->CEDULA;
                $area_trabajosql=$fila->BRANC;
                $actividad_empresasql=$fila->TAETE;
                $id=$fila->id_CANDIDATOS;
            }
            }
      else {

            $mensaje = "Error, no se pudo procesar su transacción";

        }
        }
    }else{

        $opcion="nuevo";
    }
    ?>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#item4_select_1").change(function() {
                $("#item4_select_1 option:selected").each(function() {
                    item4_select_1 = $('#item4_select_1').val();
                    $.post("<?php echo base_url()?>captacion/llena_sub_division", {
                        item4_select_1 : item4_select_1
                    }, function(data) {
                        $("#item5_select_1").html(data);
                    });
                });
                $("#item4_select_1 option:selected").each(function() {
                    item4_select_1 = $('#item4_select_1').val();
                    $.post("<?php echo base_url()?>captacion/llena_departamentos", {
                        item4_select_1 : item4_select_1
                    }, function(data) {
                        $("#item92_select_1").html(data);
                    });
                });
            })
        });
    </script>


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


                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>



<form action="<?php echo base_url()?>captacion/captacion_nuevo" method="post" id="formAjax" class="form" role="form">


 <div class="bs-example">

            <div align="right">
             <div class="btn-group" role="group" aria-label="...">

                 <input class="btn btn-default"
                        type="submit" data-regular="" value="Enviar"  <?php if(isset($disable_ver)){echo $disable_ver;}?> />
                 <input class="btn btn-default"
                        type="submit" data-regular="" value="Editar" <?php if(isset($disable_ver_editar)){echo $disable_ver_editar;}?> />
                 <button type="button" class="btn btn-default"  onclick="return cambio_c();">
                     <img alt="Tienda En Linea" src="<?php echo base_url()?>css/images/regresar.jpg" height="20" width="20" title="Regresar">
                 </button>

                 <br> <br>
     </div>
            </div>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Información de Ubicación</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">



                            <div id="fb_confirm_inline" style="display: none; min-height: 200px;">
                            </div>
                            <div id="fb_error_report" style="display: none;">
                            </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-3">


                            <div class="fb-item fb-100-item-column" id="item4" style="opacity: 1;">
                                <div class="fb-grouplabel">
                                    <label id="item4_label_0" style="display: inline;">Ubicaci&oacute;n</label>
                                </div>
                                <div class="fb-dropdown">
                                    <select name="form[txt][WERKS]" id="item4_select_1" <?php if(isset($disable_ver)){echo $disable_ver;}?> required data-hint="">
                                        <option id="item4_0_option" selected value="">
                                            Elije una ciudad
                                        </option>
                                        <?php
                                        foreach ($ubicacion as $i => $ubicacion_empresa)
                                            if(isset($ubicacionqsl)){
                                             if($ubicacionqsl==$i){
                                                echo '<option value="'.$i.'" selected=selected  >'.$ubicacion_empresa.'</option>';
                                            }else {
                                                echo '<option value="'.$i.'">'.$ubicacion_empresa .'</option>';
                                            }}else{
                                                echo '<option value="'.$i.'">'.$ubicacion_empresa .'</option>';
                                            }?>
                                    </select>
                                </div>
                            </div>

                        </div>

                            <div class="col-sm-3">

                            <div class="fb-item fb-100-item-column" id="item8">
                                <div class="fb-grouplabel">
                                    <label id="item8_label_0" style="display: inline;">&Aacute;rea a la que aplica</label>
                                </div>
                                <div class="fb-dropdown">
                                    <select name="form[txt][APTYP]" id="item8_select_1" <?php if(isset($disable_ver)){echo $disable_ver;}?> required data-hint="">
                                        <option id="item8_0_option" selected value="">
                                            Elija un &aacute;rea
                                        </option>
                                        <?php
                                        foreach ($areas as $i => $area_candidato)
                                            if($areaqsl==$i){
                                            echo '<option value="'.$i.'" selected >'.$area_candidato.'</option>';
                                            }else {
                                                echo '<option value="' . $i . '">' . $area_candidato . '</option>';
                                            } ?>
                                    </select>
                                </div>
                            </div>
                                </div>
                                <div class="col-sm-3">
                            <div class="fb-item fb-100-item-column" id="item92">
                                <div class="fb-grouplabel">
                                    <label id="item92_label_0" style="display: inline;">Departamento</label>
                                </div>
                                <div class="fb-dropdown">

                                    <select name="form[int][SPAPL]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item92_select_1" required data-hint="">
                                        <option id="item92_0_option" selected value="">
                                            Elija una opci&oacute;n
                                        </option>
                                        <?php
                                        foreach ($departamentos as $i => $departamento_candidato)
                                            if( $departamentoqsl==$i){
                                            echo '<option value="'.$i.'"  selected>'.$departamento_candidato.'</option>';
                                            }else {
                                                echo '<option value="'.$i.'">' . $departamento_candidato . '</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                                </div>

                                    <div class="col-sm-3">
                            <div class="fb-item fb-100-item-column" id="item5" style="opacity: 1;">
                                <div class="fb-grouplabel">
                                    <label id="item5_label_0" style="display: inline;">Sucursal para aplicar</label>
                                </div>
                                <div class="fb-dropdown">

                                    <select name="form[formula][BTRTL2]"  <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item5_select_1" required data-hint="">

                                        <option id="item5_0_option" selected value="">
                                            Elije una tienda
                                        </option>
                                        <?php
                                        foreach ($sucursal as $i => $sucursal_empresa)
                                            if($sucursalqsl==$i){
                                            echo '<option value="'.$i.'" selected>'.$sucursal_empresa.'</option>';
                                            }else {
                                                echo '<option value="' . $i . '">' . $sucursal_empresa . '</option>';
                                            }?>
                                    </select>
                                </div>
                            </div>

                                        </div>

                                </div>
                            </div>
                        </div>


                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">

                            <div class="fb-item" id="item62">
                                <div class="fb-sectionbreak">
                                    <hr style="max-width: 960px;">
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>

                         </div>
                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Información Personal</a> <?if(isset($errorR)){
                            echo "<p class='text-danger'>$errorR </p>";

                        }  ?>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">


                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">


                                        <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item10" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item10_label_0" style="display: inline;">Tratamiento</label>
                            </div>
                            <div class="fb-dropdown">
                                <select name="form[formula][ANREX]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item10_select_1" required data-hint="">
                                    <option id="item10_0_option" selected value="">
                                        Elija una opci&oacute;n
                                    </option>

                                    <?php
                                    foreach ($tratamiento as $i => $tratamiento_candidato)
                                        if($tratamientoqsl==$i){
                                        echo '<option value="'.$i.'" selected>'.$tratamiento_candidato.'</option>';
                                        }else {
                                            echo '<option value="'.$i.'">'.$tratamiento_candidato.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                                        </div>
                                            <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item12" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item12_label_0" style="display: inline;">Nombre</label>
                            </div>
                            <div class="fb-input-box">
                                <input name="form[txt][VORNA]" id="item12_text_1" required type="text" maxlength="40"
                                      value="<?php if(isset($nombresql)){echo $nombresql;}?>" placeholder="" data-hint="" autocomplete="off"  <?php if(isset($disable_ver)){echo $disable_ver;}?> />
                            </div>
                        </div>
                                            </div>
                                                <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item73">
                            <div class="fb-grouplabel">
                                <label id="item73_label_0" style="display: inline;">Segundo Nombre</label>
                            </div>
                            <div class="fb-input-box">
                                <input name="form[txt][NAME2]" id="item73_text_1" type="text" maxlength="254" placeholder=""
                                       value="<?php if(isset($nombre2sql)){echo $nombre2sql;}?>" data-hint="" autocomplete="off"  <?php if(isset($disable_ver)){echo $disable_ver;}?>/>
                            </div>
                        </div>
                                                </div>
                                    <div class="col-sm-3">
                                        <div class="fb-item fb-100-item-column" id="item13">
                                            <div class="fb-grouplabel">
                                                <label id="item13_label_0" style="display: inline;">Apellido Paterno</label>
                                            </div>
                                            <div class="fb-input-box">
                                                <input name="form[txt][NACHN]" id="item13_text_1" required type="text" maxlength="40"
                                                       value="<?php if(isset($apellidosql)){echo $apellidosql;}?>"  placeholder="" data-hint="" autocomplete="off" <?php if(isset($disable_ver)){echo $disable_ver;}?> />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">


                                                        <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item74" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item74_label_0" style="display: inline;">Apellido Materno</label>
                            </div>
                            <div class="fb-input-box">
                                <input name="form[txt][NACH2]" id="item74_text_1" type="text" maxlength="254" placeholder=""
                                       value="<?php if(isset($apellido2sql)){echo $apellido2sql;}?>"   data-hint="" autocomplete="off" <?php if(isset($disable_ver)){echo $disable_ver;}?> />
                            </div>
                        </div>
                                                        </div>
                                                            <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item91">
                            <div class="fb-grouplabel">
                                <label id="item91_label_0" style="display: inline;">Fecha de Nacimiento</label>
                            </div>
                            <div class="fb-input-date">
                                <input name="form[formula][GBDAT]" class="datepicker" id="Nacimiento" required type="text"
                                       onkeyup="mascara(this,'/',patron,true)"  value="<?php if(isset($fecha_nacimiento)){echo $fecha_nacimiento;}?>"   data-hint=""<?php if(isset($disable_ver)){echo $disable_ver;}?> />
                            </div>
                        </div>
                                                            </div>
                                                                <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item89" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item89_label_0" style="display: inline;">Sexo</label>
                            </div>
                            <div class="fb-dropdown">
                                <select name="form[txt][clavesexo]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item89_select_1" required data-hint="">
                                    <option id="item89_0_option" selected value="">
                                        Seleccionar
                                    </option>
                                   <? if($opcion!='nuevo'){
                                       if(isset($masculino)){
                                           if($masculino=='X' and $femenina==''){ ?>
                                       <?
                                           $masculinoS="selected";
                                           $femeninaS="";
                                       }elseif($masculino=='' and $femenina=='X'){
                                           $masculinoS="";
                                           $femeninaS="selected";
                                       }elseif($masculino=='' and $femenina==''){
                                               $masculinoS="";
                                               $femeninaS="";
                                           }
                                   }



                                   }?>

                                       <option id="item89_1_option" value="M"  <?php if(isset($masculinoS)){echo $masculinoS;}?> >
                                           M
                                       </option>

                                       <option id="item89_2_option" value="F"  <?php if(isset($femeninaS)){echo $femeninaS;}?> >
                                           F
                                       </option>
                                </select>
                            </div>
                        </div>
                                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="fb-item fb-100-item-column" id="item15">
                                                        <div class="fb-grouplabel">
                                                            <label id="item15_label_0">Idioma</label>
                                                        </div>
                                                        <div class="fb-dropdown">
                                                            <select name="form[txt][SPRSL]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item15_select_1" required data-hint="">
                                                                <option id="item15_0_option" selected value="">
                                                                    Elija un idioma principal
                                                                </option>
                                                                <?php
                                                                foreach ($idioma as $i => $idioma_candidato)
                                                                    if($idiomasql==$i){
                                                                    echo '<option value="'.$i.'" selected>'.$idioma_candidato.'</option>';
                                                                    }else {
                                                                        echo '<option value="'.$i.'">'.$idioma_candidato.'</option>';

                                                                    } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                     </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">


                                            <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item16">
                            <div class="fb-grouplabel">
                                <label id="item16_label_0"  style="display: inline;">Nacionalidad</label>
                            </div>
                            <div class="fb-dropdown">
                                <select name="form[txt][NATIO]"  <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item16_select_1" required data-hint="">
                                    <option id="item16_0_option" selected value="">
                                        Elija una opci&oacute;n
                                    </option>
                                    <?php
                                    foreach ($nacionalidad as $i => $nacionalidad_candidato)
                                        if($nacionalidadsql==$i){
                                        echo '<option value="'.$i.'" selected>'.$nacionalidad_candidato.'</option>';
                                        }else {
                                            echo '<option value="'.$i.'">'.$nacionalidad_candidato.'</option>';
                                        }
                                            ?>
                                </select>
                            </div>
                        </div>
                                            </div>
                                    <div class="col-sm-3">
                                        <div class="fb-item fb-100-item-column" id="item17">
                                            <div class="fb-grouplabel">
                                                <label id="item17_label_0">Estado Civil</label>
                                            </div>
                                            <div class="fb-dropdown">
                                                <select name="form[formula][FATXT]"  <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item17_select_1" data-hint="">
                                                    <?php
                                                    foreach ($estado_c as $i => $estado_c_candidato)
                                                        if($estado_civilsql==$i){
                                                        echo '<option value="'.$i.'" selected>'.$estado_c_candidato.'</option>';
                                                        }else {
                                                            echo '<option value="'.$i.'">'.$estado_c_candidato.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="fb-item fb-100-item-column" id="item19">
                                            <div class="fb-grouplabel">
                                                <label id="item19_label_0" style="display: inline;">Direcci&oacute;n</label>
                                            </div>
                                            <div class="fb-input-box">
                                                <input name="form[txt][STRAS]"  <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item19_text_1" type="text" maxlength="60" placeholder=""
                                                       value="<?php if(isset($direccionsql)){echo $direccionsql;}?>" data-hint="" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="fb-item fb-100-item-column" id="item22">
                                            <div class="fb-grouplabel">
                                                <label id="item22_label_0" style="display: inline;">Tel&eacute;fono introduzca el codigo de area (507)</label>
                                            </div>
                                            <div class="fb-phone">
                                                <input name="form[formula][TELNR]" value="<?php if(isset($telefonosql)){echo $telefonosql;}?>"  <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item22_tel_1" required type="tel" data-hint=""
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-3">
                                                    <div class="fb-item fb-100-item-column" id="item24">
                                                        <div class="fb-grouplabel">
                                                            <label id="item24_label_0" style="display: inline;">Cedula de Identidad</label>
                                                        </div>
                                                        <div class="fb-input-box">
                                                            <input type="text" name="form[int][CEDULA]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item24_cedula" required maxlength="15"
                                                                   value="<?php if(isset($cedula_sql)){echo $cedula_sql;}?>"  placeholder="" data-hint="" autocomplete="off" />

                                                        </div>

                                                    </div>
                                                </div>

                                                            <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item23" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item23_label_0" style="display: inline;">Pa&iacute;s de nacimiento</label>
                            </div>
                            <div class="fb-dropdown">
                                <select name="form[txt][GBLND]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item23_select_1" required data-hint="">
                                    <option id="item23_0_option" selected value="">
                                        Elija una opci&oacute;n
                                    </option>
                                    <?php
                                    foreach ($pais as $i => $pais_candidato)
                                        if($paisnaci_sql==$i){
                                        echo '<option value="'.$i.'" selected>'.$pais_candidato.'</option>';
                                        }else {
                                            echo '<option value="'.$i.'">'.$pais_candidato.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                                                            </div>
                                                                <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item24">
                            <div class="fb-grouplabel">
                                <label id="item24_label_0" style="display: inline;">Correo electr&oacute;nico</label>
                            </div>
                            <div class="fb-input-box">
                                <input name="form[formula][USRID_LONG]" <?php if(isset($disable_editar)){echo $disable_editar;}?> <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item24_email_1" required type="email" maxlength="241"
                                       value="<?php if(isset($correo_sql)){echo $correo_sql;}?>"  placeholder="" data-hint="" autocomplete="off" />
                                <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                    por favor vuelva a ingresar su correo para confirmar
                                </div>
                            </div>

                        </div>
                                                                </div>
                                                <div class="col-sm-3">
                                                    <?php if($opcion=='modificar'){}else{?>
                                                    <div class="fb-grouplabel">
                                                        <label style="display: inline;">Confirmar correo electr&oacute;nico</label>
                                                    </div>
                                                    <div class="fb-input-box">

                                                        <input <?php if(isset($disable_ver)){echo $disable_ver;}?> name="form[formula][USRID_LONG_verification]" id="item24_email_1_verification"
                                                                                                                   value="<?php if(isset($correo_sql)){echo $correo_sql;}?>"      type="email" maxlength="241" placeholder="" data-hint="" autocomplete="off"
                                                            />
                                                    </div>
                                                    <?}?>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="fb-item" id="item63">
                                        <div class="fb-sectionbreak">
                                            <hr style="max-width: 960px;">
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Información Académica</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">


                        <div class="fb-item fb-100-item-column" id="item40">
                            <div class="fb-header">
                                <h2 style="font-size: 16px; font-weight: normal; display: inline;">
                                    Ingrese su &uacute;ltima formaci&oacute;n acad&eacute;mica
                                </h2>
                            </div>
                        </div>


                                </div>
                              </div>
                            </div>






                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item27">
                                        <div class="fb-grouplabel">
                                            <label id="item27_label_0" style="display: inline;">Fecha de inicio</label>
                                        </div>
                                        <div class="fb-input-date">
                                            <input name="form[formula][BEGDA22]"   onkeyup="mascara(this,'/',patron,true)" value="<?php if(isset($fecha_ini_sql)){echo $fecha_ini_sql;}?>" <?php if(isset($disable_ver)){echo $disable_ver;}?> class="datepicker" id="FormacionInicio" required type="text"
                                                   data-hint="" />
                                            <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                                Fecha en la que iniciaste el periodo educativo. Ej: bachiller en ciencias
                                            </div>
                                        </div>
                                    </div>
</div>
                                        <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item29">


                                        <div class="fb-grouplabel">
                                            <label id="item29_label_0" style="display: inline;">Fecha de finalizaci&oacute;n</label>
                                        </div>
                                        <div class="fb-input-date">
                                            <input name="form[formula][ENDDA22]"  onkeyup="mascara(this,'/',patron,true)"  value="<?php if(isset($fecha_fin_sql)){echo $fecha_fin_sql;}?>"  <?php if(isset($disable_ver)){echo $disable_ver;}?> class="datepicker" id="FormacionFin" required type="text"
                                                   data-hint="" />
                                            <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                                Si actualmente esta cursandolo elija como fecha el d&iacute;a de hoy.
                                            </div>
                                        </div>
                                    </div>
</div>
                                            <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item30">
                                        <div class="fb-grouplabel">
                                            <label id="item30_label_0" style="display: inline;">Tipo de formaci&oacute;n</label>
                                        </div>
                                        <div class="fb-dropdown">
                                            <select name="form[int][SLART]"  <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item30_select_1" required data-hint="">
                                                <option id="item30_0_option" selected value="">
                                                    Elija el tipo de educaci&oacute;n
                                                </option>
                                                <?php
                                                foreach ($clase_instituto as $i => $clase_instituto_candidato)
                                                    if($tipo_formacion_sql==$i) {
                                                        echo '<option value="'.$i.'" selected>' . $clase_instituto_candidato . '</option>';
                                                    }else{
                                                        echo '<option value="'.$i.'">' . $clase_instituto_candidato . '</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                            </div>
                                                <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item31" style="opacity: 1;">
                                        <div class="fb-grouplabel">
                                            <label id="item31_label_0" style="display: inline;">Formaci&oacute;n / Profesi&oacute;n</label>
                                        </div>
                                        <div class="fb-dropdown">
                                            <select name="form[int][AUSBI]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item31_select_1" required data-hint="">
                                                <option id="item31_0_option" selected value="">
                                                    Elija el t&iacute;tulo recibido o por recibir en este periodo
                                                </option>
                                                <?php
                                                foreach ($formacion as $i => $formacion_candidato)
                                                    if($academi_formation_sql==$i) {
                                                    echo '<option value="'.$i.'" selected>'.$formacion_candidato.'</option>';
                                                    }else{
                                                        echo '<option value="'.$i.'">'.$formacion_candidato.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                            Al elegir su titulo tenga en cuenta el c&oacute;digo de su pa&iacute;s.
                                            Ej: CO si lo recibi&oacute; en Colombia.
                                        </div>
                                    </div>
                                                </div>


                                    </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">

                                                    <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item32">
                                        <div class="fb-grouplabel">
                                            <label id="item32_label_0" style="display: inline;">Instituto de ense&ntilde;anza</label>
                                        </div>
                                        <div class="fb-input-box">
                                            <input name="form[txt][INSTI]" value="<?php if(isset($nombre_insti_sql)){echo $nombre_insti_sql;}?>"   <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item32_text_1" required type="text" maxlength="80"
                                                   placeholder="" data-hint="" autocomplete="off" />
                                            <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                                Indique en que Instituto educativo recibi&oacute; o recibir&aacute; su
                                                t&iacute;tulo.
                                            </div>
                                        </div>
                                    </div>
                                                    </div>
                                                        <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item33" style="opacity: 1;">
                                        <div class="fb-grouplabel">
                                            <label id="item33_label_0" style="display: inline;">Pa&iacute;s</label>
                                        </div>
                                        <div class="fb-dropdown">
                                            <select name="form[txt][SLAND]" <?php if(isset($disable_ver)){echo $disable_ver;}?>  id="item33_select_1" required data-hint="">
                                                <option id="item33_0_option" selected value="">
                                                    Elija el pa&iacute;s en el cual recibi&oacute; o recibir&aacute; su t&iacute;tulo.
                                                </option>
                                                <?php
                                                foreach ($pais as $i => $pais_titulo_candidato)
                                                    if($pais_instit_sql==$i) {
                                                    echo '<option value="'.$i.'" selected>'.$pais_titulo_candidato.'</option>';
                                                    }else{
                                                        echo '<option value="'.$i.'">'.$pais_titulo_candidato.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                                        </div>
                                                            <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item90">
                                        <div class="fb-grouplabel">
                                            <label id="item90_label_0">T&iacute;tulo</label>
                                        </div>
                                        <div class="fb-dropdown">
                                            <select name="form[int][SLABS]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item90_select_1" required data-hint="">
                                                <option id="item90_0_option" selected value="">
                                                    Elija una
                                                </option>
                                                <?php
                                                foreach ($titulo as $i => $titulo_candidato)
                                                    if(isset($titulo_sql)==$i) {
                                                    echo '<option value="'.$i.'" selected>'.$titulo_candidato.'</option>';
                                                    }else{
                                                        echo '<option value="'.$i.'">'.$titulo_candidato.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                                            </div>
                                                                <div class="col-sm-3">
                                    <div class="fb-item fb-100-item-column" id="item35" style="opacity: 1;">
                                        <div class="fb-grouplabel">
                                            <label id="item35_label_0" style="display: inline;">Especialidad</label>
                                        </div>
                                        <div class="fb-dropdown">
                                            <select name="form[int][SLTP1]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item35_select_1" required data-hint="">
                                                <option id="item35_0_option" selected value="">
                                                    Elija una especialidad acorde a su formaci&oacute;n
                                                </option>
                                                <?php
                                                foreach ($especialidad as $i => $especialidad_candidato)
                                                    if($especialidad_sql==$i) {
                                                    echo '<option value="'.$i.'" selected>'.$especialidad_candidato.'</option>';
                                                    }else{
                                                        echo '<option value="'.$i.'">'.$especialidad_candidato.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">

                                                                    <div class="col-sm-6">
                                    <div class="fb-item fb-100-item-column" id="item36">
                                        <div class="fb-grouplabel">
                                            <label id="item36_label_0" style="display: inline;">Duraci&oacute;n de la formaci&oacute;n</label>
                                        </div>
                                        <div class="fb-input-number">
                                            <input name="form[int][ANZKL]"  value="<?php if(isset($duracion_sql)){echo $duracion_sql;}?>" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item36_number_1" required type="number" min="1"
                                                   max="999" step="1" data-hint="" autocomplete="off" />
                                            <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                                Indique en n&uacute;meros cuanto tiempo dur&oacute; su educaci&oacute;n
                                                y luego indique la unidad de tiempo.
                                            </div>
                                        </div>
                                    </div>
                                                                    </div>
                                                                        <div class="col-sm-6">
                                    <div class="fb-item fb-100-item-column" id="item38" style="opacity: 1;">
                                        <div class="fb-grouplabel">
                                            <label id="item38_label_0" style="display: inline;">Unidad de tiempo</label>
                                        </div>
                                        <div class="fb-dropdown">
                                            <select name="form[int][ANZEH]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item38_select_1" required data-hint="">
                                                <option id="item38_0_option" selected value="">
                                                    Elija la unidad de tiempo que especifica el n&uacute;mero que escribi&oacute;
                                                    arriba
                                                </option>
                                                <?php
                                                foreach ($unidad_tiempo as $i => $unidad_tiempo_candidato)
                                                    if($unidad_tiempo_sql==$i) {
                                                    echo '<option value="'.$i.'" selected>'.$unidad_tiempo_candidato.'</option>';
                                                    }else{
                                                        echo '<option value="'.$i.'">'.$unidad_tiempo_candidato.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                                                        </div>

                                </div>
                            </div>
                        </div>

                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">

                                    <div class="fb-item" id="item39">
                                        <div class="fb-sectionbreak">
                                            <hr style="max-width: 960px;">
                                        </div>
                                    </div>




                                                                                    </div>
                                                                                </div>

                                                                            </div>
                </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">Experiencia Laboral</a>
                    </h4>
                </div>
                <div id="collapsefour" class="panel-collapse collapse">
                    <div class="panel-body">


                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">



                        <div class="fb-item fb-100-item-column" id="item55">
                            <div class="fb-header">
                                <h2 style="font-size: 16px; font-weight: normal; display: inline;">
                                    Ingrese su &uacute;ltima experiencia laboral
                                </h2>
                            </div>
                        </div>

                                </div>
                            </div>
                        </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-6">
                        <div class="fb-item fb-100-item-column" id="item56" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item56_label_0" style="display: inline;">Fecha de inicio</label>
                            </div>
                            <div class="fb-input-date">
                                <input name="form[formula][BEGDA23]"  onkeyup="mascara(this,'/',patron,true)"  value="<?php if(isset($fecha_inicio_labsql)){echo $fecha_inicio_labsql;}?>" <?php if(isset($disable_ver)){echo $disable_ver;}?> class="datepicker" id="ExperienciaInicio" required type="text"
                                       data-hint="" />
                                <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                    Fecha en la que iniciaste el periodo laboral.
                                </div>
                            </div>
                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                <div class="fb-item fb-100-item-column" id="item57" style="opacity: 1;">
                                                    <div class="fb-grouplabel">
                                                        <label id="item57_label_0" style="display: inline;">Fecha de finalizaci&oacute;n</label>
                                                    </div>
                                                    <div class="fb-input-date">
                                                        <input name="form[formula][ENDDA23]"   onkeyup="mascara(this,'/',patron,true)"  value="<?php if(isset($fecha_fin_labsql)){echo $fecha_fin_labsql;}?>" <?php if(isset($disable_ver)){echo $disable_ver;}?> class="datepicker" id="ExperienciaFin" required type="text"
                                                               data-hint="" />
                                                        <div class="fb-hint hidden_hint" style="color: rgb(136, 136, 136); font-style: italic; font-weight: normal;">
                                                            Si actualmente esta laborando elija como fecha el d&iacute;a de hoy.
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="col-sm-3">

                        <div class="fb-item fb-100-item-column" id="item58" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item58_label_0" style="display: inline;">Empresa</label>
                            </div>
                            <div class="fb-input-box">
                                <input name="form[txt][ARBGB]"  value="<?php if(isset($empresa_sql)){echo $empresa_sql;}?>" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item58_text_1" required type="text" maxlength="60"
                                       placeholder="" data-hint="" autocomplete="off" />
                            </div>
                        </div>
    </div>
                                                    <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item59" style="opacity: 1;">
                            <div class="fb-grouplabel">
                                <label id="item59_label_0" style="display: inline;">Pa&iacute;s</label>
                            </div>
                            <div class="fb-dropdown">
                                <select name="form[txt][LAND123]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item59_select_1" data-hint="">
                                    <option id="item89_0_option" selected value="">
                                        Seleccionar
                                    </option>
                                    <?php
                                    foreach ($pais as $i => $pais_candidato)
                                        if($pais_trabajosql==$i) {
                                            echo '<option value="'.$i.'" selected>'.$pais_candidato.'</option>';
                                        }else{
                                            echo '<option value="'.$i.'">'.$pais_candidato.'</option>';
                                            }

                                    ?>
                                </select>
                            </div>
                        </div>
                                                    </div>
                                                        <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item60">
                            <div class="fb-grouplabel">
                                <label id="item60_label_0" style="display: inline;">&Aacute;rea</label>
                            </div>
                            <div class="fb-dropdown">
                                <select name="form[int][BRANC]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item60_select_1" data-hint="">
                                    <option id="item89_0_option" selected value="">
                                        Seleccionar
                                    </option>
                                    <?php
                                    foreach ($ramo as $i => $ramo_empresa_candidato)
                                        if($area_trabajosql==$i) {
                                        echo '<option value="'.$i.'" selected>'.$ramo_empresa_candidato.'</option>';
                                        }else{
                                            echo '<option value="'.$i.'">'.$ramo_empresa_candidato.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                                                        </div>
                                                            <div class="col-sm-3">
                        <div class="fb-item fb-100-item-column" id="item61">
                            <div class="fb-grouplabel">
                                <label id="item61_label_0" style="display: inline;">Actividad</label>
                            </div>
                            <div class="fb-dropdown">
                                <select name="form[int][TAETE]" <?php if(isset($disable_ver)){echo $disable_ver;}?> id="item61_select_1" data-hint="">
                                    <option id="item89_0_option" selected value="">
                                        Seleccionar
                                    </option>
                                    <?php
                                    foreach ($actividad as $i => $actividad_candidato)
                                        if($actividad_empresasql==$i) {
                                        echo '<option value="'.$i.'" selected>'.$actividad_candidato.'</option>';
                                        }else{
                                            echo '<option value="'.$i.'">'.$actividad_candidato.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                                                            </div>
                                            </div>
                                        </div>
                                    </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">


                                <div class="fb-item" id="item64">
                            <div class="fb-sectionbreak">
                                <hr style="max-width: 960px;">
                            </div>
                        </div>


                                </div>
                            </div>
                        </div>

                         </div>
                </div>
            </div>
        </div>










































     <input name="APGRP" type="hidden" value="1" />
     <input name="form[txt][RESRF]" type="hidden" value="PA" />
     <input name="form[int][STREA]" type="hidden" value="4" />
     <input name="form[int][ind_estatus]" type="hidden" value="4" />
     <input name="form[int][ANSSA]" type="hidden" value="1" />
     <input name="form[alphaNum][LAND1]" type="hidden" value="PA" />
     <input name="fb_form_custom_html" type="hidden" />
     <input name="fb_form_embedded" type="hidden" />
     <input name="fb_js_enable" id="fb_js_enable" type="hidden" />
     <input name="fb_url_embedded" id="fb_url_embedded" type="hidden" />
     <input type="hidden" name="form[formula][formula]" value="modificado">

     <div class="btn-group" role="group" aria-label="...">

            <input class="btn btn-default"
                   type="submit" data-regular="" value="Enviar"  <?php if(isset($disable_ver)){echo $disable_ver;}?> />
            <input class="btn btn-default"
                   type="submit" data-regular="" value="Editar" <?php if(isset($disable_ver_editar)){echo $disable_ver_editar;}?> />
         <button type="button" class="btn btn-default"  onclick="return cambio_c();">
                <img alt="Tienda En Linea" src="<?php echo base_url()?>css/images/regresar.jpg" height="20" width="20" title="Regresar">
         </button>

</div>

     <?php if($opcion=='ver'){?>
         <input type="hidden" name="form[txt][opcion]" value="editar">
         <input type="hidden" name="form[int][id]" value="<?php echo $id; ?>">

     <?php }?>
     <?php if($opcion=='nuevo'){?>
         <input type="hidden" name="form[txt][opcion]" value="nuevo">
     <?php }?>
     <?php if($opcion=='modificar'){?>
         <input type="hidden" name="form[int][id]" value="<?php echo $id; ?>">
         <input type="hidden" name="form[txt][opcion]" value="modificar">
         <input type="hidden" name="form[txt][opcion2]" value="modificado">
     <?php }?>


    <!-- End of the body content for CoffeeCup Web Form Builder -->

    </div>


</form>

</div>

    <script>
        function confirmar(){


            location.href="<?php echo base_url()?>login/login/salir";

        }
        function cambio_c(){


            location.href="<?php echo base_url()?>captacion/ingresado";


        }

    </script>





<?php $this->load->view('tema/footer.php'); ?>







