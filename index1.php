<?php
class First{
    public function getClassname(){
        return get_class($this) . "<br/>";
    }
    public function getLetter(){
        return "A" . "<br/>";
    }
}
class Second extends First{
    public function getLetter()
    {
        return "B" . "<br/>";
    }
}

$obj1 = new First();
echo $obj1->getClassname();
echo $obj1->getLetter();

$obj2 = new Second();
echo $obj2->getClassname();
echo $obj2->getLetter();

// изначально такой вариант был, но метод getClassname() не переопределяется в кдассе Second2.
//Соответственно возвращал имя класса First2. Почему так?
/*class First2{
    public function getClassname(){
        return __CLASS__ . "<br/>";
    }
    public function getLetter(){
        return "A" . "<br/>";
    }
}
class Second2 extends First2{
    public function getLetter()
    {
        return "B" . "<br/>";
    }
}
$obj3 = new First2();
echo $obj3->getClassname();
echo $obj3->getLetter();

$obj4 = new Second2();
echo $obj4->getClassname();
echo $obj4->getLetter();*/