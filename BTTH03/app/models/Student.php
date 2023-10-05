<?php
class Student {
    private $id;
    private $tenSinhVien;
    private $email;
    private $ngaySinh;
    private $idLop;

    public function __construct($id, $tenSinhVien, $email, $ngaySinh, $idLop) 
    {
        $this->id = $id;
        $this->tenSinhVien = $tenSinhVien;
        $this->email = $email;
        $this->ngaySinh = $ngaySinh;
        $this->idLop = $idLop;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTenSinhVien() {
        return $this->tenSinhVien;
    }

    public function setTenSinhVien($tenSinhVien) {
        $this->tenSinhVien = $tenSinhVien;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getNgaySinh() {
        return $this->ngaySinh;
    }

    public function setNgaySinh($ngaySinh) {
        $this->ngaySinh = $ngaySinh;
    }

    public function getIdLop() {
        return $this->idLop;
    }

    public function setIdLop($idLop) {
        $this->idLop = $idLop;
    }
}
?>