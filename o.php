<?php

/**
 * Open-closed
 * Software entities should be open for expansion, but closed for modification
 * If we want to change the behavior of a class, we don't have to change the code.
 * 
 */

 interface SpaceInterface {
    public function calculate();
 }

 class Circle implements SpaceInterface {
    
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public  function calculate() {
        $area = $this->radius * $this->radius * pi();
        return $area;
    }
 }

 class Rectangle implements SpaceInterface {

    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculate() {
        $area = $this->height *  $this->width;
        return $area;
    }
 }

 class AreaCalculator {

    public function calculate($shape)
    {
        $area = $shape->calculate();
        return $area;
    }
}

$circle = new Circle(2);
$obj = new AreaCalculator();
echo $obj->calculate($circle);