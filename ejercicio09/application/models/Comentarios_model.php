<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios_model extends CI_Model {

    public function obtener_comentarios() {
        return $this->db->order_by('fecha', 'DESC')->get('comentarios')->result_array();
    }

    public function guardar_comentario($nombre, $comentario) {
        $this->db->insert('comentarios', array('nombre' => $nombre, 'comentario' => $comentario));
    }
}