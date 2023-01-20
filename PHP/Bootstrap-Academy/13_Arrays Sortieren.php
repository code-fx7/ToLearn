<?php
    $zahlen = array(3,6,1,8,3,76,3,32);
    sort($zahlen);
    rsort($zahlen);

    foreach($zahlen as $i) {
        echo $i . "<br>";
    }

    $zahlen1 = array("alice" => 3, "bob" => 6, "m" => 1, "z" => 8, "k" => 76, "r" => 3, "f" => 32);

    asort($zahlen1);
    arsort($zahlen1);
    krsort($zahlen1);
    ksort($zahlen1);

    foreach($zahlen1 as $i) {
        echo $i . "<br>";
    }