<!-- Assoziative Arrays funktionieren nur mit der foreach Schleife -->
<?php
    $parteien = array("Alice"=>20, "Bob"=>23);
    //echo $parteien["Bob"]; Zugriff auf einen Wert im Array
    foreach($parteien as $key => $wert) {
        echo $key . " ist " . $wert . " Jahre alt.";
    }