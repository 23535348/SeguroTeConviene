<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captacion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Select_modelo');
        $this->load->model('Usuario_modelo');
        $this->load->database('default');
        $this->load->library('session');


    }

    public function index()
    {

// obtenemos el array de los selects y lo preparamos para enviar
        $datos['departamentos'] = $this->Select_modelo->get_departamentos();
        $datos['areas'] = $this->Select_modelo->get_areas();
        $datos['tratamiento'] = $this->Select_modelo->get_tratamiento();
        $datos['idioma'] = $this->Select_modelo->get_idioma();
        $datos['estado_c'] = $this->Select_modelo->get_estado_civil();
        $datos['nacionalidad'] = $this->Select_modelo->get_nacionalidad();
        $datos['pais'] = $this->Select_modelo->get_pais();
        $datos['clase_instituto'] = $this->Select_modelo->get_clase_institucion();
        $datos['formacion'] = $this->Select_modelo->get_formacion();
        $datos['titulo'] = $this->Select_modelo->get_titulo();
        $datos['unidad_tiempo'] = $this->Select_modelo->get_unidad_tiempo();
        $datos['especialidad'] = $this->Select_modelo->get_especialidad();
        $datos['ramo'] = $this->Select_modelo->get_ramo();
        $datos['actividad'] = $this->Select_modelo->get_actividad();
        $datos['sucursal'] = $this->Select_modelo->get_sucursal();
        $datos['ubicacion'] = $this->Select_modelo->get_ubicacion();
        // cargamos  la interfaz y le enviamos los datos
        //$this->load->view('captacion/form', $datos);
        redirect('login/login');

    }

    public function captacion_nuevo()
    {

        $i=$this->session->userdata('id_persona');

        if($i!='') {
            if (!empty($_POST)) {
                $Excepcion = array('ind_estatus');
                $ind = $this->metValidarFormArrayDatos('form', 'int', $Excepcion);
                $alphaNum = $this->metValidarFormArrayDatos('form', 'alphaNum');
                $formula = $this->metValidarFormArrayDatos('form', 'formula');
                $texto = $this->metValidarFormArrayDatos('form', 'txt');
                $datos = array_merge($alphaNum, $ind, $formula, $texto);

                if ($texto['opcion'] != 'ver') {

                    if ($texto['opcion'] != 'editar') {
                        if ($datos['clavesexo'] == 'M') {
                            $datos['GESC1'] = 'X';
                            $datos['GESC2'] = '';
                        } else {
                            $datos['GESC2'] = 'X';
                            $datos['GESC1'] = '';
                        }
                        $grado = $datos['SPAPL'];
                    }
                } else {
                }
                $fechaPrueba = date("Y/m/d");
                $motivo = "";
                $divisionP = "";
                $hijos = 0;
                $poblacion = 0;
                $STATE = '0';
                $APGRP = 1;
                if ($datos['opcion'] == 'nuevo') {
                    $id = $this->Select_modelo->get_captacion_nuevo($fechaPrueba, $datos['STREA'], $divisionP, $datos['WERKS'], $divisionP,
                        $divisionP, $datos['APTYP'], $datos['RESRF'], $datos['ANREX'], $datos['VORNA'], $datos['NACHN'],
                        $datos['GBDAT'], $datos['SPRSL'], $datos['NATIO'], $datos['STRAS'], $datos['TELNR'],
                        $datos['LAND1'], $datos['USRID_LONG'], $datos['SPAPL'], $datos['NACH2'], $datos['NAME2'], $datos['GBLND'],
                        $motivo, $motivo, $datos['GESC1'], $datos['GESC2'], $datos['FATXT'], $hijos, $datos['ANSSA'], $poblacion,
                        $STATE, $datos['SLART'], $fechaPrueba, $fechaPrueba, $datos['AUSBI'], $datos['INSTI'], $datos['SLAND'],
                        $datos['SLABS'], $datos['SLTP1'], $datos['ANZKL'], $datos['ANZEH'], $datos['BEGDA23'], $datos['ENDDA23'],
                        $datos['ARBGB'], $datos['LAND123'], $datos['BRANC'], $datos['TAETE'], $datos['BTRTL2'], $grado, '');


                    $datos['id'] = $id;
                    if (is_numeric($datos['id'])) {

                        $uniqueid = uniqid('np');

//indicamos las cabeceras del correo
                        $headers = "MIME-Version: 1.0\r\n";
                        $headers .= "From: Foo \r\n";
                        $headers .= "Subject: Test mail\r\n";
//lo importante es indicarle que el Content-Type
//es multipart/alternative para indicarle que existirá
//un contenido alternativo
                        $headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid . "\r\n";

                        $message = "";

                        $message .= "\r\n\r\n--" . $uniqueid . "\r\n";
                        $message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
                        $message .= "E-mail en Texto Plano sin formato.";

                        $message .= "\r\n\r\n--" . $uniqueid . "\r\n";
                        $message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
                        $message .= "E-mail con <b>HTML</b>.";

                        $message .= "\r\n\r\n--" . $uniqueid . "--";

//con la función mail de PHP enviamos el mail.
                        mail($datos['USRID_LONG'], 'correo para todos', $message, $headers);


                        $datos['captado'] = $this->Select_modelo->get_captacion_consulta($datos['id']);
                        $datos['opcion'] = "ver";

                    } else {
                        $datos['captado'] = "Error";
                    }
                }
                if ($datos['opcion'] == "ver") {
                    $id = $this->session->userdata('id_persona');
                    $datos['id'] = $id;
                    $datos['captado'] = $this->Select_modelo->get_captacion_consulta($datos['id']);
                    $datos['opcion'] = "ver";

                }


                if ($datos['opcion'] == 'modificar') {
                    $cedula_persona = $this->Usuario_modelo->get_update_cedula($datos['CEDULA'], $datos['id']);
                    if ($cedula_persona == 1) {
                        $actualizar = 1;

                    } else {
                        $cedula_persona = $this->Usuario_modelo->get_candidato_cedula($datos['CEDULA']);
                        if ($cedula_persona == 1) {
                            $actualizar = 2;
                        } else {
                            $actualizar = 1;

                        }

                    }

                    if ($actualizar == 1) {

                        $fecha_form = str_replace("/", ".", $fechaPrueba);
                        $fecha_BEGDA22 = str_replace("/", ".", $datos['BEGDA22']);
                        $fecha_ENDDA22 = str_replace("/", ".", $datos['ENDDA22']);
                        $fecha_BEGDA23 = str_replace("/", ".", $datos['BEGDA23']);
                        $fecha_ENDDA23 = str_replace("/", ".", $datos['ENDDA23']);
                        $fecha_GBDAT = str_replace("/", ".", $datos['GBDAT']);


                        $id = $this->Select_modelo->get_captacion_editar($fecha_form, $datos['STREA'], $datos['WERKS'], $datos['WERKS'], $datos['BTRTL2'],
                            $APGRP, $datos['APTYP'], $datos['RESRF'], $datos['ANREX'], $datos['VORNA'], $datos['NACHN'],
                            $fecha_GBDAT, $datos['SPRSL'], $datos['NATIO'], $datos['STRAS'], $datos['TELNR'],
                            $datos['LAND1'], $datos['SPAPL'], $datos['NACH2'], $datos['NAME2'], $datos['GBLND'],
                            $motivo, $motivo, $datos['GESC1'], $datos['GESC2'], $datos['FATXT'], $hijos, $datos['ANSSA'], $poblacion,
                            $STATE, $datos['SLART'], $fecha_BEGDA22, $fecha_ENDDA22, $datos['AUSBI'], $datos['INSTI'], $datos['SLAND'],
                            $datos['SLABS'], $datos['SLTP1'], $datos['ANZKL'], $datos['ANZEH'], $fecha_BEGDA23, $fecha_ENDDA23,
                            $datos['ARBGB'], $datos['LAND123'], $datos['BRANC'], $datos['TAETE'], $datos['BTRTL2'], $grado, $datos['id'], $datos['CEDULA']);
                        $datos['id'] = $id;
                    } elseif ($actualizar == 2) {
                        $datos['error'] = "Error";
                        $datos['errorR'] = "Error Cedula Ya Existe";
                        $datos['id'] = $datos['id'];
                        $datos['error'] = "Error";
                    }


                    if (is_numeric($datos['id'])) {

                        $datos['captado'] = $this->Select_modelo->get_captacion_consulta($datos['id']);
                        $datos['opcion'] = "ver";
                        $datos['error'] = "";
                    } else {
                        $datos['error'] = "Error";
                    }


                }
                if ($datos['opcion'] == 'editar') {

                    $datos['captado'] = $this->Select_modelo->get_captacion_consulta($datos['id']);
                    $datos['opcion'] = "modificar";
                }


                // obtenemos el array de los selects y lo preparamos para enviar
                $datos['departamentos'] = $this->Select_modelo->get_departamentos();
                $datos['areas'] = $this->Select_modelo->get_areas();
                $datos['tratamiento'] = $this->Select_modelo->get_tratamiento();
                $datos['idioma'] = $this->Select_modelo->get_idioma();
                $datos['estado_c'] = $this->Select_modelo->get_estado_civil();
                $datos['nacionalidad'] = $this->Select_modelo->get_nacionalidad();
                $datos['pais'] = $this->Select_modelo->get_pais();
                $datos['clase_instituto'] = $this->Select_modelo->get_clase_institucion();
                $datos['formacion'] = $this->Select_modelo->get_formacion();
                $datos['titulo'] = $this->Select_modelo->get_titulo();
                $datos['unidad_tiempo'] = $this->Select_modelo->get_unidad_tiempo();
                $datos['especialidad'] = $this->Select_modelo->get_especialidad();
                $datos['ramo'] = $this->Select_modelo->get_ramo();
                $datos['actividad'] = $this->Select_modelo->get_actividad();
                $datos['sucursal'] = $this->Select_modelo->get_sucursal();
                $datos['ubicacion'] = $this->Select_modelo->get_ubicacion();


                if (isset($datos['opcion2'])) {
                    if ($datos['opcion2'] == 'modificado') {
                        $id = $this->session->userdata('id_persona');
                        $datos['id'] = $id;
                        if ($actualizar == 2) {
                            $datos['opcion'] = 'ver';
                        } else {
                            $datos['opcion'] = 'modificado';
                        }

                        $datos['captado'] = $this->Select_modelo->get_captacion_consulta($id);
                        if ($datos['error'] == "Error") {
                            $this->load->view('captacion/form', $datos);
                        } else {

                            // cargamos  la interfaz y le enviamos los datos
                            $this->load->view('ingresado/template', $datos);
                        }

                    }
                } else {
                    $this->load->view('captacion/form', $datos);
                }
            }else{
                redirect('captacion/ingresado');

            }



        }else{
            redirect('login/login');
        }



    }

    public function ingresado()
    {

        $i=$this->session->userdata('id_persona');
        if($i!=''){
// obtenemos el array de los selects y lo preparamos para enviar
        $datos['departamentos'] = $this->Select_modelo->get_departamentos();
        $datos['areas'] = $this->Select_modelo->get_areas();
        $datos['tratamiento'] = $this->Select_modelo->get_tratamiento();
        $datos['idioma'] = $this->Select_modelo->get_idioma();
        $datos['estado_c'] = $this->Select_modelo->get_estado_civil();
        $datos['nacionalidad'] = $this->Select_modelo->get_nacionalidad();
        $datos['pais'] = $this->Select_modelo->get_pais();
        $datos['clase_instituto'] = $this->Select_modelo->get_clase_institucion();
        $datos['formacion'] = $this->Select_modelo->get_formacion();
        $datos['titulo'] = $this->Select_modelo->get_titulo();
        $datos['unidad_tiempo'] = $this->Select_modelo->get_unidad_tiempo();
        $datos['especialidad'] = $this->Select_modelo->get_especialidad();
        $datos['ramo'] = $this->Select_modelo->get_ramo();
        $datos['actividad'] = $this->Select_modelo->get_actividad();
        $datos['sucursal'] = $this->Select_modelo->get_sucursal();
        $datos['ubicacion'] = $this->Select_modelo->get_ubicacion();

        //Datos del usuario en sesion
        $id=$this->session->userdata('id_persona');

        $datos['captado'] = $this->Select_modelo->get_captacion_consulta($id);
        // cargamos  la interfaz y le enviamos los datos
      $this->load->view('ingresado/template', $datos);

    }else{

            redirect('login/login');
        }
    }



    public function llena_sub_division()
    {
        $options = "";
        if($this->input->post('item4_select_1'))
        {
            $division = $this->input->post('item4_select_1');
            $sub_division = $this->Select_modelo->sub_division($division);
            foreach($sub_division as $fila)
            {
                ?>
                <option value="<?=$fila -> codigo ?>"><?=$fila -> sub_division ?></option>
                <?
            }
        }
    }
    public function llena_departamentos()
    {
        $options = "";
        if($this->input->post('item4_select_1'))
        {
            $division = $this->input->post('item4_select_1');


            $sub_division = $this->Select_modelo->get_departamentos_espontaneo($division);
            foreach($sub_division as $fila)
            {
                ?>
                <option value="<?=$fila -> codigoF ?>"><?=$fila -> descripcion ?></option>
                <?
            }
        }
    }



}
