<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Competencias_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function countCompetencias(){
        return $this->db->query("SELECT Id_Comp FROM Competencias where Estado = 'Activo' ")->result();
    }
    public function Save_Competencia(string $descripcion, string $estado )
    { 
        //$this->db->insert('Empleados',$data);
        return $this->db->query("INSERT INTO Competencias (Descripcion,Estado) values ({$descripcion},{$estado})");

    }
    public function getCompetencias()
	{
		return $this->db->query("SELECT Id_Comp,Descripcion,Estado FROM Competencias ")->result();
    }
    public function DeleteCompetencia(int $id)
	{
		return $this->db->query("DELETE FROM Competencias WHERE Id_Comp = {$id}");
    }
    public function getValue(int $id)
	{
		return $this->db->query("SELECT Id_Comp,Descripcion,Estado FROM Competencias WHERE Id_Comp = {$id}")->row();
    }
    public function UpdateCompetencia(int $id, string $descripcion,string $estado)
	{
		return $this->db->query("UPDATE Competencias SET Descripcion ={$descripcion},Estado={$estado} WHERE Id_Comp= {$id}");
    }
                        
                            
                        
}
                        

    
                        