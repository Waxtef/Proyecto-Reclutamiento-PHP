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
    public function Save_Candidatos(string $cedula,string $nombre, int $puesto,int $departamento,string $salario, string $recomendado)
    { 
        //$this->db->insert('Candiddatos',$data);
        return $this->db->query("INSERT INTO Candidatos (Cedula, Nombre, puesto, departamento, Salario, Recomendado) values ({$cedula},{$nombre},{$puesto},{$departamento},{$salario},{$recomendado})");

    }
    public function Save_Competencias(int $id_ca, int $id_co){
        return $this->db->query("INSERT INTO Candidato_Competencia (Id_Candidato, Id_Competencia) values ({$id_ca},{$id_co})");

    }
    public function Save_Capacitacion(int $id_ca,string $descripcion,string $f_desde, string $f_hasta,string $nivel, string $institucion){
        return $this->db->query("INSERT INTO Capacitacion (Id_Candidato,Descripcion,Nivel, F_desde, F_Hasta,Institucion) values ({$id_ca},{$descripcion},{$nivel},{$f_desde},{$f_hasta},{$institucion})");
    }

    public function Save_Exp(int $id_ca,string $empresa,string $puesto,string $f_desde, string $f_hasta,string $salario){
        return $this->db->query("INSERT INTO Experiencia (Id_Candidato,Empresa,Puesto, F_Desde, F_Hasta,Salario) values ({$id_ca},{$empresa},{$puesto},{$f_desde},{$f_hasta},{$salario})");
    }
    
    public function getCandidatos()
	{
		return $this->db->query("SELECT Id_Candidatos,Cedula,Nombre,puesto,departamento,Salario,Recomendado FROM Candidatos ")->result();
    }
    public function DeleteCandidatos(int $id)
	{
		return $this->db->query("DELETE FROM Candidatos WHERE Id_Puesto = {$id}");
    }
    public function getId(string $cedula){

        return $this->db->query("SELECT Id_Candidatos FROM Candidatos WHERE Cedula = {$cedula}")->row();;
    }

    public function getId_byid(int $id_ca){

        return $this->db->query("SELECT Id_Candidatos FROM Candidatos WHERE Id_Candidatos = {$id_ca}")->row();;
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
                        

    
                        