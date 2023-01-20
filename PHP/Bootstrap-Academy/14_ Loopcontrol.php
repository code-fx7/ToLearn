<!-- break unterbricht den gesamten Schleifendurchlauf.
continue überspringt den definierten Wert. -->

<?php
    $zahlen = array("alice" => 3, "bob" => 6, "m" => 1, "z" => 8, "k" => 76, "r" => 3, "f" => 32);
    asort($zahlen);

    foreach($zahlen as $i) {
        if($i > 10) {
            break;
        }
        echo $i . "<br>";
    }

    echo "<br>";

    foreach($zahlen as $i) {
        if($i == 8) {
            continue;
        }
        echo $i . "<br>";
    }