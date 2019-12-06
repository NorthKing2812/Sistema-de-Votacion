<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model",'',true);
	}
	public function index()
	{
		$this->load->model('Votos_model','',true);
		$this->load->model('Mesa_model','',true);
		if ($this->session->userdata("login")) {
			$datos=array(
				'cantidadVotos'=> $this->Votos_model->countVotos(),
				'Mesa'=>$this->Mesa_model->countMesa(),
				'MesaComputada'=>$this->Mesa_model->countMesaComputadas(),
			);
			$this->load->view('Administrador/layouts/encabezado');
		$this->load->view('Administrador/layouts/left');
		$this->load->view('Administrador/index',$datos);
		$this->load->view('Administrador/layouts/footer');
		}
		else{
			$this->load->view("Administrador/login");
		}
	}

	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username, sha1($password));

		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url('index.php/auth'));
		}
		else{
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->nombres,
				'rol' => $res->rol_id,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url('index.php/auth'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/auth'));
	}
}
