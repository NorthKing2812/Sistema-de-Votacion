<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('core');
		$this->load->helper('queries');
		$this->load->helper('plantilla');
		$this->load->model('Votante_model','',true);
	}
	
	public function index()
	{
		$this->load->view('Votante/inicio');
	}
	public function selecciona()
	{
		$this->load->view('Votante/selecciona');
	}
	public function presidenciales($ced = 0)
	{
		$this->load->view('Votante/presidenciales', ['ced'=> $ced]);
	}
	public function municipales()
	{
		$this->load->view('Votante/municipales');
	}
	public function voto_hecho()
	{
		$this->load->view('Votante/voto_hecho');
	}
	public function voto()
	{
		$votante=$this->input->post('id_votante');
		$mesa= $this->input->post('id_mesa');
		$candidato= $this->input->post('id_candidato');
		$datos= array(
			'id_votante' => $votante, 
			'id_mesa'=>$mesa,
			'id_candidato'=>$candidato,
			);
			$this->Votante_model->Votar($datos);
	}

	
}
