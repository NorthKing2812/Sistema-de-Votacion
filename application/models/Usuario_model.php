<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function login($usuario,$password){
        $this->db->where('CorreoElectronico', $usuario);
        $this->db->where('clave', $password);
        $resultado = $this->db->get('usuario');
        if($resultado->num_rows()>0){
            return $resultado->row();
        }else{
            return false;
        }
    }

}

/* End of file Usuario_model.php */


?>