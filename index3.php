<?php
/*
Реализовать класс Vegetable и внедрить его в текущую структуру. Подумать что может быть abstract, final.  */
abstract class Plant{
    private $length, $width, $height, $plantNameName;
    public $averageWeight = [];
    protected function __construct($length, $width, $height)
    {
    }
    protected function getWeight($plantName)
    {
    }
}

class Vegetable extends Plant{
    public function __construct($length, $width, $height, $plantName)
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
    public function getTaxonomy()
    {
        return "Овощ" . "<br/>";
    }
}

final class Potato extends Vegetable {
    private const POTATO = "Pommes de terre\n";
    public function potatoFrenchName()
    {
        if (defined("self::POTATO")){
            return self::POTATO . "<br/>";}
        else return "Переведи на французский" . "<br/>";
    }
}

class Fruit extends Plant{
    public function __construct($length, $width, $height, $plantName)
    {
        echo "Объём самой большой " . $plantName . " " . $size = $length * $width * $height . " единиц.<br/>";
    }
    public function getWeight($plantName)
    {
        $allPlants = $this->averageWeight;
        if (!empty($allPlants)){
            return "Средний вес $plantName " . $allPlants = array_sum($allPlants)/count($allPlants) . ".<br/>";
        } else echo "Нарви $plantName";
    }
    public function getTaxonomy()
    {
        return "Фрукт" . "<br/>";
    }
}

final class Banana extends Fruit{
    private const BANANA = "La banane\n";
    public function bananoFrenchName()
    {
        if (defined("self::BANANA")){
            return self::BANANA . "<br/>";}
        else return "Переведи на французский" . "<br/>";
    }
}

// Примеры использования классов:
// Объект "Картоха"
$obj = new Potato(3,3,4, "картохи");
echo $obj->getTaxonomy();
echo $obj->potatoFrenchName();
$obj->averageWeight = [3,2,9];
echo $obj->getWeight("картохи");

// Объект "Банан"
$obj2 = new Banana(8,3,4, "бананчиков");
echo $obj2->getTaxonomy();
echo $obj2->bananoFrenchName();
$obj2->averageWeight = [2,4,3];
echo $obj2->getWeight("бананчиков");