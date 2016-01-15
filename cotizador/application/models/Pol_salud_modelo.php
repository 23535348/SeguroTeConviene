<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 24/09/15
 * Time: 02:25 PM
 */
class Pol_salud_modelo extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /* Buscando Alcance de Cobertura */

    public function get_alcance_cobertura($id_alcance_cobertura)
    {
        $registros=$this->db->query("SELECT descripcion
				    FROM cat_alcance_cobertura
    				    WHERE id_alcance_cobertura='$id_alcance_cobertura'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }

    /* Fin Buscando Alcance de Cobertura */


    /* Buscando Tipo Proveedor */

    public function get_tipo_proveedor($id_tipo_proveedor)
    {
        $registros=$this->db->query("SELECT descripcion
				    FROM cat_tipo_proveedor
    				    WHERE id_tipo_proveedor='$id_tipo_proveedor'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    /* Fin Buscando Tipo Proveedor */

    /* Buscando Tipo de Seguro */
    public function get_tipo_seguro($id_tipo_seguro)
    {
        $registros=$this->db->query("SELECT descripcion
				    FROM cat_tipo_seguro
    				    WHERE id_tipo_seguro='$id_tipo_seguro'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    /* Fin Buscando Tipo de Seguro */

    /* Buscando Suma Asegurada Maxima */
    public function get_suma_maxima_asegurada($id_suma_asegurada_maxima)
    {
        $registros=$this->db->query("SELECT descripcion
				    FROM cat_suma_asegurada_maxima
    				    WHERE id_suma_asegurada_maxima='$id_suma_asegurada_maxima'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }

            /* Fin Buscando Suma Asegurada Maxima*/







    /* --------------------------------------------------- *
     * Inicio Algotimo
     * --------------------------------------------------- */

    public function get_aseguradora_salud()
    {
        $registros=$this->db->query("SELECT id_aseguradora_salud, nombre_aseguradora
                                      FROM aseguradoras_salud WHERE estado = 1
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }

    /* Buscando m\E1ximos cotizables */

    public function get_aseguradora_salud_datos($id_aseguradora_salud)
    {
        $registros=$this->db->query("SELECT
                                    maxima_edad_principal,
                                    maxima_edad_conyugue, maxima_edad_hijo
                                                    FROM
                                                    aseguradoras_salud_maxima_edad_cotizable

                                                    WHERE
                                                     id_aseguradora ='$id_aseguradora_salud'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }

    /* Buscando Planes de Salud que Aplican a la selecci\F2n del usuario */

    public function get_cotizable_datos_por_usuario_seleccion($id_aseguradora_salud,$id_alcance_cobertura,$id_tipo_proveedor,$id_tipo_proveedor)
    {
        $registros=$this->db->query("SELECT
                                  a.id_plan_salud,
                                   b.nombre_plan,
                                    b.info_adicional
						          FROM
						          relacion_aseguradora_plan_salud a,
						           aseguradoras_plan_salud b
    						WHERE
    						a.id_plan_salud = b.id_aseguradora_plan_salud and
    						 a.id_aseguradora = b.id_aseguradora_salud and
    						 a.id_aseguradora='$id_aseguradora_salud' and
    						 a.id_alcance_cobertura = '$id_alcance_cobertura' and
    						 a.id_tipo_proveedor ='$id_tipo_proveedor' and
    						 a.id_suma_asegurada_maxima ='$id_tipo_proveedor'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }


            /* Edad Top Izquierdo*/

    public function get_edad_izquierdo_derecho_top($edad_hijo)
    {
        $registros=$this->db->query("SELECT monto
                                                    FROM
                                                    plan_salud_internacional_seguros

                                                    WHERE
                                                     id_tipo_plan=18 and
                                                     id_tipo_asegurado = 1 and
                                                     edad_piso <='$edad_hijo' and
                                                     edad_techo >='$edad_hijo'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }
    public function get_plan_info_adicional()
    {
        $registros=$this->db->query("SELECT nombre_plan, info_adicional
                                                    FROM
                                                    aseguradoras_plan_salud
                                                    WHERE
                                                     id_aseguradora_plan_salud ='18'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }

    /* Buscando Monto del Asegurado Principal */

    public function get_plan_asegurado_principal_internacional_seguros($id_plan_salud,$edad_principal)
    {
        $registros=$this->db->query("SELECT monto
						             FROM
						             plan_salud_internacional_seguros
    						         WHERE
    						          id_tipo_plan='$id_plan_salud' and
    						          id_tipo_asegurado = 1 and
    						          edad_piso <='$edad_principal' and
    						          edad_techo >='$edad_principal'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }
    /* Buscando Monto de Hijos */
    public function get_plan_asegurado_hijo_internacional_seguros($id_plan_salud,$total_hijos_plan_calculo)
    {
        $registros=$this->db->query("SELECT
                                      monto
                                     FROM
                                     plan_salud_internacional_seguros_hijos
                                     WHERE
                                      id_tipo_asegurado = 1 and
                                      id_tipo_plan='$id_plan_salud' and
                                      hijo='$total_hijos_plan_calculo'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }

//INICIO Solo y Conyuge

    public function get_plan_asegurado_solo_conyuge_internacional_seguros($id_plan_salud,$edad_principal_calculo)
    {
        $registros=$this->db->query("SELECT monto
						              FROM
						              plan_salud_internacional_seguros
    						          WHERE
    						          id_tipo_plan='$id_plan_salud' and
    						           edad_piso <='$edad_principal_calculo' and
    						           edad_techo >='$edad_principal_calculo' and
    						           id_tipo_asegurado=2
    						           ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }
    /* Buscando Monto de Hijos */

    public function get_plan_solo_conyuge_hijo_internacional_seguros($id_plan_salud,$total_hijos_plan_calculo)
    {
        $registros=$this->db->query("SELECT
                                      monto
                                     FROM
                                     plan_salud_internacional_seguros_hijos
                                     WHERE
                                      id_tipo_asegurado = 2 and
                                      id_tipo_plan='$id_plan_salud' and
                                      hijo='$total_hijos_plan_calculo'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }

//  Buscador monto plan salud paling
    public function get_plan_salud_palig_buscador($id_plan_salud,$edad_principal_calculo,$plan)
    {
        $registros=$this->db->query("SELECT monto
						              FROM
						              plan_salud_internacional_seguros
    						          WHERE
    						          id_tipo_plan='$id_plan_salud' and
    						           edad_piso <='$edad_principal_calculo' and
    						           edad_techo >='$edad_principal_calculo' and
    						           id_tipo_asegurado='$plan'
    						           ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }
    /* Buscando Monto de Hijos plan salud paling */
    public function get_plan_salud_palig_buscador_hijo($id_plan_salud,$total_hijos_plan_calculo)
    {
        $registros=$this->db->query("SELECT monto
                                                    FROM
                                                    plan_salud_palig_hijos
                                                    WHERE
                                                    id_tipo_plan='$id_plan_salud' and
                                                    hijo='$total_hijos_plan_calculo'
    						           ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }
    //  Buscador monto plan salud ASSA
    public function get_plan_salud_assa($id_plan_salud,$edad_hijo)
    {
        $registros=$this->db->query("SELECT monto
                                                    FROM
                                                    plan_salud_assa
                                                    WHERE
                                                    id_tipo_plan = '$id_plan_salud' and
                                                    edad_piso <='$edad_hijo' and
                                                    edad_techo >='$edad_hijo'
    						           ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else {
            return $registros->num_rows();
        }
    }

    /* Buscando Monto del Asegurado Principal */



        /* --------------------------------------------------- *
         * Fin Algotimo
         * --------------------------------------------------- */


    //Registro de solicitud
    function get_solicitud_nuevo($solicitud,$nombre_completo, $cedula,$genero,$fecha_nac,$telefono,
                                 $celular,$correo,$company,$plan,$nacionalidad,$fecha_nac_conyugue,$descripcion_tipo_seguro,
                                 $descripcion_tipo_proveedor,$descripcion_alcance_cobertura, $descripcion_suma_asegurada_maxima,
                                 $total_hijos_plan,$nombre_plan_salud,$monto_total_plan_salud
                                 )
    {


        $this->db->trans_begin();

        $data = array(
            'hora_solicitud' => $solicitud,
            'nombre_apellido' => $nombre_completo,
            'cedula' => $cedula,
            'sexo' => $genero,
            'fecha_nacimiento' => $fecha_nac,
            'telefono' => $telefono,
            'celular' => $celular,
            'correo' => $correo,
            'aseguradora' => $company,
            'plan' => $plan,
            'nacionalidad' => $nacionalidad,
            'fecha_nac_conyugue'=> $fecha_nac_conyugue,
            'descripcion_tipo_seguro'=> $descripcion_tipo_seguro,
            'descripcion_tipo_proveedor'=> $descripcion_tipo_proveedor,
            'descripcion_alcance_cobertura'=> $descripcion_alcance_cobertura,
            'descripcion_suma_asegurada_maxima'=> $descripcion_suma_asegurada_maxima,
            'total_hijos_plan'=> $total_hijos_plan,
            'nombre_plan_salud'=> $nombre_plan_salud,
            'monto_total_plan_salud'=> $monto_total_plan_salud




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






}



