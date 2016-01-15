<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usuario_modelo');
        $this->load->model('Select_modelo');
        $this->load->database('default');
        $this->load->library('session');


    }

    public function index()
    {


        $this->load->view('login/inicio');


    }
    public function acceso()
    {


        $formula = $this->metValidarFormArrayDatos('form', 'formula');
        if($formula!=''){

            $datos = array_merge($formula);

        $datos['cifrado_password'] = $this->cifrado($datos['password']);

        $consulta= $this->Usuario_modelo->get_usuario_verificacion($datos['email'],$datos['cifrado_password']);

        if($consulta==1){

            $usuario= $this->Usuario_modelo->get_usuario($datos['email'],$datos['cifrado_password']);

            foreach($usuario as $fila)
            {
               $id_usuario= $fila->id_usuarios;
               $id_candidato= $fila->Candidato;
               $estatus= $fila->estatus;
            }


            $nuevosdatos = array(
                'id_usuario'  => $id_usuario,
                'id_persona'  => $id_candidato,
                'email'     =>   $datos['email'],
                'estado_ingreso' => $estatus
            );
            $this->session->set_userdata($nuevosdatos);

            redirect('captacion/ingresado');


        }else{
            redirect('login/login/?m=3');
        }
        }else{

            redirect('login/login');
        }


    }


    public function salir(){
        $this->session->userdata = Array();
        $this->session->sess_destroy();
        header('Location: http://www.sportline.com.pa');
    }
    public function cambio_password(){

        $i=$this->session->userdata('id_persona');
        if($i!=''){
            $datos['captado'] = $this->Select_modelo->get_captacion_consulta($i);
        }else{
            $datos['ingreso']=$i;
        }
        $formula = $this->metValidarFormArrayDatos('form','formula');
        if($formula['email']!=''){

            $codigo_F=date("d-m-Y H:i:s");
            $codigo=$this->cifrado($codigo_F);
            $email = $this->Usuario_modelo->get_usuario_email($formula['email']);
            if ($email=='1') {
                $this->Usuario_modelo->get_token($formula['email'],$codigo);
                $link="http://www.sportline.com.pa/reclutamiento/login/login/recuperar_password/?Xs=$codigo";

                $this->recuperar_correo($formula['email'],$link);
            }
        }
        if($i!=''){
            $this->load->view('login/cambio_password',$datos);
        }else{
            $this->load->view('login/cambio_password');
        }

    }
    public function cambio_interno_password(){

        $email=$this->session->userdata('email');
        $i=$this->session->userdata('id_persona');
        $formula = $this->metValidarFormArrayDatos('form','formula');
        $datos['cifrado_password'] = $this->cifrado($formula['password']);
        if($i!=''){
            $consulta= $this->Usuario_modelo->get_usuario_verificacion($email,$datos['cifrado_password']);

            if($consulta==1){
                $datos['opcion'] ='modificado';
                $datos['cifrado_password1'] = $this->cifrado($formula['password1']);
                $this->Usuario_modelo->get_cambio_interno_password($email,$datos['cifrado_password1']);
                $datos['captado'] = $this->Select_modelo->get_captacion_consulta($i);
                $this->envio_clave($email);
                redirect('captacion/ingresado');

            }else{
                $datos['captado'] = $this->Select_modelo->get_captacion_consulta($i);
                $datos['ingreso']=$i;
                $datos['mensaje']='Su Clave Nos es Correcta';
                $this->load->view('login/cambio_password',$datos);

        }






    }

    }




    public function recuperar_password()
    {

        $this->load->view('login/recuperar_password');

    }
    public function actualizar_password()
    {

        $formula = $this->metValidarFormArrayDatos('form', 'formula');

        $datos = array_merge($formula);

        $datos['cifrado_password'] = $this->cifrado($datos['password']);
        $this->Usuario_modelo->get_password($datos['token'],$datos['cifrado_password']);

        redirect('login/login/?m=4');

    }




}
