<?php
$arrayBuah = ["Nanas","Apel","Anggur","Durian"];

//menggunakan value dari array
sort($arrayBuah);

//menggunkan value array yang paling terakhir
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah[3]);

//menambahkan satu value array diakhir
array_push($arrayBuah, "Peach");

//menghapus spesifik value yang paling depan
array_shift($arrayBuah);

//menambahkan satu value array didepan
array_unshift($arrayBuah, "Pisang");

//mengubah value array tertentu
$arrayBuah[2] = "Peach";

foreach($arrayBuah as $buah ) {
    echo $buah . "<br>";
}