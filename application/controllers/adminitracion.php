<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Administracion extends CI_Controller {

    
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
    //Registrar
    public function registrarCandidato(){
        if(isset($_POST["_token"])){
            try {
                //Validacion de token
                $this->nocsrf->check($datos["_token"],$_POST,true,60*10,false);
                //inicializando variables
                $provincia = 0;
                $municipio= 0;
                //configuracion de uploads imagenes
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload()){
                    $error = array('error' => $this->upload->display_errors());
                }
                else{
                    $file_info= $this->upload->data();
                    //Validar si tiene provincia o municipio
                    if(isset($_POST['provincia'])){
                        $provincia = $this->input->post('provincia');
                    }
                    if(isset($_POST['municipio'])){
                        $municipio= $this->input->post('municipio');
                        
                    }
                    $datos = array(
                    'nombre'=>$this->input->post('nombre'),
                     'apellido'=>$this->input->post('apellido'),
                     'id_partido'=> $this->input->post('partido'),
                     'id_puesto'=> $this->input->post('puesto'),
                     'foto'=>$file_info['file_name'],
                     'id_provincia'=>$provincia,
                     'id_municipio'=>$municipio
                    );

                    $this->candidato_model->Registrar($datos);
                }
                
            } catch (Exception $e) {
                die("TOKEN INCORRECTO");
            }
        }
    }
    public function registrarColegio(){
        htmlspecialchars($this->input->post('name'),ENT_QUOTES,'UTF-8');
    }
}

/* End of file administracion.php */


?>