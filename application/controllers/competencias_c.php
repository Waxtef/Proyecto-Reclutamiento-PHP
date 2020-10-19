<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competencias_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('competencias_model');
        $this->load->helper('competencias');
        //empleados
        $this->load->model('empleados_model');
        //Competencias
        $this->load->model('idiomas_model');
        
        
    }
    public functioN crear()
    {
        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();

        $this->load->view('Competencias/create',$data);
    }
    public function form_validation()
    {
    
        //validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|max_length[30]');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[20]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                
                $descripcion = $this->db->escape($_POST["descripcion"]);
                $estado= $this->db->escape($_POST["estado"]);
                
                if ($this->competencias_model->Save_Competencia($descripcion,$estado))
                {
                    header("Location:".base_url()."index.php/competencias_c/crear/Guardado_exitoso");
                    echo "true";
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
        $this->Mostrar_Competencia();
    }
    public function Mostrar_Competencia(){

        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $this->load->view('Competencias/list',$data);
        
    }
    public function deleteCompetencia(int $id)
	{
                if ($this->competencias_model->DeleteCompetencia($id))
                {
                    header("Location:".base_url()."index.php/competencias_c/Mostrar_Competencia");
                }
           

    }
    public function modifyCompetencia($id = null)
	{
		if (!$id == null)
		{
            $id = $this->db->escape((int)$id);
            $data['comp'] = $this->competencias_model->getValue($id);
            $data['empleado'] = $this->empleados_model->getEmpleado();
            $data['idioma'] = $this->idiomas_model->getIdiomas();
            $data['competencia'] = $this->competencias_model->getCompetencias();
			$this->load->view("Competencias/edit", $data);
		}
		else
		{
            header("Location:".base_url()."index.php/Competencias_c/Mostrar_Competencia");

		}
    }
    public function UpdateCompetencia()
	{
		//validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|max_length[30]');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[20]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                $id = $this->db->escape((int)$_POST["id"]);
                $descripcion = $this->db->escape($_POST["descripcion"]);
                $estado= $this->db->escape($_POST["estado"]);
                
			      if ($this->competencias_model->UpdateCompetencia($id,$descripcion,$estado))
			      {
				     header("Location:".base_url()."index.php/competencias_c/editado_exitoso");
                  }
                  else{
                    echo ("error al editar");
                }
    }
    }
}
    public function index()
	{
		header("Location:".base_url()."index.php/competencias_c/Mostrar_Competencia");
    }
    


}?>