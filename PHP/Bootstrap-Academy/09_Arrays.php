<?php
    $geschlechter = array("m", "f", "n");
    echo $geschlechter[0];
    for($i = 0; $i < count($geschlechter); $i++) {
        echo $geschlechter[$i];
        if($geschlechter[$i] == "m"){
            echo "\nder\n";
        }
    }