<?php
$listMahasiswaJSON = '[
  { "nama": "Danny Indra Gunawan" },
  { "nama": "Muhammad Sabar" },
  { "nama": "Tarsinah Sumarni" },
  { "nama": "Saepudin" }
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa) {
  echo "{$key}. Nama Dosen : {$mahasiswa->nama} <br>";
}
?>