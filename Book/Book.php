<?php

class Book{

    private $title;
    private $price;

    public function setTitle($title){ //set the value of the private $title
        $this->title = $title;
    }

    public function getTitle(){ //retrieve the data of the private $title
        return $this->title;
    }

    public function setValues($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

}

?>