<?php


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votos_model extends CI_Model {
    //Cantidad de votos
    public function countVotos(){
        $this->db->select('count(*)');
        $resultado=$this->db->get('votante_voto');
        return $resultado->row();
    }

}

/* End of file Votos_model.php */


?>