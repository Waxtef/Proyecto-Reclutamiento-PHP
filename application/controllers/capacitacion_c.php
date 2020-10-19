<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capacitacion_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('capacitacion_model');
        $this->load->helper('capacitacion');
        //empleados
        $this->load->model('empleados_model');
        //idiomas
        $this->load->model('idiomas_model');
        //idiomas
        $this->load->model('competencias_model');
        
        
    }
    public functioN crear()
    {
        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();

        $this->load->view('Capacitacion/create',$data);
    }
    public function form_validation()
    {
    
        //validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|max_length[30]');
        $this->form_validation->set_rules('nivel', 'Nivel', 'required|max_length[30]');
        $this->form_validation->set_rules('f_desde', 'Fecha Desde', 'required|max_length[30]');
        $this->form_validation->set_rules('f_hasta', 'Fecha Hasta', 'required|max_length[30]');
        $this->form_validation->set_rules('institucion', 'Institucion', 'required|max_length[30]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                
                $descripcion = $this->db->escape($_POST["descripcion"]);
                $nivel= $this->db->escape($_POST["nivel"]);
                $f_desde= ($this->db->escape($_POST["f_desde"]));
                $f_hasta= ($this->db->escape($_POST["f_hasta"]));
                $institucion= $this->db->escape($_POST["institucion"]);
                
                if ($this->capacitacion_model->Save_Capacitacion($descripcion,$nivel,$f_desde,$f_hasta,$institucion))
                {
                    header("Location:".base_url()."index.php/capacitacion_c/crear/Guardado_exitoso");
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
        $this->Mostrar_Capacitacion();
    }
    public function Mostrar_Capacitacion(){

        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
        $this->load->view('Capacitacion/list',$data);
        
    }
    public function deleteCapacitacion(int $id)
	{
                if ($this->capacitacion_model->DeleteCapacitacion($id))
                {
                    header("Location:".base_url()."index.php/capacitacion_c/Mostrar_Capacitacion");
                }
           

    }
    public function modifyCapacitacion($id = null)
	{
		if (!$id == null)
		{
            $id = $this->db->escape((int)$id);
            $data['cap'] = $this->capacitacion_model->getValue($id);
            $data['empleado'] = $this->empleados_model->getEmpleado();
            $data['idioma'] = $this->idiomas_model->getIdiomas();
            $data['competencia'] = $this->competencias_model->getCompetencias();
            $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
			$this->load->view("Capacitacion/edit", $data);
		}
		else
		{
            header("Location:".base_url()."index.php/capacitacion_c/Mostrar_Capacitacion");

		}
    }
    public function UpdateCapacitacion()
	{
		//validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|max_length[30]');
        $this->form_validation->set_rules('nivel', 'Nivel', 'required|max_length[30]');
        $this->form_validation->set_rules('f_desde', 'Fecha Desde', 'required|max_length[30]');
        $this->form_validation->set_rules('f_hasta', 'Fecha Hasta', 'required|max_length[30]');
        $this->form_validation->set_rules('institucion', 'Institucion', 'required|max_length[30]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                $id = $this->db->escape((int)$_POST["id"]);
                $descripcion = $this->db->escape($_POST["descripcion"]);
                $nivel= $this->db->escape($_POST["nivel"]);
                $f_desde= $this->db->escape($_POST["f_desde"]);
                $f_hasta= $this->db->escape($_POST["f_hasta"]);
                $institucion= $this->db->escape($_POST["institucion"]);
                
			      if ($this->capacitacion_model->UpdateCapacitacion($id,$descripcion,$nivel,$f_desde,$f_hasta,$institucion))
			      {
				     header("Location:".base_url()."index.php/capacitacion_c/editado_exitoso");
                  }
                  else{
                    echo ("error al editar");
                }
    }
    }
}
    public function index()
	{
		header("Location:".base_url()."index.php/capacitacion_c/Mostrar_Capacitacion");
    }
    


}?>