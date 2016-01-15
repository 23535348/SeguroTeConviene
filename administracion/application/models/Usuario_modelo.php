<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 24/09/15
 * Time: 02:25 PM
 */
class usuario_modelo extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    function get_usuario_nuevo($email,$password,$id_candidato)
    {


        $this->db->trans_begin();

        $data = array(

            'correo' => $email,
            'contrasenia' => $password,
            'Candidato' => $id_candidato


        );


        $this->db->insert('usuarios', $data);


        if ($this->db->trans_status() === FALSE) {


            //si ha habido algún error lo debemos mostrar aquí
            $this->db->trans_rollback();

        } else {

            $id = $this->db->insert_id();
            $this->db->trans_commit();
            return $id;
            //en ot

        }


    }

    function get_usuario_email($email)
    {
        $query = $this->db->query("SELECT * FROM CANDIDATOS where USRID_LONG='".$email."'" );
        return $query->num_rows();

    }
    function get_candidato_cedula($cedula)
    {
        $query = $this->db->query("SELECT * FROM CANDIDATOS where CEDULA='".$cedula."'" );
        return $query->num_rows();

    }
    function get_update_cedula($cedula,$id)
    {
        $query = $this->db->query("SELECT * FROM CANDIDATOS where CEDULA='".$cedula."' AND id_CANDIDATOS='".$id."'     " );
        return $query->num_rows();

    }

    function get_usuario_candidato($VORNA,$NACHN, $USRID_LONG,$CEDULA)
    {

        $data = array(
            'BEGDA' => '',
            'STREA' => '',
            'WERKS' => '',
            'WERKS2' => '',
            'BTRTL' => '',
            'APGRP' => '1',

            'APTYP' => '',
            'RESRF' => 'PA',
            'ANREX' => '',
            'VORNA' => $VORNA,
            'NACHN' => $NACHN,
            'GBDAT' => '',

            'SPRSL' => '',
            'NATIO' => '',
            'STRAS' => '',
            'TELNR' => '',
            'LAND1' => '',
            'USRID_LONG' => $USRID_LONG,

            'SPAPL' => '',
            'NACH2' => '',
            'NAME2' => '',
            'GBLND' => '',
            'GBDEP' => '',
            'FPRCD' => '',

            'GESC1' => '',
            'GESC2' => '',
            'FATXT' => '',
            'ANZKD' => '',
            'ANSSA' => '',
            'ORT01' => '',

            'STATE' => '',
            'SLART' => '',
            'BEGDA22' => '',
            'ENDDA22' => '',
            'AUSBI' => '',
            'INSTI' => '',

            'SLAND' => '',
            'SLABS' => '',
            'SLTP1' => '',
            'ANZKL' => '',
            'ANZEH' => '',
            'BEGDA23' => '',

            'ENDDA23' => '',
            'ARBGB' => '',
            'LAND123' => '',
            'BRANC' => '',
            'TAETE' => '',
            'BTRTL2' => '',

            'SPAPL2' => '',
            'CEDULA' => $CEDULA


        );


        $this->db->insert('CANDIDATOS',$data);



            $id = $this->db->insert_id();

            return $id;

    }

    function get_usuario_verificacion($email,$password)
    {
        $query = $this->db->query("SELECT * FROM usuarios where correo='".$email."' and contrasenia='".$password."' " );
        return $query->num_rows();

    }

    function get_usuario($email,$password)
    {
        $query = $this->db->query("SELECT
                                          *
                                           FROM usuarios, CANDIDATOS
                                            where
                                           correo='".$email."' and
                                           contrasenia='".$password."'
                                             ");
        return $query->result();
    }


    function get_datos_session($id)
    {
        $query = $this->db->query("SELECT *
                                          FROM usuarios,CANDIDATOS where id_usuario='".$id."' " );
            return $query->result();
        }

    function get_token($email,$codigo)
    {
        $data = array(
            'token' => $codigo
        );
        $this->db->where('correo',$email);
        $this->db->update('usuarios',$data);

        return $codigo;

    }
    function get_cambio_interno_password($email,$codigo)
    {
        $data = array(
            'contrasenia' => $codigo
        );
        $this->db->where('correo',$email);
        $this->db->update('usuarios',$data);

        return $codigo;

    }




    function get_password($codigo,$clave)
    {
        $data = array(
            'contrasenia' => $clave
        );
        $this->db->where('token',$codigo);
        $this->db->update('usuarios',$data);

        return $clave;

    }

}



