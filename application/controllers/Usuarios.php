<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model",'',true);
	}

	public function index()
	{
		$data  = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(), 
		);
		$this->load->view("Administrador/layouts/encabezado");
		$this->load->view("Administrador/layouts/left");
		$this->load->view("Administrador/usuario/list",$data);
		$this->load->view("Administrador/layouts/footer");

	}

	public function add(){
		
		$this->load->view("Administrador/layouts/encabezado");
		$this->load->view("Administrador/layouts/left");
		$this->load->view("Administrador/usuario/add");
		$this->load->view("Administrador/layouts/footer");
	}

	public function store(){
		$nombre = $this->input->post("nombres");
		$apellido = $this->input->post("apellidos");
		$email = $this->input->post("email");
		$usuario = $this->input->post("username");
		$password = $this->input->post("password");
		$configPass =$this->input->post("configPassowrd");
		$telefono = $this->input->post("telefono");
		if(! $this->Usuarios_model->exits($usuario)){
			if(!($password==$configPass)){
				$data  = array(
					'nombres' => $nombre,
					'apellidos' => $apellido,
					'email' => $email,
					'username' => $usuario,
					'password' => sha1($password),
					'telefono' => $telefono,
					'estado' => 1
				);
		
				if ($this->Usuarios_model->save($data)) {
					$this->session->set_flashdata("success","Se ha guardado la informacio");
					redirect(base_url('index.php/usuarios'));
				}
				else{
					$this->session->set_flashdata("error","Error:No se pudo guardar la informacion");
					redirect(base_url("index.php/usuarios/add"));
				}
			}else{
				
			$this->session->set_flashdata("error","Error: Las contraseñas debe coincidir");
			redirect(base_url("index.php/usuarios/add"));

			}
		}else{
			$this->session->set_flashdata("error","Error:El usuario ya existe");
					redirect(base_url("index.php/usuarios/add"));
		}
	}

	public function edit($id){
		$data = array( 
			"usuario" => $this->Usuarios_model->getUsuario($id),
		);
	
		$this->load->view("Administrador/usuario/edit",$data);
	}

	public function update(){
		$id_usuario = $this->input->post("id_usuario");
		$nombre = $this->input->post("nombres");
		$apellido = $this->input->post("apellidos");
		$email = $this->input->post("email");
		$usuario = $this->input->post("username");
		$telefono = $this->input->post("telefono");

		$data  = array(
			'nombres' => $nombre,
			'apellidos' => $apellido,
			'email' => $email,
			'username' => $usuario,
			'telefono' => $telefono
		);
		if ($this->Usuarios_model->update($id_usuario,$data)) {
			
			$this->session->set_flashdata("success","Cambios realizados exitosamente");
			redirect(base_url("index.php/usuarios"));
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url('index.php/usuarios'));
		}
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		if($this->Usuarios_model->update($id,$data)){
			$this->session->set_flashdata("success","El registro se he eliminado");
			redirect(base_url("index.php/usuarios"));
		}
		else{
			$this->session->set_flashdata("error","No se pudo eliminar");
			redirect(base_url('index.php/usuarios'));
		}
	}

}