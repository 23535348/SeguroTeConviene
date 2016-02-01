<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AutosPolHipo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Autos_pol_vida');
        $this->load->model('Autos_pol_incendio');
        $this->load->model('Autos_pol_hipotecaria');
        $this->load->model('Select_modelo');
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
        $DayDiff=$dia;


        if (date("m") < $mes || (date("m") == $mes && date("d") < $DayDiff)) {
            $YearDiff--;
        }
        return $YearDiff;
    }

    public function form()
    {

// obtenemos el array de los selects y lo preparamos para enviar
       // $datos['marcas'] = $this->Select_modelo->get_marcas();
        $datos['prueba']=1;
        if ($this->input->post('brandon')) {
            if ($this->input->post('brandon') == 1) {
                $datos['brandon'] = $this->input->post('brandon');



                $apellido =$this->input->post('apellido');
                $nombre =$this->input->post('nombre');
                $telefono =$this->input->post('telefono');
                $email =$this->input->post('email');
                $cedula =$this->input->post('cedula');
                $sexo = $this->input->post('sexo');
                $fumador =$this->input->post('fumador');
               $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
                $fecha_nac = $this->input->post('fecha_nac');
                $suma_asegurada_vida = $this->input->post('suma_asegurada_vida');
                $suma_asegurada_incendio = $this->input->post('suma_asegurada_incendio');
                $termino = $this->input->post('termino');

                $formadepago = $this->input->post('formadepago');
                $sesion_cotizacion = $this->input->post('sesion_cotizacion');
                $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
                $tipo_bien = $this->input->post('tipo_bien');
                $sector = $this->input->post('sector');
                $celular = $this->input->post('celular');
                $estado_civil = $this->input->post('estado_civil');

                $tipo_construccion = $this->input->post('tipo_construccion');

                $uso_auto = "OFICINA";


                $datos['sexo']=$sexo;
                $datos['apellido']=$apellido;
                $datos['nombre']=$nombre;
                $datos['cedula']=$cedula;
                $datos['fecha_nac']=$fecha_nac;
                $datos['email']=$email;
                $datos['telefono']=$telefono;

                $datos['suma_asegurada_vida'] = $suma_asegurada_vida;
                $datos['suma_asegurada_incendio'] = $suma_asegurada_incendio;
                $datos['fumador'] = $fumador;
                $datos['termino'] = $termino;
                $datos['prueba_aseguradora_especifica'] = $prueba_aseguradora_especifica;
                $datos['sesion_cotizacion'] = $sesion_cotizacion;
                $datos['formadepago'] = $formadepago;
                $datos['tipo_bien'] = $tipo_bien;
                $datos['sector'] = $sector;
                $datos['tipo_construccion'] = $tipo_construccion;
                $datos['celular'] = $celular;
                $datos['edad'] = $edad;
                $datos['estado_civil'] = $estado_civil;

                $iteracion=0;


                /* ------------------------============================================--------------------------- *
                * INICIO DE CALCULOS ESPECIFICOS PARA UNA ASEGURADORA
                * ------------------------============================================------------------------------------ */

                $aseguradoras = $this->Autos_pol_hipotecaria->get_consulta_aseguradoras();
                foreach ($aseguradoras as $filas1) {
                    $iteracion=$iteracion+1;
                    $asegurable = 1;
                    $asegurable_vida = 1;
                    $mensaje = "";
                    $idaseguradora =  $filas1->idaseguradoras;
                    $nombre_aseguradora = $filas1->nombre;
                    $factor = 0;
                    $descuento = 0;
                    $prima_planeada = 0;
                    $valor_basico = 0;
                    $valor_completo = 0;
                    $prima_basico = 0;
                    $prima_completo = 0;
                    $validacion_minimo = 0;
                    $validacion_maximo = 999999;
                    $periodo_pago = 1;

                                    /* --------------------------------------------------- *
                                     * Inicio de configuración de no asegurables
                                     * --------------------------------------------------- */


                    if (($sexo == 'M') && ($fumador == 0)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_M_NF_factores($suma_asegurada_vida,$idaseguradora,$edad,$termino); }
                    if (($sexo == 'M') && ($fumador == 1)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_M_F_factores($suma_asegurada_vida,$idaseguradora,$edad,$termino); }
                    if (($sexo == 'F') && ($fumador == 0)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_F_NF_factores($suma_asegurada_vida,$idaseguradora,$edad,$termino); }
                    if (($sexo == 'F') && ($fumador == 1)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_F_F_factores($suma_asegurada_vida,$idaseguradora,$edad,$termino); }

                    if($factor_consulta!=0) {
                        foreach ($factor_consulta as $filas_factor) {
                            $detalle_factor= $filas_factor->factor;
                        }}else{
                        $detalle_factor=1;
                    }


                    $prima_planeada = $suma_asegurada_vida * $detalle_factor;

                    if ($idaseguradora == 5) {
                        $prima_planeada = $suma_asegurada_vida * ($detalle_factor/1000);

                        if ($periodo_pago == 2) {
                            $descuento = 1-0.51;
                        }
                        if ($periodo_pago == 3) {
                            $descuento = 1-0.26;
                        }
                        if ($periodo_pago == 4) {
                            $descuento = 1-0.0885;
                        }
                    }


                    if ($idaseguradora == 2) {
                        $descuento = 0;
                        if ($periodo_pago == 1) {
                            $prima_planeada = $suma_asegurada_vida/1000 * $detalle_factor * 1;
                        }
                        if ($periodo_pago == 2) {
                            $prima_planeada = $suma_asegurada_vida/1000 * $detalle_factor * 0.505;
                        }
                        if ($periodo_pago == 3) {
                            $prima_planeada = $suma_asegurada_vida/1000 * $detalle_factor * 0.25375;
                        }
                        if ($periodo_pago == 4) {
                            $prima_planeada = $suma_asegurada_vida/1000 * $detalle_factor * 0.085;
                        }

                    }

                    if ($idaseguradora == 3) {
                        $prima_planeada = $suma_asegurada_vida * ($detalle_factor/1000);
                        $descuento = 0;
                        $factorfraccionamientoASSA = 0;
                        $montofraccionamientoASSA = 0;
                        if ($periodo_pago == 1) {
                            $factorfraccionamientoASSA = 1.00;
                            $montofraccionamientoASSA = 9;
                        }
                        if ($periodo_pago == 2) {
                            $factorfraccionamientoASSA = 0.51;
                            $montofraccionamientoASSA = 5;
                        }
                        if ($periodo_pago == 3) {
                            $factorfraccionamientoASSA = 0.26;
                            $montofraccionamientoASSA = 3;
                        }
                        if ($periodo_pago == 4) {
                            if ($formadepago == "TC") {
                                $factorfraccionamientoASSA = 0.08500;
                                $montofraccionamientoASSA = 1.00;
                            } elseif ($formadepago == "ACH") {
                                $factorfraccionamientoASSA = 0.08500;
                                $montofraccionamientoASSA = 1.00;
                            } else {
                                $factorfraccionamientoASSA = 0.0885;
                                $montofraccionamientoASSA = 1.25;
                            }
                        }
                        $prima_planeada = $prima_planeada * $factorfraccionamientoASSA + $montofraccionamientoASSA;
                    }

                    if ($idaseguradora == 6) {
                        //echo ("Factor: "); echo ($factor[0]); echo ("</br>");
                        $prima_planeada = (($suma_asegurada_vida * ($detalle_factor/1000))+25);
                        if ($detalle_factor == 0) {$asegurable = 0;}
                        //echo ("Prima banistmo (Suma asegurada * (Factor/1000) +25): "); echo ($prima_planeada); echo ("</br>");

                        $numero_de_pagos = 1;
                        $prima_anual_banistmo = round($prima_planeada*1.05,2);
                        //echo ("Prima banistmo con impuesto y redondeado a 2 decs: "); echo ($prima_anual_banistmo);

                        if ($periodo_pago == 2) {
                            $numero_de_pagos = 2;
                        }
                        if ($periodo_pago == 3) {
                            $numero_de_pagos = 4;
                        }
                        if ($periodo_pago == 4) {
                            $numero_de_pagos = 12;
                        }

                        $prima_planeada = $prima_planeada/$numero_de_pagos;
                        //echo ("Prima banistmo div numero de pagos: "); echo ($prima_planeada); echo ("</br>");

                    }

                    if ($idaseguradora == 1) {
                        //echo ("Prima planeada: ");echo($prima_planeada);echo("</br>");
                        $prima_planeada = $prima_planeada / 0.775;
                        //echo ("Prima planeada la divido por 0.775: ");echo($prima_planeada);echo("</br>");




                        $consultaIS_2 = $this->Autos_pol_vida->get_consulta_factor_vida_recargos($edad,$sexo,$fumador);
                        if($consultaIS_2!=0) {
                            foreach ($consultaIS_2 as $filas_factor2) {
                                $factorIS_2 = $filas_factor2->factor;
                            }}else{
                            $factorIS_2=1;
                        }
                        $prima_planeada = $prima_planeada * $factorIS_2;

                        //echo ("Segundo factor: ");echo($factorIS_2[0]);echo("</br>");
                        //echo ("Prima planeada por segundo factor: ");echo($prima_planeada);echo("</br>");
                        $consultaIS_3 = $this->Autos_pol_vida->get_consulta_factor_vida_recargos_2($termino);
                        if($consultaIS_3!=0) {
                            foreach ($consultaIS_3 as $filas_factor3) {
                                $factorIS_3 = $filas_factor3->factor;
                            }}else{
                            $factorIS_3=1;
                        }

                        $prima_planeada = $prima_planeada * $factorIS_3;

                        //echo ("Tercer factor: ");echo($factorIS_3[0]);echo("</br>");
                        //echo ("Prima planeada por tercer factor: ");echo($prima_planeada);echo("</br>");

                        if ($suma_asegurada_vida > 0) {
                            $descuento = 1-0.780;
                        }
                        if ($suma_asegurada_vida >= 75000) {
                            $descuento = 1-0.855;
                        }
                        if ($suma_asegurada_vida >= 500000) {
                            $descuento = 1-0.855;
                        }
                        if ($suma_asegurada_vida >= 1000000) {
                            $descuento = 1-0.800;
                        }
                        //echo ("Prima planeada por factor de rangos: ");echo($prima_planeada);echo("</br>");
                        $prima_planeada = ($prima_planeada - ($prima_planeada * $descuento));
                        $prima_planeada = ($prima_planeada) + 27.5;
                        $descuento = 0;

                        //fino aqui

                        //echo ("Prima planeada * descuento + 27.5: ");echo($prima_planeada);echo("</br>");
                        if ($periodo_pago == 2) {
                            $descuento = 1-0.52;
                        }
                        if ($periodo_pago == 3) {
                            $descuento = 1-0.26;
                        }
                        if ($periodo_pago == 4) {
                            $descuento = 1-0.08875;
                        }
                        //echo ("Prima planeada * factor periodo de pago: ");echo($prima_planeada);echo("</br>");
                    }


                    if ($idaseguradora == 1) {


                        $prima_planeada = ($prima_planeada - ($prima_planeada * $descuento));
                        //echo ("Prima planeada menos descuento: ");echo($prima_planeada);echo("</br>");

                    }



                    $consultaminimosymaximos = $this->Autos_pol_vida->get_consulta_minimosymaximosVida($idaseguradora);
                    foreach ($consultaminimosymaximos as $filas2) {

                        $tipocobertura =  $filas2->cobertura;
                        $minimo_aplicable =   $filas2->minimo;
                        $maximo_aplicable =   $filas2->maximo;
                        $formadepago_limite =  $filas2->formadepago;

                        //Revision de MINIMOS de DEDUCIBLE COLISION
                        //echo ("Aseguradora: "); echo ($idaseguradora); echo (" -- Cobertura: "); echo ($tipocobertura); echo (" -- M&iacute;nimo: "); echo ($minimo_aplicable);  echo (" -- M&aacute;ximo: "); echo ($maximo_aplicable); echo ("</br>");
                        if ($tipocobertura == "EDAD" && ($edad < $minimo_aplicable)) {
                            $asegurable = 0;
                        }
                        if ($tipocobertura == "EDAD" && ($edad > $maximo_aplicable)) {
                            $asegurable = 0;
                        }
                        if ($tipocobertura == "TERMINO" && $termino < $minimo_aplicable) {
                            $asegurable = 0;
                        }
                        if ($tipocobertura == "TERMINO" && $termino > $maximo_aplicable) {
                            $asegurable = 0;
                        }
                        if ($tipocobertura == "PRIMA" && ($prima_planeada < $minimo_aplicable)) {
                            if ($idaseguradora == 3) {
                                if ($formadepago_limite == $formadepago) {
                                    $prima_planeada = $minimo_aplicable;}
                            } else {
                                $prima_planeada = $minimo_aplicable;
                            }
                        }
                        if ($tipocobertura == "COBERTURA" && (($termino + $edad) > $maximo_aplicable)) {
                            $asegurable = 0;
                         //   $datos['informacion_2'][$iteracion]="maximo si 1";

                        }
                        if ($tipocobertura == "SUMAASEGURADA" && (($suma_asegurada_vida) < $minimo_aplicable)) {
                            $asegurable = 0;
                            //$datos['informacion_2'][$iteracion]="minimo si  valor: $minimo_aplicable  suma valor: $suma_asegurada_vida";
                        }
                        if ($tipocobertura == "SUMAASEGURADA" && (($suma_asegurada_vida) > $maximo_aplicable)) {
                            $asegurable = 0;
                            //$datos['informacion_2'][$iteracion]="maximo si 2 valir:$maximo_aplicable suma valor:$suma_asegurada_vida ";
                        }
                    }
                   // $datos['informacion'][$iteracion]=$tipocobertura;



                    if ($asegurable == 0)  {
                        $asegurable_vida = 0;
                        $prima_planeada = 0;
                    }else if ($idaseguradora != 1) {
                        $prima_planeada = ($prima_planeada - ($prima_planeada * $descuento));
                    }


                    $impuestos = $prima_planeada * 0.05;
                    $prima_planeada = ($prima_planeada + ($prima_planeada * 0.05));
                    $prima_vida = $prima_planeada;

                 /* --------------------------------------------------- *
                 * Obtencion de valores para calculo de prima de INCENDIO
                 * --------------------------------------------------- */


                    //CONSULTAS DE FACTORES PARA CALCULO DE PLAN BASICO

                    $consulta1 = $this->Autos_pol_hipotecaria->get_consulta_factores_plan_basico($idaseguradora,$sector,$tipo_bien,$suma_asegurada_incendio);
                    if($consulta1!=0) {
                        foreach ($consulta1 as $filas1) {
                            $valor_basico = $filas1->valor;

                        }}else{

                    }
// MISMA CONSULTA PARA VALOR COMPLETO
                    $consulta2 = $this->Autos_pol_hipotecaria->get_consulta_factores_plan_completo($idaseguradora,$sector,$tipo_bien,$suma_asegurada_incendio);
                    if($consulta2!=0) {
                        foreach ($consulta2 as $filas2) {
                            $valor_completo = $filas2->valor;

                        }}else{

                    }
                    if ($idaseguradora == 2) {
                        if ($tipo_construccion == "Mixto") {$valor_basico = 0.20;$valor_completo = 0.20;}
                    }
                    /* --------------------------------------------------- *
                     * FIN de obtencion de valores
                     * --------------------------------------------------- */


                    // MINIMOSYMAXIMOS
                    $consultaMinimosymaximos = $this->Autos_pol_hipotecaria->get_consulta_factores_min_max($idaseguradora);
                    if($consultaMinimosymaximos!=0) {
                        foreach ($consultaMinimosymaximos as $filaMinimosymaximos) {

                            $validacion_minimo =  $filaMinimosymaximos->minimo;
                            $validacion_maximo =  $filaMinimosymaximos->maximo;

                        }}else{

                    }
                    /* --------------------------------------------------- *
                    * Inicio de populacin de valores
                    * --------------------------------------------------- */
                    $prima_basico_conimpuesto=0;
                    if ($asegurable  == 1){

                        $prima_basico = ($suma_asegurada_incendio * ($valor_basico/100));

                        if ($prima_basico < $validacion_minimo) {$prima_basico = $validacion_minimo;}

                        if ($idaseguradora == 3) {
                            $prima_basico = $prima_basico - ($prima_basico * 0.15);
                        }

                        //Impuesto del 5%
                        $impuesto1 = 0.05;

                        $prima_basico_conimpuesto = ($prima_basico * (1+$impuesto1));

                    } // fin if $asegurable = 1

                    $prima_planeada_con_impuesto = $prima_planeada + $prima_basico_conimpuesto;

                    if ($asegurable_vida == 0) {$prima_planeada = 0; $prima_basico_conimpuesto = 0; $prima_planeada_con_impuesto = 0;}


                    $tabla_resultados[1][$iteracion] = $nombre_aseguradora;
                    $tabla_resultados[2][$iteracion] = $prima_planeada_con_impuesto;
                    $tabla_resultados[3][$iteracion] = $prima_planeada;
                    $tabla_resultados[4][$iteracion] = $prima_basico_conimpuesto;

                    /* --------------------------------------------------- *
                     * FIN de configuraci¬ón de no asegurables
                     * --------------------------------------------------- */

                    $datos['tabla_resultados_aseguradora_id'][$iteracion] = $idaseguradora;
                    $datos['tabla_resultados1_nombre'][$iteracion] = $nombre_aseguradora;
                    $datos['tabla_resultados2_prima'][$iteracion] = $prima_planeada_con_impuesto;
                    $datos['tabla_resultados3_prima'][$iteracion] = $prima_planeada;
                    $datos['tabla_resultados4_prima'][$iteracion] =  $prima_basico_conimpuesto;






            }
                $counter1 = 1;
                while ($counter1 < 4) {
                    $tabla_resultados_ordenados[2][$counter1] = 9999999999;
                    $counter1++;
                }
                $counter1 = 1;
                while ($counter1 < 4) {
                    $counter2 = 1;
                    $ganador = 9999;
                    while ($counter2 < 4) {
                        if ($tabla_resultados[2][$counter2] < $tabla_resultados_ordenados[2][$counter1]) {
                            $tabla_resultados_ordenados[2][$counter1] = $tabla_resultados[2][$counter2];
                            $ganador = $counter2;
                        }
                        $counter2++;
                    }
                    if ($ganador != 9999) {
                        $tabla_resultados_ordenados[1][$counter1] = $tabla_resultados[1][$ganador];
                        $tabla_resultados_ordenados[2][$counter1] = $tabla_resultados[2][$ganador];
                        $tabla_resultados_ordenados[3][$counter1] = $tabla_resultados[3][$ganador];
                        $tabla_resultados_ordenados[4][$counter1] = $tabla_resultados[4][$ganador];
                        $datos['tabla_resultados_ordenados_1'][$counter1] =$tabla_resultados[1][$ganador];
                        $datos['tabla_resultados_ordenados_2'][$counter1] = $tabla_resultados[2][$ganador];
                        $datos['tabla_resultados_ordenados_3'][$counter1] = $tabla_resultados[3][$ganador] ;
                        $datos['tabla_resultados_ordenados_4'][$counter1] = $tabla_resultados[4][$ganador];
                        $tabla_resultados[2][$ganador] = 9999999999;





                    }
                    $counter1++;
                }

                $datos['empresa'] = 0;
                $datos['iteracion'] = 1;
                $datos['y'] =0;



            }
        }
        $this->load->view('autosPolHipo/template', $datos);


    }

    public function validator()
    {
        if(empty($_POST)) {
            redirect("Location: http://www.seguroteconviene.com/"); //Redirige al login.php
        }


        $apellido =$this->input->post('apellido');
        $nombre =$this->input->post('nombre');
        $telefono =$this->input->post('telefono');
        $email =$this->input->post('email');
        $cedula =$this->input->post('cedula');
        $sexo = $this->input->post('sexo');
        $fumador =$this->input->post('fumador');
        $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $suma_asegurada_vida = $this->input->post('suma_asegurada_vida');
        $suma_asegurada_incendio = $this->input->post('suma_asegurada_incendio');
        $termino = $this->input->post('termino');

        $formadepago = $this->input->post('formadepago');
        $sesion_cotizacion = $this->input->post('sesion_cotizacion');
        $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
        $tipo_bien = $this->input->post('tipo_bien');
        $sector = $this->input->post('sector');
        $celular = $this->input->post('celular');
        $periodo_pago = $this->input->post('periodo_pago');
        $company = $this->input->post('company');

        $tipo_construccion = $this->input->post('tipo_construccion');
        $prima_planeada=$this->input->post('prima_planeada');
        $idaseguradora=$this->input->post('idaseguradora');
        $prima_incendio=$this->input->post('prima_incendio');
        $prima_vida=$this->input->post('prima_vida');
        $estado_civil = $this->input->post('estado_civil');
        $uso_auto = "OFICINA";


        $datos['sexo']=$sexo;
        $datos['apellido']=$apellido;
        $datos['nombre']=$nombre;
        $datos['cedula']=$cedula;
        $datos['fecha_nac']=$fecha_nac;
        $datos['email']=$email;
        $datos['telefono']=$telefono;

        $datos['suma_asegurada_vida'] = $suma_asegurada_vida;
        $datos['suma_asegurada_incendio'] = $suma_asegurada_incendio;
        $datos['fumador'] = $fumador;
        $datos['termino'] = $termino;
        $datos['prueba_aseguradora_especifica'] = $prueba_aseguradora_especifica;
        $datos['sesion_cotizacion'] = $sesion_cotizacion;
        $datos['formadepago'] = $formadepago;
        $datos['tipo_bien'] = $tipo_bien;
        $datos['sector'] = $sector;
        $datos['tipo_construccion'] = $tipo_construccion;
        $datos['celular'] = $celular;
        $datos['edad'] = $edad;
        $datos['prima_planeada'] = $prima_planeada;
        $datos['company'] = $company;
        $datos['idaseguradora'] = $idaseguradora;
        $datos['prima_incendio'] = $prima_incendio;
        $datos['prima_vida'] = $prima_vida;
        $datos['estado_civil'] = $estado_civil;


        switch ($periodo_pago) {
            case 1: $mensaje_periodo_pago = "Anual";
                break;
            case 2: $mensaje_periodo_pago = "Semestral";
                break;
            case 3: $mensaje_periodo_pago = "Trimestral";
                break;
            case 4: $mensaje_periodo_pago = "Mensual";
                break;
        }
        $datos['mensaje_periodo_pago'] = $mensaje_periodo_pago;


        $this->load->view('autosPolHipo/validator', $datos);

    }
    public function complete()
    {
        $this->load->library('Mailer');
        $this->load->library('FPDF');
        if(empty($_POST)) {
            redirect("Location: http://www.seguroteconviene.com/"); //Redirige
        }


        $apellido =$this->input->post('apellido');
        $nombre =$this->input->post('nombre');
        $telefono =$this->input->post('telefono');
        $email =$this->input->post('email');
        $cedula =$this->input->post('cedula');
        $sexo = $this->input->post('sexo');
        $fumador =$this->input->post('fumador');
        $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $suma_asegurada_vida = $this->input->post('suma_asegurada_vida');
        $suma_asegurada_incendio = $this->input->post('suma_asegurada_incendio');
        $termino = $this->input->post('termino');

        $formadepago = $this->input->post('formadepago');
        $sesion_cotizacion = $this->input->post('sesion_cotizacion');
        $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
        $tipo_bien = $this->input->post('tipo_bien');
        $sector = $this->input->post('sector');
        $celular = $this->input->post('celular');
        $periodo_pago = $this->input->post('periodo_pago');
        $company = $this->input->post('company');

        $tipo_construccion = $this->input->post('tipo_construccion');
        $prima_planeada=$this->input->post('prima_planeada');
        $idaseguradora=$this->input->post('idaseguradora');
        $prima_incendio=$this->input->post('prima_incendio');
        $prima_vida=$this->input->post('prima_vida');
        $estado_civil = $this->input->post('estado_civil');
        $uso_auto = "OFICINA";


        $datos['sexo']=$sexo;
        $datos['apellido']=$apellido;
        $datos['nombre']=$nombre;
        $datos['cedula']=$cedula;
        $datos['fecha_nac']=$fecha_nac;
        $datos['email']=$email;
        $datos['telefono']=$telefono;

        $datos['suma_asegurada_vida'] = $suma_asegurada_vida;
        $datos['suma_asegurada_incendio'] = $suma_asegurada_incendio;
        $datos['fumador'] = $fumador;
        $datos['termino'] = $termino;
        $datos['prueba_aseguradora_especifica'] = $prueba_aseguradora_especifica;
        $datos['sesion_cotizacion'] = $sesion_cotizacion;
        $datos['formadepago'] = $formadepago;
        $datos['tipo_bien'] = $tipo_bien;
        $datos['sector'] = $sector;
        $datos['tipo_construccion'] = $tipo_construccion;
        $datos['celular'] = $celular;
        $datos['edad'] = $edad;
        $datos['prima_planeada'] = $prima_planeada;
        $datos['company'] = $company;
        $datos['idaseguradora'] = $idaseguradora;
        $datos['prima_incendio'] = $prima_incendio;
        $datos['prima_vida'] = $prima_vida;
        $datos['estado_civil'] = $estado_civil;


        switch ($periodo_pago) {
            case 1: $mensaje_periodo_pago = "Anual";
                break;
            case 2: $mensaje_periodo_pago = "Semestral";
                break;
            case 3: $mensaje_periodo_pago = "Trimestral";
                break;
            case 4: $mensaje_periodo_pago = "Mensual";
                break;
        }
        if($sexo=="F"){
            $sexo="Femenino";
        }

        elseif($sexo=="M"){
            $sexo="Masculino";
        }



        $nombre_completo="$apellido $nombre";


        ini_set('date.timezone','America/Panama');
        $solicitud=date("Y-m-d H:i:s");
        $birthDate = explode("/",$fecha_nac);
        if (strlen(trim($nombre)) == 0){
            header("Location: http://www.seguroteconviene.com/"); //Redirige al login.php
        }


        //Variables aun no definidas
        $plan=3;
        $valor_vida='';
        $poliza_vida='';
        $datos['solicitud'] = $this->Autos_pol_hipotecaria->get_solicitud_nuevo($solicitud,$nombre_completo, $cedula, $telefono, $celular, $email,
            $estado_civil,$edad,$fumador, $valor_vida, $plan, $poliza_vida,$company,$sexo, $termino,$fecha_nac);

        $id_registro = $this->Select_modelo->get_id_solicitud($email);

        foreach ($id_registro as $filas1) {

            $datos['id_registro'] =  $filas1->id;
        }
        $datos['fecha_solicitud']=$solicitud;
        $datos['nombre_completo']=$nombre_completo;

        $datos['mensaje_periodo_pago'] = $mensaje_periodo_pago;

        if($this->input->post('sector')=="CIUDAD"){ $mensaje_sector = "Ciudad de Panamá";}
        if($this->input->post('sector')=="COSTADELESTE"){ $mensaje_sector = "Costa del Este";}
        if($this->input->post('sector')=="INTERIOR"){ $mensaje_sector = "Interior del País";}
        if($this->input->post('bien')=="APTO"){ $mensaje_bien = "Apartamento";}
        else { $mensaje_bien = "Casa";}
        $datos['mensaje_bien']=$mensaje_bien;
        $datos['mensaje_sector']=$mensaje_sector;
        if($this->input->post('fumador')==0){ $mensaje_fumador = "No";} else { $mensaje_fumador = "Si";}
        if($this->input->post('sexo')=="M"){ $mensaje_sexo = "Masculino";} else { $mensaje_sexo = "Femenino";}
        if($this->input->post('periodo_pago')==1){ $mensaje_frecuencia_pago = "Anual";}
        if($this->input->post('periodo_pago')==2){ $mensaje_frecuencia_pago = "Semestral";}
        if($this->input->post('periodo_pago')==3){ $mensaje_frecuencia_pago = "Trimestral";}
        if($this->input->post('periodo_pago')==4){ $mensaje_frecuencia_pago = "Mensual";}


        //Datos para envio de correo
        //info@stc.com
        //info@stc.com
        $datos['AddReplyTo']="deivisjose.d@gmail.com";
        $datos['SetFrom']="deivisjose.d@gmail.com";
        $datos['mensaje_fumador']=$mensaje_fumador;
        $datos['mensaje_sexo']=$mensaje_sexo;
        $datos['mensaje_frecuencia_pago']=$mensaje_frecuencia_pago;




        $this->load->view('autosPolHipo/complete', $datos);

    }

    public function imprimir_terceros(){

        $this->load->library('FPDF');
        $this->load->library('Mailer');
        //Datos para envio de correo
        //info@stc.com
        //info@stc.com
        $datos['AddReplyTo']="deivisjose.d@gmail.com";
        $datos['SetFrom']="deivisjose.d@gmail.com";
        $plan= $this->input->get('plan_tipo');
        $nombre= $this->input->get('company');

        if($this->input->get('sector')=="CIUDAD"){ $mensaje_sector = "Ciudad de Panamá";}
        if($this->input->get('sector')=="COSTADELESTE"){ $mensaje_sector = "Costa del Este";}
        if($this->input->get('sector')=="INTERIOR"){ $mensaje_sector = "Interior del País";}
        if($this->input->get('bien')=="APTO"){ $mensaje_bien = "Apartamento";}
        else { $mensaje_bien = "Casa";}
        $datos['mensaje_bien']=$mensaje_bien;
        $datos['mensaje_sector']=$mensaje_sector;
        if($this->input->get('fumador')==0){ $mensaje_fumador = "No";} else { $mensaje_fumador = "Si";}
        if($this->input->get('sexo')=="M"){ $mensaje_sexo = "Masculino";} else { $mensaje_sexo = "Femenino";}
        if($this->input->get('periodo_pago')==1){ $mensaje_frecuencia_pago = "Anual";}
        if($this->input->get('periodo_pago')==2){ $mensaje_frecuencia_pago = "Semestral";}
        if($this->input->get('periodo_pago')==3){ $mensaje_frecuencia_pago = "Trimestral";}
        if($this->input->get('periodo_pago')==4){ $mensaje_frecuencia_pago = "Mensual";}

        $datos['mensaje_fumador']=$mensaje_fumador;
        $datos['mensaje_sexo']=$mensaje_sexo;
        $datos['mensaje_frecuencia_pago']=$mensaje_frecuencia_pago;

        /*
                $nombre_aseguradora = $this->Autos_danio->get_aseguradoras_nombre($nombre);
                foreach ($nombre_aseguradora as $filas1) {

                    $idaseguradora=$filas1->idaseguradoras;
                }
                $counter_coberturas = 0;
                $plan_aseguradora = $this->Autos_danio->get_plan_aseguradora_autos_tercero($plan,$idaseguradora);
                if($plan_aseguradora!=0) {

                    foreach ($plan_aseguradora as $filas1) {
                        $cobertura_especial[$counter_coberturas] =  $filas1->cobertura;
                        $datos['cobertura_especial'][$counter_coberturas]=$filas1->cobertura;
                        $counter_coberturas = $counter_coberturas + 1;


                    }

                }
        $datos['counter_coberturas']=$counter_coberturas;*/

        $this->load->view('autosPolHipo/imprimir_terceros_pdf',$datos);
    }




}
