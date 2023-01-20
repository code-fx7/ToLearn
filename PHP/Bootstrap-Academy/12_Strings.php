<!-- Mit strlen lässt sich die Länge eines Strings zurückgeben.
Mit str_word_count lässt sich die Anzahl der Wörter ausgeben.
Mit strtev lässt sich ein String revers ausgeben.
Mit str_split lässt sich ein String spalten und in ein Array umwandeln. 
Mit str_replace lässt sich etwas aus einem Sting ersetzen.
stripcslashes entfernt \ (maskieren)-->
<?php
    $string = "Hello World!";
    echo strlen($string);
    echo str_word_count($string);
    echo strrev($string);
    echo str_split($string, 5)[0];
    echo str_replace($string, "Hi", $string);
    echo stripcslashes($string);