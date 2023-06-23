<?php
    
    $tinggi=5;
    $spasi = $tinggi - 1;
    $bintang = 1;

    for ($i = 1; $i <= $tinggi; $i++) {
        // Menampilkan spasi sebelum bintang
        for ($j = 1; $j <= $spasi; $j++) {
            echo "&nbsp;&nbsp;&nbsp;";
        }

        // Menampilkan bintang
        for ($j = 1; $j <= $bintang; $j++) {
            echo "* ";
        }

        echo "<br>";
        $spasi--;
        $bintang += 2;
    }
?>
