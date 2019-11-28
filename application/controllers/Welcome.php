<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('index');
		
		$this->load->view('plantillas/footer');
	}

	//Entidades politicas
	public function candidatos(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Entidades/Candidatos');
		$this->load->view('plantillas/footer');		
	}
	
	public function partidos(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Entidades/partidos');
		$this->load->view('plantillas/footer');		
	}
	//Votaciones Presidenciales
	public function listadoPresidente(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Votaciones Presidenciales/Presidenciales');
		$this->load->view('plantillas/footer');
	}
	public function resultadoPre(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Votaciones/resultado');
		$this->load->view('plantillas/footer');
	}
	public function eleccionesViPre(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Votaciones Presidenciales/Senadores');
		$this->load->view('plantillas/footer');
	}
	//Elecciones Congresuales
	public function eleccionesDipu(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Votaciones Presidenciales/Diputado');
		$this->load->view('plantillas/footer');
	}
	
	//Elecciones municipales
	public function eleccionesAlcalde(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Votaciones municipales/Alcalde');
		$this->load->view('plantillas/footer');
	}
	public function eleccionesVAlcalde(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Votaciones municipales/ViceAlcalde');
		$this->load->view('plantillas/footer');
	}
	//Colegios
	public function colegiosTabla(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Colegios/Colegios');
		$this->load->view('plantillas/footer');
	}
	
	public function colegioMesa(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Colegios/Mesas');
		$this->load->view('plantillas/footer');
	}
	
	public function mesasVotantes(){
		$this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Colegios/Votantes');
		$this->load->view('plantillas/footer');
	}
}
