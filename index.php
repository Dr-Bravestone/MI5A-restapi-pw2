<?php

require_once('helper.php');

//  call function
echo salam();
echo "</br>";

echo "Testing pake php";
echo "</br>";
//variable
$npm = 2124250009;
echo "NPM: ". $npm;
echo "</br>";

$kode_prodi = substr($npm, 4, 2);
echo "Kode prodi adalah ". $kode_prodi;
echo "<br>";
// prodi get from function getProdi
echo "Prodinya adalah ". getProdi($kode_prodi);
echo "<br>";


// array

$mahasiswa = ["rizky", "agung", "okta", "rindi", "ribka"];

echo "<h2>Mahasiswa</h2>";
// tampil array

foreach($mahasiswas as $item){
    echo $item;
    echo "<br>";
}


$mahasiswa_4a = [
    [
    "npm" => 2124110001,
    "nama" => "Ani",
    "asal" => "Sekayu",
    "tgl_lahir" => "2005-02-02",
    "tgl_masuk" => "2021-09-01"
    ],
    [
    "npm" => 2124250002,
    "nama" => "Alii",
    "asal" => "Prabumulih",
    "tgl_lahir" => "2022-09-01"
    ]
    
];



echo "<h2> Mahasiswan MI4A </h2>";

echo "<table border = 1>
<tr>
    <th>NPM</th><th>Nama</th><th>Asal</th><th>Prodi</th><th>Tgl Lahir</th><th>Umur</th><th>Masa Studi</th>
</tr>";

foreach($mahasiswa_4a as $item){
    // buat dapet npmnyo
    $npm_test = substr($item['npm'], 4, 2);
    $tahun_lahir = substr($item['tgl_lahir'], 0,4);
    
    echo "<tr>
            <td>".$item['npm']."</td>
            <td>".$item['nama']."</td>
            <td>".$item['asal']."</td>
            <td> ".getProdi($npm_test)."</td>
            <td>".$item['tgl_lahir']."</td>
            <td>".getUsia($tahun_lahir)." tahun</td>
            <td>".getMasaStudi($item['tgl_masuk']) ."</td>
        </tr>";
}

echo '</table>';

?>