<?php
// Class
class Prodi
{
    // Property
    public $kode_prodi, $nama_prodi;
    // Method
    public function GetProdi()
    {
        return "$this->kode_prodi, $this->nama_prodi";
    }
}

// Object
$pd1 = new Prodi();
$pd2 = new Prodi();
$pd3 = new Prodi();

// Kode Prodi
$pd1->kode_prodi = "0105";
$pd2->kode_prodi = "0202";
$pd3->kode_prodi = "0301";
// Nama Prodi
$pd1->nama_prodi = "Informatika";
$pd2->nama_prodi = "Akuntansi";
$pd3->nama_prodi = "Fotografi";