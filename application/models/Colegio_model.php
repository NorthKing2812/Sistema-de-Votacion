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
        $this->db->join('municipio as mu', ' mu.id_municipio = s.id_municipio');
        $this->db->join('mesa ms', 'c.codigo_colegio = ms.codigo_colegio', 'left');
        $this->db->group_by('c.CODIGO_COLEGIO');
        $resultado = $this->db->get();
        return $resultado->result();
    }
    
    //Crud colegio
    //QuerySelect
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
    public function actualizarColegio($datos,$id_colegio){
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
    //QueryEliminar
    public function eliminarColegio($id_colegio){
        try {
            $this->db->where('codigo_colegio', $id_colegio);
            $this->db->delete('colegio');
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
        $this->db->select(" mesa.id_mesa AS 'mesa', encargado, Computada, nombre, COUNT(votante.id_votante) AS 'Cantidad_votantes'");
        $this->db->from('mesa');
      $this->db->join('votante', 'votante.id_mesa = mesa.id_mesa','left');
      $this->db->join('colegio', 'colegio.codigo_colegio = mesa.codigo_colegio');  
      $this->db->where('mesa.codigo_colegio', $codigoColegio);
        $this->db->group_by('mesa.id_mesa');
        $resultado=$this->db->get();
        return $resultado->result();
        
    }

    public function getvotante($codigoMesa){
        $this->db->where('id_mesa', $codigoMesa);
        $resultado=$this->db->get('votante');
        return $resultado->result();
    }
    
}

/* End of file Colegio_model.php */


?>