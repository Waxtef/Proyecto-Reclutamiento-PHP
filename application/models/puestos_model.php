<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Puestos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function countPuestos(){
        return $this->db->query("SELECT Id_Puesto FROM Puestos ")->result();
    }
    public function Save_Puestos(string $nombre,string $departamento,string $nivel_ri, string $salario_m, string $salario_M , string $estado)
    { 
        //$this->db->insert('Empleados',$data);
        return $this->db->query("INSERT INTO Puestos (Nombre, Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado) values ({$nombre},{$departamento},{$nivel_ri},{$salario_m},{$salario_M},{$estado})");

    }
    public function getPuestos()
	{
		return $this->db->query("SELECT Id_Puesto,Nombre,Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado FROM Puestos ")->result();
    }
    public function DeletePuestos(int $id)
	{
		return $this->db->query("DELETE FROM Puestos WHERE Id_Puesto = {$id}");
    }
    public function getValue(int $id)
	{
		return $this->db->query("SELECT Id_Puesto,Nombre,Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado FROM Puestos WHERE Id_Puesto = {$id}")->row();
    }
    public function UpdatePuestos(int $id, string $nombre,string $departamento,string $nivel_ri, string $salario_m, string $salario_M , string $estado)
	{
		return $this->db->query("UPDATE Puestos SET Nombre ={$nombre},Departamento ={$departamento},Nivel_riesgo={$nivel_ri},Salario_min={$salario_m},Salario_max={$salario_M},Estado={$estado} WHERE Id_Puesto= {$id}");
    }
                        
                            
                        
}
                        

    
                        