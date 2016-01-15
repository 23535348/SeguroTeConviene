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
/*

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
              *


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

*/
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
        * INICIO DE CALCULOS ESPECIFICOS PARA UNA ASEGURADORA
        * ------------------------============================================------------------------------------ */

    public function get_analisis_aseguradora()
    {
        $registros=$this->db->query("SELECT idaseguradoras, nombre	FROM
                                      aseguradoras
                                      WHERE
                                       auto_completo_activo ='1'
                                       ");

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
    public function get_coberturas_especiales_autos_completo($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora' and ramo = 'autos_completo' and plan=1 ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }
    public function get_coberturas_especiales_autos_completo_b($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora' and ramo = 'autos_completo' and plan=2 ORDER BY linea");

        if($registros->num_rows()>0)
        {
            return $registros->result();
        }else{
            return $registros->num_rows();
        }

    }

    public function get_coberturas_especiales_autos_completo_c($idaseguradora)
    {
        $registros=$this->db->query("SELECT cobertura FROM coberturas_especiales WHERE idaseguradora='$idaseguradora' and ramo = 'autos_completo' and plan=3 ORDER BY linea");

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



