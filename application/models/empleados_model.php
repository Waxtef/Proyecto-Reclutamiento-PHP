<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Empleados_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function countEmpleado(){
        return $this->db->query("SELECT Id_Empleado FROM Empleado where Estado = 'Activo' ")->result();
    }
    public function Save_Empleado(string $cedula,string $nombre, string $departamento, string $f_ingreso,string $puesto, string $salario, string $estado )
    { 
        //$this->db->insert('Empleados',$data);
        return $this->db->query("INSERT INTO Empleados (Cedula,Nombre,Departamento,F_ingreso,Puesto,Salario, Estado) values ({$cedula},{$nombre},{$departamento},{$f_ingreso},{$puesto},{$salario},{$estado})");

    }
    public function getEmpleado()
	{
		return $this->db->query("SELECT Id_Empleado,Cedula,Nombre,F_Ingreso,Departamento,Puesto,Salario,Estado FROM Empleados ")->result();
    }
    public function deleteEmpleado(int $id)
	{
		return $this->db->query("DELETE FROM Empleados WHERE Id_Empleado = {$id}");
    }
    public function getValue(int $id)
	{
		return $this->db->query("SELECT Id_Empleado,Cedula,Nombre,F_Ingreso,Departamento,Puesto,Salario,Estado FROM Empleados WHERE Id_Empleado = {$id}")->row();
    }
    public function UpdateEmpleado(int $id, string $cedula,string $nombre, string $departamento,string $puesto, string $salario, string $estado)
	{
		return $this->db->query("UPDATE Empleados SET Nombre ={$nombre},Cedula={$cedula},Departamento={$departamento},puesto={$puesto},Salario={$salario},Estado={$estado} WHERE Id_Empleado = {$id}");
    }
                        
                            
                        
}
                        

    
                        