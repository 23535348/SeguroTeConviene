<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 24/09/15
 * Time: 02:25 PM
 */
class Autos_danio extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    function get_marcas()
    {
        $query = $this->db->query('SELECT marca FROM marcas ORDER BY marca');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->marca, ENT_QUOTES)] =
                    htmlspecialchars($row->marca, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }

    function get_marcas_id($marcas)
    {
        $query = $this->db->query("SELECT * FROM marcas where marca='$marcas' ");

        if ($query->num_rows() > 0) {
            return   $query->result();
        }
    }
    public function get_modelos($marcas)
    {
        $registros=$this->db->query("select modelo from modelos where marcaid='$marcas' ORDER BY modelo");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }
       /* ------------------------============================================--------------------------- *
        * INICIO DE CALCULOS ESPECIFICOS PARA AUTOS DE TERCEROS
        * ------------------------============================================------------------------------------ */

    public function get_analisis_autos_terceros()
    {
        $registros=$this->db->query("SELECT  * FROM autos_terceros WHERE estado = '1' ORDER BY monto_obligatorio
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }


    public function get_aseguradoras()
    {
        $registros=$this->db->query("SELECT idaseguradoras, nombre FROM aseguradoras");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }


    public function get_aseguradoras_consult($idaseguradoras)
    {
        $registros=$this->db->query("SELECT idaseguradoras, nombre FROM aseguradoras WHERE idaseguradoras='$idaseguradoras' ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }
    public function get_plan_aseguradora_autos_tercero($plan,$idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora'  and ramo = 'autos_tercero' and plan = '".$plan."' ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    public function get_aseguradoras_nombre($nombre)
    {
        $registros=$this->db->query("SELECT idaseguradoras, nombre FROM aseguradoras where nombre='$nombre'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }

    public function get_coberturas_especiales($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora' and ramo = 'autos_tercero' and plan=1 ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }
    /* --------------------------------------------------- *
    * Inicio de configuracion de no asegurables
    * --------------------------------------------------- */

    public function get_analisis_noasegurable($idaseguradora)
    {
        $registros=$this->db->query("SELECT atributo, nombre, comparacion, signo,valor
						FROM cat_configuracion_detalle
    					WHERE id_aseguradora='$idaseguradora' and tipo = 'NOASEGURABLE' ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

    /* --------------------------------------------------- *
     * valores de DEDUCIBLES
     * --------------------------------------------------- */

    public function get_valores_deducibles($idaseguradora,$diferencia_anio)
    {
        $registros=$this->db->query("SELECT tarifa, deducible, anio, id_aseguradora
						FROM cat_comprensivo
    						WHERE id_aseguradora='$idaseguradora' and anio ='$diferencia_anio'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
        else{
            return $registros->num_rows();
        }
    }
    public function get_valores_deducibles_colicion($idaseguradora,$diferencia_anio)
    {
        $registros=$this->db->query("SELECT tarifa, deducible
						FROM cat_colision
    						WHERE id_aseguradora='$idaseguradora' and anio = '$diferencia_anio'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
        else{
            return $registros->num_rows();
        }
    }
    public function get_valores_deducibles_cobertura($idaseguradora)
    {
        $registros=$this->db->query("SELECT tipo_cobertura, tipo_valor, limite, valor
						 FROM cat_coberturas
    						WHERE id_aseguradora='$idaseguradora'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }

    //Recargo por MARCA Y MODELO para PRIMA DE COLISION en caso de haberlo por reccolision
    public function get_recargo_reccolision($idaseguradora)
    {
        $registros=$this->db->query("SELECT atributo, nombre, comparacion, signo,valor
						FROM cat_configuracion_detalle
    					WHERE id_aseguradora='$idaseguradora' and tipo ='RECCOLISION' ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    //Recargo por MARCA Y MODELO para PRIMA DE COLISION en caso de haberlo RECCOMPRENSIVO
    public function get_recargo_reccomprensivo($idaseguradora)
    {
        $registros=$this->db->query("SELECT atributo, nombre, comparacion, signo,valor
						FROM cat_configuracion_detalle
    					WHERE id_aseguradora='$idaseguradora' and tipo = 'RECCOMPRENSIVO' ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    //Recargo por MARCA Y MODELO para PRIMA DE COLISION en caso de haberlo RECDEDUCOL
    public function get_recargo_recdeducol($idaseguradora)
    {
        $registros=$this->db->query("SELECT atributo, nombre, comparacion, signo,valor
						FROM cat_configuracion_detalle
    					WHERE id_aseguradora='$idaseguradora' and tipo = 'RECDEDUCOL' ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    /* --------------------------------------------------- *
                * Inicio Configuraciones especiales por ASEGURADORA
                * --------------------------------------------------- */

    // DESCUENTOS ESPECIALES
    public function get_descuento_especial($idaseguradora)
    {
        $registros=$this->db->query("SELECT descuento_especial
				    FROM cat_descuento_especial
    				    WHERE id_aseguradora='$idaseguradora'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

// INICIO CONFIGURACION DE DESCUENTO ESPECIAL POR MARCA Y MODELO

    public function get_descuento_especial_mm($idaseguradora)
    {
        $registros=$this->db->query("SELECT id_configuracion_detalle,atributo,nombre,signo,comparacion,valor
					FROM cat_configuracion_detalle
    					WHERE id_aseguradora='$idaseguradora' and tipo = 'DESCUENTOESPECIAL' ORDER BY id_configuracion_detalle");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }


// CALCULOS PARTICULARES PARA ACERTA

    public function get_particulares_acerta()
    {
        $registros=$this->db->query("SELECT tipo, atributo, nombre, comparacion, signo,valor
						FROM cat_factor_acerta
    					 order by tipo");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    //REVISION DE MINIMOS DE COBERTURAS Y DEDUCIBLES
    public function get_cobertura_deducible($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura, minimo, maximo
				 FROM minimosymaximosCoberturas
				 WHERE id_aseguradora='$idaseguradora'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    //ADICION DE ENDOSOS

    public function get_adicion_endosos($idaseguradora)
    {
        $registros=$this->db->query("SELECT id_aseguradora, endoso
				 FROM cat_endosos
				 WHERE id_aseguradora='$idaseguradora'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

    //Tarifas SURA

    public function get_tarifas_sura($precio_venta,$diferencia_anio)
    {
        $registros=$this->db->query("SELECT prima_basico, tasa_basico, prima_ejecutivo, tasa_ejecutivo, prima_premium, tasa_premium
				 FROM tarifas_SURA
				 WHERE desde <= '".$precio_venta."' and
				 hasta > '".$precio_venta."' and
				 antiguedad= '".$diferencia_anio."'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }


            //Recargos sura
    public function get_recargos_sura($idaseguradora)
    {
        $registros=$this->db->query("SELECT atributo, nombre, comparacion, signo,valor
						FROM cat_configuracion_detalle
    					WHERE id_aseguradora='$idaseguradora' and tipo = 'RECESPECIALSURA' ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

    // coberturas especiales
    public function get_coberturas_especiales_autos_tercero($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora' and ramo = 'autos_tercero' and plan=1 ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    public function get_coberturas_especiales_autos_tercero_b($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora' and ramo = 'autos_tercero' and plan=2 ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

    public function get_coberturas_especiales_autos_tercero_c($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora' and ramo = 'autos_tercero' and plan=3 ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }


    public function get_plan($plan)
    {
        $registros=$this->db->query("SELECT cobertura, plan, detalle, monto FROM cobertura_autos_completo WHERE plan = '".$plan."'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

    public function get_plan_aseguradora($plan,$idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora'  and ramo = 'autos_completo' and plan = '".$plan."' ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    function get_solicitud_nuevo($solicitud,$nombre_completo, $cedula, $telefono, $celular, $email,
                                 $poliza_terceros,$cobertura_terceros,$rango_terceros, $company, $plan,$plan_tipo, $sexo, $fecha_nac, $estado_civil,
                                 $edad, $tipo_auto, $marca, $modelo, $anio_auto, $estado_auto, $historial_manejo, $valor_auto)
    {


        $this->db->trans_begin();

        $data = array(
            'hora_solicitud' => $solicitud,
            'nombre_apellido' => $nombre_completo,
            'cedula' => $cedula,
            'telefono' => $telefono,
            'celular' => $celular,
            'correo' => $email,

            'poliza_terceros' => $poliza_terceros,
            'cobertura_terceros' => $cobertura_terceros,
            'rango_terceros' => $rango_terceros,
            'aseguradora' => $company,
            'plan' => $plan,
            'tipo_plan' => $plan_tipo,

            'sexo' => $sexo,
            'fecha_nacimiento' => $fecha_nac,
            'ecivil' => $estado_civil,
            'edad' => $edad,
            'tipo_vehiculo' => $tipo_auto,
            'marca_vehiculo' => $marca,

            'modelo_vehiculo' => $modelo,
            'anio_vehiculo' => $anio_auto,
            'estado_vehiculo' => $estado_auto,
            'historial_vehiculo' => $historial_manejo,
            'valor_auto' => $valor_auto


        );



        $this->db->insert('administracion',$data);



        if ($this->db->trans_status() === FALSE)
        {
            if($data['error'] = $this->db->_error_message());
            return $data;

            //si ha habido algún error lo debemos mostrar aquí
            $this->db->trans_rollback();

        }else{

            $id=$this->db->insert_id();
            $this->db->trans_commit();
            return $id;
            //en ot

        }



        }


    public function get_id_solicitud($email)
    {
        $registros=$this->db->query("SELECT  MAX(id) AS id FROM administracion WHERE correo='".$email."'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }




}



