<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class partido extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Partido_model','',true);
    }
    
    public function index()
    {
        $datos= array(
            'partidos'=> $this->Partido_model->getPartidos()
        );
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Entidades/partido/partidos',$datos);
        $this->load->view('Administrador/layouts/footer');	
    }

    public function form(){
        $this->load->view('Administrador/layouts/encabezado');
		$this->load->view('Administrador/layouts/left');
		$this->load->view('Administrador/Entidades/partido/Registrar_Partido');
		$this->load->view('Administrador/layouts/footer');		
	
    }
    public function add(){
        $config['upload_path'] = './uploads/partidos';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = '2048';
         
        
         $this->load->library('upload', $config);
         
         if ( !$this->upload->do_upload('imagePartido')){
             $error = array('error' => $this->upload->display_errors());
             $Errormsg= strip_tags($error['error']);
             $this->session->set_flashdata("error","{$Errormsg}");
                redirect(base_url('index.php/partido/form'));
         }
         else{
             $file_info=  $this->upload->data();
            
             $datos=array(
                'nombre'=>$this->input->post('nombre'), 
                'siglas'=>$this->input->post('sigla'), 
                'Presidente'=>$this->input->post('presidente'),  
                'logo'=>$file_info['file_name'], 
                'HexaColor1'=>$this->input->post('hexacolor1'), 
                'HexaColor2'=>$this->input->post('hexacolor2'), 
            );
            if($this->Partido_model->insertarPartido($datos)){
                $this->session->set_flashdata("success","El registro se ha registrado exitosamente");
                redirect(base_url('index.php/partido/form'));
            }else{
                $this->session->set_flashdata("error","Error: al insertar Registro");
                redirect(base_url('index.php/partido/form'));
            }
         }
    }
    public function update(){

        $id_partido= $this->input->post('id_partido');
                
        //Validar si el archivo existe
        if(file_exists($_FILES['imagePartido']['tmp_name'])){
            $config['upload_path'] = './uploads/partidos';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('imagePartido')){//Guardar en la capeta
                $error = array('error' => $this->upload->display_errors());
                 $Errormsg= strip_tags($error['error']);
                 $this->session->set_flashdata("error","{$Errormsg}");
                    redirect(base_url('index.php/partido/form'));
            }
            else{
                $file_info=  $this->upload->data();
                
                $partido= $this->Partido_model->getPartido($id_partido);
                
                if(unlink('uploads/partidos/'.$partido->logo)){//Si se logra eliminar el anterior
                    
                    $datos=array(
                        'nombre'=>$this->input->post('nombre'), 
                        'siglas'=>$this->input->post('sigla'), 
                        'Presidente'=>$this->input->post('presidente'),  
                        'logo'=>$file_info['file_name'], 
                        'HexaColor1'=>$this->input->post('hexacolor1'), 
                        'HexaColor2'=>$this->input->post('hexacolor2'), 
                    );
                
            }else{
                $this->session->set_flashdata("error","Error al actualizar el logo");
                    redirect(base_url('index.php/partido'));
            }
    
            }
        }else{
            $datos=array(
                'nombre'=>$this->input->post('nombre'), 
                'siglas'=>$this->input->post('sigla'), 
                'Presidente'=>$this->input->post('presidente'),   
                'HexaColor1'=>$this->input->post('hexacolor1'), 
                'HexaColor2'=>$this->input->post('hexacolor2'), 
            );
        }
        if($this->Partido_model->actualizarPartido($id_partido,$datos)){//actializar
            $this->session->set_flashdata("success","Exito al actualizar Registro");
            redirect(base_url('index.php/partido'));
        }else{
            $this->session->set_flashdata("error","Error al actualizar Registro");
            redirect(base_url('index.php/partido'));
        }

    }
    public function delete(){
        $id_partido=$this->input->get('id_partido');
    if($this->Partido_model->eliminarPartido($id_partido)){
        $this->session->set_flashdata("success","El registro se ha eliminado exitosamente");
            redirect(base_url('index.php/partido'));
    }else{
        $this->session->set_flashdata("error","Error: al eliminar Registro");
        redirect(base_url('index.php/partido'));
    }
    }
/* modalss adicionales */
public function edit(){
    $id_partido=$this->input->get('id_partido');
    $datos = array(
            'Partido'=>$this->Partido_model->getPartido($id_partido)
    );
    $this->load->view('Administrador/Entidades/partido/view_edit',$datos);
}
public function view(){
    
    $id_partido=$this->input->get('id_partido');
    $datos = array(
            'Partido'=>$this->Partido_model->getPartido($id_partido)
    );
    $this->load->view('Administrador/Entidades/partido/view_detalle',$datos);
}
/*End of modals adicionales */
}

/* End of file partido.php */


?>