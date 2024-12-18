<?php

use Progammerkece\Mvc\core\Database; 

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultset();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahMahasiswa($data){
        $this->db->query("INSERT INTO ".$this->table." (nama, prodi, nim) VALUES(:nama, :prodi, :nim)");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('nim', $data['nim']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id){
        $this->db->query("DELETE FROM ".$this->table." WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataMahasiswa($data){
        $this->db->query("UPDATE ".$this->table." SET nama = :nama, prodi = :prodi, nim = :nim WHERE id =:id");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}