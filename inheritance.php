<?php
    class Animal{
        public $name;
        public $height;
        public $color;
        function __construct($name,$height,$color){
             $this->name = $name;
             $this->height=$height;
             $this->color = $color ;
        }
        public function move(){
            echo $this->name . " is moving <br>";
        }
        public function eat(){
            echo $this->name . " is eating <br>";
        }
       
    }

    $animals = new Animal("monkey","200cm","orange");
    $animals->move();
    //inheritance
    // class Dog extends animal{

    // }
    // $dog = new Dog;
?>