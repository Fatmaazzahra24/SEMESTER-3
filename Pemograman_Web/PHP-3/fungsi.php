<?php
    function hitung_umur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    } 
    function perkenalan($nama,$salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan nama saya ".$nama."<br/>";
        echo "Saya berusia ".hitung_umur(1988,2023)." tahun<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }
    perkenalan("Elok");
?>