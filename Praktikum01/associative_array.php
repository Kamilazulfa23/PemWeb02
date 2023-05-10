<?php
//membuat array assosiatif
$profileArray = [
    "nama" => "Kamila Zulfa",
    "kelas" => "SI14"
];

//print_r($profileArray);

$profileMultiArray = [
    [
        'nama' => 'Tina',
        'kelas' => 'XTKJ1'
    ], [
        'nama' => 'Sri',
        'kelas' => 'XITKR3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XIRPL3'
    ]
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
}

// foreach($profileArray as $profile) {
//     echo $profileArray['nama'];
// }







