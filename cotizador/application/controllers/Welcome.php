<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	//	$this->load->model('Select_modelo');
		$this->load->database('default');
	}

	public function index()
	{


		// obtenemos el array de los selects y lo preparamos para enviar
	/*	$datos['departamentos'] = $this->Select_modelo->get_departamentos();
		$datos['areas'] = $this->Select_modelo->get_areas();
		$datos['tratamiento'] = $this->Select_modelo->get_tratamiento();
		$datos['idioma'] = $this->Select_modelo->get_idioma();
		$datos['estado_c'] = $this->Select_modelo->get_estado_civil();
		$datos['nacionalidad'] = $this->Select_modelo->get_nacionalidad();
		$datos['pais'] = $this->Select_modelo->get_pais();
		$datos['clase_instituto'] = $this->Select_modelo->get_clase_institucion();
		$datos['formacion'] = $this->Select_modelo->get_formacion();
		$datos['titulo'] = $this->Select_modelo->get_titulo();
		$datos['unidad_tiempo'] = $this->Select_modelo->get_unidad_tiempo();
		$datos['especialidad'] = $this->Select_modelo->get_especialidad();
		$datos['ramo'] = $this->Select_modelo->get_ramo();
		$datos['actividad'] = $this->Select_modelo->get_actividad();
		$datos['sucursal'] = $this->Select_modelo->get_sucursal();
		$datos['ubicacion'] = $this->Select_modelo->get_ubicacion();
		// cargamos  la interfaz y le enviamos los datos
		$this->load->view('captacion/form', $datos);
		//$this->load->view('captacion/form');
		//*/

		$this->load->view('welcome_message');
	}

}
