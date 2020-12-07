<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidatos_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('candidatos_model');
        $this->load->helper('candidatos');
        //empleados
        $this->load->model('empleados_model');
        //idiomas
        $this->load->model('idiomas_model');
        //competencias
        $this->load->model('competencias_model');
         //competencias
         $this->load->model('capacitacion_model');
          //competencias
          $this->load->model('puestos_model');
        
        
    }
    public functioN crear()
    {
        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
        $data['puesto'] = $this->puestos_model->getPuestos();
        $data['candidato'] = $this->candidatos_model->getCandidatos();

        $this->load->view('Candidatos/create',$data);
    }
    public function form_validation()
    {
    
        //validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('cedula', 'Cedula', 'required|max_length[12]|numeric');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[40]');
        $this->form_validation->set_rules('puesto', 'Puesto', 'required|max_length[30]');
        $this->form_validation->set_rules('departamento', 'departamento', 'required|max_length[40]');
        $this->form_validation->set_rules('salario', 'salario', 'required|max_length[10]|greater_than[10000]|numeric');
        $this->form_validation->set_rules('competencia', 'competencias', 'required|max_length[10]');
        $this->form_validation->set_rules('capacitacion', 'capacitacion', 'required|max_length[10]');
        $this->form_validation->set_rules('experiencia', 'experiencia', 'required|max_length[10]');
        $this->form_validation->set_rules('recomendado', 'Recomendado', 'required|max_length[40]');
        

        if($this->form_validation->run()){
            //true
            

           
            if($this->input->post())
            {
                $cedula = $this->db->escape($_POST["cedula"]);
                $nombre = $this->db->escape($_POST["nombre"]);
                $puesto = $this->db->escape($_POST["puesto"]);
                $departamento = $this->db->escape($_POST["departamento"]);
                $salario= $this->db->escape($_POST["salario"]);
                $competencia= $this->db->escape($_POST["competencia"]);
                $capacitacion= $this->db->escape($_POST["capacitacion"]);
                $experiencia= $this->db->escape($_POST["experiencia"]);
                $recomendado= $this->db->escape($_POST["recomendado"]);
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
                    header("Location:".base_url()."index.php/candidatos_c/reclutar/cedula_invalida");

                }else{
                    if ($this->cadidatos_model->Save_Candidatos($cedula,$nombre,$puesto,$departamento,$salario,$competencia,$capacitacion,$experiencia,$recomendado))
                    {
                        header("Location:".base_url()."index.php/empleados_controller/login");
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
        $this->Mostrar_Candidatos();
    }
    public function Mostrar_Candidatos(){

        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
        $data['puesto'] = $this->puestos_model->getPuestos();
        $data['candidato'] = $this->candidatos_model->getCandidatos();
        $this->load->view('Candidatos/list',$data);
        
    }
    public function deleteCandidatos(int $id)
	{
                if ($this->Candidatos_model->DeleteCandidatos($id))
                {
                    header("Location:".base_url()."index.php/candidatos_c/Mostrar_Candidatos");
                }
           

    }
    public function modifyCandidatos($id = null)
	{
		if (!$id == null)
		{
            $id = $this->db->escape((int)$id);
            $data['pue'] = $this->Candidatos_model->getValue($id);
            $data['empleado'] = $this->empleados_model->getEmpleado();
            $data['idioma'] = $this->idiomas_model->getIdiomas();
            $data['competencia'] = $this->competencias_model->getCompetencias();
            $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
            $data['puesto'] = $this->Candidatos_model->getCandidatos();
			$this->load->view("Candidatos/edit", $data);
		}
		else
		{
            header("Location:".base_url()."index.php/Candidatos_c/Mostrar_Candidatos");

		}
    }
    public function UpdateCandidatos()
	{
		//validacion del form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[40]');
        $this->form_validation->set_rules('departamento', 'Departamento', 'required|max_length[40]');
        $this->form_validation->set_rules('nivel_ri', 'Nivel Riesgo', 'required|max_length[30]');
        $this->form_validation->set_rules('salario_m', 'Salario Minimo', 'required|max_length[10]|greater_than[10000]|numeric');
        $this->form_validation->set_rules('salario_M', 'Salario Maximo', 'required|max_length[10]|greater_than[25000]|numeric');
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
                
			      if ($this->Candidatos_model->UpdateCandidatos($id,$nombre,$departamento,$nivel_ri,$salario_m,$salario_M, $estado))
			      {
				     header("Location:".base_url()."index.php/Candidatos_c/editado_exitoso");
                  }
                  else{
                    echo ("error al editar");
                }
    }
    }
}
    public function index()
	{
		header("Location:".base_url()."index.php/Candidatos_c/Mostrar_Candidatos");
    }
    public function reclutamiento()
    {
        $data['empleado'] = $this->empleados_model->getEmpleado();
        $data['idioma'] = $this->idiomas_model->getIdiomas();
        $data['competencia'] = $this->competencias_model->getCompetencias();
        $data['capacitacion'] = $this->capacitacion_model->getCapacitacion();
        $data['puesto'] = $this->puestos_model->getPuestos();
        $this->load->view('Candidatos/reclutar', $data);
    }
    
    public function reclutamiento2()
    {
        
        $this->load->view('Candidatos/reclutamiento');
    }


}?>