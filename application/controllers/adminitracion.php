<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class administracion extends CI_Controller {

    public function index()
    {
        $this->load->view('Administrador/login');
        
    }

}

/* End of file administracion.php */


?>