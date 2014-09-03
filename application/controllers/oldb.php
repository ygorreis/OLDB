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
    
    public function cenarios_er(){
        $this->load->view('cenarios_er');
    }
    
    public function dependencias_er(){
        $this->load->view('dependencias_er');
    }
    
    public function er_tabelas(){
        $this->load->view('er_tabelas');
    }
}
