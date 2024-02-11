<?php

// Membuat Array
// cara pertama
$values = array(11, 04, 2000);
var_dump($values);

// cara kedua
$names = ["Falcon", "Spider", "Hornet"];

// Operasi Array
// $array[index] => mengakses data di array sesuai urutan index
var_dump($names[0]);

// $array[index]=value => mengubah data di array pada nomer index dengan value baru
$names[2] = "Lion";
var_dump($names);

// $array[]=value => menambah data di array pada posisi paling belakang
$names[] = "Hornet";
var_dump($names);

// unset($array[index]) => menghapus data di array, index otomatis hilang dari array
unset($names[3]);
var_dump($names);

// count($array) => mengambil jumlah data di array
var_dump(count($names));

// Map menggunakan Array & Array didalam Array
// cara pertama
$data = array(
    "alias" => "Adam",
    "fullname" => "ACH. MUQODDAM",
    "age" => 23,
);
var_dump($data);

// cara kedua
$biodata = [
    "name" => "Atha",
    "fullname" => "Atharrazka Alghifari",
    "age" => 1,
    "address" => [
        "city" => "Sampang",
        "country" => "Indonesia",
    ]
];
var_dump($biodata);

// cara mengambil indexnya
var_dump($data['alias']);
var_dump($biodata['name']);
var_dump($biodata["address"]["city"]);
