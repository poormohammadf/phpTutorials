<?php

interface Mail {
    public function sendMail();
}

trait Read {
    public  function open(){
        // open() Definition goes here
    }
}

class Report implements Mail {

    use Read;
    public  function sendMail(){
        // sendMail() Definition goes here
    }
}