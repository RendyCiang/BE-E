<?php
// Print 
    echo "Hello World! <br>";

// Data Types
// String
    $name = "Davin <br>";
    echo $name;

// Numerical
    $age = 30; 
    echo $age;
    echo "<br>";
// Boolean
    $Happy = true;
    echo $Happy;
    echo "<br>";

$string = 'Im $age years old';
echo $string;
echo "<br>";
$string = "Im not 17 years old, but im " . $age;
echo $string;
echo "<br>";

// Concat 
$string = "ini" . "kepisah" . "tapi" . "Kayak" . "Kegabung";
echo $string;
echo "<br>";

// Indexed Array -> Pemanggilan By Index Numerik (Angka) 
$array_buah = array("Mangga", "Jeruk", "Apel");
echo $array_buah[0];
echo "<br>";
echo "<br>";

// For Loop Print
echo "Print For Loop <br>";
foreach($array_buah as $buah){
    echo $buah . "<br>";
}

// Associative ArrayPemanggilan By Index Key (String) 
$orang = array(
    "Nama" => "Davin", 
    "Umur" => 30, 
    "Kota" => "KMG"
);
echo $orang["Nama"];
echo "<br>";

echo $orang["Umur"];
echo "<br>";

echo $orang["Kota"];
echo "<br>";
echo "<br>";


// For Loop Print
// echo "Print For Loop Associative<br>";
// // $tampung = array("nama", "umur", "kota");
// $tampung = array_keys($orang);
// for($i = 0; $i < count($tampung); $i++){
//     $tampung = $tampung[$i];
//     echo $tampung . "=" . "$orang[$tampung] <br>";
// }


// Multidimensional Array
$orang2 = array(
    array(
        "Nama" => "Davin", 
        "Umur" => 30, 
        "Kota" => "KMG"
    ),
    array(
        "Nama" => "Budi", 
        "Umur" => 15, 
        "Kota" => "MLG"
    ),
    array(
        "Nama" => "Tono", 
        "Umur" => 10, 
        "Kota" => "BDG"
    )
);
// echo $orang[0]["Nama"];
// echo $orang[0]["Umur"];
// echo $orang[0]["Kota"];
// echo "<br>";
// echo $orang[2]["Nama"];
// echo $orang[2]["Umur"];
// echo $orang[2]["Kota"];

// For Loop Print
echo "Print For Loop Multidimensional<br>";
for($i = 0; $i < count($orang2); $i++){
    echo "Data Nama = " . $orang2[$i]["Nama"] . "<br>";
    echo "Data Umur = " . $orang2[$i]["Umur"] . "<br>";
    echo "Data Kota = " . $orang2[$i]["Kota"] . "<br>";
}


// Kapan pakai forloop / foreach ? 
// 1. Pakai for loop biasa kalau 
/*
a. Iterasi berdasarkan indeks yang spesifik 
    for(int i = 0; i < 5; i+=2)
b. Manipulate index
c. Associative & Multidimensional Array
*/

function Message(){
    echo "Hello World! <br>";
}

Message();
?>
