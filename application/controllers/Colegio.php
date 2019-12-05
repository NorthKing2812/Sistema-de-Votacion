<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Colegio extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Colegio_model','',true);
    }
    //Ventanas
    public function index()
    {
    
        $datos= array(
            'Colegios'=> $this->Colegio_model->getColegios(),
        );
        $this->load->view('Administrador/layouts/encabezado');
        $this->load->view('Administrador/layouts/left');
        $this->load->view('Administrador/Colegios/list_colegio',$datos);
        $this->load->view('Administrador/Colegios/layouts/footer');
    }

    public function form(){
		$datos=array(
				'Sectores'=>$this->Colegio_model->getSectores(),
			);
		$this->load->view('Administrador/layouts/encabezado');
		$this->load->view('Administrador/layouts/left');
		$this->load->view('Administrador/Colegios/RegistrarColegio',$datos);
		$this->load->view('Administrador/Colegios/layouts/footer');
	}

    //MantenimientoColegio
    //Consultar si existe el colegio
public function exits(){

    $codigo_colegio= $this->input->post('colegio');
    if($this->Colegio_model->exitsColegio($codigo_colegio)){
        echo 0;
    }else{
        echo 1;
    }
}
//Actualizar
public function update(){
    $datos = array(
        'nombre' => $this->input->post('nombre'), 
        'director'=>$this->input->post('director'),
        'email'=>$this->input->post('email'),
        'direccion'=>$this->input->post('direccion'),
        'tel' => $this->input->post('tel'), 
        'id_sector'=>$this->input->post('sector'),
        'latitud'=>$this->input->post('latitud'),
        'longitud'=>$this->input->post('longitud'),
    );
    $id_colegio= $this->input->post('CodColegio');
    if($this->Colegio_model->actualizarColegio($id_colegio,$datos)){
        $this->session->set_flashdata("success","Exito al actualizar Registro");
        redirect(base_url('index.php/Colegio'));
    }else{
        $this->session->set_flashdata("error","Error al actualizar Registro");
        redirect(base_url('index.php/Colegio'));
    }
}
//Eliminar
public function delete(){
    $id_colegio=$this->input->get('id_colegio');
    $datos=array(
        'estado'=>0
    );
if($this->Colegio_model->eliminarColegio($id_colegio,$datos)){
    $this->session->set_flashdata("success","El registro se ha eliminado exitosamente");
        redirect(base_url('index.php/Colegio'));
}else{
    $this->session->set_flashdata("error","Error: al eliminar Registro");
    redirect(base_url('index.php/Colegio'));
}
}
//Colegio Registrar
    public function add(){

        $datos=array(
            "Codigo_Colegio"=>$this->input->post('CodColegio'),
            "nombre"=>$this->input->post('nombre'),
            "director"=>$this->input->post('director'),
            "email"=>$this->input->post('email'),
            "id_sector"=>$this->input->post('sector'),
            "direccion"=>$this->input->post('direccion'),
            "latitud"=>$this->input->post('latitud'),
            "longitud"=>$this->input->post('longitud'),
        );
        try {
          $resultados= $this->Colegio_model->insertarColegio($datos);
            if($resultados){
                $this->session->set_flashdata("success","El registro se ha registrado exitosamente");
                redirect(base_url('index.php/Colegio/form'));
            }else{
                $this->session->set_flashdata("error","Error: al insertar Registro");
                redirect(base_url('index.php/Colegio/form'));
            }
        
        } catch (Exception $e) {
           die();
        }
    }
//modals
//edit
public function edit(){
    $colegio_id=$this->input->get('id_colegio');
    $datos = array(
        'Colegio' => $this->Colegio_model->consultarColegio($colegio_id), 
        'Sectores'=>$this->Colegio_model->getSectores()
    );
    $this->load->view('Administrador/Colegios/edit_colegio',$datos);
}
//modals view map
public function viewMap(){
    $datos = array(
        'latitud' => $this->input->post('latitud'),
        'longitud' => $this->input->post('longitud')
    ,); 
    $this->load->view('Administrador/Colegios/vista_map',$datos);   
}

}

/* End of file Colegio.php */


?>