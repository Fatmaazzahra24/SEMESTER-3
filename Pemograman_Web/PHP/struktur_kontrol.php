<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai huruf: C";
    } elseif ($nilaiNumerik < 70) {
        echo "Nilai huruf: D";
    }

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

   while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
        echo "Hari ke-$hari: Jarak yang ditempuh = $jarakSaatIni km <br>";
    }
    echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer.<br> <br>";

    $jumlahlahan= 10;
    $tanamanperlahan = 5;
    $buahpertanaman  = 10;
    $jumlahbuah = 0;

    for ($i = 1; $i <= $jumlahlahan;$i++) {
        $jumlahbuah += ($tanamanperlahan* $buahpertanaman);
        echo "jumlah buah pada lahan $i adalah : $jumlahbuah  <br>";
    }
    echo "jumlah buah yang akan dipanen adalah : $jumlahbuah <br> <br>";

    $nilai = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilai as $nilai) {
        if ($nilai < 60) {
            echo "Siswa dengan nilai $nilai dinyatakan Tidak Lulus. <br>";
            continue;
        }
         echo "Siswa dengan nilai $nilai dinyatakan Lulus. <br> ";
    }

    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiSiswa);
    array_shift($nilaiSiswa); 
    array_shift($nilaiSiswa);
    array_pop($nilaiSiswa);
    array_pop($nilaiSiswa);

    $totalNilai = array_sum($nilaiSiswa);
    $rataRata = $totalNilai / count($nilaiSiswa);
    echo "Total nilai (setelah mengabaikan 2 tertinggi & 2 terendah): $totalNilai <br>";
    echo "Rata-rata nilai: $rataRata <br> <br> ";


    $produk = 120000;
    echo "Harga produk = Rp $produk <br>";

    if ($produk > 100000) {
        $diskon = $produk * 0.20;
        $totalBayar = $produk - $diskon;
        echo "Pelanggan mendapat diskon 20% (Rp $diskon), produk harus dibayar dengan jumlah: Rp $totalBayar";
    } else {
        echo "Pelanggan tidak mendapat diskon ";
    }
    echo " <br><br>";

    $poin1 = 450;
    echo "Total skor pemain adalah: $poin1 <br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? " . ($poin1 > 500 ? "YA" : "TIDAK") . "<br><br>";

    $poin2 = 720;
    echo "Total skor pemain adalah: $poin2 <br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? " . ($poin2 > 500 ? "YA" : "TIDAK");

?>
