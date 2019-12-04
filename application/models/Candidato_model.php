<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato_model extends CI_Model {

    public function Registrar($datos){
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
    public function allCandidato(){
        
        $this->db->select("id_candidato, ca.nombre as 'nombre', apellido
        ,pa.id_partido,pa.nombre as 'partido', pu.descripcion as 'puesto'
        ,pr.id_provincia as 'provincia',mu.id_municipio as 'municipio'");
        $this->db->from('candidato ca');
        $this->db->join('partido pa', 'pa.id_partido = ca.id_candidato');
        $this->db->join('puesto pu', 'pu.id_puesto = ca.puesto');
        
        $this->db->join('provincia pr', 'pr.id_provincia = ca.id_provincia','left');
        $this->db->join('municipio mu', 'mu.id_municipio = ca.id_municipio','left');
        
        $resultado=$this->db->get();
        return $resultado->result();
    }

    public function obtenerPuestos(){
        $this->db->from('puesto');
        $resultado= $this->db->get();
        return $resultado->result();
    }
}

/* End of file Candidato_model.php */


?>