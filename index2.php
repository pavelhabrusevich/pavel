<!--
Реализовать четыре класса : Fruit, Banana, Potato, Plant
Plant родитель для Potato и Fruit, Fruit родитель для Banana
Реализовать методы
getWeight() - возвращает средний вес
getTaxonomy() - возвращает фрукт это или овощ
Реализовать конструктор в который передаются высота, ширина и длина и требуется реализовать функцию,
которая будет считать объём плода (будем считать, что они все параллелепипеды)
Также реализовать константы в классах для имени этого овобща или фрукта на Французском языке.
Использовать всю мощь public, private и protected свойств-->
<?php
class Plant{
    private $length, $width, $height;

    public function __construct($length, $width, $height)
    {
        echo "объём " . $size = $length * $width * $height . " единиц квадратных<br/>";
    }
}
//$obj = new Plant(2,3,4);

class Potato extends Plant {
    const POTATO = "pommes de terre";
    public function frenchName(){
        if (defined("self::POTATO")) echo self::POTATO;
    }
}
//$obj = new Potato(4,8,7);
//$obj -> frenchName();

class Fruit extends Plant {

}


class Banana extends Fruit{

}