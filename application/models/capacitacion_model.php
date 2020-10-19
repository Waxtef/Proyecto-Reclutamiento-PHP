<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Capacitacion_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function countCapacitacion(){
        return $this->db->query("SELECT Id_Cap FROM Capacitacion ")->result();
    }
    public function Save_Capacitacion(string $descripcion,string $nivel,string $f_desde, string $f_hasta, string $institucion )
    { 
        //$this->db->insert('Empleados',$data);
        return $this->db->query("INSERT INTO Capacitacion (Descripcion,Nivel,F_desde,F_Hasta,Institucion) values ({$descripcion},{$nivel},{$f_desde},{$f_hasta},{$institucion})");

    }
    public function getCapacitacion()
	{
		return $this->db->query("SELECT Id_Cap,Descripcion,Nivel,F_desde,F_Hasta,Institucion FROM Capacitacion ")->result();
    }
    public function DeleteCapacitacion(int $id)
	{
		return $this->db->query("DELETE FROM Capacitacion WHERE Id_Cap = {$id}");
    }
    public function getValue(int $id)
	{
		return $this->db->query("SELECT Id_Cap,Descripcion,Nivel,F_desde,F_Hasta,Institucion FROM Capacitacion WHERE Id_Cap = {$id}")->row();
    }
    public function UpdateCapacitacion(int $id, string $descripcion,string $nivel,date $f_desde, date $f_hasta, string $institucion)
	{
		return $this->db->query("UPDATE Capacitacion SET Descripcion ={$descripcion},Nivel={$nivel},F_desde={$f_desde},F_Hasta={$f_hasta},Institucion={$Institucion} WHERE Id_Cap= {$id}");
    }
                        
                            
                        
}
                        

    
                        