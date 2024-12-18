<?php

use Progammerkece\Mvc\core\Controller; 

class Home extends Controller {
    public function index(){
        $data['judul'] = 'Home';
        require_once '../app/config/config.php';
        $this->view('template/header',$data);
        $this->view('home/index',$data);
        $this->view('template/footer');
    }
}