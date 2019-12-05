<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Partido_model extends CI_Model {

    public function getPartidos(){
        
        $this->db->from('partido');
        $resultados= $this->db->get();
        return $resultados->result();
    }

}

/* End of file Partido_model.php */


?>