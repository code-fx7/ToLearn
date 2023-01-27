<?php
class User {
    var $ID;
    var $name;

    function __construct($setid, $setname) {
        $this->ID = $setid;
        $this->name = $setname;
    }
    
    function printMe() {
        echo $this->ID . " " . $this->name;
    }
}

$morpheus = new User(1, "morpheus");
$morpheus->printMe();

$batman = new User(2, "batman");
$batman->printMe();