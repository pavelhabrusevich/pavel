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