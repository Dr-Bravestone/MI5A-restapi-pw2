<?php

    function salam(){
        return "selamat datang";
    }

    // function get prodi
    
    function getProdi($kode){
        $array = [
          11 => "manajemen informatika",
          25 => "informatika",
          24 => "sistem informasi"  
        ];

        return $array[$kode];
    }

    function getUsia($tahun){
        return date("Y") - $tahun;
    }

    function getMasaStudi($masuk){
        $diff = abs(strtotime(date("Y-m-d")) - strtotime($masuk));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        return("$years tahun, $months bulan, $days hari");
        }
?>