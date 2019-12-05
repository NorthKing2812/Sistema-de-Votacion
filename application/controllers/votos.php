<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class votos extends CI_Controller {

    public function index()
    {
        $this->load->model('Mesa_model','',true);
    $idMesa = $this->input->get('mesa');

$datos = array(
    'votos' => $this->Mesa_model->getvotos($idMesa), 
);

    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Colegios/Votos_mesa',$datos);
    $this->load->view('Administrador/layouts/footer');
    }

}

/* End of file votante.php */

?>