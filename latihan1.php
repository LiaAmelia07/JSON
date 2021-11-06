<?php

//file json yang akan dibaca
$file = "latihan1part2.json";

//mendapatkan file json
$anggota = file_get_contents($file);

//mendecode anggota.json
$data = json_decode($anggota, true);

//membaca/menampilkan data array menggunakan foreach
foreach ($data as $d){
    foreach ($d['dosen'] as $d1){
        echo $d1['nama'] . "<br>";
    echo "Data Mahasiswa<br>";

    echo "<ol>";
    echo "<li>Mahasiswa 1</li>";
    echo "<ul>";
    foreach ($d1['mahasiswa1'] as $d2){
        echo "<li>" .$d2['data'] . "</li>";
    }
    echo "</ul>";

    echo "<li>Mahasiswa 2</li>";
    echo "<ul>";
    foreach ($d1['mahasiswa2'] as $d3){
        echo "<li>" .$d3['data'] . "</li>";
    }
    echo "</ul>";

    echo "<li>Mahasiswa 3</li>";
    echo "<ul>";
    foreach ($d1['mahasiswa3'] as $d4){
        echo "<li>" .$d4['data'] . "</li>";
    }
    echo "</ul>";

    echo "<li>Mahasiswa 4</li>";
    echo "<ul>";
    foreach ($d1['mahasiswa4'] as $d5){
        echo "<li>" .$d5['data'] . "</li>";
    }
    echo "</ul>";

    echo "<li>Mahasiswa 5</li>";
    echo "<ul>";
    foreach ($d1['mahasiswa5'] as $d6){
        echo "<li>" .$d6['data'] . "</li>";
    }
    echo "</ul>";
    echo "</ol>";
}
}
?>
<a href = "latihan1part2.json">Lihat JSON</a>