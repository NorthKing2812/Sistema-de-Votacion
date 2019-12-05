<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Colegio_model extends CI_Model {

    public function getSectores(){
        
        $this->db->select("id_sector, sc.nombre as 'sector', mu.nombre as 'municipio', pr.nombre as 'provincia'");
        
        $this->db->from('sector sc');
        $this->db->join('municipio mu', 'mu.id_municipio = sc.id_municipio');
        $this->db->join('provincia pr', 'pr.id_provincia = mu.id_provincia');
        
        $resultado= $this->db->get();
        return $resultado->result();
    }

    public function getColegios(){
      $this->db->select("c.CODIGO_COLEGIO, c.NOMBRE as 'nombre', DIRECCION,latitud,longitud, mu.NOMBRE AS 'Municipio', COUNT(ms.id_mesa) as 'Cantidad_mesas'");
        $this->db->from('COLEGIO c');
        $this->db->join('SECTOR s', 'c.id_sector= s.id_sector', 'left');
        $this->db->join('municipio as mu', ' mu.id_municipio = s.id_municipio','left');
        $this->db->join('mesa ms', 'c.codigo_colegio = ms.codigo_colegio', 'left');
        
        $this->db->where('estado', 1);
        
        $this->db->group_by('c.CODIGO_COLEGIO');
        $resultado = $this->db->get();
        return $resultado->result();
    }
    
    //Crud colegio
    //QuerySelect
    public function consultarColegio($id_colegio){
        
        $this->db->select("codigo_colegio,c.NOMBRE as 'nombre',director,email,tel,c.id_sector,s.nombre as 'sector',direccion,latitud,longitud ");
        $this->db->from('colegio c');
        $this->db->join('SECTOR s', 'c.id_sector= s.id_sector', 'left');
        $this->db->where('codigo_colegio', $id_colegio);
        
        $resultado=$this->db->get();
        return $resultado->row();
    }
    
    
    //Existe el colegio
    public function exitsColegio($codigoColegio){
        $this->db->where('codigo_colegio', $codigoColegio);
        $this->db->from('colegio');
        $resultado= $this->db->get();
        if($resultado->num_rows()>0){
            return false;
        }
        else{
            return true;
        }
    }
    //QueryInsertar
    public function insertarColegio($datos){
      
      try {
        $this->db->insert('colegio', $datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    
      } catch (Exception $th) {
          throw $th;
      }  
    }
    //QueryActualizar
    public function actualizarColegio($id_colegio,$datos){
        $this->db->where('codigo_colegio', $id_colegio);
        $this->db->update('colegio', $datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
      
    }
    //QueryEliminar
    public function eliminarColegio($id_colegio,$datos){
        try {
            $this->db->where('codigo_colegio', $id_colegio);
          
          $this->db->update('colegio', $datos);
          
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        } catch (Exception $th) {
            throw $th;
        }
    }
    //getmesas
    public function getmesas($codigoColegio){
        $this->db->select(" m.id_mesa AS 'mesa', encargado, Computada, nombre, COUNT(v.id_votante) AS 'Cantidad_votantes'");
        $this->db->from('mesa m');
      $this->db->join('votante v', 'v.id_mesa = m.id_mesa','left');
      $this->db->join('colegio c', 'c.codigo_colegio = m.codigo_colegio');  
      $this->db->where('m.codigo_colegio', $codigoColegio);
        $this->db->group_by('m.id_mesa');
        
        $resultado=$this->db->get();
        return $resultado->result();
        
    }

    
    
}

/* End of file Colegio_model.php */


?>