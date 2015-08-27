<?php

class MyClass {
    const requiredMargin = 1.7;// without leading $
    function __construct($incomingValue) {
        // Statements here run every time
        // an instance of the class
        // is created.
    }

}

echo MyClass::requiredMargin;