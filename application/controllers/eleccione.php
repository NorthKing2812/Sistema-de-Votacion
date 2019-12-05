<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class eleccione extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Candidato_model','',true);
}

        //Votaciones Presidenciales
    public function index()
    {
        $datos = array(
            'Presidentes' => $this->Candidato_model->getCandidatosCandidatura(1), );
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones Presidenciales/Presidenciales',$datos);
    $this->load->view('Administrador/layouts/footer');
    }

    //Elecciones Congresuales
    public function eleccionesDipu(){
        $datos = array(
            'Diputados' => $this->Candidato_model->getCandidatosCandidatura(2), 
        );
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Votaciones Presidenciales/Diputados',$datos);
        $this->load->view('Administrador/layouts/footer');
    }
    public function eleccionesSena(){
        $datos = array(
            'Senadores' => $this->Candidato_model->getCandidatosCandidatura(3), 
        );
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Votaciones Presidenciales/Senadores',$datos);
        $this->load->view('Administrador/layouts/footer');
    }
    
//Elecciones municipales
public function eleccionesAlcalde(){
    $datos = array(
        'Alcaldes' => $this->Candidato_model->getCandidatosCandidatura(4), 
    );
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones municipales/Alcalde',$datos);
    $this->load->view('Administrador/layouts/footer');
}
public function eleccionesVAlcalde(){
    $datos = array(
        'ViceAlcaldes' => $this->Candidato_model->getCandidatosCandidatura(4), 
    );
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones municipales/ViceAlcalde',$datos);
    $this->load->view('Administrador/layouts/footer');
}
    
}

/* End of file eleccione.php */


?>