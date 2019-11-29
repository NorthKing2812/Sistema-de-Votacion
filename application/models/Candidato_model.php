<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato_model extends CI_Model {

    public function Registrar($datos){
        $this->db->insert('candidato', $datos);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerPuestos(){
        $this->db->from('puesto');
        $resultado= $this->db->get();
        return $resultado->result();
    }
}

/* End of file Candidato_model.php */


?>