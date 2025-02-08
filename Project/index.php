<?php
    class Cat{
        public $name;
        public $color;
        public $weight;
    }

$cat1 = new Cat();
$cat1->name = 'Barsik'; 
$cat1->color = 'grey';
$cat1->weight = 7;
var_dump($cat1);