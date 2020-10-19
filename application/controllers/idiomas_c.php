<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Idiomas_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('idiomas_model');
        $this->load->helper('idiomas');
        //empleados
        $this->load->model('empleados_model');
        
        
    }
    public functioN crear()
    {
        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();

        $this->load->view('Idiomas/create',$data);
    }
    public function form_validation()
    {
    
        //validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[30]');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[20]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                
                $nombre = $this->db->escape($_POST["nombre"]);
                $estado= $this->db->escape($_POST["estado"]);
                
                if ($this->idiomas_model->Save_Idioma($nombre,$estado))
                {
                    header("Location:".base_url()."index.php/idiomas_c/crear/Guardado_exitoso");
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
        $this->Mostrar_Idioma();
    }
    public function Mostrar_Idioma(){

        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $this->load->view('Idiomas/list',$data);
        
    }
    public function deleteIdioma(int $id)
	{
                if ($this->idiomas_model->deleteIdioma($id))
                {
                    header("Location:".base_url()."index.php/idiomas_c/Mostrar_Idioma");
                }
           

    }
    public function modifyIdioma($id = null)
	{
		if (!$id == null)
		{
            $id = $this->db->escape((int)$id);
            $data['ido'] = $this->idiomas_model->getValue($id);
            $data['empleado'] = $this->empleados_model->getEmpleado();
            $data['idioma'] = $this->idiomas_model->getIdiomas();
			$this->load->view("Idiomas/edit", $data);
		}
		else
		{
            header("Location:".base_url()."index.php/idiomas_c/Mostrar_Idioma");

		}
    }
    public function UpdateIdioma()
	{
		//validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[30]');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[20]');

        if($this->form_validation->run()){
            //true
            
            if($this->input->post())
            {
                $id = $this->db->escape((int)$_POST["id"]);
                $nombre = $this->db->escape($_POST["nombre"]);
                $estado= $this->db->escape($_POST["estado"]);
                
			      if ($this->idiomas_model->UpdateIdioma($id,$nombre,$estado))
			      {
				     header("Location:".base_url()."index.php/idiomas_c/editado_exitoso");
                  }
                  else{
                    echo ("error al editar");
                }
    }
    }
}
    public function index()
	{
		header("Location:".base_url()."index.php/idiomas_c/Mostrar_Idioma");
    }
    


}?>