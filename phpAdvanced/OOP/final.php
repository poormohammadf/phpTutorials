<?php

class BaseClass {
    public function test() {
        echo "BaseClass::test() called<br>";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called<br>";
    }
}

class ChildClass extends BaseClass {
    public function test() {
        echo "ChildClass::test() called<br>";
    }
}

$ins=new ChildClass();
echo $ins->test().'<br >';
echo $ins->moreTesting();

?>