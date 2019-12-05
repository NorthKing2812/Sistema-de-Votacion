<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Partido_model extends CI_Model {

    public function getPartidos(){
        
        $this->db->from('partido');
        $resultados= $this->db->get();
        return $resultados->result();
    }
    public function getPartido($id_partido){
        $this->db->from('partido');
        $this->db->where('id_partido', $id_partido);
        $resultados= $this->db->get();
        return $resultados->row();
    }
    public function insertarPartido($datos){
        $this->db->insert('partido', $datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
     //QueryActualizar
 public function actualizarPartido($id_partido,$datos){
    $this->db->where('id_partido', $id_partido);
      $this->db->update('partido',$datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    
}
 //QueryEliminar
 public function eliminarPartido($id_partido){
    $this->db->where('id_partido', $id_partido);
      $this->db->delete('partido');
      
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    
}

}

/* End of file Partido_model.php */


?>