<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usuario_modelo');
        $this->load->database('default');
        $this->load->library('session');


    }

    public function index()
    {


        $this->load->view('login/inicio');


    }
    public function registro()
    {

        $formula = $this->metValidarFormArrayDatos('form', 'formula');
        $texto = $this->metValidarFormArrayDatos('form', 'txt');
        $int = $this->metValidarFormArrayDatos('form', 'int');
        $datos = array_merge($formula,$texto,$int);

        if (in_array('error',$datos)) {
            $datos['status'] = 'error';

        }else {
            $datos['cifrado_password'] = $this->cifrado($datos['password']);
            $persona=$this->Usuario_modelo->get_candidato_cedula($datos['CEDULA']);
            $email = $this->Usuario_modelo->get_usuario_email($datos['email']);
            if ($persona=='0') {
            if ($email=='0') {
                    //Registro de Candidato
                $id = $this->Usuario_modelo->get_usuario_candidato($datos['nombre'],$datos['apellido'],$datos['email'],$datos['CEDULA']);
                $datos['id_candidato'] = $id;
                if (is_numeric($datos['id_candidato'])) {
                    //Registro de Usuario
                    $usuario = $this->Usuario_modelo->get_usuario_nuevo($datos['email'],$datos['cifrado_password'],$datos['id_candidato']);
                    $datos['id_usuario'] = $usuario;

                    if (is_numeric($datos['id_usuario'])) {

                        $nombre="".$datos['nombre']." ".$datos['apellido']."";
                        $this->envio_correo($datos['email'],$nombre);

                        redirect('login/login/?m=1');
                    }else{
                        $datos['statusT']="Error en la Transaacion";
                        redirect('login/login/?m=3');
                       // header('Location: http://www.sportline.com.pa/reclutamiento/login/login/?m=3');
                    }
                }else{
                    redirect('login/login/?m=3');
                    //header('Location: http://www.sportline.com.pa/reclutamiento/login/login/?m=3');
                    $datos['statusT']="Error en la Transaccion";
                }

            }else{
                redirect('login/login/?m=2');
               // header('Location: http://www.sportline.com.pa/reclutamiento/login/login/?m=2');

            }}else{
                redirect('login/login/?m=5');
            }

            exit;


        }
    }




}
