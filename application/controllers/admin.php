<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Candidato_model','',true);
        
    }
    
    public function index()
    {
        $this->load->view('Administrador/login');
        
    }
    public function vistaColegio(){
        $colegio = $this->input->post("id_colegio");
        
        $this->load->view('Colegio/vista_colegio',$colegio);
        
    }
    

}

/* End of file admin.php */


?>