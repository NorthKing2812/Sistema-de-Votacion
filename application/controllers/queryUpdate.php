<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class queryUpdate extends CI_Controller {

    public function index()
    {
        
    }
    public function updateColegios(){
        $this->load->model('Colegio_model');
        $datos = array(
            'nombre' => $this->input->post('name'), 
            'director'=>$this->input->post('name'),
            'email'=>$this->input->post('name'),
            'direccion'=>$this->input->post('name'),
        );
    }
}

/* End of file queryUpdate.php */


?>