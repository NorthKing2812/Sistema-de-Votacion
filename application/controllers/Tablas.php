<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tablas extends CI_Controller {

    public function index()
    {
        $this->load->view('plantillas/encabezado');
		$this->load->view('plantillas/left');
		$this->load->view('Colegios');
		$this->load->view('plantillas/footer');
    }

}

/* End of file Tablas.php */

?>