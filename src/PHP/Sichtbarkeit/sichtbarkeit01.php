<?php
class MyClass {
    public $public = 'public';
    protected $protected = 'protected';
    private $private = 'private';

    function show(){
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

class MyClass2 extends MyClass {
    function show(){
        echo $this->public;
        echo $this->protected;
        //echo $this->private; Gibt einen Fehler aus, da auf private nur in der eigenen Klasse zugegriffen werden darf.
    }
}

$o = new MyClass;
echo $o->public;
//echo $o->protected; Gibt einen Fehler aus, da nur innerhalb der Klasse zugegriffen werden darf.
//echo $o->private; Gibt einen Fehler aus, da nur innerhalb der Klasse zugegriffen werden darf.
echo $o->show();

$o = new MyClass2;
echo $o->public;
//echo $o->protected; Gibt einen Fehler aus, da nur innerhalb der Klasse zugegriffen werden darf.
//echo $o->private; Gibt einen Fehler aus, da nur innerhalb der Klasse zugegriffen werden darf.


/* Auf public deklarierte Elemente kann von überall her zugegriffen werden. Protected beschränkt den Zugang auf Elternklassen und abgeleitete Klassen (sowie die Klasse, die das Element definiert). Private grenzt die Sichtbarkeit einzig auf die Klasse ein, die das Element definiert. */