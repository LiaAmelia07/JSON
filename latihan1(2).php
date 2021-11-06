<?php
$mahasiswaJSON = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Ujang",
    "Umur": "16 Tahun",
    "Email": "Ujang@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Udin",
    "Umur": "17 Tahun",
    "Email": "Udin@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Agus",
    "Umur": "17 Tahun",
    "Email": "Agus@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Dadang",
    "Umur": "18 Tahun",
    "Email": "Dadang@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Erlangga",
    "Umur": "16 Tahun",
    "Email": "Erlangga@gmail.com"
  }
}';

$listmahasiswa = json_decode($mahasiswaJSON);
echo "=========================<br>";
echo "<b>1. DANNY INDRA GUNAWAN</b> <p>";
echo "=========================<br>";
foreach ($listmahasiswa as $key => $mahasiswa) {
  echo "NIM: {$mahasiswa->NIM} <br>";
  echo "Nama Mahasiswa: {$mahasiswa->Nama} <br>";
  echo "Umur: {$mahasiswa->Umur} <br>";
  echo "Email: {$mahasiswa->Email} <p>";
}

$mahasiswaJSON2 = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Ahmad",
    "Umur": "16 Tahun",
    "Email": "Ahmad@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Bambang",
    "Umur": "17 Tahun",
    "Email": "Bambang@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Chelsea",
    "Umur": "17 Tahun",
    "Email": "Chelsea@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Dinda",
    "Umur": "18 Tahun",
    "Email": "Dinda@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Elsa",
    "Umur": "16 Tahun",
    "Email": "Elsa@gmail.com"
  }
}';

$listmahasiswa = json_decode($mahasiswaJSON2);
echo "=========================<br>";
echo "<b>2. MUHAMMAD SABAR</b> <p>";
echo "=========================<br>";
foreach ($listmahasiswa as $key => $mahasiswa) {
  echo "NIM: {$mahasiswa->NIM} <br>";
  echo "Nama Mahasiswa: {$mahasiswa->Nama} <br>";
  echo "Umur: {$mahasiswa->Umur} <br>";
  echo "Email: {$mahasiswa->Email} <p>";
}

$mahasiswaJSON3 = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Agnes",
    "Umur": "16 Tahun",
    "Email": "Agnes@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Bima",
    "Umur": "17 Tahun",
    "Email": "Bimasakti@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Chesta",
    "Umur": "17 Tahun",
    "Email": "Chesta@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Dini",
    "Umur": "18 Tahun",
    "Email": "Dinixzth@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Emeron",
    "Umur": "16 Tahun",
    "Email": "Emeron@gmail.com"
  }
}';

$listmahasiswa = json_decode($mahasiswaJSON3);
echo "=========================<br>";
echo "<b>3. TARSINAH SUMARNI</b> <p>";
echo "=========================<br>";
foreach ($listmahasiswa as $key => $mahasiswa) {
  echo "NIM: {$mahasiswa->NIM} <br>";
  echo "Nama Mahasiswa: {$mahasiswa->Nama} <br>";
  echo "Umur: {$mahasiswa->Umur} <br>";
  echo "Email: {$mahasiswa->Email} <p>";
}

$mahasiswaJSON4 = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Abdul",
    "Umur": "16 Tahun",
    "Email": "Abdul@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Bianka",
    "Umur": "17 Tahun",
    "Email": "Bianka@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Cantika",
    "Umur": "17 Tahun",
    "Email": "Cantika@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Dicky",
    "Umur": "18 Tahun",
    "Email": "Dicky@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Emiranti",
    "Umur": "16 Tahun",
    "Email": "Emiranti@gmail.com"
  }
}';

$listmahasiswa = json_decode($mahasiswaJSON4);
  echo "===================<br>";
  echo "<b>4. SAEPUDIN</b> <p>";
  echo "===================<br>";
foreach ($listmahasiswa as $key => $mahasiswa) {
  echo "NIM: {$mahasiswa->NIM} <br>";
  echo "Nama Mahasiswa: {$mahasiswa->Nama} <br>";
  echo "Umur: {$mahasiswa->Umur} <br>";
  echo "Email: {$mahasiswa->Email} <p>";
}