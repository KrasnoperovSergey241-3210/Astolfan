<?php
    class Cat{
        public $name;
        public $color;
        public $weight;
        private $type;
        public $height;
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
$cat1->height = setHeight("120");
$cat2->name = 'Tishka';
$cat1->color = 'red';
$cat1->weight = 5;
echo $cat1->getHeight().'<BR>';
echo $cat1->getHeight().'<BR>';
var_dump($cat1);