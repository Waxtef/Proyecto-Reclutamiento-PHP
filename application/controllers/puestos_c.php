<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puestos_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('puestos_model');
        $this->load->helper('puestos');
        //empleados
        $this->load->model('empleados_model');
        //idiomas
        $this->load->model('idiomas_model');
        //competencias
        $this->load->model('competencias_model');
         //competencias
         $this->load->model('capacitacion_model');
        
        
    }
    public function crear()
    {
        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
        $data['puesto'] = $this->puestos_model->getPuestos();

        $this->load->view('Puestos/create',$data);
    }
    public function form_validation()
    {
    
        //validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[40]');
        $this->form_validation->set_rules('departamento', 'departamento', 'required|max_length[40]');
        $this->form_validation->set_rules('nivel_ri', 'nivel_ri', 'required|max_length[30]');
        $this->form_validation->set_rules('salario_m', 'salario_m', 'required|max_length[10]|greater_than[0]|numeric');
        $this->form_validation->set_rules('salario_M', 'salario_M', 'required|max_length[10]|greater_than[0]|numeric');
        $this->form_validation->set_rules('estado', 'estado', 'required|max_length[30]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                
                
                $nombre = $this->db->escape($_POST["nombre"]);
                $departamento = $this->db->escape($_POST["departamento"]);
                $nivel_ri= $this->db->escape($_POST["nivel_ri"]);
                $salario_m= ($this->db->escape($_POST["salario_m"]));
                $salario_M= ($this->db->escape($_POST["salario_M"]));
                $estado= $this->db->escape($_POST["estado"]);
                
                if($salario_m > $salario_M){
                    header("Location:".base_url()."index.php/puestos_c/crear/salario_invalido");
                }else{
                if ($this->puestos_model->Save_Puestos($nombre,$departamento,$nivel_ri,$salario_m,$salario_M, $estado))
                {
                    header("Location:".base_url()."index.php/puestos_c/crear/Guardado_exitoso");
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
    

    public function Guardado_exitoso()
    {
        $this->crear();
    }
    public function editado_exitoso()
    {
        $this->Mostrar_Puestos();
    }
    public function salario_invalido(){
        $this->crear();
    }
    public function Mostrar_Puestos(){

        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
        $data['puesto'] = $this->puestos_model->getPuestos();
        $this->load->view('Puestos/list',$data);
        
    }
    public function deletePuestos(int $id)
	{
                if ($this->puestos_model->DeletePuestos($id))
                {
                    header("Location:".base_url()."index.php/puestos_c/Mostrar_Puestos");
                }
           

    }
    public function modifyPuestos($id = null)
	{
		if (!$id == null)
		{
            $id = $this->db->escape((int)$id);
            $data['pue'] = $this->puestos_model->getValue($id);
            $data['empleado'] = $this->empleados_model->getEmpleado();
            $data['idioma'] = $this->idiomas_model->getIdiomas();
            $data['competencia'] = $this->competencias_model->getCompetencias();
            $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
            $data['puesto'] = $this->puestos_model->getPuestos();
			$this->load->view("Puestos/edit", $data);
		}
		else
		{
            header("Location:".base_url()."index.php/puestos_c/Mostrar_Puestos");

		}
    }
    public function UpdatePuestos()
	{
		//validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[40]');
        $this->form_validation->set_rules('departamento', 'Departamento', 'required|max_length[40]');
        $this->form_validation->set_rules('nivel_ri', 'Nivel Riesgo', 'required|max_length[30]');
        $this->form_validation->set_rules('salario_m', 'Salario Minimo', 'required|max_length[10]|greater_than[10000]|numeric');
        $this->form_validation->set_rules('salario_M', 'Salario Maximo', 'required|max_length[10]|greater_than[100000]|numeric');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[30]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                $id = $this->db->escape((int)$_POST["id"]);
                $nombre = $this->db->escape($_POST["nombre"]);
                $departamento = $this->db->escape($_POST["departamento"]);
                $nivel_ri= $this->db->escape($_POST["nivel_ri"]);
                $salario_m= ($this->db->escape($_POST["salario_m"]));
                $salario_M= ($this->db->escape($_POST["salario_M"]));
                $estado= $this->db->escape($_POST["estado"]);

                
			      if ($this->puestos_model->UpdatePuestos($id,$nombre,$departamento,$nivel_ri,$salario_m,$salario_M, $estado))
			      {
				     header("Location:".base_url()."index.php/puestos_c/editado_exitoso");
                  }
                  else{
                    echo ("error al editar");
                }
    }
    }
    }
    
    public function index()
	{
		header("Location:".base_url()."index.php/puestos_c/Mostrar_Puestos");
    }
    


}?>