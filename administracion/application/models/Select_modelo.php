<?php
/**
 * Created by PhpStorm.
 * User: dmillan
 * Date: 24/09/15
 * Time: 02:25 PM
 */
class select_modelo extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    function get_departamentos()
    {
        $query = $this->db->query("SELECT lpad( `codigo` , 3, 0 ) AS codigo, `descripcion` FROM `departamento_candidato` ");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }

    function get_departamentos_espontaneo($division)
    {
        $query = $this->db->query("SELECT lpad( dc.`codigo` , 3, 0 ) AS codigoF, dc.`descripcion` , dp.`codigo` , dc.`pais` , dp.`pais`
FROM division_persona AS dp
INNER JOIN `departamento_candidato` AS dc ON ( dp.`pais` = dc.`pais` )
WHERE dp.`codigo` = '$division' ");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigoF, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);


            return $query->result();
        }

    }

    function get_areas()
    {
        $query = $this->db->query('SELECT * FROM area_candidato');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_tratamiento()
    {
        $query = $this->db->query('SELECT * FROM tratamiento_persona');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_idioma()
    {
        $query = $this->db->query('SELECT * FROM idioma');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_nacionalidad()
    {
        $query = $this->db->query('SELECT * FROM nacionalidad');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->pais, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_pais()
    {
        $query = $this->db->query('SELECT * FROM pais');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->pais, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_estado_civil()
    {
        $query = $this->db->query('SELECT * FROM estado_civil');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_clase_institucion()
    {
        $query = $this->db->query('SELECT * FROM clase_institucion');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_formacion()
    {
        $query = $this->db->query('SELECT lpad( `codigo` , 8, 0 ) AS `codigo` , `descripcion` FROM `formacion` ');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_titulo()
    {
        $query = $this->db->query('SELECT * FROM titulo');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_unidad_tiempo()
    {
        $query = $this->db->query('SELECT * FROM unidad_tiempo');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_especialidad()
    {
        $query = $this->db->query('SELECT * FROM especialidad');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_ramo()
    {
        $query = $this->db->query('SELECT * FROM ramo');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_actividad()
    {
        $query = $this->db->query('SELECT * FROM actividad');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_sucursal()
    {
        $query = $this->db->query('SELECT * FROM sub_division_persona');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->sub_division, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_sucursal2()
    {
        $query = $this->db->query('SELECT * FROM sucursal');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    //division_persona
    function get_ubicacion()
    {
        $query = $this->db->query('SELECT * FROM division_persona');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                  $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->nombre, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }
    function get_ubicacion_espontanea($division)
    {
        $this->db->where('codigo',$division);
        $registros = $this->db->get('division_persona');

            return $registros->result();

    }


    function get_ubicacion2()
    {
        $query = $this->db->query('SELECT * FROM ubicacion');

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->codigo, ENT_QUOTES)] =
                    htmlspecialchars($row->descripcion, ENT_QUOTES);

            $query->result();
            return $arrDatos;
        }
    }

        //sucursal
    public function sub_division($division)
    {
        $this->db->where('division',$division);
        $registros = $this->db->get('sub_division_persona');
        if($registros->num_rows()>0)
        {
            return $registros->result();
        }
    }

    function get_captacion_nuevo($BEGDA,$STREA, $WERKS, $WERKS2, $BTRTL, $APGRP,
                                 $APTYP,$RESRF,$ANREX, $VORNA, $NACHN, $GBDAT,
                                 $SPRSL, $NATIO, $STRAS, $TELNR, $LAND1, $USRID_LONG,
                                 $SPAPL, $NACH2, $NAME2, $GBLND, $GBDEP, $FPRCD,
                                 $GESC1,$GESC2, $FATXT, $ANZKD, $ANSSA, $ORT01,
                                 $STATE,$SLART, $BEGDA22, $ENDDA22, $AUSBI, $INSTI,
                                 $SLAND, $SLABS, $SLTP1, $ANZKL, $ANZEH , $BEGDA23,
                                 $ENDDA23, $ARBGB, $LAND123, $BRANC, $TAETE, $BTRTL2, $SPAPL2, $CEDULA)
    {


        $this->db->trans_begin();

        $data = array(
            'BEGDA' => $BEGDA,
            'STREA' => $STREA,
            'WERKS' => $WERKS,
            'WERKS2' => $WERKS2,
            'BTRTL' => $BTRTL,
            'APGRP' => $APGRP,

            'APTYP' => $APTYP,
            'RESRF' => $RESRF,
            'ANREX' => $ANREX,
            'VORNA' => $VORNA,
            'NACHN' => $NACHN,
            'GBDAT' => $GBDAT,

            'SPRSL' => $SPRSL,
            'NATIO' => $NATIO,
            'STRAS' => $STRAS,
            'TELNR' => $TELNR,
            'LAND1' => $LAND1,
            'USRID_LONG' => $USRID_LONG,

            'SPAPL' => $SPAPL,
            'NACH2' => $NACH2,
            'NAME2' => $NAME2,
            'GBLND' => $GBLND,
            'GBDEP' => $GBDEP,
            'FPRCD' => $FPRCD,

            'GESC1' => $GESC1,
            'GESC2' => $GESC2,
            'FATXT' => $FATXT,
            'ANZKD' => $ANZKD,
            'ANSSA' => $ANSSA,
            'ORT01' => $ORT01,

            'STATE' => $STATE,
            'SLART' => $SLART,
            'BEGDA22' => $BEGDA22,
            'ENDDA22' => $ENDDA22,
            'AUSBI' => $AUSBI,
            'INSTI' => $INSTI,

            'SLAND' => $SLAND,
            'SLABS' => $SLABS,
            'SLTP1' => $SLTP1,
            'ANZKL' => $ANZKL,
            'ANZEH' => $ANZEH,
            'BEGDA23' => $BEGDA23,

            'ENDDA23' => $ENDDA23,
            'ARBGB' => $ARBGB,
            'LAND123' => $LAND123,
            'BRANC' => $BRANC,
            'TAETE' => $TAETE,
            'BTRTL2' => $BTRTL2,

            'SPAPL2' => $SPAPL2,
            'CEDULA' => $CEDULA


        );



        $this->db->insert('CANDIDATOS',$data);



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
        /* ------------------------ Nombre Técnico de los campos ----------------------
              * BEGDA=fECHA
              * STREA=Motivo
              * WERKS= Division personal
              * WERKS2=Ubicacion
              * BTRTL= Sub division personal
              * APGRP= Grupo de Candidatos
              * APTYP= Area de Candidato
              * RESRF= Encargado Personal
              * ANREX= Tratamiento
              * VORNA= Nombre de pila o nombre principal
              * NACHN = Apellido principal
              * GBDAT= Fecha de nacimiento
              * SPRSL= Idioma
              * NATIO= Nacionalidad
              * STRAS= Direccion
              * TELNR= telefono
              * LAND1= Pais
              * USRID_LONG= Correo electŕonico
              * SPAPL = Grupo de candidatos
              * NACH2= Segundo Apellido
              * NAME2= Segundo nombre
              * GBLND= Pais de nacimiento
              * GBDEP=Provincia
              * FPRCD= Municipio o ciudad
              * GESC1= Masculino
              * GESC2 = Femenina
              * FATXT = Estado Civil
              * ANZKD= Numero de Hijos
              * ANSSA= Clase de registro de direccion
              * ORT01= Poblacion
              * STATE= Area
              * SLART= Clase de Institucio
              * BEGDA22= Fecha de inicio
              * ENDDA22= Fecha Final
              * AUSBI= Formacion
              * INSTI = Institucion de enseñanza
              * SLAND= Pais
              * SLABS= Titulo
              * SLTP1= Especialidad
               * ANZKL= Duracion de Formacion
               * ANZEH= Cantidad de unidad de tiempo
               * BEGDA23= Fecha de inicio de trabajo anterior
               * ENDDA23= Fecha de fin de trabajo anterior
               * ARBGB = Nombre de la empresa del ultimo trabajo
               * LAND123= Pais donde fue el ultimo empleo
               * BRANC= ramo de la empresa del ultimo trabajo
               * TAETE = actividad de la empresa del ultmio trabajo
               * BTRTL2= Sucursal
               * SPAPL2= grado del candidato
               *
               *
               *
              * */


        }

    function get_captacion_consulta($id)
    {
        $query = $this->db->query('SELECT * FROM CANDIDATOS where id_CANDIDATOS='.$id.' ');

        if ($query->num_rows() > 0) {
            return   $query->result();
        }
    }


    function get_captacion_editar($BEGDA,$STREA, $WERKS, $WERKS2, $BTRTL, $APGRP,
                                 $APTYP,$RESRF,$ANREX, $VORNA, $NACHN, $GBDAT,
                                 $SPRSL, $NATIO, $STRAS, $TELNR, $LAND1,
                                 $SPAPL, $NACH2, $NAME2, $GBLND, $GBDEP, $FPRCD,
                                 $GESC1,$GESC2, $FATXT, $ANZKD, $ANSSA, $ORT01,
                                 $STATE,$SLART, $BEGDA22, $ENDDA22, $AUSBI, $INSTI,
                                 $SLAND, $SLABS, $SLTP1, $ANZKL, $ANZEH , $BEGDA23,
                                 $ENDDA23, $ARBGB, $LAND123, $BRANC, $TAETE, $BTRTL2, $SPAPL2,$idCandidato,$CEDULA)
    {


        $this->db->trans_begin();

        $data = array(
            'BEGDA' => $BEGDA,
            'STREA' => $STREA,
            'WERKS' => $WERKS,
            'WERKS2' => $WERKS2,
            'BTRTL' => $BTRTL,
            'APGRP' => $APGRP,

            'APTYP' => $APTYP,
            'RESRF' => $RESRF,
            'ANREX' => $ANREX,
            'VORNA' => $VORNA,
            'NACHN' => $NACHN,
            'GBDAT' => $GBDAT,

            'SPRSL' => $SPRSL,
            'NATIO' => $NATIO,
            'STRAS' => $STRAS,
            'TELNR' => $TELNR,
            'LAND1' => $LAND1,


            'SPAPL' => $SPAPL,
            'NACH2' => $NACH2,
            'NAME2' => $NAME2,
            'GBLND' => $GBLND,
            'GBDEP' => $GBDEP,
            'FPRCD' => $FPRCD,

            'GESC1' => $GESC1,
            'GESC2' => $GESC2,
            'FATXT' => $FATXT,
            'ANZKD' => $ANZKD,
            'ANSSA' => $ANSSA,
            'ORT01' => $ORT01,

            'STATE' => $STATE,
            'SLART' => $SLART,
            'BEGDA22' => $BEGDA22,
            'ENDDA22' => $ENDDA22,
            'AUSBI' => $AUSBI,
            'INSTI' => $INSTI,

            'SLAND' => $SLAND,
            'SLABS' => $SLABS,
            'SLTP1' => $SLTP1,
            'ANZKL' => $ANZKL,
            'ANZEH' => $ANZEH,
            'BEGDA23' => $BEGDA23,

            'ENDDA23' => $ENDDA23,
            'ARBGB' => $ARBGB,
            'LAND123' => $LAND123,
            'BRANC' => $BRANC,
            'TAETE' => $TAETE,
            'BTRTL2' => $BTRTL2,

            'SPAPL2' => $SPAPL2,
            'CEDULA' => $CEDULA


        );

        $this->db->where('id_CANDIDATOS', $idCandidato);
        $this->db->update('CANDIDATOS', $data);


        if ($this->db->trans_status() === FALSE) {

            $this->db->trans_rollback();

        } else {

            $id = $idCandidato;
            $this->db->trans_commit();
            return $id;

        }
    }



    }



