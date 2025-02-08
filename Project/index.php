<?php
    class Cat{
        public $name;
        public $color;
        public $weight;
        private $type;
        public $height;
        //function __construct(string $name, string $color, int $weight, string $height) {
        //    $this->name = $name;
        //    $this->color = $color;
        //    $this->weight = $weight;
        //    $this->height = $height;
        //}
        function setHeight(string $height) {
            $this->height = $height;
        }
        function getHeight() {
            return $this->height;
        }
    }

$cat1 = new Cat();
$cat1->name = 'Barsik'; 
$cat1->color = 'grey';
$cat1->weight = 7;
$cat1->height = setHeight("100");
$cat2->height = setHeight("120");
$cat2->name = 'Tishka';
$cat2->color = 'red';
$cat2->weight = 5;
//$cat3 = new Cat('Murka', 'black', 7, "80");
echo $cat1->getHeight().'<BR>';
echo $cat2->getHeight().'<BR>';
var_dump($cat1);