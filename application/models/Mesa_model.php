<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Mesa_model extends CI_Model {
  

     //getmesas
     public function getmesas($codigoColegio){
        $this->db->select(" m.id_mesa AS 'mesa', encargado, Computada, nombre, COUNT(v.id_voto) AS 'Cantidad_votantes'");
        $this->db->from('mesa m');
      $this->db->join('votante_voto v', 'v.id_mesa = m.id_mesa','left');
      $this->db->join('colegio c', 'c.codigo_colegio = m.codigo_colegio');  
      $this->db->where('m.codigo_colegio', $codigoColegio);
        $this->db->group_by('m.id_mesa');
        
        $resultado=$this->db->get();
        return $resultado->result();
        
    }
    //insert
        public function insertarMesa($datos){
             
      try {
        $this->db->insert('Mesa', $datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    
      } catch (Exception $th) {
          throw $th;
      }  
        }
        
        //Cantidad de mesas
public function countMesa(){
  $this->db->select('count(*)');
    $resultado=$this->db->get('mesa');
    return $resultado->row();
}//cantidad de mesas computada
public function countMesa(){
  $this->db->select('count(*)');
  $this->db->where('Computada', 1);
  $resultado=$this->db->get('mesa');  
    return $resultado->row();
}
        //obtener votos de una mesa
        public function getvotos($codigoMesa){
            $this->db->select("id_voto,vt.cedula,ct.nombre AS 'cNombre',apellido as 'cApellido', puesto,vv.id_mesa");
            $this->db->from('votante_voto vv');
            $this->db->join('votante vt', 'vt.id_votante=vv.id_votante');
            $this->db->join('candidato ct', 'ct.id_candidato= vv.id_candidato');
            $this->db->where('vv.id_mesa', $codigoMesa);
            $resultado=$this->db->get();
            return $resultado->result();
        }
        //Cambiar estado de computado{1-computado,0-no computado}
        public function changeComputo($id_mesa,$datos){
          $this->db->where('id_mesa', $id_mesa);
          $this->db->update('mesa', $datos);
          if($this->db->affected_rows()>0){
            return true;
          }else{
            return false;
          }
        }
        //Obtener estado de computo
        public function getComputo($id_mesa){
          
          $this->db->select('Computada');
          $this->db->where('id_mesa', $id_mesa);
          $resultado=$this->db->get('mesa')->row();
          return $resultado;
        }
}

/* End of file Mesa_model.php */



?>