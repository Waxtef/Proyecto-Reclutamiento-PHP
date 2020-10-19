<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Candidatos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function countCandidatos(){
        return $this->db->query("SELECT Id_Puesto FROM Candidatos ")->result();
    }
    public function Save_Candidatos(string $nombre,string $departamento,string $nivel_ri, string $salario_m, string $salario_M , string $estado)
    { 
        //$this->db->insert('Empleados',$data);
        return $this->db->query("INSERT INTO Candidatos (Nombre, Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado) values ({$nombre},{$departamento},{$nivel_ri},{$salario_m},{$salario_M},{$estado})");

    }
    
    public function getCandidatos()
	{
		return $this->db->query("SELECT Id_Candidatos,Cedula,Nombre,puesto,departamento,Salario,competencias, capacitacion,experiencia,Recomendado FROM Candidatos ")->result();
    }
    public function DeleteCandidatos(int $id)
	{
		return $this->db->query("DELETE FROM Candidatos WHERE Id_Puesto = {$id}");
    }
    public function getValue(int $id)
	{
		return $this->db->query("SELECT Id_Puesto,Nombre,Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado FROM Candidatos WHERE Id_Puesto = {$id}")->row();
    }
    public function UpdateCandidatos(int $id, string $nombre,string $departamento,string $nivel_ri, string $salario_m, string $salario_M , string $estado)
	{
		return $this->db->query("UPDATE Candidatos SET Nombre ={$nombre},Departamento ={$departamento},Nivel_riesgo={$nivel_ri},Salario_min={$salario_m},Salario_max={$salario_M},Estado={$estado} WHERE Id_Puesto= {$id}");
    }
                        
                            
                        
}
                        

    
                        