<?php
/*Реализовать четыре класса : Fruit, Banana, Potato, Plant
Plant родитель для Potato и Fruit, Fruit родитель для Banana
Реализовать методы
getWeight() - возвращает средний вес
getTaxonomy() - возвращает фрукт это или овощ
Реализовать конструктор в который передаются высота, ширина и длина и требуется реализовать функцию,
которая будет считать объём плода (будем считать, что они все параллелепипеды)
Также реализовать константы в классах для имени этого овобща или фрукта на Французском языке.
Использовать всю мощь public, private и protected свойств
вопросы:
- можно ли константу запихнуть в конструктор?
 */
class Plant{
    private $length, $width, $height, $plantNameName;
    public $averageWeight = [];
    protected function __construct($length, $width, $height, $plantName)
    {
        echo "Объём самой большой " . $plantName . " " . $size = $length * $width * $height . " единиц.<br/>";
    }
    public function getWeight($plantName)
    {
        $allPlants = $this->averageWeight;
        if (!empty($allPlants)){
            return "Средний вес $plantName " . $allPlants = array_sum($allPlants)/count($allPlants) . ".<br/>";
        } else echo "Насыпь $plantName";
    }
    protected function getTaxonomy(){
        return "Овощ" . "<br/>";
    }
}

class Potato extends Plant {
    private const POTATO = "Pommes de terre\n";
    public function __construct($length, $width, $height, $plantName)
    {
        parent::__construct($length, $width, $height, $plantName);
    }
    public function getTaxonomy()
    {
        return parent::getTaxonomy();
    }
    public function potatoFrenchName()
    {
        if (defined("self::POTATO")){
            return self::POTATO . "<br/>";}
        else return "Переведи на французский" . "<br/>";
    }
}

class Fruit extends Plant{
    public function getTaxonomy()
    {
        return "Фрукт" . "<br/>";
    }
}

class Banana extends Fruit{
    private const BANANA = "La banane\n";
    public function __construct($length, $width, $height, $plantName)
    {
        parent::__construct($length, $width, $height, $plantName);
    }
    public function bananoFrenchName()
    {
        if (defined("self::BANANA")){
            return self::BANANA . "<br/>";}
        else return "Переведи на французский" . "<br/>";
        }
}
// Примеры использования классов:
// Объект "картоха"
$obj = new Potato(3,3,4, "картохи");
echo $obj->getTaxonomy();
echo $obj->potatoFrenchName();
$obj->averageWeight = [2,2,9];
echo $obj->getWeight("картохи");

// Объект "Банан"
$obj2 = new Banana(8,3,4, "бананчиков");
echo $obj2->getTaxonomy();
echo $obj2->bananoFrenchName();
$obj2->averageWeight = [2,4,3];
echo $obj2->getWeight("бананчиков");