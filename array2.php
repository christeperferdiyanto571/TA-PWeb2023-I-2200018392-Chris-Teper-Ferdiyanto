<?php
    $arrayNilai = array("fulan"=>80, "fulin"=>90, "fulun"=>75, "falan"=>85);
    echo $arrayNilai['fulan']. "<br>";//80
    echo $arrayNilai['fulin']. "<br><br>";//90

    $arrayNilai = array();
    $arrayNilai['amin'] = "80";
    $arrayNilai['aman'] = "95";
    $arrayNilai['amen'] = "77";
    echo $arrayNilai['aman']. "<br>";//95
    echo $arrayNilai['amin']. "<br>";//80
?>