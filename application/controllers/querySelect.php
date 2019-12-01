<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class querySelect extends CI_Controller {

    public function index()
    {
        
    }

//Entidades politicas
public function candidatos(){
    $this->load->model('candidato_model','',true);
    
    $datos = array(
        'candidatos'=> $this->candidato_model->allCandidato()
    );
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Entidades/Candidatos',$datos);
    $this->load->view('Administrador/plantillas/footer');		
}    
//Entidades partido
public function partidos(){
    
    $this->load->model('Partido_model','',true);
    $datos= array(
        'partidos'=> $this->Partido_model->obtenerPartidos()
    );
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Entidades/partidos',$datos);
    $this->load->view('Administrador/plantillas/footer');		
}
//Votaciones Presidenciales
public function listadoPresidente(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Votaciones Presidenciales/Presidenciales');
    $this->load->view('Administrador/plantillas/footer');
}
public function resultadoPre(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Votaciones Presidenciales/resultado');
    $this->load->view('Administrador/plantillas/footer');
}
public function eleccionesSena(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Votaciones Presidenciales/Senadores');
    $this->load->view('Administrador/plantillas/footer');
}
//Elecciones Congresuales
public function eleccionesDipu(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Votaciones Presidenciales/Diputados');
    $this->load->view('Administrador/plantillas/footer');
}

//Elecciones municipales
public function eleccionesAlcalde(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Votaciones municipales/Alcalde');
    $this->load->view('Administrador/plantillas/footer');
}
public function eleccionesVAlcalde(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Votaciones municipales/ViceAlcalde');
    $this->load->view('Administrador/plantillas/footer');
}
//Colegios
public function colegiosTabla(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Colegios/Colegios');
    $this->load->view('Administrador/Colegios/plantilla/footer');
}

//mesas y votantes
public function colegioMesa(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Colegios/Mesas');
    $this->load->view('Administrador/plantillas/footer');
}
public function mesasVotantes(){
    $this->load->view('Administrador/plantillas/encabezado');
    $this->load->view('Administrador/plantillas/left');
    $this->load->view('Administrador/Colegios/Votantes');
    $this->load->view('Administrador/plantillas/footer');
}
}

/* End of file querySelect.php */


?>