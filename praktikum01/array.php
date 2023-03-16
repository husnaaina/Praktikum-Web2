<?php

// Buat Array
$animals = ["Kucing", "Singa", "Jerapah","Capung"];

echo $animals[3] . "<br>";
echo $animals[2]; 

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

//Buat Array Asosiatif
$mahasiswa = ["Nama"=>"Husna", "Jurusan"=>"Sistem Informasi", "Semester"=>2];
echo $mahasiswa["Jurusan"] . "<br>";

foreach ($mahasiswa as $key=> $value) {
    echo "Key nya adalah " . $key . "Value: " . $value . "<br>";
}

// Buat array multidimensi
$dosen = [
    ["Pa Rojul", "Web"],
    ["Pa Nasrul", "DDP"],
    [" Pak Lukman", "OS"]
];

echo $dosen[0][0];


?>