<?php
    $arrayWarna = array("red", "orange", "yellow", "green", "blue", "purple");

    echo "Menampilkan isi array dengan FOR : <br>";
    for ($i = 0; $i < count($arrayWarna); $i++) {
        echo "Warna pelangi <font color=$arrayWarna[$i]". $arrayWarna[$i]."</font><br>";
    }
    
    echo "<br>Menampilkan isi array dengan FOREACH : <br>";
    foreach ($arrayWarna as $warna) {
        echo "Warna pelangi <font color=$warna>".$warna."</font><br>";
    }
?>