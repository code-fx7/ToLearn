<?php
    function playGwent($name) {
        echo "Bock auf eine Runde Gwent, $name ?";
        echo "Aber sicher doch!";
    }

    /* function addieren() {
        playGwent("Zoltan");    
    }

    echo addieren(); */

    function runterZaehlen($n) {
        if($n < 1) {
            return;
        }
        echo $n;
        runterZaehlen($n - 1);
    }

    runterZaehlen(5);