<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('user_model');
        
        
    }

	public function Mostrar_Login(){
        $this->load->view('Login/login');
    }
	
    
    public function index()
	{
        header("Location:".base_url()."index.php/auth_c/Mostrar_Login");
    }
    public function Autenticacion(){
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        $res = $this->user_model->login($user,sha1($pass));
        if(!$res){
            redirect(base_url(),'refresh');
            echo 'El usuario o clave es incorrecto';
            
        }else{
            $data = array(
                'id_Usuario'=> $res->id,
                'nombre'=> $res->nombre,
                'login'=> TRUE);
                $this->session->set_userdata($data);
                
                redirect(base_url()."index.php/empleados_controller/index");
                
        }
    }
    


}?>