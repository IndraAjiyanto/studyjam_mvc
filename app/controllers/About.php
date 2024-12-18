<?php

use Progammerkece\Mvc\core\Controller; 

class About extends Controller {
    public function index(){
        $data['judul'] = 'About';
        require_once '../app/config/config.php';
        $this->view('template/header',$data);
        $this->view('about/index',$data);
        $this->view('template/footer');
    }
}