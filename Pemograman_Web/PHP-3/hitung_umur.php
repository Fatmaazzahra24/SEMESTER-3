<?php
    function hitung_umur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }    
    echo "Umur saya adalah ".hitung_umur(2005,2025)." tahun";
?>