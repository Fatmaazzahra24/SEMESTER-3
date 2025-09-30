<?php
    function perkenalan($nama,$salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }
    
    perkenalan("Hamdana","Hallo");
    echo "<hr>";
    $saya ="Elok";
    $ucapkansalam = "Selamat pagi";
    
    perkenalan($saya);
?>