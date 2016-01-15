<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pol_salud extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Select_modelo');
        $this->load->model('Pol_salud_modelo');
        $this->load->database('default');
        //  $this->load->library('session');


    }

    public function index()
    {

// obtenemos el array de los selects y lo preparamos para enviar

        $this->load->view('autos/template');
    }

    /* --------------------------------------------------- *
   * Calculo de la edad del cliente en base a la fecha de nacimiento
   * --------------------------------------------------- */
    public function CalculoEdad($fecha_nacimiento)
    {
        list($dia, $mes, $ano) = explode("/", $fecha_nacimiento);

        $YearDiff = date("Y") - $ano;
        $DayDiff =date("d") -$dia;

        if (date("m") < $mes || (date("m") == $mes && date("d") < $DayDiff)) {
            $YearDiff--;
        }
        return $YearDiff;
    }

    public function form()
    {

// obtenemos el array de los selects y lo preparamos para enviar
        $datos['marcas'] = $this->Select_modelo->get_marcas();

        if ($this->input->post('brandon')) {
            if ($this->input->post('brandon') == 1) {
                $datos['brandon'] = $this->input->post('brandon');
                $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
                $fecha_nac = $this->input->post('fecha_nac');
                $estado_civil = $this->input->post('estado_civil');
                $genero = $this->input->post('sexo');

                $apellido =$this->input->post('apellido');
                $nombre =$this->input->post('nombre');
                $cedula =$this->input->post('cedula');
                $correo =$this->input->post('correo');
                $telefono =$this->input->post('telefono');
                $celular =$this->input->post('celular');
                $id_alcance_cobertura = $this->input->post('alcance_cobertura');
                $fecha_nac_conyugue =$this->input->post('fecha_nac_conyugue');
                $id_tipo_proveedor = $this->input->post('tipo_proveedor');
                $id_tipo_seguro = $this->input->post('tipo_seguro');
                $id_suma_asegurada_maxima = $this->input->post('suma_asegurada_maxima');
                $fecha_nac_hijo_izq = $this->input->post('fecha_nac_hijo_izq');
                $fecha_nac_hijo_der = $this->input->post('fecha_nac_hijo_der');

                $nacionalidad = $this->input->post('nacionalidad');
                $datos['nacionalidad']=$nacionalidad;

                 $datos['edad']=$edad;
                 $datos['estado_civil']=$estado_civil;
                 $datos['genero']=$genero;

                $uso_auto = "OFICINA";
                 $datos['apellido']=$apellido;
                 $datos['nombre']=$nombre;
                $datos['cedula']=$cedula;
                $datos['fecha_nac']=$fecha_nac;
                $datos['correo']=$correo;
                $datos['telefono']=$telefono;
                $datos['celular']=$celular;
                $datos['id_alcance_cobertura']=$id_alcance_cobertura;
                $datos['id_tipo_proveedor']=$id_tipo_proveedor;
                $datos['id_tipo_seguro']=$id_tipo_seguro;
                $datos['id_suma_asegurada_maxima']=$id_suma_asegurada_maxima;
                $datos['fecha_nac_conyugue']=$fecha_nac_conyugue;

                $informacion_adicional_1='';
                $informacion_adicional_2='';
                $informacion_adicional_3='';

                if (strlen(trim($fecha_nac)) > 0) {
                    $edad_principal = $this->CalculoEdad ($fecha_nac);
                } else{
                    $edad_principal = 0;
                }
                $datos['edad_principal']= $edad_principal;


                if (strlen(trim($fecha_nac_conyugue)) > 0) {
                    $edad_conyugue = $this->CalculoEdad ($fecha_nac_conyugue);
                } else{
                    $edad_conyugue = 0;
                }
                $datos['edad_conyugue']= $edad_conyugue;


                /* cantidad de hijos */

                $indice_fecha = 0;
                $total_hijos_plan = 0;
                foreach ($fecha_nac_hijo_izq as &$value) {
                    if ($indice_fecha % 2 == 0) {
                        if (strlen(trim($value)) > 0) {
                            //print_r($value);
                            $total_hijos_plan = $total_hijos_plan + 1;
                        }

                    }
                    $indice_fecha = $indice_fecha + 1;
                }

                $indice_fecha = 0;
                foreach ($fecha_nac_hijo_der as &$value) {
                    if ($indice_fecha % 2 == 0) {
                        if (strlen(trim($value)) > 0) {
                            //print_r($value);
                            $total_hijos_plan = $total_hijos_plan + 1;
                        }

                    }
                    $indice_fecha = $indice_fecha + 1;
                }


                /* Buscando Alcance de Cobertura */
                $descripcion_alcance_cobertura  = "";

                $consulta = $this->Pol_salud_modelo->get_alcance_cobertura($id_alcance_cobertura);
                if($consulta!=0) {

                    foreach ($consulta as $filas1) {
                        $descripcion_alcance_cobertura =  $filas1->descripcion;

                    }
                }
                /* Fin Buscando Alcance de Cobertura */

                /* Buscando Tipo de Proveedor */

                $descripcion_tipo_proveedor  = "";

                $consulta = $this->Pol_salud_modelo->get_tipo_proveedor($id_tipo_proveedor);
                if($consulta!=0) {

                    foreach ($consulta as $filas1) {
                        $descripcion_tipo_proveedor =  $filas1->descripcion;
                    }
                }
                /* Fin Buscando Tipo Proveedor */


                /* Buscando Tipo de Seguro */
                $descripcion_tipo_seguro  = "";

                $consulta = $this->Pol_salud_modelo->get_tipo_seguro($id_tipo_seguro);
                if($consulta!=0) {

                    foreach ($consulta as $filas1) {
                        $descripcion_tipo_seguro =  $filas1->descripcion;
                    }
                }

                /* Fin Buscando Tipo de Seguro */

                /* Buscando Suma Asegurada Maxima */
                $descripcion_suma_asegurada_maxima  = "";

                $consulta = $this->Pol_salud_modelo-> get_suma_maxima_asegurada($id_suma_asegurada_maxima);
                if($consulta!=0) {

                    foreach ($consulta as $filas1) {
                        $descripcion_suma_asegurada_maxima =  $filas1->descripcion;
                    }
                }

                /* Fin Buscando Suma Asegurada Maxima*/


                $datos['descripcion_alcance_cobertura']=$descripcion_alcance_cobertura;
                $datos['descripcion_tipo_proveedor']=$descripcion_tipo_proveedor;
                $datos['descripcion_tipo_seguro']=$descripcion_tipo_seguro;
                $datos['descripcion_suma_asegurada_maxima']=$descripcion_suma_asegurada_maxima;


                //Inicio de algoritmo de calculos

                $id_aseguradora_salud = 0;
                $iteracion = 0;
                $monto_hijos=0;
                $consulta = $this->Pol_salud_modelo-> get_aseguradora_salud();
                if($consulta!=0) {

                    foreach ($consulta as $filas1) {
                        $iteracion = $iteracion + 1;
                        $id_aseguradora_salud =   $filas1->id_aseguradora_salud;
                        $nombre_aseguradora =   $filas1->nombre_aseguradora;

                        /* Buscando m\E1ximos cotizables */

                        $maxima_edad_principal = 100;
                        $maxima_edad_conyugue = 100;
                        $maxima_edad_hijo = 100;


                        $resultado_maxima_edad = $this->Pol_salud_modelo->get_aseguradora_salud_datos($id_aseguradora_salud);
                        if($resultado_maxima_edad!=0) {

                            foreach ($resultado_maxima_edad as $fila_maxima_edad) {
                                $maxima_edad_principal =$fila_maxima_edad->maxima_edad_principal;
                                $maxima_edad_conyugue = $fila_maxima_edad->maxima_edad_conyugue;
                                $maxima_edad_hijo =   $fila_maxima_edad->maxima_edad_hijo;
                            }
                        }

                        $monto_total_plan_salud_1 = 0;
                        $monto_total_plan_salud_2 = 0;
                        $monto_total_plan_salud_3 = 0;
                       /* $nombre_plan_salud_1 = "";
                        $nombre_plan_salud_2 = "";
                        $nombre_plan_salud_3 = "";*/

                        $contador_planes = 0;

                        $resultado = $this->Pol_salud_modelo->get_cotizable_datos_por_usuario_seleccion($id_aseguradora_salud,$id_alcance_cobertura,$id_tipo_proveedor,$id_tipo_proveedor);
                        if($resultado!=0) {

                            foreach ($resultado as $fila) {

                                $id_plan_salud = $fila->id_plan_salud;
                                $nombre_plan = $fila->nombre_plan;
                                $informacion_adicional = $fila->info_adicional;
                                $contador_planes = $contador_planes + 1;


                                if ($id_aseguradora_salud == 1) { // Internacional de Seguros

                                    if ($id_tipo_seguro == 5) {  // Solo hijos
                                        /* Buscando Monto de Hijos */
                                        /* Buscando Monto de los Hijos */


                                        $monto_hijos = 0;

                                        if ($total_hijos_plan > 0) {

                                            $indice_fecha = 0;

                                            foreach ($fecha_nac_hijo_izq as &$value) {

                                                $monto_hijo_calculo = 0;

                                                if ($indice_fecha % 2 == 0) {

                                                    $edad_hijo = $this->CalculoEdad($value);
                                                    $resultado_monto_hijo = $this->Pol_salud_modelo->get_edad_izquierdo_derecho_top($edad_hijo);
                                                    if ($resultado_monto_hijo != 0) {

                                                        foreach ($resultado_monto_hijo as $fila_monto_hijo) {
                                                            $monto_hijo_calculo = $fila_monto_hijo->monto;
                                                        }
                                                    }

                                                }
                                                $monto_hijos = $monto_hijos + $monto_hijo_calculo;

                                                $indice_fecha = $indice_fecha + 1;

                                            }

                                            $indice_fecha = 0;

                                            foreach ($fecha_nac_hijo_der as &$value) {

                                                $monto_hijo_calculo = 0;

                                                if ($indice_fecha % 2 == 0) {

                                                    $edad_hijo = $this->CalculoEdad($value);
                                                    $resultado_monto_hijo = $this->Pol_salud_modelo->get_edad_izquierdo_derecho_top($edad_hijo);
                                                    if ($resultado_monto_hijo != 0) {

                                                        foreach ($resultado_monto_hijo as $fila_monto_hijo) {
                                                            $monto_hijo_calculo = $fila_monto_hijo->monto;
                                                        }
                                                    }

                                                }
                                            }
                                            $monto_hijos = $monto_hijos + $monto_hijo_calculo;

                                            $indice_fecha = $indice_fecha + 1;

                                        }


                                    }


                                    $monto_total_plan_salud = $monto_hijos;

                                    if ($monto_total_plan_salud > 0) {
                                        $resultado_nombre_plan_salud = $this->Pol_salud_modelo->get_plan_info_adicional();
                                        if ($resultado_nombre_plan_salud != 0) {

                                            foreach ($resultado_nombre_plan_salud as $nuevo_nombre_plan) {
                                                $nombre_plan = $nuevo_nombre_plan->nombre_plan;
                                                $informacion_adicional = $nuevo_nombre_plan->info_adicional;
                                            }
                                        }
                                    }


                                    if ($contador_planes == 1) {
                                        $monto_total_plan_salud_1 = $monto_total_plan_salud;
                                        $nombre_plan_salud_1 = $nombre_plan;
                                        $informacion_adicional_1 = $informacion_adicional;
                                    }


                                } else {
                                    /* Buscando Monto del Asegurado Principal */


                                    $monto_principal = 0;
                                    /* Buscando Monto del Conyugue */
                                    $monto_conyugue = 0;
                                    if ($edad_conyugue > 0) {
                                        $resultado_monto_principal = $this->Pol_salud_modelo->get_plan_asegurado_principal_internacional_seguros($id_plan_salud, $edad_principal);
                                        if ($resultado_monto_principal != 0) {

                                            foreach ($resultado_monto_principal as $fila_monto_principal) {
                                                $monto_principal = $fila_monto_principal->monto;

                                            }
                                        }


                                    }

                                    /* Buscando Monto de Hijos */
                                    // $monto_hijos = 0;
                                    $monto_total_hijos = 0;
                                    if ($total_hijos_plan > 0) {
                                        for ($i = 1; $i <= $total_hijos_plan; $i++) {

                                            if ($i >= 6) {
                                                $total_hijos_plan_calculo = 6;
                                            } else {
                                                $total_hijos_plan_calculo = $i;
                                            }

                                            $monto_hijos = 0;

                                            $resultado_monto_hijos = $this->Pol_salud_modelo->get_plan_asegurado_hijo_internacional_seguros($id_plan_salud, $total_hijos_plan_calculo);
                                            if ($resultado_monto_hijos != 0) {

                                                foreach ($resultado_monto_hijos as $fila_monto_hijos) {
                                                    $monto_hijos = $fila_monto_hijos->monto;

                                                }

                                                $monto_total_hijos = $monto_total_hijos + $monto_hijos;
                                            }
                                        }


                                        $monto_total_plan_salud = $monto_principal + $monto_conyugue + $monto_total_hijos;


                                        if ($contador_planes == 1) {
                                            $monto_total_plan_salud_1 = $monto_total_plan_salud;
                                            $nombre_plan_salud_1 = $nombre_plan;
                                            $informacion_adicional_1 = $informacion_adicional;
                                        }

                                        if ($contador_planes == 2) {
                                            $monto_total_plan_salud_2 = $monto_total_plan_salud;
                                            $nombre_plan_salud_2 = $nombre_plan;
                                            $informacion_adicional_2 = $informacion_adicional;
                                        }

                                        if ($contador_planes == 3) {
                                            $monto_total_plan_salud_3 = $monto_total_plan_salud;
                                            $nombre_plan_salud_3 = $nombre_plan;
                                            $informacion_adicional_3 = $informacion_adicional;
                                        }


                                    }

                                    // $monto_total_plan_salud = $monto_total_plan_salud * 1.05;


                                    //INICIO Solo y Conyuge

                                    if ($id_tipo_seguro == 2 || $id_tipo_seguro == 4) {


                                        /* Verificar Edad Mayor */
                                        $edad_principal_calculo = $edad_principal;
                                        $edad_conyugue_calculo = $edad_conyugue;

                                        if ($edad_conyugue_calculo > $edad_principal_calculo) {
                                            $edad_temporal = $edad_principal_calculo;
                                            $edad_principal_calculo = $edad_conyugue_calculo;
                                            $edad_conyugue_calculo = $edad_principal_calculo;
                                        }

                                        $monto_principal = 0;
                                        $resultado_monto_principal = $this->Pol_salud_modelo->get_plan_asegurado_solo_conyuge_internacional_seguros($id_plan_salud, $edad_principal_calculo);
                                        if ($resultado_monto_principal != 0) {

                                            foreach ($resultado_monto_principal as $fila_monto_principal) {
                                                $monto_principal = $fila_monto_principal->monto;

                                            }

                                        }
                                        /* Buscando Monto de Hijos */
                                        // $monto_hijos = 0;
                                        $monto_total_hijos = 0;


                                        if ($total_hijos_plan > 0) {
                                            for ($i = 1; $i <= $total_hijos_plan; $i++) {

                                                if ($i >= 6) {
                                                    $total_hijos_plan_calculo = 6;
                                                } else {
                                                    $total_hijos_plan_calculo = $i;
                                                }

                                                $monto_hijos = 0;

                                                $resultado_monto_hijos = $this->Pol_salud_modelo->get_plan_solo_conyuge_hijo_internacional_seguros($id_plan_salud, $total_hijos_plan_calculo);
                                                if ($resultado_monto_hijos != 0) {

                                                    foreach ($resultado_monto_hijos as $fila_monto_hijos) {
                                                        $monto_hijos = $fila_monto_hijos->monto;

                                                    }

                                                }

                                                $monto_total_hijos = $monto_total_hijos + $monto_hijos;
                                            }
                                        }


                                        $monto_total_plan_salud = $monto_principal + $monto_total_hijos;

                                        if ($contador_planes == 1) {
                                            $monto_total_plan_salud_1 = $monto_total_plan_salud;
                                            $nombre_plan_salud_1 = $nombre_plan;
                                            $informacion_adicional_1 = $informacion_adicional;
                                        }

                                        if ($contador_planes == 2) {
                                            $monto_total_plan_salud_2 = $monto_total_plan_salud;
                                            $nombre_plan_salud_2 = $nombre_plan;
                                            $informacion_adicional_2 = $informacion_adicional;
                                        }

                                        if ($contador_planes == 3) {
                                            $monto_total_plan_salud_3 = $monto_total_plan_salud;
                                            $nombre_plan_salud_3 = $nombre_plan;
                                            $informacion_adicional_3 = $informacion_adicional;
                                        }

                                    }

                                    // FIN Solo y Conyuge


                                } // fin if $id_aseguradora = 1

                                if ($id_aseguradora_salud == 2) { // PALIG


                                    /* Verificar Edad Mayor */
                                    $edad_principal_calculo = $edad_principal;
                                    $edad_conyugue_calculo = $edad_conyugue;

                                    if ($edad_conyugue_calculo > $edad_principal_calculo) {
                                        $edad_temporal = $edad_principal_calculo;
                                        $edad_principal_calculo = $edad_conyugue_calculo;
                                        $edad_conyugue_calculo = $edad_principal_calculo;
                                    }

                                    //print_r("calc1:".$edad_principal_calculo);
                                    //print_r("calc2:".$edad_conyugue_calculo);


                                    /* Buscando Monto del Asegurado Principal */
                                    $monto_principal = 0;




                                    $resultado_monto_principal = $this->Pol_salud_modelo->get_plan_salud_palig_buscador($id_plan_salud,$edad_principal_calculo,1);
                                    if ($resultado_monto_principal != 0) {

                                        foreach ($resultado_monto_principal as $fila_monto_principal) {
                                            $monto_principal = $fila_monto_principal->monto;

                                        }

                                    }
                                       /* Buscando Monto del Conyugue */
                                    $monto_conyugue = 0;
                                    if ($edad_conyugue_calculo > 0) {


                                        $resultado_monto_conyugue = $this->Pol_salud_modelo->get_plan_salud_palig_buscador($id_plan_salud,$edad_principal_calculo,2);
                                        if ($resultado_monto_conyugue != 0) {

                                            foreach ($resultado_monto_conyugue as $fila_monto_conyugue) {
                                                $monto_conyugue = $fila_monto_conyugue->monto;

                                            }

                                        }

                                    }

                                    /* Buscando Monto de Hijos */
                                    $monto_hijos = 0;
                                    if ($total_hijos_plan > 0) {


                                        $total_hijos_plan_calculo = 1;
                                        $resultado_monto_hijos = $this->Pol_salud_modelo->get_plan_salud_palig_buscador_hijo($id_plan_salud,$total_hijos_plan_calculo);
                                        if ($resultado_monto_hijos != 0) {

                                            foreach ($resultado_monto_hijos as $fila_monto_hijos) {
                                                $monto_hijos = $fila_monto_hijos->monto;

                                            }

                                        }

                                        $monto_hijos = $total_hijos_plan * $monto_hijos;
                                    }

                                    //print_r("monto1:".$monto_principal);
                                    //print_r("monto2:".$monto_conyugue);
                                    //print_r("monto3:".$monto_hijos);


                                    $monto_total_plan_salud = $monto_principal + $monto_conyugue + $monto_hijos;


                                    if ($contador_planes == 1) {
                                        $monto_total_plan_salud_1 = $monto_total_plan_salud;
                                        $nombre_plan_salud_1 = $nombre_plan;
                                        $informacion_adicional_1 = $informacion_adicional;
                                    }

                                    if ($contador_planes == 2) {
                                        $monto_total_plan_salud_2 = $monto_total_plan_salud;
                                        $nombre_plan_salud_2 = $nombre_plan;
                                        $informacion_adicional_2 = $informacion_adicional;
                                    }

                                    if ($contador_planes == 3) {
                                        $monto_total_plan_salud_3 = $monto_total_plan_salud;
                                        $nombre_plan_salud_3 = $nombre_plan;
                                        $informacion_adicional_3 = $informacion_adicional;
                                    }


                                } // fin if $id_aseguradora = 2

                                if ($id_aseguradora_salud == 3) { //ASSA


                                    if ($id_tipo_seguro == 5) {  // Solo hijos
                                        /* Buscando Monto de Hijos */
                                        /* Buscando Monto de los Hijos */


                                        //print_r("plan: ". $id_plan_salud);

                                        $monto_hijos = 0;

                                        if ($total_hijos_plan > 0) {

                                            $indice_fecha = 0;

                                            foreach ($fecha_nac_hijo_izq as &$value) {

                                                $monto_hijo_calculo = 0;

                                                if ($indice_fecha % 2 == 0) {

                                                    //print_r("valor1: ". $value);

                                                    $edad_hijo = $this->CalculoEdad($value);

                                                    // print_r("edad1: ". $edad_hijo);


                                                    $resultado_monto_hijo = $this->Pol_salud_modelo->get_plan_salud_assa($id_plan_salud,$edad_hijo);
                                                    if ($resultado_monto_hijo != 0) {

                                                        foreach ($resultado_monto_hijo as $fila_monto_hijo) {
                                                            $monto_hijo_calculo = $fila_monto_hijo->monto;

                                                        }

                                                    }

                                                }

                                                //print_r("monto_hijo_calculado1: ".$monto_hijo_calculo);
                                                $monto_hijos = $monto_hijos + $monto_hijo_calculo;

                                                $indice_fecha = $indice_fecha + 1;

                                            }

                                            $indice_fecha = 0;

                                            foreach ($fecha_nac_hijo_der as &$value) {

                                                $monto_hijo_calculo = 0;

                                                if ($indice_fecha % 2 == 0) {

                                                    //print_r("valor2: ". $value);


                                                    $edad_hijo = $this->CalculoEdad($value);

                                                    //  print_r("edad2: ". $edad_hijo);
                                                    $resultado_monto_hijo = $this->Pol_salud_modelo->get_plan_salud_assa($id_plan_salud,$edad_hijo);
                                                    if ($resultado_monto_hijo != 0) {

                                                        foreach ($resultado_monto_hijo as $fila_monto_hijo) {
                                                            $monto_hijo_calculo = $fila_monto_hijo->monto;

                                                        }

                                                    }

                                                }
                                                $monto_hijos = $monto_hijos + $monto_hijo_calculo;

                                                //print_r("monto_hijo1".$monto_hijos);

                                                $indice_fecha = $indice_fecha + 1;

                                            }


                                        }


                                        $monto_total_plan_salud = $monto_hijos;


                                        if ($contador_planes == 1) {
                                            $monto_total_plan_salud_1 = $monto_total_plan_salud;
                                            $nombre_plan_salud_1 = $nombre_plan;
                                            $informacion_adicional_1 = $informacion_adicional;

                                            if ($contador_planes == 2) {
                                                $monto_total_plan_salud_2 = $monto_total_plan_salud;
                                                $nombre_plan_salud_2 = $nombre_plan;
                                                $informacion_adicional_2 = $informacion_adicional;
                                            }

                                            if ($contador_planes == 3) {
                                                $monto_total_plan_salud_3 = $monto_total_plan_salud;
                                                $nombre_plan_salud_3 = $nombre_plan;
                                                $informacion_adicional_3 = $informacion_adicional;
                                            }


                                        }


                                    } else {


                                        if ($edad_principal <= $maxima_edad_principal && $edad_conyugue <= $maxima_edad_conyugue) {


                                            /* Buscando Monto del Asegurado Principal */
                                            $monto_principal = 0;

                                            $resultado_monto_principal = $this->Pol_salud_modelo->get_plan_salud_assa($id_plan_salud,$edad_principal);
                                            if ($resultado_monto_principal != 0) {

                                                foreach ($resultado_monto_principal as $fila_monto_principal) {
                                                    $monto_principal = $fila_monto_principal->monto;

                                                }

                                            }

                                            /* Buscando Monto del Conyugue */
                                            $monto_conyugue = 0;
                                            if ($edad_conyugue > 0) {
                                                $resultado_monto_conyugue = $this->Pol_salud_modelo->get_plan_salud_assa($id_plan_salud,$edad_conyugue);
                                                if ($resultado_monto_conyugue != 0) {

                                                    foreach ($resultado_monto_conyugue as $fila_monto_conyugue) {
                                                        $monto_conyugue = $fila_monto_conyugue->monto;

                                                    }

                                                }

                                            }

                                            /* Buscando Monto de los Hijos */
                                            $monto_hijos = 0;

                                            if ($total_hijos_plan > 0) {

                                                $indice_fecha = 0;

                                                foreach ($fecha_nac_hijo_izq as &$value) {

                                                    $monto_hijo_calculo = 0;

                                                    if ($indice_fecha % 2 == 0) {

                                                        $edad_hijo = $this->CalculoEdad($value);

                                                        $resultado_monto_hijo = $this->Pol_salud_modelo->get_plan_salud_assa($id_plan_salud,$edad_hijo);
                                                        if ($resultado_monto_hijo != 0) {

                                                            foreach ($resultado_monto_hijo as $fila_monto_hijo) {
                                                                $monto_hijo_calculo = $fila_monto_hijo->monto;

                                                            }

                                                        }
                                                    }
                                                    $monto_hijos = $monto_hijos + $monto_hijo_calculo;

                                                    $indice_fecha = $indice_fecha + 1;

                                                }

                                                $indice_fecha = 0;

                                                foreach ($fecha_nac_hijo_der as &$value) {

                                                    $monto_hijo_calculo = 0;

                                                    if ($indice_fecha % 2 == 0) {

                                                        $edad_hijo = $this->CalculoEdad($value);
                                                        $resultado_monto_hijo = $this->Pol_salud_modelo->get_plan_salud_assa($id_plan_salud,$edad_hijo);
                                                        if ($resultado_monto_hijo != 0) {

                                                            foreach ($resultado_monto_hijo as $fila_monto_hijo) {
                                                                $monto_hijo_calculo = $fila_monto_hijo->monto;

                                                            }

                                                        }

                                                    }
                                                    $monto_hijos = $monto_hijos + $monto_hijo_calculo;

                                                    $indice_fecha = $indice_fecha + 1;

                                                }


                                            }
                                            $monto_total_plan_salud = $monto_principal + $monto_conyugue + $monto_hijos;
                                            //$monto_total_plan_salud = $monto_total_plan_salud * 1.05;


                                            if ($contador_planes == 1) {
                                                $monto_total_plan_salud_1 = $monto_total_plan_salud;
                                                $nombre_plan_salud_1 = $nombre_plan;
                                                $informacion_adicional_1 = $informacion_adicional;
                                            }

                                            if ($contador_planes == 2) {
                                                $monto_total_plan_salud_2 = $monto_total_plan_salud;
                                                $nombre_plan_salud_2 = $nombre_plan;
                                                $informacion_adicional_2 = $informacion_adicional;
                                            }

                                            if ($contador_planes == 3) {
                                                $monto_total_plan_salud_3 = $monto_total_plan_salud;
                                                $nombre_plan_salud_3 = $nombre_plan;
                                                $informacion_adicional_3 = $informacion_adicional;
                                            }
                                        }  //if ($edad_principal <= $maxima_edad_principal  && $edad_conyugue <= $maxima_edad_conyugue)
                                    }

                                } // fin if $id_aseguradora = 3


                            }
                            if(strlen(trim($nombre_plan_salud_1)) == 0){
                                $nombre_plan_salud_1 = "No Cotizable";
                                $informacion_adicional_1 = "";

                            }

                            if(strlen(trim($nombre_plan_salud_2)) == 0){
                                $nombre_plan_salud_2 = "No Cotizable";
                                $informacion_adicional_2 = "";

                            }

                            if(strlen(trim($nombre_plan_salud_3)) == 0){
                                $nombre_plan_salud_3 = "No Cotizable";
                                $informacion_adicional_3 = "";

                            }





                        }

                        $tabla_resultados[1][$iteracion] = $id_aseguradora_salud;
                        $tabla_resultados[2][$iteracion] = $nombre_aseguradora;
                        $tabla_resultados[3][$iteracion] = $nombre_plan_salud_1;
                        $tabla_resultados[4][$iteracion] = $monto_total_plan_salud_1;
                        $tabla_resultados[5][$iteracion] = $nombre_plan_salud_2;
                        $tabla_resultados[6][$iteracion] = $monto_total_plan_salud_2;
                        $tabla_resultados[7][$iteracion] = $nombre_plan_salud_3;
                        $tabla_resultados[8][$iteracion] = $monto_total_plan_salud_3;
                        $tabla_resultados[9][$iteracion] = $total_hijos_plan;
                        $tabla_resultados[10][$iteracion] = $informacion_adicional_1;
                        $tabla_resultados[11][$iteracion] = $informacion_adicional_2;
                        $tabla_resultados[12][$iteracion] = $informacion_adicional_3;





                    }



                // Fin de algorimo de calculos

                    // Vamos a Ordenar Resultados

                    $counter1 = 1;
                    while ($counter1 < 4) {
                        $tabla_resultados_ordenados[4][$counter1] = 9999999999;
                        $counter1++;
                    }

                    $counter1 = 1;
                    while ($counter1 < 4) {
                        $counter2 = 1;
                        $ganador = 9999;
                        while ($counter2 < 4) {
                            if ($tabla_resultados[4][$counter2] < $tabla_resultados_ordenados[4][$counter1]) {
                                $tabla_resultados_ordenados[4][$counter1] = $tabla_resultados[4][$counter2];
                                $ganador = $counter2;
                            }
                            $counter2++;
                        }
                        if ($ganador != 9999) {
                            $tabla_resultados_ordenados[1][$counter1] = $tabla_resultados[1][$ganador];
                            $tabla_resultados_ordenados[2][$counter1] = $tabla_resultados[2][$ganador];
                            $tabla_resultados_ordenados[3][$counter1] = $tabla_resultados[3][$ganador];
                            $tabla_resultados_ordenados[4][$counter1] = $tabla_resultados[4][$ganador];
                            $tabla_resultados_ordenados[5][$counter1] = $tabla_resultados[5][$ganador];
                            $tabla_resultados_ordenados[6][$counter1] = $tabla_resultados[6][$ganador];
                            $tabla_resultados_ordenados[7][$counter1] = $tabla_resultados[7][$ganador];
                            $tabla_resultados_ordenados[8][$counter1] = $tabla_resultados[8][$ganador];
                            $tabla_resultados_ordenados[9][$counter1] = $tabla_resultados[9][$ganador];
                            $tabla_resultados_ordenados[10][$counter1] = $tabla_resultados[10][$ganador];
                            $tabla_resultados_ordenados[11][$counter1] = $tabla_resultados[11][$ganador];
                            $tabla_resultados_ordenados[12][$counter1] = $tabla_resultados[12][$ganador];
                            
                            $datos['tabla_resultados_ordenados'][1][$counter1]=$tabla_resultados[1][$ganador];
                            $datos['tabla_resultados_ordenados'][2][$counter1]=$tabla_resultados[2][$ganador];
                            $datos['tabla_resultados_ordenados'][3][$counter1]=$tabla_resultados[3][$ganador];
                            $datos['tabla_resultados_ordenados'][4][$counter1]=$tabla_resultados[4][$ganador];
                            $datos['tabla_resultados_ordenados'][5][$counter1]=$tabla_resultados[5][$ganador];
                            $datos['tabla_resultados_ordenados'][6][$counter1]=$tabla_resultados[6][$ganador];
                            $datos['tabla_resultados_ordenados'][7][$counter1]=$tabla_resultados[7][$ganador];
                            $datos['tabla_resultados_ordenados'][8][$counter1]=$tabla_resultados[8][$ganador];
                            $datos['tabla_resultados_ordenados'][9][$counter1]=$tabla_resultados[9][$ganador];
                            $datos['tabla_resultados_ordenados'][10][$counter1]=$tabla_resultados[10][$ganador];
                            $datos['tabla_resultados_ordenados'][11][$counter1]=$tabla_resultados[11][$ganador];
                            $datos['tabla_resultados_ordenados'][12][$counter1]=$tabla_resultados[12][$ganador];



                            $tabla_resultados[4][$ganador] = 9999999999;


                        }
                        $counter1++;
                    }




                $datos['empresa'] = 0;
                $datos['iteracion'] = 1;
                $datos['y'] =0;

    }
            }
        }
        $this->load->view('PolSalud/template', $datos);


    }


    public function validator()
    {
        if(empty($_POST)) {
            redirect("Location: http://www.seguroteconviene.com/"); //Redirige al login.php
        }
        $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $estado_civil = $this->input->post('estado_civil');
        $genero = $this->input->post('genero');

        $apellido =$this->input->post('apellido');
        $nombre =$this->input->post('nombre');
        $cedula =$this->input->post('cedula');
        $correo =$this->input->post('correo');
        $telefono =$this->input->post('telefono');
        $celular =$this->input->post('celular');
        $id_alcance_cobertura = $this->input->post('id_alcance_cobertura');
        $fecha_nac_conyugue =$this->input->post('fecha_nac_conyugue');
        $id_tipo_proveedor = $this->input->post('id_tipo_proveedor');
        $id_tipo_seguro = $this->input->post('id_tipo_seguro');
        $id_suma_asegurada_maxima = $this->input->post('id_suma_asegurada_maxima');
        $fecha_nac_hijo_izq = $this->input->post('fecha_nac_hijo_izq');
        $fecha_nac_hijo_der = $this->input->post('fecha_nac_hijo_der');
        $nacionalidad = $this->input->post('nacionalidad');
        $company = $this->input->post('company');
        $nombre_plan_salud = $this->input->post('nombre_plan_salud');
        $monto_total_plan_salud = $this->input->post('monto_total_plan_salud');

        $descripcion_alcance_cobertura = $this->input->post('descripcion_alcance_cobertura');
        $descripcion_tipo_proveedor = $this->input->post('descripcion_tipo_proveedor');
        $descripcion_tipo_seguro = $this->input->post('descripcion_tipo_seguro');
        $edad_principal= $this->input->post('edad_principal');
        $edad_conyugue = $this->input->post('edad_conyugue');
        $total_hijos_plan = $this->input->post('total_hijos_plan');

        $datos['nacionalidad']=$nacionalidad;

        $uso_auto = "OFICINA";

        $datos['edad']=$edad;
        $datos['estado_civil']=$estado_civil;
        $datos['genero']=$genero;
        $datos['company']=$company;
        $datos['apellido']=$apellido;
        $datos['nombre']=$nombre;
        $datos['cedula']=$cedula;
        $datos['fecha_nac']=$fecha_nac;
        $datos['correo']=$correo;
        $datos['telefono']=$telefono;
        $datos['celular']=$celular;
        $datos['id_alcance_cobertura']=$id_alcance_cobertura;
        $datos['id_tipo_proveedor']=$id_tipo_proveedor;
        $datos['id_tipo_seguro']=$id_tipo_seguro;
        $datos['id_suma_asegurada_maxima']=$id_suma_asegurada_maxima;
        $datos['fecha_nac_conyugue']=$fecha_nac_conyugue;
        $datos['monto_total_plan_salud']=$monto_total_plan_salud;
        $datos['nombre_plan_salud']=$nombre_plan_salud;


        $datos['descripcion_alcance_cobertura']=$descripcion_alcance_cobertura;
        $datos['descripcion_tipo_proveedor']=$descripcion_tipo_proveedor;
        $datos['descripcion_tipo_seguro']=$descripcion_tipo_seguro;
        $datos['edad_principal']=$edad_principal;
        $datos['edad_conyugue']=$edad_conyugue;
        $datos['total_hijos_plan']=$total_hijos_plan;


        if ($id_suma_asegurada_maxima == 1) {
            $descripcion_suma_asegurada_maxima = "Máximo Vitalicio";
        }
        $datos['descripcion_suma_asegurada_maxima']=$descripcion_suma_asegurada_maxima;
        $this->load->view('PolSalud/validator', $datos);

    }



    public function complete()
    {
        $this->load->library('FPDF');

        $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $estado_civil = $this->input->post('estado_civil');
        $genero = $this->input->post('genero');

        $apellido =$this->input->post('apellido');
        $nombre =$this->input->post('nombre');
        $cedula =$this->input->post('cedula');
        $correo =$this->input->post('correo');
        $telefono =$this->input->post('telefono');
        $celular =$this->input->post('celular');
        $id_alcance_cobertura = $this->input->post('id_alcance_cobertura');
        $fecha_nac_conyugue =$this->input->post('fecha_nac_conyugue');
        $id_tipo_proveedor = $this->input->post('id_tipo_proveedor');
        $id_tipo_seguro = $this->input->post('id_tipo_seguro');
        $id_suma_asegurada_maxima = $this->input->post('id_suma_asegurada_maxima');
        $fecha_nac_hijo_izq = $this->input->post('fecha_nac_hijo_izq');
        $fecha_nac_hijo_der = $this->input->post('fecha_nac_hijo_der');
        $nacionalidad = $this->input->post('nacionalidad');
        $company = $this->input->post('company');
        $nombre_plan_salud = $this->input->post('nombre_plan_salud');
        $monto_total_plan_salud = $this->input->post('monto_total_plan_salud');

        $descripcion_alcance_cobertura = $this->input->post('descripcion_alcance_cobertura');
        $descripcion_tipo_proveedor = $this->input->post('descripcion_tipo_proveedor');
        $descripcion_tipo_seguro = $this->input->post('descripcion_tipo_seguro');
        $edad_principal= $this->input->post('edad_principal');
        $edad_conyugue = $this->input->post('edad_conyugue');
        $total_hijos_plan = $this->input->post('total_hijos_plan');

        $datos['nacionalidad']=$nacionalidad;

        $uso_auto = "OFICINA";

        $datos['edad']=$edad;
        $datos['estado_civil']=$estado_civil;
        $datos['genero']=$genero;
        $datos['company']=$company;
        $datos['apellido']=$apellido;
        $datos['nombre']=$nombre;
        $datos['cedula']=$cedula;
        $datos['fecha_nac']=$fecha_nac;
        $datos['correo']=$correo;
        $datos['telefono']=$telefono;
        $datos['celular']=$celular;
        $datos['id_alcance_cobertura']=$id_alcance_cobertura;
        $datos['id_tipo_proveedor']=$id_tipo_proveedor;
        $datos['id_tipo_seguro']=$id_tipo_seguro;
        $datos['id_suma_asegurada_maxima']=$id_suma_asegurada_maxima;
        $datos['fecha_nac_conyugue']=$fecha_nac_conyugue;
        $datos['monto_total_plan_salud']=$monto_total_plan_salud;
        $datos['nombre_plan_salud']=$nombre_plan_salud;


        $datos['descripcion_alcance_cobertura']=$descripcion_alcance_cobertura;
        $datos['descripcion_tipo_proveedor']=$descripcion_tipo_proveedor;
        $datos['descripcion_tipo_seguro']=$descripcion_tipo_seguro;
        $datos['edad_principal']=$edad_principal;
        $datos['edad_conyugue']=$edad_conyugue;
        $datos['total_hijos_plan']=$total_hijos_plan;


        $nombre_completo="$apellido $nombre";





        ini_set('date.timezone','America/Panama');
        $solicitud=date("Y-m-d H:i:s");
        $birthDate = explode("/",$fecha_nac);
       // $edad = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));

        if (strlen(trim($nombre)) == 0){
            header("Location: http://www.seguroteconviene.com/"); //Redirige al login.php
        }

        if($genero=="F"){
            $genero_f="Femenino";
        }

        elseif($genero=="M"){
            $genero_f="Masculino";
        }

        if($nacionalidad=="P"){
            $nacionalidad_f="Panameño (a)";
           // $nacionalidad_f = utf8_encode($nacionalidad_f);

        }
        elseif($nacionalidad=="E"){
            $nacionalidad_f="Extranjero";
        }



        if ($id_suma_asegurada_maxima == 1) {
            $descripcion_suma_asegurada_maxima = "Máximo Vitalicio";
           // $descripcion_suma_asegurada_maxima = utf8_encode($descripcion_suma_asegurada_maxima);
        }

        $datos['descripcion_suma_asegurada_maxima']=$descripcion_suma_asegurada_maxima;
        $datos['nacionalidad_f']=$nacionalidad_f;
        $datos['genero_f']=$genero_f;



        //Variables aun no definidas
        $poliza_terceros=0;
        $cobertura_terceros=0;
        $rango_terceros=0;
        $valor_auto=0;

      $datos['solicitud'] = $this->Pol_salud_modelo->get_solicitud_nuevo($solicitud,$nombre_completo, $cedula,$genero_f,$fecha_nac,$telefono,
          $celular,$correo,$company,4,$nacionalidad_f,$fecha_nac_conyugue,$descripcion_tipo_seguro,
          $descripcion_tipo_proveedor,$descripcion_alcance_cobertura, $descripcion_suma_asegurada_maxima,
          $total_hijos_plan,$nombre_plan_salud,$monto_total_plan_salud
      );

        $id_registro = $this->Select_modelo->get_id_solicitud($correo);

        foreach ($id_registro as $filas1) {

            $datos['id_registro'] =  $filas1->id;
        }
        $datos['fecha_solicitud']=$solicitud;





        $this->load->view('PolSalud/complete', $datos);

    }

    public function imprimir_terceros(){

        $this->load->library('FPDF');
        $this->load->library('Mailer');
        //Datos para envio de correo
        //info@stc.com
        //info@stc.com
        $datos['AddReplyTo']="deivisjose.d@gmail.com";
        $datos['SetFrom']="deivisjose.d@gmail.com";
        $plan= $this->input->get('plan');
        $nacionalidad= $this->input->get('nacionalidad');
        $idaseguradora= $this->input->get('idaseguradora');
        $genero= $this->input->get('genero');
        $counter_coberturas = 0;


        if($nacionalidad=="P"){
            $nacionalidad_f="Panameño (a)";
            // $nacionalidad_f = utf8_encode($nacionalidad_f);

        }
        elseif($nacionalidad=="E"){
            $nacionalidad_f="Extranjero";
        }

        $datos['nacionalidad']=$nacionalidad_f;


        if($genero=="F"){
            $genero_f="Femenino";
        }

        elseif($genero=="M"){
            $genero_f="Masculino";
        }
        $datos['genero']=$genero_f;

        $plan_aseguradora = $this->Select_modelo->get_plan_aseguradora($plan,$idaseguradora);
        if($plan_aseguradora!=0) {

            foreach ($plan_aseguradora as $filas1) {
                $cobertura_especial[$counter_coberturas] =  $filas1->cobertura;
                $datos['cobertura_especial'][$counter_coberturas]=$filas1->cobertura;
                $counter_coberturas = $counter_coberturas + 1;


            }

        }
        $datos['counter_coberturas']=$counter_coberturas;

        $this->load->view('PolSalud/imprimir_terceros',$datos);
    }




}
