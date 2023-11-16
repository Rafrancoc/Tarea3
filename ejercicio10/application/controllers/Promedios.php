<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promedios extends CI_Controller {

    public function index() {
        // Cargar vista inicial
        $this->load->view('promedios/index', array('title'=>'Promedios'));
    }
}