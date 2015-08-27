<?php

class MyClass {
    private $car = "skoda";
    public  $driver = "SRK";

    function __construct() {
        // Statements here run every time
        // an instance of the class
        // is created.
    }
    function myPublicFunction() {
        return("I'm visible!");
    }
    private function myPrivateFunction() {
        return("I'm  not visible outside!");
    }
}

class yourClass extends MyClass{
    function yourFunction(){
        echo parent::myPublicFunction();
        return("I'm inherited class");
    }
}
$ins=new yourClass();

echo $ins->myPublicFunction().'<br >';
echo $ins->yourFunction().'<br >';
echo $ins->driver;


?>