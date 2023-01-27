<?php

/* class Kfz{
    public $ps = 150;
    public $raeder = 4;

    public function printInfo(){
        echo "PS=" . $this->ps . " Räder= " . $this->raeder;
    }
}

$auto = new Kfz();
$auto->printInfo(); */

class Kfz{
    public $ps;
    public $raeder;

    public function __construct($ps,$raeder){
        $this->ps = $ps;
        $this->raeder = $raeder;
    }

    public function printInfo(){
        echo "PS=" . $this->ps . " Räder= " . $this->raeder;
    }
}

$auto = new Kfz(250,4);
$auto->printInfo();