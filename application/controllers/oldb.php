<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OlDB extends CI_Controller {

    public function index() {
        $this->load->view('index');
    }
    
    public function notacoes_er(){
        $this->load->view('notacoes_er');
    }
    
    public function imagem(){
        $config['source_image']	= '../img/imagem1.jpg';

        $this->load->library('image_lib', $config); 

        $this->image_lib->resize();
       }
}
