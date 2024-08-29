<?php
class Square {
    public $height;
    function __construct($height)
    {
        $this->height = $height;
    }
}

class Circle {
    public $radius;
    function __construct($radius)
    {
        $this->radius = $radius;
    }
}

class Triangle {
    public $height;
    public $bottomSide;
    function __construct($height, $bottomSide)
    {
        $this->height = $height;
        $this->bottomSide = $bottomSide;
    }
}

class CalculateArea {
    public function showArea($shape) {
        $area = 0;
        if ($shape instanceof Square) {
            $area = $shape->height * $shape->height;
            echo $area . "\n";
        }
        elseif ($shape instanceof Circle) {
            $area = round($shape->radius * $shape->radius * M_PI, 2);
            echo $area . "\n";
        }
        elseif ($shape instanceof Triangle) {
            $area = ($shape->height * $shape->bottomSide) / 2;
            echo $area . "\n";
        }
        else
        echo "Shape's not found";
    }
}

$calculateArea = new CalculateArea();
$square = new Square(2);
$triangle = new Triangle(3, 4);
$circle = new Circle(3);
$calculateArea->showArea($square);
$calculateArea->showArea($triangle);
$calculateArea->showArea($circle);