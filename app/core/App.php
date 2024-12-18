<?php

namespace Progammerkece\Mvc\core; 

class App{
    protected $controller = 'Mahasiswa';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->ParseURL();
        // pemanggilan controller
        if(!empty($url[0])&&file_exists('../app/controllers/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        // method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            } 
        }

        // parameter
        if(!empty($url)){
            $this->params = array_values($url);
        }

        // jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function ParseURL(){
        if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
    }


}