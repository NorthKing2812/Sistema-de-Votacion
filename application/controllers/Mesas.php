<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Mesas extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mesa_model','',true);
    }
    
    public function index()
    {
       
    $codigo_colegio = $this->input->get('colegio');
    $datos=array(
        'Mesas'=> $this->Mesa_model->getmesas($codigo_colegio)
    );
    $this->load->view('Administrador/layouts/encabezado');
    $this->load->view('Administrador/layouts/left');
    $this->load->view('Administrador/Colegios/Mesas',$datos);
    $this->load->view('Administrador/Colegios/layouts/footer');

    }
    public function form(){ 
            $codigo_colegio = $this->input->get("id_colegio");
            $datos=array(
                'Mesas'=> $this->Mesa_model->getmesas($codigo_colegio),
                'codigo_colegio'=> $this->input->get("id_colegio")
            );
            $this->load->view('Administrador/Colegios/vista_colegio',$datos);
    }

     //MantenimientoColegio
    public function add(){
        $datos = array(
            'encargado'=>$this->input->post('Encargado'),
            'codigo_colegio' => $this->input->post('Codcolegio'),
            'Computada'=> 0
        );
        if($this->Mesa_model->insertarMesa($datos)){
            $this->session->set_flashdata("success","El registro se ha insertado exitosamente");
            redirect(base_url('index.php/Colegio'));
        }else{
            $this->session->set_flashdata("error","Error: al insertar registro");
            redirect(base_url('index.php/Colegio'));
        }
    }
    public function update(){

    }
    public function changeComputo(){
        $id_mesa = $this->input->post('id_mesa');
        $datos = array(
            'Computada' => $this->input->post('computo'), );
            $resultado=$this->Mesa_model->changeComputo($id_mesa,$datos);
            if($resultado){
            $computada=$this->Mesa_model->getComputo($id_mesa)->Computada;
                if($computada=='1'){     
                echo '1';
            }if($computada=='0'){
                echo '0';
            }
        }else{
            $this->session->set_flashdata("error","Error: No se pudo hacer el cambio");
        }
    }
}

/* End of file Mesas.php */


?>