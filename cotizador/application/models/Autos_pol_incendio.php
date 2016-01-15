<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 24/09/15
 * Time: 02:25 PM
 */
class Autos_pol_incendio extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function get_analisis_aseguradora()
    {
        $registros=$this->db->query("SELECT idaseguradoras, nombre
				FROM aseguradoras
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }

    public function get_incendio_valor($idaseguradora,$suma_asegurada,$tipo_bien,$sector)
    {
        $registros=$this->db->query("SELECT valor
					FROM incendio
    					WHERE
    				id_aseguradora='".$idaseguradora."' and
					Plan = 1 and
					Sector = '".$sector."' and
					Tipo = '".$tipo_bien."' and
					SumaDESDE < '".$suma_asegurada."' and
					SumaHASTA >='".$suma_asegurada."'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

    public function get_incendio_valor_plan2($idaseguradora,$suma_asegurada,$tipo_bien,$sector)
    {
        $registros=$this->db->query("SELECT valor
					FROM incendio
    					WHERE
    				id_aseguradora='".$idaseguradora."' and
					Plan = 2 and
					Sector = '".$sector."' and
					Tipo = '".$tipo_bien."' and
					SumaDESDE < '".$suma_asegurada."' and
					SumaHASTA >='".$suma_asegurada."'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    public function get_incendio_valor_min_and_max($idaseguradora)
    {
        $registros=$this->db->query("SELECT
                                  cobertura,
                                  minimo,
                                  maximo
				        	FROM minimosymaximosIncendio
    			        		WHERE id_aseguradora='".$idaseguradora."'");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    function get_solicitud_nuevo($solicitud,$nombre_completo, $cedula, $telefono, $celular, $email,
                                 $sector,$tipo_inmueble,$tipo_construccion, $valor_inmueble, $poliza_incendio,$company, $plan, $tipo_plan)
    {


        $this->db->trans_begin();

        $data = array(
            'hora_solicitud' => $solicitud,
            'nombre_apellido' => $nombre_completo,
            'cedula' => $cedula,
            'telefono' => $telefono,
            'celular' => $celular,
            'correo' => $email,

            'sector' => $sector,
            'tipo_inmueble' => $tipo_inmueble,
            'tipo_construccion' => $tipo_construccion,
            'valor_inmueble' => $valor_inmueble,
            'poliza_incendio' => $poliza_incendio,
            'aseguradora' => $company,

            'plan' => $plan,
            'tipo_plan' => $tipo_plan


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



