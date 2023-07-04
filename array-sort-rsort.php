<?php
    $arrayNilai = array("fulan"=>80, "fulin"=>90, "fulun"=>75, "falan"=>85);
    echo "<br>Array sebelum di urutkan</b>";
    echo "<pre>";
    print_r($arrayNilai);
    echo "</pre>";

    asort($arrayNilai);
    reset($arrayNilai);
    echo "<br>Array setelah di urutkan dengan asort()</br>";
    echo "<pre>";
    print_r($arrayNilai);
    echo "</pre>";

    arsort($arrayNilai);
    reset($arrayNilai);
    echo "<br>Array setelah diurutkan dengan arsort()</br>";
    echo"<pre>";
    print_r($arrayNilai);
    echo "</pre>";
?>