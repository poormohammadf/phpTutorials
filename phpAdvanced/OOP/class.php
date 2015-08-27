<?php

class  Books{
    /* Member variables */
    var $price;
    var $title;
    /* Member functions */
    function __construct( $par1, $par2 ){
        $this->title = $par1;
        $this->price = $par2;
    }
    function setPrice($par){
        $this->price = $par;
    }
    function getPrice(){
        echo $this->price ."<br/>";
    }
    function setTitle($par){
        $this->title = $par;
    }
    function getTitle(){
        echo $this->title ." <br/>";
    }
}


?>