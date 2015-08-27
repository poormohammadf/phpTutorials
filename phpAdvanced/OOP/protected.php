<?php

class MyClass {
    protected $car = "skoda";
    public $driver = "SRK";

    function __construct() {
        // Statements here run every time
        // an instance of the class
        // is created.
    }
    function myPublicFunction() {
        return("I'm visible!");
    }
    protected function myProtectedFunction() {
        return("I'm  visible in child class!");
    }
}

class yourClass extends MyClass{
    function yourFunction(){
        echo parent::myProtectedFunction().'<br >';
        echo $this->car.'<br >';
        return("I'm inherited class");
    }
}
$ins=new yourClass();

echo $ins->myPublicFunction().'<br >';
echo $ins->yourFunction().'<br >';
