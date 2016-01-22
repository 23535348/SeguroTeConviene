<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AutosPolIncendio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('Autos_pol_vida');
        $this->load->model('Autos_pol_incendio');
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
               // $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
                $fecha_nac = $this->input->post('fecha_nac');
                $suma_asegurada = $this->input->post('suma_asegurada');
                $termino = $this->input->post('termino');
                $periodo_pago = $this->input->post('periodo_pago');
                $formadepago = $this->input->post('formadepago');
                $sesion_cotizacion = $this->input->post('sesion_cotizacion');
                $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
                $tipo_bien = $this->input->post('tipo_bien');
                $sector = $this->input->post('sector');
                $celular = $this->input->post('celular');
                $tipo_construccion = $this->input->post('tipo_construccion');

                $uso_auto = "OFICINA";


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
                $datos['tipo_bien'] = $tipo_bien;
                $datos['sector'] = $sector;
                $datos['tipo_construccion'] = $tipo_construccion;
                $datos['celular'] = $celular;
                $iteracion=0;


                /* ------------------------============================================--------------------------- *
                * INICIO DE CALCULOS ESPECIFICOS PARA UNA ASEGURADORA
                * ------------------------============================================------------------------------------ */

                $aseguradoras = $this->Autos_pol_incendio->get_analisis_aseguradora();
                foreach ($aseguradoras as $filas1) {
                    $iteracion=$iteracion+1;
                    $idaseguradora =  $filas1->idaseguradoras;
                    $nombre_aseguradora = $filas1->nombre;
                    $valor_basico = 0;
                    $valor_completo = 0;
                    $prima_basico = 0;
                    $prima_completo = 0;
                    $asegurable = 1;
                    $validacion_minimo = 0;
                    $validacion_maximo = 999999;


                    $consulta_incendio = $this->Autos_pol_incendio->get_incendio_valor($idaseguradora,$suma_asegurada,$tipo_bien,$sector);
                    if($consulta_incendio!=0) {
                        foreach ($consulta_incendio as $filas2) {
                            $valor_basico = $filas2->valor;
                        }
                    }
                    $consulta_incendio_2 = $this->Autos_pol_incendio->get_incendio_valor_plan2($idaseguradora,$suma_asegurada,$tipo_bien,$sector);
                    if($consulta_incendio_2!=0) {
                        foreach ($consulta_incendio_2 as $filas3) {
                            $valor_completo = $filas3->valor;

                        }
                    }
                    if ($idaseguradora == 2) {
                        if ($tipo_construccion == "Mixto") {$valor_basico = 0.20;$valor_completo = 0.20;}
                    }


                    /* --------------------------------------------------- *
                     * FIN de obtencion de valores
                     * --------------------------------------------------- */

                    $consulta_incendio_min_max = $this->Autos_pol_incendio->get_incendio_valor_min_and_max($idaseguradora);
                    if($consulta_incendio_min_max!=0) {
                        foreach ($consulta_incendio_min_max as $filas4) {
                            $validacion_minimo = $filas4->minimo;
                            $validacion_maximo = $filas4->maximo;
                        }
                    }
                    if ($asegurable  == 1){

                        $prima_basico = ($suma_asegurada * ($valor_basico/100));
                        $prima_completo = ($suma_asegurada * ($valor_completo/100));

                        if ($prima_basico < $validacion_minimo) {$prima_basico = $validacion_minimo;}
                        if ($prima_completo < $validacion_minimo) {$prima_completo = $validacion_minimo;}

                        //Impuesto del 5%
                        $impuesto1 = 0.05;

                        $prima_basico_conimpuesto = ($prima_basico * (1+$impuesto1));
                        $prima_completo_conimpuesto = ($prima_completo * (1+$impuesto1));

                    } // fin if $asegurable = 1

                    $tabla_resultados[1][$iteracion] = $nombre_aseguradora;
                    $tabla_resultados[2][$iteracion] = $prima_basico_conimpuesto;
                    $tabla_resultados[3][$iteracion] = $prima_completo_conimpuesto;
                    $datos['tabla_resultados_ordenados1'][$iteracion] = $nombre_aseguradora;
                    $datos['tabla_resultados_ordenados2'][$iteracion] = $prima_basico_conimpuesto;
                    $datos['tabla_resultados_ordenados3'][$iteracion] = $prima_completo_conimpuesto;

                }

                $counter1 = 1;
                while ($counter1 < 7) {
                    $tabla_resultados_ordenados[2][$counter1] = 9999999999;
                    $counter1++;
                }
                $counter1 = 1;
                while ($counter1 < 7) {
                    $counter2 = 1;
                    $ganador = 9999;
                    while ($counter2 < 7) {
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
                        $tabla_resultados[2][$ganador] = 9999999999;
                        $datos['tabla_resultados_ordenados1'][$counter1] = $tabla_resultados[1][$ganador];
                        $datos['tabla_resultados_ordenados2'][$counter1] = $tabla_resultados[2][$ganador];
                        $datos['tabla_resultados_ordenados3'][$counter1] = $tabla_resultados[3][$ganador];
                    }
                    $counter1++;

                }


                $datos['empresa'] = 0;
                $datos['iteracion'] = 1;
                $datos['y'] =0;

            }
        }
        $this->load->view('autosPolIncendio/template', $datos);


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
        // $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $suma_asegurada = $this->input->post('suma_asegurada');
        $termino = $this->input->post('termino');
        $periodo_pago = $this->input->post('periodo_pago');
        $formadepago = $this->input->post('formadepago');
        $sesion_cotizacion = $this->input->post('sesion_cotizacion');
        $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
        $tipo_bien = $this->input->post('tipo_bien');
        $sector = $this->input->post('sector');
        $tipo_construccion = $this->input->post('tipo_construccion');
        $company = $this->input->post('company');
        $plan = $this->input->post('plan');
        $celular = $this->input->post('celular');
        $suma = $this->input->post('suma');
        $prima_basico_conimpuesto = $this->input->post('prima_basico_conimpuesto');

        $uso_auto = "OFICINA";


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
        $datos['tipo_bien'] = $tipo_bien;
        $datos['sector'] = $sector;
        $datos['tipo_construccion'] = $tipo_construccion;
        $datos['company'] = $company;
        $datos['plan'] = $plan;
        $datos['celular'] = $celular;
        $datos['suma'] = $suma;
        $datos['prima_basico_conimpuesto'] = $prima_basico_conimpuesto;

        $this->load->view('autosPolIncendio/validator', $datos);

    }
    public function complete()
    {
        $this->load->library('FPDF');
        $this->load->library('Mailer');
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
        // $edad = $this->CalculoEdad($this->input->post('fecha_nac'));
        $fecha_nac = $this->input->post('fecha_nac');
        $suma_asegurada = $this->input->post('suma_asegurada');
        $termino = $this->input->post('termino');
        $periodo_pago = $this->input->post('periodo_pago');
        $formadepago = $this->input->post('formadepago');
        $sesion_cotizacion = $this->input->post('sesion_cotizacion');
        $prueba_aseguradora_especifica = $this->input->post('prueba_aseguradora_especifica');
        $tipo_bien = $this->input->post('tipo_bien');
        $sector = $this->input->post('sector');
        $tipo_construccion = $this->input->post('tipo_construccion');
        $company = $this->input->post('company');
        $plan = $this->input->post('plan');
        $celular = $this->input->post('celular');
        $suma = $this->input->post('suma');
        $prima_basico_conimpuesto = $this->input->post('prima_basico_conimpuesto');
        $plan_tipo_bx = $this->input->post('plan_tipo_bx');

        $uso_auto = "OFICINA";


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
        $datos['tipo_bien'] = $tipo_bien;
        $datos['sector'] = $sector;
        $datos['tipo_construccion'] = $tipo_construccion;
        $datos['company'] = $company;
        $datos['plan'] = $plan;
        $datos['celular'] = $celular;
        $datos['suma'] = $suma;
        $datos['prima_basico_conimpuesto'] = $prima_basico_conimpuesto;
        $datos['plan_tipo_bx'] = $plan_tipo_bx;


        $tipo_plan=$plan;
        ini_set('date.timezone','America/Panama');
        $solicitud=date("Y-m-d H:i:s");
        $nombre_completo="$apellido $nombre";
        $datos['nombre_completo']=$nombre_completo;
        $plan=1;
        $datos['solicitud'] = $this->Autos_pol_incendio->get_solicitud_nuevo($solicitud,$nombre_completo, $cedula, $telefono, $celular, $email,
            $sector,$tipo_bien,$tipo_construccion, $suma_asegurada, $suma,$company, $plan, $tipo_plan);



        $id_registro = $this->Select_modelo->get_id_solicitud($email);

        foreach ($id_registro as $filas1) {

            $datos['id_registro'] =  $filas1->id;
        }
        $datos['fecha_solicitud']=$solicitud; 
        $datos['plan_tipo'] =  $tipo_plan;
        
        $datos['AddReplyTo']="deivisjose.d@gmail.com";
        $datos['SetFrom']="deivisjose.d@gmail.com";

        if($this->input->post('sector')=="CIUDAD"){ $mensaje_sector = "Ciudad de Panamá";}
        if($this->input->post('sector')=="COSTADELESTE"){ $mensaje_sector = "Costa del Este";}
        if($this->input->post('sector')=="INTERIOR"){ $mensaje_sector = "Interior del País";}
        if($this->input->post('bien')=="APTO"){ $mensaje_bien = "Apartamento";}
        else { $mensaje_bien = "Casa";}
        $datos['mensaje_bien']=$mensaje_bien; 
        $datos['mensaje_sector']=$mensaje_sector;
        
        $this->load->view('autosPolIncendio/complete', $datos);

    }




    public function seguro_complete()
    {
        


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

        if($this->input->get('sector')=="CIUDAD"){ $mensaje_sector = "Ciudad de Panamá";}
        if($this->input->get('sector')=="COSTADELESTE"){ $mensaje_sector = "Costa del Este";}
        if($this->input->get('sector')=="INTERIOR"){ $mensaje_sector = "Interior del País";}
        if($this->input->get('bien')=="APTO"){ $mensaje_bien = "Apartamento";}
        else { $mensaje_bien = "Casa";}
        $datos['mensaje_bien']=$mensaje_bien;
        $datos['mensaje_sector']=$mensaje_sector;

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

        $this->load->view('autosPolIncendio/imprimir_terceros',$datos);
    }




}
