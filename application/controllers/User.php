<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('inicio');
	}
	public function selecciona()
	{
		$this->load->view('selecciona');
	}
	public function presidenciales($ced = 0)
	{
		$this->load->view('presidenciales', ['ced'=> $ced]);
	}
	public function municipales()
	{
		$this->load->view('municipales');
	}
	public function voto_hecho()
	{
		$this->load->view('voto_hecho');
	}
	public function voto($votante = 0, $candidato = 0)
	{
		Usuarios::registrar_voto($votante, $candidato);
	}
}
