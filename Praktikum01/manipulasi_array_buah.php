<?php
$arrayBuah = ["Duren","Mangga","Alpukat","Jeruk","Cherry"];

//mengurutkan value dari array
sort($arrayBuah);

//menghapus value array yang paling akhir
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah[3]);

//menambahkan value array di paling belakang
array_push($arrayBuah,"Pisang");

//menghapus value array yang paling depan
array_shift($arrayBuah);

//menambahkan value array di paling
array_unshift($arrayBuah,"Buah Naga");

//mengubah value array tertentu
$arrayBuah[2] = "Leci";

foreach($arrayBuah as $buah) {
    echo $buah . "<br>";
}

