<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 24/09/15
 * Time: 02:25 PM
 */
class Autos_pol_vida extends CI_Model
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
    	    	    	WHERE idaseguradoras in (1,2,3,6)
                                       ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }

                  /* --------------------------------------------------- *
                   * Inicio de configuración de no asegurables
                   * --------------------------------------------------- */

    //factores sexo edad y condicion de fumador por aseguradora

    public function get_consulta_vida_M_NF_factores($suma_asegurada,$idaseguradora,$edad,$termino)
    {
        $registros=$this->db->query("SELECT factor
					FROM vida_M_NF_factores
    					WHERE
    					 edad='$edad' and
    					 termino ='$termino' and
    					 piso<='$suma_asegurada' and
    					 techo>='$suma_asegurada' and
    					 id_aseguradora='$idaseguradora'
    					 ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    public function get_consulta_vida_M_F_factores($suma_asegurada,$idaseguradora,$edad,$termino)
    {
        $registros=$this->db->query("SELECT factor
					FROM vida_M_F_factores
    					WHERE
    						 edad='$edad' and
    					 termino ='$termino' and
    					 piso<='$suma_asegurada' and
    					 techo>='$suma_asegurada' and
    					 id_aseguradora='$idaseguradora'
    					 ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    public function get_consulta_vida_F_NF_factores($suma_asegurada,$idaseguradora,$edad,$termino)
    {
        $registros=$this->db->query("SELECT factor
					FROM vida_F_NF_factores
    					WHERE
    						 edad='$edad' and
    					 termino ='$termino' and
    					 piso<='$suma_asegurada' and
    					 techo>='$suma_asegurada' and
    					 id_aseguradora='$idaseguradora'
    					 ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    public function get_consulta_vida_F_F_factores($suma_asegurada,$idaseguradora,$edad,$termino)
    {
        $registros=$this->db->query("SELECT factor
					FROM vida_F_F_factores
    					WHERE
    					 edad='$edad' and
    					 termino ='$termino' and
    					 piso<='$suma_asegurada' and
    					 techo>='$suma_asegurada' and
    					 id_aseguradora='$idaseguradora'
    					 ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }

    //Recargdos
    public function get_consulta_factor_vida_recargos($edad,$sexo,$fumador)
    {
        $registros=$this->db->query("SELECT factor
					FROM vida_recargos
    					WHERE indice='$edad' and
    					sexo='$sexo' and
    					fumador='$fumador'
    					 ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }

    public function get_consulta_factor_vida_recargos_2($termino)
    {
        $registros=$this->db->query("SELECT factor
					FROM vida_recargos_2
    					WHERE indice='$termino'
    					 ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
    public function get_consulta_minimosymaximosVida($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura, minimo, maximo, formadepago
				 FROM minimosymaximosVida
				 WHERE id_aseguradora='$idaseguradora'
    					 ");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }
    }
                       /* --------------------------------------------------- *
                        * FIN de configuración de no asegurables
                        * --------------------------------------------------- */



}



