<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class queryInsert extends CI_Controller {

    public function index()
    {
        
    }

    public function registrarCandidato(){
        if(isset($_POST["_token"])){
            try {
                //Validacion de token
                if(! $this->nocsrf->check('_token',$_POST,false,60*10,false)){
                    throw new Exception('TOKEN INCORRECTO');
                }
                //inicializando variables
                $nombre=htmlspecialchars($this->input->post('nombre'),ENT_QUOTES,'UTF-8');
                $apellido=htmlspecialchars($this->input->post('apellido'),ENT_QUOTES,'UTF-8');
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
                    'nombre'=>$nombre,
                     'apellido'=>$apellido,
                     'id_partido'=> $this->input->post('partido'),
                     'id_puesto'=> $this->input->post('puesto'),
                     'foto'=>$file_info['file_name'],
                     'id_provincia'=>$provincia,
                     'id_municipio'=>$municipio
                    );

                    $this->candidato_model->Registrar($datos);
                }
                
            } catch (Exception $e) {
                die($e->getMessager());
            }
        }
    }
}

/* End of file queryInsert.php */


?>