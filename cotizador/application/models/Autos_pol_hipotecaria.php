<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 24/09/15
 * Time: 02:25 PM
 */
class Autos_pol_hipotecaria extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function get_consulta_aseguradoras()
    {
        $registros=$this->db->query("SELECT idaseguradoras, nombre
	    	    	FROM aseguradoras
    	    	    	WHERE
    	    	    	 idaseguradoras=1 OR
    	    	    	 idaseguradoras=2 OR
    	    	    	 idaseguradoras=3 OR
    	    	    	 idaseguradoras=6
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }


    public function get_consulta_factores_plan_basico($idaseguradora,$sector,$tipo_bien,$suma_asegurada_incendio)
    {
        $registros=$this->db->query("SELECT valor
					FROM incendio
    					WHERE id_aseguradora='".$idaseguradora."' and
					Plan = 1 and
					Sector = '$sector' and
					Tipo = '$tipo_bien' and
					SumaDESDE < '$idaseguradora' and
					SumaHASTA >= '$suma_asegurada_incendio'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    public function get_consulta_factores_plan_completo($idaseguradora,$sector,$tipo_bien,$suma_asegurada_incendio)
    {
        $registros=$this->db->query("SELECT valor
					FROM incendio
    					WHERE id_aseguradora='".$idaseguradora."' and
					Plan = 2 and
					Sector = '$sector' and
					Tipo = '$tipo_bien' and
					SumaDESDE < '$idaseguradora' and
					SumaHASTA >= '$suma_asegurada_incendio'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    public function get_consulta_factores_min_max($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura, minimo, maximo
					FROM minimosymaximosIncendio
    					WHERE id_aseguradora='$idaseguradora'
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }

    function get_solicitud_nuevo($solicitud,$nombre_completo, $cedula, $telefono, $celular, $email,
                                 $ecivil,$edad,$fumador, $valor_vida, $plan, $poliza_vida,$company,$sexo, $termino,$fecha_nac)
    {


        $this->db->trans_begin();

        $data = array(
            'hora_solicitud' => $solicitud,
            'nombre_apellido' => $nombre_completo,
            'cedula' => $cedula,
            'telefono' => $telefono,
            'celular' => $celular,
            'correo' => $email,
            'ecivil' => $ecivil,
            'edad' => $edad,
            'fumador' => $fumador,
            'valor_vida' => $valor_vida,
            'plan' => $plan,
            'poliza_vida' => $poliza_vida,
            'aseguradora' => $company,
            'sexo' => $sexo,

            'termino' => $termino,
            'fecha_nacimiento' => $fecha_nac



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



