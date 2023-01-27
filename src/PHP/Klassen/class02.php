<?php
class User {
    var $ID;
    var $name;

    function printMe() {
        echo $this->ID . " " . $this->name;
    }
}

$morpheus = new User();
$morpheus->ID = 1;
$morpheus->name = "morpheus";
$morpheus->printMe();

$batman = new User();
$batman->ID = 2;
$batman->name = "batman";
$batman->printMe();