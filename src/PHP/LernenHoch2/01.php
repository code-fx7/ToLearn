<?php
echo 'Hallo Welt';
echo "Hallo Welt";

//Anführungszeichen in einem String entwerten
echo "... und er sagte es wäre \"wenig\" Arbeit";

//Variablen im String
$name = "Marie";
echo "Ich heiße $name"; 

$name = "Marie";
echo 'Ich heiße ' .$name;

$zustand = "gut";
echo "Mir geht es " .$zustand;

$zahl = 12;
echo $zahl;

$zahl1 = 1;
echo "Mein Wert ist ".$zahl1. " - ";

$zahl1 = 2;
echo "jetzt ist er " .$zahl1;

$a = 12;
$z = $a;
echo $z;

$a = 100;
$b = 200;
//hier wird getauscht
echo $a." - " .$b;

$zahl2 = 12;
$zahl3 = 8;
$ergebnis = $zahl2 + $zahl3;
echo $ergebnis;