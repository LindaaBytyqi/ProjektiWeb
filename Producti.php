<?php

class Producti {
    private $id;
    private $image;
    private $name;
    private $price;

    function __construct($id,$image,$name,$price){
            $this->id = $id;
            $this->image = $image;
            $this->name = $name;
            $this->price = $price;
    }

    function getId(){
        return $this->id;
    }
    function getImage(){
        return $this->image;
    }
    function getName(){
        return $this->name;
    }
    function getPrice(){
        return $this->price;
    }
}

?>
