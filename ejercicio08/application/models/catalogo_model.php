<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Catalogo_model extends CI_Model {
 
    public function construct() {
        parent::__construct();
    }

    function filas() {
        $consulta = $this->db->get('productos');
        return $consulta->num_rows();
    }

    function total_productos_paginados($por_pagina, $segmento) {
        $consulta = $this->db->get('productos', $por_pagina, $segmento);
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }

    function porId($id) {
        $this->db->where('id', $id);
        $productos = $this->db->get('productos');
        foreach ($productos->result() as $producto) {
            $data[] = $producto;
        }
        if ($producto->opciones) {
            $producto->opciones = explode(',', $producto->opciones);
        }
        return $producto;
    }
}

