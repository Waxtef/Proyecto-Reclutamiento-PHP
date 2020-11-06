<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('empleados_model');
        $this->load->helper('empleados');
        
        
    }

	
	
    public functioN crear()
    {
        $this->load->view('Empleados/create');
    }
    public function form_validation()
    {
    
        //validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('cedula', 'Cedula', 'required|max_length[12]|numeric');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[30]');
        $this->form_validation->set_rules('f_ingreso', 'Fecha', 'required');
        $this->form_validation->set_rules('departamento', 'Departamento', 'required|max_length[40]');
        $this->form_validation->set_rules('puesto', 'Puesto', 'required|max_length[40]');
        $this->form_validation->set_rules('salario', 'Salario', 'required|max_length[10]|greater_than[10000]|numeric');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[20]');

        if($this->form_validation->run()){
            //true
            echo 1;

            $this->load->model('empleados_model');
            if($this->input->post())
            {
                echo 2;
                $cedula = $this->db->escape($_POST["cedula"]);
                $nombre = $this->db->escape($_POST["nombre"]);
                $f_ingreso = $this->db->escape($_POST["f_ingreso"]);
                $departamento = $this->db->escape($_POST["departamento"]);
                $puesto= $this->db->escape($_POST["puesto"]);
                $salario= $this->db->escape($_POST["salario"]);
                $estado= $this->db->escape($_POST["estado"]);
                echo 3;
                //validacion cedula
                //-------------------------------------------------
                $c            = str_replace("-", "", $cedula);
                $cedu         = substr($c, 0,  - 1);
                $verificador  = substr($c, - 1, 1);
                $suma         = 0;
                $cedulaValida = 0;
                echo 4;

                if (strlen($cedula) < 11) {
                    $cedulaValida = 0;
                
                }
                for ($i = 0; $i < strlen($cedu); $i++) {
                    $mod = "";

                   if (($i % 2) == 0) {
                    $mod = 1;
                   } else {
                    $mod = 2;
                   }

                   $res = substr($cedu, $i, 1) * $mod;

                   if ($res > 9) {
                   $res = (string) $res;
                   $uno = substr($res, 0, 1);
                   $dos = substr($res, 1, 1);
          
                   $res = $uno + $dos;
                   }

                   $suma += $res;

                }
    
                $el_numero = (10 - ($suma % 10)) % 10;

                if ($el_numero == $verificador && substr($cedu, 0, 3) != "000") {
                $cedulaValida = 1;
                echo true;
                } else {
                $cedulaValida = 0;
                echo false;
                }
            

                
                
                if($cedulaValida == 1){
                    header("Location:".base_url()."index.php/empleados_controller/crear/cedula_invalida");

                }else{
                    if ($this->empleados_model->Save_Empleado($cedula,$nombre,$departamento,$f_ingreso,$puesto,$salario,$estado))
                    {
                        header("Location:".base_url()."index.php/empleados_controller/crear/Guardado_exitoso");
                        echo "true";
                    }

                }
    
            

            }else{
               //false
               $this->index();
               echo "false";
            }
    }
        
    
    }
    public function cedula_invalida(){
        $this->crear();
    }

    public function Guardado_exitoso()
    {
        $this->crear();
    }
    public function editado_exitoso()
    {
        $this->Mostrar_Empleado();
    }
    public function editacion_cedula_invalida(){
        $this->Mostrar_Empleado();
    }
    public function Mostrar_Empleado(){
        
        $empleado = $this->empleados_model->getEmpleado();
        $this->load->view('Empleados/list',compact("empleado"));
        
    }
    public function deleteEmpleado(int $id)
	{
                if ($this->empleados_model->deleteEmpleado($id))
                {
                    header("Location:".base_url()."index.php/empleados_controller/Mostrar_Empleado");
                }
           

    }
    public function modifyEmpleado($id = null)
	{
		if (!$id == null)
		{
            $id = $this->db->escape((int)$id);
            $emp = $this->empleados_model->getValue($id);
			$this->load->view("Empleados/edit", compact("emp"));
		}
		else
		{
            header("Location:".base_url()."index.php/empleados_controller/Mostrar_Empleado");

		}
    }
    public function UpdateEmpleado()
	{
		//validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('cedula', 'Cedula', 'required|max_length[12]|numeric');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[30]');
        $this->form_validation->set_rules('f_ingreso', 'Fecha', 'required');
        $this->form_validation->set_rules('departamento', 'Departamento', 'required|max_length[40]');
        $this->form_validation->set_rules('puesto', 'Puesto', 'required|max_length[40]');
        $this->form_validation->set_rules('salario', 'Salario', 'required|max_length[10]|greater_than[10000]|numeric');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[20]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                $id = $this->db->escape((int)$_POST["id"]);
                $cedula = $this->db->escape($_POST["cedula"]);
                $nombre = $this->db->escape($_POST["nombre"]);
                $f_ingreso = $this->db->escape($_POST["f_ingreso"]);
                $departamento = $this->db->escape($_POST["departamento"]);
                $puesto= $this->db->escape($_POST["puesto"]);
                $salario= $this->db->escape($_POST["salario"]);
                $estado= $this->db->escape($_POST["estado"]);
                 //validacion cedula
                //-------------------------------------------------
                $c            = str_replace("-", "", $cedula);
                $cedu         = substr($c, 0,  - 1);
                $verificador  = substr($c, - 1, 1);
                $suma         = 0;
                $cedulaValida = 0;

                if (strlen($cedula) < 11) {
                   return false;
                }
   
                for ($i = 0; $i < strlen($cedu); $i++) {

        $mod = "";

        if (($i % 2) == 0) {
            $mod = 1;
        } else {
            $mod = 2;
        }

        $res = substr($cedu, $i, 1) * $mod;

        if ($res > 9) {
            $res = (string) $res;
            $uno = substr($res, 0, 1);
            $dos = substr($res, 1, 1);
          
            $res = $uno + $dos;
        }

        $suma += $res;

    }
    
    $el_numero = (10 - ($suma % 10)) % 10;

    if ($el_numero == $verificador && substr($cedu, 0, 3) != "000") {
        $cedulaValida = 1;
    } else {
        $cedulaValida = 0;
    }

                
                
                if($cedulaValida == 1){
                    header("Location:".base_url()."index.php/empleados_controller/crear/cedula_invalida");

                }else{
			      if ($this->empleados_model->UpdateEmpleado($id,$cedula,$nombre,$departamento,$puesto,$salario,$estado))
			      {
				     header("Location:".base_url()."index.php/empleados_controller/editado_exitoso");
			      }else{
                    echo ("error al editar");}}
    }
    }
}
    public function index()
	{
		header("Location:".base_url()."index.php/empleados_controller/Mostrar_Empleado");
    }
    public function login(){
        $this->load->view("Login/login");
    }
    
    


}?>