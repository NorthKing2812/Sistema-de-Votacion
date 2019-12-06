<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Votante_model extends CI_Model {

    public function Votar($datos){
          $this->db->insert('votante_voto', $datos);
          if($this->db->affected_rows()){
            return true;
          }else{
              return false;
          }
    }

}

/* End of file Votante_model.php */


?>