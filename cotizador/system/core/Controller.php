<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	/**
	 * Reference to the CI singleton
	 *
	 * @var	object
	 */
	private static $instance;

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');
		$this->load->initialize();
		log_message('info', 'Controller Class Initialized');
	}




	// --------------------------------------------------------------------

	/**
	 * Get the CI singleton
	 *
	 * @static
	 * @return	object
	 */
	public static function &get_instance()
	{
		return self::$instance;
	}

	#Funcion para validar los datos enviado por post hacia el controlador que sean solo numero
	protected function metObtenerInt($clave,$posicion=false)
	{
		if((isset($_POST[$clave]) && !empty($_POST[$clave]))){
			if(is_array($_POST[$clave])){
				if($posicion) {
					if (isset($_POST[$clave][$posicion]) && !empty($_POST[$clave][$posicion])) {
						foreach ($_POST[$clave][$posicion] as $titulo => $valor) {
							if(is_array($_POST[$clave][$posicion][$titulo])){
								foreach($_POST[$clave][$posicion][$titulo] as $titulo1 => $valor1){
									$_POST[$clave][$posicion][$titulo][$titulo1] = htmlspecialchars(preg_replace('/[^0-9 .,]/', '', $_POST[$clave][$posicion][$titulo][$titulo1]));
								}
							}else{
								if(isset($_POST[$clave][$posicion][$titulo]) && !empty($_POST[$clave][$posicion][$titulo])) {
									$_POST[$clave][$posicion][$titulo] = htmlspecialchars(preg_replace('/[^0-9 .,]/', '', $_POST[$clave][$posicion][$titulo]));
								}
							}
						}
						return $_POST[$clave][$posicion];
					}
				}else{
					if (isset($_POST[$clave])) {
						foreach ($_POST[$clave] as $titulo => $valor) {
							$_POST[$clave][$titulo] = htmlspecialchars(preg_replace('/[^0-9 .,]/', '', $_POST[$clave][$titulo]));
						}
						return $_POST[$clave];
					}
				}
			}else{
				$_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
				return $_POST[$clave];
			}
		}
		return 0;
	}

	#Funcion para validar los datos enviados por post hacia el controlador que sean texto, numero y caracteres especiales.
	#para evitar las inyecciones mediante sql al servidor.
	protected function metObtenerTexto($clave,$posicion=false)
	{
		if(!is_array($clave) && !$posicion  && count($_POST[$clave])===1) {
			if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
				$_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
				return $_POST[$clave];
			}
		}else{
			if($posicion) {
				if (isset($_POST[$clave][$posicion])) {
					foreach ($_POST[$clave][$posicion] as $titulo => $valor) {
						if(is_array($_POST[$clave][$posicion][$titulo])){
							return $_POST[$clave][$posicion];
						}else{
							$_POST[$clave][$posicion][$titulo] = htmlspecialchars($_POST[$clave][$posicion][$titulo], ENT_QUOTES);
						}
					}
					return $_POST[$clave][$posicion];
				}
			}else{
				if (isset($_POST[$clave])) {
					foreach ($_POST[$clave] as $titulo => $valor) {
						$_POST[$clave][$titulo] = htmlspecialchars($_POST[$clave][$titulo], ENT_QUOTES);
					}
					return $_POST[$clave];
				}
			}
		}
	}

	#Funcion para validar los datos enviados por post hacia el controlador que sea solo Alpha-Numerico
	protected function metObtenerAlphaNumerico($clave,$posicion=false)
	{
		if((isset($_POST[$clave]) && !empty($_POST[$clave]))){
			if(is_array($_POST[$clave])){
				if($posicion) {
					if (isset($_POST[$clave][$posicion]) && !empty($_POST[$clave][$posicion])) {
						foreach ($_POST[$clave][$posicion] as $titulo => $valor) {
							if(is_array($_POST[$clave][$posicion][$titulo])){
								foreach($_POST[$clave][$posicion][$titulo] as $titulo1 => $valor1){
									$_POST[$clave][$posicion][$titulo][$titulo1] = (string)htmlspecialchars(preg_replace('/[^A-Za-z0-9 ñÑáéíóúÁÉÍÓÚ]/i', '', $_POST[$clave][$posicion][$titulo][$titulo1]));
								}
							}else{
								if(isset($_POST[$clave][$posicion][$titulo]) && !empty($_POST[$clave][$posicion][$titulo])) {
									$_POST[$clave][$posicion][$titulo] = (string)htmlspecialchars(preg_replace('/[^A-Za-z0-9 ñÑáéíóúÁÉÍÓÚ]/i', '', $_POST[$clave][$posicion][$titulo]));
								}
							}
						}
						return $_POST[$clave][$posicion];
					}
				}else{
					if (isset($_POST[$clave])) {
						foreach ($_POST[$clave] as $titulo => $valor) {
							$_POST[$clave][$titulo] = (string)htmlspecialchars(preg_replace('/[^A-Za-z0-9 ñÑáéíóúÁÉÍÓÚ]/i', '', $_POST[$clave][$titulo]));
						}
						return $_POST[$clave];
					}
				}
			}else{
				$_POST[$clave] = (string)htmlspecialchars(preg_replace('/[^A-Za-z0-9 ñÑáéíóúÁÉÍÓÚ]/i', '', $_POST[$clave]));
				return $_POST[$clave];
			}
		}
	}

	#Funcion para obtener Formulas.
	protected function metObtenerFormulas($clave,$posicion=false)
	{
		if(!is_array($clave) && !$posicion  && count($_POST[$clave])===1) {
			if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
				$_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
				return $_POST[$clave];
			}
		}else{
			if($posicion) {
				if (isset($_POST[$clave][$posicion])) {
					foreach ($_POST[$clave][$posicion] as $titulo => $valor) {
						$_POST[$clave][$posicion][$titulo] = $_POST[$clave][$posicion][$titulo];
					}
					return $_POST[$clave][$posicion];
				}
			}else{
				if (isset($_POST[$clave])) {
					foreach ($_POST[$clave] as $titulo => $valor) {
						$_POST[$clave][$titulo] = $_POST[$clave][$titulo];
					}
					return $_POST[$clave];
				}
			}
		}
	}

	#Funcion Para Validar los datos de un array enviado desde el formulario.
	# $form = nombre del arreglo en el formulario
	# $posicionArreglo = nombre de la posicion del arreglo los nombres son int=> Numero, txt=> texto, alphaNum=> AlphaNumerico
	# $exceccion = array de excecciones.
	protected function metValidarFormArrayDatos($form,$posicionArreglo,$exceccion=array())
	{
		if($posicionArreglo=='int'){
			$formArray=$this->metObtenerInt($form,$posicionArreglo);
			$valorExceccion=0;
		}elseif($posicionArreglo=='txt'){
			$formArray=$this->metObtenerTexto($form,$posicionArreglo);
			$valorExceccion=false;
		}elseif($posicionArreglo=='alphaNum'){
			$formArray=$this->metObtenerAlphaNumerico($form,$posicionArreglo);
			$valorExceccion=false;
		}elseif($posicionArreglo=='formula'){
			$formArray=$this->metObtenerFormulas($form,$posicionArreglo);
			$valorExceccion=false;
		}
		if($formArray) {
			foreach ($formArray as $titulo => $valor) {
				if (is_array($formArray[$titulo])) {
					foreach ($formArray[$titulo] as $tituloArray => $valorArray) {
						if (!empty($formArray[$titulo][$tituloArray]) && $formArray[$titulo][$tituloArray] != '') {
							$validacion[$titulo][$tituloArray] = $valorArray;
						} else {
							if(is_int($tituloArray)){
								if(!in_array($titulo, $exceccion)){
									$validacion[$titulo][$tituloArray] = 'error';
								} else {
									$validacion[$titulo][$tituloArray] = $valorExceccion;
								}
							}elseif(!in_array($tituloArray, $exceccion)) {
								$validacion[$titulo][$tituloArray] = 'error';
							} else {
								$validacion[$titulo][$tituloArray] = $valorExceccion;
							}
						}
					}
				} else {
					if (!empty($formArray[$titulo]) && $formArray[$titulo] != '') {
						$validacion[$titulo] = $valor;
					} else {
						if (!in_array($titulo, $exceccion)) {
							$validacion[$titulo] = 'error';
						} else {
							$validacion[$titulo] = $valorExceccion;
						}
					}
				}
			}
			if (isset($validacion)) {
				return $validacion;
			}
		}
	}


	//Funciona para cifrado de claves

	protected function cifrado($clave)
	{
		$hash="SQ=KCxh?}i.PH$]Gsm";
		$cifrado=sha1(md5($hash.$clave));
		return $cifrado;

	}

	// Funcion para enviar correos en Php

	protected function envio_correo($Email,$datos)
	{
		$uniqueid = uniqid('np');

			$anio=date('Y');
		$datos_f=strtoupper($datos);
		//indicamos las cabeceras del correo
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: SPORTLINE \r\n";
		$headers .= "Subject: Test mail\r\n";
		//lo importante es indicarle que el Content-Type
		//es multipart/alternative para indicarle que existirá
		//un contenido alternativo
		$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid . "\r\n";

		$message  = "\r\n\r\n--" . $uniqueid . "\r\n";
		$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
		$message .= "E-mail en Texto Plano sin formato.";

		$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
		$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
		$message .= " 	<center>
        	<table style=' height:100% !important; margin:0; padding:0; width:100% !important;' id='backgroundTable' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'>
            	<tbody><tr>
                	<td style='padding-top:20px;' align='center' valign='top'>
                    	<table style=' border: 1px solid #DDDDDD;' border='0' cellpadding='0' cellspacing='0' width='600'>
                        	<tbody><tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Header \\ -->
                                	<table style=' background-color:#FFFFFF;
				 border-bottom:0;' border='0' cellpadding='0' cellspacing='0' width='600'>
                                        <tbody><tr>
                                            <td style=' color:#202020;
font-family:Arial; font-size:34px; font-weight:bold; line-height:100%;
padding:0;text-align:center;vertical-align:middle;'>
                                            <br>
                                            	<!-- // Begin Module: Standard Header Image \\ -->
                                            	<a style=' padding:0;' href='http://www.sportline.com.pa'>
                    <img alt='Tienda En Linea' src='http://www.sportline.com.pa/wp-content/uploads/2015/01/logo13.png' height='30%' width='80%'>
                </a>
                                            	<!-- // End Module: Standard Header Image \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Body \\ -->
                                	<table id='templateBody' border='0' cellpadding='0' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                            <td valign='top'>

                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border='0' cellpadding='20' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td style=' background-color:#FFFFFF;
color:#505050; font-family:Arial; font-size:14px; line-height:150%; text-align:left;
' valign='top'>

                   <h1 style=' color:#202020;display:block;font-family:Arial;font-size:26px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' class='h3'>Te Damos la Bienvenida a SportLine</h1>
                   <h2  style=' color:#202020;display:block;font-family:Arial;font-size:22px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' class='h4'>Sr.(a):$datos_f</h2>
   <strong>Por Favor:</strong>
 Le Invitamos Ingresar y Actualizar sus Datos el siguiente enlace:
                             <br>
                                                                <br>

														</td>
                                                    </tr>
                                                    <tr>
                                                    	<td style='padding-top:0;' align='center' valign='top'>
            <table style=' -moz-border-radius:3px;-webkit-border-radius:3px;background-color:#336699;border:0;border-collapse:separate !important;border-radius:3px;color:#FFFFFF;font-family:Arial;font-size:15px; font-weight:bold;letter-spacing:-.5px;line-height:100%;text-align:center;text-decoration:none;' class='templateButton' border='0' cellpadding='15' cellspacing='0'>
                                                            	<tbody><tr>
                                                                	<td class='templateButtonContent' valign='middle'  >
                                                                    	<div mc:edit='std_content01'>
                                                                        	<a style=' padding:0; color: #ffffff;
    font-family: Arial;
    font-size: 15px;
    font-weight: bold;
    letter-spacing: -0.5px;
    line-height: 100%;
    text-align: center;
    text-decoration: none;' href='http://www.sportline.com.pa/reclutamiento/' target='_blank'>Ingrese Ahora</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Standard Content \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Footer \\ -->
            <table style=' background-color:#FFFFFF; border-top:0;' id='templateFooter' border='0' cellpadding='10' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                        	<td class='footerContent' style=' color: #707070;
    font-family: Arial;
    font-size: 12px;
    line-height: 125%;
    text-align: center;' valign='top'>

                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td valign='top'>
                                                            <div mc:edit='std_footer'>
					<em>				Esta es una cuenta de correo no monitoreada. Por favor, no responda o reenvie mensajes a esta dirección.
Para mayor información comuníquese con nosotros a través de la siguiente cuenta de correo: 	</em><br>
<strong>prueba.@mail.com</strong><br>						<em>Copyright © *|$anio| SportLine, Todos Los Derechos Reservados.</em>
																<br>

																<br>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  style=' background-color:#FFFFFF;border:0;' id='utility' valign='middle'>
                                                            <div mc:edit='std_utility'>
                                                                &nbsp;<a href='http://www.sportline.com.pa/' target='_blank'>Visite Nuestra Pagina</a> | <a href='http://www.sportline.com.pa/reclutamiento/'>Actualiza tus Datos</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Transactional Footer \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </tbody></table>
                        <br>
                    </td>
                </tr>
            </tbody></table>
        </center>";




//con la función mail de PHP enviamos el mail.
		mail($Email, 'Bienvenido(a) a SPORTLINE ', $message, $headers);




	}
	protected function recuperar_correo($Email,$link)
	{
		$uniqueid = uniqid('np');
		$anio=date('Y');
		//indicamos las cabeceras del correo
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: SPORTLINE \r\n";
		$headers .= "Subject: Test mail\r\n";
		//lo importante es indicarle que el Content-Type
		//es multipart/alternative para indicarle que existirá
		//un contenido alternativo
		$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid . "\r\n";

		$message = "";

		$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
		$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
		$message .= "E-mail en Texto Plano sin formato.";

		$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
		$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
		$message .= "Cambio de Contraseña SportLine";



		$message .= " 	<center>
        	<table style=' height:100% !important; margin:0; padding:0; width:100% !important;' id='backgroundTable' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'>
            	<tbody><tr>
                	<td style='padding-top:20px;' align='center' valign='top'>
                    	<table style=' border: 1px solid #DDDDDD;' border='0' cellpadding='0' cellspacing='0' width='600'>
                        	<tbody><tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Header \\ -->
                                	<table style=' background-color:#FFFFFF;
				 border-bottom:0;' border='0' cellpadding='0' cellspacing='0' width='600'>
                                        <tbody><tr>
                                            <td style=' color:#202020;
font-family:Arial; font-size:34px; font-weight:bold; line-height:100%;
padding:0;text-align:center;vertical-align:middle;'>
                                            <br>
                                            	<!-- // Begin Module: Standard Header Image \\ -->
                                            	<a style=' padding:0;' href='http://www.sportline.com.pa'>
                    <img alt='Tienda En Linea' src='http://www.sportline.com.pa/wp-content/uploads/2015/01/logo13.png' height='30%' width='80%'>
                </a>
                                            	<!-- // End Module: Standard Header Image \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Body \\ -->
                                	<table id='templateBody' border='0' cellpadding='0' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                            <td valign='top'>

                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border='0' cellpadding='20' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td style=' background-color:#FFFFFF;
color:#505050; font-family:Arial; font-size:14px; line-height:150%; text-align:left;
' valign='top'>

                   <h1 style=' color:#202020;display:block;font-family:Arial;font-size:26px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' class='h3'>Cambio de Contraseña SportLine</h1>

   <strong>Por Favor:</strong>
 Le Invitamos a Ingresar al siguiente enlace:
                             <br>
                                                                <br>

														</td>
                                                    </tr>
                                                    <tr>
                                                    	<td style='padding-top:0;' align='center' valign='top'>
            <table style=' -moz-border-radius:3px;-webkit-border-radius:3px;background-color:#336699;border:0;border-collapse:separate !important;border-radius:3px;color:#FFFFFF;font-family:Arial;font-size:15px; font-weight:bold;letter-spacing:-.5px;line-height:100%;text-align:center;text-decoration:none;' class='templateButton' border='0' cellpadding='15' cellspacing='0'>
                                                            	<tbody><tr>
                                                                	<td class='templateButtonContent' valign='middle'  >
                                                                    	<div mc:edit='std_content01'>
                                                                        	<a style=' padding:0; color: #ffffff;
    font-family: Arial;
    font-size: 15px;
    font-weight: bold;
    letter-spacing: -0.5px;
    line-height: 100%;
    text-align: center;
    text-decoration: none;' href='".$link."'  target='_blank'>Ingrese Ahora</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Standard Content \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Footer \\ -->
            <table style=' background-color:#FFFFFF; border-top:0;' id='templateFooter' border='0' cellpadding='10' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                        	<td class='footerContent' style=' color: #707070;
    font-family: Arial;
    font-size: 12px;
    line-height: 125%;
    text-align: center;' valign='top'>

                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td valign='top'>
                                                            <div mc:edit='std_footer'>
					<em>				Esta es una cuenta de correo no monitoreada. Por favor, no responda o reenvie mensajes a esta dirección.
Para mayor información comuníquese con nosotros a través de la siguiente cuenta de correo: 	</em><br>
<strong>prueba.@mail.com</strong><br>						<em>Copyright © *|$anio| SportLine, Todos Los Derechos Reservados.</em>
																<br>

																<br>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  style=' background-color:#FFFFFF;border:0;' id='utility' valign='middle'>
                                                            <div mc:edit='std_utility'>
                                                                &nbsp;<a href='http://www.sportline.com.pa/' target='_blank'>Visite Nuestra Pagina</a> | <a href='http://www.sportline.com.pa/reclutamiento/'>Actualiza tus Datos</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Transactional Footer \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </tbody></table>
                        <br>
                    </td>
                </tr>
            </tbody></table>
        </center>";














		$message .= "\r\n\r\n--" . $uniqueid . "--";

//con la función mail de PHP enviamos el mail.
		mail($Email, 'Cambio de Contraseña SPORTLINE ', $message, $headers);




	}

	protected function envio_clave($Email)
	{
		$uniqueid = uniqid('np');
		$anio=date('Y');
		//indicamos las cabeceras del correo
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: SPORTLINE \r\n";
		$headers .= "Subject: Test mail\r\n";
		//lo importante es indicarle que el Content-Type
		//es multipart/alternative para indicarle que existirá
		//un contenido alternativo
		$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid . "\r\n";

		$message = "";

		$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
		$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
		$message .= "E-mail en Texto Plano sin formato.";

		$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
		$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";

		$message .= "<br>";
		$message .= "<br><br>";
		$message .= " 	<center>
        	<table style=' height:100% !important; margin:0; padding:0; width:100% !important;' id='backgroundTable' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'>
            	<tbody><tr>
                	<td style='padding-top:20px;' align='center' valign='top'>
                    	<table style=' border: 1px solid #DDDDDD;' border='0' cellpadding='0' cellspacing='0' width='600'>
                        	<tbody><tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Header \\ -->
                                	<table style=' background-color:#FFFFFF;
				 border-bottom:0;' border='0' cellpadding='0' cellspacing='0' width='600'>
                                        <tbody><tr>
                                            <td style=' color:#202020;
font-family:Arial; font-size:34px; font-weight:bold; line-height:100%;
padding:0;text-align:center;vertical-align:middle;'>
                                            <br>
                                            	<!-- // Begin Module: Standard Header Image \\ -->
                                            	<a style=' padding:0;' href='http://www.sportline.com.pa'>
                    <img alt='Tienda En Linea' src='http://www.sportline.com.pa/wp-content/uploads/2015/01/logo13.png' height='30%' width='80%'>
                </a>
                                            	<!-- // End Module: Standard Header Image \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Body \\ -->
                                	<table id='templateBody' border='0' cellpadding='0' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                            <td valign='top'>

                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border='0' cellpadding='20' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td style=' background-color:#FFFFFF;
color:#505050; font-family:Arial; font-size:14px; line-height:150%; text-align:left;
' valign='top'>

                   <h1 style=' color:#202020;display:block;font-family:Arial;font-size:26px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' class='h3'>Cambio de Clave</h1>


 Se ha modificado su contraseña, en caso de observaciones puede comuicarse por medio de la siguiente direccion: xxxx.ejemplo.com
                             <br>
                                                                <br>

														</td>
                                                    </tr>
                                                    <tr>
                                                    	<td style='padding-top:0;' align='center' valign='top'>

                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Standard Content \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Footer \\ -->
            <table style=' background-color:#FFFFFF; border-top:0;' id='templateFooter' border='0' cellpadding='10' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                        	<td class='footerContent' style=' color: #707070;
    font-family: Arial;
    font-size: 12px;
    line-height: 125%;
    text-align: center;' valign='top'>

                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td valign='top'>
                                                            <div mc:edit='std_footer'>
					<em>				Esta es una cuenta de correo no monitoreada. Por favor, no responda o reenvie mensajes a esta dirección.
Para mayor información comuníquese con nosotros a través de la siguiente cuenta de correo: 	</em><br>
<strong>prueba.@mail.com</strong><br>						<em>Copyright © *|$anio| SportLine, Todos Los Derechos Reservados.</em>
																<br>

																<br>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  style=' background-color:#FFFFFF;border:0;' id='utility' valign='middle'>
                                                            <div mc:edit='std_utility'>
                                                                &nbsp;<a href='http://www.sportline.com.pa/' target='_blank'>Visite Nuestra Pagina</a> | <a href='http://www.sportline.com.pa/reclutamiento/'>Actualiza tus Datos</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Transactional Footer \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </tbody></table>
                        <br>
                    </td>
                </tr>
            </tbody></table>
        </center>";


		$message .= "\r\n\r\n--" . $uniqueid . "--";





























//con la función mail de PHP enviamos el mail.
		mail($Email, 'Cambio Exitoso de Contraseña', $message, $headers);




	}




}
