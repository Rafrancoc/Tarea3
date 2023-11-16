<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('comentarios_model');
    }

    public function index() {
        $data['title'] ='Comentarios';
        $data['comentarios'] = $this->comentarios_model->obtener_comentarios();
        $this->load->view('comentarios/index', $data);
    }

    public function nuevo_comentario() {
        $data['title'] ='Comentarios';
        $this->load->view('comentarios/guardar_comentario', $data);
    }

    public function guardar_comentario() {
        $nombre = $this->input->post('nombre');
        $comentario = $this->input->post('comentario');
        $this->comentarios_model->guardar_comentario(trim($nombre),trim($comentario));
        redirect('comentarios/index');
    }
}