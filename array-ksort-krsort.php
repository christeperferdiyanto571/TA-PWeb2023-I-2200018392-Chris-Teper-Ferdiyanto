<?php
    $arrayNilai = array("fulan"=>80, "fulin"=>90, "fulun"=>75, "falan"=>85);
    echo "<br>Array sebelum di urutkan</b>";
    echo "<pre>";
    print_r($arrayNilai);
    echo "</pre>";

    ksort($arrayNilai);
    reset($arrayNilai);
    echo "<br>Array setelah di urutkan dengan ksort()</br>";
    echo "<pre>";
    print_r($arrayNilai);
    echo "</pre>";

    krsort($arrayNilai);
    reset($arrayNilai);
    echo "<br>Array setelah diurutkan dengan krsort()</br>";
    echo"<pre>";
    print_r($arrayNilai);
    echo "</pre>";
?>