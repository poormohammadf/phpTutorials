<?php
require_once('class.php');

class Novel extends Books{
var $publisher;
    function setPublisher($par){
        $this->publisher = $par;
    }
    function getPublisher(){
        echo $this->publisher. "<br />";
    }
    function getPrice(){
        echo $this->price . "<br/>";
        return $this->price;
    }
    function getTitle(){
        echo $this->title . "<br/>";
        return $this->title;
    }
}