<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class queryDelete extends CI_Controller {

    public function index()
    {
        
    }
    public function eliminarColegio(){
        $this->load->model('Colegio_model','',true);
        $id_colegio=$this->input->get('name');

    }
}

/* End of file queryDelete.php */


?>