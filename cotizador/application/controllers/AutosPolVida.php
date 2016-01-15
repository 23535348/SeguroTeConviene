<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AutosPolVida extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Autos_pol_vida');
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
                $suma_asegurada = $this->input->post('suma_asegurada');
                $termino = $this->input->post('termino');
                $periodo_pago = $this->input->post('periodo_pago');
                $formadepago = $this->input->post('formadepago');
                $sesion_cotizacion = $this->input->post('sesion_cotizacion');
                $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');


                $uso_auto = "OFICINA";

                $datos['edad']=$edad;
                $datos['sexo']=$sexo;

                $datos['apellido']=$apellido;
                $datos['nombre']=$nombre;
                $datos['cedula']=$cedula;
                $datos['fecha_nac']=$fecha_nac;
                $datos['email']=$email;
                $datos['telefono']=$telefono;
                $datos['periodo_pago'] = $periodo_pago;
                $datos['suma_asegurada'] = $suma_asegurada;
                $datos['fumador'] = $fumador;
                $datos['termino'] = $termino;
                $datos['prueba_aseguradora_especifica'] = $prueba_aseguradora_especifica;
                $datos['sesion_cotizacion'] = $sesion_cotizacion;
                $datos['formadepago'] = $formadepago;


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
                switch ($formadepago) {
                    case "TC": $formadepagomensaje = "Tarjeta de cr&eacute;dito";
                        break;
                    case "ACH": $formadepagomensaje = "ACH";
                        break;
                    case "Voluntario": $formadepagomensaje = "Voluntario";
                        break;
                }
                $datos['mensaje_periodo_pago'] =$mensaje_periodo_pago;
                $datos['formadepagomensaje'] =$formadepagomensaje;
                $iteracion=0;
                $aseguradoras = $this->Autos_pol_vida->get_consulta_aseguradoras();
                $datos['aseguradoras'] = $aseguradoras;


                foreach ($aseguradoras as $filas1) {

                    $iteracion = $iteracion + 1;
                    $asegurable = 1;
                    $mensaje = "";
                    $nombre_aseguradora = $filas1->nombre;
                    $idaseguradora = $filas1->idaseguradoras;
                    $factor = 0;
                   // $factor[0] = 0;
                    $descuento = 0;
                    $prima_planeada = 0;
                    $mensaje = "";


                    /* --------------------------------------------------- *
                    * Inicio de configuración de no asegurables
                    * --------------------------------------------------- */


                    if (($sexo == 'M') && ($fumador == 0)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_M_NF_factores($suma_asegurada,$idaseguradora,$edad,$termino); }
                    if (($sexo == 'M') && ($fumador == 1)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_M_F_factores($suma_asegurada,$idaseguradora,$edad,$termino); }
                    if (($sexo == 'F') && ($fumador == 0)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_F_NF_factores($suma_asegurada,$idaseguradora,$edad,$termino); }
                    if (($sexo == 'F') && ($fumador == 1)) {
                        $factor_consulta = $this->Autos_pol_vida->get_consulta_vida_F_F_factores($suma_asegurada,$idaseguradora,$edad,$termino); }

                   /* $resultado = mysql_query($consulta, $enlace);
                    $factor= mysql_fetch_array($resultado);
                    mysql_free_result($resultado);*/


                    if($factor_consulta!=0) {
                    foreach ($factor_consulta as $filas_factor) {
                        $detalle_factor= $filas_factor->factor;
                    }}else{
                        $detalle_factor=0;
                    }

                    if ($detalle_factor <= 0) {$asegurable = 0;}

                    $prima_planeada = $suma_asegurada * $detalle_factor;

                    if ($idaseguradora == 5) {
                        $prima_planeada = $suma_asegurada * ($detalle_factor/1000);

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
                            $prima_planeada = $suma_asegurada/1000 * $detalle_factor * 1;
                        }
                        if ($periodo_pago == 2) {
                            $prima_planeada = $suma_asegurada/1000 * $detalle_factor * 0.505;
                        }
                        if ($periodo_pago == 3) {
                            $prima_planeada = $suma_asegurada/1000 * $detalle_factor * 0.25375;
                        }
                        if ($periodo_pago == 4) {
                            $prima_planeada = $suma_asegurada/1000 * $detalle_factor * 0.085;
                        }
                    }

                    if ($idaseguradora == 3) {
                        $prima_planeada = $suma_asegurada * ($detalle_factor/1000);
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
                        $prima_planeada = (($suma_asegurada * ($detalle_factor/1000))+25);
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

                        //echo("Banistmo: </br>");
                        //echo("Factor: ");
                        //echo ($factor[0]);
                        //echo("</br> Prima planeada: ");
                        //echo ($prima_planeada);
                    }

                    if ($idaseguradora == 1) {
                        $prima_planeada = $prima_planeada / 0.775;
                        $consultaIS_2 = $this->Autos_pol_vida->get_consulta_factor_vida_recargos($edad,$sexo,$fumador);
                        if($consultaIS_2!=0) {
                            foreach ($consultaIS_2 as $filas_factor2) {
                                $factorIS_2 = $filas_factor2->factor;
                            }}else{
                            $factorIS_2=0;
                        }
                        $prima_planeada = $prima_planeada * $factorIS_2;

                        $consultaIS_3 = $this->Autos_pol_vida->get_consulta_factor_vida_recargos_2($termino);
                        if($consultaIS_3!=0) {
                            foreach ($consultaIS_3 as $filas_factor3) {
                                $factorIS_3 = $filas_factor3->factor;
                            }}else{
                            $factorIS_2=0;
                        }
                        $prima_planeada = $prima_planeada * $factorIS_3;
                        //mysql_free_result($resultadoIS_2);
                        //mysql_free_result($resultadoIS_3);
                        if ($suma_asegurada > 0) {
                            $descuento = 1-0.780;
                        }
                        if ($suma_asegurada >= 75000) {
                            $descuento = 1-0.855;
                        }
                        if ($suma_asegurada >= 500000) {
                            $descuento = 1-0.855;
                        }
                        if ($suma_asegurada >= 1000000) {
                            $descuento = 1-0.800;
                        }
                        $prima_planeada = ($prima_planeada - ($prima_planeada * $descuento));
                        $prima_planeada = ($prima_planeada) + 27.5;
                        $descuento = 0;
                        if ($periodo_pago == 2) {
                            $descuento = 1-0.52;
                        }
                        if ($periodo_pago == 3) {
                            $descuento = 1-0.26;
                        }
                        if ($periodo_pago == 4) {
                            $descuento = 1-0.08875;
                        }
                    }

                    if ($idaseguradora == 1) {
                        $prima_planeada = ($prima_planeada - ($prima_planeada * $descuento));
                    }

                    $consultaminimosymaximos = $this->Autos_pol_vida->get_consulta_minimosymaximosVida($idaseguradora);
                    foreach ($consultaminimosymaximos as $filas2) {
                        $tipocobertura =  $filas2->cobertura;
                        $minimo_aplicable =   $filas2->minimo;
                        $maximo_aplicable =   $filas2->maximo;
                        $formadepago_limite =  $filas2->formadepago;
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
                            if ($idaseguradora == 3) {if ($formadepago_limite == $formadepago) {$prima_planeada = $minimo_aplicable;}} else {$prima_planeada = $minimo_aplicable;}
                        }
                        if ($tipocobertura == "COBERTURA" && (($termino + $edad) > $maximo_aplicable)) {
                            $asegurable = 0;
                        }
                        if ($tipocobertura == "SUMAASEGURADA" && (($suma_asegurada) < $minimo_aplicable)) {
                            $asegurable = 0;
                        }
                        if ($tipocobertura == "SUMAASEGURADA" && (($suma_asegurada) > $maximo_aplicable)) {
                            $asegurable = 0;
                        }
                    }

                    if ($asegurable == 0)  {
                        $prima_planeada = 0;
                    }else if ($idaseguradora != 1) {
                        $prima_planeada = ($prima_planeada - ($prima_planeada * $descuento));}

                    $impuestos = $prima_planeada * 0.05;

                    $tabla_resultados[1][$iteracion] = $nombre_aseguradora;
                    $tabla_resultados[2][$iteracion] = $prima_planeada;

                    $datos['tabla_resultados_aseguradora'][$iteracion] = $idaseguradora;
                    $datos['tabla_resultados1'][$iteracion] = $nombre_aseguradora;
                    $datos['tabla_resultados2'][$iteracion] = $prima_planeada;

                    /* --------------------------------------------------- *
                     * FIN de configuración de no asegurables
                     * --------------------------------------------------- */
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
                        $tabla_resultados[2][$ganador] = 9999999999;
                    }
                    $counter1++;
                }







                $datos['empresa'] = 0;
                $datos['iteracion'] = 0;
                $datos['y'] =0;

            }
        }
        $this->load->view('autosPolVida/template', $datos);


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
        $suma_asegurada = $this->input->post('suma_asegurada');
        $termino = $this->input->post('termino');
        $periodo_pago = $this->input->post('periodo_pago');
        $formadepago = $this->input->post('formadepago');
        $sesion_cotizacion = $this->input->post('sesion_cotizacion');
        $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
        $poliza = $this->input->post('poliza');
        $company = $this->input->post('company');
        $idaseguradora =$this->input->post('idaseguradora');

        $uso_auto = "OFICINA";

        $datos['edad']=$edad;
        $datos['sexo']=$sexo;

        $datos['apellido']=$apellido;
        $datos['nombre']=$nombre;
        $datos['cedula']=$cedula;
        $datos['fecha_nac']=$fecha_nac;
        $datos['email']=$email;
        $datos['telefono']=$telefono;
        $datos['periodo_pago'] = $periodo_pago;
        $datos['suma_asegurada'] = $suma_asegurada;
        $datos['fumador'] = $fumador;
        $datos['termino'] = $termino;
        $datos['prueba_aseguradora_especifica'] = $prueba_aseguradora_especifica;
        $datos['sesion_cotizacion'] = $sesion_cotizacion;
        $datos['formadepago'] = $formadepago;
        $datos['company'] = $company;
        $datos['poliza'] = $poliza;
        $datos['idaseguradora']=$idaseguradora;

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
        switch ($formadepago) {
            case "TC": $formadepagomensaje = "Tarjeta de cr&eacute;dito";
                break;
            case "ACH": $formadepagomensaje = "ACH";
                break;
            case "Voluntario": $formadepagomensaje = "Voluntario";
                break;
        }
        $datos['mensaje_periodo_pago'] =$mensaje_periodo_pago;
        $datos['formadepagomensaje'] =$formadepagomensaje;


        $this->load->view('autosPolVida/validator', $datos);

    }
    public function complete()
    {
        if(empty($_POST)) {
            redirect("Location: http://www.seguroteconviene.com/"); //Redirige
        }

        $datos['precio_venta'] = $this->input->post('precio_venta');
        $datos['precio_ventaForm']=number_format($datos['precio_venta'], "2", ".", ",");
        $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $estado_civil = $this->input->post('estado_civil');
        $sexo = $this->input->post('sexo');
        $marca = $this->input->post('marca');
        $anio_auto =$this->input->post('anio_auto');
        $tipo_auto =$this->input->post('tipo_auto');
        $estado_auto =$this->input->post('estado_auto');
        $modelo =$this->input->post('modelo');
        $apellido =$this->input->post('apellido');
        $nombre =$this->input->post('nombre');
        $cedula =$this->input->post('cedula');
        $email =$this->input->post('email');
        $telefono =$this->input->post('telefono');
        $dcomprensivo =$this->input->post('dcomprensivo');
        $dcolision =$this->input->post('dcolision');
        $plan =$this->input->post('plan');
        $company =$this->input->post('company');
        $poliza =$this->input->post('poliza');
        $celular =$this->input->post('celular');
        $idaseguradora =$this->input->post('idaseguradora');
        $monto = $this->input->post('monto');

        $planF=$plan;
        $uso_auto = "OFICINA";
        $historial_manejo = $this->input->post('historial');
        $datos['edad']=$edad;
        $datos['estado_civil']=$estado_civil;
        $datos['sexo']=$sexo;
        $datos['marca']=$marca;
        $datos['modelo']=$modelo;
        $datos['anio_auto']=$anio_auto;
        $datos['tipo_auto']=$tipo_auto;
        $datos['estado_auto']=$estado_auto;
        $datos['historial_manejo']=$historial_manejo;
        $datos['apellido']=$apellido;
        $datos['nombre']=$nombre;
        $datos['cedula']=$cedula;
        $datos['fecha_nac']=$fecha_nac;
        $datos['email']=$email;
        $datos['telefono']=$telefono;
        $datos['dcomprensivo']=$dcomprensivo;
        $datos['dcolision']=$dcolision;
        $datos['plan']=$plan;
        $datos['company']=$company;
        $datos['poliza']=$poliza;
        $datos['celular']=$celular;
        $datos['idaseguradora']=$idaseguradora;
        $datos['monto']=$monto;




        $descuentoUNPAGO = 0;
        $descuentoACH = 0;
        $descuentoTC = 0.05;
        switch ($company){
            case "Internacional de Seguros":
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "Generali":
                $descuentoUNPAGO = 0.05;
                $descuentoTC = 0.03;
                $descuentoACH = 0.05;
                break;
            case "ASSA":
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "Banesco":
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.03;
                break;
            case "Acerta":
                $descuentoUNPAGO = 0.07;
                $descuentoACH = 0.05;
                break;
            case "Banistmo":
                $descuentoUNPAGO = 0.1;
                $descuentoACH = 0.05;
                break;
            case "SURA":
                $descuentoUNPAGO = 0.05;
                $descuentoTC = 0.04;
                $descuentoACH = 0.04;
                break;
        }

        //calculos finales

        $datos['comprensivo']=number_format($dcomprensivo, "2", ".", ",");
        $datos['colision']=number_format($dcolision, "2", ".", ",");
        $datos['pago_contado']=number_format($poliza-($poliza*$descuentoUNPAGO), "2", ".", ",");
        $datos['pago_credito_hcm']=number_format($poliza-($poliza*$descuentoACH), "2", ".", ",");






        $this->load->view('autosDanio/complete', $datos);

    }

    public function llena_modelos()
    {
        $options = "";
        if ($this->input->post('item1_select_1')) {
            $marca = $this->input->post('item1_select_1');

            $marca_id = $this->Select_modelo->get_marcas_id($marca);

            foreach ($marca_id as $filaR) {
                $id_marcas = $filaR->id;
            }
            $modelos = $this->Select_modelo->get_modelos($id_marcas);

            foreach ($modelos as $fila) {
                ?>
                <option value="<?= $fila->modelo ?>"><?= $fila->modelo ?></option>
                <?
            }
        }


    }


    public function seguro_complete()
    {
        $this->load->library('FPDF');


        $apellido =$this->input->post('apellido');
        $nombre =$this->input->post('nombre');
        $telefono =$this->input->post('telefono');
        $email =$this->input->post('email');
        $cedula =$this->input->post('cedula');
        $sexo = $this->input->post('sexo');
        $fumador =$this->input->post('fumador');
        $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $suma_asegurada = $this->input->post('suma_asegurada');
        $termino = $this->input->post('termino');
        $periodo_pago = $this->input->post('periodo_pago');
        $formadepago = $this->input->post('formadepago');
        $sesion_cotizacion = $this->input->post('sesion_cotizacion');
        $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
        $poliza = $this->input->post('poliza');
        $company = $this->input->post('company');
        $idaseguradora =$this->input->post('idaseguradora');

        $uso_auto = "OFICINA";

        $datos['edad']=$edad;
        $datos['sexo']=$sexo;

        $datos['apellido']=$apellido;
        $datos['nombre']=$nombre;
        $datos['cedula']=$cedula;
        $datos['fecha_nac']=$fecha_nac;
        $datos['email']=$email;
        $datos['telefono']=$telefono;
        $datos['periodo_pago'] = $periodo_pago;
        $datos['suma_asegurada'] = $suma_asegurada;
        $datos['fumador'] = $fumador;
        $datos['termino'] = $termino;
        $datos['prueba_aseguradora_especifica'] = $prueba_aseguradora_especifica;
        $datos['sesion_cotizacion'] = $sesion_cotizacion;
        $datos['formadepago'] = $formadepago;
        $datos['company'] = $company;
        $datos['poliza'] = $poliza;
        $datos['idaseguradora']=$idaseguradora;

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
        switch ($formadepago) {
            case "TC": $formadepagomensaje = "Tarjeta de cr&eacute;dito";
                break;
            case "ACH": $formadepagomensaje = "ACH";
                break;
            case "Voluntario": $formadepagomensaje = "Voluntario";
                break;
        }
        $datos['mensaje_periodo_pago'] =$mensaje_periodo_pago;
        $datos['formadepagomensaje'] =$formadepagomensaje;


        $nombre_completo="$apellido $nombre";


        ini_set('date.timezone','America/Panama');
        $solicitud=date("Y-m-d H:i:s");
        $birthDate = explode("/",$fecha_nac);
        if (strlen(trim($nombre)) == 0){
            header("Location: http://www.seguroteconviene.com/"); //Redirige al login.php
        }


        //Variables aun no definidas
        $poliza_terceros=0;
        $cobertura_terceros=0;
        $rango_terceros=0;
        $valor_auto=0;

        $plan='';
        $celular='';
        $plan_tipo='';
        $estado_civil='';
        $tipo_auto='';
        $marca='';
        $modelo='';
        $anio_auto='';
        $estado_auto='';
        $historial_manejo='';
        $datos['solicitud'] = $this->Select_modelo->get_solicitud_nuevo($solicitud,$nombre_completo, $cedula, $telefono, $celular, $email,
            $poliza_terceros, $cobertura_terceros, $rango_terceros, $company, $plan,$plan_tipo, $sexo, $fecha_nac, $estado_civil,
            $edad, $tipo_auto, $marca, $modelo, $anio_auto, $estado_auto, $historial_manejo, $valor_auto);

        $id_registro = $this->Select_modelo->get_id_solicitud($email);

        foreach ($id_registro as $filas1) {

            $datos['id_registro'] =  $filas1->id;
        }
        $datos['fecha_solicitud']=$solicitud;
        $datos['plan_tipo'] =  $plan_tipo;


        // $datos['solicitud']=1;
        $descuentoUNPAGO = 0;
        $descuentoACH = 0;
        $descuentoTC = 0.05;
        $idaseguradora = 0;


        $pago_voluntario = ($poliza);
        $pago_UNPAGO = ($poliza - ($poliza*$descuentoUNPAGO));
        $pago_ACH = ($poliza - ($poliza*$descuentoACH));
        $datos['pago_voluntario']=$pago_voluntario;
        $datos['pago_UNPAGO']=$pago_UNPAGO;
        $datos['pago_ACH']=$pago_ACH;



        $counter_coberturas = 0;
        $plan_aseguradora = $this->Select_modelo->get_plan_aseguradora($plan,$idaseguradora);
        if($plan_aseguradora!=0) {

            foreach ($plan_aseguradora as $filas1) {
                $cobertura_especial[$counter_coberturas] =  $filas1->cobertura;
                $counter_coberturas = $counter_coberturas + 1;

            }
        }




        $this->load->view('autosPolVida/complete', $datos);






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

        if($this->input->get('fumador')=="0"){ $datos['mensaje_fumador'] = "No";} else { $datos['mensaje_fumador'] = "Si";}
        if($this->input->get('sexo')=="M"){ $datos['sexo'] = "Masculino";} else { $datos['sexo'] = "Femenino";}
        if($this->input->get('periodo_pago')==1){$datos['mensaje_frecuencia_pago'] = "Anual";}
        if($this->input->get('periodo_pago')==2){ $datos['mensaje_frecuencia_pago'] = "Semestral";}
        if($this->input->get('periodo_pago')==3){ $datos['mensaje_frecuencia_pago'] = "Trimestral";}
        if($this->input->get('periodo_pago')==4){ $datos['mensaje_frecuencia_pago'] = "Mensual";}
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

        $this->load->view('autosPolVida/imprimir_terceros',$datos);
    }




}
