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
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Entidades/Candidatos',$datos);
    $this->load->view('Administrador/layouts/footer');		
}    
//Entidades partido
public function partidos(){
    
    $this->load->model('Partido_model','',true);
    $datos= array(
        'partidos'=> $this->Partido_model->obtenerPartidos()
    );
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Entidades/partidos',$datos);
    $this->load->view('Administrador/layouts/footer');		
}
//Votaciones Presidenciales
public function listadoPresidente(){
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones Presidenciales/Presidenciales');
    $this->load->view('Administrador/layouts/footer');
}
public function resultadoPre(){
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones Presidenciales/resultado');
    $this->load->view('Administrador/layouts/footer');
}
public function eleccionesSena(){
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones Presidenciales/Senadores');
    $this->load->view('Administrador/layouts/footer');
}
//Elecciones Congresuales
public function eleccionesDipu(){
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones Presidenciales/Diputados');
    $this->load->view('Administrador/layouts/footer');
}

//Elecciones municipales
public function eleccionesAlcalde(){
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones municipales/Alcalde');
    $this->load->view('Administrador/layouts/footer');
}
public function eleccionesVAlcalde(){
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Votaciones municipales/ViceAlcalde');
    $this->load->view('Administrador/layouts/footer');
}
//Colegios
public function colegiosTabla(){
    $this->load->model('Colegio_model','',true);
    
    $datos= array(
        'Colegios'=> $this->Colegio_model->getColegios(),
    );
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Colegios/Colegios',$datos);
    $this->load->view('Administrador/Colegios/plantilla/footer');
}
//Consultar si existe el colegio
public function queryColegio(){
    $this->load->model('Colegio_model','',true);
    $codigo_colegio= $this->input->post('colegio');
    if($this->Colegio_model->exitsColegio($codigo_colegio)){
        echo 0;
    }else{
        echo 1;
    }
}
//mesas y votantes
public function colegioMesa(){
    $this->load->model('Colegio_model','',true);
    $codigo_colegio = $this->input->get('colegio');
    
    $datos=array(
        'Mesas'=> $this->Colegio_model->getmesas($codigo_colegio)
    );
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Colegios/Mesas',$datos);
    $this->load->view('Administrador/layouts/footer');
}
public function mesasVotantes(){
    $this->load->model('Colegio_model','',true);
    $idMesa = $this->input->get('mesa');

$datos = array(
    'Votantes' => $this->Colegio_model->getvotante($idMesa), 
);

    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Colegios/Votantes',$datos);
    $this->load->view('Administrador/layouts/footer');
}
}

/* End of file querySelect.php */


?>