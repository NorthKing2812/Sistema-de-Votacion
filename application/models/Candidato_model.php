<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato_model extends CI_Model {
    //QueryInsertar
    public function insertarCandidato($datos){
        try {
            $this->db->insert('candidato', $datos);
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
    public function actualizarCandidato($id_candidato,$datos){
        $this->db->where('id_candidato', $id_candidato);
        $this->db->update('candidato', $datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
      
    }
    //QueryEliminar
    public function eliminarCandidato($id_candidato,$datos){
        try {
            $this->db->where('id_candidato', $id_candidato);
          $this->db->update('candidato', $datos);
          
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        } catch (Exception $th) {
            throw $th;
        }
    }
    public function getCandidatos(){
        
        $this->db->select("id_candidato, ca.nombre as 'nombre', apellido
        ,pa.id_partido,pa.nombre as 'partido', pu.descripcion as 'puesto'
        ,pr.id_provincia,pr.nombre as 'provincia',mu.id_municipio, mu.nombre as 'municipio'");
        $this->db->from('candidato ca');
        $this->db->join('partido pa', 'pa.id_partido = ca.id_candidato');
        $this->db->join('puesto pu', 'pu.id_puesto = ca.puesto');
        $this->db->join('provincia pr', 'pr.id_provincia = ca.id_provincia','left');
        $this->db->join('municipio mu', 'mu.id_municipio = ca.id_municipio','left');
        
        $this->db->where('estado', 1);
        
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function getCandidato($id_candidato){
        
        $this->db->select("id_candidato, ca.nombre as 'nombre', apellido
        ,ca.id_partido,pa.nombre as 'partido',pu.id_puesto ,pu.descripcion as 'puesto'
        ,pr.id_provincia,pr.nombre as 'provincia',mu.id_municipio, mu.nombre as 'municipio'");
        $this->db->from('candidato ca');
        $this->db->join('partido pa', 'pa.id_partido = ca.id_candidato');
        $this->db->join('puesto pu', 'pu.id_puesto = ca.puesto');
        $this->db->join('provincia pr', 'pr.id_provincia = ca.id_provincia','left');
        $this->db->join('municipio mu', 'mu.id_municipio = ca.id_municipio','left');
        
        $this->db->where('id_candidato', $id_candidato);
        
        $resultado=$this->db->get();
        return $resultado->row();
    }
    public function getCandidatosCandidatura($Candidatora){
        
        $this->db->select("ca.id_candidato, ca.nombre as 'nombre', apellido
        ,ca.id_partido,pa.nombre as 'partido',pu.id_puesto ,pu.descripcion as 'puesto'
        ,pr.id_provincia,pr.nombre as 'provincia',mu.id_municipio, mu.nombre as 'municipio',
        COUNT(vt.id_voto) as 'Cantidad_votos'");
        $this->db->from('candidato ca');
        $this->db->join('partido pa', 'pa.id_partido = ca.id_candidato');
        $this->db->join('puesto pu', 'pu.id_puesto = ca.puesto');
        $this->db->join('provincia pr', 'pr.id_provincia = ca.id_provincia','left');
        $this->db->join('municipio mu', 'mu.id_municipio = ca.id_municipio','left');
        $this->db->join('Votante_voto vt', 'ca.id_candidato = vt.id_candidato', 'left');
        $this->db->where('pu.id_puesto', $Candidatora);
        $this->db->where('estado', 1);
        $this->db->group_by('id_candidato');
        $resultado=$this->db->get();
        return $resultado->result();
        
    }
    //Obtener puestos
    public function getPuestos(){
        $this->db->from('puesto');
        $resultado= $this->db->get();
        return $resultado->result();
    }
}

/* End of file Candidato_model.php */


?>