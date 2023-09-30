<?php
require 'konversi.php';
$S1 = new KS('Celcius', 50, 'Fahrenheit');
$S2 = new KS('Celcius', 40, 'Fahrenheit');
$S3 = new KS('Fahrenheit', 86, 'Celcius');
$S4 = new KS('Fahrenheit',123, 'Celcius');
$S5 = new KS('Celcius', 35, 'Rheamur');

$SuhuArray = [$S1, $S2, $S3, $S4, $S5];

// Cetak data
echo '<h1 align="center">Konversi Suhu</h1>';
echo '<table border="1"  align="center">';
echo '<thead>
        <tr bgcolor="#B5CB99">
            <td>Satuan Suhu Awal</td>
            <td>Besaran Suhu</td>
            <td>Satuan Suhu Tujuan</td>
            <td>Hasil Konversi Suhu</td>
        </tr>
    </thead>';

foreach ($SuhuArray as $Suhu) {
    echo $Suhu->cetak() ;
}
echo '</table>';
?>