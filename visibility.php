<?php

class Book{

    private $title;
    public $price;
    var $page;


    function displayTitle(){ //can be accessed anywhere
        return $this->title;
    }

    private function displayPrice(){ //can only be accessed inside the Book class
        return $this->price;
    }
}


?>