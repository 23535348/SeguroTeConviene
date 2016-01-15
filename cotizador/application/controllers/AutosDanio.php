<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AutosDanio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Autos_danio');
        $this->load->model('Select_modelo');
        // $this->load->model('Usuario_modelo');
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

        if (date("m") < $mes || (date("m") == $mes && date("d") < $DayDiff)) {
            $YearDiff--;
        }
        return $YearDiff;
    }




    public function min_numero($num, $places = 1, $type = 'metric') {
        if ($type == 'metric') {
            $k = 'K'; $m = 'M';
        } else {
            $k = ' thousand'; $m = ' million';
        }
        if ($num < 1000) {
            $num_format = number_format($num);
        } else if ($num < 1000000) {
            $num_format = number_format($num / 1000, $places) . $k;
        } else {
            $num_format = number_format($num / 1000000, $places) . $m;
        }

        return $num_format;
    }
    public function form()
    {

// obtenemos el array de los selects y lo preparamos para enviar
        $datos['marcas'] = $this->Select_modelo->get_marcas();

        if ($this->input->post('brandon')) {
            if ($this->input->post('brandon') == 1) {
                $datos['brandon'] = $this->input->post('brandon');

                $datos['precio_venta'] = $this->input->post('precio_venta');
                $datos['precio_ventaForm']=number_format($datos['precio_venta'], "2", ".", ",");
                $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
                $fecha_nac = $this->input->post('fecha_nac');
                $estado_civil = $this->input->post('estado_civil');
                $sexo = $this->input->post('sexo');
                $marca = $this->input->post('item1_select_1');
                $anio_auto =$this->input->post('anio_auto');
                $tipo_auto =$this->input->post('tipo_auto');
                $estado_auto =$this->input->post('estado_auto');
                $modelo =$this->input->post('ittem2_select_2');
                $apellido =$this->input->post('apellido');
                $nombre =$this->input->post('nombre');
                $cedula =$this->input->post('cedula');
                $email =$this->input->post('email');
                $telefono =$this->input->post('telefono');
                $celular =$this->input->post('celular');


                $uso_auto = "OFICINA";
                $historial_manejo = $this->input->post('historial_manejo');
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
                $datos['celular']=$celular;




                $precio_venta =$this->input->post('precio_venta');
                $sesion_cotizacion = $this->input->post('sesion_cotizacion');
                $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
                $iteracion=0;
                $aseguradoras = $this->Select_modelo->get_analisis_aseguradora();
                foreach ($aseguradoras as $filas1) {
                    // $id_marcas = $filas1->id;

                    $iteracion = $iteracion + 1;
                    $idaseguradora =  $filas1->idaseguradoras;
                    $nombre_aseguradora =  $filas1->nombre;
                    $precio_actual = $datos['precio_venta'];
                    $prima_basico = 0;
                    $prima_ejecutivo = 0;
                    $prima_premium = 0;
                    $calculo_comprensivo = 0;
                    $calculo_comprensivo_basico = 0;
                    $calculo_comprensivo_ejecutivo = 0;
                    $calculo_comprensivo_premium = 0;
                    $calculo_colision = 0;
                    $calculo_colision_basico = 0;
                    $calculo_colision_ejecutivo = 0;
                    $calculo_colision_premium = 0;
                    $comprensivo_aplicable = 0;
                    $colision_aplicable = 0;
                    if ($nombre_aseguradora == "HSBC") {($nombre_aseguradora = "Banistmo");}
                    /* --------------------------------------------------- *
                     * Inicio de configuraci&oacute;n de no asegurables
                     * --------------------------------------------------- */

                    $no_asegurables = $this->Select_modelo->get_analisis_noasegurable($idaseguradora);
                    if($no_asegurables!=0) {
                        $concordancia = 0;
                        $asegurable = 1;
                        foreach ($no_asegurables as $filas2) {

                            $tipo_recargos = explode(';', $filas2->nombre);
                            $comparacion = explode(';', $filas2->comparacion);
                            $signo = explode(';', $filas2->signo);
                            $concordancia = 0;
                            $atributos = $filas2->atributo;
                            $valor = $filas2->valor;

                            for ($i = 1; $i <= $atributos; $i++) {
                                $condicion = $tipo_recargos[$i - 1];
                                $comparacion_condicion = $comparacion[$i - 1];
                                $comparacion_signo = $signo[$i - 1];
                                switch ($condicion) {
                                    case "MARCA":
                                        if (strtoupper($marca) == strtoupper($comparacion_condicion)) {
                                            $concordancia = $concordancia + 1;
                                        }
                                        break;
                                    case "MODELO":
                                        if (strtoupper($modelo) == strtoupper($comparacion_condicion)) {
                                            $concordancia = $concordancia + 1;
                                        }
                                        break;
                                    case "TIPO":
                                        if (strtoupper($tipo_auto) == strtoupper($comparacion_condicion)) {
                                            $concordancia = $concordancia + 1;
                                        }
                                        break;
                                    case "VALOR":
                                        switch ($comparacion_signo) {
                                            case "<":
                                                if ($precio_actual < $comparacion_condicion) {
                                                    $concordancia = $concordancia + 1;
                                                }
                                                break;
                                            case ">":
                                                if ($precio_actual > $comparacion_condicion) {
                                                    $concordancia = $concordancia + 1;
                                                }
                                                break;
                                            case "=":
                                                if ($precio_actual == $comparacion_condicion) {
                                                    $concordancia = $concordancia + 1;
                                                }
                                                break;
                                        }
                                        break;
                                }
                            }
                            if ($concordancia == $atributos) {
                                $asegurable = $valor;
                            }
                        }
                    }
                    /* --------------------------------------------------- *
                     * FIN de configuración de no asegurables
                     * --------------------------------------------------- */
                    $precio_actual = $precio_venta;


                    /* --------------------------------------------------- *
                    * Inicio de populaci—n de valores de DEDUCIBLES
                    * --------------------------------------------------- */

                    $diferencia_anio = date("Y") - $anio_auto;
                    if ($diferencia_anio < 0 ){
                        $diferencia_anio = 0;
                    }


                    $deducibles = $this->Select_modelo->get_valores_deducibles($idaseguradora,$diferencia_anio);
                    if($deducibles!=0) {
                        foreach ($deducibles as $filas3) {

                            $comprensivo_aplicable = ($filas3->tarifa / 100);
                            $deducible_comprensivo = ($filas3->deducible / 100);
                            $comprensivo_aplicable_ori = ($filas3->tarifa / 100);
                            $deducible_comprensivo_ori = ($filas3->deducible / 100);
                        }
                    }else{
                        $comprensivo_aplicable = 0;
                        $deducible_comprensivo = 0;
                        $comprensivo_aplicable_ori = 0;
                        $deducible_comprensivo_ori = 0;
                    }



                    $deducibles_colicion = $this->Select_modelo->get_valores_deducibles_colicion($idaseguradora,$diferencia_anio);
                    if($deducibles_colicion!=0) {
                        foreach ($deducibles_colicion as $filas4) {
                            $colision_aplicable = ($filas4->tarifa / 100);
                            $deducible_colision = ($filas4->deducible / 100);
                            $colision_aplicable_ori = ($filas4->tarifa / 100);
                            $deducible_colision_ori = ($filas4->deducible / 100);
                        }
                    }else{
                        $comprensivo_aplicable = $comprensivo_aplicable+ 0;
                        $deducible_colision = 0;
                        $comprensivo_aplicable_ori = $comprensivo_aplicable_ori+0;
                        $deducible_comprensivo_ori = $deducible_comprensivo_ori+ 0;
                    }


                    $deducibles_cobertura = $this->Select_modelo->get_valores_deducibles_cobertura($idaseguradora,$diferencia_anio);
                    if($deducibles_cobertura!=0) {
                        foreach ($deducibles_cobertura as $filas5) {
                            $tipo_cobertura = $filas5->tipo_cobertura;
                            $tipo_valor = $filas5->tipo_valor;
                            $fila_valor = $filas5->valor;
                            if ($tipo_cobertura == "LC") {
                                switch ($tipo_valor) {
                                    case "B":
                                        $prima_basico = $prima_basico + $fila_valor;
                                        $lc_basico = $fila_valor;
                                        break;
                                    case "E":
                                        $prima_ejecutivo = $prima_ejecutivo + $fila_valor;
                                        $lc_ejecutivo = $fila_valor;
                                        break;
                                    case "P":
                                        $prima_premium = $prima_premium + $fila_valor;
                                        $lc_premium = $fila_valor;
                                        break;
                                }
                            }
                            if ($tipo_cobertura == "DPA") {
                                switch ($tipo_valor) {
                                    case "B":
                                        $prima_basico = $prima_basico + $fila_valor;
                                        $dpa_basico = $fila_valor;
                                        break;
                                    case "E":
                                        $prima_ejecutivo = $prima_ejecutivo + $fila_valor;
                                        $dpa_ejecutivo = $fila_valor;
                                        break;
                                    case "P":
                                        $prima_premium = $prima_premium + $fila_valor;
                                        $dpa_premium = $fila_valor;
                                        break;
                                }
                            }
                            if ($tipo_cobertura == "GM") {
                                switch ($tipo_valor) {
                                    case "B":
                                        $prima_basico = $prima_basico + $fila_valor;
                                        $gm_basico = $fila_valor;
                                        break;
                                    case "E":
                                        $prima_ejecutivo = $prima_ejecutivo + $fila_valor;
                                        $gm_ejecutivo = $fila_valor;
                                        break;
                                    case "P":
                                        $prima_premium = $prima_premium + $fila_valor;
                                        $gm_premium = $fila_valor;
                                        break;
                                }
                            }

                        }
                    }
//--------------------------- CALCULOS DE COMPRENSIVO ------------------------------
                    $calculo_comprensivo = $precio_actual*$comprensivo_aplicable;
                    $calculo_comprensivo_basico = $precio_actual*$comprensivo_aplicable;
                    $calculo_comprensivo_ejecutivo = $precio_actual*$comprensivo_aplicable;
                    $calculo_comprensivo_premium = $precio_actual*$comprensivo_aplicable;

                    //Revisi&oacute;n de m&iacute;nimo de COMPRENSIVO
                    if ($calculo_comprensivo <= 150) {
                        $calculo_comprensivo = 150;
                    }



                    //Calculo del DEDUCIBLE COMPRENSIVO
                    $calculo_deducible_comprensivo = $precio_actual*$deducible_comprensivo;
                    $calculo_deducible_comprensivo_basico = $precio_actual*$deducible_comprensivo;
                    $calculo_deducible_comprensivo_ejecutivo = $precio_actual*$deducible_comprensivo;
                    $calculo_deducible_comprensivo_premium = $precio_actual*$deducible_comprensivo;


                    //--------------------------- CALCULOS DE COLISION ------------------------------
                    $calculo_colision = $precio_actual* $colision_aplicable;
                    $calculo_colision_basico = $precio_actual* $colision_aplicable;
                    $calculo_colision_ejecutivo = $precio_actual* $colision_aplicable;
                    $calculo_colision_premium = $precio_actual* $colision_aplicable;

                    //Recargo por MARCA Y MODELO para PRIMA DE COLISION en caso de haberlo reccolision

                    $orden = 0;
                    $concordancia = 0;
                    $valor = 0;
                    $valor_recargo = 0;
                    $recargo_prima_reccolision= $this->Select_modelo->get_recargo_reccolision($idaseguradora);
                    if($recargo_prima_reccolision!=0){
                        foreach ($recargo_prima_reccolision as $filas6) {

                            $tipo_recargos =  explode(';',$filas6->nombre);
                            $comparacion =  explode(';',$filas6->comparacion);
                            $signo =  explode(';',$filas6->signo);
                            $concordancia = 0;
                            $atributos =  $filas6->atributo;
                            $valor =  $filas6->valor;

                            for ($i = 1; $i<=$atributos; $i++){
                                $condicion = $tipo_recargos[$i-1];
                                $comparacion_condicion = $comparacion[$i-1];

                                switch ($condicion) {
                                    case "MARCA":
                                        if (strtoupper($marca) == strtoupper($comparacion_condicion)) {  $concordancia = $concordancia + 1;  }
                                        break;
                                    case "MODELO":
                                        if (strtoupper($modelo) == strtoupper($comparacion_condicion)) { $concordancia = $concordancia + 1; }
                                        break;
                                }
                            }

                            if ($concordancia == $atributos){

                                $valor_recargo = $valor_recargo + $valor;
                            } else {
                                $valor_recargo = $valor_recargo;
                            }
                        }
                        //Aplicacion de la Recargo por MARCA Y MODELO para PRIMA DE COLISION en caso de haberlo
                        $recargo = $valor_recargo;
                        $calculo_colision_basico = ($calculo_colision_basico*$recargo)+ $calculo_colision_basico;
                        $calculo_colision_ejecutivo = ($calculo_colision_ejecutivo*$recargo)+ $calculo_colision_ejecutivo;
                        $calculo_colision_premium = ($calculo_colision_premium*$recargo)+ $calculo_colision_premium;
                    }





                    //Recargo por MARCA Y MODELO para PRIMA DE COLISION en caso de haberlo reccomprensivo
                    $orden = 0;
                    $concordancia = 0;
                    $valor = 0;
                    $valor_recargo = 0;
                    $recargo_prima_reccomprensivo= $this->Select_modelo->get_recargo_reccomprensivo($idaseguradora,$diferencia_anio);
                    if($recargo_prima_reccomprensivo!=0) {
                        foreach ($recargo_prima_reccomprensivo as $filas7) {

                            $tipo_recargos = explode(';', $filas7->nombre);
                            $comparacion = explode(';', $filas7->comparacion);
                            $signo = explode(';', $filas7->signo);
                            $concordancia = 0;
                            $atributos = $filas7->atributo;
                            $valor = $filas7->valor;

                            for ($i = 1; $i <= $atributos; $i++) {
                                $condicion = $tipo_recargos[$i - 1];
                                $comparacion_condicion = $comparacion[$i - 1];

                                switch ($condicion) {
                                    case "MARCA":
                                        if (strtoupper($marca) == strtoupper($comparacion_condicion)) {
                                            $concordancia = $concordancia + 1;
                                        }
                                        break;
                                    case "MODELO":
                                        if (strtoupper($modelo) == strtoupper($comparacion_condicion)) {
                                            $concordancia = $concordancia + 1;
                                        }
                                        break;
                                }
                            }

                            if ($concordancia == $atributos) {

                                $valor_recargo = $valor_recargo + $valor;
                            } else {
                                $valor_recargo = $valor_recargo;
                            }

                        }

                        //Aplicacion de la Recargo por MARCA Y MODELO para PRIMA DE COLISION en caso de haberlo reccomprensivo
                        $recargo = $valor_recargo;
                        $calculo_comprensivo_basico = ($calculo_comprensivo_basico * $recargo) + $calculo_comprensivo_basico;
                        $calculo_comprensivo_ejecutivo = ($calculo_comprensivo_ejecutivo * $recargo) + $calculo_comprensivo_ejecutivo;
                        $calculo_comprensivo_premium = ($calculo_comprensivo_premium * $recargo) + $calculo_comprensivo_premium;

                        //Acumulaci&oacute;n de COLISION en la PRIMA
                        $prima_basico = $prima_basico + ($calculo_colision_basico);
                        $prima_ejecutivo = $prima_ejecutivo + ($calculo_colision_ejecutivo);
                        $prima_premium = $prima_premium + ($calculo_colision_premium);

                        //Acumulaci&oacute;n del comprensivo en la PRIMA
                        $prima_basico = $prima_basico + ($calculo_comprensivo_basico);
                        $prima_ejecutivo = $prima_ejecutivo + ($calculo_comprensivo_ejecutivo);
                        $prima_premium = $prima_premium + ($calculo_comprensivo_premium);
                    }

                    //Recargo por MARCA Y MODELO para DEDUCIBLE DE COLISION en caso de haberlo Reddeducol

                    $orden = 0;
                    $concordancia = 0;
                    $valor = 0;
                    $valor_recargo = 0;
                    $recargo_prima_recdeducol= $this->Select_modelo->get_recargo_recdeducol($idaseguradora);
                    if($recargo_prima_recdeducol!=0) {
                        foreach ($recargo_prima_recdeducol as $filas8) {

                            $tipo_recargos = explode(';', $filas8->nombre);
                            $comparacion = explode(';', $filas8->comparacion);
                            $signo = explode(';', $filas8->signo);
                            $concordancia = 0;
                            $atributos = $filas8->atributo;
                            $valor = $filas8->valor;

                            for ($i = 1; $i <= $atributos; $i++) {
                                $condicion = $tipo_recargos[$i - 1];
                                $comparacion_condicion = $comparacion[$i - 1];

                                switch ($condicion) {
                                    case "MARCA":
                                        if (strtoupper($marca) == strtoupper($comparacion_condicion)) {
                                            $concordancia = $concordancia + 1;
                                        }
                                        break;
                                    case "MODELO":
                                        if (strtoupper($modelo) == strtoupper($comparacion_condicion)) {
                                            $concordancia = $concordancia + 1;
                                        }
                                        break;
                                }
                            }

                            if ($concordancia == $atributos) {
                                $valor_recargo = $valor_recargo + $valor;
                            } else {
                                $valor_recargo = $valor_recargo;
                            }

                        }
                        // RECARGO PARA TODOS LOS AUTOS EN CASO DE NO HABER RECARGO POR MARCA Y MODELO
                        if ($valor_recargo == 0 && ($idaseguradora == 1)) {

                            $valor_recargo = 0.25;
                        }
                        if ($valor_recargo == 0 && ($idaseguradora == 2)) {

                            $valor_recargo = 0.25;
                        }


                        if ($valor_recargo == 0 && ($idaseguradora == 6)) {
                            $valor_recargo = 0.25;
                            if ($edad <= 23) {
                                $valor_recargo = 0.50;
                            }
                        }


                        //Aplicacion de la Recargo por MARCA Y MODELO para DEDUCIBLE DE COLISION en caso de haberlo
                        $recargo = $valor_recargo;
                        $calculo_deducible_colision = $precio_actual * $deducible_colision;
                        $calculo_deducible_colision_basico = ($calculo_deducible_colision * $recargo) + $calculo_deducible_colision;
                        $calculo_deducible_colision_ejecutivo = ($calculo_deducible_colision * $recargo) + $calculo_deducible_colision;
                        $calculo_deducible_colision_premium = ($calculo_deducible_colision * $recargo) + $calculo_deducible_colision;

                    }

                    /* --------------------------------------------------- *
                     *  FIN de populaci—n de valores de DEDUCIBLES
                     * --------------------------------------------------- */

                    /* --------------------------------------------------- *
                     * Inicio Configuraciones especiales por ASEGURADORA
                     * --------------------------------------------------- */

                    // DESCUENTOS ESPECIALES

                    $descuento1 = 0;

                    $descuento_especial= $this->Select_modelo->get_descuento_especial($idaseguradora);
                    if($descuento_especial!=0) {
                        foreach ($descuento_especial as $filas9) {

                            $descuento1 =  $filas9->descuento_especial;
                        }
                    }
                    // INICIO CONFIGURACION DE DESCUENTO ESPECIAL POR MARCA Y MODELO
                    if ($idaseguradora == 5 && $descuento1 == 0) {
                        $concordancia = 0;
                        $descuento_especial = 0;
                        $descuento_especial_anterior = 0;
                        $descuento_especial_mm = $this->Select_modelo->get_descuento_especial_mm($idaseguradora);
                        if ($descuento_especial_mm != 0) {
                            foreach ($descuento_especial_mm as $filas10) {
                                $tipo_recargos = explode(';', $filas10->nombre);
                                $comparacion = explode(';', $filas10->comparacion);
                                $signo = explode(';', $filas10->signo);
                                $concordancia = 0;
                                $atributos = $filas10->atributo;
                                $valor = $filas10->valor;

                                for ($i = 1; $i <= $atributos; $i++) {
                                    $condicion = $tipo_recargos[$i - 1];
                                    $comparacion_condicion = $comparacion[$i - 1];
                                    $comparacion_signo = $signo[$i - 1];
                                    switch ($condicion) {
                                        case "MARCA":
                                            if (strtoupper($marca) == strtoupper($comparacion_condicion)) {
                                                $concordancia = $concordancia + 1;
                                            }
                                            break;
                                        case "MODELO":
                                            if (strtoupper($modelo) == strtoupper($comparacion_condicion)) {
                                                $concordancia = $concordancia + 1;
                                            }
                                            break;
                                        case "TIPO":
                                            switch ($comparacion_signo) {
                                                case "=":
                                                    if (strtoupper($tipo_auto) == strtoupper($comparacion_condicion)) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case "<>":
                                                    if (strtoupper($tipo_auto) != strtoupper($comparacion_condicion)) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                            }

                                        case "ESTADO":
                                            if (strtoupper($estado_auto) == strtoupper($comparacion_condicion)) {
                                                $concordancia = $concordancia + 1;
                                            }
                                            break;
                                        case "ANIO":
                                            $diferencia_anio = date(Y) - $anio_auto;
                                            if ($diferencia_anio < 0) {
                                                $diferencia_anio = 0;
                                            }

                                            switch ($comparacion_signo) {
                                                case "<":
                                                    if ($diferencia_anio < $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case ">":
                                                    if ($diferencia_anio > $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case "=":
                                                    if ($diferencia_anio == $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                            }
                                            break;
                                        case "VALOR":
                                            switch ($comparacion_signo) {
                                                case "<":
                                                    if ($precio_actual < $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case ">":
                                                    if ($precio_actual > $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case "=":
                                                    if ($precio_actual == $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                            }
                                            break;
                                    }
                                }
                                if ($concordancia == $atributos) {
                                    $descuento_especial_anterior = $descuento_especial;

                                    $descuento_especial = $valor;

                                    //if ($idaseguradora == $idaseguradora_analizada) {echo ("Entro y asigno un descuento. de Tipo: "); echo($tipo_recargos[0]); echo (" , "); echo($tipo_recargos[1]); echo (" y "); echo ("Comparacion: "); echo ($comparacion[0]);  echo (" , "); echo ($comparacion[1]); echo ("</br>");}

                                    if ($idaseguradora == 4 && $condicion == 'ANIO') {
                                        $descuento_banesco_anio = $valor;
                                    }
                                    if ($idaseguradora == 4 && $condicion == 'VALOR') {
                                        $descuento_banesco_sa = $valor;
                                    }

                                    if ($idaseguradora == 6) {
                                        if ($descuento_especial_anterior == 0) {
                                            $descuento_especial = $valor;
                                        } else {
                                            if ($descuento_especial_anterior < $descuento_especial) {
                                                $descuento_especial = $descuento_especial_anterior;
                                            }
                                        }

                                    }
                                }
                            }

                            if ($descuento_especial > $descuento1) {
                                $descuento1 = $descuento_especial;
                            }

                            if ($idaseguradora == 3 && $descuento_especial > 0) {
                                $descuento1 = $descuento_especial;
                            }

                            if ($idaseguradora == 4) {
                                $descuento_banesco_total = (($descuento_banesco_anio * 0.2) + ($descuento_banesco_sa * 0.4) + (0.6 * 0.4));
                                $descuento1 = $descuento_banesco_total;
                            }


                            // FIN CONFIGURACION DE DESCUENTOS ESPECIALES

                        }

                        // CALCULOS PARTICULARES PARA ACERTA

                        $descuento_particular_acerta = $this->Select_modelo->get_particulares_acerta();
                        if ($descuento_particular_acerta != 0) {

                            foreach ($descuento_particular_acerta as $filas11) {

                                $tipo = $filas11->tipo;
                                $atributos = $filas11->atributo;
                                $comparacion = explode(';', $filas11->comparacion);
                                $valor = $filas11->valor;
                                $signo = explode(';', $filas11->signo);
                                $concordancia = 0;
                                $tipo_recargos = explode(';', $filas11->comparacion);
                                $historial_valor = 0;

                                switch ($tipo) {

                                    case "ANTIGUEDADAUTO":

                                        for ($i = 1; $i <= $atributos; $i++) {
                                            $comparacion_signo = $signo[$i - 1];
                                            $comparacion_condicion = $comparacion[$i - 1];

                                            switch ($comparacion_signo) {
                                                case "<":
                                                    if ($diferencia_anio < $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case ">":
                                                    if ($diferencia_anio > $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case "=":
                                                    if ($diferencia_anio = $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                            }

                                        }
                                        if ($concordancia == $atributos) {
                                            $factor_antiguedadauto = $valor;
                                        }
                                        break;

                                    case "SEXO":
                                        for ($i = 1; $i <= $atributos; $i++) {
                                            if (strtoupper($tipo_recargos[$i - 1]) == strtoupper($sexo)) {
                                                $factor_sexo = $valor;
                                            }
                                        }
                                        break;
                                    case "ESTADOCIVIL":

                                        for ($i = 1; $i <= $atributos; $i++) {
                                            if (strtoupper($tipo_recargos[$i - 1]) == strtoupper($estado_civil)) {
                                                $factor_estado_civil = $valor;
                                            }
                                        }
                                        break;
                                    case "VALORVEHICULO":

                                        for ($i = 1; $i <= $atributos; $i++) {
                                            $comparacion_signo = $signo[$i - 1];
                                            $comparacion_condicion = $comparacion[$i - 1];

                                            switch ($comparacion_signo) {
                                                case "<":
                                                    if ($precio_actual < $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case ">":
                                                    if ($precio_actual > $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case "=":
                                                    if ($precio_actual = $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                            }

                                        }
                                        if ($concordancia == $atributos) {
                                            $factor_valor_vehiculo = $valor;
                                        }
                                        break;
                                    case "HISTORIAL":
                                        for ($i = 1; $i <= $atributos; $i++) {
                                            if (strtoupper($tipo_recargos[$i - 1]) == strtoupper($historial_valor)) {
                                                $factor_historial = $valor;
                                            }
                                        }
                                        break;
                                    case "USOVEHICULO":
                                        for ($i = 1; $i <= $atributos; $i++) {
                                            $comparacion_signo = $signo[$i - 1];
                                            $comparacion_condicion = $comparacion[$i - 1];

                                            switch ($comparacion_signo) {
                                                case "<":
                                                    if ($diferencia_anio < $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case ">":
                                                    if ($diferencia_anio > $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case "=":
                                                    if ($diferencia_anio = $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                            }

                                        }
                                        if ($concordancia == $atributos) {
                                            $factor_uso = $valor;
                                        }
                                        break;

                                    case "EDAD":

                                        for ($i = 1; $i <= $atributos; $i++) {
                                            $comparacion_signo = $signo[$i - 1];
                                            $comparacion_condicion = $comparacion[$i - 1];
                                            switch ($comparacion_signo) {
                                                case "<":
                                                    if ($edad < $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case ">":
                                                    if ($edad > $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                                case "=":
                                                    if ($edad = $comparacion_condicion) {
                                                        $concordancia = $concordancia + 1;
                                                    }
                                                    break;
                                            }
                                        }
                                        if ($concordancia == $atributos) {
                                            $factor_edad = $valor;
                                        }
                                        break;
                                }
                            }


                        }


                        $factor_total = $factor_antiguedadauto * $factor_sexo * $factor_estado_civil * $factor_valor_vehiculo * $factor_historial * $factor_uso * $factor_edad;

                        $recargo_total = $factor_total - 1;
                        $factor_total = 1 - $factor_total;

                        if ($diferencia_anio < 3) {
                            if ($factor_total > 0.625) {
                                $factor_total = 0.625;
                            }
                        } else {
                            if ($factor_total > 0.5795) {
                                $factor_total = 0.5795;
                            }
                        }
                        if ($factor_total < 0.3) {
                            $factor_total = 0.3;
                        }

                        $factor_total = round($factor_total, 2);

                        // Calculo de los descuentos del factor para ACERTA

                        $lc_basico = $lc_basico - ($lc_basico * $factor_total);
                        $lc_ejecutivo = $lc_ejecutivo - ($lc_ejecutivo * $factor_total);
                        $lc_premium = $lc_premium - ($lc_premium * $factor_total);

                        $dpa_basico = $dpa_basico - ($dpa_basico * $factor_total);
                        $dpa_ejecutivo = $dpa_ejecutivo - ($dpa_ejecutivo * $factor_total);
                        $dpa_premium = $dpa_premium - ($dpa_premium * $factor_total);

                        $gm_basico = $gm_basico - ($gm_basico * $factor_total);
                        $gm_ejecutivo = $gm_ejecutivo - ($gm_ejecutivo * $factor_total);
                        $gm_premium = $gm_premium - ($gm_premium * $factor_total);

                        $prima_basico = $lc_basico + $dpa_basico + $gm_basico;
                        $prima_ejecutivo = $lc_ejecutivo + $dpa_ejecutivo + $gm_ejecutivo;
                        $prima_premium = $lc_premium + $dpa_premium + $gm_premium;

                        $calculo_colision_basico = $calculo_colision_basico - ($calculo_colision_basico * $factor_total);
                        $calculo_colision_ejecutivo = $calculo_colision_ejecutivo - ($calculo_colision_ejecutivo * $factor_total);
                        $calculo_colision_premium = $calculo_colision_premium - ($calculo_colision_premium * $factor_total);

                        $calculo_comprensivo_basico = $calculo_comprensivo_basico - ($calculo_comprensivo_basico * $factor_total);
                        $calculo_comprensivo_ejecutivo = $calculo_comprensivo_ejecutivo - ($calculo_comprensivo_ejecutivo * $factor_total);
                        $calculo_comprensivo_premium = $calculo_comprensivo_premium - ($calculo_comprensivo_premium * $factor_total);

                        //Acumulacion de COLISION
                        $prima_basico = $prima_basico + ($calculo_colision_basico);
                        $prima_ejecutivo = $prima_ejecutivo + ($calculo_colision_ejecutivo);
                        $prima_premium = $prima_premium + ($calculo_colision_premium);

                        //Acumulacion de COMPRENSIVO
                        $prima_basico = $prima_basico + ($calculo_comprensivo_basico);
                        $prima_ejecutivo = $prima_ejecutivo + ($calculo_comprensivo_ejecutivo);
                        $prima_premium = $prima_premium + ($calculo_comprensivo_premium);


                    }
                    //REVISION DE MINIMOS DE COBERTURAS Y DEDUCIBLES
                    $cobertura_deducible= $this->Select_modelo->get_cobertura_deducible($idaseguradora);
                    if($cobertura_deducible!=0){
                        foreach ($cobertura_deducible as $filas12) {
                            $tipocobertura = $filas12->cobertura;
                            $minimo_aplicable =$filas12->minimo;
                            $maximo_aplicable = $filas12->maximo;

                            //Revision de MINIMOS de DEDUCIBLE COLISION

                            if ($tipocobertura == "SUMAASEGURADA" && $precio_actual <= $minimo_aplicable) {
                                $asegurable = 0;
                            }
                            if ($tipocobertura == "SUMAASEGURADA" && $precio_actual > $maximo_aplicable) {
                                $asegurable = 0;
                            }
                            $diferencia_anio = date("Y") - $anio_auto;
                            if ($diferencia_anio < 0 ){$diferencia_anio = 0;}
                            if ($tipocobertura == "ANTIGUEDADAUTO" && $diferencia_anio < $minimo_aplicable) {
                                $asegurable = 0;
                            }
                            if ($tipocobertura == "ANTIGUEDADAUTO" && $diferencia_anio > $maximo_aplicable) {
                                $asegurable = 0;
                            }
                            if ($tipocobertura == "DEDUCIBLECOMPRENSIVO" && $calculo_deducible_comprensivo_basico <= $minimo_aplicable) {
                                $calculo_deducible_comprensivo_basico = $minimo_aplicable;
                                $calculo_deducible_comprensivo_ejecutivo = $minimo_aplicable;
                                $calculo_deducible_comprensivo_premium = $minimo_aplicable;
                            }
                            if ($tipocobertura == "DEDUCIBLECOMPRENSIVO" && $calculo_deducible_comprensivo_basico > $maximo_aplicable) {
                                $calculo_deducible_comprensivo_basico = $maximo_aplicable;
                                $calculo_deducible_comprensivo_ejecutivo = $maximo_aplicable;
                                $calculo_deducible_comprensivo_premium = $maximo_aplicable;
                            }
                            if ($tipocobertura == "DEDUCIBLECOLISION" && $calculo_deducible_colision_basico <= $minimo_aplicable) {
                                $calculo_deducible_colision_basico = $minimo_aplicable;
                                $calculo_deducible_colision_ejecutivo = $minimo_aplicable;
                                $calculo_deducible_colision_premium = $minimo_aplicable;
                            }
                            if ($tipocobertura == "DEDUCIBLECOLISION" && $calculo_deducible_colision_basico > $maximo_aplicable) {
                                $calculo_deducible_colision_basico = $maximo_aplicable;
                                $calculo_deducible_colision_ejecutivo = $maximo_aplicable;
                                $calculo_deducible_colision_premium = $maximo_aplicable;
                            }
                        }
                    }


                    //AREA DE APLICACION DE DESCUENTOS
                    $descuento1_basico = ($prima_basico * $descuento1);
                    $descuento1_ejecutivo = ($prima_ejecutivo * $descuento1);
                    $descuento1_premium = ($prima_premium * $descuento1);


                    $prima_basico_descuento = $prima_basico - ($descuento1_basico);
                    $prima_ejecutivo_descuento = $prima_ejecutivo - ($descuento1_ejecutivo);
                    $prima_premium_descuento = $prima_premium - ($descuento1_premium);

                    //ADICION DE ENDOSOS

                    $adicion_endosos= $this->Select_modelo->get_adicion_endosos($idaseguradora);
                    if($adicion_endosos!=0){
                        foreach ($adicion_endosos as $filas13) {
                            $endoso = $filas13->endoso;
                            if ($idaseguradora == 7) {$endoso_sura = $endoso;}
                            $prima_basico_descuento = $prima_basico_descuento + $endoso;
                            $prima_ejecutivo_descuento = $prima_ejecutivo_descuento + $endoso;
                            $prima_premium_descuento = $prima_premium_descuento + $endoso;

                        }


                    }
                    //APLICACION DE IMPUESTOS
                    $impuesto1 = 0.06;

                    $prima_basico_impuesto = ($prima_basico_descuento * $impuesto1);
                    $prima_ejecutivo_impuesto =  ($prima_ejecutivo_descuento * $impuesto1);
                    $prima_premium_impuesto = ($prima_premium_descuento * $impuesto1);

                    //TOTALIZACION DE LA PRIMA CON IMPUESTO
                    $prima_basico_total = $prima_basico_descuento + ($prima_basico_impuesto);
                    $prima_ejecutivo_total = $prima_ejecutivo_descuento + ($prima_ejecutivo_impuesto);
                    $prima_premium_total = $prima_premium_descuento + ($prima_premium_impuesto);

                    if ($idaseguradora == 1) {
                        $calculo_deducible_colision_basico = round($calculo_deducible_colision_basico);
                        $calculo_deducible_colision_ejecutivo = round($calculo_deducible_colision_ejecutivo);
                        $calculo_deducible_colision_premium = round($calculo_deducible_colision_premium);
                    }

                    if ($idaseguradora == 5){

                        $calculo_deducible_colision_basico = $calculo_deducible_colision_basico + ($calculo_deducible_colision_basico * 0.25);
                        $calculo_deducible_colision_ejecutivo = $calculo_deducible_colision_ejecutivo + ($calculo_deducible_colision_ejecutivo * 0.25);
                        $calculo_deducible_colision_premium = $calculo_deducible_colision_premium + ($calculo_deducible_colision_premium * 0.25);

                        $calculo_deducible_colision_basico = round($calculo_deducible_colision_basico);
                        $calculo_deducible_colision_ejecutivo = round($calculo_deducible_colision_ejecutivo);
                        $calculo_deducible_colision_premium = round($calculo_deducible_colision_premium);


                    }

                    if ($idaseguradora == 6) {
                        $calculo_comprensivo_basico = round($calculo_comprensivo_basico);
                        $calculo_comprensivo_ejecutivo = round($calculo_comprensivo_ejecutivo);
                        $calculo_comprensivo_premium = round($calculo_comprensivo_premium);

                        $calculo_deducible_comprensivo_basico = round($calculo_deducible_comprensivo_basico);
                        $calculo_deducible_comprensivo_ejecutivo = round($calculo_deducible_comprensivo_ejecutivo);
                        $calculo_deducible_comprensivo_premium = round($calculo_deducible_comprensivo_premium);

                        $calculo_colision_basico = round($calculo_colision_basico);
                        $calculo_colision_ejecutivo = round($calculo_colision_ejecutivo);
                        $calculo_colision_premium = round($calculo_colision_premium);

                        $calculo_deducible_colision_basico = round($calculo_deducible_colision_basico);
                        $calculo_deducible_colision_ejecutivo = round($calculo_deducible_colision_ejecutivo);
                        $calculo_deducible_colision_premium = round($calculo_deducible_colision_premium);
                    }


                    if ($idaseguradora == 7) {


                        $tarifas_sura= $this->Select_modelo->get_tarifas_sura($precio_venta,$diferencia_anio);
                        if($tarifas_sura!=0){
                            foreach ($tarifas_sura as $filas14) {
                                $prima_basico_total = $filas14->prima_basico;
                                $prima_ejecutivo_total = $filas14->prima_ejecutivo;
                                $prima_premium_total = $filas14->prima_premium;
                                $calculo_comprensivo_basico = $filas14->tasa_basico*$precio_venta;
                                $calculo_comprensivo_ejecutivo =$filas14->tasa_ejecutivo*$precio_venta;
                                $calculo_comprensivo_premium = $filas14->tasa_premium*$precio_venta;
                                $calculo_colision_basico = $filas14->tasa_basico*$precio_venta;
                                $calculo_colision_ejecutivo = $filas14->tasa_ejecutivo*$precio_venta;
                                $calculo_colision_premium = $filas14->tasa_premium*$precio_venta;
                                $prima_basico_total = $prima_basico_total + $calculo_comprensivo_basico + $endoso_sura;
                                $prima_ejecutivo_total = $prima_ejecutivo_total+ $calculo_comprensivo_ejecutivo + $endoso_sura;
                                $prima_premium_total = $prima_premium_total + $calculo_comprensivo_premium + $endoso_sura;
                            }
                        }

                        $recargos_sura= $this->Select_modelo->get_recargos_sura($idaseguradora);
                        if($recargos_sura!=0){
                            foreach ($recargos_sura as $filas15) {
                                if (strtoupper($modelo) == $filas15->comparacion) {
                                    $prima_basico_total = $prima_basico_total * $filas15->valor;
                                    $prima_ejecutivo_total = $prima_ejecutivo_total * $filas15->valor;
                                    $prima_premium_total = $prima_premium_total * $filas15->valor;
                                }
                            }
                        }
                        $calculo_deducible_colision_basico = $calculo_deducible_colision_basico * 1.25;
                        $calculo_deducible_colision_ejecutivo = $calculo_deducible_colision_ejecutivo * 1.25;
                        $calculo_deducible_colision_premium = $calculo_deducible_colision_premium * 1.25;



                    }

                    if ($asegurable  == 0) {
                        $prima_basico_total = 0;
                        $prima_ejecutivo_total = 0;
                        $prima_premium_total = 0;
                    }
                    /* --------------------------------------------------- *
                    * ORDEN DE ARREGLO DE RESULTADOS
                    * 1: Nombre aseguradora
                    * 2: Prima b&aacute;sico total
                    * 3: Prima ejecutivo total
                    * 4: Prima premium total
                    * 5: deducible colisi&oacute;n b&aacute;sico
                    * 6: deducible colisi&oacute;n ejecutivo
                    * 7: deducible colisi&oacute;n premium
                    * 8: deducible comprensivo b&aacute;sico
                    * 9: deducible comprensivo ejecutivo
                    * 10: deducible comprensivo premium
                    * --------------------------------------------------- */



                    $tabla_resultados[1][$iteracion] = $nombre_aseguradora;
                    $tabla_resultados[2][$iteracion] = $prima_basico_total;
                    $tabla_resultados[3][$iteracion] = $prima_ejecutivo_total;
                    $tabla_resultados[4][$iteracion] = $prima_premium_total;
                    $tabla_resultados[5][$iteracion] = $calculo_deducible_colision_basico;
                    $tabla_resultados[6][$iteracion] = $calculo_deducible_colision_ejecutivo;
                    $tabla_resultados[7][$iteracion] = $calculo_deducible_colision_premium;
                    $tabla_resultados[8][$iteracion] = $calculo_deducible_comprensivo_basico;
                    $tabla_resultados[9][$iteracion] = $calculo_deducible_comprensivo_ejecutivo;
                    $tabla_resultados[10][$iteracion] = $calculo_deducible_comprensivo_premium;
                    $datos['r0'][$iteracion] = $idaseguradora;
                    $datos['r1'][$iteracion] = $nombre_aseguradora;
                    $datos['r2'][$iteracion] = $prima_basico_total;
                    $datos['r3'][$iteracion] = $prima_ejecutivo_total;
                    $datos['r4'][$iteracion] = $prima_premium_total;
                    $datos['r5'][$iteracion] = $calculo_deducible_colision_basico;
                    $datos['r6'][$iteracion] = $calculo_deducible_colision_ejecutivo;
                    $datos['r7'][$iteracion] = $calculo_deducible_colision_premium;
                    $datos['r8'][$iteracion] = $calculo_deducible_comprensivo_basico;
                    $datos['r9'][$iteracion] = $calculo_deducible_comprensivo_ejecutivo;
                    $datos['r10'][$iteracion] = $calculo_deducible_comprensivo_premium;
                    $datos['r11'][$iteracion] =$calculo_comprensivo_ejecutivo;
                    $datos['r12'][$iteracion] =$calculo_comprensivo_basico;
                    $datos['r13'][$iteracion] =$calculo_colision_basico;
                    $datos['r14'][$iteracion] = $calculo_colision_ejecutivo;
                    $datos['r15'][$iteracion] = $calculo_colision_premium;
                    $datos['r16'][$iteracion] = $calculo_comprensivo_premium;
                    $datos['r17'][$iteracion]= $this->Select_modelo->get_coberturas_especiales_autos_completo($idaseguradora);
                    $datos['r18'][$iteracion]= $this->Select_modelo->get_coberturas_especiales_autos_completo_b($idaseguradora);
                    $datos['r19'][$iteracion]= $this->Select_modelo->get_coberturas_especiales_autos_completo_c($idaseguradora);

                }


                $counter1 = 1;
                while ($counter1 < 5) {
                    $tabla_resultados_ordenados[2][$counter1] = 9999999999;
                    $counter1++;
                }
                $counter1 = 1;
                while ($counter1 < 5) {
                    $counter2 = 1;
                    $ganador = 9999;
                    while ($counter2 < 5) {
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
                        $tabla_resultados_ordenados[5][$counter1] = $tabla_resultados[5][$ganador];
                        $tabla_resultados_ordenados[6][$counter1] = $tabla_resultados[6][$ganador];
                        $tabla_resultados_ordenados[7][$counter1] = $tabla_resultados[7][$ganador];
                        $tabla_resultados_ordenados[8][$counter1] = $tabla_resultados[8][$ganador];
                        $tabla_resultados_ordenados[9][$counter1] = $tabla_resultados[9][$ganador];
                        $tabla_resultados_ordenados[10][$counter1] = $tabla_resultados[10][$ganador];
                        $tabla_resultados[2][$ganador] = 9999999999;


                        $datos['r1_O'][$counter1] = $tabla_resultados[1][$ganador];
                        $datos['r2_O'][$counter1] = $tabla_resultados[2][$ganador];
                        $datos['r3_O'][$counter1] = $tabla_resultados[3][$ganador];
                        $datos['r4_O'][$counter1] = $tabla_resultados[4][$ganador];
                        $datos['r5_O'][$counter1] = $tabla_resultados[5][$ganador];
                        $datos['r6_O'][$counter1] = $tabla_resultados[6][$ganador];
                        $datos['r7_O'][$counter1] = $tabla_resultados[7][$ganador];
                        $datos['r8_O'][$counter1] = $tabla_resultados[8][$ganador];
                        $datos['r9_O'][$counter1] = $tabla_resultados[9][$ganador];
                        $datos['r10_O'][$counter1] = $tabla_resultados[10][$ganador];

                        //  $datos['r2'][$ganador] = 9999999999;


                    }
                    $counter1++;
                }
                $datos['empresa'] = 0;
                $datos['iteracion'] = 1;
                $datos['y'] =0;

                $datos['basico_1'] = $this->min_numero(10000.00);
                $datos['basico_2'] = $this->min_numero(20000.00);
                $datos['basico_3'] = $this->min_numero(10000.00);
                $datos['basico_4'] = $this->min_numero(2000.00);
                $datos['basico_5'] = $this->min_numero(10000.00);
                $datos['ejecutivo_1'] = $this->min_numero(25000.00);
                $datos['ejecutivo_2'] = $this->min_numero(50000.00);
                $datos['ejecutivo_3'] = $this->min_numero(25000.00);
                $datos['ejecutivo_4'] = $this->min_numero(5000.00);
                $datos['ejecutivo_5'] = $this->min_numero(25000.00);
                $datos['premium_1'] = $this->min_numero(50000.00);
                $datos['premium_2'] = $this->min_numero(100000.00);
                $datos['premium_3'] = $this->min_numero(50000.00);
                $datos['premium_4'] = $this->min_numero(10000.00);
                $datos['premium_5'] = $this->min_numero(50000.00);



            }
        }
        $this->load->view('autosDanio/template', $datos);


    }

    public function Cotizador_d() {


        $fecha_nac = $this->input->post('fecha_nac');
        $estado_civil = $this->input->post('estado_civil');
        $sexo = $this->input->post('sexo');
        $marca = $this->input->post('item1_select_1');
        $anio_auto =$this->input->post('anio_auto');
        $tipo_auto =$this->input->post('tipo_auto');
        $estado_auto =$this->input->post('estado_auto');
        $modelo =$this->input->post('ittem2_select_2');
        $apellido =$this->input->post('apellido');
        $nombre =$this->input->post('nombre');
        $cedula =$this->input->post('cedula');
        $email =$this->input->post('email');
        $telefono =$this->input->post('telefono');
        $celular =$this->input->post('celular');
        $historial_manejo = $this->input->post('historial_manejo');
        $monto = $this->input->post('monto');


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
        $datos['celular']=$celular;
        $datos['monto']=$monto;

        $autos_terceros= $this->Autos_danio->get_analisis_autos_terceros();
        $aseguradoras= $this->Autos_danio->get_aseguradoras();
        $datos['autos_terceros']=$autos_terceros;
        $datos['aseguradoras']=$aseguradoras;

        $iteracion=0;
        foreach ($aseguradoras as $filas2) {
            $iteracion = $iteracion + 1;
            $datos['r17'][$iteracion]= $this->Autos_danio->get_coberturas_especiales_autos_tercero($filas2->idaseguradoras);
            $datos['r18'][$iteracion]= $this->Autos_danio->get_coberturas_especiales_autos_tercero_b($filas2->idaseguradoras);
            $datos['r19'][$iteracion]= $this->Autos_danio->get_coberturas_especiales_autos_tercero_c($filas2->idaseguradoras);

        }
        $iteracion=0;
        foreach ($autos_terceros as $filas2) {
            $iteracion = $iteracion + 1;
            $datos['aseguradoras_consult'][$iteracion]= $this->Autos_danio->get_aseguradoras_consult($filas2->idaseguradora);
        }
        $datos['iteracion'] = 0;
        $datos['basico_1'] = $this->min_numero(10000.00);
        $datos['basico_2'] = $this->min_numero(20000.00);
        $datos['basico_3'] = $this->min_numero(10000.00);
        $datos['basico_4'] = $this->min_numero(2000.00);
        $datos['basico_5'] = $this->min_numero(10000.00);
        $datos['ejecutivo_1'] = $this->min_numero(25000.00);
        $datos['ejecutivo_2'] = $this->min_numero(50000.00);
        $datos['ejecutivo_3'] = $this->min_numero(25000.00);
        $datos['ejecutivo_4'] = $this->min_numero(5000.00);
        $datos['ejecutivo_5'] = $this->min_numero(25000.00);
        $datos['premium_1'] = $this->min_numero(50000.00);
        $datos['premium_2'] = $this->min_numero(100000.00);
        $datos['premium_3'] = $this->min_numero(50000.00);
        $datos['premium_4'] = $this->min_numero(10000.00);
        $datos['premium_5'] = $this->min_numero(50000.00);

        $this->load->view('autosDanio/validator', $datos);

    }
    public function validator()
    {
        if(empty($_POST)) {
            redirect("Location: http://www.seguroteconviene.com/"); //Redirige al login.php
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


        $planes = $this->Select_modelo->get_plan($plan);
        foreach ($planes as $filas_planes) {
            switch ($filas_planes->cobertura){
                case "LC":
                    if ($filas_planes->detalle == "por persona") {$LC_porpersona = $filas_planes->monto;} else {$LC_poraccidente = $filas_planes->monto;}
                    break;
                case "DPA":
                    $DPA_poraccidente = $filas_planes->monto;
                    break;
                case "GM":
                    if ($filas_planes->detalle == "por persona") {$GM_porpersona = $filas_planes->monto;} else {$GM_poraccidente = $filas_planes->monto;}
                    break;
            }

        }

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
        $datos['lc_porpersona']=number_format($LC_porpersona, "2", ".", ",");
        $datos['lc_poraccidente']=number_format($LC_poraccidente, "2", ".", ",");
        $datos['dpa_poraccidente']=number_format($DPA_poraccidente, "2", ".", ",");
        $datos['gm_porpersona']=number_format($GM_porpersona, "2", ".", ",");
        $datos['gm_poraccidente']=number_format($GM_poraccidente, "2", ".", ",");
        $datos['comprensivo']=number_format($dcomprensivo, "2", ".", ",");
        $datos['colision']=number_format($dcolision, "2", ".", ",");
        $datos['pago_contado']=number_format($poliza-($poliza*$descuentoUNPAGO), "2", ".", ",");
        $datos['pago_credito_hcm']=number_format($poliza-($poliza*$descuentoACH), "2", ".", ",");




        $this->load->view('autos/validator', $datos);

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


    public function autos_complete()
    {
        $this->load->library('FPDF');

        $precio_venta = $this->input->post('precio_venta');
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
        $monto =$this->input->post('monto');

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
        $datos['precio_venta'] = $precio_venta;
        $datos['idaseguradora']=$idaseguradora;
        $datos['monto']=$monto;

        $nombre_completo="$apellido $nombre";


        ini_set('date.timezone','America/Panama');
        $solicitud=date("Y-m-d H:i:s");
        $birthDate = explode("/",$fecha_nac);
        if (strlen(trim($nombre)) == 0){
            header("Location: http://www.seguroteconviene.com/"); //Redirige al login.php
        }

        switch ($planF) {
            case "Plan de Seguro Obligatorio":
                $datos['mensaje_lc'] = "$5,000 por persona, $10,000 por accidente";
                $datos['mensaje_dpa'] = "$5,000 por accidente";
                $datos['mensaje_gm'] = "No aplica.";
                $plan_tipo = 1;
                break;
            case "Plan Intermedio":
                $datos['mensaje_lc'] = "$10,000 por persona, $20,000 por accidente";
                $datos['mensaje_dpa'] = "$10,000 por accidente";
                $datos['mensaje_gm'] = "$2,000 por persona, $10,000 por accidente";
                $plan_tipo = 2;
                break;
            case "Plan Deluxe":
                $datos['mensaje_lc'] = "$25,000 por persona, $50,000 por accidente";
                $datos['mensaje_dpa'] = "$25,000 por accidente";
                $datos['mensaje_gm'] = "$5,000 por persona, $25,000 por accidente";
                $plan_tipo = 3;
                break;
        }

        //Variables aun no definidas
        $poliza_terceros=0;
        $cobertura_terceros=0;
        $rango_terceros=0;
        $valor_auto=0;

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
        switch ($company){
            case "Internacional de Seguros":
                $idaseguradora = 1;
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "Generali":
                $idaseguradora = 2;
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "ASSA":
                $idaseguradora = 3;
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.05;
                break;
            case "Banesco":
                $idaseguradora = 4;
                $descuentoUNPAGO = 0.07;
                $descuentoACH = 0.05;
                break;
            case "Acerta":
                $idaseguradora = 5;
                $descuentoUNPAGO = 0.07;
                $descuentoACH = 0.05;
                break;
            case "Banistmo":
                $idaseguradora = 6;
                $descuentoUNPAGO = 0.1;
                $descuentoACH = 0.05;
                break;
            case "SURA":
                $idaseguradora = 7;
                $descuentoUNPAGO = 0.05;
                $descuentoACH = 0.04;
                break;
        }

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




        $this->load->view('autosDanio/autos_complete', $datos);






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
        $datos['counter_coberturas']=$counter_coberturas;

        $this->load->view('autosDanio/imprimir_terceros',$datos);
    }




}
