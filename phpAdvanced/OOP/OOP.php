<?php
class  Books{
    /* Member variables */
    var $price;
    var $title;
    /* Member functions */
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

    /* Create objects */
    $physics = new Books;
    $maths = new Books;
    $chemistry = new Books;

    /* Call members */
    $physics->setTitle( "Physics for High School" );
    $chemistry->setTitle( "Advanced Chemistry" );
    $maths->setTitle( "Algebra" );

    $physics->setPrice( 10 );
    $chemistry->setPrice( 15 );
    $maths->setPrice( 7 );

    $physics->getTitle();
    $chemistry->getTitle();
    $maths->getTitle();
    $physics->getPrice();
    $chemistry->getPrice();
    $maths->getPrice();

?>