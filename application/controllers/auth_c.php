<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('usuarios_model');
        
        
    }

	public function Mostrar_Login(){
        $this->load->view('Login/login');
    }
	
    
    public function index()
	{
        header("Location:".base_url()."index.php/auth_c/Mostrar_Login");
    }
    public function login(){
        $this->load->view("Login/login");
    }
    public function Autenticacion(){
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        if ($user=='Josemanuel' && $pass=='40236474714')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            header("Location:".base_url()."index.php/empleados_controller/Mostrar_Empleado");   
        }  
        else{  
            $data['error'] = 'El usuario o clave es incorrecto';  
            $this->load->view("Login/login");
            echo 'El usuario o clave es incorrecto';
        }  
    }
    


}?>