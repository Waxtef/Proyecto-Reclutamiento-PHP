<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        
    }
    public function login($user, $password)
    {
        $this->db->where("nombre", $user);
        $this->db->where("clave", $password);
        $res = $this->db->get("Usuarios");
        if($res->num_rows() > 0){
            return $res->row();
        }else{
            return false;
        }
    }
    public function countUser(){
        return $this->db->query("SELECT Id_Puesto FROM User ")->result();
    }
    public function Save_User(string $nombre,string $departamento,string $nivel_ri, string $salario_m, string $salario_M , string $estado)
    { 
        //$this->db->insert('Empleados',$data);
        return $this->db->query("INSERT INTO User (Nombre, Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado) values ({$nombre},{$departamento},{$nivel_ri},{$salario_m},{$salario_M},{$estado})");

    }
    public function getUser()
	{
		return $this->db->query("SELECT Id_Puesto,Nombre,Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado FROM User ")->result();
    }
    public function DeleteUser(int $id)
	{
		return $this->db->query("DELETE FROM User WHERE Id_Puesto = {$id}");
    }
    public function getValue(int $id)
	{
		return $this->db->query("SELECT Id_Puesto,Nombre,Departamento, Nivel_riesgo, Salario_min, Salario_max,Estado FROM User WHERE Id_Puesto = {$id}")->row();
    }
    public function UpdateUser(int $id, string $nombre,string $departamento,string $nivel_ri, string $salario_m, string $salario_M , string $estado)
	{
		return $this->db->query("UPDATE User SET Nombre ={$nombre},Departamento ={$departamento},Nivel_riesgo={$nivel_ri},Salario_min={$salario_m},Salario_max={$salario_M},Estado={$estado} WHERE Id_Puesto= {$id}");
    }
                        
                            
                        
}