<?php

// class Animal{
// public $name = "elephant";
// }
// $obj1 = new Animal();
// echo $obj1->name;

// $obj2 = new Animal();
// echo $obj2->name;

// echo "<br>";

// class Car{
//     public $name;
//     public $color;
// }

// $car1 = new Car();
// $car1->name = "fortuner";
// $car1->color = "black";

// echo "Car name : ".$car1->name."<br> Car color : ".$car1->color."<br>";

// $car2 = new Car();
// $car2->name = "Dala";
// $car2->color = "Dark black";

// echo "Car name : ".$car2->name."<br> Car color : ".$car2->color;



//member function 

class Car{
    public $name;
    public $color;

    public function carDetail(){
        return "Car name : ".$this->name." , Car color : ".$this->color."<br>";
        //this ke through hum class ke andar name object ke properties aur methods ko access karte hain.
    }

    public function display(){
        echo "hello php classes & object ";
    }
}
   $car1 = new Car();
    $car1->name  = "Toyota";
    $car1->color  = "white";
echo $car1->carDetail();

  $car2 = new Car();
    $car2->name  = "civic";
    $car2->color  = "black";
echo $car2->display();

echo "<br>";
echo "<br>";

$object = new car();
$object->display();
?>