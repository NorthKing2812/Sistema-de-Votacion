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

}

/* End of file Candidato_model.php */


?>