<?php
// Class
class Matakuliah
{
    // Property
    public $kode_mk, $nama_mk, $sks;
    // Method
    public function GetMK()
    {
        return "$this->kode_mk, $this->nama_mk. $this->sks";
    }
}

// Object
$mk1 = new Matakuliah();
$mk2 = new Matakuliah();
$mk3 = new Matakuliah();
$mk4 = new Matakuliah();
$mk5 = new Matakuliah();
$mk6 = new Matakuliah();

// Kode MK
$mk1->kode_mk = "IF_1_2022";
$mk2->kode_mk = "IF_2_2022";
$mk3->kode_mk = "PEA_1_2022";
$mk4->kode_mk = "PEA_2_2022";
$mk5->kode_mk = "DKV_1_2022";
$mk6->kode_mk = "DKV_1_2022";
// Nama MK
$mk1->nama_mk = "Rekayasa Perangkat Lunak";
$mk2->nama_mk = "Pemograman Web";
$mk3->nama_mk = "Pengantar Akuntansi I";
$mk4->nama_mk = "Matematika Ekonomi";
$mk5->nama_mk = "Fotografi Dasar";
$mk6->nama_mk = "Pengantar Seni Rupa Dan Desain";
// SKS
$mk1->sks = "2";
$mk2->sks = "3";
$mk3->sks = "2";
$mk4->sks = "2";
$mk5->sks = "3";
$mk6->sks = "2";