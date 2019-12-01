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

}

/* End of file Colegio_model.php */


?>