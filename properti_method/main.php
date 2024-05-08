<?php
require 'fakultas.php';
require 'prodi.php';
require 'matakuliah.php';
require 'mahasiswa.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa Unpas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-5">
    <h1 class="text-center mb-5">Mahasiswa Universitas Pasundan</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Matakuliah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?= $Mahasiswa1->nama; ?></td>
                <td><?= $fk1->nama_fk; ?> / <?= $fk1->kode_fk; ?></td>
                <td><?= $pd1->nama_prodi; ?> / <?= $pd1->kode_prodi; ?></td>
                <td><?= $mk1->nama_mk; ?> / <?= $mk1->kode_mk; ?>
                    <br>
                    <?= $mk2->nama_mk; ?> / <?= $mk2->kode_mk; ?>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><?= $Mahasiswa2->nama; ?></td>
                <td><?= $fk2->nama_fk; ?> / <?= $fk2->kode_fk; ?></td>
                <td><?= $pd2->nama_prodi; ?> / <?= $pd2->kode_prodi; ?></td>
                <td><?= $mk3->nama_mk; ?> / <?= $mk3->kode_mk; ?>
                    <br>
                    <?= $mk4->nama_mk; ?> / <?= $mk4->kode_mk; ?>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><?= $Mahasiswa3->nama; ?></td>
                <td><?= $fk3->nama_fk; ?> / <?= $fk3->kode_fk; ?></td>
                <td><?= $pd3->nama_prodi; ?> / <?= $pd3->kode_prodi; ?></td>
                <td><?= $mk5->nama_mk; ?> / <?= $mk5->kode_mk; ?>
                    <br>
                    <?= $mk6->nama_mk; ?> / <?= $mk6->kode_mk; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>