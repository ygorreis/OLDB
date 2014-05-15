<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Oldb extends CI_Controller {

    public function index() {
        $this->load->view('index');
    }
    
    public function notacoes_er(){
        $this->load->view('notacoes_er');
    }

}
