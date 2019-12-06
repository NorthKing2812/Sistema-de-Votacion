<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $con = new mysqli('localhost', 'root', '', 'db_votacion');
        $this->db_connection = $con;
        //$this->load->model('Colegio_model','',true);
    }
    //Ventanas
    public function report_presidencial()
    {
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Reporte/report_presidencial');
        $this->load->view('Administrador/layouts/footer');
    }

    public function report_provincia()
    {
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Reporte/reporte_provincia');
        $this->load->view('Administrador/layouts/footer');
    }
    
    public function read_presidente($tiempo)
	{
		$query = "SELECT COUNT(vtv.id_voto) AS res, CONCAT(cdt.nombre,' ',cdt.apellido) AS names,YEAR(vtv.fecha_voto)  AS tiempo  FROM votante_voto AS vtv 
                INNER JOIN candidato AS cdt ON vtv.id_candidato = cdt.id_candidato
                WHERE cdt.puesto = 1 AND YEAR(vtv.fecha_voto) = $tiempo
                GROUP BY cdt.id_candidato ORDER BY COUNT(vtv.id_voto) DESC";
        $senador = $this->db_connection->query($query);
        $i = 0;
		$result = $senador;
		$data = array();
		if ($result->num_rows >= 1)
		{
    		while($row = $result->fetch_object())
			{
				$data[$i] = array(
				"nombre" => "$row->names",
                "ctn" => "$row->res",
                "fecha" => "$row->tiempo"
                );
				$i++;
			}
			$new = json_encode($data);
			echo $new;
		}
    }

    public function read_provincia($tiempo,$tipo,$provincia)
	{
		$query = "SELECT COUNT(vtv.id_voto) AS res, CONCAT(cdt.nombre,' ',cdt.apellido) AS names,YEAR(vtv.fecha_voto)  AS tiempo  FROM votante_voto AS vtv 
                INNER JOIN candidato AS cdt ON vtv.id_candidato = cdt.id_candidato
                WHERE cdt.puesto = $tipo AND YEAR(vtv.fecha_voto) = $tiempo AND cdt.id_provincia = $provincia
                GROUP BY cdt.id_candidato ORDER BY COUNT(vtv.id_voto) DESC";
        $senador = $this->db_connection->query($query);
        $i = 0;
		$result = $senador;
		$data = array();
		if ($result->num_rows >= 1)
		{
    		while($row = $result->fetch_object())
			{
				$data[$i] = array(
				"nombre" => "$row->names",
                "ctn" => "$row->res",
                "fecha" => "$row->tiempo"
                );
				$i++;
			}
			$new = json_encode($data);
			echo $new;
		}
    }
    
    
}


?>