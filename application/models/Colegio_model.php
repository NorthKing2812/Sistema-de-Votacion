<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Colegio_model extends CI_Model {

    public function getSectores(){
        $this->db->from('sector');
        $resultado= $this->db->get();
        return $resultado->result();
    }

}

/* End of file Colegio_model.php */


?>