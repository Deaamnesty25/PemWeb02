<?php
//membuat array assosiatif
$profileArray = [
    "nama" => "Dea Amnesty", 
    "kelas" => "SI14"
];

// print_r($profileArray);

$profileMultiArray = [
    [   
        'nama' => 'Siti',
        'kelas' => 'XTKJ2'
    ], [
        'nama' => 'Sri',
        'kelas' => 'XTKJ3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XTKJ3'
    ]
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama']  . "<br>";
}