<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

// Membuat objek
$lingkaran = new Lingkaran(25);
$persegiPanjang = new PersegiPanjang(6, 14);
$segitiga = new Segitiga(4, 8);

// Menyimpan objek
$bidangArray = [$lingkaran, $persegiPanjang, $segitiga];
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Kumpulan</title>
    <h1 align="center">Kumpulan Bidang</h1>
</head>
<style>
    body{
        background-color: #FFF2D8;
    }
    table{
        font: 1em sans-serif;
        text-align: center;
    }
    th{
        background-color: #2E97A7;
        font: 1em sans-serif;
        padding: 4px;
    }
</style>
<body>
    <table border="1" align="center" width="50%" height="50%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($bidangArray as $bidang) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $bidang->nBidang() . "</td>";
                echo "<td>" . $bidang->keterangan(). "</td>";
                echo "<td>" . $bidang->lBidang() . "</td>";
                echo "<td>" . $bidang->kBidang() . "</td>";
                echo "</tr>";
                $no++;
                $keterangan;
            }
            ?>
        </tbody>
    </table>
</body>
</html>