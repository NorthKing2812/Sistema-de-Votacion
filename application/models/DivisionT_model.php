<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DivisionT_model extends CI_Model {

    public function getProvincias(){
        $resultado= $this->db->get('provincia');
        return $resultado->result();
    }
    
    public function getMunicipio(){
        $resultado= $this->db->get('municipio');
        return $resultado->result();
    }
}

/* End of file DivisionT_model.php */


?>