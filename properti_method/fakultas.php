<?php
// Class
class Fakultas
{
    // Property
    public $kode_fk, $nama_fk;
    // Method
    public function GetFK()
    {
        return "$this->kode_fk, $this->nama_fk";
    }
}

// Object
$fk1 = new Fakultas();
$fk2 = new Fakultas();
$fk3 = new Fakultas();

// Kode FK
$fk1->kode_fk = "UP01";
$fk2->kode_fk = "UP02";
$fk3->kode_fk = "UP03";
// Nama FK
$fk1->nama_fk = "Teknik";
$fk2->nama_fk = "Ekonomi Bisnis";
$fk3->nama_fk = "Seni & Sastra";