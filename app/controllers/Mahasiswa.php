<?php

use Progammerkece\Mvc\core\Controller; 

class Mahasiswa extends Controller {
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        require_once '../app/config/config.php';
        $this->view('template/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('template/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        require_once '../app/config/config.php';
        $this->view('template/header',$data);
        $this->view('mahasiswa/detail',$data);
        $this->view('template/footer');
    }

    public function tambah(){
        $data['judul'] = 'Tambah Mahasiswa';
        require_once '../app/config/config.php';
        $this->view('template/header',$data);
        $this->view('mahasiswa/tambah',$data);
        $this->view('template/footer');
    }

    public function edit($id){
        $data['judul'] = 'Edit Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        require_once '../app/config/config.php';
        $this->view('template/header',$data);
        $this->view('mahasiswa/edit',$data);
        $this->view('template/footer');
    }

    public function tambahAksi(){
        require_once '../app/config/config.php';
        if($this->model('Mahasiswa_model')->tambahMahasiswa($_POST) > 0){;
        header('location:'.BASEURL.'/mahasiswa');
        exit;
    }else{
        header('location:'.BASEURL.'/mahasiswa');
        exit;
    }
}

    public function hapus($id){
        require_once '../app/config/config.php';
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
            header('location:'.BASEURL.'/mahasiswa');
            exit;
        }else{
            header('location:'.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function editMahasiswa(){
        require_once '../app/config/config.php';
        if($this->model('Mahasiswa_model')->editDataMahasiswa($_POST) > 0){;
            header('location:'.BASEURL.'/mahasiswa');
            exit;
        }else{
            header('location:'.BASEURL.'/mahasiswa');
            exit;
        }
    }
}