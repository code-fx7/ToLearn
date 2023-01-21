<?php
//Funktionen Mit Defaultparametern Und Rückgabewerten
    
    //Defaultparametern
    function addieren($a, $b=42) {
        echo $a + $b;
    }

    addieren(5);
    echo "<br>";

    //Rückgabewerten
    function returnadd($a, $b) {
        return $a + $b;
    }
    
    $ergebnis = returnadd(5, 42);
    //echo $ergebnis;
    echo "Das Ergebnis ist " .  returnadd(5, 42) . ".";
    