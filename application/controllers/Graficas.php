<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graficas extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $con = new mysqli('localhost', 'root', '', 'db_votacion');
        $this->db_connection = $con;
        //$this->load->model('Colegio_model','',true);
    }
    //Ventanas
    public function index()
    {
    
        /*$datos= array(
            'Colegios'=> $this->Colegio_model->getColegios(),
        );*/
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Graficas/grafica');
        $this->load->view('Administrador/Colegios/layouts/footer');
    }
    
    public function read_senador($provincia)
	{
		$query = "SELECT COUNT(vtv.id_voto) AS res, CONCAT(cdt.nombre,' ',cdt.apellido) AS names  FROM votante_voto AS vtv 
                INNER JOIN candidato AS cdt ON vtv.id_candidato = cdt.id_candidato
                WHERE cdt.puesto = 3 AND cdt.id_provincia = $provincia
                GROUP BY cdt.id_candidato";
        $senador = $this->db_connection->query($query);
        $i = 0;
		$result = $senador;
		$data = array();
		if ($result->num_rows >= 1)
		{
    		while($row = $result->fetch_object())
			{
				$data[$i] = array(
				"name" => "$row->names",
                "y" => "$row->res"
                );
				$i++;
			}
			$new = json_encode($data);
			echo $new;
		}
    }
    
    public function read_diputado($provincia)
	{
		$query = "SELECT COUNT(vtv.id_voto) AS res, CONCAT(cdt.nombre,' ',cdt.apellido) AS names  FROM votante_voto AS vtv 
                INNER JOIN candidato AS cdt ON vtv.id_candidato = cdt.id_candidato
                WHERE cdt.puesto = 2 AND cdt.id_provincia = $provincia
                GROUP BY cdt.id_candidato";
        $senador = $this->db_connection->query($query);
        $i = 0;
		$result = $senador;
		$data = array();
		if ($result->num_rows >= 1)
		{
    		while($row = $result->fetch_object())
			{
				$data[$i] = array(
				"name" => "$row->names",
                "y" => "$row->res"
                );
				$i++;
			}
			$new = json_encode($data);
			echo $new;
		}
    }
    
    public function read_alcalde($municipio)
	{
		$query = "SELECT COUNT(vtv.id_voto) AS res, CONCAT(cdt.nombre,' ',cdt.apellido) AS names  FROM votante_voto AS vtv 
                INNER JOIN candidato AS cdt ON vtv.id_candidato = cdt.id_candidato
                WHERE cdt.puesto = 4 AND cdt.id_municipio = $municipio
                GROUP BY cdt.id_candidato";
        $senador = $this->db_connection->query($query);
        $i = 0;
		$result = $senador;
		$data = array();
		if ($result->num_rows >= 1)
		{
    		while($row = $result->fetch_object())
			{
				$data[$i] = array(
				"name" => "$row->names",
                "y" => "$row->res"
                );
				$i++;
			}
			$new = json_encode($data);
			echo $new;
		}
    }
    
    public function read_vicealcalde($municipio)
	{
		$query = "SELECT COUNT(vtv.id_voto) AS res, CONCAT(cdt.nombre,' ',cdt.apellido) AS names  FROM votante_voto AS vtv 
                INNER JOIN candidato AS cdt ON vtv.id_candidato = cdt.id_candidato
                WHERE cdt.puesto = 5 AND cdt.id_municipio = $municipio
                GROUP BY cdt.id_candidato";
        $senador = $this->db_connection->query($query);
        $i = 0;
		$result = $senador;
		$data = array();
		if ($result->num_rows >= 1)
		{
    		while($row = $result->fetch_object())
			{
				$data[$i] = array(
				"name" => "$row->names",
                "y" => "$row->res"
                );
				$i++;
			}
			$new = json_encode($data);
			echo $new;
		}
	}
}


?>