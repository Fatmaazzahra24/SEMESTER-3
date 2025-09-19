<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Nilai A = {$a} <br>";
    echo "Nilai B = {$b} <br><br>";

    echo "hasil tambah = {$hasilTambah} <br>";
    echo "hasil tambah = {$hasilKurang} <br>";
    echo "hasil tambah = {$hasilKali} <br>";
    echo "hasil tambah = {$hasilBagi} <br>";
    echo "hasil tambah = {$sisaBagi} <br>";
    echo "hasil tambah = {$pangkat} <br> <br> ";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;


    echo "Apakah A sama dengan B? " . ($hasilSama ? "true" : "false") . "<br>";
    echo "Apakah A tidak sama dengan B? " . ($hasilTidakSama ? "true" : "false") . "<br>";
    echo "Apakah A lebih kecil dari B? " . ($hasilLebihKecil ? "true" : "false") . "<br>";
    echo "Apakah A lebih besar dari B? " . ($hasilLebihBesar ? "true" : "false") . "<br>";
    echo "Apakah A lebih kecil atau sama dengan B? " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
    echo "Apakah A lebih besar atau sama dengan B? " . ($hasilLebihBesarSama ? "true" : "false") . "<br> <br>";

    $hasilAnd =$a && $b;
    $hasilOr =$a || $b;
    $hasilNotA =!$a;
    $hasilNotB =!$b;

    echo "variabel A AND B = " . ($hasilAnd ? "true" : "false") . "<br>";
    echo "variabel A OR B = " . ($hasilOr ? "true" : "false") . "<br>";
    echo "variabel NOT A = " . ($hasilNotA ? "true" : "false") . "<br>";
    echo "variabel NOT B = " . ($hasilNotB ? "true" : "false") . "<br> <br> ";

    $tambah = $a + $b; 
    $kurang = $a - $b;
    $kali = $a * $b;
    $bagi = $a / $b;
    $modulus = $a % $b;

    echo "Hasil a + b = $tambah <br>";
    echo "Hasil a - b = $kurang <br>";
    echo "Hasil a * b = $kali <br>";
    echo "Hasil a / b = $bagi <br>";
    echo "Hasil a % b = $modulus <br><br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !==$b;

    echo "Hasil a === b (Identik) = " . ($hasilIdentik ? "true" : "false") . "<br>";
    echo "Hasil a !== b (Tidak Identik) = " . ($hasilTidakIdentik ? "true" : "false") . "<br>";
    
    $totalkursi = 45;
    $kursiterpakai = 28;
    $kursikosong = $totalkursi - $kursiterpakai;
    $persenkosong = ($kursikosong / $totalkursi) * 100;

    echo "Total kursi di restoran: $totalkursi <br>";
    echo "Kursi terpakai: $kursiterpakai <br>";
    echo "Kursi kosong: $kursikosong <br>";
    echo "Persentase kursi kosong: $persenkosong % <br>";
?>