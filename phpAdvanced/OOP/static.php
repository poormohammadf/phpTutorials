<?php

class Foo
{
    public static function staticFunction(){
        return('static function');
    }
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}
print Foo::$my_static . "\n";
$foo = new Foo();
print $foo->staticValue() . '<br >';
print $foo->staticFunction().' -->with instant'.'<br >';
print Foo::staticFunction().' -->without instant';


?>