<?php

class Usuarios{

static function guardar($cedula){

    $CI =& get_instance();

    $CI->db->insert('votante', $cedula);
    
}

static function listados($puesto){
    $CI =& get_instance();
    $sql = "SELECT partido.nombre as partido_nombre, partido.siglas,partido.hexaColor1,partido.hexaColor2, candidato.nombre, 
    candidato.id_candidato as id_candidato,
    candidato.apellido, candidato.puesto, candidato.foto FROM candidato INNER JOIN partido
    ON candidato.id_partido = partido.id_partido WHERE candidato.puesto = {$puesto}";
    $rs = $CI->db->query($sql)->result();
    return $rs;
}
static function revisar($cedula){
    $CI =& get_instance();
    $sql = "SELECT id_votante FROM votante WHERE cedula = '" . $cedula['cedula'] . "'";
    $rs = $CI->db->query($sql)->result();
    if (!$rs == null) {
       return true;
    }else{
        return false;
    }
}
static function conocer($cedula){
    $CI =& get_instance();
    $sql = "SELECT id_votante FROM votante WHERE cedula = '" . $cedula['cedula'] . "'";
    $rs = $CI->db->query($sql)->result();
    return $rs;
}
static function registrar_voto($votante, $candidato,$colegio,$fecha){
    $CI =& get_instance();
    $sql = "INSERT INTO `votante_voto` (`id_votante`, `id_colegio`, `id_candidato`, `fecha_voto`) 
    VALUES ($votante, $colegio, $candidato,  $fecha)";
    $CI->db->query($sql);

}

}