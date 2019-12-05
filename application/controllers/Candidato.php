<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Candidato_model','',true);
		
    }
    
    public function index()
    {
        $datos = array(
            'candidatos'=> $this->Candidato_model->getCandidatos()
        );
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Entidades/Candidato/Candidatos',$datos);
        $this->load->view('Administrador/layouts/footer');
    }

    public function form(){
    
    $this->load->model('DivisionT_model','',true);
    $this->load->model('Partido_model');
    
		$datosSession = array(
			'_token' => null
		);
		//
		$datos= array(
            'Puestos'=>$this->Candidato_model->getPuestos(),
            'Provincias'=> $this->DivisionT_model->getProvincias(),
            'Municipios'=> $this->DivisionT_model->getMunicipio(),
            'Partidos'=>$this->Partido_model->getPartidos()
        );
		$this->session->set_userdata($datos);
		$this->load->view('Administrador/layouts/encabezado');
		$this->load->view('Administrador/layouts/left');
		$this->load->view('Administrador/Entidades/Candidato/Registrar_Candidato',$datos);
		$this->load->view('Administrador/layouts/footer');	
    }
/* Mantenimiento Candidatos */
    public function add(){
         
         $config['upload_path'] = './uploads/candidato';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = '2048';
         
        
         $this->load->library('upload', $config);
         
         if ( !$this->upload->do_upload('imageCand')){
             $error = array('error' => $this->upload->display_errors());
             $Errormsg= strip_tags($error['error']);
             $this->session->set_flashdata("error","{$Errormsg}");
                redirect(base_url('index.php/Candidato/form'));
         }
         else{
             $file_info=  $this->upload->data();
            
             $datos=array(
                'nombre'=>$this->input->post('nombre'), 
                'apellido'=>$this->input->post('apellido'), 
                'id_partido'=>$this->input->post('partido'), 
                'puesto'=>$this->input->post('puesto'), 
                'foto'=>$file_info['file_name'], 
                'id_provincia'=>$this->input->post('provincia'), 
                'id_municipio'=>$this->input->post('municipio'), 
                'estado'=>1
            );
            if($this->Candidato_model->insertarCandidato($datos)){
                $this->session->set_flashdata("success","El registro se ha registrado exitosamente");
                redirect(base_url('index.php/Candidato/form'));
            }else{
                $this->session->set_flashdata("error","Error: al insertar Registro");
                redirect(base_url('index.php/Candidato/form'));
            }
         }
    }
    //Actualizar
public function update(){
    $datos = array(
        'nombre'=>$this->input->post('nombre'), 
        'apellido'=>$this->input->post('apellido'), 
        'id_partido'=>$this->input->post('partido'), 
        'puesto'=>$this->input->post('puesto'), 
        'id_provincia'=>$this->input->post('provincia'), 
        'id_municipio'=>$this->input->post('municipio'),
    );
    $id_candidato= $this->input->post('id_candidato');
    if($this->Candidato_model->actualizarCandidato($id_candidato,$datos)){
        $this->session->set_flashdata("success","Exito al actualizar Registro");
        redirect(base_url('index.php/Candidato'));
    }else{
        $this->session->set_flashdata("error","Error al actualizar Registro");
        redirect(base_url('index.php/Candidato'));
    }
}
//Eliminar
public function delete(){
    $id_candiato=$this->input->get('id_candidato');
    $datos=array(
        'estado'=>0
    );
if($this->Candidato_model->eliminarCandidato($id_candiato,$datos)){
    $this->session->set_flashdata("success","El registro se ha eliminado exitosamente");
        redirect(base_url('index.php/Candidato'));
}else{
    $this->session->set_flashdata("error","Error: al eliminar Registro");
    redirect(base_url('index.php/Candidato'));
}

}
/*End of Mantenimiento Candidatos */

/* modalss adicionales */
public function edit(){
    $this->load->model('DivisionT_model','',true);
    $this->load->model('Partido_model');
    $candidato_id=$this->input->get('id_candidato');
    $datos = array(
            'Candidato' => $this->Candidato_model->getCandidato($candidato_id), 
            'Puestos'=>$this->Candidato_model->getPuestos(),
            'Provincias'=> $this->DivisionT_model->getProvincias(),
            'Municipios'=> $this->DivisionT_model->getMunicipio(),
            'Partidos'=>$this->Partido_model->getPartidos()
    );
    $this->load->view('Administrador/Entidades/Candidato/view_edit',$datos);
}
/*End of modals adicionales */

/* End of file Candidato.php */
}

?>