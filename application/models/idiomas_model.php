<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Idiomas_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function countIdiomas(){
        return $this->db->query("SELECT Id_Idioma FROM Idiomas where Estado = 'Activo' ")->result();
    }
    public function Save_Idioma(string $nombre, string $estado )
    { 
        //$this->db->insert('Empleados',$data);
        return $this->db->query("INSERT INTO Idiomas (Nombre,Estado) values ({$nombre},{$estado})");

    }
    public function getIdiomas()
	{
		return $this->db->query("SELECT Id_Idioma,Nombre,Estado FROM Idiomas ")->result();
    }
    public function DeleteIdioma(int $id)
	{
		return $this->db->query("DELETE FROM Idiomas WHERE Id_Idioma = {$id}");
    }
    public function getValue(int $id)
	{
		return $this->db->query("SELECT Id_Idioma,Nombre,Estado FROM Idiomas WHERE Id_Idioma = {$id}")->row();
    }
    public function UpdateIdioma(int $id, string $nombre,string $estado)
	{
		return $this->db->query("UPDATE Idiomas SET Nombre ={$nombre},Estado={$estado} WHERE Id_Idioma= {$id}");
    }
                        
                            
                        
}
                        

    
                        