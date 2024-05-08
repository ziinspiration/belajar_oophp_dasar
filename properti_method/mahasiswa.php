<?php
// Class
class Mahasiswa
{
    // Property
    public $nama, $nim;
    // Method
    public function GetMahasiswa()
    {
        return "$this->nama,  $this->nim";
    }
}

// Object
$Mahasiswa1 = new Mahasiswa();
$Mahasiswa2 = new Mahasiswa();
$Mahasiswa3 = new Mahasiswa();

// Set value properti 
$Mahasiswa1->nama = "Fakih Helmi Maulana";
$Mahasiswa2->nama = "Dzikri Setiawan";
$Mahasiswa3->nama = "Muhamad Alfath Septian";
$Mahasiswa1->nim = "223040056";
$Mahasiswa2->nim = "223040072";
$Mahasiswa3->nim = "223040014";