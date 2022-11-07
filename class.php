<?php 
    class Car{
        //var is also public
        public $speed =10;
        public $position = 100;
        public $name;
        public $color = 'red';
        public $wheelType = '4 wheeler';
        function set_name($name){
            $this->name=$name;
        }
        function move(){
            echo "<br>The ".$this->name." is moving with speed ". $this->speed;
        }
    }


    $car = new Car;
    $car->set_name('car');
    echo "The speed of ". $car->name ." is: " . $car -> speed . '<br>';
    echo "The wheelType of car is: " . $car -> wheelType . '<br><br>';

    $car2 = new Car;
    $car2->set_name('car2');
    $car2->speed=200;
    echo $car2->speed . '<br>';
    echo $car2->color ;
    echo  $car2->move(); 
?>