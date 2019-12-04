<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class modalsChange extends CI_Controller {

    public function index()
    {
        
    }
    //Colegios
    public function vistaColegio(){
        $colegio = $this->input->post("id_colegio");
        $this->load->view('Administrador/Colegios/vista_colegio',$colegio);
    }
	public function vistaMapaColegio(){
        $datos = array(
            'latitud' => $this->input->post('latitud'),
            'longitud' => $this->input->post('longitud')
        ,);
        
        $this->load->view('Administrador/Colegios/vista_map',$datos);
        
    }

}

/* End of file modalsChange.php */


?>